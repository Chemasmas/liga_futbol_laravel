<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(usuariosSeeder::class);
        //Opcionales
        //$this->call(institucionesSeeder::class);
        //$this->call(torneoSeeder::class);
        //$this->call(equipoSeeder::class);

        Model::reguard();
    }
}
