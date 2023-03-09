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
                        C.P. 78210, San Luis Potosí, S.L.P., México.<br><br>
                        Tel. + 52 (444) 826-2300 Ext. 6529<br>
                        <a href="mailto:acris@uaslp.mx" style="color:rgb(0, 178, 227)"> acris@uaslp.mx</a> <br>

                    </p>

                    <div class="enlacesprof">
                        <!--<a target="_blank" href="http://cienciasquimicas.uaslp.mx/index.php/home/docentes/23">Webpage</a>-->
                        <a target="_blank"
                            href="{{asset('storage/CV/Cubillas_Tejeda_AnaCristina.pdf')}}"><em>Currículum
                            Vitae</em></a>
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
                                <ul class="vineta">
                                    <li>Comunicación de riesgos y salud ambiental</li>
                                    <li>Estrategias para la apropiación social del conocimiento</li>
                                </ul><br>
                            <li><strong>LGAC</strong></li>
                            <ul class="vineta">
                                <li>Salud ambiental, salud amibental infantil y comunicación de riesgos</li>
                            </ul><br>
                            <li><strong>Dirección de Tesis</strong></li><br>
                            <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                            <ul class="vineta">
                                <li>Godoy Avendaño Enma Valentina. 2010. <a target="_blank"
                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3577/Landfill%20gas%20generation%20and%20use%20alternatives.pdf?sequence=1&isAllowed=y">
                                    Landfill gas generation and use alternatives as well as financing possibilities through
                                    the clean development mechanism.</a></li>
                                <li>León Gómez Alejandra. 2012. <a target="_blank"
                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3708">Análisis
                                    de la percepción de exposición a riesgos ambientales a la salud en distintas poblaciones
                                    infantiles.</a></li>
                                <li>Börner Susanne. 2013. <a target="_blank"
                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3697">Análisis
                                    de la percepción de riesgos ambientales para la salud en niños y adolescentes de
                                    comunidades vulnerables bajo riesgos múltiples, en la ciudad de San Luis Potosí,
                                    México.</a></li>
                            </ul>
                            <br>
                            <p><em>Maestría en Ciencias Ambientales</em></p>
                            <ul class="vineta">
                                <li>Torres Nerio Rocío. 2005. <a target="_blank"
                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2057/MCA1DAP00501.pdf?sequence=3&isAllowed=y">Diseño
                                    y aplicación de un programa de comunicación de riesgos para la salud ambiental infantil
                                    en un sitio contaminado con plomo y arsénico</a></li>
                                <li>Terán Hernández Mónica. 2006. <a target="_blank"
                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3884/MCA1DMA00601.pdf?sequence=3&isAllowed=y">Diseño
                                    de un modelo de atención para un centro comunitario de salud ambiental infantil
                                    indígena</a></li>
                                <li>Rentería Guzmán Yei Jazmín. 2011. <a target="_blank"
                                    href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3655/MCA1EEC01101.pdf?sequence=3&isAllowed=y">Análisis
                                    de programas sobre estufas eficientes de cocción con leña: estudio de caso en dos
                                    comunidades de la Huasteca Potosina</a></li>
                                <li>González Mares Mariana Odemaris. 2013. <a target="_blank"
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3608/MCA1SAE01301.pdf?sequence=4&isAllowed=y">Salud
                                    ambiental: estado del arte y propuesta de un modelo de comunicación y educación</a></li>
                                <li>Monsivais Nava Claudia Davinia. 2014. <a target="_blank"
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3903/MCA1DCV01401.pdf?sequence=3&isAllowed=y">Diseño
                                    e implementación de un programa de comunicación de riesgos para mejorar la salud
                                    ambiental infantil de una comunidad vulnerable bajo múltiples riesgos</a></li>
                                <li>Bernal Medina Jesús Eduardo. 2018. <a target="_blank"
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4533/MCA1BMJ201801.pdf?sequence=1&amp;isAllowed=y">Análisis
                                    de los roles de género en la seguridad alimentaria familiar en comunidades urbano
                                    marginadas del estado de San Luis Potosí</a></li>
                                <li>Berumen Rodríguez Alejandra Abigail. 2018. <a target="_blank"
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4547/MCA1BRA201801.pdf?sequence=1&amp;isAllowed=y">Implementación
                                    de intervenciones educativas enfocadas en la prevención de enfermedades no transmisibles
                                    (ENT), para mejorar la salud ambiental en zonas urbanas marginadas de San Luis
                                    Potosí</a></li>
                                <li>Corpus Espinosa Claudia Alejandra. 2021. Desarrollo de la capacidad de comunicación de riesgos con énfasis en la exposición infantil a fluoruros, a través de una estrategia educativa en línea</li>
                            </ul>
                            <br>
                            <p><em>Doctorado en Ciencias Ambientales</em></p>
                            <ul class="vineta">
                                <li>Torres Nerio Rocío. 2012. <a target="_blank"
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3546/DCA1DEI01201.pdf?sequence=3&isAllowed=y">Diseño
                                    e implementación de programas de comunicación de riesgos para mejorar la salud ambiental
                                    en una comunidad de la Huasteca Potosina</a></li>
                                <li>Juárez Moreno Mariana. 2018. <a target="_blank"
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4515/DCA1JMM201801.pdf?sequence=1&amp;isAllowed=y">Diseño,
                                    implementación y evaluación de un programa de comunicación de riesgos como estrategia de
                                    prevención de la infección por VIH en adolescentes</a></li>
                                <li>González Mares Mariana Odemaris. 2019. Propuesta de una estrategia de intervención para la prevención de factores de riesgo para el desarrollo de enfermedades no transmisibles en comunidades suburbanas vulnerables del Municipio de San Luis Potosí</li>
                                <li>Monsiváis Nava Claudia Davinia. 2020. Análisis de factores asociados al sistema alimentario infantil en un área suburbana vulnerable de la ciudad de San Luis Potosí México, para la implementación de una estrategia de intervención </li>
                            </ul>
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
                        <ul class="vineta">
                            <li>González-Cortés, C.A., Téran-García, M., Luevano-Contreras, C., Portales-Pérez, D.P., Vargas-Morales, J.M., <b>Cubillas-Tejeda, A.C.</b>, Cossío-Torres, P.E., Aradillas-García, C. (2019). Neck circumference and its association with cardiometabolic risk factors in pediatric population. Medicina, 55(5), 183. <a href="doi.org/10.3390/medicina55050183" target="_blank">doi.org/10.3390/medicina55050183</a></li><br>
                            <li>González-Mares Mariana Odemaris, Aradillas-García Celia, Márquez-Mireles Leonardo Ernesto, Berumen-Rodríguez Alejandra Abigail, Vargas-Morales Juan Manuel, Portales-Pérez Diana Patricia, <b>Cubillas-Tejeda Ana Cristina</b>. (2019). Estado nutricional, prácticas y percepciones sobre alimentación y actividad física en familias de comunidades suburbanas de San Luis Potosí, México. Revista Salud Pública y Nutrición 18(3):21-37. DOI: <a href="https://doi.org/10.29105/respyn18.3-3" target="_blank">https://doi.org/10.29105/respyn18.3-3</a></li><br>
                            <li>Berumen-Rodríguez, A.A., González-Mares, M.O., Nieto-Caraveo, L.M., Domínguez-Cortinas, G., Portales-Pérez, D.P.,  Ilizaliturri-Hernández, C.A., <b>Cubillas-Tejeda, A.C.</b>. (2020). Implementación de intervenciones educativas enfocadas en la prevención de enfermedades no transmisibles, para mejorar la salud ambiental de zonas urbanas marginadas de San Luis Potosí, México. Rev. salud ambient. 20(2):179-190.  <a href="https://ojs.diffundit.com/index.php/rsa/article/view/1067" target="_blank">https://ojs.diffundit.com/index.php/rsa/article/view/1067</a></li><br>
                            <li>Macías Pérez A.C., Domínguez Cortinas G., Muñiz Carreón G.P., <b>Cubillas Tejeda A.C.</b>, Márquez Mireles L.E. (2021) Tendencias del comportamiento espaciotemporal de diabetes mellitus y enfermedades isquémicas en San Luis Potosí, México. Revista Salud Pública y Nutrición, 20 (1), 1-11. DOI: <a href="https://doi.org/10.29105/respyn20.1-1" target="_blank">https://doi.org/10.29105/respyn20.1-1</a></li><br>
                            <li>González-Mares, M.O., Aradillas-García, C., Márquez-Mireles, L.E., Monsiváis-Nava, C.D., Bernal-Medina, J.E., Vargas-Morales, J.M., Portales-Pérezd, D.P., & <b>Cubillas-Tejeda, A.C.</b> (2022). Implementation and evaluation of an educational intervention to prevent risk factors for the development of non-communicable diseases in Mexican families of suburban communities. Evaluation and Program Planning, 92, 102075. <a href="https://doi.org/10.1016/j.evalprogplan.2022.102075" target="_blank">https://doi.org/10.1016/j.evalprogplan.2022.102075</a></li><br>
                            <li>Diego-Rodríguez M., Domínguez-Cortinas G., <b>Cubillas-Tejeda A.C.</b>, Galindo Mendoza M.G. (2019) Infecciones respiratorias agudas y caracterización de bacterias potencialmente patógenas en comunidades de la Huasteca Potosina. Revista Salud Pública y Nutrición, 18 (4), 1-8. DOI: <a href="https://doi.org/10.29105/respyn18.4-1" target="_blank">https://doi.org/10.29105/respyn18.4-1</a></li><br>
                            <li>Buendía Oliva, Mariana, Algara-Siller, Marcos, <b>Cubillas-Tejeda, Ana Cristina</b>, & Domínguez-Cortinas, Gabriela. (2019). La importancia del análisis del contexto en el diseño de un programa educativo basado en el uso de ecotecnias. El caso de la escuela Francisco González Bocanegra. Perfiles educativos, 41(166), 105-123. Epub 17 de abril de 2020. <a href="https://doi.org/10.22201/iisue.24486167e.2019.166.59019" target="_blank"> https://doi.org/10.22201/iisue.24486167e.2019.166.59019</a></li><br>
                            <li>Meza-Lozano B, Ortiz-Pérez MD, Ponce-Palomares M, Castillo-Gutiérrez SG, Flores-Ramírez R,
                                <b>Cubillas-Tejeda AC</b>.<br>Implementación y evaluación de un Programa de Comunicación de
                                Riesgos por exposición a flúor en la comunidad de El Fuerte, Santa María del Río, San Luis
                                Potosí, México. Revista Internacional de Contaminación Ambiental. 32 (1) 87-100, 2016. ISSN:
                                0188-4999
                            </li><br>
                            <li>Mónica Terán-Hernández, Fernando Díaz-Barriga Martínez, <b>Ana Cristina
                                    Cubillas-Tejeda</b>.
                                <br>Diagnóstico de salud y percepción de riesgos, elementos clave para una propuesta de
                                intervención en comunidades indígenas. Rev Panam Salud Pública 39(2), 2016, 106-114. ISSN
                                digital: 1680 5348, ISSN impresa: 1020 4989.
                            </li><br>
                            <li>María Lucina Torres-Rodríguez, Erika García-Chávez, Gerson Alonso Soto-Peña, Celia
                                Aradillas-García y <b>Ana Cristina Cubillas-Tejeda</b>.<br>Evaluación de la toxicidad aguda
                                in
                                vivo del extracto etanólico y acuoso de Calea urticifolia. Botanical Sciences 94 (1):
                                133-140,
                                2016. ISSN Digital: 2007- 4476. ISSN Impresa: 2007-4298.</li><br>
                            <li>Susanne Börner, Juan Carlos Torrico-Albino, Luz María Nieto-Caraveo &amp; <b>Ana Cristina
                                    Cubillas-Tejeda</b>. <br>Living with everyday environmental risks: giving a voice to
                                Young
                                people in the design of community-based risk communication programs in the city of San Luis
                                Potosí, México. Children's Geographies. 15(6):703-7015, 2017. ISSN: 1473-3285 (Print)
                                1473-3277
                                (Online) </li><br>
                            <li>R Flores-Ramírez, FJ Pérez-Vázquez, M Rodríguez-Aguilar, SE Medellín-Garibay, E Van
                                Brussel,
                                <b>AC Cubillas-Tejeda</b>, L Carrizales-Yáñez, F Díaz-Barriga.<br>Biomonitoring of
                                persistent
                                organic pollutants (POPs) in child populations living near contaminated sites in Mexico.
                                Science
                                of the Total Environment 579(2) (2017) 1120–1126 ISSN Digital: 0048-9697
                            </li><br>
                            <li>Mariana Juárez Moreno, Ismael García Cedillo, Leonardo Ernesto Márquez Mireles, Raúl
                                Morales
                                Villegas, <b>Ana Cristina Cubillas Tejeda</b>. <br>Diseño, implementación y evaluación de un
                                Programa de Comunicación de Riesgos como estrategia de prevención de la Infección por VIH en
                                adolescentes. Revista de Comunicación y Salud, 2017, Vol. 7, pp. 81-102. ISSN: 2174-5323
                                (impreso) 2173-1675 (electrónico)</li><br>
                            <li>Monsiváis-Nava C.D., Romero-Contreras S., García-Cedillo I., van´t Hooft A.,
                                <b>Cubillas-Tejeda
                                    A.C</b>.<br>Prácticas y saberes sobre alimentación infantil en familias de una comunidad
                                cercana al tiradero municipal de San Luis Potosí. Revista de Salud Pública y Nutrición,
                                2018, 17
                                (4), 11-26
                            </li><br>
                        </ul>

                        <strong>Artículos de divulgación</strong><br><br>

                        <ul class="vineta">
                            <li>Diana Patricia Portales Pérez, Juan Manuel Vargas Morales, Gabriela Margarita Montero
                            Moran,
                            <b>Ana Cristina Cubillas Tejeda</b>, Patricia Elizabeth Cossio Torres, Blanca Zamora
                            Mendoza,
                            Celia Aradillas García. Identificación de perfiles genéticos, proteómicos y factores de
                            riesgo asociados a las enfermedades no transmisibles y sus comorbilidades e implementación
                            de
                            intervenciones educativas para su prevención. Revista Digital FOMIX-CONACYT-SLP, No. 7,
                            Junio
                            2017. Disponible en: <a target="_blank"
                                href="http://www.copocyt.gob.mx/FOMIX/publi/Revistas%20Digitales/no7/Revista_FOMIX-SLP_numero7.html">http://www.copocyt.gob.mx/FOMIX/publi/Revistas%20Digitales/no7/Revista_FOMIX-SLP_numero7.html</a></li>
                            <br>
                        </ul>
                        <strong>Capítulos en libros</strong><br><br>
                        <ul class="vineta">
                            <li><b>Cubillas-Tejeda A.C.</b>, Börner S., González-Mares M.O., Díaz-Barriga F. (2020). Los niños, actores clave en la comunicación de riesgos para mejorar la salud ambiental. En: Flores-Serrano R.M. y Pérez-Casimiro G. (Compiladoras). El análisis de riesgos para el diseño de políticas públicas y presupuestales SRA-LA 2018. Instituto de Ingeniería, de la Universidad Nacional Autónoma de México (IIUNAM). pp. 275-277. Disponible en: <a href="http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx" target="_blank">http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx</a></li><br>
                            <li>González-Mares M.O., Bernal-Medina J.E., Aradillas-García C., Vargas-Morales J.M., Portales-Pérez D.P., <b>Cubillas-Tejeda A.C.</b> (2020). Riesgos asociados al rol de género encontrados en la contextualización de un programa para prevenir y controlar la malnutrición y enfermedades no transmisibles en familias de comunidades vulnerables del municipio de San Luis Potosí, México. En: Flores-Serrano R.M. y Pérez-Casimiro G. (Compiladoras). El análisis de riesgos para el diseño de políticas públicas y presupuestales SRA-LA 2018. Instituto de Ingeniería, de la Universidad Nacional Autónoma de México (IIUNAM). pp. 163-165. Disponible en: <a href="http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx" target="_blank">http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx</a></li><br>
                            <li>Juarez-Moreno M., Cubillas-Tejeda AC. (2020). El dibujo, como herramienta de evaluación de un programa de comunicación de riesgos enfocado a la prevención de la infección por VIH en adolescentes. En: Flores-Serrano R.M. y Pérez-Casimiro G. (Compiladoras). El análisis de riesgos para el diseño de políticas públicas y presupuestales SRA-LA 2018. Instituto de Ingeniería, de la Universidad Nacional Autónoma de México (IIUNAM). pp. 278-280. Disponible en: <a href="http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx" target="_blank">http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx</a></li><br>
                            <li>Berumen-Rodríguez A.A., Nieto Caraveo L.M., Domínguez-Cortinas G., Portales-Pérez D.P. Ilizaliturri-Hernández C.A, Cubillas-Tejeda A.C. En: Flores-Serrano R.M. y Pérez-Casimiro G. (Compiladoras). El análisis de riesgos para el diseño de políticas públicas y presupuestales SRA-LA 2018. Instituto de Ingeniería, de la Universidad Nacional Autónoma de México (IIUNAM). pp. 284-286. Disponible en: <a href="http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx" target="_blank">http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx</a></li><br>
                            <li>Monsiváis-Nava C.D., Flores-Ramírez R., Cubillas-Tejeda AC. (2020). Disminución de la exposición a plomo y fluoruros en población infantil de una comunidad urbana vulnerable, mediante la implementación de un programa de comunicación de riesgos. En: Flores-Serrano R.M. y Pérez-Casimiro G. (Compiladoras). El análisis de riesgos para el diseño de políticas públicas y presupuestales SRA-LA 2018. Instituto de Ingeniería, de la Universidad Nacional Autónoma de México (IIUNAM). pp. 281-283. Disponible en: <a href="http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx" target="_blank">http://www.iingen.unam.mx/es-mx/AlmacenDigital/Libros/Paginas/SRA-LA_2018.aspx</a></li><br>
                            <li>María Deogracias Ortiz Pérez, Máría Catalina, Alfaro de la Torre, <b>Ana Cristina Cubillas Tejeda</b>, Mauricio León Arce y Lorena Anaya González. (2018). Casos de estudio y experiencias en campo: caso del estado de San Luis Potosí. En: Luz María Del Razo, Juan Manuel Ledón y Mónica N. Velasco (Compiladores). Hacia el cumplimiento del Derecho Humano al Agua. Arsénico y fluoruro en agua: riesgos y perspectivas desde la sociedad civil y la academia en México. Secretaría de Gobernación: México. pp. 123-131.</li><br>
                            <li>Moreno-Sánchez Ana Rosa, <b>Cubillas-Tejeda Ana Cristina</b>, Guerra-García Alberto y Peres
                            Frederico (2016). Risk communication in Latin America. In Luiz Augusto Galvao, Jacobo Finkelman,
                            and Samuel Henao (Ed.), Environmental and Social Determinants of Health, Pan American Health
                            Organization, Washington, pp. 335-360. ISBN 978-92-75-13129-9</li><br>
                            <li><b>Ana Cristina Cubillas-Tejeda</b>, Rosario Meza-Aparicio. Incorporación de la percepción de
                            riesgos infantil en el diseño de un programa de comunicación de riesgos para población
                            vulnerable. En Elba D. Arias Merino, María Guadalupe Vega López (Ed.), Investigadoras en las
                            Ciencias de la Salud: Contribuciones clínicas y epidemiológicas. Universidad de Guadalajara y
                            Benemérita Universidad Autónoma de Puebla Primera edición 2017; p. 41-60. ISBN:
                            978-607-742-998-2</li><br>
                            <li><b>Cubillas-Tejeda A.C</b>., León-Gómez A., Torrico-Albino J.C., Nieto-Caraveo L.M. (2018)
                            Children’s Perception to Environmental Risks to Health, Key Element in the Design of
                            Environmental Health Intervention Programs. In: Leal Filho W., Noyola-Cherpitel R.,
                            Medellín-Milán P., Ruiz Vargas V. (eds) Sustainable Development Research and Practice in Mexico
                            and Selected Latin American Countries. World Sustainability Series. Springer, Cham (Capítulo 23;
                            p. 357-376)</li><br>
                            <li>Monsiváis-Nava C.D., García-Cedillo I., Márquez-Mireles L.E., Flores-Ramírez R.,
                            <b>Cubillas-Tejeda A.C</b>. (2018) Risk Communication as an Alternative Intervention to Improve
                            the Environmental Health in Children in an Area with Various Environmental Problems. In: Leal
                            Filho W., Noyola-Cherpitel R., Medellín-Milán P., Ruiz Vargas V. (eds) Sustainable Development
                            Research and Practice in Mexico and Selected Latin American Countries. World Sustainability
                            Series. Springer, Cham (Capítulo 24; p. 377-394)<br>
                        </ul>

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
                                          <ul class="vineta">
                                            <li>Escritura y publicación de un Manual para el curso de Comunicación de riesgos y salud ambiental.</li>
                                            <li>Actualización del curso de Comunicación de riesgos y salud ambiental.</li>
                                            <li>Desarrollo e impartición del nuevo curso del PMPCA: Estrategias para la apropiación social del conocimiento.</li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
        </div>    <br><br><br>
    </div>
    </div>
    </div>
@endsection
