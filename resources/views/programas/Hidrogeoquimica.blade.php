@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>HIDROGEOQUÍMICA</strong></h1>
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
                                        <td>Electiva u optativa</td>
                                        <td>Curso</td>
                                        <td>Español</td>
                                        <td>Presencial</td>
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
                                        <th scope="col">Número de semanas</th>
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
                                        <td>4</td>
                                        <td>0</td>
                                        <td>4</td>
                                        <td>8</td>
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
                <p>Al concluir esta asignatura, el estudiante comprenderá los principios básicos condicionan la composición química del agua subterránea y su evolución a lo largo de la dirección de flujo, determinando cualitativa y cuantitativamente mediante diversas técnicas de cómputo, las reacciones de interacción entre el agua subterránea y el medio geológico con el que está en contacto.
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
                                        <td id="contTabla"><strong>competencia (s) profesional (es) que contribuye a desarrollar la materia</strong></td>

                                        <td>Capacidad para realizar un análisis hidrogeoquímico de sistemas complejos, eligiendo y aplicando de forma pertinente metodologías apropiadas para interpretar y resolver el problema. Identificación de las restricciones sociales, de salud y ambientales inherentes a la calidad del agua subterránea.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Competencia (s) transversal (es)a las que contribuye a desarrollar la materia</strong> </td>

                                        <td>Capacidad de comunicar eficazmente problemas relacionados con la calidad del agua y presentar soluciones en forma individual y en equipo, reconociendo la necesidad de formación continua.
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
                                        <td>INTRODUCCIÓN A LA GEOQUÍMICA DEL AGUA SUBTERRÁNEA</td>
                                        <td id="contTablaIzq"> El participante conocerá el funcionamiento general del programa AQUACHEM y aprenderá a generar gráficos y tablas para reportes a partir de los resultados de análisis químicos, estudiará los protocolos de campo y laboratorio requeridos para generar información hidrogeoquímica válida que pueda ser utilizada para interpretación.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, discusión de temas, investigación en grupo, utilización de diversos programas de cómputo para realizar cálculos y elaborar diagramas</li>
                                                <li>Controles de lectura de los capítulos señalados. Ejercicios utilizando el programa AQUACHEM para analizar los resultados de análisis químicos</li>
                                                <li>Mediciones de campo de parámetros hidrogeoquímicos, determinación de la alcalinidad de muestras de agua subterránea, integración de formatos de colección de datos de campo</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>EQUILIBRIO QUÍMICO ENTRE AGUA Y MINERALES</td>
                                        <td id="contTablaIzq">Definición de los principios termodinámicos útiles para el análisis de reacciones químicas, además de que conocerá los programas de cómputo que se utilizan para realizar los cálculos de equilibrio entre el agua y los minerales.</td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, discusión de temas, investigación en grupo, utilización de diversos programas de cómputo para realizar cálculos y elaborar diagramas</li>
                                                <li>Utilización del programa PHREEQC para el cálculo de índices de saturación y actividades mediante AQUACHEM. Interface AQUACHEM-PHREEQC-2: Comandos SOLUTION, SOLUTION SPREAD, SELECTED OUTPUT, EQUILIBRIUM PHASES. Estudio de caso: interpretación de datos de índices de saturación en el agua subterránea de las cuencas de Cuatrociénegas y San Luis Potosí.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>QUÍMICA DEL AGUA SUBTERRÁNEA EN ROCAS CALCÁREAS</td>
                                        <td id="contTablaIzq">
                                        Conocer los fundamentos básicos en sistema de carbonatos, la importancia del dióxido de carbono y las reacciones que condicionan la composición química del agua subterránea en rocas calcáreas.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, discusión de temas, investigación en grupo, utilización de diversos programas de cómputo para realizar cálculos y elaborar diagramas.</li>
                                                <li>Utilización del programa PHREEQC y AQUACHEM. Determinación de especies de carbonatos utilizando PHREEQC. Cálculo de pH de muestras de agua utilizando AQUACHEM. Modelación progresiva con PHREEQC-3, comando REACTION y REACTION TEMPERATURE.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>PROCESOS Y REACCIONES REDOX</td>
                                        <td id="contTablaIzq">
                                        Establecer la importancia de las reacciones oxidación-reducción en los sistemas de flujo de agua subterránea y su control en la evolución de la composición química</td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, discusión de temas, investigación en grupo, utilización de diversos programas de cómputo para realizar cálculos y elaborar diagramas.</li>
                                                <li>Cálculo de pH y Eh de muestras de agua utilizando AQUACHEM. Modelación progresiva con PHREEQC-3, comando REACTION y REACTION TEMPERATURE de las reacciones de generación de drenaje ácido y su neutralización</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>TRANSPORTE DE SOLUTOS CONSERVATIVOS Y NO CONSERVATIVOS (INTERCAMBIO CATIÓNICO)</td>
                                        <td id="contTablaIzq">
                                        Conocer los mecanismos de interacción del agua subterránea con la superficie de minerales. El estudiante tendrá la oportunidad de integrar la información hidrogeoquimica para simular diversas alternativas de transporte de solutos en medios saturados.</td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                Exposición oral por parte del profesor, discusión de temas, investigación en grupo, utilización de diversos programas de cómputo para realizar cálculos de modelación inversa y progresiva</li>
                                                <li>Utilización del programa PHREEQC y AQUACHEM para la modelación progresiva con PHREEQC-3 (Comandos TRANSPORT, ADVECTION, y EXCHANGE).</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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
                                        <td>Semana 8</td>
                                        <td>Examen teórico-práctico</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Semana 16</td>
                                        <td>Examen téorico-práctico</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Semana 5</td>
                                        <td>Trabajo de interpretación Unidad 2</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Semana 9</td>
                                        <td>Trabajo de interpretación Unidad 3 y 4</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Semana 13</td>
                                        <td>Trabajo de investigación Unidad 5</td>
                                        <td>20%</td>
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
                <ol>
                    <li>APPELO, C.A.J., y POSTMA, D. (2013). Geochemistry, groundwater and pollution. Second Edition, A.A. Balkema, 535 p.</li>
                    <li>CARDONA, A., GUTIERREZ-OJEDA, C., MARTÍNEZ-MORALES, M., ORTIZ-FLORES, G., GONZÁLEZ-HITA. L. (2018). Hydrogeochemical characterization and evolution of a regional karst aquifer unit, Cuatrociénegas basin, Mexico, Environ Earth Sci, 77:785, https://doi.org/10.1007/s12665-018-7953-x, ISSN: 1866-6280 (Print) 1866-6299 (Online)</li>
                    <li>DREVER, J.I. (1982). The geochemistry of natural waters. Prentice Hall Inc. Englewood Cliffs, N.J., 388p</li>
                    <li>FETTER JR. CW.( 2014). Applied hydrogeology, Fourth edition, Pearson Education Limited, 610 pp.</li>
                    <li>GLYN D. P. AND PLUMMER L.N. (2005) Geochemistry and the understanding of groundwater flow systems, Hydrogeol J 13: 263-287, DOI 10.1007/s10040-004-0429-y.</li>
                    <li>KEHEW, A.E. (2000). Applied chemical hydrogeology. Prentice-Hall Inc. 368 p.</li>
                    <li>LLOYD, J. W. Y HEATHCOTE, J.A. (1985). Natural inorganic hydrochemistry in relation to groundwater, an introduction. Clarendon Press, Oxford, 296 p.</li>
                    <li>NORDSTROM, D.K. and P. SMEDLEY, 2022, Fluoride-in-Groundwater . The Groundwater Project, Guelph, Ontario, Canada</li>
                    <li>PARKHURST, D.L., and APPELO, C.A.J., 2013, Description of input and examples for PHREEQC version 3—A computer program for speciation, batch-reaction, one-dimensional transport, and inverse geochemical calculations: U.S. Geological Survey Techniques and Methods, book 6, chap. A43, 497 p., available only at <a href="http://pubs.usgs.gov/tm/06/a43/">http://pubs.usgs.gov/tm/06/a43/</a>.</li>
                </ol>
            </div>

            <hr>
                <h5> <strong>Textos complementarios</strong></h5>
                <div class="margen">
                <ol>
                    <li>MERKEL, B.J., Y PLANER-FIEDRICH B. (2005). Groundwater Geochemistry, a practical guide to modeling of natural and contaminated aquatic systems, Springer, 200 p.</li>
                    <li>CARRILLO-RIVERA, J.J., CARDONA, A. Y EDMUNDS, W. M. (2002). Use of abstraction regime and knowledge of hydrogeological conditions to control high-fluoride concentration in abstracted groundwater: San Luis Potosí basin, México. Journal of Hydrology, v. 261, pp. 24-47.</li>
                    <li>ZHU, CH. Y ANDERSON, G. (2002). Environmental applications of Geochemical Modeling. Cambridge University Press, 284 p.</li>
                    <li>DEUTSCH, W.J. (1997). Groundwater geochemistry: fundamentals and applications to contamination, CRC Press LLC, 221 p.</li>
                    <li>DOMENICO, P. A., and SCHWARTZ, F. W., (1998). Physical and Chemical Hidrogeology, John Wiley & Sons, Inc.</li>
                </ol>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li><a href="http://extension.usu.edu/waterquality/htm/wqtool">http://extension.usu.edu/waterquality/htm/wqtool</a></li>
                    <li><a href="https://www.ndsu.edu/webphreeq/">https://www.ndsu.edu/webphreeq/</a></li>
                    <li><a href="https://link.springer.com/journal/12665">https://link.springer.com/journal/12665</a></li>
                    <li><a href="https://www.journals.elsevier.com/applied-geochemistry">https://www.journals.elsevier.com/applied-geochemistry</a></li>
                    <li><a href="https://gw-project.org/?lang=es">https://gw-project.org/?lang=es</a></li>
                    <li><a href="https://or.water.usgs.gov/alk/">https://or.water.usgs.gov/alk/</a></li>
                    <li><a href="https://www.usgs.gov/software/phreeqc-version-3">https://www.usgs.gov/software/phreeqc-version-3</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario: 
                    <br>• Sin restricciones
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:</p>
                    <ul>
                        <li>Posgrado en Tecnología y Gestión del Agua</li>
                        <li>Geología Aplicada</li>
                    </ul>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>Si</strong></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 15.</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1.</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Antonio Cardona Benavides
                    <br>
                    <strong> • Revisó:</strong> Israel Razo Soto
                </p>
            </div>
        </div>
    </div>
@endsection
