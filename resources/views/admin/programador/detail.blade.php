@extends('layout.admin')

@section('titulo','Ver Programador')

@section('rol',"")

@section('content')
    <div class="offset-sm-2 col-sm-8">
        <h3>Información de Programador</h3>
        <table class="table table-hover table-bordered">
            <tr>
                <td colspan="2"><h4>Nombre : {{$programador->nombre}}</h4></td>
            </tr>
            <tr>
                <td colspan="2"><h4>Usuario : {{$programador->usuario->username}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Correo : {{$programador->correo}}</h4></>
            </tr>
            <tr>
                <td colspan="3"><h4>Teléfono : {{$programador->telefono}}</h4></td>
            </tr>
            <tr>
                <td><h4>Institución: {{ $programador->institucione->nombre}}</h4></td>
                <td><img src="{{ asset($programador->institucione->escudo) }}" alt="" class="img-responsive" style="width: 100%;"></td>
            </tr>
        </table>
    </div>
@endsection