@extends('layout.admin')

@section('titulo','Marcador')

@if(auth()->user()["level"]<2)
    @section('rol','Admin')
@elseif(auth()->user()["level"]==3)
    @section('rol','Arbitro')
@endif

@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
            @forelse($torneos as $item)
                <thead>
                    <th colspan="3" align="center" style="text-align: center">
                        {{$item['torneo']->nombre}}
                    </th>
                </thead>
                <br>
                @foreach($item['partidos'] as $partido)
                    @if($partido->status == 1)
                        <tr style="background-color: rgba(1,147,196,0.3);">
                    @elseif($partido->status == 0)
                        <tr style="background-color: rgba(225,30,45,0.5);">
                    @elseif($partido->status == 2)
                        <tr style="background-color: rgba(136,191,74,0.4);">
                    @endif
                        <td>
                            {{$partido->equipol->nombre}}
                        </td>
                        <td>
                            {{$partido->equipov->nombre}}
                        </td>
                        <td>
                            {{$partido->jornada}}
                        </td>
                        <td>
                            Dia: {{$partido->fecha}}
                        </td>
                        <td>
                            Hora: {{$partido->hora}}
                        </td>
                    </tr>
                @endforeach
                @empty
                No hay Torneos activos
            @endforelse
            </table>
        </div>
    </div>
@endsection

