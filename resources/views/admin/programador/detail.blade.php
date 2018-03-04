@extends('layout.admin')

@section('titulo','Ver Admin')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <h3>{{$programador->nombre}}</h3>
        <h3>{{$programador->correo}}</h3>
        <h3>{{$programador->telefono}}</h3>
        <h3>{{$programador->usuario->username}}</h3>
        {{$programador->institucione}}
    </div>

@endsection