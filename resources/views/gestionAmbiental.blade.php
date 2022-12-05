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
                        Gestión ambiental, territorio y sustentabilidad.
                    </div>

                    <hr>

                    <div class="mb-5 mx-5">
                        <h4><strong>Profesores del área</strong></h4>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Carlos Contreras Servín</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. María Guadalupe Galindo Mendoza</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Patricia Julio Miranda</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Leonardo Ernesto Márquez Mireles</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Álvaro Gerardo Palacio Aponte</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Humberto Reyes Hernández</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Oscar Reyes Pérez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Anuschka Van´t Hooft</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Valente Vázquez Solís</a> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
