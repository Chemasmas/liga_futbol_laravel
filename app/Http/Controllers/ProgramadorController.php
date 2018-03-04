<?php

namespace App\Http\Controllers;

use App\instituciones;
use App\programadores;
use App\usuarios;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
        return view("admin.verProgramador.programacion",[
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Programacion", "active"=>"0","link"=>""]
            ]
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

    public function perfil($id){
        $programador = programadores::findOrFail($id);
        Auth::user()->id;
        return view("admin.verProgramador.perfilJ",[
            "programador" => $programador,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Pefil", "active"=>"0","link"=>""]
            ]
        ]);
    }
}
