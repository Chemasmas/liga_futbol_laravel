@extends('layout.admin')

@section('titulo','Arbitro')

@section('rol',"")

@section('content')
        <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Árbitros</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    @if(count($arbitros)>0)
                        <thead>
                        <tr >
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                    @endif
                    @forelse ($arbitros as $arbitro)
                        <tr>
                            <td>
                                {{ $arbitro->nombre }}
                            </td>
                            <td>
                                @if($arbitro->usuario->active)
                                    <a class="btn btn-danger" data-toggle="tooltip" title="Desactivar Árbitro" href='{{ action("ArbitroController@deactivate",["idA"=>$arbitro->id])}}'>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" data-toggle="tooltip" title="Activar Árbitro" href='{{ action("ArbitroController@activate",["idA"=>$arbitro->id])}}'>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                No hay Usuario Árbitro <a class="btn btn-primary" href="{{action('ArbitroController@create')}}">Agregar uno.</a>
                            </th>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection

