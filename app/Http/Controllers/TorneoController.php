<?php

namespace App\Http\Controllers;

use App\equipos;
use App\participantes_torneo;
use App\partidos;
use App\torneos;
use App\util\Plantillas;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torneosG = torneos::all()
                    ->filter( function($t) { return $t->activo; } )
                    ->sortBy("genero")
                    ;
        return view('admin.torneo.index',[
            "torneos"=>$torneosG,
            "rutas" => [
            "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
            "Torneo"=>["etiqueta"=>"Torneos-Lista", "active"=>"0","link"=>""]
            ]
        ]);
    }

    public function all()
    {
        $torneosG = torneos::all()
            ->sortBy("genero")
            ->sortByDesc( "id"  )
        ;
        return view('admin.torneo.all',[
            "torneos"=>$torneosG,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Torneo"=>["etiqueta"=>"Torneos-Historico", "active"=>"0","link"=>""]
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.torneo.crear',[
            "rutas" => [
            "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
            "Torneo"=>["etiqueta"=>"Torneos-Lista", "active"=>"1","link"=>"/admin/torneo"],
            "crear"=>["etiqueta"=>"Crear", "active"=>"0","link"=>""]
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        debug($request["nombre"]);

        $torneo = new torneos();
        $torneo->nombre = $request["nombre"];
        $torneo->tipo_torneo = $request["tipo_torneo"];
        $torneo->genero = $request["genero"];
        $torneo->activo = true;

        $torneo->save(['timestamps' => false]);

        //TODO validacion exito de la insercion
        //success
        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Torneo Creado"]]
        );

        //return view('admin.torneo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $torneo = torneos::findOrFail($id);

        //Todo , retrieve info form torneo
        return view('admin.torneo.info',[
            "torneo" => $torneo,
            "participantes" => $torneo->participantesTorneos()->get(),
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Torneo"=>["etiqueta"=>"Torneos-Lista", "active"=>"1","link"=>"/admin/torneo"],
                "crear"=>["etiqueta"=>"Ver", "active"=>"0","link"=>""]
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $torneo = torneos::findOrFail($id);
        debug($torneo);
        return view('admin.torneo.crear',[
            "torneo1"=>$torneo,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Torneo"=>["etiqueta"=>"Torneos-Lista", "active"=>"1","link"=>"/admin/torneo"],
                "crear"=>["etiqueta"=>"Editar", "active"=>"0","link"=>""]
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        debug($request["nombre"]);

        $torneo = torneos::findOrFail($id);

        $torneo->nombre = $request["nombre"];
        $torneo->tipo_torneo = $request["tipo_torneo"];
        $torneo->genero = $request["genero"];
        $torneo->activo = true;

        $torneo->update();

        debug($torneo);
        //TODO validacion exito de la insercion
        //success
        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Actualización Exitosa"]]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function participantes($idT){
        $torneo = torneos::where("id",$idT)->first();
        debug($torneo);
        //TODO debe de evitar mostrar a los que ya estan
        $participantes = participantes_torneo::select("Equipos_id")->where("Torneo_id",$idT)->get();

        $participantesE = equipos::whereIn("id",$participantes)->get();
        $equipos = equipos::where("genero",$torneo->genero)
            ->whereNotIn("id",$participantes)
            ->get();
        //$eParticipantes = equipos::where("")

        debug($participantes);
        debug($participantesE);

        return view("admin.torneo.participantes",[
            "torneo"=>$torneo,
            "equipos"=>$equipos,
            "participantes"=>$participantesE,
            "rutas" => [
                "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                "Equipo" => ["etiqueta" => "Torneos-Lista", "active" => "1", "link" => "/admin/torneo"],
                "crear" => ["etiqueta" => "AgregarEquipos", "active" => "0", "link" => ""]
            ]
        ]);
    }

    public function add_participante(Request $request,$idT){
        debug($request);

        $torneo = torneos::findOrFail($idT);
        $nparticipantes = participantes_torneo::where("Torneo_id",$idT)->count();
        debug($nparticipantes);
        debug($torneo->tipo_torneo);
        if($torneo->tipo_torneo!=1)//No es una doble vuelta
        {
            debug("NO es de doble Vuelta");
            if($torneo->tipo_torneo <= $nparticipantes){
                debug("Ya te pasaste ");
                    return redirect()->back()->with(
                        ["message" => ["clase" => "danger", "mensaje" =>"¡No es posible agregar más equipos!"]]
                    );
            }
        } else if($torneo->tipo_torneo==1){
            debug("Es de doble Vuelta");
            //Torneo 7 v2
            if($nparticipantes >= 7){
                debug("Te pasaste en la doble");
                return redirect()->back()->with(
                    ["message" => ["clase" => "danger", "mensaje" =>"¡No es posible agregar más equipos!"]]
                );
            }
        }


        $participante = new participantes_torneo();
        $participante->Torneo_id = $idT;
        $participante->Equipos_id = $request["Equipos_id"];
        $participante->PartidosEmpatados = 0;
        $participante->PartidosGanados = 0;
        $participante->PartidosJugados = 0;
        $participante->GolesContra = 0;
        $participante->GolesFavor = 0;
        $participante->DiferenciaGoles = 0;
        $participante->Puntos = 0;

        $participante->save(['timestamps' => false]);

        debug("Exito!!");
        return redirect()
            ->action("TorneoController@participantes",["idT"=>$idT])
            ->with([
                ["message"=>["clase"=>"success","mensaje"=>"Equipo Agregado"]]
            ]);
    }

    public function remove_participante($idT,$idE){
        $participante = participantes_torneo::where("Torneo_id",$idT)
        ->where("Equipos_id",$idE)->delete();

        debug($participante);
        //$participante->delete();


        return redirect()
            ->action("TorneoController@participantes",["idT"=>$idT])
            ->with([
                ["message"=>["clase"=>"warning","mensaje"=>"Equipo Eliminado"]]
            ]);

    }

    public function activate($idT){
        $torneo = torneos::find($idT);
        $torneo->activo = true;
        $torneo->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "success", "mensaje" => $torneo->nombre . " Activado"]]
        );
    }


    public function deactivate($idT){
        $torneo = torneos::find($idT);
        $torneo->activo = false;
        $torneo->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "warning", "mensaje" => $torneo->nombre . " Desactivado"]]
        );
    }

    public function generarRotacion($idT){

        $participantes = participantes_torneo::where('Torneo_id',$idT)->get();
        //$torneo = torneos::where("id",$idT)->first();
        //debug($torneo);
        $plantilla = new Plantillas($idT,$participantes);
        $plantilla->generar();
        //$plantilla->plantilla5();

        return redirect()->back()->with(
                ["message"=>["clase"=>"success","mensaje"=>"Rol Generado"]]
            );
    }

    public function jornadas($idT){
        $partidos = partidos::where("Torneo_id",$idT)->get()->groupBy("jornada");

        return view("admin.torneo.jornadas",[
           "idT" => $idT,
           "partidos"=>$partidos,
            "rutas" => [
                "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                "Lista" => ["etiqueta" => "Torneos-Lista", "active" => "1", "link" => "/admin/torneo"],
                "agregarE" => ["etiqueta" => "AgregarEquipos", "active" => "1", "link" => "/admin/torneo/".$idT."/participantes"],
                "jornada" => ["etiqueta" => "Jornadas", "active" => "0", "link" => ""]
            ]
        ]);
    }

    public function jornadasXLS($idT){
        $torneo = torneos::findOrFail($idT);
        return Excel::create($torneo->nombre, function($excel) use ($idT) {


            $partidos = partidos::where("Torneo_id",$idT)->get()->groupBy("jornada");
            $participantes = participantes_torneo::select("Equipos_id")->where("Torneo_id",$idT)->get();
            $participantesE = equipos::whereIn("id",$participantes)->get();

            $excel->sheet('Rol de Juegos', function($sheet) use ($idT,$partidos,$participantesE) {

                $sheet->loadView('excel.base',["partidos"=>$partidos,"participantes"=>$participantesE] );

            });

        })->download('xls');
    }


    public function asignar_jornada(Request $request,$idP){
        $partido = partidos::findOrFail($idP);
        $partido->jornada = $request["jornada"];
        $partido->save();

        return redirect()->back();
    }

}

