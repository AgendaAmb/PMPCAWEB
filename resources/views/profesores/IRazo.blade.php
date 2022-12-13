
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. ISRAEL RAZO SOTO </strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Israel_Razo_Soto.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Dr. Manuel Nava No. 8, Zona Universitaria Poniente <br>
            C.P. 78290, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-2300 Ext. 7201 <br>
            israel.razo@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://ciep.ing.uaslp.mx/agua/profesor.php?id=31383231395">Webpage</a>
            <a target="_blank" href="/storage/CV/Razo_Soto_Israel.pdf">Currículum Vitae </a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/K0cAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-8422-2732"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=8544655800"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Minería y medio ambiente</li>
                   <li>Evaluación de sitios contaminados</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Chow Pineda Irene Gilma. 2010. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5726/MCA1CPI201001.pdf?sequence=1&isAllowed=y">Analysis of the potential of biomass energy generation in Santiago de Chile </a></li>
                  <li>Jorio Nyzar. 2010. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/3585">Performance analysis of wind resource assessment software in different wind sites in Mexico and Brazil </a></li>
                  <li>Jiménez Lira Marisela. 2012. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3686/MCA1ACC01201.pdf?sequence=1&isAllowed=y"> Acciones y estrategias para un plan de manejo de la microcuenca de Monte Caldera, San Luis Potosí </a></li>
                  <li>Román Gurrola Manuel. 2015. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/3851">Propuesta de plan para la gestión integral del agua en una cuenca con actividad minera en el municipio de Aquiles Serdán, Chihuahua </a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Ramírez Hernández Virginia. 2010. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/5725">Caracterización ambiental y análisis de riesgos para la salud en un sitio minero-metalúrgico. Caso de estudio: Concepción del Oro, Zacatecas, México </a></li>
                  <li>Rodríguez y Rodríguez Yolanda. 2011. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/3551"> Evaluación de la contaminación por metales en pasivos ambientales de actividades metalúrgicas históricas en el distrito minero Cerro de San Pedro, S.L.P. (México) </a></li>
                  <li>Mayorga Ávila Rubí Estrella. 2012.  <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/3667"> Evaluación de la contaminación por arsénico y metales pesados en el distrito minero Fresnillo (Zacatecas, México) </a></li>
                  <li>Somohano Gambioa Ricardo Ernesto. 2013.  <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4164/MCA1SGR201301.pdf?sequence=1&isAllowed=y"> Evaluación de la fitotoxicidad en suelos contaminados por metales pesados en pasivos ambientales minero-metalúrgicos.</a> (Co-dirección)</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Leura Vicencio Adriana Karina. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4332"> Geoquímica ambiental del mercurio em pasivos ambientales minero metalúrgicos. </a> (Co-dirección)</li>
                  <li>Díaz Barriga Yáñez Diego. 2020. Identificación y evaluación de pasivos ambientales mineros en Real de Catorce, San Luis Potosí, México </li>
                </ul>
              </ol>
            </div>
          </div>
        </div>
      </div>    <br><br><br>
    </div>
    </div>
</div>

@endsection