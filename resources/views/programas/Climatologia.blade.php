@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>CLIMATOLOGÍA APLICADA</strong></h1>
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
                                        <td>3</td>
                                        <td>2</td>
                                        <td>1</td>
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
                <p>Al concluir esta asignatura, el estudiante logrará Discernir los componentes atmosféricos que determinan o condicionan el clima terrestre, analizar los elementos y factores del clima, interpretar los diferentes parámetros del clima, discutir las principales clasificaciones climáticas, examinar la distribución climática de México, conocerá la importancia del cambio climático en México.
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
                                        <td id="contTabla"><strong>Competencia (s) profesional (es) que contribuye a desarrollar la materia</strong></td>

                                        <td>
                                            <ul>
                                                <li>Para facilitar el buen desarrollo de las clases, el aula se cerrará quince minutos después de la hora marcada de inicio de clases; posteriormente, no se permitirá el acceso hasta el eventual receso.</li>
                                                <li>Las tareas, controles de lectura, ejercicios y otros trabajos escritos se recibirán en la fecha establecida dentro del programa de actividades. Sólo se recibirán los documentos mencionados en una fecha posterior mediante un justificante firmado por el Coordinador del Área correspondiente.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Competencia (s) transversal (es) a las que contribuye a desarrollar la materia</strong> </td>

                                        <td>
                                            <ul>
                                                <li>No se permite el uso de teléfonos celulares u otros aparatos de radiocomunicación durante las clases.</li>
                                                <li>No ingerir alimentos en el salón de clases.</li> 
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
                                        <td><strong>La atmósfera y la meteorología<strong><br> 1.1 La atmósfera<br> 1.2 La meteorología</td>
                                        <td id="contTablaIzq">
                                            <ol style="list-style-type: lower-alpha;">
                                                <li>Concepto e introducción al estudio de la Atmósfera</li>
                                                <li>Propiedades físicas y químicas.</li>
                                                <li>Radiación Solar</li>
                                                <li>Definición y campo de estudio de la Meteorología.</li>
                                                <li>Ramas de la Meteorología.</li>
                                                <li>Elementos del estado del tiempo.</li>
                                                <li>Instrumentos para la medición del estado del tiempo</li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq">
                                        Cada estudiante debe hacer un análisis de las lecturas obligatorias, elaboración de mapas conceptuales de sus contenidos y reflexión colectiva, en forma oral y escrita de los materiales de lectura
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><strong>La climatología</strong> <br>2.1 Introducción al estudio de la climatología <br>2.2 Masas de aire y corrientes oceánicas <br>2.3 Climatología e Hidrología <br>2.4 La clasificación de Köppen</td>
                                        <td id="contTablaIzq">
                                            <ol style="list-style-type: lower-alpha;">
                                                <li>Definición y campo de estudio de la climatología. </li>
                                                <li>Elementos del clima.</li>
                                                <li>Factores que modifican el clima</li>
                                                <li>Circulación General.</li>
                                                <li>Masas de aire.</li>
                                                <li>Frentes.</li>
                                                <li>Corrientes oceánicas.</li>
                                                <li>Objetivos de la clasificación de Köppen.</li>
                                                <li>Modificaciones al sistema climático de Köppen.</li>
                                                <li>Los climas de México: patrones y distribución.</li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq">Cada estudiante debe hacer un análisis de las lecturas obligatorias, elaboración de mapas conceptuales de sus contenidos y reflexión colectiva, en forma oral y escrita de los materiales de lectura. Actividades específicas de este tema que realizarán los estudiantes, tales como prácticas, lecturas, tareas, ejercicios en clases, etc. (cuando proceda)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><strong>Climatología Aplicada</strong> <br>3.1 El clima y los recursos naturales <br>3.2 El clima y el nombre</td>
                                        <td id="contTablaIzq">
                                            <ol style="list-style-type: lower-alpha;">
                                                <li>La relación clima-suelo.</li>
                                                <li>La relación clima-vegetación</li>
                                                <li>Las regiones naturales del Mundo y de México.</li>
                                                <li>El clima y las actividades económicas.</li>
                                                <li>El medio ambiente urbano.</li>
                                                <li>Los sensores remotos y la generación de imágenes aplicables a la climatología.</li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq">Cada estudiante debe hacer un análisis de las lecturas obligatorias, elaboración de mapas conceptuales de sus contenidos y reflexión colectiva, en forma oral y escrita de los materiales de lectura. Actividades específicas de este tema que realizarán los estudiantes, tales como prácticas, lecturas, tareas, ejercicios en clases, etc. (cuando proceda)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><strong>La variabilidad y el cambio climático<strong><br>4.1 El clima sistema variable <br>4.2 Consecuencias del cambio climático</td>
                                        <td id="contTablaIzq">
                                            <ol style="list-style-type: lower-alpha;">
                                                <li> El estudio del clima pasado</li>
                                                <li>Variaciones climáticas de origen terrestre</li>
                                                <li>Variaciones climáticas de origen solar</li>
                                                <li>Posibles consecuencias geofísicas y ecológicas.</li>
                                                <li>Impacto del cambio climático en México.</li>
                                                <li>Importancia del estudio de la sequía en México</li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq">Cada estudiante debe hacer un análisis de las lecturas obligatorias, elaboración de mapas conceptuales de sus contenidos y reflexión colectiva, en forma oral y escrita de los materiales de lectura. Actividades específicas de este tema que realizarán los estudiantes, tales como prácticas, lecturas, tareas, ejercicios en clases, etc. (cuando proceda)
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
                                        <td>Bimestral</td>
                                        <td>Unidades 1 y 2</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Bimestral</td>
                                        <td>Unidades 3 y 4</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>Otra actividad</td>
                                        <td>Semanal</td>
                                        <td>Controles de lectura</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>Trabajos prácticos</td>
                                        <td>Mensual</td>
                                        <td>Base de datos</td>
                                        <td>40%</td>
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
                    <li>Ahrens, Donald (2001), Essentials of Meteorology. An Invitation to the Atmosphere. Canada, Wadsworth Gruop Brooks, third edition.</li>
                    <li>Barry, Roger and Chorley (2003), Atmosphere, Weather and Climate. London. Routledge, Eight Edition.</li>
                    <li>Bassols, Angel (1998). Recursos naturales de México, teoría, conocimiento y uso. México, Ed. Nuestro Tiempo, S.A.</li>
                    <li>Cuadrat, J., y Pita, M. F. (2000), Climatología. Madrid, Ediciones Cátedra.</li>
                    <li>Danielson, E. W., Levin, J., Abrams, E. (2003), Meteorology.New York, Mc Graw Hill, Second Edition.</li>
                    <li>García, E. 1988. Modificaciones al sistema de clasificación climática de Köppen para adaptarlo a las condiciones particulares de la República Mexicana. México.</li>
                    <li>Griffiths. J. F., 1994, Climatología Aplicada, México, Publicaciones Cultural.</li>
                    <li>INE-SEMANART (2003), Avances de México en materia de cambio climático. 2001-2002. México, Instituto Nacional de Ecología.</li>
                    <li>Martínez, Julia y Fernández, Adrián (2004) Cambio climático: Una visión desde México : México. SEMANART-INE.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Textos complementarios</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Aguilera, M. y Martínez, R. (1990), <i>Relaciones agua, suelo, planta, atmósfera.</i> México, Universidad Autónoma de Chapingo.</li>
                    <li>Garduño, René (1994). El veleidoso clima. México. SEP-FCE-CONACYT.</li>
                    <li>Dornbusch, Rudiger y Poterba, James (1994). <i>El calentamiento de la Tierra. México</i>, CONACYT.</li>
                    <li>Florescano, Enrique y Swan, Susan (1995). Breve historia de la sequía en México. Xalapa, Universidad Veracruzana.</li>
                    <li>Medina, Guillermo, José Ruiz y Ramón Martínez, 1998, <i>Los climas de México, una estratificación ambiental basada en el componente climático</i>, México, Instituto de Investigaciones Forestales, Agrícolas y Pecuarias</li>
                    <li>Magaña V., Vázquez J., Pérez J. y Pérez J. B. (2003) <i>Impact of El Niño on precipitation in Mexico</i>. México, Geofísica Internacional, Vol. 42, Núm 3.</li>
                    <li>Rassol, Ichtiaque (1994) <i>El sistema Tierra</i>. Madrid. Debate-Dominos.</li>
                    <li>Voituriez, B. 1994. La atmósfera y el clima. Barcelona: RBA Editores</li>
                </ul>
            </div>

                <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <hr>
                <h5> <strong>SITIOS DE INTERNET</strong></h5>
            <div class="margen">
                <ul>
                    <li><a href="www.ncdc.noaa.gov/nadm.html">www.ncdc.noaa.gov/nadm.html</a></li>
                    <li><a href="http://www.cna.gob.mx">http://www.cna.gob.mx</a></li>
                    <li><a href="http://serpiente.dgsca.unam.mx/cca/">http://serpiente.dgsca.unam.mx/cca/</a></li>
                </ul>
            </div>

            <hr>
                <h5> <strong>SITIOS DE INTERNET BASES DE DATOS</strong></h5>
            <div class="margen">
                <ul>
                    <li>ERIC III</li>
                    <li>PROYECTO SAGARPA</li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                    <P>
                        • NO hay requisitos
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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 15.</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2.</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. Carlos Contreras Servín
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
