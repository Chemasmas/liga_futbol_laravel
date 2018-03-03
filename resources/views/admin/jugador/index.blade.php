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
                        <th>Nombre(numero)</th>
                        <th>Equipo/Escuela</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    @foreach ($jugadores as $jugador)
                        <tr>
                            <td>
                                {{$jugador->nombre}} <span style="font-weight: bold;">{{$jugador->numero}}</span>
                            </td>
                            <td>
                                <span style="font-weight: bold;">[{{$jugador->equipo()->first()->nombre}}]</span>{{$jugador->institucione()->first()->nombre }}
                            </td>
                            <td>
                                <a class="btn btn-primary" role="button">Ver</a>
                                <a class="btn btn-success" role="button" href="{{action("JugadorController@edit",["id"=>$jugador->id])}}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

