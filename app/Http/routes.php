<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/test',function () {
//    return view('test');
//});

Route::get("/auth/login",function (){return redirect("/");});

Route::get("/admin/dashboard",['middleware' => 'auth', 'uses' => "AdminController@index"]);
Route::post("/admin/login","AdminController@login");
Route::get("/admin/logout","AdminController@logout");

Route::get("/admin/torneo",['middleware' => 'auth', 'uses' => "TorneoController@index"]);
Route::get("/admin/torneo/create",['middleware' => 'auth', 'uses' => "TorneoController@create"]);
Route::post("/admin/torneo/store",['middleware' => 'auth', 'uses' => "TorneoController@store"]);
Route::get("/admin/torneo/{idT}/participantes",['middleware' => 'auth', 'uses' => "TorneoController@participantes"]);
Route::post("/admin/torneo/{idT}/add",['middleware' => 'auth', 'uses' => "TorneoController@add_participante"]);
Route::post("/admin/torneo/{idT}/removec/{idE}",['middleware' => 'auth', 'uses' => "TorneoController@remove_participante"]);


Route::get('/admin/equipo',['middleware' => 'auth', 'uses' => "EquipoController@index"]);
Route::get('/admin/equipo/crear',['middleware' => 'auth', 'uses' => "EquipoController@create"]);
Route::post('/admin/equipo/store',['middleware' => 'auth', 'uses' => "EquipoController@store"]);





Route::get('/',"HomeController@index");
Route::get('/test',"HomeController@ejemplo");


