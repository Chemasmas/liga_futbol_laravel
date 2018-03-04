@extends('layout.admin')

@section('titulo','Equipo')

@section('rol',"")

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
                                <a class="btn btn-info" data-toggle="tooltip" title="Ver Equipo" href="{{action("EquipoController@show",["id"=>$equipo->id])}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-info" data-toggle="tooltip" title="Editar Equipo" href="{{action("EquipoController@edit",["id"=>$equipo->id])}}">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-info" data-toggle="tooltip" title="Agregar Jugadores" href='{{ action("EquipoController@participantes",["idE"=>$equipo->id])}}'>
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                </a>
                                @if($equipo->activo)
                                    <a class="btn btn-danger" data-toggle="tooltip" title="Desactivar Equipo" href='{{ action("EquipoController@deactivate",["idE"=>$equipo->id])}}'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" data-toggle="tooltip" title="Activar Equipo" href='{{ action("EquipoController@activate",["idE"=>$equipo->id])}}'>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                @endif
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