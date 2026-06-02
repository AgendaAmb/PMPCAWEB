@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>ECOFISIOLOGIA VEGETAL</strong></h1>
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
                                        <td>1 y 2</td>
                                        <td>16</td>
                                        <td>3</td>
                                        <td>2</td>
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
                <p>Al concluir esta asignatura, el estudiante logrará analizar los procesos bioquímicos, fisiológicos y evolutivos que permiten el crecimiento, reproducción y distribución de las plantas y estudiar reacciones de las plantas a alteraciones en sus hábitats debidas causas naturales y antrópicas.
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
                                        <td id="contTabla"><strong>Profesionales</strong></td>

                                        <td>Evaluar los efectos de los factores ambientales sobre los procesos funcionales de los organismos vegetales tanto silvestres como cultivados 
                                            <br>Proponer planteamientos básicos para contribuir a la solución de problemas ambientales en el ámbito de las ciencias agropecuarias entendiendo el papel que tienen los organismos vegetales</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Genéricas</strong></td>

                                        <td>Razonamiento científico tecnológico 
                                        <br>Comunicación ideas en forma oral y escrita   
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
                                        <td>Introducción</td>
                                        <td id="contTablaIzq"> Identificar las variables del ambiente que influyen en la distribución de las plantas y las respuestas básicas de estas a las variaciones espaciales y temporales.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposición por parte del profesor sobre las bases ecofisiológicas de la distribución de los organismos.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Relaciones hídricas en las plantas</td>
                                        <td id="contTablaIzq">Analizar los procesos de absorción, transporte y pérdida de agua en las plantas e identificar las influencias de las variables ambientales sobre el estado hídrico de las plantas y las respuestas de estas en el corto y largo plazo.
                                        </td>
                                        <td id="contTablaIzq">Exposición por parte del profesor, y presentación de seminarios por parte de los alumnos con el análisis de artículos sobre los temas siguientes:
                                            <ul class="vineta">
                                                <li>El agua en el funcionamiento de las plantas.</li>
                                                <li>El concepto de potencial de agua y sus componentes según el medio</li>
                                                <li>Flujo del agua a través de las plantas</li>
                                                <li>Eficiencia en el uso del agua</li>
                                                <li>Adaptaciones y ajustes fisiológicos y morfológicos en función de la disponibilidad de agua. Estrés hídrico y osmótico</li>
                                                <li>Relaciones hídricas e intercambio gaseoso: del nivel de hoja al nivel de copa
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>La nutrición mineral en los vegetales</td>
                                        <td id="contTablaIzq">
                                        Asociar las adaptaciones de las plantas a los ambientes edáficos con riqueza o carencia natural o antropogena de nutrimentos
                                        </td>
                                        <td id="contTablaIzq">Exposición por parte del profesor, y presentación de seminarios por parte de los alumnos con el análisis de artículos sobre los temas siguientes:
                                            <ul class="vineta">
                                                <li>Absorción de nutrientes.</li>
                                                <li>Absorción de nutrientes en suelos con exceso o escasez.</li>
                                                <li>Eficiencia en el uso de nutrientes, de los individuos a los ecosistemas.</li>
                                                <li>Otras adaptaciones y ajustes fisiológicos y morfológicos asociados con la disponibilidad nutrimental.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>El uso del carbono y producción de biomasa</td>
                                        <td id="contTablaIzq">
                                        Analizar y discutir sobre los procesos fisiológicos para la adquisición y uso del carbono en las plantas y sus variaciones asociadas a ambientes distintos
                                        </td>
                                        <td id="contTablaIzq">Exposición por parte del profesor, y presentación de seminarios por parte de los alumnos con el análisis de artículos sobre los temas siguientes:
                                            <ul class="vineta">
                                                <li>El proceso fotosintético.</li>
                                                <li>Alteraciones de la fotosíntesis asociadas con los factores ambientales (radiación, agua, temperatura, contaminantes)</li>
                                                <li>Rutas fotosintéticas, C3, C4 y CAM</li>
                                                <li>Adaptaciones morfológicas, anatómicas y bioquímicas</li>
                                                <li>Evolución y distribución de cada uno de los tipos fotosintéticos</li>
                                                <li>La respiración.</li>
                                                <li>Función ecofisiológica de las rutas alternativas de la respiración</li>
                                                <li>El proceso respiratorio y el ambiente</li>
                                                <li>Inundación, hipoxia, salinidad y déficit hídrico, disponibilidad de nutrientes, radiación, temperatura y pH.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Influencias abióticas y bióticas, y procesos globales</td>
                                        <td id="contTablaIzq">Integrar y comprender los procesos fisiológicos que regulan el crecimiento y desarrollo vegetal y su asociación con los cambios estacionales
                                        </td>
                                        <td id="contTablaIzq">Exposición por parte del profesor, y presentación de seminarios por parte de los alumnos con el análisis de artículos sobre los temas siguientes:
                                            <ul class="vineta">
                                                <li>Introducción. Crecimiento y desarrollo</li>
                                                <li>Crecimiento y distribución de biomasa</li>
                                                <li>Velocidad de crecimiento y asignación de biomasa como adaptación</li>
                                                <li>Influencia ambiental en el crecimiento</li>
                                                <li>Estacionalidad, fenología y ciclos de vida
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
                                        <td>Al terminar las Unidades 2, 3, 4 y 5</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Evaluaciones de las actividades (seminarios) desarrollados durante el curso</li>
                                                <li>Evaluación mediante examen escrito sobre los temas revisados durante el curso</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="">
                                                <li>50%</li>
                                                <li>50%</li>
                                            </ul>
                                        </td>
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
                    <li>Coombs J. D.O. Hall. S.P. Long & J.M.O. Scurlock (editores). 1988. Técnicas en fotosíntesis y productividad. Traducción al español de la segunda edición en inglés. Colegio de Postgraduados. 258 p.</li>
                    <li>Hasegawa P.M. y M.A. Jenks. 2005. Plant Abiotic Stress. Blackwell Publishing. 270.</li>
                    <li>Körner C. & F.A. Bazzaz. 1996. Carbon Dioxide, Populations, and Communities. Academic press. 465 p.</li>
                    <li>Kramer P.J. 1989. Relaciones hídricas de suelo y plantas: una síntesis moderna. Harla. 438 p.</li>
                    <li>Lambers H, F.S. Chapin, T.L. Pons. 1998. Plant Physiological Ecology. Springer.</li>
                    <li>Larcher W. 2003. Physiological Plant Ecology. Springer</li>
                    <li>Madhava-Ro K.V., A.S. Raghavendra & K. Janardhan (editors). 2006. Physiology and Molecular Biology of Stress Tolerance in Plants. Springer. 345 p.</li>
                    <li>Mofizur R.I and H. Hasegawa. 2012. Water stress. InTech. Rijeka, Croatia. 300 p.</li>
                    <li>Pearcy R.W., J.R. Ehleringer, H.A. Mooney & P.W. Rundel. 1989. Plant physiological ecology, field methods and instrumentation. Chapman and Hall. USA. 427 p.</li>
                    <li>Pugnaire F and F. Valladares. 2007. Functional plant ecology. 2nd ed. Taylor & Francis. 724 p.</li>
                    <li>Reigosa M.J. 2003. Handbook of Plant Ecophysiology Techniques. Kluwer Academic Publishers. 452 p.</li>
                    <li>Reigosa M.J., N Pedrol, A Sánchez-Moreiras. 2003. La Ecofisiología Vegetal: una ciencia de síntesis. Paraninfo. España. 1193 p.</li>
                    <li>Schulze E.D. , E. Beck, k. Müller-Hohenstein. 2005. Plant Ecology. Springer</li>
                    <li>Taiz L. Y E. Zeiger. 2006. Plant physiology. Sinauer. 782 p.</li>
                    <li>Varma, A (editor). 2008. Mycorrhiza. State of the art, genetics and molecular biology, eco.function, biotechnology, eco-physiology, structure and systematics. 3rd. Edition. Springer-Verlag Berlin Heidelberg. 788 p.
                    </li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li><a href="https://scholar.google.es">https://scholar.google.es</a></li>
                    <li><a href="https://www.bibliotecas.uaslp.mx/cgi-bin/koha/sb-consultasdb.pl">https://www.bibliotecas.uaslp.mx/cgi-bin/koha/sb-consultasdb.pl</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <br>• N/A
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    <br>• N/A
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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 10</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. Hugo Magdaleno Ramírez Tobias
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
