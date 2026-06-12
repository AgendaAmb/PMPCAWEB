<?php

namespace App\Http\Controllers;

use App\Imports\TesisImport;
use App\Models\Tesis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TesisController extends Controller
{
    public function index(Request $request)
    {
        return $this->renderTesisPage($request, 'tesis', false);
    }

    public function admin(Request $request)
    {
        return $this->renderTesisPage($request, 'administrador', true);
    }

    public function import(Request $request)
    {
        $validated = $request->validate([
            'archivo_tesis' => ['required', 'file', 'mimes:xlsx,xls,csv', 'max:10240'],
        ]);

        $import = new TesisImport();

        DB::transaction(function () use ($import, $validated): void {
            $import->import($validated['archivo_tesis']);
        });

        return redirect()
            ->route('administrador.tesis.index')
            ->with('tesis_import_result', [
                'created' => $import->created,
                'updated' => $import->updated,
                'unchanged' => $import->unchanged,
                'skipped' => $import->skipped,
                'hidden' => $import->hidden,
            ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            $this->tesisRules('create'),
            [],
            $this->tesisAttributes('create')
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('admin_open_panel', 'create');
        }

        $tesis = Tesis::create($this->mapValidatedData($validator->validated(), 'create'));

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'success',
                'message' => 'La tesis de ' . $tesis->alumno . ' se agrego correctamente.',
            ]);
    }

    public function update(Request $request, Tesis $tesis)
    {
        $validator = Validator::make(
            $request->all(),
            $this->tesisRules('edit'),
            [],
            $this->tesisAttributes('edit')
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('admin_open_panel', 'edit');
        }

        $tesis->fill($this->mapValidatedData($validator->validated(), 'edit'));

        if (! $tesis->isDirty()) {
            return redirect()
                ->route('administrador.tesis.index')
                ->with('admin_status', [
                    'type' => 'info',
                    'message' => 'No hubo cambios para guardar en la tesis seleccionada.',
                ]);
        }

        $tesis->save();

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'success',
                'message' => 'La tesis de ' . $tesis->alumno . ' se actualizo correctamente.',
            ]);
    }

    public function destroy(Tesis $tesis)
    {
        $alumno = $tesis->alumno;
        $tema = $tesis->tema;

        $tesis->delete();

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'success',
                'message' => 'Se elimino la tesis de ' . $alumno . ': ' . $tema,
            ]);
    }

    private function renderTesisPage(Request $request, string $view, bool $admin)
    {
        $search = $request->input('search');

        $tesis = Tesis::buscar($search)
            ->orderBy('programa')
            ->orderBy('area')
            ->orderByDesc('anio')
            ->orderBy('alumno')
            ->orderBy('id')
            ->get();

        $tesisPorPrograma = $tesis
            ->groupBy(function (Tesis $tesis): string {
                return $tesis->programa ?: 'Sin programa';
            })
            ->map(function ($tesisPrograma) {
                return $tesisPrograma->groupBy(function (Tesis $tesis): string {
                    return $tesis->area ?: 'Sin area';
                });
            });

        $programas = Tesis::query()
            ->whereNotNull('programa')
            ->where('programa', '!=', '')
            ->distinct()
            ->orderBy('programa')
            ->pluck('programa');

        $areas = Tesis::query()
            ->whereNotNull('area')
            ->where('area', '!=', '')
            ->distinct()
            ->orderBy('area')
            ->pluck('area');

        return view($view, compact('tesisPorPrograma', 'search', 'programas', 'areas', 'admin'));
    }

    private function tesisRules(string $prefix): array
    {
        return [
            "{$prefix}_cve_uaslp" => ['nullable', 'string', 'max:255'],
            "{$prefix}_programa" => ['required', 'string', 'max:255'],
            "{$prefix}_area" => ['nullable', 'string', 'max:255'],
            "{$prefix}_anio" => ['required', 'integer', 'min:' . Tesis::MIN_YEAR, 'max:' . (now()->year + 1)],
            "{$prefix}_alumno" => ['required', 'string', 'max:255'],
            "{$prefix}_tema" => ['required', 'string'],
            "{$prefix}_director" => ['required', 'string', 'max:255'],
            "{$prefix}_url" => ['nullable', 'url', 'max:2000'],
        ];
    }

    private function tesisAttributes(string $prefix): array
    {
        return [
            "{$prefix}_cve_uaslp" => 'clave UASLP',
            "{$prefix}_programa" => 'programa',
            "{$prefix}_area" => 'area',
            "{$prefix}_anio" => 'año',
            "{$prefix}_alumno" => 'nombre del alumno',
            "{$prefix}_tema" => 'titulo de la tesis',
            "{$prefix}_director" => 'director de tesis',
            "{$prefix}_url" => 'enlace',
        ];
    }

    private function mapValidatedData(array $validated, string $prefix): array
    {
        $director = $validated["{$prefix}_director"];
        $area = trim((string) ($validated["{$prefix}_area"] ?? ''));
        $url = trim((string) ($validated["{$prefix}_url"] ?? ''));

        return [
            'cve_uaslp' => $validated["{$prefix}_cve_uaslp"] ?? null,
            'programa' => $validated["{$prefix}_programa"],
            'area' => $area !== '' ? $area : null,
            'anio' => $validated["{$prefix}_anio"],
            'alumno' => $validated["{$prefix}_alumno"],
            'tema' => $validated["{$prefix}_tema"],
            'director' => $director,
            'tesisDirector' => $director,
            'url' => $url !== '' ? $url : null,
        ];
    }
}
