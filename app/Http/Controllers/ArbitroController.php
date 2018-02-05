<?php

namespace App\Http\Controllers;

use App\arbitros;
use App\usuarios;
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
        $arbitrosG =arbitros::all();
       // $divisiones = division::all();

        return view('admin.arbitro.index',[
            "arbitrosG"=>$arbitrosG,
            //"divisiones"=>$divisiones
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.arbitro.crear",[
            "rutas"=>[],
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
        $request->file('foto')->move($ruta, $arbitro->nombre.".".$request->file('foto')->getClientOriginalExtension());
        $arbitro->foto = $ruta."/".$arbitro->nombre.".".$request->file('foto')->getClientOriginalExtension();

        $arbitro->save(['timestamps' => false]);


        return redirect()->action("ArbitroController@create")->with(
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
