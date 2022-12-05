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
                                    <button class="btn btn-sucess" data-toggle="modal" data-target="#ventanaModal">

                                    </button>
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
        <div class="modal" id="ventanaModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
