@extends('layout.admin')

@section('titulo','Mostrar Administrador')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Administradores</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    @if(count($administradores)>0)
                        <thead>
                        <tr >
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                    @endif
                    @forelse ($administradores as $administrador)
                        <tr>
                            <td>
                                {{ $administrador->nombre }}
                            </td>
                            <td>
                                <a class="btn btn-info" data-toggle="tooltip" title="Ver Admin" href="{{action("AdministradorController@show",["id"=>$administrador->id])}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-info" data-toggle="tooltip" title="Editar Admin" href="{{action("AdministradorController@edit",["id"=>$administrador->id])}}">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                @if($administrador->activo)
                                    <a class="btn btn-danger" data-toggle="tooltip" title="Desactivar Admin" href='{{ action("AdministradorController@deactivate",["idA"=>$administrador->id])}}'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" data-toggle="tooltip" title="Activar Admin" href='{{ action("AdministradorController@activate",["idA"=>$administrador->id])}}'>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                No hay Usuario Admin <a class="btn btn-primary" href="{{action('AdministradorController@create')}}">Agregar uno.</a>
                            </th>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection