@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>EVALUACIÓN DE RIESGO EN SALUD HUMANA</strong></h1>
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
                                        <td>1</td>
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
                <p>Desarrollar en el estudiante el interés por implementar evaluaciones de riesgo en población expuesta a químicos ambientales empleando diferentes técnicas instrumentales para la evaluación de contaminantes en matrices ambientales y biológicas.
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
                                        <td id="contTabla">Competencia de Razonamiento Científico-Tecnológico</td>

                                        <td>El estudiante será capaz de realizar evaluaciones de riesgo por exposición a sustancias químicas presentes en el escenario evaluado. Asimismo, podrá realizar estandarizaciones y validaciones de métodos analíticos en absorción atómica, potenciometría, cromatografía de líquidos, cromatografía de gases, acoplamiento de plasma inductivo y detectores como UV-Vis, fluorescencia y espectrometría de masas, empleando guías nacionales e internacionales como marco de referencia aportadas por la EURACHEM, AOAC entre otras. </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Competencia Cognitiva y Emprendedora</td>

                                        <td>Se le estimulará al estudiante a buscar la máxima calidad posible manteniéndose actualizado mediante el autoaprendizaje, a fin de plantearse la posibilidad de generar iniciativas en sus proyectos de tesis.     
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla">Competencia de responsabilidad social y sustentabilidad 
                                        </td>

                                        <td>El alumno aprenderá metodologías a microescala y con un enfoque en la química verde para la detección de compuestos químicos ambientales en muestras ambientales y biológicas. Asimismo, desarrollará evaluaciones de riesgo en salud humana por la exposición a los contaminantes detectados. </td>
                                    </tr>
                                    <tr>
                                        <td>Competencia ético-valoral </td>
                                        <td>El alumno deberá adquirir conciencia de que los resultados obtenidos deberán estar basados en control de calidad para dar veracidad y confiabilidad a las conclusiones de sus proyectos. Los estudiantes ejercitarán este ejercicio en estudios de casos. </td>
                                    </tr>
                                    <tr>
                                        <td>Competencia intercultural e internacional </td>
                                        <td>El curso incide mucho en elementos comparativos, tanto de normativas internacionales como de metodologías y marcos de trabajo que realizan otras naciones. </td>
                                    </tr>
                                    <tr>
                                        <td>Competencia de comunicación en español e inglés </td>
                                        <td>El material que se emplea en el curso está en un 90% en idioma inglés. Además, se le estimula al estudiante a generar un resumen en este idioma. </td>
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
                                        <td>Introducción a sitios contaminados, rutas de exposición y dosis de referencias.</td>
                                        <td id="contTablaIzq"> El alumno se familiarizará con los diferentes marcos conceptuales (riesgo, amenaza, peligro, dosis de referencia etc.). Asimismo, se proporcionarán los conocimientos necesarios para evaluar impactos potenciales de la contaminación sobre el medio ambiente y la salud humana. 
                                        </td>
                                        <td id="contTablaIzq">Exposición oral por parte del profesor, discusión de temas, realización de actividades prácticas. Identificación y recopilación de información a través de buscadores y bases de datos.
                                            <ol style="list-style-type: lower-alpha;">
                                                <li> Realización de búsqueda de temas de rutas de exposición, vías de exposición que se asigne al alumno. </li>
                                                <li>Presentación de la estrategia y resultados obtenidos. </li>
                                                <li>Revisión de artículos y reportes científicos.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Validación de métodos analíticos y control de calidad </td>
                                        <td id="contTablaIzq">El alumno adquirirá el conocimiento sobre las herramientas y técnicas para la cuantificación de compuestos inorgánicos en matrices biológicas y ambientales. Además, se familiarizará las bases de los procedimientos y técnicas para realizar una validación de métodos analíticos.
                                        </td>
                                        <td id="contTablaIzq">Exposición oral por parte del profesor, discusión de temas, realización de actividades prácticas.<br> Identificación y recopilación de información a través de buscadores y bases de datos de temas de control de calidad y validación de métodos analíticos.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Estimaciones de riesgo mediante exposición indirecta a través de muestras ambientales</td>
                                        <td id="contTablaIzq">El alumno conocerá los diferentes cálculos necesarios para estimar el riesgo no cancerígeno en salud humana a través de las concentraciones encontradas en matrices ambientales. 
                                        </td>
                                        <td id="contTablaIzq">Exposición oral por parte del profesor, discusión de temas, realización de actividades prácticas. Identificación y recopilación de información a través de buscadores y bases de datos. <br>Revisión de un artículo sobre un tema de investigación seleccionado por el alumno. <br>Lectura y análisis individual y en grupo de literatura científica sobre temas de evaluaciones de riesgo por exposición a sustancias químicas ambientales. <br>Lectura y análisis individual y en grupo de literatura científica sobre temas del método Montecarlo para la evaluación de riesgos 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Estimaciones de riesgo mediante biomarcadores de exposición biológica</td>
                                        <td id="contTablaIzq">El alumno conocerá los diferentes cálculos necesarios para estimar el riesgo a algún efecto específico en salud humana a través de las concentraciones encontradas en matrices biológicas. 
                                        </td>
                                        <td id="contTablaIzq">Exposición oral por parte del profesor, discusión de temas, realización de actividades prácticas. <br>Revisión de un artículo sobre un tema de investigación seleccionado por el alumno. <br>Lectura y análisis individual y en grupo de literatura científica sobre temas de evaluaciones de riesgo por biomarcadores de exposición. 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Presentaciones de protocolos de los estudiantes </td>
                                        <td id="contTablaIzq">El alumno realizará una evaluación de riesgos a la salud humana en escenarios hipotéticos. Asimismo, el alumno presentará un seminario de su trabajo de tesis aplicando los conocimientos adquiridos durante el curso. 
                                        </td>
                                        <td id="contTablaIzq">Retroalimentación del profesor, presentación por parte del alumno, discusión grupal. <br>Revisión de un artículo sobre un tema de investigación seleccionado por el alumno. <br>Lectura y análisis individual y en grupo de literatura científica sobre su trabajo de tesis. 
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
                                        <td>Examen parcial</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al término de la Unidad 2</td>
                                        <td>Examen parcial </td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al término de la Unidad 3</td>
                                        <td>Examen parcial</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al término de la Unidad 4 </td>
                                        <td>Examen parcial</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Al término de la unidad 5</td>
                                        <td>Presentación y protocolo de ER del tema de tesis o estudio de caso </td>
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
                <ul class="vineta">
                    <li>Principios de Análisis Instrumental. Skoog D.A., Holler F.J., Nieman T. A. 5ª edición. McGraw-Hill Interamericana de España. España 2001. </li>
                    <li>Química Analítica. Skoog D A.., West D.M., Holler F.J.Crouch S.R. McGraw-Hill 7ª edición. Interamericana Editores. México 2001. </li>
                    <li>Estadística y Quimiometría para Química Analítica. Miller J.N. and Miller J.C. 4ª edición. Prentice Hall, 2002. </li>
                    <li>Basic Gas Chromatography. McNair H. M. Miller J.M. Wiley & Sons Inc. E.U.A. 1997. </li>
                    <li>Chemical Separations. Principles, techniques and experiments. Meloan C.E. Wiley Interscience, Wilet & Sons, Inc. E.U.A. 1999. </li>
                    <li>Practical HPLC method development . 2ª ed. Zinder Ll. R., Kirkland J., Glaich J. E.U.A. 1997. </li>
                    <li>Liquid Chromatography for the analyst. Scott R.P.Marcel Dekker ed. E.U.A. 1994. </li>
                    <li>Análisis químico cuantitativo. Harris, Daniel C. Edición: 2a ed.. Barcelona : Reverté, 2001 </li>
                    <li>Principles of analytical chemistry : a textbook.Miguel Valcárcel. Berlin, Springer-Verlag, 2000. </li>
                    <li>Quantitative chemical analysis. Damiel C. Harris. Edition: 6th ed. New York, W.H. Freeman, 2003. </li>
                    <li>Química analítica moderna. David Harvey . Ruizalvar S.L. España:Graw-Hill, 2002.</li>
                    <li> Reference materials in analytical chemistry, a guide for selection and use. A. Zschunke, ed.Berlin, Springer-Verlag, 2000.</li>
                    <li>Sample Preparation Techniques in Analytical Chemistry. Edited by Somenath Mitra , Jhon Wiley & Sons, Inc. Publication. 2003</li>
                    <li>Técnicas analíticas de contaminantes químicos. Miguel Ángel Sogorb Sánchez y Eugenio Vilanova Gisbert. Ed. Díaz de Santos, España, 2004. </li>
                    <li>Validation and qualification in analytical laboratories. Ludwig Huber.Boca Ratón,Interpharm/CRC, 1999.</li>
                    <li>Química analítica contemporánea. Judith F. Rubinson, Kenneth A. Rubinson. México : Prentice-Hall, 2000. </li>
                    <li>Environmental analytical Chemistry. 2ª edition. Fifield F.W., Haines P.J. editors. Blakwell Science. United Kingdom. 2000.</li>
                    <li>Diseño de experimentos. 2ª edición. Kuehl R.O. International Thomson Editors. México 2001. </li>
                    <li>Environmental Analysis. Reeve R. N. Wiley & Sons. E.U.A. 1994.</li>
                    <li> Solución de Problemas de Química Analítica. Brewer S. 1ª edición. Editorial Limusa. México. 1987.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li> <a href="http://creativa.uaslp.mx/">http://creativa.uaslp.mx/</a> (Sistema de Bibliotecas de la UASLP) </li>
                    <li><a href="http://www.elsevier.com ">http://www.elsevier.com </a></li>
                    <li><a href="http://www.springer.com">http://www.springer.com </a></li>
                    <li><a href="http://www.wiley.com">http://www.wiley.com </a></li>
                    <li><a href="http://www.nature.com/">http://www.nature.com/ </a></li>
                    <li><a href="http://www.plos.org/">http://www.plos.org/ </a></li>
                    <li><a href="http://www.biomedcentral.com/">http://www.biomedcentral.com/ </a></li>
                    <li><a href="http://www.scielo.org">http://www.scielo.org </a></li>
                    <li>Academic Search Complete (EBSCO)</li>
                    <li>Ovid (Wolters Kluwer) (<a href="http://www.ovid.com">http://www.ovid.com</a>)</li>
                    <li> Web of Science (Thomson Reuters)</li>
                    <li>Science Direct (Elsevier) (<a href="http://www.sciencedirect.com/">http://www.sciencedirect.com/</a>)</li>
                    <li>SpringerLink (Springer) (<a href="http://link.springer.com/">http://link.springer.com/</a>)</li>
                    <li>Wiley on line library (<a href="http://onlinelibrary.wiley.com/">http://onlinelibrary.wiley.com/</a>)</li>
                    <li> <a href="http://www.ebsco.com/home/">http://www.ebsco.com/home/.</a></li>
                    <li><a href="http://www.elsevier.com/wps/find/journal_browse.cws_home">http://www.elsevier.com/wps/find/journal_browse.cws_home </a></li>
                    <li><a href="http://www.springerlink.com/home/main.mpx">http://www.springerlink.com/home/main.mpx </a></li>
                    <li><a href="http://www.jstor.org/">http://www.jstor.org/ </a></li>
                    <li><a href="http://www.tandf.co.uk/journals/">http://www.tandf.co.uk/journals/ </a></li>
                    <li><a href="http://www.area.us.es/toxicologia/buscatox.htm">http://www.area.us.es/toxicologia/buscatox.htm </a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario: 
                    <br>Se requiere conocimiento básico de química, biología, toxicología, manejo de herramientas informáticas básicas como Excel.
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    <br>• Esta materia no se comparte con otro posgrado
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>Si</strong></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>Si</strong></li>
                </ul>
                </div>

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
                <p> <strong> • Elaboró: </strong> Dr. Rogelio Flores Ramírez; Dr. Francisco Javier Pérez Vázquez 
                    <br>
                    <strong> • Revisó:</strong> Dr. Fernando Díaz Barriga Martínez 
                </p>
            </div>
        </div>
    </div>
@endsection
