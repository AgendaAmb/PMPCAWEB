@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>GESTIÓN DE RESIDUOS Y ECONOMÍA CIRCULAR</strong></h1>
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
                                        <td>Obligatorio</td>
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
                                        <td>1 y 2</td>
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
                <p>Al finalizar el curso, el estudiante será capaz de proponer métodos adecuados de prevención de la generación de residuos sólidos, de valorización, de manejo y de tratamiento de éstos, e identificará opciones de ecodiseño para avanzar hacia un modelo de economía circular.
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
                                        <td id="contTabla">Caracterizar los problemas relacionados con el manejode los residuos y proponer soluciones de gestión sostenibles.</td>

                                        <td>El egresado será capaz de: 1) reconocer los problemas ambientales principales, relacionados con manejo inadecuado de los residuos; 2) utilizar metodologías para prevenir la generación y darles un manejo adecuado a los residuos, y 3) proponer planes y programas de manejo de residuos, procurando considerar elementos de la economía circular.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Proponer y evaluar proyectos para mejorar el manejo de los residuos. </td>

                                        <td>El egresado podrá participar de manera efectiva en la elaboración y/o revisión de Planes y Programas de Manejo de Residuos sólidos urbanos, de manejo especial y peligrosos.    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla">En un ambiente multidisciplinario, comunicar eficazmente: la problemática ambiental del manejo de los residuos y la propuesta de soluciones efectivas.
                                        </td>

                                        <td>El egresado será capaz de comunicar eficazmente los problemas ambientales, relacionados con el manejo inadecuado de los residuos, y proponer soluciones en forma individual y en equipo, reconociendo su necesidad de formación continua.</td>
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
                                        <td>Tipos de residuos y problemas ambientales.</td>
                                        <td id="contTablaIzq"> Identificar los tipos de residuos sólidos y los problemas ambientales que éstos generan.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>
                                                    Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación activa de los alumnos y del profesor.
                                                </li>
                                                <li>La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases, 2) El análisis y la discusión de textos varios y de videos con material de interés.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Normatividad ambiental.</td>
                                        <td id="contTablaIzq">Identificar la normativa ambiental aplicable al manejo de los residuos, y familiarizar a los alumnos con los principales instrumentos de gestión ambiental, que aplican al manejo de los residuos y mediante los cuales se favorece el cumplimiento de la normativa
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>
                                                        Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación activa de los alumnos y del profesor.
                                                    </li>
                                                    <li>
                                                        La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases, 2) El análisis y la discusión de textos varios y de videos con material de interés. 3) Visita a un sitio de disposición final de residuos.
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Manejo de residuos sólidos (RSU).</td>
                                        <td id="contTablaIzq">
                                            Que el alumno identifique los elementos para elaborar Programas y Planes de Manejo de Residuos Sólidos Urbanos, que privilegien la minimización y la valorización de éstos, y que aseguren una disposición final adecuada.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                    Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación activa de los alumnos y del profesor.
                                                </li>
                                                <li>
                                                    La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases, 2) El análisis y la discusión de textos varios y de videos con material de interés. 3) Visita a un sitio de disposición final de residuos.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Manejo de residuos de manejo especial.</td>
                                        <td id="contTablaIzq">
                                            Que el alumno identifique los elementos para elaborar Programas y Planes de Manejo de Residuos de Manejo Especial, que privilegien la minimización y la valorización de éstos, y que aseguren una disposición final adecuada.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                    Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación activa de los alumnos y del profesor.
                                                </li>
                                                <li>
                                                    La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases, 2) El análisis y la discusión de textos varios y de videos con material de interés. 3) Visita a un sitio de disposición final de residuos.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Manejo de residuos peligrosos.</td>
                                        <td id="contTablaIzq">
                                            Que el alumno identifique los elementos para elaborar Programas y Planes de Manejo de Residuos Peligrosos, que privilegien la minimización y la valorización de éstos y que aseguren una disposición final adecuada.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                    Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación activa de los alumnos y del profesor.
                                                </li>
                                                <li>
                                                    La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases, 2) El análisis y la discusión de textos varios y de videos con material de interés.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Residuos Peligrosos Biológico Infecciosos</td>
                                        <td id="contTablaIzq">
                                            Que el alumno identifique los elementos para elaborar un Plan de Manejo de Residuos Peligrosos Biológico-Infecciosos que privilegie la minimización y la valorización de éstos y que asegure una disposición final adecuada.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                    Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación activa de los alumnos y del profesor.
                                                </li>
                                                <li>
                                                    La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases, 2) El análisis y la discusión de textos varios y de videos con material de interés.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Principios de Economía Circular</td>
                                        <td id="contTablaIzq">
                                            Que el alumno advierta las características y los beneficios ambientales del modelo económico de producción y consumo de la Economía circular.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                    Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación activa de los alumnos y del profesor.
                                                </li>
                                                <li>
                                                    La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases, 2) El análisis y la discusión de textos varios y de videos con material de interés.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>ACTIVIDAD PRÁCTICA 1</strong></td>
                                <td>
                                    <ul class="vineta">
                                        <li>Se realizará la visita a al menos un sitio de disposición final de residuos, o a una empresa que maneje, reciclaje o valorice residuos.       (4h-6h).</li>
                                        <li>Se identificará su operación y la problemática ambiental de ésta, así como el cumplimiento de los aspectos legales que la normativa ambiental señala para este tipo de sitios.</li>
                                        <li>El estudiante elaborará un reporte de la actividad.</li>
                                    </ul>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>ACTIVIDAD PRÁCTICA 2</strong> </td>

                                <td>
                                    <ul class="vineta">
                                        <li>Se realizará la visita a al menos una empresa para apreciar el manejo de los residuos  (4h – 6h).</li>
                                        <li>Se identificará su operación y la problemática ambiental de ésta, así como el cumplimiento de los aspectos legales que la normativa ambiental aplicable</li> 
                                        <li>El estudiante elaborará un reporte de la actividad.</li>
                                    </ul>   
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
                                        <td>Al término de la Unidad 2</td>
                                        <td><strong>Primer examen parcial.</strong><br>Examen escrito (50%-60%). Tareas, participación en clase (30%-40%). Participación y, en su caso, reporte de práctica (10%). Abarca unidades 1 y 2.</td>
                                        <td>25.00%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al término de la Unidad 3</td>
                                        <td><strong>Segundo examen parcial.</strong><br>Examen escrito 50%-60%). Tareas, participación en clase (30%-40%). Participación y, en su caso, reporte de práctica (10%). Abarca unidad 3. </td>
                                        <td>25.00%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>A la mitad de la Unidad 5</td>
                                        <td><strong>Tercer examen parcial</strong><br> Examen escrito (30%-50%). Tareas, participación en clase (30%-40%). Participación y, en su caso, reporte de práctica (10%). Abarca unidades 4 y 5.</td>
                                        <td>25.00%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al término de la Unidad 7 </td>
                                        <td><strong>Cuarto examen parcial o Investigación o Proyecto</strong><br> Examen escrito (30%-50%). Tareas, participación en clase (10%-30%). Participación y, en su caso, reporte de práctica o Presentación de Proyecto (30%-50%). Abarca unidades 5 a 7</td>
                                        <td>25.00%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
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
                <ol type="1">
                    <li>Belda Heriz- Ignacio (2018) Economía Circular. Un nuevo modelo de producción y consumo sostenible. Edit. Tébar Flores.</li>
                    <li><i>DOF, Ley General para la Prevención y Gestión Integral de los Residuos (LGPGIR). 18/01/2021.</i></li>
                    <li><i>DOF, Reglamento de la Ley General para la Prevención y Gestión Integral de los Residuos (R-LGPGIR). 31/10/2014.</i></li>
                    <li>Galván-Meraz (2010), Prontuario sobre Legislación de Residuos en México.</li>
                    <li>George Tchobanoglous, Hilary Theisen, Samuel A.Vigil, “Gestión Integral de Residuos Sólidos”, McGraw Hill, Vol. 1, 1998.</li>
                    <li>LaGrega, Michael; L. Buckingham, Phillip;, Jeffrey C. Evans, “Gestión de Residuos Tóxicos Tratamiento, Eliminación, y Recuperación de Suelos”, McGraw Hill, Vol. 1, 1998.</li>
                    <li>SEDESOL (2006). Manual técnico sobre generación, recolección y transferencia de residuos sólidos municipales.</li>
                    <li>SEMARNAT (2006). Guía para la Elaboración de los programas municipales para la Prevención y Gestión integral de los Residuos Sólidos Urbanos, Primera edición: Enero de 2006 © Secretaría de Medio Ambiente y Recursos Naturales, 2006 © Deutsche Gesellschaft für Technische Zusammenarbeit (GTZ) GmbH, 2006.</li>
                    <li>SEMARNAT (2012). Programa para la Minimización y Manejo Integral de Residuos Industriales Peligrosos en México.</li>
                    <li>SEMARNAT (2020). Diagnóstico básico para la gestión integral de los residuos.</li>
                    <li>SEMARNAT-INEGI. (2018). Informe de la situación del Medio Ambiente en México. Compendio de Estadísticas Ambientales, Indicadores Clave de Desempeño Ambiental, y Crecimiento Verde. Capítulo 7. Residuos. Pp.450-487.</li>
                </ol>
            </div>

            <hr>
                <h5> <strong>Textos complementarios</strong></h5>
                <div class="margen">
                <ol type="1">
                    <li><i>Cortinas de Nava, Cristina; Cintia Mosler García, “Gestión de Residuos Peligrosos”, Programa Universitario de Medio Ambiente, 2002.</i></li>
                    <li><i>Fernández Bremauntz Adrián y Osnaya Patricia (2004). Cambio Climático: una visión desde México. México D.F., Instituto Nacional de Ecología-Secretaría de Medio Ambiente y Recursos Naturales. México.</i></li>
                    <li>INECC (2011). Guía para la Formulación de un Plan de Manejo de Residuos Electrónicos.</li>
                    <li><i>NOM-052-SEMARNAT-2005. Que establece las características, el procedimiento de identificación, clasificación y los listados de los residuos peligrosos.</i></li>
                    <li>NOM-053-SEMARNAT-1993. Prueba de toxicidad…</li>
                    <li>NOM-054-SEMARNAT-1993. Incompatibilidad entre dos o más residuos.</li>
                    <li>NOM-055-SEMARNAT-2003. Confinamientos</li>
                    <li>NOM-056-SEMARNAT-1993. Obras complementarias de un confinamiento controlado.</li>
                    <li>NOM-057-SEMARNAT-1993. Diseño, construcción y operación de celdas de un confinamiento.</li>
                    <li>NOM-058-SEMARNAT-1993. Operación de un confinamiento.</li>
                    <li>NOM 083 Semarnat 2003. Rellenos sanitarios.</li>
                    <li> NOM 098 Semarnat 2002. Para la incineración de residuos.</li>
                    <li>NOM 133 Semarnat 2000. Manejo de bifenilos policlorados.</li>
                    <li><i>NOM-161-Semarnat-2011. Que establece los criterios para clasificar los residuos de manejo especial y determinar cuáles están sujetos a Plan de Manejo; el listado de los mismos, el procedimiento para la inclusión o exclusión a dicho listado; así como los elementos y procedimientos par a la formulación de los planes de manejo.</i></li>
                    <li>NMX-AA-015-1985 Protección al Ambiente - Contaminación del Suelo - Residuos Sólidos Municipales - Muestreo – Método de Cuarteo</li>
                    <li> NMX-AA-19-1985. Protección al Ambiente -Contaminación del Suelo – Residuos Sólidos Municipales - Peso Volumétrico "In Situ".</li>
                    <li>NMX-AA-22-1985. Protección al Ambiente - Contaminación del Suelo - Residuos Sólidos Municipales - Selección y Cuantificación de Subproductos.</li>
                    <li><i>PO, Reglamento de la Ley Ambiental del Estado de San Luis Potosí en materia de Residuos Industriales no Peligrosos.</i></li>
                    <li>SEMARNAT (2012). Diagnóstico básico para la gestión integral de los residuos.</li>
                    <li>SEMARNAT-INEGI. (2012). Informe de la situación del Medio Ambiente en México. Compendio de Estadísticas Ambientales, Indicadores Clave y de Desempeño Ambiental. Capítulo 7. Residuos.</li>
                </ol>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li><i><a href="https://www.gob.mx/semarnat/acciones-y-programas/normatividad-aplicable-al-tema-de-residuos">https://www.gob.mx/semarnat/acciones-y-programas/normatividad-aplicable-al-tema-de-residuos</a></i></li>
                    <li><i><a href="https://apps1.semarnat.gob.mx:8443/dgeia/gob-mx/publicaciones.html">https://apps1.semarnat.gob.mx:8443/dgeia/gob-mx/publicaciones.html</a></i></li>
                    <li><i><a href="https://www.gob.mx/salud">https://www.gob.mx/salud</a></i></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario haber aprobado al menos una materia en temas ambientales como: Ecología, Problemática y Gestión Ambiental, o afín.
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
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                </ul>
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
                <p> <strong> • Elaboró: </strong> Dr. Alfredo Avila Galarza
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
