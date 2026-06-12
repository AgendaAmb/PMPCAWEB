<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdminFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (! Schema::hasColumn('users', 'username')) {
                $table->string('username')->nullable()->unique()->after('name');
            }

            if (! Schema::hasColumn('users', 'rpe')) {
                $table->string('rpe')->nullable()->unique()->after('email');
            }

            if (! Schema::hasColumn('users', 'uaslp_username')) {
                $table->string('uaslp_username')->nullable()->unique()->after('rpe');
            }

            if (! Schema::hasColumn('users', 'role')) {
                $table->string('role')->default(User::ROLE_CAPTURISTA)->after('password');
            }

            if (! Schema::hasColumn('users', 'is_active')) {
                $table->boolean('is_active')->default(false)->after('role');
            }

            if (! Schema::hasColumn('users', 'uaslp_authenticated_at')) {
                $table->timestamp('uaslp_authenticated_at')->nullable()->after('email_verified_at');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            foreach (['username', 'rpe', 'uaslp_username', 'role', 'is_active', 'uaslp_authenticated_at'] as $column) {
                if (Schema::hasColumn('users', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
}
