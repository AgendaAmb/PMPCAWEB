@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12" id="seccionDCA">
                <img src="{{ asset('storage/images/3.png') }}" alt="">
            </div>
            <div class="barraAzulFuerte"></div>
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12 mb-4">
                    <h1><strong>DOCTORADO EN CIENCIAS AMBIENTALES</strong></h1>
                </div>
                <div class="row col-12 col-sm-12 mb-4 ">
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-3 ">
                        <a class="btn btn-primary" id="botonesGeneral"
                            href="{{ asset('storage/doc/Plan_Estudios_Doctorado.pdf') }}" role="button">Plan de
                            estudios</a>
                    </div>

                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-3 ">
                        <a class="btn btn-primary" id="botonesGeneral" href="{{ asset('storage/doc/Conv_DCA2022.pdf') }}"
                            role="button">Convocatoria</a>
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1">
                    </div>
                </div>

                <div class="col-12 col-sm-12">
                    <div>
                        <p>
                            Nuestro objetivo es la formación de recursos humanos de calidad para la docencia e investigación
                            básica o aplica-
                            da para la solución de los problemas ambientales a nivel regional, nacional o global. <br> <br>

                            Si estás interesado deberás desarrollar un proyecto de investigación relacionado con las
                            ciencias ambientales y
                            contar con un producto publicado durante tus estudios de maestría. También deberás poseer un
                            amplio espíritu
                            de trabajo en equipo, habilidades para el análisis crítico de información y gran compromiso para
                            dedicarte de
                            tiempo completo a tus estudios. Además de acreditar un adecuado desempeño en el idioma inglés.
                            <br> <br>

                            Como egresado tendrás capacidades para generar, desarrollar y aplicar el conocimiento científico
                            y tecnológico en
                            forma original e innovadora, así como las habilidades para generar avances científicos y
                            tecnológicos y participar
                            activamente en grupos de investigación en el campo de las ciencias ambientales. <br> <br>

                            <strong>El costo semestral de inscripción: $ 3,500.00</strong>
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion p-2" id="accordionExample">
                <div class="accordion-item">
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>Perfil de egreso &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                El egresado del Programa Multidisciplinario en Ciencias Ambientales tendrá una formación
                                integral para contribuir
                                al desarrollo científico y tecnológico desempeñando actividades profesionales grupales a un
                                alto nivel y con perti-
                                nencia socio-ambiental para un desarrollo sostenible local y global. El egresado del
                                Doctorado en Ciencias Ambien-
                                tales, tendrá capacidad para generar, desarrollar y aplicar el conocimiento científico y
                                tecnológico en forma original
                                e innovadora en el campo de las ciencias ambientales. Poseerá la capacidad de dirigir grupos
                                de investigación, par-
                                ticipar en órganos de decisión de alto impacto y en la formación de recursos humanos de alto
                                nivel.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Objetivos generales &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
                </div>
            </div>
            <hr>
        </div>


        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12 mb-4" id="seccionMCA">
                    <h1><strong>MAESTRÍA EN CIENCIAS AMBIENTALES</strong></h1>
                </div>
                <div class="row col-12 col-sm-12 mb-4 ">
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-3 ">
                        <a class="btn btn-primary" id="botonesGeneral"
                            href="{{ asset('storage/doc/Plan_Estudios_Maestria.pdf') }}" role="button">Plan de estudios</a>
                    </div>

                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-3 ">
                        <a class="btn btn-primary" id="botonesGeneral" href="{{ asset('storage/doc/Conv_MCA2022.pdf') }}"
                            role="button">Convocatoria</a>
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1">
                    </div>
                </div>

                <div class="col-12 col-sm-12">
                    <div>
                        <p>
                            Nuestro objetivo es la formación de recursos humanos de calidad para la docencia e investigación
                            básica o aplica-
                            da para la solución de los problemas ambientales a nivel regional, nacional o global. <br> <br>

                            Si estás interesado deberás desarrollar un proyecto de investigación relacionado con las
                            ciencias ambientales y
                            contar con un producto publicado durante tus estudios de maestría. También deberás poseer un
                            amplio espíritu
                            de trabajo en equipo, habilidades para el análisis crítico de información y gran compromiso para
                            dedicarte de
                            tiempo completo a tus estudios. Además de acreditar un adecuado desempeño en el idioma inglés.
                            <br> <br>

                            Como egresado tendrás capacidades para generar, desarrollar y aplicar el conocimiento científico
                            y tecnológico en
                            forma original e innovadora, así como las habilidades para generar avances científicos y
                            tecnológicos y participar
                            activamente en grupos de investigación en el campo de las ciencias ambientales. <br> <br>

                            <strong>El costo semestral de inscripción: $ 3,500.00</strong>
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion p-2" id="accordionExample">
                <div class="accordion-item">
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>Perfil de egreso &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                El egresado del Programa Multidisciplinario en Ciencias Ambientales tendrá una formación
                                integral para contribuir
                                al desarrollo científico y tecnológico desempeñando actividades profesionales grupales a un
                                alto nivel y con perti-
                                nencia socio-ambiental para un desarrollo sostenible local y global. El egresado del
                                Doctorado en Ciencias Ambien-
                                tales, tendrá capacidad para generar, desarrollar y aplicar el conocimiento científico y
                                tecnológico en forma original
                                e innovadora en el campo de las ciencias ambientales. Poseerá la capacidad de dirigir grupos
                                de investigación, par-
                                ticipar en órganos de decisión de alto impacto y en la formación de recursos humanos de alto
                                nivel.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <strong>Objetivos generales &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
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


        <div id="p-container" class="container px-lg-8.5 px-md-5 ">
            <div id="professor-description" class="row mb-4 p-5 ">
                <div class="col-12 col-sm-12 mb-4" id="seccionMCADT">
                    <h1><strong>MAESTRÍA EN CIENCIAS AMBIENTALES <br> DOBLE TITULACIÓN</strong></h1>
                </div>
                <div class="row col-12 col-sm-12 mb-4 ">
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-3 ">
                        <a class="btn btn-primary" id="botonesGeneral" href="#" role="button">Plan de
                            estudios</a>
                    </div>

                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-3 ">
                        <a class="btn btn-primary" id="botonesGeneral" href="#" role="button">Convocatoria</a>
                    </div>
                    <div class="col-12 col-sm-1 ">
                    </div>
                    <div class="col-12 col-sm-1">
                    </div>
                </div>

                <div class="col-12 col-sm-12">
                    <div>
                        <p>
                            Nuestro objetivo es la formación de recursos humanos de calidad para la docencia e investigación
                            básica o aplica-
                            da para la solución de los problemas ambientales a nivel regional, nacional o global. <br> <br>

                            Si estás interesado deberás desarrollar un proyecto de investigación relacionado con las
                            ciencias ambientales y
                            contar con un producto publicado durante tus estudios de maestría. También deberás poseer un
                            amplio espíritu
                            de trabajo en equipo, habilidades para el análisis crítico de información y gran compromiso para
                            dedicarte de
                            tiempo completo a tus estudios. Además de acreditar un adecuado desempeño en el idioma inglés.
                            <br> <br>

                            Como egresado tendrás capacidades para generar, desarrollar y aplicar el conocimiento científico
                            y tecnológico en
                            forma original e innovadora, así como las habilidades para generar avances científicos y
                            tecnológicos y participar
                            activamente en grupos de investigación en el campo de las ciencias ambientales. <br> <br>

                            <strong>El costo semestral de inscripción: $ 3,500.00</strong><br><br>

                            <a href="#" id="titulosCyan"> Para mayor información consulta la siguiente página
                                web:http://www.enrem-master.info/about-enrem</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion p-2" id="accordionExample">
                <div class="accordion-item">
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <strong>Perfil de egreso &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                El egresado del Programa Multidisciplinario en Ciencias Ambientales tendrá una formación
                                integral para contribuir
                                al desarrollo científico y tecnológico desempeñando actividades profesionales grupales a un
                                alto nivel y con perti-
                                nencia socio-ambiental para un desarrollo sostenible local y global. El egresado del
                                Doctorado en Ciencias Ambien-
                                tales, tendrá capacidad para generar, desarrollar y aplicar el conocimiento científico y
                                tecnológico en forma original
                                e innovadora en el campo de las ciencias ambientales. Poseerá la capacidad de dirigir grupos
                                de investigación, par-
                                ticipar en órganos de decisión de alto impacto y en la formación de recursos humanos de alto
                                nivel.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="colorTexto">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <strong>Objetivos generales &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
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
