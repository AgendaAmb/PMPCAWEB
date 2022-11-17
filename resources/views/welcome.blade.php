
@extends('base')

@section('maincontent')

    <div id="p-container" class="container px-lg-8.5 px-md-5  ">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12  ">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://placekitten.com/g/1318/500" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h4>Programa Multidiciplinario de Posgrado en Ciencias Ambientales</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi provident error alias cupiditate quas magni ratione, consectetur quae fuga sapiente tempora hic maiores, tempore aut ipsa earum voluptate delectus laudantium?</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>

            <div class="barraAzulFuerte"></div>

            <div class="col-12 col-sm-12   my-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100" id="colorCard">
                        <img src="https://placekitten.com/g/320/160" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"> <strong> Doctorado en ciencias ambientales</strong></h5>
                          <button type="button" class="btn btn-primary">Convocatoria</button>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100" id="colorCard">
                        <img src="https://placekitten.com/g/320/160" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"> <strong> Maestria en ciencias ambientales </strong></h5>
                          <button type="button" class="btn btn-primary">Convocatoria</button>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100" id="colorCard">
                        <img src="https://placekitten.com/g/320/160" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><strong>Maestria en ciencias ambientales (Doble titulación)</strong></h5>
                          <button type="button" class="btn btn-primary">Convocatoria</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-3   ">
                
            </div>
            <div class="col-12 col-sm-9">
                <div>

                </div>
            </div>
        </div>


        <div class=¨container-fluid¨ id="videoInicio">
            <div class="row">
                <div class="col-12 col-sm-6  ">
                <div class="izquierda">
                    <img src="https://placekitten.com/g/500/310" alt="">
                </div>
                </div>
                <div class="col-12 col-sm-6  " id="colorCard">
                <div class="derechaInicio  " >
                    <br>
                    <p> <strong>NUESTROS EGRESADOS</strong> </p>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe enim aut doloremque dolore in harum, doloribus libero nemo adipisci repudiandae perspiciatis modi quam nihil veritatis repellendus reiciendis commodi nostrum. Placeat!</span>
                </div>
                </div>
            </div>
            </div>
    
            <div class="col-12 col-sm-12   my-5">
                <div class="row">
                    <div class="col-12 col-sm-2 ">
                        <a href="#"><img src="{{asset('storage/images/Calendario.png')}}" alt=""></a>
                        Calendario
                    </div>
                    <div class="col-12 col-sm-2  ">
                        <a href="#"><img src="{{asset('storage/images/Solicitud de instalaciones.png')}}" alt=""></a>
                        Solicitud de &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp instalaciones
                    </div>
                    <div class="col-12 col-sm-2  ">
                        <a href="#"><img src="{{asset('storage/images/Intranet.png')}}" alt=""></a>
                        INTRANET
                    </div>
                    <div class="col-12 col-sm-2  ">
                        <a href="#"><img src="{{asset('storage/images/Programación semestral.png')}}" alt=""></a>
                        Programación &nbsp &nbsp &nbsp &nbsp &nbsp &nbspsemestral
                    </div>
                    <div class="col-12 col-sm-2  ">
                        <a href="#"><img src="{{asset('storage/images/Tramites.png')}}" alt=""></a>
                        Tramites
                    </div>
                    <div class="col-12 col-sm-2  ">
                        <a href="#"><img src="{{asset('storage/images/Becas.png')}}" alt=""></a>
                        Becas
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12   my-5">
                <img src="https://placekitten.com/g/1100/240" alt="">
            </div>

    </div>

    @endsection