@extends('layout.admin')

@section('titulo','CrearAdministrador')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{!empty($administrador)?action('AdministradorController@update',["id"=>$administrador  ->id]):action('AdministradorController@store')}}">
            {{csrf_field()}}

            <div class="form-group">
                <label for="nombre">Nombre del Administrador</label>
                <input type="text" name="nombre" class="form-control" placeholder="" value="{{!empty($administrador)?$administrador->nombre:''}}">
            </div>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="" value="{{!empty($administrador)?$administrador->usuario->username:''}}">
            </div>
            <div class="form-group">
                <label for="Password1">Password</label>
                <input type="password" class="form-control" id="Password1" placeholder="" name="password" value="{{!empty($administrador)?$administrador->password:''}}">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" name="correo" class="form-control" placeholder="" value="{{!empty($administrador)?$administrador->correo:''}}">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" placeholder="" value="{{!empty($administrador)?$administrador->telefono:''}}">
            </div>
            <button type="submit" class="btn btn-success pull-right">{{!empty($administrador)?'Guardar Edición':'Crear'}}</button>
        </form>
    </div>


@endsection