
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
            Teléfono: +52 (444) 832-1000 Ext. 9234 y 9235<br>
            hreyes@uaslp.mx <br>
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
                <li>Rontard, B., <b>Reyes Hernández, H.</b>, Aguilar-Robledo, M. 2020. Pagos por captura de carbono en el mercado voluntario en México: diversidad y complejidad de su aplicación en Chiapas y Oaxaca. Revista Sociedad y Ambiente(aceptado)</li><br>
                <li>Daniel Sanchez-Hernández, Carlos Arturo Aguirre-Salado, Guillermo Sanchez-Díaz, Alejandro Iván Aguirre-Salado, Carlos Soubervielle-Montalvo, Oscar Reyes-Cárdenas, <b>Humberto Reyes-Hernández</b> & Marcela Virginia Santana-Juárez. 2019. Mod-eling spatial pattern of dengue in North Central Mexico using survey data and logistic regression. International Journal of Environmental Health Research <a href="https://doi.org/10.1080/09603123.2019.1700938">https://doi.org/10.1080/09603123.2019.1700938</a></li><br>
                <li>Gaytán Jiménez, E., Rosales González, M., <b>Reyes Hernández, H.</b>, Díaz-Barriga Martínez, F., Calderón Hernández, J. 2019. Prevalencia de depresión y factores de riesgo en mujeres del norte de México. Un estudio piloto. Acta Universitaria, Multidisciplinary Science Journal </li><br>
                <li>Barbosa Briones, E., Muñoz-Robles, C.A., Cardona-Benavides, A., <b>Reyes-Hernández, H.</b> 2019.  Eco-hydrological function of vegetation patches in semi-arid shrublands of central Mexico. Journal of Arid Environments </li><br>
                <li>Acosta Torres, L.E., <b>Reyes Hernández, H.</b>, Muñoz Robles, C. A, Leija Loredo E. G. 2019. Distribución y conservación de <em>Quercus oleoides</em>  Schltdl. & Cham. en la Reserva de la Biosfera Sierra del Abra Tanchipa. Revista Mexicana de Ciencias Forestales 10(52). <a href="https://doi.org/https://doi.org/10.29298/rmcf.v10i52.453">https://doi.org/https://doi.org/10.29298/rmcf.v10i52.453</a> </li><br>
                <li>Antoni, C., Huber-Sannwald, E., <b>Reyes-Hernández, H.</b>, Van´t Hooft, A., Schoon M. 2019. Socio-ecological dynamics of a tropical agricultural region: historical analysis of system change and opportunities. Land Use Policy, 81: 346-359. <a href="https://doi.org/10.1016/j.landusepol.2018.10.028">https://doi.org/10.1016/j.landusepol.2018.10.028</a></li><br>
                <li>Errejón Gómez, J.C., Vila Subirós, J., Flores Flores, J.L., <b>Reyes Hernández, H.</b> Muñoz Robles, C.A. 2018. Conectividad de los ecosistemas entre las reservas de la biosfera “El Cielo” y “Sierra del Abra Tanchipa” en México. Investigaciones Geográficas, 70: 181-196. <a href="https://doi.org/10.14198/INGEO2018.70.09">https://doi.org/10.14198/INGEO2018.70.09</a></li><br>
                <li>Alva-Álvarez, G.I., <b>Reyes-Hernández, H.</b>, Palacio-Aponte, A.G., Núñez-López, D., Muñoz-Robles, C.A. 2018. Cambios en el paisaje ocasionados por incendios forestales en la región de Madera, Chihuahua. Madera y Bosques, 24 (3):e2431697. <a href="http: 10.21829/myb.2018.2431697">http: 10.21829/myb.2018.2431697</a> </li><br>
                <li><b>Reyes-Hernández, H.</b>, Trinidad-García, K.L., Herrera-Cabrera, B.E. 2018. Caracterización del ambiente de los vainillales y área potencial para su cultivo en la Huasteca Potosina. Biotecnia, XX (3):49-57. <a href="http://dx.doi.org/10.18633/biotecnia.v20i3.714">http://dx.doi.org/10.18633/biotecnia.v20i3.714</a></li><br>
                <li>Sahagún-Sánchez, F.J., <b>Reyes-Hernández, H.</b> 2018. Procesos de cambio en el uso del suelo en las áreas naturales protegidas en la Región Central de la Sierra Madre Oriental. CienciaUAT, 12(2):6-21. <a href="https://doi.org/10.29059/cienciauat.v12i2.831">https://doi.org/10.29059/cienciauat.v12i2.831</a></li><br>
                <li>Flores Aguilar, A., Aguilar-Robledo, M., <b>Reyes-Hernández, H.</b>, Guzmán-Chávez, M. 2018. Gobernanza ambiental y pago por servicios ambientales en América Latina. Revista Sociedad y Ambiente, 6 (16):7-31. <a href="https://doi.org/10.31840/sya.v0i16.1811">https://doi.org/10.31840/sya.v0i16.1811</a></li><br>
                <li>Castro-Navarro, J., Sahagún-Sánchez, J., <b>Reyes-Hernández, H.</b> 2017. Dinámica de fragmentación en la Sierra Madre Oriental y su impacto sobre la distribución de la avifauna.  Madera y Bosques, 23 (2):99-117. <a href="doi:10.21829/myb.2017.2321429">doi:10.21829/myb.2017.2321429</a></li><br>
                <li>Bara, C., Jarquin, R., <b>Reyes, H.</b>, Fortanelli, J. 2017. Adaptation of a participatory organic certification system to the organic products law in six local markets in Mexico. Agroecology and Sustainable Food Systems, 42 (1):48-76. <a href="http://dx.doi.org/10.1080/21683565.2017.1359736">http://dx.doi.org/10.1080/21683565.2017.1359736</a></li><br>
                <li>Antoni, C., Huber-Sannwald, E., <b>Reyes-Hernández, H.</b>, Van´t Hooft, A. 2017. Condition, tendency, and dynamic interaction in a resilience context of a socio ecological system. Journal of Natural Resources and Development, 7:12-21. <a href="http://jnrd.info/2017/06/10-5027jnrd-v7i0-02/">http://jnrd.info/2017/06/10-5027jnrd-v7i0-02/</a></li><br>
                <li>Errejón Gómez, J.C., Flores Flores, J.L., Muñoz Robles, C.A., <b>Reyes Hernández, H.</b>. 2017. De lo internacional a lo local, las políticas forestales en el estado de San Luis Potosí en el porfiriato (1876-1911). Región y Sociedad, 69:220-248. <a href="http://www.redalyc.org/pdf/102/10250503008.pdf">http://www.redalyc.org/pdf/102/10250503008.pdf</a></li><br>
                <li>Aguirre-Salado, C., Miranda-Aragón, L., Pompa-García, M., <b>Reyes-Hernández, H.</b>, Soubervielle-Montalvo, C., Flores-Cano, J., Méndez-Cortés, H. 2017. Improving Identification of Areas for Ecological Restoration for Conservation by Integrating USLE and MCDA in a GIS-Environment: A Pilot Study in a Priority Region Northern Mexico. ISPRS International Journal of Geo-Information, 6 (9):1-17. <a href="http://www.mdpi.com/2220-9964/6/9/262">http://www.mdpi.com/2220-9964/6/9/262</a></li><br>
                <li>Herrera-Cabrera, B.E., A. Delgado-Alvarado, V.M. Salazar-Rojas, M.L.C. Arévalo-Galarza, M.L., Luna-Guevara, E. Sandoval-Zapotitla, A.I. Barrera-Rodríguez, F. Castillo-González, M. Livera-Muñoz, J.E. Campos-Contreras, <b>H. Reyes-Hernández</b>, L.G. Iglesias-Andreu, A. Espejel-García, M.C. González-Chávez, R. Carrillo González, G. Dávila-Ortiz, J. Hernández-Hernández, M. Díaz-Bautista, M. Hernández-Apolinar, J.G. García-Franco. 2016. Macroproyecto vainilla (<em>Vanilla planifolia</em> Jacks. exAndrews) Investigación interdisciplinaria, interinstitucional vinculada a demandas. Agroproductivdad, 9 (9):3-5. <a href="http://www.colpos.mx/wb/index.php/agroproductividad/agroproductividad-2016#.WPZVhvnhCUk">http://www.colpos.mx/wb/index.php/agroproductividad/agroproductividad-2016#.WPZVhvnhCUk</a></li><br>
                <li><b>Reyes-Hernández, H.</b>, Trinidad-García, K.L., Herrera-Cabrera, B.E. 2016. Sistemas de producción de <em>Vanilla planifolia</em> Jacks. exAndrews y conservación de variantes silvestres en la Huasteca Potosina. Agroproductividad, 9 (9):13-15. <a href="http://www.colpos.mx/wb/index.php/agroproductividad/agroproductividad-2016#.WPZVhvnhCUk">http://www.colpos.mx/wb/index.php/agroproductividad/agroproductividad-2016#.WPZVhvnhCUk</a></li><br>
                <li>Leija-Loredo, G., <b>Reyes-Hernández, H.</b>, Reyes-Pérez, O., Flores-Flores, J.L., Sahagún-Sánchez, F.J. 2016. Cambios en la cubierta vegetal, usos de la tierra y escenarios futuros en la región costera del estado de Oaxaca, México. Madera y Bosques, 22 (1):125-140. <a href="http://myb.ojs.inecol.mx/index.php/myb/article/view/481/656">http://myb.ojs.inecol.mx/index.php/myb/article/view/481/656</a></li><br>
                <li>Rios Guayasamín, P., Guimaraes Peixioto, R., Torrico Albino, J.C., <b>Reyes Hernández, H.</b> 2016. Value chains for organic products in neighboring municipalities of Rio de Janeiro, Brazil. Agroecology and sustainable food systems, 41 (4):103-122. <a href="http://dx.doi.org/10.1080/21683565.2015.1137531">http://dx.doi.org/10.1080/21683565.2015.1137531</a></li><br>
                <li>Negrete Sánchez L.O., Aguirre Rivera, J.R., Pinos Rodríguez, J.M., <b>Reyes Hernández, H.</b> 2016. Beneficio de la parcelación de los agostaderos comunales del ejido El Castañón, municipio Catorce, San Luis Potosí: 1993-2013. Agrociencia, 50:511-532. <a href="http://www.colpos.mx/agrocien/Bimestral/2016/may-jun/art-11.pdf">http://www.colpos.mx/agrocien/Bimestral/2016/may-jun/art-11.pdf</a></li><br>
                <li>Gil-Antonio, A. y <b>H. Reyes-Hernández.</b> 2015. Gestión integral del agua desde un enfoque social, hacia una economía ecológica. NÓESIS, 24 (47):160-174. <a href="http://www.redalyc.org/pdf/859/85932588008.pdf">http://www.redalyc.org/pdf/859/85932588008.pdf</a></li><br>
                <li>Gaytán Jiménez, E., Rosales González, M., <b>Reyes Hernández, H.</b>, Díaz-Barriga Martínez, F., Calderón Hernández, J. 2015. Prevalencia de dificultades emocionales, conductuales y cognitivas en niños de escenarios urbanos con diferentes grados de marginación. Revista de Psicología y Ciencias del Comportamiento, 6 (1):57-74. <a href="http://www.revistapcc.uat.edu.mx/index.php/RPC/article/view/110">http://www.revistapcc.uat.edu.mx/index.php/RPC/article/view/110</a></li><br>
                <li><b>Humberto Reyes</b>, Blanca Vazquez, Carmen Jasso, Miguel Aguilar. 2014.  Tree species composition in tropical forest remnants of highly deforested regions. The case of the Huasteca Potosina region, México. Natural Resources, 5:1020-1030. <a href="http://dx.doi.org/10.4236/nr.2014.516086">http://dx.doi.org/10.4236/nr.2014.516086</a></li><br>
                <li>Gil-Antonio, M.A., <b>H. Reyes-Hernández</b>, L.E. Márquez Míreles, A. Cardona Benavides. 2014. Disponibilidad y uso eficiente del agua en zonas rurales. Investigación y Ciencia, 63:67-73. <a href="http://www.uaa.mx/investigacion/revista/">http://www.uaa.mx/investigacion/revista/</a></li><br>
                <li>Larraga Lara, R., Aguilar Robledo, M., <b>Reyes Hernández, H.</b>, Fortanelli Martínez, J. 2014. La sostenibilidad de la vivienda tradicional: una revisión del estado de la cuestión. Revista de Arquitectura, 16:126-133. <a href="http://dx.doi.org/10.41718/RevArq.2014.16.1.10ISSN:1657-0308Arquitectura">http://dx.doi.org/10.41718/RevArq.2014.16.1.10ISSN:1657-0308Arquitectura</a></li><br>
                <li>Latofski-Robles, M., A. Aguirre-Muñoz, F. Méndez-Sánchez, <b>H. Reyes-Hernández</b>, S. Schlüter. 2014. Prioritizing restoration actions for the islands of Mexico. Monographs of the Western North American Naturalist, 7:435-441. <a href="http://scholarsarchive.byu.edu/mwnan/vol7/iss1/29">http://scholarsarchive.byu.edu/mwnan/vol7/iss1/29</a></li><br>
                <li><b>Humberto Reyes</b>, Nelson Montoya, Javier Fortanelli, Miguel Aguilar-Robledo, José García. 2013. Metodologías participativas aplicadas al análisis de la deforestación del bosque de niebla en San Luis Potosí, México. Bios et forets des tropiques, 318 (4):27-39. <a href="http://bft.revuesonline.com/article.jsp?articleId=19282">http://bft.revuesonline.com/article.jsp?articleId=19282</a></li><br>
                <li>Sahagún Sánchez, F.J., Castro Navarro J., <b>Reyes Hernández H.</b> 2013. Distribución geográfica de la avifauna en la Sierra Madre Oriental, México: un análisis regional de su estado de conservación. International Journal of Tropical Biology, 61 (2):897-925. <a href="http://dx.doi.org/10.15517/rbt.v61i2.11233">http://dx.doi.org/10.15517/rbt.v61i2.11233</a></li><br>
                <li>Pinos-Rodríguez, J.M., J.C. García-López, J.R. Aguirre-Rivera, <b>H. Reyes-Hernández.</b> 2013. Participatory cartography in a traditional goat production system of a smallholder community in northern México. Tropical and subtropical Agroecosystems, 16:215-222. <a href="http://www.redalyc.org/pdf/939/93928324002.pdf">http://www.redalyc.org/pdf/939/93928324002.pdf</a></li><br>
                <li>José G. Rivera, Valente Vázquez, <b>Humberto Reyes</b>, Oscar Reyes, Nicolas Caretta. 2012. Potencialidades y desafíos del turismo y ecoturismo en el estado de San Luis Potosí: expectativas para alcanzar el desarrollo regional. PASOS. Revista de Turismo y Patrimonio Cultural, 10 (3):289-301. <a href="http://www.redalyc.org/pdf/881/88123060006.pdf">http://www.redalyc.org/pdf/881/88123060006.pdf</a></li><br>
                <li>Oscar Reyes, Valente Vázquez, <b>Humberto Reyes</b>, Nicolás Caretta, José G. Rivera. 2012. Potencial turístico de la región Huasteca Potosina del estado de San Luis Potosí, México. Revista Economía, Sociedad y Territorio, XII (38):249-275.  <a href="http://www.redalyc.org/pdf/111/11122403009.pdf">http://www.redalyc.org/pdf/111/11122403009.pdf</a></li><br>
                <li>Leija-Loredo, G., <b>H. Reyes-Hernández</b>, J. Fortanelli-Martínez, G. Palacio-Aponte. 2011. Situación actual del bosque de niebla en el estado de San Luis Potosí, México. Investigación y Ciencia, 53:3-11. <a href="http://www.redalyc.org/pdf/674/67421408001.pdf">http://www.redalyc.org/pdf/674/67421408001.pdf</a></li><br>
                <li>Delgado-Carranza, C., Bautista, F., Orellana-Lanza, R. <b>Reyes-Hernández, H.</b> 2011. Classification and agroclimatic zoning using the relationship between precipitation and evapotranspiration in the estate of Yucatán, Mexico. Investigaciones Geográficas, 75:51-60.  <a href="http://scielo.unam.mx/pdf/igeo/n75/n75a5.pdf">http://scielo.unam.mx/pdf/igeo/n75/n75a5.pdf</a></li><br>
                <li>Patricia Solis, Fabian Araya, <b>Humberto Reyes</b>, May Yuan. 2011. Climate change and Hazards in the America. International Interdisciplinary Research, Directions and Opportunities. Association of American Geographers. ISBN:0615408338</li><br>
                <li>Garrett Broad, Donovan Campbell, Tim Frazier, Peter Howe, Felipe Murtinho, <b>Humberto Reyes Hernandez.</b> 2010. Visualization of Slow-Developing Hazards: Influencing Perceptions and Behaviors to Facilitate Adaptation Planning. Climate change and Hazards in the Americas. Association of American Geographers, Washington D.C. <a href="http://www.aag.org/galleries/project-programs-files/Visualization_of_SlowDeveloping_Hazards.pdf">http://www.aag.org/galleries/project-programs-files/Visualization_of_SlowDeveloping_Hazards.pdf</a></li><br>
                <li>Sahagún S.F.J., <b>Reyes H.</b>, Flores, J.L., Chapa, L. 2011. Modelización de escenarios de cambio potencial en la vegetación y uso del suelo en la Sierra Madre Oriental de San Luis Potosí, México. Journal of Latin American Geography, 10 (2):65-85. <a href="http://dx.doi:10.1353lag/2011.0029">http://dx.doi:10.1353lag/2011.0029</a></li><br>
                <li>Ferney-Leonel, H., M. Aguilar-Robledo, <b>H. Reyes-Hernández.</b> 2010. Factores sociodemográficos y niveles de participación en la gestión de la cuenca hidrográfica del Río Valles, oriente de México. Revista Prospectiva, 15:263-293. <a href="http://revistaprospectiva.univalle.edu.co/index.php/prospectiva/article/view/367">http://revistaprospectiva.univalle.edu.co/index.php/prospectiva/article/view/367</a></li><br>
                <li>Vázquez, V., O. Reyes, J. G. Rivera, M. Nicolás, <b>H. Reyes.</b> 2010. Evaluación de los atractivos naturales para el desarrollo del ecoturismo en la región Huasteca de San Luis Potosí, México. Cuadernos de Turismo, 25:229-245. <a href="http://www.redalyc.org/pdf/398/39813352011.pdf">http://www.redalyc.org/pdf/398/39813352011.pdf</a></li><br>
                <li><b>Reyes, H.</b>, M. Aguilar, J.R. Aguirre, J. Fortanelli. 2008. Spatial configuration of land-use/land-cover in the Pujal-Coy project area, Huasteca potosina region, Mexico. AMBIO, 37 (5):381-389. <a href="http://dx.doi.org/10.1579/07-A-294.1">http://dx.doi.org/10.1579/07-A-294.1</a></li><br>
                <li><b>Reyes, H.</b>, M. Aguilar-Robledo, J.R. Aguirre, I. Trejo.  2006. Cambios en la cubierta vegetal y uso del suelo en el área del proyecto Pujal-Coy, San Luis Potosí, México. Investigaciones Geográficas, 59:26-42. <a href="http://132.248.14.79/sigg/utilidades/docs/pdfs/publicaciones/inves_geo/boletines/59/b59_art462.pdf">http://132.248.14.79/sigg/utilidades/docs/pdfs/publicaciones/inves_geo/boletines/59/b59_art462.pdf</a></li><br>
                <li><b>Reyes, H.</b>, M. Aguilar-Robledo, J.R. Aguirre, I. Trejo. 2005. Estrategias de producción agropecuaria y uso del suelo en el área del proyecto Pujal-Coy, San Luis Potosí, México. VETAS, VII (19):77-96.</li><br>
                <li><b>Reyes-Hernández, H.</b>, S. Cortina-Villar, H. Perales-Rivera, E. Kauffer-Michel, J.M Pat-Fernández. 2003. Efecto de los subsidios y apoyos gubernamentales sobre la deforestación durante el período 1990-2000 en la región de Calakmul, Campeche. Investigaciones Geográficas, 51:89-112. <a href="http://www.scielo.org.mx/pdf/igeo/n51/n51a7.pdf">http://www.scielo.org.mx/pdf/igeo/n51/n51a7.pdf</a></li><br>
                <li><b>Reyes, H.</b>, M. Aguilar-Robledo, J.R. Aguirre, I. Trejo. 2001. La intervención territorial del Estado y el desarrollo regional (el caso del proyecto de riego Pujal-Coy de San Luis Potosí).  Acta Científica Potosina, 16 (142):57-74.</li><br>
                <li>Carrizales L., Batres L., Ortiz, D., Mejía J., Yánez L., García E., <b>Reyes H.</b>, F. Díaz-Barriga. 1999. Efectos en salud asociados con la exposición a residuos peligrosos. Scientiae Naturae, 2:5-28. <a href="http://ambiental.uaslp.mx/docs/FDB-ResPeligrosos.pdf">http://ambiental.uaslp.mx/docs/FDB-ResPeligrosos.pdf</a></li>
              </ul><br>
              <strong>Artículos de divulgación</strong><br><br>
              <ul class="vineta">
                <li>Karina L. Trinidad y <b>Humberto Reyes</b>. 2016. Aroma a vainilla, tesoro oculto en la Huasteca Potosina. Universitarios Potosinos. 196:4-8. <a href="http://www.uaslp.mx/Comunicacion-Social/Documents/Divulgacion/Revista/Doce/Universitarios%20Potosinos%20196.pdf">http://www.uaslp.mx/Comunicacion-Social/Documents/Divulgacion/Revista/Doce/Universitarios%20Potosinos%20196.pdf</a></li><br>
                <li>Edgar G. Leija, <b>Humberto Reyes</b> y Javier Fortanelli. 2012. La importancia del bosque de niebla. Universitarios Potosinos. 159:10-15. <a href="http://www.uaslp.mx/Spanish/Administracion/comsoc/divulgacion/univpoto/Documents/2012/agosto.pdf">http://www.uaslp.mx/Spanish/Administracion/comsoc/divulgacion/univpoto/Documents/2012/agosto.pdf</a></li><br>
                <li><b>Reyes H.</b>, V. Vázquez, N. Caretta, J. Rivera, O. Reyes. 2008. El ecoturismo en el estado de San Luis Potosí. Ciencia San Luis. Año 3 No. 34.</li>
              </ul><br>
              <strong>Libros</strong><br><br>
              <ul class="vineta">
                <li><b>Humberto Reyes Hernández</b>, Alejandro Durán Fernández, Francisco Javier Sahagun Sánchez. Biodiversidad y conservación de ecosistemas de la Región Prioritaria para la Conservación Xilitla. UASLP-UAG-CONANP-RBSAT-FMCN. Guadalajara, Jal. 162p. ISBN:978 607 535 102-5.</li><br>
                <li>Miguel Aguilar Robledo, <b>Humberto Reyes Hernández</b>, Oscar Reyes Pérez. 2019. La Historia Ambiental en México. Estudios de caso. UASLP. San Luis Potosí, SLP. 125 p. ISBN 978 607 535 077-3.</li><br>
                <li><b>Humberto Reyes Hernández</b>, José Arturo de Nova Vázquez, Alejandro Durán Fernández. 2018. Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y acciones para su conservación. UASLP-CONANP-RBSAT-FMCN-UAT. San Luis Potosí, SLP. 188 p. ISBN 978 607 535 054-7.</li><br>
                <li><b>Humberto Reyes</b>, Carlos Morera, Oscar Reyes. 2017. Geografía Ambiental: métodos y técnicas desde América Latina. Editorial Universidad Nacional, Heredia Costa Rica. 238 p. ISBN 978-9977-65-477-5.</li><br>
                <li>Miguel Aguilar Robledo, <b>Humberto Reyes Hernández</b>. 2012. Geografía de México y el mundo, comprensión del espacio geográfico por conceptos, habilidades y actitudes. Libro de primero de secundaria. Pearson Educación. México, DF., 240 p. ISBN 9786073212205.</li>
              </ul><br>
              <strong>Capítulos en libros</strong><br><br>
              <ul class="vineta">
                <li>Rangel Rivera Coral, <b>Humberto Reyes Hernández</b>, Guillermo Martínez de la Vega, Miguel Aguilar Robledo. 2019. Unidades de manejo para la conservación de la vida silvestre (UMA). En: La biodiversidad en San Luis Potosí: estudio de estado. CONABIO.</li><br>
                <li><b>Humberto Reyes Hernández</b>. 2019. Deforestación y fragmentación de los bosques y selvas del estado de San Luis Potosí, principales amenazas a la biodiversidad. En: La biodiversidad en San Luis Potosí: estudio de estado. CONABIO.</li><br>
                <li>Hugo Ferney Leonel, Miguel Aguilar Robledo, <b>Humberto Reyes Hernández</b>, Pedro Medellín Milán. 2019. Reconstrucción histórica de los cambios ambientales en la cuenca del Río Valles, México. En: Miguel Aguilar Robledo, Humberto Reyes Hernández, Oscar Reyes Pérez. La Historia Ambiental en México. Estudios de caso. UASLP. San Luis Potosí, SLP. pp. 83-95. ISBN 978 607 535 077-3.</li><br>
                <li><b>Humberto Reyes</b>, Erika Galarza, Blanca M. Vázquez. 2018. Dinámica de los cambios en la cubierta vegetal y usos de la tierra 1996-2016. En: Humberto Reyes Hernández. José Arturo de Nova Vázquez, Alejandro Durán Fernández (Coords.), Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y acciones para su conservación. UASLP-CONANP-RBSAT-FMCN-UAT. San Luis Potosí, SLP. pp. 111-130. ISBN 978 607 535 054-7.</li><br>
                <li>Blanca M. Vazquez, <b>Humberto Reyes</b>, Miguel Aguilar, José G. Rivera. 2018. Participación local y reconocimiento territorial. En: Humberto Reyes Hernández. José Arturo de Nova Vázquez, Alejandro Durán Fernandez (Coords.), Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y acciones para su conservación. UASLP-CONANP-RBSAT-FMCN-UAT. San Luis Potosí, SLP. pp. 131-146. ISBN 978-607-535-054-7.</li><br>
                <li><b>Humberto Reyes Hernández</b>, Sandra A. Montoya Gandarillas, Dioselina E. Torres García, Erika Galarza Rincón, Alejandro Duran Fernández, Francisco Javier Sahagún Sánchez. 2017. Recuperación y restauración del bosque de niebla en la RPC Xilitla, San Luis Potosí, México. En: Jean Françoise Mas (compilador), Análisis y modelación de patrones y procesos de cambio. CIGA-UNAM. Morelia, Mich. pp. 1-22. ISBN 978-607-30-0117-5.</li><br>
                <li><b>Humberto Reyes</b>, Olivia Sosa, Gerardo Palacio, Laura Yáñez. Impacto ambiental de bancos de material en áreas protegidas. 2017. En: Humberto Reyes, Carlos Morera y Oscar Reyes (Eds.), Geografía Ambiental: métodos y técnicas desde América Latina. Editorial Universidad Nacional, Heredia Costa Rica. pp. 163-186. ISBN 978-9977-65-477-5.</li><br>
                <li>Erika Galarza, <b>Humberto Reyes</b>, Gerardo Palacio. Percepción remota e instrumentos cualitativos para evaluar el aprovechamiento maderable del mezquital en la Llanura de Rioverde, San Luis Potosí. 2017. En: Humberto Reyes, Carlos Morera y Oscar Reyes (Eds.), Geografía Ambiental: métodos y técnicas desde América Latina. Editorial Universidad Nacional, Heredia Costa Rica. pp. 187-206. ISBN 978-9977-65-477-5.</li><br>
                <li><b>Humberto Reyes.</b> 2015. La decisión más difícil. 2015. En: Francisco Bautista Zúñiga y Víctor Manuel Luna Pabello (Eds.) Consejos a los jóvenes con vocación científica. Editorial Skiu. México pp. 116-132. ISBN 978-607-96883-0-1.</li><br>
                <li><b>Humberto Reyes-Hernández</b>, Gregorio Leija-Loredo, Francisco Sahagún-Sánchez y Nelson Montoya-Toledo. 2013. Situación actual y escenarios futuros de los procesos de deforestación en la Sierra Madre Oriental, San Luis Potosí, México. Análisis basado en geotecnologías y métodos participativos. En: Carlos Morera Beita, Marilyn Romero Vargas y Luis F. Sandoval Murillo (Eds.), Geografía, Paisaje y Conservación. IPHG-UNA, Costa Rica. pp. 129-160.  ISBN 978-9930-9489-0-3.</li><br>
                <li>Mendoza M. y <b>H. Reyes.</b> 2011. Los sistemas de información geográfica y su aplicación al manejo de recursos naturales. En: Francisco Bautista (Editor) Técnicas de muestreo para manejadores de recursos naturales. INE, México DF. pp. 639-674. ISBN 978-607-02-2127-9.</li><br>
                <li><b>Reyes H.</b> 2008. ¿Trabajo o estudio?: una decisión difícil. En Francisco Bautista (Editor) Consejos a los jóvenes que quieren ser científicos. CIGA-UNAM-CIDEM. Morelia, Mich.  pp. 65-77. ISBN 978-968-9529-05-7.</li><br>
                <li><b>Reyes, H.</b>, M. Aguilar-Robledo, J. R. Aguirre, M. Silva e I. Trejo. 2007. Caracterización de fragmentos arbóreos y razones de su permanencia en el área del proyecto Pujal-Coy. En: Oliver Chassot y Carlos Morera (Eds.) Corredores biológicos: Acercamiento conceptual y experiencias en América. Centro Científico Tropical/Universidad Nacional Costa Rica. Costa Rica. pp. 85-104.</li>
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