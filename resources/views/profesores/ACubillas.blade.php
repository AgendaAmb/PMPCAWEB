@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DRA. ANA CRISTINA CUBILLAS TEJEDA</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/Ana_Cristina_Cubillas_Tejeda.png') }}"
                    alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Profesor Investigador de Tiempo Completo. Nivel VI.</strong></h4>
                    <h5><strong>Facultad de Ciencias Químicas.</strong></h5>
                    <h5><strong>SNI nivel I.</strong></h5>
                    <br>
                    <p>
                        Av. Dr. Manuel Nava No.6, Zona Universitaria<br>
                        C.P. 78210, San Luis Potosí, S.L.P., México.<br>
                        Tel. + 52 (444) 826-2300 Ext. 6529<br>
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank" href="http://cienciasquimicas.uaslp.mx/index.php/home/docentes/23">Webpage</a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/descargarCV/XCYAAA%3d%3d">Curriculum
                            Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/XCYAAA%3d%3d">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0002-6709-2750"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=6506276426"> <img
                                src="{{ asset('storage/images/scopus.png') }}" alt=""></a>
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
                            <li><strong>Cursos</strong></li>
                            <p>TSCA: Diseño y Evaluación de Proyectos de Investigación</p>

                            <li><strong>LGAC</strong></li>
                            <p>Metodologías para la gestión ambiental<br>
                                Desarrollo Sostenible
                            </p>
                            <li><strong>Dirección de Tesis</strong></li><br>
                            <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                            <p>
                                Godoy Avendaño Enma Valentina. 2010. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_godoyavendano.pdf">
                                    Landfill gas generation and use alternatives as well as financing possibilities through
                                    the clean development mechanism.</a></li>
                                León Gómez Alejandra. 2012. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_leongomez.pdf">Análisis
                                    de la percepción de exposición a riesgos ambientales a la salud en distintas poblaciones
                                    infantiles.</a></li>
                                Börner Susanne. 2013. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_bornersusanne.pdf">Análisis
                                    de la percepción de riesgos ambientales para la salud en niños y adolescentes de
                                    comunidades vulnerables bajo riesgos múltiples, en la ciudad de San Luis Potosí,
                                    México.</a></li>
                            </p>
                            <br>
                            <p><em>Maestría en Ciencias Ambientales</em></p>
                            <p>
                                Torres Nerio Rocío. 2005. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202002-08/2005_pmpca_torresnerio.pdf">Diseño
                                    y aplicación de un programa de comunicación de riesgos para la salud ambiental infantil
                                    en un sitio contaminado con plomo y arsénico</a>.
                                Terán Hernández Mónica. 2006. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202004-08/2006_pmpca_teranhernandez.pdf">Diseño
                                    de un modelo de atención para un centro comunitario de salud ambiental infantil
                                    indígena</a>.</li>
                                Rentería Guzmán Yei Jazmín. 2011. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202006-08/2011_pmpca_renteriaguzman.pdf">Análisis
                                    de programas sobre estufas eficientes de cocción con leña: estudio de caso en dos
                                    comunidades de la Huasteca Potosina</a>.
                                González Mares Mariana Odemaris. 2013. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2013_pmpca_gonzalezmares.pdf">Salud
                                    ambiental: estado del arte y propuesta de un modelo de comunicación y educación</a>.

                                Monsivais Nava Claudia Davinia. 2014. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_monsivaisnava.pdf">Diseño
                                    e implementación de un programa de comunicación de riesgos para mejorar la salud
                                    ambiental infantil de una comunidad vulnerable bajo múltiples riesgos</a>.</li>
                                Bernal Medina Jesús Eduardo. 2018. <a
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4533/MCA1BMJ201801.pdf?sequence=1&amp;isAllowed=y">Análisis
                                    de los roles de género en la seguridad alimentaria familiar en comunidades urbano
                                    marginadas del estado de San Luis Potosí</a>.
                                Berumen Rodríguez Alejandra Abigail. 2018. <a
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4547/MCA1BRA201801.pdf?sequence=1&amp;isAllowed=y">Implementación
                                    de intervenciones educativas enfocadas en la prevención de enfermedades no transmisibles
                                    (ENT), para mejorar la salud ambiental en zonas urbanas marginadas de San Luis
                                    Potosí</a>.
                            </p>
                            <br>
                            <p><em>Doctorado en Ciencias Ambientales</em></p>
                            <p>
                                Torres Nerio Rocío. 2012. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-02/2012_pmpca_torresnerio.zip">Diseño
                                    e implementación de programas de comunicación de riesgos para mejorar la salud ambiental
                                    en una comunidad de la Huasteca Potosina</a>.
                                Juárez Moreno Mariana. 2018. <a
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4515/DCA1JMM201801.pdf?sequence=1&amp;isAllowed=y">Diseño,
                                    implementación y evaluación de un programa de comunicación de riesgos como estrategia de
                                    prevención de la infección por VIH en adolescentes.</a>
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
                        <strong>Artículos científicos</strong><br><br>
                        <p>
                            <li> Meza-Lozano B, Ortiz-Pérez MD, Ponce-Palomares M, Castillo-Gutiérrez SG, Flores-Ramírez R,
                                <b>Cubillas-Tejeda AC</b>.<br>Implementación y evaluación de un Programa de Comunicación de
                                Riesgos por exposición a flúor en la comunidad de El Fuerte, Santa María del Río, San Luis
                                Potosí, México. Revista Internacional de Contaminación Ambiental. 32 (1) 87-100, 2016. ISSN:
                                0188-4999
                            </li><br>
                            <li> Mónica Terán-Hernández, Fernando Díaz-Barriga Martínez, <b>Ana Cristina
                                    Cubillas-Tejeda</b>.
                                <br>Diagnóstico de salud y percepción de riesgos, elementos clave para una propuesta de
                                intervención en comunidades indígenas. Rev Panam Salud Pública 39(2), 2016, 106-114. ISSN
                                digital: 1680 5348, ISSN impresa: 1020 4989.
                            </li><br>
                            <li> María Lucina Torres-Rodríguez, Erika García-Chávez, Gerson Alonso Soto-Peña, Celia
                                Aradillas-García y <b>Ana Cristina Cubillas-Tejeda</b>.<br>Evaluación de la toxicidad aguda
                                in
                                vivo del extracto etanólico y acuoso de Calea urticifolia. Botanical Sciences 94 (1):
                                133-140,
                                2016. ISSN Digital: 2007- 4476. ISSN Impresa: 2007-4298.</li><br>
                            <li> Susanne Börner, Juan Carlos Torrico-Albino, Luz María Nieto-Caraveo &amp; <b>Ana Cristina
                                    Cubillas-Tejeda</b>. <br>Living with everyday environmental risks: giving a voice to
                                Young
                                people in the design of community-based risk communication programs in the city of San Luis
                                Potosí, México. Children's Geographies. 15(6):703-7015, 2017. ISSN: 1473-3285 (Print)
                                1473-3277
                                (Online) </li><br>
                            <li> R Flores-Ramírez, FJ Pérez-Vázquez, M Rodríguez-Aguilar, SE Medellín-Garibay, E Van
                                Brussel,
                                <b>AC Cubillas-Tejeda</b>, L Carrizales-Yáñez, F Díaz-Barriga.<br>Biomonitoring of
                                persistent
                                organic pollutants (POPs) in child populations living near contaminated sites in Mexico.
                                Science
                                of the Total Environment 579(2) (2017) 1120–1126 ISSN Digital: 0048-9697
                            </li><br>
                            <li> Mariana Juárez Moreno, Ismael García Cedillo, Leonardo Ernesto Márquez Mireles, Raúl
                                Morales
                                Villegas, <b>Ana Cristina Cubillas Tejeda</b>. <br>Diseño, implementación y evaluación de un
                                Programa de Comunicación de Riesgos como estrategia de prevención de la Infección por VIH en
                                adolescentes. Revista de Comunicación y Salud, 2017, Vol. 7, pp. 81-102. ISSN: 2174-5323
                                (impreso) 2173-1675 (electrónico)</li><br>
                            <li> Monsiváis-Nava C.D., Romero-Contreras S., García-Cedillo I., van´t Hooft A.,
                                <b>Cubillas-Tejeda
                                    A.C</b>.<br>Prácticas y saberes sobre alimentación infantil en familias de una comunidad
                                cercana al tiradero municipal de San Luis Potosí. Revista de Salud Pública y Nutrición,
                                2018, 17
                                (4), 11-26
                            </li><br>
                        </p>

                        <strong>Artículos de divulgación</strong><br><br>

                        <p>
                            Diana Patricia Portales Pérez, Juan Manuel Vargas Morales, Gabriela Margarita Montero
                            Moran,
                            <b>Ana Cristina Cubillas Tejeda</b>, Patricia Elizabeth Cossio Torres, Blanca Zamora
                            Mendoza,
                            Celia Aradillas García.<br>Identificación de perfiles genéticos, proteómicos y factores de
                            riesgo asociados a las enfermedades no transmisibles y sus comorbilidades e implementación
                            de
                            intervenciones educativas para su prevención. Revista Digital FOMIX-CONACYT-SLP, No. 7,
                            Junio
                            2017. Disponible en: <a
                                href="http://www.copocyt.gob.mx/FOMIX/publi/Revistas%20Digitales/no7/Revista_FOMIX-SLP_numero7.html">http://www.copocyt.gob.mx/FOMIX/publi/Revistas%20Digitales/no7/Revista_FOMIX-SLP_numero7.html</a>
                            <br>
                        </p>
                        <strong>Capítulos en libros</strong><br><br>
                        <p>
                            Moreno-Sánchez Ana Rosa, <b>Cubillas-Tejeda Ana Cristina</b>, Guerra-García Alberto y Peres
                            Frederico (2016). Risk communication in Latin America. In Luiz Augusto Galvao, Jacobo Finkelman,
                            and Samuel Henao (Ed.), Environmental and Social Determinants of Health, Pan American Health
                            Organization, Washington, pp. 335-360. ISBN 978-92-75-13129-9<br>
                            <b>Ana Cristina Cubillas-Tejeda</b>, Rosario Meza-Aparicio. Incorporación de la percepción de
                            riesgos infantil en el diseño de un programa de comunicación de riesgos para población
                            vulnerable. En Elba D. Arias Merino, María Guadalupe Vega López (Ed.), Investigadoras en las
                            Ciencias de la Salud: Contribuciones clínicas y epidemiológicas. Universidad de Guadalajara y
                            Benemérita Universidad Autónoma de Puebla Primera edición 2017; p. 41-60. ISBN:
                            978-607-742-998-2<br>
                            <b>Cubillas-Tejeda A.C</b>., León-Gómez A., Torrico-Albino J.C., Nieto-Caraveo L.M. (2018)
                            Children’s Perception to Environmental Risks to Health, Key Element in the Design of
                            Environmental Health Intervention Programs. In: Leal Filho W., Noyola-Cherpitel R.,
                            Medellín-Milán P., Ruiz Vargas V. (eds) Sustainable Development Research and Practice in Mexico
                            and Selected Latin American Countries. World Sustainability Series. Springer, Cham (Capítulo 23;
                            p. 357-376)<br>
                            Monsiváis-Nava C.D., García-Cedillo I., Márquez-Mireles L.E., Flores-Ramírez R.,
                            <b>Cubillas-Tejeda A.C</b>. (2018) Risk Communication as an Alternative Intervention to Improve
                            the Environmental Health in Children in an Area with Various Environmental Problems. In: Leal
                            Filho W., Noyola-Cherpitel R., Medellín-Milán P., Ruiz Vargas V. (eds) Sustainable Development
                            Research and Practice in Mexico and Selected Latin American Countries. World Sustainability
                            Series. Springer, Cham (Capítulo 24; p. 377-394)<br>
                        </p>

                    </div>
                </div>
            </div>
            <!--<div class="accordion-item">
                                      <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          <strong>Vinculación</strong>
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
                                          adds the appropriate classes that we use to style each element. These classes control the overall
                                          appearance,
                                          as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
                                          overriding our default variables. It's also worth noting that just about any HTML can go within the
                                          <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                      </div>
                                    </div>-->
        </div>
    </div>
    </div>
    <br><br><br>
    </div>
@endsection
