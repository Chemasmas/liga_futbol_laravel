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
                case 1 : $this->plantilla1(); break;
                case 5 : $this->plantilla5(); break;
                case 6 : $this->plantilla6(); break;
                case 7 : $this->plantilla7(); break;
                case 8 : $this->plantilla8(); break;
                case 9 : $this->plantilla9(); break;
                case 10 : $this->plantilla10(); break;
                case 11 : $this->plantilla11(); break;
                case 12 : $this->plantilla12(); break;
                case 13 : $this->plantilla13(); break;
                case 14 : $this->plantilla14(); break;
            }
        }

    }

    function plantilla1(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 2 , 'V' => 7 , 'J' => 1],
            [ 'L' => 3 , 'V' => 6 , 'J' => 1],
            [ 'L' => 4 , 'V' => 5 , 'J' => 1],

            [ 'L' => 6 , 'V' => 4 , 'J' => 2],
            [ 'L' => 7 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 7 , 'J' => 3],
            [ 'L' => 5 , 'V' => 6 , 'J' => 3],

            [ 'L' => 7 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 7 , 'J' => 5],

            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 6 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],

            [ 'L' => 7 , 'V' => 2 , 'J' => 8],
            [ 'L' => 6 , 'V' => 3 , 'J' => 8],
            [ 'L' => 5 , 'V' => 4 , 'J' => 8],

            [ 'L' => 4 , 'V' => 6 , 'J' => 9],
            [ 'L' => 3 , 'V' => 7 , 'J' => 9],
            [ 'L' => 2 , 'V' => 1 , 'J' => 9],

            [ 'L' => 1 , 'V' => 3 , 'J' => 10],
            [ 'L' => 7 , 'V' => 4 , 'J' => 10],
            [ 'L' => 6 , 'V' => 5 , 'J' => 10],

            [ 'L' => 5 , 'V' => 7 , 'J' => 11],
            [ 'L' => 4 , 'V' => 1 , 'J' => 11],
            [ 'L' => 3 , 'V' => 2 , 'J' => 11],

            [ 'L' => 2 , 'V' => 4 , 'J' => 12],
            [ 'L' => 1 , 'V' => 5 , 'J' => 12],
            [ 'L' => 7 , 'V' => 6 , 'J' => 12],

            [ 'L' => 6 , 'V' => 1 , 'J' => 13],
            [ 'L' => 5 , 'V' => 2 , 'J' => 13],
            [ 'L' => 4 , 'V' => 3 , 'J' => 13],

            [ 'L' => 3 , 'V' => 5 , 'J' => 14],
            [ 'L' => 2 , 'V' => 6 , 'J' => 14],
            [ 'L' => 1 , 'V' => 7 , 'J' => 14],
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
        //debug($partidosT);
    }

    function plantilla5(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 2 , 'V' => 5 , 'J' => 1],
            [ 'L' => 3 , 'V' => 4 , 'J' => 1],

            [ 'L' => 5 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 5 , 'J' => 3],

            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],

            [ 'L' => 5 , 'V' => 2 , 'J' => 6],
            [ 'L' => 4 , 'V' => 3 , 'J' => 6],

            [ 'L' => 3 , 'V' => 5 , 'J' => 7],
            [ 'L' => 2 , 'V' => 1 , 'J' => 7],

            [ 'L' => 1 , 'V' => 3 , 'J' => 8],
            [ 'L' => 5 , 'V' => 4 , 'J' => 8],

            [ 'L' => 4 , 'V' => 1 , 'J' => 9],
            [ 'L' => 3 , 'V' => 2 , 'J' => 9],

            [ 'L' => 2 , 'V' => 4 , 'J' => 10],
            [ 'L' => 1 , 'V' => 5 , 'J' => 10],
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
        //debug($partidosT);
    }

    function plantilla6(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 1 , 'V' => 6 , 'J' => 1],
            [ 'L' => 2 , 'V' => 5 , 'J' => 1],
            [ 'L' => 3 , 'V' => 4 , 'J' => 1],

            [ 'L' => 6 , 'V' => 3 , 'J' => 2],
            [ 'L' => 5 , 'V' => 1 , 'J' => 2],
            [ 'L' => 4 , 'V' => 2 , 'J' => 2],

            [ 'L' => 2 , 'V' => 3 , 'J' => 3],
            [ 'L' => 5 , 'V' => 6 , 'J' => 3],
            [ 'L' => 1 , 'V' => 4 , 'J' => 3],

            [ 'L' => 3 , 'V' => 1 , 'J' => 4],
            [ 'L' => 2 , 'V' => 6 , 'J' => 4],
            [ 'L' => 4 , 'V' => 5 , 'J' => 4],

            [ 'L' => 5 , 'V' => 3 , 'J' => 5],
            [ 'L' => 1 , 'V' => 2 , 'J' => 5],
            [ 'L' => 6 , 'V' => 4 , 'J' => 5],

            [ 'L' => 6 , 'V' => 1 , 'J' => 6],
            [ 'L' => 5 , 'V' => 2 , 'J' => 6],
            [ 'L' => 4 , 'V' => 3 , 'J' => 6],

            [ 'L' => 3 , 'V' => 6 , 'J' => 7],
            [ 'L' => 1 , 'V' => 5 , 'J' => 7],
            [ 'L' => 2 , 'V' => 4 , 'J' => 7],

            [ 'L' => 3 , 'V' => 2 , 'J' => 8],
            [ 'L' => 6 , 'V' => 5 , 'J' => 8],
            [ 'L' => 4 , 'V' => 1 , 'J' => 8],

            [ 'L' => 1 , 'V' => 3 , 'J' => 9],
            [ 'L' => 6 , 'V' => 2 , 'J' => 9],
            [ 'L' => 5 , 'V' => 4 , 'J' => 9],

            [ 'L' => 3 , 'V' => 5 , 'J' => 10],
            [ 'L' => 2 , 'V' => 1 , 'J' => 10],
            [ 'L' => 4 , 'V' => 6 , 'J' => 10],
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
        //debug($partidosT);
    }

    function plantilla7(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 2 , 'V' => 7 , 'J' => 1],
            [ 'L' => 3 , 'V' => 6 , 'J' => 1],
            [ 'L' => 4 , 'V' => 5 , 'J' => 1],

            [ 'L' => 6 , 'V' => 4 , 'J' => 2],
            [ 'L' => 7 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 7 , 'J' => 3],
            [ 'L' => 5 , 'V' => 6 , 'J' => 3],

            [ 'L' => 7 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 7 , 'J' => 5],

            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 6 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],
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
        //debug($partidosT);
    }

    function plantilla8(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 1 , 'V' => 8 , 'J' => 1],
            [ 'L' => 2 , 'V' => 7 , 'J' => 1],
            [ 'L' => 3 , 'V' => 6 , 'J' => 1],
            [ 'L' => 4 , 'V' => 5 , 'J' => 1],

            [ 'L' => 8 , 'V' => 5 , 'J' => 2],
            [ 'L' => 6 , 'V' => 4 , 'J' => 2],
            [ 'L' => 7 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 2 , 'V' => 8 , 'J' => 3],
            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 7 , 'J' => 3],
            [ 'L' => 5 , 'V' => 6 , 'J' => 3],

            [ 'L' => 8 , 'V' => 6 , 'J' => 4],
            [ 'L' => 7 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 3 , 'V' => 8 , 'J' => 5],
            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 7 , 'J' => 5],

            [ 'L' => 8 , 'V' => 7 , 'J' => 6],
            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 4 , 'V' => 8 , 'J' => 7],
            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 6 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],
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
        //debug($partidosT);
    }

    function plantilla9(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 2 , 'V' => 9 , 'J' => 1],
            [ 'L' => 3 , 'V' => 8 , 'J' => 1],
            [ 'L' => 4 , 'V' => 7 , 'J' => 1],
            [ 'L' => 5 , 'V' => 6 , 'J' => 1],

            [ 'L' => 7 , 'V' => 5 , 'J' => 2],
            [ 'L' => 8 , 'V' => 4 , 'J' => 2],
            [ 'L' => 9 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 9 , 'J' => 3],
            [ 'L' => 5 , 'V' => 8 , 'J' => 3],
            [ 'L' => 6 , 'V' => 7 , 'J' => 3],

            [ 'L' => 8 , 'V' => 6 , 'J' => 4],
            [ 'L' => 9 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 9 , 'J' => 5],
            [ 'L' => 7 , 'V' => 8 , 'J' => 5],

            [ 'L' => 9 , 'V' => 7 , 'J' => 6],
            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 4 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],
            [ 'L' => 8 , 'V' => 9 , 'J' => 7],

            [ 'L' => 1 , 'V' => 8 , 'J' => 8],
            [ 'L' => 2 , 'V' => 7 , 'J' => 8],
            [ 'L' => 3 , 'V' => 6 , 'J' => 8],
            [ 'L' => 4 , 'V' => 5 , 'J' => 8],

            [ 'L' => 6 , 'V' => 4 , 'J' => 9],
            [ 'L' => 7 , 'V' => 3 , 'J' => 9],
            [ 'L' => 8 , 'V' => 2 , 'J' => 9],
            [ 'L' => 9 , 'V' => 1 , 'J' => 9],
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
        //debug($partidosT);
    }

    function plantilla10(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 1 , 'V' => 10 , 'J' => 1],
            [ 'L' => 2 , 'V' => 9 , 'J' => 1],
            [ 'L' => 3 , 'V' => 8 , 'J' => 1],
            [ 'L' => 4 , 'V' => 7 , 'J' => 1],
            [ 'L' => 5 , 'V' => 6 , 'J' => 1],

            [ 'L' => 10 , 'V' => 6 , 'J' => 2],
            [ 'L' => 7 , 'V' => 5 , 'J' => 2],
            [ 'L' => 8 , 'V' => 4 , 'J' => 2],
            [ 'L' => 9 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 2 , 'V' => 10 , 'J' => 3],
            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 9 , 'J' => 3],
            [ 'L' => 5 , 'V' => 8 , 'J' => 3],
            [ 'L' => 6 , 'V' => 7 , 'J' => 3],

            [ 'L' => 10 , 'V' => 7 , 'J' => 4],
            [ 'L' => 8 , 'V' => 6 , 'J' => 4],
            [ 'L' => 9 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 3 , 'V' => 10 , 'J' => 5],
            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 9 , 'J' => 5],
            [ 'L' => 7 , 'V' => 8 , 'J' => 5],

            [ 'L' => 10 , 'V' => 8 , 'J' => 6],
            [ 'L' => 9 , 'V' => 7 , 'J' => 6],
            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 4 , 'V' => 10 , 'J' => 7],
            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 6 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],
            [ 'L' => 8 , 'V' => 9 , 'J' => 7],

            [ 'L' => 10 , 'V' => 9 , 'J' => 8],
            [ 'L' => 1 , 'V' => 8, 'J' => 8],
            [ 'L' => 2 , 'V' => 7 , 'J' => 8],
            [ 'L' => 3 , 'V' => 6 , 'J' => 8],
            [ 'L' => 4 , 'V' => 5 , 'J' => 8],

            [ 'L' => 5 , 'V' => 10 , 'J' => 9],
            [ 'L' => 6 , 'V' => 4 , 'J' => 9],
            [ 'L' => 7 , 'V' => 3 , 'J' => 9],
            [ 'L' => 8 , 'V' => 2 , 'J' => 9],
            [ 'L' => 9 , 'V' => 1 , 'J' => 9],
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
        //debug($partidosT);
    }

    function plantilla11(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 2 , 'V' => 11 , 'J' => 1],
            [ 'L' => 3 , 'V' => 10 , 'J' => 1],
            [ 'L' => 4 , 'V' => 9 , 'J' => 1],
            [ 'L' => 5 , 'V' => 8 , 'J' => 1],
            [ 'L' => 6 , 'V' => 7 , 'J' => 1],

            [ 'L' => 8 , 'V' => 6 , 'J' => 2],
            [ 'L' => 9 , 'V' => 5 , 'J' => 2],
            [ 'L' => 10 , 'V' => 4 , 'J' => 2],
            [ 'L' => 11 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 11 , 'J' => 3],
            [ 'L' => 5 , 'V' => 10 , 'J' => 3],
            [ 'L' => 6 , 'V' => 9 , 'J' => 3],
            [ 'L' => 7 , 'V' => 8 , 'J' => 3],

            [ 'L' => 9 , 'V' => 7 , 'J' => 4],
            [ 'L' => 10 , 'V' => 6 , 'J' => 4],
            [ 'L' => 11 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 11 , 'J' => 5],
            [ 'L' => 7 , 'V' => 10 , 'J' => 5],
            [ 'L' => 8 , 'V' => 9 , 'J' => 5],

            [ 'L' => 10 , 'V' => 8 , 'J' => 6],
            [ 'L' => 11 , 'V' => 7 , 'J' => 6],
            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 6 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],
            [ 'L' => 8 , 'V' => 11 , 'J' => 7],
            [ 'L' => 9 , 'V' => 10 , 'J' => 7],

            [ 'L' => 11 , 'V' => 9 , 'J' => 8],
            [ 'L' => 1 , 'V' => 8 , 'J' => 8],
            [ 'L' => 2 , 'V' => 7 , 'J' => 8],
            [ 'L' => 3 , 'V' => 6 , 'J' => 8],
            [ 'L' => 4 , 'V' => 5 , 'J' => 8],

            [ 'L' => 6 , 'V' => 4 , 'J' => 9],
            [ 'L' => 7 , 'V' => 3 , 'J' => 9],
            [ 'L' => 8 , 'V' => 2 , 'J' => 9],
            [ 'L' => 9 , 'V' => 1 , 'J' => 9],
            [ 'L' => 10 , 'V' => 11 , 'J' => 9],

            [ 'L' => 1 , 'V' => 10 , 'J' => 10],
            [ 'L' => 2 , 'V' => 9 , 'J' => 10],
            [ 'L' => 3 , 'V' => 8 , 'J' => 10],
            [ 'L' => 4 , 'V' => 7 , 'J' => 10],
            [ 'L' => 5 , 'V' => 6 , 'J' => 10],

            [ 'L' => 7 , 'V' => 5 , 'J' => 11],
            [ 'L' => 8 , 'V' => 4 , 'J' => 11],
            [ 'L' => 9 , 'V' => 3 , 'J' => 11],
            [ 'L' => 10 , 'V' => 2 , 'J' => 11],
            [ 'L' => 11 , 'V' => 1 , 'J' => 11],
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
        //debug($partidosT);
    }

    function plantilla12(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 1 , 'V' => 12 , 'J' => 1],
            [ 'L' => 2 , 'V' => 11 , 'J' => 1],
            [ 'L' => 3 , 'V' => 10 , 'J' => 1],
            [ 'L' => 4 , 'V' => 9 , 'J' => 1],
            [ 'L' => 5 , 'V' => 8 , 'J' => 1],
            [ 'L' => 6 , 'V' => 7 , 'J' => 1],

            [ 'L' => 12 , 'V' => 7 , 'J' => 2],
            [ 'L' => 8 , 'V' => 6 , 'J' => 2],
            [ 'L' => 9 , 'V' => 5 , 'J' => 2],
            [ 'L' => 10 , 'V' => 4 , 'J' => 2],
            [ 'L' => 11 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 2 , 'V' => 12 , 'J' => 3],
            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 11 , 'J' => 3],
            [ 'L' => 5 , 'V' => 10 , 'J' => 3],
            [ 'L' => 6 , 'V' => 9 , 'J' => 3],
            [ 'L' => 7 , 'V' => 8 , 'J' => 3],

            [ 'L' => 12 , 'V' => 8 , 'J' => 4],
            [ 'L' => 9 , 'V' => 7 , 'J' => 4],
            [ 'L' => 10 , 'V' => 6 , 'J' => 4],
            [ 'L' => 11 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 3 , 'V' => 12 , 'J' => 5],
            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 11 , 'J' => 5],
            [ 'L' => 7 , 'V' => 10 , 'J' => 5],
            [ 'L' => 8 , 'V' => 9 , 'J' => 5],

            [ 'L' => 12 , 'V' => 9 , 'J' => 6],
            [ 'L' => 10 , 'V' => 8 , 'J' => 6],
            [ 'L' => 11 , 'V' => 7 , 'J' => 6],
            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 4 , 'V' => 12 , 'J' => 7],
            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 6 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],
            [ 'L' => 8 , 'V' => 11 , 'J' => 7],
            [ 'L' => 9 , 'V' => 10 , 'J' => 7],

            [ 'L' => 12 , 'V' => 10 , 'J' => 8],
            [ 'L' => 11 , 'V' => 9 , 'J' => 8],
            [ 'L' => 1 , 'V' => 8 , 'J' => 8],
            [ 'L' => 2 , 'V' => 7 , 'J' => 8],
            [ 'L' => 3 , 'V' => 6 , 'J' => 8],
            [ 'L' => 4 , 'V' => 5 , 'J' => 8],

            [ 'L' => 5 , 'V' => 12 , 'J' => 9],
            [ 'L' => 6 , 'V' => 4 , 'J' => 9],
            [ 'L' => 7 , 'V' => 3 , 'J' => 9],
            [ 'L' => 8 , 'V' => 2 , 'J' => 9],
            [ 'L' => 9 , 'V' => 1 , 'J' => 9],
            [ 'L' => 10 , 'V' => 11 , 'J' => 9],

            [ 'L' => 12 , 'V' => 11 , 'J' => 10],
            [ 'L' => 1 , 'V' => 10 , 'J' => 10],
            [ 'L' => 2 , 'V' => 9 , 'J' => 10],
            [ 'L' => 3 , 'V' => 8 , 'J' => 10],
            [ 'L' => 4 , 'V' => 7 , 'J' => 10],
            [ 'L' => 5 , 'V' => 6 , 'J' => 10],

            [ 'L' => 6 , 'V' => 12 , 'J' => 11],
            [ 'L' => 7 , 'V' => 5 , 'J' => 11],
            [ 'L' => 8 , 'V' => 4 , 'J' => 11],
            [ 'L' => 9 , 'V' => 3 , 'J' => 11],
            [ 'L' => 10 , 'V' => 2 , 'J' => 11],
            [ 'L' => 11 , 'V' => 1 , 'J' => 11],
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
        //debug($partidosT);
    }

    function plantilla13(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 2 , 'V' => 13 , 'J' => 1],
            [ 'L' => 3 , 'V' => 12 , 'J' => 1],
            [ 'L' => 4 , 'V' => 11 , 'J' => 1],
            [ 'L' => 5 , 'V' => 10 , 'J' => 1],
            [ 'L' => 6 , 'V' => 9 , 'J' => 1],
            [ 'L' => 7 , 'V' => 8 , 'J' => 1],

            [ 'L' => 9 , 'V' => 7 , 'J' => 2],
            [ 'L' => 10 , 'V' => 6 , 'J' => 2],
            [ 'L' => 11 , 'V' => 5 , 'J' => 2],
            [ 'L' => 12 , 'V' => 4 , 'J' => 2],
            [ 'L' => 13 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 13 , 'J' => 3],
            [ 'L' => 5 , 'V' => 12 , 'J' => 3],
            [ 'L' => 6 , 'V' => 11 , 'J' => 3],
            [ 'L' => 7 , 'V' => 10 , 'J' => 3],
            [ 'L' => 8 , 'V' => 9 , 'J' => 3],

            [ 'L' => 10 , 'V' => 8 , 'J' => 4],
            [ 'L' => 11 , 'V' => 7 , 'J' => 4],
            [ 'L' => 12 , 'V' => 6 , 'J' => 4],
            [ 'L' => 13 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 13 , 'J' => 5],
            [ 'L' => 7 , 'V' => 12 , 'J' => 5],
            [ 'L' => 8 , 'V' => 11 , 'J' => 5],
            [ 'L' => 9 , 'V' => 10 , 'J' => 5],

            [ 'L' => 11 , 'V' => 9 , 'J' => 6],
            [ 'L' => 12 , 'V' => 8 , 'J' => 6],
            [ 'L' => 13 , 'V' => 7 , 'J' => 6],
            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 6 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],
            [ 'L' => 8 , 'V' => 13 , 'J' => 7],
            [ 'L' => 9 , 'V' => 12 , 'J' => 7],
            [ 'L' => 10 , 'V' => 11 , 'J' => 7],

            [ 'L' => 12 , 'V' => 10 , 'J' => 8],
            [ 'L' => 13 , 'V' => 9 , 'J' => 8],
            [ 'L' => 1 , 'V' => 8 , 'J' => 8],
            [ 'L' => 2 , 'V' => 7 , 'J' => 8],
            [ 'L' => 3 , 'V' => 6 , 'J' => 8],
            [ 'L' => 4 , 'V' => 5 , 'J' => 8],

            [ 'L' => 6 , 'V' => 4 , 'J' => 9],
            [ 'L' => 7 , 'V' => 3 , 'J' => 9],
            [ 'L' => 8 , 'V' => 2 , 'J' => 9],
            [ 'L' => 9 , 'V' => 1 , 'J' => 9],
            [ 'L' => 10 , 'V' => 13 , 'J' => 9],
            [ 'L' => 11 , 'V' => 12 , 'J' => 9],

            [ 'L' => 13 , 'V' => 11 , 'J' => 10],
            [ 'L' => 1 , 'V' => 10 , 'J' => 10],
            [ 'L' => 2 , 'V' => 9 , 'J' => 10],
            [ 'L' => 3 , 'V' => 8 , 'J' => 10],
            [ 'L' => 4 , 'V' => 7 , 'J' => 10],
            [ 'L' => 5 , 'V' => 6 , 'J' => 10],

            [ 'L' => 7 , 'V' => 5 , 'J' => 11],
            [ 'L' => 8 , 'V' => 4 , 'J' => 11],
            [ 'L' => 9 , 'V' => 3 , 'J' => 11],
            [ 'L' => 10 , 'V' => 2 , 'J' => 11],
            [ 'L' => 11 , 'V' => 1 , 'J' => 11],
            [ 'L' => 12 , 'V' => 13 , 'J' => 11],

            [ 'L' => 1 , 'V' => 12 , 'J' => 12],
            [ 'L' => 2 , 'V' => 11 , 'J' => 12],
            [ 'L' => 3 , 'V' => 10 , 'J' => 12],
            [ 'L' => 4 , 'V' => 9 , 'J' => 12],
            [ 'L' => 5 , 'V' => 8 , 'J' => 12],
            [ 'L' => 6 , 'V' => 7 , 'J' => 12],

            [ 'L' => 8 , 'V' => 6 , 'J' => 13],
            [ 'L' => 9 , 'V' => 5 , 'J' => 13],
            [ 'L' => 10 , 'V' => 4 , 'J' => 13],
            [ 'L' => 11 , 'V' => 3 , 'J' => 13],
            [ 'L' => 12 , 'V' => 2 , 'J' => 13],
            [ 'L' => 13 , 'V' => 1 , 'J' => 13],
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
        //debug($partidosT);
    }

    function plantilla14(){
        //debug( count($this->participantes) );
        //debug( $this->participantes );
        //Debe generar 20 partidos
        $partidosT = [];
        $rotaciones = [
            [ 'L' => 1 , 'V' => 14 , 'J' => 1],
            [ 'L' => 2 , 'V' => 13 , 'J' => 1],
            [ 'L' => 3 , 'V' => 12 , 'J' => 1],
            [ 'L' => 4 , 'V' => 11 , 'J' => 1],
            [ 'L' => 5 , 'V' => 10 , 'J' => 1],
            [ 'L' => 6 , 'V' => 9 , 'J' => 1],
            [ 'L' => 7 , 'V' => 8 , 'J' => 1],

            [ 'L' => 14 , 'V' => 8 , 'J' => 2],
            [ 'L' => 9 , 'V' => 7 , 'J' => 2],
            [ 'L' => 10 , 'V' => 6 , 'J' => 2],
            [ 'L' => 11 , 'V' => 5 , 'J' => 2],
            [ 'L' => 12 , 'V' => 4 , 'J' => 2],
            [ 'L' => 13 , 'V' => 3 , 'J' => 2],
            [ 'L' => 1 , 'V' => 2 , 'J' => 2],

            [ 'L' => 2 , 'V' => 14 , 'J' => 3],
            [ 'L' => 3 , 'V' => 1 , 'J' => 3],
            [ 'L' => 4 , 'V' => 13 , 'J' => 3],
            [ 'L' => 5 , 'V' => 12 , 'J' => 3],
            [ 'L' => 6 , 'V' => 11 , 'J' => 3],
            [ 'L' => 7 , 'V' => 10 , 'J' => 3],
            [ 'L' => 8 , 'V' => 9 , 'J' => 3],

            [ 'L' => 14 , 'V' => 9 , 'J' => 4],
            [ 'L' => 10 , 'V' => 8 , 'J' => 4],
            [ 'L' => 11 , 'V' => 7 , 'J' => 4],
            [ 'L' => 12 , 'V' => 6 , 'J' => 4],
            [ 'L' => 13 , 'V' => 5 , 'J' => 4],
            [ 'L' => 1 , 'V' => 4 , 'J' => 4],
            [ 'L' => 2 , 'V' => 3 , 'J' => 4],

            [ 'L' => 3 , 'V' => 14 , 'J' => 5],
            [ 'L' => 4 , 'V' => 2 , 'J' => 5],
            [ 'L' => 5 , 'V' => 1 , 'J' => 5],
            [ 'L' => 6 , 'V' => 13 , 'J' => 5],
            [ 'L' => 7 , 'V' => 12 , 'J' => 5],
            [ 'L' => 8 , 'V' => 11 , 'J' => 5],
            [ 'L' => 9 , 'V' => 10 , 'J' => 5],

            [ 'L' => 14 , 'V' => 10 , 'J' => 6],
            [ 'L' => 11 , 'V' => 9 , 'J' => 6],
            [ 'L' => 12 , 'V' => 8 , 'J' => 6],
            [ 'L' => 13 , 'V' => 7 , 'J' => 6],
            [ 'L' => 1 , 'V' => 6 , 'J' => 6],
            [ 'L' => 2 , 'V' => 5 , 'J' => 6],
            [ 'L' => 3 , 'V' => 4 , 'J' => 6],

            [ 'L' => 4 , 'V' => 14 , 'J' => 7],
            [ 'L' => 5 , 'V' => 3 , 'J' => 7],
            [ 'L' => 6 , 'V' => 2 , 'J' => 7],
            [ 'L' => 7 , 'V' => 1 , 'J' => 7],
            [ 'L' => 8 , 'V' => 13 , 'J' => 7],
            [ 'L' => 9 , 'V' => 12 , 'J' => 7],
            [ 'L' => 10 , 'V' => 11 , 'J' => 7],

            [ 'L' => 14 , 'V' => 11 , 'J' => 8],
            [ 'L' => 12 , 'V' => 10 , 'J' => 8],
            [ 'L' => 13 , 'V' => 9 , 'J' => 8],
            [ 'L' => 1 , 'V' => 8 , 'J' => 8],
            [ 'L' => 2 , 'V' => 7 , 'J' => 8],
            [ 'L' => 3 , 'V' => 6 , 'J' => 8],
            [ 'L' => 4 , 'V' => 5 , 'J' => 8],

            [ 'L' => 5 , 'V' => 14 , 'J' => 9],
            [ 'L' => 6 , 'V' => 4 , 'J' => 9],
            [ 'L' => 7 , 'V' => 3 , 'J' => 9],
            [ 'L' => 8 , 'V' => 2 , 'J' => 9],
            [ 'L' => 9 , 'V' => 1 , 'J' => 9],
            [ 'L' => 10 , 'V' => 13 , 'J' => 9],
            [ 'L' => 11 , 'V' => 12 , 'J' => 9],

            [ 'L' => 14 , 'V' => 12 , 'J' => 10],
            [ 'L' => 13 , 'V' => 11 , 'J' => 10],
            [ 'L' => 1 , 'V' => 10 , 'J' => 10],
            [ 'L' => 2 , 'V' => 9 , 'J' => 10],
            [ 'L' => 3 , 'V' => 8 , 'J' => 10],
            [ 'L' => 4 , 'V' => 7 , 'J' => 10],
            [ 'L' => 5 , 'V' => 6 , 'J' => 10],

            [ 'L' => 6 , 'V' => 14 , 'J' => 11],
            [ 'L' => 7 , 'V' => 5 , 'J' => 11],
            [ 'L' => 8 , 'V' => 4 , 'J' => 11],
            [ 'L' => 9 , 'V' => 3 , 'J' => 11],
            [ 'L' => 10 , 'V' => 2 , 'J' => 11],
            [ 'L' => 11 , 'V' => 1 , 'J' => 11],
            [ 'L' => 12 , 'V' => 13 , 'J' => 11],

            [ 'L' => 14 , 'V' => 13 , 'J' => 12],
            [ 'L' => 1 , 'V' => 12 , 'J' => 12],
            [ 'L' => 2 , 'V' => 11 , 'J' => 12],
            [ 'L' => 3 , 'V' => 10 , 'J' => 12],
            [ 'L' => 4 , 'V' => 9 , 'J' => 12],
            [ 'L' => 5 , 'V' => 8 , 'J' => 12],
            [ 'L' => 6 , 'V' => 7 , 'J' => 12],

            [ 'L' => 7 , 'V' => 14 , 'J' => 13],
            [ 'L' => 8 , 'V' => 6 , 'J' => 13],
            [ 'L' => 9 , 'V' => 5 , 'J' => 13],
            [ 'L' => 10 , 'V' => 4 , 'J' => 13],
            [ 'L' => 11 , 'V' => 3 , 'J' => 13],
            [ 'L' => 12 , 'V' => 2 , 'J' => 13],
            [ 'L' => 13 , 'V' => 1 , 'J' => 13],
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
        //debug($partidosT);
    }






    private function getID($offset){
        $offset = $offset-1;
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