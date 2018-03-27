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
Route::post("/admin/torneo/jornada/{idP}",['middleware' => 'auth', 'uses' => "TorneoController@asignar_jornada"]);
Route::get( "/admin/torneo/{id}",['middleware' => 'auth', 'uses' => "TorneoController@show"]);
Route::get( "/admin/torneo/{id}/edit",['middleware' => 'auth', 'uses' => "TorneoController@edit"]);
Route::post("/admin/torneo/{id}/update",['middleware' => 'auth', 'uses' => "TorneoController@update"]);
Route::get( "/admin/torneo/{idT}/participantes",['middleware' => 'auth', 'uses' => "TorneoController@participantes"]);
Route::post("/admin/torneo/{idT}/add",['middleware' => 'auth', 'uses' => "TorneoController@add_participante"]);
Route::post("/admin/torneo/{idT}/removec/{idE}",['middleware' => 'auth', 'uses' => "TorneoController@remove_participante"]);
Route::get( "/admin/torneo/{idT}/activate",['middleware' => 'auth', 'uses' => "TorneoController@activate"] );
Route::get( "/admin/torneo/{idT}/deactivate",['middleware' => 'auth', 'uses' => "TorneoController@deactivate"] );

/*De la generacino de roles*/
Route::get( "/admin/torneo/{idT}/rotacion",['middleware' => 'auth', 'uses' => "TorneoController@generarRotacion"] );
Route::get( "/admin/torneo/{idT}/jornadas",['middleware' => 'auth', 'uses' => "TorneoController@jornadas"] );
Route::get( "/admin/torneo/{idT}/jornadasXLS",['middleware' => 'auth', 'uses' => "TorneoController@jornadasXLS"] );
Route::get( "/admin/partido/marcador/{idP}",['middleware' => 'auth', 'uses' => "TorneoController@resultadoForm"] );
Route::post( "/admin/partido/marcador/{idP}/guardar",['middleware' => 'auth', 'uses' => "TorneoController@cambiarResultados"] );
Route::get( "/admin/partido/marcador/{idP}/editar",['middleware' => 'auth', 'uses' => "TorneoController@editCambiarResultados"] );
Route::post("/admin/partido/marcador/{idP}/guardar",['middleware' => 'auth', 'uses' => "TorneoController@updateCambiarResultados"]);


/* Control de la programacion*/
Route::get("/admin/torneo/{idT}/iniciar",['middleware' => 'auth', 'uses' => "TorneoController@mostrarIniciar"] );
Route::post("/admin/torneo/{idT}/iniciar",['middleware' => 'auth', 'uses' => "TorneoController@start"] );
Route::get("/admin/torneo/{idT}/stop",['middleware' => 'auth', 'uses' => "TorneoController@stop"] );


Route::get('/admin/equipo',['middleware' => 'auth', 'uses' => "EquipoController@index"]);
Route::get('/admin/equipo/crear',['middleware' => 'auth', 'uses' => "EquipoController@create"]);
Route::get('/admin/equipo/historico',['middleware' => 'auth', 'uses' => "EquipoController@all"]);
Route::post('/admin/equipo/store',['middleware' => 'auth', 'uses' => "EquipoController@store"]);
Route::get('/admin/equipo/{id}',['middleware' => 'auth', 'uses' => "EquipoController@show"]);
Route::get('/admin/equipo/{id}/edit',['middleware' => 'auth', 'uses' => "EquipoController@edit"]);
Route::post("/admin/equipo/{id}/update",['middleware' => 'auth', 'uses' => "EquipoController@update"]);
Route::get("/admin/equipo/{idE}/participantes",['middleware' => 'auth', 'uses' => "EquipoController@participantes"]);
Route::get("/admin/equipo/{idE}/add/{idJ}",['middleware' => 'auth', 'uses' => "EquipoController@add_participante"]);
Route::get("/admin/equipo/remove/{idJ}",['middleware' => 'auth', 'uses' => "EquipoController@remove_participante"]);
Route::get('/admin/equipo/{idE}/activate',['middleware' => 'auth', 'uses' => "EquipoController@activate"]);
Route::get('/admin/equipo/{idE}/deactivate',['middleware' => 'auth', 'uses' => "EquipoController@deactivate"]);


Route::get('/admin/instituciones',['middleware' => 'auth', 'uses' => "InstitucionController@index"]);
Route::get('/admin/instituciones/crear',['middleware' => 'auth', 'uses' => "InstitucionController@create"]);
Route::get('/admin/instituciones/historico',['middleware' => 'auth', 'uses' => "InstitucionController@all"]);
Route::post('/admin/instituciones/store',['middleware' => 'auth', 'uses' => "InstitucionController@store"]);
Route::get('/admin/instituciones/{id}',['middleware' => 'auth', 'uses' => "InstitucionController@show"]);
Route::get('/admin/instituciones/{id}/edit',['middleware' => 'auth', 'uses' => "InstitucionController@edit"]);
Route::post('/admin/instituciones/{id}/update',['middleware' => 'auth', 'uses' => "InstitucionController@update"]);
Route::get('/admin/instituciones/{idI}/activate',['middleware' => 'auth', 'uses' => "InstitucionController@activate"]);
Route::get('/admin/instituciones/{idI}/deactivate',['middleware' => 'auth', 'uses' => "InstitucionController@deactivate"]);

Route::get('/admin/administrador',['middleware' => 'auth', 'uses' => "AdministradorController@index"]);
Route::get('/admin/administrador/crear',['middleware' => 'auth', 'uses' => "AdministradorController@create"]);
Route::get('/admin/administrador/historico',['middleware' => 'auth', 'uses' => "AdministradorController@all"]);
Route::post('/admin/administrador/store',['middleware' => 'auth', 'uses' => "AdministradorController@store"]);
Route::get( "/admin/administrador/{id}",['middleware' => 'auth', 'uses' => "AdministradorController@show"]);
Route::get( "/admin/administrador/{id}/edit",['middleware' => 'auth', 'uses' => "AdministradorController@edit"]);
Route::post( "/admin/administrador/{id}/update",['middleware' => 'auth', 'uses' => "AdministradorController@update"]);
Route::get('/admin/administrador/{idA}/activate',['middleware' => 'auth', 'uses' => "AdministradorController@activate"]);
Route::get('/admin/administrador/{idA}/deactivate',['middleware' => 'auth', 'uses' => "AdministradorController@deactivate"]);


Route::get('/admin/jugador/back',['middleware' => 'auth', 'uses' => "JugadorController@back"]);
Route::get('/admin/jugador/crear',['middleware' => 'auth', 'uses' => "JugadorController@create"]);
Route::post('/admin/jugador/store',['middleware' => 'auth', 'uses' => "JugadorController@store"]);
Route::get('/admin/jugador/historico/{pagina?}',['middleware' => 'auth', 'uses' => "JugadorController@all"]);
Route::get('/admin/jugadores/{offset?}',['middleware' => 'auth', 'uses' => "JugadorController@index"]);
Route::get("/admin/jugador/{id}",['middleware' => 'auth', 'uses' => "JugadorController@show"]);
Route::get("/admin/jugador/{id}/edit",['middleware' => 'auth', 'uses' => "JugadorController@edit"]);
Route::post("/admin/jugador/{id}/update",['middleware' => 'auth', 'uses' => "JugadorController@update"]);
Route::get('/admin/jugador/{idJ}/activate',['middleware' => 'auth', 'uses' => "JugadorController@activate"]);
Route::get('/admin/jugador/{idJ}/deactivate',['middleware' => 'auth', 'uses' => "JugadorController@deactivate"]);


Route::get('/admin/arbitro',['middleware' => 'auth', 'uses' => "ArbitroController@index"]);
Route::get('/admin/arbitro/crear',['middleware' => 'auth', 'uses' => "ArbitroController@create"]);
Route::get('/admin/arbitro/historico',['middleware' => 'auth', 'uses' => "ArbitroController@all"]);
Route::post('/admin/arbitro/store',['middleware' => 'auth', 'uses' => "ArbitroController@store"]);
Route::get('/admin/arbitro/capturar/{idP}',['middleware' => 'auth', 'uses' => "ArbitroController@capturar"]);
Route::post('/admin/arbitro/bitacora/gol',['middleware' => 'auth', 'uses' => "ArbitroController@gol"]);
Route::post('/admin/arbitro/bitacora/amarilla',['middleware' => 'auth', 'uses' => "ArbitroController@amarilla"]);
Route::post('/admin/arbitro/bitacora/roja',['middleware' => 'auth', 'uses' => "ArbitroController@roja"]);
Route::post('/admin/arbitro/bitacora/finalizar',['middleware' => 'auth', 'uses' => "ArbitroController@finalizar"]);
Route::get('/admin/arbitro/partidos',['middleware' => 'auth', 'uses' => "ArbitroController@lista_partidos"]);
Route::get('/admin/arbitro/{idE}/lista/{idP}',['middleware' => 'auth', 'uses' => "ArbitroController@pasar_lista"]);
Route::post('/admin/arbitro/{idP}/asistio/{idJ}',['middleware' => 'auth', 'uses' => "ArbitroController@asistio"]);
Route::get("/admin/arbitro/{id}",['middleware' => 'auth', 'uses' => "ArbitroController@show"]);
Route::get("/admin/arbitro/{id}/edit",['middleware' => 'auth', 'uses' => "ArbitroController@edit"]);
Route::post("/admin/arbitro/{id}/update",['middleware' => 'auth', 'uses' => "ArbitroController@update"]);
Route::get('/admin/arbitro/{idA}/activate',['middleware' => 'auth', 'uses' => "ArbitroController@activate"]);
Route::get('/admin/arbitro/{idA}/deactivate',['middleware' => 'auth', 'uses' => "ArbitroController@deactivate"]);


Route::get('/admin/programador',['middleware' => 'auth', 'uses' => "ProgramadorController@index"]);
Route::get('/admin/programador/crear',['middleware' => 'auth', 'uses' => "ProgramadorController@create"]);
Route::get('/admin/programador/historico',['middleware' => 'auth', 'uses' => "ProgramadorController@all"]);
Route::post('/admin/programador/store',['middleware' => 'auth', 'uses' => "ProgramadorController@store"]);
Route::get("/admin/programador/{id}",['middleware' => 'auth', 'uses' => "ProgramadorController@show"]);
Route::get("/admin/programador/{id}/edit",['middleware' => 'auth', 'uses' => "ProgramadorController@edit"]);
Route::post("/admin/programador/{id}/update",['middleware' => 'auth', 'uses' => "ProgramadorController@update"]);
Route::get('/admin/programador/{idP}/activate',['middleware' => 'auth', 'uses' => "ProgramadorController@activate"]);
Route::get('/admin/programador/{idP}/deactivate',['middleware' => 'auth', 'uses' => "ProgramadorController@deactivate"]);
Route::get('/admin/programador/{idT}/rol',['middleware' => 'auth', 'uses' => "ProgramadorController@rol"]);

Route::post('/admin/partido/{idP}/proponer',['middleware' => 'auth', 'uses' => "ProgramadorController@propuesta"]);
Route::get('/admin/partido/{idP}/liberar',['middleware' => 'auth', 'uses' => "ProgramadorController@habilitar_edicion_partido"]);


Route::get('/admin/directorioP',['middleware' => 'auth', 'uses' => "DirectorioController@programador"]);
Route::get('/admin/directorioA',['middleware' => 'auth', 'uses' => "DirectorioController@arbitro"]);

Route::get('/admin/verJugador/perfil',['middleware' => 'auth', 'uses' => "ProgramadorController@perfil"]);

Route::get('/admin/verProgramador/programacion',['middleware' => 'auth', 'uses' => "ProgramadorController@programacion"]);

Route::get('/admin/verArbitro/partidosP',['middleware' => 'auth', 'uses' => "ProgramadorController@partidos"]);
Route::get('/admin/perfil',['middleware' => 'auth', 'uses' => "ProgramadorController@perfil"]);

//Web Muplica
Route::get('/',"HomeController@index");
Route::get('/about',"HomeController@about");
Route::get('/directory',"HomeController@directory");
Route::get('/institutions',"HomeController@institutions");
Route::get('/contact',"HomeController@contact");
Route::get('/programers',"HomeController@programers");
Route::get('/gallery',"HomeController@gallery");
Route::get('/next_match_female',"HomeController@nextmatchsfemale");
Route::get('/next_match_male',"HomeController@nextmatchsmale");
Route::get('/regulation',"HomeController@regulation");
Route::get('/statistics_female/{idT?}',"HomeController@statisticsfemale");
Route::get('/statistics_male/{idT?}',"HomeController@statisticsmale");
Route::get('/match_result_male',"HomeController@matchresultmale");
Route::get('/match_result_female',"HomeController@matchresultfemale");


Route::get('/test',"HomeController@ejemplo");






