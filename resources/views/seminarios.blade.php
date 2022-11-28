@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5 pb-5">
        <div class="col-12 col-sm-12">
            <h1><strong>SEMINARIOS</strong></h1>
        </div>
        <div class="accordion p-2" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Seminario Multidisciplinario &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="col-12 col-sm-12 mx-5">
                                <div class="col-12 col-sm-10 mx-5">
                                    <div class="col-12 col-sm-10 border mx-5">
                                        <table class="table table-striped-columns">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Año</th>
                                                    <th scope="col">Semestre</th>
                                                    <th scope="col">Descargar</th>
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
                                                    <td>Marzo - Agosto <br> Septiembre - Febrero</td>
                                                    <td><a href="#">Memorias</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2018</th>
                                                    <td>Febrero - Julio <br> Septiembre - Febrero</td>
                                                    <td><a href="#">Memorias</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2017</th>
                                                    <td>Febrero - Junio</td>
                                                    <td><a href="#">Memorias / Presentaciones</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2016</th>
                                                    <td>Febrero - Julio <br> Agosto - Diciembre</td>
                                                    <td><a href="#">Memorias</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2015</th>
                                                    <td>Febrero - Julio <br> Agosto - Diciembre</td>
                                                    <td><a href="#">Memorias</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2014</th>
                                                    <td>Febrero - Julio <br> Agosto - Diciembre</td>
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
                                    <div class="col-12 col-sm-2 border mx-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <strong>Seminario de tesis &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="col-12 col-sm-12 mx-5">
                                <div class="col-12 col-sm-10 mx-5">
                                    <div class="col-12 col-sm-10 border mx-5">
                                        <table class="table table-striped-columns">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Año</th>
                                                    <th scope="col">Semestre</th>
                                                    <th scope="col">Descargar</th>
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
                                                    <td>Marzo - Agosto <br> Septiembre - Febrero</td>
                                                    <td><a href="#">Memorias</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2018</th>
                                                    <td>Febrero - Julio <br> Septiembre - Febrero</td>
                                                    <td><a href="#">Memorias</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2017</th>
                                                    <td>Febrero - Junio</td>
                                                    <td><a href="#">Memorias / Presentaciones</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2016</th>
                                                    <td>Febrero - Julio <br> Agosto - Diciembre</td>
                                                    <td><a href="#">Memorias</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2015</th>
                                                    <td>Febrero - Julio <br> Agosto - Diciembre</td>
                                                    <td><a href="#">Memorias</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2014</th>
                                                    <td>Febrero - Julio <br> Agosto - Diciembre</td>
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
                                    <div class="col-12 col-sm-2 border mx-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
