@extends('layout.admin')

@section('titulo','Arbitro')

@section('rol',"")

@section('content')
        <div class="row">
        <div class="col-sm-12">
            <h3>Partidos del dia</h3>
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                        <th colspan="6">Partido</th>
                        <th>Acciones</th>
                    </thead>
                @forelse($partidos as $partido)
                        <tr>
                            <td>
                                <a href="{{action('ArbitroController@pasar_lista',["idE"=>$partido->equipol->id,"idP"=>$partido->id])}}">
                                    <img src="{{asset($partido->equipol->institucione->escudo)}}" alt="{{$partido->equipol->institucione->nombre}}" height="50px" width="auto">
                                </a>
                            </td>
                            <td>{{$partido->equipol->nombre}}</td>
                            <td>{{$partido->equipov->nombre}}</td>
                            <td>
                                <a href="{{action('ArbitroController@pasar_lista',["idE"=>$partido->equipov->id,"idP"=>$partido->id])}}">
                                    <img src="{{asset($partido->equipov->institucione->escudo)}}" alt="{{$partido->equipov->institucione->nombre}}" height="50px" width="auto">
                                </a>
                            </td>
                            <td>
                                {{$partido->hora}}<span></span>
                            </td>
                        </tr>
                @empty
                    <div>Hoy no hay Partidos</div>
                @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection

