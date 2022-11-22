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

Route::get('/profesores', function () {
    return view('profesores/ACardona');
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
<<<<<<< HEAD
=======
});


Route::get('/cursos', function () {
    return view('cursos');
>>>>>>> ccb5061efb067a3c4ddecb42ad11fa250160ae16
});