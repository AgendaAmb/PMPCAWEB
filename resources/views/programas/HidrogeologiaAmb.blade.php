@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>HIDROGEOLOGÍA AMBIENTAL</strong></h1>
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
                                        <td>Electiva u optativa</td>
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
                                        <td>4</td>
                                        <td>0</td>
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
                <p>Al concluir esta asignatura, el estudiante comprenderá los principios básicos que rigen el movimiento del agua subterránea, sus propiedades  físicas, importancia dentro del ciclo hidrológico, controles de movimiento en tres dimensiones, establecerá zonas de recarga y descarga de aguas subterráneas definiendo y diferenciando sistemas de flujo intermedio, local o regional. Aplicará los conocimientos obtenidos sobre los métodos numéricos de las ecuaciones de flujo y transporte de solutos y su implementación en modelos matemáticos para el manejo del agua subterránea. Adicionalmente será capaz de reconocer la fenomenología de los procesos hidrogeológicos que afectan el medioambiente, establecer la importancia de los efectos de los desarrollos económicos sustentados en agua subterránea y marcar esquemas generales de funcionamiento y contaminación en la zona saturada
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
                                        <td id="contTabla"><strong>competencia (s) profesional (es) que contribuye a desarrollar la materia</strong></td>

                                        <td>El estudiante comprenderá los principios básicos que controlan el movimiento del agua subterránea, aplicándolo para la resolución de problemas relacionados con la evaluación de sistemas de flujo subterráneo y su relación con el ambiente. Adicionalmente, obtendrá la capacidad de proponer un modelo conceptual del funcionamiento de los sistemas de flujo subterráneo, eligiendo y aplicando las metodologías más apropiadas para proponer esquemas del manejo de la extracción de agua subterránea.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Competencia (s) transversal (es)a las que contribuye a desarrollar la materia</strong></td>

                                        <td>Capacidad de tomar decisiones profesionales, ciudadanas y personales con un amplio sentido de trascendencia social, orientadas a contribuir activamente en la identificación y solución de problemáticas de la sustentabilidad social, económica, política y ambiental, tales como la pobreza, la nequidad, la marginación, la violencia, la inseguridad, la contaminación y el deterioro de los recursos naturales, entre otras.
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
                                        <td>HIDROGEOLOGÍA FÍSICA</td>
                                        <td id="contTablaIzq"> Conocimiento de los principios básicos, ecuaciones fundamentales que describen el flujo de agua subterránea en medios saturados porosos y fracturados
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, discusión de temas, investigación en grupo.
                                                </li>
                                                <li>Controles de lectura de los capítulos señalados. Ejercicios para calcular la porosidad, y para diferenciar diferentes tipos de porosidad, elaboración de curvas granulométricas. Utilización del programa HYDROGEOSIEVEXL para el cálculo de conductividad hidráulica a partir de curvas granulométricas</li>
                                                <li>Ejercicios para el cálculo de: I) la carga hidráulica,II) conductividad hidráulica</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>TÉCNICAS DE INVESTIGACIÓN DE LOS SISTEMAS DE FLUJO DE AGUA SUBTERRÁNEA</td>
                                        <td id="contTablaIzq">El alumno conocerá las mejores técnicas de campo y gabinete para la generación, implementación e interpretación hidrogeológica.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, discusión de temas, investigación en grupo
                                                </li>
                                                <li>Ejercicios relacionados con cálculos asociados con las propiedades de los acuíferos
                                                </li>
                                                <li>Ejercicios relacionados con las ecuaciones de flujo de agua subterránea</li>
                                                <li>Ejercicios para el cálculo de abatimiento producido por bombeo en pozos, determinación de propiedades hidráulicas mediante métodos y analíticos, utilización de programas para la interpretación de pruebas de bombeo</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>DEFINICIÓN DE SISTEMAS DE FLUJO SUBTERRÁNEO</td>
                                        <td id="contTablaIzq">
                                        Definición del enfoque sistémico para la comprensión del funcionamiento del agua subterránea.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, discusión de temas, investigación en grupo</li>
                                                <li>Análisis de casos de estudio
                                                </li>
                                                <li>Análisis de casos de estudio, ejercicios utilizando el programa TOPODRIVE para la definición de patrones de flujo subterráneo, controles de lectura del artículo</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>MODELACIÓN MATEMÁTICA DE FLUJO Y TRANSPORTE DE SOLUTOS EN AGUAS SUBTERRÁNEAS</td>
                                        <td id="contTablaIzq">
                                        Entendimiento de la importancia que tiene el marco hidrogeológico en la traducción al lenguaje matemático de los modelos de aguas subterráneas. El alumno comprenderá las ecuaciones de flujo y transporte de solutos y la solución numérica por los métodos matemáticos empleados en la actualidad.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, discusión de temas, investigación en grupo
                                                </li>
                                                <li>
                                                Análisis de casos de estudio
                                                </li>
                                                <li>Ejercicios para el cálculo y solución de un sistema de ecuaciones de flujo subterráneo mediante el método de diferencias finitas</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>IMPLEMENTACIÓN DE MODELOS NUMÉRICOS DE FLUJO Y TRANSPORTE DE SOLUTOS</td>
                                        <td id="contTablaIzq">
                                        El alumno conocerá el procedimiento e información necesaria para la implementación de los modelos numéricos de flujo y transporte de solutos en aguas subterráneas.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                Exposición oral por parte del profesor, discusión de temas, investigación en grupo
                                                </li>
                                                <li>
                                                Ejercicios para la realización de balances hídricos con base en la NOM-011-CNA-2000
                                                </li>
                                                <li>Ejercicios de implementación de un modelo numérico de flujo de agua subterránea en los programas de cómputo Visual MODFLOW y FEFLOW</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>MANEJO DEL AGUA CON EL APOYO DE LA MODELACIÓN NUMÉRICA</td>
                                        <td id="contTablaIzq">
                                        El alumno conocerá y aplicará los conocimientos adquiridos a través de la modelación numérica de aguas subterráneas en el manejo y control del agua subterránea
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                Exposición oral por parte del profesor, discusión de temas, investigación en grupo
                                                </li>
                                                <li>
                                                Ejercicios de desarrollo de escenarios futuros con base en alternativas de gestión de agua subterránea en los modelos previamente implementados en los programas de cómputo Visual MODFLOW y FEFLOW
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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
                                        <td>Semana 8</td>
                                        <td>Examen teórico-práctico</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Semana 16</td>
                                        <td>Examen téorico-práctico</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Semana 5</td>
                                        <td>Trabajo de interpretación Unidad 2</td>
                                        <td>30%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Semana 9</td>
                                        <td>Trabajo de interpretación Unidad 3 y 4</td>
                                        <td>10%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Semana 13</td>
                                        <td>Trabajo de investigación Unidad 5</td>
                                        <td>10%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Semana 16</td>
                                        <td>Trabajo de investigación Unidad 6</td>
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
                <ol>
                    <li>ANDERSON, M.P. y WOESSNER W.W. (1992). Applied groundwater modeling: simulation of flow andadvective transport. Academic Press. First edition. 381 p.</li>
                    <li>BRANDENBURG, J.P. (2020) Geologic Frameworks for Groundwater Flow Models. Guelph, Ontario, Canada, 25 pages, ISBN: 978-1-7770541-9-9.</li>
                    <li>COHEN, A. J.B. AND CHERRY J. (2020). Conceptual and visual understanding of hydraulic head andgroundwater flow. Guelph, Ontario, Canada, 2020. 58 pages, ISBN: 978-1-7770541-6-8.</li>
                    <li>DIERSCH, H.J. (2014). FEFLOW: Finite element modeling of flow, mass and heat transport in porous andfractured media. Springer-Verlag Berlin Heidelberg. 996p.</li>
                    <li>DOMENICO, P.A, y SCHWARTZ, F.W. (1998). Physical and chemical hydrogeology. John Wiley & Sons, Inc. Second edition. 506p.</li>
                    <li>FETTER JR. CW.( 2014). Applied hydrogeology, Fourth edition, Pearson Education Limited, 610 pp.</li>
                    <li>FETTER, C.W. (2008). Contaminant hydrogeology. Waveland Press, Inc. Second edition. 500p.</li>
                    <li>FREEZE, R.A. y CHERRY, J.A. (1979). Groundwater. Prentice Hall Inc. Englewood Cliffs, N.J., 589p.</li>
                    <li>GILLI E., MANGAN C., MUDRU J., FANDEL C. 2012. Hydrogeology, objectives, methods, applications, CRC Press, Taylor & Francis Group, 363 pp.</li>
                    <li>HISCOCK, K. (2005). Hydrogeology: principles and practice. Blackwell Publishing, 389 pp.</li>
                    <li>KONIKOW, L.F., BREDEHOEFT, J.D. (2020). Groundwater Resource Development: Effects andSustainability, Guelph, Ontario, Canada, 96 pages.ISBN: 978-1-7770541-4-4</li>
                    <li>POETER, E., HSIEH, P. (2020). Graphical Construction of Groundwater Flow Nets, Guelph, Ontario, Canada, 2020. 67 p. ISBN: 978-1-7770541-3-7.</li>
                    <li>POETER, E., FAN, Y., CHERRY, J., WOOD, W., AND MACKAY, D. (2020). Groundwater in our water cycle – getting to know Earth’s most important fresh water source. Guelph, Ontario, Canada, 2020. 136 p., ISBN: 978-1-7770541-1-3.</li>
                    <li>RUSTHON, K.R. (2005). Groundwater hydrology, conceptual and computational models, Second edition, John Wiley and Sons Ltd, 414 p.</li>
                    <li>SANDERS, L.L. (1998). A Manual of field hydrogeology. Prentice Hall, Inc. 381 p.</li>
                    <li>SINGHAL, B.B.S. Y GUPTA, R.P. (1999). Applied hydrogeology of fractured rocks. Kluwer AcademicPublisher, 400 p.</li>
                    <li>WOESSNER, W., POETER, E.P. (2020). Hydrogeologic properties of earth materials and principles ofgroundwater flow. Guelph, Ontario, Canada, 207 p. ISBN: 978-1-7770541-2-0.</li>
                </ol>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li><a href="https://gw-project.org/?lang=es">https://gw-project.org/?lang=es</a></li>
                    <li><a href="http://www.conagua.gob.mx/CONAGUA07/Noticias/EAM2011.pdf">http://www.conagua.gob.mx/CONAGUA07/Noticias/EAM2011.pdf</a> (Estadísticas del agua en México).</li>
                    <li><a href="http://www.conagua.gob.mx/Contenido.aspx?n1=3&n2=62&n3=92">http://www.conagua.gob.mx/Contenido.aspx?n1=3&n2=62&n3=92</a> (Disponibilidad de agua subterránea).</li>
                    <li><a href="http://www.conagua.gob.mx/disponibilidad.aspx?n1=3&n2=62&n3=94">http://www.conagua.gob.mx/disponibilidad.aspx?n1=3&n2=62&n3=94</a> (Disponibilidad de agua por acuífero).</li>
                    <li><a href="http://water.usgs.gov/nrp/gwsoftware/tdpf/tdpf.html">http://water.usgs.gov/nrp/gwsoftware/tdpf/tdpf.html</a> (para descargar el programa TOPODRIVE)</li>
                    <li><a href="http://groundwater.cee.illinois.edu/">http://groundwater.cee.illinois.edu/</a></li>
                    <li><a href="https://erams.com/wqit/">https://erams.com/wqit/</a></li>
                    <li><a href="http://xml2.des.state.nh.us/DWITool/">http://xml2.des.state.nh.us/DWITool/</a></li>
                    <li><a href="http://ohiowatersheds.osu.edu/know-your-well-water/well-water-interpretation-tool">http://ohiowatersheds.osu.edu/know-your-well-water/well-water-interpretation-tool</a></li>
                    <li><a href="http://www.environment.psu.edu/water/dwit.asp">http://www.environment.psu.edu/water/dwit.asp</a></li>
                    <li><a href="http://extension.usu.edu/waterquality/htm/wqtool">http://extension.usu.edu/waterquality/htm/wqtool</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <br>• Sin restricciones
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    <br>• Maestría en Tecnología y Gestión del Agua.
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>Si</strong></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 15.</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1.</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Antonio Cardona Benavides, Hermann Rocha Escalante
                    <br>
                    <strong> • Revisó:</strong> Israel Razo Soto
                </p>
            </div>
        </div>
    </div>
@endsection
