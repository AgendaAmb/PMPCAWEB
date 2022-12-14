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
                    <h5><strong> SIN nivel I.</strong></h5>
                    <p>
                        Sierra Leona #550, Col. Lomas 2a. Sección,<br>
                        C.P. 78210, San Luis Potosí, S.L.P., México.<br>
                        Tel. (444) 826-2300 Ext. 8410<br>
                        rfloresra@conacyt.mx
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
                            <li> García Cedillo, I. y <b>Romero Contreras, S.</b> (2016). Avances en la integración
                                educativa/educación inclusiva y la formación docente para la inclusión en México. San Luis
                                Potosí: Universidad Autónoma de San Luis Potosí/CENEJUS: Centro de Estudios Jurídicos y
                                Sociales Mispat, A. C.</li><br>
                            <li> García-Cedillo, I., &amp; <b>Romero-Contreras, S.</b> (2016). Influencia del tipo de
                                escuela (especial o regular) y algunas variables socioeconómicas sobre el aprovechamiento
                                escolar del alumnado con discapacidad. Revista Electrónica Educare, 20(1), 7.</li><br>
                            <li> Strasser, K., Rolla, A., &amp; <b>Romero-Contreras, S.</b> (2016). School Readiness
                                Research in Latin America: Findings and Challenges. New directions for child and adolescent
                                development, 2016(152), 31-44.</li><br>
                            <li> Escalante, L., Flores V., García-Cedillo, I., <b>Romero-Contreras, S.</b> (2018). Algunas
                                propiedades psicométricas de las guías para evaluar prácticas inclusivas en el aula. Revista
                                Española de Orientación y Psicopedagogía, 29 (2), 8-28.</li><br>
                            <li> Flores, V., García, I., &amp; <b>Romero, S.</b> (2017). Identificación de prácticas
                                inclusivas de docentes formadores de docentes. Liberabit, 23(1), 39-56. doi:
                                10.24265/liberabit.2017.v23n1.03.</li><br>
                            <li> <b>Romero, S.</b>, García, I., Rubio, S., Martínez, A., &amp; Flores, V. (2018). Influencia
                                del tipo de escuela (especial o regular) sobre el aprovechamiento académico del alumnado con
                                necesidades educativas especiales. Universitas Psychologica, 17(1), 1-11.
                                https://doi.org/10.11144/Ja veriana.upsy17-1.itee.</li><br>
                            <li> Villaseñor C, Calderón Hernández J, Gaytán E, <b>Romero S</b>, Díaz-Barriga F. Salud mental
                                materna: factor de riesgo del bienestar socioemocional en niños mexicanos. Rev Panam Salud
                                Publica. 2017;41:e1.</li>
                        </ul>
                        </p>
                        <p><strong>Libros</strong></p>
                        <p>
                        <ul class="vineta">
                            <li> García-Cedillo, I., &amp; <b>Romero-Contreras, S.</b> (2016). Avances de la integración
                                educativa/ educación inclusiva y la formación docente para la inclusión en México,
                                Aguascalientes, México.</li>
                            <li> <b>Romero-Contreras, S</b>, &amp; Concha S. (2017). Formación docente en el área del
                                lenguaje. Experiencias en América Latina, México D.F., México: 12 Editorial A.C.</li>
                        </ul>
                        </p>
                        <p><strong>Capítulos de Libros</strong></p>
                        <p>
                        <ul class="vineta">
                            <li> <b>Romero-Contreras, S.</b>, García-Cedillo, I., &amp; Fletcher, T. (2017). The Advancement
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
                            <li> “Expectativas, proyecto de vida y empoderamiento de jóvenes en tres escenarios
                                poblacionales del estado de San Luis Potosí”- Convocatoria Fondo Sectorial de Investigación
                                para el Desarrollo Social SEDESOL-CONACYT 2016.<br> <em>Objetivo general:</em> Instrumentar
                                un programa de diagnóstico que permita identificar y tipificar las perspectivas y
                                expectativas de las y los jóvenes residentes de tres escenarios poblacionales (urbano, rural
                                y rural indígena) del estado de San Luis Potosí, en relación a su proyecto de vida en los
                                rubros académico, laboral, y social. A partir de dichos resultados se identificarán las
                                áreas de oportunidad para generar estrategias de intervención basadas en evidencias a fin de
                                disminuir la vulnerabilidad e impulsar el empoderamiento de las y los jóvenes.</li><br>
                            <li> Especialización en Educación Inclusiva- OEI en República del Paraguay.<br><em>Propósito
                                    general:</em> esta especialización busca ofrecer un espacio de reflexión, análisis,
                                desarrollo de competencias y nuevas inquietudes respecto a cómo educamos y cómo atendemos a
                                la diversidad en las aulas, las escuelas y la sociedad. Sensibilizar a los docentes de los
                                diferentes niveles educativos referente a los desafíos de la atencióna la diversidad. </li>
                            <br>
                            <li> Improving education quality in Mexico by supporting teacher learning (Mejora de la calidad
                                educativa en México mediante el aprendizaje docente). Harvard-UASLP.<br><em>Descripción
                                    general:</em> Se propone evaluar un enfoque innovador para la enseñanza de la
                                lectoescritura y del pensamiento crítico en escuelas mexicanas que atienden tanto a niños de
                                contextos rurales como urbanos, con el fin de reducir las severas disparidades en el
                                aprovechamiento escolar y preparación para ejercer la ciudadanía de los estudiantes. Además,
                                que los profesores adopten nuevas prácticas docentes que fomenten que los alumnos se
                                involucren en clase, construyan su propio conocimiento y mejoren sus habilidades lectoras a
                                partir de la argumentación en clase.</li><br>
                            <li> Programa metropolitano para la vigilancia y promoción de la salud mental infantil. FONDO
                                SECTORIAL DE INVESTIGACIÓN EN SALUD Y SEGURIDAD SOCIAL SS/IMSS/ISSSTE-CONACYT, en
                                coordinación con Universidad Juárez del Estado de Durango. <br> <em>Objetivo general:</em>
                                Instrumentar un programa de vigilancia epidemiológica de la salud mental infantil en niños
                                residentes en las zonas metropolitanas de la Laguna y San Luis Potosí, México, a través de
                                integrar información de indicadores cognitivos, emocionales y conductuales con indicadores
                                de salud mental materna, datos geográficos, económicos, sociales, nutricionales y
                                concentraciones de neurotóxicos ambientales para evaluar las relaciones espacio-temporales
                                aplicando modelaje de estadística espacial para identificar zonas prioritarias de
                                intervención basada en evidencia.</li><br>
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
