@extends('layout.admin')

@section('titulo','Equipo')

@section('rol',"")

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Jugadores</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    @if(count($jugadores)>0)
                        <thead>
                        <tr >
                            <th>Nombre(numero)</th>
                            <th>Equipo/Escuela</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                    @endif
                    @forelse ($jugadores as $jugador)
                        <tr>
                            <td>
                                {{$jugador->nombre}} <span style="font-weight: bold;">{{$jugador->numero}}</span>
                            </td>
                            <td>
                                <span style="font-weight: bold;">[{{$jugador->equipo()->first()->nombre}}]</span>{{$jugador->institucione()->first()->nombre }}
                            </td>
                            <td>
                                @if($jugador->usuario->active)
                                    <a class="btn btn-danger" data-toggle="tooltip" title="Desactivar Jugador" href='{{ action("JugadorController@deactivate",["idJ"=>$jugador->id])}}'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" data-toggle="tooltip" title="Activar Jugador" href='{{ action("JugadorController@activate",["idJ"=>$jugador->id])}}'>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                No hay Usuario Jugador <a class="btn btn-primary" href="{{action('JugadorController@create')}}">Agregar uno.</a>
                            </th>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection

