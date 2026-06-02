@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>ECOTOXICOLOGÍA (TEÓRICO-PRÁCTICO)</strong></h1>
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
                                        <td>Teórico-práctico</td>
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
                                        <td>1</td>
                                        <td>6</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>1</td>
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
                <p>Al finalizar el curso, el estudiante será capaz de identificar las diferencias entre toxicología clásica y ecotoxicología, así como de analizar y sintetizar información técnica referente al tema. Contará con elementos técnicos-teóricos que le permitirán estimar la movilidad de los xenobióticos en los ecosistemas y su interacción con los receptores ecológicos, además de brindar una visión teórico-práctica del uso y aplicación de biomarcadores para el monitoreo, evaluación de impactos y riesgos ecológicos en diferentes escenarios como sitios contaminados, emergencias ambientales y ecosistemas protegidos.
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

                                        <td>
                                            <ul class="vineta">
                                                <li>El estudiante fortalecerá las competencias del aprendizaje al incrementar su conocimiento de la ecotoxicología, fomentar las actividades de búsqueda y sistematización de información y su relación con otras disciplinas; además, del uso de las tecnologías informáticas.</li>
                                                <li>El estudiante será capaz de realizar técnicas de determinación de biomarcadores considerando los criterios de calidad necesarios para la realización de estudios científicos. Asimismo, comprenderá el fundamente teórico-práctico de las técnicas de laboratorio para el manejo, obtención y preservación de muestras biológica.</li>
                                                <li>Dominio técnico básico (búsqueda especializada de información y equipo de laboratorio). El alumno tendrá acceso a equipo básico y avanzado de laboratorio el cual utilizará para la realización de las técnicas de determinación de laboratorio.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Transversal</strong></td>

                                        <td>Competencia de comunicación en inglés.
                                        <ul class="vineta">
                                            <li>El material que se emplea en el curso está en un 100% en idioma inglés. Además, se le estimula al estudiante a generar un resumen en este idioma.</li>
                                        </ul>
                                        <br>Competencia Cognitiva y Emprendedora.
                                        <ul class="vineta">
                                            <li>Se le estimulará al estudiante a buscar la máxima calidad posible manteniéndose actualizado mediante el autoaprendizaje, a fin de plantearse la posibilidad de generar iniciativas en sus proyectos de tesis.</li>
                                        </ul>   
                                        <br>Competencia ético-valoral.
                                        <ul class="vineta">
                                            <li>El alumno deberá adquirir conciencia de que los resultados obtenidos deberán estar basados en control de calidad para dar veracidad y confiabilidad a las conclusiones de sus proyectos.</li>
                                            <li>El alumno adquirirá conciencia del trato ético y humanitario de los organismos vivos, así como de las implicaciones éticas del manejo de los datos generados en los estudios científicos.</li>
                                        </ul>   
                                        <br>Comunicación escrita especializada.
                                        <ul class="vineta">
                                            <li>Elaboración de protocolo y reportes de investigación (reportes de prácticas)</li>
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
                                        <td>Introducción</td>
                                        <td id="contTablaIzq"> Brindar los conceptos, definiciones básicas y perspectiva histórica de la ecotoxicología.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Clases presenciales por parte del profesor con apoyo de material visual y/o audiovisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo.</li>
                                                <li>Identificación y recopilación de información a través de buscadores y bases de datos de temas relacionados.</li>
                                                <li>Revisión de artículos y reportes científicos.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Comportamiento ambiental de los contaminantes</td>
                                        <td id="contTablaIzq">Presentar los conocimientos básicos sobre el comportamiento ambiental de los contaminantes
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>Clases presenciales por parte del profesor con apoyo de material visual y/o audiovisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo.</li>
                                                    <li>Identificación y recopilación de información a través de buscadores y bases de datos de temas relacionados.</li>
                                                    <li>Revisión de artículos y reportes científicos.
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Exposición y bioacumulación</td>
                                        <td id="contTablaIzq">Presentar los conceptos básicos de la exposición a contaminantes en diferentes ambientes, así como, exponer de manera clara los factores asociados a la bioacumulación de los xenobióticos y los procesos de biotransformación y bioactivación.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Clases presenciales por parte del profesor con apoyo de material visual y/o audiovisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo.</li>
                                                <li>Identificación y recopilación de información a través de buscadores y bases de datos de temas relacionados.</li>
                                                <li>Revisión de artículos y reportes científicos.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Metales pesados</td>
                                        <td id="contTablaIzq">Presentar los fundamentos básicos de la exposición a metales pesados.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Clases presenciales por parte del profesor con apoyo de material visual y/o audiovisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo.</li>
                                                <li>Identificación y recopilación de información a través de buscadores y bases de datos de temas relacionados.</li>
                                                <li>Revisión de artículos y reportes científicos.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Plaguicidas</td>
                                        <td id="contTablaIzq">Presentar los fundamentos básicos de exposición y efectos a diferentes tipos de plaguicidas
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Clases presenciales por parte del profesor con apoyo de material visual y/o audiovisual, que describa y ejemplifique los conceptos analizados apoyándose en libros. Discusión de temas, investigación individual y en grupo.</li>
                                                <li>Identificación y recopilación de información a través de buscadores y bases de datos de temas relacionados.</li>
                                                <li>Revisión de artículos y reportes científicos.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Biomarcadores</td>
                                        <td id="contTablaIzq">Brindar los conceptos, definiciones básicas y perspectiva histórica del uso y aplicación de los biomarcadores.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Identificación y recopilación de información a través de buscadores y bases de datos de temas relacionados con la perspectiva histórica de los biomarcadores.
                                                    <ol style="list-style-type: lower-alpha;">
                                                        <li>Revisión de artículos y reportes científicos.</li>
                                                        <li>Elaboración de mapas conceptuales</li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Análisis y determinación de biomarcadores</td>
                                        <td id="contTablaIzq">Conocer el fundamento y principios técnicos de los biomarcadores más comúnmente utilizados en la evaluación ecotoxicológica, además de adquirir las habilidades técnicas para su realización en laboratorio.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Realización de prácticas de laboratorio para la determinación de peroxidación lipídica (técnica Malondialdehído-MDA-); determinación de desintoxicación de metales (técnica de metalotioneinas); biotransformación de xenobióticos (técnica actividad de GST) y determinación de fragmentación de ADN (técnica de ensayo cometa).</li>
                                                <li>Elaboración de protocolos y reportes de la práctica a realizar en el laboratorio.
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
                        <p>A continuación, se muestra las condiciones de las evaluaciones parciales.
                            <br>Se deberá cumplir con cada uno de los aspectos a evaluar para poder tener calificación aprobatoria.</p>
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
                                        <td>Al finalizar la unidad 6</td>
                                        <td>Ensayo de investigación</td>
                                        <td>30%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al finalizar cada práctica</td>
                                        <td>Protocolo y reporte de práctica (se entregara uno para cada práctica)</td>
                                        <td>70%</td>
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
                    <li>Basic Environmental Toxicology. Loris G. Cockerman and Barbara S. Shane. CRC Press, 1994</li>
                    <li>Organic Pollutants: An Ecotoxicological Perspective. C. H. Walker. Second edition. CRC Press. 2009.</li>
                    <li>Wildlife toxicology: emerging contaminant and biodiversity issues. Kendall. CRC Press. 2010</li>
                    <li>Fundamnetals of Aquatic Toxicology. Effects, environmental fate, and risk assessment. Gary M. Rand. Second Edition. CRC Press. 1995.</li>
                    <li>Gagné F. 2014. Biochemical Ecotoxicology Principles and Method. Academic Press. 257 p.</li>
                    <li>Amiard-Triquet C, Amiard J-C y Rainbow. P. S. 2013. Ecological Biomarkers: Indicators of Ecotoxicological Effects. CRC Press. 434 p.</li>
                    <li>Anthony P. DeCaprio.2006. Toxicologic biomarkers. 4ta. Edición. Taylor & Francis. 295p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li><a href="http://creativa.uaslp.mx/">http://creativa.uaslp.mx/</a> (Sistema de Bibliotecas de la UASLP)</li>
                    <li>Academic Search Complete (EBSCO)</li>
                    <li>Web of Science (Thomson Reuters)</li>
                    <li>Science Direct (Elsevier) <a href="http://www.sciencedirect.com/">(http://www.sciencedirect.com/)</a></li>
                    <li>SpringerLink (Springer) <a href="http://link.springer.com/">(http://link.springer.com/)</a></li>
                    <li>Wiley on line library <a href="http://onlinelibrary.wiley.com/">(http://onlinelibrary.wiley.com/)</a></li>
                    <li><a href="http://www.jstor.org/">http://www.jstor.org/</a></li>
                    <li><a href="http://www.scielo.org">http://www.scielo.org</a></li>
                    <li><a href="http://www.nature.com/">http://www.nature.com/</a></li>
                    <li><a href="http://www.plos.org/">http://www.plos.org/</a></li>
                    <li><a href="http://www.biomedcentral.com/">http://www.biomedcentral.com/</a></li>
                    <li><a href="http://www.scielo.org">http://www.scielo.org</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <br>• Ninguna
                </p>

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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 8</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Formación</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Iniciales</th>
                                        <th scope="col">Horas del curso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Donaji Josefina González Mille</td>
                                        <td>Bióloga. Doctora en Ciencias Ambientales</td>
                                        <td>444 8262300 ext 8464</td>
                                        <td>DJGM</td>
                                        <td>44</td>
                                    </tr>

                                    <tr>
                                        <td>José de Jesús Mejía Saavedra</td>
                                        <td>Biólogo. Doctor en Ciencias Biomédicas Básicas</td>
                                        <td>444 8262300 ext 8461</td>
                                        <td>JJMS </td>
                                        <td>20</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection
