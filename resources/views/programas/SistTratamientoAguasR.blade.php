@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>Sistemas de Tratamiento de aguas residuales</strong></h1>
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
                <p>Al término del curso el estudiante será capaz de distinguir diferencias y afinidades de los sistemas bilógicos y poder analizar su capacidad y aplicación con base en el tipo de aguas residuales por tratar
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
                                        <td id="contTabla">Dominio de su área o disciplina</td>

                                        <td>El alumno adquirirá una formación sólida en conocimientos para la selección, dimensionamiento, análisis y evaluación de los sistemas biológicos para el tratamiento de aguas residuales.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Desarrollo del pensamiento analítico </td>

                                        <td>Capacidad para identificar, formular y resolver problemas de contaminación de diferentes tipos de aguas residuales    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla">Capacidad Metodológica y de implementación
                                        </td>

                                        <td>Capacidad para desarrollar e implementar metodologías para el desarrollo tecnológico en el diseño de una plata de tratamiento aerobio o anaerobio.</td>
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
                                        <td>Aguas residuales</td>
                                        <td id="contTablaIzq"> Conocer los diferentes tipos de tratamientos que se le puede dar al agua en bases a sus características fisicoquímicas.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando artículos científicos y/o lecturas específicas y realizando tareas e investigaciones, que se discuten en clase impulsando la participación de los alumnos y del profesor.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Procesos Físicos</td>
                                        <td id="contTablaIzq">Conocer los diferentes tipos de equipos (dimensiones) que constituyen la parte física de una planta de tratamiento aguas residuales
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>Exposición oral por parte del profesor, con apoyo de recursos visuales y audiovisuales. El alumno construye su conocimiento analizando artículos científicos y/o lecturas específicas y realizando tareas e investigaciones, que se discuten en clase impulsando la participación de los alumnos y del profesor.
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Procesos Biológicos</td>
                                        <td id="contTablaIzq">El alumno será capaz de identificar los diversos tipos y clasificaciones de sistemas biológicos, para el tratamiento de aguas residuales
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Presentación de algunos temas por los alumnos, planteamiento de preguntas y conducción de su discusión en clase.</li>
                                                <li>Lecturas en Ingles de artículos relacionados con el tema y discusión de ellos, Tareas de ejercicios prácticos.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Alimentación y metabolismo</td>
                                        <td id="contTablaIzq">Conocer los diversos tipos de microorganismos y su clasificación en base a su metabolismo y requerimiento nutricional
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición de temas, análisis de conceptos teóricos , planteamiento de preguntas y conducción de su discusión en clase.</li>
                                                <li>Lecturas, tareas y discusión de conceptos
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Cinética y Reactores</td>
                                        <td id="contTablaIzq">Comprender las expresiones cinéticas que puedes ser empleadas en sistemas biológicos, para los diversos sistemas de reactores
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Presentación de los temas, planteamiento de preguntas y conducción de su discusión en clase.</li>
                                                <li>Lecturas en Ingles de artículos relacionados con el tema y discusión de ellos, Tareas de ejercicios prácticos.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Tratamiento de lodos activados</td>
                                        <td id="contTablaIzq">Definir y aplicar el mejor criterio de diseño y operación de una planta aerobia, anaerobia o mixta para el tratamiento de aguas residuales.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Presentación de los temas, planteamiento de preguntas y conducción de su discusión en clase. Desarrollo de ejercicio de diseño de una planta de tratamiento aerobio y anaerobios</li>
                                                <li>Lecturas y discusión de conceptos. Tarea individual y en grupo.
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
                                        <td>Al término de la Unidad 1 y 2</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen parcial por escrito en clase.</li>
                                                <li>Tareas</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al término de la Unidad 3, 4</td>
                                        <td>                    
                                            <ul class="vineta">
                                                <li>Examen parcial por escrito en clase.</li>
                                                <li>Tareas</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al término de la Unidad 5</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen parcial por escrito en clase.</li>
                                                <li>Tareas</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al término de la Unidad 6 </td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen parcial por escrito en clase.</li>
                                                <li>Tareas</li>
                                                <li>Trabajo de investigación y exposición frente al grupo
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
                    <li>Rittman and Perry. Environmental Biotechnology: Principles and Applications, Mc Graw Hill 2001.</li>
                    <li>Metcalf & Eddy, Wastewater Engineering, McGraw-Hill, N.Y., 1979.</li>
                    <li>Curds C.R. y H.A. Hawhes, Ecological aspects of used water treatment, 3 tomos, ed. Academic Press, Londres 1983.</li>
                    <li>Sdegel, Hangs G., Microbiología general, De. onuja, Barcelona 1988.</li>
                    <li>Contaminación de aguas continentales, ed. Pipesson, madrid 1979.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Textos complementarios</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>E. C. Valdez, A. B . Vázquez Gonzales. Ingeniería de los sistemas de tratamiento y disposición de aguas residuales .Fundación ICA, 2003.</li>
                    <li>R. S. Ramalho. Tratamiento de aguas residuales. Laval University. Quebec, Canadá. Ed. Reverte, S.A. Barcelona.</li>
                    <li>Benefield Larry D., Randall Clifford W., Biological Process Design for Wastewater Treatment, Prentice-Hill, Inc. N.J., USA, 1980.</li>
                    <li>Eckenfelder, Water Quality Engineering for Practicing Engineers, Barnes & Noble, N.Y., 1970.</li>
                    <li>Gaudy Anthony F. Jr., Gaudy Elizabeth T., Microbiology for Environmental Scientist and Engineers, McGraw-Hill international Book Company, 1981.</li>
                    <li>Lester, J.N. and Birkett, J.W., Microbilogy and chemistry for environmental scientists and engineers. Segunda edición. E & FN Spon, Londres 1999.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Bibliotecas digitales de la UASLP con acceso a bases de datos científicas.</li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <br>• Es un tópico selecto del plan de estudios de maestría y doctorado en ciencias ambientales.
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    <br>• Programa Multidisciplinario de Posgrado en Ciencias Ambientales.
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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 20</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. Nahum A. Medellín Castillo
                    <br>
                    <strong> • Revisó:</strong>
                    <br>
                    <strong> • Fecha última de Revisión Curricular</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
