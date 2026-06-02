@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>ECOLOGÍA DE LA PRODUCCIÓN DE COSECHAS</strong></h1>
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
                                        <td>4</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>10</td>
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
                <p>Generar propuestas para el manejo sostenible de agroecosistemas en diferentes contextos ambientales, sociales y económicos.
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
                                        <td id="contTabla"><strong>Analítica</strong></td>

                                        <td>Capacidad de analizar la producción de cosechas como un proceso social e históricamente construido</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Crítica</strong> </td>

                                        <td>Entendimiento de los problemas ambientales generados por prácticas agrícolas inadecuadas.  
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Integradora</strong>
                                        </td>

                                        <td>Habilidad para integrar los factores climáticos, edafológicos, hídricos y bióticos que condicionan la producción agrícola.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Tecnológica</strong> </td>

                                        <td>Conocimiento de las prácticas agroecológicas de manejo de los principales sistemas de producción de cosechas de México.  
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Sustentable</strong>
                                        </td>

                                        <td>Capacidad para proponer alternativas sostenibles a la problemática de estos sistemas de producción.</td>
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
                                        <td>Conceptos básicos</td>
                                        <td id="contTablaIzq"> Comprender los fundamentos ecológicos y tecnológicos de la producción de cosechas.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Presentación por el profesor.</li>
                                                <li>Revisión de textos.</li>
                                                <li>Aplicación del enfoque a sistemas agrícolas conocidos por los estudiantes</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Origen y desarrollo de la producción de cosechas</td>
                                        <td id="contTablaIzq">Analizar la problemática de los principales sistemas de producción de cosechas nacionales y regionales.
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>Exposición por el profesor</li>
                                                    <li>Revisión de textos.
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Elementos físicos y bióticos de la producción de cosechas</td>
                                        <td id="contTablaIzq">
                                        Comprender los fundamentos ecológicos y tecnológicos de la producción de cosechas.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición por el profesor</li>
                                                <li>Discusión por los estudiantes de las consecuencias ambientales, sociales y económicas de los cambios históricos en la tecnología de producción agrícola.</li>
                                                <li>Realización de trabajos que documenten los diferentes impactos ambientales de la agricultura
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Generalidades sobre manejo de los sistemas de cultivo</td>
                                        <td id="contTablaIzq">
                                        Comprender los fundamentos ecológicos y tecnológicos de la producción de cosechas.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición por el profesor.</li>
                                                <li>Se aplicarán los conocimientos teóricos en una primera práctica de campo en donde se vincularán los atributos físicos y bióticos del ambiente con los agroecosistemas establecidos a lo largo de un gradiente topográfico.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Sistemas de producción de cosechas</td>
                                        <td id="contTablaIzq">
                                        Analizar la problemática de los principales sistemas de producción de cosechas nacionales y regionales.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>Exposición por el profesor.</li>
                                                <li>Aplicación de los conocimientos al análisis del trabajo de campo que los estudiantes realizarán sobre la problemática de casos específicos de sistemas agrícolas.</li>
                                                <li>Se trabajará con los estudiantes en el análisis de los casos observados durante las prácticas de campo
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Agroecología y sostenibilidad</td>
                                        <td id="contTablaIzq">
                                        Elaborar propuestas para el desarrollo persistente de sistemas de producción de cosechas.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul class="vineta">
                                                <li>El profesor expondrá casos documentados de aplicación de estas metodologías.</li>
                                                <li>Los alumnos trabajarán en la formulación de propuestas de alternativas agroecológicas para fortalecer la sustentabilidad de los sistemas de cultivo estudiados por ellos, y cuyo análisis estarán concluyendo al término del curso.
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
                                        <td>Semana 5</td>
                                        <td>• Examen escrito, unidades 1 y 2</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Semana 10</td>
                                        <td>• Examen escrito, unidades 3 y 4</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Semana 15</td>
                                        <td>• Examen escrito, unidades 5 y 6</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al finalizar el curso </td>
                                        <td>• Informe de prácticas de campo</td>
                                        <td>20%</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Al finalizar el curso</td>
                                        <td>• Análisis de un sistema de producción agrícola y propuestas para fortalecer su sustentabilidad</td>
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
                <div class="margen">
                <ul class="vineta">
                    <li>Altieri, M. A. 1999. Agroecología. Bases científicas para una agricultura sustentable. Nordan. Montevideo, Uruguay. 338 p.</li>
                    <li>Azcón-Bieto, J.; M. Talón. 2013. Fundamentos de fisiología vegetal. McGraw-Hill. Madrid. 651 p.</li>
                    <li>Brady, N. C.; R. R. Weil. 2008. The nature and properties of soils. Pearson Prentice Hall. New Jersey. 975</li>
                    <li>Carroll, C. R.; J. H. Vandermeer; P. M. Rosset. 1990. Agroecology. McGraw-Hill. New York, USA. 641 p.</li>
                    <li>FAO. 2011. El Segundo Informe sobre el estado de los recursos fitogenéticos para la alimentación y la agricultura en el mundo. Comisión de Recursos Genéticos para la Alimentación y la Agricultura, Organización de las Naciones Unidas para la Agricultura y la Alimentación. Roma. 372 p.</li>
                    <li>FAO. 2019. Soil erosion: the greatest challenge to sustainable soil management. FAO. Rome. 100 p.</li>
                    <li>FAO, ITPS, GSBI, SCBD and EC. 2020. State of knowledge of soil biodiversity - Status, challenges and potentialities, Report 2020. FAO. Rome. 585 p.</li>
                    <li>Gliessman, S. R. Agroecology. 2007. The ecology of sustainable systems. CRC Press. Boca Raton, Florida, USA. 384 p.</li>
                    <li>Grigg, D. B. 1974. The agricultural systems of the world. Cambridge. London, UK. 358 p.</li>
                    <li>Jackson, L. E. (ed). 1997. Ecology in agriculture. Academic Press. 472 p.</li>
                    <li>Lampkin, N. 1998 Agricultura ecológica. Mundiprensa. Madrid, España. 725 p.</li>
                    <li>Loomis, R. S.; D. J. Connor. 1992. Crop ecology: productivity and management in agricultural systems. Cambridge University Press. Cambridge, UK. 538 p.</li>
                    <li>Powers, L. E.; R. McSorley. 2001. Principios ecológicos en agricultura. Paraninfo Thomson Learning. Madrid, España. 429 p.</li>
                    <li>Toledo, V.M.; N. Barrera B. 2008. La memoria biocultural. La importancia ecológica de las sabidurías tradicionales. Icaria Editorial Perspectivas Agroecológicas. Barcelona, España. 230 p.</li>
                    <li>Urbano T., P. 1992. Tratado de fitotecnia general. Mundi-Prensa. Madrid, España. 895 p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
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
                    <ul class="vineta">
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <p>
                        • No aplica
                    </p>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dr. Javier Fortanelli Martínez
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
