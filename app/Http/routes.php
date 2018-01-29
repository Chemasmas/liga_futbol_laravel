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
Route::get("/admin/p2","AdminController@p2");
Route::post("/admin/login","AdminController@login");
Route::get("/admin/logout","AdminController@logout");


Route::get('/',"HomeController@index");
Route::get('/test',"HomeController@ejemplo");

Route::get('/admin/equipo/crear',['middleware' => 'auth', 'uses' => "EquipoController@create"]);
