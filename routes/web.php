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

// * AREAS DEL PMPCA
Route::prefix('areas')->name('areas.')->group(function () {
    // * Areas del PMPCA
    Route::get('/', function () {
        return view('profesoresyAreas');
    })->name('index');

    // * Detalles de areas
    Route::get('/detalles', function () {
        return view(
            $view = 'areas.detallesArea'
        );
    })->name('details');

    // ! Evaluación Ambiental
    Route::prefix('EvaluacionAmbiental')->name('EvaluacionAmbiental.')->group(function () {

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

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {

            Route::get('/CContreras', function () {
                return view('profesores.CContreras');
            })->name('CContreras');

            Route::get('/MGalindo', function () {
                return view('profesores.MGalindo');
            })->name('MGalindo');

            Route::get('/LMarquez', function () {
                return view('profesores.LMarquez');
            })->name('LMarquez');

            Route::get('/HReyes', function () {
                return view('profesores.HReyes');
            })->name('HReyes');

            Route::get('/AVant', function () {
                return view('profesores.AVant');
            })->name('AVant');

            Route::get('/VVazquez', function () {
                return view('profesores.VVazquez');
            })->name('VVazquez');

            Route::get('/PJulio', function () {
                return view('profesores.PJulio');
            })->name('PJulio');

            Route::get('/APalacio', function () {
                return view('profesores.APalacio');
            })->name('APalacio');

            Route::get('/OReyes', function () {
                return view('profesores.OReyes');
            })->name('OReyes');

        });
    });

    // ! Prevención y Control
    Route::prefix('PrevencionYControl')->name('PrevencionYControl.')->group(function () {

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {

            Route::get('/CCarranza', function () {
                return view('profesores.CCarranza');
            })->name('CCarranza');

            Route::get('/PDiaz', function () {
                return view('profesores.PDiaz');
            })->name('PDiaz');

        });
    });


    // ! Recursos Naturales
    Route::prefix('RecursosNaturales')->name('RecursosNaturales.')->group(function () {

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {

            Route::get('JFortanelli', function () {
                return view('profesores.JFortanelli');
            })->name('JFortanelli');

            Route::get('JGarcia', function () {
                return view('profesores.JGarcia');
            })->name('JGarcia');

            Route::get('JReyes', function () {
                return view('profesores.JReyes');
            })->name('JReyes');

            Route::get('LYanez', function () {
                return view('profesores.LYanez');
            })->name('LYanez');

            Route::get('BJuarez', function () {
                return view('profesores.BJuarez');
            })->name('BJuarez');

            Route::get('CMunoz', function () {
                return view('profesores.CMunoz');
            })->name('CMunoz');

            Route::get('EGarcia', function () {
                return view('profesores.EGarcia');
            })->name('EGarcia');

            Route::get('GAguilar', function () {
                return view('profesores.GAguilar');
            })->name('GAguilar');

            Route::get('GAlvarez', function () {
                return view('profesores.GAlvarez');
            })->name('GAlvarez');

            Route::get('HDuran', function () {
                return view('profesores.HDuran');
            })->name('HDuran');

            Route::get('HRamirez', function () {
                return view('profesores.HRamirez');
            })->name('HRamirez');

            Route::get('JDNova', function () {
                return view('profesores.JDNova');
            })->name('JDNova');

            Route::get('JFlores', function () {
                return view('profesores.JFlores');
            })->name('JFlores');
        });

    });

    // ! Salud Ambiental
    Route::prefix('SaludAmbiental')->name('SaludAmbiental.')->group(function () {

        // * Profesores
        Route::prefix('Profesores')->name('Profesores.')->group(function () {

            Route::get('ACubillas', function () {
                return view('profesores.ACubillas');
            })->name('ACubillas');

            Route::get('CIlizaliturri', function () {
                return view('profesores.CIlizaliturri');
            })->name('CIlizaliturri');

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