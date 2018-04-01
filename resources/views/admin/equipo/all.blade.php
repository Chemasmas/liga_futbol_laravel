@extends('layout.admin')

@section('titulo','Equipo Historico')

@section('rol',"Admin")

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