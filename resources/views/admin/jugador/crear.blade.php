@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('TorneoController@store') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Jugador</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="correo">Fecha de Nacimiento</label>
                <input type="text" name="nacimiento" class="form-control">
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control filestyle" data-input="false" data-buttonText="Selecciona la imagen" data-buttonName="btn-info" data-badge="true">
            </div>

            <div class="form-group">
                <label for="telefono">CURP</label>
                <input type="text" name="curp" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_institucion">Institución</label>
                <select class="form-control" name="id_institucion">
                    @foreach ($instituciones as $institucion)
                        <option value ="{{$institucion->id}}">{{ $institucion->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="telefono">Número Dorsal</label>
                <input type="text" name="curp" class="form-control">
            </div>
            <button type="submit" class="btn btn-success pull-right">Agregar</button>
        </form>
    </div>


@endsection