@extends('layout.admin')

@section('titulo','Lista Programacion')

@if(auth()->user()["level"]<2)
    @section('rol','Admin')
@elseif(auth()->user()["level"]==2)
    @section('rol','Programador')
@endif

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de torneos por programar</h3>

            @if(Auth::user()->level<2)
                <a href="{{action('AdministradorController@partidosSemanales')}}" class="btn btn-success">Partidos de la Semana</a>
                <br>
                <br>
            @endif
            <table class="table table-bordered">
                @forelse($torneos as $torneo)
                    <tr>
                        <td>{{$torneo->nombre}}</td>
                        <td>
                            <a href="{{$torneo->generado?action("ProgramadorController@rol",["id"=>$torneo->id]):"#"}}" class="btn btn-info" data-toggle="tooltip" title="{{$torneo->generado?"Ver Programación":"No hay programacion"}}" >
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    @foreach($torneosP->sortBy(["fecha","hora"]) as $partido)
                    <tr>
                        <td>{{$partido->fecha}}</td>
                        <td>{{$partido->hora}}</td>
                        <td>{{$partido->equipol->nombre}}</td>
                        <td>
                            <img src="{{asset($partido->equipol->institucione->escudo)}}" alt="" style="height: 100px; width: auto;">
                        </td>
                        @if($partido->jugado)
                            <td>{{$partido->fecha}}</td>
                            <td>{{$partido->hora}}</td>
                            <td>{{$partido->campo}}</td>
                        @else
                            <td>{{$partido->marcadorLocal}}</td>
                            <td>{{$partido->campo}}</td>
                            <td>{{$partido->marcadorVisitante}}</td>
                        @endif
                        <td>
                            <img src="{{asset($partido->equipov->institucione->escudo)}}" alt="" style="height: 100px; width: auto;">
                        </td>
                        <td>{{$partido->equipov->nombre}}</td>

                    </tr>
                    @endforeach
                @endforelse
            </table>
        </div>
    </div>
@endsection