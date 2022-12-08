
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. GABRIELA DOMÍNGUEZ CORTINAS</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/P_Mujer.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo. Nivel V.</strong></h4>
        <h5><strong>Facultad de Medicina.</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Av. Venustiano Carranza 2405 Colonia Los Filtros,<br>
                    C.P. 78210 San Luis Potosí, S.L.P.<br>
                    Tel. (444) 826-2300 Ext. 6619 <br>
                    gabriela.dominguez@uaslp.mx
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://www.ciacyt.uaslp.mx/Grupo_ciaas.aspx">Webpage</a>
            {{-- <a target="_blank" href="/storage/CV/Cardona_Benavides_Antonio.pdf">Curriculum Vitae </a> --}}
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/RUgAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-6747-6818"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=25921759200"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                        <li> El enfoque multidisciplinario de la salud ambiental: perspectivas, indicadores y
                            metodologías de diagnóstico </li>
                    </ul>
                    </p>
                    <li><strong>LGAC:</strong></li>
                    <p>
                    <ul class="vineta">
                        <li> Evaluación integrada del riesgo y salud ambiental </li>
                    </ul>
                    </p>
                    <li><strong>Dirección de Tesis:</strong></li>

                    <p><em>Maestría en Ciencias Ambientales</em>
                    <ul class="vineta">
                        <li> Ortega Elorza Laura Elena. 2015. <a
                                href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_ortegaelorza.pdf">Diagnóstico
                                de vulnerabilidad desde la salud ambiental ante condiciones de variabilidad climática en
                                comunidades de la Huasteca Potosina</a>.</li>
                        <li> Jaramillo Castillo Paola. 2015. <a
                                href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_jaramillocastillo.pdf">Diagnóstico
                                integral de salud ambiental en la zona metropolitana San Luis Potosí-Soledad de Graciano
                                Sánchez</a>.</li>
                        <li> Ponce de León Castañeda Perla María. 2015. <a
                                href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_poncedeleoncastaneda.pdf">Propuesta
                                metodológica para la evaluación de la seguridad alimentaria y nutricional en escenarios
                                semiurbanos</a>.</li>
                        <li> Manzano González Guillermo. 2019. <a
                                href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4730/MCA1MGG201901.pdf?sequence=1&amp;isAllowed=y">La
                                vulnerabilidad del estado nutricio de los adultos mayores de una localidad de la
                                Huasteca Potosina en un contexto de variabilidad climática</a>.</li>
                        <li> Reyes Gallegos Karla Jazmin. 2019. <a
                                href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4729/MCA1RGK201901.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                de la condición de salud del suelo como indicador de vulnerabilidad ambiental en la
                                comunidad de Nuevo Aquismón, Tamuín S.L.P.</a></li>
                        <li> Romero Galicia Sandra Alejandra. 2019. <a herf="#"> Percepción de vulnerabilidad
                                socio-ambiental asociada a variabilidad climática y cambio climático en la Huasteca
                                Potosina: el caso de la comunidad de nuevo Aquismón, Tamuín, S.L.P. México</a>.</li>
                    </ul>
                    </p>

                    <p><em>Doctorado en Ciencias Ambientales</em>
                    <ul class="vineta">
                        <li>Gaytán Hernández Dario. 2015. <a
                                href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2011-08/2015_pmpca_gaytanhernandez.pdf">Diseño
                                de un paquete de herramientas metodológicas para una sala situacional de salud ambiental
                                para el estado de San Luis Potosí.</a> (Co-Dirección)</li>
                    </ul>
                    </p>
                </ol>
            </div>
          </div>
        </div>
        {{-- <div class="accordion-item">
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
                Ángel Josabad Alonso-Castro, <b>Candy Carranza-Álvarez</b>, Juan José Maldonado-Miranda, María del Rosario Jacobo-Salcedo, Habacuc Lorenzo-Márquez, Luis Alejandro Figueroa-Zúñiga, Miguel Ángel de León-Rubio, Carlos Fernández-Galicia; Néstor Abel Ríos-Reyes, Valentina Rodríguez-Gallegos, Pedro Medellín-Milán (2011). Zootherapeutic practices in Aquismón, San Luis Potosí. Journal of Ethnopharmacology, 138: 233-237. ISSN: 0378-8741.<br><br>
                Ángel Josabad Alonso-Castro, Luis Alejandro Figueroa-Zúñiga, Miguel Ángel de León-Rubio, Carlos Fernández-Galicia; Néstor Abel Ríos-Reyes, Abigail Reyes Munguía, Nahúm Medellín Castillo, <b>Candy Carranza Álvarez</b> (2012). Medicinal plants used in the Huasteca Potosina, México, Journal of Ethnopharmacology. 143(1):292-298. El sevier Ireland Ltd.<br><br>
                Juárez-Vázquez MdC, <b>Carranza-Álvarez C.</b>, Alonso-Castro AJ, Gonzalez-Alcaraz VF, Bravo-Acevedo E, Chamarro-Tinajero FJ, Solano E, en prensa. Ethnobotany of medicinal plants used in Xalpatlahuac, Guerrero, México. Journal of Ethnopharmacology. <a href="http://dx.doi.org/10.1016/j.jep.2013.04.048/">http://dx.doi.org/10.1016/j.jep.2013.04.048</a><br><br>
                Adriana Leura-Vicencio; <b>Candy Carranza-Álvarez</b>; Ángel Josabad Alonso-Castro; René Loredo-Portales; María Catalina Alfaro-De la Torre*; Ramón Fernando García-De la Cruz (2013). Removal and Accumulation of As, Cd and Cr by Typha latifolia. Bulletin of Environmental Contamination and Toxicology. (90): 650-653.ISSN 0007-486<br><br>
                Rolffy Ortiz-Andrade, Ángel Cabañas-Wuan, Vıctor Ermilo Arana-Argaez, Angel Josabad Alonso-Castro, Rocio Zapata-Bustos, Luis A. Salazar-Olivo, Fabiola, Domınguez, Marco Chavez, <b>Candy Carranza-Alvarez</b>, Alejandro Garcıa-Carranca (2012). Antidiabetic effects of Justicia spicigera Schltdl (Acanthaceae). Journal of Ethnopharmacology. 143 (2):455–462.<br><br>
                María del Rosario Jacobo-Salcedo, Angel Josabad Alonso-Castro*, Luis A. Salazar-Olivo, <b>Candy Carranza-Álvarez</b>, Luis Ángel González-Espíndola, Fabiola Domínguez, Sandra Patricia Maciel-Torres, Concepción García-Lujan, Marisela del Rocio González-Martínez, Maricela Gómez-Sánchez, Eduardo Estrada-Castillón, Rocio Zapata-Bustos, Pedro Medellin-Milán, Alejandro García-Carranca (2011). Antimicrobial and cytotoxic effects of Mexican medicinal plants. Natural Product Communications 6(12): 1925-1928. ISSN: 1555-9475. PubMed ID 22312741<br><br>
                Angel Josabad Alonso-Castroa, Elizabeth Ortiz-Sánchez, Fabiola Domínguez, Victor Arana-Argáez, Maria del Carmen Juárez-Vázquez, Marco Chávez, <b>Candy Carranza-Álvarez</b>, Octavio Gaspar-Ramírez, Guillermo Espinosa-Reyes,Gabriela López-Toledo, Rolffy Ortiz-Andrade, Alejandro GarcíaCarrancá (2012). Antitumor and immunomodulatory effects of Justicia spicigera Schltdl (Acanthaceae). Journal of Ethnopharmacology. 141 (2012) 888– 894. doi:10.1016/j.jep.2012.03.036 Elsevier Ireland Ltd.<br><br>
                Alejandro Hernández-Morales, Jackeline Lizzeta Arvizu-Gómez, <b>Candy Carranza-Álvarez</b>, Blanca Estela Gómez-Luna, Brenda Alvarado-Sánchez, Enrique Ramírez-Chávez, Jorge Molina-Torres (2015). Larvicidal activity of affinin and its derived amides from Heliopsis longipes A. Gray Blake against Anopheles albimanus and Aedes aegypti. Journal of Asia-Pacific Entomology. 18: 1-6. 10.1016/j.aspen.2014.09.004. Elsevier Ireland Ltd.<br><br>
                Ángel Josabad Alonso-Castro, Sarahi Balleza-Ramos, Alejandro Hernández-Morales, Juan Ramón Zapata-Morales, Marco Martin González-Chávez, <b>Candy Carranza-Álvarez*</b> (2015). Toxicity and antinociceptive effects of Hamelia patens. Revista Brasileira de Farmacognosia 25 (2015) 170–176. Doi:10.1016/j.bjp.2015.03.007. ISSN: 0102-695X.<br><br>
                Medellín-Castillo, N.A, Hernández-Ramírez, M.G, <b>Carranza-Álvarez, C.</b>, Loredo Martínez G.K., Hernández de la Rosa, L.G .Mendoza Barrón, J. (2014). Aprovechamiento de residuos de <em>Agave lechuguilla</em> para la remoción de metales pesados en solución acuosa. Revista Internacional de Investigación Multidisciplinaria 9 (2): 85-93. ISSN:1665-790X.<br><br>
                Ángel Josabad Alonso-Castro, Fabiola Domínguez, Juan Ramón Zapata-Morales, <b>Candy Carranza-Álvarez*</b> (2015). Plants used in the traditional medicine of Mesoamerica (Mexico and Central America) and the Caribbean for the treatment of obesity. Journal of Ethnopharmacology 175 (2015) 335–345. ISSN: 0378-8741<br><br>
                Angel Josabad Alonso-Castro*, Juan Ramón Zapata-Morales, Marco Martin González-Chávez, <b>Candy Carranza-Álvarez</b>, Diego Manuel Hernández-Benavides, Alejandro Hernández-Morales (2016). Pharmacological effects and toxicity of Costus pulverulentus C. Presl (Costaceae). S0378-8741(16)30011-3. doi: 10.1016/j.jep.2016.01.011. Journal of Ethnopharmacology 180 (2): 124-130. ISSN 2410-356X.<br><br>
                Juan José Maldonado-Miranda*, Ángel Josabad Alonso-Castro, <b>Candy Carranza-Álvarez</b> (2016). Perception of the general population in Ciudad Valles, San Luis Potosi regarding waste production in hairdressing salons. Journal of Natural Resources and Development 2016; 06: 09 – 13. ISBN: 0719-2452. doi: 10.5027/jnrd.v6i0.02.<br><br>
                Abigail Reyes-Munguía, María Luisa Carrillo-Inungaray, <b>Candy Carranza-Álvarez</b>, Diana J. Pimentel-González & Brenda Alvarado-Sánchez (2016) Antioxidant activity, antimicrobial and effects in the immune system of plants and fruits extracts, Frontiers in Life Science, 9:2, 90-98, DOI: 10.1080/21553769.2015.1104388.<br><br>
                Juan Ramón Zapata-Morales*, Angel Josabad Alonso-Castro, Fabiola Domínguez, <b>Candy Carranza-Álvarez</b>, Luis Manuel Orozco-Castellanos, Rosa MarÍa Martínez-Medina, José Pérez-Urizar (2016). Antinociceptive activity of an etanol extract of Justicia spicigera. Drug Development Research 2016: 77: 180-186.<br><br>
                <b>Candy Carranza-Álvarez*</b>, Angel Josabad Alonso-Castro, Juan José Maldonado-Miranda, Alejandro Hernández-Morales (2016). Quantitation of Cd, Pb and Fe in three medicinal plants (Justicia spicigera, Arnica montana y Hamelia pantens) from environmentally diverse locations of Huasteca Potosina, Mexico. Acta Universitaria, 26 (5), 24-30. ISSN: 0188- 6266. doi: 10.15174/au.2016.984.<br><br>
                Nahum A. Medellin-Castillo; Erika Padilla-Ortega; María C. Regules-Martínez; Roberto Leyva-Ramos; Raúl Ocampo-Pérez; <b>Candy Carranza-Alvarez</b> (2017). Single and competitive adsorption of Cd (II) and Pb (II) ions from aqueous solutions onto industrial chili seeds (Capsicum annuum) waste. Elsevier. Environmental Science10.1016/j.serj.2017.01.004.<br><br>
                Angel Josabad Alonso-Castro, Fabiola Domínguez, Juan José Maldonado-Miranda, Luis Jesús Castillo-Pérez, <b>Candy Carranza-Álvarez</b>, Eloy Solano, Mario Alberto Isiordia-Espinoza, María del Carmen Juárez-Vázquez, Juan Ramón Zapata-Morales, Marco Antonio Argueta-Fuertes, Alan Joel Ruiz-Padilla, César Rogelio Solorio-Alvarado, Joceline Estefanía Rangel-Velázquez, Rolffy Ortiz-Andrade, Ignacio González-Sánchez, Gustavo Cruz-Jiménez, Luis Manuel Orozco-Castellanos (2017). Use of medicinal plants by health professionals in Mexico. ISSN: 2410-356X. Journal of Ethnopharmacology 198: 81–86. <a href="http://dx.doi.org/10.1016/j.jep.2016.12.038">http://dx.doi.org/10.1016/j.jep.2016.12.038.</a><br><br>
                Alonso-Castro AJ, Domínguez F, Ruiz-Padilla AJ, Campos-Xolalpa N, Zapata-Morales JR, <b>Carranza-Alvarez C</b>, Maldonado-Miranda JJ. (Nov, 2017). Medicinal Plants from North and Central America and the Caribbean Considered Toxic for Humans: The Other Side of the Coin. Evid Based Complement Alternat Med; 9439868. doi:10.1155/2017/9439868. Epub. Review. PMID: 29234446. Select item 28629817<br><br>
                Zapata-Morales JR, Alonso-Castro AJ, Domínguez F, <b>Carranza-Álvarez C</b>, Isiordia-Espinoza M, HernándezMorales A, Solorio-Alvarado C. (Jul, 2017). The antinociceptive effects of a standardized ethanol extract of the Bidens odorata Cav (Asteraceae) leaves are mediated by ATP-sensitive K+ channels. J Ethnopharmacology; 207:30-33. doi: 10.1016/j.jep.2017.06.021. PMID: 28629817. Select item 28025163.<br><br>
                Alonso-Castro AJ, Domínguez F, Maldonado-Miranda JJ, Castillo-Pérez LJ, <b>Carranza-Álvarez C</b>, Solano E, Isiordia-Espinoza MA, Del Carmen Juárez-Vázquez M, Zapata-Morales JR, Argueta-Fuertes MA, Ruiz-Padilla AJ, Solorio-Alvarado CR, Rangel-Velázquez JE, Ortiz-Andrade R, González-Sánchez I, Cruz-Jiménez G, OrozcoCastellanos LM. (Feb, 2017). Use of medicinal plants by health professionals in Mexico. J Ethnopharmacology; 198:81-86. doi: 10.1016/j.jep.2016.12.038. PMID: 28025163.<br><br>
                Rojas-Bedolla EI, Gutiérrez-Pérez JL, Arenas-López MI, González-Chávez MM, Zapata-Morales JR, MendozaMacías CL, <b>Carranza-Álvarez C</b>, Maldonado-Miranda JJ, Deveze-Álvarez MA, Alonso-Castro AJ. (2018). Chemical characterization, pharmacological effects, and toxicity of an ethanol extract of Celtis pallida Torr. (Cannabaceae) aerial parts. J Ethnopharmacology. 219: 126-132. doi: 10.1016/j.jep.2018.03.014. PMID: 29545209. Select item 29234446.<br><br>
                Alonso-Castro AJ, Zapata-Morales JR, Arana-Argáez V, Torres-Romero JC, Ramírez-Villanueva E, Pérez-Medina SE, Ramírez-Morales MA, Juárez-Méndez MA, Infante-Barrios YP, Martínez-Gutiérrez F, <b>Carranza-Álvarez C</b>, Isiordia-Espinoza MA, Flores-Santos A. (2018). Pharmacological and toxicological study of a chemicalstandardized ethanol extract of the branches and leaves from Eysenhardtia polystachya (Ortega) Sarg. (Fabaceae). J Ethnopharmacology; 224:314-322. doi: 10.1016/j.jep.2018.06.016.<br><br>
                Alonso-Castro AJ, Ruiz-Padilla AJ, Ruiz-Noa Y, Alba-Betancourt C, Domínguez F, Ibarra-Reynoso LDR, Maldonado-Miranda JJ, Carranza-Álvarez C, Blanco-Sandate C, Ramírez-Morales MA, Zapata-Morales JR, Deveze-Álvarez MA, Mendoza-Macías CL, Solorio-Alvarado CR, Rangel-Velázquez JE. (2018). Self-medication practice in pregnant women from central Mexico Saudi Pharm J.; 26(6):886-890. doi: 10.1016/j.jsps.2018.03.008.<br><br>
                Luis J. Castillo-Pérez, Domingo Martínez-Soto, Juan J. Maldonado-Miranda, Angel J. Alonso-Castro <b>Candy Carranza-Álvarez*</b> (2019). The endemic orchids of Mexico: a review. Biologia (2019) 74: 1. <a href="https://doi.org/10.2478/s11756-018-0147-x">https://doi.org/10.2478/s11756-018-0147-x</a>.<br><br>
                Wong-Arguelles C, Alonso-Castro AJ, <b>Carranza-Alvarez C*</b> (2018) "In situ phytoremediation in Mexico: a review" has been successfully submitted online and is presently being given full consideration for publication in "CLEAN - Soil, Air, Water". Manuscript number is: clen.201800357. En revisión.<br><br>
                Mballa, L.V.*, <b>Carranza Alvarez C.</b>, Maldonado-Miranda J.J. (2011). Perspectivas de planificación para la conservación del área: Sierra del Abra, Tanchipa. Ide@s CONCYTEG (6)78:1440-1455. ISSN: 2007-2716.<br><br>
                <b>Candy CARRANZA-ÁLVAREZ</b>; Ma. Catalina ALFARO-DE LA TORRE*; Pedro MEDELLIN MILAN; Ana Luisa PEREZ-SORIANO Water Program of the UASLP. Water quality management for a sustainable supply. Journal of Natural Resources and Development (JNRD), CNRD. An electronic journal of Center for Natural Resources and Development, Octubre, 2013.<br><br>
                <b>Candy Carranza Álvarez</b>, Alondra Torres Rodríguez; Dr. Nahúm Medellín Castillo; Ana Luisa Pérez Soriano; Pedro Medellín Milán; Ma. Catalina Alfaro de la Torre. (2013) Assessment of groundwater quality in rural communities of the highlands of San Luis Potosí, for the sustainable supply. Journal of Natural Resources and Development (JNRD), CNRD. An electronic journal of Center for Natural Resources and Development. 1-10.</li><br>
                M. Carrillo, D. Zavala, B. Alvarado, A. Reyes y <b>C. Carranza</b>. (2014). Experiencias de un cuerpo académico hacia su consolidación. Experiencias en la formación y Operación de Cuerpos Académicos, Handbook.<br><br>
                Maldonado Miranda-Juan José, <b>Carranza Alvarez Candy</b>, Hernández Morales Alejandro, Cappello García Héctor Manuel. (2015). La Administración Pública en la conservación de un área natural protegida: Reserva de la Biosfera Sierra del Abra Tanchipa. Revista Administración y Finanzas 2(2): 193-201. ISSN: 2410-342X.<br><br>
                Rolón-Cárdenas, Gisela Adelina, Hernández-Morales, Alejandro, <b>Carranza-Álvarez, Candy</b>, Maldonado-Miranda, Juan José (2015). Establecimiento de un sistema in vitro para evaluar el efecto tóxico del Cadmio en la arquitectura radicular de plantas (2015). Revista de Ciencias Naturales y Agropecuarias 2(2): 255-262. ISSN 2410-356X.
              </p><br>
              <strong>Artículos de divulgación</strong><br><br>
              <p>
                Claudia Moctezuma-Granados; Omar Cruz-Santiago, <b>Candy Carranza-Álvarez</b>, Diana ZavalaCuevas, Sonia H. Soriano-Pérez (2012). Tecnologías sustentables: uso de Pistia stratiotes (lechuga acuática) para la remoción de contaminantes del agua. Red Internacional de Investigadores en Ciencias de la Gestión (REINICIG) 2º. Congreso Internacional en Ciencias de la Gestión. Artículo en extenso. Gestión, innovación y tendencias socioeconómicas 3-26 ISBN 978-607-7856-77-1.<br><br>
                <b>Candy Carranza Álvarez</b>; Nahúm Andrés Medellín Castillo (2015). Importancia de la Química Ambiental en nuestros Días. Revista Universitarios Potosinos. Revista de Divulgación Científica. (185): 10-13. ISBN 9771870169005.<br><br>
                Diana Zavala Cuevas, Roberto Rico Martínez, <b>Candy Carranza-Álvarez</b>. (Julio, 2016). Zooplancton dulceacuícola para la determinación de la calidad del agua. Universitarios Potosinos, No. 201, ISSN 18701698.<br><br>
                <b>Candy Carranza Álvarez</b> (Septiembre 2016). Micropropagación de orquídeas del Humedal natural Ciénega de Tamasopo. Universitarios Potosinos, No. 201, ISSN 18701698.
              </p><br>
              <strong>Libros</strong><br><br>
              <p>
                <b>Candy Carranza Álvarez</b>, Alejandro Hernández Morales (2015). Tendencias de Investigación en Ciencias Naturales y Exactas. (162 paginas).  ISBN-978-607-9453-11-4, México, Editorial UASLP.<br><br>
                Juan José Maldonado Miranda, <b>Candy Carranza Álvarez</b> (2017). La importancia de la tutoría en el desempeño académico del estudiante universitario. Editorial Universitaria UASLP. ISBN: 978-607-9453-86-2. Páginas 38.
              </p>
              <strong>Capítulos en libros</strong><br><br>
              <p>
                <b>Carranza Álvarez C</b>; Maldonado Miranda J.J; (2012). Gestión Ambiental. En Carrillo Inungaray M.L; Zavala Cuevas D. Gestión de la calidad en el área Químico Biológica. (pág. 9-72). México, Editorial Porrúa.<br><br>
                <b>Carranza Álvarez C</b>; Figueroa Zúñiga L.A; Hernández Morales A; Hernández Benavides D; Medellín Castillo N (2014). Ciencias Naturales y Exactas Handbook T-II Determinación de la capacidad de adsorción de Pb (II) en solución acuosa por raíces de Typha latifolia (Espadaña) (pag 241-248). México, Editorial ECORFAN.<br><br>
                Maria L. Carrillo-Inungaray, Jorge Antonio Trejo-Ramirez, Abigail Reyes-Munguia, <b>Candy Carranza-Alvarez</b> (2018). Use of Nanoparticles in the Food Industry: Advances and Perspectives. Impact of Nanoscience in the Food Industry. CHAPTER 15. Elselvier <a href="http://dx.doi.org/10.1016/B978-0-12-811441-4.00015-7">http://dx.doi.org/10.1016/B978-0-12-811441-4.00015-7</a>.
              </p>
            </div>
          </div>
        </div> --}}
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