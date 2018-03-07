@extends('layout.admin')

@section('titulo','Ver Administrador')

@section('rol',"")

@section('content')
    <div class="offset-sm-2 col-sm-8">
        <h3>Información de Administrador</h3>
        <table class="table table-hover table-bordered">
            <tr>
                <td><h4>Nombre : {{ $administrador->nombre }}</h4></td>
            </tr>
            <tr>
                <td><h4>Correo : {{ $administrador->correo }}</h4></td>
            </tr>
            <tr>
                <td><h4>Telefono: {{ $administrador->telefono }}</h4></td>
            </tr>
            <tr>
                <td><h4>Username: {{ $usuario->username }}</h4></td>
            </tr>
        </table>
        <a class="btn btn-success" href="{{action("AdministradorController@index")}}">Volver</a>
    </div>
@endsection