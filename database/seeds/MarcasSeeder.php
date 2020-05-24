<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            [
                "nombre" => "HERDEZ",
                "created_at"=> now(),
                "updated_at" =>now()
            ],
            [
                "nombre" => "PINOL",
                "created_at"=> now(),
                "updated_at" =>now()
            ]
        ] );
}
}
