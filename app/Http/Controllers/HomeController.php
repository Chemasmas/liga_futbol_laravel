<?php

namespace App\Http\Controllers;

use App\instituciones;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('publica.index');
    }
    public function about()
    {
        return view('publica.about');
    }
    public function programers()
    {
        return view('publica.programers');
    }
    public function contact()
    {
        return view('publica.contact');
    }

    public function directory()
    {
        return view('publica.directory');
    }
    public function institutions()
    {
        $instituciones = instituciones::offset(1)->limit(100)->get();
        debug($instituciones);
        return view('publica.institutions',[
            "instituciones" => $instituciones
        ]);
    }



    public function ejemplo()
    {
        return view('test');
    }

}
