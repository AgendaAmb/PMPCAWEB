@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div class="col-12 col-sm-12">
            <img src="https://placekitten.com/g/1318/500" alt="">
        </div>
        <div class="barraAzulFuerte"></div>
        <div id="professor-description" class="row mb-4 p-5">
            <div class="col-12 col-sm-12 mb-4">
                <h1><strong>PROTOCOLO DE ÉTICA</strong></h1>
            </div>

            <div class="col-12 col-sm-12">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ad corrupti quod exercitationem veritatis iste, veniam animi sed error, quae voluptate eum, provident ut expedita impedit consectetur! Pariatur, modi impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium temporibus deserunt atque sint nihil tenetur. Aliquam obcaecati, neque optio perspiciatis odio nam officia quos explicabo corporis eligendi autem doloribus error.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion p-2" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Protocolo de ética UASLP</strong>
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
                            <strong>Protocolo Universitario para la Prevención, Atención, Sanción y
                                Erradicación del Hostigamiento y el Acoso Sexual y la Violencia de Género</strong>
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
@endsection
