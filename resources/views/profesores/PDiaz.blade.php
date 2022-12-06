
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. PAOLA ELIZABETH DÍAZ FLORES</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Paola_Elizabeth_Diaz_Flores.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Agronomía.</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Km. 14.5 Carretera San Luis Potosí, Matehuala,<br>
            Ejido Palma de la Cruz, Soledad de Graciano Sánchez,<br>
            San Luis Potosí, S.L.P., Apdo. Postal 32, CP. 78321, <br>
            Teléfonos (444) 852-4056 al 60<br>
            paola.diaz@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="/storage/CV/Diaz_Flores_PaolaElizabeth.pdf">Curriculum Vitae </a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/GT0AAA%3D%3D">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-6045-6454"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56000848100"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                    <p>TSCA: Sistemas de adsorción: equilibrio y cinética  </p>

                <li><strong>LGAC</strong></li>
                <p>Desarrollo e implementación de tecnologías para el tratamiento de agua mediante procesos fisicoquímicos<br>
                   Desarrollo, caracterización y aplicación de materiales sorbentes (porosos y verdes) para el tratamiento de suelo y agua
                </p>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <p>
                  Ávila Cintia Romina. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_avilaromina.pdf">Remoción de azul de metileno en agua empleando bagazo de <em>Agave Salmiana</em> como biosorbente.</a><br>
                  Salazar Hernández Elizabeth. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_salazarhernandez.pdf">Remoción de hidrocarburos mediante biopolímeros naturales: efecto del tamaño de partícula.</a><br>
                </p>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <p>
                  Flores Rojas Alfredo Israel. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2015_pmpca_floresrojas.pdf">Estudios de equilibrio de adsorción de fluoruros sobre compósitos a base de quitosano.</a><br>
                  Guzmán Álvarez Camerina Janeth. 2019. <a href="#"> Eliminación del colorante negro reactivo 5 en soluciones acuosas mediante materiales sintéticos a base de celulosa, magnetita y polipirrol</a>.
                </p>
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
      </div>
    </div>
    </div>
    <br><br><br>
</div>

@endsection