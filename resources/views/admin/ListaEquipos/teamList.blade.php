@extends('layout.admin')

@section('titulo','Lista Equipos')

@section('rol',"Programador")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Equipos</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    @if(count($equipos)>0)
                        <thead>
                        <tr >
                            <th>Nombre</th>
                            <th>Institución</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                    @endif
                    @forelse ($equipos as $equipo)
                        <tr>
                            <td>
                                {{ $equipo->nombre }}
                            </td>
                            <td>
                                {{ $equipo->institucione->nombre }}
                            </td>
                            <td>
                                <a class="btn btn-info" data-toggle="tooltip" title="Ver Jugadores" href="{{action("EquipoController@showJugadores",["id"=>$equipo->id])}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                No hay Equipos <a class="btn btn-primary" href="{{action('EquipoController@create')}}">Agregar uno.</a>
                            </th>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

@endsection