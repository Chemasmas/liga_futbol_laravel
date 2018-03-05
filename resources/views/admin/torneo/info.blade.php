
@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-5">
            <h3>Torneo : {{ $torneo->nombre }} </h3>
            <h4>Plantilla : {{ $torneo->tipo_torneo }} </h4>
            <div class="btn-group" role="group" aria-label="...">

                <a href="{{action("TorneoController@index")}}" class="btn btn-success">Volver</a>
                <a class="btn btn-primary" href="{{action("TorneoController@jornadas",["idT"=>$torneo->id])}}" @if($torneo->generado) {{'disabled'}} @endif>
                    Jornadas
                </a>
                <a class="btn btn-primary" href="{{action("TorneoController@jornadasXLS",["idT"=>$torneo->id])}}" @if($torneo->generado) {{'disabled'}} @endif>
                    <i class="fa fa-table" aria-hidden="true"></i>
                </a>
                <a class="btn btn-primary" href="{{action("TorneoController@jornadasPDF",["idT"=>$torneo->id])}}" @if($torneo->generado) {{'disabled'}} @endif>
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                </a>
            </div>
            <br><br>
            <div class="container">
                <table class="table table-bordered col-md-4">
                    <thead>
                        <th>Equipo</th>
                        <th>Institucion</th>
                    </thead>
                    @forelse( $participantes as $participante )
                        <tr>
                            <td>
                                {{$participante->equipo->nombre}}
                            </td>
                            <td>
                                {{$participante->equipo->institucione->nombre}}
                            </td>
                        </tr>
                    @empty
                        No hay equipos!!!
                    @endforelse
                </table>
                <div>
                    <!-- Large modal -->


                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content" style="padding:  20px;">
                                <div class="modal-header">
                                    <h4 class="modal-title">Generar Rol de Juegos</h4>
                                </div>
                                Desea generar el rol de juegos?
                                <br>
                                <br>
                                <a class="btn btn-primary" href="{{action("TorneoController@generarRotacion",["idT"=>$torneo->id])}}">
                                    Generar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
