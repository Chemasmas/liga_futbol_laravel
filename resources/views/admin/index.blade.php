@extends('layout.admin')

@section('titulo','Dashboard')

@section('rol','Admin')

<?php $rutas = ["Home"=>["etiqueta"=>"Home", "active"=>"0","link"=>"#"] ] ?>

@section('content')

    <div>
        <h3>Bienvenido</h3>
    </div>

@endsection