@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>MICROBIOLOGÍA AMBIENTAL APLICADA</strong></h1>
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
                                        <td>2</td>
                                        <td>2</td>
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
                <p>Analizar y entender la participación de los microorganismos en la conservación de la salud ambiental y sus procesos biológicos, la complejidad en las relaciones tróficas y parasíticas; para así, contar con elementos suficientes en la búsqueda de aplicaciones biotecnológicas. Adicionalmente, el alumno contará con elementos técnicos-prácticos que le permitirán el estudio y caracterización de microorganismos procariontes y eucariontes; además, de su identificación, cuantificación y conservación.
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
                                        <td id="contTabla"><strong>Profesional</strong></td>

                                        <td>Integra el conocimiento del mundo microbiano, fomentando las actividades de búsqueda y sistematización de información y su relación con otras disciplinas; además, del uso de las tecnologías informáticas.</td>
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
                                        <td>Biología y Diversidad Microbiana</td>
                                        <td id="contTablaIzq"> Conocer las principales características de los microorganismos procariontes y eucariontes, respecto a sus formas, estructuras y funciones celulares; además, de los requerimientos físicos y químicos para su crecimiento, dichos conocimientos son indispensables para su estudio, aislamiento e identificación.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>
                                                Se le asignarán al alumno documentos técnicos y/o científicos de acuerdo con el tema que se analice y se fomentará la búsqueda de documentos complementarios.</li>
                                                <li>Se trabajara de manera alternada la técnica expositiva con técnicas de aprendizaje colaborativo, además de actividades de lectura, comprensión y síntesis de documentos técnicos y científicos</li>
                                                <li>Búsqueda, recopilación, análisis y sistematización de información a través de buscadores y bases de datos. Práctica de Laboratorio: Uso de Microscopio y observación de estructuras celulares.</li>
                                                <li>Búsqueda, recopilación, análisis y sistematización de información a través de buscadores y bases de datos. Práctica de Laboratorio: Técnicas de aislamiento e identificación de microrganismos. Práctica de Laboratorio: Identificación taxonómica de microrganismos.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Ecología y Dinámica de Comunidades Microbianas</td>
                                        <td id="contTablaIzq">Entender los principios fundamentales que caracterizan a las comunidades microbianas y su interacción con el ambiente y otros organismos.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Se trabajara de manera alternada la técnica expositiva con técnicas de aprendizaje colaborativo, además de actividades de lectura, comprensión y síntesis de documentos técnicos y científicos.</li>
                                                <li>Búsqueda, recopilación, análisis y sistematización de información a través de buscadores y bases de datos. Práctica de Laboratorio: Análisis microbiológico en un ecosistema alterado
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Microbiología aplicada al Medio Ambiente</td>
                                        <td id="contTablaIzq">
                                            Contar con elementos suficientes para la búsqueda e implementación de aplicaciones biotecnológicas en el ambiente.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Se le asignarán al alumno documentos técnicos y/o científicos de acuerdo con el tema que se analice y se fomentará la búsqueda de documentos complementarios.
                                                </li>
                                                <li>El alumno presentara al grupo los resultados de su Mini-proyecto desarrollado durante el curso</li>
                                                <li>El alumno realizará la búsqueda de documentos técnicos y/o científicos de acuerdo con el tema seleccionado y se apoyará con documentos complementarios</li>
                                                <li>El alumno presentara al grupo los resultados de su investigación de un tema seleccionado al inicio del curso
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
                                        <td>4a semana 
                                        <br>
                                        <br>(Programado)</td>
                                        <td>El contenido de 16 sesiones de una hora
                                            <ul class="vineta">
                                                <li>50 % examen teórico escrito u oral</li>
                                                <li>50% tareas, proyectos, practica y/o participación
                                                </li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>8a semana 
                                        <br>
                                        <br>(Programado)</td>
                                        <td>El contenido de 16 sesiones de una hora
                                            <ul class="vineta">
                                                <li>50 % examen teórico escrito u oral</li>
                                                <li>50% tareas, proyectos, practica y/o participación</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>12a semana 
                                        <br>
                                        <br>(Programado)</td>
                                        <td>El contenido de 16 sesiones de una hora
                                            <ul class="vineta">
                                                <li>50 % examen teórico escrito u oral</li>
                                                <li>50% tareas, proyectos, practica y/o participación</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>16a semana 
                                        <br>
                                        <br>(Programado)</td>
                                        <td>El contenido de 16 sesiones de una hora
                                            <ul class="vineta">
                                                <li>50 % examen teórico escrito u oral</li>
                                                <li>50% tareas, proyectos, practica y/o participación</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
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
                    <li>Brock, T. D., & Madigan, M. T. (2019). <i>Microbiología</i>. Prentice-Hall Hispanoamericana</li>
                    <li>Wang, L.K., Tay, J-H, Lee Tay, S.T., Hung, Y-T. 2010. Environmental Bioengineering. Humana Press. 884 p.</li>
                    <li>Singh, S.N., Tripathi, R.D. 2007. Environmental Bioremediation Technologies. Edit. Springer. 528 p.</li>
                    <li>Atlas, R.M. Bartha R. 2020. Ecología Microbiana y ambiental. 4a Ed. Prentice Hall. México.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Academic Search Complete (EBSCO)</li>
                    <li>Ovid (Wolters Kluwer) <a href="http://www.ovid.com">(http://www.ovid.com)</a></li>
                    <li>Web of Science (Thomson Reuters)</li>
                    <li>Science Direct (Elsevier) <a href="http://www.sciencedirect.com/">(http://www.sciencedirect.com/)</a></li>
                    <li>SpringerLink (Springer) <a href="http://link.springer.com/">(http://link.springer.com/)</a></li>
                    <li>Wiley on line library <a href="http://onlinelibrary.wiley.com/">(http://onlinelibrary.wiley.com/)</a></li>
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
                    <br>• NO
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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dra. Elsa Cervantes González, Dr. Moisés Roberto Vallejo Pérez
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
