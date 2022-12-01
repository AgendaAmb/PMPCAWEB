@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>INTRODUCCIÓN A LA ESTADÍSTICA”</strong></h1>
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
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de la unidad o fase</th>
                                        <th scope="col">Resultados de aprendizaje específicos</th>
                                        <th scope="col">Metodologías y actividades de enseñanza - aprendizaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            FILOSOFÍA DE LA
                                            CIENCIA Y
                                            ESTADÍSTICA
                                        </td>
                                        <td id="contTablaIzq">
                                            Comprenderá la relación<br>
                                            entre el método científico<br>
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
                                        <td>ESTADÍSTICA
                                            DESCRIPTIVA</td>
                                        <td id="contTablaIzq">
                                            Comprenderá los métodos de<br>
                                            presentación de datos<br>
                                            tabulares y gráficos como<br>
                                            distribuciones de frecuencia,<br>
                                            gráficas, cuadros que sean<br>
                                            entendibles e interpretables<br>
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
                                        <td>DISTRIBUCIONES
                                            DE PROBABILIDAD</td>
                                        <td id="contTablaIzq">
                                            Podrá identificar las distintas<br>
                                            distribuciones de probabilidad<br>
                                            para obtener información de<br>
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
                                        <td>PRUEBAS DE
                                            HIPÓTESIS Y CHI
                                            CUADRADA (χ2)
                                        </td>
                                        <td id="contTablaIzq">
                                            Formular hipótesis y la forma<br>
                                            de elaborar pruebas para<br>
                                            contrastarlas mediante el<br>
                                            análisis de datos muestrales<br>
                                            se podrá determinar si una<br>
                                            hipótesis debe o no<br>
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
                                        <td>PRUEBA DE
                                            HIPÓTESIS Y
                                            COMPARACIÓN
                                            DE DOS
                                            MUESTRAS
                                        </td>
                                        <td id="contTablaIzq">
                                            Contrastará hipótesis<br>
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
                                        <td>ANÁLISIS
                                            CORRELACIÓN Y
                                            REGRESIÓN
                                        </td>
                                        <td id="contTablaIzq">
                                            Analizar la relación que <br>
                                            existe entre variables y<br>
                                            generará ecuaciones de<br>
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
                                        <td>ANÁLISIS DE
                                            VARIANZA Y
                                            DISEÑOS
                                            EXPERIMENTALES
                                        </td>
                                        <td id="contTablaIzq">
                                            Probar hipótesis acerca<br>
                                            de las medias de<br>
                                            tratamientos y estimar los<br>
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
                                        <td> MUESTREO
                                            ESTADÍSTICO
                                        </td>
                                        <td id="contTablaIzq">
                                            Estudiar los métodos de<br>
                                            muestreo y cálculo del<br>
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
                                        <th scope="col"># <br> parcial</th>
                                        <th scope="col">Momento de evaluación</th>
                                        <th scope="col">Método de evaluación y valor para la evaluacion parcial</th>
                                        <th scope="col">Ponderación para evaluación final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>En la sesión 10</td>
                                        <td>Examen escrito</td>
                                        <td rowspan="3"><br> <br> 70%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>En la sesión 22</td>
                                        <td>Examen escrito</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>En la sesión 32</td>
                                        <td>Examen escrito</td>
                                    </tr>

                                    <tr>
                                        <td>Tareas</td>
                                        <td>Permanente</td>
                                        <td>Informes escritos</td>
                                        <td>10.0</td>
                                    </tr>

                                    <tr>
                                        <td>Trabajo
                                            semestral</td>
                                        <td>Casi al final del
                                            curso</td>
                                        <td>Escrito siguiendo el modelo de un artículo de ensayo</td>
                                        <td>20.0</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td>100.0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <h5> <strong>Textos básicos</strong></h5>
                <p>
                    • Agrawal, A.A. 2003. Why omnivory?. Ecology. 84:2521.<br>
                    • Berkes, F.; J. Coding y C. Folke. 2003. Navigating Social-Ecological Systems. Cambridge University.
                    Cambridge: England. <br>
                    • Burke, A. 2003. Practical measure in arid lands restoration after mining –a review for the southern
                    Namib. South
                    African Journal of Science. 99:413-417.<br>
                    • Celi, L. 2020. 'Eco-Ego'. An image to represent the (Deep) Ecology. Ecology (May 2, 2020).<br>
                    • Dajoz, R. 2002. Tratado de ecología. 2ª Ed. Mundi Prensa: Madrid, España.<br>
                    • Dregne, H.E. 2002. Land degradation in the drylands. Arid Land Research and Management. 16:99-132.<br>
                    • Herrera, A., M.D. Fernández, E. Rengifo y W. Tezara. 2001. Efecto de la concentración elevada de CO2
                    sobre la
                    fotosíntesis en especies tropicales. Interciencia. 26:469-471.<br>
                    • Hill, D.; M. Fasham, G. Tucker, M. Shewry y P. Shaw. 2005. Handbook of biodiversity methods. Cambridge
                    University Press: Cambridge, Inglaterra.<br>
                    • Holechek, J. L.; R. A. Cole, J. T. Fisher y R. Valdez. 2003. Natural resources: ecology, economics,
                    and
                    policy 2th
                    Ed. Pearson Education: New Jersey, Estados Unidos.<br>
                    • Lima, M. 2006. Los efectos ecológicos de las fluctuaciones climáticas. Investigación y Ciencia. Julio.
                    46-52.<br>
                    • Margalef, R. 2005. Ecología. Omega. Barcelona, España.<br>
                    • Martínez, M.L.; R.H. Manson; P. Balvanera; R. Dirzo; J. Soberón; L. García-Barrios; M. Martínez-Ramos;
                    P.
                    Moreno-Casasola; L. Rosenzweig; J. Sarukhán. 2006. The evolution of ecology in Mexico: facing challenges
                    and preparing for the future. Frontiers in Ecology an the Environment. 4:259-265.<br>
                    • McCune, B.; J. B. Grace y D. L. Urban. 2002. Analysis of ecological communities. MjM: Gleneden Beach,
                    Estados
                    Unidos.<br>
                    • Mitchell, K. 2001. Quantitative analysis by the point-centered quarter method. Department of
                    Mathematics
                    and
                    Computer Colleges, Hobart and William Smith Colleges. Geneva, N.Y. IMP<br>
                    • Nebel R. B. J. y R. T. Wright. 2002. Environmental science. 8th Ed. Prentice Hall: San Francisco,
                    Estados Unidos.<br>
                    • Odum, E. P. 1992. Ecología: bases científicas para un nuevo paradigma. Vedrà: Barcelona, España.<br>
                    • Rodríguez M., J.; J. M. Blanco, V. Rodríguez M. 2016. Ecología. 4ª Ed. Pirámide: Madrid, España.<br>
                    • Schlesinger, W. H. 1991. Biogeochemistry. An analysis of global change. Academic Press, Elsevier: San
                    Diego,
                    Estados Unidos.<br>
                    • Smith, R.L. y T.M. Smith. 2001. Ecology & field biology. Pearsons Addison Wesley: San Francisco,
                    Estados
                    Unidos.<br>
                    • Smith, R.L. y T.M. Smith. 2014. Elements of ecology. 9ª Ed. Addison Wesley. Madrid, España. 664 p.<br>
                    • Tansley, A.G. 1935. The use and abuse of vegetational concepts and terms. Ecology. 16:284-307.<br>
                    • Tao, F.; M. Yokosawa; Y. Hayashi; E. Lin. 2003. Terrestrial water cycle and the impact of climate
                    change. Ambio.
                    32:295-301.<br>
                    • Terradas, J. 2001. Ecología de la vegetación. Omega: Barcelona, España. 703 p.

                </p>

                <h5> <strong>Textos básicos</strong></h5>

                <p id="enlacesNormativa">
                    • <a href="http://bibliotecas.uaslp.mx/">http://bibliotecas.uaslp.mx/</a><br>
                    • <a href="http://slpm.uaslp.mx/">http://slpm.uaslp.mx/</a> <br>
                    • <a href=" http://socbot.mx/nuevositio/"> http://socbot.mx/nuevositio/</a> <br>
                    • <a
                        href="http://web.b.ebscohost.com.creativaplus.uaslp.mx/ehost/command/detail?">http://web.b.ebscohost.com.creativaplus.uaslp.mx/ehost/command/detail?</a>
                    <br>
                    • <a href=" http://web.ecologia.unam.mx/"> http://web.ecologia.unam.mx/</a> <br>
                    • <a href="http://www.conabio.gob.mx/">http://www.conabio.gob.mx/</a> <br>
                    • <a href="http://www.ecology.com/">http://www.ecology.com/</a> <br>
                    • <a href="http://www.rae.es/">http://www.rae.es/</a><br>
                    • <a href="http://www.scme.mx/scme/">http://www.scme.mx/scme/</a> <br>
                    • <a href="http://www.theplantlist.org/ <br>">http://www.theplantlist.org/</a> <br>
                    • <a href="https://bvu.uaslp.mx/ <br>">https://bvu.uaslp.mx/</a> <br>
                    • <a href="https://folk.uio.no/ohammer/past/ <br>">https://folk.uio.no/ohammer/past/</a> <br>
                    • <a
                        href="https://link.springer.com.creativaplus.uaslp.mx/ <br>">https://link.springer.com.creativaplus.uaslp.mx/</a>
                    <br>
                    • <a href="https://scholar.google.es/ <br>">https://scholar.google.es/</a> <br>
                    • <a href="https://www.biodiversitylibrary.org/  <br>">https://www.biodiversitylibrary.org/</a> <br>
                    • <a href="https://www.esa.org/esa/ <br>">https://www.esa.org/esa/</a> <br>
                    • <a href="https://www.gob.mx/inecc <br>">https://www.gob.mx/inecc</a> <br>
                    • <a href="https://www.gob.mx/profepa <br>">https://www.gob.mx/profepa</a> <br>
                    • <a href="https://www.gob.mx/semarnat <br>">https://www.gob.mx/semarnat</a> <br>
                    • <a
                        href="https://www.inecol.mx/inecol/index.php/es/ <br>">https://www.inecol.mx/inecol/index.php/es/</a>
                    <br>
                    • <a href="https://www.inegi.org.mx/ <br>">https://www.inegi.org.mx/</a> <br>
                    • <a
                        href="https://www.jstor.org.creativaplus.uaslp.mx/ <br>">https://www.jstor.org.creativaplus.uaslp.mx/</a>
                    <br>
                    • <a
                        href="https://www.millenniumassessment.org/en/index.html <br>">https://www.millenniumassessment.org/en/index.html</a>
                    <br>
                    • <a href="https://www.sciencedirect.com <br>">https://www.sciencedirect.com</a> <br>
                </p>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>
                    • Ninguno
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>
                    • Ninguna
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <p>
                    • Ninguna
                </p>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <p>
                    • Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 25 <br>
                    • Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2
                </p>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong>Juan Antonio Reyes Agüero
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
