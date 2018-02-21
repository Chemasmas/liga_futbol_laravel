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
    function __construct($torneo_id,$participantes,$plantilla) {
        $this->torneo_id = $torneo_id;
        $this->participantes = $participantes;
        $this->plantilla = $plantilla;
    }

    function validar(){
        //TODO reglas para considerar valido generar una rotacion
        return true;
    }

    function generar(){
        if($this->validar()){
            switch ($this->plantilla){
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
            [ 'L' => 1 , 'V' => 4],
            [ 'L' => 2 , 'V' => 3],
            [ 'L' => 4 , 'V' => 2],
            [ 'L' => 0 , 'V' => 1],

            [ 'L' => 2 , 'V' => 0],
            [ 'L' => 3 , 'V' => 4],
            [ 'L' => 0 , 'V' => 3],
            [ 'L' => 1 , 'V' => 2],

            [ 'L' => 3 , 'V' => 1],
            [ 'L' => 4 , 'V' => 0],
            [ 'L' => 4 , 'V' => 1],
            [ 'L' => 3 , 'V' => 2],

            [ 'L' => 2 , 'V' => 4],
            [ 'L' => 1 , 'V' => 0],
            [ 'L' => 0 , 'V' => 2],
            [ 'L' => 4 , 'V' => 3],

            [ 'L' => 3 , 'V' => 0],
            [ 'L' => 2 , 'V' => 1],
            [ 'L' => 1 , 'V' => 3],
            [ 'L' => 0 , 'V' => 4],
        ];


        foreach ($rotaciones as $rotacion){
            array_push($partidosT,$this->generarPartido( $this->getID($rotacion['L']),$this->getID($rotacion['V']) ) );
        }

        partidos::insert($rotaciones);

        debug($partidosT);
    }

    private function getID($offset){
        if(isset($this->participantes[$offset])){
            return $this->participantes[$offset]->Equipos_id;
        }
        return 0;
    }

    private function generarPartido($idEL,$idEV){
        $partido = new partidos();
        $partido->Torneo_id=$this->torneo_id;
        $partido->Local = $idEL;
        $partido->Visitante = $idEV;

        $partido->marcadorLocal = 0;
        $partido->marcadorVisitante = 0;

        return $partido;
    }
}