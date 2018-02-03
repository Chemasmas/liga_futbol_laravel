@extends('layout.admin')

@section('titulo','CrearEquipo')

@section('rol','Admin')

@section('content')

    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('TorneoController@create') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="form-group">
                <label for="coach">Nombre Coach</label>
                <input type="text" name="coach" class="form-control">
            </div>
            <div class="form-group">
                <label for="asistente">Nombre Asistente</label>
                <input type="text" name="asistente" class="form-control">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select class="form-control">
                    <option value="5">Plantilla 5</option>
                    <option value="6">Plantilla 6</option>
                    <option value="7">Plantilla 7</option>
                    <option value="1">Plantilla 7 2V</option>
                    <option value="8">Plantilla 8</option>
                    <option value="9">Plantilla 9</option>
                    <option value="10">Plantilla 10</option>
                    <option value="11">Plantilla 11</option>
                    <option value="12">Plantilla 12</option>
                    <option value="13">Plantilla 13</option>
                    <option value="14">Plantilla 14</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection