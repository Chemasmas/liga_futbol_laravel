@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{ action('TorneoController@store') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre de Categoría</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <!--TODO Esto podria tener una tabla-->
            <div class="form-group">
                <label for="tipo_torneo">Tipo</label>
                <select class="form-control" name="tipo_torneo">
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
            <div class="form-group">
                <label>Genero</label>
                <select class="form-control" name="genero">
                    <option value="M">Varonil</option>
                    <option value="F">Femenil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success pull-right">Crear</button>
        </form>
    </div>


@endsection