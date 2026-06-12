<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesisTable extends Migration
{
    public function up()
    {
        Schema::create('tesis', function (Blueprint $table) {
            $table->id();
            $table->string('cve_uaslp')->nullable();
            $table->string('programa');
            $table->string('area')->nullable();
            $table->year('anio');
            $table->string('alumno');
            $table->text('tema');
            $table->string('director');
            $table->string('tesisDirector');
            $table->text('url')->nullable();
            $table->timestamps();

            $table->index(['programa', 'area']);
            $table->index('anio');
            $table->index('cve_uaslp');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tesis');
    }
}
