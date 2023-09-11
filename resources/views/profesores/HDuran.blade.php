@extends('profesores.templates.profesor')

@section('name')
Dr. Héctor Martín Durán García
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/HectorMartinDuranGarcia.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
  <h5><strong>Instituto de Investigación de Zonas Desérticas.</strong></h5>
  <h5><strong>SNI nivel I.</strong></h5>
  <br>
  <p>
      Altair No. 200, Col. del Llano<br>
      C.P. 78377, San Luis Potosí, SLP. México <br><br>
      Tel.: +52 (444) 832-1000 ext. 9416<br>
      <a href="mailto:hduran@uaslp.mx" style="color:rgb(0, 178, 227)">hduran@uaslp.mx</a><br><br>
  </p>

  <div class="enlacesprof">
      <a target="_blank" href="https://uaslpedu-my.sharepoint.com/personal/difusion_iizd_uaslp_mx/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fdifusion%5Fiizd%5Fuaslp%5Fmx%2FDocuments%2FFICHAS%20PERSONALES%2F2022%2FHMDG%2Epdf&parent=%2Fpersonal%2Fdifusion%5Fiizd%5Fuaslp%5Fmx%2FDocuments%2FFICHAS%20PERSONALES%2F2022&ga=1">Webpage</a>
      <a target="_blank" href="{{asset('storage/CV/Duran_Garcia_HectorMartin.pdf')}}"><i>Curriculum vitae</i></a>
      <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/3iwAAA%3d%3d">Directorio de Investigadores</a>
      <a target="_blank" href="https://orcid.org/0000-0003-0285-4053"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
      <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=55989650500"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
          <li>Tipos de energía </li>
        </ul>
        <p></p>
        <li><strong>LGAC</strong></li>
        <ul class="vineta">
          <li>Sistemas de aprovechamiento de recursos bióticos </li>
          <li>Energías, tecnologías tradicionales y diseño mecánico </li>
        </ul>
        <p></p>
        <li><strong>Dirección de Tesis</strong></li>
        <p></p>
        <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em></p>
        <ul class="vineta">
            <li>Gey Manja. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4032/MCA1MOL01401.pdf?sequence=3&isAllowed=y">The introduction of Moringa <em>(Moringa oleifera)</em> as a food commodity: a case study on the value chain from Omepete Island, Nicaragua</a>.</li>
        </ul>
        <p></p>
        <p><em>Maestría en Ciencias Ambientales</em></p>
        <ul class="vineta">
            <li>Corral Jara Jesús Ángel. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3985/MCA1CAL01501.pdf?sequence=3&isAllowed=y">Cálculo de la energía eléctrica generada en un gimnasio</a>. (Co-dirección)</li>
            <li>Martínez Moreno Carolina. 2020. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/7611/TesisM.PMPCA.2020.Analisis.Martinez.pdf?sequence=1&isAllowed=y">Análisis y definición de elementos de innovación para la mejora de un sistema de gestión ambiental de una empresa metal-mecánica</a>. (Co-dirección)</li>
        </ul>
        <p></p>
        <p><em>Doctorado en Ciencias Ambientales</em></p>
         <ul class="vineta">
            <li>Guadiana Alvarado Zoe Arturo. 2020. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7615/TesisD.PMPCA.2020.Sustentabilidad.Guadiana.pdf?sequence=1&isAllowed=y">Sustentabilidad de la agricultura familiar en regiones áridas y semiáridas</a></li>    
          </ul>
        </ol>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <strong> Publicaciones</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <p><strong>Artículos de investigación</strong></p>
        <p></p>
        <ul class="vineta">
          <li>López-Díaz, N.L; <b>Durán-García, H. M</b>; Álvarez-Fuentes, G; Ávila-Galarza, A; Pulido-Delgado, J.L; Barajas-Beltrán, M. del S. Cuantificación del biogás generado en tres sitios de disposición final del estado de San Luis Potosí, México. Revista Internacional de Investigación e Innovación Tecnológica. Vol. 11, No. 61. 2023 | Journal article</li><br>
          <li>Nancy Lorena Pérez Ramos; Rodolfo Cisneros Almazán; <b>Héctor Martín Durán García</b>. Revisión de la ocurrencia de inundaciones en la ciudad de San Luis Potosí, S.L.P. en el periodo 2014-2021. DECUMANUS. Vol. 10, No. 10. 2023 | Journal article. DOI: <a href="https://doi.org/10.20983/decumanus.2023.1.2" target="_blank">https://doi.org/10.20983/decumanus.2023.1.2</a></li><br>
          <li>Aguirre R., J. R.; H. Charcas S.; <b>H.M. Durán G.</b> 2016.  Green corn ear productivity in Rioverde, SLP, Mexico. Revista Mexicana de Ciencias Agrícolas. 7(7): 1563-1573.</li><br>
          <li><b>Durán G., H.M.</b>; O. Guarneros; C. Jiménez; E. Rossel; J. Pulido. 2016. Structural design of a mechanical arm for harvest of cactus pear type Alfajayucan. Journal of Applied Research and Technology. 14:140-147.</li><br>
          <li>Romero M., R.; P. Lara V.; F. Oviedo T.; <b>H.M. Durán G.</b>; F.J. Pérez; A.J. Pacheco V. 2016. Use of artificial neural networks for prediction of the convective heat transfer coefficient in evaporative mini-tubes. Ingeniería, Investigación y Tecnología. 17(1): 23-34.</li><br>
          <li>Ortíz L., H.; D. Rossel K.; <b>H.M. Durán G.</b>; L. González M.; A. Amante O. 2017. Calculating energy balance for higuerilla (Ricinus communis L.) from field productive stages to energy value for whole plant constituents. Nova Scientia. 9(1):43-54.</li><br>
          <li><b>Durán G., H.M.</b>; J.L. Pulido; L. Vladimirovna; C. Michel. 2018. Estudio técnico de la molienda tradicional en la producción de mezcal artesanal. Temas de ciencia y tecnología. 22(66): 35-39.</li><br>
          <li>Rossel K., D.; H. Ortiz L.; A. Amante O.; <b>H.M. Durán G.</b>; L.A. López M. 2018. Características físicas y químicas de la semilla de calabaza para mecanización y procesamiento. Nova Scientia. No. 21 Vol. 10(2): 61-77.</li><br>
          <li>Vasilevich K., Y.; L. Vladimirovna, K.; J.L. Pulido, D.;<b> H.M. Durán, G.</b> 2018. Aplicación del esquema del hilo flexible para el cálculo de entrepisis con ausencia de columna conectados con marcos. Entreciencias. 6(17): 9-16.</li><br>
          <li><b>Durán G., H. M.</b>; E.J. González; E. D. Roosel; H. Ortíz. 2019. Propiedades físico – mecánicas de tres especies de nopal de alto consumo en México. Acta Universitaria. Vol. 29 (1).15-19.</li><br>
        </ul>
        <p><strong>Libros</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Rossel K., D.; H. Ortiz L.; <b>H.M. Durán G.</b> 2016. Técnicas de procesos agrícolas II: Dosificar, mezclar, cribar.  Colegio de Postgraduados. San Luis Potosí, SLP. México. 285p.</li><br>
          <li>Rossel K., D.; H. Ortiz L.; E.J. González G.; <b>H.M. Durán G.</b> 2017. Técnicas de procesos agrícolas III: Comprimir, limpiar, desinfectar, almacenar. Colegio de Postgraduados. San Luis Potosí, SLP. México. 285p.</li>
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
                <li>En el año 2021 se impartió el taller ¿Cómo nace una sandía? a los alumnos del jardín de niños “Arco Iris” y al jardín de niños “Mariano Matamoros”, del municipio de Charcas, S.L.P. </li><br>
                <li>En el año 2022, se realizó un taller sobre el tema: “Vida Saludable” a padres de familia del jardín de niños “Pastorcito” en el municipio de Charcas, S.L.P.</li>
               </ul>
            </div>
          </div>
        </div>
      </div> <br><br><br>
    </div>
  </div>
</div>

@endsection
