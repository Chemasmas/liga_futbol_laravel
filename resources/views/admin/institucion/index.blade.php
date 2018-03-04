@extends('layout.admin')

@section('titulo','Instituciones')

@section('rol',"")

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
                            <th>Escudo</th>
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
                                {{ $institucion->escudo }}
                            </td>
                            <td>
                                <a class="btn btn-info" data-toggle="tooltip" title="Ver Institucion" href="{{action("InstitucionController@show",["id"=>$institucion->id])}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-info" data-toggle="tooltip" title="Editar Institucion" href="{{action("InstitucionController@edit",["id"=>$institucion->id])}}">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                @if($institucion->activo)
                                    <a class="btn btn-danger" data-toggle="tooltip" title="Desactivar Institucion" href='{{ action("InstitucionController@deactivate",["idI"=>$institucion->id])}}'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" data-toggle="tooltip" title="Activar Institucion" href='{{ action("InstitucionController@activate",["idI"=>$institucion->id])}}'>
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