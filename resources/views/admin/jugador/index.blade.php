@extends('layout.admin')

@section('titulo','Jugadores')

@section('rol',"Admin")

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Jugadores</h3>
            <div class="col-sm-12">
                @if(count($jugadores)>0)
                    <nav aria-label="Page navigation">
                    <ul class="pagination">
                    @for ($i = 1; $i <= $paginas; $i++)
                        <li class="page-item"><a class="page-link" href="{{action('JugadorController@index',["offset"=>$i])}}">{{$i}}</a></li>
                    @endfor
                    </ul>
                    </nav>
                @endif
                <table class="table table-hover table-bordered">
                    @if(count($jugadores)>0)
                        <thead>
                        <tr >
                            <th>Nombre/Número</th>
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
                                <a class="btn btn-info" data-toggle="tooltip" title="Ver Jugador" href="{{action("JugadorController@show",["id"=>$jugador->id])}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-info" data-toggle="tooltip" title="Editar Jugador" href="{{action("JugadorController@edit",["id"=>$jugador->id])}}">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
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

