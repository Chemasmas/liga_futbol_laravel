<?php

namespace App\Http\Controllers;

use App\arbitros;
use App\asistencia;
use App\Bitacora;
use App\jugadores;
use App\participantes_torneo;
use App\partidos;
use App\usuarios;
use App\util\Imagenes;
use App\util\Puntos;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ArbitroController extends Controller
{

    private $ruta = "arbitros";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arbitros = arbitros::all()->filter( function($x){
            return $x->usuario->active;
        });

        return view('admin.arbitro.index',[
            "arbitros"=>$arbitros,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Arbitros-Lista", "active"=>"0","link"=>""]
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
        return view('admin.arbitro.crear',[
                "rutas" => [
                    "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                    "Arbitro"=>["etiqueta"=>"Arbitros-Lista", "active"=>"1","link"=>"/admin/arbitro"],
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
        $nombre = $request["nombre"];
        $telefono = $request["telefono"];

        $username = $request["usuario"];
        $password = $request["password"];


        $usuario = new usuarios();
        $usuario->active=1;
        $usuario->level=3;
        $usuario->password=Hash::make($password);
        $usuario->username=$username;

        $usuario->save(['timestamps' => false]);


        debug($usuario);

        $arbitro = new arbitros();
        $arbitro->nombre = $nombre;
        $arbitro->telefono = $telefono;
        $arbitro->idUsr = $usuario->id;

        $foto = $request->file('foto');
        if($foto!=null){
            $arbitro->foto = Imagenes::uploadImage($this->ruta,$foto,$nombre);
        }
        $arbitro->save(['timestamps' => false]);

        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Árbitro Creado"]]
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
        $arbitro = arbitros::findOrFail($id);
        $usuario = $arbitro->usuario;

        debug($arbitro);
        debug($usuario);
        return view("admin.arbitro.detail",[
            "arbitro" => $arbitro,
            "usuario" => $usuario,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Arbitro"=>["etiqueta"=>"Arbitros-Lista", "active"=>"1","link"=>"/admin/arbitro"],
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
        $arbitro  = arbitros::findOrFail($id);
        debug($arbitro);
        return view('admin.arbitro.crear',[
            "arbitro"=>$arbitro,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Arbitro"=>["etiqueta"=>"Arbitros-Lista", "active"=>"1","link"=>"/admin/arbitro"],
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

        $arbitro  = arbitros::findOrFail($id);

        $arbitro->nombre = $request["nombre"];
        $arbitro->telefono = $request["telefono"];
        $usuario = $arbitro->usuario;
        debug($usuario);
        $usuario->username = $request["usuario"];


        $foto = $request->file('foto');
        if($foto!=null){
            $arbitro->foto = Imagenes::uploadImage($this->ruta,$foto,$request["nombre"]);
        }

        if(strlen($request["password"])>6){
            $usuario->password = Hash::make($request["password"]);
        }
        $arbitro->update();
        $usuario->update();

        debug($arbitro);
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

    public function all()
    {

        $arbitros = arbitros::all();

        return view('admin.arbitro.all', [
            "arbitros" => $arbitros,
            "rutas" => [
                "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                "Juga" => ["etiqueta" => "Arbitros-Historico", "active" => "0", "link" => ""]
            ]
        ]);
    }

    public function activate($id){
        $arbitro = arbitros::find($id);
        $usuario = $arbitro->usuario;
        $usuario->active = true;
        $usuario->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "success", "mensaje" => $arbitro->nombre . " Activado"]]
        );
    }


    public function deactivate($id){
        $arbitro = arbitros::find($id);
        $usuario = $arbitro->usuario;
        $usuario->active = false;
        $usuario->update();
        return redirect()->back()->with(
            ["message" => ["clase" => "warning", "mensaje" => $arbitro->nombre . " Desactivado"]]
        );
    }


    public function lista_partidos(){

        $partidos = partidos::whereDate('fecha',"=",Carbon::today('America/Mexico_City')->toDateString())
            ->where("status",2)->get();


        $ayer = Carbon::yesterday();
        $limite = Carbon::today()->addDay(4);
        //$partidos2 = partidos::whereBetween( "fecha",array($ayer,$limite) )->get()->groupBy("fecha");
        debug(partidos::all());
        debug($partidos);
        //debug($partidos2);

        return view('admin.verArbitro.lista_partidos',
            [
            "partidos" => $partidos,
            "rutas" => [
                "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                "Juga" => ["etiqueta" => "Partidos del Día", "active" => "0", "link" => ""]
            ]
        ]);
    }

    public function pasar_lista($idE,$idP){

        $jugadores = jugadores::where("equipos_id",$idE)->get();
        $asistencias = asistencia::where("partidos_id",$idP)->select("jugadores_id")->get();

        debug("$jugadores");
        debug($asistencias);
        debug($asistencias->pluck("jugadores_id"));
        debug($idP);
        return view('admin.verArbitro.pase_lista',
            [
                "jugadores"=> $jugadores,
                "idP" => $idP,
                "asistencias"=>$asistencias->pluck("jugadores_id")->toArray() ,
                "rutas" => [
                    "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                    "Parti" => ["etiqueta"=>"Partidos del Dia", "active" => "1" ,"link"=>"/admin/arbitro/partidos"],
                    "Juga" => ["etiqueta" => "Partidos del Día", "active" => "0", "link" => ""]
                ]
            ]);
    }

    public function asistio(Request $request,$idP,$idJ){
        debug($request["asistio"]);
        if($request["asistio"]==1){
            $asistencia = new asistencia();
            $asistencia->partidos_id=$idP;
            $asistencia->jugadores_id=$idJ;
            $asistencia->save();
        }
        else{
            $asistencia = asistencia::where("partidos_id",$idP)->where("jugadores_id",$idJ)->delete();
        }
        return redirect()->back();
    }

    public function capturar($idP){
        $partido = partidos::findOrFail($idP);
        $local = $partido->equipol->id;
        $visitante = $partido->equipov->id;

        $jugadoresL = jugadores::where("equipos_id",$local)->get();
        $jugadoresV = jugadores::where("equipos_id",$visitante)->get();


        $marcadorL = Bitacora::where("idP",$idP)
            ->where("goles",1)
            ->where("idE",$local)
            ->count();

        $marcadorV = Bitacora::where("idP",$idP)
            ->where("goles",1)
            ->where("idE",$visitante)
            ->count();


        //debug($partido);
        //debug($local);
        //debug($visitante);
        //debug($jugadoresL);
        //debug($jugadoresV);

        return view('admin.verArbitro.partido',
            [
                "marcadorL"=>$marcadorL,
                "marcadorV"=>$marcadorV,
                "partido"=> $partido,
                "jugadoresL" => $jugadoresL,
                "jugadoresV" => $jugadoresV,
                "rutas" => [
                    "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                    "Parti" => ["etiqueta"=>"Partidos del Dia", "active" => "1" ,"link"=>"/admin/arbitro/partidos"],
                    "Juga" => ["etiqueta" => "Partidos del Día", "active" => "0", "link" => ""]
                ]
            ]);
    }

    public function gol(Request $request){
        debug($request);
        $bitacora = new Bitacora($request->all());
        debug($bitacora);
        $bitacora->save();

        $partido = partidos::findOrFail($bitacora->idP);
        if($partido->Local == $bitacora->idE ){
            $partido->marcadorLocal = $partido->marcadorLocal + 1;
        }
        else {
            $partido->marcadorVisitante = $partido->marcadorVisitante + 1;
        }
        $partido->save();
        return redirect()->back();
    }

    public function amarilla(Request $request){
        debug($request);
        $bitacora = new Bitacora($request->all());
        debug($bitacora);
        $bitacora->save();

        return redirect()->back();
    }

    public function roja(Request $request){
        debug($request);
        $bitacora = new Bitacora($request->all());
        debug($bitacora);
        $bitacora->save();

        return redirect()->back();
    }

    public function finalizar(Request $request){

        $idP = $request["idP"];
        Puntos::calculoPuntos($idP);
/*
        $partido = partidos::findOrFail($idP);
        $local = $partido->marcadorLocal;
        $visitante = $partido->marcadorVisitante;


        $partLocal = participantes_torneo::where("Torneo_id",$partido->Torneo_id)
            ->where("Equipos_id",$partido->Local)->first();
        $partVisita = participantes_torneo::where("Torneo_id",$partido->Torneo_id)
            ->where("Equipos_id",$partido->Visitante)->first();


        //Local
        $partLocal->PartidosJugados =  $partLocal->PartidosJugados +1;
        if($local>$visitante){
            $partLocal->PartidosGanados =  $partLocal->PartidosGanados +1;
            $partLocal->Puntos=$partLocal->Puntos+3;
        }else if($local<$visitante){
            $partLocal->PartidosPerdidos =  $partLocal->PartidosPerdidos +1;
            $partLocal->Puntos=$partLocal->Puntos+0;
        }else{
            $partLocal->PartidosEmpatados =  $partLocal->PartidosEmpatados +1;
            $partLocal->Puntos=$partLocal->Puntos+1;
        }
        $partLocal->GolesFavor =$partLocal->GolesFavor + $local;
        $partLocal->GolesContra = $partLocal->GolesContra +$visitante;
        $partLocal->DiferenciaGoles = $partLocal->GolesFavor - $partLocal->GolesContra;
        $partLocal->save();


        //Visitante
        $partVisita->PartidosJugados =  $partVisita->PartidosJugados +1;
        if($local<$visitante){
            $partVisita->PartidosGanados =  $partVisita->PartidosGanados +1;
            $partVisita->Puntos=$partVisita->Puntos+3;
        }else if($local>$visitante){
            $partVisita->PartidosPerdidos =  $partVisita->PartidosPerdidos +1;
            $partVisita->Puntos=$partVisita->Puntos+0;
        }else{
            $partVisita->PartidosEmpatados =  $partVisita->PartidosEmpatados +1;
            $partVisita->Puntos=$partVisita->Puntos+1;
        }
        $partVisita->GolesFavor =$partVisita->GolesFavor + $visitante;
        $partVisita->GolesContra = $partVisita->GolesContra +$local;
        $partVisita->DiferenciaGoles = $partVisita->GolesFavor - $partVisita->GolesContra;
        $partVisita->save();

        $partido->verifica = -1;
        $partido->save();
*/
        return redirect()->action("ArbitroController@lista_partidos");
    }
}

