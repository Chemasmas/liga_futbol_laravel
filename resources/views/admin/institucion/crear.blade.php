@extends('layout.admin')

@section('titulo','CrearEquipo')

@section('rol','Admin')

<?php $rutas = [] ?>

@section('content')

    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('InstitucionController@store') }}" enctype="multipart/form-data">
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
                <label for="foto">Escudo</label>
                <input type="file" name="foto" class="form-control filestyle" data-input="false" data-buttonText="Selecciona la imagen" data-buttonName="btn-info" data-badge="true">
            </div>
            <div class="form-group">
                <label for="usuario">Mapa</label>
                <input type="text" name="mapa" class="form-control" placeholder="Mapa">
            </div>
            <button type="submit" class="btn btn-success pull-right">Guardar</button>
        </form>
    </div>

@endsection