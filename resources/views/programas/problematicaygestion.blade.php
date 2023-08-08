@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>PROBLEMÁTICA Y GESTIÓN AMBIENTAL</strong></h1>
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
                                        <td>Obligatorio</td>
                                        <td>Curso</td>
                                        <td>Español</td>
                                        <td>Mixta</td>
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
                                        <td>1</td>
                                        <td>&nbsp;</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>3</td>
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
                <p>Reflexionar sobre la problemática ambiental actual, sus implicaciones y posibles soluciones desde la gestión ambiental</p>
                <br>
                <h4> <strong>Objetivos específicos</strong> </h4>
                <p>Que el estudiante:<br>
                    <ul>
                        <li>Comprenda como la problemática y la gestión ambiental son socialmente construidas, enteder la naturaleza social de los problemas ambientales.</li>
                        <li>Analice las causas y consecuencias de la crisis ambiental global, su dinámica temporal y espacial, sus dimensiones y manifestaciones en diferentes escalas y socioecosistemas.</li>
                        <li>Indague sobre las bases para la gestión de la problemática ambiental.</li>
                        <li>Revisar el estatus de los procesos en la biosfera para los que es necesario definir límites planetarios.</li>
                        <li>Revisar las bases normativas, políticas públicas y la gobernanza en el ámbito de la gestión ambiental en México.</li>
                        <li>Analizar el proceso de la gestión ambiental en relación a la contaminación ambiental, el sistema agroalimentario, los tecnoensambles y la reducción del riesgo de desastres.</li>
                    </ul>
                </p>
                <p></p>
                <hr>
                <p></p>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Competencia profesionales a las que contribuye la asignatura</strong></h4>
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
                                        <td id="contTabla"> <strong>Competencia(s) profesional(es) que contribuye a desarrollar la materia</strong></td>

                                        <td>Diseñar y aplicar sistemas de gestión ambiental estratégica, con base en una aproximación basada en la realidad compleja, la teoría general de sistemas, en forma multidisciplinaria, para la gestión del riesgo, considerando: los peligros, exposición y amenazas provocadas por la crisis ambiental global.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Desempeño de la competencia profesional a los que contribuye la materia</strong></td>

                                        <td>
                                            <ul>
                                                <li>Caracterizar las diferentes amenazas ambientales a la salud humana, de los ecosistemas y de la biosfera en general.</li>
                                                <li>Evaluar el estado actual de los servicios ambientales incluyendo todas las dimensiones de la sostenibilidad (física, biológica, ecológica, económica y sociocultural), en forma transescalar o funcional.</li>
                                                <li>Diseñar sistemas de gestión ambiental del riesgo.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Comptencia(s) transversal(es) a las que contribuye a desarrollar la materia</strong>
                                        </td>

                                        <td>La Ético-valoral; la comunicativa y de información internacional e intercultural; la de sensibilidad, la de cuidado de la salud; la de responsabilidad social y ambiental; y la científico tecnológica.</td>
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
                                        <td>Introducción a la problemática y la gestión ambiental.</td>
                                        <td id="contTablaIzq"> Que el estudiantado:
                                            <ul>
                                                <li>Comprenda como la problemática y la gestión ambiental, son socialmente construidos, entender la natural social de los problemas ambientales.</li>
                                                <li>Analice las causas y consecuencias de la crisis ambiental global, su dinámica temporal y espacial, sus dimensiones y manifestaciones en diferentes escalas y socioecosistemas.</li>
                                                <li>Indague sobre las bases para la gestión de la problemática ambiental.</li>
                                            </ul>
                                        </td>
                                        <td id="contTablaIzq">
                                            <p>Métodos de enseñanza y prácticas:</p>
                                            <ul>
                                                <li>
                                                    En un ambiente de discusión incluyente, los conceptos que aportan las lecturas permitirán construir estructuras de pensamiento para articular los conocimientos previos con las experiencias individuales del estudiantado en relación a la problemática de sus países y regiones de origen.
                                                </li>
                                            </ul>
                                            <p>Actividades de aprendizaje:</p>
                                            <ul>
                                                <li>
                                                    Lecturas previas a cada sesión.
                                                </li>
                                                <li>
                                                    Discusión, análisis ý síntesis durante las sesiones presenciales.
                                                </li>
                                                <li>
                                                    Presentaciones orales por parte del estudiantado.
                                                </li>
                                                <li>
                                                    Examen escrito.
                                                </li>
                                                <li>
                                                    Ensayo.
                                                </li>
                                            </ul>
                                        </td>

                                    <tr>
                                        <td>2</td>
                                        <td>Problemática ambiental.</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Revisar el estatus de los procesos en la biosfera para los que es necesario definir límites planetarios.</li>
                                            </ul>
                                        </td>
                                            <td id="contTablaIzq">

                                                <ul>
                                                    <li>
                                                        Presentaciones PowerPoint
                                                    </li>
                                                    <li>
                                                        Discusión en clase
                                                    </li>
                                                    <li>
                                                        Trabajo en equipos
                                                    </li>
                                                    <li>
                                                        Realización de lecturas en forma previa a
                                                cada sesión
                                                    </li>
                                                    <li>
                                                        Presentación por equipos de diferentes sistemas de indicadores.
                                                    </li>
                                                    <li>
                                                        Selección y presentación de avances del caso de estudio.
                                                    </li>
                                                </ul>
                                            </td>
                                    <tr>
                                        <td>3</td>
                                        <td>Tópicos del
                                            debate</td>
                                        <td id="contTablaIzq">
                                            a) Analizar con mayor
                                            profundidad el debate sobre
                                            la sostenibilidad
                                            considerando la diversidad
                                            de aportes conceptuales
                                            sobre la sostenibilidad con un
                                            enfoque crítico. <br> <br>
                                            b) Formular argumentaciones
                                            conceptualmente
                                            fundamentadas sobre los
                                            enfoques, dimensiones,
                                            escalas y momentos de la
                                            sostenibilidad
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                    Presentaciones PowerPoint
                                                </li>
                                                <li>
                                                    Discusión en clase
                                                </li>
                                                <li>
                                                    Trabajo en equipos
                                                </li>
                                                <li>
                                                    Realización de lecturas en forma previa a
                                            cada sesión
                                                </li>
                                                <li>
                                                    Presentación por equipos de trabajo final integrador
                                                    e infografía del sistema complejo estudiado.
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
                                        <td>Al final de la Unidad 2</td>
                                        <td>Presentación tema indicadores</td>
                                        <td>10%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al final de la Unidad 2</td>
                                        <td>Avances caso de estudio</td>
                                        <td>10%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al final de la Unidad 3</td>
                                        <td>Presentación final trabajo
                                            integrador</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al final de la Unidad 3</td>
                                        <td>Documento final trabajo
                                            integrador</td>
                                        <td>50%</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Al final de la Unidad 3</td>
                                        <td>Infografía sistema complejo</td>
                                        <td>10%</td>
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
                <ul>
                    <li>Adams, W.M. 2009. Green development. Environment and sustainability in a developing world.
                    Routledge. London. 449 p. <br></li>
                    <li>Foladori, G. 2001. Controversias sobre sustentabilidad. La coeevolución sociedad-naturaleza. Universidad Autónoma de Zacatecas y Porrúa. México. 233 p.</li>
                    • Heinrichs, H.; P. Martens; G. Michelsen; A. Wiek (Eds.) 2016. Sustainability Science. Springer. New
                    York. 367 p.
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>No aplica
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>No aplica
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul>
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio
                    que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong> <br></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya
                    cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <p>No aplica
                </p>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong>M.C. Luz María Nieto Caraveo (propuesta original). Dr. Javier Fortanelli
                    Martínez (modificaciones).
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
