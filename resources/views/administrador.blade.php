@extends('base')

@section('maincontent')
    @php
        $currentUser = auth()->user();
        $canCaptureTesis = $currentUser && $currentUser->canCaptureTesis();
        $canEditTesis = $currentUser && $currentUser->canEditTesis();
        $canImportTesis = $currentUser && $currentUser->canImportTesis();
        $canDeleteTesis = $currentUser && $currentUser->canDeleteTesis();
        $canUseTesisTools = $canCaptureTesis || $canEditTesis || $canDeleteTesis;
        $minTesisYear = \App\Models\Tesis::MIN_YEAR;
        $initialEdit = null;

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
                    Archivo importado. Nuevas: {{ session('tesis_import_result.created') }},
                    actualizadas: {{ session('tesis_import_result.updated') }},
                    sin cambios: {{ session('tesis_import_result.unchanged') }},
                    omitidas: {{ session('tesis_import_result.skipped') }}.
                </div>
            @endif

            @if (session('admin_status'))
                <div class="tesis-alert {{ session('admin_status.type') === 'info' ? 'tesis-alert--info' : 'tesis-alert--success' }}">
                    {{ session('admin_status.message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="tesis-alert tesis-alert--error">{{ $errors->first() }}</div>
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
                            <button class="tesis-category__toggle" type="button" aria-expanded="true"
                                aria-controls="{{ $areaId }}" data-tesis-toggle>
                                <span>{{ $area }}</span>
                                <span class="tesis-category__icon">&#8963;</span>
                            </button>

                            <div class="tesis-table-wrap" id="{{ $areaId }}">
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
                                                <td data-label="Título de tesis">{{ $item->tema }}</td>
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
