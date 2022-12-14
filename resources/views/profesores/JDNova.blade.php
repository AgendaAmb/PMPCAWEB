@extends('profesores.templates.profesor')

@section('name')
Dr. José Arturo de Nova Vázquez
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Jose_Arturo_de_Nova_Vazquez.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel V.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas. SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair num. 200, Col. del Llano C.P. 78377 <br>
      San Luis Potosí, SLP. México <br>
      Tel.: 52(444) 842 11 46 Fax.: 52(444) 842 23 59 ext. 106 <br>
      <a href="mailto:arturo.denova@uaslp.mx"> arturo.denova@uaslp.mx </a> 
  </p>

  <div class="enlacesprof">
      <a href="http://www.iizd.uaslp.mx/Documents/JADNV.pdf">Webpage</a>
      <a href="http://www.iizd.uaslp.mx/Documents/CV_JADNV.pdf"> Curriculum Vitae</a>
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
          <li> Genética y biodiversidad </li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Sistemática, ecología y evolución vegetal </li>
          <li> Recursos Naturales renovables </li>
        </ul>

        <p> Dirección de Tesis </p>
        <p></p>
        <ul>
          <p> Maestría en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Rubio Mendez Gabriel. 2013. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_rubiomendez.pdf">Estudio para la conservación a largo plazo de <em>Dioon Edule</em> en San Luis Potosí</a>. (Co-dirección)</li>
            <li> Sánchez Fuente Guillermo Javier. 2019. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4835/MCA1SFG201901.pdf?sequence=1&amp;isAllowed=y">Diversidad funcional y disturbio crónico en el bosque húmedo de montaña de San Luis Potosí, implicaciones para su conservación</a>.</li>
            <li> Enríquez Salaices Valdez Estrella. 2019. <a href="">Inventarios para la conservación: flora vascular del área natural protegida Parque Nacional El Potosí</a>.</li>
          </ul>

          <p></p>
          <p> Doctorado en Ciencias Ambientales </p>
          <p></p>
          <ul class="vineta">
            <li> Arellano Rivas Amaranta. 2016. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4169">Componente evolutivo de la diversidad funcional de comunidades vegetales tropicales</a>. (Co-Dirección)</li>
            <li> Rubio Mendez Gabriel. 2019. <a href="">Evaluación de la influencia de ambientes con disturbio antrópico sobre las poblaciones de <em>Beaucarnea inermis</em> (Asparagaceae), especie amenazada de la Sierra Madre Oriental</a>.</li>
          </ul>

        </ul>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-publicaciones"
        aria-expanded="true" aria-controls="collapseOne">
        <strong> Publicaciones</strong>
      </button>
    </h2>
    <div id="collapse-publicaciones" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <p> Artículos de investigación </p>
        <p></p>
        <ul class="vineta">
          <li> Toledo-González K.A., S.I. Levy-Tacher, P.A. Macario Mendoza, <b>J.A. de Nova V.</b> 2018. Germination of two varieties of <em>Ochroma pyramidale</em> (Cav. ex Lam.) Urb. from the Lacandon Jungle, Chiapas. Revista Chapingo Serie Ciencias Forestales y del Ambiente 25: 85-94</li><br>
          <li> Cilia-López V. G., <b>J.A. de Nova.</b> 2018. La conservación <em>in situ</em> y la seguridad alimentaria. Universitarios Potosinos 226: 12-15.</li><br>
          <li> Reyes Hernández H., <b>J.A. de Nova</b>, A Durán Fernández. 2018. Reserva de la Biosfera Sierra del Abra Tanchipa. Biodiversidad y acciones para su conservación. UASLP-CONANP-RBSAT-FMCN-UAT. San Luis Potosí, SLP. 188 P. ISBN 978 607 535 054-7.</li><br>
          <li> <b>De-Nova, J.A.</b> P. Castillo-Lara, A.K. Gudiño-Cano, J. García-Pérez. 2018. Flora endémica de San Luis Potosí y regiones adyacentes en México. Árido-Ciencia 3: 21-41.</li><br>
          <li> Durán-Fernández A., J.R. Aguirre-Rivera, S.I. Levy-Tacher, <b>J.A. De-Nova</b>. 2018. Estructura de la selva alta perennifolia de Nahá, Chiapas, México. Botanical Sciences 96: 218-245.</li><br>
          <li> <b>De-Nova J.A.</b> 2018. La diversidad florística potosina, un patrimonio que debemos conservar. Universitarios Potosinos 223: 4-10.</li><br>
          <li> Rubio-Méndez G., H.A. Castillo-Gómez, L. Hernández-Sandoval, G. Espinosa-Reyes, <b>J.A. De-Nova</b>. 2018. Chronic disturbance affects the demography and population structure of <em>Beaucarnea inermis</em>, a threatened species endemic to Mexico. Tropical Conservation Science 11: 1-12   <a href="https://doi.org/10.1177/1940082918779802">https://doi.org/10.1177/1940082918779802</a> </li><br>
          <li> Sosa V., <b>J.A. De-Nova</b>, M. Vázquez-Cruz. 2018. Evolutionary history of the flora of Mexico: dry forests cradles and museums of endemism. Journal of Systematics and Evolution 56: 523-536 <a href="https://doi.org/10.1111/jse.12416">https://doi.org/10.1111/jse.12416</a></li><br>
          <li> <b>De-Nova J.A.</b>, L. Sánchez-Reyes, L.E. Eguiarte, S. Magallón. 2018. Recent radiation and dispersal of an ancient lineage: the case of <em>Fouquieria</em> (Fouquiericeae, Ericales) in North American deserts. Molecular Phylogenetics and Evolution 126: 92-104 <a href="https://doi.org/10.1016/j.ympev.2018.03.026">https://doi.org/10.1016/j.ympev.2018.03.026</a></li><br>
          <li> Arellano-Rivas A., <b>J.A. De-Nova</b>, M.A. Munguía-Rosas. 2018. Patch isolation and shape predict plant functional diversity in a naturally fragmented forest. Journal of Plant Ecology 11: 136-146. <a href="https://doi.org/10.1093/jpe/rtw119">https://doi.org/10.1093/jpe/rtw119</a></li><br>
          <li> Castillo-Lara P., P. Octavio-Aguilar, <b>J.A. De-Nova</b>. 2018. <em>Ceratozamia zaragozae</em> Medellín-Leal (Zamiaceae), an endangered Mexican cycad: New information on population structure and spatial distribution. Brittonia 70: 155-165. <a href="https://doi.org/10.1007/s12228-017-9513-1">https://doi.org/10.1007/s12228-017-9513-1</a></li><br>
          <li> Arellano-Rivas A., M.A. Munguía-Rosas, <b>J.A. De-Nova</b>, S. Montiel. 2017. Effects of Spatial Patch Characteristics and Landscape Context on Plant Phylogenetic Diversity in a Naturally Fragmented. Tropical Conservation Science 10: 1-11. <a href="https://doi.org/10.1177/1940082917717050">https://doi.org/10.1177/1940082917717050</a></li><br>
          <li> Bravo-Bolaños O., A Sánchez-González, <b>J.A. De-Nova</b>, N.P. Pavón Hernández. 2016. Composición y estructura arbórea y arbustiva de la vegetación de la zona costera de Bahía de Banderas, Nayarit, México. Botanical Sciences 94: 1-21.</li><br>
          <li> Durán-Fernández A., J.R. Aguirre-Rivera, J. García-Pérez, S. Levy-Tacher, <b>J.A. De Nova</b>. 2016. Inventario florístico de la comunidad lacandona de Nahá, Chiapas, México. Botanical Sciences 94: 157-184.</li><br>
          <li> Ramírez-Tobías H.M., R. Niño-Vázquez, J.R. Aguirre-Rivera, J. Flores, <b>J.A. De-Nova</b>, R. Jarquin-Gálvez. 2016. Seed viability and effect of temperature on germination of <em>Agave angustifolia</em> subsp. tequilana and A. mapisaga; two useful Agave species. Genetic Resources and Crop Evolution 63: 881-888.</li><br>
        </ul>

        <p><strong>Proyectos</strong></p>
        <p></p>
        <ul class="vineta">
          <li> Inventario multitaxonómico: “PN El Potosí, RB Sierra del Abra Tanchipa (San Luis Potosí). CONABIO FB1829/PJ029/17. (Vigente).</li><br>
          <li> Potencial evolutivo y diversidad filogenética de comunidades vegetales de la Sierra Madre Oriental. Ciencia Básica 243454, CONACYT, México. (Vigente).</li><br>
          <li> Inventario florístico del relicto de bosque de niebla de la Región Prioritaria para la Conservación Xilitla, San Luis Potosí. PROCODES CONANP-SEMARNAT. (Concluido).</li><br>
          <li> Estado de conservación de la vegetación natural de la Reserva de la Biosfera Sierra del Abra Tanchipa, San Luis Potosí. PROCODES CONANP-SEMARNAT. (Concluido).</li><br>
          <li> Demografía y genética de dos especies amenazadas de la flora del estado de San Luis Potosí́. PROMEP 2014, México. (Concluido).</li><br>
          <li> El endemismo en la flora de San Luis Potosí. FAI, UASLP, México. (Concluido).</li><br>
          <li> Inventario de la flora de la Reserva de la Biosfera de la Sierra del Abra Tanchipa y sus usos potenciales. PROCODES CONANP-SEMARNAT. (Concluido).</li>
        </ul>

      </div>
    </div>
  </div>
</div>

@endsection
