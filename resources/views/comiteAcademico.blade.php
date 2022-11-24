

@extends('base')

@section('maincontent')


<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div class="col-12 col-sm-12 border">
        <img src="https://placekitten.com/g/1318/500" alt="">
    </div>
    <div class="barraAzulFuerte"></div>
    <div id="professor-description" class="row mb-4 p-5">
        <div class="col-12 col-sm-12">
            <h1><strong>COMITÉ ACADÉMICO</strong></h1>
        </div>
        <div class="col-12 col-sm-12">
            <div>
                <h4><strong>Atribuciones y obligaciones</strong></h4>
                <br>
                <p>
                    La autoridad académica de los PMPCA es el Comité Académico (CA), el cual está conformado con
                    profesores investigadores de tiempo completo, miembros del núcleo básico. El Comité Académico
                    está conformado
                    con tres representantes de cada una de las cinco áreas. Dos profesores titulares con derecho a
                    voz y voto y un
                    suplente con derecho a voz y sólo en ausencia de uno de los titulares de su área con derecho a
                    voto. <br><br>

                    El Comité Académico es presidido por el Coordinador Académico, quien a la vez, es el responsable
                    de ejecutar las acciones emanadas del Comité Académico. A las reuniones del Comité pueden
                    asistir los profesores
                    del núcleo básico de los PMPCA, quienes solamente tienen derecho a voz. <br><br>

                    La permanencia de los integrantes en el Comité Académico dura dos años. Los miembros del Comité
                    Académico se renuevan cada año, uno por área y sólo pueden ser reelegidos una vez en forma
                    consecutiva. <br><br>

                    El Comité Académico sesiona en forma ordinaria el primer martes laborable de cada mes. Las
                    solicitudes deben entregarse a más tardar el viernes previo a la reunión del CA.
                </p>
            </div>
        </div>
        <div class="col-12 col-sm-12">
            <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="#" role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescargar minutas&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
        </div>
    </div>
    <div class="accordion" id="accordionExample">

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h6><strong>Integrantes</strong></h6>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Dra. Paola Elizabeth Díaz Flores</strong> <br> Coordinadora Academica del PMPCA
                    <br><br>
                    <h4><strong>Área de evaluación ambiental</strong></h4>
                        <p><strong id="nameProf">Dr. Antonio Cardona Benavides</strong> <br> Titular y Coordinador de área<br></p> 
                        <p><strong id="nameProf">Dr. Marcos Algara Siller</strong> <br> Titular<br></p> 
                        <p><strong id="nameProf">Dr. Guillermo Javier Castro Larragoitia</strong> <br>Suplente<br></p>
                    <hr>
                    <br>
                    <h4><strong>Área de gestión ambiental</strong></h4>
                        <p><strong id="nameProf">Dra. Anuschka Van´t Hooft</strong> <br> Titular y Coordinador de área<br></p> 
                        <p><strong id="nameProf">Dr. Valente Vázquez Solís</strong> <br> Titular<br></p> 
                        <p><strong id="nameProf">Dr. Humberto Reyes Hernández</strong> <br>Suplente<br></p>
                    <hr>
                    <br>
                    <h4><strong>Área de prevención y control</strong></h4>
                        <p><strong id="nameProf">Dra. Paola Elizabeth Díaz Flores</strong> <br>Coordinadora Académica y Titular<br></p> 
                        <p><strong id="nameProf">Dr. Israel Rodríguez Torres</strong> <br>Titular y Coordinador de área<br></p> 
                        <p><strong id="nameProf">Dr. Nahúm Andrés Medellín Castillo</strong> <br>Suplente<br></p>


                </div>
            </div>
        </div>
    </div>
</div>

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4 p-5">
        <div class="col-12 col-sm-12">
            <h1><strong>NORMATIVA</strong></h1>
        </div>
        <div class="col-12 col-sm-12" id="enlacesNormativa">
            <div>
                <a href="#"> <strong>- Reglamento General de Estudios de Posgrado</strong></a>
                <br><br>
                <a href="#"> <strong>- Propuesta para la creación del Programa Multidisciplinario de Posgrado
                    en Ciencias Ambientales</strong>
                <br><br>
                <a href="#"> <strong>- Reglamentos del PMPCA - Doctorado</strong> </a>
                <br><br>
                <a href="#"> <strong>- Reglamentos del PMPCA - Maestría</strong></a>
                <br><br>
                <a href="#"> <strong>- Sistema Interno de Aseguramiento de la Calidad</strong> </a>
                <br><br>
            </div>
        </div>
    </div>
</div>

@endsection