
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">

        <div class="col-12 col-sm-12">
            <br>
            <h1>
                <strong> @yield('name') </strong>
            </h1>
            <br>
        </div>

        <div class="col-12 col-sm-3 ">
            @yield('image')
        </div>

        <div class="col-12 col-sm-9">
            @yield('information')
        </div>
    </div>
    @yield('extra')
    <br>
    <br>
</div>

@endsection