
@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

<?php $rutas = [
    "Home"=>["etiqueta"=>"Home", "active"=>"1","link"=>"/admin/dashboard"],
    "Torneo"=>["etiqueta"=>"Torneo", "active"=>"0","link"=>""]
] ?>

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Torneos</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
            @foreach ($torneosG as $torneoG)

                    <thead>
                        <tr>
                            <th colspan="3">
                                {{ $divisiones[$torneoG[0]["id_division"]]["nombre"] }}
                            </th>
                        </tr>
                    </thead>
                @foreach ($torneoG as $torneo)
                    <tr>
                        <td>
                            {{$torneo["nombre"]}}
                        </td>
                        <td>

                            {{$torneo["tipo_torneo"]}}
                        </td>
                        <td>
                            <button type="button" class="btn btn-info">Ver</button>
                            <a type="button" class="btn btn-info">Editar</a>
                            <a type="button" class="btn btn-primary" href="{{action("TorneoController@participantes",["idT"=>$torneo->id])}}">Agregar Equipos</a>

                        </td>
                    </tr>
                @endforeach

            @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection