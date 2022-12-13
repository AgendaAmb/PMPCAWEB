@extends('profesores.templates.profesor')

@section('name')
Dr. Juan Antonio Reyes Agüero
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/P_hombre.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas. SNI nivel I.</strong></h5>
  <br>
  <p>
    {{-- Altair num. 200, Col. del Llano<br>
    C.P. 78377 San Luis Potosí, SLP. México<br>
    Tel.: 52 (444) 842-1146 Ext. 106 <br> --}}
    <a href="mailto:reyesaguero@uaslp.mx"> reyesaguero@uaslp.mx </a>
  </p>
  

  <div class="enlacesprof">
      <a href="http://www.iizd.uaslp.mx/Documents/JARA.pdf">Webpage</a>
      <a href="http://www.iizd.uaslp.mx/Documents/CV_JARA.pdf">Curriculum Vitae </a>
  </div>
</div>

@endsection

@section('extra')

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-actividad-academica"
        aria-expanded="true" aria-controls="collapseOne">
        <strong>Actividad Académica</strong>
      </button>
    </h2>
    <div id="collapse-actividad-academica" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <p> Cursos </p>
        <p></p>
        <ul class="vineta">
          <li> Ecología </li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Etnobiología </li>
          <li> Biología de comunidades naturales </li>
        </ul>

        <p> Dirección de Tesis </p>
        <p></p>
        <ul>
          <p> Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección </p>
          <p></p>
          <ul class="vineta">
            <li> Loaiza Lange Toa. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_loaizatoa.pdf">Potential assessment of Land Use, Land Use Change and Forestry (LULUCF) projects under the Clean Development Mechanism (CDM) in the Mata Atlántica. Municipality of Cachoeiras de Macacu, RJ - Brazil</a>.</li>
            <li> Rojas Arnez Claudia Alejandra. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_rojasarnez.pdf">Energy governance for climate adaptation in Santiago de Chile, case studies: comunas of Maipú and Providencia</a>.</li>
            <li> Heindorf Claudia. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_heindorfclaudia.pdf">Analysis of the agrobiodiversity of home gardens in the tropical regions of Mexico</a>.</li>
            <li> Riveros Ospina Diana Isabel. 2013. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_riverosospina.pdf">Resilience in Santa Cruz del Islote: sustainability of a social-ecological system in the Colombian Caribbean</a>.</li>
            <li> Langer Katharina Agathe. 2013. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3597/MCA1POT01301.pdf?sequence=1&amp;isAllowed=y">Potential of renewable energies in the Galapagos archipelago – acceptance of technological systems in a protected environment</a>.</li>
            <li> Matias Figueroa Carlos. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2014_pmpca_matiasfigueroa.pdf">Characterization of agroforestry systems in the state of Rio de Janeiro, Brazil and their potential in the carbon market</a>.</li>
            <li> Robelo González Eduardo. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_robelogonzalez.pdf">Drought indicator assessment for semi-arid northern central Chile</a>.</li>
            <li> Klimpel Torsten. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_klimpeltorsten.pdf">Financial mechanism for conservation: water fund to protect the water forest</a>.</li>
            <li> Schneider Melanie Maria. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_schneidermelanie.pdf">Análisis de la cadena de valor de la quinua (<em>Chenopodium quinoa willd.</em>) en Bolivia</a>.</li>
            <li> Blanco Betancourt Diana Marcela. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_blancobentacourt.pdf">Análisis del manejo tradicional del germoplasma de papa (<em>Solanum spp.</em>) en dos comunidades rurales del departamento de La Paz, Bolivia</a>.</li>
            <li> Lichtenberg Silke. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_lichtenbergsilke.pdf">The use of pau-brasil (<em>Caesalpinia echinata</em> Lam.) for making violin bows: a social-ecological system´s analysis linking environment and art</a>.</li>
            <li> Pérez Henriquez Victor Eduardo. 2016. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4681/MCA1PHV201601.pdf?sequence=1&amp;isAllowed=y">Fair trade of Santiago Matatlán, Oaxaca mezcal economic alternative for local producers</a>.</li>
            <li> Pérez Rodríguez Edson Alexis. 2016.<a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202014-08/2016_pmpca_perezrodriguez.pdf"> Payment for ecosystem services in degraded landscapes in rural Rio de Janeiro, Brazil</a>.</li>
            <li> Tello Valle-Hiriart José Carlos. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4467/MCA1TVH201701.pdf?sequence=1&amp;isAllowed=y">Socio-legal assessment of the establishment of natural heritage private reserves (RPPNs) in seven municipalities of Rio de Janeiro state, Brazil</a>.</li>
            <li> Guarin Cifuentes Diego Alexander. 2018. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4544">Potential of using morphological and functional traits of woody species as indicators of dry conditions in the transition zone of the Atlantic Forest (Mata Atlántica) in Rio de Janeiro state, Brazil</a>.</li>
            <li> Sauer Janine Tina. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4511/MCA1SJT201801.pdf?sequence=1&amp;isAllowed=y">The value of the ecosystem service pollination within a social-ecological system in Huila, Colombia</a>.</li>
            <li> Fazito Rezende Fernandes Gabriel. 2019. <a href="">Perceived impacts on ecosystem services and coping strategies by dairy farmers in the Atlantic Forest of Rio de Janeiro during the drought of 2014-2017</a>.</li>
            <li> Gübel Ruth Katharina Sophia. 2019. <a href="">The contribution of agricultural biodiversity to food security in an indigenous community in the Huasteca Potosina, Mexico</a>.</li>
          </ul>

          <p></p>
          <p> Maestría en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Ramírez Tobías Hugo Magdaleno. 2006. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202003-08/2006_pmpca_ramireztobias.pdf">Productividad primaria y calidad nutrimental de nopal (<em>Opuntia</em> spp. y <em>Nopalea</em> sp.) en condiciones intensivas</a>.</li>
            <li> Loza León Jessica Grétel. 2007. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202004-08/2007_pmpca_lozaleon.pdf">Caracterización ecológica y aspectos sociales de los solares en relación con el bienestar en San José de la Peña, Villa de Guadalupe, San Luis Potosí</a>.</li>
            <li> Esparza Sandoval Sandra. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202007-08/2010_pmpca_esparzasandoval.pdf">Distribución geográfica del género <em>Opuntia</em> (Cactaceae) en México</a>.</li>
            <li> Rangel Díaz Francisco Javier. 2013. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4172/MCA1RDF201301.pdf?sequence=1&amp;isAllowed=y">Propuesta para el desarrollo del turismo alternativo en el Realejo, Municipio de Guadalcázar, S.L.P.</a></li>
            <li> Reyes Samilpa Alicia. 2016. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4671/MCA1RSA201601.pdf?sequence=1&amp;isAllowed=y">Análisis etnobotánico y caracterización física de las fibras de <em>Agave Salmiana</em> y <em>A. Mapisaga</em> en la región de Ixmiquilpan, Hidalgo</a>.</li>
            <li> Balleza Gallardo Cinthya Sarahí. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4206/MCA1BGC201701.pdf?sequence=1&amp;isAllowed=y">Análisis del deterioro ecológico del matorral crasicaule en el valle de San Luis Potosí (México)</a>.</li>
          </ul>

        </ul>
      </div>
    </div>
  </div>
</div>

@endsection
