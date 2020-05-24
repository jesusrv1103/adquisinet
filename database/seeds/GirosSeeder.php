<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GirosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('giros')->insert([
            [
                "nombre" => "GIRO 1",
                "tiempo_entrega" => 12,
                "created_at"=> now(),
                "updated_at" =>now()
            ],
            [
                "nombre" => "GIRO 2",
                "tiempo_entrega" => 20,
                "created_at"=> now(),
                "updated_at" =>now()
            ],
            [
                "nombre" => "GIRO 3",
                "tiempo_entrega" => 3,
                "created_at"=> now(),
                "updated_at" =>now()
            ]

        ] );
}
}
