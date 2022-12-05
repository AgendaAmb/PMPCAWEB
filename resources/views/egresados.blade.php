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
                                            <button type="button" class="btn btn-primary" id="botonesGeneral" data-bs-toggle="modal" data-bs-target="#myModal">
                                              Ver más...
                                            </button>
                                          </div>
                                          
                                          <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                          
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Modal Heading</h4>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                          
                                                <div class="modal-body">
                                                  Modal body..
                                                </div>
                                          
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
