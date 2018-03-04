@extends('layout.admin')

@section('titulo','Programadores')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{!empty($programador)?action('ProgramadorController@update',["id"=>$programador->id]):action('ProgramadorController@store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Programador</label>
                <input type="text" name="nombre" class="form-control" value="{{!empty($programador)?$programador->nombre:''}}">
            </div>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="" value="{{!empty($programador)?$programador->usuario->username:''}}">
            </div>
            <div class="form-group">
                <label for="Password1">Password</label>
                <input type="password" class="form-control" id="Password1" placeholder="" name="password">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" name="correo" class="form-control" value="{{!empty($programador)?$programador->correo:''}}">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" value="{{!empty($programador)?$programador->telefono:''}}">
            </div>
            <div class="form-group">
                <label for="id_institucion">Institución</label>
                <select class="form-control" name="id_institucion">
                    @foreach ($instituciones as $institucion)
                        <option value ="{{$institucion->id}}" {{!empty($programador)&&$programador->idInst==$institucion->id?'selected':''}}>{{ $institucion->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success pull-right">{{!empty($programador)?'Guardar Edición':'Crear'}}</button>
        </form>
    </div>


@endsection