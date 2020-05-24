<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "administrador",
                "email" => "angelrojaspk@gmail.com",
                "password" => bcrypt ("123457abz"),
                "remember_token" => bcrypt ("123457abz"),
                "estado" => "activado",
                "created_at"=> now(),
                "updated_at" =>now()
            ], 
            [
                "name" => "proveedor",
                "email" => "proveedor@gmail.com",
                "password" => bcrypt ("123457abz"),
                "remember_token" => bcrypt ("123457abz"),
                "estado" => "activado",
                "created_at"=> now(),
                "updated_at" =>now()
            ], 
            [
                "name" => "dependencia",
                "email" => "dependencia@gmail.com",
                "password" => bcrypt ("123457abz"),
                "remember_token" => bcrypt ("123457abz"),
                "estado" => "activado",
                "created_at"=> now(),
                "updated_at" =>now()
            ]

        ] );
    }
}
