@extends('layout.admin')

@section('titulo','CrearEquipo')

@section('rol','Admin')

<?php $rutas = [] ?>

@section('content')
    <h3>Crear Equipos</h3>
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('EquipoController@store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Equipo</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" >
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
                <input type="text" name="coach" class="form-control" placeholder="Nombre Completo">
            </div>
            <div class="form-group">
                <label for="asistente">Nombre Asistente</label>
                <input type="text" name="asistente" class="form-control" placeholder="Nombre Completo">
            </div>
            <button type="submit" class="btn btn-success pull-right">Guardar</button>
        </form>
    </div>

@endsection