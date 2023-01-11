
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. ÁLVARO GERARDO PALACIO APONTE</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/AlvaroGerardoPalacioAponte.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ciencias Sociales y Humanidades</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Av. Industrias #101-A Fracc. Talleres <br>
            C.P. 78399, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 832-1000 Ext. 9218<br>
            alvaro.palacio@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="{{asset('storage/CV/Palacio_Aponte_AlvaroGerardo.pd')}}"><i>Curriculum Vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/EUoAAA==">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-5020-2482"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=35176529400"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Medioambiente y reducción del riesgo de desastres (ECO-DRR)</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Estudios multidisciplinarios de los desastres</li>
                  <li>Planeación y ordenamiento territorial y ambiental</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Souza Lenzi Fernanda. 2012. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3645/MCA1SLF201201.pdf?sequence=3&isAllowed=y">The flood early warning system in the Itajaí River Basin: its institutional structure and the role of the civil defence.</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Castillo Moncada Jenny Alejandra. 2011. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3681/MCA1CMJ201101.pdf?sequence=3&isAllowed=y">Prioritization Measures within the Watershed Management Master Plan. (Co-dirección).</a></li>
                  <li>Guevara Macías María de Jesús. 2012. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/4168">Análisis de la vulnerabilidad socioeconómica por inundaciones en la ciudad de San Luis Potosí.</a></li>
                  <li>Sánchez Tapia Víctor Manuel. 2014. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3827/MCA1PRI01401.pdf?sequence=3&amp;isAllowed=y">La percepción del riesgo ante inundaciones súbitas en la ciudad de San Luis Potosí.</a> (Co-dirección).</li>
                </ul>
                <!--<br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <p>

                </p>-->
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