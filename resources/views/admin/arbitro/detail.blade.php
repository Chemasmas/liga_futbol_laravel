@extends('layout.admin')

@section('titulo','Jugador')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Arbitro</h1>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-4">
                    <img src="{{asset("$arbitro->foto")}}" alt="" class="img-responsive" style="width: 100%">
                </div>
                <div class="col-sm-4">
                    <h4>Nombre:</h4>
                    <h5>{{$arbitro->nombre}}</h5>
                    <h4>Telefono</h4>
                    <h5>{{$arbitro->telefono}}</h5>
                    <h4>Nombre de Usuario</h4>
                    <h5>{{$arbitro->usuario->username}}</h5>
                </div>
            </div>
            <br>
            <br>
            <a href="{{action('ArbitroController@index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@endsection