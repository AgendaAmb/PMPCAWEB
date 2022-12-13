@extends('profesores.templates.profesor')

@section('name')
Dra. Bertha Irene Juárez Flores
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/P_mujer.png')}}" alt="">
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
      berthajf@uaslp.mx <br>
  </p>

  <div class="enlacesprof">
      {{-- <a target="_blank" href="http://www.iizd.uaslp.mx/Documents/JFM.pdf">Webpage 1</a> --}}
      <a href="http://www.iizd.uaslp.mx/Documents/BIJF.pdf">Webpage</a>
      <a href="http://www.iizd.uaslp.mx/Documents/CV_BIJF.pdf"> Curriculum Vitae</a>
      {{-- <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/jyMAAA%3d%3d">Directorio de Investigadores</a> --}}
      {{-- <a target="_blank" href="https://orcid.org/0000-0003-0903-0428"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a> --}}
      {{-- <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56586111500"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a> --}}
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
          <li> Farmacognosia, química y farmacología de plantas medicinales </li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Biología funcional </li>
        </ul>

        <p> Dirección de Tesis </p>
        <p></p>
        <ul>
          <p></p>
          <p> Maestría en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
              <li> Paiz Rúbia Cassiana. 2007. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202005-08/2007_pmpca_paizrubia.pdf">Efecto hipoglucimiante de <em>Opuntia Joconostle</em> Web. en ratas diabéticas</a>.</li>
              <li> Rendón Huerta Juan Antonio. 2009. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202007-08/2009_pmpca_rendonhuerta.pdf">Fructanos de maguey: Efecto prebiótico y metabólico</a>.</li>
              <li> Godinez Hernández Cesar Iván. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2012_pmpca_godinezhernandez.pdf">Caracterización y eficiencia de la fermentación en la elaboración del mezcal potosino</a>.</li>
              <li> Franco Arteaga Brenda Pamela. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_francoarteaga.pdf">Método de extracción de fructanos de maguey (<em>Agave salmiana</em> Otto ex Salm-Dick)</a>.</li>
              <li> Dávila Cespedes Antonio. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_davilacespedes.pdf">Efecto quimiopreventivo de los fructanos de <em>Agave salmiana</em> Otto ex Salm-Dick sobre el cáncer de colon</a>.</li>
              <li> Monreal Montes Alejandra Monserrat. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_monrealmontes.pdf">Efectos del jugo de tunas sobre el metabolismo energético de ratas sanas</a>.</li>
          </ul>

          <p></p>
          <p> Maestría en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
              <li> Zamora Pedraza Cynthia. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2007-08/2012_pmpca_zamorapedraza.pdf">Diagnóstico del proceso actual de elaboración de mezcal en la empresa "Laguna Seca" y alternativas para mejorar su eficiencia</a>.</li>
              <li> Zenteno Ramírez Gabriela. 2016. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2012-02/2016_pmpca_zentenoramirez.pdf">Evaluación de la pulpa de variantes de tuna como alimento funcional</a>.</li>
          </ul>

        </ul>
      </div>
    </div>
  </div>
  
</div>

@endsection
