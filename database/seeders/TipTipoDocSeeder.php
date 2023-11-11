<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TipTipoDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tip_tipo_docs')->insert([
            'tip_nombre' => 'Instructivo',
            'tip_prefijo'=> 'INS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tip_tipo_docs')->insert([
            'tip_nombre' => 'Manual de usuario',
            'tip_prefijo'=> 'MAUS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tip_tipo_docs')->insert([
            'tip_nombre' => 'Formato',
            'tip_prefijo'=> 'FOR',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tip_tipo_docs')->insert([
            'tip_nombre' => 'Procedimiento',
            'tip_prefijo'=> 'PRO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tip_tipo_docs')->insert([
            'tip_nombre' => 'Política',
            'tip_prefijo'=> 'POL',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
