<?php

namespace App\Http\Controllers;

use App\equipos;
use App\instituciones;
use App\participantes_torneo;
use App\partidos;
use App\programadores;
use App\torneos;
use App\usuarios;
use Carbon\Carbon;
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
        $programadores = programadores::all()->filter( function($x){
            return $x->usuario->active;
        });
        return view("admin.programador.index",[
            "programadores" => $programadores,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Programadores-Lista", "active"=>"0","link"=>""]
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
                "Programador"=>["etiqueta"=>"Programadores-Lista", "active"=>"1","link"=>"/admin/programador"],
                "crear"=>["etiqueta"=>"Agregar", "active"=>"0","link"=>""]
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
        $usuario->active=1;

        $usuario->save();

        $programador = new programadores();
        $programador->nombre = $request["nombre"];
        $programador->idUsr = $usuario->id;
        $programador->correo = $request["correo"];
        $programador->telefono = $request["telefono"];
        $programador->idInst = $request["id_institucion"];

        $programador->save();
        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Programador Creado"]]
        );
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
                "Programador"=>["etiqueta"=>"Programadores-Lista", "active"=>"1","link"=>"/admin/programador"],
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
                "Programador"=>["etiqueta"=>"Programadores-Lista", "active"=>"1","link"=>"/admin/programador"],
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
                return redirect()->back()->with(
            ["message" => ["clase" => "success", "mensaje" => "Actualización Exitosa"]]
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

    public function programacion(){

        $user = Auth::user();
        $torneos = [];
        switch ($user->level){
            case 1: //ES Admin
                $torneos = torneos::where("activo",1)->get();
                break;
            case 2: //Es Programador
                $programador = $user->programadores[0];
                $equipos = equipos::where("idIst",$programador->idInst)->where("activo",1)->select("id")->get();
                $torneosIds = participantes_torneo::whereIn("Equipos_id",$equipos)->groupBy("Torneo_Id")->select("Torneo_Id")->get();
                $torneos = torneos::whereIn("id",$torneosIds)
                    ->where("activo",1)
                    ->where("programable",1 )
                    ->get();
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
                "crear"=>["etiqueta"=>"Programacion-Lista", "active"=>"0","link"=>""]
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
                $partidos = partidos::where("Torneo_id",$idT)->get()->groupBy("jornada");
                break;
            case 2: //Es Programadore
                $jornada = $torneo = torneos::findOrFail($idT);
                $programador = $user->programadores[0];
                $equipos = equipos::where("idIst",$programador->idInst)->where("activo",1)->select("id")->get();
                $partidos = partidos::where("Torneo_id",$idT)
                                ->whereIn("Local",$equipos)
                                ->orWhereIn("Visitante",$equipos)->where("Torneo_id",$idT)
                                ->get()->groupBy("jornada")
                                ->filter( function ($v) use ($jornada){
                                    debug($v[0]->jornada);
                                    debug($jornada);
                                    //return true;
                                    return $v[0]->jornada>=$jornada->jornada-1 && $v[0]->jornada<=$jornada->jornada+2;
                                });
                break;
            default: return redirect()->action("AdminController@index")->with(

                ["message"=>["clase"=>"danger","mensaje"=>"No puedes Acceder a esa seccion"]]
            );
        }
        debug($user->level);
        debug($partidos);

        return view("admin.verProgramador.partidosP",[
            "partidosG" => $partidos,

            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "agregarE" => ["etiqueta" => "Programacion-Lista", "active" => "1", "link" => "/admin/verProgramador/programacion"],
                "jornada" => ["etiqueta" => "Jornadas", "active" => "0", "link" => ""]
            ]
        ]);

    }

    public function partidos(){
        return view("admin.verArbitro.partidos",[
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Partidos-Lista   ", "active"=>"0","link"=>""]
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
                return view("admin.programador.detail",[
                    "programador" => $programador,
                    "rutas" => [
                        "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                        "crear"=>["etiqueta"=>"Pefil", "active"=>"0","link"=>""]
                    ]
                ]);
                break;
            case 3: //Arbitro
                $arbitro = $user->arbitros[0];
                debug($arbitro);
                return view("admin.arbitro.detail",[
                    "arbitro" => $arbitro,
                    "rutas" => [
                        "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                        "crear"=>["etiqueta"=>"Pefil", "active"=>"0","link"=>""]
                    ]
                ]);
                break;
            case 4: // Jugdor
                $jugador = $user->jugadores[0];
                debug($jugador);
                return view("admin.jugador.detail",[
                    "jugador" => $jugador,
                    "rutas" => [
                        "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                        "crear"=>["etiqueta"=>"Pefil", "active"=>"0","link"=>""]
                    ]
                ]);
                break;
        }

    }

    public function propuesta(Request $request,$idP){

        debug("Propuesta");

        $partido = partidos::findOrFail($idP);
        //debug($partido);
        //debug($partido->status == 2);

        if( $partido->status == 2 && Auth::user()->level > 1 ) // Ya asignada y no eres admin
            return redirect()->back();

        $hora = (new Carbon($request["hora"]) )->toTimeString();

        $fecha = $request["fecha"];

        $campo = strtoupper($request["campo"]);

        //debug($request["fecha"]);
        //debug($request["hora"]);
        //debug(strtotime($request["hora"]));

        //debug(Auth::user()->level);
        //debug(Auth::user()->level<2);

        if( Auth::user()->level < 2 ) // es admin
        {
            debug("Admin");
            $partido->hora = $hora;
            $partido->fecha = $fecha;
            $partido->campo = $campo;
            $partido->status = 2; //Aceptado
        }else{
            debug("Programador");
            //Es un Programador
            if($partido->status == 1) //propuesta
            {
                if(Auth::user()->id==$partido->verifica){
                    return redirect()->back();  //No debe de enviarlo dos veces
                }
                debug("Propuesta");
                debug($hora);
                debug($partido->hora);
                debug($fecha);
                debug($partido->fecha);

                if($partido->hora == $hora && $partido->fecha == $fecha && $partido->campo == $campo){ //Son iguales
                    debug("Acuerdo");
                    $partido->status = 2; //llegaron aun acuerdo
                    $partido->verifica = null;
                }else{
                    debug("No Acuerdo");
                    //No hay acuerdo , borro la propuesta
                    $partido->hora = null;
                    $partido->fecha = null;
                    $partido->verifica = null;
                    $partido->campo=null;
                    $partido->status = 0;
                }
            }else if($partido->status == 0) { // Nueva propuesta
                debug("Nueva Propuesta");
                debug($hora);
                debug($partido->hora);
                debug($fecha);
                debug($partido->fecha);

                $partido->hora = $hora;
                $partido->fecha = $fecha;
                $partido->status = 1; //Aceptado
                $partido->campo = $campo;
                $partido->verifica = Auth::user()->id;

            }
            else{
                debug("NADA");
                return redirect()->back();  //Ya no se puede modificar
            }

        }
        debug($partido);
        $partido->save();

        return redirect()->back();  //Exito
    }


    public function habilitar_edicion_partido($idP){
        $partido = partidos::findOrFail($idP);
        if(Auth::user()->level > 1){
            return redirect()->back(); //No debes de editarlo
        }
        $partido->status = 1;
        $partido->save();
        return redirect()->back(); //No debes de editarlo

    }

    public function all()
    {
        $programador = programadores::all();

        return view('admin.programador.all', [
            "programadores" => $programador,
            "rutas" => [
                "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                "Juga" => ["etiqueta" => "Programadores-Historico", "active" => "0", "link" => ""]
            ]
        ]);
    }

    public function activate($id){
        $programadores = programadores::find($id);
        $usuario = $programadores->usuario;
        $usuario->active = true;
        $usuario->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "success", "mensaje" => $programadores->nombre . " Activado"]]
        );
    }


    public function deactivate($id){
        $programadores = programadores::find($id);
        $usuario = $programadores->usuario;
        $usuario->active = false;
        $usuario->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "warning", "mensaje" => $programadores->nombre . " Desactivado"]]
        );
    }


    public function torneos_participantes(){

        //Esta vista solo debe de mostrarla a los programadores
        $usuario = Auth::user();
        $programador = $usuario->programadores[0];

        $equipos = equipos::where('activo',1)->where('idIst',$programador->idInst)->select('id')->get();
        $torneos = participantes_torneo::whereIn('Equipos_id',$equipos)->select('Torneo_id')->get();

        $torneos_participamos = torneos::whereIn('id',$torneos)->get();

        debug($usuario);
        debug($programador);

        return view('admin.verProgramador.torneos_participantes', [
            "torneos"=>$torneos_participamos,
            "rutas" => []
        ]);
    }

    public function marcadores($idT){
        $torneo = torneos::findOrFail($idT);
        $partidos = partidos::where('Torneo_id',$idT)->get()->groupBy('jornada');

        return view('admin.verProgramador.marcador', [
            "partidosG"=>$partidos,
            "rutas" => []
        ]);
    }

    public function estado_torneos(){
        $torneos = torneos::where('programable',1);

        return view('admin.verProgramador.marcador', [
            "partidosG"=>$torneos,
            "rutas" => []
        ]);
    }
}

