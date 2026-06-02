@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>INGENIERÍA AMBIENTAL</strong></h1>
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
                                        <td>1 y 2</td>
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
                <p>Al término del curso, el estudiante comprenderá de:
                    <ul>
                        <li>Entender los conceptos de ambiente, contaminación; impacto, riesgo, auditoría, normativa y gestión ambiental.</li>
                        <li>Reconocer los principales instrumentos de gestión ambiental, mediante los cuales se favorece el cumplimiento de la normativa ambiental de toda actividad.</li>
                        <li>Identificar y evaluar los problemas ambientales en instituciones varias, y optar por los métodos de minimización, prevención y control de la contaminación, y/o la valorización de los residuos, que les permitan cumplir con la normativa ambiental vigente, y disminuir o eliminar su impacto ambiental.</li>
                    </ul>
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
                                        <td id="contTabla">Caracterizar el origen de los problemas ambientales de una institución y proponer soluciones.</td>
                                        <td>El egresado será capaz de identificar y evaluar la problemática ambiental de una institución y proponer métodos varios de minimización, prevención y control de la contaminación, y/o la valorización de los residuos.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Conocer la normativa y los instrumentos de gestión aplicables a las actividades de una institución. </td>
                                        <td>El egresado será capaz de reconocer los principales instrumentos de gestión ambiental, mediante los cuales se favorece el cumplimiento de la normativa ambiental aplicable a una institución.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Comunicar eficazmente la problemática ambiental de una institución y sus posibles soluciones.</td>
                                        <td>El egresado será capaz de comunicar eficazmente: a) los problemas contaminación y gestión ambiental de una institución; y b) los métodos de prevención y control aplicables para su solución.
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
                                        <td>Principios generales de Ingeniería Ambiental</td>
                                        <td id="contTablaIzq"> Que el alumno conozca los principios básicos de la ingeniería ambiental.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación de los alumnos y del profesor.
                                                </li>
                                                <li>La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases; 2) El análisis y la discusión de textos varios y de videos con material de interés.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Impacto Ambiental</td>
                                        <td id="contTablaIzq">Que el alumno comprenda las bases para la realización de una evaluación de impacto ambiental y pueda participar en la realización y/o revisión de ésta importante herramienta de gestión ambiental.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación de los alumnos y del profesor.
                                                </li>
                                                <li>La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases; 2) El análisis y la discusión de textos varios y de videos con material de interés.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Normatividad Ambiental y Auditorías Ambientales</td>
                                        <td id="contTablaIzq">
                                        Que el alumno conozca los órdenes de competencia en materia ambiental en México, y sepa cuáles son las principales leyes ambientales federales, estatales y municipales en este tema. Que el alumno advierta la existencia de otras normas internacionales en materia de calidad y calidad ambiental. Que el alumno reconozca las ventajas del sistema de auditorías ambientales como un instrumento de gestión ambiental.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación de los alumnos y del profesor.
                                                </li>
                                                <li>La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases; 2) El análisis y la discusión de textos varios y de videos con material de interés.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Control de la contaminación del agua.</td>
                                        <td id="contTablaIzq">
                                        Que el alumno conozca las diferentes formas de prevención y control de la contaminación del agua, y que identifique y comprenda los métodos de tratamiento físicos, químicos y biológicos de las aguas residuales.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación de los alumnos y del profesor.
                                                </li>
                                                <li>La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases; 2) El análisis y la discusión de textos varios y de videos con material de interés.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Control de la contaminación del aire</td>
                                        <td id="contTablaIzq">
                                        Que el alumno conozca las diferentes formas de prevención y control de la contaminación del aire, y que identifique y comprenda los métodos de tratamiento de limpieza de gases y de partículas de las emisiones contaminantes.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación de los alumnos y del profesor.
                                                </li>
                                                <li>La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases; 2) El análisis y la discusión de textos varios y de videos con material de interés.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td> Control de la contaminación producida por residuos sólidos</td>
                                        <td id="contTablaIzq">
                                        reducción en la generación de los residuos urbanos, de manejo especial y peligrosos; su reciclaje y su manejo adecuado. Que el alumno comprenda los métodos de tratamiento físicos, químicos y biológicos para el tratamiento de residuos peligrosos.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación de los alumnos y del profesor.
                                                </li>
                                                <li>
                                                La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases; 2) El análisis y la discusión de textos varios y de videos con material de interés.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td> Control para contaminaciones especiales</td>
                                        <td id="contTablaIzq">
                                        Que el alumno conozca las diferentes formas de prevención y control de la contaminación por ruido y por radiactividad.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>
                                                Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando lecturas y videos, y realizando tareas e investigaciones, que se reflexionan en las clases, propiciando la participación de los alumnos y del profesor.
                                                </li>
                                                <li>
                                                La estrategia de enseñanza aprendizaje se basa en: 1) las actividades que el profesor y los alumnos realizan en clases; 2) El análisis y la discusión de textos varios y de videos con material de interés.
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
                                        <td>Al término de la Unidad 2</td>
                                        <td><b>Primer examen parcial.</b> <br>Examen escrito (50%-60%). Tareas, participación en clase (30%-40%). Participación y reporte de práctica (10%). Abarca unidades 1 y 2.</td>
                                        <td>33.33%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Semana 16</td>
                                        <td><b>Segundo examen parcial.</b> <br>Examen escrito 50%-60%). Tareas, participación en clase 30%-40%). Participación y reporte de práctica (10%). Abarca unidades 3 y 4.</td>
                                        <td>33.33%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al término de la Unidad 7</td>
                                        <td><b>Tercer examen parcial o trabajo final oral y escrito</b> <br>Examen escrito (30%-50%). Tareas, participación en clase (10%-30%). Presentación de Proyecto (30%-50%). Abarca unidades 5, 6 y 7.</td>
                                        <td>33.33%</td>
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
                    <li><i><b>Belda Heriz- Ignacio</b> (2018) Economía Circular. Un nuevo modelo de producción y consumo sostenible. Edit. Tébar Flores.</i></li>
                    <li><i><b>Comisión Europea, 1999.</b> Guidelines for the Assessment of Indirect and Cumulative Impacts, as Well as Impact Interactions, Comisión de las Comunidades Europeas, Bruselas.<a href="https://ec.europa.eu/environment/archives/eia/eia-studies-and-reports/pdf/guidel.pdf">https://ec.europa.eu/environment/archives/eia/eia-studies-and-reports/pdf/guidel.pdf</a></i></li>
                    <li><i><b>Conesa Fernández C. y Vítora (1997).</b> Guía metodológica para la Evaluación del Impacto Ambiental. Ediciones Mundiprensa.</i></li>
                    <li><i><b>DOF, 18/01/2021.</b> Ley General del Equilibrio Ecológico y la Protección al Ambiente.</i></li>
                    <li><i><b>DOF, 31/10/2014.</b> Reglamento de la Ley General del Equilibrio Ecológico y la Protección al Ambiente en materia de Impacto Ambiental.</i></li>
                    <li><i><b>DOF,</b> Ley General para la Prevención y Gestión Integral de los Residuos (LGPGIR). 18/01/2021.</i></li>
                    <li><i><b>DOF,</b> Reglamento de la Ley General para la Prevención y Gestión Integral de los Residuos (R-LGPGIR). 31/10/2014.</i></li>
                    <li><i><b>Garmendia, A. 2005,</b> Evaluación de impacto ambiental, Pearson Educación</i></li>
                    <li><i><b>Roberts A., E. & Associates Inc.</b> Manual de control de la calidad del aire. McGraw – Hill. (2000).</i></li>
                    <li><i>Sans F., Ramón; Ribas, Joan de P., Ingeniería Ambiental: Contaminación y Tratamientos, Maracombo Boixarew Editores. España. (1989).</i></li>
                    <li><i><b>Seoánez C., Mariano,</b> Ingeniería Medioambiental Aplicada, Ediciones Mundi-Prensa. (1997).</i></li>
                    <li><i><b>Wathern Peter. 2013.</b> Environmental Impact Assessment. Theory and Practice. Edit. Routledge.</i></li>
                </ol>
            </div>

            <hr>
                <h5> <strong>Textos complementarios</strong></h5>
                <div class="margen">
                <ol type="1">
                    <li><i><b>DOF, 28/03/1990.</b> Primer listado de actividades altamente riesgosas.</i></li>
                    <li><i><b>DOF, 04/05/1992.</b> Segundo listado de actividades altamente riesgosas.</i></li>
                    <li><i><b>Gómez Orea, D. 2003.</b> Evaluación de Impacto Ambiental. Ediciones Mundiprensa</i></li>
                    <li><i><b>INE. 2000</b> La Evaluación del Impacto Ambiental Logros y Retos para el Desarrollo Sustentable. México DF.</i></li>
                    <li><i><b>PO, 10/10/2017.</b> Ley Ambiental del Estado de San Luis Potosí.</i></li>
                    <li><i><b>PO, 07/07/2005.</b> Reglamento de la Ley Ambiental del Estado en Materia de Evaluación de Impacto Ambiental y Riesgo.</i></li>
                    <li><i><b>SEGAM.</b> Guía para la elaboración del Informe Preventivo http://www.segam.gob.mx/descargas/G01.pdf</i></li>
                    <li><i><b>SEGAM.</b> Guía para la elaboración de un Estudio de Riesgo. Modalidad Informe Preliminar. <a href="https://slp.gob.mx/segam/Documentos%20compartidos/GU%C3%8DAS/G03.pdf">https://slp.gob.mx/segam/Documentos%20compartidos/GU%C3%8DAS/G03.pdf</a></i></li>
                </ol>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li><i>Procuraduría Federal de Protección Ambiental <a href="(www.profepa.gob.mx)">(www.profepa.gob.mx)</a></i></li>
                    <li><i>Secretaría de Ecología y Gestión Ambiental del Estado de San Luis Potosí <a href="(www.segam.gob.mx)">(www.segam.gob.mx).</a></i></li>
                    <li><i>Secretaría de Medio Ambiente y Recursos Naturales <a href="(www.semarnat.gob.mx)">(www.semarnat.gob.mx).</a></i></li>
                    <li><i><a href="http://consultaspublicas.semarnat.gob.mx/proyectopublico/historicoconsulta">http://consultaspublicas.semarnat.gob.mx/proyectopublico/historicoconsulta</a></i></li>
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
                <p> <strong> • Elaboró: </strong>Dr. Alfredo Avila Galarza
                    <br>
                    <strong> • Revisó:</strong> 
                </p>
            </div>
        </div>
    </div>
@endsection
