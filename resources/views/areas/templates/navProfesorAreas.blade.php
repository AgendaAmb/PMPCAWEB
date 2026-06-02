<div id="p-container" class="container px-lg-8.5">

    <ul class=" nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item px-1 " role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 1 } " class="d-none d-md-block nav-link btn btn-primary rounded-pill my-1" id="pills-evaluacion-tab" data-bs-toggle="pill" data-bs-target="#pills-evaluacion" type="button" role="tab" aria-controls="pills-evaluacion" aria-selected="true"
            @click="setAreaData(1)"
            >Evaluación&nbspambiental
            </button>
        </li>
        <li class="nav-item px-1" role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 2 }" class="d-none d-md-block nav-link btn btn-primary rounded-pill my-1" id="pills-gestion-tab" data-bs-toggle="pill" data-bs-target="#pills-gestion" type="button" role="tab" aria-controls="pills-gestion" aria-selected="false"
            @click="setAreaData(2)"
            >&nbsp&nbspGestión&nbspambiental&nbsp&nbsp</button>
        </li>
        <li class="nav-item px-1" role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 3 }" class="d-none d-md-block nav-link btn btn-primary rounded-pill my-1" id="pills-prevencion-tab" data-bs-toggle="pill" data-bs-target="#pills-prevencion" type="button" role="tab" aria-controls="pills-prevencion" aria-selected="false"
            @click="setAreaData(3)"
            >Prevención&nbspy&nbspcontrol</button>
        </li>
        <li class="nav-item px-1" role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 4 }" class="d-none d-md-block nav-link btn btn-primary rounded-pill my-1" id="pills-recursos-tab" data-bs-toggle="pill" data-bs-target="#pills-recursos" type="button" role="tab" aria-controls="pills-recursos" aria-selected="false"
            @click="setAreaData(4)"
            >&nbsp&nbspRecursos&nbspnaturales&nbsp&nbsp</button>
        </li>
        <li class="nav-item px-1" role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 5 }" class="d-none d-md-block nav-link btn btn-primary rounded-pill my-1" id="pills-salud-tab" data-bs-toggle="pill" data-bs-target="#pills-salud" type="button" role="tab" aria-controls="pills-salud" aria-selected="false"
            @click="setAreaData(5)"
            >&nbsp&nbspSalud&nbspambiental&nbsp&nbsp</button>
        </li>
    </ul>

    <ul class=" d-md-none nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item px-1 " role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 1 }" class="nav-link btn btn-primary rounded-pill" id="pills-evaluacion-tab" data-bs-toggle="pill" data-bs-target="#pills-evaluacion" type="button" role="tab" aria-controls="pills-evaluacion" aria-selected="true"
            @click="setAreaData(1)"
            >EA
            </button>
        </li>
        <li class="nav-item px-1" role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 2 }" class="nav-link btn btn-primary rounded-pill" id="pills-gestion-tab" data-bs-toggle="pill" data-bs-target="#pills-gestion" type="button" role="tab" aria-controls="pills-gestion" aria-selected="false"
            @click="setAreaData(2)"
            >GE</button>
        </li>
        <li class="nav-item px-1" role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 3 }" class="nav-link btn btn-primary rounded-pill" id="pills-prevencion-tab" data-bs-toggle="pill" data-bs-target="#pills-prevencion" type="button" role="tab" aria-controls="pills-prevencion" aria-selected="false"
            @click="setAreaData(3)"
            >PYC</button>
        </li>
        <li class="nav-item px-1" role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 4 }" class="nav-link btn btn-primary rounded-pill" id="pills-recursos-tab" data-bs-toggle="pill" data-bs-target="#pills-recursos" type="button" role="tab" aria-controls="pills-recursos" aria-selected="false"
            @click="setAreaData(4)"
            >RN</button>
        </li>
        <li class="nav-item px-1" role="presentation">
            <button id="botonesGeneral" style="color: white;" v-bind:class="{ active: area == 5 }" class="nav-link btn btn-primary rounded-pill" id="pills-salud-tab" data-bs-toggle="pill" data-bs-target="#pills-salud" type="button" role="tab" aria-controls="pills-salud" aria-selected="false"
            @click="setAreaData(5)"
            >SA</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        
        <div v-bind:class="{ active: area == 1, show: area == 1}" class="tab-pane fade" id="pills-evaluacion" role="tabpanel" aria-labelledby="pills-evaluacion-tab">
            <div class="col-12 col-sm-12 px-5 py-2">
                <div>
                    <div>
                        <br><br>
                        <h4><strong>Nombre de la LGAC del área:</strong></h4>
                        Identificación, análisis y caracterización de problemas ambientales.
                    </div>
                    <hr>
                    <div>
                        <h4><strong>Profesores del área</strong></h4>
                        <a href="{{route('areas.EvaluacionAmbiental.Profesores.MAlgara')}}" id="enlacesProfEvaluacion">Dr. Marcos Algara Siller</a> (Titular doctorado y maestría) <br>
                        <a href="{{route('areas.EvaluacionAmbiental.Profesores.AAvila')}}" id="enlacesProfEvaluacion">Dr. Alfredo Ávila Galarza</a> (Titular doctorado y maestría) <br>
                        <a href="{{route('areas.EvaluacionAmbiental.Profesores.LBernal')}}" id="enlacesProfEvaluacion">Dr. Luis Armando Bernal Jácome</a> (Profesor asociado) <br>
                        <a href="{{route('areas.EvaluacionAmbiental.Profesores.ACardenas')}}" id="enlacesProfEvaluacion">Dr. Abraham Cárdenas Tristán</a> (Titular maestría) <br>
                        <a href="{{route('areas.EvaluacionAmbiental.Profesores.ACardona')}}" id="enlacesProfEvaluacion">Dr. Antonio Cardona Benavides</a> (Titular doctorado y maestría) <br>
                        <a href="{{route('areas.EvaluacionAmbiental.Profesores.GCastro')}}" id="enlacesProfEvaluacion">Dr. Guillermo Javier Castro Larragoitia</a> (Titular doctorado y maestría) <br>
                        <a href="{{route('areas.EvaluacionAmbiental.Profesores.IRazo')}}" id="enlacesProfEvaluacion">Dr. Israel Razo Soto</a> (Profesor asociado) <br>
                    </div>
                </div>
            </div>
        </div>

        <div v-bind:class="{ active: area == 2, show: area == 2}" class="tab-pane fade" id="pills-gestion" role="tabpanel" aria-labelledby="pills-gestion-tab">
            <div class="col-12 col-sm-12 px-5 py-2">
                <div>
                    <br><br>
                    <h4><strong>Nombre de la LGAC del área:</strong></h4>
                    Gestión ambiental, territorio y sustentabilidad.
                </div>
                <hr>
                <div>
                    <h4><strong>Profesores del área</strong></h4>
                    <a href="{{route('areas.GestionAmbiental.Profesores.PJulio')}}" id="enlacesProfEvaluacion">Dra. Patricia Julio Miranda</a> (Titular maestría) <br>
                    <a href="{{route('areas.GestionAmbiental.Profesores.LMarquez')}}" id="enlacesProfEvaluacion">Dr. Leonardo Ernesto Márquez Mireles</a> (Titular doctorado y maestría) <br>
                    <!--<a href="{{route('areas.GestionAmbiental.Profesores.APalacio')}}" id="enlacesProfEvaluacion">Dr. Álvaro Gerardo Palacio Aponte</a> <br>-->
                    <a href="{{route('areas.GestionAmbiental.Profesores.HReyes')}}" id="enlacesProfEvaluacion">Dr. Humberto Reyes Hernández</a> (Titular doctorado y maestría) <br>
                    <a href="" id="enlacesProfEvaluacion">Dra. Mónica Terán Hernández</a> (Profesora asociada)<br>
                    <a href="{{route('areas.GestionAmbiental.Profesores.AVant')}}" id="enlacesProfEvaluacion">Dra. Anuschka Van´t Hooft</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.GestionAmbiental.Profesores.VVazquez')}}" id="enlacesProfEvaluacion">Dr. Valente Vázquez Solís</a> (Titular doctorado y maestría) <br>
                    
                     
                </div>
                <hr>
                <div>
                    <h5>Facultad de Ciencias Sociales y Humanidades</h5>
                    <ol>
                        <li>Laboratorio audiovisual (responsable: Lic. Oscar Silva Silva)</li>
                        <li>Laboratorio de Cómputo (responsable: Ing. Juan Enrique Avalos Arguijo)</li>
                        <li>Laboratorio SIG y Percepción Remota (repsonsable: Mtra. Erika Galarza Rincón)</li>
                    </ol>
                </div>
            </div>
        </div>

        <div v-bind:class="{ active: area == 3, show: area == 3}" class="tab-pane fade" id="pills-prevencion" role="tabpanel" aria-labelledby="pills-prevencion-tab">
            <div class="col-12 col-sm-12 px-5 py-2">
                <div>
                    <br><br>
                    <h4><strong>Nombre de la LGAC del área:</strong></h4>
                    Tecnología ambiental para la remediación de sitios contaminados y aprovechamiento de residuos.
                </div>

                <hr>

                <div>
                    <h4><strong>Profesores del área</strong></h4>
                    <a href="{{route('areas.PrevencionYControl.Profesores.MAlfaro')}}" id="enlacesProfEvaluacion">Dra. Ma. Catalina Alfaro de la Torre</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.PrevencionYControl.Profesores.RBriones')}}" id="enlacesProfEvaluacion">Dr. Roberto Briones Gallardo</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.PrevencionYControl.Profesores.CCarranza')}}" id="enlacesProfEvaluacion">Dra. Candy Carranza Álvarez</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.PrevencionYControl.Profesores.ECervantes')}}" id="enlacesProfEvaluacion">Dra. Elsa Cervantes González</a> (Titular doctorado y maestría)<br>
                    <a href="{{route('areas.PrevencionYControl.Profesores.PDiaz')}}" id="enlacesProfEvaluacion">Dra. Paola Elizabeth Díaz Flores</a> (Titular doctorado y maestría)<br>
                    <a href="{{route('areas.PrevencionYControl.Profesores.NMedellin')}}" id="enlacesProfEvaluacion">Dr. Nahúm Andrés Medellín Castillo</a> (Profesor asociado) <br>
                    <a href="{{route('areas.PrevencionYControl.Profesores.IRodriguez')}}" id="enlacesProfEvaluacion">Dr. Israel Rodríguez Torres</a> (Titular maestría) <br>
                    <a href="{{route('areas.PrevencionYControl.Profesores.LRosales')}}" id="enlacesProfEvaluacion">Dr. Luis Manuel Rosales Colunga</a>  (Titular maestría)<br>              
                </div>
            </div>
        </div>

        <div v-bind:class="{ active: area == 4, show: area == 4}" class="tab-pane fade" id="pills-recursos" role="tabpanel" aria-labelledby="pills-recursos-tab">
            <div class="col-12 col-sm-12 px-5 py-2">
                <div>
                    <br><br>
                    <h4><strong>Nombre de la LGAC del área:</strong></h4>
                    Conocimiento, aprovechamiento racional y conservación de los recursos naturales renovables.
                </div>

                <hr>

                <div>
                    <h4><strong>Profesores del área</strong></h4>
                    <h6>Titular Doctorado y Maestría</h6>
                    <a href="{{route('areas.RecursosNaturales.Profesores.GAguilar')}}" id="enlacesProfEvaluacion">Dra. Gisela Aguilar Benítez</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.RecursosNaturales.Profesores.GAlvarez')}}" id="enlacesProfEvaluacion">Dr. Gregorio Álvarez Fuentes</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.RecursosNaturales.Profesores.JDNova')}}" id="enlacesProfEvaluacion">Dr. José Arturo De Nova Vázquez</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.RecursosNaturales.Profesores.HDuran')}}" id="enlacesProfEvaluacion">Dr. Héctor Martín Durán García</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.RecursosNaturales.Profesores.JFlores')}}" id="enlacesProfEvaluacion">Dr. José Luis Flores Flores</a> (Titular maestría) <br>
                    <a href="{{route('areas.RecursosNaturales.Profesores.EGarcia')}}" id="enlacesProfEvaluacion">Dra. Erika García Chávez</a> (Profesora asociada) <br>
                    <a href="" id="enlacesProfEvaluacion">Dra. Lluvia Itzel López López</a> (Titular maestría) <br>
                    <a href="{{route('areas.RecursosNaturales.Profesores.CMunoz')}}" id="enlacesProfEvaluacion">Dr. Carlos Alfonso Muñoz Robles</a> (Titular doctorado y maestría) <br>
                    <a href="" id="enlacesProfEvaluacion">Dr. Luis Octavio Negrete Sánchez</a> (Titular maestría) <br>
                    <a href="" id="enlacesProfEvaluacion">Dr. Juan Antonio Rendón Huerta</a> (Titular maestría)<br>
                    <a href="{{route('areas.RecursosNaturales.Profesores.JReyes')}}" id="enlacesProfEvaluacion">Dr. Juan Antonio Reyes Agüero</a> (Titular doctorado y maestría) <br>
                    <!--<a href="{{route('areas.RecursosNaturales.Profesores.JFortanelli')}}" id="enlacesProfEvaluacion">Dr. Javier Fortanelli Martínez</a> <br>-->
                    <!--<a href="{{route('areas.RecursosNaturales.Profesores.BJuarez')}}" id="enlacesProfEvaluacion">Dr. Bertha Irene Juárez Flores</a> <br>
                    <a href="{{route('areas.RecursosNaturales.Profesores.HRamirez')}}" id="enlacesProfEvaluacion">Dr. Hugo Magdaleno Ramírez Tobías</a> <br>-->
                    <a href="{{route('areas.RecursosNaturales.Profesores.LYanez')}}" id="enlacesProfEvaluacion">Dra. Laura Yáñez Espinosa</a> (Profesora asociada)<br>
                </div>
                <hr>
                    <div>
                        <h4><strong>Infraestructura</strong></h4>
                        <ol>
                            <li>Un auditorio (80) personas</li>
                            <li>4 salones (para 35 personas cada uno)</li>
                            <li>3 salas de trabajo grupal (para 8 y/o 10 personas)</li>
                            <li>Herbario Isidro Palacios</li>
                            <li>Laboratorio de Fitoquímica</li>
                            <li>Laboratorio de Recursos Bióticos</li>
                            <li>Laboratorio de Fisiología vegetal</li>
                            <li>Laboratorio de Agroprocesos</li>
                            <li>Laboratorio de Nutrición animal con un área de Ecología Vegetal</li>
                            <li>Laboratorio de Usos rudos</li>
                            <li>Unidad de Secado por dispersión</li>
                            <li>Invernadero tipo túnel</li>
                            <li>Camioneta tipo Van para 9 pasajeros</li>
                            <li>Vehículo Jeep 2 puertas 4 x 4</li>
                            <li>Camioneta Pick up estándar 2 puertas</li>
                            <li>Jeep para 5 pasajeros</li>
                            <li>Jeep wrangler Sahara techo duro</li>
                        </ol>
                    </div>
            </div>
        </div>
        
        <div v-bind:class="{ active: area == 5, show: area == 5}" class="tab-pane fade" id="pills-salud" role="tabpanel" aria-labelledby="pills-salud-tab">
            <div class="col-12 col-sm-12 px-5 py-2">
                <div>
                    <br><br>
                    <h4><strong>Nombre de la LGAC del área:</strong></h4>
                    Evaluación del riesgo en salud humana y ecológica a través de intervenciones comunitarias.
                </div>

                <hr>

                <div>
                    <h4><strong>Profesores del área</strong></h4>
                    <a href="{{route('areas.SaludAmbiental.Profesores.JAvalos')}}" id="enlacesProfEvaluacion">Dr. José Antonio Ávalos Lozano</a> (Titular doctorado y maestría) <br>
                    <!--<a href="{{route('areas.SaludAmbiental.Profesores.JCalderon')}}" id="enlacesProfEvaluacion">Dra. Jaqueline Calderón Hernández</a> <br>-->
                    <a href="{{route('areas.SaludAmbiental.Profesores.VCilia')}}" id="enlacesProfEvaluacion">Dra. Virginia Gabriela Cilia López</a> (Titular doctorado y maestría) <br>
                    <!--<a href="{{route('areas.SaludAmbiental.Profesores.ACubillas')}}" id="enlacesProfEvaluacion">Dra. Ana Cristina Cubillas Tejeda</a> <br>-->
                    <a href="{{route('areas.SaludAmbiental.Profesores.FDiaz')}}" id="enlacesProfEvaluacion">Dr. Fernando Díaz-Barriga Martínez</a> (Titular doctorado y maestría) <br>
                    <!--<a href="{{route('areas.SaludAmbiental.Profesores.GDominguez')}}" id="enlacesProfEvaluacion">Dra. Gabriela Domínguez Cortinas</a> <br>-->
                    <a href="{{route('areas.SaludAmbiental.Profesores.GEspinosa')}}" id="enlacesProfEvaluacion">Dr. Guillermo Espinosa Reyes</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.SaludAmbiental.Profesores.RFlores')}}" id="enlacesProfEvaluacion">Dr. Rogelio Flores Ramírez</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.SaludAmbiental.Profesores.DGonzalez')}}" id="enlacesProfEvaluacion">Dra. Donají Josefina González Mille</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.SaludAmbiental.Profesores.CIlizaliturri')}}" id="enlacesProfEvaluacion">Dr. César Ilizaliturri Hernández</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.SaludAmbiental.Profesores.JMejia')}}" id="enlacesProfEvaluacion">Dr. José de Jesús Mejía Saavedra</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.SaludAmbiental.Profesores.FPerez')}}" id="enlacesProfEvaluacion">Dr. Francisco Javier Pérez Vázquez</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.SaludAmbiental.Profesores.SRomero')}}" id="enlacesProfEvaluacion">Dra. Silvia Romero Contreras</a> (Titular doctorado y maestría) <br>
                    <a href="{{route('areas.SaludAmbiental.Profesores.MVallejo')}}" id="enlacesProfEvaluacion">Dr. Moisés Roberto Vallejo Pérez</a> (Titular doctorado y maestría) <br>
                </div>
            </div>
        </div>
    </div>
</div>