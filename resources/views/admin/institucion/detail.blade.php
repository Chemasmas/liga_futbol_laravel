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
                        <td>
                                <div>
                                        <img src="{{ asset($institucion->escudo)}}" alt="" class="img-responsive img-thumbnail" style="max-height: 20em; max-width: 20em;">
                                </div>
                        </td>
                </tr>
        </table>
        </div>
@endsection
