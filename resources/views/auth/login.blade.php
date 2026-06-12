@extends('base')

@section('maincontent')
    <main class="admin-auth">
        <section class="admin-auth__card">
            <div class="admin-auth__logos">
                <img src="{{ asset('storage/images/Logos.png') }}" alt="UASLP PMPCA">
            </div>

            <p class="admin-auth__eyebrow">Acceso protegido</p>
            <h1>Iniciar sesión</h1>
            <p class="admin-auth__lead">
                Accede con tu cuenta institucional UASLP para administrar las tesis del PMPCA.
            </p>

            @if (session('status'))
                <div class="tesis-alert tesis-alert--success">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="tesis-alert tesis-alert--error">{{ $errors->first() }}</div>
            @endif

            <a class="admin-auth__uaslp" href="{{ route('uaslp.login') }}">
                Iniciar con cuenta institucional UASLP
            </a>

            <a class="admin-auth__back" href="{{ route('tesis') }}">
                Volver a tesis
            </a>
        </section>
    </main>
@endsection
