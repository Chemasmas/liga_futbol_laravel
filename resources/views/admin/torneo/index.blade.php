
@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Torneos</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
            @if($torneos)
                <thead>
                    <tr >
                        <th>Nombre</th>
                        <th>Plantila</th>
                        <th>Genero</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            @endif
            @forelse ($torneos as $torneo)
                <tr>
                    <td>
                        {{ $torneo->nombre }}
                    </td>
                    <td>
                        {{ $torneo->tipo_torneo }}
                    </td>
                    <td>
                        {{ $torneo->genero }}
                    </td>
                    <td>
                        <a class="btn"></a>
                        <a class="btn"><i class="fa fa-edit"></i></a>
                        <a class="btn">Agregar<br>Jugador</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <th>
                        No hay torneos <a class="btn btn-primary" href="{{action('TorneoController@create')}}">Agregar uno.</a>
                    </th>
                </tr>
            @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection