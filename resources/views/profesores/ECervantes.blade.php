
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. ELSA CERVANTES GONZÁLEZ</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/ElsaCervantesGonzalez.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Coordinación Académica Región Altiplano</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Carretera Cedral Km 5+600, Ejido San José de las Trojes, <br>
            C.P. 78700, Matehuala, S. L. P., México <br> <br>
            Teléfono: +52 (488) 125-0150 ext. 4307<br>
            <a href="mailto:elsa.cervantes@uaslp.mx" style="color:rgb(0, 178, 227)">elsa.cervantes@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <!--<a target="_blank" href="#">Webpage</a>-->
            <a target="_blank" href="{{asset('storage/CV/Cervantes_Gonzalez_Elsa.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/I0cAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-8894-5532"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56002671300"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Biología molecular</li>
                    </ul>
                    <br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Degradación de hidrocarburos, plaguicidas y colorantes mediante procesos biológicos y/o fisicoquímicos en aguas y suelos contaminados</li>
                  <li>Estudio de poblaciones microbianas asociadas a procesos de biodegradación mediante técnicas moleculares, así como el estudio de enzimas microbianas de interés biotecnológico</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
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
              <strong>Artículos de Investigación</strong><br><br>
              <ul class="vineta">
                <li><b>Cervantes-González E</b>, Guevara-García MA, García-Mena J, Ovando-Medina VM. 2019. Microbial diversity assessment of polychlorinated biphenyl-contaminated soils and the biostimulation and bioaugmentation processes. Environmental Monitoring and Assessment 191(2):118. ISSN: 1573-2959 (on line), 0167-6369 (print). DOI: 10.1007/s10661-019-7227-4.</li><br>
                <li>V.M. Ovando-Medina, L. Farías-Cepeda, N.V. Pérez-Aguilar, J. Rivera de la Rosa, H. Martínez-Gutiérrez, A. Romero Galarza, <b>E. Cervantes-González</b>, N. Cayetano-Castro. 2018. Facile synthesis of low band gap ZnO microstructures. Revista Mexicana de Ingeniería Química. 17 (2):455- 462. ISSN: 1665-2738 (online). doi: 10.24275/10.24275/uam/izt/dcbi/revmexingquim/2018v17n2/Ovando issn-e: 2395-8472</li><br>
                <li><b>E. Cervantes-González</b>, H. Martínez-Gutiérrez, C. L. Reyes-García. 2017. Optimization, kinetic, equilibrium and thermodynamics parameters for congo red adsorption from aqueous phase by untreated chicken feathers. Desalination and Water Treatment. 66: 291-298. ISSN: 1944-3994 (Print), 1944-3986 (Online)DOI: 10.5004/dwt.2017.20224.</li><br>
                <li>Miguel A. Corona-Rivera, Víctor M. Ovando-Medina, Luis A. Bernal-Jacome, <b>Elsa Cervantes-González</b>, Iveth D. Antonio-Carmona, Nancy E. Dávila-Guzmán. 2017. Remazol red dye removal using poly(acrylamide-co-acrylic acid) hydrogels and water absorbency studies. Colloid and Polymer Science. 295:227–236. ISSN: 0303-402X . DOI 10.1007/s00396-016-3996-2</li><br>
                <li>R. Briones-Gallardo, V.M. Escot-Espinoza, <b>E. Cervantes-González</b>. 2017. Removing arsenic and hydrogen sulfide production using arsenic-tolerant sulfate-reducing bacteria. International Journal of Environmental Science and Technology. 3(14):609-622. ISSN: 1735-1472 (print version) ISSN: 1735-2630. DOI 10.1007/s13762-016-1174-1</li><br>
                <li>Jaime García-Mena, Selvasankar Murugesan, Ashael Alfredo Pérez-Muñoz, Matilde García-Espitia, Otoniel Maya, Monserrat Jacinto-Montiel, Giselle Monsalvo-Ponce, Alberto Piña-Escobedo, Lilianha Domínguez-Malfavón, Marlenne Gómez-Ramírez, <b>Elsa Cervantes-González</b>, María Teresa Núñez-Cardona. 2016. Airborne Bacterial Diversity from the Low Atmosphere of Greater Mexico City. Microbial Ecology. 72:70-84.ISSN: ISSN: 0095-3628 (print version), 1432-184X (electronic version). DOI 10.1007/s00248-016-0747-3.</li><br>
                <li>Zuñiga-Zamora A., García-Mena J. and <b>Cervantes-González E</b>. 2016. Removal of Congo Red from the aqueous phase by chitin and chitosan from waste shrimp.  Desalination and Water Treatment. 57 (31):14674-14685. ISSN: 1944-3994 (Print), 1944-3986 (Online). DOI: 10.1080/19443994.2015.1065444</li><br>
                <li>Moreno-Torres Carlos Saul, Ovando-Medina Victor Manuel, <b>Cervantes-González Elsa</b>. 2018. Removal of fluoride in continuous phase using a plant species from Altiplano Potosino. Journal of Bioengineering and Biomedicine Research 2(3):36-42. ISSN: 2594-052X.</li><br>
                <li>Alina Janet Cabrera Esquivel, <b>Elsa Cervantes González</b>. Biosorción de ceite vegetal: Optimización, equilibrio y parámetros termodinámicos. CiBIyT, 38, 17-22. 2018. ISSN:1870-056X. Indizada, Latin index.</li><br>
                <li><b>Elsa Cervantes González</b>. El papel de la bioprospección en la biorremediación. CiBIyT, 39, 75-80. 2018. ISSN:1870-056X. Indizada, Latin index.</li><br>
                <li>Felipe de Jesús Silva Aguilar, José Adalberto Grijalva López, <b>Elsa Cervantes González</b>. Remoción de plomo (Pb) mediante un consorcio  queratinolitico. CiBIyT, 35, 2017. 160-163. ISSN:1870-056X. Indizada, Latin index</li><br>
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