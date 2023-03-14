
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. LEONARDO ERNESTO MÁRQUEZ MIRELES</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Leonardo_Ernesto_ Marquez_Mireles.png')}}" alt="">
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
            <a href="mailto:leonardoemm@uaslp.mx" style="color:rgb(0, 178, 227)">leonardoemm@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <!--<a target="_blank" href="http://sociales.uaslp.mx/Paginas/Profesores/Leonardo.aspx">Webpage</a>-->
            <a target="_blank" href="{{asset('storage/CV/Marquez_Mireles_LeonardoErnesto.pdf')}}"><i>Curriculum Vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/ekAAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="http://orcid.org/0000-0001-6732-8156"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57210815176"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Diseño y Evaluación de Proyectos de Investigación</li>
                    </ul>
                <li><strong>LGAC</strong></li>
                  <ul class="vineta">
                    <li>Desarrollo Sostenible</li>
                  </ul>
                </p>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Riemann Sebastian. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3650/MCA1RSE201201.pdf?sequence=3&isAllowed=y">Resource management in sustainable tourism: a facilitator for community empowering development in la Vainilla, Oaxaca.</a></li>
                  <li>Jaramillo Duque Andrea Estefania. 2016. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4120/MCA1JDA201601.pdf?sequence=3&amp;isAllowed=y">A comparison between two management systems of protected areas from Mexico (Sierra del Abra Tanchipa biosphere reserve) and from Ecuador (Yasuni National Park).</a></li>
                  <li>Pedrotti Jung Valentina Andrea. 2016. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4119/MCA1PJV201601.pdf?sequence=3&isAllowed=y">Sustainable coffee alternatives for the rural community of San Francisco, municipality of Tamazunchale San Luis Potosi, Mexico.</a></li>
                  <li>Quintero Vargas Tania Berenice. 2020. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7581/TesisM.PMPCA.2020.Effects.Quintero.pdf?sequence=1&isAllowed=y">  Effects of eco-labels on consumer intentions to purchase sustainable food within the student community of Cologne.</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Trenti Very Luis Carlos. 2016. <a target="_blank" href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2016_pmpca_trentivery.pdf">Caracterización e importancia social de los sistemas agrícolas tradicionales en El Ejido, Escalerillas, San Luis Potosí.</a></li>
                  <li>Alvarado Casas Karla Alejandra. 2018. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4514/MCA1ACK201801.pdf?sequence=1&amp;isAllowed=y">Gobernanza ambiental en la reserva de la biosfera de Sierra Abra Tanchipa.</a></li>
                  <li>Castillo Cardona Carlos Eduardo. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5731/MCA1CCC201901.pdf?sequence=1&isAllowed=y"> Historia ambiental de las inundaciones en San Luis Potosí: 1930-1940.</a></li>
                  <li>Varela Trevilla Aurora Sofía. 2020. Propuesta metodológica para la evaluación de la sustentabilidad de la producción del ganado de lidia en la ganadería de Monte Caldera, San Luis Potosí.</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Morales Jasso Gerardo. 2022. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/7983">Construir el conocimiento interdisciplinario en el Programa Multidisciplinario de Posgrado en Ciencias Ambientales. Historia, teoría y praxis.</a></li>
                </ul>
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
              <strong>Artículos de investigación</strong><br><br>
              <p>
              </p>
              <strong>Capítulos de libros</strong><br><br>
              <p>
              </p>
              <strong>Publicaciones en extenso</strong><br><br>
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
      </div><br><br><br>
    </div>
    </div>
</div>

@endsection