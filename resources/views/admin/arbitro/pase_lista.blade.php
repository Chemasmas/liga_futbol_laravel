@extends('layout.admin')

@section('titulo','Pase de Lista')

@section('rol',"")

@section('content')
        <div class="row">
        <div class="col-sm-12">
            <h3>Lista de Integrantes</h3>
            <div class="col-sm-12">
                <table>
                    <thead>
                        <th>Nombre</th>
                        <th>Asistencia</th>
                    </thead>
                    @forelse($jugadores as $jugador)

                    @empty
                        No hay Jugadores en Este Equipo!!!!
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection

