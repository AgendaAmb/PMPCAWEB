
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. MARCOS ALGARA SILLER</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Marcos_Algara_Siller.png')}}" alt="">
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
            Teléfono: +52 (444) 826-2330 ext. 6080 <br>
            <a href="mailto:marcos.algara@uaslp.mx" style="color:rgb(0, 178, 227)">marcos.algara@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://ciep.ing.uaslp.mx/agua/profesor.php?id=3132343537">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Algara_Siller_Marcos.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/qTAAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-9070-9624"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57189049601"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Climatología Aplicada</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Climatología aplicada (Sequía, GEI, modelado)</li>
                  <li>Diseño bioclimático (Desarrollo de eco-tecnias y materiales)</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Espinosa Muñoz Salvador. 2014. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3872/MCA1DLC01401.pdf?sequence=3&isAllowed=y">Design of a low-cost acclimatization system for sustainable social housing in a temperate-dry climate in Mexico</a></li>
                  <li>Sánchez Martínez Daniela. 2015. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3849/MCA1ENV01501.pdf?sequence=3&isAllowed=y">Environmental product evaluation guideline towards sustainable consumption. A case study on compressed adobe block</a></li>
                  <li>Thanos Dimitrios. 2018. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4244">Towards sustainable mobility-as-a-service: a roadmap for San Luis Potosí, MX, using the MaaS readiness index</a></li>
                  <li>Cisneros Vidales Alicia Anahí. 2018. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4536"> Building sustainable urban metabolism through resilience strategies in La Pila, San Luis Potosi, Mexico</a></li>
                  <li>De Castro Soares Raisa. 2020. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/7553">The contribution of decentralized Photovoltaic Systems to energy poverty alleviation in La Pila, SLP, Mexico</a></li>
                  <li>Fernández Reyes José Salvador. 2021. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/8070">Strategic assessment of an on-campus energy system: the university energy program of UASLP, Mx</a></li>
                  <li>Martínez Guzmán Verne Javier. 2021. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7582/TesisM.PMPCA.2021.Proposal.Martinez.pdf?sequence=1&isAllowed=y">Proposal for a food security program: the urban agriculture guideline at the Autonomous University of San Luis Potosi</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Hernández Martínez Ilse Patricia. 2016. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/5723">Propuestas al reglamento de construcciones del Municipio de San Luis Potosí para transitar hacia una zona metropolitana sustentable</a></li>
                  <li>Arredondo García Erika Herminia. 2016. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4128/MCA1AGE201601.pdf?sequence=3&isAllowed=y">Costos ambientales por emisiones GEI en el marco normativo para la producción de caña de azúcar en la Huasteca Potosina</a></li>
                  <li>Torres Martínez Guillermo. 2021. Análisis de los elementos de sostenibilidad en la política pública de México para una propuesta de programas de escuelas sostenibles</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Flores Jiménez David Enrique. 2016. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3955/DCA1EEM01601.pdf?sequence=3&isAllowed=y">Estimación de las emisiones y modelado del transporte de metano en la atmósfera generado por la quema de caña de azúcar en México. (Co-Dirección)</a></li>
                  <li>Buendía Oliva Mariana. 2020. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/5681"> Diseño y evaluación del Club de Educación Ambiental y Sustentabilidad como estrategia para la aprobación de ecotecnicas en la escuela Francisco González Bocanegra de la delegación la Pila San Luis Potosí, SLP</a></li>
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
                <li>Aguilar-Rivera, N, <b>Algara-Siller, M.</b> and Olvera-Vargas, L. A. 2018. Land Management in Mexican sugarcane crop fields. Land Use Policy. 78(2018)763-780. ISSN:0264-8377. DOI <a target="_blank" href="https://doi.org/10.1016/j.landusepol.2018.07.034">https://doi.org/10.1016/j.landusepol.2018.07.034.</a></li><br>
                <li>Flores-Jiménez, D. E., <b>Algara-Siller, M.</b>, Aguilar-Rivera, N., Carbajal, N., Aldama-Aguilera, C., Ávila-Galarza, A. y Álvarez-Fuentes, G. 2016. Influence of sugarcane burning on carbón and nitrogen reléase under drought and evapotranspiration conditions in a Mexican sugarcane supply zone. Revista Internacional de Contaminación Ambiental. Aceptado para publicar en mayo 2016. 2(32). ISSN:0188-4999. Indizado ISI Web of Science Impacto: 0.177. CONACyT. http://www.revistas.unam.mx/index.php/rica. <a target="_blank" href="http://dx.doi.org/10.20937/RICA.2016.32.02.04">http://dx.doi.org/10.20937/RICA.2016.32.02.04</a></li><br>
                <li>Peralta-Rivero, C., Galindo-Mendoza, M. G., Contreras-Servín, C., <b>Algara-Siller, M.</b> y Mas-Caussel, J. F. 2016. Percepción local respecto a la valoración ambiental y pérdida de los recursos forestales en la región Huasteca de San Luis Potosí, México. Madera y Bosques. 22(1)71-93. ISSN: 1405-0471. México.</li>
              </ul><br>
              <strong>Artículos de Divulgación</strong><br><br>
              <ul class="vineta">
                <li><b>Algara-Siller, M.</b> 2016. Llamado celestial. Universitarios Potosinos. 12(196)37. ISSN:1870-1698. Febrero 2016.</li>
              </ul><br>
              <strong>Capítulos de libros</strong><br><br>
              <ul class="vineta">
                <li>Aguilar-Rivera, N., Olvera-Vargas, L. A., <b>Algara-Siller, M.</b> y Michel-Coello, Ch. 2018. Gestión de recursos ambientales, socioeconómicos y tecnológicos en la sostenibilidad de la agroindustria azucarera. En Sustentabilidad e innovación en la gestión fitosaniaria en caña de azúcar. Editado por Isabel Vásquez-López y Fernando Carlos Gómez-Merino. Biblioteca Básica de Agriciultura. Colegio de Posgraduados. 57-93. ISBN:978-607-715-374-0. Septiembre 2018.</li><br>
                <li>Flores-Jiménez, D. E., <b>Algara-Siller, M.</b>, Aguilar-Rivera, N., Álvarez-Fuentes, G., Ávila-Galarza, A. and Aldama-Aguilera, C. 2018. Competitive management of sugarcane waste and reduction of CO2 emissions from harvest burning in supply regions. En Sugarcane technology and research. InTech Open Publishers. ISBN:978-1-78923-150-2 print. DOI <a target="_blank" href="https://dx.doi.org/10.5772/intechopen.71531">https://dx.doi.org/10.5772/intechopen.71531</a>. Mayo 16, 2018. Indizado en Web of Science.</li><br>
                <li>Flores-Jiménez, D., <b>Algara-Siller, M.</b>, Aguilar-Rivera, N. y Aldama-Aguilera, C. 2017. Methane Emissions and Productivity Index in the Mexican Sugarcane Crop Fields. En Sugarcane Productions Systems, Uses and Economic Importance. Editado por Rachel Murphy. Nova Publishers New York. Indizado en Scopus. ISBN: 978-1-53610-938-2. Estados Unidos.</li><br>
                <li>Quintero-Ruiz, J., Contreras-Servin, C., Yáñez-Espinosa, L. y <b>Algara-Siller, M.</b> 2016. Problemática social y ambiental en la Huasteca Potosina en el marco del desarrollo económico regional. En Tópicos Ambientales y Conservación de Ecosistemas Naturales. Editado por Carmelo Peralta Rivero, Carlos Contreras Servín, Guadalupe Galindo Mendoza, Luis Armando Bernal Jácome. México. 118-129. ISBN: 987-607-9453-81-7.</li><br>
              </ul>
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
            <div class="accordion-body"><br>
              <ul class="vineta">
                <li><b>FAI-UASLP</b> “Diseño de una propuesta de incorporación de contenidos de ambiente y sostenibilidad en el currículo de educación primaria” C17-FAI-06-29.29. Junio 12 de 2017 a marzo 11 de 2018.</li><br>
                <li><b>CUMMINS-UASLP </b>a través de GlobalGiving Foundation. “Modelo sostenible para la soberanía de comunidades vulnerables”. Enero 2017 a diciembre 2019.</li><br>
                <li><b>CUMMINS-UASLP</b> a través de Asociación Filantrópica CUMMINS. “Modelo sostenible para la soberanía de comunidades vulnerables”. De agosto 2015 a diciembre 2016.</li><br>
                <li><b>GIZ-UASLP</b> “Desarrollo de capacidades para la elaboración de proyectos de Educación Ambiental para la conservación del Corredor Ecológico de la Sierra Madre Oriental”. Abril 22 a septiembre 24 de 2016.</li><br>
                <li><b>PRODEP.</b> Líder Dr. Renato Ramos en colaboración y co-dirección de tesis. “Introducción de módulos de vegetación urbana para el control de escurrimientos en vialidades con pendiente”. Septiembre 2015 – Septiembre 2016</li><br>
                <li><b>CUMMINS-UASLP</b> a través de GlobalGiving Foundation, Proyecto “Techo Vivo”. Convenio del 12 de mayo de 2014.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>  <br><br><br>
    </div>
    </div>
</div>

@endsection