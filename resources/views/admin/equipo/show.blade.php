@extends('layout.admin')

@section('titulo','Equipo')

@section('rol',"")

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Información</h3>
            <div class="offset-sm-3 col-sm-6">
                <h3> Nombre del Equipo: {{ $equipo->nombre }} </h3>
                <h3> Institución: {{ $equipo->institucione->nombre }} </h3>
                <h3> Género: {{ $equipo->genero }} </h3>
                <h3> Nombre del Coach: {{ $equipo->nombreCoach }} </h3>
                <h3> Nombre del Asistente: {{ $equipo->nombreCoachAsistente }} </h3>
            </div>
        </div>
    </div>

@endsection