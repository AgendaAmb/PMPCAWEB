
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
              Teléfono: +52 (444) 826-2300 ext. 6275 <br>
              <a href="mailto:galarza@uaslp.mx" style="color:rgb(0, 178, 227)">galarza@uaslp.mx</a><br><br>
          </p>

          <div class="enlacesprof">
              <!--<a target="_blank" href="http://ciep.ing.uaslp.mx/profesoresPos/profesor.php?id=3130363637&pos=11&gra=M">Webpage</a>-->
              <a target="_blank" href="{{asset('storage/CV/Avila_Galarza_Alfredo.pdf')}}"><i>Curriculum vitae</i></a>
              <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/qykAAA%3d%3d">Directorio de Investigadores</a>
              <a target="_blank" href="{{asset('storage/CV/Presentacion_AAG.pdf')}}"><i>Presentación</i></a>
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
                      <li>Problemática y gestión ambiental</li>
                      <li>Evaluación del impacto y riesgo ambiental</li>
                      <li>Gestión de residuos y economía circular</li>
                      <li>Ingeniería ambiental</li>
                      <li>Prevención y control de la contaminación del aire</li>
                      <li>Formulación y gestión de proyectos</li>
                      <li>Auditoría ambiental</li>
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Impacto y riesgo ambiental</li>
                  <li>Gestión de residuos. Economía circular. Análisis de ciclo de vida</li>
                  <li>Evaluación y gestión ambiental (industrial, urbana y turística)</li>
                  <li>Sostenibilidad empresarial (huella de carbono...)</li>
                  <li>Contaminación atmosférica a la escala local</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Clarke Mendes Kaila. 2024. Critical analysis of municipal solid waste management in Trinidad and Tobago</li>
                  <li>Díaz Canales Edith Benjamina. 2023. Strategic environmental assessment (SEA) integration in agricultural policies in Nicaragua</li>
                  <li>Sierra Negrette Any Lucely. 2023. Assessment of progress in Mexico's climate action in the municipal solid waste sector: nationally determined contributions (NDC)</li>
                  <li>Ayala Gómez Tatiana Sophia. 2022. Analysis of municipal organic waste-to-energy production chains: feasibility of biohydrogen generation in Cali, Colombia</li>
                  <li>Samaniego Figueroa Ximena. 2021. Integrated waste management assessment for end-of-life photovoltaic modules: a case study of Mexico</li>
                  <li>Coenen Heleen. 2020. A methodological guideline to assess integrated municipal solid waste management in Ecuador</li>
                  <li>Rivera Cabrera Ana Cecilia. 2020. The role of the USMCA in multi-level governance of transboundary air pollution in the border region of US-MX: case California-Baja California</li>
                  <li>Benavides Mondragón Lucia Elsa. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4337">Advancing sustainability in Latin American cities: a study case on the urban metabolism of San Luis Potosí, México</a></li>
                  <li>Rodríguez Marat Martin Miguel. 2016. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4682/MCA1RMM201601.pdf?sequence=1&isAllowed=y">Modelos de predicción de generación de biogás: análisis crítico y aplicación al caso de Tucumán, Argentina</a></li>
                  <li>Botello Salinas Leslie Aideé. 2010. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3628/MCA1MTH01001.pdf?sequence=5&isAllowed=y">Evaluation method of an environmental management system of hazardous substances in the industry. Case of a German-Mexican Company</a></li>          
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                    <li>Ortega Ibarra Amparo Guadalupe (en proceso). Gestión integral de residuos biológico-infecciosos en una unidad de tercer nivel en San Luis Potosí.</li>
                    <li>Ríos Langure Montserrat (en proceso). Caracterización y propuesta de programa interno de protección civil de un centro de investigación en San Luis Potosí.</li>
                    <li>Martínez Moreno Carolina. 2020. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7611/TesisM.PMPCA.2020.Analisis.Martinez.pdf?sequence=1&isAllowed=y">Análisis y definición de elementos de innovación para la mejora de un sistema de gestión ambiental de una empresa metal-mecánica</a></li>
                    <li>López Díaz Norma Lilia. 2019. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5722/MCA1LDN201901.pdf?sequence=1&isAllowed=y">Evaluación del potencial de generación de biogás en sitios de disposición final del Estado de San Luis Potosí, y sus posibles opciones de valorización</a></li>
                    <li>Ruvalcaba Grimaldo Ruth Georgina. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4189/MCA1RGR201701.pdf?sequence=3&isAllowed=y">Propuesta de programa de auditoría ambiental de competencia estatal para San Luis Potosí, México</a></li>
                    <li>Flores Jiménez David Enrique. 2011. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3653/MCA1MTP01101.pdf?sequence=3&isAllowed=y">Modelado del transporte y propuesta de metodología para la ubicación de estaciones de monitoreo de pm10 en una mina a cielo abierto</a></li>
                    <li>Aguilera Flores Miguel Mauricio. 2011. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3558/MCA1ANA01101.pdf?sequence=3&isAllowed=y">Análisis de riesgo ambiental por el manejo de sustancias químicas peligrosas en las instalaciones de la Facultad de Ingeniería de la UASLP</a></li>
                    <li>Gallegos Martínez Erika. 2010. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3715">Inventario de emisiones de partículas y modelado de su transporte a partir de fuentes de área de una industria minera</a></li>
                    <li>Ortega Montoya Claudia Yazmín. 2009. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3587/MCA1OMC200901.pdf?sequence=3&isAllowed=y">Diagnóstico de peligro por almacenamiento de materiales peligrosos en la zona industrial oriente de la Ciudad de San Luis Potosí, S.L.P.</a></li>             
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Hernández Cerda Claudia Nalleli. 2022. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/7982">Elementos para la evaluación de la movilidad urbana en áreas conurbadas: diagnóstico y propuesta de movilidad integral. El caso de la zona metropolitana de San Luis Potosí</a></li>
                  <li>Ortega Montoya Claudia Yazmín. 2015. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3858/DCA1PMT01501.pdf?sequence=3&isAllowed=y">Propuesta metodológica para la evaluación del riesgo ambiental debido al manejo de materiales peligrosos en el estado de San Luis Potosí</a></li>
                  <li>Velázquez Angulo Gilberto. 2008. Diseño de una red de monitoreo atmosférico para la ciudad de San Luis Potosí: ubicación de nodos</li>           
                </ul>
                <br>
                <p><em>En otros posgrados</em></p>
                <ul class="vineta">
                  <li>M.I. Marcos Benjamín Cruz Jiménez (2021). Caracterización ambiental del sitio de disposición final de residuos sólidos del municipio de Cerritos, S.L.P., y modelado del transporte y difusión de lixiviados. UASLP / Maestría en Tecnología y Gestión del Agua.</li>
                  <li>M.I. Alejandra López Sánchez. (2016). “Plan de manejo de residuos sólidos de una industria minero metalúrgica, para la prevención de la contaminación de cuerpos de agua”. UASLP/ Maestría en Tecnología y Gestión del Agua.</li>
                  <li>M.I. Gustavo Córdova Araiza (2015). Propuesta de actualización de un Sistema Integral de Gestión, en una empresa de fabricación de compuestos termoplásticos de ingeniería. UASLP / Maestría en Hidrosistemas.</li>
                  <li>M.I. Luis Servando Ríos García (2015). Propuesta de matriz de aspectos ambientales para el sistema de gestión ISO 14001:2004, de una empresa del ramo automotriz. UASLP / Maestría en Hidrosistemas.</li>
                  <li>M.I. Alejandro Sandoval Vázquez (2014). Definición de un Sistema de Gestión para Instituciones de Educación Superior, basado en la Norma ISO 14001:2004 y la Metodología de la Producción más Limpia. México. UASLP / Maestría en Hidrosistemas.</li>
                  <li>M.I. Arturo López Villapando Villapando, (2013). Sistema de captura, quema y/o aprovechamiento del biogás generado por los RSU´s confinados en un sitio de disposición final (el caso de Santa Rita, S.L.P., S.L.P.), México. UASLP / Hidrosistemas.</li>
                  <li>MC César Alfredo Nanni DeValle, (2012) Diagnóstico y Plan de Manejo Ambiental para la Facultad de Ingeniería de la UASLP. UASLP / Hidrosistemas.</li>
                  <li>MI. Teresita de Jesús Valadez Leyva, (2008). Caracterización y propuesta de manejo integral de los residuos peligrosos biológico infecciosos en la Ciudad de San Luis Potosí. UASLP / Hidrosistemas.</li>
                  <li>MI. Ana Lourdes López Pablos, (2007). Caracterización de emisiones a la atmósfera por fuentes vehiculares en la ciudad de San Luis Potosí, S.L.P. UASLP / Hidrosistemas.</li>
                  <li>MI. Horacio Nelson Heddy de la Garza, (2007). Guía Metodológica para la Evaluación del Impacto Ambiental producido por la explotación de un banco de materiales de competencia federal en la zona de inundación de un río. UASLP / Hidrosistemas.</li>
                  <li>MI. José Daniel Herrera Martínez, (2006). “Propuesta Metodológica para la evaluación del impacto ambiental de proyectos de rellenos sanitarios. El caso de Villa de Reyes, S.L.P.” UASLP / Hidrosistemas.</li>
                  <li>MI. Felipe de Jesús Zapata Morales, (2006.). Modelación del Transporte y Difusión del SO2 emitido por la Zona Industrial Oriente de la Ciudad de San Luis Potosí. UASLP / Hidrosistemas.</li>
                  <li>MI. Concepción Salinas González, (2003). Análisis del cumplimiento de los parámetros de calidad de los vertidos de la zona industrial de la ciudad de San Luis Potosí. UASLP / Hidrosistemas.</li>
                  <li>MI. Juan Alberto Velázquez Zapata, (2003). Modelación del transporte y difusión del SO2 a partir de una fuente puntual en la ciudad de San Luis Potosí. UASLP / Hidrosistemas.</li>
                  <li>MI. Estela Pacheco Rodríguez, (2002). “Caracterización de emisiones a la atmósfera por fuentes de área en la ciudad de San Luis Potosí. UASLP / Hidrosistemas.</li>
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