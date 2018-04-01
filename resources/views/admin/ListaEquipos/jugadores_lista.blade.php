@extends('layout.admin')

@section('titulo','Lista Jugadores')

@section('rol',"Programador")

@section('content')
        <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Integrantes</h3>
            <div class="col-sm-6">
                <table class="table">
                    <thead>
                        <th colspan="3">Jugador</th>
                    </thead>
                    <tbody>
                    @forelse($jugadores as $jugador)
                        <tr>
                            <td>
                                <img src='{{asset("$jugador->foto")}}' class="img-responsive img-thumbnail" alt="" style="max-height: 200px;">
                            </td>
                            <td>{{$jugador->numero}}</td>
                            <td>{{$jugador->nombre}}</td>
                        </tr>
                    @empty
                        No hay Jugadores en Este Equipo!!!!
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

