@extends('profesores.templates.profesor')

@section('name')
Dr. José Arturo de Nova Vázquez
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Jose_Arturo_de_Nova_Vazquez.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas.<br> SNI nivel II.</strong></h5>
  <br>
  <p>
      Altair No. 200, Col. del Llano <br>
      C.P. 78377, San Luis Potosí, SLP. México <br><br>
      Tel.: +52 (444) 826-2300 ext. 9414 <br>
      <a href="mailto:arturo.denova@uaslp.mx" style="color:rgb(0, 178, 227)">arturo.denova@uaslp.mx </a><br><br>
  </p>

  <div class="enlacesprof">
      <a target="_blank" href="https://www.researchgate.net/profile/J_Arturo_De-Nova">Webpage</a>
      <a target="_blank" href="{{asset('storage/CV/DeNova_Vazquez_JoseArturo.pdf')}}"><i>Curriculum vitae</i></a>
      <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/-1kAAA%3d%3d">Directorio de Investigadores</a>
      <a target="_blank" href="https://orcid.org/0000-0002-1989-1355"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
      <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=14630089200"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
  </div>
</div>

@endsection 

@section('extra')

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-actividad-academica"
        aria-expanded="true" aria-controls="collapseOne">
        <strong>Actividad académica</strong>
      </button>
    </h2>
    <div id="collapse-actividad-academica" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ol>
        <li><strong>Cursos</strong></li>
          <ul class="vineta">
            <li>Biodiversidad, nutrición y seguridad alimentaria</li>
          </ul>
        <p></p>
        <li><strong>LGAC</strong></li>
        <ul class="vineta">
          <li>Sistemática, ecología y evolución vegetal </li>
          <li>Recursos Naturales renovables </li>
        </ul>
        <p></p>
        <li><strong>Dirección de Tesis</strong></li><br>
        <p><em>Maestría en Ciencias Ambientales</em></p>
        <ul class="vineta">
            <li>Rubio Méndez Gabriel. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3704/MCA1ECL01301.pdf?sequence=1&isAllowed=y" target="_blank">Estudio para la conservación a largo plazo de <em>Dioon Edule</em> en San Luis Potosí</a>. (Co-dirección)</li>
            <li>Sánchez Fuente Guillermo Javier. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4835/MCA1SFG201901.pdf?sequence=1&isAllowed=y" target="_blank">Diversidad funcional y disturbio crónico en el bosque húmedo de montaña de San Luis Potosí, implicaciones para su conservación</a>.</li>
            <li>Enríquez Salaices Valdez Estrella. 2019. <a href="">Inventarios para la conservación: flora vascular del área natural protegida Parque Nacional El Potosí</a>.</li>
            <li>Sánchez González Sara Monserrat (en proceso). Valorización económica de servicios ecosistémicos en la Reserva de la Biósfera Sierra del Abra Tanchipa. (Co-Dirección)</li>
        </ul>
        <p></p>
        <p><em>Doctorado en Ciencias Ambientales</em></p>
          <ul class="vineta">
            <li>Arellano Rivas Amaranta. 2016. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/4169">Componente evolutivo de la diversidad funcional de comunidades vegetales tropicales</a>. (Co-Dirección)</li>
            <li>Rubio Mendez Gabriel. 2019. <a href="">Evaluación de la influencia de ambientes con disturbio antrópico sobre las poblaciones de <em>Beaucarnea inermis</em> (Asparagaceae), especie amenazada de la Sierra Madre Oriental</a>.</li>
            <li>Cupido Hernández Madeleyne (en proceso). Prospección etnoevolutiva de la medicina tradicional Teneek. (Co-Dirección)</li>
          </ul>
        </ol>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <strong>Publicaciones</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <p><strong>Artículos de investigación</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Díaz-Toribio M.H., <b>J.A. De-Nova</b>, E.M. Piedra-Malagón, D.F. Angulo, V. Sosa. 2023. Wild and cultivated comestible plant species in the Gulf of Mexico: phylogenetic patterns and convergence of type of use. AoB PLANTS plad063. <a href="https://doi.org/10.1093/aobpla/plad063" target="_blank">https://doi.org/10.1093/aobpla/plad063</a></li><br>
          <li>Ramírez-Díaz C.J., I.M. Ramírez-Morillo, J. Cortés-Flores, <b>J.A. De-Nova</b>, R.D. De Stefano, G.C. Fernández-Concha. 2023. Biogeographical history of the Yucatan peninsula endemic flora (Spermatophyta) from a phylogenetic perspective. Harvard Papers in Botany 28: 99-120. <a href="https://www.proquest.com/openview/70c85432ad7ac4112402fa522e65e84f/1?pq-origsite=gscholar&cbl=6246023" target="_blank">https://doi.org/10.3100/hpib.v28iss1.2023.n13</a></li><br>
          <li>Aragón-Parada J., P. Carrillo-Reyes, A. Rodríguez, G. Munguía-Lino, M.M. Salinas-Rodríguez, <b>J.A. De-Nova</b>. 2023. Spatial phylogenetics of the flora in the Sierra Madre del Sur, Mexico. Evolutionary puzzles in tropical mountains. Journal of Biogeography (Early View) <a href="https://doi.org/10.1111/jbi.14679" target="_blank">https://doi.org/10.1111/jbi.14679</a></li><br>
          <li><b>De-Nova J.A.</b>, E. Enríquez-Salaices-Valdez, P. Castillo-Lara. V.G. Cilia-López, L. Yáñez-Espinosa, A.K. Gudiño-Cano, S. Vázquez-Mendoza. 2023. Inventario florístico del Área Natural Protegida Parque Nacional el Potosí, San Luis Potosí, México. Acta Botanica Mexicana 130: e219. <a href="https://doi.org/10.21829/abm130.2023.2191" target="_blank">https://doi.org/10.21829/abm130.2023.2191</a></li><br>
          <li>González-Avilés B.I., H. Reyes-Hernández, L. Yáñez-Espinosa, E. Carranza-González, <b>J.A. De-Nova</b>. 2023. La flora melífera del paisaje aledaño a la Reserva de la Biosfera Sierra del Abra Tanchipa, San Luis Potosí, México. Botanical Sciences 101: 775-803. <a href="https://doi.org/10.17129/botsci.3206" target="_blank">https://doi.org/10.17129/botsci.3206</a></li><br>
          <li>Cruz-Jiménez I., P. Delgado-Sánchez, M.L. Guerrero-González, R. Puente-Martínez, J. Flores, <b>J.A. De-Nova</b>. 2023. Predicting geographic distribution and habitat suitability of Opuntia streptacantha in paleoclimatic, current, and future scenarios in Mexico. Ecology and Evolution 13: e10050. <a href="https://doi.org/10.1002/ece3.10050" target="_blank">https://doi.org/10.1002/ece3.10050</a></li><br>
          <li>Meave J.A., K. Oyama, V. Sosa, <b>J.A. De-Nova</b>. 2022. Botanical Sciences: an honorable fellow in the international assembly of botanical journals. Botanical Siences 100: S1-S13. <a href="https://doi.org/10.17129/botsci.3232" target="_blank">https://doi.org/10.17129/botsci.3232</a></li><br>
          <li>Laura Yáñez-Espinosa, J. Flores, J. Fortanelli-Martínez, J.R. Quintero-Ruiz, <b>J.A. De-Nova</b>, H. Reyes-Hernandez. 2022. Leaf traits variation of Myriocarpa longipes and Brosimum alicastrum in relation to microclimatic gradient in tropical dolines of Mexico. Journal of the Torrey Botanical Society 149: 262-272. <a href="https://doi.org/10.3159/TORREY-D-22-00011.1" target="_blank">https://doi.org/10.3159/TORREY-D-22-00011.1</a></li><br>
          <li>Soto-Trejo F., S. Magallón, <b>J.A. De-Nova</b>, P. Dávila, L.A. Sánchez-González, K. Oyama. 2022. The evolutionary history of Fouquieriaceae (Ericales): biogeography, growth habit, habitat colonization, and chromosome evolution. Plant Systematics and Evolution 308: 35. <a href="https://doi.org/10.1007/s00606-022-01827-x" target="_blank">https://doi.org/10.1007/s00606-022-01827-x</a></li><br>
          <li>Rivera-Martínez R., I.M. Ramírez-Morillo, <b>J.A. De-Nova</b>, G. Carnevali, J.P. Pinzón, K.J. Romero-Soler, M.E.S. Salazar. 2022. Spatial phylogenetics in Hechtioideae (Bromeliaceae) reveals recent diversification and dispersal. Botanical Sciences 100: 692-709. <a href="https://doi.org/10.17129/botsci.2975" target="_blank">https://doi.org/10.17129/botsci.2975</a></li><br>
          <li>Cupido M., <b>A. De-Nova</b>, M.L. Guerrero-González, F.J. Pérez-Vázquez, K.B. Méndez-Rodríguez, P. Delgado-Sánchez. 2022. GC-MS analysis of phytochemical compounds of Opuntia megarrhiza (Cactaceae), an endangered plant of Mexico. PeerJ Organic Chemistry 4: e5. <a href="https://doi.org/10.7717/peerj-ochem.5" target="_blank">https://doi.org/10.7717/peerj-ochem.5</a></li><br>
          <li>Salinas-Rodríguez M.M., L. Hernández-Sandoval, P. Carrillo-Reyes, H. Castillo-Gómez, A. Castro-Castro, E. Estrada-Castillón, D.S. Figueroa-Martínez, I.N. Gómez-Escamilla, M. González-Elizondo, J.S. Gutiérrez-Ortega, J. Hernández-Rendón, G. Munguía-Lino, <b>J.A. De-Nova</b>, J.P. Ortíz-Brunel, G. Rubio-Méndez, E. Ruíz-Sánchez, C. Sánchez-Sánchez, T.N. Sandoval-Mata, R. Soltero-Quintana, V. Steinmann, S. Valencia-A, S. Zamudio-Ruíz. 2022. Diversity of vascular plants of the Physiographic Province of the Sierra Madre Oriental, Mexico. Botanical Sciences 100: 469-492. <a href="https://doi.org/10.17129/botsci.2864" target="_blank">https://doi.org/10.17129/botsci.2864</a></li><br>
          <li>Fortanelli-Martínez J., G.A. Salazar, P. Castillo-Lara, J. García-Pérez, C.S. Alfaro-Medina, H.A. Castillo-Gómez, T.L. Ramírez-Palomeque, J.I. Morales de la Torre, <b>J.A. De-Nova</b>. 2022. Orchidaceae de San Luis Potosí: riqueza y distribución. Botanical Sciences 100: 223-246. <a href="https://doi.org/10.17129/botsci.2875" target="_blank">https://doi.org/10.17129/botsci.2875</a></li><br>
          <li>Gutiérrez, R., F.J. Sahagún, P. Delgado, P. Castillo, J. Fortanelli, H. Reyes, <b>J.A. De-Nova</b>. 2021. Reevaluación de los bosques tropicales estacionalmente secos de la Reserva de la Biosfera Sierra del Abra Tanchipa y áreas con potencial para su conservación. Botanical Sciences 99: 735-751. <a href="https://doi.org/10.17129/botsci.2771" target="_blank">https://doi.org/10.17129/botsci.2771</a></li><br>
          <li>Aragón-Parada J., A. Rodríguez, G. Munguía-Lino, <b>J.A. De-Nova</b>, M.M. Salinas-Rodríguez, P. Carrillo-Reyes. 2021. Las plantas vasculares endémicas de la Sierra Madre del Sur, México. Botanical Sciences 99: 643-660. <a href="https://doi.org/10.17129/botsci.2682" target="_blank">https://doi.org/10.17129/botsci.2682</a></li><br>
          <li><b>De-Nova J.A.</b>, J.A. Aguirre-Liguori, L.E. Eguiarte. 2020. How did Fouquieria come to the Chihuahuan Desert? Phylogenetic and phylogeographic studies of Fouquieria shrevei and F. splendens and the role of vicariance, selection, and genetic drift. En: Mandujano M.C., I. Pisanty, L.E. Eguiarte. Plant Diversity and Ecology in the Chihuahuan Desert. Emphasis on the Cuatro Ciénegas Basin. Springer Nature Switzerland AG. Pp. 95-107. ISSN 2523-7292</li><br>
          <li>Sahagún-Sánchez F.J., <b>J.A. De-Nova</b>. 2020. Multi-taxonomic survey in the Sierra del Abra Tanchipa Biosphere Reserve. Biota Neotropica 21: e20201050. <a href="https://doi.org/10.1590/1676-0611-BN-2020-1050" target="_blank">https://doi.org/10.1590/1676-0611-BN-2020-1050</a></li><br>
          <li>Morales J.I., P. Castillo-Lara, R. Puente-Martínez, <b>J.A. De-Nova</b>. 2020. Estudio florístico de la microcuenca del Cañón de los Chivos San Luis Potosí, México. Botanical Sciences 98: 644-681. <a href="https://doi.org/10.17129/botsci.2623" target="_blank">https://doi.org/10.17129/botsci.2623</a></li><br>
          <li><b>De-Nova J.A.</b>, R. González-Trujillo, P. Castillo-Lara, J. Fortanelli-Martínez, A. Mora-Olivo, M.M. Salinas-Rodríguez. 2019. Inventario florístico de la Reserva de la Biosfera Sierra del Abra Tanchipa, San Luis Potosí, México. Botanical Sciences 97: 761-788. <a href="https://doi.org/10.17129/botsci.2285" target="_blank">https://doi.org/10.17129/botsci.2285</a></li><br>
          <li><b>De-Nova J.A.</b> 2019. Medalla “José Mariano Mociño (1757-1820)” para el Certamen de tesis del XXI Congreso Mexicano de Botánica. Botanical Sciences 97: 821-830. <a href="http://www.botanicalsciences.com.mx/index.php/botanicalSciences/article/view/2507/3908" target="_blank"> http://www.botanicalsciences.com.mx/index.php/botanicalSciences/article/view/2507/3908</a></li><br>
          <li>García-López J.C., H.M., Durán-García, <b>J.A. De-Nova</b>, G. Álvarez-Fuentes, J.M. Pinos-Rodríguez, H.A. Lee-Rangel, S. López-Aguirre, D. Ruíz-Tavares, J.A. Rendón-Huerta, J.G. Vicente-Martínez, M. Salinas-Rodriguez. 2019. Yield and nutrient content of pods from three variants of mezquite (Prosopis laevigata) in the potosino highlands, Mexico. Agrociencia 53: 821-831. <a href="https://www.agrociencia-colpos.org/index.php/agrociencia/article/view/1846" target="_blank">https://www.agrociencia-colpos.org/index.php/agrociencia/article/view/1846</a></li><br>
          <li>Quintero-Ruiz JR, L. Yáñez-Espinosa, J. Flores, J. Fortanelli-Martínez, <b>J.A. De-Nova</b>, H. Reyes-Hernández, J.P. Rodas-Ortíz. 2019. Analysis of the soil and microclimate relationship in two dolines of Carso Huasteco, Mexico. Journal of Natural Resources and Development 9: 25-33. <a href="https://doi.org/10.5027/jnrd.v9i0.03" target="_blank">https://doi.org/10.5027/jnrd.v9i0.03</a></li>
          <li>Toledo-González K.A., S.I. Levy-Tacher, P.A. Macario Mendoza, <b>J.A. De-Nova</b>. 2019. Germination of two varieties of Ochroma pyramidale (Cav. ex Lam.) Urb. from the Lacandon Jungle, Chiapas. Revista Chapingo Serie Ciencias Forestales y del Ambiente 25: 85-94. <a href="https://revistas.chapingo.mx/forestale/last_issues/?section=articles&subsec=issues&numero=266&articulo=2539" target="_blank">http://dx.doi.org/10.5154/r.rchscfa.2018.06.046</a></li><br>
          <li>Toledo-González K.A., S.I. Levy-Tacher, P.A. Macario Mendoza, <b>J.A. de Nova V.</b> 2018. Germination of two varieties of <em>Ochroma pyramidale</em> (Cav. ex Lam.) Urb. from the Lacandon Jungle, Chiapas. Revista Chapingo Serie Ciencias Forestales y del Ambiente 25: 85-94</li><br>
          <li>Cilia-López V. G., <b>J.A. de Nova.</b> 2018. La conservación <em>in situ</em> y la seguridad alimentaria. Universitarios Potosinos 226: 12-15.</li><br>
          <li>Reyes Hernández H., <b>J.A. de Nova</b>, A Durán Fernández. 2018. Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y acciones para su conservación. UASLP-CONANP-RBSAT-FMCN-UAT. San Luis Potosí, SLP. 188 P. ISBN 978 607 535 054-7.</li><br>
          <li><b>De-Nova, J.A.</b> P. Castillo-Lara, A.K. Gudiño-Cano, J. García-Pérez. 2018. Flora endémica de San Luis Potosí y regiones adyacentes en México. Árido-Ciencia 3: 21-41.</li><br>
          <li>Durán-Fernández A., J.R. Aguirre-Rivera, S.I. Levy-Tacher, <b>J.A. De-Nova</b>. 2018. Estructura de la selva alta perennifolia de Nahá, Chiapas, México. Botanical Sciences 96: 218-245.</li><br>
          <li><b>De-Nova J.A.</b> 2018. La diversidad florística potosina, un patrimonio que debemos conservar. Universitarios Potosinos 223: 4-10.</li><br>
          <li>Rubio-Méndez G., H.A. Castillo-Gómez, L. Hernández-Sandoval, G. Espinosa-Reyes, <b>J.A. De-Nova</b>. 2018. Chronic disturbance affects the demography and population structure of <em>Beaucarnea inermis</em>, a threatened species endemic to Mexico. Tropical Conservation Science 11: 1-12   <a href="https://doi.org/10.1177/1940082918779802">https://doi.org/10.1177/1940082918779802</a> </li><br>
          <li>Sosa V., <b>J.A. De-Nova</b>, M. Vázquez-Cruz. 2018. Evolutionary history of the flora of Mexico: dry forests cradles and museums of endemism. Journal of Systematics and Evolution 56: 523-536 <a href="https://doi.org/10.1111/jse.12416">https://doi.org/10.1111/jse.12416</a></li><br>
          <li><b>De-Nova J.A.</b>, L. Sánchez-Reyes, L.E. Eguiarte, S. Magallón. 2018. Recent radiation and dispersal of an ancient lineage: the case of <em>Fouquieria</em> (Fouquiericeae, Ericales) in North American deserts. Molecular Phylogenetics and Evolution 126: 92-104 <a href="https://doi.org/10.1016/j.ympev.2018.03.026">https://doi.org/10.1016/j.ympev.2018.03.026</a></li><br>
          <li>Arellano-Rivas A., <b>J.A. De-Nova</b>, M.A. Munguía-Rosas. 2018. Patch isolation and shape predict plant functional diversity in a naturally fragmented forest. Journal of Plant Ecology 11: 136-146. <a href="https://doi.org/10.1093/jpe/rtw119">https://doi.org/10.1093/jpe/rtw119</a></li><br>
          <li>Castillo-Lara P., P. Octavio-Aguilar, <b>J.A. De-Nova</b>. 2018. <em>Ceratozamia zaragozae</em> Medellín-Leal (Zamiaceae), an endangered Mexican cycad: New information on population structure and spatial distribution. Brittonia 70: 155-165. <a href="https://doi.org/10.1007/s12228-017-9513-1">https://doi.org/10.1007/s12228-017-9513-1</a></li><br>
          <li>Arellano-Rivas A., M.A. Munguía-Rosas, <b>J.A. De-Nova</b>, S. Montiel. 2017. Effects of Spatial Patch Characteristics and Landscape Context on Plant Phylogenetic Diversity in a Naturally Fragmented. Tropical Conservation Science 10: 1-11. <a href="https://doi.org/10.1177/1940082917717050">https://doi.org/10.1177/1940082917717050</a></li><br>
          <li>Bravo-Bolaños O., A Sánchez-González, <b>J.A. De-Nova</b>, N.P. Pavón Hernández. 2016. Composición y estructura arbórea y arbustiva de la vegetación de la zona costera de Bahía de Banderas, Nayarit, México. Botanical Sciences 94: 1-21.</li><br>
          <li>Durán-Fernández A., J.R. Aguirre-Rivera, J. García-Pérez, S. Levy-Tacher, <b>J.A. De Nova</b>. 2016. Inventario florístico de la comunidad lacandona de Nahá, Chiapas, México. Botanical Sciences 94: 157-184.</li><br>
          <li>Ramírez-Tobías H.M., R. Niño-Vázquez, J.R. Aguirre-Rivera, J. Flores, <b>J.A. De-Nova</b>, R. Jarquin-Gálvez. 2016. Seed viability and effect of temperature on germination of <em>Agave angustifolia</em> subsp. tequilana and A. mapisaga; two useful Agave species. Genetic Resources and Crop Evolution 63: 881-888.</li><br>
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
          <li>Plan de acción y monitoreo para la biodiversidad en matorral desértico rosetófilo y submontano. CEMOSA S.A. de C.V. (Vigente)</li><br>
          <li>Etnobiología evolutiva de la Sierra Madre Oriental. (Vigente)</li><br>
          <li>Diversidad vegetal de San Luis Potosí. (Vigente)</li><br>
          <li>Prospección etnoevolutiva de las plantas medicinales de la región biocultural Huasteca en San Luis Potosí. Ciencia de Frontera 320270, CONACYT, México. (Concluido).</li><br>
          <li> Inventario multitaxonómico: “PN El Potosí, RB Sierra del Abra Tanchipa (San Luis Potosí). CONABIO FB1829/PJ029/17. (Concluido).</li><br>
          <li> Potencial evolutivo y diversidad filogenética de comunidades vegetales de la Sierra Madre Oriental. Ciencia Básica 243454, CONACYT, México. (Concluido).</li><br>
          <li> Inventario florístico del relicto de bosque de niebla de la Región Prioritaria para la Conservación Xilitla, San Luis Potosí. PROCODES CONANP-SEMARNAT. (Concluido).</li><br>
          <li> Estado de conservación de la vegetación natural de la Reserva de la Biosfera Sierra del Abra Tanchipa, San Luis Potosí. PROCODES CONANP-SEMARNAT. (Concluido).</li><br>
          <li> Demografía y genética de dos especies amenazadas de la flora del estado de San Luis Potosí́. PROMEP 2014, México. (Concluido).</li><br>
          <li> El endemismo en la flora de San Luis Potosí. FAI, UASLP, México. (Concluido).</li><br>
          <li> Inventario de la flora de la Reserva de la Biosfera de la Sierra del Abra Tanchipa y sus usos potenciales. PROCODES CONANP-SEMARNAT. (Concluido).</li>
        </ul>
            </div>
          </div>
        </div>
      </div><br><br><br>
    </div>
  </div>
</div>

@endsection
