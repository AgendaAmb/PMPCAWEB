
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. MARÍA CATALINA ALFARO DE LA TORRE</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Ma_Catalina_Alfaro_delaTorre.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ciencias Químicas</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Dr. Manuel Nava No. 6, Zona Universitaria Poniente <br>
            C.P. 78210, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 826-2300 ext. 6489 <br>
            <a href="mailto:alfaroca@uaslp.mx" style="color:rgb(0, 178, 227)">alfaroca@uaslp.mx</a><br><br>
        </p>

        <div class="enlacesprof">
            <!--<a target="_blank" href="http://ciep.ing.uaslp.mx/agua/profesor.php?id=3132343537">Webpage</a>-->
            <a target="_blank" href="{{asset('storage/CV/Alfaro_delaTorre_MaCatalina.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/1hgAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-0108-4950"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=19337186200"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                      <li>Fisicoquímica de Aguas Naturales</li>
                    </ul><br>
                <li><strong>LGAC</strong></li>
                <ul class="vineta">
                  <li>Remediación ambiental basada en procesos de fitorremediación</li>
                  <li>Biogeoquímica de elementos traza en sistemas acuáticos naturales</li>
                </ul><br>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <ul class="vineta">
                  <li>Ake Hernández Josue Hiram. 2010. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3629/MCA1WQM01001.pdf?sequence=5&isAllowed=y" target="_blank" >Water quality monitoring system approach to support Guapi-Macacu River Basin management, Rio de Janeiro, Brazil.</a></li>
                  <li>Zieke Gregor. 2011. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3570/MCA1ZGR201101.pdf?sequence=3&isAllowed=y" target="_blank" >Development of a low-cost, high-efficiency solar distillation unit for small-scale use in rural communities.</a></li>
                  <li>Castillo Taleno Vilmaurora. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3694/MCA1CTV201201.pdf?sequence=3&isAllowed=y" target="_blank" >Comparison of two constructed wetlands with different soil depths in relation to their nitrogen removal.</a></li>
                  <li>Aguirre Muñoz Carolina. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3679" target="_blank">The water framework directive and the Chilean normative: towards a comprehensive relation between water quality and morphological characterization in surface water, Limari Basin, Chile.</a></li>
                  <li>Villarraga Morales Huayna Paola. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3886/MCA1VMH201401.pdf?sequence=3&isAllowed=y" target="_blank"> Removal of selected constituents of coal pyrolysis effluents in constructed wetlands laboratory scale.</a></li>
                  <li> Rincón Mejía Carlos Andrés. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3891/MCA1RMC201501.pdf?sequence=3&isAllowed=y" target="_blank">Biodegradation of dimethylphenols in a laboratory scaled constructed wetland.</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Pelallo Martínez Nadia Azenet. 2006. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5744/MCA1PMN200601.pdf?sequence=1&isAllowed=y" target="_blank" >Comportamiento químico del arsénico en sedimentos de sistemas acuáticos contaminados.</a></li>
                  <li>Wong Arguelles Cynthia. 2009. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3575/MCA1WAC200901.pdf?sequence=3&isAllowed=y" target="_blank">Estudio de organismos acuáticos macrobentónicos como indicadores de la contaminación por metales pesados en ríos de la Huasteca Potosina.</a></li>
                  <li>Tejeda González Juan Carlos. 2010. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3701/MCA1TGJ201001.pdf?sequence=3&isAllowed=y" target="_blank">Diseño de un humedal para la remoción de Cd, As y Cr con plantas <em>Thypa Latifolia</em> (Espadaña).</a></li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                   <li>Rodríguez Hernández Mayra Cecilia. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3945/DCA1EMT01501.pdf?sequence=3&isAllowed=y" target="_blank">Efecto de los mecanismos de transporte de calcio, hierro y zinc en la captación de cadmio y plomo en plantas fitoremediadoras.</a> (Co-Dirección)</li>
                    <li>Pérez Castillo Filiberta Virginia. 2017.  <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4333/DCA1PCF201701.pdf?sequence=1&amp;isAllowed=y" target="_blank">Dinámica de C, N, P y Fe en agua y sedimento en el humedal natural Ciénega de Tamasopo, S.L.P.</a></li>
                    <li>Tejeda González Juan Carlos. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4203" target="_blank">Methodological approach for using strategic environmental assessment within the mexican decision-making and planning system based on two case studies.</a> (Co-Dirección)</li>
                    <li>Monzalvo Santos Idalia Karina. 2018. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4527/DCA1MSI201801.pdf?sequence=1&isAllowed=y" target="_blank">Transferencia de elementos tóxicos resultantes de actividades mineras hacia las poblaciones de aves terrestres residentes del Altiplano Potosino y sus efectos sobre el sistema inmune. </a>(Co-Dirección)</li>
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
                <li>Mayra C. Rodriguez-Hernandez, Imelda Bonifas, Bernardo Bañuelos-Hernandez, <b>Ma. C. Alfaro de la Torre</b>, José L. Flores-Flores, Omar Patiño-Rodríguez. Improving Phytorremediation of Cadmium and Lead using Vetiver Grass. En preparación.</li><br>
                <li>Ana Laura Zapata-Morales, Saraí Vega-Rodríguez, <b>Ma. Catalina Alfaro-De la Torre</b>, Alejandro Hernández-Morales, Socorro Leyva-Ramos, Ruth Elena Soria-Guerra (2023). Efficiency of Cattail to Remove a Mixture of Pharmaceuticals in a Constructed Wetland. J. Mex. Chem. Soc., 67(1), 1-11. <a href="http://dx.doi.org/10.29356/jmcs.v67i1.1848">http://dx.doi.org/10.29356/jmcs.v67i1.1848</a></li><br>
                <li>Ainsleigh Loria, Yann Rene Ramos-Arroyo, Diana Rocha, Gustavo Cruz-Jiménez, Israel Razo Soto, <b>Ma. Catalina Alfaro de la Torre</b>, Debbie Armstrong, Saúl Guerrero, Feiyue Wang (2022). Widespread elevated concentrations of gaseous elemental mercury in Guanajuato, Mexico, centuries after historical silver refining by mercury amalgamation. Science of the Total Environment. Science of the Total Environment 843:157093. <a href="http://dx.doi.org/10.1016/j.scitotenv.2022.157093">http://dx.doi.org/10.1016/j.scitotenv.2022.157093</a></li><br>
                <li>Gisela Adelina Rolón-Cárdenas, Joana Guadalupe Martínez-Martínez, Jackeline Lizzeta Arvizu-Gómez, Ruth Elena Soria-Guerra, <b>Ma Catalina Alfaro-De la Torre</b>, Fulgencio Alatorre-Cobos, Jesús Rubio-Santiago, Regina de Montserrat González-Balderas, Candy Carranza-Álvarez, José Roberto Macías-Pérez, Liseth Rubí Aldaba-Muruato, Alejandro Hernandez-Morales (2022) Enhanced Cd-accumulation in Typha latifolia by interaction with Pseudomonas rhodesiae GRC140 under axenic hydroponic conditions Plants (ISSN 2223-7747), Special Issue "Adaptation of Mutualistic Plant-Microbe Systems to Abiotic Stresses": Vol. 11:1447. <a href="https://doi.org/10.3390/plants11111447">https://doi.org/10.3390/plants11111447</a></li><br>
                <li><b>Alfaro de la Torre, M. C.</b>, Tejeda González, J. C., García Romero, E., Salto Quintana, F., & González Balderas, R. de M. (2021). Situación del abastecimiento de agua a las poblaciones rurales en México: caso de estudio. Aqua-LAC, 13(2), 115-137. Recuperado a partir de <a href="https://aqua-lac.org/index.php/Aqua-LAC/article/view/290">https://aqua-lac.org/index.php/Aqua-LAC/article/view/290</a>.</li><br>
                <li>Carlos E. Flores-Chaparro, Mayra C. Rodriguez-Hernandez, Luis F. Chazaro-Ruiz, <b>Ma. Catalina Alfaro-De la Torre</b>, Miguel A. Huerta-Diaz, Jose R. Rangel-Mendez (2021) Experimental and modeling of competitive biosorption of benzene, toluene, ethylbenzene, xylenes, and naphthalene (BTEXN) in a packed-bed column with a macroalgae-based composite: Effect of dissolved organic matter and fow rate on breakthrough curves. Journal of Water Process Engineering, 40:1-8; Paper 101874. ISSN: 2214-7144. <a href="https://doi.org/10.1016/j.jwpe.2020.101874">https://doi.org/10.1016/j.jwpe.2020.101874</a></li><br>
                <li>René Piña-Olavide, Luz MT Paz-Maldonado, <b>M Catalina Alfaro-De La Torre</b>, Mariano J García-Soto, Angélica E Ramírez-Rodríguez, Sergio Rosales-Mendoza, Bernardo Bañuelos-Hernández, Ramón Fernando García De la-Cruz (2020) Increased removal of cadmium by Chlamydomonas reinhardtii modified with a synthetic gene for γ-glutamylcysteine synthetase. International Journal of Phytoremediation, 22(12):1269-1277. Print ISSN: 1522-6514 Online ISSN: 1549-7879 <a href="https://doi.org/10.1080/15226514.2020.1765138">https://doi.org/10.1080/15226514.2020.1765138</a></li><br>
                <li>Ana Laura Zapata-Morales, <b>Ma Catalina Alfaro-De la Torre</b>, Alejandro Hernández-Morales, Ramón F García-De la Cruz (2020) Isolation of Cultivable Bacteria Associated with the Root of Typha latifolia in a Constructed Wetland for the Removal of Diclofenac or Naproxen. Water, Air, & Soil Pollution, 231(8):423. Electronic ISSN 1573-2932; Print ISSN 0049-6979. <a href="https://doi.org/10.1007/s11270-020-04781-x">https://doi.org/10.1007/s11270-020-04781-x</a></li><br>
                <li>Omar Cruz Santiago, César Arturo Ilizaliturri Hernández, José de Jesús Mejía Saavedra, Guillermo Espinosa Reyes, <b>Ma. Catalina Alfaro de la Torre</b>, Donají Josefina González Mille (2020). Evaluación preliminar de biomarcadores enzimáticos en caracoles de agua dulce (<i>Pachychilus sp.</i>) del humedal “Ciénaga de Tamasopo”, México. Acta Biol. Colomb., 25(2):255-264. ISSN  012 0 – 548X, ISSN online 1900-1649. Bogotá, Colombia. FI 0.525. DOI: <a href="https://doi.org/10.15446/abc.v25n1.75095">https://doi.org/10.15446/abc.v25n1.75095</a></li><br>
                <li>Angélica E. Ramírez-Rodríguez, Bernardo Bañuelos-Hernández, Mariano J. García-Soto, Dania G. Govea-Alonso, Sergio Rosales-Mendoza, <b>M. Catalina Alfaro de la Torre</b>, Elizabeth Monreal-Escalante, Luz M. T. Paz-Maldonado (2019) Arsenic removal using Chlamydomonas reinhardtii modified with the gene acr3 and enhancement of its performance by decreasing phosphate in the growing media. International Journal of Phytoremediation, 21(7):617-623. Publicado en línea 15032019. ISSN: 1522-6514 (Print) 1549-7879 (Online). <a href="https://doi.org/10.1080/15226514.2018.1546274">https://doi.org/10.1080/15226514.2018.1546274</a></li><br>
                <li>Carlos E. Flores-Chaparro, Mayra C. Rodriguez-Hernandez, Luis Felipe Chazaro-Ruiz, <b>Ma. Catalina Alfaro-De la Torre</b>, Miguel A. Huerta-Diaz, Jose Rene Rangel-Mendez (2018). Chitosan-macroalgae biocomposites as potential adsorbents of water- soluble hydrocarbons: Organic matter and ionic strength effects. Journal of Cleaner Production, 197(Part 1): 633-642.</li><br>
                <li>Juan Carlos Tejeda González, Violeta Mendezcarlo Silva, <b>Ma. Catalina Alfaro de la Torre</b>, Pedro Medellín Milán (2018). Requerimientos para la implementación del derecho humano al agua y al saneamiento en México: caso de estudio en el altiplano potosino. Revista Legislativa de Estudios Sociales y de Opinión Pública, 11(21) Ene-Abr. pp. 111-144.</li><br>
                <li>Pérez-Castillo F.V., <b>M. Catalina Alfaro-De la Torre</b>, Rebeca Y. Pérez-Rodríguez, Francisco A. Comín-Sebastán (2017) Tracing Anthropogenic Disturbances of a Wetland Through Carbon and Nitrogen Isotope Analyses in Sediments. Journal of Natural Resources and Development, 7:22-29. ISSN (electrónico) 0719-2452. DOI: <a href="https://doi.org/10.5027/jnrd.v7i0.03">10.5027/jnrd.v7i0.03</a>.</li><br>
                <li>Carlos E. Flores-Chaparro, Luis Felipe Chazaro Ruiz, <b>Ma. Catalina Alfaro-De la Torre</b>, Miguel Angel Huerta-Diaz. Jose Rene Rangel-Mendez (2017) Biosorption removal of benzene and toluene by three-dried macroalgae at different ionic strength and temperatures: algae biochemical composition and kinetics. Journal of Environmental Management. 193(1): 126-135. ISSN: 0301-4797. DOI: <a href="https://doi.org/10.1016/j.jenvman.2017.02.005">https://doi.org/10.1016/j.jenvman.2017.02.005</a>.</li><br>
                <li>Rebeca Y. Pérez-Rodríguez, Javier Castro-Larragoitia, <b>María C. Alfaro-De La Torre</b> & Fernando Díaz-Barriga (2017) Optimization of an acidic digestion method for the determination of total Pb concentration and its isotope ratios in human blood using ICP-QMS. Journal of Environmental Science and Health, Part A, 52(4):350-358. ISSN: 1093-4529 DOI: <a href="https://doi.org/10.1080/10934529.2016.1260889">10.1080/10934529.2016.1260889</a></li><br>
                <li>Flores-Chaparro CE, Chazaro Ruiz LF, <b>Alfaro-De la Torre MC</b>, Rangel-Mendez JR (2016). Soluble hydrocarbons uptake by porous carbonaceous adsorbents at different water ionic strength and temperature: something to consider in oil spills. Environ Sci Pollut Res 23(11):11014-11024. ISSN: 1674-7499. DOI <a href="https://doi.org/10.1007/s11356-016-6286-0">10.1007/s11356-016-6286-0</a>.</li><br>
                <li>K. Monzalvo-Santos, <b>M.C. Alfaro-De la Torre</b>, L. Chapa-Vargas, J. Castro-Larragoitia, R. Rodríguez-Estrella (2016) Arsenic and lead contamination in soil and in feathers of three resident passerine species in a semi-arid mining region of the Mexican plateau. Journal of Environmental Science and Health, Part A. 51(10):825-832. ISSN 1093-4529. DOI: <a href="https://doi.org/10.1080/10934529.2016.1181451">10.1080/10934529.2016.1181451</a></li><br>
                <li>Rocha, H., Cardona, A., Graniel, E., <b>Alfaro, C.</b>, Castro, J., Rüde, T., Herrera, E., Heise, L. 2015. Interfases de agua dulce y agua salobre en la región de Mérida-Progreso, Yucatán. Tecnología y Ciencias del Agua, 6(6), 89-112. ISSN 0187-8336.</li><br>
                <li>M.C. Rodriguez-Hernandez, I. Bonifas, M.C. <b>Alfaro-de la Torre</b>, J. L. Flores-Flores, B. Bañuelos-Hernández, O. Patiño-Rodríguez. 2015. Increased accumulation of cadmium and lead under Ca and Fe deficiency in Typha latifolia: A study of two pore channel (TPC1) gene responses. Environmental and Experimental Botany, Vol. 115(1):38-48. ISSN: 0098-8472. <a href="http://dx.doi.org/10.1016/j.envexpbot.2015.02.009">http://dx.doi.org/10.1016/j.envexpbot.2015.02.009</a>.</li>
              </ul>
              <br>
              <strong>Capítulo de libros</strong><br><br>
              <ul class="vineta">
                <li>Candy Carranza Alvarez, Nahúm Andrés Medellín Castillo, Juan José Maldonado Miranda, <b>Ma Catalina Alfaro de la Torre</b> (2019). Water quality management in San Luis Potosí, México. Aceptado para publicación en el libro “Water Availability and Management in México” dentro de la Serie de Springer “Water Science and Technology Library”. ISSN: 0921-092X. Aceptado el 14/12/2018. Pp. 88-105. En  proceso de revisión editorial. Springer Nature Switzerland.</li>
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
                <li>Evaluación del proceso de eutrofización y alteración ambiental que afecta al sitio RAMSAR Ciénega de Tamasopo (SLP) como base para proponer su manejo integral. 2019-2023. Financiamiento CONACYT CB A1-S-27598. Responsable del Proyecto. Monto: $1,800,000</li><br>
                <li>Identificación, propuesta de manejo y evaluación de la sostenibilidad en el abastecimiento de agua a las comunidades urbanas y rurales del Estado de San Luis Potosí en el contexto de la Agenda 2030. 2018-2021. Financiamiento CEEPAC Fideicomiso 18397. Responsable del Proyecto. Monto: $2,650,000</li><br>
                <li>Inventario nacional de calidad del agua: estrategias de atención prioritaria a la problemática de hidroarsenicismo e hidrofluorosis en zonas de alto riesgo a la exposición. 2020-2021. Prepropuesta 309361 financiada por CONACYT -FORDECYT, Monto: $100,000. Colaboradora en el proyecto. Agosto 2020 – Marzo 2021.</li><br>
                <li>Evaluación de la remoción de una mezcla de diclofenaco y naproxeno mediante humedales construidos con Typha spp. Fondo de Apoyo a la Investigación, UASLP, 2018. Responsable de la propuesta: $38000.</li><br>
                <li>Identificación, propuesta de manejo y evaluación de sostenibilidad de zonas y obras factibles para el abastecimiento de agua potable en áreas rurales de la región del Altiplano Potosino – definición de las mejores alternativas. Proyecto FMSLP-2012-01 (no. 194185). 2012-2015. Dr Pedro Medellín Milán (director), Ma Catalina Alfaro de la Torre (colaboradora y responsable de los estudios de calidad del agua). Monto: $1,063850.00.</li><br>
                <li>Implementación de un Sistema con Humedales Construidos (SHC) para el tratamiento del agua del lago del Parque de Morales. Proyecto presentado a empresa CUMMINS-Filtración en Enero de 2013. Responsable de la propuesta: $238275.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>  <br><br><br>
    </div>
    </div>
</div>

@endsection