@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('JugadorController@store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Jugador</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
            </div>
            <div class="form-group">
                <label>Genero</label>
                <select class="form-control" name="genero">
                    <option value="M" {{!empty($torneo)&&"M"==$torneo->genero?'"selected"':''}} >Varonil</option>
                    <option value="F" {{!empty($torneo)&&"F"==$torneo->genero?'"selected"':''}}>Femenil</option>
                </select>
            </div>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="Password1">Password</label>
                <input type="password" class="form-control" id="Password1" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <label for="correo">Fecha de Nacimiento</label>
                <input type="date" name="nacimiento" class="form-control">
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control filestyle" data-input="false" data-buttonText="Selecciona la imagen" data-buttonName="btn-info" data-badge="true">
            </div>
            <div class="form-group">
                <label for="telefono">CURP</label>
                <input type="text" name="curp" class="form-control" placeholder="Identificador">
            </div>

            <!--TODO Filtrar solo debe ser exitoso si conciden-->
            <div class="form-group">
                <label for="id_institucion">Institución</label>
                <select class="form-control" name="id_institucion">
                    @foreach ($instituciones as $institucion)
                        <option value ="{{$institucion->id}}">{{ $institucion->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_equipo">Equipo</label>
                <select class="form-control" name="id_equipo">
                    @foreach ($equipos as $equipo )
                        <option value ="{{$equipo->id}}">{{ $equipo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="dorsal">Número Dorsal</label>
                <input type="text" name="dorsal" class="form-control" placeholder="#">
            </div>
            <button type="submit" class="btn btn-success pull-right">Agregar</button>
        </form>
    </div>


@endsection