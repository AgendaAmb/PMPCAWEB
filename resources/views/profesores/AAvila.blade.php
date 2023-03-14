
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. ALFREDO ÁVILA GALARZA</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Alfredo_Avila_Galarza.png')}}" alt="">
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
              <a href="mailto:galarza@uaslp.mx" style="color:rgb(0, 178, 227)">galarza@uaslp.mx</a><br><br>
          </p>

          <div class="enlacesprof">
              <a target="_blank" href="http://ciep.ing.uaslp.mx/agua/profesor.php?id=3130363637">Webpage</a>
              <a target="_blank" href="{{asset('storage/CV/Avila_Galarza_Alfredo.pdf')}}"><i>Curriculum vitae</i></a>
              <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/qykAAA%3d%3d">Directorio de Investigadores</a>
              <a target="_blank" href="https://orcid.org/0000-0003-0903-0428"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
              <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56586111500"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Ingeniería ambiental</li>
                      <li>Impacto y riesgo ambiental</li>
                      <li>Contaminación y modelación de la calidad del aire</li>
                      <li>Manejo de residuos</li>
                      <li>Gestión y auditoría ambiental</li>
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Manejo de residuos sólidos y contaminación atmosférica a la escala local</li>
                  <li>Gestión, auditoría, impacto y riesgo ambiental</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Botello Salinas Leslie Aideé. 2010. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3628/MCA1MTH01001.pdf?sequence=5&isAllowed=y">Evaluation method of an environmental management system of hazardous substances in the industry. Case of a German-Mexican Company</a></li>
                  <li>Rodríguez Marat Martin Miguel. 2016. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4682/MCA1RMM201601.pdf?sequence=1&isAllowed=y">Modelos de predicción de generación de biogás: análisis crítico y aplicación al caso de Tucumán, Argentina</a></li>
                  <li>Benavides Mondragón Lucia Elsa. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4337">Advancing sustainability in Latin American cities: a study case on the urban metabolism of San Luis Potosí, México</a></li>
                  <li>Coenen Heleen. 2020. A methodological guideline to assess integrated municipal solid waste management in Ecuador</li>
                  <li>Rivera Cabrera Ana Cecilia. 2020. The role of the USMCA in multi-level governance of transboundary air pollution in the border region of US-MX: case California-Baja California</li>
                  <li>Samaniego Figueroa Ximena. 2021. Integrated waste management assessment for end-of-life photovoltaic modules: a case study of Mexico</li>
                  <li>Ayala Gómez Tatiana Sophia. 2022. Analysis of municipal organic waste-to-energy production chains: feasibility of biohydrogen generation in Cali, Colombia</li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                    <li>Ortega Montoya Claudia Yazmin. 2009. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3587/MCA1OMC200901.pdf?sequence=3&isAllowed=y">Diagnóstico de peligro por almacenamiento de materiales peligrosos en la zona industrial oriente de la Ciudad de San Luis Potosí, S.L.P.</a></li>
                    <li>Gallegos Martínez Erika. 2010. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3715">Inventario de emisiones de partículas y modelado de su transporte a partir de fuentes de área de una industria minera</a></li>
                    <li>Aguilera Flores Miguel Mauricio. 2011. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3558/MCA1ANA01101.pdf?sequence=3&isAllowed=y">Análisis de riesgo ambiental por el manejo de sustancias químicas peligrosas en las instalaciones de la Facultad de Ingeniería de la UASLP</a></li>
                    <li>Flores Jiménez David Enrique. 2011. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3653/MCA1MTP01101.pdf?sequence=3&isAllowed=y">Modelado del transporte y propuesta de metodología para la ubicación de estaciones de monitoreo de pm10 en una mina a cielo abierto</a></li>
                    <li>Ruvalcaba Grimaldo Ruth Georgina. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4189/MCA1RGR201701.pdf?sequence=3&isAllowed=y">Propuesta de programa de auditoría ambiental de competencia estatal para San Luis Potosí, México</a></li>
                    <li>López Díaz Norma Lilia. 2019. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5722/MCA1LDN201901.pdf?sequence=1&isAllowed=y">Evaluación del potencial de generación de biogás en sitios de disposición final del Estado de San Luis Potosí, y sus posibles opciones de valorización</a></li>
                    <li>Martínez Moreno Carolina. 2020. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7611/TesisM.PMPCA.2020.Analisis.Martinez.pdf?sequence=1&isAllowed=y">Análisis y definición de elementos de innovación para la mejora de un sistema de gestión ambiental de una empresa metal-mecánica</a></li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Velázquez Angulo Gilberto. 2008. Diseño de una red de monitoreo atmosférico para la ciudad de San Luis Potosí: ubicación de nodos</li>
                  <li>Ortega Montoya Claudia Yazmin. 2015. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3858/DCA1PMT01501.pdf?sequence=3&isAllowed=y">Propuesta metodológica para la evaluación del riesgo ambiental debido al manejo de materiales peligrosos en el estado de San Luis Potosí</a></li>
                  <li>Hernández Cerda Claudia Nalleli. 2022. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/7982">Elementos para la evaluación de la movilidad urbana en áreas conurbadas: diagnóstico y propuesta de movilidad integral. El caso de la zona metropolitana de San Luis Potosí</a></li>
                </ul>
              </ol>
            </div>
          </div>
        </div>
      </div><br><br><br>
    </div>
    </div>
</div>

@endsection