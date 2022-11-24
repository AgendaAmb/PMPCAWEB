
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div class="row mb-4">
    <div class="col-12 col-sm-12">
        <h1><strong>ESTADÍSTICAS</strong></h1>
    </div>
    </div>

    <hr>
    <div class="col-12 col-sm-12 my-4">
        <p> <strong> Cohorte generacional maestría</strong></p>
    </div>

    <div class="accordion p-2" id="accordionExample">
        <div class="accordion-item">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Global &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
                        <strong>Becarios CONACyT &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
    <div class="col-12 col-sm-12 my-4">
        <p><strong>Cohorte generacional Doctorado</strong></p>
    </div>
    <div class="accordion p-2" id="accordionExample">
        <div class="accordion-item">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <strong>Global &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <strong>Becarios CONACyT &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
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

</div>

@endsection