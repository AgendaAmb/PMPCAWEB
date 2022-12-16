@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12 p-0 m-0">
                <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1">
                        </button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/images/1.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p id="bienvenida"> <strong>Programa Multidisciplinario de <br> Posgrado en Ciencias
                                        Ambientales</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="barraAzulFuerte"></div>
                </div>

                <div class="col-12 my-3 m-1">

                    <div class="row row-cols-lg-3 row-cols-md-2 mx-3">

                        <div class="col col-12 my-3">
                            <div class="card h-100 rounded-0" id="colorCard">
                                <img src="{{ asset('storage/images/izquierda.png') }}" class="card-img-top rounded-0" alt="...">
                                <div class="barraAzulFuerteS"></div>
                                <div class="card-body rounded-0">
                                    <p class="card-title"> <strong>DOCTORADO EN CIENCIAS AMBIENTALES</strong></p>
                                    <a class="btn btn-primary" id="botonesGeneral" target="_blank" href="storage/Doc/Conv_DCA2022.pdf"
                                    role="button">Convocatoria</a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-12 my-3">
                            <div class="card h-100 rounded-0" id="colorCard">
                                <img src="{{ asset('storage/images/centro.png') }}" class="card-img-top rounded-0" alt="...">
                                <div class="barraAzulFuerteS"></div>
                                <div class="card-body rounded-0">
                                    <p class="card-title"> <strong>MAESTRÍA EN CIENCIAS AMBIENTALES</strong></p>
                                    <a class="btn btn-primary" id="botonesGeneral" target="_blank" href="storage/Doc/Conv_MCA2022.pdf"
                                    role="button">Convocatoria</a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-12 my-3 mr-5">
                            <div class="card h-100 rounded-0" id="colorCard">
                                <img src="{{ asset('storage/images/derecha.png') }}" class="card-img-top rounded-0" alt="...">
                                <div class="barraAzulFuerteS"></div>
                                <div class="card-body rounded-0">
                                    <p class="card-title"><strong>MAESTRÍA EN CIENCIAS AMBIENTALES (Doble
                                            titulación)</strong>
                                    </p>
                                    <a class="btn btn-primary" id="botonesGeneral" target="_blank"
                                    href="https://www.enrem-master.info/application" role="button">Convocatoria</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class=¨container-fluid¨ id="videoInicio">

                <div class="row mx-3">

                    <div class="col-md-6 col-sm-12 m-0 p-0">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315"
                                sandbox
                                src="{{ asset('storage/videos/fondo_paz.mp4') }}"
                                title="" frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 m-0 p-0" style="background-color: rgb(0, 74, 152);">
                        <div id="colorCard" class="ms-2 px-3 py-3 h-100">
                            <p><strong>NUESTROS EGRESADOS</strong></p>
                            <div id="contTablaIzq">
                                Empleadores hablan sobre nuestros egresados del Programa Multidisciplinario en Ciencias Ambientales.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-sm-12 mt-5" id="rowInicio">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="{{ url('/calendario') }}"><img src="{{ asset('storage/images/Calendario.png') }}"
                                alt="" style="width:150px;height:150px"> </a>
                        <p> <strong>Calendario</strong></p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#"><img src="{{ asset('storage/images/Solicitud de instalaciones.png') }}"
                                alt="" style="width:150px;height:150px"></a>
                        <p> <strong>Solicitud instalaciones</strong></p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#"><img src="{{ asset('storage/images/Intranet.png') }}" alt=""
                                style="width:150px;height:150px"></a>
                        <p> <strong>INTRANET</strong></p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#"><img src="{{ asset('storage/images/Programación semestral.png') }}"
                                alt="" style="width:150px;height:150px"></a>
                        <p> <strong>Programación semestral</strong></p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="{{ url('/tramites') }}"><img src="{{ asset('storage/images/Tramites.png') }}"
                                alt="" style="width:150px;height:150px"></a>
                        <p> <strong>Trámites</strong> </p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="{{ url('/becas') }}"><img src="{{ asset('storage/images/Becas.png') }}"
                            alt="" style="width:150px;height:150px"></a>
                        <p> <strong>Becas</strong></p>
                    </div>
                    {{-- <div class="col-12 col-sm-2">
                        <div class="col-12 col-sm-12">
                            <a href="{{ url('/becas') }}"><img src="{{ asset('storage/images/Becas.png') }}"
                                    alt="" style="width:150px;height:150px"></a>
                        </div>
                        <div class="col-12 col-sm-12">
                            <p> <strong>Becas</strong></p>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-12 col-sm-12 mt-5">
                <img src="{{ asset('storage/images/7.png') }}" alt="">
            </div>

        </div>
    </div>
@endsection
