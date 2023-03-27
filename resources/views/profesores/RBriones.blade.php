
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. ROBERTO BRIONES GALLARDO</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/P_hombre.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería / Instituto de Metalurgia</strong></h5>
        <h5><strong>SNI nivel II.</strong></h5>
        <br>
        <p>
            Av. Sierra Leona No. 500 Lomas 2a. Sección <br>
            C.P. 78210, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-2300 ext. 8212<br>
            <a href="mailto:briones@uaslp.mx" style="color:rgb(0, 178, 227)">briones@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://ciep.ing.uaslp.mx/minerales/profesor.php?id=3134333737">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Briones_Gallardo_Roberto.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="http://ciep.ing.uaslp.mx/minerales/profesor.php?id=3134333737">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-8093-2526"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=15519429900"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Remedicación de sitios contaminados</li>
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Remediación ambiental de sitios minero-metalúrgicos y evaluación ecofisiológica por exposición a contaminación inorgánica (interacciones suelo-agua-planta-contaminación inorgánica)</li>
                  <li>Evaluación de la cantidad, calidad y estrategias de reúso y reducción de consumo de agua fresca en la industria</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Guevara Gasca Víctor Amador. 2007. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1796/MCA1GGV200701.pdf?sequence=1&isAllowed=y">Distribución espacial y abastecimiento del agua para uso humano, en el área metropolitana de la ciudad de San Luis Potosí: problemática, implicaciones y alternativas</a></li>
                  <li>Herrera Godina Melva Guadalupe. 2009. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3087/MCA1HGM200901.pdf?sequence=1&isAllowed=y">Utilización de los sistemas de información geográfica para el estudio de la vulnerabilidad en los municipios de Ébano, Tamuín y San Vicente Tancuayalab ante la ruta de exposición del plaguicida fipronil.</a></li>
                  <li>Magaña Ortiz Cecilia. 2010. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3646">Estudio comparativo de la langosta centroamericana (Schistocerca piceifrons piceifrons, Walker) en la Huasteca Potosina y el estado de Yucatán.</a></li>
                  <li>Quintero Ruíz Joab Raziel. 2012. Estudio ambiental y social comparativo del bosque húmedo en base al cambio de uso de suelo entre la Huasteca Potosina, México y la Mata Atlántica, Río de Janeiro, Brasil. (Co-dirección)</li>
                  <li>Peralta Rivero Carmelo. 2012. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3652/MCA1PRC201201.pdf?sequence=3&isAllowed=y">Evaluación del uso, cambio de uso y cobertura del suelo, y proyectos forestales del Mecanismo de Desarrollo Limpio (MDL) y de la Reducción de las Emisiones Derivadas de la Deforestación y la Degradación Forestal (REDD) en el municipio de Riberalta, Amazonía Boliviana</a></li>
                  <li>López Pérez Andrés Osvaldo. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4205">La movilidad en la zona metropolitana de la ciudad de San Luis Potosí: análisis espacial del transporte público y propuesta por medio de estándares de desarrollo orientado a transporte</a></li>
                  <li>Rosales González Juana. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4209/MCA1RGJ201701.pdf?sequence=1&amp;isAllowed=y">El derecho humano al agua para consumo personal y domestico: el caso de la comunidad San Juan de Guadalupe, San Luis Potosí, S.L.P., México</a></li>
                  <li>Jiménez Aguilar Claudia Zelmira. 2022. Seguridad hídrica urbana en México: el caso de la zona metropolitana Zacatecas-Guadalupe</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Algara Siller Marcos. 2009. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3625/MarcosAlgaraSiller_TesisDoctoral_CienciasAmbientales_090907.pdf?sequence=1&isAllowed=y"> Propuesta metodológica para medir el impacto del fenómeno de la sequía en la Huasteca Potosina y propuesta general de manejo</a></li>
                  <li>Peralta Rivero Carmelo. 2016. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/4116">Evaluación de los cambios de cobertura y uso de suelo en la región huasteca de México: “Un análisis del pasado, el presente y tendencias futuras de deforestación. </a> (Co-Dirección)</li>
                  <li>Medina Garza Hugo. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4518">Sistema de vigilancia epidemiológica sanitaria para la Huasteca Potosina. Una plataforma para la vigilancia de la enfermedad de Chagas</a></li>
                </ul>
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
              <strong>Libros</strong><br><br>
              <ul class="vineta">
                <li>(2018) Galindo Mendoza María Guadalupe y <b>Contreras Servín Carlos</b>. Geomedicina y la tecnología espacial aplicada al caso de los vectores en salud humana. AEM-CONACYT-UASLP. 234 págs. ISBN 978-607-535-065-3.</li><br>
                <li>(2017) Galindo Mendoza María Guadalupe y <b>Contreras Servín Carlos</b>. La Sanidad Vegetal en México. Universidad Autónoma de San Luis Potosí, Coordinación para la Innovación y Aplicación de la Ciencia y la Tecnología, Laboratorio Nacional de Geoprocesamiento de Información Fitosanitaria. 255 págs. ISBN 978-607-9453-82-4.</li>
              </ul>
              <strong>Capítulos de libros</strong><br><br>
              <ul class="vineta">
                <li>(2018) Medina Garza Hugo, <b>Contreras Servín Carlos</b>, Galindo Mendoza Ma. Guadalupe, Mejía Saavedra José de Jesús y Arreola Martínez Beatriz Estrella. Trypanosoma cruzi, del ambiente silvestre a ambientes domiciliados en la huasteca potosina: un análisis desde el enfoque de la biocomplejidad, publicado en: Ecología y Conservación de Fauna en Ambientes Antropizados. ISBN 978-607-513-347-8.</li>
              </ul>
            </div>
          </div>
        </div>
        <!--<div class="accordion-item">
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