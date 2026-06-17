<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LogoutAdminOnPublicPages
{
    /**
     * Close administrator sessions when users leave the admin area.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($this->shouldLogout($request)) {
            Auth::guard('web')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $response;
    }

    private function shouldLogout($request): bool
    {
        if (! Auth::guard('web')->check()) {
            return false;
        }

        return ! $request->is('administrador*')
            && ! $request->is('uaslp*')
            && ! $request->is('callback');
    }
}
