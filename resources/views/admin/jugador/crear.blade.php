@extends('layout.admin')

@section('titulo','Jugador')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{!empty($jugador)?action('JugadorController@update',["id"=>$jugador->id]):action('JugadorController@store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Jugador</label>
                <input type="text" name="nombre" class="form-control" placeholder="" value="{{!empty($jugador)?$jugador->nombre:"" }}" >
            </div>
            <div class="form-group">
                <label>Género</label>
                <select class="form-control" name="genero">
                    <option value="M" {{!empty($jugador)&&"M"==$jugador->genero?'"selected"':''}} >Varonil</option>
                    <option value="F" {{!empty($jugador)&&"F"==$jugador->genero?'"selected"':''}}>Femenil</option>
                </select>
            </div>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="" value="{{!empty($usuario)?$usuario->username:"" }}">
            </div>
            <div class="form-group">
                <label for="Password1">Password</label>
                <input type="password" class="form-control" id="Password1" placeholder="" name="password">
            </div>
            <div class="form-group">
                <label for="correo">Fecha de Nacimiento</label>
                <input type="date" name="nacimiento" class="form-control" value="{{!empty($jugador)?$jugador->fechaNac:"" }}">
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control filestyle" data-input="false" data-buttonText="Selecciona la imagen" data-buttonName="btn-info" data-badge="true">
            </div>
            <div class="form-group">
                <label for="telefono">CURP</label>
                <input type="text" name="curp" class="form-control" placeholder="" value="{{!empty($jugador)?$jugador->documento_identidad:"" }}">
            </div>

            <!--TODO Filtrar solo debe ser exitoso si conciden-->
            <div class="form-group">
                <label for="id_institucion">Institución</label>
                <select class="form-control" name="id_institucion">
                    @foreach ($instituciones as $institucion)
                        <option value ="{{$institucion->id}}" {{!empty($jugador)&&$jugador->idInst==$institucion->id?'selected':''}}>{{ $institucion->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_equipo">Equipo</label>
                <select class="form-control" name="id_equipo">
                    @foreach ($equipos as $equipo )
                        <option value ="{{$equipo->id}}"  {{!empty($jugador)&&$jugador->equipos_id==$equipo->id?'selected':''}}>{{ $equipo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="dorsal">Número Dorsal</label>
                <input type="text" name="dorsal" class="form-control" placeholder="" value="{{!empty($jugador)?$jugador->numero:"" }}">
            </div>
            <button type="submit" class="btn btn-success pull-right">{{!empty($jugador)?'Guardar Edición':'Crear'}}</button>
        </form>
    </div>


@endsection