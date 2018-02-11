@extends('layout.admin')

@section('titulo','Mostrar Administrador')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Administradores</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    @foreach ($administradores as $administrador)

                        <tr>
                            <td>
                                {{$administrador->nombre}}
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