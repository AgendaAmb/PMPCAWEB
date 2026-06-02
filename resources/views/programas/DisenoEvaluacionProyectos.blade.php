@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>DISEÑO Y EVALUACIÓN DE PROYECTOS DE INVESTIGACIÓN</strong></h1>
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
                                        <td>Curso - taller</td>
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
                        <p>De acuerdo con la propuesta curricular, los datos escolares de la asignatura son: </p>
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
                                        <td>0</td>
                                        <td>3</td>
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
                <p>Conocer las etapas necesarias para generar conocimiento científico, mediante la elaboración de protocolos de investigación cuantitativa y cualitativa. Evaluar protocolos y propuestas de proyectos de investigación, identificar instituciones y organismos nacionales e internacionales para someter propuestas de financiamiento.
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
                                        <td id="contTabla"><strong>Capacidad de aprender y actualizarse permanentemente</strong></td>

                                        <td>El/la estudiante conocerá las discusiones actuales en su área de estudio, en particular sobre su problema de investigación de tesis, y podrá incorporar los nuevos hallazgos en el diseño de su protocolo y en sus futuros proyectos.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Habilidad de búsqueda en bases de datos bibliográficas y uso de gestores bibliográficos</strong></td>

                                        <td>El/la estudiante tendrá habilidades para buscar, procesar y analizar literatura especializada actualizada para luego incorporarla en sus trabajos y ensayos de maneraautomatizada a través del uso de algún gestor bibliográfico.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Capacidad de planeación y diseño de un protocolo de investigación</strong></td>

                                        <td>El/la estudiante tendrá capacidad crítica para identificar, plantear y atender problemas de investigación, así como la capacidad autocrítica, analítica y creativa para integrar un documento que servirá de guía para su proyecto de tesis de posgrado.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Compromiso ético</strong> 
                                        </td>

                                        <td>El/la estudiante conocerá cómo conducir la investigación respetando los códigos de ética de su disciplina, y desarrollará capacidad para la tomar decisiones que no dañe a otras personas.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Capacidad de comunicación oral y escrita</strong>
                                        </td>

                                        <td>El /la estudiante será capaz de exponer y argumentar sus ideas y propuestas académicas de manera verbal y escrita de acuerdo con el estilo de su área.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Compromiso con la preservación del medio ambiente</strong>
                                        </td>

                                        <td>El/la estudiante integrará en el diseño de su proyecto de tesis una visión que procura conservar el medio ambiente.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Capacidad de gestionar recursos financieros para proyectos de investigación</strong>
                                        </td>

                                        <td>El/la estudiante tendrá capacidad para gestionar y obtener financiamiento mediante la presentación de propuestas de financiamiento en organismos nacionales e internacionales.</td>
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
                                        <td>El proceso de investigación científica</td>
                                        <td id="contTablaIzq"> Conocer las características generales de los procesos mediante los cuales se generan nuevos conocimientos y analizar las etapas del proceso de investigación.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>
                                                    Se alternan el método deductivo basado en explicaciones conceptuales y teóricas del tema a cargo del profesor con el método inductivo consistente en las experiencias y participación de los alumnos.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Diseño del protocolo de investigación</td>
                                        <td id="contTablaIzq">Plantear problemas de investigación, definir los componentes básicos de un modelo de investigación científica e identificar los componentes básicos de un protocolo de investigación.
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>
                                                    Mediante el método deductivo basado en explicaciones conceptuales y teóricas del tema a cargo del profesor, con apoyo con material audiovisual acorde a la temática.</li>
                                                    <li>Conducción de deliberaciones, análisis grupal de la estructura de los protocolos de investigación. Presentación y análisis de las propuestas de investigación de los estudiantes
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Gestión de proyectos</td>
                                        <td id="contTablaIzq">
                                        Analizar la estructura y coherencia del proyecto de investigación, relación entre la necesidad de su realización, costo, objetivos y metas, con respecto a la forma y el tiempo en que se plantea para lograrlo.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                Presentación por parte del profesor, conducción de deliberaciones, elaboración y presentación de una propuesta de investigación.

                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Fuentes de financiamiento</td>
                                        <td id="contTablaIzq">
                                        Conocer las diferentes instancias que proveen financiamiento para proyectos de investigación y analizar los procesos y formularios requeridos para la obtención de recursos.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                Presentación por parte del profesor, conducción de deliberaciones, identificación de organismos, instituciones o empresas financiadoras.
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
                                        <td></td>
                                        <td>Al finalizar la segunda unidad</td>
                                        <td>Reporte de la evaluación de dos protocolos de investigación</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Al finalizar la cuarta unidad</td>
                                        <td>Reporte de la evaluación de dos proyectos de investigación</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Al termino del curso</td>
                                        <td>Entrega y exposición del protocolo de investigación y evidencia de haber realizado la búsqueda de una posible fuente para su financiamiento</td>
                                        <td>50%</td>
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
                    <li>Alan, D. y Cortez, L. 2018. Procesos y fundamentos de la investigación científica. Ediciones UTMACH. Ecuador.125 p.</li>
                    <li>Cerejido, M. 2002. Formando investigadores, pero no científicos. Revista de Educación Superior, 31(124): 125-135.</li>
                    <li>Hernández-Sampieri, R.; Fernández, C. y Baptista, P. 2014. Metodología de la investigación. Edit. McGraw Hill. 589 p.</li>
                    <li>Gortari, E. 2003. La metodología: una discusión y otros ensayos sobre el método. Ed. Grijalbo.</li>
                    <li>Lam, R.M. 2005. Metodología para la confección de un proyecto de investigación. Imbiomed: 1-20.</li>
                    <li>Morales V. 2011. Guía para la elaboración y evaluación de proyectos de investigación. Revista de Pedagogía, XXXII (91)131-146.</li>
                    <li>Ramírez, G.A. 2004. Metodología de la investigación científica. pp. 61-111.</li>
                    <li>Toro, D. J. 2007. Formulación y evaluación de proyectos. pp.4-29.</li>
                    <li>Windschitl, M., Thompson, J. & Braaten, M. 2008. Beyond the Scientific Method: model -based inquiry as a new paradigm of preference for school sciences investigations. Science Education 92:941-967.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Fundación Carlos Slim. <a href="https://fundacioncarlosslim.org/">https://fundacioncarlosslim.org/</a></li>
                    <li>Fundación Ford: <a href="https://www.fordfoundation.org/our-work-around-the-world/mexico-and-central-america/">https://www.fordfoundation.org/our-work-around-the-world/mexico-and-central-america/</a></li>
                    <li>GEO. <a href="http://www.earthobservations.org/geoss_call_dsp.shtml">http://www.earthobservations.org/geoss_call_dsp.shtml</a></li>
                    <li>IDEA WILD. <a href="http://www.ideawild.org/apply.html">http://www.ideawild.org/apply.html</a></li>
                    <li>Rufford Small grants: <a href="https://www.rufford.org/">https://www.rufford.org/</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>
                    • Ninguno
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>
                    • Ninguno
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <p>
                        • Ninguna
                    </p>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 20.</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 4.</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Humberto Reyes Hernández, Anuschka van ’t Hooft
                    <br>
                    <strong> • Revisó: </strong>Área de Gestión Ambiental
                </p>
            </div>
        </div>
    </div>
@endsection
