 AASW6 
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. ROBERTO BRIONES GALLARDO</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Roberto-Briones-Gallardo.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería / Instituto de Metalurgia</strong></h5>
        <h5><strong>SNI nivel II.</strong></h5>
        <br>
        <p>
            Av. Sierra Leona No. 500 Lomas 2a. Sección <br>
            C.P. 78210, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-1450 Ext. 8212<br>
            <a href="mailto:briones@uaslp.mx" style="color:rgb(0, 178, 227)">briones@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="https://www.webofscience.com/wos/author/record/E-8129-2012">Web of Science</a>
            <a target="_blank" href="{{asset('storage/CV/CV_Roberto_Briones_2026_PMPCA.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/KTgAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-8093-2526"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=15519429900"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Remedicación de sitios contaminados</li>
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Evaluación y gestión ambiental</li>
                  <li>Prevención y control de la contaminación</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Vázquez Rodríguez Guadalupe. 2007. <a href="#">Movilización de elementos potencialmente tóxicos (EPT) en la rizósfera de <em>Viguiera dentata</em>, una especie vegetal tolerante, de suelos de Villa de la Paz, Matehuala, S.L.P.</a></li>
                  <li>Márquez Reyes Julia Mariana. 2008. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3959/MCA1MRJ200801.pdf?sequence=3&isAllowed=y">Modificación de la bioaccesibiidad de residuos mineros en presencia de materia orgánica empleando bacterias reductoras de sulfatos.</a></li>
                  <li>Landeta Escamilla Ofelia. 2008. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1811/MCA1LEO200801.pdf?sequence=1&isAllowed=y">Desarrollo conceptual para el modelado matemático de una biobarrera reactiva permeable para la remoción de sulfatos y estabilización de plomo y arsénico.</a></li>
                  <li>Ortega Morales Natalia Belén. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3579/MCA1OMN201201.pdf?sequence=3&isAllowed=y">Asociación entre la fracción bioaccesible y la bioacumulación en algunas especies vegetales que crecen sobre el cauce del arroyo de San Pedro.</a></li>
                  <li>Rodríguez Torres Paola. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3705/MCA1RTP201301.pdf?sequence=3&isAllowed=y">Evaluación fisiológica de especies vegetales que crecen en sitios impactados por residuos generadores de drenaje ácido de roca.</a></li>
                  <li>Pérez Cuervo María Gabriela. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3699/MCA1PCM201301.pdf?sequence=3&isAllowed=y">Caracterización y evaluación de la polilactida en el diseño de objetos textiles lúdicos. </a> (Co-dirección)</li>
                  <li>Escot Espinoza Victor Manuel. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3905/MCA1EEV201401.pdf?sequence=3&isAllowed=y">Dinámica de la diversidad microbiana con actividad sulfato reductora durante la bioestabilización de As en sistemas batch. </a> (Co-dirección)</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Ábrego Góngora Carlos Joel. 2016. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4163/DCA1CAG201601.pdf?sequence=1&isAllowed=y">Modelación dinámica de la demanda de oxígeno en una laguna aireada facultativa primaria: exceso de sustrato, limitación de oxígeno y efecto de los episodios de lluvia.</a> (Co-Dirección)</li>
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
                <li>Salomón Alvarado‑Cardona, Verónica Segovia Tagle, Juan Armando Flores de la Torre, <b>Roberto Briones‑Gallardo</b>, Victor Manuel Escot‑Espinoza (2026). Bioleaching of zinc present in abandoned mine tailings in the State of Zacatecas, Mexico. MRS Advances. Published: 05 January 2026. ISSN:2731-5894; eISSN: 2059- 8521. Impact Factor (2024): 0.9; (Q4 in JCR category Materials science multidisciplinary). <a href="https://doi.org/10.1557/s43580-025-01519-x" target="_blank">https://doi.org/10.1557/s43580-025-01519-x</a>. <a href="https://link.springer.com/journal/43580" target="_blank">https://link.springer.com/journal/43580.</a></li><br>
                <li>Araceli Cisneros-Castro, Fabiola S. Sosa-Rodríguez, René H. Lara, G. Alfonso Anguiano-Vega, <b>Roberto Briones-Gallardo</b>, Beatriz Bonola (2026). “Assessment of As, Pb, Cr and Cd in surface water systems accounting for dry and wet season and ecotoxic effect in Elodea canadensis in the historic mining district of Taxco, Mexico”. Environmental Chemistry and Ecotoxicology 8, 142-154. Available online 13 November 2025. Impact Factor (2024): 8.2; e-ISSN: 2590-1826. (Q1 in JCR category: Environmental science). Doi: <a href="https://doi.org/10.1016/j.enceco.2025.11.013" target="_blank">10.1016/j.enceco.2025.11.013</a></li><br>
                <li>Isaac A. Castro-Lopez, Pablo A. Melín-Dorador, Patricia Ponce-Peña, <b>Roberto Briones-Gallardo</b>, Gerardo A. Anguiano-Vega, Hugo Ramírez-Aldaba, Miriam M. Morones-Esquivel, Ernesto Zúñiga-Barrón, Antonio Aragón Piña, Fabiola S. Sosa-Rodríguez, Miguel A. Escobedo-Bretado, René H. Lara (2025) “Assessing the role of urban dust particles accounting for oral ingestion of fluorine in vulnerable populations". Earth Systems and Environment. Available online 20 November 2025. Impact Factor (2024): 4.7; ISSN 2509-9426; e-ISSN: 2509-9434. <a href="https://doi.org/10.1007/s41748-025-00934-2" target="_blank">https://doi.org/10.1007/s41748-025-00934-2</a> (Q1 in JCR category: Geoscience multidisciplinary)</li><br>
                <li>Ángel R. Diaz‑Duarte, Gerardo A. Anguiano‑Vega, Patricia Ponce‑Peña, <b>Roberto Briones‑Gallardo</b>, Antonio Aragón‑Pina, Ma. Guadalupe Nieto‑Pescador, Estela Ruiz‑Baca, Fabiola S. Sosa‑Rodríguez, Israel Labastida, René H. Lara (2025) Impacts of fluorite dissolution in semiarid endemic soil and ecotoxic effect estimated in Allium cepa. Environmental Geochemical Health. 47 (6): 188. ISSN 0269-4042; e-ISSN: 1587-2983. <a href="https://doi.org/10.1007/s10653-025-02492-y" target="_blank">https://doi.org/10.1007/s10653-025-02492-y</a>. <a href="https://www.webofscience.com/wos/woscc/full-record/WOS:001478977800002" target="_blank">https://www.webofscience.com/wos/woscc/full-record/WOS:001478977800002</a>.</li><br>
                <li>Miguel Ángel Escobedo-Bretado, Patricia Ponce-Peña, Martha Poisot, Alicia Rodríguez-Pulido, Diola Marina Núñez-Ramírez, Luis Alberto Bretado-Aragón, René H. Lara, Luis Medina-Torres, Zoe V. Quiñones-Jurado, <b>Roberto Briones-Gallardo</b> and María Azucena González-Lozano (2025) Characterization and Property Evaluation of Glasses Made from Mine Tailings, Glass Waste, and Fluxes. Recycling, 10, 39. FI (2023):4.6 Q2; ISSN: 2313-4321; <a href="https://doi.org/10.3390/recycling10020039" target="_blank">https://doi.org/10.3390/recycling10020039</a></li><br>
                <li>Natalia Ortega-Morales, Isaías López Hernández, Miguel Medrano-Santillana, Reyes Agüero Juan Antonio, <b>Roberto Briones Gallardo</b>, Nadia Denys Betancourt Martínez , Javier Morán Martínez (2025) Bioaccumulation of arsenic in Asphodelus fistulosus related to chemical speciation in soils impacted by mining activity. -Bioacumulación de arsénico en Asphodelus fistulosus, relacionada con la especiación química en suelos impactados por la actividad minera - Revista Internacional de Contaminación Ambiental. 41, 371-381. ISSN: 0188-4999; DOI:10.20937/RICA.55077. FI(2024):0.4; Q4; <a href="https://www.webofscience.com/wos/woscc/full-record/WOS:001524394900027" target="_blank">https://www.webofscience.com/wos/woscc/full-record/WOS:001524394900027</a>, Indexed: 2025-07-15</li><br>
                <li>Vilasó Cadre Javier E., Ramírez Rodríguez Alondra, Hidalgo Juan, Reyes-Domínguez Iván Alejandro, Cruz Roel, Flores Mizraim U., Rodríguez-Torres Israel, <b>Briones Gallardo Roberto</b>, Hidalgo Luis, Piña Leyte Vidal Juan Jesús (2024) Voltammetric sensor based on titania nanoparticles synthesized with Aloe vera extract for the quantification of dithiophosphate in industrial and environmental samples. Chemosensors, 12(9), 195; FI(2023):3.7; ISSN (electronic): 2227-9040 [<a href="https://doi.org/10.3390/chemosensors12090195">https://doi.org/10.3390/chemosensors12090195</a>].</li><br>
                <li>Martínez Toledo Angeles, Ilizaliturri-Hernández Cesar Arturo. Torres Dosal Arturo., <b>Briones-Gallardo Roberto</b>, Tintos-Gómez Adrian, González-Mille Donaji Josefina. (2024) Structural and functional diversity of microbial communities in ancient mining sites from San Luis Potosí, México. Land Dedradation and Development, 35(16), 4841-4852. FI:3.6; Print ISSN: 1085-3278; Online ISSN:1099-145X [<a href="https://onlinelibrary.wiley.com/doi/abs/10.1002/ldr.5261" target="_blank">https://doi.org/10.1002/ldr.5261</a>]</li><br>
                <li>Rios-Valenciana E.E., Moreno-Perlín T., <b>Briones-Gallardo R.</b>, Sierra-Alvarez R.; Celis L.B. (2023) The key role of biogenic arsenic sulfides in the removal of soluble arsenic and propagation of arsenic mineralizing communities. Environmental Research 220, 115124, p. 1-11. ISSN: 0013-9351; Online ISSN: 1096-0953 [<a href="https://doi.org/10.1016/j.envres.2022.115124" target="_blank">https://doi.org/10.1016/j.envres.2022.115124</a>].</li><br>
                <li>Martínez-Toledo A., González-Mille D.J., <b>Briones-Gallardo R.</b>, Carrizalez-Yañez L, Martínez-Montoya J.F., Mejía-Saavedra J.J., Ilizaliturri-Hernández C.A. (2023) Functioning of semi-arid soils under long-term mining activity with trace elements at high concentrations. Catena 222, 106851. p. 1-11. ISSN: 0341-8162 [<a href="https://doi.org/10.1016/j.catena.2022.106851" target="_blank">https://doi.org/10.1016/j.catena.2022.106851</a></li><br>
                <li><b>Briones-Gallardo R.</b>, González-Muñoz M., García-Bautista I., Valdes-Lozano D., Toledano-Thompson T., Polanco-Lugo E. Rivera-Madrid R., Valdez-Ojeda R. (2022) Hydrogen sulfide production with a microbial consortium isolated from marine sediments offshore. Journal of Marine Science and Engineering; 10(3) 436; 1-15, Published:17 March, 2022 [<a href="https://doi.org/10.3390/jmse10030436" target="_blank">https://doi.org/10.3390/jmse10030436</a>]; Editorial: Multidisciplinary Digital Publishing Institute (MDPI). Pais: Suiza. ISSN:2077-1312.</li><br>
                <li>Escot-Espinoza VM, Ramos-Arroyo YR, Lázaro I, Montes-Avila I, Carrizalez-Yañez L, Briones-Gallardo R. (2021) Presence of Arsenic in Potential Sources of Drinking Water Supply Located in a Mineralized and Mined Area of the Sierra Madre Oriental in Mexico. Toxics; 9(11):307. [<a href="https://doi.org/10.3390/toxics9110307" target="_blank">https://doi.org/10.3390/toxics9110307</a>]</li><br>
                <li>Rodriguez-Hernandez A., Lazaro I., Razo I., <b>Briones-Gallardo R.</b> (2021). Geochemical and mineralogical characterization of stream sediments impacted by mine wastes containing arsenic, cadmium and lead in North-Central Mexico. Journal of Geochemical Exploration., 221, 106707. ISSN 0375-6742 [<a href="https://doi.org/10.1016/j.gexplo.2020.106707" target="_blank">https://doi.org/10.1016/j.gexplo.2020.106707</a>].</li><br>
                <li>Yáñez-Espinosa L.; <b>Briones-Gallardo R.</b>; Flores J.; Álvarez del Castillo E. (2020) Effect of heavy metals on seed germination and seedling development of Nama aff. stenophylla collected on the slope of a mine tailing dump, International Journal of Phytoremediation 22(14) pp.1448-1461, Print ISSN: 1522-6514 Online ISSN: 1549-7879 DOI:<a href="https://www.tandfonline.com/doi/full/10.1080/15226514.2020.1781782" target="_blank">10.1080/15226514.2020.1781782</a>.</li><br>
                <li>Rios-Valenciana E.E., <b>Briones-Gallardo R.</b>, Chazaro-Ruiz L.F., Lopez-Lozano N.E.; Sierra-Alvarez R.; Celis L.B.(2020). Dissolution and final fate of arsenic associated with gypsum, calcite, and ferrihydrite: Influence of microbial reduction of As(V), sulfate, and Fe(III). Chemosphere. 239, 124823. [ISSN: 00456535; <a href="https://pubmed.ncbi.nlm.nih.gov/31726520/" target="_blank">10.1016/j.chemosphere.2019.124823</a>.</li><br>
                <li>Labastida I., Armienta M.A., Lara R.H., <b>Briones R.</b>, González I., Romero F. (2019) Kinetic approach for the appropriate selection of indigenous limestones for acid mine drainage treatment with passive systems. Science of the total environment. 677, 404 –417 [doi: <a href="https://pubmed.ncbi.nlm.nih.gov/31059883/">10.1016/j.scitotenv.2019.04.373</a>]; ISSN: 0048-9697.</li><br>
                <li>Alfaro-De la Torre M.C., Pérez-Castillo F.V., <b>Briones-Gallardo R.</b> (2018) Trace metals geochemistry in the sediments of a natural wetland. Revista Internacional de contaminación ambiental [ISSN: 01884999]. 34 (6), 11-15 [<a href="https://www.revistascca.unam.mx/rica/index.php/rica/issue/view/4124" target="_blank">doi: 10.20937/2018.34.M6ISSM</a>].</li><br>
                <li>Valdez-Bernal F., Ramos-Arroyo Y., Escot-Espinoza V., <b>Briones-Gallardo R.</b> (2018) Chemical and mineralogical characterization of sediments formed by mine wastes leachates. Revista Internacional de contaminación ambiental [ISSN: 0188-4999]. 34 (1), 251 – 254. [doi: <a href="https://www.revistascca.unam.mx/rica/index.php/rica/issue/view/4124" target="_blank">10.20937/2018.34.M6ISSM</a>]</li><br>
                <li>Rios-Valenciana, E.E., <b>Briones-Gallardo, R.</b>, Chazaro-Ruiz, L.F., Martínez-Villegas, N., Celis, L.B. (2017). Role of indigenous microbiota from heavily contaminated sediments in the bioprecipitation of arsenic. Journal of Hazardous Materials, 339 (5), 114 – 121. [DOI:<a href="https://www.sciencedirect.com/science/article/abs/pii/S0304389417304405" target="_blank">10.1016/j.jhazmat.2017.06.019</a>, ISSN: 0304-3894].</li><br>
                <li>Rios-Montes, K, Casas-Zapata, J.C., <b>Briones-Gallardo, R.</b>, Peñuela, G. (2017) Optimal Conditions for chlorothalonil and dissolved organic carbon in horizontal subsurface flow constructed wetlands. Journal of Environmental Science and Health, Part B. Pesticides, Food Contaminants, and Agricultural Waste , 52(4), 274- 281, DOI: <a href="https://www.tandfonline.com/doi/full/10.1080/03601234.2016.1273005">10.1080/03601234.2016.1273005</a>; Print ISSN: 0360-1234 Online ISSN: 1532-4109.</li><br>
                <li><b>Briones-Gallardo, R.</b>, Escot-Espinoza, V. M., Cervantes-González, E. (2017). Removing arsenic and hydrogen sulfide production using arsenic tolerant sulfate reducing bacteria. International Journal of Environmental Science and Technology, (14)3, 609 – 622 [DOI:<a href="https://link.springer.com/article/10.1007/s13762-016-1174-1" target="_blank">10.1007/s13762-016-1174-1</a>; ISSN: 1735-1472].</li><br>
                <li>Vences-Alvarez, E., Razo-Flores, E., Lázaro, I., <b>Briones-Gallardo, R.</b>, Velasco-Martínez, G., Rangel-Méndez, R.,(2017). Gold recovery from very dilute solutions from a mine in closing process: Adsorption-desorption onto carbon materials.  Journal of Molecular Liquids, 240, 549 – 555, [DOI: <a href="https://doi.org/10.1016/j.molliq.2017.05.069" target="_blank">10.1016/j.mollig.2017.05.069</a>; ISSN: 0167-7322].</li><br>
                <li>Rodríguez-Hernández, A., <b>Briones-Gallardo, R.</b>, Razo I., Noyola.Medrano C., Lázaro I. (2016) Processing methodology based on ASTER data for mapping mine waste dumps in a semiarid polysulphide mine district. Canadian Journal of Remote Sensing. Vol. 42. Iss. 6 p 643 – 645, ISSN: 0703-8992 FI: 1.976; DOI: <a href="https://www.tandfonline.com/doi/full/10.1080/07038992.2016.1197037" target="_blank"> 10.1080/07038992.2016.1197037</a>.</li><br>
                <li>Palomo-Briones, R., Razo-Flores E., Ovando-Franco M., Celis L.B, Rangel-Méndez J.R., Esmeralda Vences-Álvarez E., Cruz, R., Lázaro I., <b>Briones-Gallardo R.</b> (2016) An overview of reclaimed wastewater reuse in gold heap leaching. Mineral processing and extractive metallurgy review. Vol. 37, Iss. 4, 274-285. DOI: <a href="https://doi.org/10.1080/08827508.2016.1190356" target="_blank">10.1080/08827508.2016.1190356. ISSN: 0882-7508</a>.</li><br>
                <li>Ábrego-Góngora, C.J., <b>Briones-Gallardo, R.</b>, Bernal-Jácome, L.A. and Escalas-Cañellas, A. (2015) Evaluation of Three Dynamic Models for Aerated Facultative Lagoons. Journal of Water Resource and Protection, 7, 1131- 1142. <a href="http://dx.doi.org/10.4236/jwarp.2015.714093" target="_blank">http://dx.doi.org/10.4236/jwarp.2015.714093</a>. Publicado 22.09.2015 ISSN Print: 1945-3094. ISSN Online: 1945-3108.</li><br>
                <li>Ortega C, <b>Briones-Gallardo, R.</b>, Razo I., Avila A. (2014) Differences in the risk profiles and risk perception of flammable liquid hazards in San Luis Potosí, Mexico. Case Estudies in Fire Safety. Vol 2. p 37-44. <a href="http://dx.doi.org/10.1016/j.csfs.2014.10.002" target="_blank">http://dx.doi.org/10.1016/j.csfs.2014.10.002</a>. ISSN: 2214-398X.</li><br>
                <li>Cervantes-González E., Zambrano-Monroy B, Ovando-Medina V.M., <b>Briones-Gallardo R.</b>; Ventura-Suarez A. (2014) Influence of Aromatic, Heteroaromatic, and Alkane Hydrocarbons on the Lipase Activity of Pseudomonas sp. in Batch Culture. Polish Journal of Environmental Studies. 23, (5) Pp 1507 – 1513; ISSN: 1230-1485. <a href="https://www.pjoes.com/Influence-of-Aromatic-Heteroaromatic-r-nand-Alkane-Hydrocarbons-on-the-Lipase-Activity,89343,0,2.html" target="_blank">https://www.pjoes.com/Influence-of-Aromatic-Heteroaromatic-r-nand-Alkane-Hydrocarbons-on-the-Lipase-Activity,89343,0,2.html</a></li><br>
                <li>Mejía González M.A, González Hita L., <b>Briones Gallardo R.</b>, Cardona Benavides A. Soto Navarro P. (2014) Mecánismos que liberan arsénico al agua subterránea de la Comarca Lagunera,Estados de Coahuila y Durango, México. Tecnología y Ciencias del Agua/Water Technology and Sciences. Vol. V. No. 1; Enero-Febrero 2014, pp 71-82. ISSN 2007-2422; ISSN: 0187-8336. <a href="https://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S2007-24222014000100005" target="_blank">https://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S2007-24222014000100005</a></li><br>
                <li>Nadia Martínez-Villegas, <b>Roberto Briones-Gallardo</b>, José A. Ramos-Leal, Miguel Avalos-Borja, Alan D. Castañón-Sandoval, Elías Razo-Flores and Mario Villalobos (2013). Arsenic mobility controlled by solid calcium arsenates: A case study in Mexico showcasing a potentially widespread environmental problem. Environmental Pollution. Vol. 176; p114-122; <a href="https://www.sciencedirect.com/science/article/abs/pii/S0269749112005507?via%3Dihub" target="_blank">http://dx.doi.org/10.1016/j.envpol.2012.12.025; ISSN: 0269-7491</a>.</li><br>
                <li>Labastida-Núñez I., Celis L. B., Razo-Flores E., Cruz R., Lázaro I., <b>Briones-Gallardo R.</b> (2013). Kinetics of biogenic sulfide production for microbial consortia isolated from soils with different bioaccessible concentrations of lead. International Journal of Environmental Science and Technology. 10 (4), 827-836 p-ISSN: 1735-1472. <a href="http://dx.doi.org/10.1007/s13762-012-0123-x" target="_blank">http://dx.doi.org/10.1007/s13762-012-0123-x</a>.</li><br>
                <li>Salazar G.J.P.; Alfaro-De La Torre M.C.; Aguirre R.N.J., <b>Briones-Gallardo R.</b>; Cedeño C.J.; Peñuela M. G.A. (2013) Geochemical fractionation of manganese in the Rio Grande II reservoir, Antioquia, Colombia. Environmental Earth Sciences. Vol 69, Iss 1, pp 197 -208, p-ISSN: 1866-6280; <a href="http://dx.doi.org/10.1007/s12665-012-1947-x" target="_blank">http://dx.doi.org/10.1007/s12665-012-1947-x</a></li><br>
                <li>Lara R. H., <b>Briones R.</b>, Monroy M. G., Mullet M., Humbert B., Dossot M, Naja G. M., Cruz R. (2011) Galena weathering under simulated calcareous soil conditions. Science of the Total Environment. 409, pp 3971–3979; <a href="http://dx.doi.org/10.1016/j.scitotenv.2011.06.055" target="_blank">http://dx.doi.org/10.1016/j.scitotenv.2011.06.055</a>; ISSN: 0048-9697.</li><br>
                <li>Terrazas E., Vázquez A., <b>Briones R.</b>, Lázaro I., Rodríguez I. (2010) EC treatment for reuse of tissue paper wastewater: aspects that affect energyconsumption. Journal of Hazardous Materials. 181, 1-3, 809-816; <a href="http://dx.doi.org/10.1016/j.jhazmat.2010.05.086" target="_blank">http://dx.doi.org/10.1016/j.jhazmat.2010.05.086; ISSN: 0304-3894</a>.</li><br>
                <li>Lara-Castro R.H., <b>Briones R.</b>, Monroy M., Dossot, Mullet M. and Cruz R. (2010) Electrochemical and Spectroscopic Analysis of the Arsenopyrite (FeAsS) Oxidation under Calcareous Soil Conditions. ECS Transactions Vol. 28 (6) pp 105-116; <a href="http://dx.doi.org/10.1149/1.3367906" target="_blank">http://dx.doi.org/10.1149/1.3367906</a>; Ed. The Electrochemical Society. ISSN: 1938-6737.</li><br>
                <li>Gonzalez-Silva B. M., <b>Briones-Gallardo R.</b>, Razo-Flores E., Celis L.B. (2009) Inhibition of sulfate reduction by iron, cadmium and sulfide in granular sludge. Journal of Hazardous Materials. 172; pp 400–407. <a href="http://dx.doi.org/10.1016/j.jhazmat.2009.07.022" target="_blank">http://dx.doi.org/10.1016/j.jhazmat.2009.07.022</a>; ISSN: 0304-3894.</li><br>
                <li>Mendoza-Cózatl, D.G., Rodríguez-Zavala J.S., Rodríguez-Enríquez S. Mendoza-Hernandez G., <b>Briones-Gallardo R.</b> and Moreno-Sánchez R. (2006) Phytochelatin–cadmium–sulfide high-molecular-mass complexes of Euglena gracilis. FEBS Journal. Vol. 273 Is 24, p 5703-5713. <a href="http://dx.doi.org/10.1111/j.1742-4658.2006.05558.x" target="_blank">http://dx.doi.org/10.1111/j.1742-4658.2006.05558.x</a>; ISSN: 1742-464X.</li><br>
                <li>Joner E.J., <b>Briones R.</b> and Leval C. (2000) Metal binding capacity of arbuscular mycorrhizal mycelium. Plant and Soil Vol 226, Is. 2, p. 227 – 234; <a href="https://link.springer.com/article/10.1023/A:1026565701391" target="_blank">https://link.springer.com/article/10.1023/A:1026565701391</a>; ISSN: 0032-079X 15735036.</li><br>
                <li><b>Briones R.</b> and Lapidus G. (1998) The leaching of silver sulfide with the thiosulfate–ammonia–cupric ion system. Hydrometallurgy, 50, Iss. 3 p. 243 – 260; <a href="https://doi.org/10.1016/S0304-386X(98)00056-5" target="_blank">http://dx.doi.org/10.1016/S0304-386X(98)00056-5; ISSN: 0304-386X</a>.</li>
              </ul><br>    
              <strong>Libros</strong><br><br>
              <ul class="vineta">
                <li>Eduardo Terrazas, Armando Vázquez, <b>Roberto Briones</b>, Isabel Lázaro, Israel Rodríguez (2010) EC treatment for reuse of tissue paper wastewater: aspects that affect energyconsumption. Journal of Hazardous Materials ISSN: 0304-3894. Estatus: Publicado. <a href="https://doi.org/10.1016/j.jhazmat.2010.05.086">DOI: 10.1016/j.jhazmat.2010.05.086</a>. PII:S0304-3894(10)00669-2. REF: HAZMAT11710</li><br>
                <li>R.H. Lara-Castro, <b>Briones R.</b>, M. Monroy, M. Dossot, M. Mullet and R. Cruz (2010) Electrochemical and Spectroscopic Analysis of the Arsenopyrite (FeAsS) Oxidation under Calcareous Soil Conditions. ECS Transactions Vol. 28 (6) pp 105-116 <a href="https://iopscience.iop.org/article/10.1149/1.3367906">DOI: 10.1149/1.3367906</a> Ed. The Electrochemical Society. ISSN: 1938-6737. Estatus: Publicado. Artículo Arbitrado.</li><br>
                <li>Blanca M. Gonzalez-Silva, <b>Roberto Briones-Gallardo</b>, Elías Razo-Flores, Lourdes B. Celis-García (2009) Inhibition of sulfate reduction by iron, cadmium and sulfide in granular sludge. Journal of Hazardous Materials 172; 400–407. ISSN: 0304-3894 Factor de impacto: 2.975. Estatus: Publicado. Artículo indizado.</li><br>
                <li><b>Briones-Gallardo R.</b>, Reyes Agüero J.A. e Razo-Soto I (2008) Bioaccesibilidad y fitodisponibilidad de arsénico, plomo y cadmio, en suelos impactados por residuos de mina de Villa de la Paz, San Luis Potosí (México). Boletín de mineralogía Vol. 18 p 59-60. Ed. Sociedad Mexicana de Mineralogia. Indexada en Latinindex. ISSN 0186-470X. Estatus: Publicado. Artículo Arbitrado.</li><br>
                <li>Mendoza-Cózatl, D.G., Rodríguez-Zavala J.S., Rodríguez-Enríquez S. Mendoza-Hernandez G., <b>Briones-Gallardo R.</b> and Moreno-Sánchez R. (2006) Phytochelatin–cadmium–sulfide high-molecular-mass complexes of Euglena gracilis. FEBS Journal. Vol. 273 Is 24, p 5703-5713. ISSN: 1742-464X Factor de impacto: 3.396 (Citado 6 veces de acuerdo al Servicio de ISI-WEB Current Contents Connect; con 2 citas tipo A y 4 citas tipo B). Estatus: Publicado. Artículo indizado.</li><br>
                <li>Joner E.J., <b>Briones R.</b> and Leval C. (2000) Metal binding capacity of arbuscular mycorrhizal mycelium. Plant and Soil, Vol 226, Is. 2, p. 227 – 234. ISSN: 0032-079X Factor de impacto: 1.998 (Citado 98 veces de acuerdo al Servicio de ISI-WEB Current Contents Connect; con 94 citas tipo A y 4 citas tipo B). Estatus: Publicado. Artículo indizado.</li><br>
                <li><b>Briones R.</b> and Lapidus G. (1998) Silver leaching with the thisulfate – ammonia – cupric ion system. Hydrometallurgy, 50, p. 243 – 260. ISSN: 0304-386X Factor de impacto: 1.747 (Citado 10 veces de acuerdo al Servicio de ISI-WEB Current Contents Connect, con 9 citas tipo A y 1 cita tipo B). Estatus: Publicado</li>
              </ul><br>
              <strong>Capítulos de libros</strong><br><br>
              <ul class="vineta">
                <li>Irianda Araujo L., Cruz-Gaona R., <b>Briones-Gallardo R.</b> (2011) Recovery of nickel and chromium from plating industry sludge using an electrochemical-electrokinetic process. In Metals and Materials Processing In a Clean Environment. Vol. 6 Aqueous, Low Temperature and Electrochemical Processing. p 525 - 532. Edited by Florian Kongoli, FLOGEN. Fray International Symposium. 764 p. ISBN: 978-0-9879917-5-1. <a href="https://www.researchgate.net/publication/273121701_Recovery_of_Nickel_and_Chromium_From_Plating_Industry_Sludge_Using_an_Electrochemical-Electrokinetic_Process" target="_blank">http://www.flogen.org/books/Flyer/Fray/Volumes.pdf</a></li><br>
                <li>Lara R.H., <b>Briones R.</b>, Monroy M.G. and Cruz R. (2010) Transformations of lead minerals in carbonate rich solutions and their implications on lead bioaccesible fractions in calcareous soils. p 729- 732. En P. Birkle and I.S. Torres-Alvarado (Eds.) Water-Rock Interaction XIII. 1er Ed. London. CRC Press. p 1008. CRC Press/Balkema. AK Leiden. The Netherlands. ISBN: 978-0-415-60426-0. DOI: <a href="https://www.researchgate.net/publication/268982801_Transformations_of_lead_minerals_in_carbonate_rich_solutions_and_their_implications_on_lead_bioaccessible_fractions_in_calcareous_soils" target="_blank"> 10.1201/b10556</a></li><br>
                <li><b>Briones-Gallardo R.</b>, Vázquez-Rodríguez G. and Monroy-Fernández M.G.  (2009) Arsenic mobility in the rhizosphere of the tolerant plant Viguiera dentate. p 387- 393. En J. Bundschuh, M.A. Armienta, P. Bhattacharya, J. Matshullat and A.B. Mukherjee (Eds.). Natural arsenic in grounwater of Latin America. Serie: Arsenic in the Environment Vol. 1.  p 742. CRC Press/Balkema. AK Leiden The Netherlands. ISBN: 978-0-415-40771-7. Estatus: Publicado.</li><br>
                <li>Labastida-Nuñez I., Flores-Moreno A. and <b>Briones-Gallardo R.</b> (2007) Selecting samples in treatability tests for metallic stabilization. p 157 – 163 En Candela, L. et al. (eds) Water Pollution in natural Porous media at different scales. Assessment of fate, impact and indicators. WAPO. Serie: Hidrología y aguas subterráneas No. 22. p 759. Editado por el Instituto Geológico y Minero de España. Madrid, España. ISBN: 978-84-7840-676-0</li><br>
                <li>Landeta Escamilla O., Briones-Gallardo R., Escalas-Cañellas A. y Razo Flores E (2008) Behavior of a permeable reactive barrier for arsenic and lead stabilization as mineral sulfide. p. 366-372. En Orta L. de Velasquez M.A. y Galván García M. (eds) 1st IWA Mexico National Young Water Professionals Conference. p 399. Editado por Facultad de Ingeniería, UNAM. México, D.F. ISBN 978-970-32-5515-3.</li><br>
              </ul>
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
      </div>    <br><br><br>
    </div>
    </div>
</div>

@endsection