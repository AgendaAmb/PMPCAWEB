@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="contTablaIzq">
            <div id="p-container" class="container px-lg-8.5 px-md-5">
                <div class="col-12 col-sm-12 border">
                    <img src="{{ asset('storage/images/2.png') }}" alt="">
                    <div class="barraAzulFuerte"></div>
                </div>
                <div id="professor-description" class="row mb-4 p-5">
                    <div class="col-12 col-sm-12">
                        <h1><strong>COMITÉ ACADÉMICO</strong></h1>
                    </div>
                    <div class="col-12 col-sm-12">
                        <div><br>
                            <h6 style="color: RGB(0, 74, 152)"><strong>Atribuciones y obligaciones</strong></h6>
                            <br>
                            <p>
                                La autoridad académica de los PMPCA es el Comité Académico (CA), el cual está conformado con
                                profesores investigadores de tiempo completo, miembros del núcleo básico. El Comité
                                Académico
                                está conformado
                                con tres representantes de cada una de las cinco áreas. Dos profesores titulares con derecho
                                a
                                voz y voto y un
                                suplente con derecho a voz y sólo en ausencia de uno de los titulares de su área con derecho
                                a
                                voto. <br><br>

                                El Comité Académico es presidido por el Coordinador Académico, quien a la vez, es el
                                responsable
                                de ejecutar las acciones emanadas del Comité Académico. A las reuniones del Comité pueden
                                asistir los profesores
                                del núcleo básico de los PMPCA, quienes solamente tienen derecho a voz. <br><br>

                                La permanencia de los integrantes en el Comité Académico dura dos años. Los miembros del
                                Comité
                                Académico se renuevan cada año, uno por área y sólo pueden ser reelegidos una vez en forma
                                consecutiva. <br><br>

                                El Comité Académico sesiona en forma ordinaria el primer martes laborable de cada mes. Las
                                solicitudes deben entregarse a más tardar el viernes previo a la reunión del CA.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12">
                        <a target="_blank" class="btn btn-primary rounded-pill" id="botonesGeneral"
                            href="https://uaslpedu-my.sharepoint.com/personal/coordinacion_academica_uaslp_mx/_layouts/15/onedrive.aspx?e=5%3Aeab26527bf944c78aa84b8e47561fe56&at=9&CT=1668432649253&OR=OWA%2DNT&CID=ac998011%2Decde%2De172%2Dd3fa%2D34141af369f3&FolderCTID=0x012000A47BA170C7F65146A8A5765BC1A5D370&id=%2Fpersonal%2Fcoordinacion%5Facademica%5Fuaslp%5Fmx%2FDocuments%2FMINUTAS%20PMPCA"
                            role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescargar
                            minutas&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h6><strong>Integrantes</strong></h6>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <br>
                                <h4><strong>Dr. Alfredo Ávila Galarza</strong></h4>
                                <p><strong id="nameProf">Coordinador Académico del PMPCA</strong></p>
                                <hr>
                                <br>
                                <h4><strong>Área de evaluación ambiental</strong></h4>
                                <p><strong id="nameProf">Dr. Alfredo Ávila Galarza</strong> <br> Titular y Coordinador
                                    Académico<br></p>
                                <p><strong id="nameProf">Dr. Guillermo Javier Castro Larragoitia</strong> <br> Titular<br></p>
                                <p><strong id="nameProf">Dr. Marcos Algara Siller</strong> <br>Suplente<br>
                                </p>
                                <hr>
                                <br>
                                <h4><strong>Área de gestión ambiental</strong></h4>
                                <!--<p><strong id="nameProf"> </strong> <br> Titular y Coordinadora de área<br>
                                </p>-->
                                <p><strong id="nameProf">Dr. Leonardo Ernesto Márquez Mieles</strong> <br> Titular<br></p>
                                <p><strong id="nameProf">Dr. Carlos Contreras Servín</strong> <br>Suplente<br></p>
                                <hr>
                                <br>
                                <h4><strong>Área de prevención y control</strong></h4>
                                <p><strong id="nameProf">Dra. Candy Carranza Álvarez</strong> <br>Titular y Coordinadora
                                    de área<br></p>
                                <p><strong id="nameProf">Dr. Luis Manuel Rosales Colunga</strong> <br>Titular<br>
                                </p>
                                <p><strong id="nameProf">Dra. Ma. Catalina Alfaro de la Torre</strong> <br>Suplente<br></p>
                                <hr>
                                <br>
                                <h4><strong>Área de recursos naturales renovables</strong></h4>
                                <p><strong id="nameProf">Dr. José Arturo De Nova Vázquez</strong> <br>Titular y Coordinador de
                                    área<br></p>
                                <p><strong id="nameProf">Dr. Carlos Alfonso Muñoz Robles</strong> <br>Titular<br></p>
                                <p><strong id="nameProf">Dr. Héctor Martín Durán García</strong> <br>Suplente<br></p>
                                <hr>
                                <br>
                                <h4><strong>Área de salud ambiental integral</strong></h4>
                                <p><strong id="nameProf">Dr. Francisco Javier Pérez Vázquez</strong> <br>Titular y Coordinador
                                    de área<br></p>
                                <p><strong id="nameProf">Dr. César Arturo Ilizaliturri Hernández</strong> <br>Titular<br></p>
                                <p><strong id="nameProf">Dr. Fernando Díaz-Barriga Martínez</strong> <br>Suplente<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="p-container" class="container px-lg-8.5 px-md-5">
                <div id="professor-description" class="row mb-4 p-5">
                    <div class="col-12 col-sm-12">
                        <h1><strong>NORMATIVA</strong></h1>
                    </div>
                    <div class="col-12 col-sm-12" id="enlacesNormativa">
                        <div>
                            <a target="_blank" href="storage/Doc/Reglamentoposgrado.pdf"> <strong>- Reglamento General de
                                    Estudios
                                    de Posgrado</strong></a>
                            <br><br>
                            <a target="_blank" href="storage/Doc/PMCA_PropuestaGral.pdf"> <strong>- Propuesta para la
                                    creación del
                                    Programa Multidisciplinario de Posgrado
                                    en Ciencias Ambientales</strong></a>
                                <br><br>
                                <a target="_blank" href="storage/Doc/2024_PMPCA_Normasgenerales_Doctorado.pdf"> <strong>- Normas Generales de Organización y Operación del Doctorado en Ciencias Ambientales</strong> </a>
                                <br><br>
                                <a target="_blank" href="storage/Doc/2024_PMPCA_Normasgenerales_Maestria.pdf"> <strong>- Normas Generales de Organización y Operación del Maestría en Ciencias Ambientales</strong></a>
                                <br><br>
                                <a target="_blank" href="storage/Doc/SistemaIntAseguramientoCalidad.pdf"> <strong>- Sistema
                                        Interno
                                        de Aseguramiento de la Calidad</strong> </a>
                                <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
