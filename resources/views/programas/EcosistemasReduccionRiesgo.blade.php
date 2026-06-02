@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>ECOSISTEMAS Y REDUCCIÓN DEL RIESGO DE DESASTRE</strong></h1>
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
                                        <td>Tópico selecto</td>
                                        <td>Curso</td>
                                        <td>Español</td>
                                        <td>Presencial y/o No presencial y/o Mixta</td>
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
                                        <td>1 y 2</td>
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
                <p>Identificar los conceptos básicos y modelos teóricos sobre los desastres, así como las potencialidades y limitaciones del enfoque eco-DRR.
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
                                        <td>Búsqueda, obtención, procesamiento e interpretación de información sobre los desastres en diversas fuentes y escalas temporales y espaciales.
                                        <br>Capacidad de análisis y síntesis de información existente en torno a los desastres y las políticas públicas en torno a la reducción del riesgo de desastre.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Transversal </td>

                                        <td>Vincular el tema eco-DRR al ámbito de las Ciencias Ambientales.    
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
                                        <td>Conceptos y modelos para el estudio de los desastres.</td>
                                        <td id="contTablaIzq"> Comprender y reflexionar sobre los conceptos y modelos para el estudio de los desastres.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ol style="list-style-type: lower-alpha;">
                                                <li>Presentación de los temas por parte del profesorado e invitados.</li>
                                                <li>Presentación de artículos relacionados con los temas por parte del estudiantado.</li>
                                                <li>Discusiones grupales</li>
                                                <li>Ejercicios</li>
                                            </ol>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Reducción del riesgo de desastre basado en el ecosistema (eco-DRR).</td>
                                        <td id="contTablaIzq">Identificar los principales elementos en la reducción del riesgo de desastre basado en los ecosistemas.
                                        </td>
                                            <td id="contTablaIzq">
                                                <ol style="list-style-type:lower-alpha;">
                                                    <li>Presentación de los temas por parte del profesorado e invitados.</li>
                                                    <li>Presentación de artículos relacionados con los temas por parte del estudiantado.</li>
                                                    <li>Discusiones grupales</li>
                                                    <li>Ejercicios
                                                    </li>
                                                </ol>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Enfoques para estudios sobre RRD</td>
                                        <td id="contTablaIzq">
                                        Reconocer algunas aproximaciones para el estudio de la reducción del riesgo de desastre.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ol style="list-style-type:lower-alpha;">
                                                <li>Presentación de los temas por parte del profesorado e invitados.</li>
                                                <li>Presentación de artículos relacionados con los temas por parte del estudiantado.</li>
                                                <li>Discusiones grupales</li>
                                                <li>Ejercicios
                                                </li>
                                            </ol>
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
                        <p>En vista de que se trata de nivel posgrado no se considera pertinente la evaluación parcial.</p>
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
                                        <td></td>
                                        <td>Durante el curso</td>
                                        <td>Exposición oral (se evaluará con base en una rúbrica).
                                        <br>Reporte de lectura (rúbrica).
                                        <br>Participación en las discusiones grupales (se evaluará la calidad y frecuencia de la participación).
                                        <br>Tareas/ejercicios</td>
                                        <td>15%
                                        <br>15%
                                        <br>15%
                                        <br>15%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Al final de la unidad 3</td>
                                        <td>Entrega de un ensayo escrito y presentación oral sobre DRR en relación a su tema de tesis.</td>
                                        <td>20% (documento escrito)
                                        <br>20% (exposición oral)</td>
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
                <p>Unidad 1</p>
                <ul>
                    <li>Adger N. W. (2006), Vulnerability, Global Environmental Change 16, p.268-281.</li>
                    <li>Alcántara-Ayala I et al. (2019), Gestión Integral de Riesgo de Desastres en México: reflexiones, retos y propuestas de transformación de la política pública desde la academia. Investigaciones Geográficas, (98).<a href="https://doi.org/10.14350/rig.59784">https://doi.org/10.14350/rig.59784</a></li>
                    <li>Birkmann J. and Wiser, B. (2006), Measuring the Un-measurable, The Challenge of Vulnerability, AOURCE Education-Publication Series of UNU-EHS, No. 5, 52 p.</li>
                    <li>Blaikie, P., Cannon, T., David, I., Wisner, B. (1996), Vulnerabilidad, el entorno social, político y económico de los desastres, LA RED, 292 p.</li>
                    <li>García Acosta, V. (2005), El riesgo como construcción social y la construcción social de riesgos, Desacatos, No.19, Centro de Investigaciones y Estudios Superiores en Antropología Social, p.11-24.</li>
                    <li>Manyena et al, (2011): Disaster resilience: a bounce back or bounce forward ability? Local Environment, 16:5, 417-424.</li>
                    <li>Mayunga J. (2007), Understanding and Applying the Concept of Community Disaster Resilience: A capital-based approach, Draft for Summer Academy for Social Vulnerability and Resilience Building, 15 p.</li>
                    <li>Masrek, A. (comp.) 1993, Los desastres no son naturales, LA RED, 134 p.</li>
                    <li>MOVE (Methods for the Improvement of Vulnerability Assessment in Europe) <a href="http://www.ehs.unu.edu/article/read/move">http://www.ehs.unu.edu/article/read/move</a></li>
                    <li>Sorg L, Medina N, Feldmeyer D, Sanchez A, Vojinovic Z, Birkmann J, Marchese A. (2018), Capturing the multifaceted phenomena of socioeconomic vulnerability, Nat Hazards 92:257–282</li>
                    <li>Turner B.L, et al (2003), A framework for vulnerability analysis in sustainability science, PNAS, vol. 100, no. 14, p. 8074-8079.</li>
                    <li>Twigger-Ross, C., Kashefi, E., Weldon, S., Brooks, K., Deeming, H., Forrest, S., Fielding, J., Gomersall, A., Harries, T., McCarthy, S., Orr, P., Parker, D., and Tapsell, S. (2014), Flood Resilience Community Pathfinder Evaluation: Rapid Evidence Assessment, London: Defra. 119 p.</li>
                    <li>United Nations (2015), Sendai Framework for Disaster Risk Reduction 2015-2030, 34 p.</li>
                    <li>UNDRR (2020) The human cost of disasters: an overview of the last 20 years (2000-2019).</li>
                    <li>Verá-Córtes, G., (2006), Vulnerabilidad social y expresiones de desastre en el distrito de Pochutla, Oaxaca, en la construcción social de riesgos y el Huracán Paulina, CIESAS, 35-150</li>
                    <li>Wisner B, Gaillard J.C, Kelman I. (2011), Framing Disaster from: The Routledge Handbook of Hazards and Disaster Risk Reduction Routledge.</li>
                    <li>World Economic Forum (2018), Informe detallado de riesgos globales, 80 p.</li>
                </ul>
                <br>
                <p>Unidad 2</p>
                <ul>
                    <li>Chris Zevenbergen, Dafang Fu and Assela Pathirana (2018) Transitioning to Sponge Cities: Challenges and Opportunities to Address Urban Water Problems in ChinaWater, 10, 1230, 13 p.</li>
                    <li>Daniel A. Friess and Benjamin S. Thompson (2016) Mangrove Payments for Ecosystem Services (PES): A Viable Funding Mechanism for Disaster Risk Reduction in Ecosystem-Based Disaster Risk Reduction and Adaptation in Practice, in Fabrice G. Renaud, Karen Sudmeier-Rieux and Marisol Estrella y Udo Nehren (eds.), Springer, 75-98 p.</li>
                    <li>Fabrice G. Renaud, Karen Sudmeier-Rieux and Marisol Estrella (2013), The Relevance of Ecosystems for Disaster Risk Reduction in Fabrice G. Renaud, Karen Sudmeier-Rieux and Marisol Estrella (Eds.) The Role of Ecosystems in Disaster Risk Reduction. United Nation University Press. p. 3-25.</li>
                    <li>Marisol Estrella and Nina Saalismaa (2013), Ecosystem-Based Disaster Risk Reduction (Eco-DRR): An Overview in Fabrice G. Renaud, Karen Sudmeier- Rieux and Marisol Estrella (Eds.) The Role of Ecosystems in Disaster Risk Reduction. United Nations University Press. p. 26-54.</li>
                    <li>Noralene Uy, Rajib Shaw and Yikiko Takeuchi (2012), Linking Livelihoods and Ecosystems for Enhance Disaster in Rjaib Shaw and Phong Tran (Eds.). Management. Environment Disaster Linkages, Community, Environment and Disaster Risk Management, V. 9, Emerald Books. p. 131-145.</li>
                    <li>Phong and Rajib Shaw (2012), Environment Disaster Linkages: An Overview. Environment Disaster Linkages in Rjaib Shaw and Phong Tran (Eds.) Comunity, Environment and Disaster Risk Management. V. 9. Emerald Books, p. 3-14</li>
                    <li>Stephan Pauleit, Teresa Zolch, Rieke Hansen, Thomas B. Randrup, and Cecil Konijnendijk (2017), Nature-Based Solutions and Climate Change-Four Shades of Green in Nature-Based Solutions and Climate Change Adaptation in Urban Areas, Nadja Kabisch, Horst Korn, Jutta Stadler, Aletta Bonn (eds.), Springer Open, 29-49.</li>
                    <li>United Nation Environment Program (2019) Disasters and Ecosystems: Resilience in a Changing Climate, Source Book, 212 p.</li>
                    <li>United Nation Environment Program (2010), Risk and Vulnerability Assessment Methodology Development Project (RiVAMP) Linking Ecosystems to Risk and Vulnerability Reduction, The Case of Jamaica, Results of Pilot Assessment. Geneva: UNEP Division of Environmental Policy Implementation. <a href="https://wedocs.unep.org/handle/20.500.11822/8879">https://wedocs.unep.org/handle/20.500.11822/8879</a></li>
                </ul>
                <p>Unidad 3</p>
                <ul>
                    <li>Adam W. Whelchel and Michael W. Beck (2016), Decision Tools and Approaches to Advance Ecosystems-Based Disaster Risk Reduction and Climate Change Adaptation in the Twenty First Century in Fabrice G. Renaud, Karen Sudmeier- Rieux, Marisol Estrella and Udo Nehren (Eds.) Ecosystems-Based Disaster Risk Reduction and Adaptation in Practice. Springer. p. 133-160.</li>
                    <li>Anil Kumar Gupta and Sreeja S. Nair (2013), Applying environmental impact assessments and strategic environmental assessments in disaster management in Fabrice G. Renaud, Karen Sudmeier-Rieux and Marisol Estrella (Eds.) The Role of Ecosystems in Disaster Risk Reduction. United Nations University Press. p. 416-436.</li>
                    <li>Jinas Joerin and Rajib Shaw (2012), Urban and Land Use Planning for Disaster Resilience in Rjaib Shaw and Phong Tran (Eds.) Environment Disaster Linkages, Community, Environment and Disaster Risk Management. V. 9. Emerald Books. p. 221-239.</li>
                    <li>Liñayo Alejandro (2009), Identificación y tratamiento del riesgo tecnológico urbano de la ciudad de Mérida (Venezuela) en La Gestión del riesgo Urbano en América Latina: recopilación de artículos. Plataforma temática de riesgo urbano, EIRD. 175-190 p.</li>
                    <li>Lechowska, E. (2018), What Determines Flood Risk Perception: A Review of Factors of Flood Risk Perception and its Relations Between Its Basic Elements, Natural Hazards, 94:1341-1366.</li>
                    <li>Lorenzo Guadagno, Yaella Depietri and Urbano Frao Paleo (2013), Urban Disaster Risk Reduction and Ecosystem Services in Fabrice G. Renaud, Karen Sudmeier-Rieux and Marisol Estrella (Eds.) The Role of Ecosystems in Disaster Risk Reduction. United Nations University Press. p. 389-416</li>
                    <li>McCabe, J.T. (2005), El impacto y la respuesta a la sequía entre los pastores turkanas, implicaciones para la teoría antropológica y la investigación en riesgo, Desacatos 19, 25-40 p.</li>
                    <li>Moreno J. and Shaw D. (2018), Women´s Empowerment Following a Disaster: a Longitudinal Study of Social Change, Nat. Hazards, 92, p.205-224</li>
                    <li>Thomas R. Paradise (2005), Perception of earthquake risk in Agadir, Morocco: A case study from a Muslim community, Environmental Hazards 6: 167–180.</li>
                    <li>United Nations International Strategy for Disaster Risk Reduction (2008), Indigenous Knowledge for Disaster Risk Reduction: Good Practices and Lessons Learned from Experiences in the Asia-Pacific Region, Bangkok, 87 p.</li>
                    <li>United Nation Environmental Programme (2016), River Partners: Applying Ecosystem-Based Disaster Risk Reduction (Eco-DRR) in Integrated Water Resource Management (IWRM) in the Lukaya Basin, Democratic Republic of the Congo,96 p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                    <p>
                    Agencia de los Estados Unidos para el Desarrollo Internacional, USAID, <a href="www.usaid.gov">www.usaid.gov</a> Centro Regional de Información sobre Desastres de América Latina y el Caribe, <a href="www.cri.or.cr">www.cri.or.cr</a> Centro Nacional de Desastres, CENAPRED, <a href="www.cenapred.unam.mx">www.cenapred.unam.mx</a>
                    <br>EIRD, Estrategia Internacional para la Reducción de Desastres en las Americas, <a href="www.eird.org">www.eird.org</a> Ecosystems Management 
                    <br><a href="https://www.iucn.org/theme/ecosystem-management/our-work/environment-and-disasters">https://www.iucn.org/theme/ecosystem-management/our-work/environment-and-disasters</a> Ecosystems for Adaptation and Disaster Risk Reduction <a href="http://pedrr.org/">http://pedrr.org/</a>
                    <br>Geoestadísticas y peligros naturales, Universidad de Cataluña, software de dominio público para evaluación del riesgo para peligros naturales, <a href="www.iespana.es/gnh/">www.iespana.es/gnh/</a>
                    <br>Intute, Natural Hazards, <a href="http://www.intute.ac.uk/sciences/hazards/">http://www.intute.ac.uk/sciences/hazards/</a>
                    <br>National Geophysical Data Center (NGDC), NOAA, <a href="http://www.ngdc.noaa.gov/hazard/">http://www.ngdc.noaa.gov/hazard/</a>
                    <br>Natural Hazards and Earth System Sciences, An open access Journal of the European Geosciences Union, <a href="www.nat-hazards-earth-syst-sci.net">www.nat-hazards-earth-syst-sci.net</a>
                    <br>Natural Hazards and Risk Virtual Library, <a href="http://www.unex.es/eweb/vl/">http://www.unex.es/eweb/vl/</a> 
                    <br>Prevention Web, <a href="http://www.preventionweb.net/english/">http://www.preventionweb.net/english/</a>
                    <br>Proyecto de Peligros Naturales, Oficina de Desarrollo Sostenible y Medio Ambiente (ODSMA) de la Organización de los Estados Americanos (OEA), <a href="http://www.oas.org/nhp/informacion.html">http://www.oas.org/nhp/informacion.html</a>
                    <br>Red de estudios sociales en prevención de desastres en América Latina, LA RED, <a href="www.desenredando.org">www.desenredando.org</a> US Geological Survey, USGS, <a href="http://www.usgs.gov">http://www.usgs.gov</a>
                    <br>United Nations University <a href="http://unu.edu/">http://unu.edu/</a>
                    <br>United Nations Office for Disaster Risk reduction UNISDR <a href="https://www.unisdr.org/">https://www.unisdr.org/</a> UNIDSR Stop Disaster Game <a href="http://www.stopdisastersgame.org/">http://www.stopdisastersgame.org/</a>
                </p>
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
                    <br>
                    <strong> • Revisó: </strong>Miembros del área de Gestión Ambiental del PMPCA
                </p>
            </div>
        </div>
    </div>
@endsection
