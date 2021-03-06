@extends('layout.admin')

@section('titulo',!empty($arbitro)?'Editar Arbitro':'Agregar Arbitro')

@section('rol',"Admin")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{!empty($arbitro)?action('ArbitroController@update',["id"=>$arbitro  ->id]):action('ArbitroController@store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Árbitro</label>
                <input required type="text" name="nombre" class="form-control" placeholder="" value="{{!empty($arbitro)?$arbitro->nombre:''}}">
            </div>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input required type="text" name="usuario" class="form-control" placeholder="" value="{{!empty($arbitro)?$arbitro->usuario->username:''}}">
            </div>
            <div class="form-group">
                <label for="Password1">Password</label>
                <input required type="password" class="form-control" id="Password1" placeholder="" name="password" value="{{!empty($arbitro)?$arbitro->password:''}}">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input required type="file" name="foto" class="form-control filestyle" data-input="false" data-buttonText="Selecciona la imagen" data-buttonName="btn-info" data-badge="true">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input required type="text" name="telefono" class="form-control" placeholder="" value="{{!empty($arbitro)?$arbitro->telefono:''}}">
            </div>
            <button type="submit" class="btn btn-success pull-right">{{!empty($arbitro)?'Guardar Edición':'Agregar'}}</button>
        </form>
    </div>
@endsection