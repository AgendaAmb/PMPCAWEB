@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DR. ROGELIO FLORES RAMÍREZ</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/Rogelio_Flores_Ramirez.png') }}" alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Catedra CONACyT.</strong></h4>
                    <h5><strong>Coordinación para la Innovación y Aplicación de la Ciencia y la Tecnología. (CIACyT).
                        </strong></h5>
                    <h5><strong>SNI nivel I.</strong></h5>
                    <p>
                        Sierra Leona #550, Col. Lomas 2a. Sección,<br>
                        C.P. 78210, San Luis Potosí, S.L.P., México.<br>
                        Tel. (444) 826-2300 Ext. 8410<br>
                        rfloresra@conacyt.mx
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank" href="http://www.ciacyt.uaslp.mx/Grupo_ciaas.aspx">Webpage</a>
                        <a target="_blank"
                            href="http://www.ciacyt.uaslp.mx/images/pdf/Ciaas/Dr.RogelioFloresRam%C3%ADrez.pdf">Curriculum
                            Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/xVwAAA%3d%3d">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0003-2263-6280"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57217584363">
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
                                <li> Química analítica ambiental</li>
                            </ul>
                            </p>
                            <li><strong>LGAC:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Química analítica </li>
                                <li> Evaluación de riesgos a la salud humana </li>
                                <li> Adsorbentes altamente selectivos para el análisis de contaminantes orgánicos</li>
                                <li> Identificación de biomarcadores metabolómicos para la detección temprana de
                                    enfermedades de importancia nacional.</li>
                            </ul>
                            </p>
                            <li><strong>Dirección de Tesis:</strong></li>

                            <p><em>Maestría en Ciencias Ambientales</em>
                            <ul class="vineta">
                                <li>Solis Mercado Jessica Gabriela. 2018. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4535/MCA1SMJ201801.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                        de biomarcadores de exposición humana a contaminantes ambientales de origen
                                        biológico (micotoxinas) en población infantil indígena de la huasteca potosina.</a>
                                </li>
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
                            <li> 2019. Díaz de León-Martínez, L., Díaz-Barriga, F., Barbier, O., Ortíz, D.L.G.,
                                Ortega-Romero, M., Pérez-Vázquez, F., <b>Flores-Ramírez, R.</b> Evaluation of emerging
                                biomarkers of renal damage and exposure to aflatoxin-B 1 in Mexican indigenous women: a
                                pilot study. Environmental Science and Pollution Research. Accepted in press.</li><br>
                            <li> 2019. R. Ocampo-Perez, E. Padilla-Ortega, N.A. Medellin-Castillo, P. Coronado-Oyarvide, C.
                                G. Aguilar-Madera, S. J. Segovia-Sandoval, <b>R. Flores-Ramírez</b>, A. Parra-Marfil.
                                Synthesis of biochar from chili seeds and its application to remove ibuprofen from water.
                                Equilibrium and 3D modelling. Science of the Total Environment. Volume 655, 10 March 2019,
                                Pages 1397-1408.</li><br>
                            <li> 2019. Espinosa-Reyes, G., Costilla-Salazar, R., Pérez-Vázquez, F.J., González-Mille, D.J.,
                                <b>Flores-Ramírez, R.</b>, del Carmen Cuevas-Díaz, M., Medellin-Garibay, S.E.,
                                Ilizaliturri-Hernández, C.A. DNA damage in earthworms by exposure of Persistent Organic
                                Pollutants in low basin of Coatzacoalcos River, Mexico. Science of the Total Environment.
                                Volume 651, 15 February 2019, Pages 1236-1242.
                            </li><br>
                            <li> 2018. Vallejo Pérez, M.R., Navarro Contreras, H.R., Sosa Herrera, J.A., Lara Ávila, J.P.,
                                Ramírez Tobías, H.M., Martínez, F.D.-B., <b>Flores Ramírez, R.</b>, Rodríguez Vázquez, Á.G.
                                Detection of clavibacter michiganensis subsp. Michiganensis assisted by micro-raman
                                spectroscopy under laboratory conditions. Plant Pathology Journal, Volume 34, Issue 5,
                                October 2018, Pages 381-392.</li><br>
                            <li> 2018. <b>Flores-Ramírez, R.</b>, Pérez-Vázquez, F.J., Medellín-Garibay, S.E., Aldrete,
                                A.C., Vallejo-Pérez, M.R., de León-Martínez, L.D., Yáñez, L.C., Díaz-Barriga, F. Exposure to
                                mixtures of pollutants in Mexican children from marginalized urban areas. Annals of Global
                                Health. Volume 84, Issue 2, 2018, Pages 250-256.</li><br>
                            <li> 2018. Andres Palacios-Ramírez, <b>Rogelio Flores Ramírez</b>, Francisco Javier
                                Pérez-Vázquez, Maribel Rodríguez-Aguilar, Astrid Schilmann, Horacio Riojas-Rodríguez, Evelyn
                                Van Brussel, Fernando Díaz-Barriga. Assessment of Exposure to Polycyclic Aromatic
                                Hydrocarbons (PAHs) and Suspended Particles (PM2.5) Generated by the Burning of Biomass in
                                an Indigenous Area in the State of San Luis Potosí, Mexico. Rev. salud ambient;18(1):29-36.
                            </li><br>
                            <li> 2018. Nallely Sánchez, Germán David Mendoza, José A Martínez, Pedro Abel Hernández, Luis
                                Miguel Camacho Diaz, Héctor Aarón Lee Rangel, Anayeli Vazquez, <b>Rogelio Flores
                                    Ramirez</b>. Effect of Caesalpinia coriaria Fruits and Soybean Oil on Finishing Lamb
                                Performance and Meat Characteristics. BioMed Research International Volume 2018, Article
                                number 9486258.</li><br>
                            <li> 2018. De León-Martínez, L.D., Rodríguez-Aguilar, M., Ocampo-Pérez, R., Batres-Esquivel, L.,
                                <b>Flores-Ramírez, R.</b> Synthesis and Evaluation of a Molecularly Imprinted Polymer for
                                the Determination of Metronidazole in Water Samples. Bulletin of Environmental Contamination
                                and Toxicology. Volume 100, Issue 3, 1 March 2018, Pages 395-401.
                            </li><br>
                            <li> 2017. Herrera Van Oostdam, David; <b>Flores Ramirez, Rogelio</b>; Rodriguez Aguilar,
                                Maribel; Pierdant Perez, Mauricio; Abud-Mendoza, Carlos; Martinez-Galla, David;
                                Martinez-Martinez, Marco. Urinary Metabolomic Fingerprint As Diagnostic Biomarker for
                                Clinical Significant Lupus Nephritis. ARTHRITIS &amp; RHEUMATOLOGY. Volumen: 69 Suplemento:
                                10.</li><br>
                            <li> 2017. <b>Flores-Ramírez, R.</b>, Pérez-Vázquez, F.J., Rodríguez-Aguilar, M.,
                                Medellín-Garibay, S.E. Brussel E, Cubillas-Tejeda AC, Carrizales-Yáñez L, Díaz-Barriga F.
                                Biomonitoring of persistent organic pollutants (POPs) in child populations living near
                                contaminated sites in Mexico. Sci Total Environ. 2017 Feb 1;579:1120-1126. doi:
                                10.1016/j.scitotenv.2016.11.087.</li><br>
                            <li> 2017. <b>Flores-Ramírez R</b>, Espinosa-Reyes G, Cilia-López VG, González-Mille DJ,
                                Rodríguez-Aguilar M, Díaz de León-Martínez L, Díaz-Barriga F. Application of Focused
                                Ultrasound-Assisted Extraction for the Quantification of Persistent Organic Pollutions in
                                Liver Tissue of Giant Toad (Rhinella marina). Bull Environ Contam Toxicol. 2016 Dec 30. doi:
                                10.1007/s00128-016-2009-y.</li><br>
                            <li> 2016. <b>R. Flores-Ramírez</b>, F. J. Pérez-Vázquez, V. G. Cilia-López, B. A. Zuki-Orozco,
                                L. Carrizales, L. E. Batres-Esquivel, A. Palacios-Ramírez, F. Díaz-Barriga. Assessment of
                                exposure to mixture pollutants in Mexican indigenous children. Environ Sci Pollut Res. DOI
                                10.1007/s11356-016-6101-y.</li><br>
                            <li> 2016. Meza-Lozano, B., Ortiz-Pérez, M.D., Ponce-Palomares, M., Castillo-Gutiérrez, S.G.,
                                <b>Flores-Ramírez, R.</b>, Cubillas-Tejeda, A.C. Implementación y evaluación de un programa
                                de comunicación de riesgos por exposición a flúor en la comunidad de el fuerte, Santa María
                                del Río, San Luis Potosí, México. Revista Internacional de Contaminación Ambiental. Volume
                                32, Issue 1, 2016, Pages 87-100.
                            </li><br>
                            <li> 2016. Van Brussel, E., Carrizales, L., <b>Flores-Ramirez, R.</b>, Camacho, A., Leon-Arce,
                                M., Diaz-Barriga, F. The "CHILD" framework for the study of artisanal mercury mining
                                communities. Reviews on Environmental Health. Volume 31, Issue 1, March 2016, Pages 43-45.
                            </li><br>
                            <li> 2016. Camacho A, Van Brussel E, Carrizales L, <b>Flores-Ramírez R</b>, Verduzco B, Huerta
                                SR, Leon M, Díaz-Barriga F. Mercury Mining in Mexico: I. Community Engagement to Improve
                                Health Outcomes from Artisanal Mining. Ann Glob Health. 2016 Jan-Feb;82(1):149-55. doi:
                                10.1016/j.aogh.2016.01.014.</li><br>
                        </ul>
                        </p>
                        <p><strong>Capítulos de Libros</strong></p>
                        <p>
                        <ul class="vineta">
                            <li> <b>Rogelio Flores-Ramírez</b>; Mariana Morales-Vázquez; Laura Iglesias-Atilano; Evelyn Van
                                Brussel y Fernando Díaz-Barriga. La Evaluación de riesgos en salud. Guía metodológica.
                                Aplicaciones prácticas de la metodología de Evaluación de riesgos en salud por exposición a
                                químicos. Madrid. Sociedad Española de Sanidad Ambiental y Escuela Andaluza de Salud
                                Pública. Serie “De aeribus, aquis et locis”, nº 3. 2016. Capítulo 7: Evaluación de riesgo
                                para la salud en un sitio metalúrgico contaminado con plomo en México.</li><br>
                            <li> Claudia Davina Monsiváis-Nava, Ismael García-Cedillo, Leonardo Ernesto Márquez-Mireles,
                                <b>Rogelio Flores-Ramírez</b> and Ana Cristina Cubillas-Tejeda. Sustainable development
                                research and practice in Mexico and selected Latin American Countries. Chapter 32. Risk
                                communication as an alternative intervention to improve the environmental health in children
                                in an area with various environmental problems. Springer International Publishing. DOI
                                10.1007/978-3-319-70560-6.
                            </li><br>
                            <li> Omar Cruz-Santiago, Donaji J. González-Mille, Guillermo Espinosa-Reyes, <b>Rogelio
                                    Flores-Ramírez</b>, José de Jesús Mejía-Saavedra, Moisés R. Vallejo-Pérez and César A.
                                Ilizaliturri-Hernández The Giant Toad (Rhinella marina) as a Biomonitor of Different
                                Polluted Scenarios in Mexico. In: AMPHIBIANS BIOLOGY, ECOLOGY AND CONSERVATION. Nova Science
                                Publishers, Inc. 2018. ISBN: 978-1-53614-035-4 (eBook).</li><br>
                            <li> Fernando Díaz-Barriga Martínez, Palacios Andrés, Ramírez Laura, Camacho Andrea, Zuki Arely,
                                Mendoza Karen, Paz Claudia, Ruvalcaba Selene, Carrizales L, Vallejo Moises, Cilia Gabriela,
                                Van Brussel E, Cubillas AC, Calderón J, Ilizaliturri César, Espinosa Guillermo, Mejía Jesús,
                                González Donají, Castillo C, <b>Flores Rogelio</b>. ¡SEAMOS ORGULLOSOS DE SER HUMANOS!
                                Raíces de paz para comunidades Contaminadas. Capítulo 7. En: Cultivemos Paz. Una reflexión
                                colectiva desde la ciencia, el desarrollo sustentable y el periodismo. INSTITUTO BELISARIO
                                DOMÍNGUEZ, SENADO DE LA REPÚBLICA. 2018. ISBN: 978-607-8320-97-42018.</li><br>
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
                        <p>
                        <ul class="vineta">
                            <li> Sector público. <b>Fondo Sectorial de Investigación para la Educación SEP-CONACYT</b>
                                Convocatoria de Investigación Científica Básica 2017-2018. Síntesis y evaluación de
                                Polímeros de Impresión Molecular para la determinación analítica de contaminantes emergentes
                                en matrices ambientales. FINANCIAMIENTO: 1 218 000.00. Responsable técnico.</li><br>
                            <li> Sector público. <b>Fondo Sectorial de Investigación Ambiental SEMARNAT-CONACYT convocatoria
                                    2017-2018</b>. No. A3-S-78964. Evaluación de la diversidad y efectos toxicológicos en
                                abejas residentes en zonas agrícolas de México-una perspectiva genética y eco-metabolómica-.
                                Responsable técnico. Financiamiento: 1 950 000.00. Responsable técnico.</li><br>
                            <li> Sector público (2018). <b>Fondo Sectorial de Investigación en Salud y Seguridad Social
                                    SS-IMSS-ISSSTE/CONACYT convocatoria 2018</b>. No. A3-s-38681. Indicadores metabolómicos
                                para la detección temprana de enfermedades ocupacionales en trabajadores precarios.
                                Estrategia STOP (salud en el trabajo para ocupaciones precarias). Financiamiento: 2 000
                                000.00. Co-responsable.</li><br>
                            <li> Sector privado (2018). <b>Programa de Remediación para el área conocida como Terreno Patio
                                    Victoria” para la empresa Minera San Xavier S.A. de C.V.</b> FINANCIAMIENTO DE $
                                559,000.00. Co-responsable.</li><br>
                            <li> Servicio externo (2017-2018). <b>Cuantificación de phtalatos y bisfenol A en muestras
                                    biológicas (2017)</b>. Unidad de Investigación en Reproducción Humana del Instituto
                                Nacional de Perinatología. Financiamiento de $ 220,400.00. Responsable técnico.</li><br>
                            <li> Sector privado (2016). Proyecto: <b>Estimación del riesgo en salud humana y del riesgo
                                    ecológico. Estudio para el Centro Tecnológico para el Manejo Integral de Materiales
                                    Provenientes de Actividades Industriales y Procesos Extractivos. A Localizarse en
                                    Palula, Mpio. Santo Domingo, San Luis Potosí, México.</b> Co-responsable técnico.
                                Financiamiento de 686 720.00. </li><br>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    </div>
@endsection
