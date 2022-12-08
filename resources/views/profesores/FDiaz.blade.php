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
                            <li><strong>Cursos:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Evaluación de riesgos en salud </li>
                            </ul>
                            </p>
                            <li><strong>LGAC:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Evaluación integrada del riesgo y salud ambiental </li>
                            </ul>
                            </p>
                            <li><strong>Dirección de Tesis:</strong></li>
                            <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em></p>
                            <ul class="vineta">
                                <li> Antoni Carolin Dorothee. 2010. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_antonicarolin.pdf">Construction
                                        of a multidisciplinary scene of risk in "Huasteca Sur"</a>.</li>
                                <li> Erbe Swen Oliver. 2011. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2011_pmpca_erbeswen.pdf">Technical,
                                        economical and organizational analysis of informal brick production in Tercera
                                        Chica, SLP, Mexico</a>.</li>
                                <LI> <a href="#">Reyes Bejarano Johann Sebastian. 2019. Environmental peacebuilding
                                        and traditional gold mining communities: challenges and opportunities in a
                                        post-conflict setting in Colombia</a>.</LI>
                            </ul>

                            <p><em>Maestría en Ciencias Ambientales</em>
                            <ul class="vineta">
                                <li> Hernández Cruz María Teresa. 2008. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202005-08/2008_pmpca_hernandezcruz.pdf">Sociología
                                        Ambiental, análisis a una comunidad indígena de la Huasteca Potosina</a>.</li>
                                <li> Martínez Acuña Mónica Imelda. 2008. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202004-08/2008_pmpca_martinezacuna.pdf">Estimación
                                        del riesgo en salud en sitios contaminados por DDT en el Sureste de México.</a></li>
                                <li> Zuki Orozco Beatriz Arelí. 2012. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_zukiorozco.pdf">Evaluación
                                        de la exposición a benceno y a hidrocarburos policíclicos aromáticos en población
                                        infantil en San Luis Potosí</a>.</li>
                                <li> Camacho de La Cruz Arlette Andrea. 2014. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_camachodelacruz.pdf">Exposición
                                        infantil a hidrocarburos aromáticos policíclicos y benceno en sitios
                                        contaminados</a>.</li>
                                <li> Rodríguez Ramos Frinné. 2015. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_rodriguezramos.pdf">Intervención
                                        nutricional como estrategia para reforzar la seguridad alimentaria en localidades
                                        vulnerables. Caso de estudio: Tocoy, San Antonio, San Luis Potosí</a>.</li>
                                <li> García Rodríguez Daniela Karina. 2016. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4133/MCA1GRD201601.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                        técnico-funcional de estufas ecológicas instaladas en el estado de San Luis
                                        Potosí</a>.</li>
                                <li> Paz Tovar Claudia. 2018. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4245">Los
                                        comunes posibles para la salud de una comunidad Tének de Tocoy, San Antonio,
                                        S.L.P.</a></li>
                            </ul>
                            </p>

                            <p><em>Doctorado en Ciencias Ambientales</em>
                            <ul class="vineta">
                                <li> Torres Dosal Arturo. 2006. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2002-08/2006_pmpca_torresdosal.pdf">Desarrollo
                                        de la metodología para la evaluación de riesgo en sitios contaminados</a>.</li>
                                <li> Domínguez Cortinas Gabriela. 2009. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2004-08/2009_pmpca_dominguezcortinas.pdf">Evaluación
                                        del impacto del fenómeno de iniquidad ambiental en la salud de poblaciones
                                        infantiles en San Luis Potosí, S.L.P., México</a>.</li>
                                <li> Pelallo Martínez Nadia Azenet. 2010. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-02/2010_pmpca_pelallomartinez.pdf">Evaluación
                                        de riesgo en salud en población infantil expuesta a una mezcla de contaminantes en
                                        Coatzacoalcos, Veracruz</a>.</li>
                                <li> Hernández Cruz María Teresa. 2013. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2009-02/2013_pmpca_hernandezcruz.pdf">La
                                        autogestión como estrategia para contribuir a mejorar la calidad de vida en los
                                        hogares de una comunidad indígena de la Huasteca Potosina.</a></li>
                                <li> Martínez Salinas Rebeca Isabel. 2011. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-08/2011_pmpc_martinezsalinas.pdf">Estimación
                                        de riesgo en salud por exposición a hidrocarburos aromáticos policíclicos y DDT
                                        residual en población infantil del estado de Chiapas</a>.</li>
                                <li> Cossio Torres Patricia Elizabeth. 2011. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-08/2011_pmpca_cossiotorres.pdf">Factores
                                        asociados al estado de salud de adolescentes con exposición continúa a plomo,
                                        arsénico y flúor que viven cerca de una zona metalúrgica en la ciudad de San Luis
                                        Potosí, México</a>.</li>
                                <li> Flores Ramírez Rogelio. 2014. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2010-08/2014_pmpca_floresramirez.pdf">Diseño
                                        y aplicación de una metodología de evaluación de riesgos por exposición a sustancias
                                        tóxicas persistentes en zonas vulnerables de México</a>.</li>
                                <li> Morales Villegas Raúl. 2015. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2008-08/2015_pmpca_moralesvillegas.pdf">Rendimiento
                                        cognitivo de niños indígenas que viven en escenarios socio-ambientales vulnerables.
                                        Hacia una propuesta de intervención</a>.</li>
                                <li> Zuki Orozco Beatriz Arelí. 2018. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4338/DCA1ZOB201802.pdf?sequence=1&amp;isAllowed=y">Determinación
                                        de aflatoxinas y compuestos tóxicos en alimentos consumidos por población infantil
                                        en San Luis Potosí</a>.</li>
                                <li> Palacios Ramírez Andrés. 2018. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4509/DCA1PRA201801.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                        e intervención del potencial de aprendizaje en población infantil con bajo CI. Una
                                        propuesta desde la psicología comunitaria</a>.</li>
                                <li> <a href="#">Camacho de la Cruz Arlette Andrea. 2019. Evaluación integrada de
                                        riesgo asociado a mercurio en sitios con minería artesanal de mercurio</a>.</li>
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
                            <p><strong>Artículos Científicos</strong></p>
                            <p>
                                <ul class="vineta">
                                    <li> Patricia Cossío-Torres, Jaqueline Calderón, Martha Tellez-Rojo, <b>Fernando Díaz-Barriga</b> (2013) Factors related to health outcomes and health risk behaviors of adolescents with lead exposure. A pilot study. Salud Mental 36: 73-81.</li><br>
                                    <li> Trejo-Acevedo A, Rivero-Pérez NE, Flores-Ramírez R, <b>Díaz-Barriga F</b>, Ochoa AC, Pérez-Maldonado IN (2013) Assessment of persistent organic pollutants levels in blood samples from Quintana Roo, Mexico. International Journal of Hygiene and Environmental Health. Available online 23 October 2012.</li><br>
                                    <li> Domínguez-Cortinas G, <b>Díaz-Barriga F</b>, Martínez-Salinas RI, Cossío P, Pérez-Maldonado IN (2013) Exposure to chemical mixtures in Mexican children: high-risk scenarios. Environ Sci Pollut Res Int. 2012 Apr 29. [Epub ahead of print].</li><br>
                                    <li> Coronado-Salas C, <b>Díaz-Barriga F</b>, Moreno-Sánchez AR, Carrizales-Yáñez L, Torres-Nerio R, Rentería-Guzmán YJ, Cubillas-Tejeda AC. (2012) La comunicación de riesgos como una herramienta para disminuir la exposición infantil a plomo y arsénico en la zona contaminada de Villa de la Paz-Matehuala, San Luis Potosí, México. Revista Internacional de Contaminación Ambiental 28: 167-181.</li><br>
                                    <li> Flores-Ramírez R, Batres-Esquivel LE, <b>Díaz-Barriga Martínez F</b>, López-Acosta I, Ortiz-Pérez MD. (2012) Development and validation of an analytical method to determine Fipronil and its degradation products in soil samples. Bull Environ Contam Toxicol. 89: 744-750.</li><br>
                                    <li> Domínguez-Cortinas G, Cifuentes E, Escobar ER, <b>Martínez FD</b>. (2012) Assessment of Environmental Health Children's Population Living in Environmental Injustice Scenarios. J Community Health. 37: 1199-11207.</li><br>
                                    <li> Jasso-Pineda Y, <b>Díaz-Barriga F</b>, Calderón J, Yáñez L, Carrizales L, PérezMaldonado IN. (2012) DNA damage and decreased DNA repair in peripheral blood mononuclear cells in individuals exposed to arsenic and lead in a mining site. Biol Trace Elem Res. 146: 141-149.</li><br>
                                    <li> Sánchez-Guerra M, Pelallo-Martínez N, <b>Díaz-Barriga F</b>, Rothenberg SJ, HernándezCadena L, Faugeron S, Oropeza-Hernández LF, Guaderrama-Díaz M, QuintanillaVega B. (2012) Environmental polycyclic aromatic hydrocarbon (PAH) exposure and DNA damage in Mexican children. Mutat Res. 742: 66-71.</li><br>
                                    <li> Flores-Ramírez R, Rico-Escobar E, Núñez-Monreal JE, García-Nieto E, Carrizales L, Ilizaliturri-Hernández C, <b>Díaz-Barriga F.</b> (2012) Children exposure to lead in contaminated sites. Salud Publica Mex. 54: 383-392.</li><br>
                                    <li> Martínez-Salinas RI, Pérez-Maldonado IN, Batres-Esquivel LE, Flores-Ramírez R, <b>Díaz-Barriga F.</b> (2011) Assessment of DDT, DDE, and 1-hydroxypyrene levels in blood and urine samples in children from Chiapas Mexico. Environ Sci Pollut Res Int. 19: 2658-2666.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Trejo-Acevedo A, Betanzos AF, Espinosa-Reyes G, Alegría-Torres JA y Pérez- Maldonado IN (2012) Assessment of DDT and DDE Levels in Soil, Dust, and Blood Samples From Chihuahua, Mexico. Arch Environ Contam Toxicol 62:351–358.</li><br>
                                    <li> Martínez-Salinas RI, <b>Díaz-Barriga F</b>, Batres-Esquivel LE, Pérez-Maldonado IN (2011) Assessment of the levels of DDT and its metabolites in soil and dust samples from Chiapas, Mexico. Bull Environ Contam Toxicol 86: 33-37.</li><br>
                                    <li> Cubillas-Tejeda AC, Torres-Nerio R, <b>Díaz-Barriga F</b>, Carrizales-Yáñez L, Coronado-Salas C, Nieto-Caraveo L, Moreno- Sánchez AR, Barraza-Lomelí L, (2011) Diseño y aplicación de un programa de comunicación de riesgos para la salud ambiental infantil en un sitio contaminado con plomo y arsénico. Ciência & Saúde Coletiva, 16: 4115-4126.</li><br>
                                    <li> Leal ME, González D, García SI, Pérez-Maldonado I, Rico E, Cossío P, Van Brussel E, Domínguez G y <b>Díaz-Barriga F</b> (2011) Toxicología Clínica Comunitaria. Ciência & Saúde Coletiva, 16: 3503-3508.</li><br>
                                    <li> Pérez-Maldonado IN, Pérez-Vázquez FJ, Gaspar-Ramírez O, González-Amaro R, <b>Díaz-Barriga F</b> (2011) Variability in DDT-induced apoptosis in Mexican indigenous populations. Toxicol Mech Meth 21: 675-680.</li><br>
                                    <li> Costilla-Salazar R, Trejo-Acevedo A, Rocha-Amador D, Gaspar-Ramírez O, <b>Díaz-Barriga F</b>, Pérez- Maldonado, (2011) Assessment of Polychlorinated Biphenyls and Mercury levels in soil and biological samples from San Felipe, Nuevo Mercurio, Zacatecas, México. Bulletin Environ Contam Toxicol 86: 212-216.</li><br>
                                    <li> Cossío-Torres P, Domínguez-Cortinas G, Hernández-Cruz MT, Morales-Villegas R, Van Brussel E y <b>Díaz-Barriga F</b> (2011) CHICOS y PIBES, propuestas innovadoras para la atención de la salud ambiental infantil en América Latina. Acta Toxicol Argent 19: 5-15.</li><br>
                                    <li> González-Mille DJ, Ilizaliturri-Hernández CA, Espinosa-Reyes G, Costilla-Salazar R, <b>Díaz-Barriga F</b>, Ize-Lema I, Mejía-Saavedra J. (2010) Exposure to persistent organic pollutants (POPs) and DNA damage as an indicator of environmental stress in fish of different feeding habits of Coatzacoalcos, Veracruz, Mexico. Ecotoxicology 19: 1238-1248.</li><br>
                                    <li> Huerta-Olvera SG, Macías-Barragán J, Ramos-Márquez ME, Armendáriz-Borunda J, <b>Díaz-Barriga F</b> y Siller-López F (2010) Alpha-lipoic acid regulates heme oxygenase gene expression and nuclear Nrf2 activation as a mechanism of protection against arsenic exposure in HepG2 cells. Environmental Toxicology and Pharmacology 29:144–149.</li><br>
                                    <li> Rocío Torres-Nerio, Gabriela Domínguez Cortinas, Anuschka van´t Hooft, <b>Fernando Díaz-Barriga Martínez</b> y Ana Cristina Cubillas Tejeda. (2010) Análisis de la percepción de exposición a riesgos ambientales a la salud, en dos poblaciones infantiles mediante la elaboración de dibujos. Salud Colectiva (Argentina).6: 65-81.</li><br>
                                    <li> Martínez-Salinas RI, Elena Leal M, Batres-Esquivel LE, Domínguez-Cortinas G, Calderón J, <b>Díaz-Barriga F</b>, Pérez-Maldonado IN. (2010) Exposure of children to polycyclic aromatic hydrocarbons in Mexico: assessment of multiple sources. Int Arch Occup Environ Health. 83: 617-623.</li><br>
                                    <li> García-Nieto E, Nichkova M, Yáñez L, Costilla-Salazar R, Torres-Dosal A, Gee SJ, Hammock BD, Juárez-Santacruz L, <b>Díaz-Barriga F.</b> (2010) Assessment of DioxinLike Soil Contamination in México by Enzyme-Linked Immunosorbent Assay. Arch Environ Contam Toxicol. 58: 918-926.</li><br>
                                    <li> Pérez-Maldonado I, Trejo A, Ruepert C, Jovel RC, Méndez MP, Ferrari M, SaballosSobalvarro E, Alexander C, Yáñez-Estrada L, Lopez D, , Henao S, Pinto ER, <b>Díaz-Barriga F</b> (2010) Assessment of DDT levels in selected environmental media and biological samples from México and Central America. Chemosphere 78: 1244-1249.</li><br>
                                    <li> Espinosa-Reyes G, Ilizaliturri C, González-Mille D, Costilla R, <b>Díaz-Barriga F</b>, Cuevas MC, Martínez MA and Mejía-Saavedra M (2010) DNA Damage in Earthworms (Eisenia spp.) as an indicator of environmental stress in the Industrial zone of Coatzacoalcos, Veracruz, México. Journal of Environmental Science and Health part A. 45: 49-55.</li><br>
                                    <li> Espinosa-Reyes G, Torres-Dosal A, Ilizaliturri C, González-Mille D, <b>Diaz-Barriga F</b> and Mejía-Saavedra J (2010) Wild Rodents (Dipodomys merriani) used as biomonitor in contaminated mining sites. Journal of Environmental Science and Health part A. 45: 82-89.</li><br>
                                    <li> Rocha-Amador D, Navarro ME, Trejo-Acevedo A, Carrizales L; Pérez-Maldonado I, <b>Díaz-Barriga F</b> and Calderon J. (2009) Use of the Rey - Osterrieth complex figure test for neurotoxicity. Evaluation of mixtures in children. Neurotoxicology. 30:1149-1154.</li><br>
                                    <li> Sly PD, Eskenazi B, Pronczuk J, Sram R, <b>Diaz-Barriga F</b>, Gonzalez-Machin D, Carpenter DO, Surdu S, Meslin EM (2009) Ethical Issues in measuring biomarkers in children’s environmental health. Environ Health Perspect.117: 1185-1190.</li><br>
                                    <li> Alegría-Torres JA, Díaz-Barriga F, Gandolfi AJ, and Pérez-Maldonado IN (2009) Mechanisms of p´p-DDE-induced apoptosis in human peripheral blood mononuclear cells. Toxicology in Vitro. 23:1000-1006.</li><br>
                                    <li> Ilizaliturri C, González-Mille D, Pelallo NA, Domínguez G, Mejía-Saavedra J, Torres-Dosal A, Pérez-Maldonado I, Batres L, <b>Díaz-Barriga F</b> y Espinosa-Reyes G. (2009) Revisión de las metodologías sobre evaluación de riesgos en salud para el estudio de comunidades vulnerables en América Latina. Interciencia 34: 710-717.</li><br>
                                    <li> Pérez-Maldonado IN, Ramírez-Jiménez MR, Martínez-Arévalo LP, López-Guzmán OD, Athanasiadou M, Bergman Å, Yarto-Ramírez M, Gavilán-García A, Yáñez L, and <b>Díaz-Barriga F</b> (2009) Exposure assessment of polybrominated diphenyl ethers (PBDES) in Mexican children. Chemosphere 75: 1215-1220.</li><br>
                                    <li> Trejo-Acevedo A, <b>Díaz-Barriga F</b>, Carrizales L, Domínguez G, Costilla R, IzeLema I, Yarto-Ramírez M, Gavilán-García A, Mejía-Saavedra J and PérezMaldonado I (2009) Exposure assessment of Persistent Organic Pollutants and Metals in Mexican Children. Chemosphere 74: 974-980.</li><br>
                                    <li> Torres Dosal A, Pérez-Maldonado IN, Jasso-Pineda Y, Martínez Salinas RI, Alegría Torres JA, <b>Diaz-Barriga F.</b> (2008) Indoor air pollution in a Mexican indigenous community: Evaluation of risk reduction program using biomarkers of exposure and effect. Sci Total Environ. 390: 362-368.</li><br>
                                    <li> Jasso-Pineda Y, Espinosa-Reyes G, Gonzalez-Mille D, Razo-Soto I, Carrizales L, Torres-Dosal A, Mejía-Saavedra J, Monroy M, Irina Ize A, Yarto M y <b>Díaz-Barriga F</b> (2007) An Integrated Health Risk Assessment Approach to the Study of Mining Sites Contaminated With Arsenic and Lead. Integrated Environmental Assessment and Management 3: 344–350.</li><br>
                                    <li> Perez-Maldonado IN, Athanasiadou M, Yanez L, Gonzalez-Amaro R, Bergman A, <b>Diaz-Barriga F</b> (2006) DDE-induced apoptosis in children exposed to the DDT metabolite. Sci Total Environ 370: 343-351.</li><br>
                                    <li> Ornelas-Hicks M, Sanín-Aguirre LH, <b>Díaz-Barriga F</b>, Reza-López SA y Romieu I (2006) Evaluación de riesgo de intoxicación por plomo en la zona urbana aledaña a una fundidora en Chihuahua, México. Tecnociencia 1: 26-35.</li><br>
                                    <li> Carrizales L, Razo I, Tellez-Hernandez JI, Torres-Nerio R, Torres A, Batres LE, Cubillas AC, <b>Díaz-Barriga F.</b> (2006) Exposure to arsenic and lead of children living near a copper-smelter in San Luis Potosi, Mexico: Importance of soil contamination for exposure of children. Environ Res. 101: 1-10.</li><br>
                                    <li> Herrera-Portugal C, Ochoa-Díaz H, Franco-Sánchez G y <b>Díaz-Barriga F</b> (2005) DNA damage in children exposed to DDT in a malarious area of Chiapas, Mexico. Acta Toxicol Arg 13: 12-16.</li><br>
                                    <li> Mejía-Saavedra J, Sánchez-Armass S, Santos-Medrano GE, González-Amaro R, Razo-Soto I, Rico-Martínez R y <b>Díaz-Barriga F</b> (2005) Effect of co-exposure to DDT and manganese on freshwater invertebrates: pore water from contaminated rivers and laboratory studies. Environmental Toxicology and Chemistry, 24: 2037-2044.</li><br>
                                    <li> Herrera C, Ochoa H, Franco G, Yáñez L y <b>Díaz-Barriga F</b> (2005) Environmental pathways of exposure to DDT for children living in a malarious area of Chiapas, Mexico. Environ Res. 99: 158-163.</li><br>
                                    <li> Ortiz-Pérez MD, Torres-Dosal A, Batres LE, López-Guzmán OD, Grimaldo M., Carranza C, Pérez-Maldonado IN, Martínez F, Pérez-Urizar J y <b>Díaz-Barriga F</b> (2005) Environmental Health Assessment of Deltamethrin in a Malarious Area of Mexico: Environmental Persistence, Toxicokinetics and Genotoxicity in Exposed Children. Environmental Health Perspectives, 113: 782-786.</li><br>
                                    <li> Pérez-Maldonado I, Herrera C, Batres L, González-Amaro R, <b>Díaz-Barriga F</b> y Yáñez L (2005) DDT-induced oxidative damage in human blood mononuclear cells. Env Res. 98: 177-184.</li><br>
                                    <li> Aguirre-Bañuelos P, Escudero-Lourdes C, Carrizales L, <b>Diaz-Barriga F</b> y PérezUrizar J (2004) Effect of Acute Exposure to Arsenic on Formalin-Induced Nociception and Tramadol-Mediated Antinociception in Mice. Proc. West. Pharmacol. Soc. 47: 113-116.</li><br>
                                    <li> Razo I, Carrizales L, Castro J, <b>Díaz-Barriga F</b> y Monroy M. (2004) Arsenic and heavy metal pollution of soil, water and sediments in a semi-arid climate mining area in Mexico. Water, Air and Soil Pollution. 152: 129-152.</li><br>
                                    <li> Pérez-Maldonado I, <b>Díaz-Barriga F</b>, de la Fuente H, González-Amaro R, Calderón J y Yáñez L (2004) DDT induces apoptosis in human mononuclear cells in vitro and is associated with increased apoptosis in exposed children. Environmental Research 94:38-46.</li><br>
                                    <li> Yáñez L, Borja-Aburto VH, Rojas E, de la Fuente H, González-Amaro R, Gómez H, Jonguitud AA, y <b>Díaz-Barriga F</b> (2004) DDT induces DNA damage in blood cells. Studies in vitro and in women chronically exposed to this insecticide. Environmental Research 94: 18-24.</li><br>
                                    <li> Yáñez L, García-Nieto E, Rojas E, Carrizales L, Mejía J, Calderón J, Razo I y <b>Díaz-Barriga</b> (2003) DNA damage in blood cells from children exposed to arsenic and lead in a mining area. Environmental Research 93: 231-240.</li><br>
                                    <li> Burger J, <b>Diaz-Barriga F</b>, Marafante E, Pounds J y Robson M (2003) Methodologies to examine the importance of host factors in bioavailability of metals. Ecotoxicological Environmental Safety 56: 20-31.</li><br>
                                    <li> Calderón J, Ortiz-Pérez D, Yáñez L y <b>Díaz-Barriga F</b> (2003) Human exposure to metals. Pathways of exposure, biomarkers of effect, and host factors. Ecotoxicogical Environmental Safety 56: 93-103.</li><br>
                                    <li> Ortíz-Pérez D, Rodríguez-Martínez M, Martínez F, Borja-Aburto VH, Castelo J, Grimaldo JI, De la Cruz E, Carrizales L y <b>Díaz-Barriga F</b> (2003) Fluoride-induced disruption of reproductive hormones in men. Environmental Research 93: 20-30.</li><br>
                                    <li> García-Chávez E, Santamaría A, <b>Díaz-Barriga F</b>, Mandeville P, Juárez BI y Jiménez-Capdeville ME (2003) Arsenite-induced formation of hydroxyl radical in the striatum of awake rats. Brain Research 976: 82-89.</li><br>
                                    <li> Yáñez L, Ortiz D, Calderón J, Batres L, Carrizales L, Mejía J, Martínez L, GarcíaNieto E y <b>Díaz-Barriga F</b> (2002) Overview of human health and chemical mixtures: problems facing developing countries. Environmental Health Perspectives 110(suppl 6): 901-909.</li><br>
                                    <li> De la Fuente H, Portales-Perez D, Baranda L, <b>Díaz-Barriga F</b>, Saavedra-Alanís V, Layseca, E y Gonzalez-Amaro R (2002) Effect of arsenic, cadmium and lead on the induction of apoptosis of normal human mononuclear cells. Clin Exp Immunol 129:69-77.</li><br>
                                    <li> Yáñez L, Ortiz-Pérez D, Batres L.E., Borja-Aburto VH, y <b>Díaz-Barriga F</b> (2002) Levels of dichlorodiphenyltrichloroethane and deltamethrin in humans and environmental samples in malarious areas of Mexico. Environ. Res. 88: 174-181.</li><br>
                                    <li> Valverde M, Fortoul TI, Díaz-Barriga F, Mejía J, del Castillo ER. (2002) Genotoxicity induced in CD-1 mice by inhaled lead: differential organ response. Mutagenesis 17:55-61.</li><br>
                                    <li> Mejía J, Yáñez L, Carrizales L y <b>Díaz-Barriga F</b> (2001) Evaluación integral del riesgo en sitios contaminados (una propuesta metodológica). Scientiae Naturae 4: 25-42.</li><br>
                                    <li> Calderón J, Navarro ME, Jiménez-Capdeville ME, Santos-Díaz MA, Golden A, Rodríguez-Leyva I, Borja-Aburto VH y <b>Díaz-Barriga F</b> (2001) Exposure to arsenic and lead and neuropsychological development in Mexican children. Environmental Research 85: 69-76.</li><br>
                                    <li> Valverde M, Fortoul TI, <b>Díaz-Barriga F</b>, Mejía J y Rojas E (2000) Induction of genotoxicity by cadmium chloride inhalation in several organs of CD-1 mice. Mutagenesis 15:109-114.</li><br>
                                    <li> Albores A, Cebrian M, Dekant W, De Matteis F, <b>Díaz-Barriga F</b>, Barril-Antuña J, Fowler J, Gil L, Jaramillo-Juárez F, King LK, Olarte G, Ostrosky-Wegman P, Patiño RI, Torres-Alanís O, Manno M (2000) Structural improvement of higher education in environmental toxicology in Latin America and Europe. Toxicol Lett 111: 203-211.</li><br>
                                    <li> Carrizales L, Batres L, Ortiz MD, Mejía J, Yáñez L, García E, Reyes H y <b>Díaz-Barriga F</b> (1999) Efectos en salud asociados con la exposición a residuos peligrosos. Scientiae Naturae 2: 5-28.</li><br>
                                    <li> Valverde M, Ostrosky-Wegman P, Rojas E, Fortoul T, Meneses F, Ramírez M, <b>Díaz-Barriga F</b>, Cebrián M (1999) The application of single cell gel electrophoresis or comet assay to human monitoring studies. Salud Pública de México 41: S109- S113.</li><br>
                                    <li> Mejía JJ, Carrizales L, Rodríguez VM, Jiménez-Capdeville ME y <b>Díaz-Barriga F</b>(1999) Un método para la evaluación de riesgos para la salud en zonas mineras. Salud Pública de México 41: S132- S140.</li><br>
                                    <li> Ortíz D, Castro L, Turrubiartes F, Milán J y <b>Díaz-Barriga F</b> (1998) Assessment of the exposure to fluoride from drinking water in Durango, Mexico, using a geographic information system. Fluoride 31; 183-187.</li><br>
                                    <li> Rodríguez VM, Dufour L, Carrizales L, Díaz-Barriga F y Jimenez-Capdeville ME (1998) Effects of oral exposure to a mining waste on in vivo dopamine release from rat striatum. Environmental Health Perspectives 106: 487-491.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Navarro-Quezada A, Grijalva M, Grimaldo M, Loyola-Rodríguez JP y Ortíz MD (1997) Endemic Fluorosis in México. Fluoride 30: 233-239.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Leyva R, Quistián J, Loyola-Rodríguez JP, Pozos A y Grimaldo M (1997) Endemic Fluorosis in San Luis Potosí, México. IV. Sources of Fluoride Exposure. Fluoride 30: 219-222.</li><br>
                                    <li> Mejía JJ, <b>Díaz-Barriga F</b>, Calderón J, Ríos C y Jiménez-Capdeville ME (1997) Effects of Lead-Arsenic Combined Exposure on Central Monoaminergic Systems. Neurotoxicology and Teratology 19: 489 - 497.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Batres L, Calderón J, Lugo A, Galvao L, Lara I, Rizo P, Arroyave ME y McConnell R (1997) The El Paso smelter twenty years later : residual impact on Mexican children. Environmental Research 74: 11-16.</li><br>
                                    <li> Grimaldo M, Turrubiartes F, Milan J, Pozos A, Alfaro C y <b>Díaz-Barriga F</b> (1997) Endemic fluorosis in San Luis Potosi, México. III. Screening for fluoride exposure using a geographic information system. Fluoride 30: 33-40. </li><br>
                                    <li> <b>Díaz-Barriga F.</b> (1996) Los residuos peligrosos en México. Evaluación del riesgo para la salud. Salud Pública de México 38: 280-291.</li><br>
                                    <li> Calderón J, Romieu I, Grimaldo M, Hernández H y <b>Díaz-Barriga F</b> (1995) Endemic fluorosis in San Luis Potosí, México. II. Identification of risk factors associated with occupational exposure to fluoride. Fluoride 28: 203-208.</li><br>
                                    <li> Ortíz D, Yáñez L, Gómez H, Martínez-Salazar JA, y <b>Díaz-Barriga F</b> (1995) Acute toxicological effects in rats treated with a mixture of commercially formulated products containing Methyl Parathion and Permethrin. Ecotoxicology and Environmental Safety 32: 154-158.</li><br>
                                    <li> Grimaldo M, Borja V, Ramírez AL, Ponce M, Rosas M y <b>Díaz-Barriga F</b> (1995) Endemic fluorosis in San Luis Potosí, México. I. Identification of risk factors associated with human exposure to fluoride. Environmental Research 68: 25-30.</li><br>
                                    <li> Gonsebatt ME, Salazar AM, Montero R, <b>Díaz-Barriga F</b>, Yáñez L, Gómez H y Ostrosky-Wegman P (1995) Genotoxic monitoring of workers at a hazardous waste disposal site in Mexico. Environmental Health Perspectives 103 (Suppl 1): 111-113. </li><br>
                                    <li> Ramos O, Carrizales L, Yáñez L, Mejía JJ, Batres L, Ortíz D y <b>Díaz-Barriga F</b> (1995) Arsenic-increased lipid peroxidation in rat tissues by a mechanism independent of glutathione levels. Environmental Health Perspectives 103 (Suppl 1): 85-88. </li><br>
                                    <li> Yáñez L, Batres L, Carrizales L, Santoyo ME, Escalante V y <b>Díaz-Barriga F</b> (1994) Toxicological assessment of azarcon, a lead salt used as a folk remedy in Mexico. (I) Oral toxicity in rats. Journal of Ethnopharmacology 41: 91-97.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Santos MA, Mejía JJ, Batres L, Yáñez L, Carrizales L, Vera E, Del Razo LM y Cebrian ME (1993) Arsenic and cadmium absorption in children living near a smelter complex in San Luis Potosí, Mexico. Environmental Research 62: 242-250.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Santos MA, Yáñez L, Cuéllar JA, Gómez H, García A, OstroskyWegman P, Montero R, Pérez A y Ruíz E (1993) Biological monitoring of workers at a recently opened hazardous waste disposal site. Journal of Exposure Analysis and Environmental Epidemiology 3: 63-71. </li><br>
                                    <li> Yáñez L, Carrizales L, Zanatta MT, Mejía JJ, Batres L y <b>Díaz-Barriga F</b> (1991) Arsenic-cadmium interaction in rats. Toxic effects in the heart and tissue metal shifts. Toxicology 67: 227-234.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Llamas E, Mejía JJ, Carrizales L, Santoyo ME, Vega-Vega L y Yáñez L (1990) Arsenic-cadmium interaction in rats. Toxicology 64: 191-203.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Carrizales L, Yáñez L, Hernández JM, Domínguez MC, Palmer E y Saborío JL (1989) Interaction of cadmium with actin microfilaments in vitro. Toxicol Vitro 3: 277-284.</li><br>
                                    <li> Saborío JL, <b>Díaz-Barriga F</b>, Durán G, Tsutsumi V y Palmer E (1985) Purification and characterization of GP-55, a protein associated with actin-based cytoplasmic gels derived from brain tissue. J Biol Chem 260: 8627-8636. </li><br>
                                </ul>
                            </p>
        
                            <p><strong>Libros</strong></p>
                            <p>
                                <ul class="vineta">
                                    <li> Curso de Autoinstrucción en Metodología de Identificación y Evaluación de Riesgos para la Salud en Sitios Contaminados. Organización Panamericana de la Salud. Noviembre 2003. Material en Internet. <a href="www.cepis.org.pe/tutorial3/e/index.html"> www.cepis.org.pe/tutorial3/e/index.html</a>.</li><br>
                                    <li> <b>Díaz-Barriga F</b> y Corey G, "Evaluación del Riesgo por la Exposición a Plomo" CEPIS-OPS Organización Panamericana de la Salud, Primera Edición, pp 77, Perú. <a href="http://www.bvsde.paho.org/bvsea/e/fulltext/plomo/plom.html"> http://www.bvsde.paho.org/bvsea/e/fulltext/plomo/plom.html</a>.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, “Metodología de Identificación y Evaluación de Riesgos para la Salud en Sitios Contaminados” Organización Panamericana de la Salud, Centro Panamericano de Ingeniería Sanitaria y Ciencias del Ambiente. Primera Edición, pp 96. OPS/CEPIS/PUB/99.34. Perú, 1999. World Health Organization.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, “Evaluación de Riesgos para la Salud en la Población Expuesta a Metales en Bolivia”, editorial: Centro Panamericano de Ecología Humana y Salud de la Organización Panamericana de la Salud, Primera Edición, pp 105, ISBN:9275322317. México, 1997.</li><br>
                                    <li> Moreno AR y <b>Díaz-Barriga F</b>, “Evaluación de Riesgos en Salud por la Exposición a Residuos Peligrosos” (traducción del inglés al español), editorial: Centro Panamericana de Ecología Humana y Salud OPS/OMS, ISBN: 0873718577, México, 1995. </li><br>
                                </ul>
                            </p>
                            <p><strong>Capítulos en libros</strong></p>
                            <p>
                                <ul class="vineta">
                                    <li> Volney de Magalhães Câmara, Carmen Ildes Rodríguez Froes Asmus, Herling Gregorio Aguilar Alonzo y <b>Fernando Díaz-Barriga</b> (2010) La generación y acumulación de contaminantes y sus amenazas para la salud a corto y largo plazo. En: Determinantes ambientales y sociales de la salud (Finkelman J y Galvao LA Ed). Organización Panamericana de la Salud. pp. 457-47.</li><br>
                                    <li> <b>Fernando Díaz-Barriga</b>, Susana García y Lilian Corra (2010) Prevención de riesgos ambientales en poblaciones vulnerables. En: Determinantes ambientales y sociales de la salud (Finkelman J y Galvao LA Ed). Organización Panamericana de la Salud pp 139-153.</li><br>
                                    <li> Mejía-Saavedra J, Pérez-Maldonado I, Yáñez L, López-Acosta I, Galindo JM, <b>Díaz-Barriga F</b> (2009) Persistencia del DDT en el ambiente físico y biológico de cuatro comunidades del sureste de México. En: Química y Toxicología Ambiental en América Latina (Herkovits J., Ed) Society of Environmental Toxicology and Chemistry. pp. 47-49.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Torres-Dosal A, Mejía-Saavedra J, Esinosa G, Ilizaliturri C y González D (2006) Método para la elaboración de estudios de evaluación de riesgo ambiental, cuando los receptores son seres humanos. Anexo 2. en: Guía Técnica para Orientar la Elaboración de Estudios de Evaluación de Riesgo Ambiental en Sitios Contaminados. Secretaría de Medio Ambiente y Recursos Naturales. México.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Torres-Dosal A, Mejía-Saavedra J, Esinosa G, Ilizaliturri C y González D (2006) Método para la elaboración de estudios de evaluación de riesgo ambiental. Anexo 1. en: Guía Técnica para Orientar la Elaboración de Estudios de Evaluación de Riesgo Ambiental en Sitios Contaminados. Secretaría de Medio Ambiente y Recursos Naturales. México.</li><br>
                                    <li> <b>Díaz-Barriga F</b>. y Sheldon L (2006) Exposure assessment of Children. En Principles for Evaluating Health Risks in Children Associated with Exposure to Chemicals. Environmental Health Criteria 237. International Program of Chemical Safety. World Health Organization, Geneva. pp. 129-167.</li><br>
                                    <li> <b>Fernando Díaz-Barriga</b>, Dania López, Iván N. Pérez, Lilia E. Batres y Leticia Yáñez (2004) Evaluación del riesgo para las sustancias tóxicas persistentes En: Las Sustancias Tóxicas Persistentes en México (Fernández A, Yarto M y Castro J, compiladores) ISBN: 968-817-703-2, INE-SEMARNAT, pp. 233-243.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Borja-Aburto V, Waliszewski S y Yáñez L (2002) DDT in Mexico. En: The Handbook of Environmental Chemistry Vol 3, Parte O, Persistent Organic Pollutants (Fiedler H. ed). Springer-Verlag, Berlin. pp 371-388.</li><br>
                                    <li> Yáñez L, Ortiz MD, <b>Díaz-Barriga F</b> (2001) Marcadores de exposición y daño en poblaciones expuestas a plaguicidas. En: Daños a la salud por plaguicidas. Manual Moderno pp 129-144.</li><br>
                                    <li> Moreno-Sánchez R, <b>Díaz-Barriga F</b> Y Devarz S (1999) Mecanismos de toxicidad y de tolerancia a los metales pesados. En: Contaminación Ambiental por Metales Pesados (Cervantes C y Moreno-Sánchez R, eds). AGT Editores, México ISBN 968-463-093-X, pp. 11-40.</li><br>
                                    <li> <b>Díaz-Barriga F</b> (1998) Aspectos de Salud. En: Diagnóstico de la Situación del Manejo de Residuos Sólidos Municipales en América Latina y el Caribe. Banco Interamericano de Desarrollo y Organización Panamericana de la Salud. pp. 92-100.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Pedraza G, Reyes R, Carrizales L y Yáñez L (1998) Contaminación por residuos peligrosos. En: Destrucción del Hábitat (Toledo G y Leal M, eds). UNAM, México ISBN: 968-36-6898-4, pp. 125-38.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Yáñez L, Flores L, Batres L, Ortiz D, Mejía J y Calderón J (1997) A new approach for the study of hazardous waste sites in Mexico. En: Hazardous Waste: Impacts on Human and Ecological Health (Johnson B, Xintaras Ch y Andrews JS; eds.), Princeton Sci. Publ., New Jersey, pp. 484 - 491.</li><br>
                                    <li> <b>Díaz-Barriga F</b> (1996) Riesgos para la salud y el ambiente por el manejo inadecuado de los residuos peligrosos. En: Residuos Peligrosos (Rivero O, Garfias M y González S; eds.). Universidad Nacional Autónoma de México. pp.196-214.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Carrizales L, Calderón J, Batres L, Yáñez L, Tabor MW y Castelo J (1995) Measurement of placental levels of arsenic, lead and cadmium as a biomarker of exposure to mixtures. En: Biomonitors and Biomarkers as Indicators of Environmental Change: a Handbook (Butterworth FM, Corkum LD y GuzmánRincón J; eds.). Plenum Publishing Corp. pp. 139-148.</li><br>
                                    <li> Batres L, Carrizales L, Calderón J y <b>Díaz-Barriga F</b> (1995) Participación del barro vidriado en la exposición infantil al plomo en una comunidad industrial expuesta ambientalmente a este metal. En: Intoxicación por plomo en México: prevención y control (Hernández M y Palazuelos E; eds.). Instituto Nacional de Salud Pública y Departamento de Distrito Federal. pp. 175-185.</li><br>
                                    <li> <b>Díaz-Barriga F</b> (1994) Health assessments in Latin America: usefulness of the ATSDR guidance manual. En : Hazardous Waste and Public Health: International Congress on the Health Effects of Hazardous Waste (Andrews JS, Frumkin H, Johnson BL, Mehlman MA, Xintaras Ch y Bucsela JA; eds.), Princeton Sci. Publ., New Jersey, pp. 201-203.</li><br>
                                    <li> <b>Díaz-Barriga F</b>, Yáñez L, Carrizales L, Mejía JJ, Batres L y Ramos O (1993) Algunos mecanismos de la toxicidad de los metales pesados. En: La Importancia Biológica de los Iones  Inorgánicos.(Cervantes C, Saavedra A y Farías R; eds.). Universidad Michoacana de San Nicolás de Hidalgo; pp. 94-102.</li><br>
        
                                </ul>
                            </p>
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
