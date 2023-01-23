
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
            Teléfono: +52 (444) 826-2300 Ext. 6529 <br>
            alfaroca@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <!--<a target="_blank" href="http://ciep.ing.uaslp.mx/agua/profesor.php?id=3132343537">Webpage</a>-->
            <a target="_blank" href="{{asset('storage/CV/Alfaro_delaTorre_MaCatalina.pdf')}}"><i>Curriculum vitae</i></a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/1hgAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0002-0108-4950"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <!--<a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=57189049601"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>-->
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
                  <li>Ake Hernández Josue Hiram. 2010. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3629/MCA1WQM01001.pdf?sequence=5&isAllowed=y">Water quality monitoring system approach to support Guapi-Macacu River Basin management, Rio de Janeiro, Brazil.</a></li>
                  <li>Zieke Gregor. 2011. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3570/MCA1ZGR201101.pdf?sequence=3&isAllowed=y">Development of a low-cost, high-efficiency solar distillation unit for small-scale use in rural communities.</a></li>
                  <li>Castillo Taleno Vilmaurora. 2012. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3694/MCA1CTV201201.pdf?sequence=3&isAllowed=y">Comparison of two constructed wetlands with different soil depths in relation to their nitrogen removal.</a></li>
                  <li>Aguirre Muñoz Carolina. 2013. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/handle/i/3679">The water framework directive and the Chilean normative: towards a comprehensive relation between water quality and morphological characterization in surface water, Limari Basin, Chile.</a></li>
                  <li>Villarraga Morales Huayna Paola. 2014. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3886/MCA1VMH201401.pdf?sequence=3&isAllowed=y"> Removal of selected constituents of coal pyrolysis effluents in constructed wetlands laboratory scale.</a></li>
                  <li> Rincón Mejía Carlos Andrés. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3891/MCA1RMC201501.pdf?sequence=3&isAllowed=y">Biodegradation of dimethylphenols in a laboratory scaled constructed wetland.</a></li>
                </ul>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <ul class="vineta">
                  <li>Pelallo Martínez Nadia Azenet. 2006. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/5744/MCA1PMN200601.pdf?sequence=1&isAllowed=y">Comportamiento químico del arsénico en sedimentos de sistemas acuáticos contaminados.</a></li>
                  <li>Wong Arguelles Cynthia. 2009. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3575/MCA1WAC200901.pdf?sequence=3&isAllowed=y">Estudio de organismos acuáticos macrobentónicos como indicadores de la contaminación por metales pesados en ríos de la Huasteca Potosina.</a></li>
                  <li>Tejeda González Juan Carlos. 2010. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3701/MCA1TGJ201001.pdf?sequence=3&isAllowed=y">Diseño de un humedal para la remoción de Cd, As y Cr con plantas <em>Thypa Latifolia</em> (Espadaña).</a></li>
                </ul>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <ul class="vineta">
                   <li>Rodríguez Hernández Mayra Cecilia. 2015. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/3945/DCA1EMT01501.pdf?sequence=3&isAllowed=y">Efecto de los mecanismos de transporte de calcio, hierro y zinc en la captación de cadmio y plomo en plantas fitoremediadoras.</a> (Co-Dirección)</li>
                    <li>Pérez Castillo Filiberta Virginia. 2017.  <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4333/DCA1PCF201701.pdf?sequence=1&amp;isAllowed=y">Dinámica de C, N, P y Fe en agua y sedimento en el humedal natural Ciénega de Tamasopo, S.L.P.</a></li>
                    <li>Tejeda González Juan Carlos. 2017. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4203">Methodological approach for using strategic environmental assessment within the mexican decision-making and planning system based on two case studies.</a> (Co-Dirección)</li>
                    <li>Monzalvo Santos Idalia Karina. 2018. <a href="https://repositorioinstitucional.uaslp.mx/xmlui/bitstream/handle/i/4527/DCA1MSI201801.pdf?sequence=1&isAllowed=y">Transferencia de elementos tóxicos resultantes de actividades mineras hacia las poblaciones de aves terrestres residentes del Altiplano Potosino y sus efectos sobre el sistema inmune. </a>(Co-Dirección)</li>
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
                <li><b>Alfaro-De la Torre, Ma. Catalina</b>. Chitosan-macroalgae biocomposites as potential adsorbents of water - soluble hydrocarbons: Organic matter and ionic strength effects, Journal of Cleaner Production. Fecha de Pub. 06-2018</li><br>
                <li><b>Alfaro-De la Torre, Ma. Catalina</b>, Medellín-Milán, Pedro. Requerimientos para la implementación del derecho humano al agua y al saneamiento en México: caso de estudio en el altiplano potosino, Revista Legislativa de Estudios Sociales y de Opinión Pública. Fecha de Pub. 03-2018</li><br>
                <li><b>Alfaro-De la Torre, Ma. Catalina</b>. Tracing anthropogenic disturbances of a wetland through carbon and nitrogen isotope analyses of sediments, Journal of Environmental Quality. Fecha de Pub. 07-2017</li><br>
                <li>Biosorption removal of benzene and toluene by three-dried macroalgae at different ionic strength and temperatures: algae biochemical composition an, Journal of Environmental Management. Fecha de Pub. 05-2017</li><br>
                <li>Optimization of an acidic digestion method for the determination of total Pb concentration and its isotope ratios in human blood using ICP-QMS, Journal of Environmental Science and Health. Fecha de Pub. 03-2017</li><br>
              </ul>
            </div>
          </div>
        </div>
      </div>  <br><br><br>
    </div>
    </div>
</div>

@endsection