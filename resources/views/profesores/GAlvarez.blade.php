@extends('profesores.templates.profesor')

@section('name')
Dr. Gregorio Álvarez Fuentes
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Gregorio_Alvarez_Fuentes.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas.</strong></h5>
  <h5><strong>SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair No. 200, Fracc. del Llano,  <br>
      C.P. 78377, San Luis Potosí, SLP. México <br>
      Tel.: 52(444) 842 11 46 Fax.: 52(444) 842 23 59 ext. 106 <br>
      <a href="mailto:gregorio.alvarez@uaslp.mx" style="color:rgb(0, 178, 227)"> gregorio.alvarez@uaslp.mx</a><br><br>
  </p>

  <div class="enlacesprof">
    <!--<a target="_blank" href="#">Webpage</a>-->
    <a target="_blank" href="{{asset('storage/CV/Alvarez_Fuentes_Gregorio.pdf')}}"><i>Curriculum vitae</i></a>
    <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/2kQAAA%3d%3d">Directorio de Investigadores</a>
    <a target="_blank" href="https://orcid.org/0000-0001-8767-4232"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
    <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=22033699600"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
              <li>Introducción a la Estadística </li>
              <li>Métodos estadísticos para investigadores </li>
        </ul>
        <br>
        <li><strong>LGAC</strong></li>
          <ul class="vineta">
            <li>Sistemas de producción animal en pastoreo </li>
            <li>Ganadería familiar </li>
          </ul>
          <br>
          <li><strong>Dirección de Tesis</strong></li><br>
          <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
          <ul class="vineta">
            <li>Campa Elizondo Analee. 2012.<a href="#">Existing governance and potencial for design improvement in a dry-hot climate</a>.</li>
            <li>Tsao Chang-Hong 2017. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4513/MCA1CHT201701.pdf?sequence=1&isAllowed=y">Carbon sequestration under different land uses and solis in the state of Quintana Roo, Mexico</a>.</li>
          </ul>
          <br>
          <p><em>Maestría en Ciencias Ambientales</em></p>
          <ul class="vineta">
            <li>Tristán Patiño Flor de María. 2012.<a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3674/MCA1FYS01201.pdf?sequence=1&isAllowed=y"> Análisis de la calidad fisicoquímica y sanitaria de la leche en el municipio de San Luis Potosí</a>.</li>
            <li>Barrera Perales Octavio Tadeo. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3676/MCA1ISA01301.pdf?sequence=1&isAllowed=y">Caracterización e importancia socioeconómica y ambiental de la producción caprina en el Altiplano Potosino</a>.</li>
            <li>Carrillo Martínez Cristina Jared. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3829/MCA1CYA01401.pdf?sequence=3&isAllowed=y">Caracterización y análisis socioeconómico y ambiental del sistema de producción de cosechas del municipio de Morelos, Zacatecas</a>. (Co-dirección).</li>
            <li>López Andrade Miriam. 2018. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4336/MCA1LAM201801.pdf?sequence=1&isAllowed=y">Análisis económico y de la sustentabilidad de la ganadería lechera periurbana en la ciudad de San Luis Potosí</a>.</li>
            <li>Martínez Armendaríz Alma Gwendolyne. 2021. Seguridad alimentaria en la comunidad Rarámuri Mesa de la Palma, municipio Guadalupe y Calvo, en la Sierra de Chihuahua, México.</li>
          </ul>
          <br>
          <p><em>Doctorado en Ciencias Ambientales</em></p>
          <ul class="vineta">
            <li>Beltrán Santoyo Miguel Ángel. 2016. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4111/DCA1BSM201601.pdf?sequence=3&isAllowed=y">Impacto ambiental de los sistemas de producción de leche de ganado bovino en el valle de San Luis Potosí, México</a>.</li>
            <li>Carrillo Martínez Cristina Jared. 2019. <a href="#">Análisis económico y ambiental de la producción de chile <em>(Capsicum sp.)</em> en la zona irrigada por el Acuífero Calera</a>.</li>
          </ul>

        </ul>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
        aria-expanded="false" aria-controls="collapseTwo">
        <strong> Publicaciones</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <p><strong>Artículos de investigación</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Reyna-Villanueva,  L.R.,  J.  M. Moreira Dias, N. A.  Medellín-Castillo,  R. Ocampo-Pérez,  M. Martínez-Rosales, T. Peñaflor-Galindo, <b>G. Alvarez Fuentes</b>. 2019. Biodiesel production using layered double hydroxides and derived mixed oxides: the role of the synthesis conditions and the catalysts properties on biodiesel conversion. FUEL.</li><br>
          <li>García-López, J. C., H.  M. Durán-García, J. A. de-Nova, <b>G. Álvarez Fuentes</b>, J. M. Pinos-Rodríguez, H. A. Lee-Rangel, S. López-Aguirre, D. Ruiz-Tavares, J. A. Rendón-Huerta, J. G. Vicente-Martínez, M. Salinas Rodríguez. 2019. Producción y contenido nutrimental de tres variantes de vaina 2 de mezquite <em>(Prosopis laevigata)</em> en el altiplano potosino, México. Agrociencia.</li><br>
          <li>Carrillo-Martínez, C., <b>G. Álvarez- Fuentes</b>, G. Aguilar Benites, J. C. García López y C. Contreras Servín. 2018. Rentabilidad de la producción de frijol (Phaseolus vulgaris L.), Maíz (Zea mays L.), y Chile (Capsicum Ssp.), en el Municipio de Morelos, Zacatecas. Revista Acta Universitaria.</li><br>
          <li>Beltrán Santoyo, M. A., <b>G. Álvarez Fuentes</b>, J. M. Pinos Rodríguez, J. C. García López, R. Castro Rivera. 2017. Abonos obtenidos del compostado de heces de ganado bovino de leche <em>vs</em> fertilizante en la producción de triticale (<em>X Triticum secale</em> Wittmack). Rev. Fca. UNCUYO. 49(1): 95-104.</li><br>
          <li>García-López, <b>G. Álvarez-Fuentes</b>, J.M. Pinos-Rodríguez, Y. Jasso-Pineda1, H.I. Contreras-Treviño1, M.A. Camacho-Escobar, S. López-Aguirre, H.A. Lee-Rangel4 and J.A. Rendón-Huerta. 2017.  Anti-inflammatory Effects of <em>Chrysactinia mexicana</em> Gray Extract in Growing Chicks (<em>Gallus gallusdomesticus</em>) Challenged with LPS and PHA. Int.J. Curr.Microbiol .App.Sci. 6(1): 550-562.</li><br>
          <li><b>Álvarez-Fuentes G.</b>, J. A. D. R. N, Appuhamy, and E. Kebreab. 2016. Prediction of phosphorus output in manure and milk by lactating dairy cows. Journal of Dairy Science, Volume 99, Issue 1, 771–782. DOI:<a href="http://dx.doi.org/10.3168/jds.2015-10092">http://dx.doi.org/10.3168/jds.2015-10092</a></li><br>
          <li>García-López, J.C., <b>G. Álvarez-Fuentes</b>, J.M. Pinos Rodríguez, Y. Jasso-Pineda,  E. Zapata-Pérez.  H.A. Lee-Rangel, S. López-Aguirre,  M.A. Camacho-Escobar. 2016. Effect of a plant extract in several traits of plymouth rock barred hens and pullets challenged with salmonella typhimurium in a rural village in central México.  Animal Review,  3(2): 43-51.</li><br>
          <li>Claudio M. Padilla-González1, Aldo I. Ortega-Morales, <b>Gregorio Álvarez-Fuentes</b>, Luis A. Bernal-Jácome. 2016.  Estudio de evaluación de la calidad del agua del río San Juan (centro de México) Utilizando de macroinvertebrados bentónicos.  Revista Iberoamericana de Ciencias. Vol. 3 No. 6:1-17.</li><br>
          <li>Flores-Jiménez, D. E., M. Algara-Siller, N. Aguilar-Rivera, N. Carbajal, C. Aldama-Aguilera, A, Ávila-Galarza, and <b>G. Álvarez-Fuentes</b>. 2016. Influence of sugarcane burning on soil carbon and nitrogen release under drought and evapotranspiration conditions in a Mexican sugarcane supply zone.  Rev. Int. Contam. Ambie. 32 (2) 177-189).</li><br>
          <li>Jasso-Padilla, I., B. Juárez-Flores, <b>G. Álvarez-Fuentes</b>, A. De la Cruz-Martínez, J. González-Ramírez, M. Moscosa-Santillán, M. González-Chávez, C. Oros-Ovalle, F. Prell, P. Czermakd, and F. Martínez-Gutíerrez. 2016. Effect of prebiotics of Agave <em>salmiana</em> fed to healthyWistar rats. J Sci Food Agric  97: 556–563.</li><br>
          <li>García-López, J. C., J. M. Pinos-Rodríguez, <b>G. Álvarez-Fuentes</b>, B. I. Juárez-Flores, Y. Jasso-Pineda, M. A. Camacho-Escobar, S. López-Aguirre and L. O. Hernández-Arteaga. 2016. Effect of <em>Chrysactinia mexicana</em> Gray Extract on Laying Hens Organs Challenged with Salmonella typhimurium. Journal of Applied Life Sciences International, Vol.5, Pag.1-8.</li><br>
          <li>Beltrán-Santoyo, M. Á., <b>G. Álvarez-Fuentes</b>, J. M. Pinos-Rodríguez, C. Contreras-Servín. 2016. Emisión de metano en los sistemas de producción de leche bovina en el valle de San Luis potosí, México. Agrociencia 50: 297-305.</li><br>
        </ul>

        <p><strong>Capítulos de Libros</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Flores Jiménez D. E., M. Algara Siller, N. Aguilar Rivera, <b>G. Álvarez Fuentes</b>, A. Ávila Galarza y C. Aldama Aguilera. 2018. Competitive Management of Sugarcane Waste and Reduction of CO<sub>2</sub> Emissions from Harvest Burning in Supply Regions. In Sugarcane – Technology and Research. IntechOpen. <a href="http://dx.doi.org/10.5772/intechopen.71531">http://dx.doi.org/10.5772/intechopen.71531</a> 8.</li><br>
        </ul>

      </div>
    </div>
  </div>
</div>

@endsection
