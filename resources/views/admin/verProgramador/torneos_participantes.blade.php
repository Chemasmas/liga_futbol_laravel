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
            <h3>Lista de torneos en los que participamos</h3>
            <table class="table table-bordered">
                @foreach($torneos as $torneo)
                    <tr>
                        <td>
                            <a class="form-control btn btn-primary" href="{{action('ProgramadorController@marcadores',['idT'=>$torneo->id])}}">
                                {{$torneo->nombre}}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection