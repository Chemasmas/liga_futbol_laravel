<?php

namespace App\Http\Controllers;

use App\arbitros;
use App\asistencia;
use App\jugadores;
use App\partidos;
use App\usuarios;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ArbitroController extends Controller
{
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
        $ruta = "arbitros";
        //debug($request);
        debug($request->files);
        $request->file('foto')->move($ruta, $arbitro->nombre.".".$request->file('foto')->getClientOriginalExtension());
        $arbitro->foto = $ruta."/".$arbitro->nombre.".".$request->file('foto')->getClientOriginalExtension();

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

        $ruta = "arbitros";
        $foto = $request->file('foto');
        debug($foto);
        if($foto!=null){
            $request->file('foto')->move($ruta, $arbitro->nombre.".".$foto->getClientOriginalExtension());
            $arbitro->foto = $ruta."/".$arbitro->nombre.".".$foto->getClientOriginalExtension();
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
        $partidos = partidos::whereDate('fecha',"=",Carbon::today()->toDateString())
            ->where("status",2)->get();


        $ayer = Carbon::yesterday();
        $limite = Carbon::today()->addDay(4);
        //$partidos2 = partidos::whereBetween( "fecha",array($ayer,$limite) )->get()->groupBy("fecha");
        debug(partidos::all());
        debug($partidos);
        //debug($partidos2);

        return view('admin.arbitro.lista_partidos',
            [
            "partidos" => $partidos,
            "rutas" => [
                "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                "Juga" => ["etiqueta" => "Arbitros-Historico", "active" => "0", "link" => ""]
            ]
        ]);
    }

        public function pasar_lista($idE,$idP){

            $jugadores = jugadores::where("equipos_id",$idE)->get();
            $asistencias = asistencia::where("partidos_id",$idP)->get();

            debug("$jugadores");
            debug($asistencias);
            return view('admin.arbitro.pase_lista',
                [
                    "jugadores"=> $jugadores,
                    "idP" => $idP,
                    "asistencias"=>$asistencias,
                    "rutas" => [
                        "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                        "Juga" => ["etiqueta" => "Arbitros-Historico", "active" => "0", "link" => ""]
                    ]
                ]);
        }
}

