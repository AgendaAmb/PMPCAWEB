
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. CANDY CARRANZA ÁLVAREZ</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/CandyCarranzaAlvarez.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Unidad Multidisciplinaria Zona Huasteca.</strong></h5>
        <h5><strong>SNI nivel II.</strong></h5>
        <h5><strong>UASLP-CA-262 - Biotecnología, Medio Ambiente y Sustentabilidad (BMAS)</strong></h5>
        <br>
        <p>
            Romualdo del Campo #501, Fraccionamiento Rafael Curiel<br>
            C.P. 79060, Ciudad Valles, San Luis Potosí, México<br><br>
            Teléfonos: +52 (481) 381-2348, 381-2349 y 382-3644 ext. 143<br>
            <a href="mailto:candy.carranza@uaslp.mx" style="color:rgb(0, 178, 227)">candy.carranza@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <!--<a target="_blank" href="http://ciep.ing.uaslp.mx/geologia/profesor.php?id=3133333235">Webpage</a>-->
            <a target="_blank" href="/storage/CV/Carranza_Alvarez_Candy.pdf"><i>Curriculum Vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/1EIAAA%3D%3D">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-6456-3035"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56013653700"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Remediación de sitios contaminados</li>
                    </ul><br>

                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Remediación, evaluación y control ambiental mediante procesos fisicoquímicos y biológicos (Biotecnología Vegetal y fitorremediación).</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Moctezuma Granados Claudia Esthela. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4208/MCA1MGC201701.pdf?sequence=1&amp;isAllowed=y">Evaluación de <em>Pseudomonas</em> endófitas de la raíz de <em>Typha latifolia</em> en la fitoextracción de Cd (II). </a> (Co-dirección)</li>
                  <li>Castillo Pérez Luis Jesús. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4620/MCA1CPL201801.pdf?sequence=1&amp;isAllowed=y">Aclimatación simbiótica de vitroplantas de <em>Encyclia parviflora</em> (regel) withner y <em>Stanhopea tigrina</em> bateman (orchidaceae) para su conservación <em>ex situ</em>.</a></li>
                  <li>Netro Soto Silvia Karina. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4621/MCA1NSS201801.pdf?sequence=1&amp;isAllowed=y">Evaluación de la interacción bacterias endófitas - <em>typha latifolia</em> (espadaña) en la remoción de Cd (II) en solución. </a>(Co-Dirección)</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Wong Argüelles Cynthia. 2020. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/8448/TesisD.PMPCA.2020.Fitoextraccion.Wong.pdf?sequence=1&isAllowed=y">Fitoextracción y distribución elemental en <i>Typha domingensis</i> en el humedal natural Cienega de Tamasopo</a></li>
                  <li>Castillo Pérez Luis Jesús. 2023. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/8435/TesisD.PMPCA.2023.Study.Castillo.pdf?sequence=1&isAllowed=y"> Study of the ethnopharmacological potential of <i>Catasetum integerrimum</i> Hook. In the Huasteca Potosina</a></li>
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
                <li>2023. Valorization of Sargassum Biomass as Potential Material for the Remediation of Heavy-Metals-Contaminated Waters. Int. J. Environ. Res. Public Health 2023, 20, 2559. <a href="https://doi.org/10.3390/ijerph20032559" target="_blank">https://doi.org/10.3390/ijerph20032559</a></li><br>
                <li>2023. Characterization of Endophytic Bacteria Isolated from Typha latifolia and Their Effect in Plants Exposed to Either Pb or Cd Plants. Plant Sciences 12, 498. <a href="https://doi.org/10.3390/plants12030498" target="_blank">https://doi.org/10.3390/plants12030498</a></li><br>
                <li>2023. Procianidinas obtenidas de residuos de café y litche: una revisión general. Procyanidins obtained from litche and coffee residues: a general review. <a href="https://www.researchgate.net/profile/Pedro-Aguilar-Zarate/publication/368685344_Procyanidins_obtained_from_litchi_and_coffee_residues_a_general_review/links/63f5130c574950594531e51f/Procyanidins-obtained-from-litchi-and-coffee-residues-a-general-review.pdf" target="_blank">https://www.researchgate.net/profile/Pedro-Aguilar-Zarate/publication/368685344_Procyanidins_obtained_from_litchi_and_coffee_residues_a_general_review/links/63f5130c574950594531e51f/Procyanidins-obtained-from-litchi-and-coffee-residues-a-general-review.pdf</a></li><br>
                <li>2022. Chemical speciation of lead adsorbed ontovolcanic ashes by ICP-OES and XANES Supl. Rev. Mex. Fis. [Internet]. 2022 Feb. 18 [cited 2023 Apr. 8];3(1):010602 1-.Available from: <a href="https://rmf.smf.mx/ojs/index.php/rmf-s/article/view/5949" target="_blank">https://rmf.smf.mx/ojs/index.php/rmf-s/article/view/5949</a></li><br>
                <li>2022. Antinociceptive effects of Laelia anceps Lindl. and Cyrtopodium macrobulbon (Lex.) G.A. Romero & Carnevali, and comparative evaluation of their metabolomic profiles, Eunice Yáñez Barrientos, Alan Alexander González Ibarra, Kazimierz Wrobel, Katarzyna Wrobel, Alma Rosa Corrales Escobosa, Ángel Josabad Alonso Castro, <b>Candy Carranza Álvarez</b>, Amauri Ponce Hernández, Mario Alberto Isiordia Espinoza, Rolffy Ortiz Andrade, Karen. <a href="https://doi: 10.1016/j.jep.2022.115172" target="_blank">https://doi: 10.1016/j.jep.2022.115172</a>.</li><br>
                <li>2022. Validation of the traditional medicinal use of a Mexican endemic orchid (Prosthechea karwinskii) through UPLC-ESI-qTOF-MS/MS characterization of its bioactive compounds, Gabriela Soledad Barragán Zarate, Luicita Lagunez Rivera, Rodolfo Solano, <b>Candy Carranza Álvarez</b>, Diego Manuel Hernández Benavides, Gerard Vilarem, Heliyon - Cell Press, Páginas de 1 a 13, , Publicado, Investigación, Co-autor (a), <a href="" target="_blank">https://doi.org/10.1016/J.HELIYON.2022.E09867</a></li><br>
                <li>2022. Enhanced Cd-Accumulation in Typha latifolia by Interaction with Pseudomonas rhodesiae GRC140 under Axenic Hydroponic Conditions, Gisela Adelina Rolón Cárdenas, Joana Guadalupe Martínez Martínez, Jackeline Lizzeta Arvizu Gómez, Ruth Elena Soria Guerra, María Catalina Alfaro de la Torre, Fulgencio Alatorre Cobos, Regina de Montserrat González Balderas, <b>Candy Carranza Álvarez</b>, José Roberto Macías Pérez, Liseth Rubí Aldaba Muruato, Alejandro Hernández Morales, Plants, Páginas de 1 a 15, Publicado, Investigación, Co-autor (a), <a href="https://doi.org/10.3390/plants11111447" target="_blank">https://doi.org/10.3390/plants11111447</a></li><br>
                <li>2022. Evaluation of a biocoagulant from devilfish invasive species for the removal of contaminants in ceramic industry wastewater, Miguel Mauricio Aguilera Flores, Nahum Andrés Medellín Castillo, Verónica Ávila Vázquez, Raúl González García, Antonio Cardona Benavides, <b>Candy Carranza Álvarez</b>, Scientific Reports, Páginas de 1 a 12, Publicado, Investigación, Co-autor (a), <a href="https://doi.org/10.1038/s41598-022-14242-6" target="_blank">https://doi.org/10.1038/s41598-022-14242-6</a></li><br>
                <li>2022. Factors and Practices Associated with Self-Medicating Children among Mexican Parents, Angel Josabad Alonso Castro, Yeniley Ruiz Noa, Gissela Cristel Martínez de la Cruz, Marco Antonio Ramírez Morales, Martha Alicia Deveze Alvarez, Raymundo Escutia Ramirez, <b>Candy Carranza Carranza</b>, Fabiola Domínguez, Juan José Maldonado Miranda, Alan Joel Ruiz Padilla, Pharmaceuticals, Páginas de 1 a 9, Publicado, Investigación, Co- autor (a), <a href="https://doi.org/10.3390/ph15091078" target="_blank">https://doi.org/10.3390/ph15091078</a></li><br>
                <li>2022. Micropropagation of Catasetum integerrimum Hook (Orchidaceae) through seed germination and direct shoot regeneration from pseudobulbs and roots, Luis Jesús Castillo Pérez, Angel Josabad Alonso Castro, Javier Fortanelli Martinez, <b>Candy Carranza Alvarez</b>, In Vitro Cellular & Developmental Biology Plant, Páginas de 279 a 289, 10545476, Publicado, Investigación, Autor (a) para correspondencia, <a href="https://doi.org/10.1007/s11627-021-10248-3" target="_blank">https://doi.org/10.1007/s11627-021-10248-3</a></li><br>
                <li>2021. Biodegradation of carbamazepine and production of bioenergy using a microbial fuel cell with bioelectrodes fabricated from devil fish bone chars, Miguel Mauricio Aguilera Flores, Verónica Ávila Vázquez, Nahum Andrés Medellín Castillo, Antonio Cardona Benavides, <b>Candy Carranza Álvarez</b>, Raúl Ocampo Pérez, Journal of Environmental Chemical Engineering, Páginas de 1 a 7, Publicado, Investigación, Co-autor (a), <a href="https://doi.org/10.1016/j.jece.2021.106692" target="_blank">https://doi.org/10.1016/j.jece.2021.106692</a></li><br>
                <li>2021. Asymbiotic seed germination, in vitro seedling development, and symbiotic acclimatization of the Mexican threatened orchid Stanhopea tigrina, Luis Jesús Castillo Pérez, Domingo Martínez Soto, Javier Fortanelli Martínez, <b>Candy Carranza Álvarez</b>, Plant Cell, Tissue and Organ Culture, Páginas de 1 a 9, Publicado, Investigación, Autor(a) para correspondencia, <a href="https://doi.org/10.1007/s11240-021-02064-9" target="_blank">https://doi.org/10.1007/s11240-021-02064-9</a></li><br>
                <li>2021. Iron adsorption in Cameroon volcanic ashes insights from x-ray absorption spectroscopy, Bridinette Thiodjio Sendja, Nahum Andrés Medellin Castillo, Rene Loredo Portales, Gladis Judith Labrada Delgado, <b>Candy Carranza Álvarez</b>, Luca Olivi, Physica B: Condensed Matter, Páginas de 1 a 8, Publicado, Investigación, Co-autor(a), <a href="https://doi.org/10.1016/j.physb.2021.413128" target="_blank">https://doi.org/10.1016/j.physb.2021.413128</a></li><br>
                <li>2021. Iron adsorption in Cameroon volcanic ashes insights from x-ray absorption spectroscopy, Bridinette Thiodjio Sendja, Nahum Andrés Medellin Castillo, Rene Loredo Portales, Gladis Judith Labrada Delgado, <b>Candy Carranza Álvarez</b>, Luca Olivi, Physica B: Condensed Matter, Páginas de 1 a 8, Publicado, Investigación, Co-autor(a), <a href="https://doi.org/10.1016/j.physb.2021.413128" target="_blank">https://doi.org/10.1016/j.physb.2021.413128</a></li><br>
                <li>2021. Ibuprofen degradation and energy generation in a microbial fuel cell using a bioanode fabricated from devil fish bone char, Miguel Mauricio Aguilera Flores, Verónica Ávila Vázquez, Nahum Andrés Medellín Castillo, <b>Candy Carranza Álvarez</b>, Antonio Cardona Benavides, Raúl Ocampo Pérez, Gladis Judith Labrada Delgado, Sergio Miguel Durón Torres, Journal of Environmental Science and Health Part A, Páginas de 874 a 885, Publicado, Investigación, Co-autor(a), <a href="https://doi.org/10.1080/10934529.2021.1934357" target="_blank">https://doi.org/10.1080/10934529.2021.1934357</a></li><br>
                <li>2021. FITORREMEDIACIÓN in situ EN MÉXICO: UNA REVISIÓN, Cynthia Wong Argüelles, <b>Candy Carranza Álvarez</b>, Angel Josabad Alonso Castro, César Arturo Ilizaliturri Hernández, Revista Fitotecnia Mexicana, Páginas de 133 a 142, Publicado, Investigación, Autor(a) para correspondencia, <a href="https://doi.org/10.35196/rfm.2021.2.133" target="_blank">https://doi.org/10.35196/rfm.2021.2.133</a></li><br>
                <li>2021. Calidad del agua de los manantiales del humedal natural “Ciénega de Tamasopo” en San Luis Potosí, México, Cynthia Wong Arguelles, Angel Josabad Alonso Castro, <b>Candy Carranza Álvarez</b>, Tecnología y ciencias del agua del IMTA., Páginas de 1 a 35, Publicado, Investigación, Autor(a) para correspondencia, <a href="https://doi.org/10.24850/j-tyca-2021-06-01" target="_blank">https://doi.org/10.24850/j-tyca-2021-06-01</a></li><br>
                <li>2020. Efecto de extractos orgánicos naturales sobre la micropropagación de Jacks. ex Andrews (Orchidaceae), <b>Candy Carranza Álvarez</b>, Karina Lizbeth Trinidad García, Humberto Reyes Hernández, Luis Jesús Castillo Pérez, Javier Fortanelli Martínez, Biotecnia, Páginas de 5 a 12, Publicado, Investigación, Autor(a) principal, <a href="https://doi.org/10.18633/biotecnia.v23i1.805" target="_blank">https://doi.org/10.18633/biotecnia.v23i1.805</a></li><br>
                <li>Luis J. Castillo-Pérez, Domingo Martínez-Soto, Juan J. Maldonado-Miranda, Angel J. Alonso-Castro <b>Candy Carranza-Álvarez*</b> (2019). The endemic orchids of Mexico: a review. Biologia (2019) 74: 1. <a href="https://doi.org/10.2478/s11756-018-0147-x">https://doi.org/10.2478/s11756-018-0147-x</a>.</li><br>
                <li>Wong-Arguelles C, Alonso-Castro AJ, <b>Carranza-Alvarez C*</b> (2018) "In situ phytoremediation in Mexico: a review" has been successfully submitted online and is presently being given full consideration for publication in "CLEAN - Soil, Air, Water". Manuscript number is: clen.201800357. En revisión.</li><br>
                <li>Alonso-Castro AJ, Ruiz-Padilla AJ, Ruiz-Noa Y, Alba-Betancourt C, Domínguez F, Ibarra-Reynoso LDR, Maldonado-Miranda JJ, Carranza-Álvarez C, Blanco-Sandate C, Ramírez-Morales MA, Zapata-Morales JR, Deveze-Álvarez MA, Mendoza-Macías CL, Solorio-Alvarado CR, Rangel-Velázquez JE. (2018). Self-medication practice in pregnant women from central Mexico Saudi Pharm J.; 26(6):886-890. doi: 10.1016/j.jsps.2018.03.008.</li><br>
                <li>Alonso-Castro AJ, Zapata-Morales JR, Arana-Argáez V, Torres-Romero JC, Ramírez-Villanueva E, Pérez-Medina SE, Ramírez-Morales MA, Juárez-Méndez MA, Infante-Barrios YP, Martínez-Gutiérrez F, <b>Carranza-Álvarez C</b>, Isiordia-Espinoza MA, Flores-Santos A. (2018). Pharmacological and toxicological study of a chemicalstandardized ethanol extract of the branches and leaves from Eysenhardtia polystachya (Ortega) Sarg. (Fabaceae). J Ethnopharmacology; 224:314-322. doi: 10.1016/j.jep.2018.06.016.</li><br>
                <li>Rojas-Bedolla EI, Gutiérrez-Pérez JL, Arenas-López MI, González-Chávez MM, Zapata-Morales JR, MendozaMacías CL, <b>Carranza-Álvarez C</b>, Maldonado-Miranda JJ, Deveze-Álvarez MA, Alonso-Castro AJ. (2018). Chemical characterization, pharmacological effects, and toxicity of an ethanol extract of Celtis pallida Torr. (Cannabaceae) aerial parts. J Ethnopharmacology. 219: 126-132. doi: 10.1016/j.jep.2018.03.014. PMID: 29545209. Select item 29234446.</li><br>
                 <li>Nahum A. Medellin-Castillo; Erika Padilla-Ortega; María C. Regules-Martínez; Roberto Leyva-Ramos; Raúl Ocampo-Pérez; <b>Candy Carranza-Alvarez</b> (2017). Single and competitive adsorption of Cd (II) and Pb (II) ions from aqueous solutions onto industrial chili seeds (Capsicum annuum) waste. Elsevier. Environmental Science10.1016/j.serj.2017.01.004.</li><br>
                <li>Angel Josabad Alonso-Castro, Fabiola Domínguez, Juan José Maldonado-Miranda, Luis Jesús Castillo-Pérez, <b>Candy Carranza-Álvarez</b>, Eloy Solano, Mario Alberto Isiordia-Espinoza, María del Carmen Juárez-Vázquez, Juan Ramón Zapata-Morales, Marco Antonio Argueta-Fuertes, Alan Joel Ruiz-Padilla, César Rogelio Solorio-Alvarado, Joceline Estefanía Rangel-Velázquez, Rolffy Ortiz-Andrade, Ignacio González-Sánchez, Gustavo Cruz-Jiménez, Luis Manuel Orozco-Castellanos (2017). Use of medicinal plants by health professionals in Mexico. ISSN: 2410-356X. Journal of Ethnopharmacology 198: 81–86. <a href="http://dx.doi.org/10.1016/j.jep.2016.12.038">http://dx.doi.org/10.1016/j.jep.2016.12.038.</a></li><br>
                <li>Alonso-Castro AJ, Domínguez F, Ruiz-Padilla AJ, Campos-Xolalpa N, Zapata-Morales JR, <b>Carranza-Alvarez C</b>, Maldonado-Miranda JJ. (Nov, 2017). Medicinal Plants from North and Central America and the Caribbean Considered Toxic for Humans: The Other Side of the Coin. Evid Based Complement Alternat Med; 9439868. doi:10.1155/2017/9439868. Epub. Review. PMID: 29234446. Select item 28629817</li><br>
                <li>Zapata-Morales JR, Alonso-Castro AJ, Domínguez F, <b>Carranza-Álvarez C</b>, Isiordia-Espinoza M, HernándezMorales A, Solorio-Alvarado C. (Jul, 2017). The antinociceptive effects of a standardized ethanol extract of the Bidens odorata Cav (Asteraceae) leaves are mediated by ATP-sensitive K+ channels. J Ethnopharmacology; 207:30-33. doi: 10.1016/j.jep.2017.06.021. PMID: 28629817. Select item 28025163.</li><br>
                <li>Alonso-Castro AJ, Domínguez F, Maldonado-Miranda JJ, Castillo-Pérez LJ, <b>Carranza-Álvarez C</b>, Solano E, Isiordia-Espinoza MA, Del Carmen Juárez-Vázquez M, Zapata-Morales JR, Argueta-Fuertes MA, Ruiz-Padilla AJ, Solorio-Alvarado CR, Rangel-Velázquez JE, Ortiz-Andrade R, González-Sánchez I, Cruz-Jiménez G, OrozcoCastellanos LM. (Feb, 2017). Use of medicinal plants by health professionals in Mexico. J Ethnopharmacology; 198:81-86. doi: 10.1016/j.jep.2016.12.038. PMID: 28025163.</li><br>
                <li>Juan José Maldonado-Miranda*, Ángel Josabad Alonso-Castro, <b>Candy Carranza-Álvarez</b> (2016). Perception of the general population in Ciudad Valles, San Luis Potosi regarding waste production in hairdressing salons. Journal of Natural Resources and Development 2016; 06: 09 – 13. ISBN: 0719-2452. doi: 10.5027/jnrd.v6i0.02.</li><br>
                <li>Abigail Reyes-Munguía, María Luisa Carrillo-Inungaray, <b>Candy Carranza-Álvarez</b>, Diana J. Pimentel-González & Brenda Alvarado-Sánchez (2016) Antioxidant activity, antimicrobial and effects in the immune system of plants and fruits extracts, Frontiers in Life Science, 9:2, 90-98, DOI: 10.1080/21553769.2015.1104388.</li><br>
                <li>Juan Ramón Zapata-Morales*, Angel Josabad Alonso-Castro, Fabiola Domínguez, <b>Candy Carranza-Álvarez</b>, Luis Manuel Orozco-Castellanos, Rosa MarÍa Martínez-Medina, José Pérez-Urizar (2016). Antinociceptive activity of an etanol extract of Justicia spicigera. Drug Development Research 2016: 77: 180-186.</li><br>
                <li><b>Candy Carranza-Álvarez*</b>, Angel Josabad Alonso-Castro, Juan José Maldonado-Miranda, Alejandro Hernández-Morales (2016). Quantitation of Cd, Pb and Fe in three medicinal plants (Justicia spicigera, Arnica montana y Hamelia pantens) from environmentally diverse locations of Huasteca Potosina, Mexico. Acta Universitaria, 26 (5), 24-30. ISSN: 0188- 6266. doi: 10.15174/au.2016.984.</li><br>
                <li>Ángel Josabad Alonso-Castro, Fabiola Domínguez, Juan Ramón Zapata-Morales, <b>Candy Carranza-Álvarez*</b> (2015). Plants used in the traditional medicine of Mesoamerica (Mexico and Central America) and the Caribbean for the treatment of obesity. Journal of Ethnopharmacology 175 (2015) 335–345. ISSN: 0378-8741</li><br>
                <li>Angel Josabad Alonso-Castro*, Juan Ramón Zapata-Morales, Marco Martin González-Chávez, <b>Candy Carranza-Álvarez</b>, Diego Manuel Hernández-Benavides, Alejandro Hernández-Morales (2016). Pharmacological effects and toxicity of Costus pulverulentus C. Presl (Costaceae). S0378-8741(16)30011-3. doi: 10.1016/j.jep.2016.01.011. Journal of Ethnopharmacology 180 (2): 124-130. ISSN 2410-356X.</li><br>
              </ul><br>
              <strong>Artículos de divulgación</strong><br><br>
              <ul class="vineta">
                <li>Claudia Moctezuma-Granados; Omar Cruz-Santiago, <b>Candy Carranza-Álvarez</b>, Diana ZavalaCuevas, Sonia H. Soriano-Pérez (2012). Tecnologías sustentables: uso de Pistia stratiotes (lechuga acuática) para la remoción de contaminantes del agua. Red Internacional de Investigadores en Ciencias de la Gestión (REINICIG) 2º. Congreso Internacional en Ciencias de la Gestión. Artículo en extenso. Gestión, innovación y tendencias socioeconómicas 3-26 ISBN 978-607-7856-77-1.</li><br>
                <li><b>Candy Carranza Álvarez</b>; Nahúm Andrés Medellín Castillo (2015). Importancia de la Química Ambiental en nuestros Días. Revista Universitarios Potosinos. Revista de Divulgación Científica. (185): 10-13. ISBN 9771870169005.</li><br>
                <li>Diana Zavala Cuevas, Roberto Rico Martínez, <b>Candy Carranza-Álvarez</b>. (Julio, 2016). Zooplancton dulceacuícola para la determinación de la calidad del agua. Universitarios Potosinos, No. 201, ISSN 18701698.</li><br>
                <li><b>Candy Carranza Álvarez</b> (Septiembre 2016). Micropropagación de orquídeas del Humedal natural Ciénega de Tamasopo. Universitarios Potosinos, No. 201, ISSN 18701698.</li>
              </ul><br>
              <strong>Libros</strong><br><br>
              <ul class="vineta">
                <li><b>Candy Carranza Álvarez</b>, Alejandro Hernández Morales (2015). Tendencias de Investigación en Ciencias Naturales y Exactas. (162 paginas).  ISBN-978-607-9453-11-4, México, Editorial UASLP.</li><br>
                <li>Juan José Maldonado Miranda, <b>Candy Carranza Álvarez</b> (2017). La importancia de la tutoría en el desempeño académico del estudiante universitario. Editorial Universitaria UASLP. ISBN: 978-607-9453-86-2. Páginas 38.</li>
              </ul><br>
              <strong>Capítulos en libros</strong><br><br>
              <ul class="vineta">
                <li>Biomass for bionanomaterials green synthesis. Synthesis of Bionanomaterials for Biomedical Applications. Elsevier <a href="https://doi.org/10.1016/B978-0-323-91195-5.00006-4" target="_blank">https://doi.org/10.1016/B978-0-323-91195-5.00006-4</a></li><br>
                <li>2023. Use of Antidiabetic Medicinal Plants with Ethnomedicinal Information in Clinical Trials. Ethnobotany (1st ed.). CRC Press. Taylor & Francis eBooks. <a href="https://doi.org/10.1201/9781003323969" target="_blank">https://doi.org/10.1201/9781003323969.</a></li><br>
                <li>2023. Potential toxicity and bioavailability of ENMs and their products in plant tissues. Physicochemical Interactions of Engineered Nanoparticles and Plants Academic Press <a href="https://doi.org/10.1016/B978-0-323-90558-9.00005-X" target="_blank">https://doi.org/10.1016/B978-0-323-90558-9.00005-X</a></li><br>
                <li>2022. Nahum Andrés Medellin-Castillo, Hilda Guadalupe Cisneros-Ontiveros, <b>Candy Carranza-Álvarez*</b>, Cesar Arturo Ilizaliturri-Hernandez, Leticia Guadalupe Yánez-Estrada, Andrea Guadalupe Rodríguez-López, Chapter 10 - Evaluation of the Fish Invasiveness Scoring Kit (FISK v2) for pleco fish or devil fish, Editor(s): Gowhar Hamid Dar, Rouf Ahmad Bhat, Humaira Qadri, Khalid M. Al-Ghamdy, Khalid Rehman Hakeem, Bacterial Fish Diseases, Academic Press, 2022, Pages 205-227, ISBN 9780323856249, https://doi.org/10.1016/B978-0-323-85624-9.00021-X.</li><br>
                <li>2022. Use and Manufacture of Biopesticides and Biofertilizers in Latin America, Luis Jesús Castillo Pérez, Juan José Maldonado Miranda, <b>Candy Carranza Álvarez*</b>, Bioresource Technology: Concept, Tools and Experiences, 1, Wiley Online Library, Página de 424 a 442, 9781119789444, Publicado.</li><br>
                <li>2022. Summary of economic losses due to bacterial pathogens in aquaculture industry, Juan José Maldonado Miranda, Luis Jesús Castillo Pérez, Amauri Ponce Hernández, <b>Candy Carranza Álvarez*</b>, Bacterial Fish Diseases, 1, Elsevier, Página de 399 a 417, 9780323856249, Publicado.</li><br>
                <li>2022. Fungi, eukaryotic microorganisms involved in bioremediation of contaminated environments, Luis Fernando García Ortega, Claudia Geraldine León Ramírez, Juan Antonio Cervantes Montelongo, John Martin Velez Haro, Rosario Razo Belman, Lucila Ortiz Castellanos, <b>Candy Carranza Álvarez*</b>, Domingo Martínez Soto, Microbial Consortium and Biotransformation for Pollution Decontamination, 1, Elsevier, Página de 259 a 297, 9780323918930, Publicado.</li><br>
                <li>2022. Chemical amendments and phytoremediation, Amauri Ponce Hernández, Paola Lucero Pérez, Angel Josabad Alonso Castro, <b>Candy Carranza Álvarez*</b>, Phytoremediation, 1, Elsevier, Página de 163 a 177, 9780323898744, Publicado.</li><br>
                <li>2022. Engineering plants for metal tolerance and accumulation, Amauri Ponce Hernández, Angel Josabad Alonso Castro, Ramón Fernando García De La Cruz, <b>Candy Carranza Álvarez*</b>, Phytoremediation, 1, Elsevier, Página de 455 a 480, 9780323898744, Publicado.</li><br>
                <li>2021. Biotechnological approaches for conservation of medicinal plants, Luis Jesús Castillo Pérez, Angel Josabad Alonso Castro, Javier Fortanelli Martínez, <b>Candy Carranza Alvarez</b>, Phytomedicine A Treasure of Pharmacologically Active Products from Plants, 1, Academic Press, Elsevier, Página de 35 a 58, 978012-824109-7, Publicado.</li><br>
                <li>2021. Application and Viability of Macrophytes as Green Manure, Domingo Martinez Soto, Amauri Ponce Hernández, Juan José Maldonado Miranda, <b>Candy Carranza Alvarez</b>, Microbiota and Biofertilizers, 1, Springer, Página de 69 a 82, 9783030487713, Publicado.</li><br>
                <li>2021. Bioactive compounds obtained from plants, their pharmacological applications and encapsulation, Rocio Del Carmen Díaz Torres, Angel Josabad Alonso Castro, María Luisa Carrillo Inungaray, <b>Candy Carranza Alvarez</b>, Phytomedicine A Treasure of Pharmacologically Active Products from Plants, 1, Elsevier, Página de 181 a 198, 9780128241097, Publicado.</li><br>
                <li>2020. Credibility of In Situ Phytoremediation for Restoration of Disturbed Environments, Cynthia Wong Arguelles, Ángel Josabad Alonso Castro, César Arturo Ilizaliturri Hernández, <b>Candy Carranza Alvarez</b>, Bioremediation and Biotechnology, 1, Springer, Página de 233 a 256, 9783030356910, Publicado.</li><br>
                <li>2020. Water Quality Management in San Luis Potosi, Mexico., <b>Candy Carranza Alvarez</b>, Nahúm Andrés Medellín Castillo, Juan José Maldonado Miranda, María Catalina Alfaro De la Torre, Water Availability and Management in Mexico, 1, Springer, Página de 465 a 484, 0921092X, Publicado, Investigación.</li><br>
                <li>2020. Phytoremediation Technology Sustainable Solution for Cleaning Up of Recalcitrant Pollutants from Disturbed Environs, Amauri Ponce Hernández, Juan José Maldonado Miranda, Nahúm Andrés Medellín Castillo, Angel Josabad Alonso Castro, <b>Candy Carranza Alvarez</b>, Bioremediation and Biotechnology, 3, Springer Nature, Página de 255 a 279, 9786075351407, Publicado, Investigación.</li><br>
                <li>Maria L. Carrillo-Inungaray, Jorge Antonio Trejo-Ramirez, Abigail Reyes-Munguia, <b>Candy Carranza-Alvarez</b> (2018). Use of Nanoparticles in the Food Industry: Advances and Perspectives. Impact of Nanoscience in the Food Industry. CHAPTER 15. Elselvier <a href="http://dx.doi.org/10.1016/B978-0-12-811441-4.00015-7">http://dx.doi.org/10.1016/B978-0-12-811441-4.00015-7</a>.</li><br>
                <li>2017. Use of nanoparticles in the food industry. Advances and perspectives, María Luisa Carrillo Inungaray, Jorge Antonio Trejo Ramírez, Abigail Reyes Munguia, <b>Candy Carranza Álvarez</b>, Impact of nanoscience in the food industry. ISBN: 9780128114414, 1, ELSEVIER, Página de 419 a 444, 9780128114414, Publicado, Investigación, Co-autor(a).</li><br>
                <li><b>Carranza Álvarez C</b>; Figueroa Zúñiga L.A; Hernández Morales A; Hernández Benavides D; Medellín Castillo N (2014). Ciencias Naturales y Exactas Handbook T-II Determinación de la capacidad de adsorción de Pb (II) en solución acuosa por raíces de Typha latifolia (Espadaña) (pag 241-248). México, Editorial ECORFAN.</li><br>
                <li><b>Carranza Álvarez C</b>; Maldonado Miranda J.J; (2012). Gestión Ambiental. En Carrillo Inungaray M.L; Zavala Cuevas D. Gestión de la calidad en el área Químico Biológica. (pág. 9-72). México, Editorial Porrúa.</li><br>
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
                <li>Responsable del laboratorio de Servicio al público de calidad de agua</li>
                <li>Vinculación con el sector productivo de vainilla de la Huasteca Potosina</li>
              </ul>
            </div>
          </div>
        </div>
      </div>    <br><br><br>
    </div>
    </div>
</div>

@endsection