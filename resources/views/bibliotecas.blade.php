
@extends('base')

@section('maincontent')


    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div class="col-12 col-sm-12">
            <img src="https://placekitten.com/g/1318/500" alt="">
        </div>
        <div class="barraAzulFuerte"></div>
        <div id="professor-description" class="row mb-4 p-5">
            <div class="col-12 col-sm-12">
                <h1><strong>BIBLIOTECAS</strong></h1>
            </div>

            <div class="row col-12 col-sm-12 mt-2 mb-4">
                <div class="col-12 col-sm-4">
                    <img src="https://placekitten.com/g/260/160" class="rounded float-end" alt="">
                </div>
                <div class="col-12 col-sm-8">
                    <strong id="h2info">Seminarios</strong> <br> Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Aspernatur, fugit reiciendis maxime suscipit architecto quo corrupti. Nam quisquam quaerat
                    officia quidem minima! Debitis earum cum aut fuga dicta deleniti animi.<br><br>
                    <a class="btn btn-primary" id="botonesGeneral" href="{{url("/seminarios")}}" role="button">Conocer más...</a>
                </div>
            </div>
            <hr>
            <div class="row col-12 col-sm-12 mt-2 mb-4">
                <div class="col-12 col-sm-4">
                    <img src="https://placekitten.com/g/260/160" class="rounded float-end" alt="">
                </div>
                <div class="col-12 col-sm-8">
                    <strong id="h2info">Artículos científicos</strong> <br> Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Aspernatur, fugit reiciendis maxime suscipit architecto quo corrupti.
                    Nam quisquam quaerat officia quidem minima! Debitis earum cum aut fuga dicta deleniti animi.<br><br>
                    <a class="btn btn-primary" id="botonesGeneral" href="{{url("/articulosCientificos")}}" role="button">Conocer más...</a>
                </div>
            </div>

            <hr>

            <div class="row col-12 col-sm-12 mt-2 mb-4">
                <div class="col-12 col-sm-4">
                    <img src="https://placekitten.com/g/260/160" class="rounded float-end" alt="">
                </div>
                <div class="col-12 col-sm-8 ">
                    <strong id="h2info">Tesis</strong> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aspernatur, fugit reiciendis maxime suscipit architecto quo corrupti. Nam quisquam quaerat officia
                    quidem minima! Debitis earum cum aut fuga dicta deleniti animi. <br><br>
                    <a class="btn btn-primary" id="botonesGeneral" href="{{url("/tesis")}}" role="button">Conocer más...</a>
                </div>
            </div>
        </div>
    </div>

@endsection