@extends('base')

@section('maincontent')
    @php
        $currentUser = auth()->user();
        $canCaptureTesis = $currentUser && $currentUser->canCaptureTesis();
        $canEditTesis = $currentUser && $currentUser->canEditTesis();
        $canImportTesis = $currentUser && $currentUser->canImportTesis();
        $canDeleteTesis = $currentUser && $currentUser->canDeleteTesis();
        $canUseTesisTools = $canCaptureTesis || $canEditTesis || $canDeleteTesis;
        $hasTesisSearch = ! empty($search);
        $minTesisYear = \App\Models\Tesis::MIN_YEAR;
        $initialEdit = null;
        $importPreview = session('tesis_import_preview');
        $importEditIndex = session('tesis_import_edit_index');
        $importStatusLabels = [
            'created' => 'Nueva',
            'updated' => 'Actualiza',
            'unchanged' => 'Sin cambios',
        ];

        if (is_numeric(old('edit_id'))) {
            $initialEdit = [
                'id' => old('edit_id'),
                'updateUrl' => route('administrador.tesis.update', ['tesis' => old('edit_id')]),
                'cveUaslp' => old('edit_cve_uaslp'),
                'programa' => old('edit_programa'),
                'area' => old('edit_area'),
                'anio' => old('edit_anio'),
                'alumno' => old('edit_alumno'),
                'tema' => old('edit_tema'),
                'director' => old('edit_director'),
                'url' => old('edit_url'),
            ];
        }
    @endphp

    <script>
        window.PMPCA_ADMIN = {
            openPanel: @json(session('admin_open_panel', 'create')),
            initialEdit: @json($initialEdit),
            programas: @json($programas->values()),
            areas: @json($areas->values()),
        };
    </script>

    <main class="tesis-page tesis-page--admin">
        <section class="tesis-hero">
            <div class="tesis-hero__content">
                <div>
                    <p class="tesis-hero__eyebrow">Acceso protegido</p>
                    <h1>{{ mb_strtoupper($currentUser->roleLabel()) }}</h1>
                    <p>
                        Administra los registros de tesis del PMPCA, carga archivos Excel y actualiza la información
                        publicada en la página pública.
                    </p>
                </div>

                <form class="tesis-search" action="{{ route('administrador.tesis.index') }}" method="GET">
                    <label for="tesis-search-input">Buscar tesis</label>
                    <div class="tesis-search__box">
                        <input type="text" id="tesis-search-input" name="search" value="{{ $search ?? '' }}"
                            placeholder="Año, alumno, director, área o título">
                        <button type="submit">Buscar</button>
                    </div>
                    @if (! empty($search))
                        <a class="tesis-search__clear" href="{{ route('administrador.tesis.index') }}">Limpiar búsqueda</a>
                    @endif
                </form>
            </div>
        </section>

        <section class="tesis-content">
            <div class="tesis-admin-session">
                <div>
                    <p>Sesión activa</p>
                    <h2>{{ $currentUser->name }}</h2>
                    <span>{{ $currentUser->roleLabel() }} · {{ $currentUser->email }}</span>
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="admin-button admin-button--ghost" type="submit">Cerrar sesión</button>
                </form>
            </div>

            @if (session('tesis_import_result'))
                <div class="tesis-alert tesis-alert--success">
                    <span>
                        Archivo importado. Nuevas: {{ session('tesis_import_result.created') }},
                        actualizadas: {{ session('tesis_import_result.updated') }},
                        sin cambios: {{ session('tesis_import_result.unchanged') }},
                        omitidas: {{ session('tesis_import_result.skipped') }},
                        ocultas: {{ session('tesis_import_result.hidden') }}.
                    </span>

                    @if (session()->has('tesis_last_import_revert'))
                        <form action="{{ route('administrador.import.revert') }}" method="POST">
                            @csrf
                            <button class="admin-button admin-button--ghost" type="submit">
                                Revertir ultima importacion
                            </button>
                        </form>
                    @endif
                </div>
            @elseif (session()->has('tesis_last_import_revert'))
                <div class="tesis-alert tesis-alert--info">
                    <span>Hay una importacion reciente que todavia puedes revertir.</span>

                    <form action="{{ route('administrador.import.revert') }}" method="POST">
                        @csrf
                        <button class="admin-button admin-button--ghost" type="submit">
                            Revertir ultima importacion
                        </button>
                    </form>
                </div>
            @endif

            @if (session('admin_status'))
                <div class="tesis-alert {{ session('admin_status.type') === 'info' ? 'tesis-alert--info' : 'tesis-alert--success' }}">
                    <span>{{ session('admin_status.message') }}</span>

                    @if (session('admin_status.revert_delete') && session()->has('tesis_last_delete_revert'))
                        <form action="{{ route('administrador.tesis.revert-delete') }}" method="POST">
                            @csrf
                            <button class="admin-button admin-button--ghost" type="submit">
                                Revertir eliminacion
                            </button>
                        </form>
                    @endif
                </div>
            @endif

            @if ($errors->any())
                <div class="tesis-alert tesis-alert--error">{{ $errors->first() }}</div>
            @endif

            @if ($importPreview)
                <section class="tesis-import-preview">
                    <div class="tesis-import-preview__header">
                        <div>
                            <p>Previsualización de importación</p>
                            <h2>Revisa antes de guardar</h2>
                            <span>
                                Nuevas: {{ $importPreview['summary']['created'] ?? 0 }} ·
                                actualizaciones: {{ $importPreview['summary']['updated'] ?? 0 }} ·
                                sin cambios: {{ $importPreview['summary']['unchanged'] ?? 0 }} ·
                                omitidas: {{ $importPreview['skipped'] ?? 0 }} ·
                                ocultas: {{ $importPreview['hidden'] ?? 0 }}
                            </span>
                        </div>

                        <div class="tesis-import-preview__actions">
                            <form action="{{ route('administrador.import.cancel') }}" method="POST">
                                @csrf
                                <button class="admin-button admin-button--ghost" type="submit">Cancelar</button>
                            </form>
                            <form action="{{ route('administrador.import.confirm') }}" method="POST">
                                @csrf
                                <button class="admin-button admin-button--primary" type="submit">Confirmar importación</button>
                            </form>
                        </div>
                    </div>

                    <div class="tesis-import-preview__groups">
                        @foreach (($importPreview['summary']['byDestination'] ?? []) as $destination)
                            <article class="tesis-import-preview__group">
                                <div class="tesis-import-preview__destination">
                                    <span>Se agrega a esta área</span>
                                    <h3>{{ $destination['area'] }}</h3>
                                    <p>{{ $destination['programa'] }}</p>
                                </div>

                                <div class="tesis-import-preview__table-wrap">
                                    <table class="tesis-import-preview__table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Estado</th>
                                                <th>Año</th>
                                                <th>Alumno</th>
                                                <th>Título de tesis</th>
                                                <th>Director</th>
                                                <th>URL</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($destination['rows'] as $row)
                                                @php
                                                    $previewIndex = $row['preview_index'];
                                                    $isEditingPreviewRow = (string) $importEditIndex === (string) $previewIndex;
                                                    $previewEditId = 'tesis-import-edit-' . $previewIndex;
                                                @endphp
                                                <tr>
                                                    <td>{{ $row['preview_number'] }}</td>
                                                    <td>
                                                        <span class="tesis-import-preview__badge tesis-import-preview__badge--{{ $row['status'] }}">
                                                            {{ $importStatusLabels[$row['status']] ?? $row['status'] }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $row['anio'] }}</td>
                                                    <td>{{ $row['alumno'] }}</td>
                                                    <td>{{ $row['tema'] }}</td>
                                                    <td>{{ $row['director'] }}</td>
                                                    <td>
                                                        @if (! empty($row['url']))
                                                            <a href="{{ \Illuminate\Support\Str::startsWith($row['url'], ['http://', 'https://']) ? $row['url'] : url($row['url']) }}"
                                                                target="_blank" rel="noopener noreferrer">
                                                                Abrir
                                                            </a>
                                                        @else
                                                            Sin URL
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="tesis-import-preview__row-actions">
                                                            <button class="admin-table__button" type="button"
                                                                aria-expanded="{{ $isEditingPreviewRow ? 'true' : 'false' }}"
                                                                aria-controls="{{ $previewEditId }}"
                                                                data-import-edit-toggle="{{ $previewEditId }}">
                                                                Editar
                                                            </button>
                                                            <form action="{{ route('administrador.import.preview.destroy', ['index' => $previewIndex]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="admin-table__button admin-table__button--delete"
                                                                    type="submit">
                                                                    Quitar
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tesis-import-preview__edit-row" id="{{ $previewEditId }}"
                                                    @if (! $isEditingPreviewRow) hidden @endif>
                                                    <td colspan="8">
                                                        <form class="tesis-import-preview__edit-form"
                                                            action="{{ route('administrador.import.preview.update', ['index' => $previewIndex]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="admin-field">
                                                                <label for="preview-cve-{{ $previewIndex }}">Clave UASLP</label>
                                                                <input id="preview-cve-{{ $previewIndex }}" name="preview_cve_uaslp"
                                                                    type="text" maxlength="255"
                                                                    value="{{ $isEditingPreviewRow ? old('preview_cve_uaslp', $row['cve_uaslp'] ?? '') : ($row['cve_uaslp'] ?? '') }}">
                                                            </div>

                                                            <div class="admin-field">
                                                                <label for="preview-programa-{{ $previewIndex }}">Programa</label>
                                                                <input id="preview-programa-{{ $previewIndex }}" name="preview_programa"
                                                                    type="text" maxlength="255" required data-admin-programa-input
                                                                    value="{{ $isEditingPreviewRow ? old('preview_programa', $row['programa']) : $row['programa'] }}">
                                                            </div>

                                                            <div class="admin-field">
                                                                <label for="preview-area-{{ $previewIndex }}">Área</label>
                                                                <input id="preview-area-{{ $previewIndex }}" name="preview_area"
                                                                    type="text" maxlength="255" data-admin-area-input
                                                                    value="{{ $isEditingPreviewRow ? old('preview_area', $row['area'] ?? '') : ($row['area'] ?? '') }}">
                                                            </div>

                                                            <div class="admin-field">
                                                                <label for="preview-anio-{{ $previewIndex }}">Año</label>
                                                                <input id="preview-anio-{{ $previewIndex }}" name="preview_anio"
                                                                    type="number" min="{{ $minTesisYear }}" max="{{ now()->year + 1 }}"
                                                                    required
                                                                    value="{{ $isEditingPreviewRow ? old('preview_anio', $row['anio']) : $row['anio'] }}">
                                                            </div>

                                                            <div class="admin-field">
                                                                <label for="preview-alumno-{{ $previewIndex }}">Alumno</label>
                                                                <input id="preview-alumno-{{ $previewIndex }}" name="preview_alumno"
                                                                    type="text" maxlength="255" required
                                                                    value="{{ $isEditingPreviewRow ? old('preview_alumno', $row['alumno']) : $row['alumno'] }}">
                                                            </div>

                                                            <div class="admin-field">
                                                                <label for="preview-director-{{ $previewIndex }}">Director</label>
                                                                <input id="preview-director-{{ $previewIndex }}" name="preview_director"
                                                                    type="text" maxlength="255" required
                                                                    value="{{ $isEditingPreviewRow ? old('preview_director', $row['director']) : $row['director'] }}">
                                                            </div>

                                                            <div class="admin-field admin-field--full">
                                                                <label for="preview-tema-{{ $previewIndex }}">Título de tesis</label>
                                                                <textarea id="preview-tema-{{ $previewIndex }}" name="preview_tema"
                                                                    rows="3" required>{{ $isEditingPreviewRow ? old('preview_tema', $row['tema']) : $row['tema'] }}</textarea>
                                                            </div>

                                                            <div class="admin-field admin-field--full">
                                                                <label for="preview-url-{{ $previewIndex }}">URL</label>
                                                                <input id="preview-url-{{ $previewIndex }}" name="preview_url"
                                                                    type="url" maxlength="2000"
                                                                    value="{{ $isEditingPreviewRow ? old('preview_url', $row['url'] ?? '') : ($row['url'] ?? '') }}">
                                                            </div>

                                                            <div class="tesis-import-preview__edit-actions">
                                                                <button class="admin-button admin-button--ghost" type="button"
                                                                    data-import-edit-close="{{ $previewEditId }}">
                                                                    Cerrar
                                                                </button>
                                                                <button class="admin-button admin-button--primary" type="submit">
                                                                    Guardar corrección
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endif

            @if ($canImportTesis || $canUseTesisTools)
                <section class="admin-workspace" id="admin-gestion">
                    <button class="tesis-category__toggle" type="button" aria-expanded="true"
                        aria-controls="admin-workspace-panels" data-tesis-toggle data-admin-workspace-toggle>
                        <span>Herramientas de administración</span>
                        <span class="tesis-category__icon">&#8963;</span>
                    </button>

                    <div class="admin-workspace__content" id="admin-workspace-panels">
                        @if ($canImportTesis)
                            <form class="tesis-import" action="{{ route('administrador.import') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <label for="archivo_tesis">Cargar Excel</label>
                                <div class="tesis-import__box">
                                    <input id="archivo_tesis" type="file" name="archivo_tesis" accept=".xlsx,.xls,.csv" required>
                                    <button class="admin-button admin-button--primary" type="submit">Importar</button>
                                </div>
                                <p>
                                    Encabezados sugeridos: Programa, Área, Año, Nombre completo, Título de tesis,
                                    Director de tesis, URL.
                                </p>
                            </form>
                        @endif

                        <div class="admin-toolbar">
                            @if ($canCaptureTesis)
                                <button type="button" data-admin-panel-button="create">Agregar tesis</button>
                            @endif
                            @if ($canEditTesis)
                                <button type="button" data-admin-panel-button="edit">Modificar tesis</button>
                            @endif
                            @if ($canDeleteTesis)
                                <button type="button" data-admin-panel-button="delete">Eliminar tesis</button>
                            @endif
                        </div>

                        <div class="admin-cards">
                            @if ($canCaptureTesis)
                                <section class="admin-card" data-admin-panel="create">
                                    <h3>Registrar una tesis</h3>
                                    @include('partials.tesis-form', [
                                        'mode' => 'create',
                                        'action' => route('administrador.tesis.store'),
                                        'method' => 'POST',
                                        'submit' => 'Guardar tesis',
                                        'minTesisYear' => $minTesisYear,
                                    ])
                                </section>
                            @endif

                            @if ($canEditTesis)
                                <section class="admin-card" data-admin-panel="edit">
                                    <h3>Modificar una tesis existente</h3>
                                    <p class="admin-card__helper" data-admin-edit-summary>
                                        Selecciona una tesis desde la tabla y usa el botón "Editar".
                                    </p>
                                    @include('partials.tesis-form', [
                                        'mode' => 'edit',
                                        'action' => '#',
                                        'method' => 'PUT',
                                        'submit' => 'Guardar cambios',
                                        'minTesisYear' => $minTesisYear,
                                        'formAttrs' => 'data-admin-edit-form',
                                        'disabledSubmit' => true,
                                    ])
                                </section>
                            @endif

                            @if ($canDeleteTesis)
                                <section class="admin-card" data-admin-panel="delete">
                                    <h3>Eliminar una tesis</h3>
                                    <p class="admin-card__helper" data-admin-delete-summary>
                                        Selecciona una tesis desde la tabla y confirma la eliminación.
                                    </p>
                                    <form action="#" method="POST" data-admin-delete-form>
                                        @csrf
                                        @method('DELETE')
                                        <button class="admin-button admin-button--danger" type="submit"
                                            data-admin-delete-submit disabled>
                                            Confirmar eliminación
                                        </button>
                                    </form>
                                </section>
                            @endif
                        </div>
                    </div>
                </section>
            @endif

            @forelse ($tesisPorPrograma as $programa => $areas)
                <div class="tesis-program">
                    <div class="tesis-program__header">
                        <p>Programa académico</p>
                        <h2>{{ $programa }}</h2>
                    </div>

                    @foreach ($areas as $area => $tesisArea)
                        @php
                            $areaId = 'admin-tesis-area-' . \Illuminate\Support\Str::slug($programa . '-' . $area . '-' . $loop->index);
                        @endphp

                        <section class="tesis-category">
                            <button class="tesis-category__toggle" type="button" aria-expanded="{{ $hasTesisSearch ? 'true' : 'false' }}"
                                aria-controls="{{ $areaId }}" data-tesis-toggle>
                                <span>{{ $area }}</span>
                                <span class="tesis-category__icon">&#8963;</span>
                            </button>

                            <div class="tesis-table-wrap {{ $hasTesisSearch ? '' : 'is-collapsed' }}" id="{{ $areaId }}">
                                <table class="tesis-table tesis-table--admin">
                                    <thead>
                                        <tr>
                                            <th>Año</th>
                                            <th>Nombre del alumno</th>
                                            <th>Título de tesis</th>
                                            <th>Director de tesis</th>
                                            @if ($canEditTesis || $canDeleteTesis)
                                                <th>Acciones</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tesisArea as $item)
                                            <tr>
                                                <td data-label="Año">{{ $item->anio }}</td>
                                                <td data-label="Nombre del alumno">{{ $item->alumno }}</td>
                                                <td data-label="Título de tesis">
                                                    @if ($item->url)
                                                        <a href="{{ \Illuminate\Support\Str::startsWith($item->url, ['http://', 'https://']) ? $item->url : url($item->url) }}"
                                                            target="_blank" rel="noopener noreferrer">
                                                            {{ $item->tema }}
                                                        </a>
                                                    @else
                                                        {{ $item->tema }}
                                                    @endif
                                                </td>
                                                <td data-label="Director de tesis">{{ $item->director }}</td>
                                                @if ($canEditTesis || $canDeleteTesis)
                                                    <td data-label="Acciones" class="admin-table__actions">
                                                        @if ($canEditTesis)
                                                            <button class="admin-table__button admin-table__button--edit"
                                                                type="button" data-admin-edit
                                                                data-id="{{ $item->id }}"
                                                                data-update-url="{{ route('administrador.tesis.update', $item) }}"
                                                                data-cve-uaslp="{{ $item->cve_uaslp ?? '' }}"
                                                                data-programa="{{ $item->programa }}"
                                                                data-area="{{ $item->area ?? '' }}"
                                                                data-anio="{{ $item->anio }}"
                                                                data-alumno="{{ $item->alumno }}"
                                                                data-tema="{{ $item->tema }}"
                                                                data-director="{{ $item->director }}"
                                                                data-url="{{ $item->url ?? '' }}">
                                                                Editar
                                                            </button>
                                                        @endif

                                                        @if ($canDeleteTesis)
                                                            <button class="admin-table__button admin-table__button--delete"
                                                                type="button" data-admin-delete
                                                                data-delete-url="{{ route('administrador.tesis.destroy', $item) }}"
                                                                data-alumno="{{ $item->alumno }}"
                                                                data-tema="{{ $item->tema }}">
                                                                Eliminar
                                                            </button>
                                                        @endif
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    @endforeach
                </div>
            @empty
                <div class="tesis-empty">No se encontraron tesis con los filtros actuales.</div>
            @endforelse
        </section>
    </main>
@endsection
