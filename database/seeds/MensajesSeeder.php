<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MensajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mensajes')->insert([
            [
                "mensaje" => "Hola",
                "user_id" => 1,
                "fechaEnviado" => "2020-05-17"
            ],
            [
                "mensaje" => "Hola Como andas",
                "user_id" => 2,
                "fechaEnviado" => "2020-05-12"
            ],
            [
                "mensaje" => "Hola Como andas",
                "user_id" => 3,
                "fechaEnviado" => "2020-05-01"
            ]
        ] );
    }
}
