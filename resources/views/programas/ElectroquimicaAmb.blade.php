@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>ELECTROQUÍMICA AMBIENTAL</strong></h1>
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
                                        <td>Presencial y/o Mixta</td>
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
                <p>Al concluir esta asignatura, el estudiante conocerá métodos alternos de tratamiento de efluentes, a través de la adquisición de los conocimientos básicos que rigen los procesos electroquímicos para el control y prevención de la contaminación y reciclaje de compuestos, para que sea capaz de elegir y evaluar un método de tratamiento electroquímico para un caso problema.
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
                                        <td id="contTabla"><strong>Comunicación</strong></td>

                                        <td>Saber comunicar contenidos científicos a otros especialistas en Electroquímica Ambiental, a científicos de otras especialidades y a la sociedad en general.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Conocimientos básicos</strong> </td>

                                        <td>Comprender los principios, fundamentos y aplicaciones de la Electroquímica Ambiental.    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Conocimientos aplicados</strong>
                                        </td>

                                        <td>Conocer las posibilidades tecnológicas y científicas que la Electroquímica Ambiental tiene en distintos campos.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Trabajo de laboratorio</strong></td>

                                        <td>Dominar las metodologías teóricas y experimentales empleadas en la investigación Electroquímica Ambiental</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Propuestas de remediación</strong> </td>

                                        <td>Adquirir destreza en la aplicación de diferentes metodologías en la resolución de problemas cualitativos y cuantitativos.    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Búsqueda de información</strong>
                                        </td>

                                        <td>Utilizar con destreza la bibliografía científica y las bases de patentes sobre Electroquímica Ambiental</td>
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
                                        <td>Medio Ambiente y Electroquímica</td>
                                        <td id="contTablaIzq"> Identificar las fuentes de contaminación y sus medios de transporte
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>
                                                Presentación de los temas, planteamiento de preguntas y conducción de su discusión en clase.</li>
                                                <li>Lecturas y discusión de conceptos. Discusión vía electrónica extra-clase.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Termodinámica y fenómenos de transporte</td>
                                        <td id="contTablaIzq">Establecer las ecuaciones que describen las relaciones corriente – potencial para una reacción electroquímica ambiental
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>
                                                Presentación de los temas, planteamiento de preguntas y conducción de su discusión en clase.</li>
                                                <li>Lecturas y discusión de conceptos. Discusión vía electrónica extra-clase.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Electroquímica de contaminantes</td>
                                        <td id="contTablaIzq">
                                        Proveer un panorama de datos electroquímicos sobre los tipos comunes de contaminantes ambientales.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>
                                                Presentación de los temas, planteamiento de preguntas y conducción de su discusión en clase.</li>
                                                <li>Lecturas y discusión de conceptos. Discusión vía electrónica extra-clase.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Procesos electroquímicos para control ambiental</td>
                                        <td id="contTablaIzq">
                                        Conocer los fundamentos y principios de operación de los métodos electroquímicos usados para la disminución de la contaminación.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>
                                                Presentación de los temas, planteamiento de preguntas y conducción de su discusión en clase.</li>
                                                <li>Lecturas y discusión de conceptos. Discusión vía electrónica extra-clase.
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
                        <p>Al final de los Capítulos 2, 3, 4, y 5 se hará una evaluación parcial en la forma de un Reporte Escrito de las revisiones, discusiones y principales conclusiones de los temas asignados para evaluación dentro del capítulo. Cada evaluación será equivalente al 25% de la calificación final. 
                        <br>A continuación, se muestra las condiciones de las evaluaciones parciales.</p>
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
                                        <td>Primer examen parcial</td>
                                        <td>Final Cap 2</td>
                                        <td>
                                            Examen escrito
                                        </td>
                                        <td>50%</td>
                                    </tr>

                                    <tr>
                                        <td>Segundo examen parcial</td>
                                        <td>Final Cap 4</td>
                                        <td>
                                            Examen escrito
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>Trabajo final</td>
                                        <td>Final Cap 4</td>
                                        <td>
                                            Presentación oral y reporte escrito
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
                <ul type="vineta">
                    <li>Química Física del Ambiente y de los Procesos Ambientales. Juan E. Figueruelo (Autor), Martín Marino Dávila (Autor). Reverté, España (2004), 591 páginas.</li>
                    <li>Electrochemical methods: Fundamentals and applications. Allen J. Bard (Author), Larry R. Faulkner (Author). John Wily & Sons, Inc., USA (2001), 833 pages.</li>
                    <li>Encyclopedia of Electrochemistry Volume 2: Interfacial Kinetics and Mass Transport. Ernesto J. Calvo (Editor). Wiley-VCH, Federal Republic of Germany (2003), 553 pages</li>
                    <li>Membrane Science and Technology Series, 9: Ion-Exchange Membrane Separation Processes. H. Strathmann (Author). Elsevier, The Netherlands (2004) 348 pages.</li>
                    <li>Aquatic Chemistry: Chemical Equilibria and rates in natural Waters. Werner Stumm (Author), James J. Morgan (Author). John Wily & Sons, Inc., USA (1996) 1022 pages.</li>
                    <li>Electrochemical Engineering Principles. Geoffrey Prentice (Author). Prentice-Hall, Inc., USA (1991), 287 pages.</li>
                    <li>Industrial Electrochemistry. Derek Pletcher (Author), Frank C. Walsh (Author). Blackie Academic & Professional, Great Britain (1993), 653 pages.</li>
                    <li>Electrochemistry for the Environment. Christos Comninellis (Editor), Guohua Chen (Editor). Springer, USA (2010), 563 pages.</li>
                    <li>Environmental oriented Electrochemistry. C.A.C. Sequeira (Editor). Elsevier, The Netherlands (1994), 718 pages.</li>
                    <li>Environmental Electrochemistry. Fundamentals and Applications in Pollution Abatement. Krishnan Rajeshwar (Author), Jorge Ibanez (Author). Academic Press, USA (1997), 776 pages.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li><a href="http://www.ise-online.org/journals/journals.php">http://www.ise-online.org/journals/journals.php</a></li>
                    <li><a href="http://www.electrochem.org/">http://www.electrochem.org/</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es recomendable:
                    <br>• Tener conocimientos básicos de química y física
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:

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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 8.</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1.</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. Israel Rodríguez Torres
                    <br>
                    <strong> • Revisó:</strong> Dr. Israel Rodríguez Torres
                </p>
            </div>
        </div>
    </div>
@endsection
