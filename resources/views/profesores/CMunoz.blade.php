@extends('profesores.templates.profesor')

@section('name')
Dr. Carlos Alfonso Muñoz Robles
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Carlos_Alfonso_Muñoz_Robles.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas.<br>SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair No. 200, Col. del Llano C.P. 78377 <br>
      San Luis Potosí, SLP. México <br><br>
      Tel.: +52 (444) 832-1000 ext. 9418 <br>
      <a href="mailto:carlos.munoz@uaslp.mx" style="color:rgb(0, 178, 227)"> carlos.munoz@uaslp.mx</a>
  </p>

  <div class="enlacesprof">
      <a href="https://www.eccohydrology.com/">Webpage</a>
      <a href="{{asset('storage/CV/Munoz_Robles_CarlosAlfonso.pdf')}}"><em>Curriculum Vitae</em></a>
      <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/SFsAAA%3d%3d">Directorio de Investigadores</a>
      <a target="_blank" href="https://orcid.org/0000-0003-4744-3602"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
      <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56013667700"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
          <li>Ecología y manejo de cuencas </li>
        </ul><br>

        <li><strong>LGAC</strong></li>
        <ul class="vineta">
          <li>Recursos naturales renovables </li>
        </ul><br>

        <li><strong>Dirección de Tesis</strong></li></p>
        <p></p>
          <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em></p>
          <p></p>
          <ul class="vineta">
            <li>Witter Julia. 2014. Promoting urban agriculture -a case study of Lima/Peru</li>
            <li>Pauls Tim. 2014. Impact evaluation of educational and participative strategies –a case study of a community gardens program in Lima/Peru</li>
            <li>Bocanegra Díaz Jennifer Lizeth. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4517" target="_blank">Hydrological drought assessment in the tempisque-bebedero catchment system in Costa Rica</a></li>
            <li>Peña Guerrero Mayra Daniela. 2017. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5742/MCA1PGM201701.pdf?sequence=1&isAllowed=y" target="_blank">Assessment of water quality and quantity for agricultural requirements during drought periods in the Maipo river basin-Chile</a></li>
            <li>Muñoz Herrera Lizeth Natalia. 2018. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4546/MCA1MHL201801.pdf?sequence=1&isAllowed=y" target="_blank">Assessment of ecological and socio-economic impacts of meteorological and hydrological drought in Colombian Mojana region</a></li>
            <li>Cabezas Yanchapaxi Ana Salomé. 2019. Remote sensing analysis of urban heat in semi-arid climates: a tool for sustainable city development in San Luis Potosi, Mexico</li>
            <li>Rodríguez Zumbado José Andrés. 2020. The Pacuare Reserve landscape: land cover change and implications for biodiversity conservation in Costa Rica</li>
            <li>Murillo Jaramillo Daniel. 2021. Analysis of drought propagation in the Paute basin, Ecuador</li>
            <li>López Toruño Cristóbal Augusto. 2022. Participatory assessment of nature-based solutions to complement the environmental management of the Diplito River watershed, Nicaragua</li>
          </ul>

          <p></p>
          <p><em>Maestría en Ciencias Ambientales</em></p>
          <p></p>
          <ul class="vineta">
            <li>Alva Álvarez Gabriela Isabel. 2016. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4127/MCA1AAG201601.pdf?sequence=3&isAllowed=y"> Interacciones fuego-paisaje en el noroeste de la Sierra Madre Occidental de Chihuahua</a></li>
            <li>Osorio Carmona Verónica. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4335">Implicaciones del uso de suelo en la escorrentía y erosión en la subcuenca Huichihuayán-Huehuetlán, San Luis Potosí, México</a></li>
            <li>De la Torre Robles Lourdes. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4651/MCA1DRL201801.pdf?sequence=1&isAllowed=y"> Inestabilidad del paisaje y susceptibilidad a erosión en cárcavas en el área de Cerro de San Pedro, San Luis Potosí</a></li>
            <li>Santana Arias Rogelio. 2020. Patrones de distribución espacial de los incendios forestales en México y su aplicación en modelos de peligro</li>
          </ul>

          <p></p>
          <p><em>Doctorado en Ciencias Ambientales</em></p>
          <p></p>
          <ul class="vineta">
            <li>Barbosa Briones Elda. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5672/DCA1BBE201901.pdf?sequence=1&isAllowed=y">Análisis del funcionamiento hidrológico en cuencas con actividad minera con base en sistemas de flujo como eje integrador</a>. (Co-dirección).</li>
          </ul>

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

        <p><strong>Artículos de Investigación</strong></p>
        <p></p>
        <ul class="vineta">
          <li>De la Torre-Robles, L., <b>Muñoz-Robles, C.</b>, Huber-Sannwald, E., Reyes-Agüero, J. A. 2023. Functional stability: From soil aggregates to landscape scale in a region severely affected by gully erosion in semi-arid central Mexico. Catena 222. DOI: <a href="https://doi.org/10.1016/j.catena.2022.106864"> https://doi.org/10.1016/j.catena.2022.106864</a></li><br>
          <li>Reyes-Hernández, H., Silva-Flores, M., <b>Muñoz-Robles, C.</b>, Ortíz-Rodríguez A. 2022. Strengthening Environmental Management and Local Planning in Indigenous Communities Through Hydrological Connectivity Analysis. Human Ecology 736: 112-128. DOI: <a href="https://doi.org/10.1007/s10745-022-00329-1" target="_blank">https://doi.org/10.1007/s10745-022-00329-1</a></li><br>
          <li>Ortíz-Rodríguez A., <b>Muñoz-Robles, C.</b>, Rodríguez-Herrera, J. G., Osorio-Carmona, V., Barbosa-Briones, E. 2022. Effect of DEM resolution on assessing hydrological connectivity in tropical and semi-arid basins of central Mexico. Journal of Hydrology 612: A. DOI: https:// doi.org/10.1016/j.jhydrol.2022.128104</li><br>
          <li>Orta Salazar, C., Reyes-Agüero, J. A., <b>Muñoz-Robles, C.</b> 2022. Mariposas bioindicadoras ecológicas en México. Artículo de revisión. Acta Zoológica Mexicana Volume 38: 1-33. DOI: <a href="https://dx.doi.org/10.21829/azm.2022.3812488" target="_blank">https://dx.doi.org/10.21829/azm.2022.3812488</a></li><br>
          <li>Rodríguez Flores, S., <b>Muñoz-Robles, C.</b>, Ortíz-Rodríguez, A., Quevedo Tiznado, J. A. Julio-Miranda, P. 2022. Historical and projected changes in hydrological and sediment connectivity under climate change in a tropical catchment of Mexico. Science of the Total Environment 848. DOI: <a href="https://dx.doi.org/10.1016/j.scitotenv.2022.157731" target="_blank">https://dx.doi.org/10.1016/j.scitotenv.2022.157731</a></li><br>
          <li>Orta Salazar, C., Aguirre-Salado, C. A., Reyes-Hernández, H., Reyes-Agüero, J. A., <b>Muñoz-Robles, C.</b> 2021. Mapping Potential Areas for Conservation Under Forest Carbon Credit Eligibility in a Natural Protected Area in Northern Mexico. Tropical Conservation Science Volume 14: 1-18. DOI: <a href="https://doi.org/10.1177/19400829211029448" target="_blank">https://doi.org/10.1177/19400829211029448</a>.</li><br>
          <li>Peña-Guerrero, D., Naudit, A., <b>Muñoz-Robles, C.</b>, Ribbe, L., Meza, F. 2020. Drought impacts on water quality and potential implications for agricultural production in the Maipo River Basin, Central Chile. Hydrological Sciences Journal. DOI: <a href="https://www.tandfonline.com/doi/full/10.1080/02626667.2020.1711911" target="_blank">https://10.1080/02626667.2020.1711911</a>. Indizada en SCI.</li><br>
          <li>Ortíz-Rodríguez A., Capra, L., <b>Muñoz-Robles, C.</b>, Coviello, V., Borselli, L. 2020. Connectivity and hydrological efficiency dynamics at active volcanoes, Mexico. Science of the Total Environment 736: 112-128. DOI: <a href="https://doi.org/10.1016/j.scitotenv.2020.139649" target="_blank">https://doi.org/10.1016/j.scitotenv.2020.139649</a>. Indizada en SCI.</li><br>
          <li>Reyes-Hernández, H., Galarza-Rincón, E., <b>Muñoz-Robles, C.</b>, Duran-Fernández, A., Sahagún-Sánchez, F. J. 2020. Procesos de cambio en la cubierta vegetal de la Reserva Forestal Nacional Porción Boscosa del estado de San Luis Potosí. Journal of Latin American Geography 19(4): 170-198. DOI: <a href="https://muse.jhu.edu/pub/15/article/772585/pdf" target="_blank"> https://10.1353/lag.2020.0084.</a></li><br>
          <li>Ortíz-Rodríguez A., <b>Muñoz-Robles, C.</b>, Borselli, L. 2019. Changes in connectivity and hydrological efficiency following wildland fires in Sierra Madre Oriental, Mexico. Science of the Total Environment 655: 112-128. DOI: <a href="https://doi.org/10.1016/j.scitotenv.2018.11.236" target="_blank">https://doi.org/10.1016/j.scitotenv.2018.11.236</a>. Indizada en SCI.</li><br>
          <li>Lemoine-Rodríguez, R., MacGregor-Fors, I., <b>Muñoz-Robles, C.</b> 2019. Six decades of urban green change in a neotropical city: a case study of Xalapa, Veracruz, Mexico. Urban Ecosystems 22: 609-618. DOI: <a href="https://doi.org/10.1007/s11252-019-00839-9" target="_blank">https://doi.org/10.1007/s11252-019-00839-9</a>. Indizada en SCI.</li><br>
          <li>Barbosa-Briones, E., <b>Muñoz-Robles, C.</b>, Cardona-Benavides, A., Reyes-Hernández, H. 2019. Eco-hydrological function of vegetation patches in semi-arid shrublands of central Mexico. Journal of Arid Environments 168: 36-45. DOI: <a href="https://doi.org/10.1016/j.jaridenv.2019.05.005" target="_blank">https://doi.org/10.1016/j.jaridenv.2019.05.005</a>. Indizada en SCI.</li><br>
          <li>Acosta-Torres, L. E., Reyes-Hernández, H., <b>Muñoz-Robles, C.</b>, Leija-Loredo, E. G. 2019. Distribución y conservación de Quercus oleoides Schltdl. & Cham. en la Reserva de la Biosfera Sierra del Abra Tanchipa. Revista Mexicana de Ciencias Forestales 10: 52. DOI: <a href="https://doi.org/10.29298/rmcf.v10i52.453" target="_blank">https://doi.org/10.29298/rmcf.v10i52.453</a>. Indizada en el índice de revistas del CONACYT.</li><br>
          <li>Errejón-Gómez, J. C., Flores-Flores, J. L., <b>Muñoz-Robles, C.</b>, Reyes Hernández, H. 2017. Las políticas forestales en el estado de San Luis Potosí en el porfiriato. Región y Sociedad 29(69): 219-248.</li><br>
          <li><b>Muñoz-Robles, C.</b>, Santana-Arias, R. 2018. Puntos de calor en la Sierra Madre Oriental de San Luis Potosí: patrones espaciales y factores asociados. Madera y Bosques 24(1). DOI: 10.21829/myb.2018.2411565.</li><br>
          <li>Vega-Vela, V., <b>Muñoz-Robles, C.</b>, Rodríguez-Luna, E., López-Acosta, J. C., Serna-Lagunes, R. 2018. Análisis de la fragmentación del paisaje de la Reserva de la Biosfera Los Tuxtlas, Veracruz, México. Ecosistemas y Recursos Agropecuarios 5(14): 227-238. DOI: 10.19136/era.a5n14.1442.</li><br>
          <li>Vázquez-Alvarado, A., Ortíz-Rodríguez, A., Palacio-Aponte, A., <b>Muñoz-Robles, C.</b> 2018. Escorrentía y producción de sedimentos en encinares incendiados de la Sierra Madre Oriental, México. Revista Mexicana de Ciencias Forestales 9(48): 5-26. DOI: <a href="https://doi.org/https://doi.org/10.29298/rmcf.v8i48.121"> https://doi.org/https://doi.org/10.29298/rmcf.v8i48.121.</a></li><br>
          <li>Alva-Álvarez, G. I., Reyes-Hernández, H., Palacio-Aponte, A. G., Núñez-López, D., <b>Muñoz-Robles, C.</b> 2018. Cambios en el paisaje ocasionados por incendios forestales en la región de Madera, Chihuahua. Madera y Bosques 24(3). DOI: <a href="https://doi.org/10.21829/myb.2018.2431697"> https://doi.org/10.21829/myb.2018.2431697.</a></li><br>
          <li>Falfán, I., <b>Muñoz-Robles, C.</b>, Bonilla-Moheno, M., MacGregor-Fors, I. 2018. Can you really see green? Assessing physical and self-reported measurements of urban greenery. Urban Forestry & Urban Greening 36: 13-21. DOI: <a href="https://doi.org/10.1016/j.ufug.2018.08.016">  https://doi.org/10.1016/j.ufug.2018.08.016.</a></li><br>
          <li>Ortíz-Rodríguez A., <b>Muñoz-Robles, C.</b>, Borselli, L. 2019. Changes in connectivity and hydrological efficiency following wildland fires in Sierra Madre Oriental, Mexico. Science of the Total Environment 655: 112-128. DOI: <a href="https://doi.org/10.1016/j.scitotenv.2018.11.236"> https://doi.org/10.1016/j.scitotenv.2018.11.236.</a></li><br>
          <li>Errejón-Gómez, J. C., Vila-Subirós, J., Flores-Flores, J. L., Reyes Hernández, H., <b>Muñoz-Robles, C.</b> 2018. Conectividad de los ecosistemas entre las reservas de la biosfera “El Cielo” y “Sierra del Abra Tanchipa” en México. Investigaciones Geográficas 70: 181-196. DOI: <a href="https://doi.org/10.14198/INGEO2018.70.09"> https://doi.org/10.14198/INGEO2018.70.09.</a></li><br>
          <li>Lemoine-Rodríguez, R., MacGregor-Fors, I., Muñoz-Robles, C. 2019. Six decades of urban green change in a neotropical city: A case study of Xalapa, Veracruz, Mexico. Urban Ecosystems <a href="https://doi.org/10.1007/s11252-019-00839-9"> https://doi.org/10.1007/s11252-019-00839-9.</a></li><br>
        </ul>

        <p><strong>Capítulos de Libros</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Di Carlo A.L., Aguilar Robledo M., <b>Muñoz-Robles C.A.</b>, Medellín-Milán P. 2018. The Need for an Integrated Landscape Management Approach Illustrated by the Analysis of the Participation in the Ecologic Spatial Planning of Benito Juárez, Quintana Roo, Mexico. In: Leal Filho W., Noyola-Cherpitel R., Medellín-Milán P., Ruiz Vargas V. (eds) Sustainable Development Research and Practice in Mexico and Selected Latin American Countries. World Sustainability Series. Springer, Cham. pp. 297-314. DOI: 10.1007/978-3-319-70560-6_19. </li><br>
          <li>Mac Swiney-González, M. C., López-Acosta, J. C., Velázquez-Rosas, N., Rodríguez-Luna, E., <b>Muñoz-Robles C.A.</b> 2018. Estado Actual y Oportunidades para la Conservación y Manejo en el Valle de Uxpanapa. En: Silva-Rivera, E., Martínez-Valdés, V., Lascurain, M., Rodríguez-Luna, E. (editores) De la Recolección a los Agroecosistemas: Soberanía Alimentaria y Conservación de la Biodiversidad. Universidad Veracruzana. pp. 197-211. ISBN 9786075026985.</li><br>
          <li>Torres-García, D. E., Reyes-Hernández, H., <b>Muñoz-Robles C.</b>, Galarza-Rincón, E. 2020. Caracterización físico-geográfica del bosque húmedo de montaña. En: Reyes-Hernández, H., Durán-Fernández, A., Sahagún-Sánchez, F. J. (editores) Biodiversidad y conservación de ecosistemas de la Región Prioritaria para la Conservación Xilitla. Universidad Autónoma de San Luis Potosí. pp. 46-59. ISBN: 978-607-535-102-5.</li><br>
          <li>Orta Salazar, C., Reyes-Agüero, J. A., <b>Muñoz-Robles, C.</b>, Mendez-Cortés, H. 2021. Lepidópteros con potencial para manejo intensivo y aprovechamiento sostenible. En: Reyes-Hernández, H., Reyes-Agëro, J. A., Durán-Fernández (editores) Desafíos para la conservación de los ecosistemas y su biodiversidad en la Reserva de la Biosfera Sierra del Abra Tanchipa. Universidad Autónoma de San Luis Potosí. pp. 213-149. ISBN: 978-607-535-253-4.</li><br>
          <li><b>Muñoz-Robles, C.</b>, Montoya-Gandarillas, S. A., Sifuentes-Lugo, C. A., Ramírez-Escobedo, D. M. 2021. Acciones de protección contra incendios forestales y manejo del fuego. En: Reyes-Hernández, H., Reyes-Agëro, J. A., Durán-Fernández (editores) Desafíos para la conservación de los ecosistemas y su biodiversidad en la Reserva de la Biosfera Sierra del Abra Tanchipa. Universidad Autónoma de San Luis Potosí. pp. 170-186. ISBN: 978-607-535-253-4.</li><br>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection
