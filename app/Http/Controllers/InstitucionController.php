<?php

namespace App\Http\Controllers;

use App\instituciones;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.institucion.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.institucion.crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $institucion = new instituciones();
        $institucion->nombre = $request["nombre"];
        $institucion->dir = $request["direccion"];
        $institucion->mapa = $request["mapa"];

        $ruta = "instituciones";
        $imagen = $request->file('foto');
        $nvoNombre = $institucion->nombre.".".$imagen->getClientOriginalExtension();
        $imagen->move($ruta,$nvoNombre);
        $institucion->escudo = $ruta."/".$nvoNombre;
        $institucion->save();

        return redirect()->action("InstitucionController@create")->with(["Mensaje"=>["clase"=>"succes","mensaje"=>"Inserceion Exitosa"]]
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
