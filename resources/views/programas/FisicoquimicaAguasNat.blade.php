@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>FISICOQUÍMICA DE AGUAS NATURALES</strong></h1>
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
                <p>Al finalizar el curso el estudiante será capaz de:
                <br>
                <br>Implementar el tratamiento cuantitativo de las variables que determinan la composición de las aguas naturales basándose en principios químicos fundamentales (equilibrio químico, análisis cinético y procesos al estado estacionario), así como, comprender e interpretar en qué medida la contaminación afecta la calidad del agua y la manera en que los ecosistemas acuáticos responden a las perturbaciones químicas.
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

                                        <td>Hacer uso de la información correspondiente sobre la naturaleza y características fisicoquímicas de las sustancias para realizar un análisis crítico de las implicaciones que tiene la entrada de sustancias al ambiente acuático, su dispersión, su interacción con otras sustancias para finalmente entender los efectos a nivel de ciclo biogeoquímico, de un ecosistema acuático, entre otros.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Profesional</strong></td>

                                        <td>Manejo y aplicación de conceptos básicos de la química de las soluciones para entender diferentes procesos tanto en la solución como a través de las interacciones con las fases minerales y orgánicas.    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Transversal</strong>
                                        </td>

                                        <td>Este curso hace uso de los conocimientos de la química analítica y la fisicoquímica y se apoya en conocimientos de limnología, geohidrología y otros para entender el comportamiento de las sustancias químicas (dispersión, transporte, reacción, acumulación) en un determinado compartimiento ambiental y sus efectos (adsorción, absorción, bioacumulación, entre otros) en los diferentes componentes de un ecosistema acuático. La comprensión de estos mecanismos es igualmente básica para proponer acciones de remediación o de mitigación para sustancias contaminantes específicas.</td>
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
                                        <td>Introducción – Conceptos Básicos (C. Alfaro)</td>
                                        <td id="contTablaIzq"> Identificar los aspectos generales y básicos de la composición química del agua, necesarios para el curso
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>
                                                Clase impartida por el profesor</li>
                                                <li>Revisión de los subtemas: Procesos químicos y composición de las aguas naturales; Capacidad tampón de las aguas naturales; Reacciones de intercambio entre la atmósfera y el agua; Reacciones de adsorción y de desadsorción.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Interacción agua - atmósfera (C. Alfaro).</td>
                                        <td id="contTablaIzq">Aplicar los conceptos básicos ácido-base para explicar procesos que se producen en los sistemas naturales y en la interface agua-atmósfera
                                        </td>
                                        <td id="contTablaIzq">Metodología:
                                            <ul class="vineta">
                                                <li>
                                                Curso magistral, trabajo propio del alumno (resolución de problemas, generación e interpretación de diagramas de distribución ácido-base)</li>
                                                <li>Análisis de publicaciones científicas
                                                </li>
                                            </ul>
                                        <br>Temas:
                                            <ul class="vineta">
                                                <li>
                                                Tema 2.1. Equilibrios gas - agua: Ley de Henry: Dióxido de carbono: sistema cerrado y abierto a la atmósfera; Dióxido de azufre; Dióxidos de nitrógeno; Substancias orgánicas volátiles</li>
                                                <li>Tema 2.2. Depósitos atmosféricos y lluvia ácida. Origen antropogénico de la acidez en la atmósfera
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Metales en solución acuosa (C. Alfaro)</td>
                                        <td id="contTablaIzq">
                                        Entender las implicaciones de las reacciones químicas basadas en la química de la coordinación sobre la especiación de los metales y aplicar estas reacciones en el planteamiento de un problema ambiental y su interpretación
                                        </td>
                                        <td id="contTablaIzq">Metodología:
                                            <ul class="vineta">
                                                <li>
                                                Curso magistral, trabajo propio del alumno (resolución de problemas e interpretación de diagramas de especiación química)</li>
                                                <li>Análisis de publicaciones científicas – presentación y discusión en clase
                                                </li>
                                            </ul>
                                        <br>Temas:
                                            <ul class="vineta">
                                                <li>
                                                Tema 3.1. Química de coordinación y su importancia en la especiación de iones metálicos – hidrólisis, quelatos, formación de complejos con ligantes inorgánicos y orgánicos, cálculos de equilibrio de complejación de metales traza</li>
                                                <li>Tema 3.2. Modelos simples de especiación de metales en aguas naturales</li>
                                                <li>Tema 3.3. Significado de la especiación en la interacción de los metales con el medio acuático
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Precipitación y disolución (C. Alfaro)</td>
                                        <td id="contTablaIzq">
                                        Identificar los procesos de precipitación – disolución de las sales metálicas que ocurren en los sistemas acuáticos y la importancia de las variables fisicoquímicas que los afectan.
                                        </td>
                                        <td id="contTablaIzq">Metodología:
                                            <ul class="vineta">
                                                <li>
                                                Curso magistral, trabajo propio del alumno (resolución de problemas e interpretación de diagramas de solubilidad)</li>
                                                <li>Análisis de publicaciones científicas – presentación y discusión en clase
                                                </li>
                                            </ul>
                                        <br>Temas:
                                            <ul class="vineta">
                                                <li>
                                                Tema 4.1. Óxidos e hidróxidos</li>
                                                <li>Tema 4.2. Carbonatos y Silicatos</li>
                                                <li>Tema 4.3. Sulfatos y Fosfatos</li>
                                                <li>Tema 4.4. Importancia de la precipitación y la disolución de las fases sólidas en la regulación de la composición de las aguas naturales
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Equilibrio de óxido – reducción (R. Briones)</td>
                                        <td id="contTablaIzq">
                                        Revisar y aplicar los conceptos básicos que nos permiten entender y representar los procesos de oxidación-reducción de mayor importancia en los sistemas acuáticos
                                        </td>
                                        <td id="contTablaIzq">Metodología:
                                            <ul class="vineta">
                                                <li>
                                                Curso magistral, trabajo propio del alumno (resolución de problemas e interpretación de diagramas redox)</li>
                                                <li>Ejercicios de interpretación de diagramas de los propios resultados de investigación
                                                </li>
                                            </ul>
                                        <br>Temas:
                                            <ul class="vineta">
                                                <li>
                                                Tema 5.1. El ciclo global de los electrones: Fotosíntesis y respiración</li>
                                                <li>Tema 5.2. Diagramas log - log, pE – pH</li>
                                                <li>Tema 5.3. Reacciones de óxido – reducción, catalizadas por microorganismos</li>
                                                <li>Tema 5.4. Mediciones de potenciales de óxido - reducción en aguas naturales
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Ciclos biogeoquímicos (R. Briones)</td>
                                        <td id="contTablaIzq">
                                        Analizar los ciclos biogeoquímicos de los elementos mayores, e identificar las interacciones que existen entre ellos
                                        </td>
                                        <td id="contTablaIzq">Metodología:
                                            <ul class="vineta">
                                                <li>
                                                Curso magistral, trabajo propio del alumno (análisis de casos de principales perturbaciones a los ciclos biogeoquímicos y sus implicaciones)</li>
                                                <li>Análisis de publicaciones científicas – presentación y discusión en clase
                                                </li>
                                            </ul>
                                        <br>Temas:
                                            <ul class="vineta">
                                                <li>
                                                Tema 6.1. Ciclo del C, N, S</li>
                                                <li>Tema 6.2. Ciclo global: la interdependencia de los ciclos biogeoquímicos</li>
                                                <li>Tema 6.3. Ciclo de los metales traza y del Hg
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Equilibrios de adsorción (P. Díaz)</td>
                                        <td id="contTablaIzq">
                                        Entender los procesos y mecanismos principales relacionados con los procesos de adsorción de las sustancias sobre las fases sólidas y aplicarlos a través del modelamiento de datos de investigación
                                        </td>
                                        <td id="contTablaIzq">Metodología:
                                            <ul class="vineta">
                                                <li>
                                                Curso magistral, trabajo propio del alumno (presentación de casos de estudio)</li>
                                                <li>Análisis de publicaciones científicas – elaboración de un ensayo
                                                </li>
                                            </ul>
                                        <br>Temas:
                                            <ul class="vineta">
                                                <li>
                                                7.1 Equilibrios de Adsorción</li>
                                                <li>7.1.1 Cargas superficiales</li>
                                                <li>7.1.2 La Doble Capa Eléctrica (EDL): modelos de Helmholtz, Gouy-Chapman, Stern</li>
                                                <li>7.1.3 Superficie de óxidos e hidróxidos</li>
                                                <li>7.1.4 Propiedades químicas de los grupos OH de superficie</li>
                                                <li>7.1.5 pH de carga nula</li>
                                                <li>7.1.6 Modelos de adsorción propuestos para óxidos: Coeficiente de distribución, Isoterma de Langmuir, Isoterma de Freundlich, Intercambio iónico (Kurbatov, Dugger), Modelo de interacción ion - solvente (James.Healy), Modelo de complejación superficial, Modelo de capacidad constante (Stumm), Modelo de triple capa (Leckie)</li>
                                                <li>7.1.7 Adsorción de metales traza sobre los sedimentos acuáticos</li>
                                                <li>7.1.8 Modelos de adsorción competitiva - Estimación de los sitios de adsorción
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Metales traza: ciclo, regulación y función biológica (C. Alfaro, R. Briones)</td>
                                        <td id="contTablaIzq">
                                        Integrar los conceptos revisados en el curso para explicar el ciclo, regulación y función biológica de los elementos traza (metales, metaloides)
                                        </td>
                                        <td id="contTablaIzq">Metodología:
                                            <ul class="vineta">
                                                <li>
                                                Curso magistral, trabajo propio del alumno (análisis de casos)</li>
                                                <li>Análisis de publicaciones científicas – presentación y discusión en clase
                                                </li>
                                            </ul>
                                        <br>Temas:
                                            <ul class="vineta">
                                                <li>
                                                Tema 8.1. Compuestos organometálicos</li>
                                                <li>Tema 8.2. Biodisponibilidad y toxicidad</li>
                                                <li>Tema 8.3. Micronutrientes</li>
                                                <li>Tema 8.4. Interacción con el fitoplancton a nivel molecular en ríos, lagos y mares</li>
                                                <li>Tema 8.5. Control de su concentración en las aguas naturales
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
                                        <td>Al terminar la Unidad 4</td>
                                        <td>
                                            Exposición oral y reporte escrito de tema que se asigna y que abarca las unidades 1-4
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al terminar la Unidad 6</td>
                                        <td>
                                            Exposición oral y reporte escrito de tema que se asigna y que abarca las unidades 5-6
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al terminar la Unidad 7</td>
                                        <td>
                                            Exposición oral y reporte escrito de tema que se asigna y que abarca la unidad 7
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al finalizar el curso</td>
                                        <td>
                                            Exposición de la tesis de investigación con base en un esfuerzo por demostrar los elementos del curso que utilizará en el desarrollo, análisis e interpretación de los resultados de propio proyecto de investigación del alumno – retroalimentación en clase de los compañeros y del profesor del curso
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>TOTAL</td>
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
                <ul class="vineta">
                    <li>Stumm y J.J. Morgan (1996) Aquatic Chemistry. Tercera Edición. Wiley Interscience.</li>
                    <li>F.M.M. Morel, J.G. Hering (1993) Principles and applications of aquatic chemistry. Wiley Interscience.</li>
                    <li>L. Sigg, P. Behra, W. Stumm (2014) Chimie des milieux aquatiques : Chimie des eaux naturelles et des interfaces dans l‘environnement. 5a. Edición, DUNOD.</li>
                    <li>D. Langmuir (1997). <b>Aqueous Environmental Geochemistry</b>. Prentice-Hall.</li>
                    <li>B. E. Ritmman y P. L. McCarthy (2020). <b>Environmental Biotechnology – Principles and Applications.</b></li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Textos complementarios</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>J. Buffle, R.R. DeVitre (1994). <b>Chemical and Biological Regulation of Aquatic Systems.</b> Lewis Publishers.</li>
                    <li>W. Stumm (1992). <b>Chemistry of the Solid-Water Interface: Processes at the Mineral – Water and Particle – Water Interface in Natural Systems.</b> Wiley Interscience.</li>
                    <li>E. K. Berner, R.A. Berner (1996). <b>Global Environment: Water, Air and Geochemical Cycles.</b> Prentice-Hall.</li>
                    <li>E. A. Laws (2000). <b>Aquatic Pollution: An Introductory Text.</b> Third Edition. Wiley.</li>
                    <li>J. N. Butler (1991). <b>Carbon Dioxide Equilibria and their Applications.</b> Lewis.</li>
                    <li>W. Stumm (1990). <b>Aquatic Chemical Kinetics: Reactions Rates of Processes in Natural Waters.</b> Wiley – Intersciences.</li>
                    <li>R. Wetzel (2001). <b>Limnology.</b> 3er Edition. Elsevier Science and Technology.</li>
                    <li>P. Brezonik, W. Arnold (2011). <b>Water Chemistry: An Introduction to the Chemistry of Natural and Engineered Aquatic Systems.</b> 1st Edition. Oxford University Press.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li>Water Resources Geochemical Software (USGS): <a href="https://water.usgs.gov/software/lists/geochemical">https://water.usgs.gov/software/lists/geochemical</a> Fecha de consulta: 15/01/2018</li>
                    <li>Alkalinity calculator (USGS): <a href="https://or.water.usgs.gov/alk/">https://or.water.usgs.gov/alk/</a></li>
                    <li>Chemical Modeling for Acid Waters (USGS): <a href="https://wwwbrr.cr.usgs.gov/projects/GWC_chemtherm/software.htm">https://wwwbrr.cr.usgs.gov/projects/GWC_chemtherm/software.htm</a></li>
                    <li>Visual MINTEQ ver. 3.1 Modelo Geoquímico para cálculos de especiación: <a href="https://vminteq.lwr.kth.se/">https://vminteq.lwr.kth.se/</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <br>• Que el estudiante tenga nociones de química general, fisicoquímica, química analítica.
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    <ul class="vineta">
                        <li>Programa de Posgrado en Ciencias Químicas (M y D; Facultad de Ciencias Químicas)</li>
                        <li>Programa Multidisciplinario de Posgrado en Ciencias Ambientales (M y D)</li>
                    </ul>
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>Sí</strong></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>Sí</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 15.</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 5.</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Ma. Catalina Alfaro de la Torre
                <br>Roberto Briones Gallardo
                <br>Paola Elizabeth Díaz Flores

                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
