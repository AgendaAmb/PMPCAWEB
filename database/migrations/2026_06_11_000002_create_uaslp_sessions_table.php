<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUaslpSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('uaslp_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('ticket')->unique();
            $table->string('session_id');
            $table->timestamp('expires_at');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('uaslp_sessions');
    }
}
