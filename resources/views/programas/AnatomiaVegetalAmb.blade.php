@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>GESTIÓN DE RESIDUOS Y ECONOMÍA CIRCULAR</strong></h1>
                </div>
                <p></p>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Datos generales</strong></h4>
                        <br>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Tipo de crédito</th>
                                        <th scope="col">Tipo de asignatura</th>
                                        <th scope="col">Idioma de impartición</th>
                                        <th scope="col">Modalidad de impartición</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Optativo</td>
                                        <td>Curso</td>
                                        <td>Español</td>
                                        <td>Presencial y/o no presencial</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p></p>
                <hr>
                <p></p>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Créditos</strong></h4>
                        <p>De acuerdo con la propuesta curricular, los datos escolares de la asignatura son:</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Semestre</th>
                                        <th scope="col">No. de semanas</th>
                                        <th scope="col">Horas presenciales de teoría por semana</th>
                                        <th scope="col">Horas presenciales de práctica por semana</th>
                                        <th scope="col">Horas de trabajo autónomo del estudiante por semana</th>
                                        <th scope="col">Total de créditos (RGEP)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>16</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>6</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p></p>
                <hr>
                <p></p>
                <h4> <strong>Objetivo general de aprendizaje</strong> </h4>
                <p>Al concluir esta asignatura, el estudiante logrará Conocer los conceptos básicos de la estructura y su relación con el funcionamiento de las plantas vasculares, así como los detalles de sus mecanismos de desarrollo, y será capaz de aplicarlos para analizar el efecto del ambiente (factores bióticos y abióticos) en su respuesta.
                </p>
                <br>
                <hr>
                <p></p>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Competencias profesionales a las que contribuye la asignatura</strong></h4>
                        <p>Esta asignatura contribuye de manera directa al logro de las siguientes competencias profesionales del perfil de egreso del programa:</p>
                        <div class="table-responsive" id="contTablaIzq">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Competencia</th>
                                        <th scope="col">Descripción de la competencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="contTabla">Técnica</td>

                                        <td>Conocer la evolución en la estructura y desarrollo de las células y los tejidos de las plantas vasculares</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Técnica </td>

                                        <td>Conocer los aspectos descriptivos de la estructura de las plantas vasculares con énfasis en sus patrones de desarrollo y funcionamiento.    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla">Técnica
                                        </td>

                                        <td>Conocer la influencia del ambiente en la estructura y el desarrollo de las plantas vasculares, con énfasis en la respuesta al estrés por factores climáticos, los contaminantes y las interacciones con otros organismos.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Planeación didáctica general</strong></h4>
                        <p>A continuación, se describe la planeación general del proceso de aprendizaje:</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de la unidad o fase</th>
                                        <th scope="col">Resultados de aprendizaje específicos</th>
                                        <th scope="col">Metodologías y actividades de enseñanza - aprendizaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Introducción </td>
                                        <td id="contTablaIzq"> 1.1 Las plantas vasculares
                                        <br>1.2 La célula vegetal
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición del profesor en aula</li>
                                                <li>Lecturas de textos impresos y electrónicos</li>
                                                <li>Práctica 1 de laboratorio en identificación de tejidos vegetales</li>
                                                <li>Práctica 2 en campo en recolección y fijación de material vegetal</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Estructura y desarrollo de plantas vasculares</td>
                                        <td id="contTablaIzq">2.1 Epidermis
                                        <br>2.2 Meristemos primarios y secundarios
                                        <br>2.3 Sistema vascular
                                        <br>2.4 Raíz
                                        <br>2.5 Hoja
                                        <br>2.6 Esporofito
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición del profesor en aula</li>
                                                <li>Lecturas de textos impresos y electrónicos</li>
                                                <li>Práctica 3 de laboratorio infiltración e inclusión en diferentes materiales de secciones vegetales</li>
                                                <li>Práctica 4 de laboratorio en seccionamiento con microtomo rotatorio y de deslizamiento</li>
                                                <li>Práctica 5 de laboratorio en tinciones de tejido vegetal
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Influencia del ambiente en la estructura y desarrollo de los tejidos</td>
                                        <td id="contTablaIzq">3.1 Modificaciones en respuesta a los factores climáticos y edáficos 
                                        <br>3.2 Modificaciones en respuesta a la contaminación ambiental
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición del profesor en aula</li>
                                                <li>Lecturas de textos impresos y electrónicos</li>
                                                <li>Práctica 6 de laboratorio en captura de imágenes digitales en el microscopio óptico y utilización de software para realizar mediciones</li>
                                                <li>Ensayo técnico-científico con tema libre
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Evaluación</strong></h4>
                        <p>A continuación, se muestra las condiciones de las evaluaciones parciales.</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col"># <br> parcial</th>
                                        <th scope="col">Momento de evaluación</th>
                                        <th scope="col">Método de evaluación y valor para la</th>
                                        <th scope="col">Ponderación para evaluación final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Al término de la Unidad 1</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen escrito con un valor del 80% del parcial</li>
                                                <li>Reporte escrito de prácticas 20% del parcial.</li>
                                            </ul>
                                        </td>
                                        <td>33.33%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al término de la Unidad 2</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen escrito con un valor del 50% del parcial</li>
                                                <li>Reporte escrito de prácticas 30% del parcial.</li>
                                                <li>Exposición crítica de un artículo sobre anatomía vegetal se evaluará con el 20% del parcial.</li>
                                            </ul>
                                        </td>
                                        <td>33.33%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al término de la Unidad 3</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Ensayo técnico-científico escrito con un valor de 90% del parcial.</li>
                                                <li>Reporte escrito de prácticas 10% del parcial</li>
                                            </ul>
                                        </td>
                                        <td>33.33%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <h5> <strong>Textos básicos</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Bouazizi H, Jouili H, Geitmann A, El Ferjani E (2010) Structural Changes of Cell Wall and Lignifying Enzymes Carlquist S (2001) Comparative wood anatomy, Springer, 448 p</li>
                    <li>Modulations in Bean Roots in Response to Copper Stress. Biol Trace Elem Res 136:232–240</li>
                    <li>Esau K (1977) Anatomy of seed plants, 2nd edition, John Wiley and Sons</li>
                    <li>Evert RF (2006) Esau´s plant anatomy, Wiley, 600 p</li>
                    <li>Roth I (1982) Structural patterns of tropical barks. Encyclopedia of Plant Anatomy. 609 p</li>
                    <li>Schweingruber FH, Börner A, Schulze ED (2006) Atlas of woody plant stems, Springer -Verlag. 229 p</li>
                    <li>Stoyanova D, Tchakalova (1999) Cadmium induced ultrastructural changes in shoot apical meristem of Elodea Canadensis Rich. Photosynthetica 37:47-52</li>
                    <li>Taiz L, Zeiger E (2006) Fisiología vegetal. Vol. 1. Universitat Jaume 580 p</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li><a href="https://insidewood.lib.ncsu.edu/welcome">https://insidewood.lib.ncsu.edu/welcome</a></li>
                    <li><a href="https://ri.conicet.gov.ar">https://ri.conicet.gov.ar</a> › bitstream › handle</li>
                    <li><a href="https://imagej.nih.gov/ij/download.html">https://imagej.nih.gov/ij/download.html</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                <br>
                <br>Tener conocimientos básicos de botánica básica.
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>Si</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 5</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Laura Yáñez Espinosa
                    <br>
                    <strong> • Revisó:</strong> Carlos Alfonso Muñoz Robles
                </p>
            </div>
        </div>
    </div>
@endsection
