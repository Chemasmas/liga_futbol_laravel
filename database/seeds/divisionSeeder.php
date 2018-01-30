<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class divisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('division')->insert([
            "id"=>1,
            "nombre"=>"Femenil Menor",
            "genero"=>"F",
            "orden"=>1
        ]);
        DB::table('division')->insert([
            "id"=>2,
            "nombre"=>"Femenil Intermedia",
            "genero"=>"F",
            "orden"=>2
        ]);
        DB::table('division')->insert([
            "id"=>3,
            "nombre"=>"Femenil Mayor",
            "genero"=>"F",
            "orden"=>3
        ]);
        DB::table('division')->insert([
            "id"=>4,
            "nombre"=>"Varonil Menor",
            "genero"=>"M",
            "orden"=>4
        ]);
        DB::table('division')->insert([
            "id"=>5,
            "nombre"=>"Varonil Menor",
            "genero"=>"M",
            "orden"=>5
        ]);
        DB::table('division')->insert([
            "id"=>6,
            "nombre"=>"Varonil Menor",
            "genero"=>"M",
            "orden"=>6
        ]);
    }
}
