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
            "jugadores"=>$jugadores,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Jugador", "active"=>"0","link"=>""]
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
        $equipos = equipos::all();
        return view("admin.jugador.crear", [
            "instituciones" => $instituciones,
            "equipos" => $equipos,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Jugador"=>["etiqueta"=>"Jugador", "active"=>"1","link"=>"/admin/jugador"],
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
        $nacimiento = $request["nacimiento"];
        $curp = $request["curp"];
        $idI = $request["id_institucion"];
        $dorsal = $request["dorsal"];
        $idE = $request["id_equipo"];
        $genero = $request["genero"];

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
        $jugador->genero = $genero;
        $jugador->activo = true;


        $ruta = "jugadores";
        $request->file('foto')->move($ruta,$jugador->nombre.".".$request->file('foto')->getClientOriginalExtension());
        $jugador->foto = $ruta."/".$jugador->nombre.".".$request->file('foto')->getClientOriginalExtension();

        $jugador->save( ['timestamps' => false]);

        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Insercion Exitosa"]]
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
        return view("admin.jugador.detail",[
            "jugador" => jugadores::findOrFail($id),
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Jugador"=>["etiqueta"=>"Jugador", "active"=>"1","link"=>"/admin/jugador"],
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
        $jugador = jugadores::find($id);

        $instituciones = instituciones::all();
        $equipos = equipos::all();
        return view("admin.jugador.crear", [
            "jugador" => $jugador,
            "usuario" => $jugador->usuario,
            "instituciones" => $instituciones,
            "equipos" => $equipos,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Jugador"=>["etiqueta"=>"Jugador", "active"=>"1","link"=>"/admin/jugador"],
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
        $nombre = $request["nombre"];
        $nacimiento = $request["nacimiento"];
        $curp = $request["curp"];
        $idI = $request["id_institucion"];
        $dorsal = $request["dorsal"];
        $idE = $request["id_equipo"];
        $genero = $request["genero"];

        $username = $request["usuario"];
        $password = $request["password"];


        $jugador = jugadores::findOrFail($id);
        $usuario = $jugador->usuario;

        if($password!=null || $password!="")
            $usuario->password=Hash::make($password);
        $usuario->username=$username;

        $usuario->update();

        $jugador->nombre = $nombre;
        $jugador->fechaNac = $nacimiento;
        $jugador->documento_identidad = $curp;
        $jugador->idInst = $idI;
        $jugador->equipos_id = $idE;
        $jugador->numero=$dorsal;

        $ruta = "jugadores";
        $foto = $request->file('foto');
        debug($foto);
        if($foto!=null){
            $request->file('foto')->move($ruta, $jugador->nombre.".".$foto->getClientOriginalExtension());
            $jugador->foto = $ruta."/".$jugador->nombre.".".$foto->getClientOriginalExtension();
        }

        if(strlen($request["password"])>6){
            $usuario->password = Hash::make($request["password"]);
        }

        $jugador->genero = $genero;
        $jugador->update();

        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Actualizacion Exitosa"]]
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


    public function activate($id){
        $jugador = jugadores::findOrFail($id);
        $jugador->activo= true;
        $jugador->save();
        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>$jugador->nombre." Activado"]]
        );
    }
    public function deactivate($id)
    {
        $jugador = jugadores::findOrFail($id);
        $jugador->activo = false;
        $jugador->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "warning", "mensaje" => $jugador->nombre . " desactivado"]]
        );
    }
}

