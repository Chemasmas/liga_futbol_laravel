<?php
/**
 * Created by PhpStorm.
 * User: eva_0
 * Date: 10/03/2018
 * Time: 14:13
 */

namespace App\util;


class Imagenes
{
    public static function uploadImage($ruta,$imagen=null,$prefijo = "noHay"){
        if($imagen==null)
            return "";
        $nvoNombre = $prefijo.".".$imagen->getClientOriginalExtension();
        $imagen->move($ruta,$nvoNombre);
        return $ruta."/".$nvoNombre;
    }

}