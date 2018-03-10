@extends('layout.admin')

@section('titulo','Directorio Arbitros')

@section('rol','Admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Directorio Árbitros</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                        <thead>
                        <tr >
                            <th>Nombre</th>
                            <th>Teléfono</th>
                        </tr>
                        </thead>
                    @foreach ($arbitros as $arbitro)
                        <tr>
                            <td>
                                {{ $arbitro->nombre }}
                            </td>
                            <td>
                                {{ $arbitro->telefono }}
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection