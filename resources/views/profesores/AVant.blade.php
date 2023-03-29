
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. ANUSCHKA VAN´T HOOFT</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/AnuschkaVantHoft.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ciencias Sociales y Humanidades</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Av. Industrias #101-A Fracc. Talleres <br>
            C.P. 78399, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 832-1000 ext. 9226<br>
            <a href="mailto:avanthooft@uaslp.mx" style="color:rgb(0, 178, 227)">avanthooft@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="https://sociales.uaslp.mx/Paginas/Investigacion/2108#gsc.tab=0">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Vant_Hooft_AnuschkaJohannaMaria.pdf')}}"><i>Curriculum Vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/azUAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="http://orcid.org/0000-0002-3742-9121"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=55304325900"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                    <li>TSCA: Diseño y Evaluación de Proyectos de Investigación</li>
                    <li>Naturaleza y sociedad. Una introducción a las posiciones teóricas recientes</li>
                  </ul><br>
                <li><strong>LGAC</strong></li>
                  <ul class="vineta">
                    <li>Lenguas y culturas indígenas</li>
                    <li>Cultura y medio ambiente</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Clausen Gretel. 2012. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3695/MCA1CGR201201.pdf?sequence=3&isAllowed=y">Governance of sustainable social housing programs: potential for implementation of UNEP-Sushi in Uruguay.</a></li>
                  <li>Martínez Mata Fabiola. 2014. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3870/MCA1MMF201401.pdf?sequence=3&isAllowed=y">Social participation in the REDD+ Program in Mexico.</a></li>
                  <li>Galindo Borbón Cecilia María. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4530/MCA1GBC201701.pdf?sequence=1&isAllowed=y">Comfort perception and its influence on energy consumption in social housing in hot dry climates.</a></li>
                  <li>Aguilar Ramírez Arantza Paulina. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4539/MCA1ARA201801.pdf?sequence=1&amp;isAllowed=y">Sustainability in fashion: consumer behavior and the greening of the garment industry in Mexico.</a></li>
                  <li>Barriga Albuja Victor Mauricio. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4534/MCA1BAV201801.pdf?sequence=1&amp;isAllowed=y">Comparative study of renewable energy policies between Ecuador and Germany. Shifting from FITs to auctions.</a></li>
                  <li>Gallegos Trujillo Viridiana. 2018. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4537"> The role of connectivity for sustainable regional development in the Highland Plateau Zone of San Luis Potosi.</a></li>
                  <li>Cuichán Palma Cinthia Anabel. 2021. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/7464/TesisM.PMPCA.2021.Safeguarding.Cuichan.pdf?sequence=1&isAllowed=y"> Safeguarding indigenous traditional knowledge. The sustainable commercialization of medicinal plants through biotrade.</a></li>
                  <li>Martínez Parga Méndez Madigan. 2022. Bridging the gap towards sustainable development: the cultural-ecological handprint of the Beethoven Orchesta Bonn in Germany.</li>
                  <li>Aguilar Jaramillo Lina María. 2022. Gender mainstreaming in urban planning to improve socio-environmental conditions of marginalized public spaces: Analysis for the urban management of District 18 in Cali, Colombia.</li>
                  <li>Torrico Valdez Jessica Karla. 2022. A sustainable alternative for the Chiquitano dry forest in Bolivia: local perspectives on cultivating cusi palm (<i>Attalea speciosa</i> Mart.)</li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Tapia Hernández Karla Teresa. 2012. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3552/MCA1THK201201.pdf?sequence=3&isAllowed=y">La cultura Wixarika en torno a la peregrinación a Wirikuta: la importancia del agua en el sitio sagrado natural.</a></li>
                  <li>Sánchez Tapia Víctor Manuel. 2014. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3827/MCA1PRI01401.pdf?sequence=3&isAllowed=y">La percepción del riesgo ante inundaciones súbitas en la ciudad de San Luis Potosí.</a> (Co-dirección)</li>
                  <li>Niño Daniel Bianca Lizeth. 2015. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3971/MCA1NDB201501.pdf?sequence=3&isAllowed=y">Emociones de miedo e ira en la percepción de riesgo frente al fenómeno de inundaciones súbitas en la ciudad de San Luis Potosí.</a></li>
                  <li>Santiago Bautista Alejandra. 2020. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5727/MCA1SBA202001.pdf?sequence=1&isAllowed=y">Economía familiar y aprovechamiento de los recursos naturales para la alimentación en una comunidad Tének de la Huasteca Potosina.</a></li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Heindorf Claudia. 2020. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5674/DCA1HEC202002.pdf?sequence=1&isAllowed=y">Management and <em>in situ</em> conservation of plant genetic resources in indigenous land use systems of the Huasteca Potosina</a> (Co-dirección).</li>
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
                <li>Heindorf, C.; J.A. Reyes-Agüero, J. Fortanelli Martínez, <b>A. van 't Hooft</b> y G. Cilia López (en prensa). “Los huertos familiares de San Luis Potosí”, en María de Jesús Ordóñez (coord.), <i>Atlas biocultural de huertos familiares en México. Estado de México, Guerrero, Michoacán, Morelos, San Luis Potosí, Tabasco y Tamaulipas</i>. Tomo 2. México, UNAM.</li><br>
                <li>Reyes-Samilpa, Alicia; Juan Antonio Reyes-Agüero; <b>Anuschka van 't Hooft</b>; Gregorio Álvarez-Fuentes; Erich Dietmar Rössel-Kipping (2023). “Fibers of Agave salmiana cultivar Xa’mni: physical characterization and comparison between leaf maturity and growth environment”, <i>Emergent Materials</i>. Print ISSN: 2522-5731, 2522574X. DOI: <a href="https://doi.org/10.1007/s42247-022-00439-y">https://doi.org/10.1007/s42247-022-00439-y</a>.</li><br>
                <li>Reyes-Samilpa, Alicia, J. Antonio Reyes-Agüero, Gregorio Álvarez-Fuentes, Juan Rogelio Aguirre Rivera, & <b>Anuschka van 't Hooft</b> (2022). “Physical characterization of the fibers of Agave salmianaand A. mapisagafrom the Mezquital Valley, Mexico”, <i>Journal of Natural Fibers</i> 19 (10): 3710-3717. ISSN: 1544 0478. eISSN: 1544 046X. First published online: 02 Dec 2020. DOI: <a href="https://doi.org/10.1080/15440478.2020.1848722">https://doi.org/10.1080/15440478.2020.1848722</a>.</li><br>
                <li>León-Arce, Mauricio, Angélica Torres-Díaz, Karen Mendoza-Pérez, <b>Anuschka van't Hooft</b>, Rogelio Flores-Ramírez y Fernando Díaz-Barriga (2022). “Escenarios humanitarios: una herramienta para abordar las violencias como un problema asociado a la salud y al ambiente”, <i>Revista de Salud Ambiental</i> 22 (1): 21-34. ISSN: 1577-9572.</li><br>
                <li>Heindorf, C.; J. A. Reyes Agüero; <b>A. van 't Hooft</b>. 2021. Local markets: agrobiodiversity reservoirs and access points for farmers' plant propagation materials. Frontiers in Sustainable Food Systems 5:597822. Section Agroecology and Ecosystem Services. ISSN: 2571-581X (Online). DOI: <a href="https://doi.org/10.3389/fsufs.2021.597822" target="_blank">10.3389/fsufs.2021.597822</a></li><br>
                <li>Heindorf, C.; J. A. Reyes-Agüero; J. Fortanelli-Martínez; <b>A. van 't Hooft</b>. 2021. More than Maize, Bananas, and Coffee: The Inter– and Intraspecific Diversity of Edible Plants of the Huastec Mayan Landscape Mosaics in Mexico. Economic Botany 75 (2): 158-174. ISSN:1874-9364 (Online). DOI: <a href="https://link.springer.com/article/10.1007/s12231-021-09520-9"> 10.1007/s12231-021-09520-9</a></li><br>
                <li>Reyes-Samilpa, A.; J.A. Reyes-Agüero; <b>A. van 't Hooft</b>. 2021. El conocimiento tradicional <i>hñähñu</i> de las características físicas de la fibra del ixtle (<i>Agave</i> spp.). Anthropos 116 (2): 393-403. ISSN: 0257 9774. ISSN online: 0257 9774 <a href="https://doi.org/10.5771/0257-9774-2021-2-393">https://doi.org/10.5771/0257-9774-2021-2-393</a></li><br>
                <li>Heindorf, C.; <b>A. van't Hooft</b>; J.A. Reyes-Agüero; J. Fortanelli-Martínez. 2020. Folk Taxonomy of the Inter-and Intraspecific Edible Plant Diversity of Huastec Mayan Farmers in Mexico. Journal of Ethnobiology 40 (4): 552-568. <a href="https://doi.org/10.2993/0278-0771-40.4.552">https://doi.org/10.2993/0278-0771-40.4.552</a></li><br>
                <li>Reyes-Samilpa, A.; J.A. Reyes-Agüero; G. Álvarez-Fuentes; J.R. Aguirre Rivera; <b>A. van 't Hooft</b>. 2020. Physical characterization of the fibers of <i>Agave salmiana</i> and <i>A. mapisaga</i> from the Mezquital Valley, Mexico. Journal of Natural Fibers. ISSN: 1544 0478. eISSN: 1544 046X. <a href="https://doi.org/10.1080/15440478.2020.1848722">https://doi.org/10.1080/15440478.2020.1848722</a></li><br>
                <li>Reyes-Samilpa, A.; <b>A. van 't Hooft</b>, J.A. Reyes-Agüero; S. Rubín de la Borbolla. 2020. Elaborar ayates. El trabajo artesanal <i>hñähñu</i> del hilado y tejido en el Valle del Mezquital, México. Itinerarios. Revista de estudios lingüísticos, literarios, históricos y antropológicos 31: 267-291. ISSN: 1507-7241. DOI: <a href="https://www.researchgate.net/publication/343615481_2020_Elaborar_ayates_El_trabajo_artesanal_hnahnu_del_hilado_y_tejido_en_el_Valle_del_Mezquital_Mexico_Itinerarios_Revista_de_estudios_linguisticos_literarios_historicos_y_antropologicos"> 10.7311/ITINERARIOS.31.2020-14</a></li><br>
                <li>Antoni, C.; E. Huber-Sannwald; H. Reyes-Hernández; <b>A. van 't Hooft</b>; M. Schoon. 2019. Socio-ecological dynamics of a tropical agricultural region: historical analysis of system change and opportunities. Land Use Policy 81: 346-359. <a href="https://doi.org/10.1016/j.landusepol.2018.10.028">https://doi.org/10.1016/j.landusepol.2018.10.028</a></li><br>
                <li>Heindorf, C.; J.A. Reyes–Agüero; <b>A. van 't Hooft</b>; J. Fortanelli–Martínez. 2019. Inter- and Intraspecific Edible Plant Diversity of the Tének Milpa Fields in Mexico. Economic Botany 73(4): 489–504. ISSN: 0013-0001 (Print) 1874-9364 (Online). <a href="https://doi.org/10.1007/s12231-019-09475-y">https://doi.org/10.1007/s12231-019-09475-y</a></li><br>
                <li>Navarro Gamboa, M.; V. Vázquez Solís; <b>A. van 't Hooft</b>; J.A. Reyes Agüero. 2019. Participación comunitaria y turismo alternativo en zonas indígenas en el contexto mexicano: cuatro estudios de caso. El Periplo Sustentable 36: 7-33. ISSN: 1870-9036. <a href="https://doi.org/10.36677/elperiplo.v0i36.9081"> https://doi.org/10.36677/elperiplo.v0i36.9081</a></li><br>
                <li>Monsiváis-Nava, C. D.; S. Romero-Contreras; I. García-Cedillo; <b>A. van 't Hooft</b>; A. C. Cubillas Tejeda 2018. Prácticas y saberes sobre alimentación infantil en familias de una comunidad cercana al tiradero municipal de San Luis Potosí. RESPYN Revista de Salud Pública y Nutrición, 17 (4): 11-26. ISSN: 1870-0160. DOI: <a href="https://respyn.uanl.mx/index.php/respyn/article/view/392" target="_blank"> 10.29105/respyn17.4-2</a></li><br>
                <li>Antoni, C., E. Huber-Sannwald, H. Reyes-Hernández, <b>A. van 't Hooft</b>. 2017. Condition, tendency, and dynamic interaction in a resilience context of a socio ecological system. Journal of Natural Resources and Development 7:12-21. <a href="https://journals.ub.uni-koeln.de/index.php/JNRD/article/view/755">https://journals.ub.uni-koeln.de/index.php/JNRD/article/view/755</a></li><br>
                <li>Torres R., J. C.; J. Fortanelli M.; V. Benítez G.; <b>A. van 't Hooft</b>. 2015. Etnobotánica de la vivienda rural en la región xi’iuy de La Palma, San Luis Potosí, México. Etnobiología 13(2): 21-36. ISSN <a href="https://revistaetnobiologia.mx/index.php/etno/article/view/77/75">1665-2703</a></li><br>
                <li>Torres-Nerio, R.; G. Domínguez Cortinas; <b>A. van 't Hooft</b>; F. Díaz-Barriga Martínez; A. Cr. Cubillas-Tejeda. 2010. Análisis de la percepción de exposición a riesgos ambientales a la salud, en dos poblaciones infantiles mediante la elaboración de dibujos. Revista Salud Colectiva 6(1): 65-81. ISSN: 1669-2381 (impreso). DOI: <a href="http://revistas.unla.edu.ar/saludcolectiva/article/view/358"> 10.18294/sc.2010.358</a></li><br>
              </ul>
              <strong>Libros</strong><br><br>
              <ul class="vineta">
                <li><b>Van 't Hooft, A.</b> (ed). 2020. Environment and resources management in Latin America. Medio ambiente y gestión de los recursos naturales en América. San Luis Potosí/Colonia (Alemania), PMPCA-FCSH, Universidad Autónoma de San Luis Potosí e Institute for Technology and Resources Management in the Tropics and Subtropics, Technische Hochschule Köln. 124 pp. ISBN: <a href="https://www.researchgate.net/publication/339274964_2020_Environment_and_resources_management_in_Latin_America_Medio_ambiente_y_gestion_de_los_recursos_naturales_en_America"> 978-607-535-132-2</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>     <br><br><br>
    </div>
    </div>
</div>

@endsection