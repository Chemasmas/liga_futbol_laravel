@extends('layout.admin')

@section('titulo','Pase de Lista')

@section('rol',"")

@section('content')
        <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Integrantes</h3>
            <div class="col-sm-6">
                <table class="table">
                    <thead>
                        <th colspan="3">Jugador</th>
                        <th>Asistencia</th>
                    </thead>
                    <tbody>
                    @forelse($jugadores as $jugador)
                        <tr class='@if(in_array($jugador->id,$asistencias)) danger @else success @endif'>
                            <td>

                                    <img src="{{$jugador->foto}}" class="img-responsive img-thumbnail" alt="">
                                
                            </td>
                            <td>{{$jugador->numero}}</td>
                            <td>{{$jugador->nombre}}</td>
                            <td>
                                <form action="{{action("ArbitroController@asistio",["idP"=>$idP,"idJ"=>$jugador->id])}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="asistio" value="@if(in_array($jugador->id,$asistencias)) 0 @else 1 @endif">
                                    <input type="submit" value="@if(in_array($jugador->id,$asistencias)) Quitar Asistencia @else Marcar Asistencia @endif" class="btn @if(in_array($jugador->id,$asistencias)) btn-danger @else btn-success @endif">
                                </form>
                            </td>
                        </tr>

                    @empty
                        No hay Jugadores en Este Equipo!!!!
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

