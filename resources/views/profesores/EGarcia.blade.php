@extends('profesores.templates.profesor')

@section('name')
Dra. Erika García Chávez
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Erika_Garcia_Chavez.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas.</strong></h5>
  <br>
  <p>
      Altair num. 200, Col. del Llano C.P. 78377 <br>
      San Luis Potosí, SLP. México <br>
      Tel.: 52(444) 842 11 46 Fax.: 52(444) 842 23 59 ext. 106 <br>
      <a href="mailto:erika.garcia@uaslp.mx"> erika.garcia@uaslp.mx </a> 
  </p>

  <div class="enlacesprof">
    <a href="http://www.iizd.uaslp.mx/Documents/EGCH.pdf">Webpage</a>
    <a href="http://www.iizd.uaslp.mx/Documents/CV_EGCH.pdf"> Curriculum Vitae</a>
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
          <li> Modelos animales para la investigación de compuestos naturales </li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Biología funcional </li>
          <li> Farmacología y toxicología de plantas medicinales </li>
        </ul>

        <p> Dirección de Tesis </p>
        <p></p>
        <ul>
          <p> Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección </p>
          <p></p>
          <ul class="vineta">
            <li> Merino Sánchez Claudia. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_merinosanchez.pdf">Monografía de plantas antiinflamatorias de la etnia XI'OI de la región de La Palma de San Luis Potosí</a>.</li>
          </ul>

          <p></p>
          <p> Maestría en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Guzmán Guzmán Paulina. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202007-08/2010_pmpca_guzmanguzman.pdf">Exploración, aprovechamiento y validación experimental de plantas con efecto anti-inflamatorio de la Sierra Madre Oriental de San Luis Potosí</a>.</li>
            <li> Ortiz Segura María del Carmen. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_ortizsegura.pdf">Evaluación del extracto etanólico de <em>Calea urticifolia</em> (Mill) DC. sobre la regulación de la secreción de adipocinas asociadas a la resistencia a la insulina</a>.</li>
            <li> Méndez Barredo Liliana Hortencia. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_mendezbarredo.pdf">Caracterización electrofisiológica del nervio sural de ratas expuestas con semillas de <em>Dioon Edule</em> Lindl</a>. (Co-Dirección)</li>
            <li> Zermeño Macías María de Los Ángeles. 2013. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3887/MCA1CQE01301.pdf?sequence=3&amp;isAllowed=y">Caracterización química de extractos orgánicos de <em>Calea urticifolia</em> (Mill) DC. y bioensayo dirigido para determinar su actividad antiinflamatoria <em>in vitro</em></a>.</li>
          </ul>

          <p></p>
          <p> Doctorado en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Torres Rodríguez Maria Lucina. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2012-02/2015_pmpca_torresrodriguez.pdf">Evaluación tóxica (<em>in vivo</em>) y biológica (<em>in vitro</em>) del extracto acuoso liofilizado de <em>Calea urticifolia</em> (Mill) DC</a>.</li>
          </ul>

        </ul>
      </div>
    </div>
  </div>

</div>

@endsection
