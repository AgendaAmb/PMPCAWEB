@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5 pb-5">
        <div class="col-12 col-sm-12">
            <h1><strong>SEMINARIOS</strong></h1>
        </div>
        <div class="accordion p-2" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <strong>Seminario Multidisciplinario &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Hola</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <strong>Seminario de tesis &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Hola2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
