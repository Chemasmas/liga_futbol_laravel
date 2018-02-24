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

Route::get("/admin",['middleware' => 'auth', 'uses' => "AdminController@index"]);
Route::get("/admin/dashboard",['middleware' => 'auth', 'uses' => "AdminController@index"]);
Route::post("/admin/login","AdminController@login");
Route::get("/admin/logout","AdminController@logout");

Route::get( "/admin/torneo",['middleware' => 'auth', 'uses' => "TorneoController@index"]);
Route::get( "/admin/torneo/all",['middleware' => 'auth', 'uses' => "TorneoController@all"]);
Route::get( "/admin/torneo/create",['middleware' => 'auth', 'uses' => "TorneoController@create"]);
Route::post("/admin/torneo/store",['middleware' => 'auth', 'uses' => "TorneoController@store"]);
Route::get( "/admin/torneo/{id}",['middleware' => 'auth', 'uses' => "TorneoController@show"]);
Route::get( "/admin/torneo/{id}/edit",['middleware' => 'auth', 'uses' => "TorneoController@edit"]);
Route::post( "/admin/torneo/{id}/update",['middleware' => 'auth', 'uses' => "TorneoController@update"]);
Route::get( "/admin/torneo/{idT}/participantes",['middleware' => 'auth', 'uses' => "TorneoController@participantes"]);
Route::post("/admin/torneo/{idT}/add",['middleware' => 'auth', 'uses' => "TorneoController@add_participante"]);
Route::post("/admin/torneo/{idT}/removec/{idE}",['middleware' => 'auth', 'uses' => "TorneoController@remove_participante"]);
Route::get( "/admin/torneo/{idT}/activate",['middleware' => 'auth', 'uses' => "TorneoController@activate"] );
Route::get( "/admin/torneo/{idT}/deactivate",['middleware' => 'auth', 'uses' => "TorneoController@deactivate"] );

/*De la generacino de roles*/
Route::get( "/admin/torneo/{idT}/rotacion",['middleware' => 'auth', 'uses' => "TorneoController@generarRotacion"] );
Route::get( "/admin/torneo/{idT}/jornadas",['middleware' => 'auth', 'uses' => "TorneoController@jornadas"] );


Route::get('/admin/equipo',['middleware' => 'auth', 'uses' => "EquipoController@index"]);
Route::get('/admin/equipo/crear',['middleware' => 'auth', 'uses' => "EquipoController@create"]);
Route::post('/admin/equipo/store',['middleware' => 'auth', 'uses' => "EquipoController@store"]);

Route::get('/admin/instituciones',['middleware' => 'auth', 'uses' => "InstitucionController@index"]);
Route::get('/admin/instituciones/crear',['middleware' => 'auth', 'uses' => "InstitucionController@create"]);
Route::post('/admin/instituciones/store',['middleware' => 'auth', 'uses' => "InstitucionController@store"]);

Route::get('/admin/administrador',['middleware' => 'auth', 'uses' => "AdministradorController@index"]);
Route::get('/admin/administrador/crear',['middleware' => 'auth', 'uses' => "AdministradorController@create"]);
Route::post('/admin/administrador/store',['middleware' => 'auth', 'uses' => "AdministradorController@store"]);
Route::post( "/admin/administrador/{id}",['middleware' => 'auth', 'uses' => "AdministradorController@show"]);
Route::get( "/admin/administrador/{id}/edit",['middleware' => 'auth', 'uses' => "AdministradorController@edit"]);
Route::post( "/admin/administrador/{id}/update",['middleware' => 'auth', 'uses' => "AdministradorController@update"]);
Route::get('/admin/administrador/{idA}/activate',['middleware' => 'auth', 'uses' => "AdministradorController@activate"]);
Route::get('/admin/administrador/{idA}/deactivate',['middleware' => 'auth', 'uses' => "AdministradorController@deactivate"]);

Route::get('/admin/directorio',['middleware' => 'auth', 'uses' => "DirectorioController@programador"]);

Route::get('/admin/jugador',['middleware' => 'auth', 'uses' => "JugadorController@index"]);
Route::get('/admin/jugador/crear',['middleware' => 'auth', 'uses' => "JugadorController@create"]);
Route::post('/admin/jugador/store',['middleware' => 'auth', 'uses' => "JugadorController@store"]);

Route::get('/admin/arbitro',['middleware' => 'auth', 'uses' => "ArbitroController@index"]);
Route::get('/admin/arbitro/crear',['middleware' => 'auth', 'uses' => "ArbitroController@create"]);
Route::post('/admin/arbitro/store',['middleware' => 'auth', 'uses' => "ArbitroController@store"]);
Route::post( "/admin/arbitro/{id}",['middleware' => 'auth', 'uses' => "ArbitroController@show"]);
Route::get( "/admin/arbitro/{id}/edit",['middleware' => 'auth', 'uses' => "ArbitroController@edit"]);
Route::post( "/admin/arbitro/{id}/update",['middleware' => 'auth', 'uses' => "ArbitroController@update"]);
Route::get('/admin/arbitro/{idA}/activate',['middleware' => 'auth', 'uses' => "ArbitroController@activate"]);
Route::get('/admin/arbitro/{idA}/deactivate',['middleware' => 'auth', 'uses' => "ArbitroController@deactivate"]);

Route::get('/admin/programador',['middleware' => 'auth', 'uses' => "ProgramadorController@index"]);
Route::get('/admin/programador/crear',['middleware' => 'auth', 'uses' => "ProgramadorController@create"]);




Route::get('/',"HomeController@index");
Route::get('/test',"HomeController@ejemplo");




