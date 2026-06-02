@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>FARMACOGNOSIA, QUÍMICA Y FARMACOLOGÍA DE  PLANTAS MEDICINALES</strong></h1>
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
                                        <td>3</td>
                                        <td>1</td>
                                        <td>2</td>
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
                <p>El objetivo de este curso es presentar los aspectos básicos de producción de metabolitos secundarios en las plantas.  Entender la influencia del ambiente en el funcionamiento fisiológico para la producción de metabolitos secundarios. Conocer las propiedades terapéuticas de los grupos vegetales y sus metabolitos secundarios así como los procesos  de extracción y estrategias metodológicas de investigación y evaluación de productos naturales.
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
                                        <td id="contTabla">Capacidad de análisis de datos e información</td>

                                        <td>Aprovechar de manera sustentable los recursos naturales con propiedades medicinales y/o  funcionales.</td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla">Capacidad de análisis de datos e información</td>

                                        <td>Diseñar planes de manejo para la explotación de recursos naturales de interés en el área. 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla">Trabajo multidisciplinario
                                        </td>

                                        <td>Ser capaz de trabajar en equipo y para relacionarse con otras personas del mismo o distinto ámbito profesional.</td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla">Razonamiento crítico
                                        </td>

                                        <td>Desarrollar habilidades de iniciación a la investigación.</td>
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
                                        <td>La planta: su estructura y función</td>
                                        <td id="contTablaIzq"> Conocer la definición de conceptos y objetivos
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Exposiciones orales de estudiantes</li>
                                                <li>Análisis crítico de lecturas.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Metabolitos secundarios</td>
                                        <td id="contTablaIzq">
                                        •Relacionar las propiedades, la naturaleza y los cambios que se presentan en compuestos orgánicos de tipo vegetal. <br>•Relacionar el aspecto funcional, estructural y la reactividad de las sustancias naturales.
                                        </td>
                                            <td id="contTablaIzq">
                                                <ul class="vineta">
                                                    <li>Exposiciones orales del profesor</li>
                                                    <li>Exposiciones orales de estudiantes</li>
                                                    <li>Análisis crítico de lecturas.
                                                    </li>
                                                </ul>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Fitoquímica</td>
                                        <td id="contTablaIzq">
                                        Determinar la nomenclatura, el origen y practicar sobre las técnicas de obtención de las diferentes sustancias que se encuentran en forma natural en las plantas. Identificar la metodología especial en casos de difícil extracción.
                                        </td>
                                        <td id="contTablaIzq">
                                            <ul class="vineta">
                                                <li>Exposiciones orales del profesor</li>
                                                <li>Exposiciones orales de estudiantes</li>
                                                <li>Análisis crítico de lecturas.
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
                                        <td>Al final de la Unidad 1</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen escrito, discusión de lecturas y artículos relacionados con los temas de la unidad,</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Al final de la unidad 2</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen escrito, discusión de lecturas y artículos relacionados con los temas de la unidad,</li>
                                                <li>Informes de prácticas</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Al final de la unidad 3</td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen escrito, discusión de lecturas y artículos relacionados con los temas de la unidad,</li>
                                                <li>Informes de prácticas</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Al final de la Unidad 4 </td>
                                        <td>
                                            <ul class="vineta">
                                                <li>Examen escrito, discusión de lecturas y artículos relacionados con los temas de la unidad,</li>
                                                <li>Informes de prácticas</li>
                                                <li>Trabajo final</li>
                                            </ul>
                                        </td>
                                        <td>25%</td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>TOTAL </td>
                                        <td></td>
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
                <ul class="vineta">
                    <li>Albornoz, M. A. 1980. Productos naturales: Estudio de las sustancias y drogas extraídas de las plantas. Publicaciones de la Universidad Central de Venezuela. Caracas, Venezuela. 616 p.</li>
                    <li>Boik, J. 2001. Natural compounds in cancer therapy. Oregon Medical. Princeton, Minnesota. USA. 521 p.</li>
                    <li>Bruneton, J. 1991. Elementos de fitoquímica y farmacognosia. Acribia. Zaragoza, España. 594 p.</li>
                    <li>Domínguez, X. A. 1979. Métodos de investigación fitoquímica. Limusa. México, D. F. 281 p.</li>
                    <li>Hardman, J. G.; L. L. Limbird; G. A. Goodman (Eds.) 2001. Las bases farmacológicas de la terapéutica. Mc Graw Hill. México, D. F. 2049 p.</li>
                    <li>Kolbold, M. 2001. Licores de hierbas y aguardientes medicinales. Susaeta. Madrid, España. 127 p.</li>
                    <li>Merck, A. G. 1965. Révélateurs pour la chromatografie en couches minces et sur papier. Darmstadt, Allemagne. 80 p.</li>
                    <li>Muñoz L. de B., F. 2000. Plantas medicinales y aromáticas: Estudio, cultivo y procesado. Mundi-Prensa. Bilbao, España. 365 p.</li>
                    <li>OECD/OCDE. 2000. OECD Guideline for testing of chemicals, acute oral toxicity-fixed dose procedure.</li>
                    <li>Summer, J. 2000. The natural history of the medicinal plants. Timber. Portland, Oregon. USA. 235 p.</li>
                    <li>Trease, G. E., W. C. Evans. 1987. Tratado de farmacognosia. Interamericana. México, D. F. 846 p. </li>
                    <li>Valdez A., R.; A. Aguilar C.; M. E. López V.; S. Xolalpa M. 2002.Herbolaria mexicana. CONACULTA. México, D. F. 212 p.</li>
                    <li>Waizel B., J. 2006. Las plantas medicinales y las ciencias. Una visión multidisciplinaria. Instituto Politécnico Nacional. México, D. F. 587 p.</li>
                    <li>Wyk, B-E van; M. Wink. 2004. Medicinal plants of the world. Timber. Portland, Oregon. 480 p.</li>
                    <li>Tyagi, A., N. Delenty. 2003. Herbal remedies, dietary supplements and seizures. Epilepsia. 44(2): 228-235.</li>
                    <li>Zweig G., J. Sherma (Eds.). 1984. Handbook of chromatography. CRC. Boca Raton, Florida. USA. 343 p.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul class="vineta">
                    <li>Creativa</li>
                    <li>Bases de datos como Pub-Med, Science Direct, Scielo, etc.</li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                <br>
                <ul>
                    <li>Conocimientos generales de química y biología.</li>
                </ul>
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgado:
                    <ul class="vineta">
                        <li>Ciencias Farmacobiológicas de la FCQ</li>
                    </ul>
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Esta asignatura puede ser acreditada a través de la presentación de un documento probatorio que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>No</strong></li>
                    <li>Esta asignatura puede ser acreditada a través de un examen que certifique que el estudiante ya cuenta con los aprendizajes necesarios: <strong>Si</strong></li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <div class="margen">
                    <ul class="vineta">
                    <li>Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 10</li>
                    <li>Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong> Dra. Bertha Irene Juárez Flores
                    <br>
                    <strong> • Revisó:</strong> 
                </p>
            </div>
        </div>
    </div>
@endsection
