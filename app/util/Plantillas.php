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


/**
 * Class Plantillas
 * @package App\util
 *
 * @property participantes_torneo participantes
 */
class Plantillas
{
    function __construct($participantes) {
        $this->participantes = $participantes;
    }

    function getParticipantes(){
        return $this->participantes;
    }


}