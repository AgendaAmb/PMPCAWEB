@extends('profesores.templates.profesor')

@section('name')
Dra. Gisela Aguilar Benítez
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Gisela_Aguilar_ Benitez.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel V.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas.</strong></h5>
  <h5><strong>SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair No. 200, Fracc. del Llano, <br>
      C.P. 78377, San Luis Potosí, SLP. México <br><br>
      Tel.: + 52 (444) 842-1146 <br>
      <a href="mailto:gisela.aguilar@uaslp.mx" style="color:rgb(0, 178, 227)"> gisela.aguilar@uaslp.mx </a><br><br>
  </p>

  <div class="enlacesprof">
    <!--<a target="_blank" href="#">Webpage</a>-->
    <a target="_blank" href="{{asset('storage/CV/Aguilar_Benitez_Gisela.pdf')}}"><i>Curriculum vitae</i></a>
    <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/mV4AAA%3d%3d">Directorio de Investigadores</a>
    <a target="_blank" href="https://orcid.org/0000-0002-9243-3860"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
    <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=55023828100"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                <li>Manejo de recursos naturales renovables en zonas secas</li>
            </ul>
            <br>
        <li><strong>LGAC</strong></li>
          <ul class="vineta">
            <li>Sistemas de aprovechamientos de recursos bióticos </li>
            <li>Sistemas de producción de cosechas vegetales </li>
        </ul>
        <br>
        <li><strong>Dirección de Tesis</strong></li><br>
          <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em></p>
          <p></p>
          <ul class="vineta">
              <li>Díaz Otalora Laura Tatiana. 2016. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4131/MCA1DOL201601.pdf?sequence=1&isAllowed=y">Prácticas agroecológicas de sistemas familiares en las regiones prioritarias para la conservación: Sierra del Abra Tanchipa y Sierra de Xilitla. </a></li>
              <li>Sabatinelli Rodrigues Thiago. 2019. <a href="#">Resilience of agroecological systems to extreme weather events: a social network theory approach in el cobre production cooperative, Santiago de Cuba</a>.</li>
          </ul>
        </ol>
      </div><br><br><br>
    </div>
  </div>
</div>

@endsection
