<?php

use Illuminate\Database\Seeder;

class institucionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituciones')->insert([
            "id"=>1,
            "nombre"=>"Anahuac",
            "dir"=>"conocida",
            "mapa"=>""
        ]);
        DB::table('instituciones')->insert([
            "id"=>2,
            "nombre"=>"Anahuac",
            "dir"=>"UVM",
            "mapa"=>""
        ]);
        DB::table('instituciones')->insert([
            "id"=>3,
            "nombre"=>"IBERO",
            "dir"=>"conocida",
            "mapa"=>""
        ]);
    }
}
