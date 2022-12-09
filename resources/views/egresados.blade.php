@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div id="professor-description" class="row mb-4">

                <div class="col-12 col-sm-12 my-5">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100" id="colorCard">
                                <img src="{{ asset('storage/images/DrIdrissa.png') }}" class="card-img-top" alt="...">
                                <div class="barraAzulFuerteS"></div>
                                <div class="card-body">
                                    <p class="card-title"> <strong>DOCTOR <br> IDRISSA DIÉDHIOU</strong></p>

                                    <div class="container mt-3">
                                        <button type="button" class="btn btn-primary" id="botonesGeneral"
                                            data-bs-toggle="modal" data-bs-target="#myModal">
                                            Ver más...
                                        </button>
                                    </div>

                                    <div class="modal modal-xl" id="myModal">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                                <div class="modal-header my-modal-header d-flex justify-content-center">
                                                    <p class="modal-title" >Doctorado en Ciencias Ambientales Idrissa Diédhiou
                                                    </p>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="container text-center">
                                                        <div class="row">
                                                            <div class="col">
                                                                <img src="{{ asset('storage/images/DrIdrissa.png') }}"
                                                                    class="card-img-top" alt="...">
                                                                
                                                                <div class="row d-flex justify-content-start text-start mt-3">
                                                                    <p class="col-12"> <strong>Generación 2018</strong></p>
                                                                    <p 
                                                                        class="col-12 modal-details"
                                                                        >
                                                                        <b>
                                                                            Tesis: “Physiology, metabolomic profiles,
                                                                            and yield of native genotypes of maize
                                                                            (<i>zea mays l.</i>) and their <i>milpa</i> systems
                                                                            (maize+bean+squash) from San Luis
                                                                            Potosi (Mexico) under related effects of
                                                                            climate change.”
                                                                        </b>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <p id="modales-egresados-izq">
                                                                    Me llamo Idrissa Diédhiou, de nacionalidad senegalesa,
                                                                    Ingeniero Agrónomo de formación, Maestro en Producción
                                                                    Agropecuaria por
                                                                    parte de la Facultad de Agronomía y Veterinaria de la
                                                                    Universidad
                                                                    Autónoma de San Luis Potosí (UASLP) y egresé del
                                                                    Doctorado en Ciencias
                                                                    Ambientales del Programa Multidisciplinario de Posgrado
                                                                    en Ciencias
                                                                    Ambientales (PMPCA) de la UASLP en febrero del 2022.<br><br> Mi
                                                                    testimonio
                                                                    se basa en mi experiencia personal desde la preparación
                                                                    de los
                                                                    documentos para ingresar a finales del 2017 hasta mi
                                                                    fecha de egreso y se basa en
                                                                    lo académico y administrativo.<br> Desde lo administrativo
                                                                    es un programa
                                                                    muy abierto y con reglas y principios bien específicos
                                                                    para cada caso, lo
                                                                    que facilita el entendimiento de cómo ingresar y los
                                                                    requisitos durante la
                                                                    formación de los estudiantes.<br> Del lado académico
                                                                    igualmente presenta un
                                                                    plan de estudio específico que permite saber punto a
                                                                    punto los bases a
                                                                    cumplir por semestre etc. Además, debo añadir, el
                                                                    trabajo del personal
                                                                    administrativo que es excelente.<br><br>
                                                                    En el PMPCA no es nada más formarse, porque la comunidad
                                                                    científica está compuesta de diferentes campos de la
                                                                    ciencia como
                                                                    historiadores, filósofos, abogados, químicos, y
                                                                    agrónomos como yo que
                                                                    debemos intercambiar ideas para solucionar un problema.
                                                                    De ahí,
                                                                    aprendí escuchar al otro científico que tiene una
                                                                    formación diferente al mío
                                                                    y juntos proponer una solución. Esas son unas de las
                                                                    experiencias más
                                                                    bonitas que me ha dejado el PMPCA y esos fueron
                                                                    adquiridos en los famosos
                                                                    seminarios multidisciplinarios.
                                                                    Igualmente, se debe resaltar la multiculturalidad que
                                                                    presenta el PMPCA, con estudiantes de varios países del
                                                                    mundo como
                                                                    Colombia, Alemania, USA, Camerún, Senegal y entre otros.
                                                                    <br><br>
                                                                    Por último, muchas gracias a PMPCA por darme la
                                                                    oportunidad de cumplir un sueño.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button
                                                        id="botonesGeneral"
                                                        type="button" 
                                                        class="btn"
                                                        data-bs-dismiss="modal"
                                                        style="color: white;"
                                                        >
                                                        Cerrar
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" id="colorCard">
                                <img src="{{ asset('storage/images/DrGMJ.png') }}" class="card-img-top" alt="...">
                                <div class="barraAzulFuerteS"></div>
                                <div class="card-body">
                                    <p class="card-title"> <strong>DOCTOR <br> GERARDO MORALES JASSO</strong></p>
                                    <div class="container mt-3">
                                        <button type="button" class="btn btn-primary" id="botonesGeneral"
                                            data-bs-toggle="modal" data-bs-target="#myModal2">
                                            Ver más...
                                        </button>
                                    </div>

                                    <div class="modal modal-xl" id="myModal2">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                                <div class="modal-header my-modal-header d-flex justify-content-center">
                                                    <p class="modal-title" >Doctor en Ciencias Ambientales Gerardo Morales Jasso
                                                    </p>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="container text-center">
                                                        <div class="row">
                                                            <div class="col">
                                                                <img src="{{ asset('storage/images/DrGMJ.png') }}"
                                                                    class="card-img-top" alt="...">
                                                                
                                                                <div class="row d-flex justify-content-start text-start mt-3">
                                                                    <p class="col-12"> <strong>Generación 2018</strong></p>
                                                                    <p 
                                                                        class="col-12 modal-details"
                                                                        >
                                                                        <b>
                                                                            Tesis: “Construir el conocimiento interdisciplinario en el Programa Multidisciplinario de Posgrado en Ciencias Ambientales. Historia, teoría y praxis”
                                                                        </b>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <p id="modales-egresados-izq">
                                                                    Soy Licenciado en Historia y estudié el Doctorado en el Programa Multidisciplinario en Ciencias Ambientales (PMPCA). El Programa es tan multidisciplinario que sus estudiantes no sólo son biólogos, químicos, agrónomos; sino que ha habido antropólogos, psicólogos, sociólogos, abogados, arquitectos, educadores, entre otros. Por lo tanto, desde dentro del PMPCA, el que un licenciado en historia estudie ciencias ambientales no se ve como un salto, sino como una opción lógica y válida; especialmente, porque me interesaba la historia ambiental y la epistemología de las ciencias ambientales.<br><br>La curricula es flexible y en la mayoría de las clases se puede aprender, no sólo de los profesores, sino también de los compañeros estudiantes, ya sean de maestría o de doctorado; pues, al tener formaciones distintas enriquecen el aprendizaje. La diversidad formacional de los profesores también es notable y el Programa favorece la comunicación entre las distintas áreas. Por lo tanto, no es difícil encontrar entre ellos a personas interesadas en diversos temas pertinentes a las ciencias ambientales y que pueden hacer buenos aportes como miembros de los comités tutoriales.<br>Sin embargo, en mi caso, me interesó también tomar clases que impartían otras instituciones. Así que, sin salir de la ciudad y, mientras tomaba otros cursos en el PMPCA, realicé estos cursos en otro posgrado CONACyT de la UASLP y en el IPICyT.<br><br> Si te interesa estudiar un posgrado en ciencias ambientales. El PMPCA es ideal porque desde él tienes acceso, no sólo a sus cursos y profesores, sino a los cursos y profesores del posgrado en ciencias ambientales vecino.<br><br>Cursar un posgrado es comúnmente un reto, pero las condiciones de multidisciplinariedad, así como de multi e interculturalidad que se dan en el PMPCA hicieron y hacen que cursarlo haya sido una experiencia interesante y atractiva.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button
                                                        id="botonesGeneral"
                                                        type="button" 
                                                        class="btn"
                                                        data-bs-dismiss="modal"
                                                        style="color: white;"
                                                        >
                                                        Cerrar
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" id="colorCard">
                                <img src="{{ asset('storage/images/6.png') }}" class="card-img-top" alt="...">
                                <div class="barraAzulFuerteS"></div>
                                <div class="card-body">
                                    <p class="card-title"><strong>EMPLEADOR <br> FONDO DE LA PAZ</strong>
                                    </p>
                                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="#"
                                        role="button"
                                        data-bs-toggle="modal" data-bs-target="#modal-fondo"
                                        >Ver mas...
                                    </a>

                                    <div class="modal modal-xl" id="modal-fondo">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                                <div class="modal-header my-modal-header d-flex justify-content-center">
                                                    <p class="modal-title" > EMPLEADOR FONDO DE LA PAZ
                                                    </p>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe width="560" height="315"
                                                            controls
                                                            src="{{ asset('storage/videos/fondo_paz.mp4') }}"
                                                            title="" frameborder="0"
                                                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen>
                                                        </iframe>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button
                                                        id="botonesGeneral"
                                                        type="button" 
                                                        class="btn"
                                                        data-bs-dismiss="modal"
                                                        style="color: white;"
                                                        >
                                                        Cerrar
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100" id="colorCard">
                                <img src="{{ asset('storage/images/4.png') }}" class="card-img-top" alt="...">
                                <div class="barraAzulFuerteS"></div>
                                <div class="card-body">
                                    <p class="card-title"> <strong>EMPLEADOR <br>
                                            ALINSA</strong></p>
                                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="#"
                                        role="button"
                                        data-bs-toggle="modal" data-bs-target="#modal-alinsa"
                                        >Ver mas...</a>
                                </div>
                            </div>

                            <div class="modal modal-xl" id="modal-alinsa">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <div class="modal-header my-modal-header d-flex justify-content-center">
                                            <p class="modal-title" > EMPLEADOR ALINSA </p>
                                        </div>

                                        <div class="d-flex justify-content-center modal-body">
                                            <iframe width="640" height="352"
                                                controls
                                                class="responsive-iframe"
                                                src="{{ asset('storage/videos/video_quimica.mp4') }}"
                                                title="" frameborder="0"
                                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>

                                        <div class="modal-footer">
                                            <button
                                                id="botonesGeneral"
                                                type="button" 
                                                class="btn"
                                                data-bs-dismiss="modal"
                                                style="color: white;"
                                                >
                                                Cerrar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3">

                </div>
                <div class="col-12 col-sm-9">
                    <div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
