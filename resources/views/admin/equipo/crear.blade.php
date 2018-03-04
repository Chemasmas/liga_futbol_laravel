@extends('layout.admin')

@section('titulo','CrearEquipo')

@section('rol','Admin')

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{!empty($equipo)?action('EquipoController@update',["id"=>$equipo->id]):action('EquipoController@store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Equipo</label>
                <input type="text" name="nombre" class="form-control" placeholder="" value="{{!empty($equipo)?$equipo->nombre:''}}">
            </div>
            <div class="form-group">
                <label for="id_institucion">Institución</label>
                <select class="form-control" name="id_institucion">
                    @foreach ($instituciones as $institucion)
                        <option value ="{{$institucion->id}}" {{!empty($equipo)&&$equipo->idIst==$institucion->id?'selected':''}} >{{ $institucion->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Género</label>
                <select class="form-control" name="genero">
                    <option value="M" {{!empty($equipo)&&"M"==$equipo->genero?'"selected"':''}} >Varonil</option>
                    <option value="F" {{!empty($equipo)&&"F"==$equipo->genero?'"selected"':''}}>Femenil</option>
                </select>
            </div>
            <div class="form-group">
                <label for="coach">Nombre del Coach</label>
                <input type="text" name="coach" class="form-control" placeholder="" value="{{!empty($equipo)?$equipo->nombreCoach:''}}">
            </div>
            <div class="form-group">
                <label for="asistente">Nombre del Asistente</label>
                <input type="text" name="asistente" class="form-control" placeholder="" value="{{!empty($equipo)?$equipo->nombreCoachAsistente:''}}">
            </div>
            <button type="submit" class="btn btn-success pull-right"> {{!empty($equipo)?'Guardar Edición':'Crear'}}</button>
        </form>
    </div>

@endsection