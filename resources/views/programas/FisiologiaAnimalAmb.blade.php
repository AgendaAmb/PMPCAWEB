@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>FISIOLOGÍA ANIMAL AMBIENTAL</strong></h1>
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
                                        <td>4</td>
                                        <td>0</td>
                                        <td>4</td>
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
                <p>El objetivo de este curso es presentar los aspectos básicos de las interacciones entre el animal y su medio. Entender la influencia del ambiente en el funcionamiento fisiológico animal y su desarrollo productivo y reproductivo, así como los mecanismos de adaptación al ambiente y sus variables
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
                                        <td id="contTabla"><strong>Competencia (s) profesional (es) que contribuye a desarrollar la materia</strong></td>

                                        <td>
                                            <ul>
                                                <li>Identificar los elementos básicos de un organismo animal a partir de su forma y funcionamiento.</li>
                                                <li>Analizar el funcionamiento general de un organismo animal y sus mecanismos de adaptación frente a condiciones ambientales adversas.</li>
                                                <li>Evaluar el desempeño productivo de las diferentes especies de interés zootécnico frente a cambios de las condiciones ambientales.</li>
                                                <li>Analizar los diferentes tipos de desechos pecuarios y su impacto en el medio ambiente.
                                                <br>Contrastar alternativas sustentables para el manejo de residuos pecuarios.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="contTabla"><strong>Desempeños de la competencia profesional a los que contribuye la materia.</strong> </td>

                                        <td>El estudiante:
                                            <ul>
                                                <li>Identifica y delimita con claridad problemas en el funcionamiento de los organismos animales bajo diferentes contextos.</li>
                                                <li>Establece relaciones esenciales entre la fisiología animal y su ambiente que le permiten abordar las problemáticas desde una perspectiva integral.</li>
                                                <li>Propone estrategias de manejo dentro de los sistemas pecuarios que permitan amortiguar los efectos adversos de los cambios en las condiciones ambientales.</li>
                                                <li>Diseña y prioriza alternativas para el manejo de desechos con base en la disponibilidad de recursos y tipo de desecho</li>
                                            </ul>    
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"><strong>Competencia (s) transversal (es) a las que contribuye a desarrollar la materia en los alumnos.</strong>
                                        </td>

                                        <td>
                                            <ul>
                                                <li>Participa de manera colectiva en su ámbito de trabajo para el cumplimiento de objetivos y la resolución de problemas.</li>
                                                <li>Asume su compromiso social para el cuidado y protección del ambiente.</li>
                                                <li>Genera propuestas innovadoras y creativas para la resolución de problemas en el aula.</li>
                                                <li>Desarrolla habilidades de búsqueda, procesamiento y análisis de diferentes fuentes de información.</li>
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
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Unidades</th>
                                        <th scope="col">Objetivo específico</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Relacionar la fisiología animal con el medio y revisar conceptos básicos</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Definición y características sobre funcionamiento de un organismo.</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Revisar todas las funciones fisiológicas del organismo y analizar su relación con el medio, en función de la conservación de la homeostasis</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Se analizan el efecto del ambiente sobre los parámetros: nutrición, sanidad, reproducción y producción. Revisando cada sección a nivel celular así como las posibles modificaciones y adaptaciones de los organismos por efecto de un entorno específico</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>En esta sección se trata la forma en que se tratan los desechos de la producción animal para evitar contaminación al medio. Con un énfasis al manejo de desechos pecuarios de las diferentes especies de interés zootécnico.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <h4> <strong>CONTENIDOS Y MÉTODOS POR UNIDADES Y TEMAS</strong></h4>
                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>Unidad 1. Introducción</strong></td>
                                <td><strong>4 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema</strong></td>
                                <td><strong></strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>1.1</strong>Introducción histórica </td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>1.2</strong>Conceptos básicos de fisiología ambiental</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong> </td>

                                <td>Revisión de libros de Fisiología Animal
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza y prácticas </strong></td>

                                <td>Exposición oral y presentación de temas</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>
                                <td><strong>Examen sorpresa</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 2. El Organismo</strong></td>
                                <td><strong>6 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 2.1.</strong> Definición y características</td>
                                <td><strong></strong></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 2.2</strong> Organización </td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 2.3 </strong> Forma y función</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 2.4</strong> Control e integración funcional</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>

                                <td>Revisión de libros y artículos científicos</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong></td>
                                <td>Exposición oral y presentación de temas
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong> </td>

                                <td>Examen sorpresa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 3. Ambiente-organismo </strong></td>
                                <td><strong>16 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 3.1</strong> Homeostasis y regulación</td>
                                <td><strong></strong></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 3.2</strong> Homeotermia, flujo y balance de calor</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 3.3</strong> Tolerancia y resistencia al Ambiente</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 3.4</strong> Aclimatación</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 3.5</strong>  Mecanismos reguladores al ambiente</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 3.6</strong>  Control e integración funcional</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 3.7</strong> Estrés climático</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos</strong></td>
                                <td>Revisión de libros y artículos científicos
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong> </td>

                                <td>Exposición oral y presentación de temas
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Examen sorpresa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 4. El ambiente en la alimentación, reproducción, salud y producción.</strong></td>
                                <td><strong>20 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 4.1</strong>  Fisiología digestiva comparada</td>
                                <td><strong></strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 4.2</strong> Nutrición</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 4.3</strong> Bioenergética</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 4.4</strong> Fisiología reproductiva comparada</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 4.5 </strong> Biorritmo y fotoperiodismo</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 4.6</strong> Causas, transmisión proceso, inmunidad y control de enfermedades</td>
                                <td><strong></strong></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 4.7</strong> El ambiente en el desempeño productivo</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 4.8</strong> Modificadores ambientales</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos </strong></td>

                                <td>Revisión de libros y artículos científicos
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong></td>

                                <td>Exposición oral y presentación de temas</td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Examen sorpresa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="contTablaIzq">
                    <table class="table table-bordered border-dark" id="colorTexto">
                        <thead>
                            <tr>
                                <td id="contTabla"><strong>UNIDAD 5 Alteraciones ambientales por efecto de la producción pecuaria</strong></td>
                                <td><strong>20 h</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="contTabla"><strong>Tema 5.1</strong> Contaminación ambiental</td>
                                <td><strong></strong>
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 5.2</strong>  Manejo de desechos pecuarios</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 5.3</strong> Contaminación de productos pecuarios</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Tema 5.4</strong> Métodos biológicos alternativos en la producción pecuaria</td>

                                <td></td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Lecturas y otros recursos </strong></td>

                                <td>Revisión de libros y artículos científicos
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Métodos de enseñanza</strong></td>

                                <td>Exposición oral y presentación de temas
                                </td>
                            </tr>

                            <tr>
                                <td id="contTabla"><strong>Actividades de aprendizaje</strong></td>

                                <td>Examen sorpresa
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Evaluación</strong></h4>
                        <p>A continuación, se muestra las condiciones de las evaluaciones parciales.
                        <br>La metodología a seguir en el curso es mediante clases presénciales de maestro; lecturas de textos especializados, artículos científicos, tecnológicos, de difusión de la ciencia y la tecnología clásicos y actuales, sobre fisiología animal.</p>
                        <hr>
                        <h5><strong>EVALUACIÓN Y ACREDITACIÓN</strong></h5>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Elaboración y/o presentación de: </th>
                                        <th scope="col">Periodicidad<br>(semanas)</th>
                                        <th scope="col">Abarca</th>
                                        <th scope="col">Ponderación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1er Examen parcial</td>
                                        <td>6</td>
                                        <td>Unidad 1 - 2</td>
                                        <td>15</td>
                                    </tr>

                                    <tr>
                                        <td>2do Examen parcial </td>
                                        <td>6</td>
                                        <td>Unidad 3 – 5</td>
                                        <td>15</td>
                                    </tr>

                                    <tr>
                                        <td>Examen final</td>
                                        <td></td>
                                        <td>Todo</td>
                                        <td>20</td>
                                    </tr>

                                    <tr>
                                        <td>Exposición oral y escrita de un trabajo</td>
                                        <td></td>
                                        <td> </td>
                                        <td>25</td>
                                    </tr>

                                    <tr>
                                        <td>Análisis y exposición de artículos científicos </td>
                                        <td></td>
                                        <td></td>
                                        <td>25</td>
                                    </tr>

                                    <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td>100</td>
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
                    <li>Brouillette, J. and N. Spanski 1998. Cow comfort and the effects on productivity and profitability. Cornell Cooperative Extension. Ithaca, N.Y. p.p. 258.</li>
                    <li>Frazzi, E., L. Calamari, F. Calegari, L. Stefanini 2000. Behavior of dairy cows in response to different barn cooling systems. Transactions of the American Society of Agricultural Engineers. 43 (2):387-394.</li>
                    <li>Fregly, M.J. and C.M. Blatteis 1996. Handbook of physiology: Environmental Physiology. Oxford University Press.</li>
                    <li>Fuquay, J.W.1981. Heat stress as it affects animal production. J. Animal Sci. 52 (1): 164-174.</li>
                    <li>Leroy, H.G. 1981. Housing and management to reduce climatic impacts on livestock. J. Animal Sci. 52 (1): 175-186.</li>
                    <li>NRC. National Research Council 1981. Effect of environment on nutrient requirements of domestic animals. National Academy Press. Washington,D.C.</li>
                    <li>Sttott, G.H. 1981. What is the animal stress and how is it measured?. J. Animal Sci. 52(1): 150-153.</li>
                    <li>Van Horn, H.H. and C.J. Wilcox 1992. Large dairy herd management. American Dairy Science Association. Champaign, IL. USA. 826 p.</li>
                    <li>Willmer, P.J., I.A.Johnston and G. Stone. 2000. Environmental Physiology of Animals. Blackwell Science.</li>
                    <li>Young, B.A. 1981. Cold stress as it effects animal production. J. Animal Sci. 52(1):154-163.</li>
                </ul>
            </div>

            <hr>
                <h5> <strong>Recursos digitales</strong></h5>
                <div class="margen">
                <ul>
                    <li>CREATIVA-UASLP. webscience</li>
                </ul>
            </div>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>Para poder cursar esta asignatura, es necesario:
                    • Ninguna
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>Esta asignatura es compartida con los siguientes programas de posgrado:
                    • Maestría y Doctorado en Ciencias Agropecuarias, Facultad de Agronomía y Veterinaria. UASLP.
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
                    <li>Máximo de15 estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera</li>
                    <li>Mínimo de 1 estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera</li>
                </ul>
                </div>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong>  Dr. Juan Carlos García López
                    <br>
                    <strong> • Revisó:</strong> Dr. Gregorio Álvarez Fuentes
                </p>
            </div>
        </div>
    </div>
@endsection
