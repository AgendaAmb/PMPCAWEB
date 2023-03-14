
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. HUMBERTO REYES HERNÁNDEZ</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/HumbertoReyesHernandez.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ciencias Sociales y Humanidades</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Av. Industrias #101-A Fracc. Talleres <br>
            C.P. 78399, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 832-1000 Ext. 9228<br>
            <a href="mailto:hreyes@uaslp.mx" style="color:rgb(0, 178, 227)">hreyes@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="https://sociales.uaslp.mx/Paginas/Investigacion/1484#gsc.tab=0">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Reyes_Hernandez_Humberto.pdf')}}"><i>Curriculum Vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/qiYAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="http://orcid.org/0000-0001-6232-1035"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=25522649800"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Diseño y Evaluación de Proyectos de Investigación</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Metodologías para la gestión ambiental</li>
                  <li>Desarrollo Sostenible</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Latofski Robles Mariam. 2012. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3656/MCA1LRM201201.pdf?sequence=3&isAllowed=y">Restoration priorities for the mexican islands.</a></li>
                  <li>Ríos Guayasamín Pedro Damián. 2012. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3641/MCA1RGP201201.pdf?sequence=3&isAllowed=y">Characterization of the global value chains of organic products in Rio de Janeiro, Brazil: case study in Cachoeiras de Macacú and Nova Friburgo.</a></li>
                  <li>Terán Valdez Andrea. 2013. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/3606">A biological corridor for the Sierra Madre Oriental (San Luis Potosi, Mexico): socio-economic viability for enhancing connectivity.</a></li>
                  <li>González González Adriana. 2013. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3864/MCA1GGA201301.pdf?sequence=3&isAllowed=y">Payments for environmental services in the Huasteca Potosina region, Mexico: forest cover impacts at regional level and socio-economic impacts at local level.</a></li>
                  <li>Oliveira De Souza Fernanda. 2014. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3831/MCA1OSF201401.pdf?sequence=3&isAllowed=y">A community-based approach for managing forest patches in the Atlantic forest of Brazil-a case study of the micro watershed Barracão Dos Mendes, Rio de Janeiro State.</a></li>
                  <li>Stöcker Nadine. 2016. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5737/MCA1SNA201601.pdf?sequence=1&isAllowed=y">Value chain analysis of Bolivian quinoa as an organic fair trade product.</a></li>
                  <li>Brauer Clemens Gerhard. 2017. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4523/MCA1BBCG201701.pdf?sequence=1&isAllowed=y">Participative development of a sustainable vanilla pod dryer for small scale vanilla producers in the Huasteca Potosina, Mexico.</a></li>
                  <li>Sobisch Marcella Ulrike. 2018. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4508/MCA1USM201801.pdf?sequence=1&amp;isAllowed=y">The potential of agroecology as a tool for resilience-based ecosystem stewardship. Assessment regarding the introduction of agroecological practices within the Maya biosphere reserve´s buffer zone (Petén, Guatemala).</a><br>
                  <li>Marcelli Sánchez Columba. 2019. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5732/MCA1MSC201901.pdf?sequence=1&isAllowed=y"> Connectivity for conservation: a systematic approach to link relevant areas for conservation with the biosphere reserve Sierra del Abra Tanchipa.</a></li>
                  <li>Recinos Brizuela Sonia Steffany. 2019. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5734/MCA1RBS201901.pdf?sequence=1&isAllowed=y">A coastal vulnerability index for sea turtle conservation management in Tortuguero National Park, Costa Rica.</a></li>
                  <li>Hincapie Agudelo Melisa. 2021. From the mountains to the coast: using bird data to enhance connectivity in the sugar cane landscape of Campos dos Goytacazes, Brazil</li>
                  <li>Calla Durandal Lucia. 2022. Historical trajectory of the Mangroves' loss in the Gulf of Guayaquil, Ecuador</li>
                  <li>Farías Garduño Osmar Alejandro. 2022. Adaptation of human communities to droughts: a systemic sustainability assessment in Rioverde, San Luis Potosi</li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Montoya Toledo José Nelson. 2009. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3634/MCA1MTJ200901.pdf?sequence=3&isAllowed=y">Diagnóstico participativo de los procesos de deforestación de dos comunidades de la Sierra Madre Oriental del estado de San Luis Potosí.</a></li>
                  <li>Sosa García Ana Olivia. 2012. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3550/MCA1SGA201201.pdf?sequence=3&isAllowed=y">Impacto ambiental generado por los bancos de material en la zona media y de la Huasteca del estado de San Luis Potosí.</a></li>
                  <li>Leija Loredo Edgar Gregorio. 2013. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3874/MCA1LLE201301.pdf?sequence=3&isAllowed=y">Cambios en la cubierta vegetal/uso del suelo y escenarios futuros en tres municipios de la región costera del estado de Oaxaca, México.</a></li>
                  <li>Calderillo Granados Karina Lizeth. 2014. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3840/MCA1CGK201401.pdf?sequence=3&isAllowed=y">Vulnerabilidad social y sequía en las regiones Media y Huasteca Potosina.</a></li>
                  <li>Trinidad García Karina Lizbeth. 2014. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3885/MCA1TGK201401.pdf?sequence=3&isAllowed=y">Caracterización agroecológica de la Vainilla (<em>Vanilla spp.</em>) en la Huasteca Potosina.</a>  (Co-dirección).</li>
                  <li>Orta Salazar Carolina. 2018. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4622/MCA1OSC201801.pdf?sequence=1&amp;isAllowed=y">Factibilidad de la implementación de la norma mexicana (NMX-AA-173-SCFI-2015) para el registro de proyectos forestales de carbono como instrumento de restauración forestal a largo plazo en la región prioritaria para la conservación Xilitla, San Luis Potosí.</a></li>
                  <li>Martínez Huerta Manuel Alfredo. 2019. Sitios prioritarios para la restauración ecológica en la Reserva de la Biosfera Sierra Abra Tanchipa, San Luis Potosí. (Co-dirección).</li>
                  <li>Corpus Saldaña Judith Elisa. 2022. Sitios con potencial para ser incorporados al esquema áreas destinadas voluntariamente a la conservación (ADVC) en el corredor ecológico de la Sierra Madre Oriental de San Luis Potosí.</li>
                  <li>Hernández Cano Dulce Olivia. 2022. Pobreza energética y sistemas de aprovisionamiento de energía en comunidades rurales de la zona Media de San Luis Potosí.</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Sahagún Sánchez Francisco Javier. 2012. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3671/DCA1DIN01201.pdf?sequence=1&isAllowed=y">Dinámica espacio-temporal de las transformaciones en la cobertura vegetal y el cambio de uso de suelo en la Sierra Madre Oriental de San Luis Potosí y sus efectos potenciales sobre la distribución de la avifauna.</a></li>
                  <li>Gil Antonio María de los Ángeles. 2015. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3974/DCA1DUG01501.pdf?sequence=1&isAllowed=y">Disponibilidad, uso y gestión del agua en comunidades rurales del Altiplano y Huasteca Potosina.</a></li>
                  <li>Bara Claudia Rosina. 2018. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4531/DCA1BCR201802.pdf?sequence=1&amp;isAllowed=y">Implicaciones y viabilidad de la certificación orgánica participativa como instrumento para promover la producción orgánica y los mercados locales en San Luis Potosí.</a> (Co-dirección).</li>
                  <li>Antoni Carolin Dorothee. 2017. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4525">Dynamics of livelihood and land use/cover change in a tropical social-ecological system in the Huasteca Potosina region.</a></li>
                  <li>Trinidad García Karina Lizbeth. 2020. Manejo y conservación de <em>Vanilla Planifolia</em> en sistemas agroforestales tradicionales de la Huasteca Potosina.</li>
                  <li>Rontard Benjamín Nicolás Franck. 2021. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7610/TesisD.PMPCA.2021.Progress.Rontard.pdf?sequence=1&isAllowed=y">Progress and limits of carbon market in Mexico: analysis of national emissions trading system</a></li>
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
              <strong>Artículos científicos</strong><br><br>
              <ul class="vineta">
                <li>González-Avilés, B. E., <b>Reyes-Hernández, H.</b>, Yáñez-Espinosa, L., Carranza-González, E., De-Nova-Vazquez, J. A. 2023. La flora melífera del paisaje aledaño a la Reserva de la Biósfera Sierra del Abra Tanchipa, San Luis Potosí, México. <i>Botanical Sciences</i> (aceptado).</li><br>
                <li>Alemán Contreras, U. A., <b>Reyes-Hernández, H.</b>, van´t Hooft, A., Santacruz de León, G. 2023. Dinámica espacio-temporal de los cambios en la cubierta vegetal y usos de suelo asociados al fracking en las cuencas de Burgos, México y Neuquina, Argentina. <i>Revista de Geografía Norte Grande</i> (aceptado).</li><br>
                <li>Yáñez-Espinosa, L., Flores, J., Fortanelli-Martínez, J., Quintero-Ruiz, J. R., de Nova-Vázquez, J. A, <b>Reyes-Hernández, H.</b> 2022. Leaf traits variation of <i>Myriocarpa longipes</i> and <i>Brosimum alicastrum</i> in relation to microclimatic gradient in tropical dolines of Mexico. <i>The Journal of the Torrey Botanical Society.</i> 149 (4): 262-272 <a href="https://doi.org/10.3159/TORREY-D-22-00011.1">https://doi.org/10.3159/TORREY-D-22-00011.1</a></li><br>
                <li><b>Reyes-Hernández, H.</b>, Silva-Flores M. A., Muñoz-Robles, C. A. Ortiz-Rodríguez, A. J. 2022. Strengthening environmental management and local planning in indigenous communities through hydrological connectivity analysis. Experiences from a tropical region of Mexico. <i>Human Ecology.</i> 50 (4): 617-632. <a href="https://doi.org/10.1007/s10745-022-00329-1">https://doi.org/10.1007/s10745-022-00329-1</a></li><br>
                <li>Rontard, B., <b>Reyes-Hernández, H.</b> 2022. Political construction of carbon pricing: Experience from the New Zealand emissions trading scheme. <i>Environmental Development</i>, 43:1-11. <a href="https://doi.org/10.1016/j.envdev.2022.100727">https://doi.org/10.1016/j.envdev.2022.100727</a><li><br>
                <li>Trinidad, G. K., <b>Reyes-Hernández, H.</b>, Fortanelli, M. J., Carranza, A. C., Galarza, R. E. 2021. Tipología de productores de vainilla (<i>Vanilla planifolia</i>) en sistemas agroforestales tradicionales de la Huasteca Potosina. <i>Espacialidades</i>, 11(1): 4-22. <a href="http://espacialidades.cua.uam.mx/vol/11/2021/01/vol11_num1.pdf">DOI:10.24275/uam/cua/dcsh/esp/2021v11n1/Trinidad</a></li><br>
                <li>Gutiérrez-Hernández, R., Sahagún-Sánchez, F. J., Delgado-Sánchez, P., Castillo-Lara, P., Fortanelli-Martínez, J., <b>Reyes-Hernández, H.</b>, De-Nova, J. A. 2021. Reevaluación de los bosques tropicales estacionalmente secos de la Reserva de la Biosfera Sierra del Abra Tanchipa y áreas con potencial para su conservación. <i>Botanical Sciences</i>, 99 (4):735-791. <a href="https://doi.org/10.17129/botsci.2771">https://doi.org/10.17129/botsci.2771</a></li><br>
                <li>Orta-Salazar, C., Aguirre-Salado, C. A., <b>Reyes-Hernández, H.</b>, Reyes-Agüero, J. A., Muñoz-Robles, C. A. 2021. Mapping potential areas for conservation under forest carbon credit eligibility in a natural protected area in northern Mexico. <i>Tropical conservation sciences</i>, 14:1-18. <a href="https://doi.org/10.1177/19400829211029448">https://doi.org/10.1177/19400829211029448</a></li><br>
                <li>Vaca-Pardo, L. N., <b>Reyes-Hernández, H.</b> 2021. Conocimiento tradicional y preservación de la agrodiversidad. Los casos de la Trinidad, en México y Kokonuco, en Colombia. <i>Tropical and subtropical agroecosystems</i>, 24 (2):1-14. <a href="http://dx.doi.org/10.56369/tsaes.3416">http://dx.doi.org/10.56369/tsaes.3416</a></li><br>
                <li>Carranza-Álvarez, C., Trinidad-García, K. L., <b>Reyes-Hernández, H.</b>, Castillo-Pérez, L. E., Fortanelli-Martínez, J. 2021. Efecto de extractos orgánicos naturales sobre la micropropagación in vitro de <i>Vanilla planifolia</i> Jacks. ex Andrews (Orchidaceae). <i>Biotecnia</i>, XXIII (1):5-12. <a href="https://doi.org/10.18633/biotecnia.v23i1.805">https://doi.org/10.18633/biotecnia.v23i1.805</a></li><br>
                <li>Sánchez-Hernández, D., Aguirre-Salado, C. A., Sánchez-Díaz, G., Aguirre-Salado, A. I., Soubervielle-Montalvo, C., Reyes-Cárdenas, O., <b>Reyes-Hernández, H.</b>, Santana-Juárez, M. V. 2021. Modelling spatial pattern of dengue in North Central Mexico using survey data and logistic regression. <i>International Journal of Environmental Health Research</i>, 31(7): 872-888. <a href="https://www.tandfonline.com/doi/full/10.1080/09603123.2019.1700938">doi.org/10.1080/09603123.2019.1700938</a></li><br>
                <li>Vázquez-Villa, B. M., <b>Reyes-Hernández, H.</b>, Leija-Loredo, E. G., Rivera-González, J. G., Morera-Beita, C. 2020. Environmental governance and conservation. Experiences in two natural protected areas of Mexico and Costa Rica. <i>Journal of Land Use Science</i>, 15(6): 707-720. <a href="https://doi.org/10.1080/1747423X.2020.1817167">https://doi.org/10.1080/1747423X.2020.1817167</a></li><br>
                <li><b>Reyes-Hernández, H.</b>, Galarza-Rincón, E., Muñoz-Robles, C. A., Duran-Fernández, A., Sahagún-Sánchez, F. J. 2020. Procesos de cambio en la cubierta vegetal de la Reserva Forestal Nacional Porción Boscosa del estado de San Luis Potosí. <i>Journal of Latin American Geography</i>, 19(4), 170-198. <a href="https://muse.jhu.edu/pub/15/article/772585">DOI: 10.1353/lag.2020.0084</a></li><br>
                <li>Leija, G., Valenzuela-Ceballos S., Valencia-Castro M., Jiménez-González G., Castañeda-Gaytán G., <b>Reyes-Hernández H.</b>, Mendoza, M. 2020. Análisis de cambio en la cobertura vegetal y uso del suelo en la región centro-norte de México. El caso de la cuenca baja del río Nazas. <i>ECOSISTEMAS</i>, 29 (1): 1826. <a href="https://doi.org/10.7818/ECOS.1826">https://doi.org/10.7818/ECOS.1826</a></li><br>
                <li>Rontard, B., <b>Reyes Hernández, H.</b>, Aguilar-Robledo, M. 2020. Pagos por captura de carbono en el mercado voluntario en México: diversidad y complejidad de su aplicación en Chiapas y Oaxaca. <i>Revista Sociedad y Ambiente</i>, 22, 212-236. <a href="https://doi.org/10.31840/sya.vi22.2106">https://doi.org/10.31840/sya.vi22.2106</a></li><br>
                <li>Gaytán Jiménez, E., García-Vargas, G., Gaytán-Hernández, D., Rosales-González, M., <b>Reyes-Hernández, H.</b>, Sánchez Armáss Capello, O., Calderón Hernández, J. 2019. Sintomatología depresiva, estrés y funcionamiento familiar en madres adultas del norte de México. <i>Acta Universitaria</i>, 29, e2363. <a href="https://doi.org/10.15174/au.2019.2063">https://doi.org/10.15174/au.2019.2063</a></li><br>
                <li>Trinidad Garcia, K. L., <b>Reyes-Hernández, H</b>. Martínez Salazar, R. I., Galarza Rincón, E.  2019. Distribución de <i>Vanilla planifolia</i> Jacks. ex Andrews. y acciones para su conservación en la Huasteca Potosina. <i>Revista Mexicana de Ciencias Forestales</i>, 10 (55). <a href="https://doi.org/10.29298/rmcf.v10i55.595">https://doi.org/10.29298/rmcf.v10i55.595</a></li><br>
                <li>Quintero-Ruiz, J., Yáñez-Espinosa, L., Flores, J., Fortanelli, J., De Nova, A., <b>Reyes-Hernández H.</b>, Roda-Ortiz, J.P. 2019. Analysis of the soil and microclimate relationship in two dolines of Carso Huasteco, Mexico. <i>Journal of Natural Resources and Development</i>, 9:25-33. <a href="https://doi.org/10.5027/jnrd.v9i0.03">https://doi.org/10.5027/jnrd.v9i0.03</a></li><br>
                <li>Barbosa Briones, E., Muñoz-Robles, C.A., Cardona-Benavides, A., <b>Reyes-Hernández, H.</b> 2019.  Eco-hydrological function of vegetation patches in semi-arid shrublands of central Mexico. <i>Journal of Arid Environments,</i> 168: 36-45. <a href="https://doi.org/10.1016/j.jaridenv.2019.05.005">https://doi.org/10.1016/j.jaridenv.2019.05.005</a></li><br>
                <li>Acosta Torres, L.E., <b>Reyes Hernández, H.</b>, Muñoz Robles, C. A, Leija Loredo E. G. 2019. Distribución y conservación de <em>Quercus oleoides</em>  Schltdl. & Cham. en la Reserva de la Biosfera Sierra del Abra Tanchipa. <i>Revista Mexicana de Ciencias Forestales</i> 10(52). <a href="https://doi.org/https://doi.org/10.29298/rmcf.v10i52.453">https://doi.org/https://doi.org/10.29298/rmcf.v10i52.453</a> </li><br>
                <li>Antoni, C., Huber-Sannwald, E., <b>Reyes-Hernández, H.</b>, van´t Hooft, A., Schoon M. 2019. Socio-ecological dynamics of a tropical agricultural region: historical analysis of system change and opportunities. <i>Land Use Policy</i>, 81: 346-359. <a href="https://doi.org/10.1016/j.landusepol.2018.10.028">https://doi.org/10.1016/j.landusepol.2018.10.028</a></li><br>
                <li>Errejón Gómez, J.C., Vila Subirós, J., Flores Flores, J.L., <b>Reyes Hernández, H.</b> Muñoz Robles, C.A. 2018. Conectividad de los ecosistemas entre las reservas de la biosfera “El Cielo” y “Sierra del Abra Tanchipa” en México. <i>Investigaciones Geográficas</i>, 70: 181-196. <a href="https://doi.org/10.14198/INGEO2018.70.09">https://doi.org/10.14198/INGEO2018.70.09</a></li><br>
                <li>Alva-Álvarez, G.I., <b>Reyes-Hernández, H.</b>, Palacio-Aponte, A.G., Núñez-López, D., Muñoz-Robles, C.A. 2018. Cambios en el paisaje ocasionados por incendios forestales en la región de Madera, Chihuahua. <i>Madera y Bosques</i>, 24 (3):e2431697. <a href="http: 10.21829/myb.2018.2431697">http: 10.21829/myb.2018.2431697</a> </li><br>
                <li><b>Reyes-Hernández, H.</b>, Trinidad-García, K.L., Herrera-Cabrera, B.E. 2018. Caracterización del ambiente de los vainillales y área potencial para su cultivo en la Huasteca Potosina. <i>Biotecnia</i>, XX (3):49-57. <a href="http://dx.doi.org/10.18633/biotecnia.v20i3.714">http://dx.doi.org/10.18633/biotecnia.v20i3.714</a></li><br>
                <li>Sahagún-Sánchez, F.J., <b>Reyes-Hernández, H.</b> 2018. Procesos de cambio en el uso del suelo en las áreas naturales protegidas en la Región Central de la Sierra Madre Oriental. <i>CienciaUAT</i>, 12(2):6-21. <a href="https://doi.org/10.29059/cienciauat.v12i2.831">https://doi.org/10.29059/cienciauat.v12i2.831</a></li><br>
                <li>Flores Aguilar, A., Aguilar-Robledo, M., <b>Reyes-Hernández, H.</b>, Guzmán-Chávez, M. 2018. Gobernanza ambiental y pago por servicios ambientales en América Latina. <i>Revista Sociedad y Ambiente</i>, 6 (16):7-31. <a href="https://doi.org/10.31840/sya.v0i16.1811">https://doi.org/10.31840/sya.v0i16.1811</a></li><br>
              </ul><br>
              <strong>Libros</strong><br><br>
              <ul class="vineta">
                <li><b>Humberto Reyes Hernández</b>, Juan Antonio Reyes Agüero, Alejandro Durán Fernández. 2021. <i>Desafíos para la conservación de los ecosistemas y su biodiversidad en la Reserva de la Biosfera Sierra del Abra Tanchipa</i>. UASLP. San Luis Potosí, SLP. 249 p. ISBN: 978 607 535 254-1.</li><br>
                <li>Miguel Aguilar Robledo, <b>Humberto Reyes Hernández</b>. 2021. Interacciones. Geografía. <i>Libro de secundaria, primer grado</i>. Pearson Educación. México, DF., 248 p. ISBN: 978-607-32-5556-1.</li><br>
                <li><b>Humberto Reyes Hernández</b>, Alejandro Duran Fernández, Francisco Javier Sahagun Sanchez. 2019. <i>Biodiversidad y conservación de ecosistemas de la Región Prioritaria para la Conservación Xilitla</i>. UASLP-UAG-CONANP-RBSAT-FMCN. Guadalajara, Jal. 162 p. ISBN: 978 607 535 102-5.</li><br>
                <li>Miguel Aguilar Robledo, <b>Humberto Reyes Hernández</b>, Oscar Reyes Pérez. 2019. <i>La Historia Ambiental en México. Estudios de caso</i>. UASLP. San Luis Potosí, SLP. 125 p. ISBN: 978 607 535 103-2.</li><br>
                <li><b>Humberto Reyes Hernández</b>, José Arturo de Nova Vázquez, Alejandro Durán Fernández. 2018. <i>Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y acciones para su conservación</i>. UASLP-CONANP-RBSAT-FMCN-UAT. San Luis Potosí, SLP. 188 p. ISBN: 978 607 535 054-7.
              </ul><br>
              <strong>Capítulos en libros</strong><br><br>
              <ul class="vineta">
                <li>Benjamin Rontard y <b>Humberto Reyes Hernández</b>. 2022. Emission Trading System and forest: learning from the experience of New Zealand. En: S. Lucatello (Ed). <i>Towards an emissions trading system in Mexico: rationale, design and connections with the global climate agenda</i>. Springer Climate, Switzerland, pp. 169-189. ISBN: 978-3-030-82758-8. <a href="https://doi.org/10.1007/978-3-030-82759-5_9">https://doi.org/10.1007/978-3-030-82759-5_9</a></li><br>
                <li>Vianney Rivera Muñiz, José Romeo Tinajero, Juan Rogelio Aguirre Rivera y <b>Humberto Reyes Hernández</b>. 2021. Avances en el conocimiento sobre las aves. En Humberto Reyes Hernández, Juan Antonio Reyes Agüero, Alejandro Durán Fernández (Eds). <i>Desafíos para la conservación de los ecosistemas y su biodiversidad en la Reserva de la Biosfera Sierra del Abra Tanchipa</i>. UASLP. San Luis Potosí, SLP. pp. 49-80. ISBN: 978 607 535 254-1.</li><br>
                <li><b>Humberto Reyes Hernández</b>, Judith E. Corpus Saldaña, Alejandro Durán Fernández 2021. Evaluación del cumplimiento del programa de manejo de la Reserva. En Humberto Reyes Hernández, Juan Antonio Reyes Agüero, Alejandro Durán Fernández (Ed.). <i>Desafíos para la conservación de los ecosistemas y su biodiversidad en la Reserva de la Biosfera Sierra del Abra Tanchipa</i>. UASLP. San Luis Potosí, SLP. pp. 187-204. ISBN: 978 607 535 254-1.</li><br>
                <li>Alma R. Bojórquez Vargas, Romano G. Segrado Pavón y <b>Humberto Reyes Hernández</b>. 2021. Planeación rural participativa y desarrollo turístico. El caso del ejido los Sabinos Dos en la Huasteca Potosina. En: López Moreno, I.  (Coord.). <i>Políticas públicas y gestión social del campo en México</i>. AMER, México. pp. 187-206. ISBN: 978-607-9293-43-7.</li><br>
                <li><b>Humberto Reyes Hernández</b>. 2019. Dinámica espacio temporal de la cubierta forestal. En: Humberto Reyes Hernández, Alejandro Duran Fernández, Francisco Javier Sahagún Sánchez (Coord.). <i>Biodiversidad y conservación de ecosistemas de la Región Prioritaria para la Conservación Xilitla</i>. UASLP-UAG-CONANP-RBSAT-FMCN. Guadalajara, Jal. pp. 32-45. ISBN: 978 607 535 102-5.</li><br>
                <li>Dioselina E. Torres García, <b>Humberto Reyes Hernández</b>, Carlos A. Muñoz Robles y Erika Galarza Rincón. 2019. Caracterización físico-geográfica del bosque húmedo de montaña. En: Humberto Reyes Hernández, Alejandro Duran Fernández, Francisco Javier Sahagún Sánchez (Coord.). <i>Biodiversidad y conservación de ecosistemas de la Región Prioritaria para la Conservación Xilitla</i>. UASLP-UAG-CONANP-RBSAT-FMCN. Guadalajara, Jal. pp. 46-59. ISBN: 978 607 535 102-5.</li><br>
                <li>Carolina Orta Salazar, <b>Humberto Reyes Hernández</b>, Juan Antonio Reyes Agüero, Carlos Arturo Aguirre Salado. 2019. Retos en la implementación de la Norma Mexicana de Carbono, en el ejido Ollita del Pino. 2019. En: Humberto Reyes Hernández, Alejandro Duran Fernández, Francisco Javier Sahagún Sánchez (Coords). <i>Biodiversidad y conservación de ecosistemas de la Región Prioritaria para la Conservación Xilitla</i>. UASLP-UAG-CONANP-RBSAT-FMCN. Guadalajara, Jal. pp. 144-157. ISBN: 978 607 535 102-5.</li><br>
                <li>Rangel Rivera Coral, <b>Humberto Reyes Hernández</b>, Guillermo Martínez de la Vega, Miguel Aguilar Robledo. 2019. Unidades de manejo para la conservación de la vida silvestre (UMA). En: <i>La biodiversidad en San Luis Potosí: estudio de estado</i>. CONABIO, México. pp. 355-361. ISBN: 978 607 857 031-7.</li><br>
                <li><b>Humberto Reyes Hernández</b>. 2019. Deforestación y fragmentación de los bosques y selvas. En: <i>La biodiversidad en San Luis Potosí: estudio de estado</i>. CONABIO, México. pp. 139-144. ISBN: 978 607 857 031-7.</li><br>
                <li>Hugo Ferney Leonel, Miguel Aguilar Robledo, <b>Humberto Reyes Hernández</b>, Pedro Medellín Milán. 2019. Reconstrucción histórica de los cambios ambientales en la cuenca del Río Valles, México. En: Miguel Aguilar Robledo, Humberto Reyes Hernández, Oscar Reyes Pérez. <i>La Historia Ambiental en México. Estudios de caso</i>. UASLP. San Luis Potosí, SLP. pp. 83-95. ISBN 978 607 535 077-3.</li><br>
                <li><b>Humberto Reyes</b>, Erika Galarza, Blanca M. Vázquez. 2018. Dinámica de los cambios en la cubierta vegetal y usos de la tierra 1996-2016. En: Humberto Reyes Hernández. José Arturo de Nova Vázquez, Alejandro Durán Fernández (Coords.). <i>Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y acciones para su conservación</i>. UASLP-CONANP-RBSAT-FMCN-UAT. San Luis Potosí, SLP. pp. 111-130. ISBN 978 607 535 054-7.</li><br>
                <li>Blanca M. Vazquez, <b>Humberto Reyes</b>, Miguel Aguilar, José G. Rivera. 2018. Participación local y reconocimiento territorial. En: Humberto Reyes Hernández. José Arturo de Nova Vázquez, Alejandro Durán Fernandez (Coords.). <i>Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y acciones para su conservación</i>. UASLP-CONANP-RBSAT-FMCN-UAT. San Luis Potosí, SLP. pp. 131-146. ISBN 978-607-535-054-7.</li>
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
            <div class="accordion-body">
              <ul class="vineta">
                <li>Adaptación al cambio climático en comunidades rurales: Una aproximación desde la gobernanza ambiental. Financiado CONACYT, Ciencia de Frontera (FOP16-2021-01-320575), vigencia 2022-2023.
                </li><br>
                <li>Caracterización y priorización de sitios para la restauración de suelos basada en Sistemas de Información Geográfica en la Reserva de la Biosfera Sierra del Abra Tanchipa. Financiado por el Fondo de Apoyo a la Investigación UASLP (C19-FAI-05-77.77), vigencia 2019-2020.</li><br>
                <li>Cambios en la cubierta vegetal y usos de la tierra en la Región Prioritaria para la Conservación Xilitla. Financiado por el Fondo de Apoyo a la Investigación UASLP (C17-FAI-06-46.46), vigencia 2017-2018.</li><br>
                <li>Caracterización de los encinares tropicales (Quercus oleoides) en la Reserva de la Biosfera Sierra del Abra Tanchipa y su área de influencia. CONANP/PROCODES/3698/2017. Financiado por CONANP, vigencia 2017.</li><br>
                <li>Fortalecimiento de las acciones de restauración del bosque de niebla en la RPC Xilitla. PROCER/CCER/DRNEySMO/XILITLA/12/2016. Financiado por CONANP, vigencia 2016.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>    <br><br><br>
    </div>
    </div>
</div>

@endsection