
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. GUILLERMO ESPINOSA REYES</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Guillermo_Espinosa_Reyes.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel V.</strong></h4>
        <h5><strong>Facultad de Medicina.</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
          Av. Venustiano Carranza 2405 Colonia Los Filtros,<br> 
          C.P. 78210 San Luis Potosí, S.L.P.<br>
          Tel. (444) 8262300 Ext. 6619 <br>
          guillermo.espinosa@uaslp.mx
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://www.ciacyt.uaslp.mx/Grupo_ciaas.aspx">Webpage</a>
            <a target="_blank" href="http://www.ciacyt.uaslp.mx/images/pdf/Ciaas/Dr.GuillermoEspinozaReyes.pdf">Curriculum Vitae </a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/V0MAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0003-1964-8950"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56013578200"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                <li><strong>Cursos:</strong></li>
                <p><ul class="vineta">
                <li> Salud Integral de los ecosistemas </li>
                </ul></p>
                <li><strong>LGAC:</strong></li>
                <p><ul class="vineta">
                <li> Evaluación integrada del riesgo y salud ambiental </li>
                </ul></p>
                <li><strong>Dirección de Tesis:</strong></li>

        <p><em>Maestría en Ciencias Ambientales</em>
            <ul class="vineta">
                <li> Moreno Reynosa Maria Antonieta. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_morenoreynosa.pdf">Prevalencia de hantavirus en roedores silvestres del altiplano potosino</a>.</li>
                <li> Díaz Pérez Romy Patricia. 2016. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4670/MCA1DPR201601.pdf?sequence=1&amp;isAllowed=y">Evaluación toxicológica con lombriz de tierra <em>(Eisenia andrei)</em> expuesta a diferentes residuos sólidos de mina de San Luis Potosí, México</a>.</li>
                <li> Sanjuan Meza Eleno Uriel. 2019. <a href="">Monitoreo de la condición del cocodrilo de pantano <em>(Crocodylus moreletii)</em> en la Ciénaga de Tamasopo, San Luis Potosí y un sitio de referencia</a>.</li>
                <li> Dávila Galaz Luis Manuel. 2019. <a href="#">Monitoreo de las concentraciones de elementos potencialmente tóxicos en suelo y roedores de la cuenca del Río Sonora, México</a>.</li>
            </ul></p>
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
              <strong>Artículos científicos</strong><br><br>
              <ul class="vineta">
                <li> [2012] Orta-García, S.T.; León-Moreno, L.C.; González-Vega, C.; DomínguezCortinas, G.; <b>Espinosa-Reyes, G.</b>; Pérez-Maldonado, I.N. 2012. Assessment of the Levels of Polybrominated Diphenyl Ethers in Blood Samples from Guadalajara, Jalisco, Mexico. Bulletin of Environmental Contamination and Toxicology. DOI 10.1007/s00128-012-0727-3.</li><br>
                <li> [2012] Ilizaliturri-Hernández, C.A.; González-Mille, D.J.; Mejía-Saavedra, J. <b>Espinosa-Reyes, G.</b>; Torres-Dosal, A.; Pérez-Maldonado, I. Blood lead levels, δ-ALAD inhibition and hemoglobin content in blood of giant toad <em>(Rhinella marina)</em> to asses lead exposure in three areas surrounding an industrial complex in Coatzacoalcos Veracruz, Mexico” Environmental Monitoring and Assessment, DOI 10.1007/s10661-012-2660-7.</li><br>
                <li> [2012] Alonso-Castro, A.J.; Ortiz-Sánchez, E.; Domínguez, F.; Arana-Argáezd, V.; Juárez-Vázquez, M.C.; Chávez, M.; Carranza-Álvarez, C.; Gaspar-Ramírez, O.; <b>Espinosa-Reyes, G.</b>; López-Toledo, G.; Ortiz-Andrade, R.; García-Carrancá, A. Antitumor and immunomodulatory effects of Justicia spicigera Schltdl (Acanthaceae). Journal of Ethnopharmacology, DOI 10.1016/j.jep.2012.03.036.</li>
                <li> [2012] Díaz-Barriga, F.; Trejo-Acevedo, A. Betanzos, A.F.; <b>Espinosa-Reyes, G.</b>; Alegria-Torres, J.A; Pérez-Maldonado, I. Assessment of DDT and DDE levels in soil, dust, and blood samples from Chihuahua Mexico. Arch Environ Contam Toxicol 62:351–358 DOI 10.1007/s00244-011-9700-0.</li>
                <li> [2011] Pelallo-Martínez, N.A.; Ilizaliturri-Hernández, C.A.; <b>Espinosa-Reyes, G.</b>; Carrizales, L. Assessment of Exposure to Lead in Humans and Turtles in an Industrial Area in Coatzacoalcos Veracruz, Mexico. Bulletin of Environmental Contamination and Toxicology. 642-645.</li><br>
                <li> [2010] González-Mille, D.J.; Ilizaliturri-Hernández, C.A.; <b>Espinosa-Reyes, G.</b>; Costilla-Salazar, R.; Díaz-Barriga, F.; Ize-Lema, I. and Mejía-Saavedra, J. 2010. Exposure to persistent organic pollutants (POPs) and DNA damage as an indicator of environmental stress in fish of different feeding habits of Coatzacoalcos, Veracruz, Mexico. Ecotoxicology. 19:1238-1248.</li><br>
                <li> [2010] <b>Espinosa-Reyes, G.</b>; Torres-Dosal, A.; Ilizaliturri, C.; González-Mille, D.; Díaz-Barriga, F.; Mejía-Saavedra, J. Wild rodents <em>(Dipodomys merriami)</em> like biomonitors in the mining sites. Journal of Environmental Science and Health A. 45: 82-89.</li><br>
                <li> [2010] <b>Espinosa-Reyes, G.</b>; Ilizaliturri, C.; González-Mille, D.; Costilla, R.; Díaz-Barriga, F.; Cuevas, M.C.; Martínez, M.A.; Mejía-Saavedra, J. DNA Damage in earthworms <em>(Eisenia spp.)</em> as indicator of environmental Stress in the industrial zone Coatzacoalcos, Veracruz, Mexico. Journal of Environmental Science and Health A. 45: 49-55.</li><br>
                <li> [2009] Ilizaliturri, C.; González-Mille, D.; Pelallo, N; Domínguez, G.; PérezMaldonado, I.; Mejía-Saavedra, J.; Batres, L.; Díaz-Barriga, F.; <b>Espinosa-Reyes, G.</b> Revisión de las metodologías sobre evaluación de riesgos en salud para el estudio de comunidades vulnerables en América Latina. Interciencia. 34(10): 710-717.</li><br>
                <li> [2007] Jasso-Pineda, Y.; <b>Espinosa-Reyes, G.</b>; González-Mille, D.; Razo-Soto, I.; Carrizales, L.; Torres-Dosal, A.; Mejía-Saavedra, J.; Monroy M.; Ize, A.I.; Yarto, M. and Díaz-Barriga, F. 2007. An integrated health risk assessment approach to the study of mining sites contaminated with arsenic and lead. Integrated Environmental Assessment and Management 3(3): 344-350.</li><br>
                <li> [2012] Cuevas, M; <b>Espinosa-Reyes</b>, G; Ilizaliturri, C.; Mendoza, A. Métodos ecotoxicológicos para la evaluación de suelos contaminados con hidrocarburos. Instituto Nacional de Ecología. México, Distrito Federal.137 p.</li><br>
                <li> [2011] <b>Espinosa-Reyes, G.</b> y R.I. Yeaton. Vegetación leñosa y roedores en el sur del Desierto Chihuahuense. Editorial Académica Española. (ISBN 978-3-8454-8786-1). 83 p.</li><br>
                <li> [2012] <b>Espinosa-Reyes, G.</b>; González-Mille, D.; Ilizaliturri, C.; Díaz-Barriga, F.; Mejía-Saavedra, J.J. Exposure assessment to persistent organic pollutants in wildlife of Coatzacoalcos, Veracruz, Mexico. 113-134 pp. In Organic Pollutants ISBN 978-953-307-924-0. Eds. Puzyn, T. and Mostrag-Szlichtyng, A. InTech Janeza Trdine Rijeka, Croatia. 482 p.</li><br>
                <li> [2012] González-Mille, D.J.; <b>Espinosa-Reyes, G.</b>; Ilizaliturri-Hernández, C.; Mejía-Saavedra, J.J.; Jasso-Pineda, Y. Díaz-Barriga, F. Ensayo cometa en fauna terrestre. 107-125 pp. En: Cuevas, M; Espinosa-Reyes, G; Ilizaliturri, C.; Mendoza, A. 2012. Métodos ecotoxicológicos para la evaluación de suelos contaminados con hidrocarburos. Instituto Nacional de Ecología. México, Distrito Federal. 137 p.</li><br> 
                <li> [2006] Díaz-Barriga, F.; Torres, A.; Mejía, J.  <b>Espinosa-Reyes</b>, G.; Ilizaliturri, C.; González, D. 2006. Anexo 1: Método para la elaboración de estudios de evaluación e riesgo ambiental. 67-108 pp. En: Ruíz, U. 2006. Guía técnica para orientar la elaboración de estudios de evaluación de riesgo ambiental de sitios contaminados. SEMARNAT-DGGIMAR. México, Distrito Federal. 314 p.</li><br>
                <li> [2006] Díaz-Barriga, F.; Torres, A.; Mejía, J. <b>Espinosa-Reyes, G.</b>; Ilizaliturri, C.; González, D. 2006. Anexo 2: Método para la elaboración de estudios de evaluación e riesgo ambiental cuando los receptores son seres humanos. 109-134 pp. En: Ruíz, U. 2006 Guía técnica para orientar la elaboración de estudios de evaluación de. riesgo ambiental de sitios  contaminados. SEMARNATDGGIMAR. México, Distrito Federal. 314 p.
            </ul><br>
              <strong>Artículos de divulgación</strong><br><br>
              <ul class="vineta">
                <li> [2012] Cilia López V.G y <b>Espinosa-Reyes, G.</b> 2012. Por qué las plantas raras son más vulnerables a la extinción. Universitarios Potosinos. 8(160):04-07.</li><br>
                <li> [2010] Cilia López V.G y <b>Espinosa-Reyes, G.</b>2010. Vulnerabilidad de las especies raras. ECOFRONTERAS, 39: 12-15.</li><br>
                <li> [2003] <b>Espinosa-Reyes, G.</b> 2003. "La Ventanilla, Oaxaca, un ejemplo de ecoturismo en México." Universitarios Potosinos. XI(5):68-75.</li><br>
                <li> [2011] Ilizaliturri, C.; Cília, G. González, D. Mejía, J.; Costilla, R.; <b>Espinosa-Reyes, G.</b> Programa de biomonitoreo de sustancias tóxicas, persistentes y bioacumulables en biota para los sitios PRONAME -Taller de capacitación Biomonitoreo sitios PRONAME</li><br>
            </ul><br>
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
      </div>
    </div>
    </div>
    <br><br><br>
</div>

@endsection