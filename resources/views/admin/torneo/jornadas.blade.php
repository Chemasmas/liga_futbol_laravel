
@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')

    <div class="row">
        <div class="col-sm-8">
            <table>
                @foreach( $partidos as $partido)
                    <tr>
                        <td>{{$partido->equipol->nombre}}</td>
                        <td>{{$partido->equipov->nombre}}</td>
                    </tr>
                    {{$partido}}
                @endforeach
            </table>
        </div>
    </div>
@endsection
