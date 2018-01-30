<?php

namespace App\Http\Controllers;

use App\division;
use App\torneo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torneosG = torneo::all()->filter( function($t) { return $t->activo; } )
                    ->groupBy('id_division');


        $divisiones = division::all();

        debug($divisiones);

        return view('admin.torneo.index',[
            "torneosG"=>$torneosG,
            "divisiones"=>$divisiones
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisiones = division::all();

        return view('admin.torneo.crear',[
            "divisiones"=>$divisiones
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
        debug($request["nombre"]);



        $torneo = new torneo();
        $torneo->nombre = $request["nombre"];
        $torneo->id_division = $request["id_division"];
        $torneo->tipo_torneo = $request["tipo_torneo"];
        $torneo->activo = true;

        $torneo->save(['timestamps' => false]);

        //TODO validacion exito de la insercion

        return redirect()->action("TorneoController@create")->with(
            ["Mensaje"=>["clase"=>"succes","mensaje"=>"Insercion Exitosa"]]
        );

        //return view('admin.torneo.index');
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
