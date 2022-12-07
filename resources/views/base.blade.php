<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> {{ config('app.name', 'error config') }}</title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- +app --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap -->
    <script src="https://kit.fontawesome.com/c8e5690449.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>

<body>
    <div class="header">
        @include('templates.header')
        @include('templates.navbar')
    </div>

    <div class="wrapper">
        @yield('maincontent')
    </div>

    @include('templates.footer')
</body>

</html>

<style>
    .wrapper{
        flex:1;
    }
    body{
        display:flex;
        flex-direction:column;
        min-height:100vh;
    }
</style>