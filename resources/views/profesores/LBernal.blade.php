
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. LUIS ARMANDO BERNAL JÁCOME</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Luis_Armando_ Bernal_Jacome.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería</strong></h5>
        <br>
        <p>
            Dr. Manuel Nava No. 8, Zona Universitaria Poniente <br>
            C.P. 78290, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-2300 Ext. 7201 <br>
            luis.bernal@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://ciep.ing.uaslp.mx/geologia/profesor.php?id=3130383733">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Bernal_Jacome_LuisArmando.pdf')}}">Currículum Vitae </a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/eSoAAA%3d%3d">Directorio de Investigadores</a>
            <!--<a target="_blank" href="http://orcid.org/0000-0001-8121-4657"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>-->
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=8656423300"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Fenómenos de superficie</li>
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Tratamiento de aguas residuales</li>
                   <li>Obtención y modificación de adsorbentes provenientes de residuos agroindustriales</li>
                </ul>
                <br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Azuara Sánchez Jorge Luis. 2011. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3542/MCA1SEA01101.pdf?sequence=3&isAllowed=y"> Evaluation of a solar energy application as a water supply solution for households in the city of San Luis Potosí </a></li>
                  <li>Padilla González Claudio Manuel. 2011. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3598/MCA1COE01101.pdf?sequence=3&isAllowed=y"> A comparison of the efficiency of sulfate reduction and cadmium remotion using constructed wetlands </a></li>
                  <li>Portillo Pérez Guillermo Alberto. 2011. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3574/MCA1PPG201101.pdf?sequence=3&isAllowed=y">Tidal energy potential in the Gulf of California </a></li>
                  <li>Zatarain Salazar Jazmín. 2011. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3559/MCA1OPT01101.pdf?sequence=3&isAllowed=y"> Optimization of sludge dewatering process at Bensberg municipal wastewater treatment plant </a></li>
                  <li>Almanza Ramírez Andrés. 2012. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3643/MCA1CYC01201.pdf?sequence=1&isAllowed=y">Life cycle assessment for wastewater treatment in the chemical industry </a></li>
                  <li>Pino Herrera Douglas Oswaldo. 2013. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3599/MCA1ADS01301.pdf?sequence=1&isAllowed=y">Adsorption kinetics modeling of a red azo dye onto bone char </a></li>
                  <li>Orozco Corona Dulce Maria. 2013. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3964/MCA1ATT01201.pdf?sequence=3&isAllowed=y">Attenuation of solar radiation by the presence of moisture in San Luis Potosí, México </a></li>
                  <li>Ocando Gotera Maite Virginia. 2014. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3979/MCA1EOU01401.pdf?sequence=3&isAllowed=y"> Efficiency of ultrasonic treatment for secondary sludge disintegration in Bergisch Gladbach, Germany </a></li>
                  <li>Jiménez Torres Andrés Yaotzin. 2016. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4118/AYJT__96778_Thesis%20project_ITT_PMPCA_ENREM_2014_2016.pdf?sequence=3&isAllowed=y"> Analyzing technical and economic suitability of renewables over wastewater treatment plants. An approach considering energy polices and their impacts </a></li>
                  <li>Mardones Hidalgo Melina. 2016. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4115/Master_thesis_Melina_Mardones_PMPCA.pdf?sequence=3&isAllowed=y">Biodegradation of industrial wastewater in a laboratory-scale constructed wetland </a></li>
                  <li>Berger Alina Sofie. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4396/MCA1BAS201701.pdf?sequence=1&isAllowed=y">The potential of greenhouse gas emissions reduction in the agroindustrial sector: a case study of biogas systems in Uruguay </a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Hernández Domínguez Katia Gabriela. 2015. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3952"> Análisis de las variables del proceso de intercambio iónico para la puesta en marcha de una planta piloto de tratamiento de aguas residuales </a></li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Padilla González Claudio Manuel. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4512/DCA1PGC201702.pdf?sequence=1&isAllowed=y">Evaluación de la calidad del agua del río San Juan (Edo. Mex., Qro., Hgo) y propuesta de un índice biótico utilizando macroinvertebrados </a></li>
                  <li>Vargas Berrones Karla Ximena. 2021. Reducción de compuestos tóxicos presentes en detergentes, utilizando nuevas materias primas ecológicas</li>
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
              <strong>Artículos de investigación</strong><br><br>
              <ul class="vineta">
                <li>(2018) F. E. Galarza-Tristán, C. Aldama-Aguilera, G. Hipólito-Cruz, R. González-Montero, N. A. Medellín-Castillo y <b>L. A. Bernal-Jácome</b>. Extractos vegetales para el control de larvas de mosquitos en diferentes calidades de agua de la ciudad de S.L.P. Entomología Mexicana (5) Julio 2018 pp 148- 154. ISSN 2448-475X.</li><br>
                <li>(2017) C. Contreras-Servín, M. G. Galindo-Mendoza, <b>L.A. Bernal-Jácome</b>, C. Peralta-Rivero. Libro: Tópicos ambientales y conservación de ecosistemas ambientales. Ed. UASLP pp1-167.<br><br>
                <li>(2017) <b>L. A. Bernal-Jácome</b>, M. K. Hernández-Campos, M. E. Martínez-Partida, M. S. Berber-Mendoza, M. A. Espinosa-Rodríguez, R. Delgado-Delgado. Remoción del colorante compuesto naranja remazol de aguas residuales generadas en la industria textil. Avances en Ciencia e Ingeniería. 3(8) pp 51-57. ISSN: 0718-8706.</li><br>
                <li>(2017) M.A. Corona-Rivera, <b>L.A. Bernal-Jácome</b>, V. M. Ovando-Medina, E. Cervantes-González, N. Dávila-Guzmán, I. Antonio-Carmona Remazol red dye removal using poly (acrylamide-co-acrylic acid) hydrogels and wáter absorbency studies. Colloid and polymer science. 1(295) pp227-236. ISSN 0303402X. 5 Citas.</li><br>
                <li>(2016) C. M. Padilla-González, <b>L.A. Bernal-Jácome</b>, A. I. Ortega-Morales, G. Álvarez-Fuentes. Estudio de evaluación de la calidad del agua del río San juan (centro de México) Utilizando macroinvertebrados bentónicos. Revista Iberoamericana de Ciencias. 6(3) pp1-14. ISSN 2334-2501.</li><br>
                <li>(2016) <b>L. A. Bernal-Jácome</b>, L. Olvera-Izaguirre, M. Gallegos-García, M.A. Espinosa-Rodríguez. Modificación de la química superficial del hueso de nanche para aumentar su capacidad de biosorción de pb2+. CiBiT, 32(11) pp 35-39. ISSN 1870056X</li><br>
                <li>(2016) A. Rocha-Uribe, <b>L.A. Bernal-Jácome</b>, N.A. Medellín-Castillo, C. Aldama Aguilera, K. P. Medina-González, M. S. Berber-Mendoza, J. F. Toro-Vázquez, M. Gallegos-García. Síntesis de biodiesel a partir de residuos de mayonesa de la industria alimentaria. Investigación Multidisciplinaria 1(10) pp 90-99. ISSN 1665790X.</li>
              </li>
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
      </div> <br><br><br>
    </div>
    </div>
</div>

@endsection