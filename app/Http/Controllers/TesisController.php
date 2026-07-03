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
        $preview = $import->preview($validated['archivo_tesis']);

        if (empty($preview['rows'])) {
            $request->session()->forget('tesis_import_preview');

            return redirect()
                ->route('administrador.tesis.index')
                ->with('admin_status', [
                    'type' => 'info',
                    'message' => 'No se encontraron tesis validas para importar. Omitidas: ' . $preview['skipped'] . ', ocultas: ' . $preview['hidden'] . '.',
                ]);
        }

        $request->session()->put('tesis_import_preview', [
            'rows' => $preview['rows'],
            'skipped' => $preview['skipped'],
            'hidden' => $preview['hidden'],
            'summary' => $import->describeRows($preview['rows']),
        ]);

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'info',
                'message' => 'Revisa la previsualizacion de importacion antes de confirmar.',
            ]);
    }

    public function confirmImport(Request $request)
    {
        $preview = $request->session()->get('tesis_import_preview');

        if (empty($preview['rows'])) {
            return redirect()
                ->route('administrador.tesis.index')
                ->with('admin_status', [
                    'type' => 'info',
                    'message' => 'No hay una importacion pendiente por confirmar.',
                ]);
        }

        $import = new TesisImport();

        DB::transaction(function () use ($import, $preview): void {
            $import->importRows($preview['rows']);
        });

        $request->session()->forget('tesis_import_preview');

        if (! empty($import->revertActions)) {
            $request->session()->put('tesis_last_import_revert', $import->revertActions);
        } else {
            $request->session()->forget('tesis_last_import_revert');
        }

        return redirect()
            ->route('administrador.tesis.index')
            ->with('tesis_import_result', [
                'created' => $import->created,
                'updated' => $import->updated,
                'unchanged' => $import->unchanged,
                'skipped' => $preview['skipped'] ?? 0,
                'hidden' => $preview['hidden'] ?? 0,
            ]);
    }

    public function updateImportPreview(Request $request, int $index)
    {
        $preview = $request->session()->get('tesis_import_preview');

        if (! isset($preview['rows'][$index])) {
            return $this->missingImportPreviewRow();
        }

        $validator = Validator::make(
            $request->all(),
            $this->tesisRules('preview'),
            [],
            $this->tesisAttributes('preview')
        );

        if ($validator->fails()) {
            return redirect()
                ->route('administrador.tesis.index')
                ->withErrors($validator)
                ->withInput()
                ->with('tesis_import_edit_index', $index);
        }

        $preview['rows'][$index] = $this->mapValidatedData($validator->validated(), 'preview');
        $this->storeImportPreview($request, $preview);

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'success',
                'message' => 'La tesis se corrigio en la previsualizacion. Aun no se ha importado.',
            ]);
    }

    public function destroyImportPreview(Request $request, int $index)
    {
        $preview = $request->session()->get('tesis_import_preview');

        if (! isset($preview['rows'][$index])) {
            return $this->missingImportPreviewRow();
        }

        $alumno = $preview['rows'][$index]['alumno'] ?? 'seleccionada';
        unset($preview['rows'][$index]);
        $preview['rows'] = array_values($preview['rows']);

        if (empty($preview['rows'])) {
            $request->session()->forget('tesis_import_preview');

            return redirect()
                ->route('administrador.tesis.index')
                ->with('admin_status', [
                    'type' => 'info',
                    'message' => 'Se quito la ultima tesis. La importacion pendiente quedo vacia.',
                ]);
        }

        $this->storeImportPreview($request, $preview);

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'success',
                'message' => 'Se quito de la importacion pendiente la tesis de ' . $alumno . '.',
            ]);
    }

    public function cancelImport(Request $request)
    {
        $request->session()->forget('tesis_import_preview');

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'info',
                'message' => 'Importacion cancelada. No se guardo ningun cambio.',
            ]);
    }

    private function storeImportPreview(Request $request, array $preview): void
    {
        $preview['summary'] = (new TesisImport())->describeRows($preview['rows']);
        $request->session()->put('tesis_import_preview', $preview);
    }

    private function missingImportPreviewRow()
    {
        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'info',
                'message' => 'Esa tesis ya no esta disponible en la previsualizacion.',
            ]);
    }

    public function revertImport(Request $request)
    {
        $actions = $request->session()->get('tesis_last_import_revert', []);

        if (empty($actions)) {
            return redirect()
                ->route('administrador.tesis.index')
                ->with('admin_status', [
                    'type' => 'info',
                    'message' => 'No hay una importacion reciente para revertir.',
                ]);
        }

        $deleted = 0;
        $restored = 0;

        DB::transaction(function () use ($actions, &$deleted, &$restored): void {
            foreach (array_reverse($actions) as $action) {
                $tesis = Tesis::find($action['id'] ?? null);

                if (! $tesis) {
                    continue;
                }

                if (($action['action'] ?? null) === 'delete') {
                    $tesis->delete();
                    $deleted++;
                    continue;
                }

                if (($action['action'] ?? null) === 'restore' && ! empty($action['data'])) {
                    $tesis->fill($action['data']);
                    $tesis->save();
                    $restored++;
                }
            }
        });

        $request->session()->forget('tesis_last_import_revert');

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'success',
                'message' => "Importacion revertida. Eliminadas: {$deleted}, restauradas: {$restored}.",
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

    public function destroy(Request $request, Tesis $tesis)
    {
        $alumno = $tesis->alumno;
        $tema = $tesis->tema;
        $deletedTesis = $tesis->only($this->deletedTesisColumns());

        $tesis->delete();
        $request->session()->put('tesis_last_delete_revert', $deletedTesis);

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'success',
                'message' => 'Se elimino la tesis de ' . $alumno . ': ' . $tema,
                'revert_delete' => true,
            ]);
    }

    public function revertDelete(Request $request)
    {
        $deletedTesis = $request->session()->get('tesis_last_delete_revert');

        if (empty($deletedTesis)) {
            return redirect()
                ->route('administrador.tesis.index')
                ->with('admin_status', [
                    'type' => 'info',
                    'message' => 'No hay una tesis eliminada recientemente para restaurar.',
                ]);
        }

        if (! empty($deletedTesis['id']) && Tesis::find($deletedTesis['id'])) {
            return redirect()
                ->route('administrador.tesis.index')
                ->with('admin_status', [
                    'type' => 'info',
                    'message' => 'No se pudo restaurar porque ya existe una tesis con ese identificador.',
                ]);
        }

        $tesis = new Tesis();
        $tesis->forceFill($deletedTesis);
        $tesis->timestamps = false;
        $tesis->save();

        $request->session()->forget('tesis_last_delete_revert');

        return redirect()
            ->route('administrador.tesis.index')
            ->with('admin_status', [
                'type' => 'success',
                'message' => 'Se restauro la tesis de ' . $tesis->alumno . ': ' . $tesis->tema,
            ]);
    }

    private function renderTesisPage(Request $request, string $view, bool $admin)
    {
        $search = $request->input('search');

        $tesis = Tesis::buscar($search)
            ->ordenarPorRelevancia($search)
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

    private function deletedTesisColumns(): array
    {
        return [
            'id',
            'cve_uaslp',
            'programa',
            'area',
            'anio',
            'alumno',
            'tema',
            'director',
            'tesisDirector',
            'url',
            'created_at',
            'updated_at',
        ];
    }
}
