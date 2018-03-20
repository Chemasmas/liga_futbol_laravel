
@extends('layout.admin')

@section('titulo','Jornadas')

@section('rol',"")

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
                                            <span style="font-weight: ">
                                                {{$partido->marcadorLocal}}
                                            </span>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            {{$partido->equipov->nombre}}
                                            <img src='{{asset($partido->equipov->institucione->escudo)}}' width="50px" height="50px">
                                            @if($partido->verifica==-1)
                                            <span>
                                                {{$partido->marcadorLocal}}
                                            </span>
                                            @endif
                                        </td>
                                        @if(Auth::user()->level==1 && $partido->verifica!=-1)
                                            <td>
                                                <a class="btn btn-success" data-toggle="tooltip" title="Colocar Resultado" href='{{ action("TorneoController@resultadoForm",['idP'=>$partido->id])}}'>
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            @else
                                            <td>

                                            </td>
                                        @endif
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
