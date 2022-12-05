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

Route::get('/biblioteca', function () {
    return view('bibliotecas');
});


Route::get('/seminarios', function () {
    return view('seminarios');
});

//  ! Cursos
Route::prefix('cursos')->name('cursos.')->group(function () {

    // * Cursos
    Route::get('/', function () {
        return view('cursos');
    })->name('index');

    Route::prefix('Basicos')->name('Basicos.')->group(function () {

        Route::get('DesarrolloSustentable', function () {
            return view('programas.desarrolloSustentable');
        })->name('DesarrolloSustentable');

        Route::get('Ecologia', function () {
            return view('programas.ecologia');
        })->name('Ecologia');

        Route::get('IntroduccionEstadistica', function () {
            return view('programas.IntroduccionEstadistica');
        })->name('IntroduccionEstadistica');

    });

    Route::prefix('Optativos')->name('Optativos.')->group(function () {
    });

    Route::prefix('TopicosSelectos')->name('TopicosSelectos.')->group(function () {

    });
});

// ! AREAS DEL PMPCA
Route::prefix('areas')->name('areas.')->group(function () {
    // * Areas del PMPCA
    Route::get('/', function () {
        return view('profesoresyAreas');
    })->name('index');

    // ! Evaluación Ambiental
    Route::prefix('EvaluacionAmbiental')->name('EvaluacionAmbiental.')->group(function () {
        
        // * Principal
        Route::get('/', function () {
            return view('evaluacionAmbiental'); 
        })->name('index');

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {

            Route::get('/ACardona', function () {
                return view('/profesores/ACardona');
            })->name('ACardona');

            Route::get('/GCastro', function () {
                return view('/profesores/GCastro');
            })->name('GCastro');

            Route::get('/MAlgara', function () {
                return view('/profesores/MAlgara');
            })->name('MAlgara');

            Route::get('/AAvila', function () {
                return view('/profesores/AAvila');
            })->name('AAvila');

            Route::get('/LBernal', function () {
                return view('/profesores/LBernal');
            })->name('LBernal');

            Route::get('/IRazo', function () {
                return view('/profesores/IRazo');
            })->name('IRazo');
            
        });
    });

    // ! Gestión Ambiental
    Route::prefix('GestionAmbiental')->name('GestionAmbiental.')->group(function () {

        // * Principal
        Route::get('/', function () {
            return view('gestionAmbiental');
        })->name('index');

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {
        });

    });

    // ! Prevención y Control
    Route::prefix('PrevencionYControl')->name('PrevencionYControl.')->group(function () {

        // * Principal
        Route::get('/', function () {
            return view('prevencion');
        })->name('index');

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {
        });
    });


    // ! Recursos Naturales
    Route::prefix('RecursosNaturales')->name('RecursosNaturales.')->group(function () {

        // * Principal
        Route::get('/', function () {
            return view('recursosNaturales');
        })->name('index');

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {
        });
    });

    // ! Salud Ambiental
    Route::prefix('SaludAmbiental')->name('SaludAmbiental.')->group(function () {

        // * Principal
        Route::get('/', function () {
            return view('saludAmbiental');
        })->name('index');

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {
        });
    });
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

Route::get('/tesis', function () {
    return view('tesis');
});

Route::get('/articulosCientificos', function () {
    return view('articulosCientificos');
});

Route::get('/templateProgramas', function () {
    return view('templateProgramas');
});

Route::get('/desarrolloSustentable', function () {
    return view('/programas/desarrolloSustentable');
});

Route::get('/ecologia', function () {
    return view('/programas/ecologia');
});

Route::get('/intrEstadistica', function () {
    return view('/programas/intrEstadistica');
});

Route::get('/egresados', function () {
    return view('/egresados');
});