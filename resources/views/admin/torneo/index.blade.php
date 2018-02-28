
@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Torneos</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
            @if(count($torneos)>0)
                <thead>
                    <tr >
                        <th>Nombre</th>
                        <th>Plantila</th>
                        <th>Género</th>
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
                        <a class="btn btn-info" data-toggle="tooltip" title="Ver Torneo" href="{{action("TorneoController@show",["id"=>$torneo->id])}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-info" data-toggle="tooltip" title="Editar Torneo" href="{{action("TorneoController@edit",["id"=>$torneo->id])}}">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-info" data-toggle="tooltip" title="Agregar Equipos" href='{{ action("TorneoController@participantes",["idT"=>$torneo->id])}}'>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </a>
                        @if($torneo->activo)
                            <a class="btn btn-danger" data-toggle="tooltip" title="Desactivar Torneo" href='{{ action("TorneoController@deactivate",["idT"=>$torneo->id])}}'>
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        @else
                            <a class="btn btn-success" data-toggle="tooltip" title="Activar Torneo" href='{{ action("TorneoController@activate",["idT"=>$torneo->id])}}'>
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        @endif
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