<?php

namespace App\Http\Controllers;

use App\division;
use App\equipos;
use App\instituciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view("admin.equipo.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisiones = division::all();
        $instituciones = instituciones::all();
        return view("admin.equipo.crear",[
            "divisiones"=>$divisiones,
            "instituciones" => $instituciones
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
        debug($request->file('foto'));

        $equipo = new equipos();
        $equipo->nombre = $request["nombre"];
        $equipo->nombreCoach = $request["coach"];
        $equipo->nombreCoachAsistente = $request["asistente"];
        $equipo->idDivt = $request["id_division"];

        $archi = $request->file('foto');
        Storage::put($archi->getFilename(),$archi);

        $equipo->foto = $archi->getFilename();

        $equipo->save(['timestamps' => false]);


        //TODO validacion exito de la insercion


        return redirect()->action("EquipoController@create")->with(
            ["Mensaje"=>["clase"=>"succes","mensaje"=>"Insercion Exitosa"]]
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
