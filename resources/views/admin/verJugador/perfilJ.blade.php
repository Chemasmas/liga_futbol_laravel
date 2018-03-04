@extends('layout.admin')

@section('titulo','Mostrar Programador')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Perfil</h3>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ asset($programador->institucione->escudo)}}" alt="" style="width: 100%">
                    </div>
                    <div class="col-sm-6">
                        <h3>{{$programador->nombre}} <span>({{$programador->usuario->username}})</span></h3>
                        <h6>{{$programador->correo}}</h6>
                        <h6>{{$programador->telefono}}</h6>
                        <h6>{{$programador->institucione->nombre}}</h6>
                    </div>
                </div>
                <br><br>
                <a href="{{action("ProgramadorController@index")}}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection