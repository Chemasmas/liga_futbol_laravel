
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

            @forelse ($torneosG as $torneoG)
                        <thead>
                        <tr>
                            <th colspan="3">
                                {{ $divisiones[$torneoG[0]["id_division"]]["nombre"] }}
                            </th>
                        </tr>
                        </thead>
                        <thead>
                        <tr >
                            <th>Nombre</th>
                            <th>Plantila</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

            @empty

            @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection