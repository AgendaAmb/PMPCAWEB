@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12">
                <img src="{{ asset('storage/images/16.png') }}" alt="">
            </div>
            <div class="barraAzulFuerte"></div>
            <div id="professor-description" class="row p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>SALUD AMBIENTAL</strong></h1>
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
                        Evaluación del riesgo en salud humana y ecológica a través de intervenciones comunitarias.
                    </div>

                    <hr>

                    <div class="mb-5 mx-5">
                        <h4><strong>Profesores del área</strong></h4>
                        <a href="#" id="enlacesProfEvaluacion">Dr. José Antonio Ávalos Lozano</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Jaqueline Calderón Hernández</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Virginia Gabriela Cilia López</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Ana Cristina Cubillas Tejeda</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Fernando Díaz-Barriga Martínez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Gabriela Domínguez Cortinas</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Guillermo Espinosa Reyes</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Rogelio Flores Ramírez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Donají Josefina González Mille</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. César Ilizaliturri Hernández</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. José de Jesús Mejía Saavedra</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Francisco Javier Pérez Vázquez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Silvia Romero Contreras</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Moisés Roberto Vallejo Pérez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Leticia Guadalupe Yáñez Estrada</a> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
