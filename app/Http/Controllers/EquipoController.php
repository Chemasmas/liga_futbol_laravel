<?php

namespace App\Http\Controllers;

use App\equipos;
use App\instituciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equiposG =equipos::all();

        return view('admin.equipo.index',[
            "equipos"=>$equiposG,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Equipo"=>["etiqueta"=>"Equipo", "active"=>"0","link"=>""]
            ]
        ]);

    }

    public function all(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituciones = instituciones::all();
        return view("admin.equipo.crear",[
            "instituciones" => $instituciones,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Equipo"=>["etiqueta"=>"Equipo", "active"=>"1","link"=>"/admin/equipo"],
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

        $equipo = new equipos();
        $equipo->nombre = $request["nombre"];
        $equipo->nombreCoach = $request["coach"];
        $equipo->nombreCoachAsistente = $request["asistente"];
        $equipo->genero = $request["genero"];
        $equipo->idIst = $request["id_institucion"];
        $equipo->activo = true;

        $equipo->save();

        //TODO validacion exito de la insercion


        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Insercion Exitosa"]]
        );
        //return view("admin.equipo.crear");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $equipo = equipos::findOrFail($id);

        debug($equipo->participantesEquipos()->get());

        //Todo , retrieve info form torneo
        return view('admin.equipo.info',[
            "equipo" => $equipo,
            "participantes" => $equipo->participantesEquipos()->get(),
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Equipo"=>["etiqueta"=>"Equipo", "active"=>"1","link"=>"/admin/equipo"],
                "crear"=>["etiqueta"=>"crear", "active"=>"0","link"=>""]
            ]
        ]);*/
        $equipo = equipos::find($id);
        debug($equipo);

        return view("admin.equipo.show",[
            "equipo" => $equipo,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Equipo"=>["etiqueta"=>"Equipo", "active"=>"1","link"=>"/admin/equipo"],
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
        $equipo = equipos::findOrFail($id);
        $institucione = instituciones::all();
        debug($equipo);
        return view('admin.equipo.crear',[
            "equipo"=>$equipo,
            "instituciones"=>$institucione,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Equipo"=>["etiqueta"=>"Equipo", "active"=>"1","link"=>"/admin/equipo"],
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

        $equipo = equipos::findOrFail($id);

        $equipo->nombre = $request["nombre"];
        $equipo->nombreCoach = $request["coach"];
        $equipo->nombreCoachAsistente = $request["asistente"];
        $equipo->genero = $request["genero"];
        $equipo->idIst = $request["id_institucion"];
        $equipo->activo = true;

        $equipo->update();

        //TODO validacion exito de la insercion
        //success
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
}
