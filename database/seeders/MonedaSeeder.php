<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moneda = [
            ['moneda' => 'COP','valor'=>1, 'valor_usd'=> 0.00022],
            ['moneda' => 'Euro','valor'=>1, 'valor_usd'=> 1.00],
            ['moneda' => 'YEN','valor'=>1, 'valor_usd'=> 0.0071],

        ];
        DB::table('monedas')->insert($moneda);

    }
}

