<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\tipo_usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $tipoUsuarioAdmin = \App\Models\tipo_usuario::create([

            'tipo_usuario' => 'Administrador'
        ]);

        $tipoUsuarioRegular = \App\Models\tipo_usuario::create([
            'tipo_usuario' => 'Usuario'
        ]);

        $user1 = \App\Models\User::factory()->create([
            'name' => 'Usuario',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('usuario'),
            'tipo_usuario_id' => 2,
        ]);

        $user2 = \App\Models\User::factory()->create([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('administrador'),
            'tipo_usuario_id' => 1,
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Administrador',
        //     'email' => 'administrador@gmail.com',
        //     'password' =>  bcrypt('administrador'),
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Oscar',
        //     'email' => 'oscar@gmail.com',
        //     'password' =>  bcrypt('12345678'),
        // ]);
    }
}
