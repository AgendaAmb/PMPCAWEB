@extends('base')

@section('maincontent')

    <script>
        const area = {{ Request::get('area') ?? 1 }}
    </script>

    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12">
                <img :src=image_location alt="">
            </div>
            <div class="barraAzulFuerte"></div>
            <div id="professor-description" class="row p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong> @{{ title }} </strong></h1>
                </div>
            </div>
        </div>
        @include('areas.templates.navProfesorAreas')
    </div>

    <script>
    var app = new Vue({
        el: '#colorTexto',
        data: {
            area: area,
            title: '',
            image_location: ''
        },
        mounted() {
            this.setAreaData(area)
        },
        methods: {
            setAreaData(index){

                switch(index){
                    case 1:
                        this.title = 'Evaluación Ambiental'
                        this.image_location = '/pmpca/storage/images/12.png'
                        break
                    case 2:
                        this.title = 'Gestión Ambiental'
                        this.image_location = '/pmpca/storage/images/13.png'
                        break
                    case 3:
                        this.title = 'Prevención y Control'
                        this.image_location = '/pmpca/storage/images/14.png'
                        break
                    case 4:
                        this.title = 'Recursos Naturales'
                        this.image_location = '/pmpca/storage/images/15.png'
                        break
                    case 5:
                        this.title = 'Salud Ambiental'
                        this.image_location = '/pmpca/storage/images/16.png'
                        break
                }
            }
        },
    })
    </script>
    <p><br></p>
@endsection
