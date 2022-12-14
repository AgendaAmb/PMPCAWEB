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
  <h5><strong>Facultad de Agronomía y Veterinaria. SNI nivel I</strong></h5>
  <br>
  <p>
      Km. 14.5 Carretera San Luis Potosí, Matehuala, Ejido Palma de la Cruz <br>
      Soledad de Graciano Sánchez,  San Luis Potosí, S.L.P., Apdo. Postal 32, C.P. 78321 <br>
      Teléfono (444) 852-40-56 al 60 <br>
      <a href="mailto:hugo.ramirez@uaslp.mx"> hugo.ramirez@uaslp.mx </a>
  </p>

  <div class="enlacesprof">
    <a href="https://investigadores.uaslp.mx/InvestigadorProfile/vC8AAA%3D%3D"> Webpage </a>
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

        <p> Cursos </p>

        <p></p>
        <ul class="vineta">
          <li> Fisiología ambiental de plantas </li>
        </ul>

        <p> LGAC </p>
        <p></p>
        <ul class="vineta">
          <li> Biología funcional </li>
          <li> Sistemas de aprovechamiento de recursos bióticos </li>
        </ul>

    </div>
  </div>

</div>

@endsection
