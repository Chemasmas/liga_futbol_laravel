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
                            <a class="btn btn-primary" role="button" href="#">Ver</a>
                            <a class="btn btn-success" role="button">Editar</a>
                            <a class="btn btn-success" role="button" href="{{action('TorneoController@participantes',['id'=>$torneo->id])}}">Participantes</a>
                        </td>
                    </tr>
                @endforeach

            @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection