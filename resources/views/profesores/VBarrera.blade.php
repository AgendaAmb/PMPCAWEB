
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. VALTER ARMANDO BARRERA LÓPEZ</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/ValterArmandoBarreraLopez.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Investigador CONACyT</strong></h4>
        <h5><strong>Coordinación para la Innovación y Aplicación de la Ciencia y la Tecnología (CIACyT)</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Av. Sierra Leona #550, Col. Lomas 2a. Sección, <br>
            C.P. 78210, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-2300 Ext. 8410<br>
            valter.barera@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://lages.uaslp.mx/labcacc/index.php">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Barrera_Lopez_ValterArmando.pdf')}}"><i>Curriculum Vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/7HsAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0003-4121-3486"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <!--<a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=26665082600"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>-->
        </div>
        </div>
    </div>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              <strong>Actividad académica</strong>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ol>
                <li><strong>Cursos</strong></li>
                    <ul class="vineta">
                      <li>Medición y análisis de la contaminación del aire</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Evaluación de la calidad del aire en ciudades y centros urbanos. Y análisis de la relación de los diversos contaminantes del aire con la movilidad urbana y sus efectos con la salud pública</li>
                  <li>Evaluación de las Partículas Atmosféricas mediante la caracterización de especies químicas inorgánicas, carbonáceas y biogénicas con diversas técnicas químicas y nucleares</li>
                  <li>Modelación matemática para la identificación de fuentes emisoras de contaminación del aire mediante técnicas multivariadas</li>
                  <li>Evaluación del impacto de los aerosoles en el ambiente su interacción con gases y su relación con el Cambio Climático</li>
                  <li>Evolución de los aerosoles a través de mediciones de propiedades físicas y químicas y de estudios teóricos utilizando datos satelitales</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Cabrera Cano Ángel Arturo. 2020. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7554/TesisM.PMPCA.2020.Evaluacion.Cabrera.pdf?sequence=1&isAllowed=y" target="_blank">Evaluación de Hidrocarburos Aromáticos Policíclicos (HSP's) y Carbono Negro (CN) presentes en partículas suspendidas PM<sub>10</sub> en la zona NE de San Luis Potosí.</a> </li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Soto Torres María de Lourdes. 2020. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7554/TesisM.PMPCA.2020.Evaluacion.Cabrera.pdf?sequence=1&isAllowed=y">Evaluación de Hidrocarburos Aromáticos Policíclicos (HAP's) y Carbono Negro (CN) presente en partículas suspendidas PM<sub>10</sub> en la zona NE de San Luis Potosí.</a></li>
                  <li></li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <p>
                  Blanco López Paloma. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2010-02/2015_pmpca_blancolopez.pdf">Planificación del turismo sustentable en la zona altiplano de San Luis Potosí. Una propuesta metodológica.</a> (Co-Dirección)
                </p>
              </ol>
            </div>
          </div>
        </div>
        <!--<div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <strong>Publicaciones</strong>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Artículos científicos</strong><br><br>
              <p>

              </p>
              <strong>Libros</strong><br><br>
              <p>

              </p>
              <strong>Capítulos en libros</strong><br><br>
              <p>

              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <strong>Vinculación</strong>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
              adds the appropriate classes that we use to style each element. These classes control the overall
              appearance,
              as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
              overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>-->
      </div>    <br><br><br>
    </div>
    </div>
</div>

@endsection