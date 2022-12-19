@extends('profesores.templates.profesor')

@section('name')
DR. JAVIER FORTANELLI MARTÍNEZ
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/JavierFortanelliMartinez.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas</strong></h5>
  <br>
  <p>
      Altair num. 200, Col. del Llano C.P. 78377 <br>
      San Luis Potosí, SLP. México <br>
      Tel.: 52(444) 842 11 46 Fax.: 52(444) 842 23 59 ext. 106 <br>
      fortanel@uaslp.mx <br>
  </p>

  <div class="enlacesprof">
      <a target="_blank" href="https://uaslpedu-my.sharepoint.com/personal/difusion_iizd_uaslp_mx/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fdifusion%5Fiizd%5Fuaslp%5Fmx%2FDocuments%2FCURRICULUM%2F2022%2FCV%5FJFM%2Epdf&parent=%2Fpersonal%2Fdifusion%5Fiizd%5Fuaslp%5Fmx%2FDocuments%2FCURRICULUM%2F2022&ga=1">Webpage</a>
      <a target="_blank" href="{{asset('storage/CV/Fortanelli_Martinez_Javier.pdf')}}">Currículum Vitae </a>
      <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/jyMAAA%3d%3d">Directorio de Investigadores</a>
      <a target="_blank" href="https://orcid.org/0000-0003-1958-7553"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
      <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=12753922700"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
  </div>
</div>

@endsection

@section('extra')

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-actividad-academica"
        aria-expanded="true" aria-controls="collapseOne">
        <strong>Actividad académica</strong>
      </button>
    </h2>
    <div id="collapse-actividad-academica" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol>
        <li><strong>Cursos</strong> </li>
          <ul class="vineta">
            <li>Ecología de la producción de cosechas</li>
            <li>Ecología</li>
          </ul><br>
        <li><strong>LGAC</strong></li>
          <ul class="vineta">
            <li>Etnobiología </li>
            <li>Sistemas de producción de cosechas vegetales</li>
          </ul><br>
        <li><strong>Dirección de Tesis</strong></li><br>
          <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em></p>
          <ul class="vineta">
              <li>Chávez Acuña Isaac Jacob. 2010. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3614/MCA1ZAM01001.pdf?sequence=3&isAllowed=y">Análisis estructural de dos poblaciones de <em>Dioon edule</em> Lindl. (Zamieaceae) en comunidades indígenas y mestizas de la región <em>Xi'iuy</em> de La Palma, S.L.P.: implicaciones ecológicas y culturales</a></li>
              <li>Medrano Echalar Ana María. 2010. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3610/MCA1CQW01001.pdf?sequence=3&isAllowed=y"> Expansión del cultivo de Quinua <em>(Chenopodium quinoa</em> Willd.) y calidad de suelos. Análisis en un contexto de sostenibilidad en el intersalar boliviano</a></li>
              <li>Van Deuren Christine Milunka. 2010. <a href="https://ninive.uaslp.mx/xmlui/handle/i/3613">Ecoturismo regional en el cañón del Espinazo del Diablo, S.L.P., México</a>.</li>
              <li>Giraldo Arias Andrea. 2013. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3700/MCA1PPM01301.pdf?sequence=1&isAllowed=y"> Problemática y propuestas para el manejo sostenible del Río Tamasopo, San Luis Potosí, México</a></li>
              <li>Muñoz Blanco Marco Arturo. 2014. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3845/MCA1AEM01401.pdf?sequence=3&isAllowed=y">Análisis de la erosión mediante modelado e indicadores visuales en la microcuenca batatal, Río Guapi-Macacu, Rio de Janeiro, Brasil</a></li>
              <li>Villalobos Moreira Guillermo. 2015. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3970/MCA1TMV01501.pdf?sequence=1&isAllowed=y"> Transformaciones en los medios de vida y en la organización social de comunidades productoras de quinua real orgánica en el Altiplano Sur de Bolivia</a></li>
              <li>Barrales Carvajal Eyleen Alejandra. 2016. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4129">Estrategias para la seguridad alimentaria en zonas rurales secas: el caso de San Antonio de Coronados, Catorce, San Luis Potosí, México</a></li>
              <li>Wild Clara Mila. 2020. Quantification of the ecosystem function pest control: assessing predation rates of artificial caterpillars by birds in secondary forest fragments within a peri-urban area in southeastern Brazil</li>
              <li>González Villacís Denisse Lucía. 2021. Analysis of potential reduction of atmospheric emissions from harvesting process in sugarcane fields in Tamasopo-Mexico and Campos dos Goytacazes - Brazil </li>
              <li>Pacheco Mafla Leonel. 2022. Sustainability strategies for the Bellavista Community (Ecuador): Potential of bio aquiatic production</li>
              <li>Jáquez González Laura Elizabeth. 2022. Bioplastic use feasibility in greenhouse farming in the Mexican Potosino Plateau</li>
          </ul>
          <br>
          <p><em>Maestría en Ciencias Ambientales</em></p>
          <ul class="vineta">
            <li>Carbajal Esquivel Haydeé. 2008. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/2056/MCA1IPC00801.pdf?sequence=3&isAllowed=y">Importancia de las plantas en la cultura alimentaria de la comunidad <em>XI'OI</em> Las Guapas, Rayón, San Luis Potosí</a></li>
            <li>Torres Reyna Juan Carlos. 2010. <a href="https://ninive.uaslp.mx/xmlui/handle/i/3563">Arquitectura y etnobotánica de la vivienda rural <em>Xi'iuy</em> en la Palma, San Luis Potosí</a></li>
            <li>Errejón Gómez Julio César. 2011. Problemática para la protección de un área natural: el cañón del Espinazo del Diablo, San Luis Potosí, México</li>
            <li>Pineda Manzano Ulises. 2013. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3835/MCA1PCR01301.pdf?sequence=3&isAllowed=y"> Participación comunitaria en la protección de los recursos forestales del ejido San Nicolás de los Montes, Tamasopo, San Luis Potosí</a></li>
            <li>Castillo Gómez Hugo Alberto. 2015. <a href="https://ninive.uaslp.mx/xmlui/handle/i/3853">Flora vascular, vegetación y plantas útiles del cañón del Espinazo del Diablo, San Luis Potosí, México</a></li>
            <li>Spíritu Ruíz Paola Monserrat. 2015. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3883/MCA1ECO01501.pdf?sequence=3&isAllowed=y">Estrategias comunitarias para la conservación del bosque: el caso de ejido San José del Corito y Durazno, Alaquines, San Luis Potosí, México</a></li>
            <li>Ramírez Palomeque Tania Lucely. 2017. <a href="http://ninive.uaslp.mx/jspui/bitstream/i/4519/1/MCA1RPT201701.pdfhttps://ninive.uaslp.mx/xmlui/bitstream/handle/i/4519/MCA1RPT201701.pdf?sequence=1&isAllowed=y"> Aprovechamiento comercial sustentable de orquídeas en contextos privados y comunitarios: dos estudios de caso en Xilitla, San Luis Potosí</a></li>
            <li>Zamora García Elizabeth Giomara. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4708/MCA1ZGE201801.pdf?sequence=1&isAllowed=y">Turismo de naturaleza para el desarrollo comunitario y la conservación de los recursos naturales en San Nicolás de los Montes, Tamasopo, San Luis Potosí</a></li>
          </ul>
          <br>
          <p><em>Doctorado en Ciencias Ambientales</em></p>
          <ul class="vineta">
            <li>Ramos Pérez Pedro Pablo. 2016. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4123">Alternativas para el desarrollo rural sostenible en tres zonas cafetaleras indígenas de México</a>. (Co-Dirección)</li>
          </ul>
        </ol>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-publicaciones"
        aria-expanded="true" aria-controls="collapseOne">
        <strong>Publicaciones</strong>
      </button>
    </h2>
    <div id="collapse-publicaciones" class="accordion-collapse collapse" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <strong>Artículos cientifícos</strong>
        <p></p>
        <ul class="vineta">
          <li>Diedhiou, I.; H.M. Ramírez-Tobías; J. Fortanelli-Martínez; R. Flores-Ramírez; J. Flores. 2022. Induced passive heating on the emergence, early growth and photochemical responses of seedlings of native maize (Zea mays L.) genotypes from warm-dry, temperate, and hot and humid climates. Emirates Journal of Food and Agriculture. 35 (10):815-826. <a href="https://www.ejfa.me/index.php/journal/article/view/2929">https://doi: 10.9755/ejfa.2022.v34.i10.2929</a></li><br>
          <li>Diedhiou, I.; H.M. Ramírez Tobías; J. Fortanelli Martínez.; R. Flores Ramírez. 2022. Maize intercropping in the traditional “Milpa” system. Physiological, morphological, and agronomical parameters under induced warming: evidence of related effect of climate change in San Luis Potosí (Mexico). Life. 2022, 12 1589, 37 p. ISSN: 2075-1729. <a href="https://doi.org/10.3390/life12101589">https://doi.org/10.3390/life12101589</a></li><br>
          <li>Yáñez-Espinosa, L.; J.Flores; J. Fortanelli-Martínez; J.R. Quintero-Ruiz; J.A. De Nova-Vázquez; H. Reyes-Hernández. 2022. Leaf traits variation of Myriocarpa longipes and Brosimum alicastrum in relation to microclimatic gradient in tropical dolines of Mexico. The Journal of the Torrey Botanical Society. 149 (4): 262-272 DOI: <a href="https://doi.org/10.3159/TORREY-D-22-00011.1">https://doi.org/10.3159/TORREY-D-22-00011.1</a></li><br>
          <li>Cruz-Armendáriz, N.M.; J.A. Reyes-Agüero; E. Ruiz-Sánchez; <b>J. Fortanelli Martínez</b>; Fernanda Martínez Armendáriz. 2022. Geographical and ecological distribution of native bamboo species in San Luis Potosí, Mexico. Phytotaxa. 543 (3): 170-180. ISSN 1179-3155 (print); ISSN 1179-3163 (online). DOI: <a href="https://doi.org/10.11646/phytotaxa.543.3.1">https://doi.org/10.11646/phytotaxa.543.3.1</a></li>
          <li><b>Fortanelli-Martínez, J.</b>, G.A. Salazar; P. Castillo-Lara; J. García-Pérez; C. Alfaro-Medina, H.A. Castillo-Gómez, T.L. Ramírez-Palomeque; J.I. Morales de la Torre; J.A. De-Nova. 2022. Orchidaceae de San Luis Potosí, México: riqueza y distribución. Botanical Sciences. 100 (1): 223-246. DOI: <a href="https://www.botanicalsciences.com.mx/index.php/botanicalSciences/article/view/2875">10.17129/botsci.2875</a>.</li><br>
          <li>Castillo-Pérez, L.J.; A.J. Alonso-Castro; <b>J. Fortanell-Martínez</b>; C. Carranza-Álvarez. 2022 Micropropagation of <i>Catasetum integerrimum</i> Hook (Orchidaceae) through seed germination and direct shoot regeneration from pseudobulbs and roots. In Vitro Cellular & Developmental Biology – Plant ISSN: 1054-5476, <a href="https://doi.org/10.1007/s11627-021-10248-3">https://doi.org/10.1007/s11627-021-10248-3</a></li><br>
          <li>Diédhiou, I.; H. M. Ramírez-Tobías; <b>J. Fortanelli-Martínez</b>; R. Flores-Ramírez. 2021. Effects of different temperatures and water stress in germination and initial growth of creole genotypes of maize from three different agroclimatics regions of San Luis Potosí (México). Maydica. 66 (1): 1-16. ISSN: 2279-8013.</li><br>
          <li>Heindorf, C.; J. A. Reyes-Agüero; <b>J. Fortanelli-Martínez</b>; A. van ’t Hooft. 2021.  More than Maize, Bananas, and Coffee: The Inter– and Intraspecific Diversity of Edible Plants of the Huastec Mayan Landscape Mosaics in Mexico. Economic Botany 75 (2): 158-174. ISSN:1874-9364 (Online).</li><br>
          <li>Castillo P., L.J.; D. Martínez S.; <b>J. Fortanelli M.</b>; C. Carranza A. 2021. Asymbiotic seed germination, in vitro seedling development, and symbiotic acclimatization of the Mexican threatened orchid Stanhopea tigrina. Plant Cell, Tissue and Organ Culture. (Publicado Online, 28 de marzo, 2021). https://doi.org/10.1007/s11240-021-02064-9.</li><br>
          <li>Gutiérrez H., R.; F.J. Sahagún S.; P. Delgado S.; P. Castillo L.; <b>J. Fortanelli M.</b>; H. Reyes H.; J.A. de Nova V. 2021. Reevaluación de los bosques tropicales estacionalmente secos de la Reserva de la Biosfera Sierra del Abra Tanchipa y áreas con potencial para su conservación. Botanical Sciences. 99 (4): 735-751. DOI: <a href="https://www.botanicalsciences.com.mx/index.php/botanicalSciences/article/view/2771">10.17129/botsci.2771</a>.</li><br>
          <li>Rubio M., G.; I.J. Chávez A.; L. Yáñez E.; <b>J. Fortanelli M.</b> 2021. Effect of seed collection on the structure and dynamics of wild populations of Dioon edule (Zamiaceae). The Journal of the Torrey Botanical Society. 148 (1): 17–26. <a href="https://doi.org/10.3159/TORREY-D-20-00021.1">https://doi.org/10.3159/TORREY-D-20-00021.1</a>. Journal Citation Reports Fecha de publicación: 12 de marzo de 2021.</li><br>
          <li>Carranza-Álvarez, C.; Trinidad-García, K.L.; H. Reyes-Hernández; L.J. Castillo-Pérez; <b>J. Fortanelli-Martínez</b>. 2021. Efecto de extractos orgánicos naturales sobre la micropropagación in vitro de Vanilla planifolia Jacks. ex Andrews (Orchidaceae). Biotecnia. XXIII (1): 5-12. ISSN: 1665-1456.</li><br>
          <li>Heindorf, C.; A. van 't Hooft; J.A. Reyes-Agüero; <b>J. Fortanelli-Martínez</b>. 2020. Folk Taxonomy of the Inter- and Intraspecific Edible Plant Diversity of Huastec Mayan Farmers in Mexico. Journal of Ethnobiology. 40 (4): 552-568.</li><br>
          <li>Tristán M., E.; M. <b>J. Fortanelli M.</b>; M. Bonta. 2020. Toxic harvest: Chamal cycad (<i>Dioon edule</i>) food culture in <i>xi'iuy</i> indigenous communities of San Luis Potosi, Mexico. Journal of Ethnobiology. 40 (4): 519-534. <a href="https://doi.org/10.2993/0278-0771-40.4.519">https://doi.org/10.2993/0278-0771-40.4.519</a></li><br>
          <li>De-Nova, J.A.; R. González-Trujillo; P. Castillo-Lara; <b>J. Fortanelli-Martínez</b>; A. Mora-Olivo; M. M. Salinas-Rodríguez. 2019. Inventario florístico de la Reserva de la Biosfera Sierra del Abra Tanchipa, San Luis Potosí, México. Botanical Sciences 97 (4): 757-784. ISSN digital: 2007-4476. DOI: <a href="https://www.botanicalsciences.com.mx/index.php/botanicalSciences/article/view/2285">10.17129/botsci.2285</a>.</li><br>
          <li>Heindorf, C.; J. A. Reyes–Agüero; A. Van’t Hooft; <b>J. Fortanelli–Martínez</b>. 2019, Inter- and Intraspecific Edible Plant Diversity of the Tének Milpa Fields in Mexico. Economic Botany. XX(X): 1–16. ISSN: 0013-0001 (Print) 1874-9364 (Online).</li><br>
          <li>Quintero-Ruiz, J. R.; L. Yáñez-Espinosa; J. Flores; <b>J. Fortanelli</b>; A. De-Nova; H. Reyes-Hernández; J. P. Rodas-Ortíz. 2019. Analysis of the soil and microclimate relationship in two dolines of Carso Huasteco, Mexico. Journal of Natural Resources and Development. 09: 25-33. DOI number: <a href="https://journals.ub.uni-koeln.de/index.php/JNRD/article/view/773"> 10.5027/jnrd.v9i0.03</a>. ISSN: 0719 – 2452.</li><br>
          <li>López P., L. M.; <b> J. Fortanelli M.</b>; J. L. Flores F.; J. García P. 2018. Análisis de la cobertura vegetal en el gradiente topográfico del cráter La Joya Honda San Luis Potosí. Polibotánica. 46: 117-135. ISSN electrónico: 2395-9525.</li><br>
          <li>Bara, C. R.; R. Jarquín L.; H. Reyes H.; <b>J. Fortanelli M.</b> 2017. Adaptation of a participatory organic certification system to the organic products law in six local markets in Mexico. Agroecology and Sustainable Food Systems 42 (1): 48-76. ISSN: 2168-3565 Online ISSN: 2168-3573. DOI: <a href="https://www.tandfonline.com/doi/abs/10.1080/21683565.2017.1359736?journalCode=wjsa21"> 10.1080/21683565.2017.1359736</a>. </li><br>
          <li>Ramos P., P.P.; M. R. Parra V.; <b>J. Fortanelli M.</b>; M. Aguilar R. 2016. El linaje K´ulub  cambia de estrategia. Diversificación productiva en la zona cafetalera de Oxchuc, Chiapas. Agricultura, Sociedad y Desarrollo. 13:277-301. ISSN: 1870-5472.</li><br>
          <li>Torres R., J. C.; <b>J. Fortanelli M.</b>; V. Benítez G.; A. Van’t Hooft. 2015. Etnobotánica de la vivienda rural en la región <i>xi’iuy</i> de La Palma, San Luis Potosí, México. Etnobiología. 13(2): 21-36. ISSN 1665-2703.</li><br>
          <li>Lárraga L., R.; M. Aguilar R.; H. Reyes H.; <b>J. Fortanelli M.</b> 2014. La sostenibilidad de la vivienda tradicional: una revisión del estado de la cuestión en el mundo. Revista de Arquitectura. 16: 126-133. ISSN 1657-0308 ISSN (en línea) 2357626X doi <a href="https://www.redalyc.org/pdf/1251/125138774014.pdf">10.14718/RevArq.2014.16.1.14</a>.</li><br>
          <li>Lárraga L., R.; M. Aguilar R.; <b>J. Fortanelli M.</b> 2014. La vivienda tradicional y sus componentes de sostenibilidad: estudio comparativo entre nahuas y teeneks en la Huasteca Potosina, México. Tlatemoani Revista Académica de Investigación editada por Eumed.net España. Num. 17: 170-198 ISSN: 1989-9300.</li><br>
          <li>Castañeda C., X.; O. Reyes P.; <b>J. Fortanelli M.</b>; M. Aguilar R. 2014. Distribución espacial de la biodiversidad en el estado de San Luis Potosí. Journal of Latin American Geography. 13(2): 11-39. DOI: <a href="http://www.jstor.org/stable/24395914.">10.1353/iag.2014.0038</a>; ISSN 1545-2476 E-ISSN 1548-5811.</li><br>
          <li><b>Fortanelli M, J.</b>; J. García P.; P. Castillo L. 2014. Estructura y composición de la vegetación del bosque de niebla de Copalillos, San Luis Potosí, México. Acta Botánica Mexicana. Número 106: 161-186. ISSN: 0187-7151.</li><br>			                
        </ul>

        <p><strong>Capítulos de Libros</strong></p>
        <p></p>
        <ul class="vineta">
            <li>Bara, C.R.; R. Jarquin G.; <b>J. Fortanelli M.</b> 2021. La agricultura orgánica basada en principios agroecológicos como alternativa para fomentar una alimentación sana y la sustentabilidad en las unidades productivos campesinos (UPC) en la Huasteca Potosina. En: J. Montes M., V. del C. Avendaño P. y A. de J. Nájera C. (coords.) Alimentación y sustentabilidad: Experiencias contemporáneas entre pueblos originarios de México. Editorial Universidad de La Serena. La Serena, Chile. pp. 95-113. ISBN: 978-956-6071-20-4. Fecha de publicación: marzo de 2021.</li><br>
            <li>Castillo-Pérez, L.J.; A.J. Alonso-Castro; <b>J. Fortanelli-Martínez</b>; C. Carranza-Álvarez. 2021. Biotechnological approaches for conservation of medicinal plants. In: Rouf Bhat, Khalid Hakeem, Moonisa Aslam Dervash (eds.) Phytomedicine: A Treasure of Pharmacologically Active Products from Plants. Academis Press. Cambridge MA, USA. pp. 35-58. ISBN Impreso: 9780128241097; ISBN e-book: 9780128241103. Fecha de publicación: 25 de febrero, 2021.</li><br>
            <li>Barrales C. E.A.; <b>J. Fortanelli M.</b>; S. Schlüter; M.G. Guzmán C. 2020. Estrategias alimentarias en áreas rurales con ecosistemas áridos en México: San Antonio de Coronados, Catorce, SLP. En: A. van 't Hooft (Ed.) Environment and Resources Management in Latin America. Medio ambiente y gestión de los recursos naturales en América Latina. Universidad Autónoma de San Luis Potosí. México. pp. 17-22. ISBN: 978-607-535-132-2. Fecha de publicación: 13 de febrero, 2020.</li><br>
            <li><b>Fortanelli M., J.</b>; J.A. Reyes A. 2020. El programa de colaboración internacional ENREM, experiencias de un viaje académico de diez años. La perspectiva del PMPCA. En: A. van 't Hooft (Ed.) Environment and Resources Management in Latin America. Medio ambiente y gestión de los recursos naturales en América Latina. Universidad Autónoma de San Luis Potosí. México. pp. 9-12. ISBN: 978-607-535-132-2. Fecha de publicación: 13 de febrero, 2020.</li><br>
            <li>De Nova, J.A.; J. García P.; P. Castillo L.; <b>Fortanelli M., J.</b>; Robles D., E. 2019. Angiospermas. En: Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO) y Gobierno del Estado de San Luis Potosí. La biodiversidad en San Luis Potosí. Estudio de Estado. CONABIO, México. Vol. 2, pp. 111-121. ISBN: 978-607-8570-32-4</li><br>
            <li>Tristán M., E.; <b>J. Fortanelli M.</b> 2019. Estudio de caso: Etnobotánica del chamal (<i>Dioon edule</i>) en la región <i>xi’iuy</i>. En: Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO) y Gobierno del Estado de San Luis Potosí. La biodiversidad en San Luis Potosí. Estudio de Estado. CONABIO, México. Vol. 1, pp. 258-261. ISBN: 978-607-8570-31-7.</li><br>
            <li><b>Fortanelli M., J.</b>; J. García P. 2019. Bosques de niebla. En: Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO) y Gobierno del Estado de San Luis Potosí. La biodiversidad en San Luis Potosí. Estudio de Estado. CONABIO, México. Vol 2, pp. 21-26. ISBN: 978-607-8570-32-4.</li><br>
            <li><b>Fortanelli M., J.</b>; J. García P. 2019. Bosques tropicales. En: Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO) y Gobierno del Estado de San Luis Potosí. La biodiversidad en San Luis Potosí. Estudio de Estado. CONABIO, México. Vol. 2, pp. 31-36. ISBN: 978-607-8570-32-4.</li><br>
            <li>Ramírez P., T.L.; C.S. Alfaro M.; <b>J. Fortanelli M.</b>; J. A. de Nova V. 2019. Biodiversidad, conservación y aprovechamiento de orquídeas. En: H. Reyes H., A. Durán F., F.J. Sahagún S. (Coords.) Biodiversidad y conservación de ecosistemas de la Región Prioritaria para la Conservación Xilitla. Universidad Autónoma de San Luis Potosí y Universidad de Guadalajara. México. pp. 114-131. ISBN: 978-607-535-102-5.</li><br>
            <li><b>Fortanelli M., J.</b>; P. Castillo L.; J.A. de Nova V. 2018. Las orquídeas. En: H. Reyes H., J.A. de Nova V., A. Durán F. (Coords.) Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y Acciones para su Conservación. Universidad Autónoma de San Luis Potosí y Comisión Nacional de Áreas Naturales Protegidas. San Luis Potosí, México. pp. 79- 96. ISBN: 978-607-535-054-7.</li><br>
            <li>De Nova V., J.A.; P. Castillo L.; M.M. Salinas R.; <b>J. Fortanelli M.</b>; A. Mora O. 2018. Los bosques tropicales estacionales. En: H. Reyes H., J.A. de Nova V., A. Durán F. (Coords.) Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y Acciones para su Conservación. Universidad Autónoma de San Luis Potosí y Comisión Nacional de Áreas Naturales Protegidas. San Luis Potosí, México. pp. 59-78. ISBN: 978-607-535-054-7.</li>
        </ul>

        <p><strong>Libros</strong></p>
        <p></p>
        <ul class="vineta">
            <li>Alfaro M., C. S.; T. L. Ramírez P.; <b>J. Fortanelli M.</b>; G. A. Salazar; H. A. Castillo G.; J. A. de Nova V.; P. Castillo L. 2021. Orquídeas de Xilitla S.L.P. Catálogo. (2ª. Ed.) Universidad Autónoma de San Luis Potosí. San Luis Potosí, S.L.P., México. 157 p. ISBN: 978-607-535-246-6. Tiraje: 500 ejemplares.</li><br>
            <li>Alfaro M., C. S.; T. L. Ramírez P.; <b>J. Fortanelli M.</b>; H. A. Castillo G.; G. A. Salazar; J. A. de Nova V.; P. Castillo L. 2017. Orquídeas de Xilitla S.L.P. Catálogo. (1ª. Ed.) Universidad Autónoma de San Luis Potosí. San Luis Potosí, S.L.P., México.126 p. ISBN: 978-607-535-008-0. Tiraje: 500 ejemplares.</li><br>
            <li>Castañeda C., X.; O. Reyes P.; M. Aguilar R.; <b>J. Fortanelli M.</b> 2013. Áreas naturales prioritarias de conservación con potencial turístico en el estado de San Luis Potosí. Coordinación de Ciencias Sociales y Humanidades, Universidad Autónoma de San Luis Potosí; Editorial Plaza y Valdés. México, D.F. 210 p. ISBN: 978-607-7856-87-0 (UASLP); 978-607-402-601-6 (Plaza y Valdés). Tiraje 1000 ejemplares.</li><br>
            <li>Bravo O., M.; <b>J. Fortanelli M.</b> 2007. Identidad y género. Trabajo e interacción social de las horticultoras de Mexquitic. El Colegio de San Luis A. C. San Luis Potosí, S.L.P., México. 91 p. ISBN 970-762-038-2.</li><br>
            <li><b>Fortanelli M., J.</b>; J. G. Loza L.; F. Carlín C.; J. R. Aguirre R. 2007. Jardines en el desierto: agricultura de riego, tradicional y moderna, en el altiplano potosino. Instituto de Investigación de Zonas Desérticas, Universidad Autónoma de San Luis Potosí y Consejo Potosino de Ciencia y Tecnología, Gobierno del Estado de San Luis Potosí. San Luis Potosí, S.L.P. 191 p. ISBN 970-705-047-0.</li><br>
            <li><b>Fortanelli M., J.</b>; J. R. Aguirre R. 2000. Pequeños regadíos en el altiplano potosino. Editorial Universitaria Potosina. San Luis Potosí, México. 206 p. ISBN-968-7674-76-80668-00022-A0199.</li>
        </ul>
      </div>
    </div>
  </div><br><br><br>
</div>

@endsection
