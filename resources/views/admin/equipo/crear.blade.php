@extends('layout.admin')

@section('titulo','CrearEquipo')

@section('rol','Admin')

@section('content')

    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('EquipoController@store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Equipo</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="foto">Escudo</label>
                <input type="file" name="foto" class="form-control filestyle" data-input="false" data-buttonText="Selecciona la imagen" data-buttonName="btn-info" data-badge="true">
            </div>
            <div class="form-group">
                <label for="id_division">División</label>
                <select class="form-control" name="id_division">
                    @foreach ($divisiones as $division)
                        <option value ="{{$division->id}}">{{ $division->nombre }}</option>
                    @endforeach
                </select>
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
                <label for="coach">Nombre Coach</label>
                <input type="text" name="coach" class="form-control">
            </div>
            <div class="form-group">
                <label for="asistente">Nombre Asistente</label>
                <input type="text" name="asistente" class="form-control">
            </div>
            <button type="submit" class="btn btn-success pull-right">Guardar</button>
        </form>
    </div>

@endsection