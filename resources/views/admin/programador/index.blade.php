@extends('layout.admin')

@section('titulo','Programador')

@section('rol',"")

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Programadores</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    @foreach ($programadores as $programador)
                        <tr>
                            <td>
                                {{$programador->nombre}}
                            </td>
                            <td>
                                <a class="btn btn-primary" role="button" href="{{action("ProgramadorController@show",["id"=>$programador->id])}}">Ver</a>
                                <a class="btn btn-success" role="button" href="{{action("ProgramadorController@edit",["id"=>$programador->id])}}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

