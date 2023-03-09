
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. ISRAEL RODRÍGUEZ TORRES</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Israel_Rodriguez_Torres.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería / Instituto de Metalurgia</strong></h5>
        <h5><strong>SNI nivel II.</strong></h5>
        <br>
        <p>
            Sierra Leona #550, Lomas 2a sección<br>
            C.P. 78350, San Luis Potosí, S.L.P., México.<br><br>
            Tel. + 52 (444) 825-4326 Ext. 8236 <br>
            <a href="mailto:learsi@uaslp.mx" style="color:rgb(0, 178, 227)"> learsi@uaslp.mx</a> <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://ciep.ing.uaslp.mx/minerales/profesor.php?id=3132393938">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Rodriguez_Torres_Israel.pdf')}}"><em>Curriculum Vitae</em></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/xjIAAA==">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0003-4923-5671"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56319267200"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Electroquímica Ambiental</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Procesos electroquímicos ambientales para el tratamiento de efluentes</li>
                   <li>Diseño y aplicación de reactores electroquímicos para control de la contaminación</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Hasselbring Clara Louisa Anna. 2016. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4124/MCA1HCL201601.pdf?sequence=3&isAllowed=y" target="_blank"> The planning phase of an energy management system according to ISO 50001: elaboration for the Robert Bosch plant in San Luis Potosi, Mexico.</a></li>
                  <li>Bossek David Benedikt. 2018. Analysis of the integration of Volkswagen de México´s sustainable projects into the emerging Mexican Emissions Trading System and their environmental and social potential.</li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Alanís Leal Iris Alessandra. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5741/MCA1ALI201901.pdf?sequence=1&isAllowed=y" target="_blank"> Oxidación electroquímica avanzada para la degradación de contaminantes emergentes derivados de benzotiazol obtenidos a partir de fotólisis a condiciones ambientales controladas.</a></li>
                  <li>Sánchez Mata Omar. 2022. <a href="#" target="_blank">Evaluación de reúso de agua industrial mediante el tratamiento de generación electroquímica de un agente coagulante.</a> </li>
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
              <strong>Artículos de investigación</strong><br><br>
              <ul class="vineta">
                <li>Rubicelia García-Garnica, Néstor Castillo-Magallanes, <b>Israel Rodríguez</b>, Roel Cruz, Isabel Lázaro. “Electrochemical study of enargite within the mixed potential zone attained with different oxidizing reagents in an alkaline medium”. Electrochimica Acta, 425 (2022) 140719. ISSN: 0013-4686. doi: <a href="https://doi.org/10.1016/j.electacta.2022.140719" target="_blank">10.1016/j.electacta.2022.140719</a></li><br>
                <li>Mary C. Nolasco, Lucia F. Flores, Emmanuel J. Gutiérrez, Javier Aguilar, Elia G. Palacios, Mizraim U. Flores, <b>Israel Rodríguez</b>, Iván A. Reyes. “Acid dissolution of jarosite-type compounds: Effect of the incorporation of divalent cations into the structure on the reaction rate”. Hydrometallurgy, 212 (2022) 105907. ISSN: 0304-386X, doi: <a href="https://doi.org/10.1016/j.hydromet.2022.105907" target="_blank">10.1016/j.hydromet.2022.105907</a></li><br>
                <li>Jessica Meléndez-Marmolejo, Lorena Díaz de León-Martínez, Vanessa Galván-Romero, Samantha Villarreal-Lucio, Raúl Ocampo-Pérez, Nahum A. Medellín-Castillo, Erika Padilla-Ortega, <b>Israel Rodríguez-Torres</b>, Rogelio Flores-Ramírez. “Design and application of molecularly imprinted polymers for adsorption and environmental assessment of anti-inflammatory drugs in wastewater samples”. Environmental Science and Pollution Research, (2022). ISSN: 1614-7499. doi: <a href="https://link.springer.com/article/10.1007/s11356-022-19130-0" target="_blank">10.1007/s11356-022-19130-0</a></li><br>
                <li>Hernán Islas, Mizraim U. Flores, Julio C. Juárez, Martín Reyes, Alien Blanco, Emmanuel J. Gutiérrez, Javier Aguilar, Mary C. Nolasco, <b>Israel Rodríguez</b>, Iván A. Reyes. “Raw data of silver extraction from sodium-silver jarosite using three different lixiviants in alkaline medium”. Data in Brief, 39 (2021) 107511. ISSN: 23523409. doi: <a href="https://doi.org/10.1016/j.dib.2021.107511" target="_blank"> 10.1016/j.dib.2021.107511</a></li><br>
                <li>Hernán Islas, Mizraim U. Flores, Julio C. Juárez, Martín Reyes, Alien Blanco, Emmanuel J. Gutiérrez, Javier Aguilar, Mary C. Nolasco, <b>Israel Rodríguez</b>, Iván A. Reyes. “Silver leaching from jarosite-type compounds using cyanide and non-cyanide lixiviants: A kinetic approach”. Minerals Engineering, 174 (2021) 10725. ISSN: 0892-6875. doi: <a href="https://doi.org/10.1016/j.mineng.2021.107250" target="_blank">10.1016/j.mineng.2021.107250</a></li><br>
                <li><b>Rodríguez-Torres I.</b>, Perez-Alonso C., Delgadillo J., Espinosa E., Rosales-Marín G. “Study of the Effect of the Mineral Feed Size Distribution on a Ball Mill Using Mathematical Modeling”. Iranian Journal of Chemistry and Chemical Engineering. 40 (2021), 303-312. ISSN: 1021-9986. doi: <a href="https://doi.org/10.30492/ijcce.2020.39002" target="_blank">10.30492/ijcce.2020.39002</a></li><br>
                <li><b>I. Rodríguez-Torres</b> and E. R. Henquín. “General Simplified Model to Calculate Current Distribution in Electrochemical Reactors with N Bipolar Electrodes”. J. Electrochem. Soc., 166 (2019) E201-E211. ISSN: 0013-4651. doi: <a href="https://www.researchgate.net/publication/332515656_General_Simplified_Model_to_Calculate_Current_Distribution_in_Electrochemical_Reactors_with_N_Bipolar_Electrodes" target="_blank">10.1149/2.1291906jes</a></li><br>
                <li>A. Blanco-Flores, N.V. Arteaga-Larios, M.C. Ojeda-Escamilla, H.P. Toledo-Jaldin, G. López-Téllez, <b>I. Rodríguez-Torres</b>. “Adsorption of fluoride using bimetallic oxide nanoparticles supported on industrial waste prepared by a chemical reduction method”. Desalin. Water Treat., Accepted for publication (2019). ISSN: 1944-3994. doi: <a href="http://dx.doi.org/10.5004/dwt.2019.24033" target="_blank">10.5004/dwt.2019.24033</a></li><br>
                <li>Toledo Jaldin Helen, Blanco-Flores Alien, López-Téllez Gustavo, Vilchis-Nestor Alfredo, Arteaga-Larios Nubia and <b>Israel Rodríguez-Torres</b>. “Magnetic sugarcane bagasse composite for atrazine and fluoride removal”. J. Chem. Technol. Biot., (2019). ISSN: 0268-2575. doi: <a href="https://doi.org/10.1002/jctb.5902" target="_blank">10.1002/jctb.5902</a></li><br>
                <li>Armando Vázquez, Lucía Alvarado, Isabel Lázaro, Roel Cruz, José Luis Nava, and <b>Israel Rodríguez-Torres</b>. “A Comparative Analysis of 2-(Thiocyanomethylthio)-Benzothiazole Degradation Using Electro-Fenton and Anodic Oxidation on a Boron-Doped Diamond Electrode”. Int. J. Photoenergy, Vol. 2018, Article ID 5290975, 9 pages, (2018). ISSN: 1110-662X. doi: <a href="https://doi.org/10.1155/2018/5290975" target="_blank">10.1155/2018/5290975</a></li><br>
                <li>Alien Blanco-Flores, Nubia Arteaga-Larios, Víctor Pérez-García, José Martínez-Gutiérrez, María Ojeda-Escamilla, <b>Israel Rodríguez-Torres</b>. “Efficient fluoride removal using Al-Cu oxide nanoparticles supported on steel slag industrial waste solid”. Environ. Sci. Pollut. Res., 25 (2018) 6414-6428. ISSN: 0944-1344. doi: <a href="https://link.springer.com/article/10.1007/s11356-017-0849-6" target="_blank">10.1007/s11356-017-0849-6</a></li><br>
                <li>J.J. García-Sánchez, M. Solache-Ríos, V. Martínez-Miranda, <b>I. Rodríguez-Torres</b>. “Removal of fluoride ions by calcium hydroxide-modified iron oxides”. Desalin. Water Treat., 94 (2017) 3139. ISSN: 1944-3994. doi: <a href="https://www.deswater.com/DWT_abstracts/vol_94/94_2017_31.pdf" target="_blank">10.5004/dwt.2017.21517</a></li><br>
                <li>J.J. García-Sánchez, M. Solache-Ríos, V. Martínez-Miranda, R. Enciso-Perez, N.V. Arteaga-Larios, M.C. Ojeda-Escamilla, <b>I. Rodríguez-Torres</b>. “Experimental study of the adsorption of fluoride by modified magnetite using a continuous flow system and numerical simulation”. Process Saf. Environ., 109 (2017) 130–139. ISSN: 0957-5820. doi: <a href="https://doi.org/10.1016/j.psep.2017.03.034" target="_blank">10.1016/j.psep.2017.03.034</a></li><br>
                <li>Tzayam Pérez, Rosa L. López, José L. Nava, Isabel Lázaro, Guillermo Velasco, Roel Cruz, <b>Israel Rodríguez</b>. “Electrochemical oxidation of cyanide on 3D Ti–RuO2 anode using a filter-press electrolyzer”. Chemosphere, 177 (2017) 1–6. ISSN: 0045-6535. doi: <a href="https://doi.org/10.1016/j.chemosphere.2017.02.136" target="_blank">10.1016/j.chemosphere.2017.02.136</a></li><br>
                <li>R. Enciso, J.A. Delgadillo, O. Domínguez, <b>I. Rodríguez-Torres</b>. “Analysis and Validation of the Hydrodynamics of an Electrodialysis Cell using Computational Fluid Dynamics”. Desalination, 408 (2017) 127–132. ISSN: 0011-9164. doi: <a href="https://doi.org/10.1016/j.desal.2017.01.015" target="_blank">10.1016/j.desal.2017.01.015</a> </li><br>
                <li>G. Velasco, S. Gutiérrez-Granados, C. Ponce de León, A. Alatorre, F.C. Walsh, <b>I. Rodríguez-Torres</b>. “The electrochemical reduction of Cr(VI) ions in acid solution at titanium and graphite electrodes”. J. Environ. Chem. Eng., 4 (2016) 3610–3617. ISSN: 2213-3437. doi: <a href="https://doi.org/10.1016/j.jece.2016.08.004" target="_blank">10.1016/j.jece.2016.08.004</a></li><br>
                <li>J.J. García-Sánchez, M. Solache-Ríos, J.M. Martínez-Gutiérrez, N.V. Arteaga-Larios, M.C. Ojeda-Escamilla, <b>I. Rodríguez-Torres</b>. “Modified natural magnetite with Al and La ions for the adsorption of fluoride ions from aqueous solutions”. J. Fluorine Chem., 186 (2016) 115–124. ISSN: 0022-1139. doi: <a href="https://doi.org/10.1016/j.jfluchem.2016.05.004" target="_blank">10.1016/j.jfluchem.2016.05.004</a></li><br>
                <li>Gustavo Urbano, Isabel Lázaro, <b>Israel Rodríguez</b>, Jua Luis Reyes, Roxana Larios, Roel Cruz. “Electrnochemical and Spectroscopic Study of Interfacial Interactions between Chalcopyrite and typical Flotation Process Reagents”. Int. J. Min. Met. Mater., 23 (2) (2016) 127–136. ISSN: 1674-4799. doi: <a href="https://link.springer.com/article/10.1007/s12613-016-1219-y" target="_blank"> 10.1007/s12613-016-1219-y</a></li><br>
                <li>Athziri Guzmán, José L. Nava, Oscar Coreño, <b>Israel Rodríguez</b>, Silvia Gutiérrez. “Arsenic and fluoride removal from groundwater by electrocoagulation using a continuous filter-press reactor”. Chemosphere, 144 (2016) 2113–2120. ISSN: 0045-6535. doi: <a href="https://doi.org/10.1016/j.chemosphere.2015.10.108" target="_blank"> 10.1016/j.chemosphere.2015.10.108</a></li><br>
                <li>Rosa L. López, Tzayam Pérez, José L. Nava, Isabel Lázaro, Roel Cruz, <b>Israel Rodríguez</b>, Guillermo Velasco. Caracterización experimental de un reactor electroquímico tipo filtro prensa para la oxidación de cianuro libre contenido en agua residual sintética, empleando un electrodo tridimensional de Ti-RuO2”. Artículo en extenso con arbitraje en Memorias del XXXII Congreso de la Sociedad Mexicana de Electroquímica y 10th Meeting of the Mexican Section of the ECS, (2017). 1053–1059.</li><br>
                <li>V. Martínez, M. Franco, <b>I. Rodríguez</b>, R. Cruz, I. Lázaro. “Recuperación electrolítica de Zn en medio alcalino: efecto de impurezas de plomo”. Artículo en extenso con arbitraje en Memorias del XXXII Congreso de la Sociedad Mexicana de Electroquímica y 10th Meeting of the Mexican Section of the ECS, (2017). 547–558.</li><br>
                <li>R. Enciso Perez, J.A. Delgadillo Gómez, O. Domínguez, <b>I. Rodríguez Torres</b>. “Rediseño de la configuración de entrada/salida de un reactor de electrodiálisis auxiliándose de CFD”. Artículo en extenso con arbitraje en Memorias del XXXII Congreso de la Sociedad Mexicana de Electroquímica y 10th Meeting of the Mexican Section of the ECS, (2017). 394–403.</li><br>
                <li>L. A. Padilla Urbina, N.V. Arteaga, M. I. Lázaro, R. Cruz, <b>I. Rodríguez</b>. “Simulación de la hidrodinámica y distribución de corriente terciaria en un reactor de electrocoagulación”. Artículo en extenso con arbitraje en Memorias del XXXI Congreso de la Sociedad Mexicana de Electroquímica y 9th Meeting of the Mexican Section of the ECS, (2016). 326–335.</li><br>
              </ul>
              <strong>Capítulos de libros</strong><br><br>
              <ul class="vineta">
                <li>Silvia Gutiérrez Granados, Carlos Ponce De León, Carlos Barrera, Gabriela Roa, Patricia Balderas, R. Galindo, José Luis Nava, Rubén Ornelas, <b>Israel Rodríguez Torres</b>, Juan Manuel Peralta-Hernández, Erika Bustos. “Electroquímica Ambiental”, 30 años impulsando la Electroquímica en México, 2015, SBN: 000328, pp. 90 – 126.</li><br>
                <li>L. Alvarado, A. Ramírez, <b>I. Rodríguez-Torres</b>. “Ion Exchange applied to hexavalent chromium removal”. 1st IWA Mexico National Young Water Professionals, 2008, ISBN: 978-970-32-5515-3, pp. 329-332.</li><br>
                <li>Omar González, Sergio Castro, Israel Rodríguez Torres, “Influence of the substrates on the electrochemical separation of zinc and cadmium contained in second-purification solution produced in an electrolytic plant”, Electrochemistry and Materials Engineering, 2007, ISBN: 978-81-308-0205-3, pp. 249-263.</li><br>
                <li>G. Velasco-Martínez, S. Gutiérrez-Granados, <b>I. Rodríguez-Torres</b>, A. Alatorre-Ordaz. “Study of Cr(VI) reduction in aqueous solutions at a vitreous carbon electrode: Evidence of intermediary mechanisms”. Applications of Analytical Chemistry in Environmental Research, 2005, ISBN: 81-308-0057-8, pp. 131-143.</li><br>
                <li><b>I. Rodríguez</b>, I. Lázaro, E. Arce and I. González, “Electrochemical study of the processes involved in Chalcopyrite leaching in nitric acid.” Chemical Metallurgy, A Volume in Memory of Alexander Sutulov. Proceedings of the IV Meeting of the Southern Hemisphere on Mineral Technology and III Latin American Congress on Froth Flotation, Vol. III, (1994), 281 - 286.</li><br>
                <li>I. Lázaro, <b>I. Rodríguez</b>, E. Arce and I. González, “Application of carbon paste electrodes with non-conducting binder to the electrochemical study of mineral leaching (Case: Chalcopyrite-HCl).” Chemical Metallurgy, A Volume in Memory of Alexander Sutulov. Proceedings of the IV Meeting of the Southern Hemisphere on Mineral Technology and III Latin American Congress on Froth Flotation, Vol. III, (1994), 299 - 304.</li><br>
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
                <li>Minera Autlán
                  <ul class="vineta">
                    <li>Desarrollo de proceso para obtención de MnSO4 a partir de residuos de manganeso</li>
                  </ul>
                </li><br>
                <li>Planta Electrolítica de Zinc, Industrial Minera México SA de CV
                    <ul class="vineta">
                        <li>Desarrollo de un Reactor Electroquímico para el tratamiento de efluentes.</li>
                        <li>Estudio teórico de la distribución de corriente en casa de celdas.</li>
                    </ul>
                </li><br>
                <li>Fábricas de Papel Potosí SA de CV
                    <ul class="vineta">
                        <li>Estudio de un proceso de Electrocoagulación.</li>
                    </ul>
                </li><br>
                <li>METALOR
                    <ul class="vineta">
                        <li>Análisis del proceso de electrodepósito de plata</li>
                    </ul>
                </li><br>
            </ul>
            </div>
          </div>
        </div><br><br><br>
      </div>
    </div>
    </div>
</div>

@endsection