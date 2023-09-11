
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. LUIS MANUEL ROSALES CONLUNGA</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/LuisManuelRosalesColunga.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería</strong></h5>
        <h5><strong>SNI nivel C.</strong></h5>
        <br>
        <p>
            Dr. Manuel Nava No. 8, Zona Universitaria Poniente, <br>
            C.P. 78290, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-2330 ext. 6066<br>
            <a href="mailto:luis.rosales@uaslp.mx" style="color:rgb(0, 178, 227)">luis.rosales@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="https://www.researchgate.net/profile/Luis_Rosales-Colunga">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Rosales_Colunga_LuisManuel.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/YGQAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-8901-4964"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=23111632400"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>Biocombustibles</li>
                      <li>Biología molecular aplicada a las Ciencias Ambientales</li>
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Producción de biocombustibles utilizando desechos y subproductos agroindustriales</li>
                  <li>Control biológico de fitopatógenos</li>
                </ul><br>
                <!--<li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Scian María Laura. 2011. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3618/MCA1SML201101.pdf?sequence=3&isAllowed=y">Evaluación de las emisiones de la técnica de remediación "bioslurping" en estaciones de servicio de la ciudad de Buenos Aires.</a></li>
                  <li>Zambrano Monroy Beatriz. 2011. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3649/MCA1ZMB201101.pdf?sequence=3&isAllowed=y">Lipasas como biomarcadores en la degradación de alcanos y aromáticos.</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Escot Espinoza Victor Manuel. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3905/MCA1EEV201401.pdf?sequence=3&isAllowed=y">Dinámica de la diversidad microbiana con actividad sulfato reductora durante la bioestabilización de As en sistemas batch.</a> (Co-dirección).</li>
                  <li>Solís Moreno Claudia Angélica. 2017. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4526/MCA1SMC201701.pdf?sequence=1&isAllowed=y">Remoción de Pb<sup>2+</sup> en fase acuosa mediante sistemas por lote y continuo utilizando un bioadsorbente queratinoso biodegradable.</a></li>
                  <li>Trejo Carrizalez Ianelly. 2022. Evaluación del uso de microalgas como potenciales microorganismos para el tratamiento de pesticidas organofosforados en fase acuosa.</li>
                  <li>Grijalva López José Adalberto. 2022. Biotratamiento integral de Benzotriazol en fase acuosa mediante un proceso híbrido de adsorción-degradación.</li>
                </ul>-->
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
              <strong>Artículos de Investigación</strong><br><br>
              <ul class="vineta">
                <li>Freddy Castillo-Alfonso, Alejandro Quintana-Menéndez, Gabriel Vigueras-Ramírez, Alfonso Mauricio Sales-Cruz, <b>Luis Manuel Rosales-Colunga</b> and Roberto Olivares-Hernández “Analysis of the Propionate Metabolism in Bacillus subtilis during 3-Indolacetic Production” Microorganisms, 2022, 10, 2352.</li><br>
                <li>Sara Gisela Sánchez Ureña, Roberto Emmanuel Bolaños Rosales, Oscar Aguilar Juárez, <b>Luis Manuel Rosales Colunga</b>, Silvia Maribel Contreras Ramos, Erika Nahomy Marino Marmolejo. “Tequila Production Process Infuences on Vinasses Characteristics. A Comparative Study Between Traditional Process and Non cooked Agave Process” Waste and Biomass Valorization</li><br>
                <li>Freddy Castillo Alfonso, Juan Vigueras Ramírez, <b>Luis Manuel Rosales Colunga</b>, Alberto del Monte Martínez and Roberto Olivares Hernández “Propionate as the preferred carbon source to produce IAA in B. subtilis: comparative flux analysis using five carbon sources” Molecular Omics, 2021, 17 (4) 554-564</li><br>
                <li>Tzintzun-Camacho, O., Sánchez-Segura, L., Minchaca-Acosta, A. Z., <b>Rosales-Colunga, L. M.</b>, Hernández-Orihuela, A., &amp; Martínez-Antonio, A. (2016). Development of bacterial culture medium from avocado seed waste. Revista Mexicana de Ingeniería Química, 15(3).</li>
              </ul><br>
              <strong>Artículos de Divulgación</strong><br><br>
              <ul class="vineta">
                <li>Francisco Flores Montiel, <b>Luis Manuel Rosales Colunga</b>, Antonio De león Rodríguez “Bacterias de koala: una solución sustentable en la generación de energía” Universitarios Potosinos. año 18, número 270; pp. 1-5. Febrero 2023.</li><br>
                <li><b>Luis Manuel Rosales Colunga</b>, “El marciano agroindustrial” Universitarios Potosinos. año 16, número 243; pp. 9. Enero 2020.</li><br>
                <li>Irma Inés Villalpando Neira, José Luis Martínez Salgado, <b>Luis Manuel Rosales Colunga</b>, “De bebidas alcohólicas, bichos y algo más…” Universitarios Potosinos. año 15, número 228; pp. 22-25. Octubre 2018.</li><br>
                <li>Ángel Mario López Hidalgo, <b>Luis Manuel Rosales Colunga</b>, Antonio de León Rodríguez. “Las macroalgas, ¿pueden ayudarnos a resolver problemas de índole mundial” Universitarios Potosinos. año 14, número 215; pp. 4-10. Septiembre 2017.</li><br>
                <li>Cecilia Lizeth Álvarez Guzmán, <b>Luis Manuel Rosales Colunga</b>, Antonio de León Rodríguez. “Bacterias amantes del frío para producir biocombustibles” Universitarios Potosinos. año 12, número 195; pp. 12-15 Enero 2016.</li><br>
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