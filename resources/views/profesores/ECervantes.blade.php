
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
            Teléfono: +52 (488) 125-0159 ext. 4321<br>
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
                  <li>Vázquez Rodríguez Guadalupe. 2007. <a href="#">Movilización de elementos potencialmente tóxicos (EPT) en la rizósfera de <em>Viguiera dentata</em>, una especie vegetal tolerante, de suelos de Villa de la Paz, Matehuala, S.L.P.</a></li>
                  <li>Márquez Reyes Julia Mariana. 2008. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3959/MCA1MRJ200801.pdf?sequence=3&isAllowed=y">Modificación de la bioaccesibiidad de residuos mineros en presencia de materia orgánica empleando bacterias reductoras de sulfatos.</a></li>
                  <li>Landeta Escamilla Ofelia. 2008. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/1811/MCA1LEO200801.pdf?sequence=1&isAllowed=y">Desarrollo conceptual para el modelado matemático de una biobarrera reactiva permeable para la remoción de sulfatos y estabilización de plomo y arsénico.</a></li>
                  <li>Ortega Morales Natalia Belén. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3579/MCA1OMN201201.pdf?sequence=3&isAllowed=y">Asociación entre la fracción bioaccesible y la bioacumulación en algunas especies vegetales que crecen sobre el cauce del arroyo de San Pedro.</a></li>
                  <li>Rodríguez Torres Paola. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3705/MCA1RTP201301.pdf?sequence=3&isAllowed=y">Evaluación fisiológica de especies vegetales que crecen en sitios impactados por residuos generadores de drenaje ácido de roca.</a></li>
                  <li>Pérez Cuervo María Gabriela. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3699/MCA1PCM201301.pdf?sequence=3&isAllowed=y">Caracterización y evaluación de la polilactida en el diseño de objetos textiles lúdicos. </a> (Co-dirección)</li>
                  <li>Escot Espinoza Victor Manuel. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3905/MCA1EEV201401.pdf?sequence=3&isAllowed=y">Dinámica de la diversidad microbiana con actividad sulfato reductora durante la bioestabilización de As en sistemas batch. </a> (Co-dirección)</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Ábrego Góngora Carlos Joel. 2016. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4163/DCA1CAG201601.pdf?sequence=1&isAllowed=y">Modelación dinámica de la demanda de oxígeno en una laguna aireada facultativa primaria: exceso de sustrato, limitación de oxígeno y efecto de los episodios de lluvia.</a> (Co-Dirección)</li>
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
                <li>Eduardo Terrazas, Armando Vázquez, <b>Roberto Briones</b>, Isabel Lázaro, Israel Rodríguez (2010) EC treatment for reuse of tissue paper wastewater: aspects that affect energyconsumption. Journal of Hazardous Materials ISSN: 0304-3894. Estatus: Publicado. <a href="https://doi.org/10.1016/j.jhazmat.2010.05.086">DOI: 10.1016/j.jhazmat.2010.05.086</a>. PII:S0304-3894(10)00669-2. REF: HAZMAT11710</li><br>
                <li>R.H. Lara-Castro, <b>Briones R.</b>, M. Monroy, M. Dossot, M. Mullet and R. Cruz (2010) Electrochemical and Spectroscopic Analysis of the Arsenopyrite (FeAsS) Oxidation under Calcareous Soil Conditions. ECS Transactions Vol. 28 (6) pp 105-116 <a href="https://iopscience.iop.org/article/10.1149/1.3367906">DOI: 10.1149/1.3367906</a> Ed. The Electrochemical Society. ISSN: 1938-6737. Estatus: Publicado. Artículo Arbitrado.</li><br>
                <li>Blanca M. Gonzalez-Silva, <b>Roberto Briones-Gallardo</b>, Elías Razo-Flores, Lourdes B. Celis-García (2009) Inhibition of sulfate reduction by iron, cadmium and sulfide in granular sludge. Journal of Hazardous Materials 172; 400–407. ISSN: 0304-3894 Factor de impacto: 2.975. Estatus: Publicado. Artículo indizado.</li><br>
                <li><b>Briones-Gallardo R.</b>, Reyes Agüero J.A. e Razo-Soto I (2008) Bioaccesibilidad y fitodisponibilidad de arsénico, plomo y cadmio, en suelos impactados por residuos de mina de Villa de la Paz, San Luis Potosí (México). Boletín de mineralogía Vol. 18 p 59-60. Ed. Sociedad Mexicana de Mineralogia. Indexada en Latinindex. ISSN 0186-470X. Estatus: Publicado. Artículo Arbitrado.</li><br>
                <li>Mendoza-Cózatl, D.G., Rodríguez-Zavala J.S., Rodríguez-Enríquez S. Mendoza-Hernandez G., <b>Briones-Gallardo R.</b> and Moreno-Sánchez R. (2006) Phytochelatin–cadmium–sulfide high-molecular-mass complexes of Euglena gracilis. FEBS Journal. Vol. 273 Is 24, p 5703-5713. ISSN: 1742-464X Factor de impacto: 3.396 (Citado 6 veces de acuerdo al Servicio de ISI-WEB Current Contents Connect; con 2 citas tipo A y 4 citas tipo B). Estatus: Publicado. Artículo indizado.</li><br>
                <li>Joner E.J., <b>Briones R.</b> and Leval C. (2000) Metal binding capacity of arbuscular mycorrhizal mycelium. Plant and Soil, Vol 226, Is. 2, p. 227 – 234. ISSN: 0032-079X Factor de impacto: 1.998 (Citado 98 veces de acuerdo al Servicio de ISI-WEB Current Contents Connect; con 94 citas tipo A y 4 citas tipo B). Estatus: Publicado. Artículo indizado.</li><br>
                <li><b>Briones R.</b> and Lapidus G. (1998) Silver leaching with the thisulfate – ammonia – cupric ion system. Hydrometallurgy, 50, p. 243 – 260. ISSN: 0304-386X Factor de impacto: 1.747 (Citado 10 veces de acuerdo al Servicio de ISI-WEB Current Contents Connect, con 9 citas tipo A y 1 cita tipo B). Estatus: Publicado</li>
              </ul><br>
              <strong>Capítulos de libros</strong><br><br>
              <ul class="vineta">
                <li><b>Briones-Gallardo R.</b>, Vázquez-Rodríguez G. and Monroy-Fernández M.G.  (2009) Arsenic mobility in the rhizosphere of the tolerant plant Viguiera dentate. p 387- 393. En J. Bundschuh, M.A. Armienta, P. Bhattacharya, J. Matshullat and A.B. Mukherjee (Eds.). Natural arsenic in grounwater of Latin America. Serie: Arsenic in the Environment Vol. 1.  p 742. CRC Press/Balkema. AK Leiden The Netherlands. ISBN: 978-0-415-40771-7. Estatus: Publicado.</li><br>
                <li>Labastida-Nuñez I., Flores-Moreno A. and <b>Briones-Gallardo R.</b> (2007) Selecting samples in treatability tests for metallic stabilization. p 157 – 163 En Candela, L. et al. (eds) Water Pollution in natural Porous media at different scales. Assessment of fate, impact and indicators. WAPO. Serie: Hidrología y aguas subterráneas No. 22. p 759. Editado por el Instituto Geológico y Minero de España. Madrid, España. ISBN: 978-84-7840-676-0</li>
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