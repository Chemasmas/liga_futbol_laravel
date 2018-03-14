@extends('layout.admin')

@section('titulo','Directorio Programadores')

@section('rol','Admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Directorio Programadores</h3>
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr >
                        <th>Nombre</th>
                        <th>Institución</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                    </tr>
                    </thead>
                    @foreach ($programadores as $programador)
                        <tr>
                            <td>
                                {{ $programador->nombre }}
                            </td>
                            <td>
                                {{ $programador->institucione->nombre }}
                            </td>
                            <td>
                                {{ $programador->correo }}
                            </td>
                            <td>
                                {{ $programador->telefono }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection