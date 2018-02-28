@extends('layout.admin')

@section('titulo','Equipo')

@section('rol',"")

<?php $rutas=[] ?>

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Equipos</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    @foreach ($equiposG as $equipo)

                        <tr>
                            <td>
                                {{$equipo->nombre}}
                            </td>

                            <td>
                                <a class="btn btn-info" role="button" href="{{action('EquipoController@show',['id'=>$equipo->id])}}">Ver</a>
                                <a class="btn btn-info" role="button" href="{{action('EquipoController@edit',['id'=>$equipo->id])}}">Editar</a>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection