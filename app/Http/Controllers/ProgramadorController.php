<?php

namespace App\Http\Controllers;

use App\equipos;
use App\instituciones;
use App\participantes_torneo;
use App\partidos;
use App\programadores;
use App\torneos;
use App\usuarios;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProgramadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programadores = programadores::all();
        return view("admin.programador.index",[
            "programadores" => $programadores,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Programadores", "active"=>"0","link"=>""]
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
        $instituciones = instituciones::all();
        return view("admin.programador.crear", [
            "rutas"=>[],
            "instituciones" => $instituciones,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Programador"=>["etiqueta"=>"Programador", "active"=>"1","link"=>"/admin/programador"],
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

        $usuario = new  usuarios();
        $usuario->password = Hash::make($request["password"]);
        $usuario->username = $request["usuario"];
        $usuario->level = 2;

        $usuario->save();

        $programador = new programadores();
        $programador->nombre = $request["nombre"];
        $programador->idUsr = $usuario->id;
        $programador->correo = $request["correo"];
        $programador->telefono = $request["telefono"];
        $programador->idInst = $request["id_institucion"];

        $programador->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programador = programadores::findOrFail($id);
        return view("admin.programador.detail",[
            "programador" => $programador,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Programador"=>["etiqueta"=>"Programador", "active"=>"1","link"=>"/admin/programador"],
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
        $programador = programadores::findOrFail($id);
        $instituciones = instituciones::all();
        return view("admin.programador.crear", [
            "rutas"=>[],
            "instituciones" => $instituciones,
            "programador" => $programador,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Programador"=>["etiqueta"=>"Programador", "active"=>"1","link"=>"/admin/programador"],
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

        $programador = programadores::findOrFail($id);
        $programador->nombre = $request["nombre"];
        $programador->correo = $request["correo"];
        $programador->telefono = $request["telefono"];
        $programador->idInst = $request["id_institucion"];

        $usuario = $programador->usuario;
        if(strlen($request["password"])>6){
            $usuario->password = Hash::make($request["password"]);
        }
        $usuario->username = $request["usuario"];
        $usuario->level = 2;

        $usuario->save();
        $programador->save();
        return redirect()->back();
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

    public function programacion(){

        $user = Auth::user();
        $torneos = [];
        switch ($user->level){
            case 1: //ES Admin
                $torneos = torneos::where("activo",1)->get();
                break;
            case 2: //Es Programadore
                $programador = $user->programadores[0];
                $equipos = equipos::where("idIst",$programador->idInst)->where("activo",1)->select("id")->get();
                $torneosIds = participantes_torneo::whereIn("Equipos_id",$equipos)->groupBy("Torneo_Id")->select("Torneo_Id")->get();
                $torneos = torneos::whereIn("id",$torneosIds)->get();
                debug($programador);
                debug($torneosIds);
                break;
            default: return redirect()->action("AdminController@index")->with(
                ["message"=>["clase"=>"danger","mensaje"=>"No puedes Acceder a esa seccion"]]
            );
        }

        debug($torneos);

        return view("admin.verProgramador.programacion",[
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Programacion", "active"=>"0","link"=>""]
            ],
            "torneos" => $torneos,
        ]);
    }

    //TODO los partidos del torneo que le corresponden al administrador
    public function rol($idT){
        $user = Auth::user();
        $partidos = [];
        switch ($user->level){
            case 1: //ES Admin
                $partidos = partidos::where("Torneo_id",$idT)->groupBy("jornada")->get();
                break;
            case 2: //Es Programadore
                $programador = $user->programadores[0];
                $equipos = equipos::where("idIst",$programador->idInst)->where("activo",1)->select("id")->get();
                $partidos = partidos::where("Torneo_id",$idT)->whereIn("Local",$equipos)
                                ->orWhereIn("Visitante",$equipos)->where("Torneo_id",$idT)
                                ->get()->groupBy("jornada");
                break;
            default: return redirect()->action("AdminController@index")->with(

                ["message"=>["clase"=>"danger","mensaje"=>"No puedes Acceder a esa seccion"]]
            );
        }
        debug($user->level);
        debug($partidos);

        return view("admin.verProgramador.partidos",[
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Programacion", "active"=>"0","link"=>""]
            ],
            "partidosG" => $partidos,
        ]);

    }

    public function partidos(){
        return view("admin.verArbitro.partidos",[
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Partidos", "active"=>"0","link"=>""]
            ]
        ]);
    }

    public function perfil(){
        $user=Auth::user();

        switch ($user->level){
            case 1://ADmin
                return view("admin.administrador.show",[
                    "usuario" => $user,
                    "administrador" => $user->administradores[0],
                    "rutas" => [
                        "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                        "crear"=>["etiqueta"=>"Pefil", "active"=>"0","link"=>""]
                    ]
                ]);
                break;
            case 2: //Programador
                $programador = $user->programadores[0];
                debug($programador);
                return view("admin.verProgramador.perfilP",[
                    "programador" => $programador,
                    "rutas" => [
                        "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                        "crear"=>["etiqueta"=>"Pefil", "active"=>"0","link"=>""]
                    ]
                ]);
                break;
            case 3: //Arbitro
                break;
            case 4: // Jugdor
                break;
        }

    }
}
