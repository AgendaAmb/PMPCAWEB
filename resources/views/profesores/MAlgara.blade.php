
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. MARCOS ALGARA SILLER</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Marcos_Algara_Siller.png')}}" alt="">
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
            Teléfono: +52 (444) 826-2330 ext. 6048 <br>
            <a href="mailto:marcos.algara@uaslp.mx" style="color:rgb(0, 178, 227)">marcos.algara@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://ciep.ing.uaslp.mx/agua/profesor.php?id=3132343537">Webpage</a>
            <a target="_blank" href="{{asset('storage/CV/Algara_Siller_Marcos.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/qTAAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-9070-9624"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57189049601"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Climatología Aplicada</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Climatología aplicada (Sequía, GEI, modelado)</li>
                  <li>Diseño bioclimático (Desarrollo de eco-tecnias y materiales)</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Espinosa Muñoz Salvador. 2014. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3872/MCA1DLC01401.pdf?sequence=3&isAllowed=y">Design of a low-cost acclimatization system for sustainable social housing in a temperate-dry climate in Mexico</a></li>
                  <li>Sánchez Martínez Daniela. 2015. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3849/MCA1ENV01501.pdf?sequence=3&isAllowed=y">Environmental product evaluation guideline towards sustainable consumption. A case study on compressed adobe block</a></li>
                  <li>Thanos Dimitrios. 2018. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4244">Towards sustainable mobility-as-a-service: a roadmap for San Luis Potosí, MX, using the MaaS readiness index</a></li>
                  <li>Cisneros Vidales Alicia Anahí. 2018. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/4536"> Building sustainable urban metabolism through resilience strategies in La Pila, San Luis Potosi, Mexico</a></li>
                  <li>De Castro Soares Raisa. 2020. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/7553">The contribution of decentralized Photovoltaic Systems to energy poverty alleviation in La Pila, SLP, Mexico</a></li>
                  <li>Fernández Reyes José Salvador. 2021. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/8070">Strategic assessment of an on-campus energy system: the university energy program of UASLP, Mx</a></li>
                  <li>Martínez Guzmán Verne Javier. 2021. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/7582/TesisM.PMPCA.2021.Proposal.Martinez.pdf?sequence=1&isAllowed=y">Proposal for a food security program: the urban agriculture guideline at the Autonomous University of San Luis Potosi</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Hernández Martínez Ilse Patricia. 2016. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/5723">Propuestas al reglamento de construcciones del Municipio de San Luis Potosí para transitar hacia una zona metropolitana sustentable</a></li>
                  <li>Arredondo García Erika Herminia. 2016. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4128/MCA1AGE201601.pdf?sequence=3&isAllowed=y">Costos ambientales por emisiones GEI en el marco normativo para la producción de caña de azúcar en la Huasteca Potosina</a></li>
                  <li>Torres Martínez Guillermo. 2021. Análisis de los elementos de sostenibilidad en la política pública de México para una propuesta de programas de escuelas sostenibles</li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Flores Jiménez David Enrique. 2016. <a target="_blank" href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3955/DCA1EEM01601.pdf?sequence=3&isAllowed=y">Estimación de las emisiones y modelado del transporte de metano en la atmósfera generado por la quema de caña de azúcar en México. (Co-Dirección)</a></li>
                  <li>Buendía Oliva Mariana. 2020. <a target="_blank" href="https://ninive.uaslp.mx/xmlui/handle/i/5681"> Diseño y evaluación del Club de Educación Ambiental y Sustentabilidad como estrategia para la aprobación de ecotecnicas en la escuela Francisco González Bocanegra de la delegación la Pila San Luis Potosí, SLP</a></li>
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
              <strong>Artículos de investigación</strong><br><br>
              <ul class="vineta">
                <li>Hernández-DeTorres, J., Ávila-Montoya, C., Lastras-Martínez, L. F., Lastras-Martínez, A., Flores-Jiménez, D. E., Cárdenas-Tristán, A. y <b>Algara-Siller, M.</b> 2023. Atmósfera. 36(2), 317-327. ISSN:2395-8812. <a href="https://doi.org/10.20937/ATM.53032" target="_blank">https://doi.org/10.20937/ATM.53032</a>. 17 enero 2023.</li><br>
                <li>Rodríguez-Espejel, K., Pérez-Bueno, J. J., Magdaleno-López, C., Mendoza-López, M. L., <b>Algara-Siller, M.</b>, Reyes-Araiza, J. L., Manzano-Ramírez, A. y Morales-Hernández, J. 2022. Geopolymeric composite materials made of sol-gel silica and agroindustrial waste of rice, barley, and coffee husks with wood-like finishing. Sustainability. 14(24). ISSN:16689. <a href="https://doi.org/10.3390/su142416689" target="_blank">https://doi.org/10.3390/su142416689</a>. 13 diciembre 2022.</li><br>
                <li>Morales Jasso, G., Benítez Ramírez, D. M., Romero Contreras, S., Diédhiou, I., Velázquez Delgado, G., Castillo López, G., Mendoza Pérez, K., <b>Algara Siller, M.</b> y Olivares Iliana, V. 2022. Multi, inter y transdisciplina, aportes para una mejor interpretación de sus significados. Nova Scientia. 14(29), 1-25. ISSN 2007-0705. <a href="https://novascientia.lasallebajio.edu.mx/ojs/index.php/Nova/article/view/3066" target="_blank">https://doi.org/10.21640/ns.v14i29.3066</a>. 25 enero 2022.</li><br>
                <li>Rosa A. Martínez Esquivel, Mariana García de la Torre, José S. Fernández Reyes, <b>Marcos Algara Siller</b>, Claudia Corpus Espinosa, Denisse L. González Villacis, Nancy L. Pérez Ramos, Verne J. Martínez Guzmán, Gerardo Morales Jasso, Ximena Samaniego (2021). Propuesta metodológica para la colaboración multidisciplinaria. El caso de los barrios urbanos marginados en el Programa Multidisciplinario de Posgrado en Ciencias Ambientales. Ciencias Sociales, Revista Multidisciplinaria Volumen 3, Número 2. Segundo Semestre 2021. ISSN 2683-6777.</li><br>
                <li>Guadiana-Alvarado, Z. A., Durán-García, H., Rossel-Kipping, E. D., <b>Algara-Siller, M.</b> y Cisneros-Almazán, R. 2021. Eficiencia energética en sistemas agrícolas familiares bajo condiciones de clima controlado. Interciencia 46(1):32-36. ISSN: 0378-1844. <a href="https://www.redalyc.org/journal/339/33965751005/html/" target="_blank">https://www.redalyc.org/journal/339/33965751005/html/</a></li><br>
                <li>Dávila-Ortiz, R., Velázquez-Zapata, J. A. y <b>Algara-Siller, M.</b> 2020. Variabilidad del impacto del cambio climático en el régimen hidrológico de dos cuencuas de la región Huasteca. Ingeniería, Investigación y Tecnología. 21(3):1-12. ISSN: 2594-0732. <a href="https://doi.org/10.22201/fi.25940732e.2020.21.3.021" target="_blank">https://doi.org/10.22201/fi.25940732e.2020.21.3.021</a>.</li><br>
                <li>Buendía-Oliva, M., <b>Algara-Siller, M.</b>, Cubillas-Tejeda, M. C. y Domínguez-Cortinas, G. 2019. La importancia del análisis del contexto en el diseño de un programa educativo basado en el uso de ecotecnias. Perfiles Educativos 41(166). ISSN: 2448-6167. DOI: <a href="http://servicioseditoriales.unam.mx/perfiles_ojs3308/index.php/perfiles/article/view/59019/52332" target="_blank">https://doi.org/10.22201/iisue.24486167e.2019.166</a>.</li><br>
                <li>Guadiana-Alvarado, Z. A., Durán-García, H., Rossel-Kipping, E. D., <b>Algara-Siller, M.</b> y Cisneros-Almazán, R. 2019. Semiautomatización de un invernadero de pequeña escala. Agroproductividad. 12(9):53-59. <a href="https://revista-agroproductividad.org/index.php/agroproductividad/article/view/1410" target="_blank">https://doi.org/10.32854/agrop.v12i9.1389</a>.</li><br>
                <li>Flores-Jiménez, D.E., Carbajal, N., <b>Algara-Siller, M.</b>, Aguilar-Rivera, N., Álvarez-Fuentes, G., Ávila-Galarza, A. y García, A.R. 2019. Atmospheric dispersión of methane emissions from sugarcane burning in Mexico. Environmental Pollution 250:922-933. <a href="https://doi.org/10.1016/j.envpol.2019.04.025" target="_blank">https://doi.org/10.1016/j.envpol.2019.04.025</a>. ISSN: 0269-7491.</li><br>
                <li>Juárez-Briones L.R., Aldama-Aguilera C., Hipótico-Cruz G., González-Montero R., Razo-Soto I.l y <b>Algara-Siller M.</b> 2018. Control de larvas de mosquitos con Bacillus thuringiensis var. Israelensis en aguas residuales tratadas. Entomología Mexicana. Sociedad Mexicana de Entomología. 5:174-180. Junio 2018. ISSN:2448-475X.</li><br>
                <li>Aguilar-Rivera, N, <b>Algara-Siller, M.</b>, Olvera-Vargas, L. A. and Michel-Cuello, Ch. 2018. Land Management in Mexican sugarcane crop fields. Land Use Policy. 78(2018)763-780. ISSN:0264-8377. DOI <a href="https://doi.org/10.1016/j.landusepol.2018.07.034" target="_blank">https://doi.org/10.1016/j.landusepol.2018.07.034</a>.</li><br>
                <li>Flores-Jiménez, D. E., <b>Algara-Siller, M.</b>, Aguilar-Rivera, N., Carbajal, N., Aldama-Aguilera, C., Ávila-Galarza, A. y Álvarez-Fuentes, G. 2016. Influence of sugarcane burning on carbon and nitrogen release under drought and evapotranspiration conditions in a Mexican sugarcane supply zone. Revista Internacional de Contaminación Ambiental. Aceptado para publicar en mayo 2016. 2(32). ISSN:0188-4999. Indizado ISI Web of Science Impacto: 0.177. CONACyT. <a href="https://www.revistascca.unam.mx/rica/index.php/rica/article/view/RICA.2016.32.02.04/46577" target="_blank">https://www.revistascca.unam.mx/rica/index.php/rica/article/view/RICA.2016.32.02.04/46577</a>. <a href="http://dx.doi.org/10.20937/RICA.2016.32.02.04" target="_blank">http://dx.doi.org/10.20937/RICA.2016.32.02.04</a></li><br>
                <li>Peralta-Rivero, C., Galindo-Mendoza, M. G., Contreras-Servín, C., <b>Algara-Siller, M.</b> y Mas-Caussel, J. F. 2016. Percepción local respecto a la valoración ambiental y pérdida de los recursos forestales en la región Huasteca de San Luis Potosí, México. Madera y Bosques. 22(1)71-93. ISSN: 1405-0471. México. <a href="https://myb.ojs.inecol.mx/index.php/myb/article/view/478" target="_blank">https://myb.ojs.inecol.mx/index.php/myb/article/view/478</a></li><br>
                <li>Hipólito-Cruz, G., Rodríguez-Tenorio, L., Aldama-Aguilera, C., <b>Algara-Siller, M.</b>, Calderón-Ezquerro, C., Flores-Jiménez, D. E. y González-Gómez, R. 2015. Monitoreo de Phakopsora spp. con trampas pasivas de esporas en San Luis Potosí. Revista Mexicana de Fitopatología. Vol. 33:122-123. suplemento 2015. ISSN:2007-8080. CONACyT. <a href="http://www.rmf.smf.org.mx/suplemento/Suplemento332015.html" target="_blank">http://www.rmf.smf.org.mx/suplemento/Suplemento332015.html</a>. Julio 2015. México.</li><br>
                <li>Guadiana Alvarado, Z.A., Cisneros Almazán, R., <b>Algara-Siller, M.</b>, Jiménez Castillo, D. I. y Medellín Milán P. 2015. Modelo universitario de capacitación de producción agrícola urbana: Unihuerto Urbano. Agrotecnia de Cuba. 39(2):52-60. ISSN:2079-3472. Cuba. <a href="https://www.grupoagricoladecuba.gag.cu/media/Agrotecnia/pdf/39_2015/No_2/54-62.pdf" target="_blank">https://www.grupoagricoladecuba.gag.cu/media/Agrotecnia/pdf/39_2015/No_2/54-62.pdf</a></li><br>
                <li>Aguilar-Rivera, N., <b>Algara-Siller, M.</b> y Olvera-Vargas, L.A. 2015. Gestión del agua como factor limitante de productividad cañera en México. Revista de Geografía Norte Grande. 60:135-152. ISSN: 0718-3402 (On-line). http://dx.doi.org/10.4067/S0718-34022015000100008. ISI Web of Knowledge. <a href="http://www.scielo.cl/scielo.php?script=sci_arttext&pid=S0718-34022015000100008&lng=en&nrm=iso&tlng=en" target="_blank">http://www.scielo.cl/scielo.php?script=sci_arttext&pid=S0718-34022015000100008&lng=en&nrm=iso&tlng=en</a>. Brasil.</li><br>
                <li>Carmelo Peralta-Rivero, Carlos Contreras Servín, M. Guadalupe Mendoza, <b>Marcos Algara Siller</b>, Jean François Mas Caussel. 2014. Deforestation Rates in the Mexican Huasteca Region (1976-2011). CienciAgro. 3(1):1-20. ISSN:2072-1404 (Printed) – 2077-317X (On line). <a href="http://www.revistasbolivianas.ciencia.bo/scielo.php?script=sci_arttext&pid=S2072-14042014000100001&lng=pt&nrm=iso&tlng=es" target="_blank">http://www.revistasbolivianas.ciencia.bo/scielo.php?script=sci_arttext&pid=S2072-14042014000100001&lng=pt&nrm=iso&tlng=es</a>. Bolivia.</li><br>
                <li>Peralta-Rivero, C., Contreras-Servín, C., Galindo-Mendoza, M. G., Mas Caussel, J. F. y <b>Algara-Siller, M.</b> 2014. Analysis of Land Use and Land Cover Changes and Evaluation of Natural Generation and Potential Restoration Areas in the Mexican Huasteca Region. Open Journal of Forestry. Scientific Research. 4(2)124:135. <a href="https://file.scirp.org/Html/5-1620137_43113.htm" target="_blank">http//dx.doi.org/10.4236/ojf.2014.42018</a>. ISSN: 2163-0437 (On line). ISSN: 2163-0429 (Impreso). Estados Unidos. <a href="http://www.scirp.org/Journal/PaperInformation.aspx?PaperID=43113" target="_blank">http://www.scirp.org/Journal/PaperInformation.aspx?PaperID=43113</a></li><br>
                <li><b>Algara-Siller, M.</b>, Cárdenas-Martínez, A. I., Arista-González, G. J. y Rodríguez-Hernández, J. A., 2012, Diseño de bloques de suelo estabilizado para uso urbano en San Luis Potosí, Academia Journals, 4(3)83-87. ISSN 1946-5351 online. <a href="https://www.academiajournals.com/publicaciones-celaya" target="_blank">https://www.academiajournals.com/publicaciones-celaya</a>.</li><br>
                <li><b>Algara-Siller, M.</b>, Contreras Servín, C., Galindo Mendoza, G. y Mejía Saavedra, J. J., 2009, Implicaciones territoriales del fenómeno de la sequía en la Huasteca Potosina, Espaciotiempo. Revista Latinoamericana de Ciencias Sociales y Humanidades, ISSN-2007-0608., Año 2, No. 4, otoño-invierno 2009, pp 56-67. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2721/ET4.pdf?sequence=2&isAllowed=y" target="_blank">https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/2721/ET4.pdf?sequence=2&isAllowed=y</a></li><br>
                <li>Argall, P. S., Sica, R. J., Bryant, C. R., <b>Algara-Siller, M.</b>, and Schijns, H., 2007, Calibration of the Purple Crow Lidar Vibrational Raman water-vapour mixing ratio and temperature measurements. Canadian Journal of Physics, ISSN 0008-4204, DOI <a href="https://cdnsciencepub.com/doi/abs/10.1139/p06-091" target="_blank">10.1139/p07-903</a>. Volume 85, Number 2, 1 February 2007, pp. 119-129(11). Número de citas: 2. Science Citation Index. Factor de impacto 0.880.</li>
              </ul><br>
              <strong>Artículos de Divulgación</strong><br><br>
              <ul class="vineta">
                <li><b>Algara-Siller, M.</b> 2016. Llamado celestial. Universitarios Potosinos. 12(196)37. ISSN:1870-1698. Febrero 2016.</li><br>
                <li><b>Algara Siller, M.</b> Columnista mensual de Universitarios Potosinos con la columna Desde la Azotea. Artículos mensuales publicados desde agosto 2013 (número 166) a la fecha. ISSN-1870-1698.</li><br>
                <li><b>Algara Siller, M.</b>, Jiménez Castillo, D. I. y Espericueta Carmona, L. C. 2014. Unihuerto Urbano, sembrar hoy para cosechar siempre. Universitarios Potosinos. 9(173). ISSN-1870-1698.</li><br>
                <li>Barrera Gutiérrez, C, Flores Jiménez, D. E. y <b>Algara Siller, M.</b> 2013. Gases de efecto invernadero por actividades agropecuarias en San Luis Potosí. Universitarios Potosinos. 9(170)11:15. ISSN-1870-1698.</li><br>
                <li><b>Algara Siller, M.</b>, Editorialista en temas científicos para el periódico Pulso de San Luis Potosí con 5 participaciones. 2009.</li><br>
                <li><b>Algara Siller, M.</b>, 2008, Cinco estaciones meteorológicas en la UASLP, Universidad Autónoma de San Luis Potosí, Universitarios Potosinos: Órgano Informativo y de Divulgación, Nueva Época, ISNN-1870-1698, Año 3, Número Diez, Febrero de 2008, pp. 14-17. </li><br>
                <li><b>Algara Siller, M.</b>, 2007, El empleo del lidar para medir la atmósfera, Universidad Autónoma de San Luis Potosí, Universitarios Potosinos: Órgano Informativo y de Divulgación, Nueva Época, ISNN-1870-1698, Año 3, Número Seis, Octubre de 2007, pp. 8-11.</li><br>
                <li><b>Algara Siller, M.</b>, 2007, A medir la atmósfera, Universidad Autónoma de San Luis Potosí, Universitarios Potosinos: Órgano Informativo y de Divulgación, Nueva Época, ISNN-1870-1698, Año 3, Número Dos, Junio de 2007, pp. 8-11.</li>
              </ul><br>
              <strong>Capítulos de libros</strong><br><br>
              <ul class="vineta">
                <li>Aguilar-Rivera, N., Olvera-Vargas, L. A., <b>Algara-Siller, M.</b> y Michel-Coello, Ch. 2018. Gestión de recursos ambientales, socioeconómicos y tecnológicos en la sostenibilidad de la agroindustria azucarera. En Sustentabilidad e innovación en la gestión fitosaniaria en caña de azúcar. Editado por Isabel Vásquez-López y Fernando Carlos Gómez-Merino. Biblioteca Básica de Agriciultura. Colegio de Posgraduados. 57-93. ISBN:978-607-715-374-0. Septiembre 2018.</li><br>
                <li>Flores-Jiménez, D. E., <b>Algara-Siller, M.</b>, Aguilar-Rivera, N., Álvarez-Fuentes, G., Ávila-Galarza, A. and Aldama-Aguilera, C. 2018. Competitive management of sugarcane waste and reduction of CO2 emissions from harvest burning in supply regions. En Sugarcane technology and research. InTech Open Publishers. ISBN:978-1-78923-150-2 print. DOI <a href="https://dx.doi.org/10.5772/intechopen.71531" target="_blank">https://dx.doi.org/10.5772/intechopen.71531</a>. Mayo 16, 2018. Indizado en Web of Science.</li><br>
                <li>Flores-Jiménez, D., <b>Algara-Siller, M.</b>, Aguilar-Rivera, N. y Aldama-Aguilera, C. 2017. Methane Emissions and Productivity Index in the Mexican Sugarcane Crop Fields. En Sugarcane Productions Systems, Uses and Economic Importance. Editado por Rachel Murphy. Nova Publishers New York. Indizado en Scopus. ISBN: 978-1-53610-938-2. Estados Unidos.</li><br>
                <li>Quintero-Ruiz, J., Contreras-Servin, C., Yáñez-Espinosa, L. y <b>Algara-Siller, M.</b> 2016. Problemática social y ambiental en la Huasteca Potosina en el marco del desarrollo económico regional. En Tópicos Ambientales y Conservación de Ecosistemas Naturales. Editado por Carmelo Peralta Rivero, Carlos Contreras Servín, Guadalupe Galindo Mendoza, Luis Armando Bernal Jácome. México. 118-129. ISBN: 987-607-9453-81-7.</li><br>
                <li>Olvera-Vargas L. A., C. Aldama-Aguilera, H. González-Hernández, <b>M. Algara-Siller</b>, 2010, Vigilancia de la cochinilla rosada del hibisco Maconellicoccus hirsutus (Green) en México, apoyada en mapas de riesgo. En Entomología Mexicana. Eds. Cruz M., S. G., Tello F., J., Mendoza E., A., Morales, M A. Sociedad Mexicana de Entomología A.C. Vol. 9. ISBN: 978-607-7533-61-0. Pp. 332-336.</li><br>
                <li><b>Algara Siller, M.</b>, 2011, Climatología aplicada a la vigilancia epidemiológica. En La vigilancia epidemiológica y fitosanitaria en México: un acercamiento metodológico. Eds. G. Galindo Mendoza, C. Contreras Servín y C. Aldama Aguilera. Editorial Universitaria Potosina. ISBN: 978-607-7856-40-5. Pp. 141-171. Capítulo IV. Pags 31. Pags libro 209.</li><br>
                <li><b>Algara Siller, M.</b>, 2011, Plataforma informática para la vigilancia epidemiológica  fitosanitaria en México. En La vigilancia epidemiológica y fitosanitaria en México: un acercamiento metodológico. Eds. G. Galindo Mendoza, C. Contreras Servín y C. Aldama Aguilera. Editorial Universitaria Potosina. ISBN: 978-607-7856-40-5. Pp. 191-209. Capítulo IV. Pags. 19. Pags. libro 209.</li><br>
                <li><b>Algara-Siller, M.</b> y Contreras-Servín, C., 2009, Drought and Climate Change on the Huasteca Region in the State of San Luis Potosi, Mexico, Environmental Engineering and Management, capítulo de libro editado por Theophanides, M. y Thephanides, T., Athens Institute for Education and Research. ISBN 978-960-6672-50-7, pp. 285-299.</li>
              </ul><br>
              <strong>Libros</strong><br><br>
              <ul class="vineta">
                <li>Van’t Hooft, A., editora, Environment and resources management in Latin America. Medio ambiente y gestión de los recursos naturales en América Latina, 2020, Editores: Alfaro de la Torre, C., <b>Algara-Siller, M.</b>, Cilia-López, V. G., Julio-Miranda, P. y Reyes-Agüero, A. Editado por Universidad Autónoma de San Luis Potosí y Technology Arts Sciences TH Köln. ISBN: 978-607-535-132-2.</li><br>
                <li><b>Algara Siller, M.</b>, 2012, Medición del impacto de la sequía en la Huasteca Potosina y su manejo. Editorial Académica Española. ISBN: 978-3-8473-6895-3. 156 páginas.</li>
              </ul><br>
              <strong>Informes técnicos</strong><br><br>
              <ul class="vineta">
                <li><b>Algara-Siller, M.</b>, Flores-Jiménez, D. E. y Barrera-Gutiérrez, C., 2013, “Inventario de emisiones a la atmósfera de metano (CH4) y óxido nitroso (N2O) generados por actividades agropecuarias en el estado de San Luis Potosí. Enviado a revisión al Instituto Nacional de Ecología y Cambio Climático. Aprobado INECC en Julio 2013.</li>
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
            <div class="accordion-body"><br>
              <ul class="vineta">
                <li>UNESCO-UASLP “De la comprensión a la planeación de la acción ODS4”. Diplomado mixto (Presencial y a distancia) para capacitar a los gobiernos de 5 paíes latinoamericanos en contenidos de ambiente y sostenibilidad. 2010.</li><br>
                <li>FAI-UASLP “Diseño de una propuesta de incorporación de contenidos de ambiente y sostenibilidad en el currículo de educación primaria” C17-FAI-06-29.29. 2018.</li><br>
                <li>CUMMINS-UASLP a través de GlobalGiving Foundation. “Modelo sostenbile para la soberanía de comunidades vulnerables”. 2017 - 2019.</li><br>
                <li>CUMMINS-UASLP a través de Asociación Filantrópica CUMMINS. “Modelo sostenbile para la soberanía de comunidades vulnerables”. 2015 - 2016.</li><br>
                <li>GIZ-UASLP “Desarrollo de capacidades para la elaboración de proyectos de Educación Ambiental para la conservación del Corredor Ecológico de la Sierra Madre Oriental”. 2016.</li><br>
                <li>PRODEP. Líder Dr. Renato Ramos en colaboración y co-dirección de tesis. “Introducción de módulos de vegetación urbana para el control de escurrimientos en vialidades con pendiente”. 2015 - 2016.</li><br>
                <li>CUMMINS-UASLP a través de GlobalGiving Foundation, Proyecto “Techo Vivo”. 2014.</li><br>
                <li>CONACyT INFR-2013-01, registro 205644, convenio I010/311/2013, “Equipamiento para la red de análisis y modelado atmosférico para gases de efecto invernadero, polen y esporas en la ciudad de San Luis Potosí”. 2013.</li><br>
                <li>Uni-Huerto Urbano. Convenio de colaboración UASLP: Facultad del Hábitat-Facultad de Ingeniería-División de Servicios Estudiantiles. Colaboradores Agenda Ambiental y Facultad de Agronomía. 2013 - 2022.</li><br>
                <li>Proyecto PROMEP Apoyo a la Incorporación de nuevos PTC. Convenio UASLP-PTC-366 Estudio de características termo físicas del adobe tradicional y estabilizado para construcción con insumos de la Región Centro de San Luis Potosí. 2012.</li><br>
                <li>Convenio SEGAM-UASLP UASLP/DJ-145/12 Sistema Interactivo de Información Ambiental. 2012.</li><br>
                <li>Fondo de Apoyo a la Investigación C12-FAI-03-47.47 Proyecto Análisis del comportamiento bioclimático en casa habitación para la zona centro de San Luis Potosí. 2012.</li><br>
                <li>Investigador del proyecto Sistema Nacional de Vigilancia Epidemiológica Fitosanitaria SINAVEF. Modelado climático con aplicación fitosanitaria. UASLP-SENSASICA en el CIACyT. 2009-2011.</li><br>
                <li>Participante en el proyecto Sagarpa-Conacyt como especialista en climatología: Propuesta de una metodología para identificar zonas vulnerables a la sequía y a las plagas que afectan a las actividades agropecuarias en la Huasteca Potosina, apoyada en imágenes de satélite, sistemas de información geográfica, análisis multivariado y un modelo de simulación climática. Clave de registro: SAGARPA-2004-C01-186/A-1. Responsable técnico del proyecto: Dra. María Guadalupe Galindo Mendoza, profesora investigadora UASLP. 2005 – 2007.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>  <br><br><br>
    </div>
    </div>
</div>

@endsection