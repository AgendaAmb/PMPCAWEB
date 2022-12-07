
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div class="row mb-4">
    <div class="col-12 col-sm-12">
        <h1><strong>TRÁMITES</strong></h1>
    </div>
    </div>


    <h4 id="nameProf">Maestría en Ciencias Ambientales</h4>
   <hr>
    <strong>Inscripción semestral</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_AltasBajas.pdf')}}"> <strong>Altas y bajas</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_Inscripcion_MCA.pdf')}}"> <strong>Inscripción PMPCA</strong> </a>
    </div><br>
    <strong>Tesis y Comité Tutorial</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.1_AsignacionDirectorTesis.pdf')}}"> <strong>Asignación director de tesis</strong></a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.3 ComTutelarTesis.pdf')}}"> <strong>Comité tutelar tesis</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.6 CambioComiteTutelar.pdf')}}"> <strong>Cambio comité tutelar</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.7 AdecuacionTituloTesis.pdf')}}"> <strong>Adecuación titulo tesis</strong> </a>
    </div><br>
    <strong>Formatos para calificaciones</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/3.1 ActaEvalTrabTesis.pdf')}}"> <strong>Acta de trabajo de tesis</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/3.4 Calif_SemTesis.pdf')}}"> <strong>Calificación seminario de tesis</strong> </a>
    </div><br>
    <strong>Obtención de grado</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.1 SolicitudExamenJur.pdf')}}"> <strong>Aprobación de jurado y examen previo</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.2 RequisitosEgreso.pdf')}}"> <strong>Aprobación requisitos de egreso</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.8 RecepcionTesis_220314.pdf')}}"> <strong>Recepción tesis</strong> </a>
    </div><br><br>


    <h4 id="nameProf">Maestría en Ciencias Ambiental (doble titulación)</h4>
    <hr>
    <strong>Inscripción semestral</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_AltasBajas.pdf')}}"> <strong>Altas y bajas</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_Inscripcion_ENREM.pdf')}}"> <strong>Inscripcion ENREM</strong> </a>
    </div><br>
    <strong>Tesis y Comité Tutelar</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.2_AsignacionDirectorTesis.pdf')}}"> <strong>Asignación director de tesis</strong></a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.4 ComTutelarTesis.pdf')}}"> <strong>Comité tutelar tesis</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.6 CambioComiteTutelar.pdf')}}"> <strong>Cambio comité tutelar</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.7 AdecuacionTituloTesis.pdf')}}"> <strong>Adecuación titulo tesis</strong> </a>
    </div><br>
    <strong>Formatos para calificaciones</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/3.2 ActaEvalTrabTesis.pdf')}}"> <strong>Acta de trabajo de tesis</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/3.5 Calif_SemTesis.pdf')}}"> <strong>Calificación seminario de tesis</strong> </a>
    </div><br>
    <strong>Obtención de grado</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.2 RequisitosEgreso.pdf')}}"> <strong>Aprobación requisitos de egreso</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.8 RecepcionTesis_220314.pdf')}}"> <strong>Recepción tesis</strong> </a>
    </div><br><br>

    <h4 id="nameProf">Doctorado en Ciencias Ambientales</h4>
    <hr>
    <strong>Inscripción semestral</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_AltasBajas.pdf')}}"> <strong>Altas y bajas</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_Inscripcion_MCA.pdf')}}"> <strong>Inscripción PMPCA</strong> </a>
    </div><br>
    <strong>Tesis y Comité Tutelar</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.2_AsignacionDirectorTesis.pdf')}}"> <strong>Asignación director de tesis</strong></a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.5 ComTutelarTesis.pdf')}}"> <strong>Comité tutelar tesis</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.6 CambioComiteTutelar.pdf')}}"> <strong>Cambio comité tutelar</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/2.7 AdecuacionTituloTesis.pdf')}}"> <strong>Adecuación titulo tesis</strong> </a>
    </div><br>
    <strong>Formatos para calificaciones</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/3.3 ActaEvalTrabTesis.pdf')}}"> <strong>Acta de trabajo de tesis</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/3.4 Calif_SemTesis.pdf')}}"> <strong>Calificación seminario de tesis</strong> </a>
    </div><br>
    <strong>Obtención de grado</strong><br>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.1 SolicitudExamenJur.pdf')}}"> <strong>Aprobación de jurado y examen previo</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.2 RequisitosEgreso.pdf')}}"> <strong>Aprobación requisitos de egreso</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/4.8 RecepcionTesis_220314.pdf')}}"> <strong>Recepción tesis</strong> </a>
    </div><br><br>

    <h4 id="nameProf">Otros formatos</h4>
    <hr>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_LineamientosPracticasCampo.pdf')}}"> <strong>Lineamientos prácticas de campo</strong> </a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/F_Responsabilidades_Alumnos.pdf')}}"> <strong>Responsabilidades alumnos</strong> </a>
    </div>
        <div class="col-12 col-sm-12 my-4" id="enlacetramites">
        <a href="{{asset('storage/pdf/PMPCA_ApoyoEstudiantes.pdf')}}"> <strong>Apoyo para asistencia a congresos</strong> </a>
    </div><br><br>
</div>

@endsection