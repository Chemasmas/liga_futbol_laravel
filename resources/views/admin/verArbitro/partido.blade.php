@extends('layout.admin')

@section('titulo','Pase de Lista')

@section('rol',"")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">
                    {{$partido->equipol->institucione}}
                </div>
                <div class="col-sm-6">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    {{$partido->equipov->institucione}}
                </div>
            </div>
        </div>
    </div>
@endsection

