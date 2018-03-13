@extends('layout.admin')

@section('titulo','Programacion de Torneos ')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de torneos por programar</h3>
            <table class="table table-bordered">
                @foreach($torneos as $torneo)
                    <tr>
                        <td>{{$torneo->nombre}}</td>
                        <td>
                            @if($torneo->generado)
                            <a href="{{action("ProgramadorController@rol",["id"=>$torneo->id])}}" class="btn btn-info" data-toggle="tooltip" title="Ver Programación">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            @else
                            <a href="{{action("TorneoController@participantes",["id"=>$torneo->id])}}" class="btn btn-info" data-toggle="tooltip" title="Agregar Participantes">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection