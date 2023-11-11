<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pro_procesos')->insert([
            'pro_nombre' => 'Ingeniería',
            'pro_prefijo'=> 'ING',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('pro_procesos')->insert([
            'pro_nombre' => 'Sistemas',
            'pro_prefijo'=> 'SIS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('pro_procesos')->insert([
            'pro_nombre' => 'Desarrollo',
            'pro_prefijo'=> 'DES',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('pro_procesos')->insert([
            'pro_nombre' => 'Diseño',
            'pro_prefijo'=> 'DIS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('pro_procesos')->insert([
            'pro_nombre' => 'Administración',
            'pro_prefijo'=> 'ADM',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
