@extends('layout.admin')

@section('titulo','CrearArbitro')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('ArbitroController@store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Árbitro</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
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
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control filestyle" data-input="false" data-buttonText="Selecciona la imagen" data-buttonName="btn-info" data-badge="true">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Telefono">
            </div>
            <button type="submit" class="btn btn-success pull-right">Agregar</button>
        </form>
    </div>


@endsection