@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Torneos</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
            @foreach ($torneosG as $torneoG)

                    <thead>
                        <tr>
                            <th colspan="3">
                                {{ $divisiones[$torneoG[0]["id_division"]]["nombre"] }}
                            </th>
                        </tr>
                    </thead>
                @foreach ($torneoG as $torneo)
                    <tr>
                        <td>
                            {{$torneo["nombre"]}}
                        </td>
                        <td>
                            {{$torneo["tipo_torneo"]}}
                        </td>
                        <td>
                            <a class="btn btn-succes">Ver</a>
                        </td>
                    </tr>
                @endforeach

            @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection