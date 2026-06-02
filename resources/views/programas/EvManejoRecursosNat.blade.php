@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>EVALUACIÓN Y MANEJO DE LOS RECURSOS NATURALES RENOVABLES</strong></h1>
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
                                        <td>4</td>
                                        <td>2</td>
                                        <td>2</td>
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
                <p>Al concluir esta asignatura, el estudiante logrará comprender las herramientas conceptuales y metodológicas, mediante la estimación y generación de información confiable y oportuna del estado de los ecosistemas, que le permitan tomar decisiones y aplicar estrategias para el aprovechamiento de los recursos naturales renovables y su evaluación.
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

                                        <td>Capacidad de utilizar las técnicas de evaluación y monitorización de recursos naturales renovables.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Técnica </td>

                                        <td>Habilidad para utilizar las técnicas y herramientas analíticas disponibles para la evaluación de los recursos naturales renovables.   
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla">Técnica
                                        </td>

                                        <td>Capacidad de aplicación de modelos, análisis estadístico y algoritmos para tomar decisiones.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla">Técnica
                                        </td>

                                        <td>Capacidad para proponer alternativas sostenibles a la problemática del uso, conservación y restauración de los recursos naturales renovables.</td>
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
                                        <td>Recursos naturales renovables</td>
                                        <td id="contTablaIzq"> 1.1 Conocer las definiciones y conceptos básicos<br>1.2 Analizar y asimilar los métodos de planificación de la evaluación de recursos naturales renovables
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición del profesor en aula</li>
                                                <li>Lecturas de textos impresos y electrónicos</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Técnicas de evaluación de los recursos naturales renovables</td>
                                        <td id="contTablaIzq">
                                        2.1 Conocer los niveles de evaluación de los recursos naturales renovables<br>2.2 Analizar y comprender los sistemas de evaluación<br>2.3 Conocer y aplicar la percepción remota en diferentes escenarios de recursos naturales renovables<br>2.4 Diseñar y aplicar la cartografía en diferentes en diferentes escenarios de recursos naturales renovables<br>2.5 Revisar y aplicar los métodos de muestreo y análisis numéricos para la evaluación de recursos naturales renovables<br>2.6 Construir y ordenar bases de datos y reconocer los diferentes sistemas de información
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>Exposición del profesor en aula</li>
                                                    <li>Lecturas de textos impresos y electrónicos</li>
                                                    <li>Práctica 1 de laboratorio para diseñar y elaborar cartografía mediante SIG (8 h)</li>
                                                    <li>Práctica 2 de laboratorio para la determinación propiedades químicas y físicas de muestras de suelo (3 h)</li>
                                                    <li>Práctica 3 de laboratorio para la determinación de biomasa vegetal (3 h)</li>
                                                    <li>Práctica 4 de campo para aplicar los métodos de muestreo de vegetación y fauna de zonas áridas, templadas y tropicales (16 h)</li>
                                                    <li>Práctica 5 de laboratorio para aplicar los métodos estadísticos para el análisis de bases de datos (2 h)
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Manejo de recursos naturales renovables</td>
                                        <td id="contTablaIzq">
                                        3.1 Conocer los diferentes modelos de manejo de recursos naturales renovables<br>3.2 Analizar diferentes métodos de toma de decisiones<br>3.3 Conocer los métodos para la descripción del sitio de manejo<br>3.4 Analizar las acciones en investigación de recursos naturales renovables, protección y aprovechamiento sustentable<br>3.5 Conocer los métodos de clasificación y definición del desarrollo de actividades productivas en recursos naturales renovables
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición del profesor en aula</li>
                                                <li>Lecturas de textos impresos y electrónicos</li>
                                                <li>Exposición del análisis del método utilizado en un estudio de evaluación y/o manejo de recursos naturales renovables</li>
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
                        <p>Definir cuántas veces se realizarán evaluaciones parciales a lo largo de la asignatura, cuándo se realizarán y por medio de qué técnica, producto o instrumento se llevará a cabo. Definir el porcentaje o regla de ponderación de la calificación. Es necesario consultar la propuesta curricular el PE, el Reglamento de Evaluación del Aprendizaje de la UASLP y el Reglamento General de Estudios de Posgrado para la elaboración de esta sección.
                        <br>A continuación, se muestra las condiciones de las evaluaciones parciales.</p>
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
                                                <li>Análisis de un documento de evaluación de recursos naturales renovables y propuesta alternativa. Se evaluará el criterio del estudiante para definir criterios e indicadores para la evaluación con un valor del 90% del parcial</li>
                                                <li>Participación en la clase se evaluará con el 10% del parcial.</li>
                                            </ul>
                                        </td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al término de 2.4</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Diseño y elaboración de un mapa con SIG (Práctica 1), descripción y presentación final. Se evaluará la capacidad para elaborar cartografía SIG y analizar sus componentes con un valor de 90% del parcial.</li>
                                                <li>Participación en la clase se evaluará con el 10% del parcial.</li>
                                            </ul>
                                        </td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al término de 2.6</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Reporte escrito de las prácticas 2-5. Se evaluará el aprendizaje de los métodos de evaluación de suelo, biomasa, vegetación y fauna, así como la aplicación de métodos de análisis estadísticos con un valor de 95% del parcial.</li>
                                                <li>Participación en la clase se evaluará con el 5% del parcial.</li>
                                            </ul>
                                        </td>
                                        <td>30%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al término de la Unidad 3 </td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Exposición del análisis de un documento y un ensayo técnico-científico con un valor de 90% del parcial.</li>
                                                <li>Participación en la clase se evaluará con el 10% del parcial</li>
                                            </ul>
                                        </td>
                                        <td>30%</td>
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
                    <li>American Society of Photogrammetry (ASP) (1983) Manual of Remote Sensing, 2nd ed. Falls Church, Virginia: ASP.</li>
                    <li>Anónimo (1980) Manual de Métodos de Muestreo de Vegetación. Instituto Nacional de Investigaciones Pecuarias. SARH.</li>
                    <li>Begon M, Mortimer M, Thompson D J. Population Ecology. Ed. Blackwell Science. 244 pp Bonham CD (1989) Measurements for Terrestrial Vegetation. Wiley-Interscience. 352 p.</li>
                    <li>Coulloudon B, Eshelman K, Gianola J, Habich N, Hughes L, Johnson C, Pellant M, Podborny P,</li>
                    <li>Rasmussen A, Robles B, Shaver P, Spehar J, Willoughby J (1996) Sampling Vegetation Attributes. Bureau of Land Management’s National Applied Resource Sciences Center. Colorado. 164 p.</li>
                    <li>Franklin SE (2001) Remote sensing for sustainable forest management, CRC Press,</li>
                    <li>Kaimowitz D (1996) La investigación sobre manejo de recursos naturales renovables para fines productivos en América Latina. Washington, D.C.IICA. BID. 67 p.</li>
                    <li>Matteucci D S, Colma A (1982) Metodología para el estudio de la vegetación Secretara General de la Organización de los Estados Americanos Washington D C 168p.</li>
                    <li>Ramírez González, A. (2006) Ecología: métodos de muestreo y análisis de poblaciones y comunidades.Editorial Pontificia Universidad Javeriana. Bogotá. 273 p.</li>
                    <li>Riojas- López ME, Mellink E, Bojorquez Martínez J (2008) Métodos básicos para el muestreo de vegetación y vertebrados terrestres, con énfasis en la región de Los Llanos de Ojuelos. Centro Universitario de Ciencias Biológicas y Agropecuarias, Universidad de Guadalajara. 435 p.</li>
                    <li>Schreuder HT, Ernst R, Ramirez-Maldonado H (2004) Statistical techniques for sampling and monitoring natural resources. Gen. Tech. Rep. RMRS-GTR-126. Fort Collins, CO: U.S. Department of Agriculture, Forest Service, Rocky Mountain Research Station. 111 p.</li>
                    <li>Tadeo Lozano, J. (2005) Ecología aplicada: diseño y análisis estadístico. Colección estudios de ecología. Universidad de Bogotá. Bogotá. 313 p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li><a href="https://www.sigsa.info/es-mx/industries/natural-resources/overview">https://www.sigsa.info/es-mx/industries/natural-resources/overview</a></li>
                    <li><a href="https://www.notion.so/es-es">https://www.notion.so/es-es</a></li>
                    <li>https://support.esri.com/es</li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                <br>
                <br>Tener conocimientos básicos de desarrollo sustentable, ecología, introducción a la estadística y problemática y gestión ambiental.
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgado:
                    <ul class="vineta">
                        <li>Ecología</li>
                        <li>Manejo de recursos naturales renovables en zonas secas</li>
                    </ul>
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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 15</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 5</li>
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
