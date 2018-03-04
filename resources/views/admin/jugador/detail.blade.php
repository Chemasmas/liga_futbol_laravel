@extends('layout.admin')

@section('titulo','Jugador')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <img src="{{asset($jugador->foto)}}" class="img-responsive" style="width: 100%;">
                </div>
                <div class="col-sm-6">
                    <h2>{{$jugador->nombre}}</h2>
                    <h6>Fecha de Nacimiento: {{$jugador->fechaNac}}</h6>
                    <h7>Doc. Identidad: {{$jugador->documento_identidad}}</h7>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            {{ $jugador->equipo->nombre}}
                        </div>
                        <div class="col-sm-5">
                            {{ $jugador->institucione->nombre}}
                            <br>
                            <img src="{{ asset($jugador->institucione->escudo) }}" alt="" class="img-responsive" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{action("JugadorController@index")}}" class="btn btn-primary">Volver </a>
        </div>
    </div>
@endsection