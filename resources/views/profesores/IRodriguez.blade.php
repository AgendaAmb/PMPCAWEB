
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
            Tel. + 52 (444) 825-4326 ext. 8236 <br>
            <a href="mailto:learsi@uaslp.mx" style="color:rgb(0, 178, 227)"> learsi@uaslp.mx</a> <br><br>
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
                <li>Amanda S. Garzón-Pérez, Yohuali Zarazua-Aguilar, Franchescoli D. Velázquez-Herrera, <b>Israel Rodríguez</b>, Silvia P. Paredes-Carrera. “A complete reactive dye aqueous adsorption mechanism using hydrotalcite-MgAl obtained by microwave-ultrasound aging”. Surfaces and Interfaces, Accepted for publication (2025) doi: <a href="https://doi.org/10.1016/j.surfin.2025.107942" target="_blank">10.1016/j.surfin.2025.107942</a>. ISSN 2468-0230</li><br>
                <li>E.J. Sandoval-Herazo, M.C. Alfaro-De la Torre, R. Flores-Ramírez, <b>I. Rodríguez-Torres</b>, M.A. Lizardi-Jiménez, A. A. Berumen-Rodríguez, G. Espinosa-Reyes. “Polycyclic aromatic hydrocarbons emissions and sugarcane industry impacts in the Tamasopo Wetland, San Luis Potosi, Mexico”. International Journal of Environmental Science and Technology, 22 (2025) 15691-15704. ISSN 1735-1472. doi: <a href="https://doi.org/10.1007/s13762-025-06658-0" target="_blank">10.1007/s13762-025-06658-0</a></li><br>
                <li>Javier E. Vilasó-Cadre, Alondra Ramírez-Rodríguez, Juan Santiago Hidalgo, Iván A. Reyes-Domínguez, Roel Cruz, Pandiyan Thangarasu, <b>Israel Rodríguez-Torres</b>, Sócrates Alonso-Torres, Lázaro A. González-Fernández. “Electrochemical sensor based on CuO nanorods for the quantification of cyanide in mineral processing samples”. Journal of Industrial and Engineering Chemistry, 151 (2025) 321-334. ISSN 1226-086X. doi: <a href="https://doi.org/10.1016/j.jiec.2025.03.057" target="_blank"> 10.1016/j.jiec.2025.03.057</a></li><br>
                <li>Ismael Salvador Solano Huerta, Gabriela Roa Morales, Patricia Balderas Hernández, Carlos Eduardo Barrera Díaz, Thelma Beatriz Pavón Silva, Pedro Ávila Pérez and <b>Israel Rodríguez Torres</b>. “Technical Considerations for Designing an Electrocoagulation Reactor for Wastewater Treatment: A Brief Review”. Processes, 13 (2025) 1679. ISSN 2227-9717. doi: <a href="https://doi.org/10.3390/pr13061679" target="_blank">10.3390/pr13061679</a></li><br>
                <li>Amanda Garzón-Pérez, Javier Vilasó-Cadre, Patricia Balderas, Raúl Ocampo-Pérez, <b>Israel Rodríguez</b>. “Capacitive deionization with Mg/Al mixed oxides for arsenic removal from water”. Journal of Environmental Chemical Engineering, 13 (2025) 116578. ISSN 2213-3437. doi: <a href="https://doi.org/10.1016/j.jece.2025.116578" target="_blank">10.1016/j.jece.2025.116578</a></li><br>
                <li>N. V. Arteaga-Larios, K. J. Ramírez-Muñíz, L. A. Bernal-Jácome, M. S. Berber-Mendoza, A. S. Garzón-Pérez, <b>I. Rodríguez</b>. “Forced hydrolysis synthesis of a lanthanum oxyhydroxide/hydroxide-incorporated adsorbent for fluoride adsorption”. International Journal of Environmental Science and Technology, 22 (2025) 2849–2866. ISSN: 1735-1472. doi: <a href="https://doi.org/10.1007/s13762-024-05841-z" target="_blank">10.1007/s13762-024-05841-z</a></li><br>
                <li>Javier E. Vilasó-Cadre, Juan Hidalgo-Viteri, Lázaro A. González-Fernández, Juan J. Piña, Osney Leiva-Peláez, Luis Hidalgo, Iván A. Reyes-Domínguez, Roel Cruz, <b>Israel Rodríguez-Torres</b>, Nahum Andrés Medellín-Castillo, Jorge Arce-Castro, Ildiko Galambos, Graziella Liana Turdean. “Recent advances in electrochemical sensors applied to samples of industrial interest”. Microchemical Journal, 210 (2025) 112931. ISSN: 0026-265X. doi: <a href="https://doi.org/10.1016/j.microc.2025.112931" target="_blank">10.1016/j.microc.2025.112931</a></li><br>
                <li>Mary C. Nolasco, <b>Israel Rodríguez</b>, Javier E. Vilasó, Mizraim U. Flores, Thangarasu Pandiyan, Emmanuel J. Gutiérrez, Javier Aguilar, Martín Reyes, Iván A. Reyes. “Selective extraction of silver from jarosite residues produced in the zinc hydrometallurgical process using thiourea under acidic conditions: Kinetic analysis and leaching optimization”. Hydrometallurgy, 231 (2025) 106396. ISSN: 0304-386X. doi: <a href="https://doi.org/10.1016/j.hydromet.2024.106396" target="_blank">10.1016/j.hydromet.2024.106396</a></li><br>
                <li>Javier E. Vilasó-Cadre, Iván A. Reyes-Domínguez, Roel Cruz, Gilberto Rosales-Marín, <b>Israel Rodríguez-Torres</b>, Néstor Castillo-Magallanes, Juan Hidalgo-Viteri, Graziella Liana Turdean, Luis Hidalgo. “Recent advances on impedimetric electroanalysis with non-commercial portable instruments: A mini review”. Periodica Polytechnica-Chemical Engineering, 68(4) (2024) 639–654. ISSN: 0324-5853. doi: <a href="https://doi.org/10.3311/PPch.36918" target="_blank">10.3311/PPch.36918</a></li><br>
                <li>Javier E. Vilasó-Cadre, Alondra Ramírez-Rodríguez, Juan Hidalgo, Iván A. Reyes-Domínguez, Roel Cruz, Mizraim U. Flores, <b>Israel Rodríguez-Torres</b>, Roberto Briones-Gallardo, Luis Hidalgo, Juan Jesús Piña Leyte-Vidal. “Voltammetric Sensor Based on Titania Nanoparticles Synthesized with Aloe vera Extract for the Quantification of Dithiophosphates in Industrial and Environmental Samples”. Chemosensors, 12(9) (2024) 195. ISNN: 2227-9040. doi: <a href="https://doi.org/10.3390/chemosensors12090195" target="_blank">10.3390/chemosensors12090195</a></li><br>
                <li>Elber José Sandoval-Herazo, <b>Israel Rodríguez-Torres</b>, Guillermo Espinosa-Reyes, Manuel Alejandro Lizardi-Jiménez. “Airlift bioreactors for bioremediation of water contaminated with hydrocarbons in agricultural regions”. International Journal of Chemical Reactor Engineering, 22 (6) (2024). 643-650. ISSN: 2194-5748. doi: <a href="https://doi.org/10.1515/ijcre-2024-0009" target="_blank">10.1515/ijcre-2024-0009</a></li><br>
                <li>Mario González, Erika Larios, Roel Cruz, Néstor Castillo, Amanda Garzón-Pérez, <b>Israel Rodríguez</b>. “Electrochemical characterization of binder effect in natural magnetite electrodes for fluoride removal of well water”. Materials Today Communications, 39 (2024) 109176. ISSN 2352-4928. doi: <a href="https://doi.org/10.1016/j.mtcomm.2024.109176" target="_blank">10.1016/j.mtcomm.2024.109176</a></li><br>
                <li>Arait Montoya, Iván Reyes, Roel Cruz, Isabel Lázaro, Néstor Castillo-Magallanes, Rogelio Flores, <b>Israel Rodríguez</b>. “Evaluation of disodium carboxymethyl trithiocarbonate as a depressant reagent for chalcocite: an electrochemical approach”. Minerals Engineering, 212 (2024) 108708. ISSN: 0892-6875. doi: <a href="https://doi.org/10.1016/j.mineng.2024.108708" target="_blank">10.1016/j.mineng.2024.108708</a></li><br>
                <li>Amanda S. Garzón-Pérez, Silvia P. Paredes-Carrera, Lucía F. Flores-Carlos, Nubia V. Arteaga-Larios, Hugo Martínez-Gutiérrez, <b>Israel Rodríguez-Torres</b>. “Effect of heat treatment on the synthesis of Mg/Al-NO3 hydrotalcite-type compounds for fluoride removal”. Journal of Dispersion Science and Technology, 45 (9) (2024) 1875-1869. ISSN: 0193-2691. doi: <a href="https://doi.org/10.1080/01932691.2023.2234482" target="_blank" >10.1080/01932691.2023.2234482</a></li><br>
                <li><b>I. Rodríguez-Torres</b>, E.T. Tuzcu, Iván A. Reyes, Gilberto Rosales. “A quantitative study between HPGR and cone crusher aided ball mill grinding: mathematical modeling by evaluating the possible microfracture effect produced by HPGR technology and cone crusher”. Physicochemical Problems of Mineral Processing, 60 (1) (2024) 177620. ISSN: 1643-1049. doi: <a href="https://doi.org/10.37190/ppmp/177620">10.37190/ppmp/177620</a></li><br>
                <li>Zavala Puente R.D., Andrade Martínez J., Alvarado Macías G., Nava Gómez D., Espinosa Serrano E., Cruz Gaona R., <b>Rodríguez Torres I.</b>, Torres Valle S.E., Rosales Marín G. “Propuesta de arreglo en la geometría de hidrociclones en la etapa de remolienda de la planta de piritas de Fresnillo PLC mediante simulación”. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/8900/Ponencia.IM.2024.Propuesta.Zavala.pdf?sequence=1&isAllowed=y">Artículo en extenso con arbitraje en Memorias del XXI Encuentro sobre procesamiento de minerales,</a> (2024), 410-424.</li><br>
                <li>Francisco Sánchez, Arait Montoya, Rogelio Flores, Gilberto Rosales Marín, <b>Israel Rodríguez</b>. “Evaluación de la adsorción de un colector tipo hidrocarburo en minerales sulfurosos”. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/8883/Ponencia.IM.2024.Evaluaci%c3%b3n.Sanchez.pdf?sequence=1&isAllowed=y" target="_blank">Artículo en extenso con arbitraje en Memorias del XXI Encuentro sobre procesamiento de minerales</a>, (2024), 212-226.</li><br>
                <li>Arait Montoya, José Manuel Martinez, Francisco Galindo, Gilberto Rosales, Dora Alicia Solís-Casados, <b>Israel Rodríguez</b>. “Efecto del agente oxidante hipoclorito de sodio como depresor de mineral calcosita”. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/8879/Ponencia.IM.2024.Efecto.Montoya.pdf?sequence=1&isAllowed=y">Artículo en extenso con arbitraje en Memorias del XXI Encuentro sobre procesamiento de minerales</a>, (2024), 155-165.</li><br>
                <li>N. Castillo Magallanes, <b>I. Rodríguez</b>, R. Cruz, I. Lázaro. “An EIS study of the effects of inorganic salts in the adsorption of flotation reagents on galena”. Journal of Solid State Electrochemistry, 27 (2023) 3029–3040. ISSN 1095-726X. doi: <a href="https://link.springer.com/article/10.1007/s10008-023-05529-3" target="_blank">10.1007/s10008-023-05529-3</a></li><br>
                <li>Karla Vargas, Raúl Ocampo, <b>Israel Rodríguez-Torres</b>, Nahúm Medellín-Castillo, Rogelio Flores-Ramírez. “Molecularly Imprinted Polymers (MIPs) as efficient catalytic tool for the oxidative degradation of 4-nonylphenol and its by-products”. Environmental Science and Pollution Research, 30 (2023) 90741–90756. ISSN: 1614-7499. doi: <a href="https://link.springer.com/article/10.1007/s11356-023-28653-z">10.1007/s11356-023-28653-z</a></li><br>
                <li><b>I. Rodríguez-Torres</b>, E.T. Tuzcu, J. Andrade-Martínez, G. Rosales-Marín. “Estimation methodology for Bond ball mill work index experiment output via mathematical modeling”. Minerals Engineering, 201 (2023) 108186. ISSN: 0892-6875. doi: <a href="https://doi.org/10.1016/j.mineng.2023.108186" target="_blank">10.1016/j.mineng.2023.108186</a></li><br>
                <li>Arait Montoya, Juan L. Reyes, Iván A. Reyes, Roel Cruz, Isabel Lázaro, <b>Israel Rodríguez</b>. “Effect of sodium hypochlorite as a depressant for copper species in Cu-Mo flotation separation”. Minerals Engineering, 201 (2023) 108166. ISSN: 0892-6875. doi: <a href="https://doi.org/10.1016/j.mineng.2023.108166" target="_blank">10.1016/j.mineng.2023.108166</a></li><br>
                <li>Jazmin Alhelí Aguilar-Torrejon, Patricia Balderas-Hernández, Gabriela Roa-Morales, Carlos Eduardo Barrera-Díaz, <b>Israel Rodríguez-Torres</b>, Teresa Torres-Blancas. “Relationship, importance, and development of analytical techniques: COD, BOD, and TOC in water. An overview through time”. SN Applied Sciences, 5 (2023) 118. ISSN: 2523-3971. doi: <a href="https://doi.org/10.1007/s42452-023-05318-7" target="_blank">10.1007/s42452-023-05318-7</a></li><br>
                <li>A. Montoya, N. R. Castillo, I. A. Reyes, R. Cruz, I. Lázaro, D. A. Solís-Casados, <b>I. Rodríguez</b> “Efecto del carboximetil tritiocarbonato de disodio como reactivo depresor de pirita en la flotación de molibdenita”. Artículo en extenso con arbitraje en Memorias del XXXVIII Congreso de la Sociedad Mexicana de Electroquímica y 16th Meeting of the Mexican Section of the ECS, (2023), 569–583.</li><br>
                <li>Rubicelia García-Garnica, Néstor Castillo-Magallanes, <b>Israel Rodríguez</b>, Roel Cruz, Isabel Lázaro. “Electrochemical study of enargite within the mixed potential zone attained with different oxidizing reagents in an alkaline medium”. Electrochimica Acta, 425 (2022) 140719. ISSN: 0013-4686. doi: <a href="https://doi.org/10.1016/j.electacta.2022.140719" target="_blank">10.1016/j.electacta.2022.140719</a></li><br>
                <li>Mary C. Nolasco, Lucia F. Flores, Emmanuel J. Gutiérrez, Javier Aguilar, Elia G. Palacios, Mizraim U. Flores, <b>Israel Rodríguez</b>, Iván A. Reyes. “Acid dissolution of jarosite-type compounds: Effect of the incorporation of divalent cations into the structure on the reaction rate”. Hydrometallurgy, 212 (2022) 105907. ISSN: 0304-386X, doi: <a href="https://doi.org/10.1016/j.hydromet.2022.105907" target="_blank">10.1016/j.hydromet.2022.105907</a></li><br>
                <li>Jessica Meléndez-Marmolejo, Lorena Díaz de León-Martínez, Vanessa Galván-Romero, Samantha Villarreal-Lucio, Raúl Ocampo-Pérez, Nahum A. Medellín-Castillo, Erika Padilla-Ortega, <b>Israel Rodríguez-Torres</b>, Rogelio Flores-Ramírez. “Design and application of molecularly imprinted polymers for adsorption and environmental assessment of anti-inflammatory drugs in wastewater samples”. Environmental Science and Pollution Research, (2022). ISSN: 1614-7499. doi: <a href="https://link.springer.com/article/10.1007/s11356-022-19130-0" target="_blank">10.1007/s11356-022-19130-0</a></li><br>
                <li>Berumen-Rodríguez, Alejandra; <b>Rodríguez-Torres, Israel</b>; Díaz de León-Martínez, Lorena; Díaz-Barriga, Fernando; Flores Ramírez, Rogelio. “Caracterización y biomonitoreo de contaminantes orgánicos e inorgánicos en una zona ladrillera de San Luis Potosí”. <a href="https://toxicologia.org.ar/wp-content/uploads/2023/07/Acta_30-3_Berumen.pdf" target="_blank">Acta Toxicológica Argentina</a>, 30 (2022), 177-185.</li><br>
                <li>A. Montoya Méndez, R. Cruz, I. Lázaro, <b>I. Rodríguez</b>. “Evaluación de NaClO como depresor de calcopirita en la separación selectiva por flotación de Cu-Mo”. Artículo en extenso con arbitraje en <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/8879/Ponencia.IM.2024.Efecto.Montoya.pdf?sequence=1&isAllowed=y">Memorias del XXXVII Congreso de la Sociedad Mexicana de Electroquímica y 15th Meeting of the Mexican Section of the ECS,</a> (2022), 731–753.</li><br>
                <li>N. Castillo Magallanes, <b>I. Rodríguez</b>, R. Cruz, I. Lázaro. “Análisis superficial mediante EIS de galena expuesta a iones típicamente presentes en sistemas de flotación”. Artículo en extenso con arbitraje en Memorias del XXXVII Congreso de la Sociedad Mexicana de Electroquímica y 15th Meeting of the Mexican Section of the ECS, (2022), 591–607.</li><br>
                <li>A. Montoya, F. González, R. Flores, I. Reyes, R. Cruz, I. Lázaro, <b>I. Rodríguez</b>. “Evaluación del carboximetil tritiocarbonato de disodio en la flotación de mineral calcosita”. Artículo en extenso con arbitraje en Memorias del XX Encuentro sobre procesamiento de minerales, (2022), 128-135.</li><br>
                <li>Hernán Islas, Mizraim U. Flores, Julio C. Juárez, Martín Reyes, Alien Blanco, Emmanuel J. Gutiérrez, Javier Aguilar, Mary C. Nolasco, <b>Israel Rodríguez</b>, Iván A. Reyes. “Raw data of silver extraction from sodium-silver jarosite using three different lixiviants in alkaline medium”. Data in Brief, 39 (2021) 107511. ISSN: 23523409. doi: <a href="https://doi.org/10.1016/j.dib.2021.107511" target="_blank"> 10.1016/j.dib.2021.107511</a></li><br>
                <li>Hernán Islas, Mizraim U. Flores, Julio C. Juárez, Martín Reyes, Alien Blanco, Emmanuel J. Gutiérrez, Javier Aguilar, Mary C. Nolasco, <b>Israel Rodríguez</b>, Iván A. Reyes. “Silver leaching from jarosite-type compounds using cyanide and non-cyanide lixiviants: A kinetic approach”. Minerals Engineering, 174 (2021) 10725. ISSN: 0892-6875. doi: <a href="https://doi.org/10.1016/j.mineng.2021.107250" target="_blank">10.1016/j.mineng.2021.107250</a></li><br>
                <li><b>Rodríguez-Torres I.</b>, Perez-Alonso C., Delgadillo J., Espinosa E., Rosales-Marín G. “Study of the Effect of the Mineral Feed Size Distribution on a Ball Mill Using Mathematical Modeling”. Iranian Journal of Chemistry and Chemical Engineering. 40 (2021), 303-312. ISSN: 1021-9986. doi: <a href="https://doi.org/10.30492/ijcce.2020.39002" target="_blank">10.30492/ijcce.2020.39002</a></li><br>


                <!--<li><b>I. Rodríguez-Torres</b> and E. R. Henquín. “General Simplified Model to Calculate Current Distribution in Electrochemical Reactors with N Bipolar Electrodes”. J. Electrochem. Soc., 166 (2019) E201-E211. ISSN: 0013-4651. doi: <a href="https://www.researchgate.net/publication/332515656_General_Simplified_Model_to_Calculate_Current_Distribution_in_Electrochemical_Reactors_with_N_Bipolar_Electrodes" target="_blank">10.1149/2.1291906jes</a></li><br>
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
                <li>L. A. Padilla Urbina, N.V. Arteaga, M. I. Lázaro, R. Cruz, <b>I. Rodríguez</b>. “Simulación de la hidrodinámica y distribución de corriente terciaria en un reactor de electrocoagulación”. Artículo en extenso con arbitraje en Memorias del XXXI Congreso de la Sociedad Mexicana de Electroquímica y 9th Meeting of the Mexican Section of the ECS, (2016). 326–335.</li><br>-->
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