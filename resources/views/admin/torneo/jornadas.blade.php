
@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')

    <div class="row">
        <a href="{{action("TorneoController@show",['id'=>$idT])}}" class="btn btn-success">Volver</a>
    </div>
    <br>
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
                                        </td>
                                        <td class="text-right">
                                            {{$partido->equipov->nombre}}
                                            <img src='{{asset($partido->equipov->institucione->escudo)}}' width="50px" height="50px">
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
