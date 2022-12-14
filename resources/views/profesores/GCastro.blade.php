
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. GUILLERMO JAVIER CASTRO LARROGOITIA</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Guillermo_Javier_Castro_Larragoitia.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería</strong></h5>
        <h5><strong>SNI nivel II.</strong></h5>
        <br>
        <p>
            Dr. Manuel Nava No. 8, Zona Universitaria Poniente <br>
            C.P. 78290, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-2300 Ext. 7201 <br>
            gcastro@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://ciep.ing.uaslp.mx/minerales/profesor.php?id=3133323833">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Castro_Larragoitia_GuillermoJavier.pdf')}}">Currículum Vitae </a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/4zMAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0003-3756-454X"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <!--<a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=7005334227"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>-->
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
                      <li>Gestión ambiental de operaciones minero metalúrgicas</li>
                      <li>TSCA: Geoquímica Ambiental</li>
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Evaluación de la contaminación en matrices ambientales (suelo, sedimentos, agua, atmósfera, etc.)</li>
                  <li>Hidrogeología e hidrogeoquímica</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Bermúdez Zarruk Ramses Jael. 2011. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3553/MCA1PEK01101.pdf?sequence=3&isAllowed=y">Peak load clipping for greenhouse gas emission reduction in Managua, Nicaragua: The role of solar thermal water heaters and photovoltaic systems in households</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Hernández Martínez Jejanny Lucero. 2008. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5724/MCA1HMJ200801.pdf?sequence=1&isAllowed=y">Efecto de la evolución geoquímica en la calidad del agua subterránea en la porción central de la zona media del Estado de San Luis Potosí</a></li>
                  <li>González Grijalva Marco David. 2009. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3557/MCA1EVO00901.pdf?sequence=3&isAllowed=y"> Evolución espacio-temporal de la calidad del agua subterránea en el acuífero Cedral-Matehuala: alternativas de uso</a></li>
                  <li>Rocha Escalante Hermann. 2009.  <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3875/MCA1EDS00901.pdf?sequence=3&isAllowed=y">Estrategias para el desarrollo sustentable de los sistemas de flujo en el acuífero de Rioverde, S.L.P. </a></li>
                  <li>Melo Cuervo Ricardo. 2011.  <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3555/MCA1PAM01101.pdf?sequence=3&isAllowed=y">Evaluación de un pasivo ambiental metalúrgico</a></li>
                  <li>Martínez Valdez Ofelia Anaís. 2015. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3977/MCA1MMM01501.pdf?sequence=1&isAllowed=y">Movilidad de metales y metaloides en sitios mineros: predicción de impactos en los recursos hídricos</a></li>
                  <li>Moreno Morales Laura Nereyda. 2016.<a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4121"> Comportamiento ambiental de residuos mineros</a> (Co-dirección)</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Hergt Thomas. 2009. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3554">Diseño optimizado de redes de monitoreo de la calidad del agua de los sistemas de flujo subterráneo en el acuífero 2411 "San Luis Potosí": Hacia un manejo sustentable</a></li>
                  <li>Pérez Rodríguez Rebeca Yasmín. 2016. Identificación de fuentes y rutas de exposición en sitios contaminados por plomo, usando métodos isotópicos</li>
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
                 .
              </p>
              <strong>Capítulos de libros</strong><br><br>
              <p>
                .
              </p>
              <strong>Publicaciones en extenso</strong><br><br>
              <p>.
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
            <p>.</p>
            </div>
          </div>
        </div>-->
      </div>    <br><br><br>
    </div>
    </div>
</div>

@endsection