@extends('base')

@section('maincontent')
    <main class="tesis-page">
        <section class="tesis-hero">
            <div class="tesis-hero__content">
                <div>
                    <p class="tesis-hero__eyebrow">PMPCA</p>
                    <h1>TESIS</h1>
                    <p>
                        Consulta las tesis del Programa Multidisciplinario en Ciencias Ambientales por programa,
                        area, alumno, director, año o palabra clave.
                    </p>
                </div>

                <form class="tesis-search" action="{{ route('tesis') }}" method="GET">
                    <label for="tesis-search-input">Buscar tesis</label>
                    <div class="tesis-search__box">
                        <input
                            type="text"
                            id="tesis-search-input"
                            name="search"
                            value="{{ $search ?? '' }}"
                            placeholder="Año, alumno, director, área o título"
                        >
                        <button type="submit">Buscar</button>
                    </div>
                    @if (! empty($search))
                        <a class="tesis-search__clear" href="{{ route('tesis') }}">Limpiar búsqueda</a>
                    @endif
                </form>
            </div>
        </section>

        <section class="tesis-content">
            @forelse ($tesisPorPrograma as $programa => $areas)
                <div class="tesis-program">
                    <div class="tesis-program__header">
                        <p>Programa académico</p>
                        <h2>{{ $programa }}</h2>
                    </div>

                    @foreach ($areas as $area => $tesisArea)
                        @php
                            $areaId = 'tesis-area-' . \Illuminate\Support\Str::slug($programa . '-' . $area . '-' . $loop->index);
                        @endphp

                        <section class="tesis-category">
                            <button class="tesis-category__toggle" type="button" aria-expanded="true"
                                aria-controls="{{ $areaId }}" data-tesis-toggle>
                                <span>{{ $area }}</span>
                                <span class="tesis-category__icon">&#8963;</span>
                            </button>

                            <div class="tesis-table-wrap" id="{{ $areaId }}">
                                <table class="tesis-table">
                                    <thead>
                                        <tr>
                                            <th>Año</th>
                                            <th>Nombre del alumno</th>
                                            <th>Título de tesis</th>
                                            <th>Director de tesis</th>
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
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    @endforeach
                </div>
            @empty
                <div class="tesis-empty">
                    No se encontraron tesis con los filtros actuales.
                </div>
            @endforelse
        </section>
    </main>
@endsection
