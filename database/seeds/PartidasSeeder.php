<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidas')->insert([
            [
                "nombre" => "PARTIDA 1",
                "numero" => 1500,
                "created_at"=> now(),
                "updated_at" =>now()
            ], 
            [
                "nombre" => "PARTIDA 2",
                "numero" =>  2011,
                "created_at"=> now(),
                "updated_at" =>now()
            ], 
            [
                "nombre" => "PARTIDA 3",
                "numero" =>  1995,
                "created_at"=> now(),
                "updated_at" =>now()
            ]

        ] );
    }
}
