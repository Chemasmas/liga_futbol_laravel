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
        $instituciones = instituciones::whereNotIn("id", [1])->where("activo",1)->get();
        return view("admin.institucion.index",[
            "instituciones" => $instituciones,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Institucion"=>["etiqueta"=>"Instituciones-Lista", "active"=>"0","link"=>""]
            ]
        ]);
    }

    public function all()
    {
        $instituciones = instituciones::whereNotIn("id", [1])->get();

        return view('admin.institucion.all', [
            "instituciones" => $instituciones,
            "rutas" => [
                "Home" => ["etiqueta" => "Home", "active" => "1", "link" => "/admin/dashboard"],
                "Institucion" => ["etiqueta" => "Instituciones-Historico", "active" => "0", "link" => ""]
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
        return view("admin.institucion.crear",[
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Instituciones"=>["etiqueta"=>"Instituciones-Lista", "active"=>"1","link"=>"/admin/instituciones"],
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
        $institucion = new instituciones();
        $institucion->nombre = $request["nombre"];
        $institucion->dir = $request["direccion"];
        $institucion->mapa = $request["mapa"];

        $ruta = "instituciones";
        $imagen = $request->file('foto');
        $nvoNombre = $institucion->nombre.".".$imagen->getClientOriginalExtension();
        $imagen->move($ruta,$nvoNombre);
        $institucion->escudo = $ruta."/".$nvoNombre;
        $institucion->activo = true;
        $institucion->save();

        return redirect()->back()->with(
            ["message"=>["clase"=>"success","mensaje"=>"Institución Creada"]]
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
        $institucion = instituciones::find($id);
        debug($id);
        debug($institucion);
        return view("admin.institucion.detail",[
            "institucion"=>$institucion,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Instituciones"=>["etiqueta"=>"Instituciones-Lista", "active"=>"1","link"=>"/admin/instituciones"],
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
        $institucion = instituciones::find($id);
        debug($id);
        debug($institucion);
        return view("admin.institucion.crear",[
            "institucion"=>$institucion,
            "rutas" => [
                "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
                "Instituciones"=>["etiqueta"=>"Instituciones-Lista", "active"=>"1","link"=>"/admin/instituciones"],
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
        $institucion = instituciones::find($id);
        if(isset($request["nombre"]) && $request["nombre"]!="")
            $institucion->nombre = $request["nombre"];
        if(isset($request["direccion"]) && $request["direccion"]!="")
            $institucion->dir = $request["direccion"];
        if(isset($request["mapa"]) && $request["mapa"]!="")
            $institucion->mapa = $request["mapa"];

        if($request->file("foto")!= null )
        {
            $ruta = "instituciones";
            $imagen = $request->file('foto');
            $nvoNombre = $institucion->nombre.".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nvoNombre);
            $institucion->escudo = $ruta."/".$nvoNombre;
        }
        $institucion->save();

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

    public function activate($id)
    {
        $institucion = instituciones::find($id);
        $institucion->activo = true;
        $institucion->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "success", "mensaje" => $institucion->nombre . " Activado"]]
        );
    }

    public function deactivate($id)
    {
        $institucion = instituciones::find($id);
        $institucion->activo = false;
        $institucion->save();
        return redirect()->back()->with(
            ["message" => ["clase" => "warning", "mensaje" => $institucion->nombre . " desactivado"]]
        );
    }
}
