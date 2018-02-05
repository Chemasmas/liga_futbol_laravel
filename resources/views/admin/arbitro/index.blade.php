@extends('layout.admin')

@section('titulo','Arbitro')

@section('rol',"")

<?php $rutas = [] ?>

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Arbitros</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    @foreach ($arbitrosG as $arbitro)

                        <tr>
                            <td>
                                {{$arbitro->nombre}}
                            </td>
                            <td>
                                {{$arbitro->telefono}}
                            </td>
                            <td>
                                <a class="btn btn-primary" role="button">Ver</a>
                                <a class="btn btn-success" role="button">Editar</a>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection