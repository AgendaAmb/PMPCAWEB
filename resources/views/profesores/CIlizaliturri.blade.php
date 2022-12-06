@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DR. CÉSAR ILIZALITURRI HERNÁNDEZ</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/CesarIlizaliturriHernandez.png') }}" alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Profesor Investigador de Tiempo Completo. Nivel VI.</strong></h4>
                    <h5><strong>Facultad de Medicina.</strong></h5>
                    <h5><strong>SNI nivel I.</strong></h5>
                    <br>
                    <p>
                        <br>
                        Av. Venustiano Carranza 2405 Colonia Los Filtros<br>
                        C.P. 78210, San Luis Potosí, S.L.P., México<br>
                        Tel. (444) 826-2300 Ext. 6619<br>
                        cesar.ilizaliturri@uaslp.mx <br>
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank" href="https://ecorisk.wordpress.com/">Webpage</a>
                        <a target="_blank"
                            href="http://www.ciacyt.uaslp.mx/images/pdf/Ciaas/Dr.C%C3%A9sarArturoIlizaliturriHern%C3%A1ndez.pdf">Curriculum
                            Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/SksAAA%3d%3d">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0001-9775-1254"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=36124862700"> <img
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

                        <strong>Cursos:</strong>
                        <p>
                            TSCA Evaluación de riesgo ecológico
                            Introducción a la Estadística
                        </p>
                        <strong>LGAC:</strong>
                        <p>
                            Evaluación integrada del riesgo y salud ambiental
                        </p>
                        <strong>Dirección de Tesis:</strong>

                        <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección: </em></p>

                        Dávalos Rivas Guillermo. 2021. <a href="#">Protocol for evaluating the impact of informal
                            tourism on water quality using microbiological indicators</a>.

                        <br>

                        <p><em>Maestría en Ciencias Ambientales</em></p>
                        <p>
                            Cruz Santiago Omar. 2016. <a
                                href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4130/MCA1CSO201601.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                de biomarcadores no destructivos en sapo gigante <em>(Rhinella marina)</em> de la cuenca
                                baja del río Coatzacoalcos, Veracruz, México</a>.
                            Montes Rocha José Angel. 2016. <a
                                href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202014-08/2016_pmpca_montesrocha.pdf">Efecto
                                de los metales pesados en suelo de jales mineros de San Luis Potosí</a>.
                            Ríos Martínez Carol Fabina. 2017. <a
                                href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4524/MCA1RMC201701.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                de la genotoxicidad de suelos y residuos mineros con células de raíz de haba <em>(Vicia
                                    faba)</em></a>. (Co-Dirección)
                            García Garnica Briselda. 2019. <a href="#">Identificación y evaluación toxicológica de
                                rizobacterias resistentes a As, Pb y Zn, provenientes de residuos mineros de Villa de la
                                Paz, Matehuala</a>.
                            Mendoza Pérez Emmanuel. 2020. Evaluación de la carga corporal de elementos potencialmente
                            tóxicos (EPT’S) en Rana Leopardo (Lithobates spp.) de la cuenca del río sonora: efectos por
                            temporada, ciclo y sitio de colecta.
                        </p>
                        <br>
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
                        <strong>Artículos de Investigación</strong><br><br>
                        <p>
                            [2021] Wong-Argüelles, C., Carranza-Álvarez, C., Alonso-Castro, A.J., <b>Ilizaliturri-Hernández,
                                C</b>. Fitorremediación in situ en México: una revisión. Fitotecnia Mexicana. 44 (2): 133 –
                            142. <a
                                href="https://revistafitotecniamexicana.org/documentos/44-2/1a.pdf">https://revistafitotecniamexicana.org/documentos/44-2/1a.pdf</a><br>
                            [2021] Ramírez-Ayala, E., Arguello-Pérez, M.A., Tíntos-Gómez, A., Hernández-Anguiano J.H,
                            Pérez-Rodríguez, R.Y., <b>Ilizaliturri-Hernández C.A.</b>, Núñez-Nogueira, G., Sepúlveda-Quiroz
                            C. Persistent Organic Pollutants (POPs) in fish from two coastal lagoons of the central Mexican
                            Pacific. Latin American Journal of Aquatic Research. 49(4). <a
                                href="https://doi.org/10.3856/vol49-issue4-fulltext-2639">
                                https://doi.org/10.3856/vol49-issue4-fulltext-2639</a><br>
                            [2021] Camacho De la Cruz, A., Espinosa-Reyes, G., Rebolloso-Hernández, C., Carrizalez-Yañez,
                            L., <b>Ilizaliturri-Hernández C.A.</b>, Reyes-Arreguin L.E., Díaz-Barriga F. Holistic Health
                            risk assessment in artisanal mercury minning region in Mexico. Environmental Monitoring and
                            Assessment. 193:541. <a
                                href="https://doi.org/10.1007/s10661-021-09312-7">https://doi.org/10.1007/s10661-021-09312-7</a><br>
                            [2021] Cruz-Santiago, O., Martin del Campo, C. Espinosa-Reyes, G., Perez-Maldonado, I.N.,
                            González-Mille, D. J.. Cuevas-Diaz M.C., <b>Ilizaliturri-Hernández C.A.</b> Giant toads
                            (Rhinella marina) from the industrial zones of low basin of the Coatzacoalcos River (Veracruz,
                            MX) presents genotoxicity in erythrocytes. Bulletin of Environmental Contamination and
                            Toxicology. <a
                                href="https://doi.org/10.1007/s00128-021-03162-2. https://rdcu.be/cgOJ6">https://doi.org/10.1007/s00128-021-03162-2.</a>
                            <a href="https://rdcu.be/cgOJ6">https://rdcu.be/cgOJ6</a><br>
                            [2021] Cruz-Santiago, O., Perez-Maldonado, I.N., González-Mille, D. J., Espinosa-Reyes, G.
                            Martinez-Toledo, A., <b>Ilizaliturri-Hernández C.A.</b> Nondestructive biomarkers in giant toad
                            (<i>Rhinella marina</i>) to assess the effect of complex mixture of pollutants in Coatzacoalcos
                            River, Mexico. Environmental Toxicology and Pharmacology. <a
                                href="https://doi.org/10.1016/j.etap.2020.103558">https://doi.org/10.1016/j.etap.2020.103558</a><br>
                            [2021] Martinez-Toledo, A., González-Mille, D., Garcia-Arreola, M.E., Cruz-Santiago, O.,
                            Trejo-Acevedo, A. <b>Ilizaliturri-Hernández C.A.</b> Patterns in utilization of carbon sources
                            in soil microbial communities contaminated with mine solid wastes from San Luis Potosi; Mexico.
                            Ecotoxicology and Environmental Safety. <a
                                href="https://doi.org/10.1016/j.ecoenv.2020.111493">https://doi.org/10.1016/j.ecoenv.2020.111493</a><br>
                            [2021] Cruz-Briano, S.A., Medellín-Castillo, N.A., Torres-Dosal, A. Leyva-Ramos, R.,
                            Moreno-Piraján, J.C., Giraldo-Gutiérrez, L., <b>Ilizaliturri-Hernández, C.A.</b>, Díaz-Flores,
                            P.E., Reyes-López, S,Y. Ocampo-Pérez, R., Rodríguez-Estupiñan, J.P. Aldama-Aguilera, C. Bone
                            char from an invasive aquatic species “devilfish” as a sustainable adsorbent for the removal of
                            fluoride in water for human consumption. Research Square. <a
                                href="https://doi.org/10.21203/rs.3.rs-198271/v1">https://doi.org/10.21203/rs.3.rs-198271/v1</a><br>
                            [2020] Méndez-Rodríguez, K.B., Figueroa-Vega, N., <b>Ilizaliturri-Hernández, C.A.</b>,
                            Cardona‐Alvarado, M., Borjas-García, J.A., Kornhauser, C., Malacara J.M., Flores‐Ramírez, R.,
                            Pérez-Vázquez, F.J. Identification of metabolic markers in patients with type 2 Diabetes
                            Mellitus by Ultrafast gas chromatography coupled to electronic nose. A pilot study. Biomedical
                            Chromatography. <a
                                href="https://doi.org/10.1002/bmc.4956">https://doi.org/10.1002/bmc.4956</a><br>
                            [2020] Fernández-Macias, J.C., González-Mille, D. J. García-Arreola M.E., Cruz-Santiago O.,
                            Rivero-Pérez N.E., Pérez-Vázquez F., <b>Ilizaliturri-Hernández C.A.</b> Integrated probabilistic
                            risk assessment in sites contaminated with arsenic and lead by long-term mining liabilities in
                            San Luis Potosi, Mexico. Ecotoxicology and Environmental Safety. <a
                                href="https://doi.org/10.1016/j.ecoenv.2020.110568">https://doi.org/10.1016/j.ecoenv.2020.110568</a><br>
                            [2020] Berumen-Rodríguez, A.A., González-Mares, M.O., Nieto-Caraveo, L.M., Domíguez-Cortinas,
                            G., Portales-Pérez, D.P., <b>Ilizaliturri-Hernández, C.A.</b>, Cubillas-Tejeda, A.C.
                            Implementación de intervenciones educativas enfocadas en la prevención de enfermedades no
                            transmisibles, para mejorar la salud ambiental de zonas urbanas marginadas de San Luis Potosí,
                            México. Revista de Salud Ambiental. 20(2):179-190. <a
                                href="https://ojs.diffundit.com/index.php/rsa/article/view/1067">
                                https://ojs.diffundit.com/index.php/rsa/article/view/1067</a><br>
                            [2020] Gonzalez-Mille, D.J., Cruz-Santiago, O., <b>Ilizaliturri-Hernández, C.A.</b>
                            Espinosa-Reyes, G., Pelallo-Martínez, N.A., Trejo-Acevedo, A. Sánchez-Guerra, M., Mejía-Saavedra
                            J., Díaz-Barriga, F. “The One Health” a Methodological Approach to Study the Vulnerability and
                            Effects of Persistent Organic Pollutants (POPs) in Coatzacoalcos Veracruz, Mexico. En: Justin A.
                            Daniels (Editor). Advances in Environmental Research (Numbered Series), Environment & Energy,
                            Environmental Sciences, Imprints, Nova, Science and Technology, Special Topics. ISBN:
                            978-1-53618-708-3. (En prensa). <a
                                href="https://novapublishers.com/shop/advances-in-environmental-research-volume-77/">
                                https://novapublishers.com/shop/advances-in-environmental-research-volume-77/</a><br>
                            [2020] Wong-Arguelles C., Alonso-Castro A.J, Ilizaliturri-Hernandez C.A., Carranza-Alvarez C.
                            Credibility of In Situ Phytoremediation for Restoration of Disturbed Environments. In:
                            Bioremediation and Biotechnology, Sustainable Approaches to Pollution Degradation. SpringerLinK.
                            978-3-030-35691-0. pp 233-256. <a
                                href="https://link.springer.com/chapter/10.1007/978-3-030-35691-0_11">https://link.springer.com/chapter/10.1007/978-3-030-35691-0_11</a><br>
                            [2019] Cruz-Santiago, O., <b>Ilizaliturri-Hernández, C. A.</b>, Mejía-Saavedra, J. J.,
                            Espinosa-Reyes, G., Alfaro-De la Torre, M. C., González-Mille, D. J. Evaluación preliminar de
                            biomarcadores enzimáticos en caracoles de agua dulce (Pachychilus sp.) del humedal “Ciénaga de
                            Tamasopo”, México. Acta Biológica Colombiana. Aceptado. <br>
                            [2019] Espinosa-Reyes, G., Costilla-Salazar, R., Pérez-Vázquez, F., González-Mille, D.J.,
                            Flores-Ramírez, R., Cuevas-Díaz, M.C., Medellin-Garibay, S., <b>Ilizaliturri-Hernández, C.A.</b>
                            DNA damage in earthworms by exposure of Persistent Organic Pollutants in low basin of
                            Coatzacoalcos River, Mexico. Science of The Total Environment. <br> <a
                                href="https://doi.org/10.1016/j.scitotenv.2018.09.207">https://doi.org/10.1016/j.scitotenv.2018.09.207</a>.<br><a
                                href="https://www.sciencedirect.com/science/article/pii/S0048969718336520">https://www.sciencedirect.com/science/article/pii/S0048969718336520</a>.<br>
                            [2018] Ramírez-Ayala, E., Argello-Pérez, M., <b>Ilizaliturri-Hernández, C.A.</b>, Tintos-Gómez,
                            A., Mejía-Saavedra, J., Borja-Gómez, I. Breve revisión del uso de biomarcadores para evaluar la
                            contaminación en ecosistemas acuáticos de México: 2001-2017. Latin American Journal of Aquatic
                            Research. 46(5): 860-879. DOI: 10.3856/vol46-issue5-fulltext-1.<br> <a
                                href="http://www.lajar.cl/pdf/imar/v46n5/Art%C3%ADculo_46_5_01.pdf">http://www.lajar.cl/pdf/imar/v46n5/Art%C3%ADculo_46_5_01.pdf</a>.<br>
                            [2018] Zamora-Arellano, N.Y., Betancourt-Lozano, M., <b>Ilizaliturri-Hernández, C.A.</b>,
                            García-Hernández, J. Jara-Marini, M., Chávez-Sánchez, C., Ruelas-Inzunza, J.R. Mercury levels
                            and risk implications through fish consumption in Sinaloa coasts (Gulf of California, NW
                            Mexico). Risk Analysis. DOI:10.1111/risa.13185.<br> <a
                                href="https://onlinelibrary.wiley.com/doi/pdf/10.1111/risa.13185">https://onlinelibrary.wiley.com/doi/pdf/10.1111/risa.13185</a>.
                            <br>
                            [2017] Zamora-Arellano, N.Y., Ruelas-Inzunza, J., García-Hernández, J.,
                            <b>Ilizaliturri-Hernández, C.A.</b>, Betancourt-Lozano, M. Linking fish consumption patterns and
                            health risk assessment of mercury exposure in a coastal community of NW Mexico. Human and
                            Ecological Risk Assessment.<br> <a
                                href="http://dx.doi.org/10.1080/10807039.2017.1329622">http://dx.doi.org/10.1080/10807039.2017.1329622</a>.<br>
                            <a
                                href="http://www.tandfonline.com/doi/abs/10.1080/10807039.2017.1329622">http://www.tandfonline.com/doi/abs/10.1080/10807039.2017.1329622</a>.<br>
                            [2017] Martínez-Toledo, A., Montes-Rocha, A. González-Mille, J., Espinosa-Reyes, G.,
                            Torres-Dosal, A., Mejía-Saavedra, J. <b>Ilizaliturri-Hernandez, C</b>. Evaluation of enzyme
                            activities in long-term polluted soils with mining tailing deposits of San Luis Potosí, Mexico.
                            Journal of Soils and Sediments. 17(2):364-375. DOI: 10.1007/s11368-016-1529-8.<br> <a
                                href="http://link.springer.com/article/10.1007/s11368-016-1529-8">http://link.springer.com/article/10.1007/s11368-016-1529-8</a>.<br>
                            [2016] Pruneda-Alvarez, L., Ruíz-Vera, T., Ochoa-Martínez, A., Pérez Vázquez, F.,
                            González-Palomo, A,. <b>Ilizaliturri-Hernández, C.</b>, Pérez-Maldonado, I. Plasma asymmetric
                            dimethylarginine (ADMA) levels in Mexican women exposed to polycyclic aromatic hydrocarbons
                            (PAHs): A preliminary study. Science of The Total Environment. 572(1)1195-1202. <br> <a
                                href="http://www.sciencedirect.com/science/article/pii/S0048969716317296">http://www.sciencedirect.com/science/article/pii/S0048969716317296</a>.<br>
                            [2016] Lorenzo-Márquez, H., Torres-Dosal, A., Barba-Macías, E., <b>Ilizaliturri Hernández,
                                C.A.</b>, Martínez-Salinas, R.I., Morales-López, J.J., Sánchez-Moreno, I. Estimación de
                            Riesgo de Exposición a Metales Pesados por Consumo de Plecos (Pterygoplichthys Spp) en Infantes
                            de Comunidades Ribereñas de los Ríos Grijalva y Usumacinta. Revista Internacional de
                            Contaminación Ambiental. 2(32)153-164. <br> <a
                                href="http://www.revistascca.unam.mx/rica/index.php/rica/article/view/RICA.2016.32.02.02/46575">http://www.revistascca.unam.mx/rica/index.php/rica/article/view/RICA.2016.32.02.02/46575</a>.<br>
                            [2016] Pérez-Vázquez, F., Flores-Ramírez, R., Ochoa-Martínez, A., Carizales-Yáñez, L.,
                            <b>Ilizaliturri-Hernández, C.A.</b>, Moctezuma-González, J., Pruneda-Álvarez, L.G., Ruiz-Vera,
                            T., Orta-García, S.T., González-Palomo, A., Pérez-Maldonado, I.N. Human health risks associated
                            with heavy metals in soil in different areas of San Luis Potosí, México. Human and Ecological
                            Risk Assessment. 22(2):323-336. DOI:10.1080/10807039.2015.1064760.<br><a
                                href="http://www.tandfonline.com/doi/abs/10.1080/10807039.2015.1064760#.VdXvO4sjlB8">http://www.tandfonline.com/doi/abs/10.1080/10807039.2015.1064760#.VdXvO4sjlB8</a>.
                        </p>

                        <strong>Capítulos en libros</strong><br><br>
                        <p>
                            [2019] San Juan-Meza E., Espinosa-Reyes, G., González-Mille, D., <b>Ilizaliturri-Hernández,
                                C.</b>, Mejía-Saavedra J.; Flores-Ramírez R. Evaluación de la exposición a metales y daño al
                            ADN en lombrices de tierra en los Ríos Santiago y Verde de Jalisco, México. En “Contribuciones
                            al Conocimiento de la Ecotoxicología y Química Ambiental en México. Volumen 2”. Eds. P.
                            Ramírez-Romero; M. Galar-Martínez; L. Gómez-Oliván, R. Rico-Martínez; J. Zavala-Aguirre; M.
                            Arzate-Cárdenas. Escuela Nacional de Ciencias biológicas-Instituto Politécnico Nacional
                            (ENCB-IPN). En prensa. <br> <a
                                href="https://www.researchgate.net/publication/327868061">https://www.researchgate.net/publication/327868061</a>.<br>
                            [2019] <b>Ilizaliturri-Hernández, C.</b>, González-Mille, D., Espinosa-Reyes, G., Razo-Soto, I.,
                            García-Arreola, M.E., Montes-Rocha, A., Cruz-Santiago, O. La actividad enzimática como indicador
                            de la salud del suelo en zonas áridas contaminadas por metales pesados en San Luis Potosí. En
                            “Contribuciones al Conocimiento de la Ecotoxicología y Química Ambiental en México. Volumen 2”.
                            Eds. P. Ramírez-Romero; M. Galar-Martínez; L. Gómez-Oliván, R. Rico-Martínez; J. Zavala-Aguirre;
                            M. Arzate-Cárdenas. Escuela Nacional de Ciencias biológicas-Instituto Politécnico Nacional
                            (ENCB-IPN). En prensa. <br><a
                                href="https://www.researchgate.net/publication/327867942">https://www.researchgate.net/publication/327867942</a>.<br>
                            [2018] González-Mille, D., Espinosa-Reyes, G., Cuevas-Díaz, M.C., Martínez-Toledo, A.,
                            Carrizalez-Yáñez, L., García-Arreola M.E., <b>Ilizaliturri-Hernández C.A.</b> Evaluation of the
                            biological activity of soil in a gradient concentration of arsenic and lead in Villa de la Paz,
                            San Luis Potosi, Mexico. En Soil contamination. INTECH. ISBN 978-953-51-6385-5. <br> <a
                                href="https://www.intechopen.com/books/soil-contamination-and-alternatives-for-sustainable-development/evaluation-of-the-biological-activity-of-soil-in-a-gradient-concentration-of-arsenic-and-lead-in-vil">https://www.intechopen.com/books/soil-contamination-and-alternatives-for-sustainable-development/evaluation-of-the-biological-activity-of-soil-in-a-gradient-concentration-of-arsenic-and-lead-in-vil</a>.<br>
                            [2018] Cruz-Santiago, O., González-Mille, D.J., Espinosa-Reyes, G., Flores-Ramírez, R.,
                            Vallejo-Pérez M.R., <b>Ilizaliturri-Hernández C.A.</b> The Giant Toad (Rhinella marina) as a
                            Biomonitor of Different Polluted Scenarios in Mexico. En Leo Cannon (eds): Amphibians: Biology,
                            Ecology and Conservation. Nova Publishers. ISBN 978-1-53614-035-4. <br><a
                                href="https://novapublishers.com/shop/amphibians-biology-ecology-and-conservation/">https://novapublishers.com/shop/amphibians-biology-ecology-and-conservation/</a>.<br>
                            [2018] González-Mille D.J., Cruz-Santiago O., Espinosa-Reyes G., Cuevas-Díaz, M.C., Razo-Soto
                            I., <b>Ilizaliturri-Hernández C.A.</b> Monitoring physiological responses in Giant toad
                            (Rhinella marina) from Coatzacoalcos, Mexico. A comparative study after 8 years. En Reptiles and
                            Amphibians. INTECH. ISBN 978-953-51-5971-1. DOI: 10.5772/intechopen.75430. <br> <a
                                href="https://www.intechopen.com/books/reptiles-and-amphibians/monitoring-physiological-responses-in-giant-toad-rhinella-marina-from-coatzacoalcos-mexico-a-compara">https://www.intechopen.com/books/reptiles-and-amphibians/monitoring-physiological-responses-in-giant-toad-rhinella-marina-from-coatzacoalcos-mexico-a-compara</a>.
                        </p>


                        <strong>Proyectos</strong>

                        <p>
                            [2019-2021] Evaluación de la diversidad y efectos toxicológicos en abejas residentes en zonas
                            agrícolas de México-una perspectiva genética y eco-metabolómica-. Proyecto aprobado con
                            financiado por <b>FOSEC SEMARNAT</b>. <br>
                            [2019-2021] Evaluación del proceso de eutrofización y alteración ambiental que afecta al sitio
                            RAMSAR Cienega de Tamasopo (SLP) como base para proponer su manejo integral. Proyecto aprobado
                            con financiado por <b>SEP-CONACyT, ciencia básica</b>. <br>
                            [2016-2019] Programa de monitoreo de riesgo ecológico en los ríos Bacanuchi y Sonora. Proyecto
                            Financiado por <b>Grupo México</b>. <br>
                            [2017] Determinación de biomarcadores enzimáticos en caracoles de agua dulce (Pachychilus sp) en
                            La Cienega de Cabezas, Tamasopo, S.L.P. Proyecto Financiado por el fondo de apoyo a la
                            <b>Investigación FAI-UASLP</b>. <br>
                            [2016] Evaluación ambiental, riesgo ecológico y determinación de efectos en la salud humana,
                            como consecuencia del derrame de sulfato de cobre a los Rios Bacanuchi y Sonora, proveniente del
                            represo Tinajas 1 de la mina Buenavista del Cobre, Cananea, Sonora. Proyecto Financiado por
                            <b>Grupo México</b>. <br>
                            [2016] Monitoreo de la actividad biológica y del potencial genotóxico de suelos áridos
                            contaminados por metales pesados en San Luis Potosí, México. Proyecto financiado por
                            <b>SEP-CONACyT, ciencia básica</b>.
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
