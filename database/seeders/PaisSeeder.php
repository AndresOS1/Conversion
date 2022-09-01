<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais = [
            ['nombre_pais'=>'Colombia', 'moneda_id'=>1],
            ['nombre_pais'=>'España', 'moneda_id'=>2],
            ['nombre_pais'=>'Japón', 'moneda_id'=>3],
        ];
        DB::table('pais')->insert($pais);

    }
}
