@php
    $formAttrs = $formAttrs ?? '';
    $disabledSubmit = $disabledSubmit ?? false;
@endphp

<form class="admin-form" action="{{ $action }}" method="POST" {!! $formAttrs !!}>
    @csrf
    @if ($method !== 'POST')
        @method($method)
        <input type="hidden" name="{{ $mode }}_id" value="{{ old($mode . '_id') }}">
    @endif

    <div class="admin-field">
        <label for="{{ $mode }}_cve_uaslp">Clave UASLP</label>
        <input id="{{ $mode }}_cve_uaslp" type="text" name="{{ $mode }}_cve_uaslp"
            value="{{ old($mode . '_cve_uaslp') }}" placeholder="Opcional">
    </div>

    <div class="admin-field">
        <label for="{{ $mode }}_programa">Programa</label>
        <input id="{{ $mode }}_programa" type="text" name="{{ $mode }}_programa"
            value="{{ old($mode . '_programa') }}" list="{{ $mode }}_programas"
            placeholder="Doctorado o Maestría">
        <datalist id="{{ $mode }}_programas">
            @foreach ($programas as $programa)
                <option value="{{ $programa }}"></option>
            @endforeach
        </datalist>
    </div>

    <div class="admin-field">
        <label for="{{ $mode }}_area">Área</label>
        <input id="{{ $mode }}_area" type="text" name="{{ $mode }}_area"
            value="{{ old($mode . '_area') }}" list="{{ $mode }}_areas"
            placeholder="Área académica">
        <datalist id="{{ $mode }}_areas">
            @foreach ($areas as $area)
                <option value="{{ $area }}"></option>
            @endforeach
        </datalist>
    </div>

    <div class="admin-field">
        <label for="{{ $mode }}_anio">Año</label>
        <input id="{{ $mode }}_anio" type="number" name="{{ $mode }}_anio"
            value="{{ old($mode . '_anio') }}" min="{{ $minTesisYear }}" max="{{ now()->year + 1 }}"
            placeholder="{{ now()->year }}">
    </div>

    <div class="admin-field admin-field--full">
        <label for="{{ $mode }}_alumno">Nombre del alumno</label>
        <input id="{{ $mode }}_alumno" type="text" name="{{ $mode }}_alumno"
            value="{{ old($mode . '_alumno') }}" placeholder="Nombre completo">
    </div>

    <div class="admin-field admin-field--full">
        <label for="{{ $mode }}_tema">Título de tesis</label>
        <textarea id="{{ $mode }}_tema" name="{{ $mode }}_tema" rows="4"
            placeholder="Título completo">{{ old($mode . '_tema') }}</textarea>
    </div>

    <div class="admin-field">
        <label for="{{ $mode }}_director">Director de tesis</label>
        <input id="{{ $mode }}_director" type="text" name="{{ $mode }}_director"
            value="{{ old($mode . '_director') }}" placeholder="Nombre del director">
    </div>

    <div class="admin-field">
        <label for="{{ $mode }}_url">Enlace</label>
        <input id="{{ $mode }}_url" type="url" name="{{ $mode }}_url"
            value="{{ old($mode . '_url') }}" placeholder="https://...">
    </div>

    <div class="admin-form__actions">
        <button class="admin-button admin-button--primary" type="submit"
            @if ($disabledSubmit) data-admin-edit-submit disabled @endif>
            {{ $submit }}
        </button>
    </div>
</form>
