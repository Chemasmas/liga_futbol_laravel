
@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Torneos</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">

            @forelse ($torneos as $torneo)
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
                <tr>
                    <th>
                        No hay torneos <a class="btn btn-primary" href="{{action('TorneoController@create')}}">Agregar uno.</a>
                    </th>
                </tr>
            @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection