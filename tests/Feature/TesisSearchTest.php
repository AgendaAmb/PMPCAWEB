<?php

namespace Tests\Feature;

use App\Models\Tesis;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class TesisSearchTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config([
            'database.default' => 'sqlite',
            'database.connections.sqlite.database' => ':memory:',
        ]);

        DB::purge('sqlite');
        Artisan::call('migrate:fresh');
    }

    public function test_search_prioritizes_people_matches_over_title_matches(): void
    {
        Tesis::create([
            'programa' => 'Doctorado en Ciencias Ambientales',
            'area' => 'Gestion Ambiental',
            'anio' => 2023,
            'alumno' => 'Perez Medina Pedro',
            'tema' => 'Situacion e impactos en San Luis Potosi',
            'director' => 'Dra. Maria Guadalupe Galindo Mendoza',
            'tesisDirector' => 'Dra. Maria Guadalupe Galindo Mendoza',
        ]);

        Tesis::create([
            'programa' => 'Doctorado en Ciencias Ambientales',
            'area' => 'Gestion Ambiental',
            'anio' => 2016,
            'alumno' => 'Olivera Vargas Luis Alberto',
            'tema' => 'Variabilidad espacial de enfermedades de la cana de azucar',
            'director' => 'Dra. Maria Guadalupe Galindo Mendoza',
            'tesisDirector' => 'Dra. Maria Guadalupe Galindo Mendoza',
        ]);

        $results = Tesis::buscar('luis')
            ->ordenarPorRelevancia('luis')
            ->orderByDesc('anio')
            ->get();

        $this->assertSame('Olivera Vargas Luis Alberto', $results->first()->alumno);
    }
}
