@extends('profesores.templates.profesor')

@section('name')
Dra. Gisela Aguilar Benítez
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/P_mujer .png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel V.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas. SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair num. 200, Col. del Llano C.P. 78377 <br>
      San Luis Potosí, SLP. México <br>
      Tel.: 52(444) 842 11 46 Fax.: 52(444) 842 23 59 ext. 106 <br>
      <a href="mailto:gisela.aguilar@uaslp.mx"> gisela.aguilar@uaslp.mx </a>
  </p>

  <div class="enlacesprof">
    <a href="http://www.iizd.uaslp.mx/Documents/GAB.pdf">Webpage</a>
    <a href="http://www.iizd.uaslp.mx/Documents/CV_GAB.pdf"> Curriculum Vitae</a>
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

        <p><strong>Cursos</strong></p>
        <p></p>
        <ul class="vineta">
          <li> Manejo de recursos naturales renovables en zonas secas</li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Sistemas de aprovechamientos de recursos bióticos </li>
          <li> Sistemas de producción de cosechas vegetales </li>
        </ul>

        <p> Dirección de Tesis </p>
        <p></p>
        <ul>
          <p> Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección </p>
          <p></p>
          <ul class="vineta">
              <li> Díaz Otalora Laura Tatiana. 2016. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4131/MCA1DOL201601.pdf?sequence=1&amp;isAllowed=y">Prácticas agroecológicas de sistemas familiares en las regiones prioritarias para la conservación: Sierra del Abra Tanchipa y Sierra de Xilitla. </a></li>
              <li> Sabatinelli Rodrigues Thiago. 2019. <a href="#">Resilience of agroecological systems to extreme weather events: a social network theory approach in el cobre production cooperative, Santiago de Cuba</a>.</li>
          </ul>

        </ul>
      </div>
    </div>
  </div>

</div>

@endsection
