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

        /*
         * @property int $id
 * @property string $username
 * @property string $password
 * @property string $createdAt
 * @property boolean $active
 * @property int $level   1 admin 2 programador 3 arbitro 4 jugador
         * */

        DB::table('usuarios')->insert(
            [
                'id'=>1,
                'username' => "Chema",
                'password' => Hash::make("123456"),
                'active' => 1,
                "level" => 1
            ]
        );

        DB::table('usuarios')->insert(
            [
                'id'=>2,
                'username' => "Andrea",
                'password' => Hash::make("123456"),
                'active' => 1,
                "level" => 2
            ]
        );
        DB::table('usuarios')->insert(
            [
                'id'=>3,
                'username' => "Ivan",
                'password' => Hash::make("123456"),
                'active' => 1,
                "level" => 3
            ]
        );
        DB::table('usuarios')->insert(
            [
                'id'=>4,
                'username' => "Oscar",
                'password' => Hash::make("123456"),
                'active' => 1,
                "level" => 4
            ]
        );
    }
}
