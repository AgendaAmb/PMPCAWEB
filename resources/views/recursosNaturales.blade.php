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
                        Conocimiento, aprovechamiento racional y conservación de los recursos naturales renovables.
                    </div>

                    <hr>

                    <div class="mb-5 mx-5">
                        <h4><strong>Profesores del área</strong></h4>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Gisela Aguilar Benítez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Gregorio Álvarez Fuentes</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. José Arturo De Nova Vázquez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Héctor Martín Durán García</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. José Luis Flores Flores</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Javier Fortanelli Martínez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Erika García Chávez</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Juan Carlos García López</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Bertha Irene Juárez Flores</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Carlos Alfonso Muñoz Robles</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Hugo Magdaleno Ramírez Tobías</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dr. Juan Antonio Reyes Agüero</a> <br>
                        <a href="#" id="enlacesProfEvaluacion">Dra. Laura Yáñez Espinosa</a> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
