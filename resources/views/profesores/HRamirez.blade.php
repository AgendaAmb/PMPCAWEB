@extends('profesores.templates.profesor')

@section('name')
Dr. Hugo Magdaleno Ramírez Tobías
@endsection

@section('image')
<img class="mx-auto d-block" src="{{asset('storage/images/Hugo_Magdaleno_Ramirez_Tobias.png')}}" alt="">
@endsection

@section('information')

<div>
  <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
  <h5><strong>Facultad de Agronomía y Veterinaria.</strong></h5>
  <h5><strong>SNI nivel I.</strong></h5>
  <br>
  <p>
      Km. 14.5 Carretera San Luis Potosí, Matehuala, Ejido Palma de la Cruz <br>
      Soledad de Graciano Sánchez,  San Luis Potosí, S.L.P., Apdo. Postal 32, C.P. 78321 <br><br>
      Teléfono (444) 826-1314 <br>
      <a href="mailto:hugo.ramirez@uaslp.mx" style="color:rgb(0, 178, 227)"> hugo.ramirez@uaslp.mx </a><br><br>
  </p>

  <div class="enlacesprof">
            <a target="_blank" href="{{asset('storage/CV/CV_Ramirez_Tobias_Hugo_Magdaleno_2025.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/vC8AAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-7031-5898"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=22136233100"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                <li> Ecofisiología vegetal </li>
                <li> Biodiversidad, nutrición y seguridad alimentaria </li>
              </ul>
        <br>
        <li><strong>LGAC</strong></li>
          <ul class="vineta">
          <li> Sistemas de producción de cosechas y de aprovechamiento de recursos bióticos </li>
          <li> Etnobiología </li>
        </ul><br>
              <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Diédhiou Idrissa. 2022. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/8634" target="_blank">Physiology, metabolomic profiles, and yield of native genotypes of maize (Zea mays l.) and their milpa systems (maize+bean+squash) from San Luis Potosí, mexico, under related effects of climate change.</a></li>
                </ul>
              </ol>
          </div>
      </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
        aria-expanded="false" aria-controls="collapseTwo">
        <strong> Publicaciones</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <p><strong>Artículos de investigación</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Mena-Echevarría, A., <b>Ramírez-Tobias, H. M.</b>, Méndez-Cortés, H., Rojas-velázquez, A., Ramos-Cruz, C. M., & Hipólito-Piedras, R. P. (2025). <a href="https://www.aloki.hu/pdf/2301_343357.pdf" target="_blank">Arbuscular mycorrhizal fungi from dry environments as best options to preserve photosynthetic parameters of Solanum lycopersicum L. plants under limited irrigation</a>. Applied Ecology And Environmental Research, 23(1), 343-357.</li><br>
          <li>García-Nava, F., Peña-Valdivia, C. B., Trejo, C., García-Nava, R., & <b>Ramírez-Tobias, H.</b> (2024). Firmeza, sólidos solubles totales y potencial osmótico de hojas de siete especies de maguey con riego y sin riego. Agro-Divulgación, 4(6). <a href="https://doi.org/10.54767/ad.v4i6.423" target="_blank">https://doi.org/10.54767/ad.v4i6.423</a></li><br>
          <li>Hipólito-Piedras, R. P., Méndez-Cortés, H., <b>Ramírez-Tobías, H. M.</b>, Loredo-Osti, C., Castillo-Lara, P., Martínez-Montoya, J. F., & Olalde-Portugal, V. (2024). Hongos micorrízicos arbusculares asociados al matorral desértico rosetófilo de la Sierra de Catorce, SLP. Revista Chapingo Serie Zonas Áridas, 23, 1-14. <a href="https://doi.org/10.5154/r.rchsza.2024.23.01" target="_blank">https://doi.org/10.5154/r.rchsza.2024.23.01</a></li><br>
          <li>Mena-Echevarría, A., <b>Ramírez-Tobias, H. M.</b>, Méndez-Cortés, H., Rojas-Velázquez, Á. N., López-Palacios, C., & Hipólito-Piedras, R. P. (2024). The origin and type of inoculum determine the effect of arbuscular mycorrhizal fungi on tomato under different irrigation regimes. Agronomy, 14(8), 1687. <a href="https://doi.org/10.3390/agronomy14081687" target="_blank">https://doi.org/10.3390/agronomy14081687</a></li><br>
          <li>García-Nava, F., Peña-Valdivia, C. B., Trejo, C., García-Nava, R., & <b>Ramírez-Tobias, HM.</b> (2024). Permeabilidad de las membranas celulares de hojas de maguey (Agave spp.) y su relación con la especie y humedad del suelo. Agro-Divulgación, 4(6). <a href="https://doi.org/10.54767/ad.v4i6.430" target="_blank">https://doi.org/10.54767/ad.v4i6.430</a></li><br>
          <li>Piedras, R. P. H., Cortés, H. M., <b>Ramírez-Tobias, H. M.</b> & Portugal, V. O. (2024). Glomus nanolumen (Glomeraceae), un hongo micorrízico arbuscular en México. Acta Botanica Mexicana, (131), 18. <a href="https://doi.org/10.21829/abm131.2024.2226" target="_blank">https://doi.org/10.21829/abm131.2024.2226</a> </li><br>
          <li>Crespo-Flores, G., <b>Ramírez-Tobías, H. M.</b>, Vallejo-Pérez, M. R., Méndez-Cortés, H., & González-Cañizares, P. J. (2024). Mejora del crecimiento de gramíneas asociadas a Leucaena leucocephala co-inoculada con un hongo micorrízico arbuscular y un aislado de rizobio. Tropical Grasslands-Forrajes Tropicales, 12(2), 92-105. <a href="https://doi.org/10.17138/tgft(12)92-105"> https://doi.org/10.17138/tgft(12)92-105</a></li><br>
          <li>Rojas-Velázquez, Á. N., Guillén-Castillo, O. I., Alcalá-Jauregui, J. A., Loredo-Osti, C., <b>Ramírez-Tobías, H. M.</b>, Romero-Méndez, M. J., ... & Hernández-Montoya, A. (2023). <a href="https://link.springer.com/article/10.1186/s11671-023-03874-w" target="_blank">Effect of a nitrogenous nanocomposite on leaching and N content in lettuce in soil columns</a>. Discover Nano, 18(1), 98.</li><br>
          <li>Guillén-Castillo, O. I., Rojas-Velázquez, Á. N., Alcalá-Jáuregui, J. A., Loredo-Osti, C., <b>Ramírez-Tobías, H. M.</b>, Bertolini, V., & Ortiz, J. C. R. (2023). Nanocompuesto de Nitrógeno como Fertilizante de Liberación Lenta en Columnas de Suelo con Plantas de Lechuga. REVISTA TERRA LATINOAMERICANA, 41. <a href="https://doi.org/10.28940/terra.v41i0.1712" target="_blank">https://doi.org/10.28940/terra.v41i0.1712</a></li><br>
          <li>Castillo-Pérez, L. J., Torres-Rico, D., Alonso-Castro, A. J., Fortanelli-Martínez, J., <b>Ramírez-Tobias, H. M.</b>, & Carranza-Álvarez, C. (2023). <a href="https://link.springer.com/chapter/10.1007/978-981-99-1079-3_6" target="_blank">Ethnomedicinal Uses, Phytochemistry, Medicinal Potential, and Biotechnology Strategies for the Conservation of Orchids from the Catasetum Genus</a>. In Advances in Orchid Biology, Biotechnology and Omics (pp. 187-207). Singapore: Springer Nature Singapore.</li><br>
          <li>Diédhiou, I., Ramírez-Tobias, H. M., Fortanelli-Martinez, J., & Flores-Ramírez, R. (2022). Maize Intercropping in the Traditional “Milpa” System. Physiological, Morphological, and Agronomical Parameters under Induced Warming: Evidence of related Effect of Climate Change in San Luis Potosí (Mexico). Life, 12(10), 1589. <a href="https://doi.org/10.3390/life12101589">https://doi.org/10.3390/life12101589</a></li><br>
          <li>Diédhiou I, <b>Hugo M. Ramírez-Tobias</b>, Javier Fortanelli-Martinez, Rogelio Flores-Ramírez and Joel Flores (2022). Induced passive heating on the emergence, early growth and photochemical responses of seedlings of native maize (Zea mays L.) genotypes from warm-dry, temperate, and hot and humid climates. Emirates Journal of Food and Agriculture. 35(10): 815-826 <a href="https://doi.org/10.9755/ejfa.2022.v34.i10.2929" target="_blank">https://doi.org/10.9755/ejfa.2022.v34.i10.2929</a></li><br>
          <li>López-Palacios, C., <b>Ramírez-Tobias, H. M.</b>, Flores, J., Gelviz-Gelvez, S. M., Rojas-Velázquez, A. N., & Sauceda-Acosta, C. P. (2022). <a href="https://link.springer.com/article/10.1007/s40415-022-00825-0" target="_blank">Warming due to climate change alters physiological performance, biomass production and microenvironment of Avena sativa</a>. Brazilian Journal of Botany, 1-10.</li><br>
          <li>Crespo-Flores, G., <b>Ramírez-Tobias, H. M.</b>, Vallejo-Pérez, M. R., Méndez-Cortés, H., & González-Cañizares, P. J. (2022). Inoculation with rhizobia and arbuscular mycorrhizal fungi in Leucaena leucocephala plants in nursery phase in a neutral pH substrate. TROPICAL GRASSLANDS-FORRAJES TROPICALES, 10(2), 98-108. <a href="https://doi.org/10.17138/tgft(10)98-108" target="_blank">https://doi.org/10.17138/tgft(10)98-108</a></li><br>
          <li>Crespo Flores, G., <b>Ramírez Tobias, H. M.</b>, Vallejo Pérez, M. R., & Méndez Cortés, H. (2021). Co-inoculation with rhizobia and arbuscular mycorrhizal fungi in seedlings of Prosopis laevigata. Revista mexicana de ciencias agrícolas, 12(7), 1249-1262. <a href="https://doi.org/10.29312/remexca.v12i7.2910" target="_blank">https://doi.org/10.29312/remexca.v12i7.2910</a></li><br>
          <li>Echevarría, A. M., Cortes, <b>Ramírez-Tobias, H. M.</b>, & Rojas, Á. N. (2021). Comparison of two soils for the production of mycorrhizal inoculants in San Luis Potosí, México. Scientia Fungorum. 51:e1315. <a href="https://doi.org/10.33885/sf.2021.51.1315" target="_blank">https://doi.org/10.33885/sf.2021.51.1315</a></li><br>
          <li>Lee-Rangel, H. A., Vázquez Valladolid, A., Mendez-Cortes, H., Garcia-Lopez, J. C., Álvarez-Fuentes, G., Roque-Jimenez, J. A., ... & <b>Ramírez-Tobias, H. M.</b> (2021). Influence of Copra Meal in the Lambs Diet on In Vitro Ruminal Kinetics and Greenhouse Gases Production. Agriculture, 11(10), 925.<a href="https://doi.org/10.3390/agriculture11100925" target="_blank">https://doi.org/10.3390/agriculture11100925</a></li><br>
          <li>Vargas-Ortiz, E., <b>Ramírez-Tobias, H. M.</b>, González-Escobar, J. L., Gutiérrez-García, A. K., Bojorquez-Velazquez, E., Espitia-Rangel, E., & de la Rosa, A. P. B. (2021). Biomass, chlorophyll fluorescence, and osmoregulation traits let differentiation of wild and cultivated Amaranthus under water stress. Journal of Photochemistry and Photobiology B: Biology, 220, 112210. <a href
            ="https://doi.org/10.1016/j.jphotobiol.2021.112210" target="_blank">https://doi.org/10.1016/j.jphotobiol.2021.112210</a></li><br>
          <li>Diédhiou, I., <b>Ramírez-Tobias, H. M.</b>, Martinez, J. F., & Ramírez, R. F. (2021). <a href="https://www.researchgate.net/publication/351069336_Effects_of_different_temperatures_and_water_stress_on_germination_and_initial_growth_of_creole_genotypes_of_maize_from_three_different_agroclimatics_regions_of_San_Luis_Potosi_Mexico" target="_blank">Effects of different temperatures and water stress in germination and initial growth of creole genotypes of maize from three different agroclimatic regions of San Luis Potosí (México)</a>. Maydica, 66(1): 1 - 16</li><br>
          <li><b>Ramírez-Tobias, H. M.</b>, de la Rosa, R. A. C., Flores, J., & López-Palacios, C. (2021). Seedlings from two Agave species differing in microhabitat evolve different tolerance mechanisms to drought and shade under nurse plants. Flora, 274, 151729. <a href="https://doi.org/10.1016/j.flora.2020.151729" target="_blank">https://doi.org/10.1016/j.flora.2020.151729</a></li><br>
          <li>Ortiz-Espinoza, E., Villegas-Rodríguez, F., <b>Ramírez-Tobías, H. M.</b>, Hernández-Arteaga, L. E. D. S., & Marín-Sánchez, J. (2020). <a href="https://novascientia.lasallebajio.edu.mx/ojs/index.php/Nova/article/view/2586/962" target="_blank">Inoculation with endophytic entomopathogenic fungi generates a physiological response and promotes plant growth in poblano pepper plants</a>. Nova scientia, 12(25).</li><br>
          <li>Aragón-Gastélum, J. L., Ramírez-Benítez, J. E., González-Durán, E., González-Salvatierra, C., <b>Ramírez-Tobías, H. M.</b>, Flores, J., ... & Jarquín-Gálvez, R. (2020). Photochemical activity in early-developmental phases of Agave angustifolia subsp. tequilana under induced global warming: Implications to temperature stress and tolerance. Flora, 263, 151535. <a href="https://doi.org/10.1016/j.flora.2019.151535" target="_blank">https://doi.org/10.1016/j.flora.2019.151535</a></li><br>
          <li>Lara-Izaguirre, A. Y., Rojas-Velázquez, A. N., <b>Ramírez-Tobías, H. M.</b>, Alcala-Jauregui, J. A., Méndez-Cortés, H., & Romero-Méndez, M. J. (2020). Respuesta fotosintética de lechuga hidropónica a relaciones de NO3-/NH4+ en verano y otoño. Revista Fitotecnia Mexicana, 43(4-A), 565-565. <a href="https://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S0187-73802020000500565" target="_blank">https://doi.org/10.35196/rfm.2020.4-a.565</a></li><br>
          <li>Reyes-Aguero,J.A., C. Lopez-Palacios, M.E. Romero-Hernandez, <b>H.M. Ramirez-Tobias</b>, C. Michel-Cuello. 2019. <a href=
            "https://dialnet.unirioja.es/servlet/articulo?codigo=7015502" target="_blank">Structural polysaccharides and dietary fiber in floral buds (tunitas) of Nopalea cochenillifera (L.) SALM-DICK from different growth stages</a>. Agrociencia.  53:605-616</li><br>
          <li>Lara-Izaguirre, Ana Y. Angel N. Rojas-Velázquez, Mauricio J. Romero-Méndez, <b>Hugo M. Ramírez-Tobías</b>, Elia Cruz-Crespo, Jorge A. Alcalá-Jáuregui y Catarina Loredo-Osti. 2019.  <a href="https://revistafitotecniamexicana.org/documentos/42-1/3r.pdf" target="_blank">Growth and NO3-accumulation in hydroponic lettuce with nitrate/ammonium ratios in two cultivation seasons</a>. Revista Fitotecnia Mexicana publ. por la Sociedad Mexicana de Fitogenética 42(1):21-29</li><br>
          <li>Ortíz-Espinoza, E. O., Rodríguez, F. V., Sánchez, P. D., Arteaga, L. E. D. S. H., Sánchez, J., <b>Ramírez-Tobias, H.M.</b>, & Guerrero, F. V. (2019). Inoculation with entomopathogenic fungi reduces seed contamination, improves seed germination and growth of chilli seedlings. Africam Journal of Agricultural Research. 14 (32): 1463-1471. <a href="https://doi.org/10.5897/AJAR2019.14061" target="_blank">https://doi.org/10.5897/AJAR2019.14061</a></li><br>
          <li>Vallejo-Pérez, M. R., Contreras, H. R. N., Herrera, J. A. S., Ávila, J. P. L., <b>Ramírez-Tobías, H. M.</b>, Martínez, F. D. B., ... & Vázquez, Á. G. R. (2018). Detection of Clavibacter michiganensis subsp. michiganensis Assisted by Micro-Raman Spectroscopy under Laboratory Conditions. The plant pathology journal, 34(5), 381. <a href="https://doi.org/10.5423/PPJ.OA.02.2018.0019" target="_blank">https://doi.org/10.5423/PPJ.OA.02.2018.0019</a></li><br>
          <li>Aragón‐Gastélum, J. L., Badano, E., Yáñez‐Espinosa, L., <b>Ramírez‐Tobías, H. M.</b>, Rodas‐Ortiz, J. P., González‐Salvatierra, C., & Flores, J. (2017). Seedling survival of three endemic and threatened Mexican cacti under induced climate change. Plant Species Biology, 32(1), 92-99. <a href="https://doi.org/10.1111/1442-1984.12120" target="_blank"> https://doi.org/10.1111/1442-1984.12120</a></li><br>
          <li>Sauceda-Acosta C.P., V.A. González-Hernández, B.H. Sánchez-Soto, R.H. Sauceda-Acosta,<b>H.M. Ramírez-Tobías</b>, J.G. Quintana-Quiroz. 2017. <a href="https://www.scielo.org.mx/scielo.php?pid=S1405-31952017000400409&script=sci_arttext&tlng=en" target="_blank">Macf-ij, automated method for measuring color and leaf area through digital images</a>. Agrociencia. 51(4):409-423. ISSN 1405-3195</li><br>
          <li>Astier M, J. Quetzal, Q. Orozco-Ramírez, M.V. González, J. Morales, P.R. W. Gerritsen, M.A. Escalona, F.J. Rosado-May, J. Sánchez-Escudero, T. Martínez, C. Sánchez-Sánchez, R. Arzuffi, F. Castrejón, H. Morales, L. Soto, R. Mariaca, B. Ferguson, P. Rosset, H. Ramírez, R. Jarquin, F. García-Moya, M. Ambrosion & C. González-Esquivel. 2017. Back to the roots: understanding current agroecological movement, science, and practice in Mexico. Agroecology and Sustainable Food Systems. 41 (3-4): 329-348. <a href="https://www.tandfonline.com/doi/full/10.1080/21683565.2017.1287809" target="_blank">https://www.tandfonline.com/doi/full/10.1080/21683565.2017.1287809</a></li><br>
          <li>Aragón-Gastélum J.L., Ernesto Badano, Laura Yáñez-Espinosa, Hugo M. Ramírez-Tobías, Juan Pablo Rodas-Ortíz, Claudia González-Salvatierra, Joel Flores. 2016. Seedling survival of three endemic and threatened Mexican cacti under induced climate change. Plant Species Biology. 32: 92-99. DOI: <a href="https://doi.org/10.1111/1442-1984.12120" target="_blank">10.1111/1442-1984.12120</a>. ISSN: 1442-1984</li><br>
          <li><b>Ramírez-Tobías H.M.</b>, R. Niño-Vázquez, J.R. Aguirre-Rivera, J. Flores, J.A. De-Nova-Vázquez, R. Jarquin-Gálvez. 2016. Seed viability and effect of temperature on germination of Agave angustifolia subsp. tequilana and A. mapisaga; two useful Agave species. Genetic Resources & Crop Evolution. 63 (5): 881-888. DOI: <a href="https://link.springer.com/article/10.1007/s10722-015-0291-x" target="_blank">10.1007/s10722-015-0291-x</a>. ISSN: 1573-5109</li><br>
          <li>Astier CM, Argueta Q, Orozco-Ramírez Q, González SMV, Morales HJ, Gerritsen PRW, Escalona M, Rosado-May FJ, Sánchez-Escudero J, Martínez TSS, Sánchez-Sánchez CD, Arzuffi BR, Castrejón AF, Morales H, Soto PL, Mariaca MR, Ferguson B, Rosset P, <b>Ramírez.Tobias HM</b>, Jarquin GR, Moya GF, González-Esquivel C y Ambrosio M. 2015. <a href="https://revistas.um.es/agroecologia/article/view/300781" target="_blank">Historia de la agroecología en México</a>. Agroecología 10 (2): 9-17. ISSN: 1887-1941</li><br>
          <li>López-Palacios C, C.B. Peña-Valdivia, J.A. Reyes-Aguëro, J.R. Aguirre-Rivera, <b>H.M. Ramírez-Tobías</b>, R.M. Soto-Hernández, J.F. Jiménez-Bremont. 2015. Inter- and intra-specific variation in fruit biomass, number of seeds, and physical characteristics of seeds in Opuntia spp., Cactaceae. Genetic Resources & Crop Evolution. 62 (8): 1205-1223. DOI: <a href="https://link.springer.com/article/10.1007/s10722-015-0223-9" target="_blank">10.1007/s10722-015-0223-9</a>. ISSN: 1573-5109</li><br>
          <li>Aguilar-Benítez G., C.B. Peña-Valdivia, J. Ruiz-Vega, R. Castro-Rivera, <b>H.M. Ramírez-Tobías</b>. 2014. <a href="https://www.ijastnet.com/journals/Vol_4_No_4_July_2014/11.pdf" target="_blank">Seed germination and early root growth in common bean and maize landraces and improved cultivars at different water stress levels</a>. International Journal of Applied Science and Technology. 4: 118-127. ISSN: 2221-1004</li><br>
          <li>José Luis Aragón-Gastélum, Joel Flores, Laura Yáñez-Espinosa, Ernesto Badano, <b>Hugo M. Ramírez-Tobías</b>, Juan Pablo Rodas-Ortíz, Claudia González-Salvatierra. 2014. <a href="https://www.sciencedirect.com/science/article/abs/pii/S0367253014000711" target="_blank">Induced climate change impairs photosynthetic performance in Echinocactus platyacanthus, an especially protected Mexican cactus species</a>. Flora - Morphology, Distribution, Functional Ecology of Plants. 209: 499 – 503. ISSN: 0367-2530</li><br>
          <li><b>Ramírez Tobías H.M.</b>; C.B. Peña Valdivia; C. Trejo; J.R. Aguirre and H. Vaquera H. 2014. Seed germination of Agave species as influenced by substrate water potential. Biological Research. 47:11. DOI: <a href="https://biolres.biomedcentral.com/articles/10.1186/0717-6287-47-11" target="_blank">10.1186/0717-6287-47-11</a>. ISSN: 0717-6287.</li><br>
          <li><b>Ramírez-Tobías, H.M.</b>, C.B. Peña-Valdivia y J.R. Aguirre. 2014. <a href="https://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S2007-42982014000100011" target="_blank">Biochemical and physiological responses of Agave species to moisture restriction</a>. Botanical Sciences 92 (1): 131-139. ISSN: 2007-4476</li></br>
          <li>Cruz-González B. R. Jarquín G y <b>H.M. Ramírez-Tobías</b>. 2013. <a href="https://www.scielo.org.mx/scielo.php?pid=S2007-09342013000100004&script=sci_abstract&tlng=en" target="_blank">Rubber, coffee and cocoa polyculture economic and environmental viability</a>. Rev. Mex. Cien. Agric. 4: 49-61. ISSN: 2007-0934</li><br>
          <li><b>Ramírez-Tobías, H.M.</b>, C.B. Peña-Valdivia, J.R. Aguirre, J.A. Reyes, A.B. Sánchez-Urdaneta and S. Valle G. 2012. <a href="https://esj-journals.onlinelibrary.wiley.com/doi/10.1111/j.1442-1984.2011.00341.x" target="_blank">Seed germination of Agave species used for spirits in Mexico under different temperatures</a>. Plant Species Biology. 27 (2): 124–137.</li><br>
          <li>Vázquez-Díaz, E., J.R. García-Nava, C.B. Peña-Valdivia, <b>H.M. Ramírez-Tobías</b> y V. Morales-Ramos. 2011. <a href="https://revfitotecnia.mx/index.php/RFM/article/view/557/524" target="_blank">Seed size, emergence and seedling development of maguey (Agave salmiana Otto ex Salm-Dyck)</a>. Revista Fitotecnia Mexicana. 34 (3): 167 - 173</li><br>
          <li><b>Ramírez-Tobías, H.M.</b>, J. R. Aguirre, J.M. Pinos and J. Reyes. 2010. <a href="https://www.researchgate.net/publication/285953626_Nopalito_and_forage_productivity_of_Opuntia_spp_and_Nopalea_sp_Cactaceae_growing_under_greenhouse_hydroponics_system" target="_blank">Nopalito and forage productivity of Opuntia spp. and Nopalea sp. (Cacataceae) growing under green-house hydroponics system</a>. Journal of Food, Agriculture & Environment. 8: 660 – 665.</li><br>
          <li>López-Palacios, C., J.A. Reyes-Agüero, <b>H.M. Ramirez-Tobias</b>, B.I. Juarez-Flores, J.R. Aguirre-Rivera, L. Yáñez-Espinosa and M.A. Ruiz-Cabrera. 2010. <a href="https://www.researchgate.net/publication/259580467_Evaluation_of_attributes_associated_with_the_quality_of_nopalito_Opuntia_SPP_and_Nopalea_SP" target="_blank">Evaluation of attributes associated with the quality of nopalito (Opuntia spp. and Nopalea Sp.)</a>. Italian Journal of Food Science. 22 (4):423-431.</li><br>
          <li><b>Ramírez-Tobías, H.M.</b>, J.A. Reyes A., J.M. Pinos R. y J.R. Aguirre R. 2007. <a href="https://www.redalyc.org/pdf/302/30241603.pdf" target="_blank">Efecto del genotipo y desarrollo sobre el contenido de nutrientes de nopal en hidroponía</a>. Agrociencia, 41: 619-628.</li>
        </ul>
        <br>
        <p><strong>Capítulos de Libros</strong></p>
        <p></p>
        <ul class="vineta">
          <li><b>Ramírez-Tobias, HM</b>. 2023. El Jardín Etnobiológico de San Luis Potosí. En: Viccon-Esquivel et al. México megadiverso visto a través de sus jardines y sus protagonistas. Asociación Mexicana de Jardines Botánicos AMJB / Consejo Nacional de Humanidades, Ciencias y Tecnologías CONAHCYT. México. Pp: 326-331. <a href="http://www1.inecol.edu.mx/publicaciones/Libro_Mexico_Megadiverso.pdf">http://www1.inecol.edu.mx/publicaciones/Libro_Mexico_Megadiverso.pdf</a></li><br>
          <li>Flores J., <b>HM Ramírez-Tobias</b>, C. González, P. Delgado, A: Ponce, JL Aragon. 2019. Mezquital extradesértico. En: La Biodiversidad en San Luis Potosí. Estudio de Estado. Vol. II. CONABIO. México. pp: 41 – 45</li><br>
          <li>Flores J., <b>HM Ramírez-Tobias</b>, C. González, P. Delgado, A: Ponce, JL Aragon. 2019. Matorral desértico rosetófilo. En: La Biodiversidad en San Luis Potosí. Estudio de Estado. Vol. II. CONABIO. México. pp: 41 – 45</li><br>
          <li>Flores J., <b>HM Ramírez-Tobias</b>, C. González, P. Delgado, A: Ponce, JL Aragon. 2019. Matorral desértico micrófilo. En: La Biodiversidad en San Luis Potosí. Estudio de Estado. Vol. II. CONABIO. México. pp: 37 – 40</li><br>
          <li>Flores J., <b>HM Ramírez-Tobias</b>, C. González, P. Delgado, A: Ponce, JL Aragon. 2019. Matorral submontano. En: La Biodiversidad en San Luis Potosí. Estudio de Estado. Vol. II. CONABIO. México. pp: 55 – 57</li><br>
          <li>Flores J., <b>HM Ramírez-Tobias</b>, C. González, P. Delgado, A: Ponce, JL Aragon. 2019. Encinares arbustivos. En: La Biodiversidad en San Luis Potosí. Estudio de Estado. Vol. II. CONABIO. México. pp: 55 – 57</li><br>
          <li><b>Ramírez-Tobías, H.M.</b>, C. López P., J.R. Aguirre, J.A. Reyes, 2012. Hydroponic Cactus Pear Production, Productivity and Quality of Nopalito and Fodder. In: Toshiki Asao. Hydroponics – A Standard Methodology for Plant Biological Researches. InTech. DOI: 10.5772/2215, ISBN 978-953-51-0386-8.</li>
        </ul>
        <br>
        <p><strong>Libros</strong></p>
        <p></p>
        <ul class="vineta">
          <li>Monje, J. J., <b>Ramírez-Tobías, H. M.</b>, & González, M. C. (2023). Aproximaciones teóricas a los sistemas integrados de producción agropecuaria sustentables (SIPAS). Corporación Universitaria Minuto de Dios - UNIMINUTO. DOI: <a hrer="https://doi.org/10.26620/uniminuto/978-958-763-697-0" target="_blank">https://doi.org/10.26620/uniminuto/978-958-763-697-0</a></li><br>
          <li>Jarquin-Galvez, R., M. Naranjo-Valdes, <b>HM Ramírez-Tobias</b>, JP Lara-Avila, JC Maya-Lozano. 2018. Fortalecimiento de la capacidad productiva del suelo (Producción de humus de lombriz). Universidad Autónoma Chapingo. Centro Nacional de Investigación, Innovación y Desarrollo Tecnológico del Café. Universidad Autónoma de San Luis Potosí. 28 p</li><br>
          <li>Lee Rangel HÁ., <b>HM Ramírez-Tobías</b> y JA Roque-Jiménez. 2016. Perspectivas y avances de la producción animal en México. Universidad Autónoma de San Luis Potosí Facultad de Agronomía y Veterinaria. ISBN 978-607-9453-73-2</li><br>
          <li>Jarquin-Galvez, R., R. Schwentesius, M.A. Escalona-Aguilar, <b>H.M. Ramírez-Tobías</b> y N. Dominguez-Gonzalez. 2013. Guía para la comprensión de lineamentos técnicos de operación orgánica. Universidad Autónoma de San Luis Potosí - Universidad Veracruzana – Red Mexicana de Mercados y Tianguis Orgánicos. San Luis Potosí. México. 87 p.</li><br>
          <li><b>Ramírez-Tobías, H.M.</b>; J.A. Reyes  A.; J.R.  Aguirre  R. 2007. Construcción,  establecimiento y manejo  de  un módulo hidropónico para producir nopal. UASLP-Fundación produce San Luis Potosí, AC-CONAZA. San Luis Potosí, S.L.P. México. 24p. ISBN: 970-705-069-1.</li>
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
                <li>University of California Riverside, Plant Physiological Ecology Lab. Isotopes in milpa system under climate change. Research stay.</li><br>
                <li>Fortalecimiento del sistema Jardín Botánico de la UASLP para la conservación y visibilización de la riqueza biocultural y la difusión e intercambio del conocimiento etnobiológico. 2020 – 2022. CONACYT</li><br>
                <li>La asociación simbiótica dual con bacterias nitrofijadoras y hongos micorrízicos para mejorar la producción de leguminosas forrajeras (01/04/2019 - 31/03/2019). FAI-UASLP</li><br>
                <li>Respuestas ecofisiológicas de genotipos criollos de maíz (Zea mays L.) de San Luis Potosí ante efectos relacionados con cambio climático. (02/04/2018 - 31/12/2018). FAI-UASLP</li><br>
                <li>Respuestas ecofisiológicas y moleculares de tres especies de cactáceas con contrastantes rangos de distribución y formas de crecimiento bajo un escenario simulado de calentamiento climático. Proyecto para inclusión de posdoctorante colaborador. 2017-2018. SEP-PRODEP</li><br>
                <li>Universidad Autónoma de Chihuahua, Facultad de Zootecnia y Ecología. Ecofisiología de plantas de pastizal en escenarios de cambio climatico (cambios de temperatura y dióxido de carbono). Estancia de Investigación.</li><br>
                <li>Rendimiento y calidad de lechuga (Lactuca sativa L.)  con productos del compostaje y con nutrición convencional. 2015-2016. FAI-UASLP.</li><br>
                <li>Centro de Investigación Científica de Yucatan. Laboratorio de Ecología fisiológica. Estancia de Investigación.</li><br>
                <li>Formas de propagación natural y factores ambientales que limitan el establecimiento de plántulas de Agave. 2011 – 2013. SEP-PROMEP.</li><br>
                <li>Injerto herbaceo como alternativa para disminuir el estrés hídrico en jitomate (Lycopersicon esculentum Mill. 2011 – 2012. FAI-UASLP.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>  <br><br><br>

</div>

@endsection
