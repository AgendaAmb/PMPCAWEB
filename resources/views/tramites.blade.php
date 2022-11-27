
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div class="row mb-4">
    <div class="col-12 col-sm-12">
        <h1><strong>TRÁMITES</strong></h1>
    </div>
    </div>

    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.1_AsignacionDirectorTesis_220307.pdf')}}"> <strong>Asignación director de tesis</strong></a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.3 ComTutelarTesis_220307.pdf')}}"> <strong>Comité tutelar tesis</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.6 CambioComitéTutelar _220307.pdf')}}"> <strong>Cambio comité tutelar</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.7 AdecuaciónTituloTesis_220307.pdf')}}"> <strong>Adecuación titulo tesis</strong> </a> 
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.8 CambioTesis_220307.pdf')}}"> <strong>Cambio tesis</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/3.4 Calif_SemTesis_220304.pdf')}}"> <strong>Calificación semestre tesis</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.8 RecepcionTesis_220314.pdf')}}"> <strong>Recepción tesis</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_AltasBajas.pdf')}}"> <strong>Altas y bajas</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_Inscripcion_ENREM.pdf')}}"> <strong>Inscripcion ENREM</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_Inscripcion_MCA.pdf')}}"> <strong>Inscripción PMPCA</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_LineamientosPracticasCampo.pdf')}}"> <strong>Lineamientos prácticas de campo</strong> </a>
    </div>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_Responsabilidades_Alumnos.pdf')}}"> <strong>Responsabilidades alumnos</strong> </a>
    </div>


</div>

@endsection