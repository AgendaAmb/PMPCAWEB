@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div class="row mb-4">
            <div class="col-12 col-sm-12">
                <h1><strong>TESIS</strong></h1>
            </div>
        </div>
        <hr>
        <br>
        <div class="col-12 col-sm-12 my-4">
            <p> <strong>Doctorado en Ciencias Ambientales</strong></p>
        </div>


        <div class="accordion p-2" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Evaluación Ambiental &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse active show" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022</td>
                                            <td>Hernández Cerda Claudia Nalleli</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/7982">Elementos para la evaluación de la movilidad urbana en áreas conurbadas: Diagnóstico y propuesta de movilidad integral. El caso de la zona metropolitana de San Luis Potosí</a></td>
                                            <td>Dr. Alfredo Ávila Galarza</td>
                                        </tr>
                                        <tr>                                            
                                            <td>2021</td>
                                            <td>Vargas Berrones Karla Ximena</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7596/TesisD.PMPCA.2021.Reduccion.Vargas.pdf?sequence=1&isAllowed=y">Reducción de compuestos tóxicos presentes en detergentes, utilizando nuevas materias primas ecológicas</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome</td>
                                        </tr>                                        
                                        <tr>
                                            <td>2020</td>
                                            <td>Buendía Oliva Mariana</td>
                                            <td><a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/5681">Diseño
                                                    y
                                                    evaluación del Club de Educación Ambiental y Sustentabilidad como
                                                    estrategia para la
                                                    aprobación de ecotecnicas en la escuela Francisco González Bocanegra de
                                                    la
                                                    delegación la Pila San Luis Potosí, SLP</a></td>
                                            <td>Dr. Marcos Algara Siller</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Barbosa Briones Elda</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5672/DCA1BBE201901.pdf?sequence=1&isAllowed=y">Análisis
                                                    del funcionamiento hidrológico en cuencas con actividad minera con base
                                                    en sistemas
                                                    de flujo como eje integrador</a></td>
                                            <td>Dr. Antonio Cardona Benavides</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Leura Vicencio Adriana Karina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4332">Geoquímica
                                                    ambiental del mercurio en pasivos ambientales minero metalúrgicos</a>
                                            </td>
                                            <td>Dr. Israel Razo Soto</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Padilla González Claudio Manuel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4512/DCA1PGC201702.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de la calidad del agua del Río San Juan (Edo Mex., Qro., Hgo) y
                                                    propuesta de un
                                                    índice biótico utilizando macroinvertebrados</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Flores Jiménez David Enrique</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3955/DCA1EEM01601.pdf?sequence=3&isAllowed=y">Estimación
                                                    de las emisiones y modelado del transporte de metano en la atmósfera
                                                    generado por la
                                                    quema de caña de azúcar en México</a></td>
                                            <td>Dr. Marcos Algara Siller</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Pérez Rodríguez Rebeca Yasmín</td>
                                            <td><a target="_blank"
                                                    href="#">Identificación
                                                    de fuentes y rutas de exposición en sitios contaminados por plomo,
                                                    usando métodos
                                                    isotópicos</a></td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Rocha Escalante Hermann</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4135/DCA1REH201601.pdf?sequence=1&isAllowed=y">Groundwater
                                                    use in the Mérida-Progreso Region, Yucatán, and its implications in the
                                                    coastal area
                                                    ecosystems requirements</a></td>
                                            <td>Dr. Antonio Cardona Benavides</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Ortega Montoya Claudia Yazmín</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3858/DCA1PMT01501.pdf?sequence=3&isAllowed=y">Propuesta
                                                    metodológica para la evaluación del riesgo ambiental debido al manejo de
                                                    materiales
                                                    peligrosos en el Estado de San Luis Potosí</a></td>
                                            <td>Dr. Alfredo Ávila Galarza</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Hergt Thomas</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3554">Diseño
                                                    optimizado de redes de monitoreo de la calidad del agua de los sistemas
                                                    de flujo
                                                    subterráneo en el acuífero 2411 "San Luis Potosí": hacia un manejo
                                                    sustentable</a>
                                            </td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Velázquez Angulo Gilberto</td>
                                            <td><a target="_blank"
                                                    href="#">Diseño
                                                    de una red de monitoreo atmosférico para la ciudad de San Luis Potosí:
                                                    Ubicación de
                                                    nodos</a></td>
                                            <td>Dr. Alfredo Ávila Galarza</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <strong>Gestión Ambiental &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022</td>
                                            <td>Morales Jasso Gerardo</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/7983">Construir el conocimiento interdisciplinario en el Programa Multidisciplinario de Posgrado en Ciencias Ambientales. Historia, teoría y praxis.</a></td>
                                            <td>Dr. Leonardo Ernesto Márquez Mireles</td>
                                        </tr>                                         
                                        <tr>
                                            <td>2021</td>
                                            <td>Rontard Benjamín Nicolás Franck</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7610/TesisD.PMPCA.2021.Progress.Rontard.pdf?sequence=1&isAllowed=y">Progress and limits of carbon market in Mexico: analysis of the national emissions trading system</a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>                                        
                                        <tr>
                                            <td>2020</td>
                                            <td>Trinidad García Karina Lizbeth</td>
                                            <td><a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/5682">Manejo
                                                    y
                                                    conservación de <em>Vanilla planifolia</em> en sistemas
                                                    agroforestales tradicionales
                                                    de la Huasteca Potosina</a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Arreola Martínez Beatriz Estrella</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4548/DCA1AMB201801.pdf?sequence=1&isAllowed=y">Especies
                                                    exóticas invasoras en México. Aplicación de SIG en la prevención
                                                    de las especies
                                                    invasoras</a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Bara Claudia Rosina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4531/DCA1BCR201802.pdf?sequence=1&isAllowed=y">Implicaciones
                                                    y viabilidad de la certificación orgánica participativa como
                                                    instrumento para
                                                    promover la producción orgánica y los mercados locales en San
                                                    Luis Potosí</a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dr. Ramón Jarquín Gálvez</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Noyola Cherpitel Ricardo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5678/DCA1NCR201802.pdf?sequence=1&isAllowed=y">La
                                                    construcción de la sustentabilidad en el currículo
                                                    universitario: cinco carreras de
                                                    la Universidad Autónoma de San Luis Potosí</a></td>
                                            <td>Dr. Pedro Medellín Milán</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Antoni Carolin Dorothee</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4525">Dynamics of
                                                    livelihood and land use/cover change in a tropical
                                                    social-ecological system in the
                                                    Huasteca Potosina region</a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Di Carlo Anna Lena</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4207/DCA1DCA201702.pdf?sequence=1&isAllowed=y">Participación
                                                    y desarrollo sustentable en los procesos de ordenamiento
                                                    ecológico territorial local
                                                    en México</a></td>
                                            <td>Dr. Miguel Aguilar Robledo</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Medina Garza Hugo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4518">Sistema de
                                                    vigilancia epidemiológica sanitaria para la Huasteca Potosina.
                                                    Una plataforma para
                                                    la vigilancia de la enfermedad de Chagas</a></td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Olvera Vargas Luis Alberto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/5677">Variabilidad
                                                    espacial de las enfermedades de la caña de azúcar en la región
                                                    huasteca:
                                                    implicaciones para su monitoreo con percepción remota</a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Peralta Rivero Carmelo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4116">Evaluación de
                                                    los
                                                    cambios de cobertura y uso de suelo en la región huasteca de
                                                    México: "un análisis
                                                    del pasado, el presente y tendencias futuras de
                                                    deforestación"</a></td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Blanco López Paloma</td>
                                            <td><a target="_blank"
                                                    href="#">Planificación
                                                    del turismo sustentable en la zona Altiplano de San Luis Potosí.
                                                    Una propuesta
                                                    metodológica</a></td>
                                            <td>Dr. Valente Vázquez Solís</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Gil Antonio María de los Angeles</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3974/DCA1DUG01501.pdf?sequence=1&isAllowed=y">Disponibilidad,
                                                    uso y gestión del agua en comunidades rurales del Altiplano y
                                                    Huasteca Potosina,
                                                    hacia una gestión integral del agua</a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Gutiérrez Escajeda María Teresa</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3931/DCA1INE01501.pdf?sequence=3&isAllowed=y">Inventario
                                                    de emisiones de gases de efecto invernadero del sector
                                                    industrial de San Luis
                                                    Potosí: proyección al 2020 y propuesta de mitigación</a></td>
                                            <td>Dr. Pedro Medellín Milán</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Ramírez Guevara Sonia Judith</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3947/DCA1RGS201502.pdf?sequence=3&isAllowed=y">El
                                                    manejo de los residuos sólidos urbanos, un asunto de justicia
                                                    ambiental. Estudio de
                                                    caso zona Metropolitana de San Luis Potosí</a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Robayo Avendaño Angélica</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3943/DCA1CAM01501.pdf?sequence=3&isAllowed=y">Bioseguridad
                                                    en el campo agrícola mexicano. Análisis de estudios de caso</a>
                                            </td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Martínez Chaves Paula Andrea</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3706/DCA1HAM01201.pdf?sequence=3&isAllowed=y">Historia
                                                    ambiental del Municipio de Cerro de San Pedro, San Luis Potosí,
                                                    México (Siglo
                                                    XX)</a></td>
                                            <td>Dr. Alexander Betancourt Mendieta</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Sahagún Sánchez Francisco Javier</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3671/DCA1DIN01201.pdf?sequence=1&isAllowed=y">Dinámica
                                                    espacio-temporal de las transformaciones en la cobertura vegetal
                                                    y el cambio de uso
                                                    de suelo en la Sierra Madre Oriental de San Luis Potosí y sus
                                                    efectos potenciales
                                                    sobre la distribución de la avifauna</a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Aguilar Rivera Noé</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3560">Competitividad
                                                    de
                                                    la agroindustria azucarera de la Huasteca México</a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Ferney Leonel Hugo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3578">Gestión
                                                    participativa de cuencas hidrográficas: el caso de la cuenca del
                                                    Río Valles, oriente
                                                    de México</a></td>
                                            <td>Dr. Miguel Aguilar Robledo</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Villasís Keever Ricardo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3639/DCA1ISU01101.pdf?sequence=3&isAllowed=y">Indicadores
                                                    de sustentabilidad urbana: el caso de la zona Metropolitana de
                                                    San Luis Potosí</a>
                                            </td>
                                            <td>Dr. Miguel Aguilar Robledo</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Algara Siller Marcos</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3625/MarcosAlgaraSiller_TesisDoctoral_CienciasAmbientales_090907.pdf?sequence=1&isAllowed=y">Propuesta
                                                    metodológica para medir el impacto del fenómeno de la sequía en
                                                    la Huasteca Potosina
                                                    y propuesta general de manejo</a></td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Ávalos Lozano José Antonio</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3589/DCA1FPM00901.pdf?sequence=3&isAllowed=y">"Formación
                                                    de paisajes mineros en el Altiplano Potosino: siglos XVIII y
                                                    XIX"</a></td>
                                            <td>Dr. Miguel Aguilar Robledo</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Santacruz de León Germán</td>
                                            <td><a target="_blank"
                                                    href="http://ninive.uaslp.mx/xmlui/bitstream/handle/i/1792/DCA1HGI00701.pdf?sequence=3&isAllowed=y">Hacia
                                                    una gestión integral de los recursos hídricos en la cuenca del
                                                    Río Valles, Huasteca,
                                                    México</a></td>
                                            <td>Dr. Miguel Aguilar Robledo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Prevención y Control &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2021</td>
                                            <td>Flores Rojas Alfredo Israel</td>
                                            <td><a target="_blank" href="#">Biomateriales de liberación controlada: alternativa para el control de la contaminación de suelos por sobre exposición a compuestos químicos</a></td>
                                            <td>Dra. Paola Elizabeth Díaz Flores</td>
                                        </tr>                                        
                                        <tr>
                                            <td>2020</td>
                                            <td>Wong Argüelles Cynthia</td>
                                            <td><a target="_blank" href="#">Análisis de la
                                                    calidad
                                                    de
                                                    agua y de la distribución elemental en <i>Typha domingensis</i>
                                                    en el humedal
                                                    natural Ciénega de Tamasopo</a></td>
                                            <td>Dra. Candy Carranza Álvarez</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Monzalvo Santos Idalia Karina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4527/DCA1MSI201801.pdf?sequence=1&isAllowed=y">Transferencia
                                                    de elementos tóxicos resultantes de actividades mineras hacia
                                                    las poblaciones de
                                                    aves terrestres residentes del Altiplano Potosino y sus efectos
                                                    sobre el sistema
                                                    inmune</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre y Dr. Leonardo Chapa Vargas
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Pérez Castillo Filiberta Virginia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4333/DCA1PCF201701.pdf?sequence=1&isAllowed=y">Dinámica
                                                    de C, N, P y Fe en agua y sedimentos en el humedal natural
                                                    Ciénega de Tamasopo,
                                                    S.L.P. </a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Tejeda González Juan Carlos</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4203">Methodological
                                                    approach for using strategic environmental assessment within the
                                                    mexican
                                                    decision-making and planning system based on two case studies
                                                </a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Ábrego Góngora Carlos Joel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4163/DCA1CAG201601.pdf?sequence=1&isAllowed=y">Modelación
                                                    dinámica de la demanda de oxígeno en una laguna aireada
                                                    facultativa primaria: exceso
                                                    de sustrato, limitación de oxígeno y efecto de los episodios de
                                                    lluvia</a></td>
                                            <td>Dr. Roberto Briones Gallardo</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Rodríguez Hernández Mayra Cecilia</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3945/DCA1EMT01501.pdf?sequence=3&isAllowed=y">Efecto
                                                    de los mecanismos de transporte de Calcio, Hierro y Zinc en la
                                                    captación de Cadmio y
                                                    Plomo en plantas fitorremediadoras</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Chávez Toledo Carlos</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3547/DCA1RAM01201.pdf?sequence=3&isAllowed=y">Evaluación
                                                    de riesgos ambientales para sitios mineros: caso del distrito
                                                    minero Santa María de
                                                    la Paz</a></td>
                                            <td>Dr. Marcos Gustavo Monroy Fernández</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Gamiño Gutiérrez Sandra Patricia</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3711">Evaluación
                                                    de la genotoxicidad en poblaciones infantiles expuestas a
                                                    contaminación por As, Pb y
                                                    Cd en zonas mineras</a></td>
                                            <td>Dr. Marcos Gustavo Monroy Fernández</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Chiprés de la Fuente Jorge Arturo</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/1801">Cartografía
                                                    geoquímica multiescalar de valores de fondo y líneas base en el
                                                    Altiplano Potosino,
                                                    S.L.P., México</a></td>
                                            <td>Dr. Marcos Gustavo Monroy Fernández</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>Razo Soto Israel</td>
                                            <td><a target="_blank"
                                                    href="#">Identificación
                                                    de áreas prioritarias de restauración de suelos contaminados por
                                                    arsénico y metales
                                                    pesados en el sitio minero y metalúrgico de Villa de la Paz -
                                                    Matehuala, S.L.P.
                                                    (México)</a></td>
                                            <td>Dr. Marcos Gustavo Monroy Fernández</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <strong>Recursos Naturales Renovables &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022</td>
                                            <td>Diédhiou Idrissa</td>
                                            <td><a target="_blank"
                                                    href="#">Physiology, metabolomic profiles, and yield of native genotypes of maize (<em>Zea Mays L.</em>) and their <em>milpa</em> systems (maize+bean+squash) from San Luis Potosi, Mexico, under related effects of climate change</a>
                                            </td>
                                            <td>Dr. Hugo Magdaleno Ramírez Tobías</td>
                                        </tr>                                        
                                        <tr>
                                            <td>2020</td>
                                            <td>Guadiana Alvarado Zoe Arturo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5680/DCA1GAZ202001.pdf?sequence=1&isAllowed=y">Sustentabilidad
                                                    de la agricultura familiar en regiones áridas y semiáridas</a>
                                            </td>
                                            <td>Dr. Héctor Martín Durán García</td>
                                        </tr>
                                        <tr>
                                            <td>2020</td>
                                            <td>Heindorf Claudia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5674/DCA1HEC202002.pdf?sequence=1&isAllowed=y">Management
                                                    and <em>in situ</em> conservation of plant genetic resources in
                                                    indigenous land use
                                                    systems of the Huasteca Potosina</a></td>
                                            <td>Dr. José Antonio Reyes Agüero y Dra. Anuschka Van´t Hooft</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Carrillo Martínez Cristina Jared</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5673/DCA1CMC201902.pdf?sequence=1&isAllowed=y">Análisis
                                                    económico y ambiental de la producción de chile <em>(Capsicum
                                                        sp.)</em> en la zona
                                                    irrigada por el acuífero calera</a></td>
                                            <td>Dr. Gregorio Álvarez Fuentes</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Hernández Báez Israel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5675/DCA1HBI201901.pdf?sequence=1&isAllowed=y">Valoración
                                                    biológica de <em>Larrea tridentata</em> en animales</a></td>
                                            <td>Dr. Juan Carlos García López y Dr. Juan Manuel Pinos Rodríguez</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Rubio Mendez Gabriel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5679/DCA1RMG201902.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de la influencia de ambientes con disturbio antrópico sobre las
                                                    poblaciones de
                                                    <em>Beaucarnea inermis</em> (asparagaceae), especie amenazada de
                                                    la Sierra Madre
                                                    Oriental</a></td>
                                            <td>Dr. José Arturo de Nova Vázquez</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Errejón Gómez Julio César</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4463/DCA1EGJ201801.pdf?sequence=1&isAllowed=y">Causas
                                                    socio-ecológicas de la configuración del paisaje actual en la
                                                    porción noreste del
                                                    corredor biológico de la Sierra Madre Oriental</a></td>
                                            <td>Dr. José Luis Flores Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Godínez Hernández Cesar Iván</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4522/DCA1GHC201702.pdf?sequence=1&isAllowed=y">Estudios
                                                    sobre los subproductos de la elaboración del mezcal, y usos
                                                    alternativos del
                                                    maguey</a></td>
                                            <td>Dr. Juan Rogelio Aguirre Rivera</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>López Aguirre Samuel</td>
                                            <td><a target="_blank"
                                                    href="http://ninive.uaslp.mx/xmlui/bitstream/handle/i/4190/DCA1LAS201701.pdf?sequence=1&isAllowed=y">Extracción,
                                                    cuantificación y valoración biológica del extracto de hojas de
                                                    <em>Larrea
                                                        tridentata</em> (Sessé & Moc. ex Dc.) coville para su uso
                                                    como agente
                                                    biocida</a></td>
                                            <td>Dr. Juan Carlos García López</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Arellano Rivas Amaranta</td>
                                            <td><a target="_blank"
                                                    href="http://ninive.uaslp.mx/xmlui/handle/i/4169">Componente
                                                    evolutivo de la diversidad funcional de comunidades vegetales
                                                    tropicales</a></td>
                                            <td>Dr. José Arturo De Nova Vázquez y Dr. Miguel Ángel Munguía Rosas
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Beltrán Santoyo Miguel Ángel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4111/DCA1BSM201601.pdf?sequence=3&isAllowed=y">Impacto
                                                    ambiental de los sistemas de producción de leche de ganado
                                                    bovino en el Valle de San
                                                    Luis Potosí, México</a></td>
                                            <td>Dr. Gregorio Álvarez Fuentes</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Negrete Sánchez Luis Octavio</td>
                                            <td><a target="_blank"
                                                    href="http://ninive.uaslp.mx/xmlui/bitstream/handle/i/4112/TESIS_DOCTORADO_PMPCA.pdf?sequence=1&isAllowed=y">Factores
                                                    de persistencia en la producción de bovinos para carne en
                                                    agostaderos del Altiplano
                                                    Potosino-Zacatecano</a></td>
                                            <td>Dr. Juan Rogelio Aguirre Rivera</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Ramos Pérez Pedro Pablo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4123">Alternativas
                                                    para
                                                    el desarrollo rural sostenible en tres zonas cafetaleras
                                                    indígenas de México</a>
                                            </td>
                                            <td>Dr. Javier Fortanelli Martínez y Dr. Manuel Roberto Parra Vázquez
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Zenteno Ramírez Gabriela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4113/Gabriela%20Zenteno%20%20Final.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de la pulpa de variantes de tuna como alimento funcional</a>
                                            </td>
                                            <td>Dra. Bertha Irene Juárez Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Fuentes Galván María Lina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3972/MCA1CAP01501.pdf?sequence=1&isAllowed=y">La
                                                    captación del agua de lluvia como una alternativa de
                                                    abastecimiento en el área del
                                                    acuífero Silao-Romita, Guanajuato</a></td>
                                            <td>Dr. Hilario Charcas Salazar y Dra. Xitlali Virginia Delgado Galván
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Peña Avelino Luz Yosahandy</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4171/DCA1PAL201501.pdf?sequence=1&isAllowed=y">Valoración
                                                    de la vaina de mezquite <em>(Prosopis laevigata)</em> para la
                                                    alimentación de
                                                    rumiantes</a></td>
                                            <td>Dr. Juan Manuel Pinos Rodríguez</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Torres Rodríguez María Lucina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3942/DCA1TYB01501.pdf?sequence=3&isAllowed=y">Evaluación
                                                    tóxica <em>(in vivo)</em> y biológica <em>(in vitro)</em> del
                                                    extracto acuoso
                                                    liofilizado de <em>Calea urticifolia (mill) DC.</em></a></td>
                                            <td>Dra. Erika García Chávez</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Rendón Huerta Juan Antonio</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3946/DCA1EUR01401.pdf?sequence=3&isAllowed=y">Eficiencia
                                                    de uso de los recursos naturales e impacto ambiental por
                                                    sistemas modernos y
                                                    tradicionales de producción de leche bovina</a></td>
                                            <td>Dr. Juan Manuel Pinos Rodríguez</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Michel Cuello Christian</td>
                                            <td><a target="_blank"
                                                    href="#">Caracterización
                                                    fisicoquímica y estudio cinético de la hidrólisis enzimática de
                                                    los fructanos de
                                                    maguey mezcalero potosino<em>(Agave salmiana)</em></a></td>
                                            <td>Dr. Miguel Ángel Ruiz Cabrera</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Zamora Pedraza Cynthia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3544/DCA1MZL01201.pdf?sequence=3&isAllowed=y">Diagnóstico
                                                    del proceso actual de elaboración de mezcal en la empresa
                                                    "Laguna Seca" y
                                                    alternativas para mejorar su eficiencia</a></td>
                                            <td>Dra. Bertha Irene Juárez Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Bárcenas Pazos Guadalupe Martha</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3739/DCA1ENC01101.pdf?sequence=1&isAllowed=y">Evaluación
                                                    tecnológica de la madera de los encinos de la Sierra de Álvarez,
                                                    S.L.P.</a></td>
                                            <td>Dr. Juan Rogelio Aguirre Rivera</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Romo Campos Rosa de Lourdes</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3596/DCA1VGA01101.pdf?sequence=3&isAllowed=y">Exploración
                                                    de mecanismos de interacciones bióticas en comunidades vegetales
                                                    en un gradiente
                                                    ambiental del altiplano mexicano</a></td>
                                            <td>Dr. José Luis Flores Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Aguilar Ortega Francisco</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3631/DCA1ERE01001.pdf?sequence=3&isAllowed=y">Evolución
                                                    reciente y estado actual del aprovechamiento del agua
                                                    subterránea de la llanura de
                                                    Rioverde, San Luis Potosí, México</a></td>
                                            <td>Dr. Hilario Charcas Salazar</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Castillo Lara Pedro</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1806/DCA1ERE00701.pdf?sequence=3&isAllowed=y">Evolución
                                                    reciente y estado actual de la vegetación del área natural
                                                    protegida Sierra de
                                                    Álvarez, S.L.P.</s></a></td>
                                            <td>Dr. Juan Rogelio Aguirre Rivera</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Cilia López Virginia Gabriela</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1807/DCA1BUC00701.pdf?sequence=3&isAllowed=y">Biología
                                                    y utilización del Chilcuague <em>(heliopsis longipes S.F.
                                                        Blake)</em></a></td>
                                            <td>Dr. Juan Rogelio Aguirre Rivera</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Flores Cano Jorge Alberto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/1802/DCA1AGD00801.pdf?sequence=3&isAllowed=y">Análisis
                                                    de gradiente y dinámica sucesional de bosques de encino
                                                    <em>(Quercus)</em> en las
                                                    Sierras Madre Oriental y Occidental de México</a></td>
                                            <td>Dr. Richard Ivan Yeaton Hawkins</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Gómez Ruiz Walter Jorge</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2061/DCA1CEA00701.pdf?sequence=3&isAllowed=y">La
                                                    caprinocultura como elemento articulador del desarrollo rural en
                                                    el Altiplano
                                                    Potosino</a></td>
                                            <td>Dr. Juan Manuel Pinos Rodríguez</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <strong>Salud Ambiental Integrada &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022</td>
                                            <td>Cruz Santiago Omar</td>
                                            <td><a target="_blank" href="#">Evaluación de riesgo ecológico en el ecosistema acuático del humedal potosino Ciénega de Tamasopo</a></td>
                                            <td>Dr. César Arturo Ilizaliturri Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2022</td>
                                            <td>Diego Rodríguez Mariana</td>
                                            <td><a target="_blank" href="#">Caracterización y evaluación de la prevalencia de enfermedades respiratorias y gastrointestinales en comunidades vulnerables impactadas por eventos climáticos extremos en el Estado de San Luis Potoaí</a></td>
                                            <td>Dra. Gabriela Domínguez Cortinas</td>
                                        </tr>                                        
                                        <tr>
                                            <td>2022</td>
                                            <td>Macías Pérez Asaneth Careli</td>
                                            <td><a target="_blank" href="#">Factores ambientales y la evolución de enfermedades crónicas en el municipio de El Naranjo S.L.P., México</a></td>
                                            <td>Dra. Gabriela Domínguez Cortinas</td>
                                        </tr>                                                                                
                                        <tr>
                                            <td>2021</td>
                                            <td>Ramírez Landeros Laura María</td>
                                            <td><a target="_blank" href="#">Fortalecimiento de capacidades comunitarias enfocadas en educación, salud y ambiente en una región indígena</a></td>
                                            <td>Dr. Fernando Díaz Barriga Martínez</td>
                                        </tr>                                        
                                        <tr>
                                            <td>2020</td>
                                            <td>Monsiváis Nava Claudia Davinia</td>
                                            <td><a target="_blank" href="#">Análisis de
                                                    factores
                                                    asociados al sistema alimentario infantil en un área suburbana
                                                    vulnerable de la
                                                    Ciudad de San Luis Potosí México, para la implementación de una
                                                    estrategia de
                                                    intervención</a></td>
                                            <td>Dra. Ana Cristina Cubillas Tejeda</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>González Mares Mariana Odemaris</td>
                                            <td>Propuesta de una estrategia de intervención para la prevención de factores de riesgo para el desarrollo de enfermedades no transmisibles en comunidades suburbanas vulnerables del municipio de San Luis Potosí</td>
                                            <td>Dra. Ana Cristina Cubillas Tejeda</td>
                                        </tr>                                        
                                        <tr>
                                            <td>2019</td>
                                            <td>Camacho de la Cruz Arlette Andrea</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5671/DCA1CCA201902.pdf?sequence=1&isAllowed=y">Evaluación
                                                    integrada de riesgo asociado a mercurio en sitios con minería
                                                    artesanal de
                                                    mercurio</a></td>
                                            <td>Dr. Fernando Díaz Barriga</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Jarquín Yáñez Lizet del Carmen</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4731/DCA1JYL201902.pdf?sequence=1&isAllowed=y">Polmorfismos
                                                    genéticos asociados a enfermedades óseas y fluorosis dental en
                                                    población expuesta a
                                                    flúor a través del agua de consumo</a></td>
                                            <td>Dr. José de Jesús Mejía Saavedra</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Vázquez Medina Jazmín Lizzeth</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4765/DCA1VMJ201901.pdf?sequence=1&isAllowed=y">Influencia
                                                    del ambiente sobre el desarrollo en niños residentes en la zona
                                                    metropolitana de San
                                                    Luis Potosí</a></td>
                                            <td>Dra. Jaqueline Calderón Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Gaytán Jiménez Efraín</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4529/DCA1GJE201801.pdf?sequence=1&isAllowed=y">Determinantes
                                                    sociales y ambientales en el desarrollo cognitivo y salud mental
                                                    infantil</a></td>
                                            <td>Dra. Jaqueline Calderón Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Juárez Moreno Mariana</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4515/DCA1JMM201801.pdf?sequence=1&isAllowed=y">Diseño,
                                                    implementación y evaluación de un programa de comunicación de
                                                    riesgos como
                                                    estrategia de prevención de la infección por VIH en
                                                    adolescentes</a></td>
                                            <td>Dra. Ana Cristina Cubillas Tejeda</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Palacios Ramírez Andrés</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4509/DCA1PRA201801.pdf?sequence=1&isAllowed=y">Evaluación
                                                    e intervención del potencial de aprendizaje en población
                                                    infantil con un bajo CI.
                                                    Una propuesta desde la psicología comunitaria</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Zuki Orozco Beatriz Areli</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4338/DCA1ZOB201802.pdf?sequence=1&isAllowed=y">Determinación
                                                    de aflatoxinas y compuestos tóxicos en alimentos consumidos por
                                                    población infantil
                                                    en San Luis Potosí</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Martínez Acuña Mónica Imelda</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4204/DCA1MAM201701.pdf?sequence=1&isAllowed=y">Determinación
                                                    de biomarcadores de exposición, efecto y susceptibilidad para
                                                    evaluar riesgos en
                                                    salud por exposición a fluoruro y arsénico en población infantil
                                                    del Estado de
                                                    Zacatecas</a></td>
                                            <td>Dr. José de Jesús Mejía Saavedra</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Gaytán Hernández Darío</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3852">Diseño
                                                    de un paquete de herramientas metodológicas para una sala
                                                    situacional de salud
                                                    ambiental para el estado de San Luis Potosí</a></td>
                                            <td>Dr. José de Jesús Mejía Saavedra</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Morales Villegas Raúl</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3949/DCA1RCN01501.pdf?sequence=3&isAllowed=y">Rendimiento cognitivo de niños
                                                    indígenas que viven en
                                                    escenarios socio-ambientales vulnerables. Hacia una propuesta de
                                                    intervención</a>
                                            </td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Ramírez Jiménez Ma. del Rocío</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3948/DCA1EXO01501.pdf?sequence=3&isAllowed=y">Asociación
                                                    entre la exposición a plaguicidas organofosforados y la
                                                    paraoxonasa 1 (PON1) y
                                                    alteraciones neurocognitivas en niños y adolescentes de una
                                                    comunidad agrícola de
                                                    San Luis Potosí</a></td>
                                            <td>Dra. Leticia Guadalupe Yáñez Estrada</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Flores Ramírez Rogelio</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3944/DCA1DYA01401.pdf?sequence=3&isAllowed=y">Diseño
                                                    y aplicación de una metodología de evaluación de riesgos por
                                                    exposición a sustancias
                                                    tóxicas persistentes en zonas vulnerables de México</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Villaseñor Lozano César Gerardo</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3859/DCA1MPE01401.pdf?sequence=3&isAllowed=y">Metodología
                                                    para la evaluación del riesgo del desarrollo infantil de
                                                    comunidades vulnerables</a>
                                            </td>
                                            <td>Dra. Jaqueline Calderón Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Hernández Cruz María Teresa</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3672/DCA1AUT01301.pdf?sequence=1&isAllowed=y">La
                                                    autogestión como estrategia para contribuir a mejorar la calidad
                                                    de vida en los
                                                    hogares de una comunidad indígena de la Huasteca Potosina</a>
                                            </td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Escobar García Diana María</td>
                                            <td><a target="_blank"
                                                    href="#">Análisis
                                                    de asociación de los polimorfismos E155del, A140D y E208K de la
                                                    glutatión S
                                                    transferasa &#8486; 1-1 (GST01-1) con los perfiles de expresión
                                                    de mediadores
                                                    inflamatorios y apoptóticos en individuos expuestos a
                                                    arsénico</a></td>
                                            <td>Dra. Claudia Escudero Lourdes</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Rivero Pérez Norma Edith</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3707/DCA1EES01201.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de los efectos en salud por la exposición a plaguicidas en niños
                                                    de San Luis
                                                    Potosí</a></td>
                                            <td>Dra. Leticia Yáñez Estrada</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Torres Nerio Rocío</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3546/DCA1DEI01201.pdf?sequence=3&isAllowed=y">Diseño
                                                    e implementación de Programas de Comunicación de Riesgos para
                                                    mejorar la salud
                                                    ambiental en una comunidad de la Huasteca Potosina</a></td>
                                            <td>Dra. Ana Cristina Cubillas Tejeda</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Bocanegra Salazar Melissa</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3564/Tesis-doctorado_Bocanegra.pdf?sequence=1&isAllowed=y">Muestreo
                                                    pasivo de hidrocarburos aromáticos policíclicos en las hojas de
                                                    la especie vegetal
                                                    <em>Eriobotrya japonica</em></a></td>
                                            <td>Dra. María Deogracias Ortiz Pérez</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Cossío Torres Patricia Elizabeth</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3567/Thesis_Patricia_Cossi%cc%81o.pdf?sequence=1&isAllowed=y">Factores
                                                    asociados al estado de salud de adolescentes con exposición
                                                    continua a Plomo,
                                                    Arsénico y Flúor, que viven cerca de una zona metalúrgica en la
                                                    Ciudad de San Luis
                                                    Potosí</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Martínez Salinas Rebeca Isabel</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3657/DCA1ERS01101.pdf?sequence=3&isAllowed=y">Estimación
                                                    de riesgo en salud por exposición a hidrocarburos aromáticos
                                                    policíclicos y DDT
                                                    residual en población infantil del Estado de Chiapas</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Costilla Salazar Rogelio</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3611">Evaluación
                                                    de riesgo en salud en dos sitios contaminados por bifenilos
                                                    policlorados (PCBs) y
                                                    metales pesados</a></td>
                                            <td>Dr. Iván Nelinho Pérez Maldonado</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>González Mille Donaji Josefina</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3584/DJGM-Tesis%20Doctorado.pdf?sequence=1&isAllowed=y">Aplicación
                                                    de una metodología de evaluación de riesgo ecológico en fauna
                                                    acuática de
                                                    Coatzacoalcos, Veracruz</a></td>
                                            <td>Dr. José de Jesús Mejía Saavedra</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Ilizaliturri Hernández César Arturo</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3583/DCA1SHU01001.pdf?sequence=3&isAllowed=y">Aplicación
                                                    de una metodología de evaluación de riesgo ecológico en el
                                                    sistema de humedales de
                                                    Coatzacoalcos, Veracruz</a></td>
                                            <td>Dr. José de Jesús Mejía Saavedra</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Pelallo Martínez Nadia Azenet</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3738/DCA1COA01001.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de riesgo en salud en población infantil expuesta a una mezcla
                                                    de contaminantes en
                                                    Coatzacoalcos, Veracruz</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Alegría Torres Jorge Alejandro</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3622/DCA1DDE00901.pdf?sequence=3&isAllowed=y">DDE:
                                                    Mecanismos moleculares de apoptosis y de respuesta génica en
                                                    células mononucleares
                                                    de sangre periférica</a></td>
                                            <td>Dr. Iván Nelinho Pérez Maldonado</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Domínguez Cortinas Gabriela</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3604/DCA1EIF00901.pdf?sequence=3&isAllowed=y">Evaluación
                                                    del impacto del fenómeno de iniquidad ambiental en la salud de
                                                    poblaciones
                                                    infantiles en San Luis Potosí, S.L.P., México</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Espinosa Reyes Guillermo</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3633/DCA1DYA00901.pdf?sequence=3&isAllowed=y">Diseño
                                                    y aplicación de una metodología de evaluación de riesgo
                                                    ecológico para fauna
                                                    terrestre</a></td>
                                            <td>Dr. José de Jesús Mejía Saavedra</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Rocha Amador Diana Olivia</td>
                                            <td><a target="_blank"
                                                    href="#">Neurotoxicidad
                                                    asociada a DDT, DDE y BPCs en niños residentes de comunidades
                                                    rurales del sureste
                                                    mexicano</a></td>
                                            <td>Dra. Jaqueline Calderón Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Trejo Acevedo Antonio</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4019/DCA1COP00901.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de la exposición a contaminantes orgánicos persistentes (COPs)
                                                    en niños de
                                                    mesoamérica</a></td>
                                            <td>Dr. Iván Nelinho Pérez Maldonado</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>López Guzmán Olga Dania</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4000/DCA1DET00701.pdf?sequence=1&isAllowed=y">Determinación
                                                    de los niveles de exposición perinatal al DDT y sus metabolitos
                                                    a través de sangre y
                                                    leche materna en comunidades endémicas de paludismo</a></td>
                                            <td>Dra. Leticia Yáñez Estrada</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>Torres Dosal Arturo</td>
                                            <td><a target="_blank"
                                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2392/DCA1DME00601.pdf?sequence=3&isAllowed=y">Desarrollo
                                                    de la metodología para la evaluación de riesgo en sitios
                                                    contaminados</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>

        <div class="col-12 col-sm-12 my-4">
            <p><br></p>
            <p><strong>Maestría en Ciencias Ambientales</strong></p>
        </div>

        <div class="accordion p-1" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <strong>Evaluación Ambiental &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2019</td>
                                            <td>Gardea López Alejandra</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/5721">Caracterización
                                                    ambiental del manantial "Ojo de Agua", Moctezuma, S.L.P. y
                                                    acciones para su
                                                    conservación y uso</a></td>
                                            <td>Dr. Antonio Cardona Benavides y Dr. Juan Antonio Reyes Agüero</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>López Díaz Norma Liliana</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5722/MCA1LDN201901.pdf?sequence=1&isAllowed=y">Evaluación
                                                    del potencial de generación de biogás en sitios de disposición
                                                    final del Estado de
                                                    San Luis Potosí, y sus posibles opciones de valorización</a>
                                            </td>
                                            <td>Dr. Alfredo Ávila Galarza</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Cisneros Vidales Alicia Anahí</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4536">Building
                                                    sustainable urban metabolism through resilience strategies in La
                                                    Pila, San Luis
                                                    Potosí, México</a></td>
                                            <td>Dr. Marcos Algara Siller y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Thanos Dimitrios</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4244">Towards
                                                    sustainable mobility-as-a-service: A roadmap for San Luis
                                                    Potosí, MX, using the MaaS
                                                    readiness index</a></td>
                                            <td>Dr. Marcos Algara Siller y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Benavides Mondragón Lucia Elsa</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4337">Advancing
                                                    sustainability in Latin American Cities: a study case on the
                                                    urban metabolism of San
                                                    Luis Potosí, México</a></td>
                                            <td>Dr. Alfredo Ávila Galarza y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Berger Alina Sofie</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4396/MCA1BAS201701.pdf?sequence=1&isAllowed=y">The
                                                    potential of greenhouse gas emissions reduction in the
                                                    agro-industrial sector: a
                                                    case study of biogas systems in Uruguay</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Ramchandra Bhandari</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Ruvalcaba Grimaldo Ruth Georgina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4189/MCA1RGR201701.pdf?sequence=3&isAllowed=y">Propuesta
                                                    de programa de auditoría ambiental de competencia estatal para
                                                    San Luis Potosí,
                                                    México</a></td>
                                            <td>Dr. Alfredo Ávila Galarza</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Arredondo García Erika Herminia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4128/MCA1AGE201601.pdf?sequence=3&isAllowed=y">Costos
                                                    ambientales por emisiones GEI en el marco normativo para la
                                                    producción de caña de
                                                    azúcar en la Huasteca Potosina</a></td>
                                            <td>Dr. Marcos Algara Siller</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Hernández Martínez Ilse Patricia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/5723">Propuestas
                                                    al
                                                    reglamento de construcciones del Municipio de San Luis Potosí
                                                    para transitar hacia
                                                    una zona metropolitana sustentable</a></td>
                                            <td>Dr. Marcos Algara Siller</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Jiménez Torres Andrés Yaotzin</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4118/AYJT__96778_Thesis%20project_ITT_PMPCA_ENREM_2014_2016.pdf?sequence=1&isAllowed=y">Analyzing
                                                    technical and economic suitability of renewables over wastewater
                                                    treatment plants /
                                                    an approach considering energy polices and their impacts</a>
                                            </td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Ramchandra Bhandari</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Mardones Hidalgo Melina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4118/AYJT__96778_Thesis%20project_ITT_PMPCA_ENREM_2014_2016.pdf?sequence=1&isAllowed=y">Biodegradation
                                                    of industrial wastewater in a laboratory-scale constructed
                                                    wetland</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Moreno Morales Laura Nereyda</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4121">Comportamiento
                                                    ambiental de residuos mineros</a></td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia y Dr. Erik ESpinosa Serrano
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Rodríguez Marat Martín Miguel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4682/MCA1RMM201601.pdf?sequence=1&isAllowed=y">Modelos
                                                    de predicción de generación de biogás: análisis crítico y
                                                    aplicación al caso de
                                                    Tucumán, Argentina</a></td>
                                            <td>Dr. Alfredo Ávila Galarza y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Hernández Domínguez Katia Gabriela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3952">Análisis de
                                                    las
                                                    variables del proceso de intercambio iónico para la puesta en
                                                    marcha de planta
                                                    piloto de tratamiento de aguas residuales</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Herrera Lopera Evelyn</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3983/MCA1GRO01501.pdf?sequence=1&isAllowed=y">Assessment
                                                    of groundwater contamination in the upper basin of Rio Grande,
                                                    Rio de Janeiro,
                                                    Brazil</a></td>
                                            <td>Dr. Antonio Cardona Benavides y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Martínez Valdez Ofelia Anais</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3977/MCA1MMM01501.pdf?sequence=1&isAllowed=y">Movilidad
                                                    de metales y metaloides en sitios mineros: predicción de impacto
                                                    en los recursos
                                                    hídircos</a></td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Román Gurrola Manuel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3851">Propuesta de
                                                    plan
                                                    para la gestión integral del agua en una cuenca con actividad
                                                    minera en el Municipio
                                                    de Aquiles Serdán, Chihuahua</a></td>
                                            <td>Dr. Israel Razo Soto y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Ruiz Rivera Claudia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3976/MCA1ECA01501.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de la calidad del agua de Villa de la Paz, San Luis Potosí,
                                                    México y propuestas de
                                                    tratamiento</a></td>
                                            <td>Dr. Antonio Cardona Benavides</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Sánchez Martínez Daniela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3849/MCA1ENV01501.pdf?sequence=3&isAllowed=y">Environmental
                                                    product evaluation guideline towards sustainable consumption a
                                                    case study on
                                                    compressed adobe block</a></td>
                                            <td>Dr. Marcos Algara Siller y Dr. Ramchandra Bhandari</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Espinosa Muñoz Salvador</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3872/MCA1DLC01401.pdf?sequence=3&isAllowed=y">Design
                                                    of a low-cost acclimatization system for sustainable social
                                                    housing in a
                                                    temperate-dry climate in México</a></td>
                                            <td>Dr. Marcos Algara Siller y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Ocando Gotera Maite Virginia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3979/MCA1EOU01401.pdf?sequence=1&isAllowed=y">Efficiency
                                                    of ultrasonic treatment for secondary sludge disintegration in
                                                    Bergisch Gladbach,
                                                    Germany</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Heise Lisa</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3692/MCA1DYN01301.pdf?sequence=1&isAllowed=y">Dynamics
                                                    of the coastal karst aquifer in northern Yucatán peninsula</a>
                                            </td>
                                            <td>Dr. Antonio Cardona Benavides y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Herrera Rendón Eduardo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3592">Relación
                                                    agua
                                                    subterránea-vegetación en la zona costera del norte de
                                                    Yucatán</a></td>
                                            <td>Dr. Antonio Cardona Benavides y Dr. Eduardo H. Graniel Castro</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Orozco Corona Dulce María</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3964/MCA1ATT01201.pdf?sequence=1&isAllowed=y">Attenuation
                                                    of solar radiation by the presence of moisture in San Luis
                                                    Potosí, México</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Ingo Stadler</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Pino Herrera Douglas Oswaldo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3599/MCA1ADS01301.pdf?sequence=1&isAllowed=y">Adsorption
                                                    kinetics modeling of a red azo dye onto bone char</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Somohano Gamboa Ricardo Ernesto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4164/MCA1SGR201301.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de la fitotoxicidad en suelos contaminados por metales pesados
                                                    pasivos ambientales
                                                    minero-metalúrgicos</a></td>
                                            <td>Dr. Israel Razo Soto y Dr. José de Jesús Mejía Saavedra</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Almanza Ramírez Andrés</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3643/MCA1CYC01201.pdf?sequence=1&isAllowed=y">Life
                                                    cycle assessment for wastewater treatment in the chemical
                                                    industry</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Herrera Zaragoza Liliana del Rocío</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3685/MCA1ESC01201.pdf?sequence=1&isAllowed=y">Escenarios
                                                    futuros del reúso de agua residual tratada a nivel terciario
                                                    para abastecimiento
                                                    público-urbano en Ecatepec, Estado de México</a></td>
                                            <td>Dr. Antonio Cardona Benavides</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Jiménez Lira Marisela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3686/MCA1ACC01201.pdf?sequence=1&isAllowed=y">Acciones
                                                    y estrategias para un plan de manejo de la microcuenca de Monte
                                                    Caldera, San Luis
                                                    Potosí</a></td>
                                            <td>Dr. Israel Razo Soto y Dr. Juan Carlos Torrico Albino</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Mayorga Ávila Rubí Estrella</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3667">Evaluación
                                                    de la
                                                    contaminación por arsénico y metales pesados en el distrito
                                                    minero Fresnillo
                                                    (Zacatecas, México)</a></td>
                                            <td>Dr. Israel Razo Soto</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Aguilera Flores Miguel Mauricio</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3558/MCA1ANA01101.pdf?sequence=3&isAllowed=y">Análisis
                                                    de riesgo ambiental por el manejo de sustancias químicas
                                                    peligrosas en las
                                                    instalaciones de la Facultad de Ingeniería de la UASLP</a></td>
                                            <td>Dr. Alfredo Ávila Galarza</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Azuara Sánchez Jorge Luis</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3542/MCA1SEA01101.pdf?sequence=3&isAllowed=y">Evaluation
                                                    of a solar energy apllication as a water supply solution for
                                                    households in the city
                                                    of San Luis Potosí</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Ingo Stadler</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Bermúdez Zarruk Ramses Jael</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3553/MCA1PEK01101.pdf?sequence=3&isAllowed=y">Peak
                                                    load clipping for greenhouse gas emission reduction in Managua,
                                                    Nicaragua: the role
                                                    of solar thermal water heaters and photovoltaic systems in
                                                    households</a></td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia y Dr. Ingo Stadler</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Calva Hernández David</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3602/MCA1CIS01101.pdf?sequence=3&isAllowed=y">Caracterización
                                                    isotópica de la precipitación en el Estado de San Luis
                                                    Potosí</a></td>
                                            <td>Dr. Antonio Cardona Benavides</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Flores Jiménez David Enrique</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3955/DCA1EEM01601.pdf?sequence=1&isAllowed=y">Estimación
                                                    de las emisiones y modelado del transporte de metano en la
                                                    atmósfera generado por la
                                                    quema de caña de azúcar en México</a></td>
                                            <td>Dr. Marcos Algara Siller y Dr. José Noel Carbajal Pérez</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Melo Cuervo Ricardo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3555/MCA1PAM01101.pdf?sequence=3&isAllowed=y">Evaluación
                                                    de un pasivo ambiental metalúrgico</a></td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Padilla González Claudio Manuel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3598/MCA1COE01101.pdf?sequence=3&isAllowed=y">A
                                                    comparison of the efficiency of sulfate reduction and cadmium
                                                    remotion using
                                                    constructed wetlands</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Portillo Pérez Guillermo Alberto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3574/MCA1PPG201101.pdf?sequence=3&isAllowed=y">Tidal
                                                    energy potential in the gulf of California</a></td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Rodríguez y Rodríguez Yolanda</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3551">Evaluación
                                                    de la
                                                    contaminación por metales en pasivos ambientales de actividades
                                                    metalúrgicas
                                                    históricas en el distrito minero Cerro de San Pedro, S.L.P.
                                                    (México)</a></td>
                                            <td>Dr. Israel Razo Soto</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Zatarain Salazar Jazmín</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3559/MCA1OPT01101.pdf?sequence=3&isAllowed=y">Optimization
                                                    of sludge dewatering process at bensberg municipal wastewater
                                                    treatmen plant</a>
                                            </td>
                                            <td>Dr. Luis Armando Bernal Jácome y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Aké Hernández Josué Hiram</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3629/MCA1WQM01001.pdf?sequence=3&isAllowed=y">Water
                                                    quality monitoring system approach to support Guapi-Macacu River
                                                    basin management,
                                                    Rio de Janeiro, Brazil</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Botello Salinas Leslie Aideé</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3628/MCA1MTH01001.pdf?sequence=3&isAllowed=y">Evaluation
                                                    method of an environmental management system of hazardous
                                                    substances in the
                                                    industry, case of a German-Mexican company</a></td>
                                            <td>Dr. Alfredo Ávila Galarza y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Chow Pineda Irene Gilma</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5726/MCA1CPI201001.pdf?sequence=1&isAllowed=y">Analysis
                                                    of the potential of biomass energy generation in Santiago de
                                                    Chile</a></td>
                                            <td>Dr. Israel Razo Soto y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Gallegos Martínez Erika</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3715/MCA1INV01001.pdf?sequence=1&isAllowed=y">Inventario
                                                    de emisiones de partículas y modelado de su transporte a partir
                                                    de fuentes de área
                                                    de una industria minera</a></td>
                                            <td>Dr. Alfredo Ávila Galarza</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Hoffmeister Mara Carina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3616/MCA1ASB01001.pdf?sequence=3&isAllowed=y5">Plan
                                                    integrador para la gestión sostenible de aguas subterráneas: el
                                                    caso de la Cuenca
                                                    del Río Rapel, VI región de Chile</a></td>
                                            <td>Dr. Antonio Cardona Benavides y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Jorio Nyzar</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3585">Performance
                                                    analysis of wind resource assessment software in different wind
                                                    sites in Mexico and
                                                    Brazil</a></td>
                                            <td>Dr. Israel Razo Soto y Dr. Ingo Stadler</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Peña Delgado Libier Marisela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3581/MCA1SVE01001.pdf?sequence=3&isAllowed=y">Modeling
                                                    and simulation for VOCs extraction by an SVE system</a></td>
                                            <td>Dr. Antonio Cardona Benavides y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Ramírez Hernández Virginia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/5725">Caracterización
                                                    ambiental y análisis de riesgos para la salud en un sitio
                                                    minero-metalúrgico. Caso
                                                    de estudio: Concepción del Oro, Zacatecas, México</a></td>
                                            <td>Dr. Israel Razo Soto</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>González Grijalva Marco David</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3557/MCA1EVO00901.pdf?sequence=3&isAllowed=y">Evolución
                                                    espacio-temporal de la calidad del agua subterránea en el
                                                    acuífero Cedral-Matehuala:
                                                    Alternativas de uso</a></td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia y Dr. Antonio Cardona
                                                Benavides</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Ortega Montoya Claudia Yazmín</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3587/MCA1DPA00901.pdf?sequence=3&isAllowed=y">Diagnóstico
                                                    de peligro por almacenamiento de materiales peligrosos en la
                                                    zona industrial oriente
                                                    de la ciudad de San Luis Potosí, SLP</a></td>
                                            <td>Dr. Alfredo Ávila Galarza</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Rocha Escalante Hermann</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3875/MCA1EDS00901.pdf?sequence=3&isAllowed=y">Estrategias
                                                    para el desarrollo sustentable de los sistemas de flujo en el
                                                    acuífero de Rioverde,
                                                    S.L.P.</a></td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Wong Argüelles Cynthia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3575/MCA1WAC200901.pdf?sequence=3&isAllowed=y">Estudio
                                                    de organismos acuáticos macrobentónicos como indicadores de la
                                                    contaminación por
                                                    metales pesados en ríos de la Huasteca Potosina</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Hernández Martínez Jejanny Lucero</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5724/MCA1HMJ200801.pdf?sequence=1&isAllowed=y">Efecto
                                                    de la evolución geoquímica en la calidad del agua subterránea en
                                                    la porción central
                                                    de la zona media del Estado de San Luis Potosí</a></td>
                                            <td>Dr. Guillermo Javier Castro Larragoitia</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <strong>Gestión Ambiental &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2020</td>
                                            <td>Santiago Bautista Alejandra</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5727/MCA1SBA202001.pdf?sequence=1&isAllowed=y">Economía
                                                    familiar y aprovechamiento de los recursos naturales para la
                                                    alimentación en una
                                                    comunidad Tének de la Huasteca Potosina</a></td>
                                            <td>Dra. Anuschka Johanna María Van´t Hooft</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Caraballo Queffelec, Verónica</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/5728">Educación
                                                    para la
                                                    sostenibilidad y nuevas tecnologías: posibilidades, límites y
                                                    desafíos de los
                                                    MOOC</a></td>
                                            <td>Dr. Pedro Medellín Milán y Dra. Ana Cristina Cubillas Tejeda</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Castillo Cardona Carlos Eduardo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5731/MCA1CCC201901.pdf?sequence=1&isAllowed=y">Historia
                                                    ambiental de las inundaciones en San Luis Potosí: 1930-1940</a>
                                            </td>
                                            <td>Dr. Leonardo Ernesto Márquez Mireles</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Cueto García Jorge</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5729/MCA1CGJ201901.pdf?sequence=1&isAllowed=y">Biosphere
                                                    reserves as means for sustainable development. The case of Sian
                                                    Ka'an, Mexico</a>
                                            </td>
                                            <td>Dr. Miguel Aguilar Robledo y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>García García Ana Mónica de Jhesú</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5730/MCA1GGA201901.pdf?sequence=1&isAllowed=y">Vulnerabilidad
                                                    de los sitios turísticos en la región Huasteca, San Luis Potosí,
                                                    como resultado de
                                                    la variabilidad climática</a></td>
                                            <td>Dr. Valente Vázquez Solís</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Marcelli Sánchez Columba</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5732/MCA1MSC201901.pdf?sequence=1&isAllowed=y">Connectivity
                                                    for conservation: a systematc approach to link relevant areas
                                                    for conservation with
                                                    the biosphere reserve Sierra del Abra Tanchipa</a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dra. Claudia Raedig</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Martínez Huerta Manuel Alfredo</td>
                                            <td><a target="_blank" href="#">Sitios prioritarios para la
                                                    restauración ecológica en la
                                                    reserva de la biosfera Sierra del Abra Tanchipa</a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Pérez Silva Sandy Ivonne</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5733/MCA1PSS201901.pdf?sequence=1&isAllowed=y">Capacidad
                                                    de carga turística como instrumento para la gestión sustentable
                                                    en el Cerro de la
                                                    Bufa, Municipio de Zacatecas</a></td>
                                            <td>Dr. Valente Vázquez Solís</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Recinos Brizuela Sonia Steffany</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5734/MCA1RBS201901.pdf?sequence=1&isAllowed=y">A
                                                    coastal vulnerability index for sea turtle conservation
                                                    management in Tortuguero
                                                    National Park, Costa Rica</a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dra. Claudia Raedig</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Suárez Flores Nathalie Alejandra</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5735/MCA1SFN201901.pdf?sequence=1&isAllowed=y">Tourism
                                                    carrying capacity as an instrument for local sustainable
                                                    development in Peña de
                                                    Bernal, Querétaro</a></td>
                                            <td>Dr. Valente Vázquez Solís</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Vera González Vanessa</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5736/MCA1VGV201901.pdf?sequence=1&isAllowed=y">Propuesta
                                                    de gestión turística sustentable para la ruta del mezcal en la
                                                    Región Altiplano de
                                                    San Luis Potosí</a></td>
                                            <td>Dr. Valente Vázquez Solís</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Aguilar Ramírez Arantza Paulina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4539/MCA1ARA201801.pdf?sequence=1&isAllowed=y">Sustainability
                                                    in fashion: consumer behavior and the greening of the garment
                                                    industry in México</a>
                                            </td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Alvarado Casas Karla Alejandra</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4514/MCA1ACK201801.pdf?sequence=1&isAllowed=y">Gobernanza
                                                    ambiental en la reserva de la biosfera Sierra del Abra
                                                    Tanchipa</a></td>
                                            <td>Dr. Leonardo Ernesto Márquez Mireles</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Barriga Albuja Víctor Mauricio</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4534/MCA1BAV201801.pdf?sequence=1&isAllowed=y">Comparative
                                                    study of renewable energy policies between Ecuador and Germany.
                                                    Shifting from FITs
                                                    to auctions</a></td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Castillo López Daiana Mayuri</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4538/MCA1CLD201801.pdf?sequence=1&isAllowed=y">Evaluation
                                                    of food flow: urban metabolism in the northwest of Rio de
                                                    Janeiro State, Brazil</a>
                                            </td>
                                            <td>Dr. Pedro Medellín Milán y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Gallegos Trujillo Viridiana</td>
                                            <td><a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4537">The
                                                    role of
                                                    connectivity for sustainable regional development in the
                                                    Highland Plateau Zone of
                                                    San Luis Potosí</a></td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>García de la Torre Mariana</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4541/MCA1GTM201801.pdf?sequence=1&isAllowed=y">Desarrollo
                                                    de competencias para la sustentabilidad, a través del
                                                    aprendizaje basado en
                                                    escenarios</a></td>
                                            <td>Dr. Pedro Medellín Milán y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>López Andrade Miriam</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4336/MCA1LAM201801.pdf?sequence=1&isAllowed=y">Análisis
                                                    económico y de la sustentabilidad de la ganadería lechera
                                                    periurbana en la ciudad de
                                                    San Luis Potosí</a></td>
                                            <td>Dr. Gregorio Álvarez Fuentes</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Moon Boram</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4543/MCA1MBO201801.pdf?sequence=1&isAllowed=y">A
                                                    study of solar PV potential to ensure reliable supply of
                                                    affordable electricity in
                                                    favelas, Rio de Janeiro, Brazil</a></td>
                                            <td>Dr. Miguel Aguilar Robledo y Dra. Sabine Schlüter</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Morales Aguilar Gabriela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4510/MCA1MAG201801.pdf?sequence=1&isAllowed=y">Sustainable
                                                    development in Región Media through the "Zona Media extension an
                                                    investigation
                                                    center" of the Autonomous University of San Luis Potosí</a></td>
                                            <td>Dr. Pedro Medellín Milán y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Orta Salazar Carolina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4622/MCA1OSC201801.pdf?sequence=1&isAllowed=y">Factibilidad
                                                    de la implementación de la norma mexicana (NMX-AA-173-SCFI-2015)
                                                    para el registro de
                                                    proyectos forestales de carbono como instrumento de restauración
                                                    forestal a largo
                                                    plazo en la región prioritaria para la conservación Xilitla, San
                                                    Luis Potosí</a>
                                            </td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Sobisch Marcella Ulrike</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4508/MCA1USM201801.pdf?sequence=1&isAllowed=y">The
                                                    potential of agroecology as a tool for resilience-based
                                                    ecosystem stewardship.
                                                    Assessment regarding the introduction of agroecological
                                                    practices within the Maya
                                                    biosphere reserve's buffer zone (Petén, Guatemala)</a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dra. Claudia Raedig</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Brauer Clemens Gerhard</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4523/MCA1BBCG201701.pdf?sequence=1&isAllowed=y">Participative
                                                    development of a sustainable vanilla pod dryer for small scale
                                                    vanilla producers in
                                                    the Huasteca Potosina, México</a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dr. Ramchandra Bhandari</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Cobs Muñoz Víctor Oscar Leandro</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4126/MCA1CMV201701.pdf?sequence=3&isAllowed=y">Análisis
                                                    espacial de cambio de uso de suelo en reserva de la biosfera La
                                                    Campana - Lago
                                                    Peñuelas, Chile </a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Galindo Borbón Cecilia María</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4530/MCA1GBC201701.pdf?sequence=1&isAllowed=y">Comfort
                                                    perception and its influence on energy consumption in social
                                                    housing in hot dry
                                                    climates </a></td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft y Dr. Ramchandra Bhandari
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>López Pérez, Andrés Osvaldo</td>
                                            <td><a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4205">La
                                                    movilidad
                                                    en la
                                                    zona metropolitana de la ciudad de San Luis Potosí: análisis
                                                    espacial del transporte
                                                    público y propuesta por medio de estándares de desarrollo
                                                    orientado a transporte</a>
                                            </td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Meza Rodríguez María Isabel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4516/MCA1MRM201701.pdf?sequence=1&isAllowed=y">Drought
                                                    risk index in Rio de Janeiro State </a></td>
                                            <td>Dra. Patricia Julio Miranda y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Nuñez Ramírez Santiago</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4520/MCA1NRS201701.pdf?sequence=1&isAllowed=y">Lessons
                                                    learned from the 2011 landslide event in Nova Friburgo, Brazil?
                                                    - A resilience study
                                                    on the community and municipality levels </a></td>
                                            <td>Dra. Patricia Julio Miranda y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Ramírez Palomeque Tania Lucely</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4519/MCA1RPT201701.pdf?sequence=1&isAllowed=y">Aprovechamiento
                                                    comercial sustentable de orquídeas en contextos privados y
                                                    comunitarios: dos
                                                    estudios de caso en Xilitla, San Luis Potosí</a></td>
                                            <td>Dr. Javier Fortanelli Martínez</td>
                                        </tr>

                                        <tr>
                                            <td>2017</td>
                                            <td>Rodríguez Aboytes Jorge Gustavo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4210/MCA1RAJ201701.pdf?sequence=3&isAllowed=y">Evaluación
                                                    de competencias para la sustentabilidad en educación media
                                                    superior </a></td>
                                            <td>M.C. Luz María Nieto Caraveo</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Rosales González Juana</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4209/MCA1RGJ201701.pdf?sequence=1&isAllowed=y">El
                                                    derecho humano al agua para consumo personal y doméstico: el
                                                    caso de la comunidad
                                                    San Juan de Guadalupe, San Luis Potosí, S.L.P., México </a></td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Soto Torres María de Lourdes</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4334">Condiciones
                                                    ambientales en el ejido San Francisco, Municipio Zaragoza, San
                                                    Luis Potosí, para la
                                                    incorporación de proyectos asociados al turismo alternativo </a>
                                            </td>
                                            <td>Dr. Valente Vázquez Solís</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Jaramillo Duque Andrea Estefanía</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4120/MCA1JDA201601.pdf?sequence=3&isAllowed=y">A
                                                    comparison between two management systems of protected areas
                                                    from México (Sierra del
                                                    Abra Tanchipa biosphere reserve) and from Ecuador (Yasuni
                                                    National Park)</a></td>
                                            <td>Dr. Leonardo Ernesto Márquez Mireles< y Dra. Claudia Raedig</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Moreno Freydig Hugo César</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4672">Design of
                                                    non-motorized mobility plan for warm climate cities case:
                                                    Hermosillo, Sonora, Mexico
                                                </a></td>
                                            <td>Dr. Valente Vázquez Solís y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Pedrotti Jung Valentina Andrea</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4119/MCA1PJV201601.pdf?sequence=3&isAllowed=y">Sustainable
                                                    coffee alternatives for the rural community of San Francisco,
                                                    municipality of
                                                    Tamazunchale San Luis Potosí, México </a></td>
                                            <td>Dr. Leonardo Ernesto Márquez Mireles y Dra. Sabine Schlueter</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Ruiz Muñoz María Isabel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4125/MCA1RMM201601.pdf?sequence=3&isAllowed=y">Formulation
                                                    of a system for assessing the sustainability of the artisanal
                                                    production of mezcal:
                                                    the case of Santiago Matatlán, Oaxaca</a></td>
                                            <td>Mtra. Luz María Nieto Caraveo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Stöcker Nadine</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5737/MCA1SNA201601.pdf?sequence=1&isAllowed=y">Value
                                                    chain analysis of Bolivian quinoa as an organic fair trade
                                                    product</a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dra. Sabine Schlüter</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Trenti Very Luis Carlos</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3960/MCA1TVL201601.pdf?sequence=3&isAllowed=y">Caracterización
                                                    e importancia social de los sistemas agrícolas tradicionales en
                                                    el ejido
                                                    Escalerillas, San Luis Potosí </a></td>
                                            <td>Dr. Leonardo Ernesto Márquez Mireles</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Alderete Flores Darán Luisa </td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3982/MCA1AFD201501.pdf?sequence=3&isAllowed=y">De
                                                    la gobernanza ambiental transnacional a su implementación local:
                                                    el caso PACMUN en
                                                    México </a></td>
                                            <td>Dr. Miguel Aguilar Robledo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Combariza Díaz Nadia Catalina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3900">Evaluation
                                                    of
                                                    micro hydro rural electrification projects in the Dominican
                                                    Republic </a></td>
                                            <td>MDU. Filiberto Adrián Moreno Mata y Dr. Ramchandra Bhandari</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Galicia Castillo Juan Javier</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3847/MCA1GCJ201501.pdf?sequence=3&isAllowed=y">Distribución
                                                    geográfica del riesgo de rabia humana transmitida por el
                                                    murciélago vampiro
                                                    (Desmodus rotundus) en el Estado de San Luis Potosí </a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>González Pando Alejandría</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3854/MCA1GPA201501.pdf?sequence=3&isAllowed=y">Valoración
                                                    del modelo de evaluación y acreditación de los centros de
                                                    educación y cultura
                                                    ambiental (CECA) de México</a></td>
                                            <td>M.C. Luz María Nieto Caraveo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Hensler Loni Martina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3984/MCA1HLM201501.pdf?sequence=3&isAllowed=y">Propuesta
                                                    de un modelo de educación ambiental para la gestión integral del
                                                    territorio en
                                                    comunidades rurales</a></td>
                                            <td>M.C. Luz María Nieto Caraveo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Hidalgo Arellano Marcos Antonio</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3973/MCA1HAM201501.pdf?sequence=3&isAllowed=y">Analysis
                                                    of the current photovoltaic energy situation within net metering
                                                    policy in Brazil
                                                    and México: definition of barriers and recommendations for
                                                    further adoption </a>
                                            </td>
                                            <td>Dr. Pedro Medellín Milán y Dr. Ramchandra Bhandari</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Niño Daniel Bianca Lizeth</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3971/MCA1NDB201501.pdf?sequence=3&isAllowed=y">Emociones
                                                    de miedo e ira en la percepción de riesgo frente al fenómeno de
                                                    inundaciones súbitas
                                                    en la ciudad de San Luis Potosí </a></td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Perozo Suárez Daniel Alberto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3892/MCA1PSD201501.pdf?sequence=3&isAllowed=y">Endogenous
                                                    development, theory and practice: interventions in the rural
                                                    areas of Rio de
                                                    Janeiro, Brazil </a></td>
                                            <td>M.C. Luz María Nieto Caraveo</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Sánchez Santillano Federico Alberto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3908/MCA1SSF201501.pdf?sequence=3&isAllowed=y">Analysis
                                                    of decentralized solar energy systems resilience. A
                                                    Germany-Mexico transfer
                                                    approach</a></td>
                                            <td>MDU. Filiberto Adrián Moreno Mata y Dr. Ramchandra Bhandari </td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Taller Daniela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3962">Visiones
                                                    para la
                                                    rehabilitación y gestión de paisajes degradados en la Mata
                                                    Atlántica de Rio de
                                                    Janeiro, Brasil </a></td>
                                            <td>Dra. Patricia Julio Miranda y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Vivero Miranda Roberto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3975/MCA1VMR201501.pdf?sequence=3&isAllowed=y">Analysis
                                                    of alternative solutions for urban mobility: the case of
                                                    Münster, Germany</a></td>
                                            <td>Dr. Miguel Aguilar Robledo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Acosta Caro del Castillo Nestor Ricardo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3842/MCA1ACC201401.pdf?sequence=3&isAllowed=y">Planeación
                                                    y gestión de Ciudad Juárez en el marco de la movilidad
                                                    sustentable</a></td>
                                            <td>MDU. Filiberto Adrián Moreno Mata y Dr. Ricardo Villasis Keever</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Arce Mojica Teresa de Jesús</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3978/MCA1AMT201401.pdf?sequence=3&isAllowed=y">Developing
                                                    a methodological approach for a national risk index for
                                                    México</a></td>
                                            <td>Dra. Patricia Julio Miranda y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Benito Muñoz Sarah Nihaib</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3830/MCA1BMS201401.pdf?sequence=3&isAllowed=y">Integración
                                                    y evaluación del desempeño de las áreas de riesgo y sustancias
                                                    peligrosas en el
                                                    sistema de gestión ambiental de la UASLP</a></td>
                                            <td>Dr. Pedro Medellín Milán y Dra. Ana Cristina Cubillas Tejeda</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Butz Katharina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3856/MCA1BKA201401.pdf?sequence=3&isAllowed=y">Drought
                                                    vulnerability assessment in Northern-Central Chile</a></td>
                                            <td>Dra. Patricia Julio Miranda y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Calderillo Granados Karina Lizeth</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3840/MCA1CGK201401.pdf?sequence=3&isAllowed=y">Vulnerabilidad
                                                    social y sequía en las regiones Media y Huasteca Potosina</a>
                                            </td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Del Lama Soares Fernanda</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3841/MCA1LSF201401.pdf?sequence=3&isAllowed=y">Community
                                                    participation in slum upgrading: An assessment of participation
                                                    strategies of the
                                                    <em>Programa Vila Viva</em> in the <em>Aglomerado da Serra</em>
                                                    Belo Horizonte,
                                                    Minas Gerais, Brazil</a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>León Ortiz Claudio Alejandro</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3967">Integration
                                                    of
                                                    solar space cooling technology in Mexico's social housing
                                                    sector-feasibility study
                                                    in a warm humid region</a></td>
                                            <td>MDU. Filiberto Adrián Moreno Mata y Dr. Ramchandra Bhandari</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>León Rojas Gloria Isabel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3839/MCA1LRG201401.pdf?sequence=3&isAllowed=y">Evaluación
                                                    de la susceptibilidad a incendios forestales en San Luis Potosí,
                                                    México, una
                                                    contribución a la gestión del riesgo </a></td>
                                            <td>Dra. Patricia Julio Miranda y Dra. Lilia de Lourdes Manzo Delgado
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Martínez Mata Fabiola</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3870/MCA1MMF201401.pdf?sequence=3&isAllowed=y">Social
                                                    participation in the REDD+ program in México</a></td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Navarro Flores Diana Elizabeth</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3873">Propuesta de
                                                    un
                                                    programa de comunicación de riesgos por subsidencia del terreno
                                                    en la Zona
                                                    Metropolitana de San Luis Potosí - Soledad de Graciano Sánchez,
                                                    México </a></td>
                                            <td>Dra. Patricia Cubillas Tejeda</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Oliveira de Souza Fernanda</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3831/MCA1OSF201401.pdf?sequence=3&isAllowed=y">A
                                                    community-based approach for managing forest patches in the
                                                    Atlantic Forest of
                                                    Brazil - A case study of the micro-watershed Barrac&#227;o dos
                                                    Mendes, Rio de
                                                    Janeiro State </a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Peñaloza Guerrero Cynthia Marisol</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3869">Flood
                                                    resilience
                                                    assessment, a case study at Ciudad Valles, San Luis Potosí,
                                                    México</a></td>
                                            <td>Dra. Patricia Julio Miranda y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Sánchez Tapia Víctor Manuel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3827/MCA1STV201401.pdf?sequence=3&isAllowed=y">La
                                                    percepción del riesgo ante inundaciones súbitas en la Ciudad de
                                                    San Luis Potosí </a>
                                            </td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft y Dr. Álvaro Gerardo Palacio
                                                Aponte</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Trinidad García Karina Lizbeth</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3885/MCA1TGK201401.pdf?sequence=3&isAllowed=y">Caracterización
                                                    agroecológica de la vainilla <em>(Vainilla spp.)</em> en la
                                                    Huasteca Potosina</a>
                                            </td>
                                            <td>Dr. Humberto Reyes Hernández y Dr. Francisco Javier Sahagún Sánchez
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Volmer Ann Kathrin</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3980/MCA1VAK201401.pdf?sequence=3&isAllowed=y">Evaluation
                                                    of agricultural policies for small and middle scale farmers in
                                                    México: the case of
                                                    Villa de Arriaga </a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza y Dr. Juan Carlos Rorrico
                                                Albino</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Centeno Durán Guadalupe</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3617/MCA1CDG201301.pdf?sequence=3&isAllowed=y">Diseño
                                                    de recursos para el aprendizaje en bachillerato desde la
                                                    perspectiva de la
                                                    sustentabilidad </a></td>
                                            <td>M.C. Luz María Nieto Caraveo</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Chávez Porras Paulina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3590">Respuestas
                                                    locales
                                                    ante desafíos globales. Implicaciones del modelo de desarrollo
                                                    en las relaciones
                                                    socio-ambientales de una comunidad indígena de la Huasteca
                                                    Potosina</a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>González González Adriana</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3864/MCA1GGA201301.pdf?sequence=3&isAllowed=y">Payments
                                                    for environmental services in the Huasteca Potosina region,
                                                    México: forest cover
                                                    impacts at regional level and socio-economic impacts at local
                                                    level</a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dr. Juan Carlos Torrico Albino</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Hernández Fuentes Yuritzi</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5738/MCA1HFY201301.pdf?sequence=1&isAllowed=y">Usos
                                                    del agua en la Ciudad de San Luis Potosí, 1831-1887 </a></td>
                                            <td>Dr. Alexander Betancourt Mendieta</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Leija Loredo Edgar Gregorio</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3874/MCA1LLE201301.pdf?sequence=3&isAllowed=y">Cambios
                                                    en la cubierta vegetal/uso del suelo y escenarios futuros en
                                                    tres municipios de la
                                                    región costera del Estado de Oaxaca, México</a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Navarro Gamboa Miguel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3693/MCA1NGM201301.pdf?sequence=3&isAllowed=y">Community
                                                    participation in the alternative tourism center Ecoturixtlán,
                                                    Municipality of Ixtlán
                                                    de Juárez, Oaxaca México</a></td>
                                            <td>Dr. Valente Vázquez Solís y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Olivo Menchaca Georgina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3837/MCA1OMG201301.pdf?sequence=3&isAllowed=y">Inventario
                                                    de emisiones de gases de efecto invernadero del sector energía,
                                                    balance estatal de
                                                    energía y estrategias de mitigación </a></td>
                                            <td>Dr. Pedro Medellín Milán y Dr. José Antonio Ávalos Lozano</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Ordoñez Cobos Diana Paola</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3601/MCA1OCD201301.pdf?sequence=3&isAllowed=y">Social
                                                    representations of mining activity in the high mountain
                                                    ecosystem "Páramo de
                                                    Santurbán" (Santander, Colombia)</a></td>
                                            <td>Dr. Miguel Aguilar Robledo y Dr. Juan Carlos Torrico Albino</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Terán Valdez Andrea</td>
                                            <td><a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/3606">A
                                                    biological
                                                    corridor for the Sierra Madre Oriental (San Luis Potosí,
                                                    México): socio-economic
                                                    viability for enhancing connectivity </a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dra. Claudia Raedig</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Vargas Huipe Nuria Delia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3668/MCA1VHN201301.pdf?sequence=3&isAllowed=y">Construcción
                                                    de un modelo de ordenamiento ecológico local comunitario,
                                                    Pokchich, San Antonio, San
                                                    Luis Potosí</a></td>
                                            <td>Dr. Pedro Medellín Milán y Dr. José Antonio Ávalos Lozano</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Arreola Martínez Beatriz Estrella</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3636/MCA1AMB201201.pdf?sequence=3&isAllowed=y">Determinación
                                                    de paratión metilico por espectrofotometría en suelo de zonas
                                                    gregarígenas de
                                                    <em>Schistocerca piceifrons piceifrons picefrons</em> y su
                                                    probable efecto en la
                                                    apicultura</a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Beele Albert Heinrich</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3619/MCA1BAH201201.pdf?sequence=3&isAllowed=y">Evaluation
                                                    of the new policy for thermal insulation standards in the
                                                    residential sector in
                                                    México. Applicability of the standard NOM-020-ENER-2011</a></td>
                                            <td>Dr. Carlos Contreras Servín y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Clausen Gretel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3695/MCA1CGR201201.pdf?sequence=3&isAllowed=y">Governance
                                                    of sustainable social housing programs: potential for
                                                    implementation of UNEP-SUSHI
                                                    in Uruguay </a></td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Di Carlo Anna Lena</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3690/MCA1DCA201201.pdf?sequence=3&isAllowed=y">Propuesta
                                                    de un modelo para la construcción del desarrollo endógeno
                                                    sustentable en el ámbito
                                                    local - teorías y práctica </a></td>
                                            <td>M.C. Luz María Nieto Caraveo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Flores Aguilar Adrián</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3654/MCA1FAA201201.pdf?sequence=3&isAllowed=y">Reducing
                                                    emissions from deforestation and forest degradation (REDD+) in
                                                    the Municipality of
                                                    Cachoeiras de Macacu, RJ-Brazil: feasibility determination
                                                    through an environmental
                                                    governance analysis</a></td>
                                            <td>Dr. Miguel Aguilar Robledo y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Guevara Dorado Rocío del Alba</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3691/MCA1GDR201201.pdf?sequence=3&isAllowed=y">Diseño
                                                    de una estrategia educativa para el cambio climático en el
                                                    Estado de San Luis
                                                    Potosí, México</a></td>
                                            <td>M.C. Luz María Nieto Caraveo</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Guevara Macías María de Jesús</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4168">Análisis de
                                                    la
                                                    vulnerabilidad socioeconómica por inundaciones en la Ciudad de
                                                    San Luis Potosí</a>
                                            </td>
                                            <td>Dr. Álvaro Gerardo Palacio Aponte</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Herrera Pérez Iván Leonardo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3640/MCA1HPI201201.pdf?sequence=3&isAllowed=y">Análisis
                                                    de la susceptibilidad a la subsidencia en el Estado de San Luis
                                                    Potosí (México) como
                                                    herramienta de la gestión ambiental</a></td>
                                            <td>Dra. Patricia Julio Miranda</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Latosfki Robles Mariam</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3656/MCA1LRM201201.pdf?sequence=3&isAllowed=y">Restoration
                                                    priorities for Mexican islands</a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dr. Sabine Schlüter</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Macías Díaz Paula Guadalupe</td>
                                            <td><a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4167">Wind
                                                    resources in
                                                    the highlands region of San Luis Potosí State and possible
                                                    applications for rural
                                                    zones </a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo y Dr. Friedrich Wilhelm Grimme
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Moie Jascha Julius</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4166">Bioclimatic
                                                    residential building design under tropical humid conditions:
                                                    short on-site comfort
                                                    evaluations and physical investigations for different case
                                                    studies in Quintana Roo,
                                                    México </a></td>
                                            <td>Dra. Carlos Contreras Servín y Dr. Friedrich Wilhelm Grimme</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Ortíz Liñán Mónica Elena</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5739/MCA1OLM201201.pdf?sequence=1&isAllowed=y">Propuesta
                                                    de un sistema de información geográfica, como instrumento de
                                                    gestión del agua en la
                                                    Ciudad de San Luis Potosí, México </a></td>
                                            <td>Dra. Patricia Julio Miranda</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Peralta Rivero Carmelo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3652/MCA1PRC201201.pdf?sequence=3&isAllowed=y">Evaluación
                                                    del uso, cambio de uso y cobertura del suelo, y proyectos
                                                    forestales del Mecanismo
                                                    de Desarrollo Limpio (MDL) y de la reducción de emisiones
                                                    derivadas de la
                                                    deforestación y degradación forestal (REDD) en el Municipio de
                                                    Riberalta, Amazonía
                                                    Boliviana</a></td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Quintero Ruiz Joab Raziel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3687/MCA1QRJ201201.pdf?sequence=3&isAllowed=y">Estudio
                                                    ambiental y social comparativo del bosque húmedo en base al
                                                    cambio de uso de suelos
                                                    entre la Huasteca Potosina, México y la Mata Atlántica, Rio de
                                                    Janeiro, Brasil </a>
                                            </td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Riemann Sebastian</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3650/MCA1RSE201201.pdf?sequence=3&isAllowed=y">Resource
                                                    management in sustainable tourism: a facilitator for community
                                                    empowering
                                                    development in La Vainilla, Oaxaca </a></td>
                                            <td>Dr. Leonardo Ernesto Márquez Mireles y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Ríos Guayasamín Pedro Damián</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3641/MCA1RGP201201.pdf?sequence=3&isAllowed=y">Characterization
                                                    of the global value chains of organic products in Rio de
                                                    Janeiro, Brazil: case study
                                                    in Cachoerias de Macacú and Nova Friburgo </a></td>
                                            <td>Dr. Humberto Reyes Hernández y Dr. Juan Carlos Torrico Albino</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Sosa García Ana Olivia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3550/MCA1SGA201201.pdf?sequence=3&isAllowed=y">Impacto
                                                    ambiental generado por los bancos de material en la Zona Media y
                                                    de la Huasteca del
                                                    Estado de San Luis Potosí </a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Souza Lenzi Fernanda</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3645/MCA1SLF201201.pdf?sequence=3&isAllowed=y">The
                                                    flood early warning system in the Itajaí river basin: its
                                                    institutional structure
                                                    and the role of the civil defence</a></td>
                                            <td>Dr. Álvaro Gerardo Palacio Aponte y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Stevens Vázquez Guillermo Sigfrido</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/4170">Análisis
                                                    espacial
                                                    de la vulnerabilidad hídrica en la Zona Metropolitana de la
                                                    Ciudad de San Luis
                                                    Potosí-Soledad de Graciano Sánchez, México </a></td>
                                            <td>Dra. Patricia Julio Miranda</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Tapia Hernández Karla Teresa</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3552/MCA1THK201201.pdf?sequence=3&isAllowed=y">La
                                                    cultura Wixarika en torno a la peregrinación a Wirikuta: la
                                                    importancia del agua en
                                                    el sitio sagrado natural </a></td>
                                            <td>Dra. Anuschka Johanna María Van't Hooft </td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Tristán Rodríguez María Suhey</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3658/MCA1TRM201201.pdf?sequence=3&isAllowed=y">Interdependencia
                                                    e indivisibilidad entre los derechos a la vivienda digna y el
                                                    medio ambiente sano
                                                </a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Vera Aguirre Sara Marcela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3635">Water
                                                    governance
                                                    assessment focused on water supply and sanitation in watersheds
                                                    of Rio de Janeiro
                                                    State, Brazil </a></td>
                                            <td>Dr. Pedro Millán Milán y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Altrichter Christian</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3678/MCA1ACH201101.pdf?sequence=3&isAllowed=y">Diversification
                                                    of the energy matrix in the Metropolitan Region of Santiago de
                                                    Chile with focus on
                                                    renewable energies </a></td>
                                            <td>MDU. Filiberto Adrián Moreno Mata y Dr. Ingo Stadler</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Castillo Moncada Jenny Alejandra</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3681/MCA1CMJ201101.pdf?sequence=3&isAllowed=y">Prioritization
                                                    measures within the watershed management master plan</a></td>
                                            <td>Dr. Álvaro Gerardo Palacio Aponte y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Cote Navarro Fabián Darío</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3545/MCA1CNF201101.pdf?sequence=3&isAllowed=y">Analysis
                                                    of a hydrological modelling tool for water resources management
                                                    in the Valles river
                                                    basin, Mexico </a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Dumack Stephanie</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3571">Strategies
                                                    and
                                                    concepts towards integrated non-formal environmental education
                                                    in Mexico</a></td>
                                            <td>MDU. Filiberto Adrián Moreno Mata y Dr. Juan Carlos Torrico Albino
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Flores Esquivel Sandra Patricia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3620/MCA1FES201101.pdf?sequence=3&isAllowed=y">Conflictos
                                                    socioambientales en torno al área de confinamiento de basuras.
                                                    El caso del tiradero
                                                    de "Las Cumbres" </a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Flores Hernández Ulises</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3651/MCA1FHU201101.pdf?sequence=3&isAllowed=y">Energías
                                                    renovables para el desarrollo rural sostenible en comunidades
                                                    indígenas dentro de la
                                                    Huasteca Potosina</a></td>
                                            <td>MDU. Filiberto Adrián Moreno Mata y Dr. Juan Carlos Torrico Albino
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Gütermann Lena Marie</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3713/MCA1GLM201101.pdf?sequence=3&isAllowed=y">Economic
                                                    elements to support the establishment of Integrated Water
                                                    Resources Management
                                                    (IWRM) in Chile: case study of the Villarrica Lake watershed
                                                </a></td>
                                            <td>Dr. Miguel Aguilar Robledo y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>John Andreas</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3548">Análisis del
                                                    proceso de consulta y participación en proyectos petroleros en
                                                    el territorio
                                                    indígena Mosetén, Bolivia </a></td>
                                            <td>Dr. Miguel Aguilar Robledo y Dr. Juan Carlos Torrico Albino</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Mancilla Jonguitud Carlos</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3543/MCA1MJC201101.pdf?sequence=3&isAllowed=y">Análisis
                                                    de alternativas de movilidad urbana sostenible en la Zona
                                                    Metropolitana de San Luis
                                                    Potosí: El caso de la bicicleta </a></td>
                                            <td>MDU. Filiberto Adrián Moreno Mata</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Marin Silverio Yudel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3714/MCA1MSY201101.pdf?sequence=3&isAllowed=y">Diagnóstico
                                                    sistémico de viabilidad social: Corredor Biológico Central,
                                                    Belize </a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Moreno Unda Arcelia Amaranta</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3541/MCA1MUA201101.pdf?sequence=3&isAllowed=y">Environmental
                                                    effects of the national tree clearing program, México,
                                                    1972-1982</a></td>
                                            <td>Dr. Miguel Aguilar Robledo y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Ramírez Sánchez Angélica</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3702">Integration
                                                    of
                                                    water in global energetic balance of sustainable housing</a>
                                            </td>
                                            <td>MDU. Filiberto Adrián Moreno Mata y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Tun Carlos Guillermo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3666/MCA1TCG201101.pdf?sequence=3&isAllowed=y">Actitudes
                                                    y comportamientos socioambientales en el sistema de gestión de
                                                    residuos sólidos.
                                                    Investigación-acción participativa en Belmopán, Belize</a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Ay Robertos Flor de Anahí</td>
                                            <td><a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/3632">El
                                                    conflicto
                                                    entre
                                                    turismo y protección ambiental: el caso del Municipio de Isla
                                                    Mujeres en la
                                                    península de Yucatán </a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Cabrera Pacheco Ana Julia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3737">Relaciones
                                                    socio-ambientales según la temporalidad </a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Kuhn Christian Alexander</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3580/MCA1KCA201001.pdf?sequence=3&isAllowed=y">Iniciativas
                                                    de campus verdes, un enfoque de cambio organizacional </a></td>
                                            <td>Dr. Pedro Medellín Milán y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Magaña Ortiz Cecilia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3646">Estudio
                                                    comparativo de la langosta centroamericana <em>(Schistocerca
                                                        piceifrons piceifrons
                                                        walker)</em> en la Huasteca Potosina y el Estado de Yucatán
                                                </a></td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Olvera Vargas Luis Alberto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3716/MCA1OVL201001.pdf?sequence=3&isAllowed=y">Análisis
                                                    espacial y temporal de la propagación de la broca de café
                                                    <em>Hypothenemus
                                                        hampei</em> (Ferrari) en la Huasteca Potosina </a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Schwerin Anja</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3600/MCA1SAN201001.pdf?sequence=3&isAllowed=y">Analysis
                                                    of the potential solar energy market in the Caribbean </a></td>
                                            <td>Dr. Pedro Medellín Milán y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Solís Salgado Luis Gilberto</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3627">Riesgos y
                                                    conflictos ambientales en Acapulco motivados por el desarrollo
                                                    turístico.
                                                    Diagnóstico para una propuesta sustetable </a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Vargas Mergold Angélica Violeta</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3591/MCA1VMA201001.pdf?sequence=3&isAllowed=y">La
                                                    reserva de la biosfera Sierra del Abra Tanchipa: las ANP de lo
                                                    internacional a lo
                                                    local </a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Aceves de Alba Jorge</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3588/MCA1AAJ200901.pdf?sequence=3&isAllowed=y">Evaluación
                                                    del riesgo por la presencia de la langosta centroamericana
                                                    <em>(Schistocerca
                                                        piceifrons piceifrons W.)</em> en la Huasteca Potosina
                                                    apoyado en SIG y
                                                    evaluación multicriterio </a></td>
                                            <td>Dra. María Guadalupe Galindo Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Buendía Oliva Mariana</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4001/MCA1BOM200901.pdf?sequence=3&isAllowed=y">Diseño
                                                    y evaluación de materiales educativos para el diplomado virtual
                                                    Diseño de Proyectos
                                                    de Educación Ambiental y para la Sustentabilidad </a></td>
                                            <td>M.C. Luz María Nieto Caraveo</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Delgado Lemus Tzitzi Sharhí</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3586/MCA1DLT200901.pdf?sequence=3&isAllowed=y">Evaluación
                                                    de sustentabilidad de los sistemas de producción rural en tres
                                                    comunidades de la
                                                    microcuenca Umécuaro-Loma Caliente, Michoacán </a></td>
                                            <td>Dr. Pedro Medellín Milán</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Herrera Godina Melva Guadalupe</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3087/MCA1HGM200901.pdf?sequence=1&isAllowed=y">Utilización
                                                    de los sistemas de información geográfica para el estudio de la
                                                    vulnerabilidad en
                                                    los Municipios de Ébano, Tamuín y San Vicente Tancuayalab ante
                                                    la ruta de exposición
                                                    del plaguicida fipronil </a></td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Montoya Toledo José Nelson</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3634/MCA1MTJ200901.pdf?sequence=3&isAllowed=y">Diagnóstico
                                                    participativo de los procesos de deforestación en dos
                                                    comunidades de la Sierra Madre
                                                    Oriental del Estado de San Luis Potosí </a></td>
                                            <td>Dr. Humberto Reyes Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Martín del Campo Jiménez Valeria Martín</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5740/MCA1MCJ200801.pdf?sequence=1&isAllowed=y">Estrategias
                                                    de gestión y su relación con el desarrollo sustentable en una
                                                    comunidad vulnerable.
                                                    Un análisis desde las metodologías participativas </a></td>
                                            <td>Dra. María Teresa Ayllón Trujillo</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Morales Ávalos Laura Edith</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4010/MCA1MAL200801.pdf?sequence=3&isAllowed=y">Diagnóstico
                                                    organizacional para el desempeño ambiental de la UASLP: el
                                                    sistema de manejo
                                                    ambiental </a></td>
                                            <td>Dr. Pedro Medellín Milán</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Palafox Juárez Erika Betzabeth</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4011/MCA1PJE200801.pdf?sequence=3&isAllowed=y">Propuesta
                                                    de un modelo de simulación de impacto y vulnerabilidad ambiental
                                                    en la Cuenca del
                                                    Río Valles </a></td>
                                            <td>Dr. Pedro Medellín Milán</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Guevara Gasca Víctor Amador</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/1796/MCA1GGV200701.pdf?sequence=1&isAllowed=y">Distribución
                                                    espacial y abastecimiento del agua para uso humano, en el área
                                                    metropolitana de la
                                                    Ciudad de San Luis Potosí: problemática, implicaciones y
                                                    alternativas </a></td>
                                            <td>Dr. Carlos Contreras Servín</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Ramos Viera Aida</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/1808/MCA1RVA200701.pdf?sequence=1&isAllowed=y">La
                                                    investigación cartográfica participativa como herramienta para
                                                    la conservación
                                                    ambiental en comunidades Tének de la Huasteca Potosina, México
                                                </a></td>
                                            <td>Dr. Miguel Aguilar Robledo</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Thomas Muñoz Rosalba</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/1795/MCA1TMR200701.pdf?sequence=1&isAllowed=y">Diseño
                                                    de un programa transversal e interdisciplinario para la
                                                    formación de competencias
                                                    genéricas ambientales en alumnos de licenciatura de la UASLP
                                                </a></td>
                                            <td>M.C. Luz María Nieto Caraveo</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>Ilizaliturri Hernández César Arturo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/2044/MCA1IHC200601.pdf?sequence=1&isAllowed=y">Modelo
                                                    de intervención educativa para el parque estatal "Manantial de
                                                    la Media Luna";
                                                    Rioverde, San Luis Potosí </a></td>
                                            <td>M.C. Luz María Nieto Caraveo</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>Noyola Cherpitel Ricardo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3871">Escenarios
                                                    para la
                                                    gestión ambiental: la zona minera de Villa de la Paz -
                                                    Matehuala, SLP </a></td>
                                            <td>Dr. Pedro Medellín Milán</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>Sus Hernández Martha Cristina</td>
                                            <td><a target="_blank" href="#">Análisis de procesos de
                                                    implementación de sistemas de
                                                    gestión ambiental en empresas localizadas en el Estado de San
                                                    Luis Potosí</a></td>
                                            <td>Dr. Pedro Medellín Milán</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <strong>Prevención y Control &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2019</td>
                                            <td>Alanís Leal Iris Alessandra</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5741/MCA1ALI201901.pdf?sequence=1&isAllowed=y">Oxidación
                                                    electroquímica avanzada para la degradación de contaminantes
                                                    emergentes derivados de
                                                    benzotiazol obtenidos a partir de fotólisis a condiciones
                                                    ambientales
                                                    controladas</a></td>
                                            <td>Dr. Israel Rodríguez Torres</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Guzmán Álvarez Camerina Janeth</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4766/MCA1GAC201901.pdf?sequence=1&isAllowed=yy">Eliminación
                                                    del colorante negro reactivo 5 en soluciones acuosas mediante
                                                    materiales sintéticos
                                                    a base de celulosa, magnetita y polipirrol</a></td>
                                            <td>Dra. Paola Elizabeth Díaz Flores y Dr. Víctor Manuel Ovando Medina
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Castillo Pérez Luis Jesús</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4620/MCA1CPL201801.pdf?sequence=1&isAllowed=y">Aclimatación
                                                    simbiótica de vitroplantas de <em>Encyclia parviflora</em>
                                                    (Regel) withner y <em>
                                                        Stanhopea tigrina</em> bateman (Orchidaceae) para su
                                                    conservación <em>ex
                                                        situ</em></a></td>
                                            <td>Dra. Candy Carranza Álvarez</td>
                                        </tr>
                                        <tr>
                                            <td>2018</td>
                                            <td>Netro Soto Silvia Karina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4621/MCA1NSS201801.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de la interacción bacterias endófitas <i>-Typha latifolia</i>
                                                    (Espadaña) en la
                                                    remoción de Cd (II) en solución</a></td>
                                            <td>Dra. Candy Carranza Álvarez y Dr. Alejandro Hernández Morales</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Moctezuma Granados Claudia Esthela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4208/MCA1MGC201701.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de <i>Pseudomonas</i> endófitas de la raíz de <i>Typha
                                                        latifolia</i> en la
                                                    fitoextracción de Cd (II)</a></td>
                                            <td>Dra. Candy Carranza Álvarez</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Peña Guerrero Mayra Daniela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5742/MCA1PGM201701.pdf?sequence=1&isAllowed=y">Assessment
                                                    of water quality and quantity for agricultural requirements
                                                    during drought periods
                                                    in the Maipo River Basin, Chile</a></td>
                                            <td>Dr. Carlos Alfonso Muñoz Robles y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2017</td>
                                            <td>Solís Moreno Claudia Angélica</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4526/MCA1SMC201701.pdf?sequence=1&isAllowed=y">Remoción
                                                    de Pb<sup>2+</sup> en fase acuosa mediante sistemas por lote y
                                                    continuo utilizando
                                                    un bioadsorbente queratinoso biodegradable</a></td>
                                            <td>Dra. Elsa Cervantes González</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Hasselbring Clara Louisa Anna</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4124/MCA1HCL201601.pdf?sequence=3&isAllowed=y">The
                                                    planning phase of an energy management system according to ISO
                                                    50001: elaboration
                                                    for the Robert Bosch plant in San Luis Potosí, México</a></td>
                                            <td>Dr. Israel Rodríguez Torres y Dr. Johannes Hamhaber</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Ruiz Castillo Ana Laura</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3961/MCA1RCA201601.pdf?sequence=3&isAllowed=y">Recuperación
                                                    de partículas y nanopartículas de plata con sistemas biológicos
                                                    anaerobios de lodo
                                                    granular y biopelícula</a></td>
                                            <td>Dra. Marisol Gallegos García</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Flores Rojas Alfredo Israel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3906/MCA1FRA201501.pdf?sequence=3&isAllowed=y">Estudios
                                                    de equilibrio de adsorción de fluoruros sobre compositos a base
                                                    de quitosano</a>
                                            </td>
                                            <td>Dra. Paola Elizabeth Díaz Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Reyna Villanueva Luis Rubén</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3893/MCA1RVL201501.pdf?sequence=3&isAllowed=y">Producción
                                                    y caracterización de biodiesel mediante catálisis heterogénea
                                                    empleando hidróxidos
                                                    dobles laminares</a></td>
                                            <td>Dr. Nahúm Andrés Medellín Castillo</td>
                                        </tr>
                                        <tr>
                                            <td>2015</td>
                                            <td>Rincón Mejía Carlos Andrés</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3891/MCA1RMC201501.pdf?sequence=3&isAllowed=y">Biodegradation
                                                    of dimethyphenols in a laboratory scale constructed wetland</a>
                                            </td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Escot Espinoza Víctor Manuel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3905/MCA1EEV201401.pdf?sequence=3&isAllowed=y">Dinámica
                                                    de la diversidad microbiana con actividad sulfato reductora
                                                    durante la
                                                    bioestabilización de As en sistemas batch</a></td>
                                            <td>Dra. Elsa Cervantes González y Dr. Roberto Briones Gallardo</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Segovia Sánchez Ollín Citlalli</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3988/MCA1SSO201401.pdf?sequence=3&isAllowed=y">Environmental
                                                    cost-benefit analysis of decentralized wastewater and sanitation
                                                    technologies in the
                                                    microbasin of Barrac&#227;o Dos Mendes, Brazil</a></td>
                                            <td>Dr. Nahúm Andrés Medellín Castillo y Dr. Sabine Schlüter</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Tovar García Leonardo Daniel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/handle/i/3832">Preparación
                                                    y
                                                    modificación de carbones de hueso para la remoción de fluoruros
                                                    en solución
                                                    acuosa</a></td>
                                            <td>Dr. Nahúm Andrés Medellín Castillo</td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td>Villarraga Morales Huayna Paola</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3886/MCA1VMH201401.pdf?sequence=3&isAllowed=y">Removal
                                                    of selected constituents of coal pyrolysis effluents in
                                                    constructed wetlands
                                                    laboratory scale</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Aguirre Muñoz Carolina</td>
                                            <td><a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/3679">The
                                                    water
                                                    framework directive and the chilean normative: towards a
                                                    comprehensive relation
                                                    between water quality and morphological characterization in
                                                    surface water, Limarí
                                                    basin, Chile</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre y Dr. Lars Ribbe</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Pérez Cuervo María Gabriela</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3699/MCA1PCM201301.pdf?sequence=3&isAllowed=y">Caracterización
                                                    y evaluación de la polilactida en el diseño de objetos textiles
                                                    lúdicos</a></td>
                                            <td>Dr. Roberto Briones Gallardo y Dra. Diana Cayuela Marín</td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Rodríguez Torres Paola</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3705/MCA1RTP201301.pdf?sequence=3&isAllowed=y">Evaluación
                                                    fisiológica de especies vegetales que crecen en sitios
                                                    impactados por residuos
                                                    generadores de drenaje ácido de roca</a></td>
                                            <td>Dr. Roberto Briones Gallardo y Dra. Ma. del Carmen González Chávez
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td>Sánchez Martínez Nadxieli Paulina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4165/MCA1SMN201301.pdf?sequence=3&isAllowed=y">Policies
                                                    and life cycle analysis for the production of biofuels</a></td>
                                            <td>Dr. Pedro Medellín Milán y Dr. Juan Carlos Torrico Albino</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Castillo Taleno Vilmaurora</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3694/MCA1CTV201201.pdf?sequence=3&isAllowed=y">Comparison
                                                    of two constructed wetland with different soil depth in relation
                                                    to their nitrogen
                                                    removal</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Ortega Morales Natalia Belén</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3579/MCA1OMN201201.pdf?sequence=3&isAllowed=y">Asociación
                                                    entre la fracción bioaccesible y la bioacumulación en algunas
                                                    especies vegetales que
                                                    crecen en el cauce del arroyo de San Pedro</a></td>
                                            <td>Dr. Roberto Briones Gallardo</td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td>Salazar Hernández Elizabeth</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3624/MCA1SHE201201.pdf?sequence=3&isAllowed=y">Remoción
                                                    de hidrocarburos mediante biopolímeros naturales: efecto del
                                                    tamaño de partícula</a>
                                            </td>
                                            <td>Dra. Paola Elizabeth Díaz Flores y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Ávila Cintia Romina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3566/MCA1ACR201101.pdf?sequence=3&isAllowed=y">Remoción
                                                    de azul de metileno en agua empleando bagazo de <i>Agave
                                                        salmiana</i> como
                                                    biosorbente </a></td>
                                            <td>Dra. Paola Elizabeth Díaz Flores y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Scian María Laura</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3618/MCA1SML201101.pdf?sequence=3&isAllowed=y">Evaluación
                                                    de las emisiones gaseosas de la técnica de remediación
                                                    bioslurping en estaciones de
                                                    servicio de la Ciudad de Buenos Aires</a></td>
                                            <td>Dra. Elsa Cervantes González y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Zambrano Monroy Beatriz</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3649/MCA1ZMB201101.pdf?sequence=3&isAllowed=y">Lipasas
                                                    como biomarcadores en la degradación de alcanos y aromáticos</a>
                                            </td>
                                            <td>Dra. Elsa Cervantes González y Dr. Jackson Roehrig</td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td>Zieke Gregor</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3570/MCA1ZGR201101.pdf?sequence=3&isAllowed=y">Development
                                                    of a low-cost, high-efficiency solar distillation unit for
                                                    small-scale use in rural
                                                    communities</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre y Dr. Michael Sturm</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Díaz Rosales Patricia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3594/MCA1DRP201001.pdf?sequence=3&isAllowed=y">Estimación
                                                    de la fracción fácilmente biodegradable de la demanda química de
                                                    oxígeno en aguas
                                                    residuales municipales por el método de desconvolución de
                                                    espectros</a></td>
                                            <td>Dr. Antoni Escalas Cañellas</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Ramírez Guevara Sonia Judith</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3947/MCA1RGS201001.pdf?sequence=3&isAllowed=y">Análisis
                                                    normativo del manejo de residuos sólidos urbanos y de manejo
                                                    especial en la zona
                                                    metropolitana del Municipio de San Luis Potosí</a></td>
                                            <td>Dr. Marcos Gustavo Monroy Fernández</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Tejeda González Juan Carlos</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3701/MCA1TGJ201001.pdf?sequence=3&isAllowed=y">Diseño
                                                    de un humedal para la remoción de Cd, As y Cr con plantas de
                                                    <i>Typha latifolia</i>
                                                    (Espadaña) </a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Contreras Aganza Manuel Ignacio</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3642/MCA1CGM200901.pdf?sequence=3&isAllowed=y">Evaluación
                                                    del empleo de cubierta biológica en muestras de jales con alto
                                                    contenido de
                                                    carbonatos</a></td>
                                            <td>Dra. J. Viridiana García Meza</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Martínez Rodríguez Claudia Margarita</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4012/MCA1MRC200901.pdf?sequence=3&isAllowed=y">Estudio
                                                    de la influencia de diferentes fuentes de carbono en el
                                                    comportamiento de los
                                                    microorganismos filamentosos en un reactor biológico
                                                    secuencial</a></td>
                                            <td>Dra. María Guadalupe Barajas López y Dr. Humbert Salvadó Cabré</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Santillana Morato Catalina</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3562/MCA1SMC200901.pdf?sequence=3&isAllowed=y">Caracterización
                                                    del polvo como medio en la ruta de exposición en la zona
                                                    minero-metalúrgica de
                                                    Matehuala-Villa de la Paz, SLP</a></td>
                                            <td>Dr. Marcos Gustavo Monroy Fernández</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Téllez Hernández Jesús Israel</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4018/MCA1THJ200901.pdf?sequence=3&isAllowed=y">Estabilización
                                                    por fosfato de plomo y cadmio contenidos en suelos de Villa de
                                                    la Paz-Matehuala,
                                                    S.L.P.</a></td>
                                            <td>Dr. Marcos Gustavo Monroy Fernández</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Landeta Escamilla Ofelia</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/1811/MCA1LEO200801.pdf?sequence=1&isAllowed=y">Desarrollo
                                                    conceptual para el modelado matemático de una biobarrera
                                                    reactiva permeable para la
                                                    remoción de sulfatos y estabilización de plomo y arsénico</a>
                                            </td>
                                            <td>Dr. Roberto Briones Gallardo</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Márquez Reyes Julia Mariana</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3959/MCA1MRJ200801.pdf?sequence=3&isAllowed=y">Modificación
                                                    de la bioaccesibilidad de residuos mineros en presencia de
                                                    materia orgánica
                                                    empleando bacterias reductoras de sulfatos</a></td>
                                            <td>Dr. Roberto Briones Gallardo</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Ortiz Balderas María de los Angeles</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4017/MCA1OBM200801.pdf?sequence=3&isAllowed=y">Evaluación
                                                    y aplicación de un método fisicoquímico de determinación de la
                                                    fracción fácilmente
                                                    biodegradable de la demanda química de oxígeno de las aguas
                                                    residuales</a></td>
                                            <td>Dra. María Guadalupe Barajas López</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Vázquez Rodríguez Guadalupe</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5743/MCA1VRG200701.pdf?sequence=1&isAllowed=y">Movilización
                                                    de elementos potencialmente tóxicos (EPT) en la rizósfera de
                                                    <i>Viguiera
                                                        dentata</i>, una especie vegetal tolerante, de suelos de
                                                    Villa de la Paz,
                                                    Matehuala, S.L.P.</a></td>
                                            <td>Dr. Roberto Briones Gallardo</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>Pelallo Martínez Nadia Azenet</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5744/MCA1PMN200601.pdf?sequence=1&isAllowed=y">Comportamiento
                                                    químico del arsénico en sedimentos de sistemas acuáticos
                                                    contaminados</a></td>
                                            <td>Dra. Ma. Catalina Alfaro de la Torre y Dr. Guillermo Javier Castro
                                                Larragoitia</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            <strong>Recursos Naturales Renovables &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2010</td>
                                            <td>Chávez Acuña Isaac Jacob</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3614/MCA1ZAM01001.pdf?sequence=3&isAllowed=y">Análisis estructural de dos poblaciones de <em>Dioon edule</em> Lindl. (Zamiaceae) en comunidades indígenas y mestizas de la región <em>Xi'iuy</em> de La Palma, S.L.P.: implicaciones ecológicas y culturales </a></td>
                                            <td>Dr. Javier Fortanelli Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Concostrina Zubiri Laura</td>
                                            <td><a target="_blank" href="#">Composición, estructura y dinámica de la costra biológica del suelo (CBS) en un ecosistema de pastizal semiárido</a></td>
                                            <td>Dr. José Luis Flores Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Esparza Sandoval Sandra</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3582/MCA1DGG01001.pdf?sequence=3&isAllowed=y">Distribución geográfica del género <em>Opuntia</em> (Cactaceae) en México</a></td>
                                            <td>Dr. Juan Antonio Reyes Agüero</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Guzmán Guzmán Paulina</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3593/MCA1EXP01001.pdf?sequence=3&isAllowed=y">Exploración, aprovechamiento y validación experimental de plantas con efecto anti-inflamatorio de la Sierra Madre Oriental de San Luis Potosí</a></td>
                                            <td>Dra. Erika García Chávez</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Loaiza Lange Toa</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3630/MCA1LUL01001.pdf?sequence=3&isAllowed=y">Potential assessment of land use, land use change and forestry (LULUCF) project under the clean development mechanism (CDM) in the Mata Atlantica, municipality of Cachoeiras de Macacu, RJ-Brazil</a></td>
                                            <td>Dr. Juan Antonio Reyes Agüero</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Medrano Echalar Ana María</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3610/MCA1CQW01001.pdf?sequence=3&isAllowed=y">Expansión del cultivo de quinua (<em>Chenopodium quinoa</em> Willd.) y calidad de suelos. Análisis en un contexto de sostenibilidad en el Intersalar Boliviano</a></td>
                                            <td>Dr. Javier Fortanelli Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Nuñez Villarreal Jonathan Javier</td>
                                            <td><a target="_blank" href="#">Soil erosion assessment in the agricultural micro-basin of Pito Aceso in the Municipality of Bom Jardim, Rio de Janeiro </a></td>
                                            <td>Dr. José Luis Flores Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Torres Reyna Juan Carlos</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3563">Arquitectura y etnobotánica de la vivienda rural <em>Xi'iuy</em> en la Palma, San Luis Potosí</a></td>
                                            <td>Dr. Javier Fortanelli Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td>Van Deuren Christine Milunka</td>
                                            <td><a target="_blank" href="#">Ecoturismo regional en el cañón del Espinazo del Diablo, SLP, México</a></td>
                                            <td>Dr. Javier Fortanelli Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>De Gortari Ludlow Natalia</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3659/MCA1AYT00901.pdf?sequence=3&isAllowed=y">Agua y tierra en la cuenca del Río Verde, SLP, México, y sus diferentes regímenes jurídicos, siglos XVI-XVIII</a></td>
                                            <td>Dr. Hilario Charcas Salazar</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Rendón Huerta Juan Antonio</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4008/MCA1RHJ200901.pdf?sequence=3&isAllowed=y">Fructanos de maguey: efecto prebiótico y metabólico</a></td>
                                            <td>Dra. Bertha Irene Juárez Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2009</td>
                                            <td>Zapata Pérez Elvia</td>
                                            <td><a target="_blank" href="#">Conteo bacteriano en órganos del aparato digestivo de pollos infectados con <em>Salmonella typhimurium</em> con adición de extracto de <em>Chrysactinia mexicana</em></a></td>
                                            <td>Dr. Juan Carlos García López</td>
                                        </tr>
                                        <tr>
                                            <td>2008</td>
                                            <td>Carbajal Esquivel Haydeé</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2056/MCA1IPC00801.pdf?sequence=3&isAllowed=y">Importancia de las plantas en la cultura alimentaria de la comunidad <em>Xi'oi</em> Las Guapas, Rayón, San Luis Potosí</a></td>
                                            <td>Dr. Javier Fortanelli Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>García Bastida Margarita</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2013/MCA1ECC00701.pdf?sequence=3&isAllowed=y">Ecología comparativa de comunidades de lagartijas en el sur del Desierto Chihuahuense</a></td>
                                            <td>Dr. Richard Iván Yeaton Hawkins</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Loza León Jéssica Grétel</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2060/MCA1CEA00701.pdf?sequence=3&isAllowed=y">Caracterización ecológica y aspectos sociales de los solares en relación con el bienestar en San José de la Peña, Villa de Guadalupe, San Luis Potosí</a></td>
                                            <td>Dr. Juan Antonio Reyes Agüero</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Michel Cuello Christian</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3556/MCA1CAR00701.pdf?sequence=3&isAllowed=y">Caracterización cuantitativa de los carbohidratos no estructurales del maguey mezcalero potosino <em>(Agave salmiana)</em></a></td>
                                            <td>Dr. Juan Manuel Pinos Rodríguez</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Paiz Rúbia Cassiana</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1812/MCA1EHO00701.pdf?sequence=3&isAllowed=y">Efecto hipoglucimiante de <em>Opuntia Joconostle</em> Web. en ratas diabéticas</a></td>
                                            <td>Dra. Bertha Irene Juárez Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2007</td>
                                            <td>Sandoval Méndez Carlos</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1813/MCA1VAP00701.pdf?sequence=3&isAllowed=y">Vegetación actual y potencial y su restauración experimental en el área "Parque urbano paseo de la presa" San Luis Potosí, S.L.P.</a></td>
                                            <td>Dr. Juan Rogelio Aguirre Rivera</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>García Pedraza Lucía Gabriela</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1798/MCA1EJM00601.pdf?sequence=3&isAllowed=y">Evaluación de jarabe de maguey mezcalero <em>(Agave salmiana)</em> en ratas diabéticas</a></td>
                                            <td>Dra. Bertha Irene Juárez Flores</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>López Méndez Mónica Guadalupe</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1809/MCA1CPC00601.pdf?sequence=3&isAllowed=y">Caracterización de la producción caprina en San José de la Peña, San Luis Potosí y evaluación productiva de la suplementación nitrogenada con bloques</a></td>
                                            <td>Dr. Juan Manuel Pinos Rodríguez</td>
                                        </tr>
                                        <tr>
                                            <td>2006</td>
                                            <td>Ramírez Tobías Hugo Magdaleno</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/2951">Productividad primaria y calidad nutrimental de nopal (<em>Opuntia</em> spp. y <em>Nopalea</em> sp.) en condiciones intensivas</a></td>
                                            <td>Dr. Juan Antonio Reyes Agüero</td>
                                        </tr>
                                        <tr>
                                            <td>2005</td>
                                            <td>Espinosa Reyes Guillermo</td>
                                            <td><a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2058/MCA1OMV00501.pdf?sequence=5&isAllowed=y">Organización de manchones de vegetación leñosa y su relación con roedores en el sur del Desierto Chihuahuense</a></td>
                                            <td>Dr. Richard Iván Yeaton Hawkins</td>
                                        </tr>
                                        </tbody>
                                        </table>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            <strong>Salud Ambiental Integrada &nbsp</strong>
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" id="accordionTextM">
                            <div class="col-12 col-sm-10 border-end border-start border-top">
                                <table class="width201" id="colorTexto">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="tablaTitulos">Año</th>
                                            <th scope="col" id="tablaTitulos">Nombre del alumno</th>
                                            <th scope="col" id="tablaTitulos">Título de tesis</th>
                                            <th scope="col" id="tablaTitulos">Director de tesis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2020</td>
                                            <td>Ávila García Ivette Paloma</td>
                                            <td><a target="_blank" href="tesis/Mae/2020/MCA1AGP202001.pdf">Ambiente y
                                                    salud en
                                                    escenarios de precariedad laboral. Caso de estudio: mineria
                                                    artesanal de mercurio,
                                                    Sierra Gorda, Querétaro</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez</td>
                                        </tr>
                                        <tr>
                                            <td>2020</td>
                                            <td>González Canuto Ángel Santiago</td>
                                            <td><a target="_blank" href="tesis/Mae/2020/MCA1ERG202001.pdf">Diagnóstico de
                                                    la salud
                                                    de
                                                    los ecosistemas mediante la evaluación de los determinantes
                                                    ecológicos de la salud
                                                    en localidades indígenas de la Huasteca Potosina</a></td>
                                            <td>Dr. Guillermo Espinosa Reyes</td>
                                        </tr>
                                        <tr>
                                            <td>2020</td>
                                            <td>Grimaldo Galeana José Moisés</td>
                                            <td><a target="_blank" href="tesis/Mae/2020/MCA1GGJ202001.pdf">Evaluación de
                                                    la salud
                                                    respiratoria y exposición a contaminantes neumotóxicos en
                                                    trabajadores precarios de
                                                    cantera del Municipio de San Luis Potosí, México</a></td>
                                            <td>Dr. Rogelio Flores Ramírez</td>
                                        </tr>
                                        <tr>
                                            <td>2020</td>
                                            <td>Mendoza Pérez Emmanuel</td>
                                            <td><a target="_blank" href="tesis/Mae/2020/MCA1MPE202001.pdf">Evaluación de
                                                    la carga
                                                    corporal de elementos potencialmente tóxicos (EPT'S) en rana
                                                    leopardo (<i>Lithobates
                                                        spp.</i>) de la cuenca del río Sonora: efectos por
                                                    temporada, ciclo y sitio de
                                                    colecta</a></td>
                                            <td>Dr. César Arturo Ilizaliturri Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2020</td>
                                            <td>Rebolloso Hernández Carlos Alberto</td>
                                            <td><a target="_blank" href="tesis/Mae/2020/MCA1RHC202001.pdf">Evaluación de
                                                    los
                                                    determinantes bióticos de la salud asociados a agroecosistemas
                                                    tradicionales
                                                    indígenas del Municipio de San Antonio, San Luis Potosí</a></td>
                                            <td>Dr. Moisés Roberto Vallejo Pérez</td>
                                        </tr>
                                        <tr>
                                            <td>2020</td>
                                            <td>Sanjuan Meza Xiomara Sarahí</td>
                                            <td><a target="_blank" href="tesis/Mae/2020/MCA1SMX202001.pdf">Evaluación de
                                                    la
                                                    respuesta
                                                    clínica y genotóxica por la exposición a plomo y compuestos
                                                    orgánicos persistentes
                                                    en organismos inmaduros de tortuga verde (<i>Chelonia mydas</i>)
                                                    en Quintana Roo,
                                                    México</a></td>
                                            <td>Dr. Guillermo Espinosa Reyes</td>
                                        </tr>
                                        <tr>
                                            <td>2020</td>
                                            <td>Suárez Hernández Rubén Omar</td>
                                            <td><a target="_blank" href="tesis/Mae/2020/MCA1SHR202001.pdf">Success
                                                    factors for mexican
                                                    non-formal environmental education programs</a></td>
                                            <td>Dra. Silvia Romero Contreras y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Dávila Galaz Luis Manuel</td>
                                            <td><a target="_blank" href="tesis/Mae/2019/MCA1DGL201901.pdf">Monitoreo de
                                                    las
                                                    concentraciones de elementos potencialmente tóxicos en suelos y
                                                    roedores de la
                                                    Cuenca del Río Sonora, México</a></td>
                                            <td>Dr. Guillermo Espinosa Reyes</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>García Garnica Briselda</td>
                                            <td><a target="_blank" href="tesis/Mae/2019/MCA1GGB201901.pdf">Identificación
                                                    y
                                                    evaluación
                                                    toxicológica de rizobacterias resistentes a As, Pb y Zn,
                                                    provenientes de residuos
                                                    mineros de Villa de la Paz, Matehuala</a></td>
                                            <td>Dr. César Arturo Ilizaliturri Hernández</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Manzano González Guillermo</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4730/MCA1MGG201901.pdf?sequence=1&isAllowed=y">La
                                                    vulnerabilidad del estado nutricio de los adultos mayores de una
                                                    localidad de la
                                                    Huasteca Potosina en un contexto de variabilidad climática</a>
                                            </td>
                                            <td>Dra. Gabriela Domínguez Cortinas</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Reyes Bejarano Johann Sebastian</td>
                                            <td><a target="_blank" href="tesis/Mae/2019/MCA1RBJ201901.pdf">Environmental
                                                    peacebuilding
                                                    and traditional gold mining communities: Challenges and
                                                    opportunities in a
                                                    post-conflict setting in Colombia</a></td>
                                            <td>Dr. Fernando Díaz-Barriga Martínez y Dr. Udo Nehren</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Reyes Gallegos Karla Jazmín</td>
                                            <td><a target="_blank"
                                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4729/MCA1RGK201901.pdf?sequence=1&isAllowed=y">Evaluación
                                                    de la condición de salud del suelo como indicador de
                                                    vulnerabilidad ambiental en la
                                                    comunidad de Nuevo Aquismón, Tamuín S.L.P.</a></td>
                                            <td>Dra. Gabriela Domínguez Cortinas</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Romero Galicia Sandra Alejandra</td>
                                            <td><a target="_blank" href="tesis/Mae/2019/MCA1RGS201901.pdf">Percepción de
                                                    vulnerabilidad
                                                    socio-ambiental asociada a variabilidad climática y cambio
                                                    climático en la Huasteca
                                                    Potosina: el caso de la comunidad de Nuevo Aquismón, Tamuín,
                                                    S.L.P. México</a></td>
                                            <td>Dra. Gabriela Domínguez Cortinas</td>
                                        </tr>
                                        <tr>
                                            <td>2019</td>
                                            <td>Sanjuan Meza Eleno Uriel</td>
                                            <td><a target="_blank" href="tesis/Mae/2019/MCA1SME201901.pdf">Monitoreo de la
                                                    condición del
                                                    cocodrilo de pantano (<i>Crocodylus moreletii</i>) en la ciénega
                                                    de Tamasopo, San
                                                    Luis Potosí y un sitio de referencia</a></td>
                                            <td>Dr. Guillermo Espinosa Reyes</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br>
        </div>
    </div>
    </div>
@endsection
