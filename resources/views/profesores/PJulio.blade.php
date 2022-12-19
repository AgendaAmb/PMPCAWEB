
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. PATRICIA JULIO MIRANDA</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/PatriciaJulioMiranda.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ciencias Sociales y Humanidades</strong></h5>
        <br>
        <p>
            Av. Industrias No. 101-A Fracc. Talleres <br>
            C.P. 78399, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 832-1000 Ext. 9218<br>
            patricia.julio@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <!--<a target="_blank" href="#">Webpage</a>-->
            <a target="_blank" href="{{asset('storage/CV/Julio_Miranda_Patricia.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/oEQAAA==">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-8379-4528"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=15729187700"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                    <li>TSCA: Amenazas Naturales, Desastres, Evaluación y Gestión de Riesgo</li>
                    <li>TSCA: Medioambiente y reducción del riesgo de desastres (ECO-DRR)</li>
                  </ul><br>

                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                    <li>Estudios multidisciplinarios de los desastres</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Peñaloza Guerrero Cynthia Marisol. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3869">Flood resilience assessment, a case study at Ciudad Valles, San Luis Potosí, Mexico.</a></li>
                  <li>Arce Mojica Teresa de Jesús. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3978/MCA1AMT201401.pdf?sequence=3&isAllowed=y">Developing a methodological approach for a national risk index for Mexico.</a></li>
                  <li>Butz Katharina. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3856/MCA1BKA201401.pdf?sequence=3&isAllowed=y">Drought vulnerability assessment in northern-central Chile.</a></li>
                  <li>Taller Daniela. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3962">Visiones para la rehabilitación y gestión de paisajes degradados en la mata atlántica de Río de Janeiro, Brasil.</a></li>
                  <li>Meza Rodríguez María Isabel. 2017. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4516/MCA1MRM201701.pdf?sequence=1&isAllowed=y">Drought risk index in Rio de Janeiro state.</a></li>
                  <li>Nuñez Ramírez Santiago. 2017. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4520/MCA1NRS201701.pdf?sequence=1&isAllowed=y">Lessons learned from the 2011 landslide event in Nova Friburgo, Brazil? - A resilience study on the community and municipality levels.</a></li>
                  <li>Lienhart Karla. 2020. Flash floods in Matehuala, Mexico: an index-based risk analysis </li>
                  <li>Serano Claudelle Anna. 2020. Hurricane resilience and food security in caribbean small island developing states: a study of the commonwealth of Dominica</li>
                  <li>Pirazán Palomar Laura Liseth. 2020. The role or urban wetlands in disaster prevention: the case of flodd risk reduction in Bogota, Colombia</li>
                  <li>Silva Santelices Carolina Alexandra Dolores. 2020. Urban wetlands and resilience to climate change: a case study of Valdivia, Chile</li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Stevens Vázquez Guillermo Sigfrido. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/4170">Análisis espacial de la vulnerabilidad hídrica en la zona metropolitana de la ciudad de San Luis Potosí-Soledad de Graciano Sánchez, México.</a></li>
                  <li>Ortiz Liñán Mónica Elena. 2012. Propuesta de un sistema de información geográfica, como instrumento de gestión del agua en la ciudad de San Luis Potosí, México</li>
                  <li>Herrera Pérez Iván Leonardo. 2012. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3640/MCA1SUB01201.pdf?sequence=1&amp;isAllowed=y">Análisis de la susceptibilidad a la subsidencia en el estado de San Luis Potosí (México) como herramienta para la gestión ambiental.</a></li>
                  <li>León Rojas Gloria Isabel. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3839/MCA1LRG201401.pdf?sequence=3&isAllowed=y">Evaluación de la susceptibilidad a incendios forestales en San Luis Potosí, México, una contribución a la gestión del riesgo.</a> (Co-dirección)</li>
                  <li>Navarro Flores Diana Elizabeth. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3873">Propuesta de un programa de comunicación de riesgos por subsidencia del terreno en la zona metropolitana de San Luis Potosí-Soledad de Graciano Sánchez, México.</a></li>
                </ul>
                <!--<br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <p>

                </p>
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
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