
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. VALENTE VÁZQUEZ SOLÍS</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Valente_Vazquez_Solis.png')}}" alt="">
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
            ggm@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="https://sociales.uaslp.mx/Paginas/Investigacion/3546#gsc.tab=0">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Vazquez_Solis_Valente.pdf')}}"><i>Curriculum Vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/mz8AAA==">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-8421-7201"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=26665082600"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                  <li>Estudios multidisciplinarios de los desastres<br>
                   Planeación y ordenamiento territorial y ambiental
                </p>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <p>
                  Navarro Gamboa Miguel. 2013. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_navarrogamboa.pdf">Community participation in the alternative tourism center Ecoturixtlán, municipality of Ixtlán de Juárez, Oaxaca Mexico.</a><br>
                  Moreno Freydig Hugo César. 2016. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4672">Design of non-motorized mobility plan for warm climate cities-case: Hermosillo, Sonora, Mexico.</a><br>
                  Suárez Flores Nathalie Alejandra. 2019. <a href="#"> Tourism carrying capacity as an instrument for local sustainable development in Peña de Bernal, Querétaro. </a>
                </p>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <p>
                  Soto Torres María de Lourdes. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4334">Condiciones ambientales en el ejido San Francisco, municipio Zaragoza, San Luis Potosí, para la incorporación de proyectos asociados al turismo alternativo.</a> <br>
                  Pérez Silva Sandy Ivonne. 2019. <a href="#">Capacidad de carga turística como instrumento para la gestión sustentable en el Cerro de la Bufa, Municipio de Zacatecas. </a><br>
                  García García Ana Mónica de Jhesú. 2019. <a href="#">Vulnerabilidad de los sitios turísticos en San Luis Potosí, a través de escenarios de variabilidad climática. </a>
                </p>
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
      </div>
    </div>
    </div>
    <br><br><br>
</div>

@endsection