@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>MÉTODOS ESTADÍSTICOS PARA INVESTIGADORES</strong></h1>
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
                        <p>De acuerdo con la propuesta curricular, los datos escolares de la asignatura son: 8 créditos</p>
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
                                        <td>16</td>
                                        <td>4</td>
                                        <td>1</td>
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
                <p>Es que el estudiante será capaz de adquirir y comprender la información de hechos biológicos, físicos y sociales mediante la observación y la experimentación. Comprenderá los hechos así como sus causas, para ello, evaluará sus efectos atribuibles a la casualidad o aleatorios. Asimismo, conocerá las alternativas de los diversos métodos que den respuestas a sus interrogantes, y elegirá aquellos que mejor lo hagan o que sean más eficientes para probar sus hipótesis.
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
                                        <td id="contTabla"><strong>Competencia profesional</strong></td>

                                        <td>Los alumnos serán capaces de realizar análisis integral de los datos obtenidos de sus proyectos de investigación en ciencias ambientales. Tendrá la capacidad de entender e interpretar las salidas de los análisis realizados con los programas computacionales utilizados, tomar decisiones y obtener conclusiones con base en los análisis estadísticos de los datos.</td>
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
                                        <td>Introducción</td>
                                        <td id="contTablaIzq"> Conocerá las características que deben de tomarse en cuenta para establecer un experimento o hacer una investigación por muestreo.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales</li>
                                                <li>Presentación de problemas de probabilidad y estadística básica aplicada a las ciencias ambientales</li>
                                                <li>Aprendizaje basado en solución de problemas</li>
                                                <li>Aprendizaje individual y colaborativo</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Análisis de regresión y correlación</td>
                                        <td id="contTablaIzq">Elaborará una función matemática para describir la relación entre una variable dependiente y una o más variables independientes.
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales los conceptos analizados, apoyándose en ejercicios con el software especializado.- Aprendizaje basado en solución de problemas</li>
                                                    <li>Aprendizaje individual y colaborativo.
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Comparación de medias y transformación de datos</td>
                                        <td id="contTablaIzq">Podrá realizar comparación de medias paramétricas y no paramétricas y transformar datos cuando no sean normales
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales</li>
                                                <li>Aprendizaje basado en solución de problemas</li>
                                                <li>Aprendizaje individual y colaborativo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Diseños experimentales básicos</td>
                                        <td id="contTablaIzq">Conocerá y realizar análisis de varianza para los distintos diseños estadísticos básicos, completamente al azar, bloques completos al azar y cuadro latino y elegirá el más adecuado para el análisis de datos.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales</li>
                                                <li>Aprendizaje basado en solución de problemas</li>
                                                <li>Aprendizaje individual y colaborativo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Experimentos con arreglos factoriales</td>
                                        <td id="contTablaIzq">Podrá identificar los factores y sus niveles para realizar análisis de varianza para los experimentos con dos o más factores y niveles.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales</li>
                                                <li>Aprendizaje basado en solución de problemas</li>
                                                <li>Aprendizaje individual y colaborativo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Diseños permutables</td>
                                        <td id="contTablaIzq">Será capaz de analizar información cuando se usan unidades experimentales repetidas
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales</li>
                                                <li>Aprendizaje basado en solución de problemas</li>
                                                <li>Aprendizaje individual y colaborativo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Análisis de correlación canónica</td>
                                        <td id="contTablaIzq">Analizar la relación entre dos o más variables dependientes y dos o más variables independientes.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales</li>
                                                <li>Aprendizaje basado en solución de problemas</li>
                                                <li>Aprendizaje individual y colaborativo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Procedimiento CATMOD</td>
                                        <td id="contTablaIzq">Realizará el modelado de datos categóricos que se pueden representar mediante una tabla de contingencia.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales</li>
                                                <li>Aprendizaje basado en solución de problemas</li>
                                                <li>Aprendizaje individual y colaborativo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Muestreo estadístico</td>
                                        <td id="contTablaIzq">Identificar los distintos métodos de muestreo estadístico y cálculo del tamaño de muestra
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición de conceptos y métodos por parte del maestro con apoyo de recursos de cómputo y audiovisuales</li>
                                                <li>Aprendizaje basado en solución de problemas</li>
                                                <li>Aprendizaje individual y colaborativo
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
                                        <td>Temas 1, 2 y 3.</td>
                                        <td>Examen escrito</td>
                                        <td rowspan="3">70%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Tema 4, 5 y 6.</td>
                                        <td>Examen escrito</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Temas 7, 8 y 9.</td>
                                        <td>Examen escrito</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Tareas </td>
                                        <td></td>
                                        <td>15%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td></td>
                                        <td>100%</td>
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
                    <li>Herrera H. J. G., C. García A. 2019. Bioestadística en ciencias veterinarias. Procedimientos de Análisis de datos con SAS. Colegio de Postgraduados. 231 p.</li>
                    <li>Kaps M., W. R. Lamberson 2004. Biostatistics for Animal Science. CABI Publishing. 459 p.</li>
                    <li>Mongomery D. C. 2004. Diseño y análisis de experimentos. Segunda Edición. Ed. Limusa Wiley. México. 686 p.</li>
                    <li>Mongomery C. D, Peck A. E. and Vining G. G. 2012. Introduction to Linear Regression Analysis. Ed. Wiley, Fifth Edition. USA. 679 p.</li>
                    <li>Toutenburg H., Shalabh. 2009. Statistical Analysis of Designed Experiments. Third Edition. Springer. 624p</li>
                    <li>Kaps M. and Lambreson R. W. 2004. Biostatistics for Animal Science. Cromwell Press. CABI Publishing. UK. 459 p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li><a href="https://www.rstudio.com/">https://www.rstudio.com/</a></li>
                    <li><a href="https://www.sas.com/es_mx/software/on-demand-for-academics.html">https://www.sas.com/es_mx/software/on-demand-for-academics.html</li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <ul>
                        <li>Haber cursado algún curso de estadística básica</li>
                    </ul>
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
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 28</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 3</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Gregorio Álvarez Fuentes
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
