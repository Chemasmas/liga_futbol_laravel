@extends('layout.admin')

@section('titulo',!empty($torneo)?'Editar Torneo':'Crear Torneo')

@section('rol',"")

@section('content')

    <div class="offset-sm-3 col-sm-6">
        <form action="{{action('TorneoController@start',["idT"=>$idT])}}" method="POST">
            {{csrf_field()}}
            <div class="form-control">
                <label for="">
                    Selecciona la jornada que van a mostrar
                </label>
                <select class="form-control" name="jornada" >
                    @foreach($jornadas as $jornada)
                    <option value="{{$jornada->jornada}}">{{$jornada->jornada}}</option>
                    @endforeach
                </select>
                <button type="submit" class="form-control btn btn-success">Iniciar</button>
            </div>
        </form>
    </div>
@endsection