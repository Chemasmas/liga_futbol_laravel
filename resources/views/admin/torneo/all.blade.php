
@extends('layout.admin')

@section('titulo','Torneos Historico')

@section('rol',"Admin")

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
                        <th>Plantilla</th>
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
                        @if($torneo->tipo_torneo==1)7 2V @else {{$torneo->tipo_torneo}} @endif
                    </td>
                    <td>
                        @if($torneo->genero=='M')
                            Varonil
                        @else
                            Femenil
                        @endif
                    </td>
                    <td>
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