@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DRA. VIRGINIA GABRIELA CILIA LÓPEZ</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/Virginia_Gabriela_Cilia_Lopez.png') }}" alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Profesor Investigador de Tiempo Completo. Nivel V.</strong></h4>
                    <h5><strong>Facultad de Medicina.</strong></h5>
                    <h5><strong>SNI nivel I.</strong></h5>
                    <p>
                        Av. Venustiano Carranza 2405 Colonia Los Filtros,<br>
                        C.P. 78210 San Luis Potosí, S.L.P.<br>
                        Tel. (444) 8262300 Ext. 6619 <br>
                        gabycilmoto@gmail.com
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/-kcAAA%3D%3D">Webpage</a>
                        <a target="_blank"
                            href="http://www.ciacyt.uaslp.mx/images/pdf/Ciaas/Dra.VirginiaGabrielaCiliaL%C3%B3pez.pdf">Curriculum
                            Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/-kcAAA%3D%3D">Directorio de
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
                                <li> TSCA Biodiversidad, nutrición y seguridad alimentaria </li>
                            </ul>
                            </p>
                            <li><strong>LGAC:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Biodiversidad para la seguridad alimentaria </li>
                                <li> Diversidad y conservación de recursos alimentarios locales y autóctonos </li>
                                <li> Etnobotánica y etnofarmacología </li>
                            </ul>
                            </p>
                            <li><strong>Dirección de Tesis:</strong></li>

                            <p><em>Maestría en Ciencias Ambientales</em>
                            <ul class="vineta">
                                <li>Díaz Torres Rocío del Carmen. 2017. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4132/MCA1DTR201701.pdf?sequence=3&amp;isAllowed=y">La
                                        dieta tradicional huasteca como recurso de alimentos funcionales.</a></li>
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
                            <li> (2017) R. Flores-Ramírez, G. Espinosa-Reyes, <b>V. G. Cilia-López</b>, D. J. González-Mille
                                M., Rodríguez-Aguilar L., Díaz de León-Martínez, F. Díaz-Barriga. Application of focused
                                ultrasound-assisted extraction for the quantification of persistent organic pollutions in
                                liver tissue of giant toad (Rhinella marina). Bulletin of Environmental Contamination and
                                Toxicology. 98: 207-211.</li><br>
                            <li> (2016) Flores-Ramírez R., F. J. Pérez-Vázquez, <b>V. G. Cilia-López</b>, B. A. Zuki-Orozco,
                                L. Carrizales, E. Batres-Esquivel, A. Palacios-Ramírez, F. Díaz-Barriga. Assessment of
                                exposure to mixture pollutants in Mexican indigenous children. Environmental Sciences and
                                Pollution Research. 23: 3577-3588. </li><br>
                            <li> Martínez-Loredo, E., Izquierdo-Vega, J.A., Cariño-Cortés, R., <b>Cilia-López, V. G.</b>,
                                Madrigal-Santillán, E. O., Zúñiga-Pérez, C. Valadez-Vega, C., Moreno, E., Sánchez-Gutiérrez,
                                M. Effects of the ethanolic extract of Heliopsis longipes on mouse spermatozoa in vitro.
                                Pharmaceutical Biology. 2016. 54(2): 266–271.</li><br>
                        </ul>
                        </p>

                        <p><strong>Artículos de divulgación</strong></p>
                        <p>
                        <ul class="vineta">
                            <li> (2018) <b>Cilia L. V. Gabriela</b> y J. A. de Nova Vázquez. La conservación in situ y la
                                seguridad alimentaria. Universitarios Potosinos. 226: 12-15.</li><br>
                            <li> (2017) Nadia García Aguilar y <b>V. Gabriela Cilia López</b>. Los fitoestrógenos como
                                alternativa en el tratamiento del climaterio. Universitarios Potosinos. 214: 16-21.</li><br>
                            <li> González Martell A. y <b>Cilia López Virginia</b>. Los instrumentos para medir seguridad
                                alimentaria en México. Revista de Divulgación Científica de Nutrición Ambiental y Seguridad
                                Alimentaria. 6(5): 5-9. </li><br>
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
                        <p><strong>Proyectos como investigador colaborador:</strong></p>
                        <p>
                            <ul class="vineta">
                                <li> [Octubre 2016 – Diciembre 2018] Investigador colaborador en el proyecto: “Rutas Académicas para Insertar a Comunidades en la Equidad Social (RAICES).Proyecto financiado el Consejo Nacional de Ciencia y Tecnología (CONACYT).</li>
                            </ul>
                        </p>
                        <p><strong>Proyectos como responsable técnico:</strong></p>
                        <p>
                            <ul class="vineta">
                                <li> Agosto 2019- Agosto 2021: "Evaluación de la exposición a flúor, ftalatos y microplásticos en bebidas de consumo infantil" Fondo Sectorial de Investigación en Salud y Seguridad Social (FOSISS-2018)</li><br>
                                <li> [Abril 2018- mayo 2019] “Frecuencia de automedicación en pacientes de medicina familiar del Hospital Central”. CONBIOETICA-24CEI-001-20160427. </li><br>
                                <li> [Mayo 2018- marzo 2019] “Evaluación de la actividad cicatrizante de Hamelia patens”. Convenio C18-FAI-05-13.13.</li><br>
                                <li> [Octubre 2016- noviembre2017] Las dietas tradicionales como factor protector en la prevención de enfermedades crónico degenerativas en población rural e indígena. Convenio C14-FAI-09-19.19 </li><br>
                                <li> [Octubre 2015- a la fecha ] “Diagnóstico de seguridad alimentaria en la comunidad universitaria de la UASLP: acceso y disponibilidad de alimentos”. Proyecto de colaboración entre la Facultad de Medicina y la Facultad de Enfermería. </li>
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
