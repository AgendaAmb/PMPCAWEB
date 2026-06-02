@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>SISTEMAS DE ADSORCIÓN: EQUILIBRIO Y CINÉTICA</strong></h1>
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
                                        <td>Tópico Selecto</td>
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
                <p><strong>El estudiante conocerá las características fisicoquímicas de los sistemas adsorbato-adsorbente y los parámetros de diseño requeridos para sistemas de adsorción.</strong>
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
                                        <td id="contTabla"></td>

                                        <td>
                                        El estudiante conocerá los factores de la composición fisicoquímica del sistema adsorbato-adsorbente para optimizar los procesos de adsorción.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"></td>

                                        <td>Determinará los parámetros de diseño a través del estudio del equilibrio y cinética de adsorción.

                                        <br>Aprenderá a determinar matemáticamente los parámetros de las ecuaciones que definen los sistemas de adsorción a fin de proponer diseño de plantas que permitan el control de la contaminación del agua. 
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
                                        <td>Materiales adsorbentes</td>
                                        <td id="contTablaIzq">El estudiante conocerá la elaboración de materiales carbonosos y biosorbentes y caracterización de materiales adsorbentes
                                        </td>
                                        <td id="contTablaIzq">
                                        La clase se impartirá mediante sesiones expositivas por parte del maestro mediante técnicas de aprendizaje basado en problemas, aprendizaje significativo, así como prácticas de investigación. La participación del alumno será esencial en las tareas y trabajos de investigación con la finalidad de completar los temas y tópicos del curso.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Propiedades fisicoquímica y de textura de los materiales adsorbentes</td>
                                        <td id="contTablaIzq">Determinación de propiedades fisicoquímicas
                                        </td>
                                        <td id="contTablaIzq">El proceso enseñanza-aprendizaje se reforzará mediante trabajos de investigación y tareas para cada uno de los temas. El profesor fomentará el uso de las TIC’s y de programas especializados para solución y simulación de problemas.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Equilibrio y cinética de adsorción</td>
                                        <td id="contTablaIzq">Determinará y simulará el equilibrio y cinética de adsorción.</td>
                                        <td id="contTablaIzq">La clase se impartirá mediante sesiones expositivas por parte del profesor mediante técnicas de aprendizaje basado en problemas, aprendizaje significativo, así como prácticas de investigación. La participación del alumno será esencial en las tareas y trabajos de investigación con la finalidad de completar los temas y tópicos del curso. El proceso enseñanza-aprendizaje se reforzará mediante trabajos de investigación y tareas para cada uno de los temas. El profesor fomentará el uso de las TIC’s y de programas especializados para solución y simulación de problemas.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Diseño de un lecho fijo</td>
                                        <td id="contTablaIzq">Implementación de un lecho fijo
                                        </td>
                                        <td id="contTablaIzq">La clase se impartirá mediante sesiones expositivas por parte del profesor mediante técnicas de aprendizaje basado en problemas, aprendizaje significativo, así como prácticas de investigación. La participación del alumno será esencial en las tareas y trabajos de investigación con la finalidad de completar los temas y tópicos del curso.
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
                                        <td>Unidades 1 y 2</td>
                                        <td>Examen</td>
                                        <td>40%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Unidades 3 y 4</td>
                                        <td>Examen</td>
                                        <td>40%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Proyecto final</td>
                                        <td>Proyecto final</td>
                                        <td>20%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <p>Definir los textos básicos pertinentes para lograr los aprendizajes y desempeños previstos en la asignatura haciendo uso de un estilo de referencias establecido (p. e. APA, MLA). Agregar las viñetas que sean necesarias.</p>

                <hr>
                <h5> <strong>Textos básicos</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Adsorption design for wastewater treatment. Environmental engineering. David O Cooney. Lewis Publishers 1998. ISBN 1566703336, 9781566703338</li>
                    <li>Principles of adsorption and adsorption processes. Wiley Interscience Publication. Douglas Morris Ruthven. Wiley Interscience, 1964. ISBN 0471866067, 9780471866060</li>
                    <li>Adsorption technology and design. W.J. Thomas Barry D. Crittrenden. Butterworth Heinemann 1998. ISBN 0750619597, 9780750619592</li>
                    <li>Adsorbents: fundamentals and applications. RT. Yang., Hojnh Wiley snd Sons 2003. ISBN 0471297410, 9780471297413</li>
                </ul>
            </div>

                <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <hr>
                <h5> <strong>SITIOS DE INTERNET</strong></h5>
                <div class="margen">
                <ul>
                    <li><a href="https://pubs.acs.org/">https://pubs.acs.org/</a></li>
                    <li><a href="https://link.springer.com/">https://link.springer.com/</a></li>
                    <li><a href="https://www.sciencedirect.com/">https://www.sciencedirect.com/</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                    <P>Para poder cursar esta asignatura, es necesario:
                        <br>• Ninguno
                    </P>

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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 30</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dra. Paola Elizabeth Díaz Flores/Dr. Nahúm Andrés Medellín Castillo
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
