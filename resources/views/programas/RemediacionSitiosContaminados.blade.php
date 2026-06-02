@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>REMEDIACIÓN DE SITIOS CONTAMINADOS</strong></h1>
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
                                        <td>Básico de línea</td>
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
                <p>Proporcionar al alumno los fundamentos de la remediación de áreas con disturbios originados por actividades mineras y metalúrgicas, así como las principales tecnologías de remediación de sitios industriales contaminados por metales tóxicos, como parte de estrategias de cierre o clausura de la operación.
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
                                        <td id="contTabla"><strong>Dominio de su área o disciplina</strong></td>

                                        <td>El alumno adquirirá una formación sólida sobre los fundamentos necesarios para llevar a cabo la evaluación, control y análisis para la implementación de procesos encausados a la remediación ambiental de diversos receptores ambientales impactados por contaminación inorgánica.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Desarrollo de pensamiento analítico</strong> </td>

                                        <td>El alumno desarrollará la habilidad para discernir entre la evaluación, control o intervención para la implementación de un sistema de remediación ambiental.    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Capacidad de abstracción, análisis y síntesis.</strong>
                                        </td>

                                        <td>El alumno desarrollará la habilidad de conceptualizar y analizar información científica y técnica, a través de la revisión de libros y artículos especializados en idioma inglés.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Capacidad para comunicarse de manera efectiva</strong> </td>

                                        <td>El alumno desarrollará la habilidad de comunicar información en forma oral a través de exposiciones ante el grupo de clase.    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Responsabilidad ética y profesional.</strong>
                                        </td>

                                        <td>El alumno adquirirá conciencia sobre el impacto ambiental que las diferentes actividades humanas ejercen sobre los ecosistemas y promoverá alternativas para mitigar dichos impactos de manera objetiva.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Redactar informes y documentos</strong>
                                        </td>

                                        <td>El alumno desarrollará la habilidad de comunicar información en forma escrita a través de la elaboración de informes de revisión de artículos especializados.</td>
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
                                        <td>
                                            <ol type="1">
                                                <li>Introducción y conceptos fundamentales
                                                    <ol>
                                                        <li>Definiciones Importantes</li>
                                                        <li>Residuos Peligrosos</li>
                                                        <li>Sitios contaminados</li>
                                                        <li>Normatividad vigente</li>
                                                        <li>Clasificación de Tecnologías para el tratamiento de residuos peligrosos y remediación de sitios contaminados</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq"> Identificar la clasificación de residuos en terminos de la normativa y de las tecnologias convencionales existentes.
                                        </td>
                                        <td id="contTablaIzq">
                                        Exposición de temas, análisis de conceptos teóricos, desarrollo de ejemplos en clase por parte del profesor.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <ol type="1">
                                                <li value="2">Fundamentos para la remediación de sitios contaminados.
                                                    <ol>
                                                        <li>Conceptos de Termodinámica: Potencial Químico, Energía de Gibss y sistemas de composición variable, Cinética, Espontaneidad y Equilibrio, Coordenada de reacción, Mecanismos y Velocidad de reacción.</li>
                                                        <li>Ácidos y Bases: Actividad, pH, Constantes de ionización, cálculos de equilibrio químico, Titulaciones ácido-base, ácidos orgánicos.</li>
                                                        <li>Metales traza: Clasificación, Teoría de Pearson, Química de coordinación en solución, Teoría de ácidos y bases; Oxido-Reducción y Diagramas Eh/pH; Isotermas de adsorción; Intercambio iónico; Precipitación y disolución.</li>
                                                        <li>Interfase Sólido-solución; Carga superficial y teoría de la doble capa. Complejos de esfera interna y complejos de esfera externa, Fenómenos de transporte en materia dura y blanda, Tipos de Superficies biológicas.</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq">Establecer los conceptos fundamentales para analizar las tecnologías de remediación.
                                        </td>
                                        <td id="contTablaIzq">Exposición de temas, análisis de conceptos teóricos, desarrollo de ejemplos en clase por parte del profesor. Asimismo, se refuerzan los conceptos mediante análisis de artículos especializados por parte de los alumnos.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <ol type="1">
                                                <li value="3">Técnicas de Caracterización de sitios Contaminados
                                                    <ol>
                                                        <li>. Muestreo de suelos: Tamaño de muestra, distancia de muestreo, selección del tipo de muestreo, recolección de muestras, observaciones de campo, preparación y almacenamiento de muestras.</li>
                                                        <li>Análisis Físicos: Granulometría, permeabilidad, compactación y porosidad.</li>
                                                        <li>Análisis Fisicoquímicos: Potencial REDOX y pH, Análisis químicos totales, Extracción selectiva, Materia orgánica total</li>
                                                        <li> Análisis Mineralógicos: Difracción de rayos X, Espectrometría de fluorescencia de rayos X, Microscopia electrónica.</li>
                                                        <li>Pruebas de Disponibilidad y Bioaccesibilidad: Biodisponibilidad en humanos; Biodisponibilidad en especies vegetales; Caracterización de superficies biológicas.</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq">
                                            Presentar las metodologías y técnicas convencionales empleadas para la evaluación de sitios impactados por contaminación inorgánica 
                                        </td>
                                        <td id="contTablaIzq">Exposición de temas, análisis de conceptos teóricos, desarrollo de ejemplos en clase por parte del profesor. Asimismo, se refuerzan los conceptos mediante análisis de artículos especializados por parte de los alumnos.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <ol type="1">
                                                <li value="4">Tecnologías para la remediación de sitios contaminados.
                                                    <ol>
                                                        <li>Tratamientos fisicoquíimicos.</li>
                                                        <li>Tratamientos biológicos (Ventajas y desventajas).</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq">
                                        Analizar los tratamiento convencionales y su aplicación para la remediciación ambiental
                                        </td>
                                        <td id="contTablaIzq">Exposición de temas, análisis de conceptos teóricos, desarrollo de ejemplos en clase por parte del profesor. Asimismo, se refuerzan los conceptos mediante análisis, discusión y exposición de artículos especializados por parte de los alumnos.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <ol type="1">
                                                <li value="5">Biotecnología aplicada al tratamiento de sitos contaminados.
                                                    <ol>
                                                        <li>Bioremediación: Barreras biológicas y bacterias sulfato-reductoras</li>
                                                        <li>Bioenergética: aceptores de electrones, donadores de electrones, fuentes de carbono, nutrientes.</li>
                                                        <li>Biopelículas y biodegradación</li>
                                                        <li>Fitorremediación
                                                            <ol>
                                                                <li>Factores biológicos y fisicoquímicos que influyen en la fitorremediación.</li>
                                                            </ol>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </td>
                                        <td id="contTablaIzq">
                                        Analizar y profundizar sobre los tratamiento convencionales relacionados a la biotecnología relacionados a la aplicación para la remediciación ambiental.
                                        </td>
                                        <td id="contTablaIzq">Exposición de temas, análisis de conceptos teóricos, desarrollo de ejemplos en clase por parte del profesor. Asimismo, se refuerzan los conceptos mediante análisis de artículos especializados por parte de los alumnos.
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
                                        <td>Semana 8</td>
                                        <td>
                                            <ul type="vineta">
                                                <li>Un examen parcial por escrito en clase que cubre el contenido de las unidades 1 a 3</li>
                                            </ul>
                                        </td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Semana 8</td>
                                        <td>
                                            <ul type="vineta">
                                                <li>Una exposición por parte del estudiante sobre un tema asignado al contenido visto en las unidades 1 a 3.</li>
                                            </ul>
                                        </td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Semana 8</td>
                                        <td>
                                            <ul type="vineta">
                                                <li>Evaluación de las tareas asignadas durante las unidades 1 a 3</li>
                                            </ul>
                                        </td>
                                        <td>10%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Semana 16</td>
                                        <td>
                                            <ul type="vineta">
                                                <li>Un examen parcial por escrito en clase que cubre el contenido de las unidades 4 a 5.</li>
                                            </ul>
                                        </td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Semana 16</td>
                                        <td>
                                            <ul type="vineta">
                                                <li>Una exposición por parte del estudiante sobre un tema asignado al contenido visto en las unidades 4 a 5.</li>
                                            </ul>
                                        </td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Semana 16 </td>
                                        <td>
                                            <ul type="vineta">
                                                <li>Evaluación de las tareas asignadas durante las unidades 5 a 6 </li>
                                            </ul>
                                        </td>
                                        <td>10%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>Promedio final<td>
                                        <td>
                                            El promedio final será la suma del total de las unidades 
                                        </td>
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
                <ul type="vineta">
                    <li>BENSON, C.H., (2000). Designing Caps and Covers for Closure of Mine Waste Facilities. Short Course Notes, 5th ICARD - SME, 250pp.</li>
                    <li>BOLDT-LEPPIN, B., (1997). Soil covers for sloped surfaces of hazardous waste disposal systems: application of fundamental design principles. A Literature Search prepared for O'Kane Consultants Inc. and INAP, 141pp.</li>
                    <li>DZOMBAK, D.A., MOREL, M.M. F. (1990), Surface Complexation Modeling : Hydrous Ferric Oxide. John Wiley & Sons. 416 p.</li>
                    <li>HURST, C.J., KNUDSEN, G.R., McINERNEY, M.J., STETZENBACH, L.D. and WALTER, M.V., (1997). Manual of Environmental Microbiology. American Society for Microbiology, 893pp.</li>
                    <li>ISKANDAR, I.K. and A. ISKANDAR (Editors) (1999) Environmental Restoration Of Metals-Contaminated Soils, CRC Press, 320p.</li>
                    <li>KALB, P.D., CONNER, J.R., MAYBERRY, J.L., PATEL, B. R., PEREZ, J.M., TREAT, R.L. (1997). Innovative site remediation technology: design and Application. Vol. 4: Estabilization/Solidificaci√≥n. Ed. William C. Anderson.</li>
                    <li>MARCUS, J.J. (1996). Mining Environmental Handbook. Imperial College Press, 785pp.</li>
                    <li>MARTELL, A.E. and HANCOCK, R.D. (1996), Metal Complexes in Aqueous Solutions. Plenum Press. 253 p.</li>
                    <li>McBRIDE, M. B. (1994). Environmental Chemistry of Soils. Oxford University Press. 406 p.</li>
                    <li>NATIONAL RESEARCH COUNCIL, COMMISSION ON INTRINSIC REMEDIATION, (2000), Natural Attenuation for Ground Water Remediation. National Academy Press. 274 p.</li>
                    <li>OTTEN, A. (Editor), ALPHENAAR, A., PIJLS, C., SPUJI, F., De WIT, H. (1977). In Situ Soil Remediation. Publisher: Kluwer Academic Publishers; 1a. Ed. 124 p.</li>
                    <li>ROUNDHILL, M.D., Extraction of Metals from Soils and Waters (2001), Plenum Press. 404 p</li>
                    <li>SENES Consultants Ltd. (1994). Evaluation of Alternate Dry Covers for the Inhibition of AMD from Tailings. MEND Report 2.20.1.</li>
                    <li>SME/AGI (1998). Remediation of Historical Mine Sites. Society for Mining, Metallurgy and Exploration, Inc., 118pp.</li>
                    <li>SMITH, L. A., MEANS J.L, CHEN A., ALLEMAN, B., CHAPMAN, C.C., TIXIER, J.S., BRAUNING S.E., GAVASKAR, A. R., ROYER, M.D. (1995). Remedial Options for metals contaminated sites. Ed. Lewis Publishers. 221p.</li>
                    <li>SPARKS, D.L. (2003). Environmental soil chemistry. Academic Press. 2a. Ed. 350 p.</li>
                    <li>SPOSITO G., (1989). The chemistry of soils. Oxford University Press, 277 p.</li>
                    <li>STEVENSON, F.J. (1994), Humus Chemistry : Genesis, Composition, Reactions. John Wiley & Sons 512 p.</li>
                    <li>STUMM W. (1987), Aquatic Surface Chemistry: Chemical Processes at the Particle-Water Interface. Wiley-Interscience. 1a. Ed. 544 p.</li>
                    <li>STUMM W., MORGAN J.J. (1996) Aquatic Chemistry. Jhon Wiley and Sons. 3a. Ed. 1022 pp.</li>
                    <li>TATE III, R.L. (1992), Soil Organic Matter: Biological and Ecological Effects. Krieger Publishing Company. 291 p.</li>
                    <li>YONG, R.N. (2001). Geoenvironmental engineering contaminated soils, pollutant fate and mitigation. CRC Press. 307 p.</li>
                    <li>YONG, R.N., Mulligan, c.N., (2003), Natural Attenuation of Contaminants in Soils. Lewis Publishers, Inc. 450 p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li>Pub Med Central de la National Library of Medicine. <a href="http://pubmed.gov.">http://pubmed.gov.</a></li>
                    <li>Sci verse Scopus (Elsevier). Página web: <a href="http://www.scopus.com/home.url.">http://www.scopus.com/home.url.</a></li>
                    <li>UCSC Genome Bioinformatics. Página web: <a href="http://genome.ucsc.edu/">http://genome.ucsc.edu/</a></li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <br>• Este curso no cuenta con ninguna actividad o curso de pre-requisito.
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura no es compartida con ningún otro programa de posgrado.
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
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 12.</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1.</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. Roberto Briones Gallardo y Dra. Candy Carranza Alvarez
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
