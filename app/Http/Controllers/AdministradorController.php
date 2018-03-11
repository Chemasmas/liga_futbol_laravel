<?php

namespace App\Http\Controllers;

use App\administradores;
use App\usuarios;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradores = administradores::where("isSuper",0)->get()->filter( function($x){
            return $x->usuario->active;
        });
        return view("admin.administrador.index",[
            "administradores"=> $administradores,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "crear"=>["etiqueta"=>"Administradores-Lista", "active"=>"0","link"=>""]
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
        return view("admin.administrador.crear",[
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Administrador"=>["etiqueta"=>"Administradores-Lista", "active"=>"1","link"=>"/admin/administrador"],
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
        $correo = $request["correo"];
        $telefono = $request["telefono"];

        $username = $request["usuario"];
        $password = $request["password"];


        $usuario = new usuarios();
        $usuario->active=1;
        $usuario->level=1;
        $usuario->password=Hash::make($password);
        $usuario->username=$username;

        $usuario->save(['timestamps' => false]);


        debug($usuario);

        $administrador = new administradores();
        $administrador->nombre = $nombre;
        $administrador->correo = $correo;
        $administrador->telefono = $telefono;
        $administrador->idUsr = $usuario->id;
        $administrador->isSuper=False;

        $administrador->save(['timestamps' => false]);

        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Administrador Creado"]]
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
        $administrador = administradores::find($id);
        $usuario = $administrador->usuario;
        debug($administrador);
        debug($usuario);

        return view("admin.administrador.show",[
            "rutas" => [],
            "usuario" => $usuario,
            "administrador" => $administrador,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Administrador"=>["etiqueta"=>"Administradores-Lista", "active"=>"1","link"=>"/admin/administrador"],
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
        $administrador  = administradores::findOrFail($id);
        debug($administrador);
        return view('admin.administrador.crear',[
            "administrador"=>$administrador,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Administrador"=>["etiqueta"=>"Administradores-Lista", "active"=>"1","link"=>"/admin/administrador"],
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

        $administrador = administradores::findOrFail($id);

        $administrador->nombre = $request["nombre"];
        $administrador->correo = $request["correo"];
        $administrador->telefono = $request["telefono"];
        $usuario = $administrador->usuario;
        debug($usuario);
        $usuario->username = $request["usuario"];

        if(strlen($request["password"])>6){
            $usuario->password = Hash::make($request["password"]);
        }
        $administrador->update();
        $usuario->update();

        debug($administrador);
        //TODO validacion exito de la insercion
        //success
        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Actualización Exitosa"]]
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

    public function all()
    {

        $administrador = administradores::where("isSuper",0)->get();

        return view('admin.administrador.all', [
            "administradores" => $administrador,
            "rutas" => [
                "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                "Admin" => ["etiqueta" => "Administradores-Historico", "active" => "0", "link" => ""]
            ]
        ]);
    }

    public function activate($id){
        $administrador = administradores::find($id);
        $usuario = $administrador->usuario;
        $usuario->active = true;
        $usuario->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "success", "mensaje" => $administrador->nombre . " Activado"]]
        );
    }


    public function deactivate($id){
        $administrador = administradores::find($id);
        $usuario = $administrador->usuario;
        $usuario->active = false;
        $usuario->update();
        return redirect()->back()->with(
            ["message" => ["clase" => "warning", "mensaje" => $administrador->nombre . " Desactivado"]]
        );
    }
}

