<?php

namespace App\Http\Controllers;

use App\instituciones;
use App\programadores;
use App\usuarios;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
            "rutas"=>[],
            "programadores" => $programadores,
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
            "rutas" => [],
            "programador" => $programador,
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
