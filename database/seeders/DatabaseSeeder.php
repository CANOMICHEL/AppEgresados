<?php

namespace Database\Seeders;

use App\Models\Capacitacion;
use App\Models\Egresado;
use App\Models\Empleo;
use App\Models\Evento;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Support\Str;
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
        \App\Models\User::factory(100)->create();
        User::factory()->create([
            'nombre' => 'admin',
            'email' => 'admin@unsaac.edu.pe',
            'email_verified_at' => now(),
            'rol' => 'Admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        Egresado::factory(100)->create();
        Capacitacion::factory(2000)->create();
        Evento::factory(2000)->create();
        Proyecto::factory(2000)->create();
        Empleo::factory(2000)->create();
    }
}
