@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DRA. SILVIA ROMERO CONTRERAS</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/Silvia_Romero_Contreras.png') }}" alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Profesor Investigador de Tiempo Completo. Nivel VI.</strong></h4>
                    <h5><strong>Facultad de Psicología.</strong></h5>
                    <h5><strong> SIN nivel II.</strong></h5>
                    <p>
                        Campus Oriente. Edificio Administrativo,
                        2o. piso cubículo 16<br>
                        C.P. 78399, San Luis Potosí, S.L.P., México.<br>
                        Tel. (444) 832-1000 Ext. 9356<br>
                        silvia.romero@uaslp.mx
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank" href="http://caeipe.weebly.com/dra-silvia-romero-contreras.html">Webpage</a>
                        {{-- <a target="_blank"
                            href="http://www.ciacyt.uaslp.mx/images/pdf/Ciaas/Dr.RogelioFloresRam%C3%ADrez.pdf">Curriculum
                            Vitae </a> --}}
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/JyoAAA%3d%3d">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0002-7726-6195"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=36675496700">
                            <img src="{{ asset('storage/images/scopus.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <strong>Actividad académica</strong>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <ol>
                            <li><strong>Cursos:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Metodología de Investigación Cualitativa</li>
                            </ul>
                            </p>
                            <li><strong>LGAC:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Evaluación e intervención en psicopedagogía de la lengua</li>
                                <li> Educación inclusiva</li>
                                <li> Formación docente</li>
                                <li> Educación comunitaria sustentable</li>
                            </ul>
                            </p>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Publicaciones</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><strong>Artículos de Investigación</strong></p>
                        <p>
                        <ul class="vineta">
                            <li>Rojas Corona, M. G., Silva Maceda, G., & <b>Romero Contreras, S.</b> (2024). <a href="http://www.ride.org.mx/index.php/RIDE/article/view/1813" target="_blank">Relationship of Academic Language and Reading Comprehension with Academic Writing in Higher Education</a>. RIDE. Revista Iberoamericana para la Investigación y el Desarrollo Educativo, 14(28).</li><br>
                            <li>García de la Torre, M., <b>Romero Contreras, S.</b>, Castro Larragoitia, G. J.., & Buendía-Oliva, M. (2024). Propuestas para el diseño de estrategias didácticas en entornos digitales a partir de la teoría de autodeterminación y la gamificación. RIDE Revista Iberoamericana para la Investigación y el Desarrollo Educativo, 14(28). <a href="https://doi.org/10.23913/ride.v14i28.1841" target="_blank">https://doi.org/10.23913/ride.v14i28.1841</a></li><br>
                            <li>García Cedillo, I., <b>Romero Contreras, S.</b>, Márquez Cabellos, N. G.., Rubiio Rodríguez, S., & Saldivar Reyes, A. (2024). Atención educativa al alumnado con necesidades educativas especiales en México durante la pandemia. Revista Educación. <a href="https://doi.org/10.15517/revedu.v48i1.56138" target="_blank">https://doi.org/10.15517/revedu.v48i1.56138</a></li><br>
                            <li>García Cedillo, I., <b>Romero Contreras, S.</b>, Márquez Cabellos, N. G., & Ramos Estrada, D. Y. (2024). <a href="https://www.revista.vocesdelaeducacion.com.mx/index.php/voces/article/view/731" target="_blank">Prácticas inclusivas de docentes de escuelas consideradas como exitosas en la implementación de la inclusión</a>. Voces de la Educacion, 9(17).</li><br>
                            <li>García, I., <b>Romero, S.</b>, Vázquez, B. N. y González, E. (2023). Evaluación de las prácticas inclusivas de docentes mexicanos en primaria y secundaria. Revista Chakiñan - Pre-print papers <a href="https://chakinan.unach.edu.ec/index.php/chakinan/article/view/877" target="_blank">https://chakinan.unach.edu.ec/index.php/chakinan/article/view/877</a></li><br>
                            <li>García Cedillo, I., <b>Romero Contreras, S.</b>, Ramos Estrada, D. Y. y Rubio Rodríguez, S. (2023). Identificación del rendimiento académico de alumnos con necesidades educativas especiales de escuelas regulares consideradas exitosas. Revista de Estudios y Experiencias en Educación REXE 48, 48-64 <a href="https://doi.org/10.21703/0718-5162.v22.n48.2023.003" target="_blank">https://doi.org/10.21703/0718-5162.v22.n48.2023.003</a></li><br>
                            <li>Morales Jasso, G., Benítez Ramírez, D. M., <b>Romero Contreras, S.</b>, Diédhiou, I., Velázquez Delgado, G., Castillo López, G., Mendoza Pérez, K., Algara Siller, M., y Olivares Illana, V. (2022). Multi, inter y transdisciplina, aportes para una mejor interpretación de sus significados. Nova Scientia, 14(29), 1-25. <a href="https://doi.org/10.21640/ns.v14i29.3066" target="_blank">https://doi.org/10.21640/ns.v14i29.3066</a> ISSN 2007-0705</li><br>
                            <li>García Cedillo, Márquez Cabellos, Rubio Rodríguez, Saldívar Reyes y <b>Romero Contreras, S.</b> (2022). Educación de alumnos con necesidades educativas especiales en pandemia. Perspectivas de las madres y padres. Psicogente. 25(48), 1-25. <a href="https://doi.org/10.17081/psico.25.48.5631" target="_blank">https://doi.org/10.17081/psico.25.48.5631</a>  ISSN 0124-0137</li><br>
                            <li>Moreno Medrano, Luz María Stella y <b>Romero Contreras Silvia</b>, (2022), <a href="http://www.jceps.com/archives/12392" target="_blank">The Otomi autonomous educational project: supporting children’s literacy and agency</a>. Journal for Critical Education Policy Studies and agency, Vol 20, No. 1, ISSN 1740-2743</li><br>
                            <li><b>Romero-Contreras, S.</b>, García-Cedillo, I., & Fletcher, T. V. (2022). Understanding the Mexican paradox on inclusive education: Continuities and discontinuities between public policy and educational practices. In International Issues in SEND and Inclusion (pp. 166-178). Routledge.</li><br>
                            <li>García-Cedillo, I., <b>Romero-Contreras, S.</b> & Flores Barrera, V.J. (2021). <a href="https://www.mlsjournals.com/MLS-Inclusion-Society/article/view/1050" target="_blank">COVID-19: condiciones de estudio, estado emocional y aprendizajes escolares de alumnos con necesidades educativas especiales</a>. MLS Inclusion and Society Journal, 1(1), 76-92</li><br>
                            <li>García Cedillo, I., Coronado Osuna, G., Rodríguez Quiñones, B.G., <b>Romero Contreras, S.</b>, (2021). Prácticas inclusivas de formadores de docentes de una escuela del noroeste de México, México: CPU-e, Revista de Investigación Educativa, n.34, pp.256-283. ISSN: 1970-5308 <a href="https://doi.org/10.25009/cpue.v0i34.2797" target="_blank">https://doi.org/10.25009/cpue.v0i34.2797</a></li><br>
                            <li>Estrada Aranda, Benito, <b>Romero Conteras, Silva</b>, Delgado Álvarez Carmen, Kaufmann T. Nicholas. (2021). <a href="https://revistaiztapalapa.izt.uam.mx/index.php/izt/article/view/1694" target="_blank">Percepción de la violencia de género de las mujeres Sordas mexicanas</a>, México: Iztapalapa Revista de Ciencias Sociales y Humanidades, N. 92, año 43, pp. 189-220. ISSN: 0185-4259</li><br>
                            <li><b>Romero, S.</b>, García, I., Rubio, S., Martínez, A., &amp; Flores, V. (2018). Influencia
                                del tipo de escuela (especial o regular) sobre el aprovechamiento académico del alumnado con
                                necesidades educativas especiales. Universitas Psychologica, 17(1), 1-11.
                                <a href="https://revistas.javeriana.edu.co/index.php/revPsycho/article/view/14418" target="_blank">https://doi.org/10.11144/Javeriana.upsy17-1.itee</a></li><br>
                            <li>Escalante, L., Flores V., García-Cedillo, I., <b>Romero-Contreras, S.</b> (2018). <a href="https://revistas.uned.es/index.php/reop/article/view/23150" target="_blank">Algunas
                                propiedades psicométricas de las guías para evaluar prácticas inclusivas en el aula</a>. Revista
                                Española de Orientación y Psicopedagogía, 29 (2), 8-28.</li><br>
                            <li>Villaseñor C, Calderón Hernández J, Gaytán E, <b>Romero S</b>, Díaz-Barriga F. (2017) <a href="https://www.scielosp.org/article/rpsp/2017.v41/e1/es/" target="_blank">Salud mental
                                materna: factor de riesgo del bienestar socioemocional en niños mexicanos.</a> Rev Panam Salud
                                Publica. 2017;41:e1.</li>
                            <li>Flores, V., García, I., &amp; <b>Romero, S.</b> (2017). Identificación de prácticas
                                inclusivas de docentes formadores de docentes. Liberabit, 23(1), 39-56. doi: <a href="http://ojs3.revistaliberabit.com/index.php/Liberabit/article/view/57/64" target="_blank">
                                https://doi.org/10.24265/liberabit.2017.v23n1.03</a></li><br>
                        </ul>
                        </p>
                        <p><strong>Libros</strong></p>
                        <p>
                        <ul class="vineta">
                            <li>García-Cedillo, I., &amp; <b>Romero-Contreras, S.</b> (2016). Avances de la integración
                                educativa/ educación inclusiva y la formación docente para la inclusión en México,
                                Aguascalientes, México.</li><br>
                            <li><b>Romero-Contreras, S</b>, &amp; Concha S. (2017). Formación docente en el área del
                                lenguaje. Experiencias en América Latina, México D.F., México: 12 Editorial A.C.</li><br>
                        </ul>
                        </p>
                        <p><strong>Capítulos de Libros</strong></p>
                        <p>
                        <ul class="vineta">
                            <li><b>Romero-Contreras, S.</b>, & García-Cedillo, I. (2023). Where Does Mexico Stand Regarding the Agenda 2030 Goals for Inclusive Education?. In Progress Toward Agenda 2030 (Vol. 21, pp. 297-315). Emerald Publishing Limited.</li><br>
                            <li><b>Romero-Contreras, S.</b>, García-Cedillo, & Silva-Maceda, G. (2022), “Collaborative b-learning as a tool to studying and preparing for inclusion in a culturally diverse environment”, Global Directions in Inclusive Education. Conceptualizations, practices, and methodologies for the 21st century, edit. Matthew J. Schuelka and Suzanne Carrington, Routledge Taylor.</li><br>
                            <li><b>Romero-Contreras, S.</b>, García-Cedillo I. & Fletcher, T.V. (2019). En M. J. Schuelka, C. J. Johnstone, G. Thomas & A. J. Artiles (Eds.)  “The Evolution of Inclusive Education in Mexico: Policy, Settings, Achievement and Perspective”, The SAGE Handbook of Inclusión and diversity in education, Editorial SAGE, California, EUA,  pp. 509-523.</li><br>
                            <li><b>Romero-Contreras, S.</b>, García-Cedillo, I., &amp; Fletcher, T. (2017). The Advancement
                                of Inclusive Education for Students with Disabilities. The Wiley Handbook of Diversity in
                                Special Education, 45-69.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Vinculación</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><strong>Proyectos</strong></p>
                        <p>
                        <ul class="vineta">
                            <li>2024-2025. Sistematización del modelo educativo del programa Música para la Vida (MUVI). Co-investigadora principal con la Dra. Gabriela Silva Maceda</li><br>
                            <li>2022-2024. Storybooks México-Witsi net. Cuentos digitales para promover las literacidades de niños indígenas en sus lenguas maternas (COPOCYT, Fideicomiso 18397). Responsable técnica: Dra. Anuschka van ’t Hooft</li><br>
                            <li>2018-2024. Mejora de la calidad de la educación en México mediante el aprendizaje docente.Universidad de Harvard. Co-investigadora principal con la Dra. Cahterine E. Snow</li><br>
                            <li>2017-2019. Especialización en Educación Inclusiva- OEI en República del Paraguay </li><br>
                            <li>2017-2018. Expectativas, proyecto de vida y empoderamiento de jóvenes en tres escenarios poblacionales del estado de San Luis Potosí. SEDESOL</li><br>
                            <li>2016-2019. Programa metropolitano para la vigilancia y promoción de la salud mentalinfantil. SA-CONACYT</li><br>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    </div>
@endsection
