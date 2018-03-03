<?php

namespace App\Http\Controllers;

use App\division;
use App\equipos;
use App\instituciones;
use App\jugadores;
use App\usuarios;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = jugadores::all();
        debug($jugadores);
        foreach ($jugadores as $jugador){
            debug($jugador->institucione()->get());
            debug($jugador->equipo());
        }
        return view("admin.jugador.index",[
            "rutas"=>[],
            "jugadores"=>$jugadores,
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
        $equipos = equipos::all();
        return view("admin.jugador.crear", [
            "instituciones" => $instituciones,
            "equipos" => $equipos,
            "rutas" => [],
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
        $nacimiento = $request["nacimiento"];
        $curp = $request["curp"];
        $idI = $request["id_institucion"];
        $dorsal = $request["dorsal"];
        $idE = $request["id_equipo"];
        //$genero = $request[""];

        $username = $request["usuario"];
        $password = $request["password"];


        $usuario = new usuarios();
        $usuario->active=1;
        $usuario->level=4;
        $usuario->password=Hash::make($password);
        $usuario->username=$username;

        $usuario->save(['timestamps' => false]);

        $jugador = new jugadores();
        $jugador->nombre = $nombre;
        $jugador->idUsr = $usuario->id;
        $jugador->fechaNac = $nacimiento;
        $jugador->documento_identidad = $curp;
        $jugador->idInst = $idI;
        $jugador->equipos_id = $idE;
        $jugador->numero=$dorsal;


        $ruta = "jugadores";
        $request->file('foto')->move($ruta,$jugador->nombre.".".$request->file('foto')->getClientOriginalExtension());
        $jugador->foto = $ruta."/".$jugador->nombre.".".$request->file('foto')->getClientOriginalExtension();

        $jugador->save( ['timestamps' => false]);

        return redirect()->action("JugadorController@create")->with(
            ["Mensaje"=>["clase"=>"succes","mensaje"=>"Usuario Creado.!!"]]
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}

