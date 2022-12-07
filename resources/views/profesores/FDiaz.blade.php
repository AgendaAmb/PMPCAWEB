@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DR. FERNANDO DÍAZ-BARRIGA MARTÍNEZ</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/Fernando_Diaz_Barriga_Martinez.png') }}"
                    alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
                    <h5><strong>Facultad de Medicina.</strong></h5>
                    <h5><strong>SNI nivel III.</strong></h5>
                    <br>
                    <p>
                        Av. Venustiano Carranza 2405 Colonia Los Filtros,<br>
                        C.P. 78210 San Luis Potosí, S.L.P.<br>
                        Tel. (444) 826-2300 Ext. 6619<br>
                        fdia@uaslp.mx<br>
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank" href="http://www.ciacyt.uaslp.mx/Grupo_ciaas.aspx">Webpage</a>
                        <a target="_blank"
                            href="http://www.ciacyt.uaslp.mx/images/pdf/Ciaas/Dr.FernandoD%C3%ADaz-BarrigaMart%C3%ADnez.pdf">Curriculum
                            Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/qhsAAA%3d%3d">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0002-0473-6926"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=7003742572"> <img
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
                            <strong>Cursos:</strong>
                            <p>
                                Evaluación de riesgos en salud
                            </p>
                            <strong>LGAC:</strong>
                            <p>
                                Evaluación integrada del riesgo y salud ambiental
                            </p>
                            <strong>Dirección de Tesis:</strong>
                            <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em></p>
                                Antoni Carolin Dorothee. 2010. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_antonicarolin.pdf">Construction
                                    of a multidisciplinary scene of risk in "Huasteca Sur"</a>. <br>
                                Erbe Swen Oliver. 2011.<a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2011_pmpca_erbeswen.pdf">Technical,
                                    economical and organizational analysis of informal brick production in Tercera Chica,
                                    SLP, Mexico</a>. <br>
                                <a href="#">Reyes Bejarano Johann Sebastian. 2019. Environmental peacebuilding and
                                    traditional gold mining communities: challenges and opportunities in a post-conflict
                                    setting in Colombia</a>. <br> <br>

                            <p><em>Maestría en Ciencias Ambientales</em> <br> <br>
                                Hernández Cruz María Teresa. 2008.<a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202005-08/2008_pmpca_hernandezcruz.pdf">Sociología
                                    Ambiental, análisis a una comunidad indígena de la Huasteca Potosina</a>.<br>
                                Martínez Acuña Mónica Imelda. 2008.<a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202004-08/2008_pmpca_martinezacuna.pdf">Estimación
                                    del riesgo en salud en sitios contaminados por DDT en el Sureste de México.</a> <br>
                                Zuki Orozco Beatriz Arelí. 2012.<a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_zukiorozco.pdf">Evaluación
                                    de la exposición a benceno y a hidrocarburos policíclicos aromáticos en población
                                    infantil en San Luis Potosí</a>. <br>
                                Camacho de La Cruz Arlette Andrea. 2014. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_camachodelacruz.pdf">Exposición
                                    infantil a hidrocarburos aromáticos policíclicos y benceno en sitios contaminados</a>.

                                Rodríguez Ramos Frinné. 2015. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_rodriguezramos.pdf">Intervención
                                    nutricional como estrategia para reforzar la seguridad alimentaria en localidades
                                    vulnerables. Caso de estudio: Tocoy, San Antonio, San Luis Potosí</a>.
                                García Rodríguez Daniela Karina. 2016.<a
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4133/MCA1GRD201601.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                    técnico-funcional de estufas ecológicas instaladas en el estado de San Luis Potosí</a>.
<br>
                                Paz Tovar Claudia. 2018. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4245">Los comunes
                                    posibles para la salud de una comunidad Tének de Tocoy, San Antonio, S.L.P.</a>
                            </p>

                            <p><em>Doctorado en Ciencias Ambientales</em> <br><b></b>
                                Torres Dosal Arturo. 2006. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2002-08/2006_pmpca_torresdosal.pdf">Desarrollo
                                    de la metodología para la evaluación de riesgo en sitios contaminados</a><br><br>
                                Domínguez Cortinas Gabriela. 2009. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2004-08/2009_pmpca_dominguezcortinas.pdf">Evaluación
                                    del impacto del fenómeno de iniquidad ambiental en la salud de poblaciones infantiles en
                                    San Luis Potosí, S.L.P., México</a>. <br><br>
                                Pelallo Martínez Nadia Azenet. 2010. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-02/2010_pmpca_pelallomartinez.pdf">Evaluación
                                    de riesgo en salud en población infantil expuesta a una mezcla de contaminantes en
                                    Coatzacoalcos, Veracruz</a>. <br><br>
                                Hernández Cruz María Teresa. 2013. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2009-02/2013_pmpca_hernandezcruz.pdf">La
                                    autogestión como estrategia para contribuir a mejorar la calidad de vida en los hogares
                                    de una comunidad indígena de la Huasteca Potosina.</a> <br><br>
                                Martínez Salinas Rebeca Isabel. 2011. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-08/2011_pmpc_martinezsalinas.pdf">Estimación
                                    de riesgo en salud por exposición a hidrocarburos aromáticos policíclicos y DDT residual
                                    en población infantil del estado de Chiapas</a>. <br><br>
                                Cossio Torres Patricia Elizabeth. 2011. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-08/2011_pmpca_cossiotorres.pdf">Factores
                                    asociados al estado de salud de adolescentes con exposición continúa a plomo, arsénico y
                                    flúor que viven cerca de una zona metalúrgica en la ciudad de San Luis Potosí,
                                    México</a>. <br><br>
                                Flores Ramírez Rogelio. 2014. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2010-08/2014_pmpca_floresramirez.pdf">Diseño
                                    y aplicación de una metodología de evaluación de riesgos por exposición a sustancias
                                    tóxicas persistentes en zonas vulnerables de México</a>. <br><br>
                                Morales Villegas Raúl. 2015. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2008-08/2015_pmpca_moralesvillegas.pdf">Rendimiento
                                    cognitivo de niños indígenas que viven en escenarios socio-ambientales vulnerables.
                                    Hacia una propuesta de intervención</a>. <br><br>
                                Zuki Orozco Beatriz Arelí. 2018. <a
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4338/DCA1ZOB201802.pdf?sequence=1&amp;isAllowed=y">Determinación
                                    de aflatoxinas y compuestos tóxicos en alimentos consumidos por población infantil en
                                    San Luis Potosí</a>. <br><br>
                                Palacios Ramírez Andrés. 2018. <a
                                    href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4509/DCA1PRA201801.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                    e intervención del potencial de aprendizaje en población infantil con bajo CI. Una
                                    propuesta desde la psicología comunitaria</a>.
                                <a href="#">Camacho de la Cruz Arlette Andrea. 2019. Evaluación integrada de riesgo
                                    asociado a mercurio en sitios con minería artesanal de mercurio</a>.
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
                        México”. Acta Biológica Colombiana. Artículo aceptado (en prensa). <br> <br>
                        (2019) Espinosa-Reyes, G., Costilla-Salazar, R., Pérez-Vázquez, F., <b>González-Mille,
                            D.J.</b>, Flores-Ramírez, R., Cuevas-Díaz, M.C., Medellin-Garibay, S.,
                        Ilizaliturri-Hernández, C.A. DNA damage in earthworms by exposure of Persistent Organic
                        Pollutants in low basin of Coatzacoalcos River, Mexico. Science of The Total Environment.
                        651(Part 1): 1236-1242. DOI: 10.1016/j.scitotenv.2018.09.207. <br> <br>
                        (2017) Martínez-Toledo, A., Montes-Rocha, A. <b>González-Mille, D. J.</b>, Torres-Dosal, A.,
                        Mejía-Saavedra, J. Ilizaliturri-Hernandez, C. Evaluation of enzyme activities in long-term
                        polluted soils with mining tailing deposits of San Luis Potosí, Mexico. Journal of Soils and
                        Sediments. Journal of Soils and Sediments, 17(2): 364–375. DOI: 10.1007/s11368-016-1529-8.
                        <br> <br>
                        (2017) Flores-Ramírez R, Espinosa-Reyes G, Cilia-López VG, González-Mille DJ, Rodríguez-Aguilar
                        M, Díaz de León-Martínez L, Díaz-Barriga F. Application of Focused Ultrasound-Assisted
                        Extraction for the Quantification of Persistent Organic Pollutions in Liver Tissue of Giant Toad
                        (Rhinella marina). Bulletin of Environmental Contamination and Toxicology. 98(2):204-211. DOI:
                        10.1007/s00128-016-2009-y <br> <br>

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
                        Ecology and Conservation. Nova Science Publishers, Inc. ISBN978-1-53614-035-4. <br><br>
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
            {{-- <div class="accordion-item">
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
            </div> --}}
        </div>
    </div>
    </div>
    <br><br><br>
    </div>
@endsection
