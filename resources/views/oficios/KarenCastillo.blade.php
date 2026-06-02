
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>ADMISIÓN 2026</strong></h1><br>
    </div>
    <div class="col-12 col-sm-12">
        <div>
        <h1><strong>Programa Multidisciplinario de Posgrado en <br> Ciencias Ambientales</strong></h1>
        <br><br>
        <h4>Programa de Maestría en Ciencias Ambientales de doble titulación</h4><br>
        <p>
            Universidad Autónoma de San Luis Potosí, Facultades de Ingeniería, Ciencias Químicas, Medicina y Ciencias Sociales y Humanidades en colaboración con Facultad de Desarrollo Espacial y Sistemas de Infraestructura (Faculty of Spatial Development and Infrastructure Systems) de la Universidad de Ciencias Aplicadas (TH_Koeln) de Colonia, Alemania.
        </p>

        <p>Oficio No. PMPCA26-148</p>
        <p>Carta para trámite de visa Residente Temporal Estudiante</p>
        <p>Firma el Dr. Alfredo Ávila Galarza, Coordinador Académico del Programa Multidisciplinario de Posgrado en Ciencias Ambientales de la Universidad Autónoma de San Luis Potosí</p>

        <div class="col-12 col-sm-12 p-5 img-fluid">
          <p align="right"><a href="{{asset('storage/oficios/148_DAAD_KarenRoxsanaCastilloCoronel.pdf')}}" target="_blank" class="enlacesNormativa">Descargar documento</a></p>  
          <img src="{{asset('storage/images/148_DAAD_KarenRoxsanaCastilloCoronel.png')}}" alt=" ">
        </div>

      </div>
    </div>
    </div>
    <br><br><br>
</div>

@endsection