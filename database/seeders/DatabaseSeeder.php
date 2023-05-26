<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Personas;
use App\Models\Mercancia;
use App\Models\Predio;
use App\Models\Tipo_mercancia;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Transporte::factory(10)->create();
        Camion::factory(10)->create();
        Personas::factory(10)->create();
        Predio::factory(10)->create();
        Tipo_mercancia::factory(10)->create();
        Mercancia::factory(10)->create();



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
