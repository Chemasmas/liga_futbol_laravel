<?php

use Illuminate\Database\Seeder;

class equipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
            "id"=>1,
            "idIst"=>1,
            "idDivt"=>1,
            "nombre"=>"San Pancho",
            "foto"=>" ",
            "nombreCoach"=>" ",
            "nombreCoachAsistente"=>" ",
        ]);
        DB::table('equipos')->insert([
            "id"=>2,
            "idIst"=>2,
            "idDivt"=>1,
            "nombre"=>"Necaxa",
            "foto"=>" ",
            "nombreCoach"=>" ",
            "nombreCoachAsistente"=>" ",
        ]);
        DB::table('equipos')->insert([
            "id"=>3,
            "idIst"=>1,
            "idDivt"=>2,
            "nombre"=>"America",
            "foto"=>" ",
            "nombreCoach"=>" ",
            "nombreCoachAsistente"=>" ",
        ]);
        DB::table('equipos')->insert([
            "id"=>4,
            "idIst"=>3,
            "idDivt"=>1,
            "nombre"=>"Cruz Azul",
            "foto"=>" ",
            "nombreCoach"=>" ",
            "nombreCoachAsistente"=>" ",
        ]);
        DB::table('equipos')->insert([
            "id"=>5,
            "idIst"=>3,
            "idDivt"=>1,
            "nombre"=>"Chivas",
            "foto"=>" ",
            "nombreCoach"=>" ",
            "nombreCoachAsistente"=>" ",
        ]);
        DB::table('equipos')->insert([
            "id"=>6,
            "idIst"=>2,
            "idDivt"=>1,
            "nombre"=>"Pumas",
            "foto"=>" ",
            "nombreCoach"=>" ",
            "nombreCoachAsistente"=>" ",
        ]);
    }
}
