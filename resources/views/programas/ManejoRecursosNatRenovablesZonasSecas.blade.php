@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>MANEJO DE RECURSOS NATURALES RENOVABLES EN ZONAS SECAS</strong></h1>
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
                                        <td>Optativo para Maestría y Doctorado</td>
                                        <td>Curso teórico-práctico</td>
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
                <p>Al finalizar el curso el estudiante podrá contribuir en identificar limitaciones y potencialidades para la sustentabilidad y resiliencia de los sistemas de aprovechamiento de zonas secas, a partir de analizar los determinantes ecológicos y socioeconómicos en el uso múltiple de los recursos naturales renovables en esas zonas.
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
                                        <td id="contTabla"><strong>Capacidad de análisis de datos e información</strong></td>

                                        <td>Conocer la distribución y características ecológicas y biológicas generales de las zonas secas.
                                        <br>Comprender los determinantes ecológicos y socioeconómicos de la multifuncionalidad de las zonas secas.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>nteracción con el medio físico y social</strong> </td>

                                        <td>Comprender en sentido amplio las diferentes formas de aprovechamiento de los recursos naturales renovables y las problemáticas ambientales relacionadas. Entender al conocimiento tradicional como resultado de la interacción multidimensional con la naturaleza. 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Razonamiento crítico</strong>
                                        </td>

                                        <td>Analizar las estrategias de adaptación y resiliencia de los pobladores locales y los cambios en los patrones de aprovechamiento de recursos naturales renovables.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Trabajo multidisciplinario</strong>
                                        </td>

                                        <td>Generar propuestas de manejo de los recursos naturales renovables.</td>
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
                                        <td>Bases conceptuales</td>
                                        <td id="contTablaIzq"> Conocer el ambiente físico y biótico de las zonas secas. Analizar teorías y conceptos de manejo de recursos naturales.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Exposiciones orales de estudiantes</li>
                                                <li>Análisis crítico de lecturas</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Diversidad y uso diversificado de los recursos</td>
                                        <td id="contTablaIzq">
                                        Comprender los elementos ecológicos y socioeconómicos que determinan la escasez y abundancia de recursos naturales, así como el uso diversificado.
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>Exposiciones orales del profesor</li>
                                                    <li>Exposiciones orales de estudiantes</li>
                                                    <li>Análisis crítico de lecturas
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Sistemas tradicionales de aprovechamiento</td>
                                        <td id="contTablaIzq">
                                        Analizar los sistemas vigentes de aprovechamiento de recursos naturales en ambientes rurales de zonas secas.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Exposiciones orales de estudiantes</li>
                                                <li>Análisis crítico de lecturas</li>
                                                <li>Salida a campo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Persistencia y cambio de patrones de aprovechamiento de los recursos naturales renovables</td>
                                        <td id="contTablaIzq">
                                        Analizar las estrategias de adaptación y resiliencia de los sistemas de aprovechamiento de RNR.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Presentaciones de los estudiantes</li>
                                                <li>Salida a campo
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
                                        <td>Al término de la Unidad 2</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Informes escritos</li>
                                                <li>Presentación oral del estudiante</li>
                                            </ul>
                                        </td>
                                        <td>30</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al término de la unidad 3</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Informes escritos</li>
                                                <li>Presentación oral del estudiante</li>
                                            </ul>
                                        </td>
                                        <td>30</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al término de la unidad 4</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Informes escritos</li>
                                                <li>Presentación oral del estudiante</li>
                                            </ul>
                                        </td>
                                        <td>40</td>
                                    </tr>

                                    <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td>100</td>
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
                    <li>Aguirre R. J. R. 2012. Reconversión de ejidos del Altiplano potosino para su desarrollo persistente. Universitarios Potosinos 155:16-19.</li>
                    <li>Castillo B M T.; Martínez M M.; Viga de Alva M D. 2019. Natural resources knowledge socialization in Yucatan, Mexico: promoting a mutually beneficial society-nature relationship. Ecology and Society 24(3): 1-21</li>
                    <li>Ceballos G.; Martínez L.; García A.; Espinoza E.; Bezaury C. J.; Dirzo R. (Eds). 2010. Diversidad, amenazas y áreas prioritarias para la conservación de las selvas secas del Pacífico de México. Comisión Nacional de Áreas Naturales Protegidas/Fondo de Cultura Económica, México. 594 pp.</li>
                    <li>Cervantes R. M. 2003. Plantas de Importancia Económica en las Zonas Áridas y Semiáridas de México. Temas Selectos de Geografía de México I. Instituto de Geografía, UNAM.153 pp.</li>
                    <li>Charcas S. H.; Aguirre R. J. R.; Reyes A. J. A.; Durán G. H. M. 2009. Runoff agriculture in the highlands of San Luis Potosí State, Mexico. Interciencia 35(10): 716-722.</li>
                    <li>Fortanelli M. J.; Loza l. J. G.; Carlín C. F.; Aguirre R. J. R. 2010. Jardines en el desierto: agricultura de riego, tradicional y moderna en el altiplano potosino. Instituto de Investigación de Zonas Desérticas, Universidad Autónoma de San Luis Potosí y Consejo potosino de Ciencia y Tecnología, Gobierno del Estado de San Luis Potosí. San Luis Potosí, SLP. 191 pp.</li>
                    <li>García-Licona J B.; Maldonado-Torres R.; Moreno-Calles A I.; Álvarez-Sánchez M E.; García-Chávez J.; Casas A. 2017. Ethnoagroforestry management and soil fertility in the semiarid Tehuacan Valley, Mexico. Ethnobiology and Conservation 6(5): 1-16</li>
                    <li>Hoogesteeger V. M.; Casas A.; Moreno-Calles A I. 2017. Semiarid ethnoagroforestry management: Tajos in the Sierra Gorda, Guanajuato, Mexico. Journal of Ethnobiology and Ethnomedicine 13(34): 1-11</li>
                    <li>Mellink E and Riojas L M. 2020. Livestock and grassland interrelationship along five centuries of ranching the semiarid grasslands on the southern highlands of the Mexican Plateau. Elementa Science of the Anthropocene 8(20) 1-20</li>
                    <li>Monroy S S.; García F E.; Mora F.; Skutsch M.; Casas A.; Gerritsen P R W.; Cohen S D.; Ugartechea S O. 2020. Unraveling households nature resource management strategies: a case study in Jalisco, Mexico. Ecosystems and People 16(1): 175-187</li>
                    <li>Padilla-Bernal L E.; Lara-Herrera A.; Vélez-Rodríguez A.; Loureiro M L. 2017. Views on sustainability and the willingness to adopt an environmental management systems in the Mexican vegetable sector. International Food and Agribusiness Management Review 21(3): 423-436</li>
                    <li>Perez-Aguilar L Y.; Plata-Rocga W.; Monjardin-Armenta S A.; Franco-Ochoa C.; Zambrano-Medina Y G. 2021. The identification and classification of arid lands zones through multicriteria evaluation and geographic information systems – case study: arid lands regions of Northwest Mexico. International Journal of Geo-Information 10(720) 1-17</li>
                    <li>Ramírez- Bravo O E. and Hernández-Santin L. 2016. Plant diversity along a disturbance gradient in a semi-arid ecosystem in Central Mexico. Acta Botanica Mexicana 117:11-25</li>
                    <li>Riojas L M E.; Mellink E., Luévano J. 2018. A semiarid fruit agroecosystems as a conservation-friendly option for small mammals in an anthropized landscape in Mexico. Ecological Applications 28(2): 495-507</li>
                    <li>Rist S. and Dahdouh-Guebas F. 2006. Ethnosciences-A step towards the integration of scientific and indigenous forms of knowledge in the management of natural resources for the future. Environment, development and Sustainability 8:467-493</li>
                    <li>Romero-Bautista Y. A.; Moreno-Calles A I.; Alvarado-Ramos F.; Reyes-Castillo M.; Casas A. 2020. Environmental interactions between people and birds in semiarid lands of the Zapotitlan Valley, Central Mexico. Journal of Ethnobiology and Ethnomedicine 16(32): 1-14</li>
                    <li>Rzedowski J. 2005. Vegetación de México. 1ra Edición digital, Comisión Nacional para el Conocimiento y Uso de la Biodiversidad, México. 504 pp.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>CONAGUA (2022), “Monitor de sequia en México (MSM)”. Recuperado de <a href="https://smn.conagua.gob.mx/es/climatologia/monitor-de-sequia/monitor-de-sequia-en-mexico">https://smn.conagua.gob.mx/es/climatologia/monitor-de-sequia/monitor-de-sequia-en-mexico</a></li>
                    <li>CONAZA (2022), “Lucha contra la desertificación y la sequía”. Recuperado de <a href="https://www.gob.mx/conaza/articulos/lucha-contra-la-desertificacion-y-la-sequia">https://www.gob.mx/conaza/articulos/lucha-contra-la-desertificacion-y-la-sequia.</a></li>
                    <li>FMCN, CONAFOR, USAID Y USFS (2018), “Manual para muestrear la vegetación en bosques, selvas, zonas áridas y semiáridas”, BIOCOMUNI – Monitoreo Comunitario de la Biodiversidad, una guía para núcleos agrarios, Comisión Nacional Forestal – Fondo Mexicano para la Conservación de la Naturaleza, México. Recuperado de <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/15770.pdf">https://bioteca.biodiversidad.gob.mx/janium/Documentos/15770.pdf</a></li>
                    <li>INEGI (2022), “Uso de suelo y vegetación”. Recuperado de <a href="https://www.inegi.org.mx/temas/usosuelo/">https://www.inegi.org.mx/temas/usosuelo/</a></li>
                    <li>Registro Agrario Nacional (2022). “Padrón e historial de núcleos agrarios”. Recuperado de <a href="https://phina.ran.gob.mx/index.php">https://phina.ran.gob.mx/index.php</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                <br>
                <br>N/A
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>N/A
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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: </li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: </li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> 
                    <br>
                    <strong> • Revisó:</strong> 
                </p>
            </div>
        </div>
    </div>
@endsection
