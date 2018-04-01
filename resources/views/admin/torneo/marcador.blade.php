
@extends('layout.admin')

@section('titulo','Marcador')

@section('rol',"Admin")

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
            <form action="{{action('TorneoController@cambiarResultados',["idP"=>$partido->id])}}" method="POST">
                {{csrf_field()}}
                <tr>
                    <td>
                        {{$partido->equipol->nombre}}
                    </td>
                    <td>
                        <input type="number" name="localM" class="form-control">
                    </td>
                    <td><input type="number" name="visitaM" class="form-control"></td>
                    <td>
                        {{$partido->equipov->nombre}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">
                        <button type="submit" class="btn btn-success form-control">
                            Guardar
                        </button>
                    </td>
                    <td></td>
                </tr>
            </form>
        </table>
    </div>
</div>
@endsection