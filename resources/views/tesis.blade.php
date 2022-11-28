@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div class="row mb-4">
            <div class="col-12 col-sm-12">
                <h1><strong>TESIS</strong></h1>
            </div>
        </div>

        <hr>
        <div class="col-12 col-sm-12 my-4">
            <p> <strong>Doctorado en Ciencias Ambientales</strong></p>
        </div>

        <div class="accordion p-2" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Evaluación Ambiental &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                                <table class="table table-striped-columns">
                                    <thead>
                                        <tr>
                                            <th scope="col">Año</th>
                                            <th scope="col">Nombre del alumno</th>
                                            <th scope="col">Título de tesis</th>
                                            <th scope="col">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">2021</th>
                                            <td>Febrero - Junio</td>
                                            <td><a href="#">Memorias</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2019</th>
                                            <td>Febrero - Junio</td>
                                            <td><a href="#">Memorias</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2018</th>
                                            <td>Septiembre - Febrero</td>
                                            <td><a href="#">Memorias</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2017</th>
                                            <td>Febrero - Junio</td>
                                            <td><a href="#">Memorias / Presentaciones</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2016</th>
                                            <td>Febrero - Junio</td>
                                            <td><a href="#">Memorias</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2015</th>
                                            <td>Agosto - Diciembre</td>
                                            <td><a href="#">Memorias</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2014</th>
                                            <td>Febrero - Junio <br> Agosto - Diciembre</td>
                                            <td><a href="#">Memorias / Plenaria 1 Plenaria 2 <br>
                                                Memorias</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2013</th>
                                            <td>Agosto - Diciembre</td>
                                            <td><a href="#">Memorias / Plenaria 1 Plenaria 2</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Gestión Ambiental&nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Prevención y Control&nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Recursos Naturales Renovables&nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Salud Ambiental Integrada&nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
        </div>


    <hr>
    <div class="col-12 col-sm-12 my-4">
        <p><strong>Maestría en Ciencias Ambientales</strong></p>
    </div>
    <div class="accordion p-2" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Evaluación Ambiental &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>Gestión Ambiental&nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Prevención y Control&nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Recursos Naturales Renovables&nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Salud Ambiental Integrada&nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
    </div>

</div>
@endsection
