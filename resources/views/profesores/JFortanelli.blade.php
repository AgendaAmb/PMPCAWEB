@extends('profesores.templates.profesor')

@section('name')
Dr. Javier Fortanelli Martínez
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/JavierFortanelliMartinez.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas</strong></h5>
  <br>
  <p>
      Altair num. 200, Col. del Llano C.P. 78377 <br>
      San Luis Potosí, SLP. México <br>
      Tel.: 52(444) 842 11 46 Fax.: 52(444) 842 23 59 ext. 106 <br>
      fortanel@uaslp.mx <br>
  </p>

  <div class="enlacesprof">
      {{-- <a target="_blank" href="http://www.iizd.uaslp.mx/Documents/JFM.pdf">Webpage 1</a> --}}
      <a target="_blank" href="https://uaslp.academia.edu/JavierFortanelliMart%C3%ADnez">Webpage</a>
      <a target="_blank" href="http://www.iizd.uaslp.mx/Documents/CV_JFM.pdf">Curriculum Vitae </a>
      <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/jyMAAA%3d%3d">Directorio de Investigadores</a>
      {{-- <a target="_blank" href="https://orcid.org/0000-0003-0903-0428"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a> --}}
      {{-- <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56586111500"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a> --}}
  </div>
</div>

@endsection

@section('extra')

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <strong>Actividad académica</strong>
      </button>
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <strong>Actividad académica</strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol>
          
          <li>
            <strong>
              Cursos
            </strong>
            <p>
              Ecología de la producción de cosechas <br>
              Ecología <br>
            </p>
          </li>

          <li>
            <strong>
              LGAC
            </strong>
            <p>
              Etnobiología
              <br>
              Sistemas de producción de cosechas vegetales
              <br>
            </p>
          </li>

          <li>
            <strong>
              Dirección de Tesis
            </strong>
            
            <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em>
              <ul class="vineta">
                  <li>Chávez Acuña Isaac Jacob. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_chavezacuna.pdf">Análisis estructural de dos poblaciones de <em>Dioon edule</em> Lindl. (Zamieaceae) en comunidades indígenas y mestizas de la región <em>Xi'iuy</em> de La Palma, S.L.P.: implicaciones ecológicas y culturales</a>.</li>
                  <li>Medrano Echalar Ana María. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_medranoechalar.pdf"> Expansión del cultivo de Quinua <em>(Chenopodium quinoa</em> Willd.) y calidad de suelos. Análisis en un contexto de sostenibilidad en el intersalar boliviano</a>.</li>
                  <li>Van Deuren Christine Milunka. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_vandeurenchristine.pdf">Ecoturismo regional en el cañón del Espinazo del Diablo, S.L.P., México</a>.</li>
                  <li>Giraldo Arias Andrea. 2013. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_giraldoarias.pdf"> Problemática y propuestas para el manejo sostenible del Río Tamasopo, San Luis Potosí, México</a>.</li>
                  <li>Muñoz Blanco Marco Arturo. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_munozblanco.pdf">Análisis de la erosión mediante modelado e indicadores visuales en la microcuenca batatal, Río Guapi-Macacu, Rio de Janeiro, Brasil</a>.</li>
                  <li>Villalobos Moreira Guillermo. 2015. <a href="../tesis/Mae/Gen%202013-08/2015_pmpca_villalobosmoreira.pdf"> Transformaciones en los medios de vida y en la organización social de comunidades productoras de quinua real orgánica en el Altiplano Sur de Bolivia</a></li>
                  <li>Barrales Carvajal Eyleen Alejandra. 2016. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4129">Estrategias para la seguridad alimentaria en zonas rurales secas: el caso de San Antonio de Coronados, Catorce, San Luis Potosí, México</a>.</li>
              </ul>
            </p>
            <p><em>Maestría en Ciencias Ambientales</em>
              <ul class="vineta">
                  <li>Carbajal Esquivel Haydeé. 2008. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202005-08/2008_pmpca_carbajalesquivel.pdf">Importancia de las plantas dentro de la cultura alimentaria de la comunidad <em>XI'OI</em> Las Guapas, Rayón, San Luis Potosí</a>.</li>
                  <li>Torres Reyna Juan Carlos. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202007-08/2009_pmpca_torresreyna.pdf">Arquitectura y etnobotánica de la vivienda rural <em>Xi'iuy</em> en la Palma, San Luis Potosí</a>.</li>
                  <li>Errejón Gómez Julio César. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_errejongomez.pdf">Problemática para la protección de un área natural: el cañón del Espinazo del Diablo, San Luis Potosí, México</a>.</li>
                  <li>Pineda Manzano Ulises. 2013. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_pinedamanzano.pdf"> Participación comunitaria en la protección de los recursos forestales del ejido San Nicolás de los Montes, Tamasopo, San Luis Potosí</a>.</li>
                  <li>Castillo Gómez Hugo Alberto. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2015_pmpca_castillogomez.pdf">Flora vascular, vegetación y plantas útiles del cañón del Espinazo del Diablo, San Luis Potosí, México</a>.</li>
                  <li>Spíritu Ruíz Paola Monserrat. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2015_pmpca_spirituruiz.pdf">Estrategias comunitarias para la conservación del bosque: el caso de ejido San José del Corito y Durazno, Alaquines, San Luis Potosí, México</a>.</li>
                  <li>Ramírez Palomeque Tania Lucely. 2017. <a href="http://ninive.uaslp.mx/jspui/bitstream/i/4519/1/MCA1RPT201701.pdfhttps://ninive.uaslp.mx/xmlui/bitstream/handle/i/4519/MCA1RPT201701.pdf?sequence=1&isAllowed=y"> Aprovechamiento comercial sustentable de orquídeas en contextos privados y comunitarios: dos estudios de caso en Xilitla, San Luis Potosí</a>.</li>
                  <li>Zamora García Elizabeth Giomara. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4708/MCA1ZGE201801.pdf?sequence=1&isAllowed=y">Turismo de naturaleza para el desarrollo comunitario y la conservación de los recursos naturales en San Nicolás de los Montes, Tamasopo, San Luis Potosí</a>.</li>
              </ul>
            </p>

            <p><em>Doctorado en Ciencias Ambientales</em>
              <ul class="vineta">
                  <li>Ramos Pérez Pedro Pablo. 2016. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2012-02/2016_pmpca_ramosperez.pdf">Alternativas para el desarrollo rural sostenible en tres zonas cafetaleras indígenas de México</a>. (Co-Dirección)</li>
              </ul>    
            </p>

          </li>

        </ol>
      </div>
    </div>
  </div>
</div>

@endsection
