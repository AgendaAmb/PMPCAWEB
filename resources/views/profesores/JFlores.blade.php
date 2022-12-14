@extends('profesores.templates.profesor')

@section('name')
Dr. José Luis Flores Flores
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/P_hombre.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas. SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair num. 200, Col. del Llano C.P. 78377 <br>
      San Luis Potosí, SLP. México <br>
      Tel.: 52(444) 842 11 46 Fax.: 52(444) 842 23 59 ext. 106 <br>
      <a href="mailto:joseluis.flores@uaslp.mx"> joseluis.flores@uaslp.mx </a> 
  </p>

  <div class="enlacesprof">
    <a href="http://www.iizd.uaslp.mx/Documents/JLFF.pdf">Webpage</a>
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

        <p> Cursos </p>

        <p></p>
        <ul class="vineta">
          <li> Ecología cuantitativa </li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Biología de comunidades naturales </li>
          <li> Sistemas de producción animal en pastoreo </li>
        </ul>

        <p> Dirección de Tesis </p>
        <p></p>
        <ul>
          <p> Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección </p>
          <p></p>
          <ul class="vineta">
            <li> Nuñez Villarreal Jonathan Javier. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_nunezvillareal.pdf">Soil erosion assessment in the agricultural micro-basin of Pito Aceso in the municipality of Bom Jardim, Rio de Janeiro State</a>.</li>          
          </ul>

          <p></p>
          <p> Maestria en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Concostrina Zubiri Laura. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_concostrinazubiri.pdf">Composición, estructura y dinámica de la Costra Biológica del Suelo (CBS) en un ecosistema de pastizal semiárido</a>.</li>
            <li> Ortega Martínez Eugenia de los Ángeles. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_ortegamartinez.pdf">Sistema de información digital (Rzedowski) para el conocimiento y uso de la diversidad vegetal en el estado de San Luis Potosí</a>.</li>
          </ul>

          <p></p>
          <p> Doctorado en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Romo Campos Rosa de Lourdes. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2007-08/2011_pmpca_romocampos.pdf">Exploración de mecanismos de interacciones bióticas en comunidades vegetales en un gradiente ambiental del Altiplano Mexicano</a>.</li>
            <li> Errejón Gómez Julio César. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4463/DCA1EGJ201801.pdf?sequence=1&amp;isAllowed=y">Causas socio-ecológicas de la configuración del paisaje actual de la porción noreste del corredor biológico de la Sierra Madre Oriental</a>.</li>
          </ul>

        </ul>
      </div>
    </div>
  </div>

</div>

@endsection
