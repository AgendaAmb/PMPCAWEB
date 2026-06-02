
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. ABRAHAM CÁRDENAS TRISTÁN</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/AbrahamCardenasTristan.jpg')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Dr. Manuel Nava No. 8, Zona Universitaria Poniente <br>
            C.P. 78290, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-2330 Ext. 6048<br>
            <a href="mailto:abraham.cardenas@uaslp.mx" style="color:rgb(0, 178, 227)">abraham.cardenas@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="{{asset('storage/CV/Perfil_profesionalAcardenas.pdf')}}">Perfil profesional</a>
            <a target="_blank" href="{{asset('storage/CV/Cardenas_Tristan_Abraham.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/qUQAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0003-1807-1715"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=50861013700"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                    <li>Geomática aplicada al manejo de riesgos urbanos y ambientales</li>
                  </ul><br>

                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                    <li>Gestión integral del agua, modelado de recursos hídricos, su distribución y aprovechamiento</li>
                    <li>Manejo de riesgos ambientales, riesgos urbanos y rurales, análisis de deformaciones del suelo y modelado para riesgos en protección civil</li>
                    <li>Variabilidad climática, análisis de concentración de la energía solar y manejo de cuencas atmosféricas</li>
                </ul><br>
                 <!--<li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Peñaloza Guerrero Cynthia Marisol. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3869">Flood resilience assessment, a case study at Ciudad Valles, San Luis Potosí, Mexico.</a></li>
                  <li>Arce Mojica Teresa de Jesús. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3978/MCA1AMT201401.pdf?sequence=3&isAllowed=y">Developing a methodological approach for a national risk index for Mexico.</a></li>
                  <li>Butz Katharina. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3856/MCA1BKA201401.pdf?sequence=3&isAllowed=y">Drought vulnerability assessment in northern-central Chile.</a></li>
                  <li>Taller Daniela. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3962">Visiones para la rehabilitación y gestión de paisajes degradados en la mata atlántica de Río de Janeiro, Brasil.</a></li>
                  <li>Meza Rodríguez María Isabel. 2017. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4516/MCA1MRM201701.pdf?sequence=1&isAllowed=y">Drought risk index in Rio de Janeiro state.</a></li>
                  <li>Nuñez Ramírez Santiago. 2017. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4520/MCA1NRS201701.pdf?sequence=1&isAllowed=y">Lessons learned from the 2011 landslide event in Nova Friburgo, Brazil? - A resilience study on the community and municipality levels.</a></li>
                  <li>Lienhart Karla. 2020. Flash floods in Matehuala, Mexico: an index-based risk analysis </li>
                  <li>Serano Claudelle Anna. 2020. Hurricane resilience and food security in caribbean small island developing states: a study of the commonwealth of Dominica</li>
                  <li>Pirazán Palomar Laura Liseth. 2020. The role or urban wetlands in disaster prevention: the case of flodd risk reduction in Bogota, Colombia</li>
                  <li>Silva Santelices Carolina Alexandra Dolores. 2020. Urban wetlands and resilience to climate change: a case study of Valdivia, Chile</li>
                  <li>Ramos Gálvez, Alejandra. 2023. Mexico City's Community Resilience to Climate Change: Perception of Flooding Risks in Ecatepec, México</li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Stevens Vázquez Guillermo Sigfrido. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/4170">Análisis espacial de la vulnerabilidad hídrica en la zona metropolitana de la ciudad de San Luis Potosí-Soledad de Graciano Sánchez, México.</a></li>
                  <li>Ortiz Liñán Mónica Elena. 2012. Propuesta de un sistema de información geográfica, como instrumento de gestión del agua en la ciudad de San Luis Potosí, México</li>
                  <li>Herrera Pérez Iván Leonardo. 2012. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3640/MCA1SUB01201.pdf?sequence=1&amp;isAllowed=y">Análisis de la susceptibilidad a la subsidencia en el estado de San Luis Potosí (México) como herramienta para la gestión ambiental.</a></li>
                  <li>León Rojas Gloria Isabel. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3839/MCA1LRG201401.pdf?sequence=3&isAllowed=y">Evaluación de la susceptibilidad a incendios forestales en San Luis Potosí, México, una contribución a la gestión del riesgo.</a> (Co-dirección)</li>
                  <li>Navarro Flores Diana Elizabeth. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3873">Propuesta de un programa de comunicación de riesgos por subsidencia del terreno en la zona metropolitana de San Luis Potosí-Soledad de Graciano Sánchez, México.</a></li>
                </ul>
               <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <p>

                </p>
              </ol>
            </div>-->
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <strong>Perfil Profesional</strong>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Especialista en el uso de las Ciencias y Tecnologías Geoespaciales, denominadas también como Ciencias Geomáticas/Geoinformáticas. Dichas disciplinas me permiten ejercer aplicaciones y análisis para diversos estudios en el ámbito de la protección al medio ambiente y el manejo de riesgos ambientales, la evolución y crecimiento de las ciudades, sus municipios, su urbanización, el conocimiento y manejo de los problemas demográficos, el ordenamiento y la planeación territorial, y el aprovechamiento de recursos naturales. Dentro de mis actuales proyectos, analizo sobre las tendencias para el manejo de ciudades sustentables (Smart Cities) en lo respectivo a la movilidad urbana, el manejo y distribución del agua, la gestión integral del agua, el derecho y la gobernanza del agua, la contaminación atmosférica, la variación climática, el manejo de la propiedad del suelo y los riesgos del fenómeno de la subsidencia en zonas urbanas. Así mismo, analizo y desarrollo peritajes federales (Topografía, Deslindes Territoriales, Invasiones y Derechos de Vía, Determinación de Zonas Federales Hídricas, Estudios Topográfico-Hidrológicos, Peritajes Judiciales en Geolocalización y Reconstrucción de Hechos Delictivos/Mecánica de Hechos, Peritajes en Ciencias Ambientales, en Urbanismo, Peritajes en Ingeniería Geomática, Informática Forense). De igual manera, incursiono en estudios periciales de Impactos Ambientales, Impactos Urbanos, Viales y los Impactos del Cambio de Uso de Suelo, Desarrollo Urbano y Ordenamiento Territorial.</p>
              <p>Para tales temáticas de investigación aplico las siguientes Ciencias y Tecnologías Geoespaciales: Sistemas de Posicionamiento por Satélite (GPS-GNSS), Sistemas de Información Geográfica (SIG), Percepción Remota, Bases de Datos Espaciales, Geoestadística,  Análisis Espacial,  Interferometría, Cartografía, Fotogrametría, Topografía, Geodesia, Geofísica, Hidrología, Sistemas Cartográficos Web y el uso de Vehículos Aéreos No Tripulados (VANT´s).
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <strong>Publicaciones</strong>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Artículos científicos</strong><br><br>
              <p>
                <ul>
                  <li><b>Cárdenas-Tristán Abraham</b>, Galván-Medina Sergio Alfredo, Hao Wu, Reyes-Cardenas Oscar and Cisneros-Almazán Rodolfo. “Gentrification as a phenomenon affecting water use in real estate developments”. IOP Conf. Series: Earth and Environmental Science. Aceptado para publicación 2025.</li><br>
                  <li>Cruz-González M., Rivera-González J. G., <b>Cárdenas-Tristán A.</b>, Mendezcarlo-Silva V. “Challenges of Geospatial Information Governance as a Key Tool for Proper Land Management.” IOP Conf. Series: Earth and Environmental Science. Aceptado para publicación 2025.</li><br>
                  <li>Cisneros-Vidales Alicia Anahí, Ramos-Palacios Carlos Renato, <b>Cardenas-Tristan Abraham</b>, Ratih Fitria Putri. “Integrated Urban-Environmental-Water Management for Resilience: Transversalization for Disaster Risk Reduction and Climate Change Adaptation in Cities”. IOP Conf. Series: Earth and Environmental Science. Aceptado para publicación 2025.</li><br>
                  <li><b>Cárdenas-Tristan A.</b>, Wahyuni Febriyanti Yafendi, Nur Aini, Andi Iriadi Cahya, Yabes Hariati Karma, Wiwik Puji Mulyani, Ratih Fitria Putri. “Analyzing Poverty Heterogeneity in Regencies/ Municipalities Sulawesi Selatan through Cluster Analysis”. IOP Conf. Series: Earth and Environmental Science. Aceptado para publicación 2025.</li><br>
                  <li><b>Abraham Cárdenas-Tristán</b>, Karen Lizeth Cáceres Ruiz, Oscar Reyes-Cárdenas, Wu Hao, Guadalupe Galindo-Mendoza, Cristobal Aldama Aguilera and Hilario Charcas Salazar. "Water availability in the Sierra de Álvarez, San Luis Potosí, México". Tecnología y Ciencias del Agua Journal, IMTA. Aceptado para publicación 2025.</li><br>
                  <li>Guadalupe Galindo-Mendoza, <b>Abraham Cárdenas-Tristán</b>, Pedro Pérez Medina, Rita Schwentesius Rindermann, Tomas Rivas García, Carlos Contreras Servin and Oscar Reyes-Cárdenas. "Agroecological Alternatives for Substitution of Glyphosate in Orange Plantations (Citrus sinensis) Using GIS and UAVs". Drones Journal MDPI. 9(6), 398. 2025. <a href="https://doi.org/10.3390/drones9060398" target="_blank">https://doi.org/10.3390/drones9060398</a></li><br>
                  <li><b>Abraham Cárdenas-Tristán</b>, Sergio Alfredo Galván Medina, Hao Wu, Oscar Reyes-Cárdenas, Rodolfo Cisneros Almazán and Guadalupe Galindo-Mendoza. "Urban Development with Gentrification Traces And Its Effects On Drinking Water Consumption In San Luis Potosí City". Water Journal MDPI. 2025. <a href="https://doi.org/10.3390/w17081111" target="_blank">https://doi.org/10.3390/w17081111</a></li><br>
                  <li><b>Abraham Cárdenas-Tristán</b>, Sergio Alfredo Galván Medina, Hao Wu, Oscar Reyes-Cárdenas, Rodolfo Cisneros Almazán. "Evaluation of water use impacts caused by real estate development with gentrification traits in the metropolitan area of San Luis Potosí". Innovations in Aerospace Science and Technology. Innnova Aerosp Sci Technol 2(1): 001-010. DOI: <a href="https://dx.doi.org/10.17352/iast.000003" target="_blank">https://dx.doi.org/10.17352/iast.000003</a>. 2024.</li><br>
                  <li><b>Abraham Cárdenas-Tristán</b>, Karen Roxana Méndez-Hernández, Hao Wu, Andrés Gerardo Castro-Ovalle, Ana Gisela Reyes-Alvarado, María Guadalupe-Galindo-Mendoza, and Oscar Reyes-Cárdenas, "Spatiotemporal analysis of water reservoirs at San Luis Potosí state, Mexico, from 1990 to 2015". Water Science. Taylor & Francis. Vol. 37, 2023. Issue 1 <a href="https://doi.org/10.1080/23570008.2023.2259662" target="_blank">https://doi.org/10.1080/23570008.2023.2259662</a>. 2023</li><br>
                  <li><b>Abraham Cárdenas-Tristán</b>, Andrés Gerardo Castro-Ovalle, Oscar Reyes-Cárdenas, María Guadalupe Galindo-Mendoza. "Evaluation of Net Radiation in San Luis Potosí City–México, with Remote Sensing Processes". Book Climate Change-Recent Observations. IntechOpen. DOI: <a href="https://www.intechopen.com/chapters/86753" target="_blank">10.5772/intechopen.110707</a>. Edited by Terence Epule Epule. 2023.</li><br>
                  <li>Julio Hernández-de-Torres, Clara Ávila-Montoya, Luis Felipe Lastras-Martínez, Alfonso Lastras-Martínez, David Enrique Flores-Jiménez, <b>Abraham Cárdenas-Tristán</b>, Marcos Algara-Siller. “Remote sensing of atmospheric nitrogen dioxide in an urban area in central northern Mexico”. Atmosfera, Vol. 36. Issue 2. DOI: <a href="https://doi.org/10.20937/ATM.53032" target="_blank">https://doi.org/10.20937/ATM.53032</a>. Centro de Ciencias de la Atmósfera, UNAM. 2023.</li><br>
                  <li><b>Abraham Cárdenas Tristán</b>, Ashilah Putri Mandiri, Hani Verdiant, Yosi Yoseva and Ratih Fitria Putri. “Analysis of Carrying Capacity of Crop Agricultural Land in Banten Province”. E3S Web of Conferences 468, 06002 (2023). <a href="https://doi.org/10.1051/e3sconf/202346806002" target="_blank"> https://doi.org/10.1051/e3sconf/202346806002</a></li><br>
                  <li>Hilda Guadalupe Cisneros Ontiveros, Nahúm Andrés Medellín Castillo, <b>Abraham Cárdenas Tristán</b>, Marisol Castro Cárdenas, César Arturo Ilizaliturri Hernández, Ratih Fitria Putri. “Determination of the Water Quality Index (NFS WQI) of wáter bodies in the Huasteca Potosina, México”. E3S Web of Conferences 325, 08002 (2021). ICST 2021. <a href="https://doi.org/10.1051/e3sconf/202132508002" target="_blank">https://doi.org/10.1051/e3sconf/202132508002</a>. Published by EDP Sciences</li><br>
                  <li>María Inés Navarro-Hernández, <b>Abraham Cárdenas Tristán</b>, Ratih Fitria Putri. “Geostatistical analysis of static level evolution between 1995-2005 and 2007-2017 in San Luis Potosí Aquifer, México”. E3S Web of Conferences 325, 08005 (2021). ICST 2021. <a href="https://doi.org/10.1051/e3sconf/202132508005" target="_blank">https://doi.org/10.1051/e3sconf/202132508005</a>. Published by EDP Sciences.</li><br>
                  <li>Mega Rakhmatika, Chafda Larasati, <b>Abraham Cárdenas Tristán</b>, Ratih Fitria Putri, “Settlement Quality Mapping Analysis Using Google Earth Imagery and GIS in Sorosutan Subdistrict, Yogyakarta City”. E3S Web of Conferences 325, 07002 (2021). ICST 2021. <a href="https://doi.org/10.1051/e3sconf/202132507002" target="_blank">https://doi.org/10.1051/e3sconf/202132507002</a>. Published by EDP Sciences.</li><br>
                  <li>Jamal Habibur Rahman, Faradisa Hilya Mumtaza, Rahmatullah Tri Nanda Putra, Fachrurizal Sai Kintoro, Rezis Rahayuli, Anisa Octa Nur’aini, Nurul Ramadhani, Mya Dwi Rostika, <b>Abraham Cárdenas Tristán</b> and Ratih Fitria Putri. “COVID-19 and Gender Role in Unemployment: How Women in Special Capital Region of Jakarta is Less Likely to be Unemployed During Economic Disturbance”. E3S Web of Conferences 325, 06014 (2021). ICST 2021. <a href="https://doi.org/10.1051/e3sconf/202132506014" target="_blank">https://doi.org/10.1051/e3sconf/202132506014</a>. Published by EDP Sciences.</li><br>
                  <li>Hernández de Torres J., Ávila Montoya C., Lastras Martínez L.F., Flores Jiménez D.E., <b>Cárdenas A.</b>, Algara Siller M. “Remote sensing of atmospheric nitrogen dioxide in an urban area in central northern México”. Atmosfera, UNAM. DOI: <a href="https://www.revistascca.unam.mx/atm/index.php/atm/article/view/53032" target="_blank">10.20937/ATM.53032</a>. September 2021.</li><br>
                  <li>A. G. Castro - Ovalle, <b>A. Cárdenas-Tristán</b>, J. A. Amador-Nieto, R. F. Putri and R. A. Zahra.  “Analysing the land use/land cover influence on land surface temperature in San Luis Potosí Basin, México using remote sensing techniques”. IOP Conf. Series: Earth and Environmental Science 686 (2021) 012029. DOI: <a href="https://iopscience.iop.org/article/10.1088/1755-1315/686/1/012029" target="_blank">10.1088/1755-1315/686/1/012029</a>. IOP Publishing.</li><br>
                  <li>A. G. Castro - Ovalle, <b>A. Cárdenas-Tristán</b>, J. A. Amador-Nieto, R. F. Putri and R. A. Zahra.  “Analysing the land use/land cover influence on land surface temperature in San Luis Potosí Basin, México using remote sensing techniques”. IOP Conf. Series: Earth and Environmental Science 686 (2021) 012029. <a href="https://iopscience.iop.org/article/10.1088/1755-1315/686/1/012029" target="_blank">DOI:10.1088/1755-1315/686/1/012029</a>. IOP Publishing.</li><br>
                  <li><b>A. Cárdenas-Tristán</b>, M. Rivera-Saldaña, A. G. Castro - Ovalle, O. Reyes-Cárdenas, T. B. Waskita and R. F. Putri. “A proposal for the determination of a Protected Natural Area (PNA) of the Wirikuta zone in the state of San Luis Potosi, México”. IOP Conf. Series: Earth and Environmental Science 686 (2021) 012027. DOI: <a href="https://iopscience.iop.org/article/10.1088/1755-1315/686/1/012027" target="_blank">10.1088/1755-1315/686/1/012027</a>. IOP Publishing.</li><br>
                  <li><b>A. Cárdenas-Tristán</b>, O. Reyes-Cárdenas, E. J. Treviño-Garza, A. G. Reyes-Alvarado, R. F. Putri and J. Thio. “Catalogue of representative scales to visualize different coverages in Google Earth”. IOP Conf. Series: Earth and Environmental Science 686 (2021) 012038. DOI: <a href="https://iopscience.iop.org/article/10.1088/1755-1315/686/1/012038" target="_blank">10.1088/1755-1315/686/1/012038</a>. IOP Publishing.</li><br>
                  <li>Navarro-Hernández, M.I.; Tomás, R.; Lopez-Sanchez, J.M.; <b>Cárdenas-Tristán, A.</b>; Mallorquí, J.J. “Spatial Analysis of Land Subsidence in the San Luis Potosi Valley Induced by Aquifer Overexploitation Using the Coherent Pixels Technique (CPT) and Sentinel-1 InSAR Observation”. Remote Sens. 2020, 12(22), 3822. <a href="https://www.mdpi.com/2072-4292/12/22/3822" target="_blank">https://doi.org/10.3390/rs12223822</a>.</li><br>
                  <li>Hao Wu, Anqi Lin, Keith C. Clarke, Wenzhong Shi, <b>Abraham Cárdenas-Tristán</b> & Zhenfa Tu (2020): “A comprehensive quality assessment framework for linear features from Volunteered Geographic Information”, International Journal of Geographical Information Science, DOI: <a href="https://www.tandfonline.com/doi/full/10.1080/13658816.2020.1832228" target="_blank">10.1080/13658816.2020.1832228</a>.</li><br>
                  <li><b>A Cárdenas Tristán</b>, MD Romano García, O Reyes Cárdenas, AG Castro Ovalle and RF Putri. (2020), ”Analysis of sinking incidence in the San Luis Potosí Valley, México”. The 3rd Environmental Resources Management in Global Region”. IOP Conf. Series: Earth and Environmental Science 451 (2020) 012009. DOI: <a href="https://iopscience.iop.org/article/10.1088/1755-1315/451/1/012009" target="_blank">10.1088/1755-1315/451/1/012009</a>. IOP Publishing Ltd.</li><br>
                  <li>MG Castro Lazcarro, <b>A Cárdenas Tristán</b>, V Davydova Belistkaya, AG Castro Ovalle and RF Putri. (2020), ”Comparation of two climate methodologies on Lerma Chapala basin: moving mean and climate variability indices with RClimDex”. The 3rd Environmental Resources Management in Global Region. IOP Conf. Series: Earth and Environmental Science 451 (2020) 012023. DOI: <a href="https://iopscience.iop.org/article/10.1088/1755-1315/451/1/012023" target="_blank">10.1088/1755-1315/451/1/012023</a>. IOP Publishing Ltd.</li><br>
                  <li>Anqi Lin, Hao Wu, Guanghua Liang, <b>Abraham Cárdenas-Tristán</b>, Xia Wu, Chong Zhao, Dan Li. (2020), “A big data-driven dynamic estimation model of relief supplies demand in urban flood disaster”. International Journal of Disaster Risk Reduction. Elsevier, Vol 49. <a href="https://doi.org/10.1016/j.ijdrr.2020.101682" target="_blank">https://doi.org/10.1016/j.ijdrr.2020.101682</a>.</li><br>
                  <li><b>A Cárdenas Tristán</b>, JC Martínez Ortiz, AG Castro Ovalle, O Reyes Cárdenas and RF Putri. (2020), ”Temporal analysis of net radiation in the metropolitan area of San Luis Potosí - México using landsat 5 and 8 satellite images”. The 3rd Environmental Resources Management in Global Region. IOP Conf. Series: Earth and Environmental Science 451 (2020) 012022. DOI: <a href="https://iopscience.iop.org/article/10.1088/1755-1315/451/1/012022" target="_blank">10.1088/1755-1315/451/1/012022</a>. IOP Publishing Ltd.</li><br>
                  <li>L Angelino Pérez, <b>A Cárdenas Tristán</b>, M López Barragán, AG Castro Ovalle and RF Putri. (2020), ”Nitrogen presence diagnosis in the Media Luna water spring, Rioverde-Cd. Fernández, San Luis Potosí, México”. The 3rd Environmental Resources Management in Global Region. IOP Conf. Series: Earth and Environmental Science 451 (2020) 012044. DOI: <a href="https://iopscience.iop.org/article/10.1088/1755-1315/451/1/012044" target="_blank">10.1088/1755-1315/451/1/012044</a>. IOP Publishing. Ltd.</li><br>
                  <li>Hao Wu, Di Xiong, Jian Yang, Keith C. Clarke, <b>Abraham Cárdenas-Tristán</b>, Nan Lu, Xudong Xing (2019), “An improved Kalman filter for high-rate GNSS deformation monitoring time series with gross error and colored noise”. Journal GPS Solutions. Springer Journals Editorial Office. En revisión.</li><br>
                  <li>Hao Wu, Xiang Zhang, Wenzhong Shi, Shaoxian Song, <b>Abraham Cárdenas-Tristán</b>, Kui Li. (2019),  “An accurate and robust region-growing algorithm for plane segmentation of TLS point clouds using a multiscale tensor voting method”. IEEE Journal of Select Topics in Applied Earth Observations and Remote Sensing. 10.1109/JSTARS.2019.2936662</li><br>
                  <li>Reyes-Cárdenas, O., Treviño-Garza, E.J., Jiménez-Pérez J., Aguirre-Calderón O.A., Cuellar-Rodríguez, L.G., Flores Garnica, J.G., <b>Cárdenas-Tristán, A.</b>, (2019).  “Modelización de biomasa forestal aérea mediante técnicas deterministas y estocásticas”. Madera y Bosques, ISNN: 2448-7597. Vol. 25,  Num. 1.  e2511622, <a href="https://doi.org/10.21829/myb.2019.2511622" target="_blank">https://doi.org/10.21829/myb.2019.2511622</a>.</li><br>
                  <li>Reyes-Cárdenas, O., Treviño-Garza, E.J., Jiménez-Pérez J., Aguirre-Calderón O.A., Cuellar-Rodríguez,  L.G., Flores Garnica, J.G., <b>Cárdenas-Tristán, A.</b>, (2019).  “Zonificación forestal bajo el concepto de Áreas de Respuesta Homogénea”. Investigaciones Geográficas, ISNN: 2448-7279.  Num. 98. <a href="https://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/59698" target="_blank"> DOI: https://doi.org/10.14350/rig.59698</a></li><br>
                  <li><b>Cárdenas-Tristán, A.</b>, Méndez-Hernández. K.R., Castro-Ovalle, A.G., Reyes-Cárdenas, O., (2019).   “Multitemporal analysis of the wáter Spatial distribution though NDWI modeling: Case study in the San Luis Potosí state, México”. Journal: Intangible Capital. <a href="https://www.intangiblecapital.org/index.php/ic" target="_blank">https://www.intangiblecapital.org/index.php/ic</a></li><br>
                  <li>Reyes-Cárdenas, O., Treviño-Garza, E.J., Jiménez-Pérez J., Aguirre-Calderón O.A., Cuellar-Rodríguez, L.G., Flores Garnica, J.G., <b>Cárdenas-Tristán, A.</b>, Buendía-Rodríguez, E. (2017).  “Dinámica de la biomasa aérea derivada de un programa de deforestación en San Luis Potosí”. Revista Mexicana de Ciencias Forestales, ISNN: 2448-6671. Vol. 8,  Num. 39. Pp. 45-57, INIFAP. <a href="https://cienciasforestales.inifap.gob.mx/index.php/forestales/article/view/42" target="_blank">https://cienciasforestales.inifap.gob.mx/index.php/forestales/article/view/42</a></li><br>
                  <li><b>Cárdenas-Tristán A.</b>, Treviño-Garza, E.J., Aguirre-Calderón O.A., Jiménez-Pérez J., González-Tagle M.A.,  (2015). “Análisis de Datos Vectoriales en el uso de Recursos Naturales”. Ciencia UANL, ISNN: 2007-1175. Vol. 71, Pp. 83-90, Indice de Revistas Mexicanas de Divulgación Científica y Tecnológica. <a href="https://cienciauanl.uanl.mx/?p=3201" target="_blank">https://cienciauanl.uanl.mx/?p=3201</a>. Ed. UANL</li><br>
                  <li><b>Cárdenas-Tristán A.</b>, (2014). “Siddgeo, una alternativa para el análisis de datos vectoriales”. Universitarios Potosinos, No. 179,  ISSN: 1870-1698. Ed. UASLP, UP., Septiembre, 2014.</li><br>
                  <li>Guillermo Sánchez-Díaz, Germán Díaz-Sánchez, Miguel Mora-González, Ivan Piza-Davila, Carlos Aguirre-Salado, Guillermo Huerta-Cuellar, Oscar Reyes-Cardenas, <b>Abraham Cárdenas-Tristán</b>, (2013). “An evolutionary algorithm with acceleration operator to generate a subset typical testors”, Pattern Recognition Letters, © Elsevier. Publicado. <a href="https://www.sciencedirect.com/science/article/abs/pii/S0167865513004297?via%3Dihub" target="_blank">http://dx.doi.org/10.1016/j.patrec.2013.11.006</a>.</li><br>
                  <li>Reyes-Cárdenas O., <b>Cárdenas-Tristán A.</b>, (2013). “Programas de Licenciatura en Geomática y la integración de la Red Geomática en México”, Eleventh LACCEI Latin American and Caribbean Conference for  Engineering and Technology ( LACCEI’2013)”Innovation in Engineering, Technology and Education for Competitiveness and Prosperity” August 14 - 16, 2013. Cancun, Mexico. Junio 2013. <a href="https://www.laccei.org/LACCEI2013-Cancun/TechnicalPapers/MX025.pdf" target="_blank">https://www.laccei.org/LACCEI2013-Cancun/TechnicalPapers/MX025.pdf</a></li><br>
                  <li><b>Cárdenas-Tristán A.</b>, Treviño-Garza, E.J., Aguirre-Calderón O.A., Jiménez-Pérez J., González-Tagle M.A., Antonio-Némiga X. (2013). “Spatial technologies to evaluate vectorial samples quality in maps production”, Investigaciones Geográficas, Boletín del Instituto de Geografía, UNAM. ISSN 0188-4611, Num. 80. pp.111-128.<a href="https://www.mdpi.com/2072-4292/12/22/3822" target="_blank">https://www.mdpi.com/2072-4292/12/22/3822</a>. Publicado.</li>
                </ul>
              </p>
            </div>
          </div>
        </div>      
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <strong>Otras Direcciones de tesis</strong>
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Directed theses</strong><br><br>
              <ul>
                <li>Asesor de Tesis de Posgrado <b>“Diagnóstico de la manifestación de energía eólica para fomentar el desarrollo sostenible en el municipio de Charcas, S.L.P.”</b>, presentada por la Ing. Ana Yael Mayagoitia Vigil, para obtener el grado de Maestría Interdisciplinaria en Ciudades Sostenibles (IMaREC) de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Agosto 2025.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Análisis de Entornos Naturales y Urbanos en San Luis Potosí para la Definición de Criterios de Diseño Interior Sostenible en Viviendas de Interés Social.”</b>, presentada por la LDI. Karina Sumire Ortiz Gálvez, para obtener el grado de Maestría Interdisciplinaria en Ciudades Sostenibles (IMaREC) de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Agosto 2025.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“La gobernanza en la ejecución de políticas públicas en materia de ordenamiento territorial sostenible de la ciudad de San Luis Potosí y la zona conurbada.”</b>, presentada por el Arq. Miguel Iván Hernández López, para obtener el grado de Maestría Interdisciplinaria en Ciudades Sostenibles (IMaREC) de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. 2025.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Modelo de distribución espacial para el manejo integral del agua en la cuenca del Valle de San Luis Potosí y su relación con la variabilidad climática.”</b>, presentada por la Ing. Yessica Cruz Hernández, para obtener el grado de Maestría Interdisciplinaria en Ciudades Sostenibles (IMaREC) de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Agosto 2025.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Manejo de cuencas atmosféricas y evaluación de Dióxido de Nitrógeno (NO₂) con relación a la variabilidad climática en el valle de San Luis Potosí a partir del análisis espacial”</b>, presentada por el Ing. Aldo García Muñoz, para obtener el grado de Maestría Interdisciplinaria en Ciudades Sostenibles (IMaREC) de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. 2025.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Modelo de distribución espacio-temporal para evaluar el riesgo ambiental del agua en la cuenca del Río Gallinas”</b>, presentada por la Ing. Gloria Mariel Fonseca Morazán, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Enero, 2024.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Correlación entre el nivel freático del acuífero y la presencia del fenómeno de subsidencia en el Valle de San Luis Potosí”</b>, presentada por el Ing. Omar Herrera García, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Septiembre, 2023.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Evaluación de los impactos en el uso de agua potable causados por el desarrollo inmobiliario con rasgos de gentrificación en la zona metropolitana de San Luis Potosí”</b>, presentada por el Ing. Sergio Alfredo Galván Medina, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Agosto, 2023.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Análisis para ubicar las zonas potenciales de recarga e infiltración en el acuífero del valle de Querétaro mediante procesos geoestadísticos y análisis multicriterio.”</b>, presentada por el Ing. Cristóbal González Meza Gómez Farías, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Agosto, 2022.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Análisis ambiental para la integración de agroecosistemas urbanos sustentables en la ciudad de San Luis Potosí, S.L.P., México”</b>, presentada por el Ing. Helios de la Torre Rodríguez, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Octubre, 2022.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Correlación entre la disponibilidad de agua y la concentración de carbono en el Área Natural Protegida - Sierra de Álvarez, mediante procesos de teledetección”</b>, presentada por la Ing. Karen Lizeth Cáceres Ruiz, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Diciembre, 2021.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Análisis geoespacial de la interacción entre el uso de suelo y agua en la zona peri-urbana del valle de San Luis Potosí”</b>, presentada por la Ing. María Daniela Romano García, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Septiembre, 2021.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Análisis espacial del acuífero profundo del valle de San Luis Potosí y su vulnerabilidad al fenómeno de la subsidencia con técnicas InSAR.”</b>  En término por la Ing. María Inés Navarro Hernández, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Julio, 2020.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Análisis del régimen hidro-meteorológico y efecto del cambio climático en el lago de Chapala, Jalisco.”</b> presentada por la Biol. Miriam Guadalupe Castro Lazcarro, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Julio, 2019.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Desnitrificación superficial del agua de la media luna para evaluar sus impactos de uso a través de un análisis geoespacial.”</b>  presentada por la Ing. Lucero Angelino Pérez, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Julio, 2019.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Análisis multitemporal del uso y aprovechamiento del agua en el Valle de San Luis Potosí.”</b>  presentada por la Ing. María Florencia López Nuñez, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Agosto, 2018.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Estimación del estrés hídrico de Vitis Vinifera mediante percepción remota en zonas de viñedos del municipio de San Luis Potosí.”</b>  presentada por la Ing. Patricia Alegría Núñez, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Agosto, 2018.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Simulación de una red de distribución de agua a través de una reconstrucción geoespacial”</b> presentada por el Ing. Jesús Víctor Pérez Gutiérrez, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Febrero, 2018.</li><br>
                <li>Asesor de Tesis de Posgrado <b>“Estimación del uso y aprovechamiento del agua en el estado de San Luis Potosí a través de un modelo de distribución espacial”</b> presentada por la Ing. Karen Roxana Méndez Hernández, para obtener el grado de Maestría en Tecnología y Gestión del Agua de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Marzo, 2017.</li><br>
                <li>Coasesor de tesis de Maestría, <b>“Diagnóstico de la dinámica de la agricultura periurbana en el valle de San Luis Potosí utilizando un Sistema de información geográfica y posicionamiento global”</b>, con alumna de la Maestría en Hidrosistemas (Opción en irrigación) periodo 2009-2010.</li><br>
              </ul>
              <strong>Direction of Bachelor´s Thesis</strong><br><br>
              <ul>  
                <li>Asesor de Tesis de Licenciatura <b>“Modelación geoespacial de área natural protegida en sierra de san miguelito y su afectación por incendio ocurrido en abril de 2019 empleando técnicas de percepción remota”</b>, presentada por la C. Mónica Vidales Briones, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Febrero 2025.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Determinación de las áreas potenciales para el establecimiento de nuevas sucursales de venta minorista en la Zona Metropolitana de San Luis Potosí”</b>, presentada por el C. Luis Fernando Correa Contreras, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Noviembre, 2023.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Análisis espacial para el monitoreo del tráfico en la problemática de movilidad urbana a través de vehículos aéreos no tripulados”</b>, presentada por la C. Sandra Guadalupe Rivas Olvera, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Octubre, 2021.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Actualización cartográfica digital de las construcciones de inmuebles en predios de las zonas de crecimiento urbano en el municipio del Marqués, Querétaro”</b>, presentada por la C. Yolanda Vázquez Ponce, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Diciembre, 2019.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Análisis espacial para la integración de elementos geológicos describiendo la subsidencia en el valle de San Luis Potosí”</b>, presentada por el C. Fernando Iván López Reyes, para obtener el grado de Ingeniero en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Diciembre, 2019.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Análisis espacial del fenómeno de la subsidencia en el Valle de San Luis Potosí a través del uso de imágenes termográficas”</b>, presentada por la C. Daniela Romano García, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Agosto, 2019.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Análisis Monitorización de la calidad de la señal GPS en estaciones geodésicas fijas de la Red Geodésica Nacional Activa”</b>, presentada por la C. Maribel Niño Gutiérrez, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Julio, 2017.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Geomática aplicada e estudios de impacto ambiental, urbano y vial (caso de estudio en predio ubicado en Santa Rita, Villa de Pozos, S.L.P.).”</b>, presentada por el C. Sergio Alfredo Galván Medina, para obtener el grado de Ingeniero en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Junio, 2016.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Geomática Aplicada al estudio y caracterización de sitios contaminados con hidrocarburos (casos de tomas clandestinas en el estado de México).”</b> presentada por la C. Javier de Jesús Ponce Durán, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Febrero, 2016.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Análisis espacial de la zona -Wirikuta-, situada en la región altiplano del estado de San Luis Potosí, para fines de Peritaje Federal.”</b>, presentada por la C. Maricela Rivera Saldaña, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Enero, 2016.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Geomática Aplicada en la delimitación federal del rio Altamira en su paso por Villa de Reyes, San Luis Potosí, en un tramo de 4 km.”</b>, presentada por el C. Oscar Amin Zapata Mendoza, para obtener el grado de Ingeniero en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Diciembre, 2014.</li><br>
                <li>Asesor de Tesis de Licenciatura <b>“Descripción y análisis del cambio de marco de referencia terrestre internacional (ITRF) para México”</b>, presentada por la C. Nahirobi Anahi Gayosso Torres, para obtener el grado de Ingeniera en Geomática de la Facultad de Ingeniería de la Universidad Autónoma de San Luis Potosí. Noviembre, 2013.</li>
              </ul>  
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <strong>Estancias de investigación en el extranjero</strong>
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ol>
                <li><strong>Estancia de Investigación en el Instituto di Ricerca per la Protezione Idrogeologica (IRPI) - Consiglio Nazionale delle Ricerche.  Perugia - Italy. <a href="https://www.irpi.cnr.it/en/" target="_blank">https://www.irpi.cnr.it/en/</a></strong>
              <p><b>Objetivo:</b> Efectuar estancia de investigación en el extranjero para fortalecer conocimientos con mi quehacer profesional y académico, permitiéndome conocer, compartir y discutir sobre tendencias en la aplicación de tecnologías geoespaciales para el estudio de la hidrología - geohidrología, el manejo sustentable del agua, así como el modelado hidrológico para la recarga de acuíferos beneficiando la planeación territorial y el desarrollo urbano. <b>2024</b>.
              </p>
              <li><strong>Estancia Académica y de Investigación en Universitá degli studi Firenze - Dipartimento di Scienze della Terra, Firenze - Italy. <a href="https://www.dst.unifi.it/" target="_blank">https://www.dst.unifi.it/</a></strong>
              <p><b>Objetivo:</b> Efectuar estancia de investigación en el extranjero para fortalecer conocimientos con mi quehacer profesional y académico, permitiéndome conocer, compartir y discutir sobre tendencias en la aplicación de tecnologías geoespaciales para el estudio de deformaciones del suelo, riesgos hidrológicos, aplicaciones geofísicas, así como el análisis de manejo de riesgos en la planeación territorial y el desarrollo urbano. <b>2023</b>.
              </p>
              <li><strong>Estancia de Investigación en el Instituto di Ricerca per la Protezione Idrogeologica (IRPI) - Consiglio Nazionale delle Ricerche.  Perugia - Italy. <a href="https://www.irpi.cnr.it/en/" target="_blank">https://www.irpi.cnr.it/en/</a></strong>
              <p><b>Objetivo:</b> Efectuar estancia de investigación en el extranjero para fortalecer conocimientos con mi quehacer profesional y académico, permitiéndome conocer, compartir y discutir sobre tendencias en la aplicación de tecnologías geoespaciales para el estudio de la hidrología - geohidrología, el manejo sustentable del agua, así como el análisis de riesgos hidrológicos para la planeación territorial y el desarrollo urbano. <b>2023</b>.
              </p>
              <li><strong>Estancia Académica y de Investigación en Wuhan University of Technology, Wuhan, China.</strong>
              <p><b>Objetivo:</b> Colaboración académica, tecnológica y científica con la Universidad Wuhan University of Technology (<a href="http://english.whut.edu.cn/index.html">http://english.whut.edu.cn/index.html</a>), y con la empresa Wuhan Optics Valley Bei Dou Holding Group Co., Ltd. (<a href="http://www.whggbd.com/en">http://www.whggbd.com/en</a>), para el desarrollo del proyecto denominado: “Tecnologías Geoespaciales y sus Aplicaciones a la Ingeniería,  el caso de Sistemas Globales de Navegación por Satélite y Sistemas de Información Geográfica”. <b>2019</b>.
              </p>
              </li>
              <li>
                <strong>Estancia Académica y de Investigación en Yogyakarta, Indonesia. <a href="https://geo.ugm.ac.id/en/halaman-muka-en/">https://geo.ugm.ac.id/en/halaman-muka-en/</a></strong>
                <p><b>Objetivo:</b> Fortalecer lazos de cooperación académica entre la Universidad Autónoma de San Luis Potosí (UASLP-México) y la Universitas Gadjah Mada (UGM-Yogyakarta-Indonesia), dentro de la cooperación para ejercer Lecture Exchange entre instituciones asociadas a Centers for Natural Resources and Development CNRD - DAAD y bajo el programa de la International Master on Resources Efficient Cities (IMaREC) program. <b>2017</b>.              
                </p>
              </li>
              <li>
                <strong>Estancia Académica y de Investigación en Palos de la Frontera, Huelva – España. <a href="https://www.unia.es/" target="_blank">https://www.unia.es/</a></strong>
                  <p><b>Objetivo:</b> Fortalecer el intercambio académico entre la Universidad Autónoma de San Luis Potosí <b>(UASLP-México)</b> y la Universidad Internacional de Andalucía <b>(UNIA-España)</b>, dentro del programa de movilidad académica entre instituciones asociadas a la Asociación Universitaria Iberoamericana de Posgrado <b>(AUIP) – 2016</b>.
                  </p>
              </li>
              <li><strong>Estancia Académica y de Investigación en Wuhan, China.</strong>
               <p><b>Objetivo:</b> Establecer lazos de colaboración académica, tecnológica y científica con las universidades:  Wuhan University of Technology (<a href="http://english.whut.edu.cn/" target="_blank">http://english.whut.edu.cn/</a>), Wuhan University (<a href="http://en.whu.edu.cn/" target="_blank">http://en.whu.edu.cn/</a>) y con la empresa Wuhan Optics Valley Bei Dou Holding Group Co., Ltd. (<a href="http://www.whggbd.com/en" target="_blank">http://www.whggbd.com/en</a>). <b>2015</b>.  
               </p> 
              </li>
            </ol>
            </div>
          </div>
        </div>        
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <strong>Vinculación</strong>
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ol>
                <li><p><i>Título del proyecto:</i> Spatial modeling of the water integral distribution for a better exploitation - Case study in San Luis Potosi State.</p>
                <p><i>Dependencia:</i> CONAGUA.</p>
                <p><i>Responsable del proyecto:</i> Abraham Cárdenas Tristán.</p>
                <p><i>Colaboradores:</i> Oscar Reyes Cárdenas</p>
                <p><i>Alumnos participantes:</i> Karen Roxana Méndez Hernández, Andrés Gerardo Castro Ovalle</p>
                <p><i>Resultados esperados:</i> Modelo de distribución espacial del agua según análisis de evapotranspiración, cálculo de la vegetación y determinación del Índice Diferencial del Agua Normalizado (NDWI).</p>
                </li><br>
                <li>
                  <p><i>Título del proyecto:</i> Geomatics applied to the subsidence analysis in San Luis Potosi Valley</p>
                  <p><i>Dependencia:</i> INEGI_Ingeniería Geoinformática_Instituto de Geología</p>
                  <p><i>Dependencia:</i> PRODEP.</p>
                  <p><i>Monto:</i> $350,000.00 MN.</p>
                  <p><i>Vigencia:</i> Agosto 2016-Agosto 2020.</p>
                  <p><i>Responsable del proyecto:</i> Abraham Cárdenas Tristán.</p>
                  <p><i>Co-responsables del proyecto:</i> Oscar Reyes Cárdenas, Jorge Pedro García Contreras</p>
                  <p><i>Resultados esperados:</i> Análisis del grado de subsidencia (incidencia de hundimiento) reflejado en el Valle de San Luis Potosí por efectos de la extracción de agua de pozos del acuífero superficial.</p>
                </li><br>
                <li>
                  <p><i>Título del proyecto:</i> Analysis of the hydro-meteorological regime and effect of climate change in Lake Chapala, Jalisco.</p>
                  <p><i>Dependencia:</i> UASLP.</p>
                  <p><i>Vigencia:</i> Agosto 2017-Diciembre 2019.</p>
                  <p><i>Responsable del proyecto:</i> Abraham Cárdenas Tristán.</p>
                  <p><i>Colaboradores:</i> Oscar Reyes Cárdenas</p>
                  <p><i>Alumnos participantes:</i> Miriam Guadalupe</p>
                  <p><i>Resultados generados:</i> Se determinará la tendencia o comportamiento de los efectos del cambio climático en el Lago de Chapala para comprender la degradación del cuerpo de agua.</p>
                </li><br>
                <li>
                  <p><i>Título del proyecto:</i> Simulación de una red de distribución de agua a través de una reconstrucción geoespacial.</p>
                  <p><i>Dependencia:</i> Agua Tratada del Potosí S.A. de C.V.</p>
                  <p><i>Monto (Total del proyecto):</i> $50,000.00 MN.</p>
                  <p><i>Vigencia:</i> Septiembre 2015 - Agosto 2017.</p>
                  <p><i>Responsable del proyecto:</i> Abraham Cárdenas Tristán.</p>
                  <p><i>Colaboradores:</i> Oscar Reyes Cárdenas, Álvaro Chávez Jaime</p>
                  <p><i>Alumnos participantes:</i> Jesús Víctor Pérez Gutiérrez</p>
                  <p><i>Resultados generados:</i> Se determinó un análisis espacial para la implementación de un modelo hidráulico digital de la red de distribución de agua operada por la empresa Agua Tratada del Potosí S.A. de C.V., permitiendo simular distintas propuestas de mejora y ampliación de dicha red.</p>              
                </li><br>
                <li>
                  <p><i>Título del proyecto:</i> Modeling flood prone areas caused by the Altamira River, in its passage by the municipality of Villa de Reyes, San Luis Potosí; México.</p>
                  <p><i>Dependencia:</i> CONAGUA</p>
                  <p><i>Monto (Total del proyecto):</i> $600,000.00 MN.</p>
                  <p><i>Vigencia:</i> Diciembre 2010 - Abril 2013.</p>
                  <p><i>Responsable del proyecto:</i> Abraham Cárdenas Tristán.</p>
                  <p><i>Colaboradores:</i> Oscar Reyes Cárdenas, Antonio Cardona Benavides, Rodolfo Cisneros Almazán.</p>
                  <p><i>Alumnos participantes:</i> Erika del Carmen Vázquez Castillo</p>
                  <p><i>Resultados generados:</i> Se efectuó un deslinde federal del rio Altamira en su paso por el municipio de Villa de Reyes en el estado de San Luis Potosí, con el objeto de verificar invasiones y asentamientos al cauce del rio principal.</p>
                </li><br>
                <li>
                  <p><i>Título del proyecto:</i> Actualización Geohidrológica en el Acuifero Cedral – Matehuala, San Luis Potosí.</p>
                  <p><i>Dependencia:</i> CONAGUA</p>
                  <p><i>Monto (Total del proyecto):</i> $150,000.00 MN.</p>
                  <p><i>Vigencia:</i> Diciembre 2009 - Abril 2010.</p>
                  <p><i>Responsable del proyecto:</i> Abraham Cárdenas Tristán.</p>
                  <p><i>Colaboradores:</i> Oscar Reyes Cárdenas, Antonio Cardona Benavides, Álvaro Chávez Jaime</p>
                  <p><i>Alumnos participantes:</i> Erika del Carmen Vázquez Castillo</p>
                  <p><i>Resultados generados:</i> Se determinó la elevación de los brocales de los pozos del acuífero Cedral – Matehuala, San Luis Potosí. La metodología se llevó a cabo a través de Posicionamiento por Satélite.</p>
                </li><br>
                <li>
                  <p><i>Título del proyecto:</i> Actualización Geohidrológica en el Acuifero Cerritos – Villa Juárez, San Luis Potosí.</p>
                  <p><i>Dependencia:</i> CONAGUA</p>
                  <p><i>Monto (Total del proyecto):</i> $150,000.00 MN.</p>
                  <p><i>Vigencia:</i> Abril 2009 - Agosto 2010.</p>
                  <p><i>Responsable del proyecto:</i> Abraham Cárdenas Tristán.</p>
                  <p><i>Colaboradores:</i> Oscar Reyes Cárdenas, Antonio Cardona Benavides, Álvaro Chávez Jaime</p>
                  <p><i>Alumnos participantes:</i> Erika del Carmen Vázquez Castillo</p>
                  <p><i>Resultados generados:</i> Se determinó la elevación de los brocales de los pozos del acuífero Cerritos – Villa Juárez, San Luis Potosí. La metodología se llevó a cabo a través de Posicionamiento por Satélite.</p>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br><br><br>
</div>

@endsection