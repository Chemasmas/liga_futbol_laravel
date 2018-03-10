@extends('layout.admin')

@section('titulo','Programadores Historico')

@section('rol',"")

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Programadores</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    @if(count($programadores)>0)
                        <thead>
                        <tr >
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                    @endif
                    @forelse ($programadores as $programador)
                        <tr>
                            <td>
                                {{$programador->nombre}}
                            </td>
                            <td>
                                @if($programador->usuario->active)
                                    <a class="btn btn-danger" data-toggle="tooltip" title="Desactivar Programador" href='{{ action("ProgramadorController@deactivate",["idP"=>$programador->id])}}'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" data-toggle="tooltip" title="Activar Programador" href='{{ action("ProgramadorController@activate",["idP"=>$programador->id])}}'>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <th>
                                    No hay Usuario Programador <a class="btn btn-primary" href="{{action('ProgramadorController@create')}}">Agregar uno.</a>
                                </th>
                            </tr>
                        @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection

