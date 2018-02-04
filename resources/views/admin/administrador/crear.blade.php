@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('AdminController@store') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Administrador</label>
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
            <button type="submit" class="btn btn-success pull-right">Agregar</button>
        </form>
    </div>


@endsection