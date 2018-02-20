@extends('layout.admin')

@section('titulo','Equipo')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Jugadores</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dorsal</th>
                        <th>Escuela</th>
                        <th>Equipo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    @foreach ($jugadores as $jugador)
                        <tr>
                            <td>
                               Nombre: {{$jugador->nombre}}
                            </td>
                            <td>
                                Dorsal: {{$jugador->numero}}
                            </td>
                            <td>
                                Institucion: {{$jugador->institucione()->nombre}}
                            </td>
                            <td>
                                Equipo: {{$jugador->equipo->nombre}}
                            </td>
                            <td>
                                <a class="btn btn-primary" role="button">Ver</a>
                                <a class="btn btn-success" role="button">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection