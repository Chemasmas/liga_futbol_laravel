@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

<?php $rutas = [] ?>

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Participantes de {{$torneo->nombre}}</h3>
            <a class="btn btn-success" href="{{action("TorneoController@index")}}"> Volver </a>
            <a class="btn btn-primary" href="{{action("TorneoController@generarRotacion",["idT"=>$torneo->id])}}" @if($torneo->generado) {{'disabled'}} @endif>
                Generar
            </a>
            <a class="btn btn-primary" href="{{action("TorneoController@jornadas",["idT"=>$torneo->id])}}" @if($torneo->generado) {{'disabled'}} @endif>
                Roles
            </a>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                </table>
            </div>
        </div>
        <div class="col-sm-4">
            <table class="table table-hover table-bordered">
                @foreach ($participantes as $participante)
                    <tr>
                        <td>
                            {{$participante->nombre}}
                        </td>
                        <td>
                            <form action="{{action('TorneoController@remove_participante',["idT"=>$torneo->id,"idE"=>$participante->id])}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">
                                    Quitar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @if(count($equipos)>0)
        <div class="col-sm-12">
            <form action="{{action('TorneoController@add_participante',['idT'=>$torneo->id])}}" class="form-inline" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="Equipos_id">Equipo</label>
                    <select class="form-control" name="Equipos_id" style="margin-left: 10px;">
                        @foreach ($equipos as $equipo)
                            <option value ="{{$equipo->id}}">{{ $equipo->nombre }}</option>
                        @endforeach
                    </select>

                </div>
                <button class="btn btn-success" type="submit" style="margin-left: 10px;">Agregar</button>
            </form>
        </div>
        @endif
    </div>
@endsection