<?php
/**
 * Created by PhpStorm.
 * User: eva_0
 * Date: 27/03/2018
 * Time: 05:49
 */

namespace App\util;


use App\participantes_torneo;
use App\partidos;

class Puntos
{

    public static function calculoPuntos($idP){
        $partido = partidos::findOrFail($idP);
        $partido->jugado = 1;
        $partido->verifica = -1;
        $partido->save();

        Puntos::puntosEquipo($partido->Local,$partido->Torneo_id);
        Puntos::puntosEquipo($partido->Visitante,$partido->Torneo_id);
    }

    private static function getCountQuery($idE,$tipoE,$query){
        return partidos::where("jugado",1)
            ->where($tipoE,$idE)
            ->whereRaw($query)
            ->count();
    }

    private static function puntosEquipo($idE,$idT){
        debug($idE);
        $pJ = partidos::where("jugado",1)
            ->where("Visitante",$idE)
            ->orWhere("Local",$idE)
            ->where("jugado",1)
            ->count();

        $pGL = Puntos::getCountQuery($idE,"Local","marcadorLocal > marcadorVisitante");
        $pGV = Puntos::getCountQuery($idE,"Visitante","marcadorLocal < marcadorVisitante");

        $pEL = Puntos::getCountQuery($idE,"Local","marcadorLocal = marcadorVisitante");
        $pEV = Puntos::getCountQuery($idE,"Visitante","marcadorLocal = marcadorVisitante");

        $pPL = Puntos::getCountQuery($idE,"Local","marcadorLocal < marcadorVisitante");
        $pPV = Puntos::getCountQuery($idE,"Visitante","marcadorLocal > marcadorVisitante");

        $gFL = partidos::where("jugado",1)->where("Local",$idE)->sum("marcadorLocal");
        $gFV = partidos::where("jugado",1)->where("Visitante",$idE)->sum("marcadorVisitante");

        $gCL = partidos::where("jugado",1)->where("Local",$idE)->sum("marcadorVisitante");
        $gCV = partidos::where("jugado",1)->where("Visitante",$idE)->sum("marcadorLocal");


        $estadistica = participantes_torneo::where("Torneo_id",$idT)
            ->where("Equipos_id",$idE)->first();



        $estadistica->PartidosJugados = $pJ;
        $estadistica->PartidosGanados = $pGL + $pGV;
        $estadistica->PartidosEmpatados = $pEL + $pEV;
        $estadistica->PartidosPerdidos = $pPL + $pPV;
        $estadistica->GolesFavor = $gFL + $gFV;
        $estadistica->GolesContra = $gCL + $gCV;
        $estadistica->DiferenciaGoles = $estadistica->GolesFavor - $estadistica->GolesContra;
        $estadistica->Puntos = 3 * $estadistica->PartidosGanados + $estadistica->PartidosEmpatados;

        $estadistica->save();

        debug($estadistica->id);

        //debug($pJ);
        //debug($pGL);
        //debug($gFL);
    }
}