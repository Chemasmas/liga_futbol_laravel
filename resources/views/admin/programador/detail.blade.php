@extends('layout.admin')

@section('titulo','Ver Admin')

@section('rol',"")

@section('content')
    <div class="offset-sm-2 col-sm-8">
        <h3>Información de Jugador</h3>
        <table class="table table-hover table-bordered">
            <tr>
                <td rowspan="5"><img src="{{ asset($programador->institucione->escudo)}}" alt="" style="width: 100%"></td>
                <td colspan="2"><h4>Nombre : {{$programador->nombre}}<span>({{$programador->usuario->username}})</span></h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Correo : {{$programador->correo}}</h4></>
            </tr>
            <tr>
                <td colspan="3"><h4>Teléfono : {{$programador->telefono}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Institución : {{$programador->institucione->nombre}}</h4></td>
            </tr>
        </table>
        <a class="btn btn-success btn btn-primary" href="{{action("ProgramadorController@index")}}">Volver</a>
    </div>
@endsection