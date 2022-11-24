
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div class="row mb-4">
    <div class="col-12 col-sm-12">
        <h1><strong>BECAS</strong></h1>
    </div>
    </div>

    <p>Nuestro posgrado se encuentra dentro del Padrón Nacional de Posgrados de Calidad (PNPC) de CONACyT. Sí has
        sido admitido para realizar tus estudios en el PMPCA, y cumples con los requisitos indicados por CONACyT, podrás
        ser postulado en la convocatoria correspondiente para obtener una beca nacional.</p>

    <div class="col-12 col-sm-12 my-4" id="becasEnlace">
        <h4><strong>SNP</strong> </h4>
        <p>En trámite</p>
    </div>
    <div class="col-12 col-sm-12 my-4" id="becasEnlace">
        <h4><strong>Requisitos</strong> </h4>
        <a href="https://www.conacyt.gob.mx/index.php/becas-y-posgrados/becas-nacionales">https://www.conacyt.gob.mx/index.php/becas-y-posgrados/becas-nacionales</a>
    </div>
    <div class="col-12 col-sm-12 my-4" id="becasEnlace">
        <h4><strong>Convocatoria</strong> </h4>
        <a href="https://www.conacyt.gob.mx/index.php/becas-y-posgrados/becas-nacionales">https://www.conacyt.gob.mx/index.php/becas-y-posgrados/becas-nacionales</a><br> <br>
        <p>Si nos visitas de otro país y deseas postularte para obtener una beca CONACYT, además de cumplir con los requis-
            itos que marca dicha institución, deberás presentar copia de tu permiso migratorio "Visa de Residente Temporal
            
            Estudiante" y carta de solvencia económica mientras se recibe el monto de la beca.</p>
    </div>
    <div class="col-12 col-sm-12 my-4" id="becasEnlace">
        <h4><strong>Visa de Residente Temporal Estudiante</strong> </h4>
        <a href="https://www.conacyt.gob.mx/index.php/becas-y-posgrados/becas-para-estudiantes-extranjeros">https://www.conacyt.gob.mx/index.php/becas-y-posgrados/becas-para-estudiantes-extranjeros</a> <br> <br>

        <p>Si eres admitido en el programa de Maestría en Ciencias Ambientales de Doble Titulación, puedes ser candidato a
            las Becas DAAD. <br> <br>
            
            Durante tu estadía en el PMPCA, puedes realizar movilidad nacional e internacional con diversos financiamientos a
            través de las <a href="#"> becas de movilidad para becarias y becarios CONACyT nacionales,</a> CONACyT, beca CNRD, <a href="#">Programa
                de movilidad para estudiantes de Posgrado</a>  y beca DAAD.</p>
    </div>

    <div class="col-12 col-sm-12 p-5 my-5 img-fluid">
        <img src="{{asset('storage/images/Grafica_becas.png')}}" alt="">
    </div>
    

</div>

@endsection