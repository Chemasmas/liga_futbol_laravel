<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('usuarios')->insert(
            [
                'id'=>1,
                'username' => "chema@iterando.mx",
                'password' => Hash::make("123456"),
                'active' => 1,
                "level" => 1
            ]
        );

        DB::table('administradores')->insert(
            [
                'id'=>1,
                'idUsr'=>1,
                'isSuper'=>1,
                'nombre'=>"Chemasmas",
                'correo'=>"eva.01.2015@gmail.com",
                'telefono'=>"55555555",
            ]
        );

        DB::table('usuarios')->insert(
            [
                'id'=>2,
                'username' => "Ivang4",
                'password' => Hash::make("Guzmanperezivan7"),
                'active' => 1,
                "level" => 1
            ]
        );

        DB::table('administradores')->insert(
            [
                'id'=>1,
                'idUsr'=>2,
                'isSuper'=>1,
                'nombre'=>"IVAN GUZMAN",
                'correo'=>"",
                'telefono'=>"",
            ]
        );

        DB::table('usuarios')->insert(
            [
                'id'=>3,
                'username' => "Andrea",
                'password' => Hash::make("654321"),
                'active' => 1,
                "level" => 1
            ]
        );

        DB::table('administradores')->insert(
            [
                'id'=>1,
                'idUsr'=>3,
                'isSuper'=>1,
                'nombre'=>"Andrea Aguilar",
                'correo'=>"",
                'telefono'=>"",
            ]
        );
    }
}
