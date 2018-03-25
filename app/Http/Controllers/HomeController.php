<?php

namespace App\Http\Controllers;

use App\instituciones;
use App\participantes_torneo;
use App\torneos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('publica.index');
    }
    public function about()
    {
        return view('publica.about');
    }
    public function programers()
    {
        return view('publica.programers');
    }
    public function contact()
    {
        return view('publica.contact');
    }

    public function directory()
    {
        return view('publica.directory');
    }
    public function institutions()
    {
        $instituciones = instituciones::offset(1)->limit(100)->get();
        debug($instituciones);
        return view('publica.institutions',[
            "instituciones" => $instituciones
        ]);
    }

    public function gallery(){
        return view('publica.gallery',[
        ]);
    }

    public function nextmatchsfemale(){
        return view('publica.nextmatchsfemale',[
        ]);
    }
    public function nextmatchsmale(){
        return view('publica.nextmatchsmale',[
        ]);
    }

    public function regulation(){
        return view('publica.regulation',[
        ]);
    }

    public function statisticsfemale($idT=-1){

        $torneosA = torneos::where("activo",1)->where("genero","F")->get();
        if($idT==-1){
            $torneoCurr = $torneosA[0];
        }
        else{
            $torneoCurr = torneos::findOrFail($idT);
        }

        $estadisticas = participantes_torneo::where("Torneo_id",$torneoCurr->id)
            ->get()->sort(function($a , $b){
                if($a->Puntos == $b->Puntos){
                    return $a->DiferenciaGoles < $b->DiferenciaGoles? 1:-1;
                }
                else
                    return $a->Puntos < $b->Puntos? 1:-1;
            });

        debug($torneoCurr);
        debug($estadisticas);

        return view('publica.statisticsfemale',[
            "torneosA" => $torneosA,
            "estadisticas"=>$estadisticas,
            "torneoCurr" =>$torneoCurr,
        ]);
    }
    public function statisticsmale($idT=-1){
        $torneosA = torneos::where("activo",1)->where("genero","M")->get();
        if($idT==-1){
            $torneoCurr = $torneosA[0];
        }
        else{
            $torneoCurr = torneos::findOrFail($idT);
        }

        $estadisticas = participantes_torneo::where("Torneo_id",$torneoCurr->id)
            ->get()->sort(function($a , $b){
            if($a->Puntos == $b->Puntos){
                return $a->DiferenciaGoles < $b->DiferenciaGoles? 1:-1;
            }
            else
                return $a->Puntos < $b->Puntos? 1:-1;
        });

        debug($torneoCurr);
        debug($estadisticas);

        return view('publica.statisticsmale',[
            "torneosA" => $torneosA,
            "estadisticas"=>$estadisticas,
            "torneoCurr" =>$torneoCurr,
        ]);
    }
    public function matchresultfemale(){
        return view('publica.matchresultfemale',[
        ]);
    }
    public function matchresultmale(){
        return view('publica.matchresultmale',[
        ]);
    }
    public function ejemplo()
    {
        return view('test');
    }

    function ordenar($a , $b){
        if($a->Puntos == $b->Puntos){
            return $a->DiferenciaGoles < $b->DiferenciaGoles? 1:-1;
        }
        else
            return $a->Puntos < $b->Puntos? 1:-1;
    }

}
