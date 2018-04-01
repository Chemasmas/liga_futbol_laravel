@extends('layout.admin')

@section('titulo','Agregar Jugadores')

@section('rol',"Admin")

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Información</h3>
            <div class="offset-sm-1 col-sm-5">
                <h6> Nombre del Equipo: {{ $equipo->nombre }} </h6>
                <h6> Institución: {{ $equipo->institucione->nombre }} </h6>
                <h6> Género: {{ $equipo->genero }} </h6>
                <h6> Nombre del Coach: {{ $equipo->nombreCoach }} </h6>
                <h6> Nombre del Asistente: {{ $equipo->nombreCoachAsistente }} </h6>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h3>Jugadores seleccionados</h3>
            <table class="table table-condensed">
                <thead>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($integrantes as $integrante)
                    <tr>
                        <td>{{$integrante->numero}}</td>
                        <td>{{$integrante->nombre}}</td>
                        <td>
                            <a data-toggle="tooltip" title="Quitar Jugador" href="{{action('EquipoController@remove_participante',['idJ'=>$integrante->id])}}" class="btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h3>Jugadores a elegir</h3>
            <table class="table table-condensed">
                <thead>
                <th class="text-right"></th>
                <th class="text-right">Nombre</th>
                <th class="text-right">Número</th>
                </thead>
                <tbody>
                @foreach($prospectos as $integrante)
                    <tr>
                        <td class="text-right">
                            <a data-toggle="tooltip" title="Agregar Jugador" href="{{action('EquipoController@add_participante',['idE'=>$equipo->id,'idJ'=>$integrante->id])}}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        </td>
                        <td class="text-right">{{$integrante->nombre}}</td>
                        <td class="text-right">{{$integrante->numero}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection