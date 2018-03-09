@extends('layout.admin')

@section('titulo','Ver Jugador')

@section('rol',"")

@section('content')
    <div class="offset-sm-2 col-sm-8">
        <h3>Información de Jugador</h3>
        <table class="table table-hover table-bordered">
            <tr>
                <td rowspan="5"><img src="{{ asset($jugador->foto) }}" alt="" class="img-responsive" style="max-height: 20em; max-width: 20em;"></td>
                <td colspan="2"><h4>Nombre : {{$jugador->nombre}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Fecha de Nacimiento: {{$jugador->fechaNac}}</h4></>
            </tr>
            <tr>
                <td colspan="3"><h4>Doc. Identidad: {{$jugador->documento_identidad}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Equipo: {{ $jugador->equipo->nombre}}</h4></td>
            </tr>
            <tr>
                <td><h4>Institución: {{ $jugador->institucione->nombre}}</h4></td>
                <td><img src="{{ asset($jugador->institucione->escudo) }}" alt="" class="img-responsive" style="width: 100%;"></td>
            </tr>
        </table>
    </div>
@endsection