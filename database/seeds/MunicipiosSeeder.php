<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            [
                "nombre" => "ZACATECAS",
                "clave" => 1,
                "estado_id" => 1,
                "created_at"=> now(),
                "updated_at" =>now()
            ],
            [
                "nombre" => "GUADALUPE",
                "clave" => 2,
                "estado_id" => 2,
                "created_at"=> now(),
                "updated_at" =>now()
            ]
        ] );
}
}
