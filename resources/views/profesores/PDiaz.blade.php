
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. PAOLA ELIZABETH DÍAZ FLORES</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Paola_Elizabeth_Diaz_Flores.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Agronomía.</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Km. 14.5 Carretera San Luis Potosí, Matehuala,<br>
            Ejido Palma de la Cruz, Soledad de Graciano Sánchez,<br>
            San Luis Potosí, S.L.P., Apdo. Postal 32, CP. 78321, <br>
            Teléfonos (444) 852-4056 al 60<br>
            paola.diaz@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="/storage/CV/Diaz_Flores_PaolaElizabeth.pdf"><em>Curriculum Vitae</em></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/GT0AAA%3D%3D">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-6045-6454"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=56000848100"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Sistemas de adsorción: equilibrio y cinética</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Desarrollo e implementación de tecnologías para el tratamiento de agua mediante procesos fisicoquímicos</li>
                  <li>Desarrollo, caracterización y aplicación de materiales sorbentes (porosos y verdes) para el tratamiento de suelo y agua</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Ávila Cintia Romina. 2011. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3566/MCA1ACR201101.pdf?sequence=3&isAllowed=y" target="_blank">Remoción de azul de metileno en agua empleando bagazo de <em>Agave Salmiana</em> como biosorbente.</a></li>
                  <li>Salazar Hernández Elizabeth. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3624/MCA1SHE201201.pdf?sequence=3&isAllowed=y" target="_blank">Remoción de hidrocarburos mediante biopolímeros naturales: efecto del tamaño de partícula.</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Flores Rojas Alfredo Israel. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3906/MCA1FRA201501.pdf?sequence=3&isAllowed=y" target="_blank">Estudios de equilibrio de adsorción de fluoruros sobre compósitos a base de quitosano.</a></li>
                  <li>Guzmán Álvarez Camerina Janeth. 2019. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4766/MCA1GAC201901.pdf?sequence=1&isAllowed=y" target="_blank"> Eliminación del colorante negro reactivo 5 en soluciones acuosas mediante materiales sintéticos a base de celulosa, magnetita y polipirrol.</a></li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Flores Rojas Alfredo Israel. 2021. <a href="#" target="_blank">Biomateriales de liberación controlada: alternativa para el control de la contaminación de suelos por sobre exposición a compuestos químicos.</a> </li>
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
                <li>González Fernández, L.A., Navarro Frómeta, A.E., Carranza Álvarez, C., Flores Ramírez, R., <b>Díaz Flores, P.E.</b>, Castillo Ramos, V., Sánchez Polo, M., Carrasco Marín, F., Medellín Castillo, N.A. Valorization of <em>Sargassum</em> Biomass as Potential Material for the Remediation of Heavy-Metals-Contaminated Waters (2023) 20 (3), art. no. 2559.
                <a href="https://doi.org/10.3390/ijerph20032559" target="_blank">DOI: 10.3390/ijerph20032559</a></li><br>
                <li>Rodríguez-Ortiz, J.C., <b>Díaz-Flores, P.E.</b>, Zavala-Sierra, D., Preciado-Rangel, P., Rodríguez-Fuentes, H., Estrada-González, A.J., Carballo-Méndez, F.J. Organic vs. Conventional Fertilization: Soil Nutrient Availability, Production, and Quality of Tomato Fruit (2022) 233 (3), art. no. 87.
                <a href="http://dx.doi.org/10.1007/s11270-022-05545-5" target="_blank">DOI: 10.1007/s11270-022-05545-5</a></li><br>
                <li>Moral-Rodríguez, A.I., Leyva-Ramos, R., Mendoza-Mendoza, E., <b>Díaz-Flores, P.E.</b>, Carrales-Alvarado, D.H., Alexandre-Franco, M.F., Fernández-González, C. Single adsorption of diclofenac and ronidazole from aqueous solution on commercial activated carbons: effect of chemical and textural properties (2022).
                <a href="https://doi.org/10.1007/s11356-021-17466-7" target="_blank">DOI: 10.1007/s11356-021-17466-7</a></li><br>
                <li>Cruz-Briano, S.A., Medellín-Castillo, N.A., Torres-Dosal, A., Leyva-Ramos, R., Moreno-Piraján, J.C., Giraldo-Gutiérrez, L., <b>Díaz-Flores, P.E.</b>, Reyes-López, S.Y., Ocampo-Pérez, R. Bone Char from an Invasive Aquatic Specie as a Green Adsorbent for Fluoride Removal in Drinking Water (2021) 232 (9), art. no. 346.
                <a href="https://link.springer.com/article/10.1007/s11270-021-05286-x" target="_blank">DOI: 10.1007/s11270-021-05286-x</a></li><br>
                <li><b>Díaz-Flores, P.E.</b>, Arcibar-Orozco, J.A., Flores-Rojas, A.I., Rangel-Méndez, J.R. Synthesis of a Chitosan-Zeolite Composite Modified with La(III): Characterization and its Application in the Removal of Fluoride from Aqueous Systems (2021) 232 (6), art. no. 235.
                <a href="https://link.springer.com/article/10.1007/s11270-021-05185-1" target="_blank">DOI: 10.1007/s11270-021-05185-1</a></li><br>
                <li>Flores-Rojas, A.I., <b>Díaz-Flores, P.E.</b>, Medellín-Castillo, N.A., Ovando-Medina, V.M., Rodríguez-Ortiz, J.C. Biomaterials based on chitosan/orange peel as a controlled release matrix for KNO3: synthesis, characterization and their performance evaluation (2020) 29 (11), pp. 1007-1017.
                <a href="https://link.springer.com/article/10.1007/s13726-020-00858-w" target="_blank">DOI: 10.1007/s13726-020-00858-w</a></li><br>
                <li>Villabona-Leal, E.G., Escobar-Villanueva, A.G., Ovando-Medina, V.M., Pérez-Pérez, E.B., <b>Díaz-Flores, P.E.</b>, Romero-Galarza, A., Marquez-Herrera, A. Semiconducting polypyrrole@TiO<sub>2</sub> pure anatase nanoparticles for photodegradation of reactive red 120 azo dye (2020) 31 (15), pp. 12178-12190.
                <a href="https://link.springer.com/article/10.1007/s10854-020-03764-2" target="_blank">DOI: 10.1007/s10854-020-03764-2</a></li><br>
                <li>Arcibar-Orozco, J.A., Flores-Rojas, A.I., Rangel-Mendez, J.R., <b>Díaz-Flores, P.E.</b> Synergistic effect of zeolite/chitosan in the removal of fluoride from aqueous solution (2020) 41 (12), pp. 1554-1567.
                <a href="https://doi.org/10.1080/09593330.2018.1542033" target="_blank">DOI: 10.1080/09593330.2018.1542033</a></li><br>
                <li>Montoya, A.H., Ortiz, J.C.R., <b>Flores, P.E.D.</b>, Jáuregui, J.A.A., Velázquez, E.M., Ávila, J.P.L. <a href="http://www.scielo.org.ar/pdf/refca/v51n2/v51n2a26.pdf" target="_blank">Sodium N-methyldithiocarbamate impact on soil bacterial diversity in greenhouse tomato (Solanum lycopersicum L.) crop [Impacto de metam sodio en la diversidad bacteriana de un suelo cultivado con tomate (Solanum lycopersicum L.) en invernadero]</a> (2019) 51 (2), pp. 333-342.</li><br>
                <li><b>Díaz-Flores, P.E.</b>, Guzmán-Álvarez, C.J., Ovando-Medina, V.M., Martínez-Gutiérrez, H., González-Ortega, O. Synthesis of a-cellulose/magnetite/polypyrrole composite for the removal of reactive black 5 dye from aqueous solutions (2019) 155, pp. 350-363.
                <a href="https://doi.org/10.5004/dwt.2019.24013" target="_blank">DOI: 10.5004/dwt.2019.24013</a></li><br>
                <li>Romero-Mendez, M.J., Rojas-Velázquez, Á.N., Lara Mireles, J.L., <b>Díaz Flores, P.E.</b>, Woo Reza, J.L. Effect of a nitrogen fertilizer, based on modified bentonite and surfactant HDTMA in the growth of hydroponic lettuce (Lactuca sativa L.) [Efecto de un fertilizante nitrogenado a base de bentonita modificada y tensoactivo HDTMA en el crecimiento de lechuga (Lactuca sativa L.) hidropónica] (2019) 53 (2), pp. 219-234. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85064493531&partnerID=40&md5=c13fbb8dc392533dc39a1455197daeae" target="_blank">https://www.scopus.com/inward/record.uri?eid=2-s2.0-85064493531&partnerID=40&md5=c13fbb8dc392533dc39a1455197daeae</a></li><br>
                <li>Jáuregui, J.A., Ortiz, J.C.R., Montoya, A.H., Filippini, M.F., Carretero, E.M., <b>Flores, P.E.D.</b>, Velázquez, Á.N.R., Rodríguez-Fuentes, H., Morales, F.A.B. Heavy metals in atmospheric dust deposited in leaves of Acacia farnesiana (Fabaceae) and Prosopis laevigata (Fabaceae) [Metales pesados en polvo atmosférico depositado en hojas de Acacia farnesiana (Fabaceae) y prosopis laevigata (Fabaceae)] (2018) 50 (2), pp. 173-185. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85057166189&partnerID=40&md5=20b18fb4cfc27f19ea62308d4e2134da" target="_blank">https://www.scopus.com/inward/record.uri?eid=2-s2.0-85057166189&partnerID=40&md5=20b18fb4cfc27f19ea62308d4e2134da</a></li><br>
                <li>Jáuregui, J.A., Rodríguez Ortíz, J.C., Montoya, A.H., Filippini, M.F., Carretero, E.M., <b>Diaz Flores, P.E.</b> Capacity of two vegetative species of heavy metal accumulation [Capacidad de dos especies vegetativas en la acumulación de metales pesados] (2018) 50 (1), pp. 123-139. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-85047835591&partnerID=40&md5=85f23eafb96e1ef7687f9742d0e87a8b" target="_blank">https://www.scopus.com/inward/record.uri?eid=2-s2.0-85047835591&partnerID=40&md5=85f23eafb96e1ef7687f9742d0e87a8b</a></li><br>
                <li><b>Díaz-Flores, P.E.</b>, Arcibar-Orozco, J.A., Perez-Aguilar, N.V., Rangel-Mendez, J.R., Ovando Medina, V.M., Alcalá-Jáuegui, J.A. Adsorption of Organic Compounds onto Multiwall and Nitrogen-Doped Carbon Nanotubes: Insights into the Adsorption Mechanisms (2017) 228 (4), art. no. 133.
                <a href="https://link.springer.com/article/10.1007/s11270-017-3314-8" target="_blank">DOI: 10.1007/s11270-017-3314-8</a></li><br>
                <li>Pérez-Escobedo, A., <b>Díaz-Flores, P.E.</b>, Rangel-Méndez, J.R., Cerino-Cordova, F.J., Ovando-Medina, V.M., Alcalá-Jáuregui, J.A. Fluoride adsorption capacity of composites based on chitosanzeolite-algae [Evaluación de la capacidad de adsorción de fluoruro en compositos a base de quitosano-zeolita-alga marina] (2016) 15 (1), pp. 139-147. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-84961253598&partnerID=40&md5=717d10408a88421e5de5cb641d726da7" target="_blank">https://www.scopus.com/inward/record.uri?eid=2-s2.0-84961253598&partnerID=40&md5=717d10408a88421e5de5cb641d726da7</a></li><br>
                <li>Vences-Alvarez, E., Velazquez-Jimenez, L.H., Chazaro-Ruiz, L.F., <b>Diaz-Flores, P.E.</b>, Rangel-Mendez, J.R. Fluoride removal in water by a hybrid adsorbent lanthanum-carbon (2015) 455, pp. 194-202.
                <a href="https://doi.org/10.1016/j.jcis.2015.05.048" target="_blank">DOI: 10.1016/j.jcis.2015.05.048</a></li><br>
                <li>Jáuregui, J.A., Rodríguez Ortíz, J.C., Montoya, A.H., <b>Flores, P.E.D.</b>, Filippini, M.F., Carretero, E.M. <a href="http://www.scielo.org.ar/scielo.php?pid=S1853-86652015000200007&script=sci_arttext" target="_blank">Bark of P. Laevigata (fabaceae) and S. Molle (anacardiaceae) as bioindicator of heavy metal contamination [Cortezas de Prosopis laevigata (Fabaceae) y Schinus molle (Anacardiaceae) como bioindicadoras de contaminación por metales pesados]</a> (2015) 47 (2), pp. 83-85.</li><br>
                <li>Arcibar-Orozco, J.A., Rangel-Mendez, J.R., <b>Diaz-Flores, P.E.</b> Simultaneous adsorption of Pb(Ii)-Cd(Ii), Pb(Ii)-phenol, and Cd(Ii)-phenol by activated carbon cloth in aqueous solution (2015) 226 (1), art. no. 2197.
                <a href="https://link.springer.com/article/10.1007/s11270-014-2197-1" target="_blank">DOI: 10.1007/s11270-014-2197-1</a></li><br>
                <li>Alcalá-Jáuregui, J.A., Ortiz, J.C.R., Montoya, A.H., Villarreal-Guerrero, F., Rodríguez, A.C., Morales, F.A.B., <b>Flores, P.E.D.</b> <a href="https://bdigital.uncu.edu.ar/7419" target="_blank">Heavy metal contamination in sediments of a riparian area in san luis potosi, mexico [Contaminación por metales pesados en sedimentos de un área ribereña en San Luis Potosí, México]</a> (2014) 46 (2), pp. 203-221.</li><br>
                <li>Ovando-Medina, V.M., <b>Díaz-Flores, P.E.</b>, Martínez-Gutiérrez, H., Moreno-Ruiz, L.A., Antonio-Carmona, I.D., Hernández-Ordoñez, M. Composite of cellulosic agricultural waste coated with semiconducting polypyrrole as potential dye remover (2014) 35 (1), pp. 186-193.
                <a href="https://doi.org/10.1002/pc.22649" target="_blank">DOI: 10.1002/pc.22649</a></li><br>
                <li>Cerino-Córdova, F.J., <b>Díaz-Flores, P.E.</b>, García-Reyes, R.B., Soto-Regalado, E., Gómez-González, R., Garza-González, M.T., Bustamante-Alcántara, E. Erratum to: Biosorption of Cu(II) and Pb(II) from aqueous solutions by chemically modified spent coffee grains (Int J Environ Sci Technol, 10.1007/s13762-013-0198-z) (2013) 10 (6), pp. 1399-1400.
                <a href="https://link.springer.com/article/10.1007/s13762-013-0259-3" target="_blank">DOI: 10.1007/s13762-013-0259-3</a></li><br>
                <li>Cervantes-González, E., Salazar-Quintanilla, L.M., <b>Diaz-Flores, P.E.</b> Lipases induced by petroleum hydrocarbons [Lipasas inducidas por hidrocarburos del petróleo] (2013) 29 (SUPPL.2), pp. 9-15. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-84884275163&partnerID=40&md5=2bbfc8cf560e4e8dee5038c52447248f" target="_blank">https://www.scopus.com/inward/record.uri?eid=2-s2.0-84884275163&partnerID=40&md5=2bbfc8cf560e4e8dee5038c52447248f</a></li><br>
                <li>Dávila-Guzmán, N.E., De Jesús Cerino-Cordova, F., Soto-Regalado, E., Rangel-Mendez, J.R., <b>Díaz-Flores, P.E.</b>, Garza-Gonzalez, M.T., Loredo-Medrano, J.A. Copper Biosorption by Spent Coffee Ground: Equilibrium, Kinetics, and Mechanism 2013) 41 (6), pp. 557-564.
                <a href="https://doi.org/10.1002/clen.201200109" target="_blank">DOI: 10.1002/clen.201200109</a><li><br>
                <li>Rangel-Mendez, J.R., Perez-Aguilar, N.V., <b>Diaz-Flores, P.E.</b> Applications of carbon nanotubes in environmental issues: Controlling water pollution (2013) pp. 363-383. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-84896244150&partnerID=40&md5=db68c34af4ac9666625de2ab971ba194" target="_blank">https://www.scopus.com/inward/record.uri?eid=2-s2.0-84896244150&partnerID=40&md5=db68c34af4ac9666625de2ab971ba194</a></li><br>
                <li>Ovando-Medina, V.M., <b>Díaz-Flores, P.E.</b>, Peralta, R.D., Mendizábal, E., Cortez-Mazatan, G.Y. Semicontinuous heterophase copolymerization of vinyl acetate and butyl acrylate (2013) 127 (4), pp. 2458-2464. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-84870252737&doi=10.1002%2fapp.37943&partnerID=40&md5=c2af4e19e7dd4ccfd5a3affa66a3aecf"> https://www.scopus.com/inward/record.uri?eid=2-s2.0-84870252737&doi=10.1002%2fapp.37943&partnerID=40&md5=c2af4e19e7dd4ccfd5a3affa66a3aecf</a>
                <a href="https://doi.org/10.1002/app.37943" target="_blank">DOI: 10.1002/app.37943</a></li><br>
                <li>Cerino-Córdova, F.J., <b>Díaz-Flores, P.E.</b>, García-Reyes, R.B., Soto-Regalado, E., Gómez-González, R., Garza-González, M.T., Bustamante-Alcántara, E. Biosorption of Cu(II) and Pb(II) from aqueous solutions by chemically modified spent coffee grains (2013) 10 (3), pp. 611-622.
                <a href="https://link.springer.com/article/10.1007/s13762-013-0198-z" target="_blank">DOI: 10.1007/s13762-013-0198-z</a></li><br>
                <li>Dávila-Guzmán, N.E., Cerino-Córdova, F.J., Rangel-Méndez, J.R., <b>Díaz-Flores, P.E.</b> Batch and column biosorption of Cu (II) onto spent coffee ground: Equilibrium and dynamic modeling (2012) 7 p. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-84871771855&partnerID=40&md5=004bd63180e0ace97f8f34029c03ce87" target="_blank">https://www.scopus.com/inward/record.uri?eid=2-s2.0-84871771855&partnerID=40&md5=004bd63180e0ace97f8f34029c03ce87</a></li><br>
                <li>Ovando-Medina, V.M., Piña-García, P.S., Corona-Rivera, M.A., <b>Díaz-Flores, P.E.</b>, Peralta, R.D., Martínez-Gutiérrez, H., Lara-Ceniceros, T.E. Semicontinuous heterophase polymerization of methyl methacrylate in the presence of reactive surfactant HITENOL BC10 (2012) 68 (9), pp. 2313-2322. <a href="https://www.scopus.com/inward/record.uri?eid=2-s2.0-84861340951&doi=10.1007%2fs00289-012-0726-x&partnerID=40&md5=526e7f2003bab2434a7a43cf8504da5a">https://www.scopus.com/inward/record.uri?eid=2-s2.0-84861340951&doi=10.1007%2fs00289-012-0726-x&partnerID=40&md5=526e7f2003bab2434a7a43cf8504da5a</a>
                <a href="https://www.researchgate.net/profile/Rene-Peralta-2/publication/231537115_Semicontinuous_heterophase_polymerization_of_methyl_methacrylate_in_the_presence_of_reactive_surfactant_HITENOL_BC10/links/09e4150999134722ac000000/Semicontinuous-heterophase-polymerization-of-methyl-methacrylate-in-the-presence-of-reactive-surfactant-HITENOL-BC10.pdf" target="_blank">DOI: 10.1007/s00289-012-0726-x</a>
                <li>Dávila-Guzman, N.E., Cerino-Córdova, F.J., <b>Diaz-Flores, P.E.</b>, Rangel-Mendez, J.R., Sánchez-González, M.N., Soto-Regalado, E. Equilibrium and kinetic studies of ferulic acid adsorption by Amberlite XAD-16 (2012) 183, pp. 112-116.
                <a href="https://www.sciencedirect.com/science/article/abs/pii/S1385894711015877" target="_blank">DOI: 10.1016/j.cej.2011.12.037</a></li><br>
                <li>Perez-Aguilar, N.V., <b>Diaz-Flores, P.E.</b>, Rangel-Mendez, J.R. The adsorption kinetics of cadmium by three different types of carbon nanotubes (2011) 364 (2), pp. 279-287.
                <a href="https://www.sciencedirect.com/science/article/abs/pii/S0021979711010071" target="_blank">DOI: 10.1016/j.jcis.2011.08.024</a></li><br>
                <li>Dávila-Guzmán, N.E., Cerino-Córdova, F.J., Rangel-Méndez, J.R., <b>Díaz-Flores, P.E.</b> <a href="https://www.researchgate.net/publication/253329913_Biosorption_of_Lead_by_Spent_Coffee_Ground_Kinetic_and_Isotherm_Studies" target="_blank">Biosorption of lead by spent coffee ground: Kinetic and isotherm studies</a> (2011) 9 p.</li><br>
                <li>Dávila-Guzmán, N.E., Cerino-Córdova, F.J., Rangel-Méndez, J.R., <b>Díaz-Flores, P.E.</b> Biosorption of lead by spent coffee ground: Kinetic and isotherm studies (2011) 2, pp. 999-1007.</li><br>
                <li>Dávila-Guzmán, N.E., Cerino-Córdova, F.J., Rangel-Méndez, J.R., <b>Díaz-Flores, P.E.</b> Biosorption of lead by spent coffee ground: Kinetic and isotherm studies (2011) pp. 109-117.</li><br>
                <li>Perez-Aguilar, N.V., Muñoz-Sandoval, E., <b>Diaz-Flores, P.E.</b>, Rangel-Mendez, J.R. Adsorption of cadmium and lead onto oxidized nitrogen-doped multiwall carbon nanotubes in aqueous solution: Equilibrium and kinetics (2010) 12 (2), pp. 467-480.
                <a href="https://link.springer.com/article/10.1007/s11051-009-9670-6" target="_blank">DOI: 10.1007/s11051-009-9670-6</a></li><br>
                <li><b>Diaz-Flores, P.E.</b>, López-Urías, F., Terrones, M., Rangel-Mendez, J.R. Simultaneous adsorption of Cd2+ and phenol on modified N-doped carbon nanotubes: Experimental and DFT studies (2009) 334 (2), pp. 124-131.
                <a href="https://pubmed.ncbi.nlm.nih.gov/19403143/" target="_blank">DOI: 10.1016/j.jcis.2009.02.045</a></li><br>
                <li>Rangel-Mendez, J.R., Monroy-Zepeda, R., Leyva-Ramos, E., <b>Diaz-Flores, P.E.</b>, Shirai, K. Chitosan selectivity for removing cadmium (II), copper (II), and lead (II) from aqueous phase: pH and organic matter effect (2009) 162 (1), pp. 503-511.
                <a href="https://www.sciencedirect.com/science/article/abs/pii/S0304389408007528" target="_blank">DOI: 10.1016/j.jhazmat.2008.05.073</a></li><br>
                <li>Leyva-Ramos, R., Jacobo-Azuara, A., <b>Diaz-Flores, P.E.</b>, Guerrero-Coronado, R.M., Mendoza-Barron, J., Berber-Mendoza, M.S. Adsorption of chromium(VI) from an aqueous solution on a surfactant-modified zeolite (2008) 330 (1), pp. 35-41.
                <a href="https://www.sciencedirect.com/science/article/abs/pii/S0927775708004822" target="_blank">DOI: 10.1016/j.colsurfa.2008.07.025</a></li><br>
                <li>Leyva-Ramos, R., <b>Diaz-Flores, P.E.</b>, Leyva-Ramos, J., Femat-Flores, R.A. Kinetic modeling of pentachlorophenol adsorption from aqueous solution on activated carbon fibers (2007) 45 (11), pp. 2280-2289.
                <a href="https://www.sciencedirect.com/science/article/abs/pii/S0008622307002540" target="_blank">DOI: 10.1016/j.carbon.2007.06.010</a></li><br>
                <li>Berber-Mendoza, M.S., Leyva-Ramos, R., Alonso-Davila, P., Mendoza-Barron, J., <b>Diaz-Flores, P.E.</b> Effect of pH and temperature on the ion-exchange isotherm of Cd(II) and Pb(II) on clinoptilolite (2006) 81 (6), pp. 966-973.
                <a href="https://onlinelibrary.wiley.com/doi/full/10.1002/jctb.1483" target="_blank">DOI: 10.1002/jctb.1483</a></li><br>
                <li><b>Diaz-Flores, P.E.</b>, Leyva-Ramos, R., Guerrero-Coronado, R.M., Mendoza-Barron, J. Adsorption of pentachlorophenol from aqueous solution onto activated carbon fiber (2006) 45 (1), pp. 330-336.
                <a href="https://pubs.acs.org/doi/10.1021/ie050507o" target="_blank">DOI: 10.1021/ie050507o</a></li><br>
                <li>Leyva-Ramos, R., <b>Diaz-Flores, P.E.</b>, Aragon-Piña, A., Mendoza-Barron, J., Guerrero-Coronado, R.M. Adsorption of cadmium(II) from an aqueous solution onto activated carbon cloth (2005) 40 (10), pp. 2079-2094.
                <a href="https://www.tandfonline.com/doi/abs/10.1081/SS-200068485" target="_blank">DOI: 10.1081/SS-200068485</a></li><br>
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
      </div><br><br><br>
    </div>
    </div>
</div>

@endsection