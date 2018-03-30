@extends('layout.admin')

@if(auth()->user()["level"]<2)
    @section('titulo','Bienvenido')
@elseif(auth()->user()["level"]==2)
    @section('titulo','Bienvenido')
@elseif(auth()->user()["level"]==3)
    @section('titulo','Bienvenido')
@elseif(auth()->user()["level"]==4)
    @section('titulo','Bienvenido')
@endif


@if(auth()->user()["level"]<2)
    @section('rol','Admin')
@elseif(auth()->user()["level"]==2)
    @section('rol','Programador')
@elseif(auth()->user()["level"]==3)
    @section('rol','Arbitro')
@elseif(auth()->user()["level"]==4)
    @section('rol','Jugadores')
@endif
<?php $rutas = ["Home"=>["etiqueta"=>"Home", "active"=>"0","link"=>"#"] ] ?>

@section('content')

    <div>
        <h3>Bienvenido</h3>
    </div>

@endsection