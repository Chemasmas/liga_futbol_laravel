@extends('layout.admin')

@section('titulo','Ver Arbitro')

@if(auth()->user()["level"]<2)
    @section('rol','Admin')
@elseif(auth()->user()["level"]==3)
    @section('rol','Arbitro')
@endif

@section('content')
    <div class="offset-sm-2 col-sm-8">
        <h3>Información de Árbitro</h3>
        <table class="table table-hover table-bordered">
            <tr>
                <td rowspan="5"><div><img src="{{ asset($arbitro->foto) }}" alt="" class="img-responsive img-thumbnail" style="max-height: 20em; max-width: 20em;"></div></td>
                <td colspan="2"><h4>Nombre : {{$arbitro->nombre}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Teléfono : {{$arbitro->telefono}}</h4></td>
            </tr>
            <tr>
                <td colspan="3"><h4>Nombre de Usuario : {{$arbitro->usuario->username}}</h4></td>
            </tr>
        </table>
    </div>
@endsection