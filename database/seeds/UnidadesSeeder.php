<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidades')->insert([
            [
                "nombre" => "LITROS",
                "created_at"=> now(),
                "updated_at" =>now()
            ],
            [
                "nombre" => "KILOGRAMOS",
                "created_at"=> now(),
                "updated_at" =>now()
            ]
            
        ] );
}
}
