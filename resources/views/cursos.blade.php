@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12">
                <img src="{{ asset('storage/images/10.png') }}" alt="">
                <div class="barraAzulFuerte"></div>
            </div>
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12 mb-4">
                    <h1><strong>CURSOS</strong></h1>
                </div>
                <div class="row col-12 col-sm-12 mb-4 ">
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-3 ">
                        <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{url("/cursos/#headingTwo")}}"
                            role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBásicos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                    </div>
                    <div class="col-12 col-sm-3 ml-5">
                        <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{url("/cursos/#headingTwo")}}"
                            role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOptativos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                    </div>
                    <div class="col-12 col-sm-3">
                        <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{url("/cursos/#headingFour")}}"
                            role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTópicos
                            selectos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                    </div>
                    <div class="col-12 col-sm-1">
                    </div>
                </div>

                <div class="col-12 col-sm-12">
                    <div>
                        <p>Los Planes de Estudio del Programa Multidisciplinario de Posgrado en Ciencias Ambientales de la
                            UASLP, se elaboran considerando siete líneas curriculares:
                        <ol>
                            <li>Cursos básico</li>
                            <li>Cursos optativos</li>
                            <li>Cursos tópicos selectos en Ciencias Ambientales</li>
                            <li>Proyecto de investigación (trabajo y seminario de tesis)</li>
                            <li>Seminarios Multidisciplinarios</li>
                            <li>Examen predoctoral (grado de Doctor)</li>
                            <li>Tesis y examen de grado</li>
                        </ol><br>
                        El Plan de Estudios está constituido por las siete líneas curriculares enumeradas anteriormente y
                        por
                        las cinco áreas de especialización:<br><br>
                        <ol>
                            <li>Evaluación Ambiental (EA)</li>
                            <li>Gestión Ambiental (GA)</li>
                            <li>Prevención y Control (PyC)</li>
                            <li>Recursos Naturales Renovables (RNR)</li>
                            <li>Salud Ambiental Integrada (SAI)</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion p-2" id="accordionExample">
                <div class="accordion-item" id="acordeonBasicos">
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>Cursos básicos &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                76900001 Desarrollo Sustentable<br>
                                76900053 Ecología<br>
                                76900057 Introducción a la Estadística<br>
                                76900058 Problemática y Gestión Ambiental<br>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Cursos optativos &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Formar profesores y/o investigadores capaces de generar, desarrollar y aplicar el
                                conocimiento científico y tec-
                                nológico, en forma original e innovadora. También adquirirá los conocimientos básicos
                                necesarios para tener la ha-
                                bilidad de establecer y analizar avances científicos y tecnológicos en el campo de las
                                ciencias ambientales, y de diri-
                                gir grupos de investigación. Su potencial de aplicación se encuentra también en los sectores
                                académico, industrial,
                                de gobierno y privado.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>Cursos tópicos selectos &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Formar profesores y/o investigadores capaces de generar, desarrollar y aplicar el
                                conocimiento científico y tec-
                                nológico, en forma original e innovadora. También adquirirá los conocimientos básicos
                                necesarios para tener la ha-
                                bilidad de establecer y analizar avances científicos y tecnológicos en el campo de las
                                ciencias ambientales, y de diri-
                                gir grupos de investigación. Su potencial de aplicación se encuentra también en los sectores
                                académico, industrial,
                                de gobierno y privado.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection
