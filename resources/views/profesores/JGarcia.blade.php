@extends('profesores.templates.profesor')

@section('name')
Dr. Juan Carlos García López
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Juan_Carlos_Garcia_Lopez.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas. SNI nivel I.</strong></h5>
  <br>
  <p>
    Altair num. 200, Col. del Llano<br>
    C.P. 78377 San Luis Potosí, SLP. México<br>
    Tel.: 52 (444) 842-1146 Ext. 106 <br>
    <a href="mailto:jcgarcia@uaslp.mx "> jcgarcia@uaslp.mx </a>
  </p>

  <div class="enlacesprof">
      <a href="http://www.iizd.uaslp.mx/Documents/JCGL.pdf">Webpage</a>
      <a href="http://www.iizd.uaslp.mx/Documents/CV_JCGL.pdf"> Curriculum Vitae</a>
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
          <li> Introducción a la Estadística </li>
          <li> Fisiología animal ambiental </li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Sistemas de aprovechamiento de recursos bióticos </li>
          <li> Sistemas de producción animal en solares </li>
        </ul>

        <p> Dirección de Tesis </p>
        <p></p>
        <ul>
          <p> Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección </p>
          <p></p>
          <ul class="vineta">
            <li> Bara Claudia Rosina. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_baraclaudia.pdf">Coffee trade between Mexico and Germany. Status quo, challenges and opportunities in alternative coffee production, consumption and trade</a>.</li>
          </ul>

          <p></p>
          <p> Maestría en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Zapata Pérez Elvia. 2009. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202007-08/2009_pmpca_zapataperez.pdf">Conteo bacteriano en órganos del aparato digestivo de pollos infectados con <em>Salmonella typhimurium</em> con adición de extracto de <em>Chrysactinia mexicana</em></a>.</li>
            <li> Ruiz Tavares David Ramiro. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_ruiztavares.pdf">Uso potencial de la vaina de mezquite para la alimentación de animales domésticos del Altiplano Potosino</a>.</li>
            <li> Carrillo Martínez Cristina Jared. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_carrillomartinez.pdf">Caracterización y análisis socioeconómico y ambiental del sistema de producción de cosechas del Municipio de Morelos, Zacatecas</a>. (Co-dirección)</li>
            <li> Martínez Martínez Nereida. 2016. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202014-08/2016_pmpca_martinezmartinez.pdf">Efecto del extracto de <em>Larrea tridentata</em> en la digestibilidad y cinética ruminal <em>in vitro</em> de la pollinaza como ingrediente de alimento para bovinos</a>.</li>
          </ul>

          <p></p>
          <p> Doctorado en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> López Aguirre Samuel. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4190/DCA1LAS201701.pdf?sequence=1&amp;isAllowed=y">Extracción, cuantificación y valoración biológica del extracto de hojas de <em>Larrea tridentata</em> (Sessé &amp; Moc. ex DC.) Coville para su uso como agente biocida</a>.</li>
          </ul>

        </ul>
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
    <div id="collapse-publicaciones" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <p> Artículos de Investigación </p>
        <p></p>
        <ul class="vineta">
            <li> <b>García L., J.C.</b>; H.M. Durán G.; De-Nova, J.A.; G. Álvarez F.; J.M. Pinos R.; H.A. Lee R.; S. López A.; D. Ruiz T.; J.A. Rendón H.; J.G. Vicente M.; M. Salinas R. 2019. Producción y contenido nutrimental de tres variantes de vaina de mezquite <em>(Prosopis laevigata)</em> en el altiplano potosino, México. Agrociencia. Aceptado. </li><br>
            <li> López A., S.; <b>J.C. García L.</b>; J.M. Pinos R.; L. Yáñez E.; Y. López H. 2016. Chemical characterization and oral toxicity of an aqueous extract of <em>Larrea tridentata</em>. Journal of Natural Products and Resources. 2(2):79-82.</li><br>
            <li> <b>García L., J.C.</b>; G. Álvarez F.; J.M. Pinos R.; Y. Jasso P.; H.I. Contreras T.; M.A. Camacho E.; S. López A.; H.A. Lee R.; J.A. Rendón H. 2017. Anti-inflammatory Effects of <em>Chrysactinia mexicana</em> Gray Extract in Growing Chicks (<em>Gallus gallus domesticus</em>) Challenged with LPS and PHA. International Journal of Current Microbiology and Applied Sciences. 6(1): 550-562. </li><br>
            <li> <b>García L., J.C.</b>; G. Álvarez F.; J.M. Pinos R.; Y. Jasso P.;  E. Zapata P.; H.A. Lee R.; S. López A.; M.A. Camacho E. 2016. Effect of a plant extract in several traits of Plymouth Rock Barred hens and pullets challenged with <em>Salmonella typhimurium</em> in a rural village in Central Mexico. Animal Review. 3(2):43-51.</li><br>	                
        </ul>

        <p> Proyectos </p>
        <p></p>
        <ul class="vineta">
            <li> <b>Escalamiento a planta piloto de aditivo alimentario multifuncional de origen nanoarcilloso y botánico para emplearlo en el área de nutrición y salud animal</b>. Marzo 2018 - Septiembre 2019. Convocatoria 2018 del Programa de Estímulos a la Innovación del CONACYT. Empresa; Nutrición y Genética Saludable S.A. de C.V. Registro 251911.</li><br>
            <li> <b>Nuevo aditivo alimenticio 100% natural orgánico como alternativa a los antibióticos usados en el sector animal. Octubre 2013 - Marzo 2015. Programa de Estímulos a la Innovación del FINNOVA-CONACYT. Empresa; Nutrición y Genética Saludable S.A. de C.V. Registro 190601. </li><br>
        </ul>
        
      </div>
    </div>
  </div>
</div>

@endsection
