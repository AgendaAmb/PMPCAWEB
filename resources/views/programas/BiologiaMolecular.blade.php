@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>BIOLOGÍA MOLECULAR APLICADA A LAS CIENCIAS AMBIENTALES</strong></h1>
                </div>
                <div class="col-12 col-sm-12 container">
                    <div><br><br>
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
                                        <td>3</td>
                                        <td>1</td>
                                        <td>2</td>
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
                <p>Conocer las técnicas de biología molecular y su contribución al conocimiento del ambiente apoyado del uso de bancos de datos y herramientas bioinformáticas.</p>
                    <p></p>
                <hr>
                <p></p>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Competencia profesionales a las que contribuye la asignatura</strong></h4>
                        <p>Esta asignatura contribuye de manera directa al logro de las siguientes competencias profesionales del perfil de egreso
                            del programa:</p>
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
                                        <td id="contTabla"> <strong>Profesional</strong></td>

                                        <td>Fortalecer el conocimiento de la biología molecular al mismo tiempo fomentar las actividades de búsqueda y sistematización de información a través de las tecnologías informáticas. Reconocer las técnicas de biología molecular para la realización de estudios científicos aplicados a las ciencias ambientales.</td>
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
                                        <td>Introducción</td>
                                        <td id="contTablaIzq">
                                            Conocer las unidades funcionales de la genética.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                    Lecturas complementarias de libros especializados y artículos científicos para reforzar e integrar los conceptos dados por el profesor.
                                                </li>
                                                <li>
                                                    Clases presenciales por parte del profesor con apoyo de material visual y/o audivisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo.
                                                </li>
                                                <li>
                                                    Revisión y recopilación de información a través de buscadores y bases de datos de temas relacionados.
                                                </li>
                                                <li>
                                                    Revisión de artículos y reportes científicos.
                                                </li>
                                            </ul>
                                        </td>

                                    <tr>
                                        <td>2</td>
                                        <td>Organización del material genético</td>
                                        <td id="contTablaIzq">
                                            Conocer el material genético y su organización funcional.
                                        </td>
                                            <td id="contTablaIzq">

                                                <ul>
                                                    <li>
                                                        Se trabajará de manera alternada la técnica expositiva con técnicas de aprendizaje colaborativo, además de actividades de lectura, comprensión y síntesis de documentos técnicos y científicos.
                                                    </li>
                                                    <li>
                                                        Búsqueda, recopilación, análisis y sistematización de información a través de buscadores y bases de datos.
                                                    </li>
                                                </ul>
                                            </td>
                                    <tr>
                                        <td>3</td>
                                        <td>Replicación, transcripción y traducción</td>
                                        <td id="contTablaIzq">
                                            Conocer el dogma central de la biología molecular, su estructura y su funcionalidad.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                    Se le asignarán al alumno documentos técnicos y/o científicos de acuerdo con el tema que se analice y se fomentará la búsqueda de documentos complementarios.
                                                </li>
                                                <li>
                                                    El alumno presentará al grupo los resultados de su investigación de un tema seleccionado.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Técnicas aplicadas</td>
                                        <td id="contTablaIzq">
                                            Conocer las diversas técnicas de biología molecular y su aplicación en el campo de las ciencias ambientales.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                    Lecturas complementarias de libros especializados y artículos científicos para reforzar e integrar los concpetos dados por el profesor.
                                                </li>
                                                <li>
                                                    El estudiante expondrá las técnicas aplicables al área de investigación que cultive en su trabajo de tesis.
                                                </li>
                                            </ul>
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
                        <p>A continuación, se muestra las condiciones de las evaluaciones parciales.</p>
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
                                        <td>1</td>
                                        <td>8<sup>a</sup> semana <br>(programado)</td>
                                        <td id="contTablaIzq">El contenido de 16 sesiones de una hora.
                                            <ul>
                                                <li>50% examen teórico escrito u oral</li>
                                                <li>50% tareas, proyectos, practica y/o participación</li>
                                            </ul>   
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>16<sup>a</sup> semana <br>(programado)</td>
                                        <td id="contTablaIzq">El contenido de 16 sesiones de una hora.
                                            <ul>
                                                <li>50% examen teórico escrito u oral</li>
                                                <li>50% tareas, proyectos, practica y/o participación</li>
                                            </ul>    
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>12<sup>a</sup> semana <br>(programado)</td>
                                        <td id="contTablaIzq">El contenido de 16 sesiones de una hora.
                                            <ul>
                                                <li>50% examen teórico escrito u oral</li>
                                                <li>50% tareas, proyectos, practica y/o participación</li>
                                            </ul>    
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>16<sup>a</sup> semana <br>(programado)</td>
                                        <td id="contTablaIzq">El contenido de 16 sesiones de una ahora.
                                            <ul>
                                                <li>50% examen teórico escrito u oral</li>
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
                <p></p>
                <hr>
                <p></p>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <h5> <strong><br>Textos básicos</strong></h5>
                <div class="margen">
                    <ul>
                        <li>Brock, T. D., & Madigan, M. T. (2019). Microbiología. Prentice-Hall Hispanoamericana</li>
                        <li>Lacadena, J. R. (1999). Genética General. Conceptos fundamentales. Editorial Síntesis, S. A.</li>
                        <li>Alberts, B., A. Johnson, J. Lewis, M. Raff, K. Roberts, P. Walter Garland Science; N.Y. (2002). Molecular Biology of the Cell. 4th edition.</li>
                        <li>Nelson, D. L. & Cox, M. M. (2018). Principios de Bioquímica de Lehninger-7. Artmed Editora.</li>
                    </ul>
                </div>
                <p></p>
                <h5> <strong>Recursos digitales</strong></h5>
                <p id="becasEnlace">
                    <a href="https://www.ncbi.nlm.nih.gov/">https://www.ncbi.nlm.nih.gov/</a>
                </p> 

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>No aplica
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>No aplica
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul>
                        <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio
                        que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong> </li>
                        <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya
                        cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                    </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul>
                        <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                        <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                    </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong>Elaboró: </strong>Dra. Elsa Cervantes González.
                    <br>
                    <strong>Revisó:</strong><br><br>
                </p>

                <div class="row m-0 text-center align-items-center justify-content-center">
                    <div class="col-auto">
                        <a  class="btn btn-primary rounded-pill" id="botonesGeneral" href="https://uaslpedu-my.sharepoint.com/personal/pmpca_uaslp_mx/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fpmpca%5Fuaslp%5Fmx%2FDocuments%2F00%5FCONTROLESCOLAR%2F01%5FTrabajo%5FZoraida%2FCursos%5FAgo%5F2024%2FPyC%5FBiologiaMolecularAplicadaalas%20CienciasAmbientales%2Epdf&parent=%2Fpersonal%2Fpmpca%5Fuaslp%5Fmx%2FDocuments%2F00%5FCONTROLESCOLAR%2F01%5FTrabajo%5FZoraida%2FCursos%5FAgo%5F2024&ga=1" target="_blank" role="button" download="CTS_PyC_BioMolecular.pdf">Descargar programa</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
