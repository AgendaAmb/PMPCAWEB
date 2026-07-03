<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class TesisImportPreviewTest extends TestCase
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

    public function test_editor_can_correct_a_pending_import_row(): void
    {
        $response = $this->actingAs($this->editor())
            ->withSession($this->previewSession([$this->row('Alumno Original')]))
            ->put(route('administrador.import.preview.update', ['index' => 0]), [
                'preview_cve_uaslp' => '12345',
                'preview_programa' => 'Doctorado en Ciencias Ambientales',
                'preview_area' => 'Nueva Area',
                'preview_anio' => 2025,
                'preview_alumno' => 'Alumno Corregido',
                'preview_tema' => 'Titulo corregido',
                'preview_director' => 'Director Corregido',
                'preview_url' => 'https://example.com/tesis',
            ]);

        $response->assertRedirect(route('administrador.tesis.index'));
        $response->assertSessionHas('tesis_import_preview.rows.0.alumno', 'Alumno Corregido');
        $response->assertSessionHas('tesis_import_preview.rows.0.area', 'Nueva Area');
        $response->assertSessionHas('tesis_import_preview.summary.created', 1);
        $this->assertDatabaseCount('tesis', 0);
    }

    public function test_editor_can_remove_a_pending_import_row_and_remaining_rows_are_reindexed(): void
    {
        $response = $this->actingAs($this->editor())
            ->withSession($this->previewSession([
                $this->row('Primer Alumno'),
                $this->row('Segundo Alumno'),
            ]))
            ->delete(route('administrador.import.preview.destroy', ['index' => 0]));

        $response->assertRedirect(route('administrador.tesis.index'));
        $response->assertSessionHas('tesis_import_preview.rows.0.alumno', 'Segundo Alumno');
        $response->assertSessionHas('tesis_import_preview.summary.byDestination.Doctorado en Ciencias Ambientales|Gestion Ambiental.rows.0.preview_index', 0);
        $this->assertDatabaseCount('tesis', 0);
    }

    public function test_revert_import_action_remains_visible_after_searching(): void
    {
        $response = $this->actingAs($this->editor())
            ->withSession([
                'tesis_last_import_revert' => [
                    ['action' => 'delete', 'id' => 999],
                ],
            ])
            ->get(route('administrador.tesis.index', ['search' => 'agua']));

        $response->assertOk();
        $response->assertSee('Hay una importacion reciente que todavia puedes revertir.');
        $response->assertSee('Revertir ultima importacion');
    }

    private function editor(): User
    {
        return User::create([
            'name' => 'Editor de pruebas',
            'email' => 'editor@example.com',
            'password' => bcrypt('password'),
            'role' => User::ROLE_EDITOR,
            'is_active' => true,
        ]);
    }

    private function previewSession(array $rows): array
    {
        return [
            'tesis_import_preview' => [
                'rows' => $rows,
                'skipped' => 2,
                'hidden' => 1,
                'summary' => [],
            ],
        ];
    }

    private function row(string $alumno): array
    {
        return [
            'cve_uaslp' => null,
            'programa' => 'Doctorado en Ciencias Ambientales',
            'area' => 'Gestion Ambiental',
            'anio' => 2024,
            'alumno' => $alumno,
            'tema' => 'Titulo de prueba',
            'director' => 'Director de prueba',
            'tesisDirector' => 'Director de prueba',
            'url' => null,
        ];
    }
}
