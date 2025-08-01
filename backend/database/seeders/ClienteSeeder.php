<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombres' => 'Luis',
                'apellidos' => 'Carillo',
                'direccion' => 'Av. Santa Cruz',
                'celular' => '989895545',
                'nit' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'David',
                'apellidos' => 'Martínez',
                'direccion' => 'Av. Cocha',
                'celular' => '55656565',
                'nit' => '6565989898898',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
