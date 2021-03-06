
@extends('layout.admin')

@section('titulo','Jornadas')

@section('rol',"Admin")

@section('content')


    <div class="row">
        <div class="col-sm-8">
            @foreach($partidos as $j => $jornada)
                <div class="row" style="padding-bottom: 5px;">
                    <a role="button" data-toggle="collapse" href="#{{'tabla'.$j}}" aria-expanded="false" aria-controls="collapseExample" class="col-sm-12 btn btn-primary" >
                        Jornada {{$j}}
                    </a>
                    <div class="collapse col-sm-12" id="{{'tabla'.$j}}">
                        <table class="table table-bordered col-sm-12">
                            <tbody>
                                @foreach($jornada as $partido)
                                    <tr>
                                        <td>
                                            <img src='{{asset($partido->equipol->institucione->escudo)}}' width="50px" height="50px">
                                            {{$partido->equipol->nombre}}
                                            @if($partido->verifica==-1)
                                            <span style="font-size: 20px;font-weight: bolder">
                                                [{{$partido->marcadorLocal}}]
                                            </span>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            {{$partido->equipov->nombre}}
                                            <img src='{{asset($partido->equipov->institucione->escudo)}}' width="50px" height="50px">
                                            @if($partido->verifica==-1)
                                            <span style="font-size: 20px;font-weight: bolder">
                                                [{{$partido->marcadorVisitante}}]
                                            </span>
                                            @endif
                                        </td>
                                        @if(Auth::user()->level==1)
                                            <td>
                                                @if($partido->jugado==1)
                                                    <a class="btn btn-info" data-toggle="tooltip" title="Editar Resultado" href='{{action("TorneoController@resultadoForm",["id"=>$partido->id])}}'>
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </a>
                                                @else
                                                    <a class="btn btn-info" data-toggle="tooltip" title="Agregar Resultado" href='{{ action("TorneoController@resultadoForm",['idP'=>$partido->id])}}'>
                                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                    </a>
                                                @endif
                                            </td>
                                            @else
                                                <td></td>
                                        @endif
                                        <td>
                                            <div style="max-width: 300px;max-height: 15em;overflow: auto;overflow-x: hidden;">
                                                {{$partido->notas}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
