@extends('layout.admin')

@section('titulo','Ver Jugador')

@if(auth()->user()["level"]<2)
    @section('rol','Admin')
@elseif(auth()->user()["level"]==4)
    @section('rol','Jugador')
@endif

@section('content')
    <div class="offset-sm-2 col-sm-8">
        <h3>Información de Jugador</h3>
        <table class="table table-hover table-bordered">
            <tr>
                <td rowspan="5"><div><img src="{{ asset($jugador->foto) }}" alt="" class="img-responsive img-thumbnail" style="max-height: 20em; max-width: 20em;"></div></td>
                <td colspan="2"><h4>Nombre : {{$jugador->nombre}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Fecha de Nacimiento: {{$jugador->fechaNac}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Doc. Identidad: {{$jugador->documento_identidad}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Equipo: {{ $jugador->equipo->nombre}}</h4></td>
            </tr>
            <tr>
            <td><h4>Institución: {{ $jugador->institucione->nombre}}</h4></td>
            <td>
                <div>
                <img src="{{ asset($jugador->institucione->escudo) }}" alt="" class="img-responsive img-thumbnail" style="width: 100%;">
                </div>
            </td>
            </tr>
        </table>
    </div>
@endsection