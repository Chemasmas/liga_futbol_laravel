@extends('layout.admin')

@section('titulo','Instituciones')

@section('rol',"Admin")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Instituciones</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    @if(count($instituciones)>0)
                        <thead>
                        <tr >
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                    @endif
                    @forelse ($instituciones as $institucion)
                        <tr>
                            <td>
                                {{ $institucion->nombre }}
                            </td>
                            <td>
                                <a class="btn btn-info" data-toggle="tooltip" title="Ver Institución" href="{{action("InstitucionController@show",["id"=>$institucion->id])}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-info" data-toggle="tooltip" title="Editar Institución" href="{{action("InstitucionController@edit",["id"=>$institucion->id])}}">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                @if($institucion->activo)
                                    <a class="btn btn-danger" data-toggle="tooltip" title="Desactivar Institución" href='{{ action("InstitucionController@deactivate",["idI"=>$institucion->id])}}'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" data-toggle="tooltip" title="Activar Institución" href='{{ action("InstitucionController@activate",["idI"=>$institucion->id])}}'>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                No hay Instituciones <a class="btn btn-primary" href="{{action('InstitucionController@create')}}">Agregar uno.</a>
                            </th>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection