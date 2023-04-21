
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DR. NAHÚM ANDRÉS MEDELLÍN CASTILLO</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Nahum_Andres_Medellin_Castillo.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ingeniería.</strong></h5>
        <h5><strong>SNI nivel II.</strong></h5>
        <br>
        <p>
            Dr. Manuel Nava No. 8, Zona Universitaria Poniente <br>
            C.P. 78290, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-6260 ext. 6260<br>
            <a href="mailto:nahum.medellin@uaslp.mx"" style="color:rgb(0, 178, 227)">nahum.medellin@uaslp.mx"</a><br><br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://ciep.ing.uaslp.mx/agua/profesor.php?id=3133393538">Webpage</a>
            <!--<a target="_blank" href="{{asset('storage/CV/Alfaro_delaTorre_MaCatalina.pdf')}}"><i>Curriculum vitae</i></a>-->
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/hjYAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-9245-8016"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=13611164200"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>TSCA: Tratamiento de aguas residuales</li>
                      <li>TSCA: Sistemas de adsorción: equilibrio y cinética</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Síntesis heterogénea de biodiesel como alternativa a la producción de biocombustibles</li>
                  <li>Desarrollo de materiales y tecnologías para la producción de biodiesel y tratamiento de aguas</li>
                  <li>Síntesis y caracterización de materiales adsorbentes a partir de residuos agrícolas, forestales y ganaderos para su empleo en la remoción de contaminantes de soluciones acuosas</li>
                  <li>Desarrollo de las tecnologías de bajo costo para el tratamiento de agua potable</li>
                  <li>Cultura del agua</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Segovia Sánchez Ollín Citlalli. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3988/MCA1SSO201401.pdf?sequence=3&isAllowed=y">Environmental cost-benefit analysis of decentralized wastewater and sanitation technologies in the Microbasin of Barracão Dos Mendes, Brazil.</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                    <li>Tovar García Leonardo Daniel. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3832">Preparación y modificación de carbones de hueso para la remoción de fluoruros en solución acuosa.</a></li>
                    <li>Reyna Villanueva Luis Rubén. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3893/MCA1RVL201501.pdf?sequence=3&isAllowed=y">Producción y caracterización de biodiesel mediante catálisis heterogénea empleando hidróxidos dobles laminares. </a>(Co-dirección)</li>
                    <li>Rojas Farías Alejandra. 2021. Síntesis sostenible de materiales preparados a partir de peces diablo para su empleo en la producción de biodiésel y remoción de contaminates de agua.</li>
                    <li>Jasso Acosta Isabel. 2022. Caracterización de las propiedades fisicoquímicas de un sustrato a base de biocarbón y su efecto en el cultivo de <i>Amaranthus hypochondriacus</i> L.</li>
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
                <li><b>Nahum A. Medellín-Castillo</b>, Raúl Ocampo-Pérez, Roberto Leyva-Ramos, Manuel Sánchez-Polo, José Rivera-Utrilla, José D. Méndez-Díaz. Removal of Diethyl Phtalate from Water Solution by Adsorption, Photooxidation, Ozonation and Advanced Oxidation Process (UV/H2O2, O3/H2O2 and O3/Activated Carbon). Sci. Total Environ. 2013, 442 26-35. ISSN: 0048-9697 (Publicado).</li><br>
                <li><b>N.A. Medellín Castillo</b>, M. Valadez-Araiza, C. Carranza-Álvarez, R. Leyva-Ramos, L. A. Bernal Jácome, J. Mendoza Barrón. Adsorción de fluoruro de agua de pozo de comunidades rurales de la zona centro de San Luis Potosí sobre carbón de hueso modificado. Memorias del Simposio Nacional de Ingeniería Química y Tecnología Ambiental 2012 pp. 119-122, 18 al 21 de Septiembre de 2012, Aguascalientes, Ags., México. ISBN: 978-607-95060-7-0 (Publicado).</li><br>
                <li>Angel Josabad Alonso-Castro, Juan José Maldonado-Miranda, Alicia Zarate-Martínez, María del Rosario Jacobo-Salcedo, Carlos Fernández-Galicia, Luis Alejandro Figueroa-Zuñiga, Nestor Abel Rios-Reyes, Miguel Angel de León-Rubio, <b>Nahum Andrés Medellín-Castillo</b>, Abigail Reyes-Munguia, Rocio Méndez-Martínez; Candy Carranza-Alvarez. Medicinal plants used in the Huasteca Potosina, México. J. Ethnopharmacol. 2012, 143 292-298. ISSN: 0378-8741 (Publicado)</li><br>
                <li>R. Leyva-Ramos, L.E. Landin-Rodríguez, S. Leyva-Ramos and <b>N.A. Medellín-Castillo</b>. Modification of corncob with citric acid to enhance its capacity for adsorbing cadmium(II) from water solution Chemical Engineering Journal 2012, 180 113 120. ISSN: 1385-8947 (Publicado).</li><br>
                <li><b>Medellín Castillo Nahum Andrés</b>, Anaya García Jorge Armando, Leyva Ramos Roberto, Ocampo Perez Raúl, Bernal Jácome Luis Armando, Mendoza Barrón Jovita, Berber Mendoza María Selene, Carranza Alvarez Candy. Remoción de Pb+2 y Cd+2 en solución acuosa por medio de adsorción sobre semilla de chile. Memorias del XXXIII Encuentro Nacional y II Congreso Internacional de la AMIDIQ pp. 851-854, 01 al 04 de mayo de 2012, San José del Cabo BCS, México. ISBN: 978-607-507-121-3, (Publicado).</li><br>
                <li><b>Nahum Medellín Castillo</b>, Jorge Armando Anaya García. Remoción de metales pesados de soluciones acuosas por medio de adsorción sobre un biosorbente novedoso (semilla de chile). Memorias del 42° Congreso de Investigación y Desarrollo, 18 al 20 de Enero de 2012, Monterrey, Nuevo León, México (Publicado) ISBN: 978-607-501-073-1 (Publicado).</li><br>
                <li>J.D. Méndez-Díaz; G. Prados-Joya; R. Leyva-Ramos; M. Sánchez-Polo; M.A. Ferro García; <b>N.A. Medellín-Castillo</b>. Kinetic study of the adsorption of nitroimidazole antibiotics on activated carbons in aqueous phase. J. Colloid Interf. Sci. 2010, 345, 481-490. ISSN: 0021-9797 (Publicado)</li><br>
                <li>R. Leyva-Ramos, J. Rivera-Utrilla, <b>N.A. Medellín-Castillo</b> and M. Sánchez-Polo. Kinetic Modeling of Fluoride Adsorption from Aqueous Solution onto Bone Char. Chem. Eng. J. 2010, 158(3), 458-467. ISSN: 1385-8947 (Publicado)</li><br>
                <li>Roberto Leyva-Ramos, Raúl Ocampo-Perez, Oliva L. Torres-Rivera, María S. Berber-Mendoza, <b>Nahum A. Medellín-Castillo</b>. Kinetics of Pyridine Adsorption onto Granular Activated Carbon. Diffusion Fundamentals III Conference. 23-26 August 2009. Athens-Greece (Publicado).</li><br>
                <li>R. Leyva-Ramos, J. Rivera-Utrilla, <b>N.A. Medellín Castillo</b>, M. Sánchez-Polo. Rate of Fluoride Adsorption from Aqueous Solution onto Bone Char. Comparison between the Diffusional Model and the Kinetic Models. Seventh International Symposium. Surface heterogeneity Effects in Adsorption and Catalysis on Solids. ISSHAC-7. Poland, Kazimierz Dolny, 5-11 July 2009 (Publicado).</li><br>
                <li>R. Leyva-Ramos, J. Rivera Utrilla, <b>N.A. Medellín Castillo</b>, and M. Sánchez-Polo. Kinetic Modeling of Naphtalenesulfonic acid adsorption from aqueous solution onto untreated and ozonated activated carbon. Adsorp. Sci. Technol. 2009, 27(4), 395-411 (Publicado). ISSN: 0263-6174.</li><br>
                <li>Roberto Leyva-Ramos, <b>Nahum A. Medellín Castillo</b>, Araceli Jacobo-Azuara, Jovita Mendoza-Barrón, Lilia.E. Landin-Rodríguez, Jose M. Merced Martínez Rosales and Antonio Aragon Piña. Fluoride Removal from Water Solution by Adsorption on Activated Alumina Prepared from Pseudo-Bohemite. J. Environ. Eng. Manage. 2008, 18(5), 301-309 (Publicado). ISSN: 1582-9596.</li><br>
                <li><b>Nahum A. Medellín-Castillo</b>, Roberto Leyva-Ramos, Raúl Ocampo-Perez, Ramón F. García de la Cruz, Antonio Aragon-Piña, José M. Martínez-Rosales, Rosa M. Guerrero-Coronado and Laura Fuentes-Rubio. Adsorption of Fluoride from Water Solution on Bone Char. Ind. Eng. Chem. Res. 2007, 46, 9205-9212 (Publicado). ISSN: 0888-5885 y 1520-5045.</li><br>
                <li>M. Sánchez-Polo, <b>N. A. Medellín-Castillo</b>, J. Rivera-Utrilla, y R. Leyva-Ramos. Tecnologías avanzadas para la eliminación de microcontaminantes orgánicos presentes en lixiviados de vertederos urbanos. IX Reunión del Grupo Español del Carbón, 22-24 de Octubre 2007, Teruel, España (Publicado). ISBN: 978-846119858.</li><br>
                <li><b>N. A. Medellín Castillo</b>, M. Sánchez Polo, J. Rivera Utrilla, y R. Leyva Ramos. Modificación del modelo difusional para predecir la cinética de adsorción de compuestos orgánicos sobre carbón activado. IX Reunión del Grupo Español del Carbón, 22-24 de Octubre 2007, Teruel, España (Publicado). ISBN: 978-846119858.</li><br>
                <li><b>N.A. Medellín Castillo</b>, R. Leyva Ramos y J. René Rangel Méndez. Cinética de adsorción de fluoruro en solución acuosa sobre carbón de hueso. Memorias Simposio Nacional de Ingeniería Química y Tecnología Ambiental 2007, Aguascalientes, Ags., 18-21 de septiembre de 2007 (Publicado). ISBN: 13-978-968-9214-01-4.</li><br>
                <li>Roberto Leyva-Ramos, Araceli Jacobo-Azuara, Maria S. Berber-Mendoza, <b>Nahum A. Medellín-Castillo</b>, Lilia Landón Rodríguez and Donaji S. Monroy-Lopez. Adsorption of Toxic Components from Water Solutions on Novel Adsorbents. 3rd. International Workshop Inside Pores New challenges for nanoporous materials. 24-26 de Septiembre 2007, Alicante, Spain (Publicado).</li><br>
                <li><b>N.A. Medellín Castillo</b>, R. Leyva Ramos, R. Ocampo-Pérez, J. René Rangel Méndez y H.M. Aguilera Bandón. Cinética de adsorción de fluoruro en solución acuosa sobre carbón de hueso. Memorias XXVIII Encuentro Nacional AMIDIQ, 1 a 4 de mayo de 2007, Manzanillo, Colima, México (Publicado). ISBN: 978-970-764-267-6.</li><br>
                <li><b>N.A. Medellín Castillo</b>, R. Leyva Ramos, R. Ocampo Pérez, R.M. Guerrero Coronado, J. Mendoza-Barrón y L. Fuentes Rubio. Adsorción de Fluoruro en Solución Acuosa sobre Carbón de Hueso. 6° Encontro Brasileiro sobre Adsorcao. Universidad Estatal de Maringa, Brasil, 13 a 16 de agosto 2006. (Publicado).</li><br>
                <li><b>N.A. Medellín Castillo</b>, R. Leyva Ramos y J.R. Rangel Méndez. Remoción de fluoruros en solución acuosa por medio de adsorción sobre carbón de hueso. Memorias XXVII Encuentro Nacional AMIDIQ. 2-5 Mayo 2006, Ixtapa, Guerrero, México (Publicado)</li><br>
                <li>R. Leyva Ramos, <b>N.A. Medellín Castillo</b>, R.M. Guerrero Coronado, M.S. Berber Mendoza, A. Aragón Piña y A. Jacobo Azuara. Intercambio iónico de plata(I) en solución acuosa sobre clinoptilolita. Revista Int. Contam. Ambient. 2005, 21, 193-200 (Publicado). ISSN: 0188-4999.</li><br>
              </ul>
            </div>
          </div>
        </div>
      </div>  <br><br><br>
    </div>
    </div>
</div>

@endsection