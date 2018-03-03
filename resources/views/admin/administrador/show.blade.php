@extends('layout.admin')

@section('titulo','Ver Admin')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <h3> Nombre : {{ $administrador->nombre }} </h3>
        <h3> Correo : {{ $administrador->correo }} </h3>
        <h3> Telefono: {{ $administrador->telefono }} </h3>
        <h3> Username: {{ $usuario->username }} </h3>
    </div>

@endsection