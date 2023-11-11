<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TipTipoDocSeeder;
use Database\Seeders\ProProcesoSeeder;
use Database\Seeders\UsuarioSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipTipoDocSeeder::class);
        $this->call(ProProcesoSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
