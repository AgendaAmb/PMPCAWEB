@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12">
                <img src="{{ asset('storage/images/14.png') }}" alt="">
            </div>
            <div class="barraAzulFuerte"></div>
            <div id="professor-description" class="row p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>PREVENCIÓN Y CONTROL</strong></h1>
                </div>
            </div>
        </div>

        <div id="p-container" class="container px-lg-8.5">
            <div class="row col-12 col-sm-12 mb-5">
                <div class="col-12 col-sm-1">
                </div>
                <div class="col-12 col-sm-2">
                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{ url('/evaluacionAmbiental') }}"
                        role="button">Evaluación&nbspambiental</a>
                </div>
                <div class="col-12 col-sm-2">
                    <a class="btn btn-primary rounded-pill " id="botonesGeneral" href="{{ url('/gestionAmbiental') }}"
                        role="button">&nbsp&nbspGestión&nbspambiental&nbsp&nbsp</a>
                </div>
                <div class="col-12 col-sm-2">
                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{ url('/prevencion') }}"
                        role="button">Prevención&nbspy&nbspcontrol</a>
                </div>
                <div class="col-12 col-sm-2">
                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{ url('/recursosNaturales') }}"
                        role="button">&nbsp&nbspRecursos&nbspnaturales&nbsp&nbsp</a>
                </div>
                <div class="col-12 col-sm-2">
                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{ url('/saludAmbiental') }}"
                        role="button">&nbsp&nbspSalud&nbspambiental&nbsp&nbsp</a>
                </div>
                <div class="col-12 col-sm-1">
                </div>
            </div>
        </div>

        <div id="p-container" class="container px-lg-8.5 pd-md-5">
            <div class="col-12 col-sm-12 mx-5">
                <div>
                    <div class="mx-5">
                        <h4><strong>Nombre de la LGAC del área:</strong></h4>
                        Tecnología ambiental para la remediación de sitios contaminados y aprovechamiento de residuos.
                    </div>

                    <hr>

                    <div class="mb-5 mx-5">
                        <h4><strong>Profesores del área</strong></h4>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Ma. Catalina Alfaro de la Torre</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Valter Armando Barrera López</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Roberto Briones Gallardo</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Candy Carranza Álvarez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Elsa Cervantes González</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Paola Elizabeth Díaz Flores</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Nahúm Andrés Medellín Castillo</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Israel Rodríguez Torres</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Luis Manuel Rosales Colunga</a> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
