@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>TÓPICO SELECTO B. ECOLOGÍA Y MANEJO DE CUENCAS HIDROGRÁFICAS</strong></h1>
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
                <p>Al finalizar esta asignatura, el estudiante logrará establecer y organizar el trabajo en equipo interdisciplinario en el marco del manejo integrado de cuencas hidrológicas para dar solución a problemas complejos donde el recurso hídrico será el eje integrador de dichas soluciones, que a su vez, incorporarán una perspectiva multidisciplinaria, internacional y multicultural.
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
                                            <ul class="vineta">
                                                <li>- Aprovechar de manera sustentable los recursos naturales de las cuencas hidrológicas.</li>
                                                <li>Diseñar planes de manejo de cuencas hidrológicas que incluyan el uso, la conservación y la restauración ecológica.</li>
                                                <li>Implementar criterios eco-hidrológicos para el manejo de cuencas.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Desempeños de la competencia profesional a los que contribuye la materia</strong></td>

                                        <td>Distinguirá lo esencial de lo accesorio o superficial de textos científicos referentes a Hidrología y Gestión de manejo de cuencas, incluyendo el área de Socioecohidrología; implementará estrategias o procedimientos para llegar a la elaboración de planes de manejo de cuencas y a la evaluación de la salud de una cuenca; sistematizará los marcos conceptuales y modelos socioecohidrológicos explicativos provenientes del avance científico y tecnológico para el manejo de cuencas hidrográficas.    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Competencia (s) transversal (es) a las que contribuye a desarrollar la materia</strong>
                                        </td>

                                        <td>
                                            <ul class="vineta">
                                                <li>-Capacidad de razonar a través del establecimiento de relaciones coherentes y sistematizables entre la información derivada de la experiencia y los marcos conceptuales y modelos explicativos derivados de los campos científicos y tecnológicos (Dimensión científico-tecnológica).</li>
                                                <li>Capacidad de aprender a aprender, capacidad emprendedora y de adaptarse a los requerimientos cambiantes del contexto a través de habilidades de pensamiento complejo (análisis, problematización, contextualización, investigación, discernimiento, decisión, innovación y liderazgo). (Dimensión cognitiva y emprendedora)</li>
                                                <li>Capacidad de asumir las propias responsabilidades bajo criterios de excelencia y pertinencia hacia la sociedad, y contribuyendo activamente en la identificación y solución de las problemáticas de la sustentabilidad social, económica, política y ambiental. (Dimensión de responsabilidad social y sustentabilidad)</li>
                                                <li>Capacidad de afrontar las disyuntivas y dilemas propios de su inserción en el mundo social y productivo, ya sea como ciudadano y/o como profesionista, a través de la aplicación de criterios, normas y principios ético-valorales. (Dimensión ético-valoral)</li>
                                                <li>Capacidad de comprender el mundo que lo rodea e insertarse en él bajo una perspectiva cultural propia y al mismo tiempo tolerante y abierta a la comprensión de otras perspectivas y culturas. (Dimensión internacional e intercultural)</li>
                                                <li>Capacidad de comunicar sus ideas en forma oral y escrita, tanto en español como en inglés, así como a través de las más modernas tecnologías de información. (Dimensión de comunicación e información)</li>
                                                <li>Capacidad de cuidar el propio cuerpo y mantener la salud en sus esferas psicológica, biológica y social, con una perspectiva de corto, mediano y largo plazo, mediante estrategias preventivas específicas (dimensión de cuidado de la salud y la integridad física)</li>
                                                <li>Capacidad de percibir y disfrutar, y en su caso, de expresar y producir creativamente, diferentes manifestaciones artísticas y culturales que le permitan potenciar sus sentidos, comprender su contexto actual y enriquecer su visión del mundo y de la vida (dimensión de sensibilidad y apreciación estética)</li>
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
                        <p>El desarrollo del curso estará basado en exposición oral de conceptos y definiciones, estudios de caso con base en las lecturas asignadas y ejemplos reales. Análisis de artículos con el fin de promover el pensamiento crítico. Asociación de conocimientos teóricos con visitas de campo. La práctica de campo incluirá la demostración y medición de aspectos eco-hidrológicos de cuencas, implicaciones del uso del suelo y degradación en procesos hidrológicos. Las prácticas de gabinete tendrán un fuerte componente de análisis y modelación espacial. Se presentará un trabajo final, y será un trabajo que integre los conocimientos adquiridos durante el semestre. El trabajo consistirá en una cuenca (ya sea del interés de cada estudiante o asignada por el docente) que incluya su caracterización, diagnóstico en términos eco-hidrológicos y proposición de medidas de manejo.
                        <br>
                        <br>A continuación, se describe la planeación general del proceso de aprendizaje:</p>
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
                                        <td>Descripción de las cuencas</td>
                                        <td id="contTablaIzq"> Que el alumno conozca los principios básicos para la caracterización de cuencas hidrográficas
                                        </td>
                                        <td id="contTablaIzq">Presentación por parte del profesor, conducción de discusiones sobre los siguientes temas:
                                            <ul class="vineta">
                                                <li>Introducción. Definición de hidrología y ciencias auxiliares.</li>
                                                <li>El ciclo hidrológico</li>
                                                <li>Importancia del recurso agua y la situación actual de los recursos hídricos</li>
                                                <li>Características de las cuencas (morfometría, topoformas y red de drenaje) y su diagnóstico: sistema natural - geomorfología, topografía, clima, suelo, vegetación y fauna; sistema socio-económico)</li>
                                                <li>Antecedentes del manejo de cuencas</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Factores abióticos, bióticos y sociales</td>
                                        <td id="contTablaIzq">Que el alumno comprenda y analice las interacciones entre los componentes biótico y abiótico de los ecosistemas en las cuencas hidrológicas y a la vez, cómo los aspectos sociales y económicos influyen sobre la estructura natural de las cuencas
                                        </td>
                                        <td id="contTablaIzq">Presentación por parte del profesor, conducción de discusiones con base en lectura de artículos sobre los siguientes temas:
                                            <ul class="vineta">
                                                <li>Factores que regulan los procesos hidrológicos en las cuencas (precipitación, evaporación y transpiración, infiltración, escorrentía), vegetación (ecosistemas de las cuencas hidrológicas), suelo, clima</li>
                                                <li>Balance hídrico y caudal ecológico, humedales, zonas ribereñas, cuerpos de agua.</li>
                                                <li>Perturbaciones y riesgos (sequía, erosión de suelo, cambio de uso del suelo, incendios en la vegetación natural).
                                                </li>
                                            </ul>
                                            <br>Se realizarán prácticas sobre delimitación manual y automatizada de cuencas y caracterización de la sequía.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Principios de ecohidrología</td>
                                        <td id="contTablaIzq">
                                        Que el alumno conozca y aplique los principios de la ecohidrología para mejorar el entendimiento de las interacciones vegetación-procesos hidrológicos y proponer alternativas de manejo de cuencas a nivel de paisaje.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>El manejo del suelo y la vegetación en cuencas hidrológicas: utilidad de la ecohidrología y la ecología del paisaje</li>
                                                <li>La ecohidrología en ambientes rurales y urbanos
                                                </li>
                                            </ul>
                                            <br>Se realizarán prácticas contenidas en el módulo e-learning titulado ECOHYDROLOGY. Las prácticas incluyen caracterización del paisaje y sus implicaciones en el ciclo hidrológico. Práctica de campo para la caracterización de respuestas ecohidrológicas.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Manejo integral de cuencas</td>
                                        <td id="contTablaIzq">
                                        Que el alumno sea capaz de identificar y categorizar la problemática del uso del agua y manejo de las cuencas, en especial cuando existe competencia entre diferentes tipos de usuarios
                                        </td>
                                        <td id="contTablaIzq">Presentación por parte del profesor, conducción de discusiones sobre los siguientes temas:
                                            <ul class="vineta">
                                                <li>Los usuarios, actividades económicas y agencias gubernamentales y no gubernamentales involucrados en los conflictos por los recursos hídricos (a nivel nacional e internacional)</li>
                                                <li>Fases del manejo integral de cuencas y sistemas de toma de decisiones aplicables al manejo de cuencas</li>
                                                <li>El ordenamiento ecológico territorial de cuencas
                                                </li>
                                            </ul>
                                            <br>Se desarrollará una práctica de aptitud territorial en ambiente SIG.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Posibles soluciones en el manejo de cuencas</td>
                                        <td id="contTablaIzq">
                                        Capacidad analítica para proponer soluciones de carácter multidisciplinario para la prevención de problemas en el manejo de cuencas
                                        </td>
                                        <td id="contTablaIzq">Presentaciones por parte de alumnos, conducción de discusiones de los siguientes temas:
                                            <ul class="vineta">
                                                <li>La identificación y clasificación de los principales problemas en el manejo de cuencas</li>
                                                <li>Enfoques integrados de planificación, participación, sensibilización, desarrollo de capacidades, etc.</li>
                                                <li>Evaluación y comparación de soluciones en relación con aspectos económicos, sociales y culturales.
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
                                        <th scope="col">Momento de evaluación</th>
                                        <th scope="col">Método de evaluación y valor para la</th>
                                        <th scope="col">Ponderación para evaluación final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Semanal (Unidades 1-5)</td>
                                        <td>Control de lecturas de artículos</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>Quincenal (Unidades 1-5)</td>
                                        <td>Informes de prácticas </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>Único (Unidad 5) </td>
                                        <td>Exposiciones</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>Único </td>
                                        <td>Trabajo final </td>
                                        <td>30%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>TOTAL</td>
                                        <td>100%</td>
                                    </tr>

                                    <tr>
                                        <td colspan="3">Notas:
                                            <ul class="vineta">
                                                <li>Trabajo final o El trabajo final consistirá en caracterizar y realizar el diagnóstico de una cuenca o subcuenca. 
                                                    <ul class="vineta">
                                                        <li>El trabajo deberá reflejar los aspectos cubiertos durante el curso. El tema se elige al inicio del semestre y se trabaja en el a lo largo del curso.</li>
                                                    </ul>
                                                </li>
                                                <li>Control de lecturas de artículos. Se asignan lecturas de artículos de manera semanal y se discuten en el grupo al inicio de cada sesión. Se entrega un reporte breve de una cuartilla que incluya los objetivos del artículo, los métodos empleados y los resultados obtenidos, además de una breve crítica al artículo.</li>
                                                <li>Reportes de prácticas. Deben incluir una breve introducción, una síntesis de la metodología y resultados, discusión y conclusiones.</li>
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
                <ul>
                    <li>Aguilar Robledo, M., Delgado López, E., Vázquez Solís, V., & Reyes Pérez, O. (Eds.). (2011). Ordenamiento Territorial y Participación Social: problemas y posibilidades. México, D. F.: Centro de Investigaciones en Geografía Amnbiental (CIGA), UNAM, INE-SEMARNAT.</li>
                    <li>Anta Fonseca, S., Arreola Muñoz, A. V., González Ortiz, M. A., & Acosta González, J. (Eds.). (2006). Ordenamiento Territorial Comunitario. Mexico: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología, Instituto para el Desarrollo Sustentable en Mesoamérica, A.C., Grupo Autónomo para la Investigación Ambiental, A.C., Grupo de Estudios Ambientales, A.C., Methodus Consultora, S.C., Servicios Alternativos para la Educación y el Desarrollo, A.C.</li>
                    <li>Aparicio, F. (1992). Fundamentos de Hidrología de Superficie. México, D. F.: Limusa.</li>
                    <li>Breña Puyol, A., & Jacobo Villa, M. (2006). Principios y Fundamentos de la Hidrología Superficial. México, D. F.: Universidad Autónoma Metropolitana.</li>
                    <li>Brooks, K. N., Ffolliott, P. F., & Magner, J. A. (2013). Hydrology and the Management of Watersheds. Iowa, USA: John Wiley & Sons, Inc.</li>
                    <li>Chang, M. (2006). Forest Hydrology: An Introduction to Water and Forests: Taylor and Francis, CRC Press.</li>
                    <li>CONAGUA. (2018). Estadísticas del Agua en México. Retrieved from <a href="https://www.gob.mx/conagua/acciones-y-programas/publicaciones-estadisticas-y-geograficas-60692">https://www.gob.mx/conagua/acciones-y-programas/publicaciones-estadisticas-y-geograficas-60692</a></li>
                    <li>Cotler, H. (Ed.) (2004). El Manejo Integral de Cuencas en México. Estudios y reflexiones para orientar la política ambiental. México, D. F.: Secretaría de Medio Ambiente y Recursos Naturales e Instituto Nacional de Ecología.</li>
                    <li>Cotler, H., & Caire, G. (Eds.). (2009). Lecciones Aprendidas del Manejo de Cuencas en México. México, D. F.: Instituto Nacional de Ecología.</li>
                    <li>D’Odorico, P., & Porporato, A. (Eds.). (2006). Dryland Ecohydrology. Dordrecht, The Netherlands: Springer.</li>
                    <li>Falkenmark, M., & Rockström, J. (2004). Balancing Water for Humans and Nature. The New Approach in Ecohydrology. Sterling, VA, USA: EARTHSCAN.</li>
                    <li>Ferrier, R. C., & Jenkins, A. (2010). Handbook of Catchment Management (R. C. Ferrier & A. Jenkins Eds.): Wiley-Blackwell.</li>
                    <li>Flores Garnica, J. (Ed.) (2009). Impacto Ambiental de los Incendios Forestales. México, D. F.: Mundi Prensa México.</li>
                    <li>Gergel, S. E., & Turner, M. G. (Eds.). (2002). Learning Landscape Ecology. A Practical Guide of Concepts and Techniques. New York, USA: Springer.</li>
                    <li>Gregersen, H. M., Ffolliott, P. F., & Brooks, K. N. (2007). Integrated Watershed Management: Connecting People to their Land and Water: CAB International.</li>
                    <li>Harper, D., Zalewski, M., & Pacini, N. E. (Eds.). (2008). Ecohydrology. Processes, models and case studies. Cambridge, MA. USA.: CABI.</li>
                    <li>Lim, W. H., & Roderick, M. L. (2009). An Atlas of the Global Water Cycle. Canberra, Australia: Australian National University.</li>
                    <li>Mendoza, M., Plascencia, H., C., A. P., Rosete, F., & Bocco, G. (2010). Análisis de la aptitud territorial. Una perspectiva biofísica: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología, Universidad Nacional Autónoma de México.</li>
                    <li>Morgan, R. P. C. (2005). Soil Erosion and Conservation. Malden, MA, USA: Blackwell Science Ltd.</li>
                    <li>Palacio-Prieto, J. L., Sánchez-Salazar, M. T., Casado Izquierdo, J. M., Propin Frejomil, E., Delgado Campos, J., Velásquez Montes, A., . . . Márquez Huitzil, R. (2004). Indicadores para la caracterización y ordenamiento del territorio. Mexico: SEMARNAT-INE-UNAM.</li>
                    <li>Salinas Escobar, M. E. (Ed.) (2008). El ordenamiento territorial: experiencias internacionales. México: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología, Centro Universitario de Ciencias Sociales y Humanidades de la Universidad de Guadalajara.</li>
                    <li>Toledo, A. (2006). Capítulo 1 (Agua), 2 (Hombre) y 3 (Paisaje). In Agua, Hombre y Paisaje (pp. 21-199). México, D. F.: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología.</li>
                    <li>TRAGSA-TRAGSATEC. (1994). Restauración Hidrológico Forestal de Cuencas y Control de la Erosión. Madrid: Mundi-Prensa Libros.</li>
                    <li>Wanielista, M., Kersten, R., & Eaglin, R. (1997). Hydrology Water Quantity and Control. U. S. A.: John Wiley & Sons Inc.</li>
                    <li>Wilhite, D. A. (2005). Drought and Water Crises. Science, Technology, and Management Issues. Sound Parkway NW, USA: CRC Press.                        
                    </li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li>INEGI <br><a href="http://www.inegi.org.mx/">http://www.inegi.org.mx/</a></li>
                    <li>Soil and Water Assessment Tool<br><a href="http://swat.tamu.edu/">http://swat.tamu.edu/</a></li>
                    <li>Banco nacional de datos de aguas superficiales (BANDAS) <br><a href="http://www.conagua.gob.mx/CONAGUA07/Contenido/Documentos/Portada%20BANDAS.htm">http://www.conagua.gob.mx/CONAGUA07/Contenido/Documentos/Portada%20BANDAS.htm</a></li>
                    <li>Simulador de Flujos de Agua de Cuencas Hidrográficas<br><a href="http://antares.inegi.org.mx/analisis/red_hidro/siatl/">http://antares.inegi.org.mx/analisis/red_hidro/siatl/</a></li>
                    <li>Estadísticas del agua en México<br><a href=">https://www.gob.mx/conagua/acciones-y-programas/publicaciones-estadisticas-y-geograficas-60692">https://www.gob.mx/conagua/acciones-y-programas/publicaciones-estadisticas-y-geograficas-60692</a></li>
                    <li>Datos globales de precipitación<br><a href="https://pmm.nasa.gov/data-access/downloads/trmm">https://pmm.nasa.gov/data-access/downloads/trmm</a></li>
                    <li>Datos globales de elevación digital<br><a href="https://www2.jpl.nasa.gov/srtm/">https://www2.jpl.nasa.gov/srtm/</a></li>
                    <li>Datos globales de vegetación<br><a href="http://glcf.umd.edu/data/landsat/">http://glcf.umd.edu/data/landsat/</a></li>
                    <li>Datos globales de temperatura<br><a href="https://modis.gsfc.nasa.gov/data/dataprod/dataproducts.php?MOD_NUMBER=11">https://modis.gsfc.nasa.gov/data/dataprod/dataproducts.php?MOD_NUMBER=11</a></li>
                    <li>North American Drought Monitor<br><a href="https://www.ncdc.noaa.gov/temp-and-precip/drought/nadm/">https://www.ncdc.noaa.gov/temp-and-precip/drought/nadm/</a></li>
                    <li>Monitor de sequía en México<br><a href="http://smn.cna.gob.mx/es/climatologia/monitor-de-sequia/monitor-de-sequia-en-mexico">http://smn.cna.gob.mx/es/climatologia/monitor-de-sequia/monitor-de-sequia-en-mexico</a></li>
                    <li>Erosión de suelo usando RUSLE<br><a href="http://www.iwr.msu.edu/rusle/">http://www.iwr.msu.edu/rusle/</a></li>
                    </li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>• No existen prerrequisitos para cursar esta asignatura.
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>
                    <br>• No aplica 
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
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. Carlos Alfonso Muñoz Robles
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
