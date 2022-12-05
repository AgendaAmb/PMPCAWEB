@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12">
                <img src="{{ asset('storage/images/15.png') }}" alt="">
            </div>
            <div class="barraAzulFuerte"></div>
            <div id="professor-description" class="row p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>RECURSOS NATURALES</strong></h1>
                </div>
            </div>
        </div>

        @include('templates.programas.NavAreas')
    </div>
@endsection
