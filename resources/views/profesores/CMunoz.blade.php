@extends('profesores.templates.profesor')

@section('name')
Dr. Carlos Alfonso Muñoz Robles
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Carlos_Alfonso_Muñoz_Robles.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel V</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas. SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair num. 200, Col. del Llano C.P. 78377 <br>
      San Luis Potosí, SLP. México <br>
      Tel.: 52(444) 842 11 46 Fax.: 52(444) 842 23 59 ext. 106 <br>
      <a href="mailto:carlos.munoz@uaslp.mx"> carlos.munoz@uaslp.mx</a>
  </p>

  <div class="enlacesprof">
      <a href="http://www.iizd.uaslp.mx/Documents/CAMR.pdf">Webpage</a>
      <a href="http://www.iizd.uaslp.mx/Documents/CV_CAMR.pdf">Curriculum Vitae</a>
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

        <p> Cursos </p>
        <p></p>
        <ul class="vineta">
          <li> Ecología y manejo de cuencas </li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Recursos naturales renovables </li>
        </ul>

        <p> Dirección de Tesis </p>
        <p></p>
        <ul>
          <p> Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección </p>
          <p></p>
          <ul class="vineta">
            <li> Witter Julia. 2014. Promoting urban agriculture-a case study of Lima/Peru</li>
            <li> Pauls Tim. 2014. Impact evaluation of educational and participative strategies – a case study of a community gardens program in Lima/Peru</li>
            <li> Bocanegra Díaz Jennifer Lizeth. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4517">Hydrological drought assessment in the tempisque-bebedero catchment system in Costa Rica</a>.</li>
            <li> Peña Guerrero Mayra Daniela. 2017. <a href="#">Assessment of water quality and quantity for agricultural requirements during drought periods in the maipo river basin-Chile</a>.</li>
            <li> Muñoz Herrera Lizeth Natalia. 2018. <a href="http://ninive.uaslp.mx/jspui/bitstream/i/4546/1/MCA1MHL201801.pdf">Assessment of ecological and socio-economic impacts of meteorological and hydrological drought in Colombian Mojana region</a>.</li>
            <li> Cabezas Yanchapaxi Ana Salomé. 2019. <a href="#">Remote sensing analysis of urban heat in semi-arid climates: a tool for sustainable city development in San Luis Potosi, Mexico</a>.</li>
          </ul>

          <p></p>
          <p> Maestría en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Alva Álvarez Gabriela Isabel. 2016. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4127/MCA1AAG201601.pdf?sequence=3&isAllowed=y"> Interacciones fuego-paisaje en el noroeste de la Sierra Madre Occidental de Chihuahua</a>.</li>
            <li> Osorio Carmona Verónica. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4335">Implicaciones del uso de suelo en la escorrentía y erosión en la subcuenca Huichihuayán-Huehuetlán, San Luis Potosí, México</a></li>
            <li> De la Torre Robles Lourdes. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4651/MCA1DRL201801.pdf?sequence=1&isAllowed=y"> Inestabilidad del paisaje y susceptibilidad a erosión en cárcavas en el área de Cerro de San Pedro, San Luis Potosí</a>.</li>
          </ul>

          <p></p>
          <p> Doctorado en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Barbosa Briones Elda. 2019. <a href="#">Análisis del funcionamiento hidrológico en cuencas con actividad minera con base en sistemas de flujo como eje integrador</a>. (Co-dirección).</li>
          </ul>

        </ul>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-publicaciones"
        aria-expanded="true" aria-controls="collapseOne">
        <strong>Publicaciones</strong>
      </button>
    </h2>
    <div id="collapse-publicaciones" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <p> Artículos de Investigación </p>
        <p></p>
        <ul class="vineta">
          <li> Errejón-Gómez, J. C., Flores-Flores, J. L., <b>Muñoz-Robles, C.</b>, Reyes Hernández, H. 2017. Las políticas forestales en el estado de San Luis Potosí en el porfiriato. Región y Sociedad 29(69): 219-248.</li><br>
          <li> <b>Muñoz-Robles, C.</b>, Santana-Arias, R. 2018. Puntos de calor en la Sierra Madre Oriental de San Luis Potosí: patrones espaciales y factores asociados. Madera y Bosques 24(1). DOI: 10.21829/myb.2018.2411565.</li><br>
          <li> Vega-Vela, V., <b>Muñoz-Robles, C.</b>, Rodríguez-Luna, E., López-Acosta, J. C., Serna-Lagunes, R. 2018. Análisis de la fragmentación del paisaje de la Reserva de la Biosfera Los Tuxtlas, Veracruz, México. Ecosistemas y Recursos Agropecuarios 5(14): 227-238. DOI: 10.19136/era.a5n14.1442.</li><br>
          <li> Vázquez-Alvarado, A., Ortíz-Rodríguez, A., Palacio-Aponte, A., <b>Muñoz-Robles, C.</b> 2018. Escorrentía y producción de sedimentos en encinares incendiados de la Sierra Madre Oriental, México. Revista Mexicana de Ciencias Forestales 9(48): 5-26. DOI: <a href="https://doi.org/https://doi.org/10.29298/rmcf.v8i48.121"> https://doi.org/https://doi.org/10.29298/rmcf.v8i48.121.</a></li><br>
          <li> Alva-Álvarez, G. I., Reyes-Hernández, H., Palacio-Aponte, A. G., Núñez-López, D., <b>Muñoz-Robles, C.</b> 2018. Cambios en el paisaje ocasionados por incendios forestales en la región de Madera, Chihuahua. Madera y Bosques 24(3). DOI: <a href="https://doi.org/10.21829/myb.2018.2431697"> https://doi.org/10.21829/myb.2018.2431697.</a></li><br>
          <li> Falfán, I., <b>Muñoz-Robles, C.</b>, Bonilla-Moheno, M., MacGregor-Fors, I. 2018. Can you really see green? Assessing physical and self-reported measurements of urban greenery. Urban Forestry & Urban Greening 36: 13-21. DOI: <a href="https://doi.org/10.1016/j.ufug.2018.08.016">  https://doi.org/10.1016/j.ufug.2018.08.016.</a></li><br>
          <li> Ortíz-Rodríguez A., <b>Muñoz-Robles, C.</b>, Borselli, L. 2019. Changes in connectivity and hydrological efficiency following wildland fires in Sierra Madre Oriental, Mexico. Science of the Total Environment 655: 112-128. DOI: <a href="https://doi.org/10.1016/j.scitotenv.2018.11.236"> https://doi.org/10.1016/j.scitotenv.2018.11.236.</a></li><br>
          <li> Errejón-Gómez, J. C., Vila-Subirós, J., Flores-Flores, J. L., Reyes Hernández, H., <b>Muñoz-Robles, C.</b> 2018. Conectividad de los ecosistemas entre las reservas de la biosfera “El Cielo” y “Sierra del Abra Tanchipa” en México. Investigaciones Geográficas 70: 181-196. DOI: <a href="https://doi.org/10.14198/INGEO2018.70.09"> https://doi.org/10.14198/INGEO2018.70.09.</a></li><br>
          <li> Lemoine-Rodríguez, R., MacGregor-Fors, I., Muñoz-Robles, C. 2019. Six decades of urban green change in a neotropical city: A case study of Xalapa, Veracruz, Mexico. Urban Ecosystems <a href="https://doi.org/10.1007/s11252-019-00839-9"> https://doi.org/10.1007/s11252-019-00839-9.</a></li>
        </ul>

        <p><strong>Capítulos de Libros</strong></p>
        <p></p>
        <ul class="vineta">
          <li> Di Carlo A.L., Aguilar Robledo M., <b>Muñoz-Robles C.A.</b>, Medellín-Milán P. 2018. The Need for an Integrated Landscape Management Approach Illustrated by the Analysis of the Participation in the Ecologic Spatial Planning of Benito Juárez, Quintana Roo, Mexico. In: Leal Filho W., Noyola-Cherpitel R., Medellín-Milán P., Ruiz Vargas V. (eds) Sustainable Development Research and Practice in Mexico and Selected Latin American Countries. World Sustainability Series. Springer, Cham. pp. 297-314. DOI: 10.1007/978-3-319-70560-6_19. </li><br>
          <li> Mac Swiney-González, M. C., López-Acosta, J. C., Velázquez-Rosas, N., Rodríguez-Luna, E., Muñoz-Robles C.A. 2018. Estado Actual y Oportunidades para la Conservación y Manejo en el Valle de Uxpanapa. En: Silva-Rivera, E., Martínez-Valdés, V., Lascurain, M., Rodríguez-Luna, E. (editores) De la Recolección a los Agroecosistemas: Soberanía Alimentaria y Conservación de la Biodiversidad. Universidad Veracruzana. pp. 197-211. ISBN 9786075026985.</li>
      </div>
    </div>
  </div>
</div>

@endsection
