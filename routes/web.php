<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('profesor/', function () {
    return view('detailsProfessor');
});

Route::get('/base', function () {
    return view('base');
});

Route::get('/comite', function () {
    return view('comiteAcademico');
});

Route::get('/información', function () {
    return view('informacionAcademica');
});

Route::get('/ofertaEducativa', function () {
    return view('ofertaEducativa');
});

Route::get('/areas', function () {
    return view('profesoresyAreas');
});

Route::get('/biblioteca', function () {
    return view('bibliotecas');
});


Route::get('/seminarios', function () {
    return view('seminarios');
});


Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/ACardona', function () {
    return view('/profesores/ACardona');
});

Route::get('/directorio', function () {
    return view('directorio');
});

Route::get('/colaboraciónsocial', function () {
    return view('colaboraciónsocial');
});


Route::get('/protocoloética', function () {
    return view('protocoloética');
});

Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/tramites', function () {
    return view('tramites');
});

Route::get('/estadisticas', function () {
    return view('estadisticas');
});

Route::get('/becas', function () {
    return view('becas');
});

Route::get('/evaluacionAmbiental', function () {
    return view('evaluacionAmbiental');
});

Route::get('/gestionAmbiental', function () {
    return view('gestionAmbiental');
});

Route::get('/prevencion', function () {
    return view('prevencion');
});

Route::get('/recursosNaturales', function () {
    return view('recursosNaturales');
});

Route::get('/saludAmbiental', function () {
    return view('saludAmbiental');
});

Route::get('/tesis', function () {
    return view('tesis');
});

Route::get('/articulosCientificos', function () {
    return view('articulosCientificos');
});