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
            "equiposG"=>$equiposG,
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
        return view("admin.equipo.crear",[
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
        debug( File::extension($request->file('foto')->getFilename()) );

        $equipo = new equipos();
        $equipo->nombre = $request["nombre"];
        $equipo->nombreCoach = $request["coach"];
        $equipo->nombreCoachAsistente = $request["asistente"];
        $equipo->idDivt = $request["id_division"];
        $equipo->idIst = $request["id_institucion"];


        //$archi = $request->file('foto');
        //Storage::put($archi->getFilename(),$archi);

        $ruta = "equipos";
        $request->file('foto')->move($ruta,$equipo->nombre.".".$request->file('foto')->getClientOriginalExtension());
        $equipo->foto = $ruta."/".$equipo->nombre.".".$request->file('foto')->getClientOriginalExtension();

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
