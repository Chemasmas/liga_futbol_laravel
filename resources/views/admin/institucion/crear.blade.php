@extends('layout.admin')

@section('titulo','CrearEquipo')

@section('rol','Admin')

<?php $rutas = [] ?>

@section('content')

    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('EquipoController@index') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre de la Institución</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
            </div>
            <div class="form-group">
                <label for="usuario">Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="Direccion">
            </div>
            <div class="form-group">
                <label for="usuario">Mapa</label>
                <input type="text" name="direccion" class="form-control" placeholder="Mapa">
            </div>

            <button type="submit" class="btn btn-success pull-right">Guardar</button>
        </form>
    </div>

@endsection
