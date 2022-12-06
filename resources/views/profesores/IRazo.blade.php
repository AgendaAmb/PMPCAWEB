
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
            <a target="_blank" href="/storage/CV/Razo_Soto_Israel.pdf">Curriculum Vitae </a>
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
                    <p>Gestión ambiental de operaciones minero metalúrgicas</p>

                <li><strong>LGAC</strong></li>
                <p>Minería y medio ambiente<br>
                   Evaluación de sitios contaminados
                </p>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <p>
                  Chow Pineda Irene Gilma. 2010. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5726/MCA1CPI201001.pdf?sequence=1&isAllowed=y">Analysis of the potential of biomass energy generation in Santiago de Chile </a><br>
                  Jorio Nyzar. 2010. <a href="https://ninive.uaslp.mx/xmlui/handle/i/3585">Performance analysis of wind resource assessment software in different wind sites in Mexico and Brazil </a></li>
                  Jiménez Lira Marisela. 2012. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3686/MCA1ACC01201.pdf?sequence=1&isAllowed=y"> Acciones y estrategias para un plan de manejo de la microcuenca de Monte Caldera, San Luis Potosí </a><br>
                  Román Gurrola Manuel. 2015. <a href="https://ninive.uaslp.mx/xmlui/handle/i/3851">Propuesta de plan para la gestión integral del agua en una cuenca con actividad minera en el municipio de Aquiles Serdán, Chihuahua </a>
                </p>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <p>
                  Ramírez Hernández Virginia. 2010. <a href="https://ninive.uaslp.mx/xmlui/handle/i/5725">Caracterización ambiental y análisis de riesgos para la salud en un sitio minero-metalúrgico. Caso de estudio: Concepción del Oro, Zacatecas, México </a><br>
                  Rodríguez y Rodríguez Yolanda. 2011. <a href="https://ninive.uaslp.mx/xmlui/handle/i/3551"> Evaluación de la contaminación por metales en pasivos ambientales de actividades metalúrgicas históricas en el distrito minero Cerro de San Pedro, S.L.P. (México) </a><br>
                  Mayorga Ávila Rubí Estrella. 2012.  <a href="https://ninive.uaslp.mx/xmlui/handle/i/3667"> Evaluación de la contaminación por arsénico y metales pesados en el distrito minero Fresnillo (Zacatecas, México) </a><br>
                  Somohano Gambioa Ricardo Ernesto. 2013.  <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4164/MCA1SGR201301.pdf?sequence=1&isAllowed=y"> Evaluación de la fitotoxicidad en suelos contaminados por metales pesados en pasivos ambientales minero-metalúrgicos.</a> (Co-dirección).
                </p>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <p>
                  Leura Vicencio Adriana Karina. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4332"> Geoquímica ambiental del mercurio em pasivos ambientales minero metalúrgicos. </a> (Co-dirección).
                </p>
              </ol>
            </div>
          </div>
        </div>
        <!--<div class="accordion-item">
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
              <p>
                 Montes-Avila, I.; Espinosa-Serrano, E.; Castro-Larragoitia, J.; Lázaro, I., <b>Cardona, A.</b> (2019). Chemical mobility of inorganic elements in stream sediments of a semiarid zone impacted by ancient mine residues. Applied Geochemistry, 100, 8-21, ISSN: 0883-2927. <a target="_blank" href="https://doi.org/10.1016/j.apgeochem.2018.11.002">https://doi.org/10.1016/j.apgeochem.2018.11.002.</a><br><br>
                <b>Cardona, A.</b>, Gutierrez-Ojeda, C., Martínez-Morales, M., Ortiz-Flores, G., González-Hita. L. (2018). Hydrogeochemical characterization and evolution of a regional karst aquifer unit, Cuatrociénegas basin, Mexico., Environmental Earth Sciences, 77:785, <a target="_blank" href="https://doi.org/10.1007/s12665-018-7953-x">https://doi.org/10.1007/s12665-018-7953-x</a>, ISSN: 1866-6280 (Print) 1866-6299 (Online).<br><br>
                <b>Cardona, A.</b>, Banning, A., Carrillo-Rivera, J. J., Aguillón-Robles, A., Rüde, T. R., and Aceves-de-Alba, J. (2018). Natural controls validation for handling elevated fluoride concentrations in extraction activated Tóthian groundwater flow systems: San Luis Potosí, Mexico. Environmental Earth Sciences, 77:121, 1-13. ISSN: 1866-6280 (Print) 1866-6299 (Online). <a target="_blank" href="https://doi.org/10.1007/s12665-018-7273-1">https://doi.org/10.1007/s12665-018-7273-1</a>.<br><br>
                Krienen L., Heuser, M., Höbig, N., Mares, M. E., Rüde, T. R., <b>Cardona, A.</b> (2017). Hydrogeological and hydrochemical characterization of two karstic discharge areas in San Luis Potosí, Mexico. (2017). Environmental Earth Sciences 76:825. <a target="_blank" href="https://doi.org/10.1007/s12665-017-7166-8">https://doi.org/10.1007/s12665-017-7166-8</a>. ISSN: 1866-6280 (Print) 1866-6299 (Online).<br><br>
                Burillo, J. C., <b>Cardona, A.</b>, Castro, J., Montes, I. (2017). Caracterización y modelación hidrogeoquímica de lixiviados mineros de San Luis Potosí, S.L.P. México. 2017. Bol. Soc. Geol. Mex. Vol. 69 No. 3: 637‒654. ISSN 1405-3322. <a target="_blank" href="http://www.scopus.com/inward/record.url?eid=2-s2.0-85034584830&partnerID=MN8TOARS">http://www.scopus.com/inward/record.url?eid=2-s2.0-85034584830&partnerID=MN8TOARS</a>.<br><br>
                Navarro-Solis O., González-Trinidad, J., Júnez-Ferreira, H.E., Bautista-Capetillo, F., <b>Cardona, A.</b> (2017). Correlation of Arsenic and Fluoride in the groundwater for human consumption in a semiarid region of Mexico. Procedia Engineering 186: 333–340. Special Issue from XVIII International Conference on Water Distribution Systems, WDSA2016, and Edited by Juan Saldarriaga (doi: 10.1016/j.proeng.2017.03.259). ISSN: 1877-7058.<br><br>
                Navarro-Solis O., González-Trinidad, J., Júnez-Ferreira, H. E., <b>Cardona, A.</b>, Bautista-Capetillo, C. (2016). Integrative methodology for the identification of groundwater flow patterns: application in a semi-arid region of Mexico. Applied Ecology and Environmental Research 14 (4): 645-666. http://www.aloki.h, ISSN 1589 1623 (Print), ISSN 1785 0037 (Online), DOI: <a target="_blank" href="http://dx.doi.org/10.15666/aeer/1404_645666">http://dx.doi.org/10.15666/aeer/1404_645666</a>.<br><br>
                Júnez-Ferreira, H. E., Herrera-Zamarrón, G. S., González-Hita, L., <b>Cardona, A.</b>, Mora-Rodríguez, J. (2016). Optimal design of monitoring networks for multiple groundwater-quality parameters using a Kalman filter: Application to the Irapuato-Valle aquifer. Environmental Monitoring and Assessment, 188:39, <a target="_blank" href="https://link.springer.com/article/10.1007/s10661-015-5036-y">https://link.springer.com/article/10.1007/s10661-015-5036-y</a>. ISSN: 0167-6369 (Print) 1573-2959 (Online).<br><br>
              </p>
              <strong>Capítulos de libros</strong><br><br>
              <p>
                CONFLICTOS POR EL AGUA SUBTERRÁNEA. 2016. In: Álvaro López, López (ed.) Geografía de México. Una reflexión espacial contemporánea (Joel Carrillo Rivera, Liliana A. Peñuela Arévalo, Rafael Huizar Alvarez, <b>Antonio Cardona Benavides</b>, Marcos Adrián Ortega Guerrero, Josefina Vallejo Barba, Gonzalo Hatch Kuri), pp. 151-166. Sección Editorial del instituto de Geografía-UNAM. ISBN del Tomo I: 978-607-02-8277-5<br><br>
                CONTROL OF DETERIORATING WATER QUALITY IN EXTRACTED BOREHOLES BY FLOW SYSTEMS DEFINITION. 2016, In: N.J. Raju (ed.) Geoestatistical and Geospatial approaches for the characterization of natural resources in the environment (Joel Carrillo Rivera, <b>Antonio Cardona</b>), 327-332 pp. Springer International Publishing and Capital Publishing Company, DOI 10.1007/978-3-319-18663-4, ISBN 978-319-186662-7, ISBN 978-3-319-18663-4 (eBook).<br><br>
              </p>
              <strong>Publicaciones en extenso</strong><br><br>
              <p>
                Determination of arsenic in sediment samples from a well in the Comarca Lagunera, Mexico. Mejía-González M., González-Hita L., Briones R., Ojeda M.C., <b>Cardona A.</b>, Soto-Navarro P. 2018. Paper. Proceedings 6th International Symposium on Sediment Management, Revista Internacional de Contaminación Ambiental, ISSN: 0188-4999, Vol. 34, 129-133 p.<br><br>
                Spatial distribution of arsenic and lead in stream sediments in a micro-basin with ancient mining activities. Montes-Avila, I., <b>Cardona A.</b>, Lázaro-Baez I., Razo-Soto I., Hernández-Ruiz S. 2018. Paper. Proceedings 6th International Symposium on Sediment Management, Revista Internacional de Contaminación Ambiental, ISSN: 0188-4999, Vol. 34, 289-296 p.<br><br>
                Arsénico, fluoruro y uranio en el agua subterránea de San Luis Potosí. <b>Cardona Benavides A.</b>, Andre Banning, Thomas Ruede, Sócrates Alonso Torres, Cristian Abraham Rivera Armendariz, Guillermo Castro Larragoitia. Trabajo corto. Simposio de Geoingeniería Ambiental, Facultad de Ingeniería Civil, Universidad Autónoma de Nuevo León, Monterrey, N. L., abril 2018.<br><br>
                Evaluación de la contaminación por plaguicidas del agua subterránea en Yucatán, Mexico Alfonso Lorenzo-Flores, German Giacoman.Vallejos, Maria Del Carmen Ponce Caballero, <b>Antonio Cardona-Benavides</b>. Trabajo corto en Memorias del IX Simposio Universitario Iberoamericano sobre Medioambiente, SUIMA 2016, La Habana, Cuba, noviembre 2016.<br><br>
                Evaluación de la contaminación del agua subterránea por plaguicidas organofosforados, en una zona vulnerable de Yucatán, Mexico. Alfonso Lorenzo-Flores, German Giacoman.Vallejos, Maria Del Carmen Ponce Caballero, <b>Antonio Cardona-Benavides</b>. Trabajo corto en Memorias del XIII Congreso Latinoamericano de Hidrología, Mérida, Yucatán, agosto, 2016.<br><br>
                Afectaciones a la calidad del agua (superficial y subterránea) en un área con manifestaciones hidrotermales. Caso de estudio en México A. K. Martínez-Florentino, M. V. Esteller, G. P. Morales, J.L. Expósito & S. López, <b>Antonio Cardona</b>, Trabajo corto en Memorias del XIII Congreso Latinoamericano de Hidrología, Mérida, Yucatán, agosto, 2016.<br><br>
                Dynamics of the coastal karst aquifer in the northern Yucatan Peninsula. Lisa Heise, <b>Antonio Cardona</b>, Erik Salazar Perales, Eduardo H. Graniel Castro. Trabajo Corto en Memorias del 2º Congreso Interamericano de Cambio Climático. 14-16 marzo 2016.<br>
              </p>
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