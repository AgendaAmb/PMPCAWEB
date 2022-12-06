@extends('base')

@section('maincontent')
    <html lang="es">

    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12">
                <img src="{{ asset('storage/images/11.png') }}" alt="">
                <div class="barraAzulFuerte"></div>
            </div>
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>PROFESORES Y ÁREAS DE ESPECIALIZACIÓN</strong></h1>
                </div>

                <div class="row col-12 col-sm-12  mt-2 mb-4">
                    <div class="col-12 col-sm-4">
                        <img src="{{ asset('storage/images/12.png') }}" class="rounded float-end" alt="">
                    </div>
                    <div class="col-12 col-sm-8" id="contTablaIzq">
                        <strong id="h2info">Evaluación ambiental</strong> <br>La evaluación de rutas de dispersión,
                        controles
                        de movilidad-retención, estado de los conocimientos en el ambiente, y análisis de sus posibles vías
                        de
                        impacto, constituyen los objetivos de esta área. Las metodologías consisten en el estudio del
                        comportamiento de los contaminantes en diversos ambientes: analizar procesos físicos, químicos y
                        biológicos, fenómenos de transporte de masa, y la interrelación entre
                        diferentes medios. Los datos obtenidos de este análisis permiten evaluar el impacto ambiental para
                        establecer estrategias de prevención y remediación adecuadas. <br><br>
                        <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{ route('areas.details', ['area' => 1]) }}"
                            role="button">Conocer más</a>
                    </div>
                </div>
                <hr>
                <div class="row col-12 col-sm-12 mt-2 mb-4">
                    <div class="col-12 col-sm-4">
                        <img src="{{ asset('storage/images/13.png') }}" class="rounded float-end" alt="">
                    </div>
                    <div class="col-12 col-sm-8" id="contTablaIzq">
                        <strong id="h2info">Gestión ambiental</strong> <br> La LGAC Gestión Ambiental, Territorio y
                        Sustentabilidad, comprende el desarrollo multidisciplinario de conocimientos mediante diversas
                        técnicas
                        y su aplicación en la
                        planeación y el ordenamiento del territorio con un enfoque sustentable. Siendo sus
                        temas prioritarios: las enfermedades emergentes y el cambio climático, la vulnerabilidad y la
                        resiliencia ante desastres y los cambios ambientales en los sistemas socioecológicos. <br><br>
                        <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{ route('areas.details', ['area' => 2]) }}"
                            role="button">Conocer más</a>
                    </div>
                </div>

                <hr>

                <div class="row col-12 col-sm-12 mt-2 mb-4">
                    <div class="col-12 col-sm-4" id="imgcenter">
                        <img src="{{ asset('storage/images/14.png') }}" class="rounded float-end" alt="">
                    </div>
                    <div class="col-12 col-sm-8" id="contTablaIzq">
                        <strong id="h2info">Prevención y control</strong> <br> Formación de recursos humanos de alto
                        nivel,
                        capaces de proporcionar alternativas de soluciones a problemas de contaminación de agua y suelo,
                        métodos
                        de disposición y valorización de residuos, y diseñar e implementar tecnologías ambientales basadas
                        en
                        procesos biológicos, fisicoquímicos y electroquímicos, desarrollo de
                        nuevos materiales ambientales avanzados, así como el uso de fuentes alternas de energías y
                        tecnologías
                        para reducir los efectos de la contaminación ambiental. <br><br>
                        <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{ route('areas.details', ['area' => 3]) }}"
                            role="button">Conocer más</a>
                    </div>
                </div>

                <hr>

                <div class="row col-12 col-sm-12 mt-2 mb-4">
                    <div class="col-12 col-sm-4" id="contTablaIzq">
                        <img src="{{ asset('storage/images/15.png') }}" class="rounded float-end" alt="">
                    </div>
                    <div class="col-12 col-sm-8" id="contTablaIzq">
                        <strong id="h2info">Recursos naturales renovables</strong> <br> La LGAC abordará el conocimiento,
                        aprovechamiento racional y conservación de los recursos naturales renovables. Esto incluye el
                        conocimiento de la composición
                        biótica, estructura y variación de poblaciones y comunidades en relación con factores ambientales y
                        con
                        la perturbación natural y humana; evaluaciones experimentales en condiciones controladas, efectos
                        del
                        ambiente en la producción y repro-
                        ducción del ganado, y cambios ecofisiológicos en plantas silvestres y cultivadas debidos al cambio
                        climático; el análisis de las relaciones recíprocas entre humanos y la biota, a través de los
                        hechos,
                        procesos, materiales recolectados, productos primarios y otras manifestaciones culturales; el
                        análisis
                        integral y comparativo de sistemas agrícolas y pecuarios, tradicionales y empresariales, que permite
                        reconocer los factores que pueden estar limitando su estabilidad y productividad. <br><br>
                        <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{route('areas.details', ['area' => 4])}}"
                            role="button">Conocer más</a>
                    </div>
                </div>

                <hr>

                <div class="row col-12 col-sm-12 mt-2 mb-4">
                    <div class="col-12 col-sm-4">
                        <img src="{{ asset('storage/images/16.png') }}" class="rounded float-end" alt="">
                    </div>
                    <div class="col-12 col-sm-8" id="contTablaIzq">
                        <strong id="h2info">Salud ambiental integral</strong> <br> Las comunidades vulnerables requieren
                        de
                        información y formación para mejorar su calidad de vida a partir de un mejor aprovechamiento de sus
                        recursos naturales
                        y la utilización del conocimiento y la tecnología para la solución de sus problemas
                        más apremiantes entre los que destacan el consumo sustentable y responsable de
                        los recursos naturales, la prevención y el cuidado de la salud, así como estrategias
                        para asegurar el desarrollo sustentable a través de la participación comunitaria responsable.
                        <br><br>
                        <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="{{route('areas.details', ['area' => 5])}}"
                            role="button">Conocer
                            más</a>
                    </div>
                </div>

                <hr>

            </div>
        </div>
    </div>
    @endsection
