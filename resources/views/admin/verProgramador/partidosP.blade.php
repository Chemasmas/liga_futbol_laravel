@extends('layout.admin')

@section('titulo','Propuesta de Partidos')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3></h3>
                @foreach($partidosG as $j=>$partidos)
                    <div class="row" style="padding-bottom: 5px;">
                        <a role="button" data-toggle="collapse" href="#{{'tabla'.$j}}" aria-expanded="false" aria-controls="collapseExample" class="col-sm-12 btn btn-primary" >
                            Jornada {{$j}}
                        </a>
                        <div class="collapse col-sm-12" id="{{'tabla'.$j}}">
                            <table class="table table-condensed">
                                <thead>
                                    <th>Equipo 1</th>
                                    <th>Equipo 2</th>
                                    <th>Propuesta</th>
                                </thead>
                            @foreach($partidos as $partido)
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
                                        @if($partido->status!=2 && $partido->verifica!=Auth::user()->id)
                                        <form method="POST" action="{{action('ProgramadorController@propuesta',["idP"=>$partido->id])}}" class="form-inline">
                                            {{csrf_field()}}
                                            <input type="time" class="form-control" id="hora" name="hora" value="{{$partido->hora}}">
                                            <input type="date" class="form-control" id="fecha" name="fecha" value="{{$partido->fecha}}">
                                            <input type="text" class="form-control" id="campo" name="campo" style="text-transform:uppercase" value="{{$partido->campo}}">
                                            <input type="submit" class="form-control btn btn-success" value="Proponer" >
                                        </form>
                                        @else
                                            {{$partido->fecha}} [{{$partido->hora}}] <span style="font-weight: bold">{{$partido->campo}}</span>
                                            <a href="{{action("ProgramadorController@habilitar_edicion_partido",["idP"=>$partido->id])}}">Modificar</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection