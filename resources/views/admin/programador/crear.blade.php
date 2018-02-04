@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('TorneoController@store') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Programador</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" name="correo" class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_institucion">Institución</label>
                <select class="form-control" name="id_institucion">
                    @foreach ($instituciones as $institucion)
                        <option value ="{{$institucion->id}}">{{ $institucion->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success pull-right">Agregar</button>
        </form>
    </div>


@endsection