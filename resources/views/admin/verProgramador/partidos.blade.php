@extends('layout.admin')

@section('titulo','Mostrar Programacion')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Programación</h3>
            <table>
                @foreach($partidosG as $j=>$partidos)
                    <div class="row" style="padding-bottom: 5px;">
                        <a role="button" data-toggle="collapse" href="#{{'tabla'.$j}}" aria-expanded="false" aria-controls="collapseExample" class="col-sm-12 btn btn-primary" >
                            Jornada {{$j}}
                        </a>
                        <div class="collapse col-sm-12" id="{{'tabla'.$j}}">
                            {{$partidos}}
                        </div>
                    </div>
                @endforeach
            </table>
        </div>
    </div>
@endsection