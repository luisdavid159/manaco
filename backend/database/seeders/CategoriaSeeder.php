<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar registros a la tabla categorias
        DB::table('categorias')->insert([
            [
                'nombre' => 'Calzados para varones',
                'descripcion' => 'Calzados para varones de alta calidad y confort',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Calzados para mujeres',
                'descripcion' => 'Calzados para mujeres de alta calidad y confort',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
