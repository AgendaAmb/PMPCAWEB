<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'rpe' => env('PMPCA_ADMIN_RPE', '356105'),
        ], [
            'name' => env('PMPCA_ADMIN_NAME', 'Administrador PMPCA'),
            'username' => env('PMPCA_ADMIN_USERNAME', 'a' . env('PMPCA_ADMIN_RPE', '356105')),
            'email' => env('PMPCA_ADMIN_EMAIL', env('PMPCA_ADMIN_RPE', '356105') . '@uaslp.mx'),
            'uaslp_username' => env('PMPCA_ADMIN_USERNAME', 'a' . env('PMPCA_ADMIN_RPE', '356105')),
            'role' => User::ROLE_ADMIN,
            'is_active' => true,
            'email_verified_at' => now(),
            'password' => Hash::make(env('PMPCA_ADMIN_PASSWORD', '1234')),
        ]);

        $this->call(TesisSeeder::class);
    }
}
