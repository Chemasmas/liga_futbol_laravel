
@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Torneo : {{ $torneo->nombre }} </h3>
            <h4>Plantilla : {{ $torneo->tipo_torneo }} </h4>
            <div class="container">
                <table class="table table-bordered col-md-4">
                    <thead>
                        <th>Equipo</th>
                        <th>Institucion</th>
                    </thead>
                    @forelse( $participantes as $participante )
                        <tr>
                            <td>
                                {{$participante->equipo()->get()[0]->nombre}}
                            </td>
                            <td>
                                {{$participante->equipo()->get()[0]->institucione->get()[0]->nombre}}
                            </td>
                        </tr>
                    @empty
                        No hay equipos!!!
                    @endforelse
                </table>
                <div>
                    <!-- Large modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Gemerar</button>

                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Ok</h4>
                                </div>
                                Desea generar el rol de juegos.
                                Una vez rea
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
