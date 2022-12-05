@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12">
                <img src="{{ asset('storage/images/13.png') }}" alt="">
            </div>
            <div class="barraAzulFuerte"></div>
            <div id="professor-description" class="row p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>GESTIÓN AMBIENTAL</strong></h1>
                </div>
            </div>
        </div>

        @include('templates.programas.NavAreas')
    </div>

    <script>
    var app = new Vue({
        el: '#colorTexto',
        data: {
        },
        mounted() {
            console.log("hola");
        }
    })
    </script>
@endsection
