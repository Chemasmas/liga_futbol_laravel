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
            <h3>Marcadores de partidos Jugados</h3>
            <table class="table table-bordered">
                @foreach($partidosG as $j => $partidos)
                    <tr>
                        <th colspan="6" bgcolor="#42f4d7">
                            Jornada {{$j}}
                        </th>
                    </tr>
                    @foreach($partidos as $partido)
                        <tr>
                            <td>
                                {{$partido->fecha}}
                            </td>
                            <td>
                                {{$partido->hora}}
                            </td>
                            <td>
                                {{$partido->equipol->nombre}}
                            </td>
                            <td>
                                {{$partido->marcadorVisitante}}
                            </td>
                            <td>
                                {{$partido->marcadorLocal}}
                            </td>
                            <td>
                                {{$partido->equipov->nombre}}
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>
@endsection