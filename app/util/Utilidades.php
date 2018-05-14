<?php
/**
 * Created by PhpStorm.
 * User: eva_0
 * Date: 14/05/2018
 * Time: 05:47
 */

namespace App\util;


use App\partidos;

class Utilidades
{
    public static function getWinner($idP){
        $partido = partidos::findOrFail($idP);

        if($partido->marcadorLocal > $partido->marcadorVisitante){
            return $partido->Local;
        }
        else{
            return $partido->Visitante;
        }
    }

    public static function tournamentWinner($idT){
        $partido = partidos::where("Torneo_id",$idT)->where("tipo",2)->get();

        if($partido->marcadorLocal > $partido->marcadorVisitante){
            return $partido->Local;
        }
        else{
            return $partido->Visitante;
        }
    }
}