@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>TIPOS DE ENERGÍA</strong></h1>
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
                                        <td>Tópico Selecto</td>
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
                <p>Al concluir esta asignatura, el estudiante logrará entender la importancia de la energía comercial, alternativa, así como el familiarizarse con los conceptos básicos y aplicarlos
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
                                        <td id="contTabla"><strong>Trabajo en equipo</strong></td>

                                        <td>El alumno tendrá que desarrollar su capacidad para trabajar y aportar en equipo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Capacidad analítica</strong> </td>

                                        <td>El alumno tendrá la capacidad de conocer a profundidad los alcances y limitantes de los diferentes tipos de energía   
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Pensamiento analítico</strong>
                                        </td>

                                        <td>El alumno tendrá la capacidad de dividir los problemas, por más complejos que lleguen a ser
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
                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>Unidad 1. INTRODUCCIÓN A LOS TIPOS DE ENERGÍA</strong></td>
                                <td><strong>3 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong></td>
                                <td>1.1.- Definiciones energéticas básicas.<br>1.1.1.- Energía.<br>1.1.2.- Trabajo.<br>1.1.3.- Calor.<br>1.2.- Conversión básica de energía.<br>1.2.1.- Transformación.<br>1.2.2.- Procesos.<br>1.2.3.- Flujo de energía.<br>1.2.4.- Balance de energía.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong> </td>

                                <td>Fuentes de energías alternativas (www. EarthSky.org) El flujo de la energía en los ecosistemas (Pimentel, D. and M. Pimentel. 1997. Food, energy and society. 2nd Ed. Iniversity Press of Colorado, Niwot, CO).
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Clases presenciales, cuestionando los conocimientos previos de los alumnos
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Tareas, lecturas especializadas.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 2. ENERGÍAS FÓSILES Y CONTAMINANTES.</strong></td>
                                <td><strong>3 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>2.1.- Energía atómica.<br>2.2.- Energía del carbón. <br>2.3.- Gas natural.<br>2.4.- Energía a partir del petróleo y derivados.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Energía nuclear en México, como alternativa para la reducción de emisiones de CO2 El flujo de la energía en los ecosistemas Importancia de la energía nuclear en la economía global El petróleo y sus derivados
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Clases presenciales
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Trabajo en casa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 3 ENERGÍAS RENOVABLES.</strong></td>
                                <td><strong>42 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>3.1.- Energía solar.<br>3.1.1.- Radiación solar.<br>3.1.1.1.- Superficies selectivas y superficies reflectivas.<br>3.1.2.- Energía solar fotovoltaica.<br>3.1.2.1.- Recurso solar.<br>3.1.2.2.- Dispositivos fotovoltaicos.<br>3.1.2.3.- Baterías.<br>3.1.2.4.- Controles.<br>3.1.2.5.- Inversores.<br>3.1.2.6.- Cargas eléctricas.<br>3.1.2.7.- Dimensionamiento y estimación de costos.<br>3.1.2.8.- Instalación, operación y mantenimiento.<br>3.1.3.- Energía solar térmica.<br>3.1.3.1.- Colectores planos.<br>3.1.3.2.- Concentradores.<br>3.1.3.3.- Estanques solares.<br>3.1.3.4.- Destiladores.<br>3.1.3.5.- Secadores<br>3.1.4.- Energía solar pasiva.<br>3.1.5.- Aplicaciones de la energía solar en comunidades rurales.<br>3.1.6.- Plantas termosolares.
                                <br>
                                <br>3.2.- Energía eólica.<br> 3.2.1.- De dónde viene la energía eólica.<br>3.2.2.- La fuerza de Coriolis.<br>3.2.3.- Los vientos globales, geostróficos, locales, de montaña.<br>3.2.4.- La energía en el viento, velocidad y potencia. <br>3.2.5.- Los anemómetros, la rosa de los vientos, mediciones en la práctica.<br>3.2.6.- La ley de Betz.<br>3.2.7.- Tipos de aerogeneradores y cómo funcionan. 
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Manual de Energía solar térmica; Manual de Fuentes alternas de energía; Manual de la energía fotovoltaica en la educación a distancia; Denish wind industry association
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Clases presenciales
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Trabajo en casa
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 3. ENERGÍAS RENOVABLES, CONTINUACIÓN……….</strong></td>
                                <td><strong></strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>3.3.- Energía de los biocarburantes.<br>3.3.1.- Orígenes y situación en el contexto mundial.<br>3.3.2.- Tecnologías y aplicaciones.<br>3.3.2.1.- Procesos de fabricación y materias primas.<br>3.3.2.2.- Competitividad económica presente y estimaciones de futuro.<br>3.3.3.- Ventajas de los biocarburantes.<br>3.3.3.1.- Aspectos medioambientales.<br>3.3.3.2.- Eficiencia.<br>3.3.3.3.- Beneficios socioeconómicos.
                                <br>
                                <br>3.4.- Energía geotérmica.<br>3.4.1.- Conceptos generales<br>3.4.1.1.- Energía geotérmica y gradiente geotérmico.<br>3.4.2.- Situación en el contexto mundial.<br>3.4.3.- Usos.<br>3.4.3.1.- Generación de electricidad.<br>3.4.3.2.- Usos térmicos.<br>3.4.4.- Tecnologías y aplicaciones.<br>3.4.4.1.- Tecnologías para centrales de generación de electricidad.<br>3.4.4.2.- Tecnologías para aprovechamientos geotérmicos de baja y muy baja temperatura.<br>3.4.5. Ventajas de la energía geotérmica.<br>3.4.5.1.- Beneficios medioambientales.<br>3.4.5.2.- Beneficios socioeconómicos.
                                <br>
                                <br>3.5.- Energía hidráulica.<br>3.5.1.- Situación en el contexto mundial.<br>3.5.2.- Tecnologías y aplicaciones.<br>3.5.2.1.- Características de la energía hidroeléctrica.<br>3.5.2.2.- Tipos de minicentrales hidroeléctricas.<br>3.5.2.3.- Diseño de un aprovechamiento hidroeléctrico.<br>3.5.2.4.- Equipamiento.<br>3.5.2.5.- Usos y aplicaciones.<br>3.5.3.- Beneficios ambientales.<br>3.5.4.- Beneficios socioeconómicos.
                                <br>
                                <br>3.6.- Energía de la biomasa.<br>3.6.1.- Situación en el contexto mundial<br>3.6.2.- Tecnologías y aplicaciones.<br>3.6.3.- Ventajas de la biomasa.<br>3.6.3.1.- Aspectos medioambientales.<br>3.6.3.2.- Beneficios socioeconómicos
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Manual de energía de la biomasa; Manual de minicentrales hidroelécticas; Manual de biocarburantes en el transporte; Manual de geotermia. 
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Clases presenciales
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Trabajo en casa
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 3. ENERGÍAS RENOVABLES, CONTINUACIÓN………….</strong></td>
                                <td><strong></strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Subtemas</strong> </td>

                                <td>3. 7.- Energía maremotriz.<br>3.7.1.- Situación en el contexto mundial.<br>3.7.2.- Tecnología y aplicaciones.<br>3.7.3.- Ventajas de la energía meremotriz.<br>3.7.3.1.- Aspectos medioambientales.<br>3.7.3.2.- Beneficios socioeconómicos.
                                <br>
                                <br>3.8.- Energía del hidrógeno.<br>3.8.1.- El hidrógeno como recurso y su explotación.<br>3.8.2.- Significado del hidrógeno en el planteamiento urbano y regional.<br>3.8.2.1.- Tecnología del hidrógeno.<br>3.8.2.2.- Las aplicaciones del hidrógeno en el mundo.
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Manual de energía maremotriz.<br><a href="www.eco2site.com">www.eco2site.com</a>; <a href="www.EarthSky.org">www.EarthSky.org</a> 
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Clases presenciales
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Trabajo en casa
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

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
                                        <td>Introducción a los tipos de energía</td>
                                        <td id="contTablaIzq"> Familiarizarse con los conceptos básicos de energía
                                        </td>
                                        <td id="contTablaIzq">Clases presenciales y trabajo en casa
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Energías fósiles y contaminantes</td>
                                        <td id="contTablaIzq">Ubicar las energías fósiles y contaminantes, importancia, alcances y limitantes 
                                        </td>
                                        <td id="contTablaIzq">Clases presenciales y trabajo en casa
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Energías renovables</td>
                                        <td id="contTablaIzq">
                                        Adentrar al alumno al concepto de nuevas tecnologías
                                        </td>
                                        <td id="contTablaIzq">Clases presenciales y trabajo en casa
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
                                        <td>Al fin de la primera Unidad </td>
                                        <td>Trabajo</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al final de la segunda unidad</td>
                                        <td>Trabajo</td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al final de la tercera unidad</td>
                                        <td>Trabajo</td>
                                        <td>50%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
                    <li>Alba F. 1997. Introducción a los energéticos: pasado, presente y futuro. El Colegio Nacional. México. 161p.</li>
                    <li>Almanza S.R. y F. Muñoz. 1994. Ingeniería en la energía solar. El Colegio Nacional. México. 418p.</li>
                    <li>Alonso G., J.M. Ramírez y J.C. Palacios. 2011. Energía nuclear en México, como alternativa para la reducción de emisiones de CO2. Rev. Int. Contam. Ambie. 27(3) 271-273.</li>
                    <li>Anónimo. 2001. Energía fotovoltaica en la educación a distancia: Guía Técnica. New Mexico State University. 61p. </li>
                    <li>Odum, E.P. 1971. Fundamentals of ecology. W.B. Saunders, Philadelphia, PA.</li>
                    <li>Pimentel D and M. Pimentel, eds., 1997. Food, energy and society. 2nd Ed. University Press of Colorado, Niwot, CO.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Se trabajara sobre la consulta y lectura de revistas como Energy, science, entre otras.</li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    <br>• Contar con conocimientos básicos de mecánica y física.
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    •
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                    <ul class="vineta">
                        <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                        <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                    </ul>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 7</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 1</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. Héctor Martín Durán García
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
