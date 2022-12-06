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

                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <p class="modal-title">Doctor en Ciencias Ambientales Idrissa Diédhiou
                                                    </p>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="container text-center">
                                                        <div class="row">
                                                            <div class="col">
                                                                <img src="{{ asset('storage/images/DrIdrissa.png') }}"
                                                                    class="card-img-top" alt="...">
                                                                <br>
                                                                <p> <strong>Generacion 2018</strong></p>

                                                                <p>
                                                                    Tesis “Physiology, metabolomic profiles,
                                                                    and yield of native genotypes of maize
                                                                    (zea mays l.) And their milpa systems
                                                                    (maize+bean+squash) from San Luis
                                                                    Potosí (México) under related effects of
                                                                    climate change.”
                                                                </p>
                                                            </div>
                                                            <div class="col">
                                                                <p id="contTablaIzq">
                                                                    Me llamo Idrissa Diédhiou, de nacionalidad senegalesa,
                                                                    ingeniero agrónomo de formación, maestro en producción
                                                                    agropecuaria por
                                                                    parte de la facultad de Agronomía y Veterinaria de la
                                                                    Universidad
                                                                    Autónoma de San Luis Potosí (UASLP) y egresé del
                                                                    Doctorado en Ciencias
                                                                    Ambientales del Programa Multidisciplinario de Posgrado
                                                                    en Ciencias
                                                                    Ambientales (PMPCA) de la UASLP en febrero del 2022. Mi
                                                                    testimonio
                                                                    se basa en mi experiencia personal desde la preparación
                                                                    de los
                                                                    documentos para ingresar a finales del 2017 hasta mi
                                                                    fecha de egreso y se basa en
                                                                    lo académico y administrativo. Desde lo administrativo
                                                                    es un programa
                                                                    muy abierto y con reglas y principios bien especificas
                                                                    para cada caso, lo
                                                                    que facilita el enten dimiento de cómo ingresar y los
                                                                    requisitos durante la
                                                                    formación de los estudiantes. Del lado académico
                                                                    igualmente presenta un
                                                                    plan de estudio específico que permite saber punto a
                                                                    punto los bases a
                                                                    cumplir por semestre etc. Además, debo añadir, el
                                                                    trabajo del personal
                                                                    administrativo que es excelente.
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
                                                                    <br>
                                                                    Por último, muchas gracias a PMPCA por darme la
                                                                    oportunidad de cumplir un sueño.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Close</button>
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
                                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="#"
                                        role="button">Ver mas...</a>
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
                                        role="button">Ver mas...</a>
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
                                        role="button">Ver mas...</a>
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
