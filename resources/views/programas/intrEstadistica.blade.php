@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>INTRODUCCIÓN A LA ESTADÍSTICA</strong></h1>
                </div>
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
                                        <td>
                                            Obligatorio
                                        </td>
                                        <td>
                                            Curso
                                        </td>
                                        <td id="contTabla">
                                            Español
                                        </td>
                                        <td>Presencial</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
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
                                        <td>16</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>5</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <h4> <strong>Objetivo general de aprendizaje</strong> </h4>
                <p>
                    Actualizar y reforzar los conocimientos en estadística que se aplican en los métodos analíticos
                    necesarios para la
                    solución de problemas de interés de los estudiantes de las diversas especialidades del posgrado en
                    ciencia
                    ambientales.
                </p>
                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Competencia profesionales a las que contribuye la asignatura</strong></h4>

                        <p>
                            Esta asignatura contribuye de manera directa al logro de las siguientes competencias
                            profesionales del perfil de
                            egreso del programa:
                        </p>
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
                                        <td id="contTabla"> <strong>Competencia
                                                profesional</strong></td>

                                        <td>
                                            Este curso contribuye a desarrollar una de las competencias previstas por el
                                            perfil del egresado de
                                            la Maestría en Ciencias Ambientales, como explicar la relación entre el método
                                            científico y la
                                            estadística. Fortalecer el criterio basado en conocimientos que les permita
                                            alcanzar las metas
                                            planteadas en su investigación, por medio de métodos apropiados. Adquirir los
                                            conocimientos
                                            básicos para el manejo de programas estadísticos para el cálculo de estimadores
                                            basados en datos
                                            cuantitativos.
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
                                        <th scope="col">No.</th>
                                        <th scope="col">Nombre de la unidad o fase</th>
                                        <th scope="col">
                                            <div class="size"></div> Resultados de aprendizaje específicos
                        </div>
                        </th>
                        <th scope="col">
                            <div class="size"></div> Metodologías y actividades de enseñanza - aprendizaje
                    </div>
                    </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                Filosofía de la ciencia y estadística
                            </td>
                            <td id="contTablaIzq">
                                Comprenderá la relación
                                entre el método científico
                                y la estadística.
                            </td>
                            <td id="contTablaIzq">

                                <ul>
                                    <li>
                                        Exposición de conceptos y métodos por parte del br
                                        maestro con apoyo de recursos de cómputo y
                                        audiovisuales
                                    </li>
                                    <li>
                                        Presentación de problemas de probabilidad y
                                        estadística básica aplicada a las ciencias
                                        ambientales
                                    </li>
                                    <li>
                                        Aprendizaje basado en solución de problemas
                                    </li>
                                    <li>
                                        Aprendizaje individual y colaborativo
                                    </li>
                                </ul>
                            </td>

                        <tr>
                            <td>2</td>
                            <td>Estadística descriptiva </td>
                            <td id="contTablaIzq">
                                Comprenderá los métodos de
                                presentación de datos
                                tabulares y gráficos como
                                distribuciones de frecuencia,
                                gráficas, cuadros que sean
                                entendibles e interpretables
                                con facilidad.
                            </td>
                            <td id="contTablaIzq">

                                <ul>
                                    <li>
                                        Exposición de conceptos y métodos por parte del
                                        maestro con apoyo de recursos de cómputo y
                                        audiovisuales
                                    </li>
                                    <li>
                                        Presentación de problemas de probabilidad y
                                        estadística básica aplicada a las ciencias
                                        ambientales
                                    </li>
                                    <li>
                                        Aprendizaje basado en solución de problemas
                                    </li>
                                    <li>
                                        Aprendizaje individual y colaborativo
                                    </li>
                                </ul>
                            </td>
                        <tr>
                            <td>3</td>
                            <td>Distribuciones de probabilidad </td>
                            <td id="contTablaIzq">
                                Podrá identificar las distintas
                                distribuciones de probabilidad
                                para obtener información de
                                utilidad y su aplicación.
                            </td>
                            <td id="contTablaIzq">

                                <ul>
                                    <li>
                                        Exposición de conceptos y métodos por parte del
                                        maestro con apoyo de recursos de cómputo y
                                        audiovisuales
                                    </li>
                                    <li>
                                        Presentación de problemas de probabilidad y
                                        estadística básica aplicada a las ciencias
                                        ambientales
                                    </li>
                                    <li>
                                        Aprendizaje basado en solución de problemas
                                    </li>
                                    <li>
                                        Aprendizaje individual y colaborativo
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                                Pruebas de hipótesis y chi cuadrada (χ2)
                            </td>
                            <td id="contTablaIzq">
                                Formular hipótesis y la forma
                                de elaborar pruebas para
                                contrastarlas mediante el
                                análisis de datos muestrales
                                se podrá determinar si una
                                hipótesis debe o no
                                rechazarse.
                            </td>
                            <td id="contTablaIzq">

                                <ul>
                                    <li>
                                        Exposición de conceptos y métodos por parte del
                                        maestro con apoyo de recursos de cómputo y
                                        audiovisuales
                                    </li>
                                    <li>
                                        Presentación de problemas de probabilidad y
                                        estadística básica aplicada a las ciencias
                                        ambientales
                                    </li>
                                    <li>
                                        Aprendizaje basado en solución de problemas
                                    </li>
                                    <li>
                                        Aprendizaje individual y colaborativo
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>
                                Prueba de hipótesis y comparación de dos muestras
                            </td>
                            <td id="contTablaIzq">
                                Contrastará hipótesis
                                para una y dos muestras.
                            </td>
                            <td id="contTablaIzq">

                                <ul>
                                    <li>
                                        Exposición de conceptos y métodos por parte del
                                        maestro con apoyo de recursos de cómputo y
                                        audiovisuales
                                    </li>
                                    <li>
                                        Presentación de problemas de probabilidad y
                                        estadística básica aplicada a las ciencias
                                        ambientales
                                    </li>
                                    <li>
                                        Aprendizaje basado en solución de problemas
                                    </li>
                                    <li>
                                        Aprendizaje individual y colaborativo
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                Análisis correlación y regresión
                            </td>
                            <td id="contTablaIzq">
                                Analizar la relación que
                                existe entre variables y
                                generará ecuaciones de
                                regresión
                            </td>
                            <td id="contTablaIzq">

                                <ul>
                                    <li>
                                        Exposición de conceptos y métodos por parte del
                                        maestro con apoyo de recursos de cómputo y
                                        audiovisuales
                                    </li>
                                    <li>
                                        Presentación de problemas de probabilidad y
                                        estadística básica aplicada a las ciencias
                                        ambientales
                                    </li>
                                    <li>
                                        Aprendizaje basado en solución de problemas
                                    </li>
                                    <li>
                                        Aprendizaje individual y colaborativo
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                Análisis de varianza y diseños experimentales
                            </td>
                            <td id="contTablaIzq">
                                Probar hipótesis acerca
                                de las medias de
                                tratamientos y estimar los
                                componentes de varianza.
                            </td>
                            <td id="contTablaIzq">

                                <ul>
                                    <li>
                                        Exposición de conceptos y métodos por parte del
                                        maestro con apoyo de recursos de cómputo y
                                        audiovisuales
                                    </li>
                                    <li>
                                        Presentación de problemas de probabilidad y
                                        estadística básica aplicada a las ciencias
                                        ambientales
                                    </li>
                                    <li>
                                        Aprendizaje basado en solución de problemas
                                    </li>
                                    <li>
                                        Aprendizaje individual y colaborativo
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                Muestreo estadístico
                            </td>
                            <td id="contTablaIzq">
                                Estudiar los métodos de
                                muestreo y cálculo del
                                tamaño de muestra.
                            </td>
                            <td id="contTablaIzq">

                                <ul>
                                    <li>
                                        Exposición de conceptos y métodos por parte del
                                        maestro con apoyo de recursos de cómputo y
                                        audiovisuales
                                    </li>
                                    <li>
                                        Presentación de problemas de probabilidad y
                                        estadística básica aplicada a las ciencias
                                        ambientales
                                    </li>
                                    <li>
                                        Aprendizaje basado en solución de problemas
                                    </li>
                                    <li>
                                        Aprendizaje individual y colaborativo
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
                                <th scope="col">No. <br> parcial</th>
                                <th scope="col">Momento de evaluación</th>
                                <th scope="col">Método de evaluación y valor para la evaluacion parcial</th>
                                <th scope="col">Ponderación para evaluación final</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Temas 1, 2 y 3</td>
                                <td>Examen escrito</td>
                                <td rowspan="3"><br> <br> 70%</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Tema 4 y 5</td>
                                <td>Examen escrito</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Temas 7 y 8</td>
                                <td>Examen escrito</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Tareas</td>
                                <td></td>
                                <td>15%</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Exposición</td>
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

        <div class="col-12 col-sm-12 container">
            <ul class="vineta">
                <li>Anderson R. D., J. D. Sweeney and T. A. Williams. 2008. Estadística para administración y economía.
                    CENGAGE. Learning. México 1091p</li>
                <li>Gareth James, Daniela Witten, Trevor Hastie, Robert Tibshirani. 2013. An Introduction to Statistical
                    Learning, with Applications in R. Springer New York Heidelberg Dordrecht London. 441 p.</li>
                <li>Kandethody M.Ramachandran, Chris P.Tsokos. 2009. Mathematical Statistics with Applications. Elsevier
                    Academic Press. 849 p. http://www.elsevierdirect.com/companions/9780123748485</li>
                <li>Mongomery C. D. 2004. Diseño y análisis de experimentos. Segunda Edición. Limusa Wiley. 700 p.</li>
                <li>Walpole E. R., R. H. Myers, S. L. Myers and K. Ye. 2012. Probabilidad y estadística para ingeniería y
                    ciencias. Pearson Educación, México. 816 p.</li>
                <li>Wassennan Larry . All of Statistics. 2003. A Concise Course in Statistical Inference. Springer Texts in
                    Statistics. 446 p.</li>
            </ul>
        </div>

        <h5> <strong>Textos básicos</strong></h5>

        <p id="becasEnlace">
            <a href="http://www.springer.com/series/417">http://www.springer.com/series/417</a><br>
            <a
                href="http://www.elsevierdirect.com/companions/9780123748485">http://www.elsevierdirect.com/companions/9780123748485</a>
            <br>
        </p>

        <hr>
        <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>

        <div>
            Para poder cursar esta asignatura, es necesario:
            <ul>
                <li>
                    Matemáticas, algebra, y estar inscrito en algún programa de posgrado, de la UASLP. es un curso básico de
                    estadística
                </li>
            </ul>
        </div>

        <hr>
        <h4> <strong>Interoperabilidad</strong> </h4>
        <p>
            Ninguna
        </p>

        <hr>
        <h4> <strong>Otras formas de acreditación</strong> </h4>

        <div>
            <ul>
                <li>
                    Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que
                    certifique
                    que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong>
                </li>
                <li>
                    Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta
                    con
                    los aprendizajes necesarios: <strong>No</strong>
                </li>
            </ul>
        </div>

        <hr>
        <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
    
        <div>
            <ul>
                <li>
                    Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 28
                </li>
                <li>
                    Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 3
                </li>
            </ul>
        </div>

        <hr>
        <h4> <strong>Elaboradores y revisores</strong> </h4>
        <p> <strong>Elaboró: </strong>Dr. Gregorio Álvarez Fuentes
            <br>
            <strong>Revisó:</strong>Dra. Elsa Cervantes González <br>
            Dr. Israel Razo Soto <br>
            Dr. Nahúm Andrés Medellín Castillo <br>
        </p>
    </div>
    </div>
    </div>
@endsection
