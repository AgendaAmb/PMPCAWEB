@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>NATURALEZA Y SOCIEDAD. UNA INTRODUCCIÓN A LAS POSICIONES TEÓRICAS RECIENTES</strong></h1><br>
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
                                        <td>Optativo</td>
                                        <td>Curso</td>
                                        <td>Español e inglés</td>
                                        <td>Presencial</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><br>
                </div>

                <hr>

                <div class="col-12 col-sm-12 container"><br>
                    <div>
                        <h4><strong>Créditos</strong></h4><br>
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
                    </div><br>
                </div>
                <hr>
                <p></p>
                <h4> <strong>Objetivo general de aprendizaje</strong> </h4>
                <p style="text-align: justify;"><br>
                    Al concluir esta asignatura, los y las estudiantes lograrán conocer las propuestas teóricas actuales más importantes en torno a las relaciones sociedad-naturaleza desde las ciencias sociales y humanidades, lo cual permite identificar distinciones epistemológicas, ontológicas y sociales entre las disciplinas que participan en el PMPCA y con ello mostrar la heterogeneidad en concepciones existentes sobre el entorno biológico-social.<br>
                </p>
                <hr>
                <div class="col-12 col-sm-12 container"><br>
                    <div>
                        <h4><strong>Competencia profesionales a las que contribuye la asignatura</strong></h4>

                        <p><br>
                            Esta asignatura contribuye de manera directa al logro de las siguientes competencias
                            profesionales del perfil de egreso
                            del programa:
                        </p>
                        <div class="table-responsive" id="contTablaIzq">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos" style="text-align: center;">
                                        <th scope="col">Competencia</th>
                                        <th scope="col">Descripción de la competencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="contTabla"> <strong>Capacidad de aprender y actualizarse permanentemente</strong></td>

                                        <td>El/la estudiante identifica y analiza los problemas socio-ambientales que afectan el bien común desde una perspectiva social a través de las discusiones actuales sobre la relación naturaleza-sociedad, y podrá incorporar los nuevos hallazgos en el diseño de su protocolo de tesis y en sus futuros proyectos.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"> <strong>Compromiso ético</strong></td>

                                        <td>El/la estudiante participa y colobara con las personas, grupos y comunidades de acuerdo con sus problemas sociales y sin dañar a terceros, respetando sus visiones sobre el entorno biológico-social.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"> <strong>Capacidad de comunicación oral y escrita</strong></td>

                                        <td>El/la estudiante será capaz de exponer y argumentar sus ideas y propuestas académicas de manera verbal y escrita de acuerdo con el estilo de su área.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"> <strong>Compromiso con la preservación del medio ambiente</strong></td>

                                        <td>El/la estudiante integrará en el diseño de sus proyectos de investigación una visión que procura conservar el medio ambiente en el que se tomarán en cuenta las ontologías y concepciones locales sobre el entorno.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><br>
                </div>
                <hr>
                <div class="col-12 col-sm-12 container"><br>
                    <div>
                        <h4><strong>Planeación didáctica general</strong></h4>
                        <p><br>A continuación, se describe la planeación general del proceso de aprendizaje:</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">No.</th>
                                        <th scope="col">Nombre de la unidad <br> o fase</th>
                                        <th scope="col">Resultados de aprendizaje específicos</th>
                                        <th scope="col">Metodologías y actividades de enseñanza - aprendizaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Las discusiones inciales: evolucionismo, materialismo histórica latinoamericano, la ecología cultural, el neodarwinismo
                                        </td>
                                        <td id="contTablaIzq">Conocer el devenir histórico del pensamiento científico sobre las relaciones sociedad-naturaleza, en particular desde las ciencias sociales
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>El análisis de las lecturas obligatorias, vía la elaboración de mapas conceptuales
                                                </li>
                                                <li>Preparación de una sesión de clase por parte de los alumnos con el apoyo del profesor
                                                </li>
                                                <li>La presentación individual y posterior discusión y reflexión colectiva, en forma oral y escrita, sobre la relación entre la experiencia e intereses de los participantes y los conceptos planteados por los materiales de lectura
                                                </li>
                                                <li>Diseño y evaluación por parte de los alumnos de actividades diversas (individuales y en equipo) sobre los temas del curso: análisis de casos concretos, debates, juegos, dinámicas de grupos de discusión de defensa y de crítica
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Las discusiones actuales en la antropología ambiental: la antropología ecológica, ecología simbólica, etnoecología, ecología política, la complejidad, lo híbrido</td>
                                        <td id="contTablaIzq">
                                            Examinar críticamente propuestas clásicas del siglo XX en torno a esta relación, así como distintas escuelas que de manera vanguardista, en este siglo XXI, han tratado este fenómeno
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>El análisis de las lecturas obligatorias, vía la elaboración de mapas conceptuales
                                                </li>
                                                <li>Preparación de una sesión de clase por parte de los alumnos con el apoyo del profesor
                                                </li>
                                                <li>La presentación individual y posterior discusión y reflexión colectiva, en forma oral y escrita, sobre la relación entre la experiencia e intereses de los participantes y los conceptos planteados por los materiales de lectura
                                                </li>
                                                <li>Diseño y evaluación por parte de los alumnos de actividades diversas (individuales y en equipo) sobre los temas del curso: análisis de casos concretos, debates, juegos, dinámicas de grupos de discusión de defensa y de crítica
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div><br>
                </div>

                <hr>
                <div class="col-12 col-sm-12 container"><br>
                    <div>
                        <h4><strong>Evaluación</strong></h4>
                        <p align="justify">Conforme a la normatividad universitaria del posgrado, así como la del plan de estudios del posgrado, el curso se acreditará con una calificación mínima de 7.0, siempre y cuando se cumpla con el requisito de tener un mínimo de 90% de asistencia. Tres retrasos equivalen a una inasistencia.</p>
                        <p>A continuación, se muestra las condiciones de las evaluaciones parciales.</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">No. <br> parcial</th>
                                        <th scope="col">Momento de evaluación</th>
                                        <th scope="col">Método de evaluación y valor para la evaluacion parcial</th>
                                        <th scope="col">Ponderación para evaluación final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1 y 2</td>
                                        <td>En cada sesión de clases</td>
                                        <td>Participación activa en las actividades individuales y en equipo, y en las discusiones grupales</td><br>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>1 y 2</td>
                                        <td>En dos ocasiones</td>
                                        <td>Presentaciones verbales de los autores a discutir y diseño de una actividad de aprendizaje</td>
                                        <td>40%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Una sola vez, al final del curso</td>
                                        <td>Trabajo escrito final sobre algún tema relacionado con el curso (de 10-15 cuartillas, uso de al menos 10 fuentes especializadas)</td>
                                        <td>40%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><br>
                </div>

                <hr>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <h5><strong><br>Textos básicos</strong></h5><br>

                <div class="col-12 col-sm-12 container">
                    <ul>
                        <li>Adams, Richard N. (2007 [1978]). <i>La red de la expansión humana</i>. México, CIESAS/UAM/UIA, Clásicos y contemporáneos en Antropología.
                        </li><br>
                        <li>Bateson, Gregory (1972). <i>Pasos hacia una ecología de la mente. Una aproximación revolucionaria a la autocomprensión del hombre</i>. Buenos Aires, Ediciones Lohlé-Lumen.
                        </li><br>
                        <li>Berlin, Brent (1973). “Folk systematics in relation to biological classification and nomenclature”, <i>Annual Review of Ecology & Systematics</i> 4, p.259-271.
                        </li><br>
                        <li>Conklin, Harold (2008 [1954]). “An ethnoecological approach to shifting agriculture“, en Michael R. Dove & Carol Carpenter (eds.), <i>Environmental anthropology. A historical reader.</i> Blackwell publishing, pp.241-248.
                        </li><br>
                        <li>Darwin, Charles (1921[1857]), “Recapitulación y conclusión”, capítulo XV en Ch. Darwin, <i>El origen de las especies por medio de la selección natural.</i> Madrid, Calpe. Disponible en: <a id="titulosCyan" href="http://www.cervantesvirtual.com/servlet/SirveObras/13559620212026495222202/index.htm" target="_blank">http://www.cervantesvirtual.com/servlet/SirveObras/13559620212026495222202/index.htm</a></li><br>
                        <li>Descola, Philippe (2003 [2001]). <i>Antropología de la naturaleza</i>, Lima, Instituto Francés de Estudios Andinos, Lluvia editores.</li><br>
                        <li>Ellen, Roy (2001). “La geometría cognitiva de la naturaleza. Un enfoque contextual”, en Descola, P y G. Pálsson (coords.), <i>Naturaleza y Sociedad. Perspectivas antropológicas</i>, México, Siglo XXI, Pp. 124-146.</li><br>
                        <li>Escobar, Arturo (2000). “El lugar de la naturaleza y la naturaleza del lugar: ¿globalización o postdesarrollo?”, en Edgardo Lander (comp.), <i>La colonialidad del saber: eurocentrismo y ciencias sociales. Perspectivas latinoamericanas</i>. Buenos Aires, Clacso, 113-143. Disponible en: <a id="titulosCyan" href="http://bibliotecavirtual.clacso.org.ar/ar/libros/lander/lander.html" target="_blank">http://bibliotecavirtual.clacso.org.ar/ar/libros/lander/lander.html</a></li><br>
                        <li>Haraway, Donna (2008). <i>When species meet</i>. Minneapolis, University of Minnesota Press.</li><br>
                        <li>Ingold, Tim (2006). “Rethinking the animate, re-animating thought”, <i>Ethnos: Journal of Anthropology</i> 71 (1): 9-20.</li><br>
                        <li>Leff, Enrique (2006). “La ecología política en América Latina. Un campo en construcción”, en Héctor Alimondo (ed.), <i>Los tormentos de la materia. Aportes para una ecología política latinoamericana</i>. Buenos Aires, Clacso, Pp. 21-39.</li><br>
                        <li>Morin, Edgar. “La inteligencia ciega”, “El diseño y el designio complejos”, en Morin Edgar, Introducción al pensamiento complejo, México DF, Gedisa, 1996, pp. 27-84.</li><br>
                        <li>Palerm, Ángel (1989 [1972]). “Potencial ecológico y desarrollo en Mesoamércia”, en <i>Agricultura y civilización en Mesoamérica</i>. México, SepSetentas, pp. 153-210.</li><br>
                        <li>Palerm, Ángel (1972). <i>Agricultura y sociedad en Mesoamérica</i>. México, Secretaría de Educación Pública.</li><br>
                        <li>Rappaport, Roy (1968). <i>Pigs for the Ancestors</i>. New Haven: Yale University Press.</li><br>
                        <li>Rappaport, Roy (2008 [1967]). “Ritual regulation of environmental relations among the New Guinea people”, <i>Ethnology</i> 6 (1): 17-30.</li><br>
                        <li>Sahlins, Marshall “Evolución, específica y general”, en P. Bohannan y M. Glazer, <i>Antropología: lecturas</i>, pp. 370-389. Madrid: McGraw-Hill.</li><br>
                        <li>Sahlins, Marshall (1998 [1976]). “Le pensée burgoise”, en <i>Cultura y Razón práctica. Contra el utilitarismo en la teoría antropológica</i>. México, Gedisa, pp. 166-202.</li><br>
                        <li>Steward, Julian. Materialismo cultural: Ecología cultural, en M Harris, <i>El desarrollo de la Teoría Antropológica, una historia de las teorías de la cultura</i>, México DF, Siglo XXI, 1999, pp. 567-594.</li><br>
                        <li>Steward, Julian (1955). “El concepto y el método de la ecología cultural”, <i>Theory of culture changes</i>. Urbana, University of Illinois Press.</li><br>
                        <li>Toledo, Víctor (2013). “El paradigma biocultural: crisis ecológica, modernidad y culturas tradicionales”, <i>Sociedad y Ambiente</i> 1 (1): 50-60.</li><br>
                        <li>Ulloa, Astrid (2017). “Cuidado y defensa de los territorios-naturalezas: Mujeres indígenas y soberanía alimentaria en Colombia”, en Rauchecker M. & Chan J. (Eds.), <i>Sustentabilidad desde abajo: Luchas desde el género y la etnicidad.</i> Argentina: CLACSO, pp. 123-142. <a id="titulosCyan" href="https://doi.org/10.2307/j.ctvtxw2fp.8" target="_blank">DOI:10.2307/j.ctvtxw2fp.8</a></li><br>
                        <li>Viveiros de Castro, Eduardo (1998). “Cosmological deixis and Amerindian perspectivism”, <i>The Journal of the Royal Anthropological Institute</i> 4(3): 469-488.</li><br>
                        <li>Wilson, Edward O. (1982). “¿Qué es la sociobiología?” Teorema: <i>Revista internacional de filosofía</i> 12(3), pp.237-250.</li><br>
                        <li>Wolf, Eric (1982). <i>Europe and the people without history</i>. Berkeley, University of California Press.</li><br>
                        <li>Wittfogel, Karl, 1955. “Aspectos del desarrollo de las sociedades hidráulicas” en J.H. Steward (ed), <i>Las civilizaciones antiguas del Viejo Mundo y de América</i>. Unión Panamericana, pp.1-13.</li><br>
                    </ul>
                </div>

                <h5><strong>Recursos digitales</strong></h5>

                <div>
                    <ul>
                        <li>Video. <i>Evolución vs Dios: por qué la teoría de Darwin fue revolucionaria</i> | BBC Mundo.<br> Disponible en: <a id="titulosCyan" href="https://www.youtube.com/watch?v=qd1YehNpbV4">https://www.youtube.com/watch?v=qd1YehNpbV4</a></li><br>
                    </ul>    
                </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <div>Para poder cursar esta asignatura, es necesario:
                    <ul>
                        <li>Ninguno</li>
                    </ul>    
                </div>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <div>Esta asignatura es compartida con los siguientes programas de posgrado:
                    <ul>
                        <li>Ninguno</li>
                    </ul>    
                </div>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul>
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong> <br></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div>
                <ul>
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 14</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 5</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong>Elaboró: </strong>Anuschka van ´t Hooft
                    <br>
                    <strong>Revisó: </strong>Área de Gestión Ambiental<br><br>
                </p>
                <div class="row m-0 text-center align-items-center justify-content-center">
                    <div class="col-auto">
                        <a  class="btn btn-primary rounded-pill" id="botonesGeneral" href="https://uaslpedu-my.sharepoint.com/:b:/g/personal/pmpca_uaslp_mx/IQDPjPxM_lONTo54Q5FORZUlAc-3-BoMGXqWuFYxnaFRIsE?e=2uB3o2" target="_blank" role="button" download="Optativa_NaturalezaySociedad.pdf">Descargar programa</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
