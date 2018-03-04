<?php
/**
 * Created by PhpStorm.
 * User: eva_0
 * Date: 19/02/2018
 * Time: 22:34
 */


/**
 * Tipos de Plantillas
 *
 * 5    5
 * 6    6
 * 7    7
 * 7-2  1
 * 8    8
 * 9    9
 * 10   10
 * 11   11
 * 12   12
 * 13   13
 * 14   14
 *
 */


namespace App\util;
use App\participantes_torneo;
use App\partidos;
use App\torneos;


/**
 * Class Plantillas
 * @package App\util
 *
 * @property participantes_torneo participantes
 * @property int plantilla
 * @property int torneo_id
 */
class Plantillas
{
    function __construct($torneo_id,$participantes) {
        $this->torneo_id = $torneo_id;
        $this->participantes = $participantes;
        //$this->plantilla = $plantilla;
    }

    function validar(){
        //TODO reglas para considerar valido generar una rotacion
        return true;
    }

    function generar(){
        $this->torneo = torneos::where('id',$this->torneo_id)->firstOrFail();
        if($this->torneo->generado)
            return;

        if($this->validar()){
            switch ($this->torneo->tipo_torneo){
                case 5 : $this->plantilla5(); break;
            }
        }

    }


    function plantilla5(){
        //debug( count($this->participantes) );
        debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 1 , 'V' => 4 , 'J' => 1],
            [ 'L' => 2 , 'V' => 3 , 'J' => 1],
            [ 'L' => 4 , 'V' => 2 , 'J' => 1],
            [ 'L' => 0 , 'V' => 1 , 'J' => 1],

            [ 'L' => 2 , 'V' => 0 , 'J' => 2],
            [ 'L' => 3 , 'V' => 4 , 'J' => 2],
            [ 'L' => 0 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 0 , 'J' => 3],
            [ 'L' => 4 , 'V' => 1 , 'J' => 3],
            [ 'L' => 3 , 'V' => 2 , 'J' => 3],

            [ 'L' => 2 , 'V' => 4 , 'J' => 4],
            [ 'L' => 1 , 'V' => 0 , 'J' => 4],
            [ 'L' => 0 , 'V' => 2 , 'J' => 4],
            [ 'L' => 4 , 'V' => 3 , 'J' => 4],

            [ 'L' => 3 , 'V' => 0 , 'J' => 5],
            [ 'L' => 2 , 'V' => 1 , 'J' => 5],
            [ 'L' => 1 , 'V' => 3 , 'J' => 5],
            [ 'L' => 0 , 'V' => 4 , 'J' => 5],
        ];


        foreach ($rotaciones as $rotacion){
            array_push($partidosT,$this->generarPartido( $this->getID($rotacion['L']),$this->getID($rotacion['V']),$rotacion['J'] ) );
        }
        foreach ($partidosT as $partidoT){
          $partidoT->save();
        }

        //partidos::insert($partidosT);
        $this->torneo->generado = true;
        $this->torneo->save();
        debug($partidosT);
    }

    private function getID($offset){
        if(isset($this->participantes[$offset])){
            return $this->participantes[$offset]->Equipos_id;
        }
            return 1;
    }

    private function generarPartido($idEL,$idEV,$jornada){
        $partido = new partidos();
        $partido->Torneo_id=$this->torneo_id;
        $partido->Local = $idEL;
        $partido->Visitante = $idEV;

        $partido->marcadorLocal = 0;
        $partido->marcadorVisitante = 0;
        $partido->jornada= $jornada;
        return $partido;
    }
}