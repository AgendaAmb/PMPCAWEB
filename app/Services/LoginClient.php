<?php

namespace App\Services;

use App\Models\UaslpSession;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use SoapClient;
use Throwable;

class LoginClient
{
    private $soapClient = null;
    private $missingConfig = [];
    private $serviceUrl;
    private $clientId;
    private $returnUrl;
    private $formUrl;

    public function __construct()
    {
        $this->serviceUrl = config('uaslp.service_url');
        $this->clientId = config('uaslp.client_id');
        $this->returnUrl = config('uaslp.return_url');
        $this->formUrl = config('uaslp.form_url');

        $requiredConfig = [
            'UASLP_SERVICE_URL' => $this->serviceUrl,
            'UASLP_CLIENT_ID' => $this->clientId,
            'UASLP_RETURN_URL' => $this->returnUrl,
            'UASLP_FORM_URL' => $this->formUrl,
        ];

        $this->missingConfig = collect($requiredConfig)
            ->filter(function ($value): bool {
                return blank($value);
            })
            ->keys()
            ->all();

        if ($this->missingConfig !== [] || ! class_exists(SoapClient::class)) {
            return;
        }

        try {
            $this->soapClient = new SoapClient($this->serviceUrl, [
                'soap_version' => SOAP_1_1,
                'exceptions' => true,
                'stream_context' => stream_context_create([
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ]),
            ]);
        } catch (Throwable $exception) {
            Log::error('No se pudo inicializar SOAP UASLP: ' . $exception->getMessage());
        }
    }

    public function autenticar(Request $request, string $redirectRoute = 'administrador.tesis.index'): RedirectResponse
    {
        if ($this->missingConfig !== []) {
            return $this->loginRedirect('Falta configurar el acceso UASLP en .env: ' . implode(', ', $this->missingConfig));
        }

        if (! class_exists(SoapClient::class)) {
            return $this->loginRedirect('El servidor necesita la extension PHP SOAP para usar el acceso UASLP.');
        }

        if ($this->soapClient === null) {
            return $this->loginRedirect('No se pudo inicializar el cliente SOAP de UASLP.');
        }

        if ($request->filled('Ticket')) {
            return $this->verificarTicket($request, $redirectRoute);
        }

        return $this->crearNuevoTicket();
    }

    private function crearNuevoTicket(): RedirectResponse
    {
        try {
            $respuesta = $this->soapClient->NuevaSesionConUrlRetorno([
                'idAplicacion' => $this->clientId,
                'ReturnUrl' => $this->returnUrl,
            ]);

            $xmlObject = simplexml_load_string($respuesta->NuevaSesionConUrlRetornoResult);
            $ticket = (string) $xmlObject['Ticket'];
            $sessionId = (string) $xmlObject['ClaveSesion'];

            if ($ticket === '' || $sessionId === '') {
                return $this->loginRedirect('UASLP no regreso un ticket valido.');
            }

            UaslpSession::createSession($ticket, $sessionId);

            return redirect($this->formUrl . '?Ticket=' . urlencode($ticket));
        } catch (Throwable $exception) {
            Log::error('Error SOAP UASLP al crear sesion: ' . $exception->getMessage());

            return $this->loginRedirect('Error al conectar con el servidor de la UASLP.');
        }
    }

    private function verificarTicket(Request $request, string $redirectRoute): RedirectResponse
    {
        try {
            $ticket = (string) $request->query('Ticket');
            $clave = UaslpSession::findAndValidateSession($ticket);

            if ($clave === null) {
                return $this->loginRedirect('Sesion UASLP expirada.');
            }

            $parametros = ['Ticket' => $ticket, 'ClaveSesion' => $clave];
            $respuesta = $this->soapClient->ValidaCliente($parametros);

            if ((int) $respuesta->ValidaClienteResult !== 1) {
                return $this->loginRedirect('Validacion UASLP fallida.');
            }

            $estadoRespuesta = $this->soapClient->EstadoUsuario($parametros);
            $uaslpUser = $this->parseUaslpUser((string) $estadoRespuesta->EstadoUsuarioResult);

            if ($uaslpUser['usuario'] === null) {
                return $this->loginRedirect('UASLP no regreso datos del usuario.');
            }

            $user = $this->findOrCreateLocalUser($uaslpUser);

            if ($user === null) {
                return $this->loginRedirect('Cuenta UASLP valida, pero no estas dado de alta en este portal.');
            }

            if (! $user->canAccessAdminPanel()) {
                return $this->loginRedirect('Cuenta UASLP valida, pero tu acceso al modulo de tesis esta bloqueado.');
            }

            $user->forceFill(['uaslp_authenticated_at' => now()])->save();

            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended(route($redirectRoute));
        } catch (Throwable $exception) {
            Log::error('Error verificacion UASLP: ' . $exception->getMessage());

            return $this->loginRedirect('Error al validar ticket con UASLP.');
        }
    }

    private function parseUaslpUser(string $xml): array
    {
        $xmlObject = simplexml_load_string($xml);

        if ($xmlObject === false) {
            return ['email' => null, 'rpe' => null, 'usuario' => null, 'name' => null];
        }

        $usuario = $this->xmlValue($xmlObject, 'Usuario');
        $email = $this->normalizeEmail($this->xmlValue($xmlObject, 'Email'));
        $clave = $this->xmlValue($xmlObject, 'Clave') ?? $usuario;

        return [
            'email' => $email,
            'rpe' => $this->normalizeUaslpKey($clave),
            'usuario' => $usuario !== null ? strtolower($usuario) : null,
            'name' => $this->xmlValue($xmlObject, 'Nombre') ?? $email ?? $usuario,
        ];
    }

    private function xmlValue(\SimpleXMLElement $xmlObject, string $key): ?string
    {
        $value = (string) ($xmlObject[$key] ?? '');

        if ($value === '' && isset($xmlObject->{$key})) {
            $value = (string) $xmlObject->{$key};
        }

        $value = trim($value);

        return $value !== '' ? $value : null;
    }

    private function findOrCreateLocalUser(array $uaslpUser): ?User
    {
        $user = User::query()
            ->when($uaslpUser['email'], function ($query, string $email) {
                return $query->orWhereRaw('LOWER(email) = ?', [$email]);
            })
            ->when($uaslpUser['rpe'], function ($query, string $rpe) {
                return $query->orWhere('rpe', $rpe);
            })
            ->when($uaslpUser['usuario'], function ($query, string $usuario) {
                return $query->orWhereRaw('LOWER(uaslp_username) = ?', [$usuario]);
            })
            ->first();

        if ($user !== null) {
            return $this->syncUaslpIdentity($user, $uaslpUser);
        }

        if (! config('uaslp.auto_create_users')) {
            return null;
        }

        return User::create([
            'name' => $uaslpUser['name'] ?? $uaslpUser['email'] ?? $uaslpUser['usuario'],
            'username' => $this->uniqueUsername($uaslpUser),
            'email' => $uaslpUser['email'] ?? $uaslpUser['usuario'] . '@uaslp.mx',
            'rpe' => $uaslpUser['rpe'],
            'uaslp_username' => $uaslpUser['usuario'],
            'email_verified_at' => now(),
            'role' => User::ROLE_CAPTURISTA,
            'is_active' => false,
            'password' => Str::random(64),
        ]);
    }

    private function syncUaslpIdentity(User $user, array $uaslpUser): User
    {
        $user->forceFill([
            'rpe' => $user->rpe ?? $uaslpUser['rpe'],
            'uaslp_username' => $user->uaslp_username ?? $uaslpUser['usuario'],
            'email_verified_at' => $user->email_verified_at ?? now(),
        ])->save();

        return $user;
    }

    private function uniqueUsername(array $uaslpUser): string
    {
        $base = Str::of($uaslpUser['usuario'] ?? $uaslpUser['email'] ?? 'uaslp')
            ->before('@')
            ->lower()
            ->replaceMatches('/[^a-z0-9._-]/', '')
            ->trim('._-')
            ->value();

        $base = $base !== '' ? $base : 'uaslp';
        $username = $base;
        $counter = 1;

        while (User::where('username', $username)->exists()) {
            $username = $base . $counter;
            $counter++;
        }

        return $username;
    }

    private function normalizeEmail(?string $email): ?string
    {
        return $email !== null ? strtolower(trim($email)) : null;
    }

    private function normalizeUaslpKey(?string $key): ?string
    {
        if ($key === null) {
            return null;
        }

        $normalized = ltrim(strtolower(trim($key)), 'a');

        return $normalized !== '' ? $normalized : null;
    }

    private function loginRedirect(string $message): RedirectResponse
    {
        return redirect()
            ->route('login')
            ->withErrors(['login' => $message]);
    }
}
