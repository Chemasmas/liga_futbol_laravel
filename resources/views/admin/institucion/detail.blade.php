@extends('layout.admin')

@section('titulo','CrearEquipo')

@section('rol','Admin')

@section('content')

    <div class="offset-sm-3 col-sm-6">
        <img src="{{ asset($institucion->escudo)}}" class="offset-sm-2 col-sm-8 img-responsive">
        <div class="row">
            <div class="col-sm-12 center">
                <h1>{{$institucion->nombre}}</h1>
            </div>
            <div class="col-sm-12">
                {{$institucion->dir}}
            </div>
            <div class="col-sm-12">
                {{$institucion->mapa}}
            </div>
        </div>
    </div>

@endsection
