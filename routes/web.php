<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\UaslpAuthController;
use App\Http\Controllers\TesisController;
use App\Models\User;
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
})->name('index');

Route::get('profesor/', function () {
    return view('detailsProfessor');
});

Route::get('/oficios/AlexanderCarranza', function () {
            return view('oficios.AlexanderCarranza');
        });
Route::get('/oficios/AlejandraLopez', function () {
            return view('oficios.AlejandraLopez');
        });
Route::get('/oficios/DavidJung', function () {
            return view('oficios.DavidJung');
        });
Route::get('/oficios/DeniseEnokibara', function () {
            return view('oficios.DeniseEnokibara');
        });
Route::get('/oficios/EmiliaBoutin', function () {
            return view('oficios.EmiliaBoutin');
        });
Route::get('/oficios/IsabelRodas', function () {
            return view('oficios.IsabelRodas');
        });
Route::get('/oficios/KarenCastillo', function () {
            return view('oficios.KarenCastillo');
        });
Route::get('/oficios/LidiaRosenfeld', function () {
            return view('oficios.LidiaRosenfeld');
        });
Route::get('/oficios/MarciaLeon', function () {
            return view('oficios.MarciaLeon');
        });
Route::get('/oficios/ValentinaUrrutia', function () {
            return view('oficios.ValentinaUrrutia');
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

        Route::get('ProblematicayGestion', function () {
            return view('programas.problematicaygestion');
        })->name('ProblematicayGestion');
    });

    Route::prefix('Optativos')->name('Optativos.')->group(function () {

        Route::get('GestionAmbOpeMinMet', function () {
            return view('programas.GestionAmb');
        })->name('GestionAmbOpeMinMet');

        Route::get('NaturalezaySociedad', function () {
            return view('programas.NatSociedad');
        })->name('NaturalezaySociedad');

        Route::get('TeoriadelaHistoria', function () {
            return view('programas.TeoriaHistoria');
        })->name('TeoriadelaHistoria');

        Route::get('ParticipacionSocial', function () {
            return view('programas.ParticipacionSocial');
        })->name('ParticipacionSocial');

        Route::get('FisicoquimicaAguasNat', function () {
            return view('programas.FisicoquimicaAguasNat');
        })->name('FisicoquimicaAguasNat');

        Route::get('RemediacionSitiosCont', function () {
            return view('programas.RemediacionSitiosContaminados');
        })->name('RemediacionSitiosCont');

        Route::get('EcologiadelaProdCosechas', function () {
            return view('programas.EcologiaProduccion');
        })->name('EcologiadelaProdCosechas');

        Route::get('EvManejoRecursosNat', function () {
            return view('programas.EvManejoRecursosNat');
        })->name('EvManejoRecursosNat');

        Route::get('FisiologiaAnimalAmb', function () {
            return view('programas.FisiologiaAnimalAmb');
        })->name('FisiologiaAnimalAmb');

        Route::get('ManejoRecursosRenovZonasSecas', function () {
            return view('programas.ManejoRecursosNatRenovablesZonasSecas');
        })->name('ManejoRecursosRenovZonasSecas');
    });

    Route::prefix('TopicosSelectos')->name('TopicosSelectos.')->group(function () {

        Route::get('BiodiversidadNutricionySeguridadAlimentaria', function () {
            return view('programas.Biodiversidad');
        })->name('BiodiversidadNutricionySeguridadAlimentaria');

        Route::get('HidrogeologiaAmb', function () {
            return view('programas.HidrogeologiaAmb');
        })->name('HidrogeologiaAmb');

        Route::get('Hidrogeoquimica', function () {
            return view('programas.Hidrogeoquimica');
        })->name('Hidrogeoquimica');

        Route::get('IngenieriaAmbiental', function () {
            return view('programas.IngenieriaAmb');
        })->name('IngenieriaAmbiental');

        Route::get('GestiondeResiduosEcomCir', function () {
            return view('programas.GestiondeResiduos');
        })->name('GestiondeResiduosEcomCir');
        
        Route::get('DisenoEvProyectosdeInv', function () {
            return view('programas.DisenoEvaluacionProyectos');
        })->name('DisenoEvProyectosdeInv');

        Route::get('ClimatologiaAplicada', function () {
            return view('programas.Climatologia');
        })->name('ClimatologiaAplicada');

        Route::get('EcosistyRedRiesgodeDesastre', function () {
            return view('programas.EcosistemasReduccionRiesgo');
        })->name('EcosistyRedRiesgodeDesastre');

        Route::get('EstrategiasApropiacionSocial', function () {
            return view('programas.Estrategiasapropiacionsocial');
        })->name('EstrategiasApropiacionSocial');

        Route::get('SistemasdeAdsorcion', function () {
            return view('programas.SistAdsorcionEYC');
        })->name('SistemasdeAdsorcion');

        Route::get('SistTratamientodeAguasResiduales', function () {
            return view('programas.SistTratamientoAguasR');
        })->name('SistTratamientodeAguasResiduales');

        Route::get('MicrobiologiaAmbAp', function () {
            return view('programas.MicrobiologiaAmb');
        })->name('MicrobiologiaAmbAp');

        Route::get('ElectroquimicaAmb', function () {
            return view('programas.ElectroquimicaAmb');
        })->name('ElectroquimicaAmb');

        Route::get('AnatomiaVegetalAmb', function () {
            return view('programas.AnatomiaVegetalAmb');
        })->name('AnatomiaVegetalAmb');

        Route::get('EcofisiologiaVegetal', function () {
            return view('programas.EcofisiologiaVegetal');
        })->name('EcofisiologiaVegetal');

        Route::get('EcologiaCuantitativa', function () {
            return view('programas.EcologiaCuantitativa');
        })->name('EcologiaCuantitativa');

        Route::get('EcologiayManejoCuencasH', function () {
            return view('programas.EcologiaManejoCuencasHidrograficas');
        })->name('EcologiayManejoCuencasH');

        Route::get('MetEstadisticosparaInvestigadores', function () {
            return view('programas.MetEstadisticoParaInvestigadores');
        })->name('MetEstadisticosparaInvestigadores');

        Route::get('ModelosAnimalesparaInvestigacionCN', function () {
            return view('programas.ModelosAnimalesparaInv');
        })->name('ModelosAnimalesparaInvestigacionCN');

        Route::get('TiposdeEnergia', function () {
            return view('programas.TiposdeEnergia');
        })->name('TiposdeEnergia');

        Route::get('FarmacognosiaQYFdePlantasMed', function () {
            return view('programas.FarmacognosiaQuimicaFarmacologia');
        })->name('FarmacognosiaQYFdePlantasMed');

        Route::get('Ecotoxicologia', function () {
            return view('programas.Ecotoxicologia');
        })->name('Ecotoxicologia');

        Route::get('FundamentosTMparaEvlaSaludEcosist', function () {
            return view('programas.FundamentosEvSaludEcosistemas');
        })->name('FundamentosTMparaEvlaSaludEcosist');

        Route::get('EvdeRiesgosenSaludHumana', function () {
            return view('programas.EvRiesgoSalud');
        })->name('EvdeRiesgosenSaludHumana');

        Route::get('ComunicacionRiesgosSaludAmb', function () {
            return view('programas.ComunicacionRiesgosSaludAmb');
        })->name('ComunicacionRiesgosSaludAmb');

        Route::get('EvEfectosdelaVaryCambioC', function () {
            return view('programas.EvEfectosVariabilidad');
        })->name('EvEfectosdelaVaryCambioC');

        Route::get('EvImpactoyRiesgoAmb', function () {
            return view('programas.EvImpacto');
        })->name('EvImpactoyRiesgoAmb');

        Route::get('BiologiaMolecularCienciasAmb', function () {
            return view('programas.BiologiaMolecular');
        })->name('BiologiaMolecularCienciasAmb');

        Route::get('EvaluacionAmbientalyAnalisis', function () {
            return view('programas.EvAmbAnalisis');
        })->name('EvaluacionAmbientalyAnalisis');
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

            Route::get('/ACardenas', function () {
                return view('/profesores/ACardenas');
            })->name('ACardenas');

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

            Route::get('/MAlfaro', function () {
                return view('profesores.MAlfaro');
            })->name('MAlfaro');

            Route::get('/RBriones', function () {
                return view('profesores.RBriones');
            })->name('RBriones');

            Route::get('/CCarranza', function () {
                return view('profesores.CCarranza');
            })->name('CCarranza');

            Route::get('/ECervantes', function () {
                return view('profesores.ECervantes');
            })->name('ECervantes');

            Route::get('/PDiaz', function () {
                return view('profesores.PDiaz');
            })->name('PDiaz');

            Route::get('/NMedellin', function () {
                return view('profesores.NMedellin');
            })->name('NMedellin');

            Route::get('/IRodriguez', function () {
                return view('profesores.IRodriguez');
            })->name('IRodriguez');

            Route::get('/LRosales', function () {
                return view('profesores.LRosales');
            })->name('LRosales');

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

            Route::get('DGonzalez', function () {
                return view('profesores.DGonzalez');
            })->name('DGonzalez');

            Route::get('FDiaz', function () {
                return view('profesores.FDiaz');
            })->name('FDiaz');

            Route::get('FPerez', function () {
                return view('profesores.FPerez');
            })->name('FPerez');

            Route::get('GDominguez', function () {
                return view('profesores.GDominguez');
            })->name('GDominguez');

            Route::get('GEspinosa', function () {
                return view('profesores.GEspinosa');
            })->name('GEspinosa');

            Route::get('JAvalos', function () {
                return view('profesores.JAvalos');
            })->name('JAvalos');

            Route::get('JCalderon', function () {
                return view('profesores.JCalderon');
            })->name('JCalderon');

            Route::get('JMejia', function () {
                return view('profesores.JMejia');
            })->name('JMejia');

            Route::get('LYanez', function () {
                return view('profesores.LYanez');
            })->name('LYanez');

            Route::get('MVallejo', function () {
                return view('profesores.MVallejo');
            })->name('MVallejo');

            Route::get('RFlores', function () {
                return view('profesores.RFlores');
            })->name('RFlores');

            Route::get('SRomero', function () {
                return view('profesores.SRomero');
            })->name('SRomero');

            Route::get('VCilia', function () {
                return view('profesores.VCilia');
            })->name('VCilia');

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

Route::get('/procesos', function () {
    return view('procesos');
});

Route::get('/tutorias', function () {
    return view('tutorias');
});

Route::get('/estadisticas', function () {
    return view('estadisticas');
});

Route::get('/becas', function () {
    return view('becas');
});

Route::get('/tesis', [TesisController::class, 'index'])->name('tesis');

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

Route::middleware('guest')->group(function () {
    Route::get('/administrador/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/administrador/login', [AuthenticatedSessionController::class, 'store'])->name('login.attempt');
    Route::get('/uaslp/login', [UaslpAuthController::class, 'login'])->name('uaslp.login');
    Route::get('/callback', [UaslpAuthController::class, 'callback'])->name('uaslp.callback');
});

Route::middleware(['auth', 'active'])->group(function () {
    Route::redirect('/administrador', '/administrador/tesis')->name('administrador');
    Route::get('/administrador/tesis', [TesisController::class, 'admin'])->name('administrador.tesis.index');
    Route::post('/administrador/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::middleware('role:' . User::ROLE_ADMIN . ',' . User::ROLE_EDITOR . ',' . User::ROLE_CAPTURISTA)->group(function () {
        Route::post('/administrador/tesis', [TesisController::class, 'store'])->name('administrador.tesis.store');
    });

    Route::middleware('role:' . User::ROLE_ADMIN . ',' . User::ROLE_EDITOR)->group(function () {
        Route::post('/administrador/import', [TesisController::class, 'import'])->name('administrador.import');
        Route::put('/administrador/tesis/{tesis}', [TesisController::class, 'update'])->name('administrador.tesis.update');
    });

    Route::middleware('role:' . User::ROLE_ADMIN)->group(function () {
        Route::delete('/administrador/tesis/{tesis}', [TesisController::class, 'destroy'])->name('administrador.tesis.destroy');
    });
});
