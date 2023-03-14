
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. VALENTE VÁZQUEZ SOLÍS</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Valente_Vazquez_Solis.png')}}" alt="">
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
            Teléfono: +52 (444) 832-1000 Ext. 9218<br>
            <a href="mailto:vazquezsv@uaslp.mx" style="color:rgb(0, 178, 227)">vazquezsv@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="https://sociales.uaslp.mx/Paginas/Investigacion/3546#gsc.tab=0">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Vazquez_Solis_Valente.pdf')}}"><i>Curriculum Vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/mz8AAA==">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-8421-7201"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=26665082600"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Medioambiente y reducción del riesgo de desastres (ECO-DRR)</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Estudios multidisciplinarios de los desastres</li>
                   <li>Planeación y ordenamiento territorial y ambiental</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Navarro Gamboa Miguel. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3693/MCA1NGM201301.pdf?sequence=3&isAllowed=y" target="_blank">Community participation in the alternative tourism center Ecoturixtlán, municipality of Ixtlán de Juárez, Oaxaca Mexico.</a></li>
                  <li>Moreno Freydig Hugo César. 2016. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4672" target="_blank">Design of non-motorized mobility plan for warm climate cities-case: Hermosillo, Sonora, Mexico.</a></li>
                  <li>Suárez Flores Nathalie Alejandra. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5735/MCA1SFN201901.pdf?sequence=1&isAllowed=y" target="_blank"> Tourism carrying capacity as an instrument for local sustainable development in Peña de Bernal, Querétaro. </a></li>
                  <li>Chasi Tinoco Pedro Sebastián. 2020. <a href="#" target="_blank">The touristic potential in Real de Catorce, Altiplano area of San Luis Potosi by using sustainable indicators</a></li>
                  <li>López Siguenza Luis Felipe. 2021. <a href="#" target="_blank">Tourism carrying capacity assessment for the sustainable management of the protected area "Mario Ballena" National Park, Costa Rica</a> </li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Soto Torres María de Lourdes. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4334" target="_blank">Condiciones ambientales en el ejido San Francisco, municipio Zaragoza, San Luis Potosí, para la incorporación de proyectos asociados al turismo alternativo.</a> </li>
                  <li>Pérez Silva Sandy Ivonne. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5733/MCA1PSS201901.pdf?sequence=1&isAllowed=y" target="_blank">Capacidad de carga turística como instrumento para la gestión sustentable en el Cerro de la Bufa, Municipio de Zacatecas. </a></li>
                  <li>García García Ana Mónica de Jhesú. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5730/MCA1GGA201901.pdf?sequence=1&isAllowed=y" target="_blank">Vulnerabilidad de los sitios turísticos en la región Huasteca, San Luis Potosí, como resultado de la variabilidad climática.</a></li>
                  <li>Vera González Vanessa. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5736/MCA1VGV201901.pdf?sequence=1&isAllowed=y" target="_blank">Propuesta de gestión turística sustentable para la ruta del mezcal en la región Altiplano de San Luis Potosí.</a></li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Blanco López Paloma. 2015. <a href="#" target="_blank">Planificación del turismo sustentable en la zona Altiplano de San Luis Potosí. Una propuesta metodológica.</a> (Co-Dirección)</li>
                </p>
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
                <li><b>Vázquez, V.</b> (2022) Impacto espacial de las inundaciones súbitas en la resiliencia turística de Matehuala, San Luis Potosí, México. Cuadernos de Turismo. Universidad de Murcia, España. ISSN: 1139-7861, e ISSN: 1989-4635. En prensa.</li><br>
                <li>Hernández, C.; Ávila, A.; Aguilar, M.; <b>Vázquez, V.</b>. “Análisis espacial de las dinámicas de movilidad en la Zona Metropolitana de San Luis Potosí”, Estudios Demográficos y urbanos”. El Colegio de México, México. ISSN impreso: 0186-7210, ISSN electrónico: 2448-6515. Aceptado para publicación, vol. 38, num. 2. (113), mayo-agosto de 2023.</li><br>
                <li>García, A.; <b>Vázquez, V.</b>; Palacio, A.G. (2022). “Indicadores para evaluar la adaptación al cambio climático a través del ecoturismo”. Ayana. Instituto de Investigaciones en Turismo. Facultad de Ciencias Económicas. Universidad Nacional La Plata, Argentina, ISSN 2718-6717, año 2, vol. 3, no. 1. pp 1-19. <a href="https://revistas.unlp.edu.ar/ayana/article/view/14191" target="_blank"> DOI: <a href="https://doi.org/10.24215/27186717e030" target="_blank">https://doi.org/10.24215/27186717e030</a></li><br>
                <li>Cabrera, R.; Palacio, A.; <b>Vázquez, V.</b> (2022). “La mercantilización del territorio en el municipio de Huamantla, Tlaxcala, México”. Ayana. Instituto de Investigaciones en Turismo. Facultad de Ciencias Económicas. Universidad Nacional La Plata, Argentina, ISSN 2718-6717, año 2, vol. 2, no. 2. Turismo, gestión e impactos sociales, pp. 1-17. DOI: <a href="https://doi.org/10.24215/27186717e022" target="_blank">https://doi.org/10.24215/27186717e022</a></li><br>
                <li>García, A.; <b>Vázquez, V.</b>. (2022). “Vulnerabilidad turística en sitios de la región Huasteca, San Luis Potosí, México, como resultado de la variabilidad climática”. Revista de Geografía Norte Grande, Pontificia Universidad Católica de Chile. Instituto de Geografía, Santiago de Chile. ISSN 0718-3402, no 83. pp. 331-352. <a href="https://revistanortegrande.uc.cl/index.php/RGNG/article/view/21557/45091" target="_blank">https://revistanortegrande.uc.cl/index.php/RGNG/article/view/21557/45091</a></li><br>
                <li>Rodríguez, J.; <b>Vázquez, V.</b>; Costero, C.. (2021) “Proyectos productivos como vía de empoderamiento de las mujeres indígenas en el desarrollo comunitario en San Pedro La Laguna, Sololá, Guatemala”. Revista de El Colegio de San Luis. El Colegio de San Luis A.C., San Luis Potosí, ISSN e: 2007-8846., Año 11, 22. Enero-diciembre de 2021. pp. 1-34 <a href="https://revista.colsan.edu.mx/index.php/COLSAN/article/view/1333" target="_blank">https://revista.colsan.edu.mx/index.php/COLSAN/article/view/1333</a></li><br>
                <li>Ortíz, M.; <b>Vázquez, V.</b> (2021) “Inventario de atractivos naturales del estado de San Luis Potosí, México: un instrumento de gestión territorial del turismo”. Investigaciones turísticas. Revista científica del Instituto Universitario de Investigaciones Turísticas, IUIT, Universidad de Alicante, España, No. 21, ISSN: 2174-5609. pp. 305-327. DOI: <a href="https://doi.org/10.14198/INTURI2021.21.14" target="_blank">https://doi.org/10.14198/INTURI2021.21.14</a></li><br>
                <li>Apodaca, C.; Juárez, P.; Ramírez, B.; Díaz, R.; Rodríguez, J; <b>Vázquez, V.</b> (2020) “La alimentación familiar de pequeños productores de café y variabilidad climática en Huehuetla, Puebla, México”. Agricultura, Sociedad y Desarrollo. Colegio de Posgraduados, ISSN:1870-5472, ISSN: 2594-0244, Vol. 17, No. 2, pp. 375-395, Texcoco, México. <a href="https://dialnet.unirioja.es/servlet/articulo?codigo=7556635" target="_blank">https://dialnet.unirioja.es/servlet/articulo?codigo=7556635</a></li><br>
                <li>Hernández, M.; <b>Vázquez, V.</b>; Palacio, A.G. (2019) “Expresión territorial de la resiliencia turística ante la ocurrencia de eventos hidrometeorológicos en Los Cabos, Baja California Sur, México”. Estudios y perspectivas en turismo. Centro de Investigaciones y Estudios Turísticos. CIET., ISSN 1851-173, vol. 28, pp. 486-506 Buenos Aires, Argentina. <a href="http://www.estudiosenturismo.com.ar/PDF/V28/N02/v28n2a13.pdf" target="_blank">http://www.estudiosenturismo.com.ar/PDF/V28/N02/v28n2a13.pdf</a></li><br>
                <li>Navarro, M.; <b>Vázquez, V.</b>; van´t Hooft, A. y Reyes, A. (2019). “Participación comunitaria y turismo alternativo en zonas indígenas en el contexto mexicano: cuatro estudios de caso”. El Periplo Sustentable. Facultad de Turismo y Gastronomía. Universidad Autónoma del Estado de México. E-ISSN: 1870-9036. No. 36. Enero/junio de 2019. Pp 7-33. <a href="https://rperiplo.uaemex.mx/article/view/9081" target="_blank">https://rperiplo.uaemex.mx/article/view/9081</a></li><br>
                <li>Conde, T.; <b>Vázquez, V.</b>; Rostagnol, S.; van’t Hooft, A. (2018). “Conciliación de cuidados y actividades domésticas en parejas de doble carrera en Montevideo, Uruguay”. Entreciencias. Diálogo de la sociedad del conocimiento. UNAM, México. ISSN 2007 – 8064. No. 6 (18). Diciembre de 2018 – Marzo de 2019. pp. 55-71. desde <a href="https://revistas.unam.mx/index.php/entreciencias/article/view/63363" target="_blank">https://revistas.unam.mx/index.php/entreciencias/article/view/63363</a> DOI: <a href="http://dx.doi.org/10.22201/enesl.20078064e.2018.18.63363" target="_blank">http://dx.doi.org/10.22201/enesl.20078064e.2018.18.63363</a></li><br>
                <li>Vázquez, G.; <b>Vázquez, V.</b> (2017). “Evaluación de recursos naturales y culturales para la creación de un corredor turístico en el Altiplano de San Luis Potosí, México. Revista Investigaciones Geográficas. Boletín del Instituto de Geografía, UNAM, México. ISSN 0188-4611. No. 94, Diciembre de 2017, pp. 1-15; ISSN (digital): 2448-7279. <a href="http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/56575" target="_blank">http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/56575</a> DOI: <a href="http://dx.doi.org/10.14350/rig.56575" target="_blank">http://dx.doi.org/10.14350/rig.56575</a></li><br>
                <li>Ortíz, M.; <b>Vázquez, V.</b> (2015). “Turismo y comunidades indígenas. Apuntes para una alternativa de desarrollo sustentable en las Cuevas de Mantetzulel, San Luis Potosí, México”. International Journal of Scientific Management and Tourism. Asociación Management & Tourism, Córdoba, España, Vol. 4, pp. 125-139. ISSN: 2386-8570 (Versión online) ISSN: 2444-0299 (Versión Impresa). <a href="https://dialnet.unirioja.es/servlet/articulo?codigo=5665974" target="_blank">https://dialnet.unirioja.es/servlet/articulo?codigo=5665974</a></li><br>
                <li>Blanco, P.; <b>Vázquez, V.</b>; Reyes, J.A.; Guzmán, M. (2015). “Inventario de recursos turísticos como base para la planificación turística sostenible en la zona Altiplano de San Luis Potosí, México”. Cuadernos de Turismo. Universidad de Murcia, España. No 35, pp. 17-41. ISSN: 1139-7861, e ISSN: 1989-4635. <a href="https://revistas.um.es/turismo/article/view/221491/172911" target="_blank">http://revistas.um.es/turismo/article/view/221491/172911</a> DOI: <a href="https://doi.org/10.6018/turismo.35.221491" target="_blank">https://doi.org/10.6018/turismo.35.221491</a></li><br>
                <li>Villagómez, A.; Márquez, L.; <b>Vázquez, V.</b>; Reyes, J.A. (2014). “Conflictos por el uso y percepción diferencial del desarrollo en el municipio de Catorce, y Wirikuta”. Alter. Enfoques críticos, Objetivos internacionales de Desarrollo. Universidad del Centro de México (UCEM), Año V, No. 10. Julio-diciembre, pp. 43-64. ISSN 2007-168X. <a href="http://static1.squarespace.com/static/552c00efe4b0cdec4ea42d9f/t/5547aad7e4b0a1a9aa043c19/1430760151382/ALTER+10+-+05.pdf" target="_blank"> http://static1.squarespace.com/static/552c00efe4b0cdec4ea42d9f/t/5547aad7e4b0a1a9aa043c19/1430760151382/ALTER+10+-+05.pdf</a></li><br>
                <li><b>Vázquez, V.</b>; Palacio, A.G.; López, L.M. (2013). “Capacidad de carga turística en el volcán Joya Honda, San Luis Potosí: una perspectiva física y perceptiva”. Análisis turístico. Universidad de Alicante, España. AECIT –Asociación Española de Expertos Científicos en Turismo-, nº 16, 2º semestre 2013, pp. 71-80. ISSN impresión: 1885-2564; ISSN electrónico: 2254-0644. <a href="https://www.ucm.es/data/cont/media/www/pag-51898/2013_CCT%20volc%C3%A1n%20M%C3%A9xico.pdf" target="_blank">https://www.ucm.es/data/cont/media/www/pag-51898/2013_CCT%20volc%C3%A1n%20M%C3%A9xico.pdf</a></li><br>
                <li>Rivera, J.; <b>Vázquez, V.</b>; Reyes, H.; Reyes, O.; Nicolás, M. (2012). “Potencialidades y desafíos del turismo y ecoturismo en el estado de San Luis Potosí: retos y expectativas para lograr el desarrollo regional”. Pasos. Revista de turismo y patrimonio cultural. Universidad de La Laguna, Tenerife. España. Vol 10, No. 3. pp. 289-301. ISSN 1695-7121. <a href="http://www.pasosonline.org/Publicados/10312/PS0312_06.pdf" target="_blank">http://www.pasosonline.org/Publicados/10312/PS0312_06.pdf</a></li><br>
                <li>Reyes, O.; <b>Vázquez, V.</b>; Reyes, H.; Nicolás, M.; Rivera, J. (2012). “Potencial turístico de la región Huasteca del estado de San Luis Potosí, México. Economía, sociedad y territorio. El Colegio Mexiquense A. C., Vol XII, No 38. Enero-abril, 249-275. ISSN Impreso: 1405-8421, ISSN Digital: 2448-6183. <a href="http://www.redalyc.org/pdf/111/11122403009.pdf" target="_blank">http://www.redalyc.org/pdf/111/11122403009.pdf</a> DOI: <a href="http://dx.doi.org/10.22136/est00201292" target="_blank">http://dx.doi.org/10.22136/est00201292</a></li><br>
                <li><b>Vázquez, V.</b>; Aguilar, M. (2011). “Organización territorial del turismo alternativo en la zona Media del estado de San Luis Potosí, México: retos y perspectivas”. Revista Geográfica de América Central. Número especial EGAL (Encuentro de Geógrafos de América Latina), II Semestre de 2011. pp. 1 – 15. Vol 2, No .47E, ISSN impreso: 1011‐484X; ISSN digital: 2215-2563. <a href="http://www.revistas.una.ac.cr/index.php/geografica/article/view/1888" target="_blank">http://www.revistas.una.ac.cr/index.php/geografica/article/view/1888</a></li><br>
                <li><b>Vázquez, V.</b> (2011). “Nuevas regiones económicas del estado de San Luis Potosí: una expresión territorial de su integración funcional para la competitividad económica”. Investigaciones Geográficas. Boletín del Instituto de Geografía, UNAM, México, Núm. 75, 2011, pp. 103-117. ISSN 0188-4611. <a href="http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/29828">http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/29828</a></li><br>
                <li>Delgado, E.; <b>Vázquez, V.</b> (2010). “Paisaje y pintura en tres mapas del corpus de las relaciones geográficas 1579-1586”. Diálogos. Revista electrónica de Historia. Escuela de Historia. Universidad de Costa Rica. Vol. 11, No 1, Septiembre de 2010 – Febrero de 2011. pp 89-114,  ISSN: 1409-469X. <a href="https://www.scielo.sa.cr/scielo.php?script=sci_arttext&pid=S1409-469X2010000200005">https://www.scielo.sa.cr/scielo.php?script=sci_arttext&pid=S1409-469X2010000200005</a></li><br>
                <li><b>Vázquez, V.</b> y Delgado, E. (2010). “Dinámica temporal y regional en la conformación del estado de Guerrero, México”. Geotrópico. Universidad Montería, Colombia. No. 6: pp. 1-18. ISSN: 1692-0791. <a href="http://www.geotropico.org/NS_6_Vasquez.pdf" target="_blank">http://www.geotropico.org/NS_6_Vasquez.pdf</a></li><br>
                <li><b>Vázquez, V.</b>; Reyes, O.; Rivera, J.; Nicolás, M.; Reyes, H. (2010). “Evaluación de los atractivos naturales para el desarrollo del ecoturismo en la región Huasteca de San Luis Potosí, México”. Cuadernos de Turismo. Universidad de Murcia, España. No 25, pp. 229-245, ISSN digital: 1139-7861. ISSN impreso: 1989-4635 <a href="http://revistas.um.es/turismo/article/view/109651/104231" target="_blank">http://revistas.um.es/turismo/article/view/109651/104231</a></li><br>
                <li>Reyes, O.; <b>Vázquez, V.</b>; Rivera, J. y Aguilar, M. (2009). “Evaluación de la inversión pública en materia de cultura en el estado de San Luis Potosí entre 2004 y 2006: un análisis a través de la cartografía. Cuadernos Geográficos de la Universidad de Granada, no. 42, vol 1, pp. 151-170. España. ISSN 0210-5462; E-ISSN 2340-0129. <a href="http://www.ugr.es/~cuadgeo/docs/articulos/044/044-007.pdf">http://www.ugr.es/~cuadgeo/docs/articulos/044/044-007.pdf</a></li><br>
                <li>Cuevas, A.; <b>Vázquez, V.</b> (2009). “Migración internacional, remesas y cambios en la estructura territorial de la economía en el municipio de Cerritos, San Luis Potosí”. Revista de Geografía Norte Grande, Pontificia Universidad Católica de Chile. Santiago. No. 42. pp. 5-20. ISSN Impreso: 0379-8682. <a href="http://www.redalyc.org/articulo.oa?id=30011631001" target="_blank">http://www.redalyc.org/articulo.oa?id=30011631001</a></li><br>
                <li><b>Vázquez, V.</b> y Benito, P. (2009). “Turismo y territorio en México: alternativas en el Altiplano Potosino”. Biblio 3W, Revista Bibliográfica de Geografía y Ciencias Sociales, Universidad de Barcelona, Vol. XIV, nº 813, 25 de febrero de 2009. ISSN 1138-9796. <a href="http://www.ub.es/geocrit/b3w-813.htm" target="_blank">http://www.ub.es/geocrit/b3w-813.htm</a></li><br>
                <li><b>Vázquez, V.</b> y Delgado, E. (2008). “Bahías de Huatulco: un acercamiento a la conformación histórica de un espacio turístico global”. Revista Investigación Geográfica. Departamento de Geografía. Facultad de Ciencias Humanas. Universidad de Nariño, Colombia. Año 10, No. 6. pp. 117-138. ISSN 0124-5104.</li><br>
                <li><b>Vázquez, V.</b> y O. Reyes (2005). “La estructura territorial de la economía turística en el litoral del México” Revista Mexicana del Caribe. Chetumal, Universidad de Quintana Roo, CIESAS, Instituto Mora. Año X, no. 19. pp. 181-206. ISSN 1405-2962.</li><br>
                <li><b>Vázquez, V.</b> (2004). “El alcance económico-regional de la industria alimentaria en la ciudad de San Luis Potosí: el caso de la embotelladora Coca Cola de Tangamanga”. Vetas. El Colegio de San Luis, San Luis Potosí, México, Año VI, no. 17. Agosto de 2004, pp.28-47. ISSN 1665-899X. <a href="http://colsan.repositorioinstitucional.mx/jspui/handle/1013/1187" target="_blank">http://colsan.repositorioinstitucional.mx/jspui/handle/1013/1187</a></li><br>
                <li><b>Vázquez, V.</b> y E. Propin (2004). “Las relaciones regionales de la economía turística en Bahías de Huatulco, Oaxaca”. Investigaciones geográficas, 55. Instituto de Geografía, UNAM, México. pp. 143-163. ISSN 0188-4611. <a href="http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/30116" target="_blank">http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/30116</a> DOI: <a href="http://dx.doi.org/10.14350/rig.30116" target="_blank">http://dx.doi.org/10.14350/rig.30116</a></li><br>
                <li><b>Vázquez, V.</b> y E. Propin (2001). “Las diferencias regional – económicas del estado de Guerrero, México”. Investigaciones geográficas, 46. Instituto de Geografía, UNAM, México. pp. 131 – 147. ISSN 0188-4611. <a href="http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/59160" target="_blank">http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/59160</a> DOI: <a href="http://www.investigacionesgeograficas.unam.mx/index.php/rig/article/view/59160" target="_blank">http://dx.doi.org/10.14350/rig.59160</a></li><br>
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
              <p>Nombre del proyecto: “Modelo de geointeligencia territorial como instrumento de gestión turística en Áreas Naturales Protegidas de México”.<br>
                 Convocatoria Ciencia de Frontera, 2019. Consejo Nacional de Ciencia y Tecnología:<br>
                 Convenio: 1312446<br>
                 Monto: $ 3,143,640.50<br>
                 Vigencia: noviembre de 2020 – agosto de 2024</p>
            </div>
          </div>
        </div>
      </div><br><br><br>
    </div>
    </div>
</div>

@endsection