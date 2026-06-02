@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>Fundamentos teórico-metodológicos para evaluar la Salud de los Ecosistemas</strong></h1>
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
                                        <td>Curso-taller</td>
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
                                        <td>5</td>
                                        <td>0</td>
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
                <p>Analizar los conceptos fundamentales de la salud ecológica y aplicarlos para entender la relación entre los efectos en la biota ocasionados por diferentes agentes estresantes, así como su interrelación con la salud de todas las especies de un ecosistema (incluido el ser humano). 
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
                                        <td id="contTabla"><strong>1</strong></td>

                                        <td>El estudiante será capaz de realizar propuestas integrales para la evaluación de salud de los ecosistemas que contemple todas las etapas del marco mexicano e internacional en diversos escenarios de contaminación ambiental.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>2</strong></td>

                                        <td>Dominio técnico básico (búsqueda especializada de información). El alumno tendrá acceso a software especializado para diseño de muestreo y modelación de dosis de exposición. Esta asignatura contribuye de manera directa al logro de las siguientes competencias profesionales del perfil de egreso del programa.
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
                                        <td>Salud ecológica </td>
                                        <td id="contTablaIzq"> El alumno conocerá y comprenderá el origen de una disciplina emergente relacionada con problemática ambiental, principalmente pérdida de diversidad biológica y la afectación de la salud humana y de la biota. 
                                        </td>
                                        <td id="contTablaIzq">Tareas previas a cada tema para que el estudiante investigue sobre el mismo. <br>Clases presenciales del profesor (introducción) y los equipo de trabajo (estudiantes) con apoyo de material visual y/o audiovisual que describa y ejemplifique cada tema, apoyándose en libros y, principalmente, artículos actuales y específicos para cada tema 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td> Salud ecológica y su relación con humanos – Estudios de caso</td>
                                        <td id="contTablaIzq">El alumno analizará y comprenderá la interacción de la salud ecológica y humana. 
                                        </td>
                                        <td id="contTablaIzq">Tareas previas a cada tema para que el estudiante investigue sobre el mismo. <br>Clases presenciales del profesor (introducción) y los equipo de trabajo (estudiantes) con apoyo de material visual y/o audiovisual que describa y ejemplifique cada tema, apoyándose en libros y, principalmente, artículos actuales y específicos para cada tema 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Salud ecológica y su relación con la biota – Estudios de caso</td>
                                        <td id="contTablaIzq">El alumno analizará y comprenderá la interacción de la salud ecológica y diferentes especies animales y vegetales. 
                                        </td>
                                        <td id="contTablaIzq">Tareas previas a cada tema para que el estudiante investigue sobre el mismo. <br>Clases presenciales del profesor (introducción) y los equipo de trabajo (estudiantes) con apoyo de material visual y/o audiovisual que describa y ejemplifique cada tema, apoyándose en libros y, principalmente, artículos actuales y específicos para cada tema 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Definiciones, conceptos, enfoque, planeación y formulación del problema </td>
                                        <td id="contTablaIzq">Brindar los conceptos y definiciones esenciales para la descripción de los elementos del campo científico y para el proceso de evaluación de riesgos ecológicos. <br>Comparar los diferentes marcos metodológicos nacionales e internacionales en evaluación de riesgo ecológico enfatizando en sus diferencias y potencialidades. Brindar los elementos necesarios para identificar riesgos en los ecosistemas 
                                        </td>
                                        <td id="contTablaIzq">Clases presenciales por parte del profesor con apoyo de material visual y/o audiovisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Análisis de la exposición y efectos</td>
                                        <td id="contTablaIzq">Proporcionar las herramientas para evaluar y estimar la exposición a contaminantes en organismos y estudiar los diversos factores que determinan la acumulación de contaminantes a nivel de organismo y a través de las redes tróficas Identificar y analizar las respuestas de los organismos a la exposición de agentes estresantes en diferentes niveles de organización biológica útiles en el proceso de evaluación de riesgo. 
                                        </td>
                                        <td id="contTablaIzq">Clases presenciales por parte del profesor con apoyo de material visual y/o audiovisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo. 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td> Caracterización del riesgo</td>
                                        <td id="contTablaIzq">Brindar las herramientas para el proceso de integración entre la exposición y las respuestas ecológicas para evaluar la probabilidad de efectos adversos, así como la cuantificación de las incertidumbres asociadas 
                                        </td>
                                        <td id="contTablaIzq">Clases presenciales por parte del profesor con apoyo de material visual y/o audiovisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo.
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
                        <p>A continuación, se muestra las condiciones de las evaluaciones parciales.
                            <br>Se deberá cumplir con cada uno de los aspectos a evaluar para poder tener calificación aprobatoria.</p>
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
                                        <td>Al término de la unidad 1 </td>
                                        <td>Examen escrito </td>
                                        <td>10%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al término de la unidad 2 </td>
                                        <td>Exposición Estudio de caso 1 </td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al término de la unidad 3 </td>
                                        <td>Exposición Estudio de caso 2</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al término de la unidad 4 </td>
                                        <td>Examen escrito  </td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Al término de la unidad 5 Y 6 </td>
                                        <td>Estudio de caso 3</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td colspan="3">TOTAL</td>
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
                    <li>Aguirre, A.A.; R.S. Ostfeld; G.M. Tabor; C. House; M.C. Peral. 2002. Conservation Medicine: Ecological Health in Practice. Oxford University Press. USA. 407 p.</li>
                    <li>Friend, M. 2006. Disease Emergence, Resurgence, Wildlife-Human Connection. USGS National Wildlife Health Center in cooperation with the U.S. Fish and Wildlife Service. Virginia, U.S.A. 402p </li>
                    <li>Jørgensen, S.E. Costanza, R. Xu Fu-Liu. 2005. Ecological Indicators for Assessment of Ecosystem Health. CRC Press. Taylor and Francis. USA. ISBN 1-56670-665-3. 464p</li>
                    <li> Suter II GW, Efroymson RA, Sample BE, Jones DS. 2000. Ecological Risk Assessment for Contaminated Sites. CRC Press 438p.</li>
                    <li>Suter II GW. 2006. Ecological Risk Assessment. 2ª ed. CRC Press. Florida, USA. 643 p </li>
                </ul>
            </div>

            <hr>
                <h5> <strong>TEXTOS COMPLEMENTARIOS </strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Baird DJ., Burton GA. 2001. Ecological Variability: Saparating natural from anthropogenic causes of ecosystem impairment. SETAC PRESS. </li>
                    <li>Barnthhouse LW., Munns WR., Sorensen MT. 2007. Population level ecological risk assessment. SETAC PRESS.</li>
                    <li>Ferenc, SA., Foran JA. 1999. Multiples stressors in ecological risk and impac assessment: approaches to risk estimation. SETAC PRESS. </li>
                    <li>Newman MC. 2014. Fundamentals of Ecotoxicology. 4ª ed. Lewis Publishers. Florida, USA. 680p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ol type="1">
                    <li><a href="http://www.ebsco.com/home/">http://www.ebsco.com/home/. </a></li>
                    <li><a href="http://www.elsevier.com/wps/find/journal_browse.cws_home">http://www.elsevier.com/wps/find/journal_browse.cws_home </a></li>
                    <li><a href="http://www.springerlink.com/home/main.mpx">http://www.springerlink.com/home/main.mpx </a></li>
                    <li><a href="http://www.jstor.org/">http://www.jstor.org/ </a></li>
                    <li><a href="http://www.tandf.co.uk/journals/">http://www.tandf.co.uk/journals/ </a></li>
                    <li><a href="http://www.area.us.es/toxicologia/buscatox.htm">http://www.area.us.es/toxicologia/buscatox.htm </a></li>
                    <li><a href="http://www.setac.org/">http://www.setac.org/ </a></li>
                    <li><a href="http://tox.umh.es/aetox/Revista/index.htm">http://tox.umh.es/aetox/Revista/index.htm </a></li>
                    <li><a href="http://redalyc.uaemex.mx/">http://redalyc.uaemex.mx/ </a></li>
                    <li><a href="http://www.scielo.org/index.php?lang=en">http://www.scielo.org/index.php?lang=en</a></li>
                    <li><a href="http://www.nature.com/">http://www.nature.com/ </a></li>
                    <li><a href="http://www.plos.org/">http://www.plos.org/ </a></li>
                    <li><a href="http://www.biomedcentral.com/">http://www.biomedcentral.com/ </a></li>
                    <li><a href="http://www.conservationmedicine.org/">http://www.conservationmedicine.org/</a></li>
                    <li><a href="http://www.ecohealth.net/archive.php">http://www.ecohealth.net/archive.php</a></li>
                    <li> <a href="http://redalyc.uaemex.mx/">http://redalyc.uaemex.mx/ </a></li>
                    <li>Web of Science (Thomson Reuters)</li>
                    <li> Science Direct (Elsevier) (<a href="http://www.sciencedirect.com/">http://www.sciencedirect.com/</a>)</li>
                    <li>Wiley on line library (<a href="http://onlinelibrary.wiley.com/">http://onlinelibrary.wiley.com/</a>)</li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <br>• Ninguna
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    <br>• Ninguno
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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 15</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Formación</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Iniciales</th>
                                        <th scope="col">Horas del curso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Guillermo Espinosa Reyes </td>
                                        <td>Biólogo, Doctor en Ciencias Ambientales</td>
                                        <td>444-8262300 ext 8463</td>
                                        <td>GER</td>
                                        <td>30 h</td>
                                    </tr>

                                    <tr>
                                        <td>César Ilizaliturri Hernández</td>
                                        <td>Biólogo, Doctor en Ciencias Ambientales</td>
                                        <td>444-8262300 ext 8463</td>
                                        <td>caih </td>
                                        <td>30 H</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection
