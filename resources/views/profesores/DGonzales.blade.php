@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DRA. DONAJI JOSEFINA GONZÁLEZ MILLE</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/DonajiJosefinaGonzalezMille.png') }}"
                    alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Catedra CONACyT. Coordinación para la Innovación y Aplicación de la Ciencia y la Tecnología.
                            (CIACyT).</strong></h4>
                    <h5><strong>SNI nivel I.</strong></h5>                    
                    <br>
                    <p>
                        Sierra Leona #550, Col. Lomas 2a. Sección,<br>
                        C.P. 78210, San Luis Potosí, S.L.P., México.<br>
                        Tel. + 52 (444) 826-2300 Ext. 8410<br>
                        donaji.gonzalez@uaslp.mx, donajiglezmille@yahoo.com.mx <br>
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank" href="">Webpage</a>
                        <a target="_blank"
                            href="">Curriculum
                            Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/MlMAAA%3d%3d">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0002-0248-6898"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=22734003200"> <img
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
                            <li><strong>Cursos:</strong></li>
                            <p>
                                Aplicación de biomarcadores para la evaluación de impactos y riesgos ecológicos.
                            </p>
                            <li><strong>LGAC:</strong></li>
                            <p>
                                Ecotoxicología y riesgo integrado en ambientes vulnerables, considerando aspectos de
                                determinantes ecológicos de la salud comunitaria; utilizando principalmente pruebas de
                                toxicidad para matrices ambientales (suelo y sedimento), determinación y estandarización de
                                biomarcadores de exposición y efecto en biota residente en diferentes escenarios de
                                vulnerabilidad ecológica y social.
                            </p>
                            <li><strong>Dirección de Tesis:</strong></li>
                            <p><em>Maestría en Ciencias Ambientales</em>
                                Ríos Martínez Carol Fabina. 2017. <a
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4524/MCA1RMC201701.pdf?sequence=1&isAllowed=y">Evaluación
                                    de la genotoxicidad de suelos y residuos mineros con células de raíz de haba <em>(Vicia
                                        faba)</em></a>.
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
                        <strong>Artículos de investigación</strong><br><br>
                        (2019) Cruz-Santiago O, Ilizaliturri-Hernández C.A., Mejía-Saavedra J., Espinosa-Reyes G.,
                        Alfaro de la Torre M.C. y <b>González-Mille D.J.</b> Evaluación preliminar de biomarcadores
                        enzimáticos en caracoles de agua dulce (Pachychilus sp.) del humedal “Ciénaga de Cabezas”,
                        México”. Acta Biológica Colombiana. Artículo aceptado (en prensa).</li><br> <br>
                        (2019) Espinosa-Reyes, G., Costilla-Salazar, R., Pérez-Vázquez, F., <b>González-Mille,
                            D.J.</b>, Flores-Ramírez, R., Cuevas-Díaz, M.C., Medellin-Garibay, S.,
                        Ilizaliturri-Hernández, C.A. DNA damage in earthworms by exposure of Persistent Organic
                        Pollutants in low basin of Coatzacoalcos River, Mexico. Science of The Total Environment.
                        651(Part 1): 1236-1242. DOI: 10.1016/j.scitotenv.2018.09.207.</li><br> <br>
                        (2017) Martínez-Toledo, A., Montes-Rocha, A. <b>González-Mille, D. J.</b>, Torres-Dosal, A.,
                        Mejía-Saavedra, J. Ilizaliturri-Hernandez, C. Evaluation of enzyme activities in long-term
                        polluted soils with mining tailing deposits of San Luis Potosí, Mexico. Journal of Soils and
                        Sediments. Journal of Soils and Sediments, 17(2): 364–375. DOI: 10.1007/s11368-016-1529-8.</li>
                        <br> <br>
                        (2017) Flores-Ramírez R, Espinosa-Reyes G, Cilia-López VG, González-Mille DJ, Rodríguez-Aguilar
                        M, Díaz de León-Martínez L, Díaz-Barriga F. Application of Focused Ultrasound-Assisted
                        Extraction for the Quantification of Persistent Organic Pollutions in Liver Tissue of Giant Toad
                        (Rhinella marina). Bulletin of Environmental Contamination and Toxicology. 98(2):204-211. DOI:
                        10.1007/s00128-016-2009-y </li><br> <br>

                        (2016) Díaz T. R.C., Espinosa R. G., Ilizaliturri H. C., <b>González M. D.,</b> Cilia L V.G.
                        Antioxidant Activity Assessment of Plants Used in Huastec Traditional Medicine, Mexico. Journal
                        of Pharmaceutical, Chemical and Biological Sciences December 2015-February 2016; 3(4): 488-498
                        <br> <br>

                        <strong>Capítulos en libros</strong><br><br>

                        (2018) <b>González-Mille, D.</b>, Espinosa-Reyes, G., Cuevas-Díaz, M.C., Martínez-Toledo, A.,
                        Carrizalez-Yáñez, L., García-Arreola M.E., Ilizaliturri-Hernández C.A. Evaluation of the
                        biological activity of soil in a gradient concentration of arsenic and lead in Villa de la Paz,
                        San Luis Potosi, Mexico. En Soil contamination. INTECH. ISBN 978-953-51-6385-5. Aceptado
                        <br><br>
                        (2018) Cruz-Santiago, O.,<b> González-Mille, D.J.</b>, Espinosa-Reyes, G., Flores-Ramírez, R.,
                        Vallejo-Pérez M.R., Ilizaliturri-Hernández C.A. The Giant Toad (Rhinella marina) as a Biomonitor
                        of Different Polluted Scenarios in Mexico, 55-94 pp, En: Leo Cannon (ed): Amphibians: Biology,
                        Ecology and Conservation. Nova Science Publishers, Inc. ISBN978-1-53614-035-4. </li><br><br>
                        (2018) <b>González-Mille D.J.</b>, Cruz-Santiago O., Espinosa-Reyes G., Cuevas-Díaz, M.C.,
                        Razo-Soto I., Ilizaliturri-Hernández C.A. Monitoring physiological responses in Giant toad
                        (Rhinella marina) from Coatzacoalcos, Mexico. A comparative study after 8 years. En Reptiles and
                        Amphibians. INTECH. ISBN 978-953-51-5971-1. DOI: 10.5772/intechopen.75430.<br><br>
                        (2017) San Juan-Meza E.; Espinosa-Reyes, G.; <b>González-Mille, D.</b>; Ilizaliturri-Hernández,
                        C.; Mejía-Saavedra J.; Flores-Ramírez R. Evaluación de la exposición a metales y daño al ADN en
                        lombrices de tierra en los Ríos Santiago y Verde de Jalisco, México.En “Contribuciones al
                        Conocimiento de la Ecotoxicología y Química Ambiental en México. Volumen 2”. Eds. P.
                        Ramírez-Romero; M. Galar-Martínez; L. Gómez-Oliván, R. Rico-Martínez; J. Zavala-Aguirre; M.
                        Arzate-Cárdenas. Escuela Nacional de Ciencias biológicas-Instituto Politécnico Nacional
                        (ENCB-IPN). En prensa.<br><br>
                        (2017) Ilizaliturri-Hernández, C.; <b>González-Mille, D.</b>; Espinosa-Reyes, G.; Razo-Soto,
                        I., García-Arreola M.E., Montes-Rocha A. Cruz-Santiago O. La actividad enzimática como indicador
                        de la salud del suelo en zonas áridas contaminadas por metales pesados en San Luis Potosí. En
                        “Contribuciones al Conocimiento de la Ecotoxicología y Química Ambiental en México. Volumen 2”.
                        Eds. P. Ramírez-Romero; M. Galar-Martínez; L. Gómez-Oliván, R. Rico-Martínez; J. Zavala-Aguirre;
                        M. Arzate-Cárdenas. Escuela Nacional de Ciencias biológicas-Instituto Politécnico Nacional
                        (ENCB-IPN). En prensa.<br><br>
                        (2015) Mejía-Saavedra, J.J.; Ilizaliturri-Hernández, C.; Espinosa-Reyes, G.; <b>González-Mille,
                            D.</b>; Cilia López, G.; Díaz-Barriga, F. Uso de biomarcadores para la evaluación integrada
                        del riesgo en sitios contaminados de México. p. 737-757.En Bioindicadores: guardianes de nuestro
                        futuro ambiental. Eds. González Zuarth, C. A., A. Vallarino, J. C. Pérez Jiménez y A. M. Low
                        Pfeng. Instituto Nacional de Ecología y Cambio Climático (INECC) – El Colegio de la Frontera Sur
                        (ECOSUR). México. ISBN 978-607-8429-05-9.

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
                        <b>(Enero 2019 a la fecha) Evaluación de biomarcadores de estrés oxidativo y niveles de Hg en
                            <em>Pinus sp</em> en sitios expuestos a minería artesanal de mercurio. Universidad Autónoma
                            de San Luis Potosí.</b> Participación: Investigador responsable.<br><br>
                        <b>(Octubre 2017 a la fecha) Centro Integral de Biomarcadores Proteómicos y Genéticos en Biota
                            para la Evaluación de Sitios Contaminados.</b> Universidad Autónoma de San Luis Potosí.
                        Investigador responsable.<br><br>
                        <b>(2016 a la fecha) Desarrollo de biomarcadores de exposición y efecto en plantas silvestres
                            expuestas en diferentes escenarios de vulnerabilidad ecológica.</b> Universidad Autónoma de
                        San Luis Potosí. Investigador responsable.<br><br>
                        <b>(2015 a la fecha) Programa de Biomonitoreo de la Evaluación de riesgo ecológico en los ríos
                            Bacanuchi y Sonora-primer, segundo y tercer año.</b> Financiado por Grupo México S.A. de
                        C.V, Investigador colaborador.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br>
    </div>
@endsection
