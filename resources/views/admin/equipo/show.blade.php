@extends('layout.admin')

@section('titulo','Ver Equipo')

@section('rol',"Admin")

@section('content')
            <div class="offset-sm-2 col-sm-8">
            <h3>Información del Equipo</h3>
            <table class="table table-hover table-bordered">
                    <tr>
                    <td><h4> Nombre: {{ $equipo->nombre }} </h4></td>
                    </tr>
                    <tr>
                        <td><h4> Institución: {{ $equipo->institucione->nombre }} </h4></td>
                    </tr>
                    <tr>
                        <td><h4> Género: {{ $equipo->genero }} </h4></td>
                    </tr>
                    <tr>
                        <td><h4> Nombre del Coach: {{ $equipo->nombreCoach }} </h4></td>
                    </tr>
                    <tr>
                        <td><h4> Nombre del Asistente: {{ $equipo->nombreCoachAsistente }} </h4></td>
                    </tr>
            </table>
        </div>
@endsection