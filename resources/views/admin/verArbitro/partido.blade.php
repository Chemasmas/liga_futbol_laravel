@extends('layout.admin')

@section('titulo','Partido')

@section('rol',"")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">
                    {{$partido->equipol->institucione}}
                    <table class="table table-condensed">
                        <th>logo</th>
                        <th>marcador</th>
                    </table>
                    <table class="table table-condensed">
                        <thead>
                        <th>Número</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach($ as $)
                            <tr>
                                <td>{{$->numero}}</td>
                                <td>{{$->nombre}}</td>
                                <td>
                                    <a class="btn btn-info" data-toggle="tooltip" title="Gol" href="{{action(",["id"=>$->id])}}">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-info" data-toggle="tooltip" title="Amarilla" href="{{action("",["id"=>$->id])}}">
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-info" data-toggle="tooltip" title="Roja" href="{{action("",["id"=>$->id])}}">
                                        <i class="fa fa-square" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    {{$partido->equipov->institucione}}
                    <table class="table table-condensed">
                        <th>logo</th>
                        <th>marcador</th>
                    </table>
                    <table class="table table-condensed">
                        <thead>
                        <th>Número</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach($ as $)
                            <tr>
                                <td>{{$->numero}}</td>
                                <td>{{$->nombre}}</td>
                                <td>
                                    <a class="btn btn-info" data-toggle="tooltip" title="Gol" href="{{action(",["id"=>$->id])}}">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-info" data-toggle="tooltip" title="Amarilla" href="{{action("",["id"=>$->id])}}">
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                    </a>
                                     <a class="btn btn-info" data-toggle="tooltip" title="Roja" href="{{action("",["id"=>$->id])}}">
                                        <i class="fa fa-square" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

