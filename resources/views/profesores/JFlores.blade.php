@extends('profesores.templates.profesor')

@section('name')
Dr. José Luis Flores Flores
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/JoseLuisFloresFlores.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas. SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair No. 200, Col. del Llano <br>
      C.P. 78377, San Luis Potosí, SLP. México <br><br>
      Tel.: +52 (444) 832-1000 ext. 9416 <br>
      <a href="mailto:joseluis.flores@uaslp.mx" style="color:rgb(0, 178, 227)"> joseluis.flores@uaslp.mx </a>
  </p>

  <div class="enlacesprof">
     <a href="https://uaslpedu-my.sharepoint.com/personal/difusion_iizd_uaslp_mx/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fdifusion%5Fiizd%5Fuaslp%5Fmx%2FDocuments%2FFICHAS%20PERSONALES%2F2022%2FJLFF%2Epdf&parent=%2Fpersonal%2Fdifusion%5Fiizd%5Fuaslp%5Fmx%2FDocuments%2FFICHAS%20PERSONALES%2F2022&ga=1"><em>Curriculum Vitae</em></a>
      <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/JjwAAA%3d%3d">Directorio de Investigadores</a>
    <a target="_blank" href="https://orcid.org/0000-0001-9306-6604"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
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
        <li><strong>Cursos</strong></li>
        <ul class="vineta">
          <li>Ecología cuantitativa </li>
        </ul>
        <p></p>
        <li><strong>LGAC</strong></li>
        <p></p>
        <ul class="vineta">
          <li>Biología de comunidades naturales </li>
          <li>Sistemas de producción animal en pastoreo </li>
        </ul>
        <p></p>
        <li><strong>Dirección de Tesis</strong></li>
        <p></p>
          <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em></p>
          <p></p>
          <ul class="vineta">
            <li>Nuñez Villarreal Jonathan Javier. 2010. <a href="#">Soil erosion assessment in the agricultural micro-basin of Pito Aceso in the municipality of Bom Jardim, Rio de Janeiro State</a></li>
          </ul>

          <p></p>
          <p><em>Maestria en Ciencias Ambientales</em></p>
          <p></p>
          <ul class="vineta">
            <li>Concostrina Zubiri Laura. 2010. <a href="#">Composición, estructura y dinámica de la Costra Biológica del Suelo (CBS) en un ecosistema de pastizal semiárido</a></li>
            <li>Ortega Martínez Eugenia de los Ángeles. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3568">Sistema de información digital (Rzedowski) para el conocimiento y uso de la diversidad vegetal en el estado de San Luis Potosí</a></li>
          </ul>

          <p></p>
          <p><em>Doctorado en Ciencias Ambientales</em></p>
          <p></p>
          <ul class="vineta">
            <li>Romo Campos Rosa de Lourdes. 2011. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3596/DCA1VGA01101.pdf?sequence=3&isAllowed=y">Exploración de mecanismos de interacciones bióticas en comunidades vegetales en un gradiente ambiental del Altiplano Mexicano</a></li>
            <li>Errejón Gómez Julio César. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4463/DCA1EGJ201801.pdf?sequence=1&amp;isAllowed=y">Causas socio-ecológicas de la configuración del paisaje actual de la porción noreste del corredor biológico de la Sierra Madre Oriental</a></li>
          </ul>

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

        <p><strong>Artículos de Investigación</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Lara-Villa, M. A., <b>Flores-Flores, J. L.</b>, Alatriste-Mondragon, F., & Mata-González, R. 2022. Plant production in semiarid shrubland communities amended with biosolids in Central Mexico. Rangeland Ecology & Management, 81, 34-43.</li><br>
          <li>Chávez-Acuña, I. J., <b>Flores-Flores, J. L.</b>, Domínguez-Cortinas, G., & García-Chávez, E. 2022. Percepción social del papel de la variabilidad y el cambio climático sobre los sistemas socio-ecológicos en comunidades indígenas y mestizas de la Huasteca Potosina en México. Estudios Sociales. Revista de Alimentación Contemporánea y Desarrollo Regional. 32(59).</li><br>
          <li>Ramírez-Albores JE, Badano EI, Flores J, <b>Flores-Flores JL</b>, Yáñez-Espinosa L. 2019. Scientific literature on invasive alien species in a megadiverse country: advances and challenges in Mexico. NeoBiota 48: 113–127.</li><br>
          <li>López-Palacios, L.M.; J. Fortanelli Martínez, <b>J.L. Flores-Flores</b>, y J. García-Pérez. 2018. Análisis de la cobertura vegetal en el gradiente topográfico del cráter la joya honda San Luis Potosí. Polibotánica 46: 117-135.</li><br>
          <li>Záhora, J. P. Nájera Quezada, <b>J.L. Flores Flores</b>, y J. Morales. 2018. Echinofossulocactus or Stenocactus. The Cactus Explorer, VII (1) 24: 43-58.</li><br>
          <li>López P., L. M.; J. Fortanelli M.; <b>J. L. Flores Flores.</b>; J. García P. 2018. Análisis de la cobertura vegetal en el gradiente topográfico del cráter La Joya Honda San Luis Potosí. Polibotánica. 46: 117-135.</li><br>
          <li>Errejón Gómez, J. C. E., Subirós, J. V., <b>Flores Flores, J. L.</b>, Hernández, H. R., & Muñoz-Robles, C. A. (2018). Conectividad de los ecosistemas entre las reservas de la biosfera “El Cielo” y “Sierra del Abra Tanchipa” en México. Investigaciones Geográficas (Esp), (70), 181-196.</li><br>
          <li>Errejón Gómez, J. C., <b>Flores Flores, J. L.</b>, Muñoz Robles, C. A., & Reyes Hernández, H. 2017. Las políticas forestales en el estado de San Luis Potosí en el Porfiriato. Región y Sociedad, 29(69), 219-248.</li><br>
          <li>Záhora, J. P. Najera Quezada, <b>J.L. Flores Flores</b>, A. Pascalín Colín and J. Ríha 2017. Field observations and threatening environmental factors of Echinofolocactus sulphureus (Dietr.) Meyrán. The Cactus Explorer, 18: 61–74.</li><br>
          <li>Errejón Gómez, J. C., Flores Flores, J. L., Muñoz Robles, C. A., & Reyes Hernández, H. 2017. Las políticas forestales en el estado de San Luis Potosí en el porfiriato. Región y Sociedad, 29(69), 219-248.</li><br>
          <li>Záhora, J. P. Najera Quezada, <b>J.L. Flores Flores</b>, A. Pascalín Colín and J. Ríha. 2017. Field observations and threatening environmental factors of Echinofolocactus sulphureus (Dietr.) Meyrán. The Cactus Explorer, 18: 61-74.</li><br>
          <li>Leija-Loredo, E. G., H. Reyes-Hernández, O. ReyesPérez, <b>J. L. Flores-Flores</b> & F. J. S. Sahagún. 2016. Cambios en la cubierta vegetal, usos de la tierra y escenarios futuros en la región costera del estado de Oaxaca, México. Madera y Bosques 22: 125–140.</li><br>
          <li>Badano E.I., O.R. Samour-Nieva, J. Flores, <b>J.L. Flores-Flores</b>, J.A. Flores-Cano & J.P. Rodas Ortiz. 2016. Facilitation by nurse plants contributes to vegetation recovery in human-disturbed desert ecosystems. J. Plant Ecol., 9(5): 485-497.</li><br>
          <li>Leija-Loredo, E. G., Reyes-Hernández, H., Reyes-Pérez, O., <b>Flores-Flores, J. L.</b>, & Sahagún-Sanchéz, F. J. 2016. Cambios en la cubierta vegetal, usos de la tierra y escenarios futuros en la región costera del estado de Oaxaca, México. Madera y Bosques, 22(1), 125-140.</li><br>
          <li>Badano, E. I., Samour-Nieva, O. R., Flores, <b>J., Flores-Flores</b>, J. L., Flores-Cano, J. A., & Rodas-Ortíz, J. P. (2016). Facilitation by nurse plants contributes to vegetation recovery in human-disturbed desert ecosystems. Journal of Plant Ecology, 9(5), 485-497.</li><br>
          <li>Rodriguez-Hernandez, M.C., I. Bonifas, M.C. Alfaro-De la Torre, J.L. Flores-Flores, B. Bañuelos-Hernández, O. Patiño-Rodríguez. 2015. Increased accumulation of cadmium and lead under Ca and Fe deficiency in Typha latifolia: A study of two pore channel (TPC1) gene responses. Environmental and Experimental Botany, 115: 38-48.</li><br>
          <li>Fuentes-Galván, M. L., Delgado-Galván, X., Charcas-Salazar, H., Mora-Rodríguez, J., Flores, J. L. F., & Benavides, A. C. 2015. Rooftop rainwater harvesting acceptance in three localities of Guanajuato, central Mexico. Interciencia, 40(6), 403-408.</li><br>
          <li>Romo-Campos, R, <b>J.L. Flores-Flores</b>, C. Jacobo-Pereira y E. N. López-Borja. 2014.  Efecto de la mirmecocoria en la germinación de Opuntia ficus-indica. Boletin Nakari Vol. 25 Pag. 37-37.</li><br>
          <li>Concostrina-Zubiri, L., HuberSannwald, E., Martínez, I., <b>Flores Flores, J. L.</b>, Reyes Agüero, J. A., Escudero, A., & Belnap, J. 2014. Biological soil crusts across disturbance-recovery scenarios: effect of grazing regime on community dynamics. Ecological Applications Vol. 24 Pag. 1863-1863</li><br>
          <li>Ramos-Palacios CR, EI Badano, J Flores, JA Flores-Cano & <b>JL Flores-Flores</b>. 2014. Distribution patterns of acorns after primary dispersion in a fragmented oak forest and their consequences on predators and dispersers.  European Journal of Forest Research Vol. 133 Pag. 391-391.</li><br>
          <li>Romo-Campos, R., <b>J. L. Flores-Flores</b>, J. Flores, y G. Álvarez-Fuentes 2013. Factores abióticos involucrados en la facilitación entre leosas y suculentas en el Altiplano Mexicano. Botanical Sciences Vol. 91 Pag. 319-319.</li><br>
          <li>Concostrina-Zubiri, L., E. Huber-Sannwald, I. Martínez, <b>J.L. Flores Flores</b>, & A. Escudero 2013. Biological soil crusts greatly contribute to small-scale soil heterogeneity along a grazing gradient. Soil Biology and Biochemistry Vol. 64 Pag. 28-28.</li><br>
          <li>Romero-Manzanares, A., <b>J. L. Flores-Flores</b>, M. Luna-Cavazos , and E. García-Moya 2012 effect of slope and aspect on the associated flora of pinyon pines in central Mexico. The Southwestern Naturalist Vol. 57 Pag. 452-452</li><br>
          <li>Sahagún S.F. J., H. Reyes H., <b>J. L. Flores Flores.</b>, L. Chapa V., 2011. Modelización de escenarios de cambio potencial en la vegetación y el uso del suelo en la sierra madre oriental de San Luis Potosí, México.  Journal of Latin American Geography Vol. 10 Pag. 65-65.</li><br>
          <li>Lara V. M. A., <b>J. L. Flores F.</b>, F. Alatriste M. Y M. Monroy F. 2011. Heavy-metal uptake and growth of Bouteloua species in semiarid soils amended with biosolids. Soil Science and Plant Analysis Vol. 42 Pag. 1632-1632</li><br>
          <li>Mora-lópez J. L., J. A. Reyes-Agüero, <b>J. L. Flores-Flores</b>, C.B. Peña-Valdivia, J. R. Aguirre-Rivera. 2011. Variación morfológica y humanización de la sección Salmianae del género Agave.  Agrociencia Vol. 45 Pag. 465-465</li><br>
          <li>Avalos Lozano, J.A., M. Aguilar Robledo, P. Medellín Milán, y <b>J.L. Flores Flores</b> 2010. El impacto de la industria minero-metalúrgica sobre los paisajes de la Nueva España, siglos XVIII Y XIX, estudio de caso en el sitio sagrado natural de Wirikuta.  V Simposio Latinoamericano y Caribeño de Historia Ambiental Vol. 1 Pag. 168-168.</li><br>
          <li>Romo Campos, L., <b>J. L. Flores Flores</b>, J. Flores, and Gregorio Álvarez Fuentes, J. 2010 Seed germination of Opuntia species from an aridity gradient in central Mexico. PACD Vol. 12 Pag. 181-181</li><br>
          <li>Aguilar O. F., H. Charcas S., J. R. Aguirre R., J. Castro L. Y <b>J. L. Flores Flores</b>. 2010. Estado actual del aprovechamiento del agua subterránea del valle de Rioverde, San Luis Potosí, México. Técnica y Ciencias del Agua Vol. 4 Pag. 139-139.</li><br>
          <li>Luévano, J., Mellink, E., Riojas-López, M. E., & <b>Flores-Flores, J. L.</b> 2008. Nocturnal rodents at the edge of a microphyllous shrubland and gypsophilous grassland in San Luis Potosi, Mexico. Revista Mexicana de Biodiversidad, 79(1), 197-203.</li><br>
          <li>Yeaton, R. I., & <b>Flores-Flores, J. L.</b> 2006.. Patterns of occurrence and abundance in colony complexes of the Mexican prairie dog (Cynomys mexicanus) in productive and unproductive grasslands. Acta Zoológica Mexicana, 22(3), 107-130.</li><br>
        </ul>
        <p></p>
        <p><strong>Capítulos de Libros</strong></p>
        <p></p>
        <ul class="vineta">
          <li><b>Flores-Flores, J.L.</b>, E. García-Moya y E.A. Ortega-Martínez. 2019. Pastizal o zacatal. En: La biodiversidad en San Luis Potosí. Estudio de Estado. Vol. II. CONABIO, México, pp. 67-71.</li><br>
        </ul>
        <p></p>
        <p><strong>Libros</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Aguirre R., J. R., H. Charcas S. y <b>J. L. Flores F.</b> 2001. El maguey mezcalero potosino. COPOCYT, UASLP. San Luis Potosí, S.L P. México. 87 p.</li>
        </ul>
      </div>
    </div>
  </div>

</div>

@endsection
