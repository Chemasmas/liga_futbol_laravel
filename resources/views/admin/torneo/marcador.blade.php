
@extends('layout.admin')

@section('titulo',!empty($partido)?'Editar Marcador':'Agregar Marcador')

@section('rol',"")

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-condensed">
            <tr>
                <td>Local</td>
                <td>Marcador</td>
                <td>Marcador</td>
                <td>Visitante</td>
            </tr>
                <form method="POST" action="{{!empty($partido)?action('TorneoController@updateCambiarResultados',["idP"=>$partido->id]):action('TorneoController@cambiarResultados')}}">
                {{csrf_field()}}
                <tr>
                    <td>
                        {{$partido->equipol->nombre}}
                    </td>
                    <td><input type="number" name="localM" class="form-control" value="{{!empty($partido)?$partido->marcadorLocal:''}}"></td>
                    <td><input type="number" name="visitaM" class="form-control" value="{{!empty($partido)?$partido->marcadorVisitante:''}}"></td>
                    <td>
                        {{$partido->equipov->nombre}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">
                        <button type="submit" class="btn btn-success form-control"> {{!empty($partido)?'Guardar Edición':'Agregar'}}</button>
                    </td>
                    <td></td>
                </tr>
            </form>
        </table>
    </div>
</div>


@endsection