@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>PROBLEMÁTICA Y GESTIÓN AMBIENTAL</strong></h1>
                </div>
                <p></p><p></p>
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
                                        <td>Obligatorio</td>
                                        <td>Curso</td>
                                        <td>Español</td>
                                        <td>Mixta</td>
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
                                        <td>1</td>
                                        <td>&nbsp;</td>
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
                <p>Reflexionar sobre la problemática ambiental actual, sus implicaciones y posibles soluciones desde la gestión ambiental.</p>
                <hr>
                <h4> <strong>Objetivos específicos</strong> </h4>
                <div>Que el estudiante:<br>
                    <ul>
                        <li>Comprenda como la problemática y la gestión ambiental son socialmente construidas, enteder la naturaleza social de los problemas ambientales.</li>
                        <li>Analice las causas y consecuencias de la crisis ambiental global, su dinámica temporal y espacial, sus dimensiones y manifestaciones en diferentes escalas y socioecosistemas.</li>
                        <li>Indague sobre las bases para la gestión de la problemática ambiental.</li>
                        <li>Revisar el estatus de los procesos en la biosfera para los que es necesario definir límites planetarios.</li>
                        <li>Revisar las bases normativas, políticas públicas y la gobernanza en el ámbito de la gestión ambiental en México.</li>
                        <li>Analizar el proceso de la gestión ambiental en relación a la contaminación ambiental, el sistema agroalimentario, los tecnoensambles y la reducción del riesgo de desastres.</li>
                    </ul>
                </div>
                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Competencia profesionales a las que contribuye la asignatura</strong></h4>
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
                                        <td id="contTabla"> <strong>Competencia(s) profesional(es) que contribuye a desarrollar la materia</strong></td>

                                        <td>Diseñar y aplicar sistemas de gestión ambiental estratégica, con base en una aproximación basada en la realidad compleja, la teoría general de sistemas, en forma multidisciplinaria, para la gestión del riesgo, considerando: los peligros, exposición y amenazas provocadas por la crisis ambiental global.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Desempeño de la competencia profesional a los que contribuye la materia</strong></td>

                                        <td>
                                            <ul>
                                                <li>Caracterizar las diferentes amenazas ambientales a la salud humana, de los ecosistemas y de la biosfera en general.</li>
                                                <li>Evaluar el estado actual de los servicios ambientales incluyendo todas las dimensiones de la sostenibilidad (física, biológica, ecológica, económica y sociocultural), en forma transescalar o funcional.</li>
                                                <li>Diseñar sistemas de gestión ambiental del riesgo.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Comptencia(s) transversal(es) a las que contribuye a desarrollar la materia</strong>
                                        </td>

                                        <td>La Ético-valoral; la comunicativa y de información internacional e intercultural; la de sensibilidad, la de cuidado de la salud; la de responsabilidad social y ambiental; y la científico tecnológica.</td>
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
                                        <td>Introducción a la problemática y la gestión ambiental.</td>
                                        <td id="contTablaIzq"> Que el estudiantado:
                                            <ul>
                                                <li>Comprenda como la problemática y la gestión ambiental, son socialmente construidos, entender la natural social de los problemas ambientales.</li>
                                                <li>Analice las causas y consecuencias de la crisis ambiental global, su dinámica temporal y espacial, sus dimensiones y manifestaciones en diferentes escalas y socioecosistemas.</li>
                                                <li>Indague sobre las bases para la gestión de la problemática ambiental.</li>
                                            </ul>
                                        </td>
                                        <td id="contTablaIzq">
                                            <p>Métodos de enseñanza y prácticas:</p>
                                            <ul>
                                                <li>
                                                    En un ambiente de discusión incluyente, los conceptos que aportan las lecturas permitirán construir estructuras de pensamiento para articular los conocimientos previos con las experiencias individuales del estudiantado en relación a la problemática de sus países y regiones de origen.
                                                </li>
                                            </ul>
                                            <p>Actividades de aprendizaje:</p>
                                            <ul>
                                                <li>
                                                    Lecturas previas a cada sesión.
                                                </li>
                                                <li>
                                                    Discusión, análisis ý síntesis durante las sesiones presenciales.
                                                </li>
                                                <li>
                                                    Presentaciones orales por parte del estudiantado.
                                                </li>
                                                <li>
                                                    Examen escrito.
                                                </li>
                                                <li>
                                                    Ensayo.
                                                </li>
                                            </ul>
                                        </td>

                                    <tr>
                                        <td>2</td>
                                        <td>Problemática ambiental.</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Revisar el estatus de los procesos en la biosfera para los que es necesario definir límites planetarios.</li>
                                            </ul>
                                        </td>
                                            <td id="contTablaIzq">
                                                <p>Métodos de enseñanza y prácticas:</p>
                                                <ul>
                                                    <li>En un ambiente de discusión incluyente, los conceptos que aportan las lecturas permitirán construir estructuras de pensamiento para articular los conocimientos previos con las experiencias individuales del estudiantado en relación a la problemática de sus páises y regiones de origen.</li>
                                                </ul>
                                                <p>Actividades de aprendizaje:</p>
                                                <ul>
                                                    <li>Lecturas previas a cada sesión.</li>
                                                    <li>Discusión, análisis y síntesis durante las sesiones presenciales.</li>
                                                    <li>Presentaciones orales por parte del estudiantado.</li>
                                                    <li>Examen escrito</li>
                                                    <li>Ensayo</li>
                                                </ul>
                                            </td>
                                    <tr>
                                        <td>3</td>
                                        <td>Gestión ambiental</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Revisar las bases normativas, políticas públicas y la gobernanza en el ámbito de la gestión ambiental en México.</li>
                                                <li>Analizar el proceso de la gestión ambiental en relación a la contaminación ambiental, el sistema agroalimentario, los tecnoensambles y la reducción del riesgo de desastres.</li>
                                            </ul>
                                        </td>
                                        <td id="contTablaIzq">
                                            <p>Métodos de enseñanza y prácticas:</p>
                                            <ul>
                                                <li>En un ambiente de discusión incluyente, los conceptos que aportan las lecturas permitirán construir estructuras de pensamiento para articular los conocimientos previos con las experiencias individuales del estudiantado en relación a la problemática de sus países y regiones de origen.</li>
                                            </ul>
                                            <p>Actividades de aprendizaje:</p>
                                            <ul>
                                                <li>Lecturas previas a cada sesión.</li>
                                                <li>Discusión, análisis y síntesis durante las sesiones presenciales.</li>
                                                <li>Presentaciones orales por parte del estudiantado.</li>
                                                <li>Examen escrito</li>
                                                <li>Ensayo</li>
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
                                        <th scope="col">Método de evaluación y valor para la evaluación parcial</th>
                                        <th scope="col">Ponderación para evaluación final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="4">1</td>
                                        <td rowspan="4">Semestral</td>
                                        <td>Examen</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>Exposición oral</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>Ensayo</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>Participación en clase</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" align="left">Total</td>
                                        <td>100%</td>
                                    </tr>
                                </tbody>
                            </table>
                         </div>
                         <p></p>
                            <p><b>Notas:</b> Conforme a la normatividad universitaria del posgrado, así como la del plan de estudios del PMPCA, el curso se acreditará con una calificación mínima de 7.0, siempre y cuando se cumpla con el requisito de tener un mínimo de 90% de asistemcia.</p>
                            <p>Cabe señalar que, para tener derecho a la calificación final, se deberán realizar todas las actividades de aprendizaje descritas en la sección anterior.</p>
                    </div>
                </div>

                <hr>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <p></p>
                <h5> <strong>Textos básicos por temas y sesión:</strong></h5>
                <div class="margen">

                <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Tema</th>
                                        <th scope="col">Sesión</th>
                                        <th scope="col">Texto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.1</td>
                                        <td>1</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Calvo Luz María y Baudoin Andrea (2020). “Resumen: Gestión Ambiental en Bolivia”. Bolivia debate: 8 temas que todo periodista debe conocer. Material producido para el Programa: 8 PROPONEN.</li>
                                                <li>Del Fávero Gabriel, Katz Ricardo, Capítulo 8. “Gestión Ambiental: ¿Cómo avanzar?”. Libro ¿Qué hacer ahora? Harald Beyer B. y Rodrigo Vergara M. (Pp. 263-306) <a href="www.cepchile.cl" target="_blank">www.cepchile.cl</a></li>
                                                <li>Massolo Laura (2015). Introducción a las herramientas de Gestión Ambiental. Libros de Cátedra. Editorial de la Universidad de La Plata, Argentina. Facultad de Ciencias Exactas. Universidad Nacional de la Plata.</li>
                                                <li>Ministerio de Medio Ambiente. Gobierno de Brasil. (2018). Brasil reafirma su protagonismo en la Gestión Ambiental. 8vo Foro Mundial del Agua. (pp.1-24).</li>
                                                <li>Muriel F. Rafael Darío y Echeverry Bryan. (2006). Gestión Ambiental. Academia. Ide@Sostenible. Año 3. No. 13. Pp. 1-8. Número de Registro B-30620-2003.</li>
                                                <li>ONU. Declaración de Rio sobre el Medio Ambiente y el Desarrollo. Conferencia de las Naciones Unidas sobre el Medio Ambiente y el Desarrollo. Rio de Janeiro, del 3 al 14 de junio de 1992.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>1.2</td>
                                        <td>2</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Opazo, G. Mario Omar. Gestión ambiental. Red de Desarrollo Sostenible Comunidad Gestión Ambiental. Pontificia Universidad Javeriana, Bogotá. Colombia. <a href="http://www.rds.org.co">http://www.rds.org.co</a>.</li>
                                                <li>Sistema Nacional de Gestión Ambiental de Perú. <a href="https://www.youtube.com/watch?v=b24PNJ_E6IA">https://www.youtube.com/watch?v=b24PNJ_E6IA</a></li>
                                                <li>Gestión Ambiental en Honduras. <a href="https://www.youtube.com/watch?v=ZktHcTykynU">https://www.youtube.com/watch?v=ZktHcTykynU</a></li>
                                                <li>Gestión Ambiental local (Chile). <a href="https://educacion.mma.gob.cl/gestion-local/gestion-ambiental/">https://educacion.mma.gob.cl/gestion-local/gestion-ambiental/</a></li>
                                                <li>Gestión Ambiental local (Chile). <a href="https://educacion.mma.gob.cl/gestion-local/gestion-ambiental/">https://educacion.mma.gob.cl/gestion-local/gestion-ambiental/</a></li>
                                                <li>Gestión Ambiental local (Chile). <a href="https://educacion.mma.gob.cl/gestion-local/gestion-ambiental/">https://educacion.mma.gob.cl/gestion-local/gestion-ambiental/</a></li>
                                                <li>Gestión Ambiental en México <a href="https://www.youtube.com/watch?v=h6bHd2wN28M">https://www.youtube.com/watch?v=h6bHd2wN28M</a></li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2.1</td>
                                        <td>3</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Rockström, J. et. al (2009) A safe operating space for humanity’ Nature. NATURE, Vol 461, 24 September 2009.</li>
                                                <li>Monckton, L. (2009). Open letter to chairman pachauri science and Pyblic Policy Institute.</li>
                                                <li>Oreskes, N. (2004). The Scientific Consensus on Climate Change: How Do We Know We’re Not Wrong?</li>
                                                <li>Parmesan, C., Duarte, C., Poloczanska, E., Richardson A., and Singer, M.(2011). Overstretching_attribution. Nature Climate Change, Vol 1, April 2011.</li>
                                                <li>Roger A. Pielke et al, (2011). Dealing with Complexity and Extreme Events Using a Bottom-up, Resource-based Vulnerability Perspective.</li>
                                                <li>Nils Chr. Stenseth*, Kjetil Lysne Voje (2009). Easter Island: climate change might have contributed to past cultural and societal changes. Climate Research Clim Res. Vol. 39: 111–114.</li>
                                                <li>Anthes, R., (1984). Enhansement of Convective Precipitation by Mesoscale Variations in Vegetative Covering in Semiarid Regions. National Center for Atmospheric Research.</li>
                                                <li>Priscila Pereira-Coltri, Nelson Jesus Ferreira, Saulo Freitas and Valdemar Antonio Demetrio. (2008). Changes In Land Cover and Use Affect The Local And Regional Climate In Piracicaba, Brazil. Journal of Urban and Environmental Engineering, v.2, n.2, p.68-74.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.2</td>
                                        <td>4</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>SEMARNAT (2007). ¿Y el Medio Ambiente? Problemas en México y el mundo. ISBN: 978-968-817-877-5.</li>
                                                <li>FAO. 2021.Evaluación de los recursos forestales mundiales 2020 - Informe principal. Roma. <a href="https://doi.org/10.4060/ca9825es" target="_blank">https://doi.org/10.4060/ca9825es</a></li>
                                                <li>Carretero-Peña, A. 2018. Aspectos ambientales. Identificación y evaluación. AENORediciones. 275 páginas.</li>
                                                <li>Jon M. Conrad and Daniel Rondeau. 2020. Natural resources economics. Analysis, theory and applications. Cambridge University Press.</li>

                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.3</td>
                                        <td>5</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>SEMARNAT (2007). ¿Y el Medio Ambiente? Problemas en México y el mundo. ISBN: 978-968-817-877-5.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.4</td>
                                        <td>6</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>CONABIO. (2008). Capital Natural de México, vol 1: Conocimiento actual de la biodiversidad. México: Comisión Nacional para el Conocimiento y Uso de la Biodiversidad.</li>
                                                <li>Gonzalez, M., & T. V. (2011). Metabolismos, Naturaleza e Historia, Hacia una Teoría de las Transformaciones Socioecologicas. Barcelona: Icaria Editorial, S.A.</li>
                                                <li>Wilbanks-Sustainable development in geographic perspective-1994</li>
                                                <li>Vitousek, P.M., P.R. Ehrlich, A.H. Ehrlich, P.A. Matson. (1986). Human Appropriation of the Products of Photosynthesis. BioScience , 36 (6), 368-373.</li>
                                                <li>Vitousek, P.M., H.A. Mooney, J. Lubchenco, J.M. Melillo. (1997). Human Domination of Earth’s Ecosystems . Science , 277, 494-499.</li>
                                                <li>Rojstacer, S., S.M. Sterling, N.J. Moore. (2001). Human Appropiation of Photosynthesis Products. Science , 294, 2549-2552.FAO (2997) State of the World's Forests 2007. Roma: FAO, 144p</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.5</td>
                                        <td>7</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Magdoff, F., Bellamy Foster, J., & Buttel, F. H. (Edits.). (2000). Hungry for Profit: The Agribusiness. Threat to Farmers, Food, and the Environment. New York, NY: Monthly Review Press.</li>
                                                <li>Brown, L. R. (May de 2009). Could Food Shortages Bring Down Civilization? Scientific American, INC., 50-57.</li>
                                                <li>Magdoff, F., & Tokar, B. (Edits.). (2010). Agriculture and Food in Crisis: Conflict, Resistance, and Renewal. New York: Monthly Review Press.</li>
                                                <li>Mata García, B., & García Mateos, M. R. (Edits.). (2010). Agricultura, Ciencia y Sociedad Rural: 1810-2010 (Primera ed.). Texcoco, México: Universidad Autónoma Chapingo.</li>
                                                <li>Boege Schmidt, E. (2008). El patrimonio biocultural de los pueblos indígenas de México. México: Instituto Nacional de Antropología e Historia: Comisión Nacional para el Desarrollo de los Pueblos Indígenas.</li>
                                                <li>Turrent Fernández, A., Wise, T. A., & Garvey, E. (2012). Factibilidad de Alcanzar el Potencial Productivo de Maíz de México (Vol. Mexican Rural Development Research Report No 24). Woodrow Wilson International Center for Scholars</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.6</td>
                                        <td>8</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Alley WM, Evenson EJ, Barber NL, Bruce BW, Dennehy KF, Freeman MC, Freeman WO, Fischer JM, HughesWB, Kennen JG, Kiang JE, Maloney KO, Musgrove Mary Lynn, Ralston Barbara, Tessler Steven, Verdin JP (2013) Progress toward establishing a national assessment of water availability and use: U.S. Geological Survey Circular 1384.</li>
                                                <li>Gonzalez, M., & Toledo, V. (2011). Metabolismos, Naturaleza e Historia, Hacia una Teoría de las Transformaciones Socio ecológicas. Barcelona: Icaria Editorial, S.A.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.1</td>
                                        <td>9</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Opazo, G. Mario Omar. Gestión ambiental. Red de Desarrollo Sostenible Comunidad Gestión Ambiental. Pontificia Universidad Javeriana, Bogotá. Colombia. <a href="http://www.rds.org.co" target="_blank">http://www.rds.org.co</a>.</li>
                                                <li>Sistema Nacional de Gestión Ambiental de Perú. <a href="https://www.youtube.com/watch?v=b24PNJ_E6IA">https://www.youtube.com/watch?v=b24PNJ_E6IA</a></li>
                                                <li>Gestión Ambiental en Honduras. <a href="https://www.youtube.com/watch?v=ZktHcTykynU">https://www.youtube.com/watch?v=ZktHcTykynU</a></li>
                                                <li>Gestión Ambiental local (Chile). <a href="https://educacion.mma.gob.cl/gestion-local/gestion-ambiental/">https://educacion.mma.gob.cl/gestion-local/gestion-ambiental/</a></li>
                                                <li>Gestión Ambiental en México. <a href="https://www.youtube.com/watch?v=h6bHd2wN28M">https://www.youtube.com/watch?v=h6bHd2wN28M</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.2</td>
                                        <td>10</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>IPCC, 2014: Summary for policymakers. In: Climate Change 2014: Impacts, Adaptation, and Vulnerability. Part A: Global and Sectoral Aspects. Contribution of Working Group II to the Fifth Assessment Report of the Intergovernmental Panel on Climate Change [Field, C.B., V.R. Barros, D.J. Dokken, K.J. Mach, M.D. Mastrandrea, T.E. Bilir, M. Chatterjee, K.L. Ebi, Y.O. Estrada, R.C. Genova, B. Girma, E.S. Kissel, A.N. Levy, S. MacCracken, P.R. Mastrandrea, and L.L. White (eds.)]. Cambridge University Press, Cambridge, United Kingdom and New York, NY, USA, pp. 1-32.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.3</td>
                                        <td>11</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>SEMARNAT (2007). ¿Y el Medio Ambiente? Problemas en México y el mundo. ISBN: 978-968-817-877-5.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.4</td>
                                        <td>12</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Magdoff, F., Bellamy Foster, J., & Buttel, F. H. (Edits.). (2000). Hungry for Profit: The Agribusiness Threat to Farmers, Food, and the Environment. New York, NY: Monthly Review Press.</li>
                                                <li>Brown, L. R. (May de 2009). Could Food Shortages Bring Down Civilization? Scientific American, INC., 50-57.</li>
                                                <li>Magdoff, F., & Tokar, B. (Edits.). (2010). Agriculture and Food in Crisis: Conflict, Resistance, and Renewal. New York: Monthly Review Press.</li>
                                                <li>Mata García, B., & García Mateos, M. R. (Edits.). (2010). Agricultura, Ciencia y Sociedad Rural: 1810-2010 (Primera ed.). Texcoco, México: Universidad Autónoma Chapingo.</li>
                                                <li>Boege Schmidt, E. (2008). El patrimonio biocultural de los pueblos indígenas de México. México: Instituto Nacional de Antropología e Historia: Comisión Nacional para el Desarrollo de los Pueblos Indígenas.</li>
                                                <li>Turrent Fernández, A., Wise, T. A., & Garvey, E. (2012). Factibilidad de Alcanzar el Potencial Productivo de Maíz de México (Vol. Mexican Rural Development Research Report No 24). Woodrow Wilson International Center for Scholars.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.5</td>
                                        <td>13</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>Robert U. Ayres, Udo E. Simonis. (1994). Introduction. In U. E. Robert U. Ayres, Industrial Metabolism: Restructuring for Sustainable Development (pp. 3-6). Tokyo, Japan: United Nations University Press, The United Nations University</li>
                                                <li>Ayres, R. U. (1994). 1. Industrial metabolism: Theory and policy. In R. U. Ayres, & U. E. Simonis, Industrial Metabolism: Restructuring for Sustainable Development (pp. 8-22). Tokyo, Japan: United Nations University Press, The United Nations University.</li>
                                                <li>Judt, T. (2010). Algo va mal. (B. Urrutia, Trad.) México, D.F., México: Santillana Ediciones Generales, S.L.</li>
                                                <li>Leff, E. (2008). Decrecimiento o desconstrucción de la economía:Hacia un mundo sustentable. Polis, Revista Académica Universidad Bolivariana , 7 . (M. E. Merino, Ed.) Santiago, Chile: EDITORIAL DE LA UNIVERSIDAD BOLIVARIANA DE CHILE.</li>
                                                <li>Robert Costanza, Ralph d’Arge, Rudolf de Groot, Stephen Farberk, Monica Grasso, Bruce Hannon, Karin Limburg, Shahid Naeem, Robert V. O’Neill, Jose Paruelo, Robert G. Raskin, Paul Suttonkk, Marjan van den Belt. (1997). The value of the world’s ecosystem services and natural capital. NATURE, 387, 253- 260.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.6</td>
                                        <td>14</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>SEGURIDAD-CNCP-CENAPRED. (2018). CENAPRED. Recuperado el 2021, de Infografía. Desastres en México Documento PDF 439.01: <a href="https://studylib.es/doc/7132416/infograf%C3%ADa-desastres-en-m%C3%A9xico-documento-pdf-439.01" target="_blank">https://studylib.es/doc/7132416/infograf%C3%ADa-desastres-en-m%C3%A9xico-documento-pdf-439.01</a></li>
                                                <li> Sistema Nacional De Protección Civil, Coordinación Nacional De Protección Civil, Centro Nacional de Prevención De Desastres. (2012). Características e Impacto Socioeconómico de los Principales Desastres Ocurridos en la República Mexicana en el Año 2011. México, D.F.</li>
                                                <li>UNISDR. (2015). Marco de Sendai para la Reducción del Riesgo de Desastres 2015-2030. ONU.</li>
                                                <li>Hackett, S. B. & Moxnes, E. Natural capital in integrated assessment models of climate change. Ecol. Econ. 116, 354–361 (2015).</li>
                                                <li>Bulearca, Marius; Popescu, Catalin; Sima, C.; Ghiga, C., Neagu, C.. (2011). Models for natural resources management. WSEAS Transactions on Business and Economics. 8. 50-65.</li>
                                                <li>National Research Council. (2012). A National Strategy for Advancing Climate Modeling.</li>
                                                <li>Committee on a National Strategy for Advancing Climate Modeling; Board. Washington, DC, United States of America: THE NATIONAL ACADEMIES PRESS.</li>
                                                <li>Sokal, R.R., & Rohlf, F.J. (2012). Biometry: The principle and practice of statistics en biological research (Fourth ed.). New York, NY, USA: W.H. Freeman and Company</li>
                                                <li>Thenkabail, P. S. (Ed.). (2016). Remotely Sensed Data Characterization</li>
                                                <li>Classification, and Accuracies (Vol. I). New York, NY: CRC Press, Taylor & Francis Group.</li>}<li>Thenkabail, P. S. (Ed.). (2016). Land Resources Monitoring, Modeling, and Mapping with Remote Sensing (Vol. II). New York, NY: CRC Press, Taylor & Francis Group.</li>
                                                <li>Thenkabail, P. S. (Ed.). (2016). Remote Sensing of Water Resources, Disasters, and Urban Studies (Vol. III). New York, NY: CRC Press, Taylor & Francis Group.</li>
                                                <li>Liu, J. G., & M. P. (2016). Image Processing and GIS for Remote Sensing, Techniques and Applications. Hoboken , NJ, USA: John Wiley & Sons, Ltd.</li>
                                                <li>Lavender, S., & L. A. (2016). Practical Handbook of Remote Sensing. New York, USA: CRC Press, Taylor & Francis Group.</li>
                                                <li>Wang, G., & W. Q. (2014). Remote Sensing of Natural Resources. New York, NY, USA: CRC Press, Taylor & Francis Group.</li>
                                                <li>Eamus, D., H. A., & Y. Q. (2016). Vegetation Dynamics: A Synthesis of Plant Ecophysiology, Remote Sensing and Modelling. New York, NY, USA: Cambridge University Press.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                </div>
                <p></p><p></p>
                <h5> <strong>Complementarias</strong></h5>
                <ul>
                    <li>Coraggio, J. L. (2002). La Economía Social como vía para otro desarrollo social. Retrieved enero 20, 2011, from Documento de lanzamiento del debate sobre "Distintas propuestas de economía social" en UrbaRed, Red de Poíiticas Sociales: <a href="http://www.coraggioeconomia.org/jlc/archivos%20para%20descargar/La%20Economia%20Social%
20como%20alternativa%20estructural%204.pdf" target="_blank">http://www.coraggioeconomia.org/jlc/archivos%20para%20descargar/La%20Economia%20Social%
20como%20alternativa%20estructural%204.pdf</a></li>
                    <li>Toledo, A. (1998). Economía de la Biodiversidad (Vol. Serie textos básicos de formación ambiental No 2). México D.F., México: Programa de las Naciones Unidas para el Medio Ambiente, Oficina Regional para la América Latina y el Caribe.UNEP (2005).</li>
                    <li>Coraggio, J. L. (1994). Territorios en transición. Crítica a la Planificación Regional en América Latina. Retrieved enero 20, 2011, from Coraggio Economía: <a href="http://www.coraggioeconomia.org/jlc/archivos%20para%20descargar/ECONOMIA%20URBANA%2
0LIBRO/TerritoriosenTransicin_JLC.DOC.pdf" target="_blank">http://www.coraggioeconomia.org/jlc/archivos%20para%20descargar/ECONOMIA%20URBANA%2
0LIBRO/TerritoriosenTransicin_JLC.DOC.pdf</a>.</li>
                    <li>Coraggio, J. L. (2000, marzo 15-17). La Relevancia del Desarrollo Regional. Retrieved enero 20, 2011, from Ponencia presentada al Seminario Taller Internacional: “Cultura y desarrollo: la perspectiva regional/local”, organizado por el Instituto Andino de Artes Populares del Convenio. Andrés Bello (IADAP), Quito: <a href="http://www.coraggioeconomia.org/jlc/archivos%20para%20descargar/Culura%20y%20region%202000%28rev%29.pdf" target="_blank">http://www.coraggioeconomia.org/jlc/archivos%20para%20descargar/Culura%20y%20region%202000%28rev%29.pdf</a>.</li>
                    <li>Lira-Cossio, L. (2009). Nuevos paradigmas de planificación territorial en América Latina. En Á. Massiris-Cabeza, Geografía y territorio. Procesos territoriales y socioespaciales. Aproximación desde Iberoamérica (págs. 121-140). Tunja-Boyacá, Colombia: Grupo Imprenta y Publicacion.</li>
                    <li>Irina Ize Lema, M. Z. (2010). Conceptos básicos del análisis de riesgos ambientales. In I. I. Lema, M. Zuk, & L. Rojas-Bracho, Introducción al análisis de riesgos ambientales (segunda ed., pp. 21-28). México D.F., México: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología.</li>
                    <li>Ávalos-Lozano, J. A. (2011). Capítulo V. La metodología de construcción del Plan de Manejo y Conservación del Sitio Sagrado Natural de Wirikuta. In P. Medellín Milán, J. A. Avalos Lozano, & M. Aguilar Robledo (Eds.), Planeación para la conservación y el manejo de Sitios Sagrados Naturales, el caso de Wirikuta San Luis Potosí (p. en prensa). San Luis Potosí, San Luis Potosí, México: Universidad Autónoma de San Luis Potosí.</li>
                    <li>Martínez-Alier, J. (2009, 11 30). El ecologismo de los pobres, veinte años después: India, México y Perú. Retrieved 08 09, 2010, from Eco Portal.Net El Directorio Ecológico y Natural: <a href="http://www.ecoportal.net/content/view/full/90029/" target="_blank">http://www.ecoportal.net/content/view/full/90029/</a>.</li>
                    <li>Coraggio, J. L. (2001, mayo 31). La promoción del desarrollo económico en las ciudades: el rol de los gobiernos municipales. Retrieved enero 20, 2011, from Ponencia presentada en la Reunión Anual de Trabajo Red Nro 5 “Políticas Sociales Urbanas”, del Programa URBAL, organizada por la Intendencia Municipal de Montevideo: <a href="http://www.coraggioeconomia.org/jlc/archivos%20para%20descargar/CoraggioenURBAL2001.pdf" target="_blank">http://www.coraggioeconomia.org/jlc/archivos%20para%20descargar/CoraggioenURBAL2001.pdf</a>.</li>
                    <li>Assadourian, E. (2008). La oportunidad para las comunidades de acelerar la transición hacia una sociedad sostenible. Ecología Política (35), 99-104.</li>
                    <li>Elisa Pardo Vegezzi, Adriana Flores. (2006). Ordenamiento Comunitario Participativo: Consenso y Disenso. Lecciones Metodológicas Derivadas de Experiencias de ONG Mexicanas. In S. Anta Fonseca, A. V. Arreola Muñoz, M. A. González Ortiz, J. Acosta González, & compiladores, Ordenamiento Territorial Comunitario (pp. 111-128). México D.F., México: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología, Instituto para el Desarrollo Sustentable en Mesoamérica, A.C., Grupo Autónomo para la Investigación Ambiental, A.C., Grupo de Estudios Ambientales, A.C.</li>
                    <li>Environmental Vulnerability Index 2005. Fiji Islands: South Pacific Applied Geoscience Commission (SOPAC), UNEP, 90 p.</li>
                    <li>Informe final del Análisis de Vulnerabilidad de la Sierra Madre Oriental (2012) CONANP-GIZ, México D.F.</li>
                    <li>Orozco-Ramírez, Q. (2006). Cinco Experiencias de Ordenamiento Territorial Comunitario en Michoacán. In S. Anta Fonseca, A. V. Arreola Muñoz, M. A. González Ortiz, A. González, & compiladores, Ordenamiento Territorial Comunitario (pp. 209-228). México, D.F., México: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología, Instituto para el Desarrollo Sustentable en Mesoamérica, A.C., Grupo Autónomo para la Investigación Ambiental, A.C., Grupo de Estudios Ambientales, A.C.</li>
                    <li>Roberto González-Sousa, Angelina Herrera Soriano. (2009). El espacio rural en Cuba. Principales transformaciones acaecidas en el período 1959-2006. In.</li>
                    <li>A. Massiris-Cabez, Geografía y Territorio: Procesos territoriales y socioespaciales. Aproximación desde Iberoamérica (pp. 243-266). Tunja-Bayacá, Colombia.</li>
                    <li>Salvador Anta-Fonseca, Fernando Mondragón Galicia. (2006). El Ordenamiento Territorial y los Estatutos Comunales el Caso de Santa Cruz Tepetotutla, Usila, Oaxaca. In S. Anta Fonseca, A. V. Arreola Muñoz, M. A. González Ortiz, J. Acosta González, & compiladores, Ordenamiento Territorial Comunitario (pp. 191-208). México D.F.: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología, Instituto para el Desarrollo Sustentable en Mesoamérica, A.C., Grupo Autónomo para la Investigación Ambiental, A.C., Grupo de Estudios Ambientales, A.C.</li>
                </ul>
                <p></p><p></p>
                <h5> <strong>Lecturas complementarias</strong></h5>
                <p></p>
                <ul>
                    <li>Luisa Paré, Carlos Robles Guadarrama. (2006). Los Retos del Ordenamiento Comunitario en un Contexto de Apropiación Individual del Territorio un Estudio de Caso en el Sur de Veracruz. In S. Anta Fonseca, A. V. Arreola Muñoz, M. A. González Ortiz, J. Acosta González (compiladores), In Ordenamiento Territorial Comunitario (pp. 171-190). México, D.F.: Secretaría de Medio Ambiente y Recursos Naturales, Instituto Nacional de Ecología, Instituto para el Desarrollo Sustentable en Mesoamérica, A.C., Grupo Autónomo para la Investigación Ambiental, A.C., Grupo de Estudios Ambientales, A.C.</li>
                    <li>UNEP (2006) Environmental Indicators for North America. Washington, United Nations Environment Programme, 168 p.</li>
                    <li>UNEP (2006) Global Deserts Outlook. Kenya: Un ted Nat ons Env ronment Programme, 164 p.</li>
                    <li>UNEP-CBD (2006) Global Biodiversity Outlook 2. Canadá: UNEP, Convention on Biological Diversity, 90 p. [*]</li>
                    <li>UNESCO (2007) Education for Sustainable Development: Linking Learning and Happiness. Bangkok: UNESCO, 20 p.</li>
                    <li>UNHabitat (2004) Urban Governance Index. Conceptual Foundation and Field Test Report. Nairobi: Global Campaign on Urban Governance, Global Urban Observatory. 97 p.</li>
                    <li>Varios (2001) The Wellbeing of Nations (varios materiales). USA: CIESIN, 32 p.</li>
                    <li>World Bank (2008) Assessing the Environmental, Forest and Other Natural Resource Aspects of Development Policy Lending. A World Bank Tookit. World Bank, 128 p.</li>
                    <li>World Bank (2008) Environment at a Glance 2008. México Fact Sheet. Washington: World Bank, 2 p.</li>
                    <li>World Bank (2009) The Little Green Data Book. Washington: World Bank, 232 p.</li>
                </ul>

                <p></p><p></p>
                <h5> <strong>Recursos digitales</strong></h5>
                <p></p><p></p>
                <p>El curso cuenta con un espacio virtual de trabajo vía Internet en el sitio: <a href="http://evirtual.uaslp.mx/Ambiental/PyGAmbiental/default.aspx" target="_blank"> http://evirtual.uaslp.mx/Ambiental/PyGAmbiental/default.aspx</a> que utiliza la tecnología Microsoft SharePoint, diseñada para equipos de trabajo que requieren compartir información. Contará con las siguientes secciones, disponibles para todos los estudiantes:
                    <ul>
                        <li>Biblioteca de documentos</li>
                        <li>Tableros de anuncios, eventos y tareas</li>
                        <li>Foros de discusión</li>
                        <li>Lista de contactos</li>
                        <li>Enlaces (vínculos) a páginas de Internet sobre temas específicos (en caso de que se requieran)</li>
                    </ul>
                Es importante tomar en cuenta que los profesores no recibirán ningún trabajo impreso. Todos los controles de lectura, reseñas, ensayos y demás productos se cargarán en las secciones correspondientes del sitio web, en archivos de Word © o Power Point © según se indique, comprimidos en formato zip y etiquetados de acuerdo a las instrucciones que aparecen en cada sección.
                <p></p>
                <ul>
                    <li>A Guidebook to Environmental Indicators: <a href="http://www.csiro.au/csiro/envind/index.htm" target="_blank">http://www.csiro.au/csiro/envind/index.htm</a>.</li>
                    <li>Australia Sustainability Indicators: <a href="http://www.environment.gov.au/esd/national/indicators/index.html" target="_blank">http://www.environment.gov.au/esd/national/indicators/index.html</a>.</li>
                    <li>Baltic 21, Sustainable Development in the Baltic Sea Region: <a href="http://www.baltic21.org/" target="_blank">http://www.baltic21.org/</a>.</li>
                    <li>Canada Sustainable Indicators Network: <a href="http://www.csin-rcid.ca/" target="_blank">http://www.csin-rcid.ca/</a>.</li>
                    <li>Center for International Earth Science Information Network: <a href="http://ciesin.columbia.edu/" target="_blank">http://ciesin.columbia.edu/</a>.</li>
                    <li>Centre for Sustainable Transportation; <a href="http://www.centreforsustainabletransportation.org/" target="_blank">http://www.centreforsustainabletransportation.org/</a>.</li>
                    <li>CIAT Environmental and Sustainability Indicators: <a href="http://www.ciat.cgiar.org/indicators/index.htm" target="_blank">http://www.ciat.cgiar.org/indicators/index.htm</a>.</li>
                    <li>Cities Environment Reports on the Internet <a href="http://ceroi.net/" target="_blank"> http://ceroi.net/</a>.</li>
                    <li>Comisión de Cooperación Ambiental de América del Norte: <a href="http://www.cec.org/" target="_blank">http://www.cec.org/</a>.</li>
                    <li>Environment Australia: <a href="http://www.environment.gov.au/index.html" target="_blank">http://www.environment.gov.au/index.html</a>.</li>
                    <li>Environmental Protection Agency, USA, Environmental Indicators: <a href="http://www.epa.gov/roeindicators/" target="_blank">http://www.epa.gov/roeindicators/</a>.</li>
                    <li>Environmental Vulnerability Index: <a href="http://www.vulnerabilityindex.net/" target="_blank">http://www.vulnerabilityindex.net/</a>.</li>
                    <li>European Comission, Environment: <a href="http://ec.europa.eu/environment/" target="_blank">http://ec.europa.eu/environment/</a>.</li>
                    <li>European Commision Sustainable Development Strategy Indicators: <a href="http://epp.eurostat.ec.europa.eu/portal/page/portal/sdi/introduction" target="_blank">http://epp.eurostat.ec.europa.eu/portal/page/portal/sdi/introduction</a>.</li>
                    <li>Global Biodiversity Outlook <a href="http://www.cbd.int/gbo2/" target="_blank">http://www.cbd.int/gbo2/</a>.</li>
                    <li>Global Deserts Outlook: <a href="http://www.unep.org/geo/GDOutlook" target="_blank">http://www.unep.org/geo/GDOutlook</a>.</li>
                    <li>Globio, Mapping Human Impacts On The Biosphere: <a href="http://www.globio.info/" target="_blank">http://www.globio.info/</a>.</li>
                    <li>IISD Global Directory to Indicator Initiatives: <a href="http://www.iisd.org/measure/compendium/" target="_blank">http://www.iisd.org/measure/compendium/</a>.</li>
                    <li>International Sustainability Indicators Network (ISIN): <a href="http://www.sustainabilityindicators.org/" target="_blank">http://www.sustainabilityindicators.org/</a>.</li>
                    <li>SEDAC, University of Columbia: <a href="http://sedac.ciesin.columbia.edu/es/compendium.html" target="_blank">http://sedac.ciesin.columbia.edu/es/compendium.html</a>.</li>
                    <li>Sustainable Measures: <a href="http://www.sustainablemeasures.com" target="_blank">http://www.sustainablemeasures.com</a>.</li>
                    <li>The World's Water, Pacific Institute: <a href="http://www.worldwater.org/data.html" target="_blank">http://www.worldwater.org/data.html</a>.</li>
                </ul>
                <p></p><p></p>
                <h5> <strong>Bibliografía complementaria, de consulta y apoyo</strong></h5>
                <p></p><p></p>
                <ul>
                    <li>En el sitio web del curso, los estudiantes tendrán acceso a más de 500 textos y materiales complementarios, de consulta y de apoyo: <a href="http://evirtual.uaslp.mx/Ambiental/DS/Lecturas/" target="_blank">http://evirtual.uaslp.mx/Ambiental/DS/Lecturas/</a></li>
                    <li>También podrán consultar la biblioteca del curso de PyGA con más de 300 volúmenes.</li>
                </ul>
            </p>

            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>No aplica
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>No aplica
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul>
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio
                    que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong> <br></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya
                    cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <p>No aplica
                </p>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong>Dr. Alfredo Ávila Galarza y Dr. José Antonio Ávalos Lozano.<br>
                    <strong> • Revisó:</strong><br><br>
                </p>
                <div class="row m-0 text-center align-items-center justify-content-center">
                    <div class="col-auto">
                        <a  class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{asset('storage/Prog/CB_PyGA.pdf')}}" target="_blank" role="button" download="CB_ProblematicayGestionAmb.pdf">Descargar programa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
