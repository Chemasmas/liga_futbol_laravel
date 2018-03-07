@extends('layout.admin')

@section('titulo','Ver Institucion')

@section('rol','Admin')

@section('content')
        <div class="offset-sm-2 col-sm-8">
        <h3>Información de Institución</h3>
        <table class="table table-hover table-bordered">
                <tr>
                    <td><h4>Nombre: {{ $institucion->nombre }}</h4></td>
                </tr>
                <tr>
                    <td><h4>Dirección: {{$institucion->dir}}</h4></td>
                </tr>
                <tr>
                    <td><h4>Mapa: {{$institucion->mapa}}</h4></td>
                </tr>
                <tr>
                <td><img src="{{ asset($institucion->escudo)}}"  class="offset-sm-2 col-sm-8 img-responsive"></td>
                </tr>
        </table>
        <a class="btn btn-success" href="{{action("InstitucionController@index")}}">Volver</a>
        </div>
@endsection
