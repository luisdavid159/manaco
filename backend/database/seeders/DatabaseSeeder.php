<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Solo llama a los seeders necesarios
        $this->call([
            CategoriaSeeder::class,
            ClienteSeeder::class,
        ]);
    }
}
