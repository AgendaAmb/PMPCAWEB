@extends('base')

@section('maincontent')
    <section>
        <div id="p-container" class="container px-lg-8.5 px-md-5 pb-5">
            <div class="col-12 col-sm-12"><br>
                <h1><strong>SEMINARIOS</strong></h1>
            </div>
            <div class="accordion p-2" id="accordionExample">
                <div class="accordion-item">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Seminario Multidisciplinario &nbsp</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse active show" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionTextM"><br>
                                <table class="width202">
                                        <thead>
                                            <tr>
                                                <th id="tablaTitulos"><b>Año</b></th>
                                                <th id="tablaTitulos"><b>Semestre</b></th>
                                                <th id="tablaTitulos">Descarga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2021</td>
                                                <td>Febrero - Junio</td>
                                                <td><a href="{{asset('storage/Doc/Multi_Feb-Jun2021.pdf')}}" target="_blank">Memorias</a></td>
                                            </tr>
                                            <tr>
                                                <td>2019</td>
                                                <td>Febrero - Junio</td>
                                                <td><a href="https://multi2019.wixsite.com/diagnosticossm#"
                                                        target="_blank">Memorias</a></td>
                                            </tr>
                                            <tr>
                                                <td>2018</td>
                                                <td>Septiembre - Febrero</td>
                                                <td><a href="{{asset('storage/Doc/Multi_Sep-Feb2019.pdf')}}" target="_blank">Memorias</a></td>
                                            </tr>
                                            <tr>
                                                <td>2017</td>
                                                <td>Febrero - Junio</td>
                                                <td><a href="{{asset('storage/Doc/Multi_Feb-Jun2017.pdf')}}" target="_blank">Memorias</a> / <a
                                                        href="{{asset('storage/Doc/Plenarias1_2017.pdf')}}" target="_blank">Presentaciones</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2016</td>
                                                <td>Febrero - Junio</td>
                                                <td><a href="{{asset('storage/Doc/Multi_Feb-Jun2016.pdf')}}" target="_blank">Memorias</a></td>
                                            </tr>
                                            <tr>
                                                <td>2015</td>
                                                <td>Agosto - Diciembre</td>
                                                <td><a href="{{asset('storage/Doc/Multi_Ago-Dic2015.pdf')}}" target="_blank">Memorias</a></td>
                                            </tr>
                                            <tr>
                                                <td>2014</td>
                                                <td>Febrero - Junio<br> Agosto - Diciembre </td>
                                                <td><a href="{{asset('storage/Doc/Multi_Feb-Jun2014.pdf')}}" target="_blank">Memorias</a> / <a
                                                        href="{{asset('storage/Doc/Plenarias1.pdf')}}" target="_blank">Plenaria 1</a>&nbsp;<a
                                                        href="{{asset('storage/Doc/Plenarias2.pdf')}}" target="_blank">Plenaria 2</a><br><a
                                                        href="{{asset('storage/Doc/Multi_Ago-Dic2014.pdf')}}" target="_blank">Memorias</a></td>
                                            </tr>
                                            <tr>
                                                <td>2013</td>
                                                <td>Agosto - Diciembre</td>
                                                <td><a href="{{asset('storage/Doc/Multi_Ago-Dic2013.pdf')}}" target="_blank">Memorias</a> / <a
                                                        href="{{asset('storage/Doc/Plenarias1_2013.pdf')}}" target="_blank">Plenaria
                                                        1</a>&nbsp;<a href="{{asset('storage/Doc/Plenarias2_2013.pdf')}}" target="_blank" >Plenaria 2</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <strong>Seminario de tesis &nbsp</strong>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionTextM"><br>
                                    <table class="width202">
                                        <thead>
                                            <tr>
                                                <th id="tablaTitulos"><b>Año</b></th>
                                                <th id="tablaTitulos"><b>Semestre</b></th>
                                                <th id="tablaTitulos">Descarga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2023</td>
                                                <td>Febrero - Julio<br>Agosto - Enero</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Feb_Jul2023.pdf')}}" target="_blank">Memorias</a><br>
                                                    <a href="{{asset('storage/Doc/SemTesis_Ago_Ene2023.pdf')}}" target="_blank">Memorias</a><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2021</td>
                                                <td>Febrero - Julio<br> Agosto - Enero</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Feb-Jul2021.pdf')}}" target="_blank">Memorias</a><br><a
                                                        href="{{asset('storage/Doc/SemTesis_Ago21-Ene22.pdf')}}" target="_blank">Memorias</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2020</td>
                                                <td>Marzo - Agosto<br>Septiembre - Febrero</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Mar-Ago2020.pdf')}}"
                                                        target="_blank">Memorias</a><br><a
                                                        href="{{asset('storage/Doc/SemTesis_Sep-Feb2021.pdf')}}" target="_blank">Memorias</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2019</td>
                                                <td>Marzo - Agosto<br>Septiembre - Febrero</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Mar-Ago2019.pdf')}}"
                                                        target="_blank">Memorias</a><br><a
                                                        href="{{asset('storage/Doc/SemTesis_Sep-Feb2020.pdf')}}" target="_blank">Memorias</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018</td>
                                                <td>Febrero - Julio<br>Septiembre - Febrero</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Feb-Jul2018.pdf')}}"
                                                        target="_blank">Memorias</a><br><a
                                                        href="{{asset('storage/Doc/SemTesis_Sep-Feb2019.pdf')}}" target="_blank">Memorias</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2017</td>
                                                <td>Febrero - Julio <br>Agosto - Diciembre</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Feb-Jun2017.pdf')}}"
                                                        target="_blank">Memorias</a><br><a
                                                        href="{{asset('storage/Doc/SemTesis_Ago-Dic2017.pdf')}}" target="_blank">Memorias</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2016</td>
                                                <td>Febrero - Julio<br>Agosto - Diciembre</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Feb-Jun2016.pdf')}}"
                                                        target="_blank">Memorias</a><br><a
                                                        href="{{asset('storage/Doc/SemTesis_Ago-Dic2016.pdf')}}" target="_blank">Memorias</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2015</td>
                                                <td>Febrero - Julio<br>Agosto - Diciembre</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Feb-Jun2015.pdf')}}"
                                                        target="_blank">Memorias</a><br><a
                                                        href="{{asset('storage/Doc/SemTesis_Ago-Dic2015.pdf')}}" target="_blank">Memorias</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2014</td>
                                                <td>Febrero - Julio<br> Agosto - Diciembre </td>
                                                <td><a href="{{asset('storage/Doc/MemoriasSemTes_enero-junio2014.pdf')}}"
                                                        target="_blank">Memorias</a><br><a
                                                        href="{{asset('storage/Doc/MemoriasSemTes_agosto-diciembre2014.pdf')}}"
                                                        target="_blank">Memorias</a></td>
                                            </tr>
                                            <tr>
                                                <td>2013</td>
                                                <td>Agosto - Diciembre</td>
                                                <td><a href="{{asset('storage/Doc/SemTesis_Ago-Dic2013.pdf')}}" target="_blank">Memorias</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
