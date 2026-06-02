@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>EVALUACIÓN AMBIENTAL Y ANALISIS ESPACIAL APOYADOS EN PR Y SIG</strong></h1>
                </div>
                <p></p><p></p>
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
                                        <td>2</td>
                                        <td>16</td>
                                        <td>1</td>
                                        <td>2</td>
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
                <p>Al concluir esta asignatura, los y las estudiantes lograrán conocer los principios y aplicaciones del análisis espacial a través de geotecnologías (percepción remota, sistemas de información geográfica, GPS) en la evaluación del impacto y la gestión ambiental. Asimismo, determinarán a partir del modelado espacial, metodologías para las fases de diagnóstico, impacto y pronóstico ambiental para la solución de problemas reales y comunicación oportuna a los tomadores de decisiones.</p>
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
                                        <td id="contTabla"> <strong>Capacidad de aprender y actualizarse permanentemente</strong></td>

                                        <td>
                                            <ol type="1">
                                               <li>El estudiante desarrollará habilidades para abordar y resolver estudios de impacto ambiental a través de la gestión de bases de datos georreferenciadas que modelará a través del análisis espacial.</li>
                                               <li>Hará uso de información estadística, geoespacial y de imágenes de satélite para la evaluación del impacto ambiental por estudios de caso.</li>
                                               <li>SIG cómo integrador de información, cómo integrador de tecnologías y como integrador de personas (multidisciplinariedad).</li>
                                               <li>Uso de las TIC, y de geotecnología: SIG, Sensores Remotos y Smarthphone-GPS.</li>
                                               <li>Elaboración de análisis espacio temporales (AET).</li>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Compromiso ético</strong></td>

                                        <td>
                                            El/la estudiante participa y colabora con las personas, grupos y comunidades de acuerdo con sus problemas sociales y sin dañar a terceros, respetando sus visiones sobre el entorno biológico-social.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Capacidad de comunicación oral y escrita</strong></td>
                                        <td>
                                           El/la estudiante tendrá la capacidad de transmitir información territorial a partir de mapas de riesgo y su información escrita y numérica a partir del análisis espacio temporales (AET) a investigadores y tomadores de decisiones.
                                        </td>
                                    </tr>

                                    <tr>
                                       <td id="contTabla"><strong>Compromiso con la preservación del medio ambiente</strong></td>
                                       <td>El/la estudiante desarrollará en cada práctica, estudios de caso que le permitan identificar las fases de diagnóstico, impacto y pronóstico ambiental, así como los actores responsables y las comunidades vulnerables para determinar las opciones de solución desde la gestión ambiental y lograr la Justicia Ambiental</td>         
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
                                        <td>Evaluación ambiental a través del análisis espacial y geotecnologías </td>
                                        <td id="contTablaIzq"> Aplicaciones de modelado espacial en contaminación atmósfera y calidad del aire, plaguicidas en planta, suelo y agua, cambios de uso de suelo y deforestación, justicia ambiental, impactos industriales y urbanos así como salud ambiental y geomedicina.</td>
                                        <td id="contTablaIzq">
                                            <ul> 
                                                <li>Se alternan el método deductivo basado en explicaciones conceptuales y teóricas del tema a cargo del profesor con el método inductivo consistente en las experiencias y participación de los alumnos.</li>
                                                <li>Exposición del tema por parte del profesor y discusión en clase de la lectura. presentación por parte de los alumnos.</li>
                                                <li>Lecturas, tareas, ejercicios en clases.</li>
                                                <li>Ensayo de lecturas sobre la conceptualización y modelado espacial aplicados a la evaluación del impacto ambiental.</li><br>
                                               <strong>Primera práctica</strong>: Análisis e interpretación de mapas.<br><br>
                                               <strong>Segunda práctica</strong>: Evaluación de la vulnerabilidad ambiental. Estudio de caso, la CDSLP. Protocolo de Justicia y Racismo Ambiental<br><br>
                                               <strong>Tercera práctica</strong>: Sobreposición de coberturas (geométrico-cartográfica y de atributo lógico)<br><br>
                                               <strong>Cuarta práctica</strong>: Levantamientos de puntos GPS y mapa móvil (práctica y verificación de campo). Ortorectificación de los puntos de verificación y generación de información vectorial.<br><br>
                                               <strong>Quinta práctica</strong>: mapas de puntos, de líneas y de polígonos (interpolaciones (kriging y cober average, buffer)<br><br>
                                               <strong>Sexta práctica</strong>: Evaluación multicriterio y Ponderación de mapas de peligros (matriz de evaluación y ponderación,lógica boolena). Mapas de salida: Formatos oficiales, digital georreferenciada, como imagen. Mapas de salida en la WEB.<br>
                                               </p>
                                        </td>

                                    <tr>
                                        <td>2</td>
                                        <td>Telecomunicación ambiental</td>
                                        <td id="contTablaIzq">Teledetección aplicada al impacto ambiental en atmósfera, agua, suelo, planta, así como zonas rurales y urbanas</td>
                                            <td id="contTablaIzq">
                                                <ul>
                                                    <li>Mediante el método deductivo basado en explicaciones conceptuales y teóricas del tema a cargo del profesor, con apoyo con material audiovisual acorde a la temática. Conducción de deliberaciones, análisis grupal de la estructura de los protocolos de investigación.</li><br>
                                                    <strong>Séptima práctica</strong>: Tipos de resolución espacial y tipo de satélites ópticos.<br><br>  
                                                    <strong>Octava práctica</strong>: Análisis visual y espectral de imágenes de satélite y su comparación con los algoritmos NDVI y TS para vegetación y edafología. Algoritmos para los procesos de deforestación y evaluación de incendios forestales. Creación del AET.<br><br>
                                                    <strong>Novena práctica</strong>: Algoritmos de emisiones de contaminantes atmosféricas en zonas urbanas y emisiones en el sector ganadero y agrícola. MDT y perfil transversal. Creación del AET.<br>
                                                    <strong>Décimo primera práctica</strong>: Práctica de campo en zona media en CINVEX El Balandrán.<br>
                                                    </p>
                                                </ul>    
                                            </td>
                                    <tr>
                                        <td>3</td>
                                        <td>Proyecto de investigación ambiental aplicando modelado y análisis espacial</td>
                                        <td id="contTablaIzq"> Aplicación de metodologías de modelado y análisis espacial a estudio de caso.</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Presentación por parte del profesor, conducción de deliberaciones, elaboración y presentación de una propuesta de investigación.</li>
                                                <li>Búsqueda en la red de organismos y fuentes de financiamiento, revisión de convocatorias para el financiamiento de proyectos y términos de referencia. Presentación de un proyecto de investigación.</li>
                                                <li><strong>Trabajo final</strong>: estudio de caso de evaluación de impacto
                                                ambiental mediante modelado y análisis espacial.</li>
                                        </td>
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
                        <h4><strong>Evaluación</strong></h4>
                        <p>Conforme a la normatividad universitaria del posgrado, así como la del plan de estudios del posgrado, el curso se acreditará con una calificación mínima de 8.0, siempre y cuando se cumpla con el requisito de tener un mínimo de 90% de asistencia. Tres retrasos equivalen a una inasistencia.</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col"># <br> parcial</th>
                                        <th scope="col">Momento de evaluación</th>
                                        <th scope="col">Método de evaluación y valor para la evaluación parcial</th>
                                        <th scope="col">Ponderación para evaluación final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1 y 2</td>
                                        <td >En cada sesión de clases</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Participación activa en las actividades individuales y en equipo, y en las discusiones grupales. Una práctica por clase de modelado y análisis espacial.</li>
                                            </ul>
                                        </td>
                                        <td>50%</td>
                                    </tr>

                                    <tr>
                                        <td>1 y 2</td>
                                        <td>En dos ocasiones</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Presentaciones verbales de los autores a discutir y diseño de una actividad de aprendizaje</li>
                                            </ul>
                                        </td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Una sola vez, al final de curso</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Trabajo escrito y de análisis espacial al final del curso con el estudio de caso relacionado con su trabajo de investigación (tesis)</li>
                                            </ul>
                                        </td>
                                        <td>40%</td>
                                    </tr>
                                </tbody>
                            </table>
                         </div>
                         <p></p>
                    </div>
                </div>

                <hr>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <p></p>
                <h5> <strong>Textos básicos</strong></h5>
                <div class="margen">
                        <ul>
                           <li>Mansourian, et. al. (2018). Geospatial Technologies for All. Springer International Publishing AG</li>             
                           <li>Buzai, et. al. (2015). Teoría y Métodos de los Geografía Cuantitativa. Libro 1. Por una Geografía de lo real. MCA libros. RED GESIG, Universidad Nacional de Luján, Argentina.</li>
                           <li>Olaya, V. (2014). Sistemas de Información Geográfica. licencia Creative Common Atribución.</li>
                           <li>Fischer and Getis. (2010). Handbook of Applied Spatial Analysis. Software Tools, Methods and Applications Springer
                           International Publishing AG</li>
                           <li>Radilla, F. (2008). Modelado de datos para base de datos espaciales. Caso de estudio: sistemas de información
                           geográfica. CINVESTAV-IPN-México.</li>
                           <li>Tomlinson, R. (2007). Pensando en SIG. Planificación del Sistema de Información Geográfica dirigida a generantes.
                           ESRI PRESS. USA</li>
                           <li>Chan, Y. (2001). Location Theory and Decision Analysis. Analytics of Spatial Information Technology. Springer
                           Heidelberg Dordrecht London New York</li>
                           <li>Chuvieco, E. (2010). “Teledetección ambiental”, Barcelona, España, Editorial Ariel                           </li> 
                           <li>Pinilla, C. (1995).” Elementos de teledetección”, Madrid, España, RAMA                           </li>
                           <li>Lillesand, T., Kiefer, R & Chipman, J. (2007). “Remote Sensing and Image Interpretation                           </li>
                           <li>González, R & Woods, R. (1996). “Tratamiento digital de imágenes”, Ed Addison- Wesley. Traducción en español
                           por Fernando Davue Rodríguez</li>
                           <li>Balkema, .A., et al., (1998): Future Trends in Remote Sensing, Rotterdam, Editorial Gudmandse</li>
                           <li>Gómez (2007). Métodos y técnicas de la cartografía temática en Temas Selectos de Geografía, Colección
                           del Instituto de Geografía de la UNAM.</li>
                           <li>Granados, Galindo, Hernandez y Valdez (2008). Monitoring land cover and use using NOAA-AVHRR data
                           in the Huasteca Potosina, México. Geocarto Internacional. pp. 1-13, Taylor & Francis</li>
                           <li>Heywood, Cornelius y Carver, (2002). An Introduction to Geographical Information System. Prentice Hall
                           Spatial data modelling. Cap 3 Data analysys.</li>
                           <li>Jensen (2000) Remote Sensing of the Environment. An earth resource perspective. Prentice Hall
                            ing Geographic Information Science.</li>
                        </ul>
                    </div>
                    <p></p>
                    <h5><strong>Recursos digitales</strong></h5>
                    <div class="margen">    
                       <ul>
                          <li>Manual Sobre el Manejo de Peligros Naturales en la Planificación para el Desarrollo Regional
                          Integrado<a href="https://www.oas.org/dsd/PUBLICATIONS/UNIT/OEA65S/begin.htm#Contents" target="_blank">https://www.oas.org/dsd/PUBLICATIONS/UNIT/OEA65S/begin.htm#Contents</a></li>
                          <li>LA RED. Los desastres no son naturales.<a href="https://www.desenredando.org/public/libros/1993/ldnsn/" target="_blank">https://www.desenredando.org/public/libros/1993/ldnsn/</a></li>              
                          <li> CENAPRED<a href="https://www.cenapred.unam.mx/es/" target="_blank">https://www.cenapred.unam.mx/es/</li>
                          <li>CONABIO. Metadatos y cartografía en línea.<a href="http://www.conabio.gob.mx/informacion/geo_espanol/doctos/cart_linea.html" target="_blank">http://www.conabio.gob.mx/informacion/geo_espanol/doctos/cart_linea.html</a>.</li><br>
                          <p>Páginas de modelado en línea:</p>  
                          <li>NAPPFAST<a href="https://www.nappfast.org/" target="_blank">https://www.nappfast.org/</a>.</li>
                          <li> IpmPIPE <a href="http://sbrusa.net/cgi-bin/sbr/public.cgi" target="_blank">http://sbrusa.net/cgi-bin/sbr/public.cgi</a>.</li>
                          <li>SINAVEF <a href="http://portal.sinavef.gob.mx/# " target="_blank">http://portal.sinavef.gob.mx/# </a>.</li>
                          <li>Bases de datos disponibles para los alumnos desde el LaNGIF-CIACyT-UASLP.</li>
                          <li>Bases de datos no espaciales digitales: Demografía, economía, relaciones internacionales, medio
                          ambiente, conflictos bélicos, PIB, etc., a nivel mundial, nacional y estatal goerreferenciados.</li>
                          <li>Bases de datos espaciales digitales: Cartografía básica y temática digital a nivel nacional y estatal, vectoriales 1:50 000 y 1:250 000.</li>
                          <li>Imágenes de satélite disponibles: SPOT VHR, LANDSAT MSS, TM y ETM+, OLi, NOAA-AVHRR,
                          MODIS, SENTINEL, Quick Bird, fotografía digital infrarroja.</li><br>
                          <p>Plataformas SIG de trabajo:</p>
                          <li>ILWIS 3.6, IDIRSI 9.3, ERDAS 9.8, Arc Gis 10.0, ENVI 10.0</li>  
                        </ul>
                </div>
                <hr>

                <h4><strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar la asignatura, es necesario:</p>
                 <p>Niguna</p>
                <hr>
                <h4><strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado: </p>
                <p>Ninguno</p>
                <hr>
                <h4><strong>Otras formas de acreditación</strong> </h4>
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
                <div class="margen">
                    <ul>
                        <li> Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 14</li> 
                        <li> Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 3 </li>
                    </ul>
                
                <hr>
                <h4><strong>Elaboradores y revisores</strong> </h4>
                    <p><strong>Elaboró:</strong> Dra. María Guadalupe Galindo Mendoza.<br>
                    <strong>Revisó: </strong>Área de Gestión Ambiental<br>
                </p>
                <div class="row m-0 text-center align-items-center justify-content-center">
                    <div class="col-auto">
                        <a  class="btn btn-primary rounded-pill" id="botonesGeneral" href="https://uaslpedu-my.sharepoint.com/personal/pmpca_uaslp_mx/Documents/00_CONTROLESCOLAR/01_Trabajo_Zoraida/Cursos_Ene-Jul_2025/GA_Evaluaci%C3%B3n%20ambiental%20y%20an%C3%A1lisis%20espacial%20apoyados%20en%20PR%20y%20SIG.pdf?CT=1734463350604&OR=ItemsView" target="_blank" role="button" download="CB_ProblematicayGestionAmb.pdf">Descargar programa</a>
                    </div>
                </div>                               
                
            </div>
        </div>
    </div>
@endsection
