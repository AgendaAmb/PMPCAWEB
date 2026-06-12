<?php

namespace Database\Seeders;

use App\Models\Tesis;
use Illuminate\Database\Seeder;

class TesisSeeder extends Seeder
{
    public function run()
    {
        $rows = require database_path('seeders/data/tesis.php');

        foreach ($rows as $row) {
            Tesis::updateOrCreate([
                'programa' => $row['programa'],
                'area' => $row['area'],
                'anio' => $row['anio'],
                'alumno' => $row['alumno'],
                'tema' => $row['tema'],
            ], [
                'director' => $row['director'],
                'tesisDirector' => $row['director'],
                'url' => $row['url'] ?? null,
            ]);
        }
    }
}
