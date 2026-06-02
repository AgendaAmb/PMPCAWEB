@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>ECOLOGÍA CUANTITATIVA</strong></h1>
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
                                        <td>Optativo para Maestría o Doctorado en Ciencias</td>
                                        <td>Curso teórico-práctico</td>
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
                                        <td>1</td>
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
                <p>Al concluir esta asignatura, el estudiante tendrá las bases para entender los conceptos necesarios para discernir entre las distintas herramientas multivariables y elegir la más adecuada para sus propias metas de investigación. Además, interpretará óptimamente los resultados obtenidos en las pruebas estadísticas multivariables, con el uso de software especializado. Para lograrlo, podrá manejar los conceptos fundamentales algebra matricial y teoría de distribuciones probabilísticas, para su aplicación al análisis multivariable de datos en ecología y ciencias ambientales.
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
                                        <td id="contTabla"><strong>Competencia (s) profesional (es) que contribuye a desarrollar la materia</strong></td>

                                        <td>
                                            <ul>
                                                <li>Desarrollar en el estudiante la intuición de la representación gráfica y conceptual de problemas ambientales complejos, de naturaleza multivariable; incluye diseñar muestreo, diseñar y organizar bases de datos y llevar a cabo su estadística descriptiva.</li>
                                                <li>El alumno será capaz de plantear hipótesis pertinentes para comparar poblaciones y comunidades para detectar e interpretar relaciones causales entre variables y objetos, propios de la Ecología y las Ciencias Ambientales.</li>
                                                <li>Identificar los escenarios donde es pertinente el uso de la estadística multivariable en problemas ambientales reales y elegir óptimamente la técnica multivariable para su solución adecuada.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Desempeños de la competencia profesional a los que contribuye la materia.</strong> </td>

                                        <td>El estudiante:
                                            <ul>
                                                <li>Reconoce la importancia de los métodos mutivariable dentro de su campo laboral y dentro de la cultura general del profesionista ambiental.</li>
                                                <li>Identifica los conceptos básicos relacionados con un problema cuya solución requiera de un análisis estadístico multidimensional.</li>
                                                <li>Comprende los conceptos básicos relacionados con la naturaleza de la Estadística Multivariable y los métodos adecuados para resolver problemas complejos.</li>
                                                <li>Utilizará adecuadamente técnicas especializadas para la presentación y el análisis de información estadística de índole multivariable.</li>
                                            </ul>    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Competencia (s) transversal (es) a las que contribuye a desarrollar la materia en los alumnos.</strong>
                                        </td>

                                        <td>
                                            <ul>
                                                <li>Colectar datos multidimensionales de relevancia y calidad, para formarse y emitir juicios propios de las ciencias ambientales en temas sociales, ecológicos, económicos, ética y ciencia básica.</li>
                                                <li>Desarrollar capacidad de aprendizaje que propicie autonomía en la adquisición de conceptos, métodos y técnicas de cómputo, para que el alumno pueda, por cuenta propia, iniciar investigaciones innovadoras.</li>
                                                <li>Lograr dominio en el uso de software adecuado para el procesamiento de información de índole multivariable y su interpretación para resolver problemas en Ciencia Ambiental.</li>
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
                                        <td id="contTablaIzq"> Conocer la naturaleza compleja de los datos en ciencias ambientales y ecológicos así como las formas simples e intuitivas de estudiar su posible estructura, para introducir el lenguaje básico de algebra de matrices.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Exposiciones orales de alumnos</li>
                                                <li>Realización de ejercicios a manera de tareas con uso de software estadístico.</li>
                                                <li>Discusión de lecturas</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Análisis de gradiente</td>
                                        <td id="contTablaIzq">Entender los conceptos básicos del análisis de gradiente como un ejercicio de regresión y sus aplicaciones más simples en diversidad y bioindicadores.
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>Exposiciones orales del profesor</li>
                                                    <li>Exposiciones orales de alumnos</li>
                                                    <li>Realización de ejercicios a manera de tareas con uso de software estadístico.</li>
                                                    <li>Discusión de lecturas
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Análisis de ordenación</td>
                                        <td id="contTablaIzq">
                                        Entender los conceptos de ordenación directa e indirecta y los métodos analíticos y software disponibles para llevarla a cabo con aplicaciones clásicas y recientes.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Exposiciones orales de alumnos</li>
                                                <li>Realización de ejercicios a manera de tareas con uso de software estadístico.</li>
                                                <li>Discusión de lecturas
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Clasificación</td>
                                        <td id="contTablaIzq">
                                           Comprender la vertiente analítica y operativa de la clasificación de datos multivariable y diferenciarla de la ordenación, pero a la vez conceptuarlos como métodos que se pueden complementar en la simplificación de patrones complejos de relación de variables.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Exposiciones orales de alumnos</li>
                                                <li>Realización de ejercicios a manera de tareas con uso de software estadístico.</li>
                                                <li>Discusión de lecturas
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Tópicos avanzados</td>
                                        <td id="contTablaIzq">
                                        Examinar métodos cuantitativos complementarios para el análisis de datos ecológicos, de utilidad para entender relaciones espaciales, tróficas y no habituales de regresión.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Exposiciones orales de alumnos</li>
                                                <li>Realización de ejercicios a manera de tareas con uso de software estadístico.</li>
                                                <li>Discusión de lecturas.
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
                <h5> <strong>Contenido:</strong></h5>
                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>Unidad 1. Introducción</strong></td>
                                <td><strong>6 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 1.1. La naturaleza compleja de los datos en ecología.</strong></td>
                                <td><strong>0.5 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>Sistemas complejos en ecología y ciencia ambiental
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Leff, E. (2007). La complejidad ambiental. Polis. Revista Latinoamericana, (16). Disponible en: <a href="http://revele.com.veywww.redalyc.org/articulo.oa?id=30501605">http://revele.com.veywww.redalyc.org/articulo.oa?id=30501605</a> Krebs, Ch.J. 1999. Ecological methodology. 2nd ed., Addison-Wesley, New York, Capítulo 1.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Practica - Introducción al uso del software y captura manejo de datos multivariable</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 1.2 Los descriptores ecológicos</strong></td>
                                <td><strong>1 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    <ul>
                                        <li>Diversidad</li>
                                        <li>Modelos de abundancia de especies</li>
                                        <li>Riqueza de especies</li>
                                        <li>Otros atributos estructurales</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Jongman, R.H.G., ter Braak, C.J.F. and van Tongeren, O.F.R. (eds.) (1995). Data analysis in community and landscape ecology. Cambridge University Press. Cambridge. Capítulo 2.
                                <br>
                                <br>Legendre, P. & Legendre, L. 1998. Numerical ecology. 2nd ed. Elsevier, Amsterdam, Capítulo 1.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Manejo de matrices multivariable de datos en distintos formatos.</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 1.3 Análisis numérico de datos ecológicos (ordenación versus clasificación)</strong></td>
                                <td><strong>1.5 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    <ul>
                                        <li>Comunidades ecológicas</li>
                                        <li>Continuo y dis-continuo en comunidades</li>
                                        <li>Ordenación de comunidades</li>
                                        <li>Clasificación de comunidades</li>
                                        <li>Aplicaciones en Ciencia Ambiental</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Jongman, R.H.G., ter Braak, C.J.F. and van Tongeren, O.F.R. (eds.) (1995). Data analysis in community and landscape ecology. Cambridge University Press. Cambridge. Capítulo 2.
                                <br>
                                <br>Nicolson, M. (2016). Robert Harding Whittaker and the individualistic hypothesis. The Bulletin of the Ecological Society of America, 97(2), 154-162.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Uso del software y captura manejo de datos multivariable. Investigación sobre aplicaciones en Ciencia Ambiental.</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 1.4) Conceptos básicos de pruebas estadísticas por permutación </strong></td>
                                <td><strong>1 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    <ul>
                                        <li>Conceptos de remuestreo estadístico</li>
                                        <li>Boostrap</li>
                                        <li>Jakknife</li>
                                        <li>Ejemplos y aplicaciones</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Legendre, P. & Legendre, L. 1998. Numerical ecology. 2nd ed. Elsevier, Amsterdam.<br>Krebs, Ch.J. 1999. Ecological methodology. 2nd ed., Addison-Wesley, New York. Crowley, P. H. (1992). Resampling methods for computation-intensive data analysis in ecology and evolution. Annual Review of Ecology and Systematics, 23(1), 405-447.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>El remuestreo mediante uso de software.</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 1.5) Fundamentos de álgebra de matrices usando el Software R</strong></td>
                                <td><strong>1 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    <ul>
                                        <li>Conceptos de básicos de matrices</li>
                                        <li>Distribución normal multivariable</li>
                                        <li>Aplicaciones con R y R-Studio</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Gauch, H.G. Jr. 1982. Multivariate analysis in community ecology. Cambridge University Press. Cambridge, UK, 298 p. <br>Pielou, E.C. 1984. The interpretation of ecological data: a primer on classification and ordination. J. Wiley & Sons, New York, XI+263 p.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Uso del software y manejo de datos multivariable con algebra matricial.</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 1.6) Introducción al manejo de software de bases de datos y de AMVD </strong></td>
                                <td><strong>1 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    <ul>
                                        <li>Herramientas de Excel</li>
                                        <li>Minitab</li>
                                        <li>CANOCO</li>
                                        <li>PcOrd</li>
                                        <li>NTSYS</li>
                                        <li>Aplicaciones con R y R-Studio</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Gauch, H.G. Jr. 1982. Multivariate analysis in community ecology. Cambridge University Press. Cambridge, UK, 298 p. <br>Palacio, F.X., Apodaca, M.J. y Crisci J.A. 2020. Análisis multivariado para datos biológicos: teoría y su aplicación utilizando el lenguaje R. Fundación de Historia Natural Félix de Azara.<br>Vinod, H. D. 2010. Advances in social science research using R. Springer.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Revisión bibliográfica sobre clasificación aplicada a temas individuales de los estudiantes.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 2. ANÁLISIS DE GRADIENTE</strong></td>
                                <td><strong>6 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 2.1. Los conceptos básicos </strong></td>
                                <td><strong>1.5 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>Enfoque Clmentsiano<br>Gleason y el enfoque individualístico<br>Sintesis de Whittaker
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Collins, S. L., Glenn, S. M., & Roberts, D. W. (1993). The hierarchical continuum concept. Journal of Vegetation Science, 4(2), 149-156.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Revisión bibliográfica sobre conceptos comunitarios en ecología</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 2.2) Promedios ponderados o promediación recíproca</strong></td>
                                <td><strong>1.5 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    <ol  type="1">
                                        <li>Primeros enfoques de la ordenación</li>
                                        <li>La promediación recíproca</li>
                                    </ol>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Gauch, H.G. Jr. 1982. Multivariate analysis in community ecology. Cambridge University Press. Cambridge, UK, 298 p.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Desarrollo de la promediación reciproca en Excel</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 2.3) Modelos de respuesta</strong></td>
                                <td><strong>1 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    <ul>
                                        <li>Fundamentos de regresión</li>
                                        <li>Aplicaciones básicas de modelos de regresión</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Krebs, Ch.J. 1999. Ecological methodology. 2nd ed., Addison-Wesley, New York.<br>Neter, J., Kutner, M. H., Nachtsheim, C. J., & Wasserman, W. (1996). Applied linear statistical models (Vol. 4, p. 318). Chicago: Irwin.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Aplicaciones clásicas de regresión en ecología y Ciencia Ambiental.</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 2.4) Diversidad beta y escalamiento de gradientes</strong></td>
                                <td><strong>1 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    <ul>
                                        <li>Diversidad y biodiversidad</li>
                                        <li>Índices de diversidad como proxies de ordenación</li>
                                        <li>Gradientes de diversidad biótica</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Schluter, D., & Pennell, M. W. (2017). Speciation gradients and the distribution of biodiversity. Nature, 546(7656), 48-55.<br>Krebs, Ch.J. 1999. Ecological methodology. 2nd ed., Addison-Wesley, New York.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Uso de software para análisis de gradiente y biodiversidad<br>Herramientas de Excel<br>Minitab<br>CANOCO<br>PcOrd<br>NTSYS<br>Aplicaciones con R y R-Studio</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 2.5) Bioindicadores</strong></td>
                                <td><strong>1 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    Bioindicadores en ecología<br>Bioindicadores en ciencia ambienta
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Heink, U., & Kowarik, I. (2010). What are indicators? On the definition of indicators in ecology and environmental planning. Ecological Indicators, 10(3), 584-593.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Revisión bibliográfica sobre bioindicadores</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 3 ORDENACIÓN</strong></td>
                                <td><strong>15 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 3.1) La ordenación indirecta.</strong></td>
                                <td><strong>8 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>Introducción (ordenación polar)<br>Criterios para la selección del método adecuado<br>Análisis de componentes principales (ACP)<br>Análisis de factor (AF)<br>Análisis de coordenadas principales (ACoP)<br>Análisis de correspondencias (AC)<br>Análisis de correspondencia linearizado (rectificado, distendido o segmentado - DCA)<br>Escalamiento multidimensional no-métrico (EMNM)
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Gauch, H.G. Jr. 1982. Multivariate analysis in community ecology. Cambridge University Press. Cambridge, UK, 298 p.<br>Pielou, E.C. 1984. The interpretation of ecological data: a primer on classification and ordination. J. Wiley & Sons, New York, XI+263 p.<br>Jongman, R.H.G., ter Braak, C.J.F. and van Tongeren, O.F.R. (eds.) (1995). Data analysis in community and landscape ecology. Cambridge University Press. Cambridge.<br>Hill, M.O. 1973. Reciprocal averaging: an eigenvector method of ordination. Journal of Ecology, 61, 237-249.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Revisión bibliográfica sobre ordenación indirecta aplicada a temas individuales de los estudiantes. Uso de software para análisis de ordenación.
                                    <br>Herramientas de Excel<br>Minitab<br>CANOCO<br>PcOrd<br>NTSYS<br>Aplicaciones con R y R-Studio
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 3.2) La ordenación directa.</strong></td>
                                <td><strong>7 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    Análisis de redundancia (ARD)<br>Análisis de correspondencias canónico (ACC)<br>Análisis de correspondencias canónico distendido (ACCD)<br>Interpretación de la ordenación directa<br>Practica de ordenación directa (CANOCO)<br>Tópicos avanzados de ordenación (Ordenación por lógica difusa)
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Gauch, H.G. Jr. 1982. Multivariate analysis in community ecology. Cambridge University Press. Cambridge, UK, 298 p.<br>Pielou, E.C. 1984. The interpretation of ecological data: a primer on classification and ordination. J. Wiley & Sons, New York, XI+263 p.<br>Jongman, R.H.G., ter Braak, C.J.F. and van Tongeren, O.F.R. (eds.) (1995). Data analysis in community and landscape ecology. Cambridge University Press. Cambridge.<br>Roberts, D. W. (2009). Comparison of multidimensional fuzzy set ordination with CCA and DB‐RDA. Ecology, 90(9), 2622-2634.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Revisión bibliográfica sobre ordenación directa aplicada a temas individuales de los estudiantes.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 4. CLASIFICACIÓN</strong></td>
                                <td><strong>15 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 4.1) Introducción </strong></td>
                                <td><strong>9 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>Métodos de cálculo de parecido y diferencia<br>Cálculo de la matriz de similitud<br>La clasificación jerárquica y no jerárquica<br>Estrategias de fusión o agrupamiento<br>Interpretación de los grupos<br>Evaluación del agrupamiento: La matriz cofenética
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Sneath, P.H.A. & Sokal, R.R. 1973. Numerical taxonomy. Freeman, San Francisco, 573 p.<br>Pielou, E.C. 1984. The interpretation of ecological data: a primer on classification and ordination. J. Wiley & Sons, New York.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Revisión bibliográfica sobre clasificación aplicada a temas individuales de los estudiantes. Uso de software para análisis de clasificación.
                                    <br>Herramientas de Excel<br>Minitab<br>CANOCO<br>PcOrd<br>NTSYS<br>Aplicaciones con R y R-Studio
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 4.2) Aplicaciones y tópicos avanzados de clasificación</strong></td>
                                <td><strong>6 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>
                                    Combinación de ordenación y clasificación<br>El análisis discriminante y su relación con el AMVV (análisis multivariable de varianza)<br>El análisis de clasificación de dos vías (TWINSPAN)<br>Análisis de especies indicadoras<br>Practicas con software de clasificación (NTSYS, PCOrd, TWINSPAN)<br>Comparación de métodos de clasificación
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Sneath, P.H.A. & Sokal, R.R. 1973. Numerical taxonomy. Freeman, San Francisco, 573 p.<br>Pielou, E.C. 1984. The interpretation of ecological data: a primer on classification and ordination. J. Wiley & Sons, New York.<br>Hill, M.O. 1979. TWINSPAN - a FORTRAN program for arranging multivariate data in an ordered two-way table by classification of the individuals and attributes. Cornell University, Ithaca, New York.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Revisión bibliográfica sobre clasificación aplicada a temas individuales de los estudiantes.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 5 TÓPICOS CUANTITATIVOS AVANZADOS</strong></td>
                                <td><strong>6 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 5.1) Tópicos emergentes en modelación ambiental </strong></td>
                                <td><strong>6 h</strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>Principios de geoestadística<br>Regresión logística<br>Cadenas tróficas y técnicas cuantitativas de estudio<br>Análisis de senda (asociación contra causalidad)<br>Ecuaciones estructurales<br>Lógica difusa<br>Redes neuronales
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Legendre, P. & Legendre, L. 1998. Numerical ecology. 2nd ed. Elsevier, Amsterdam, Capítulo 13.<br>Tabachnick, B. G., and Fidell, L. S. 2007. Using Multivariate Statistics, 5th ed. Boston: Allyn and Bacon. Capítulos 10 y 14.<br>Halvorson, J. 1994. Geostatistics and ecology. Bulletin of the Ecological Society of America, 75(1), 36-38.<br>Li, J., & Heap, A. D. (2014). Spatial interpolation methods applied in the environmental sciences: A review. Environmental Modelling & Software, 53, 173- 189.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral por el profesor y análisis de artículos técnicos del tema por los alumnos.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Revisión bibliográfica sobre el tema aplicado a temas individuales de los estudiantes.
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                                        <td>En la sesión 10</td>
                                        <td>• Examen escrito</td>
                                        <td>27.0</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>En la sesión 22</td>
                                        <td>• Examen escrito</td>
                                        <td>27.0</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>En la sesión 32</td>
                                        <td>• Trabajo final</td>
                                        <td>26.0</td>
                                    </tr>

                                    <tr>
                                        <td>Tareas</td>
                                        <td>Permanente</td>
                                        <td>• Informes escritos de lecturas y uso de software </td>
                                        <td>20.0</td>
                                    </tr>

                                    <tr>
                                        <td>Total</td>
                                        <td></td>
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
                    <li>Gauch, H.G. Jr. 1982. Multivariate analysis in community ecology. Cambridge University Press. Cambridge, UK, 298 p.</li>
                    <li>Jongman, R.H.G., ter Braak, C.J.F. and van Tongeren, O.F.R. (eds.) (1995). Data analysis in community and landscape ecology. Cambridge University Press. Cambridge, 299 p.</li>
                    <li>Legendre, P. & Legendre, L. 1998. Numerical ecology. 2nd ed. Elsevier, Amsterdam, XV+853 p.</li>
                    <li>Pielou, E.C. 1984. The interpretation of ecological data: a primer on classification and ordination. J. Wiley & Sons, New York, XI+263 p.</li>
                    <li>Johnson, R. A. & Wichern, D. W. 2002. Applied multivariate statistical analysis. Prentice Hall: London. 767 p.</li>
                    <li>Krebs, Ch.J. 1999. Ecological methodology. 2nd ed., HarperCollins, New York, XV+624</li>
                    <li>McGarigal, K., S. Cushman, & S. Stafford. 2000. Multivariate statistics for wildlife and ecology research. Springer, New York, xiii + 283 p.</li>
                    <li>Sneath, P.H.A. & Sokal, R.R. 1973. Numerical taxonomy. Freeman, San Francisco, 573 p.</li>
                    <li>Tabachnick, B. G., and Fidell, L. S. 2007. Using Multivariate Statistics , 5th ed. Boston: Allyn and Bacon. XXVIII + 980 p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li><a href="http://www.bio.umontreal.ca/legendre/numecol.html">http://www.bio.umontreal.ca/legendre/numecol.html</a></li>
                    <li><a href="http://biol10.biol.umontreal.ca/BIO6077/">http://biol10.biol.umontreal.ca/BIO6077/</a></li>
                    <li><a href="http://ichthyology.usm.edu/courses/multivariate/">http://ichthyology.usm.edu/courses/multivariate/</a></li>
                    <li><a href="http://unjobs.org/tags/multivariate-statistics">http://unjobs.org/tags/multivariate-statistics</a></li>
                    <li><a href="http://www.umass.edu/landeco/teaching/multivariate_stats/labs/multivariate_labs.html">http://www.umass.edu/landeco/teaching/multivariate_stats/labs/multivariate_labs.html</a></li>
                    <li><a href="https://cran.r-project.org/web/views/NumericalMathematics.html">https://cran.r-project.org/web/views/NumericalMathematics.html</a></li>
                    <li><a href="https://www.inecol.mx/inecol/index.php/es/">https://www.inecol.mx/inecol/index.php/es/</a></li>
                    <li><a href="https://www.inegi.org.mx/">https://www.inegi.org.mx/</a></li>
                    <li><a href="https://www.jstor.org.creativaplus.uaslp.mx/">https://www.jstor.org.creativaplus.uaslp.mx/</a></li>
                    <li><a href="https://www.millenniumassessment.org/en/index.html">https://www.millenniumassessment.org/en/index.html</a></li>
                    <li><a href="https://www.sciencedirect.com">https://www.sciencedirect.com</a></li>
                    <li><a href="http://bibliotecas.uaslp.mx/">http://bibliotecas.uaslp.mx/</a></li>
                    <li><a href="http://slpm.uaslp.mx/">http://slpm.uaslp.mx/</a></li>
                    <li><a href="http://socbot.mx/nuevositio/">http://socbot.mx/nuevositio/</a></li>
                    <li><a href="http://web.b.ebscohost.com.creativaplus.uaslp.mx/ehost/command/detail?">http://web.b.ebscohost.com.creativaplus.uaslp.mx/ehost/command/detail?</a></li>
                    <li><a href="http://web.ecologia.unam.mx/">http://web.ecologia.unam.mx/</a></li>
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
                    • Ninguna
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                    <p>
                        • Ninguna
                    </p>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 10</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. José Luis Flores Flores
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
