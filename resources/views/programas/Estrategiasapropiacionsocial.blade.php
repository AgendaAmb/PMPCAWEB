@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>ESTRATEGIAS PARA LA APROPIACIÓN SOCIAL DEL CONOCIMIENTO</strong></h1>
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
                                        <td>Obligatorio <br> Optativo</td>
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
                <p>Al concluir esta asignatura, el estudiante logrará comprender los fundamentos conceptuales y prácticos sobre comunicación de riesgos, educación ambiental y divulgación para el diseño de propuestas encaminadas a la apropiación social del conocimiento generado en el ámbito de las ciencias ambientales.
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
                                        <td id="contTabla">Profesional</td>

                                        <td>Capacidad de trabajo y liderazgo en equipos multidisciplinarios.
                                        <br>Conocimiento y compromiso para trabajar en proyectos enfocados en la apropiación social del conocimiento como parte de la cultura de la sociedad.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">transversal </td>

                                        <td>Capacidad de comunicación oral y escrita y manejo del lenguaje no verbal.
                                        <br>Poseer la formación académica en la resolución de problemas ambientales a diversas escalas espaciales.
                                        <br>Capacidad de desempeñarse profesionalmente de manera ética y responsable.    
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
                                        <td>Apropiación social de la ciencia</td>
                                        <td id="contTablaIzq"> Comprender el concepto de apropiación social de la ciencia, e identificar a la comunicación de riesgos como una estrategia de intervención que la favorece.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ol style="list-style-type: lower-alpha;">
                                                <li>Presentación de los temas por parte del profesorado</li>
                                                <li>Lectura y discusión de artículos relacionados con los temas.</li>
                                                <li>Desarrollo de mapas conceptuales de artículos para discusión</li>
                                                <li>Análisis de películas sobre temas relacionados con el curso.</li>
                                            </ol>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Educación y Comunicación Ambiental</td>
                                        <td id="contTablaIzq">Conocer a profundidad los enfoques de la educación ambiental y las modalidades a través de las cuales se puede poner en práctica. Identificar, comprender y analizar los procesos de contextualización, estructuración, programación y evaluación de un proyecto de educación y comunicaciónambiental.
                                        </td>
                                            <td id="contTablaIzq">
                                                <ol style="list-style-type:lower-alpha;">
                                                    <li>Presentación de los temas por parte del profesorado</li>
                                                    <li>Lectura y discusión de artículos relacionados con los temas.</li>
                                                    <li>Análisis de películas sobre temas relacionados con el curso.</li>
                                                    <li>Participación en dinámicas de aprendizaje activo.
                                                    </li>
                                                </ol>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Divulgación de las ciencias</td>
                                        <td id="contTablaIzq">
                                        Identificar los objetivos, alcances y los aspectos clave de la divulgación de las ciencias. 
                                        <br>Revisar los diversos formatos y canales para la divulgación de las ciencias. Elaboración de una propuesta y desarrollo de un producto de divulgación.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ol style="list-style-type:lower-alpha;">
                                                <li>Lecturas y discusiones grupales</li>
                                                <li>Presentación de temas tanto por parte del profesorado como del estudiantado</li>
                                                <li>Propuesta y desarrollo de un producto de divulgación
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
                                        <td>Al final de la unidad 1</td>
                                        <td>Examen de conocimientos (7 puntos) y desarrollo de mapas conceptuales y trabajos (3 puntos).</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al final de la Unidad 2</td>
                                        <td>Propuesta y desarrollo de una propuesta de educación ambiental bajo modalidad a elegir (7 puntos) Elaboración de controles de lectura (3 puntos).</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al final de la unidad 3</td>
                                        <td>Se empleará una rúbrica <br>Valor 10 puntos</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Durante el curso </td>
                                        <td>Exposición oral <br>Se evaluará con base en una rúbrica <br>Valor 10 puntos</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Durante el curso</td>
                                        <td>Participación en las discusiones grupales. <br>Se evaluará la calidad y frecuencia de la participación.</td>
                                        <td>20%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <h5> <strong>Textos básicos</strong></h5>
                <h5> Unidad 1. Apropiación social de la ciencia</h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Cubillas-Tejeda, A. C., & González-Mares, M. O. (2015). La comunicación de riesgos como estrategia de intervención para mejorar la salud ambiental en poblaciones vulnerables. In A. Mendieta, P. Testas (Ed.), ¿Legitimidad o reconocimiento? Las investigadoras del SIN: retos y propuestas (p.p.505-512). México, DF: Benemérita Universidad Autónoma de Puebla, Ediciones La Biblioteca.</li>
                    <li>Dávila-Rodríguez, L. P. (2020). Apropiación social del conocimiento científico y tecnológico. Un legado de sentidos. Trilogía Ciencia Tecnología Sociedad, 12(22), 127-147. <a href="https://doi.org/10.22A430/21457778.1522">https://doi.org/10.22A430/21457778.1522</a></li>
                    <li>Gonah L. (2020). Key Considerations for Successful Risk Communication and Community Engagement (RCCE) Programmes During COVID-19 Pandemic and Other Public Health Emergencies. Annals of Global Health. 86(1): 146, 1–3. DOI: <a href="https://doi.org/10.5334/aogh.3119">https://doi.org/10.5334/aogh.3119</a></li>
                    <li>Giraldo Gutiérrez F.L., Ortiz Clavijo L.F., Zuñiga-Miranda S. (2020). Políticas de Ciencia, Tecnología e Innovación en América Latina y el Caribe y su influencia en la producción y apropiación de la CTI. Linguagem & Ensino, Pelotas, 23(1), 292-316.</li>
                    <li>Moreno-Sánchez, A. R., Cubillas-Tejeda, A. C., Guerra-García, A., Peres, F. (2016). Risk communication in Latin America. In L. A. C. Galvao, J. Finkelman, and S. Henao (Ed.), Environmental and Social Determinants of Health (pp. 335-360). Pan American Health Organization. Washington, DC: PAHO.</li>
                    <li>Prüss-Ustün, A., Wolf, J., Corvalán, C., Bos, R., Neria, M. (2016). Preventing disease through healthy environments: a global assessment of the burden of disease from environmental risks. Geneva, Switzerland: WHO. <a href="http://apps.who.int/iris/bitstream/10665/204585/1/9789241565196_eng.pdf?ua=1">http://apps.who.int/iris/bitstream/10665/204585/1/9789241565196_eng.pdf?ua=1</a></li>
                    <li>Ramírez R.I., Villalobos J.V., Lay N.V., Herrera B.A. (2021). Medios de comunicación para la apropiación del conocimiento en instituciones educativas. Información Tecnológica. 32(1), 27-38. <a href="http://dx.doi.org/10.4067/S0718-07642021000100027">http://dx.doi.org/10.4067/S0718-07642021000100027</a></li>
                    <li>Rincón, C. E., Hermith, D. P., Bautista Molina, W. (2018). Innovación social y su importancia en la gestión del conocimiento y la participación ciudadana. Trilogía Ciencia Tecnología Sociedad, 10(18), 51-61.</li>
                    <li>Romaní F., Carreazo-Pariasca J., Aguilar-Madrid J, Espinoza-Herrera D. (2018). La divulgación científica en el campo de la salud pública. La experiencia del Instituto Nacional de Salud. Rev Peru Med Exp Salud Pública. 35(3), 515-22. doi: 10.17843/rpmesp.2018.353.3640.</li>
                    <li>Sánchez-Mora C., Macías-Nestor A. (2019) El papel de la comunicación pública de la ciencia en la cultura científica: acercamientos a su evaluación. Revista Eureka sobre Enseñanza y Divulgación de las Ciencias 16(1),1103. doi: 10.25267/Rev_Eureka_ensen_divulg_cienc, 2019.v16.i1.1103</li>
                </ul>
            </div>

            <hr>
            <h5> Unidad 2. Educación Ambiental para la sustentabilidad</h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Caride, José Antonio y Pablo Angel Meira (2000). La Educación Ambiental como Estrategia y Prácticas: Señas de Identidad y Perfiles Históricos. Capítulo 4 del libro: Educación Ambiental y Desarrollo Humano. España: Ariel Educación, pp.131-188. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/Caride-EADesHumCap4.zip">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/Caride-EADesHumCap4.zip</a></li>
                    <li>Caride, José Antonio y Pablo Angel Meira (2000). La Construcción Paradigmática de la Educación Ambiental: Educar para una Racionalidad Alternativa. Capítulo 5 de Educación Ambiental y Desarrollo Humano. España.: Ariel Educación, pp.189-248. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/Caride-EADesHumCap5.zip">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/Caride-EADesHumCap5.zip</a></li>
                    <li>Kollmuss Anja y Julian Agyeman (2002). “Mind the Gap: why do people act environmentally and what are the barriers to pro-environmental behavior?”. Environmental Education Research, Vol. 8, No.3, 2002.. UK: Taylor and Francis LTD, pp. 239-260. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/Kollmuss-GAPProEnvBehavior.zip">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/Kollmuss-GAPProEnvBehavior.zip</a></li>
                    <li>NAAEE (2009). Guía para elaborar programas de educación ambiental no formal 1. México: Semarnat, 40 p. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NAAEE-GuiaProgramas2009.zip">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NAAEE-GuiaProgramas2009.zip</a></li>
                    <li>NAAEE (2009). Guía para elaborar materiales de educación ambiental 2. . México: Semarnat, 32 p. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NAAEE-GuiaMateriales2009.zip">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NAAEE-GuiaMateriales2009.zip</a></li>
                    <li>Nieto Caraveo, Luz María y Mariana Buendía Oliva (2008). Guía para el Análisis de Contexto de un Proyecto de Educación Ambiental. Documento de Trabajo. México: Universidad Autónoma de San Luis Potosí, 31. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NietoyBuendia-GuiaContextualizacion.zip">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NietoyBuendia-GuiaContextualizacion.zip</a></li>
                    <li>Nieto Caraveo Luz María y Mariana Buendía Oliva (2008). Guía para la Estructuración y Programación de un Proyecto de Educación Ambiental y para la Sustentabilidad. Documento Interno del Diplomado en Diseño de Proyectos de Educación Ambiental. México: UASLP, Agenda Ambiental, 18 p. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NietoyBuendia-GuiaEstructuracion.zip">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NietoyBuendia-GuiaEstructuracion.zip</a></li>
                    <li>Nieto Caraveo Luz María y Mariana Buendía Oliva (2009). Guía para la Evaluación de Proyectos de Educación Ambiental y para la Sustentabilidad. Documento Interno del Diplomado en Diseño de Proyectos de Educación Ambiental. México: UASLP, Agenda Ambiental, 24 p. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NietoyBuendia-GuiaEvaluacion.zip">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/NietoyBuendia-GuiaEvaluacion.zip</a></li>
                    <li>Tilbury, Daniela (2011). ¿Cuáles son los procesos de aprendizaje comúnmente aceptados que se encuentran en armonía con la EDS?”. En: Tilbury, Daniela (2011). Educación para el Desarrollo Sostenible. Examen por los expertos de los procesos y el aprendizaje. París: UNESCO, 141. <a href="http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/UNESCO-EDSProcesosCasos.zip.">http://evirtual.uaslp.mx/Ambiental/EdAmb/Lecturas/UNESCO-EDSProcesosCasos.zip.</a></li>
                </ul>
            </div>

            <hr>
                <h5> Unidad 3. Divulgación de las ciencias</h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Biblioteca virtual universitaria-UASLP <a href="https://creativa.uaslp.mx/">https://creativa.uaslp.mx/</a></li>
                    <li>Bermúdez Mendizábal, G. (2016). Divulgación de las ciencias sociales. Inventia, 12(26). <a href="http://inventio.uaem.mx/index.php/inventio/article/view/150/296">http://inventio.uaem.mx/index.php/inventio/article/view/150/296</a></li>
                    <li>Bowler, P. J., & Morus, I. R. (2007). Panorama general de la ciencia moderna (2nd ed.). Crítica.</li>
                    <li>Cerejido Blank, F., & Cerejido, M. (2012). La vida, el tiempo y la muerte (7th ed.). La ciencia para todos. Fondo de Cultura Económica.</li>
                    <li>Cerejido, M. (2011). Ciencia sin seso. Locura doble (7th ed.). Siglo Veintiuno.</li>
                    <li>Erazo, M. de los A. (2007). Comunicación, divulgación y periodismo de la ciencia (1st ed.). Planeta, Ecuador. <a href="https://digitalrepository.unm.edu/abya_yala/33">https://digitalrepository.unm.edu/abya_yala/33</a></li>
                    <li>Fernández de la O, E. A. (2017). Estrategia de negocios para la industria de la divulgación científica en medios digitales.</li>
                    <li>Divulgación de la Ciencia. <a href="http://www.librosoa.unam.mx/handle/123456789/2121">http://www.librosoa.unam.mx/handle/123456789/2121</a></li>
                    <li>Kolberth, E. (2016). La sexta extinción. Una historia nada natural (1st ed.). Crítica.</li>
                    <li>Monsalve Múnera, M., & Marín Ochoa, B. E. (2014). La divulgación científica en la Web, un panorama latinoamericano. Comunicación, 31, 35–41.</li>
                    <li>Pacheco Muñoz, M. (2003). La divulgación de la ciencia en los tiempos de la posmodernidad. Ciencias, 71.</li>
                    <li>Sánchez Mora, A. M. (2010). Introducción a la comunicación escrita de la ciencia (1st ed.). Universidad Veracruzana.</li>
                    <li>Tonda Mazón, J. (1999). ¿Qué es la divulgación de las ciencias? Ciencias-UNAM, 55, 76–81. <a href="http://www.revistas.unam.mx/index.php/cns/article/view/11692">http://www.revistas.unam.mx/index.php/cns/article/view/11692</a></li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <h5> Unidad 1</h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Academia Nacional de Educación Ambiental: <a href="http://www.anea.org.mx/">http://www.anea.org.mx/</a></li>
                    <li>Agencia de Protección del Ambiente de Estados Unidos: <a href="https://www.epa.gov/">https://www.epa.gov/</a></li>
                    <li>Agencia de Substancias Tóxicas y Registro de Enfermedades (ATSDR): <a href="http://www.atsdr.cdc.gov/">http://www.atsdr.cdc.gov/</a></li>
                    <li>Centro de Control de Enfermedades de Estados Unidos: <a href="http://www.cdc.gov/">http://www.cdc.gov/</a></li>
                    <li>Consejo Nacional de Evaluación de la Política de Desarrollo Social: <a href="http://www.coneval.org.mx/Paginas/principal.aspx">http://www.coneval.org.mx/Paginas/principal.aspx</a></li>
                    <li>Consejo Nacional de Población: <a href="http://www.conapo.gob.mx/">http://www.conapo.gob.mx/</a></li>
                    <li>Instituto Nacional de Ecología y Cambio Climático: <a href="http://www.gob.mx/inecc">http://www.gob.mx/inecc</a></li>
                    <li>Instituto Nacional de Estadística y Geografía: <a href="http://www.inegi.org.mx/">http://www.inegi.org.mx/</a></li>
                    <li>Instituto Nacional de Salud Pública: <a href="http://www.insp.mx/">http://www.insp.mx/</a></li>
                    <li>Organización Mundial de la Salud: <a href="http://www.who.int/es/">http://www.who.int/es/</a></li>
                    <li>Organización Panamericana de la Salud: <a href="http://new.paho.org/">http://new.paho.org/</a></li>
                    <li>Salud ambiental: <a href="https://www.who.int/health-topics/environmental-health#tab=tab_1">https://www.who.int/health-topics/environmental-health#tab=tab_1</a></li>
                    <li>Salud ambiental infantil: <a href="https://www.who.int/health-topics/children-environmental-health#tab=tab_1">https://www.who.int/health-topics/children-environmental-health#tab=tab_1</a></li>
                    <li>Secretaria de Ecología y Gestión Ambiental de San Luis Potosí: <a href="https://slp.gob.mx/segam/Paginas/Inicio.aspx">https://slp.gob.mx/segam/Paginas/Inicio.aspx</a></li>
                    <li>Secretaria de Medio Ambiente y Recursos Naturales: <a href="http://www.semarnat.gob.mx/Pages/Inicio.aspx">http://www.semarnat.gob.mx/Pages/Inicio.aspx</a></li>
                    <li>Secretaria de Salud: <a href="http://www.gob.mx/salud">http://www.gob.mx/salud</a></li>
                    <li>Página de Peter Sandman de Comunicación de Riesgos: <a href="http://www.psandman.com/">http://www.psandman.com/</a></li>
                </ul>
            </div>

            <hr>
            <h5> Unidad 2</h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Academia Nacional de Educación Ambiental: <a href="http://www.anea.org.mx/">http://www.anea.org.mx/</a></li>
                    <li>Jandiekua Revista de educación ambiental <a href="https://leka.uaslp.mx/index.php/jandiekua/index">https://leka.uaslp.mx/index.php/jandiekua/index</a></li>
                    <li>Zona de medios de comunicación de los ODS <a href="https://www.un.org/sdgmediazone/">https://www.un.org/sdgmediazone/</a></li>
                    <li>Materiales de educación ambiental <a href="https://www.un.org/sustainabledevelopment/es/news/communications-material/">https://www.un.org/sustainabledevelopment/es/news/communications-material/</a></li>
                    <li>Revista electrónica de educación Pálido punto de luz <a href="http://palido.deluz.mx/">http://palido.deluz.mx/</a></li>
                </ul>
            </div>

            <hr>
            <h5> Unidad 3</h5>
                <div class="margen">
                <ul class="vineta">
                    <li>American Association for the Advancement of Science <a href="https://www.aaas.org/resources/communication-toolkit/what-public-engagement">https://www.aaas.org/resources/communication-toolkit/what-public-engagement</a></li>
                    <li>Ciencia UNAM <a href="http://ciencia.unam.mx/contenido/ciencia">http://ciencia.unam.mx/contenido/ciencia</a></li>
                    <li>Divulgación de la Ciencia-UNAM (DGDC) <a href="http://www.dgdc.unam.mx/">http://www.dgdc.unam.mx/</a></li>
                    <li>Divulgador.es <a href="http://www.divulgador.es/tag/asociacion-iberoamericana-de-periodismo-cientifico/">http://www.divulgador.es/tag/asociacion-iberoamericana-de-periodismo-cientifico/</a></li>
                    <li>MasScience <a href="https://www.masscience.com/">https://www.masscience.com/</a></li>
                    <li>Mujeres conciencia <a href="https://mujeresconciencia.com/">https://mujeresconciencia.com/</a></li>
                    <li>Popular Science <a href="https://www.popsci.com/">https://www.popsci.com/</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>
                    <strong>No aplica</strong>
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    <br><strong>No aplica</strong>
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Esta asignatura <strong>NO</strong> puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios.</li>
                    <li>Esta asignatura <strong>NO</strong> puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios.</li>
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
                <p> <strong> • Elaboró: </strong> Dra. Patricia Julio Miranda 
                <br>Dra. Ana Cubillas Tejeda 
                <br>Dra. Mariana Buendía Oliva
                    <br>
                    <strong> • Revisó:</strong> Profesorado de las áreas de Gestión Ambiental y Salud Ambiental Integrada.
                </p>
            </div>
        </div>
    </div>
@endsection
