@extends('layout.admin')

@section('titulo','Torneos')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{!empty($torneo)?action('TorneoController@update',["id"=>$torneo->id]):action('TorneoController@store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Torneo</label>
                <input type="text" name="nombre" class="form-control" placeholder=""  value="{{!empty($torneo)?$torneo->nombre:''}}">
            </div>
            <!--TODO Esto podria tener una tabla-->
            <div class="form-group">
                <label for="tipo_torneo">Tipo</label>
                <select class="form-control" name="tipo_torneo">
                    <option value="5" {{!empty($torneo)&&5==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 5</option>
                    <option value="6" {{!empty($torneo)&&6==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 6</option>
                    <option value="7" {{!empty($torneo)&&7==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 7</option>
                    <option value="1" {{!empty($torneo)&&1==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 7 2V</option>
                    <option value="8" {{!empty($torneo)&&8==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 8</option>
                    <option value="9" {{!empty($torneo)&&9==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 9</option>
                    <option value="10" {{!empty($torneo)&&10==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 10</option>
                    <option value="11" {{!empty($torneo)&&11==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 11</option>
                    <option value="12" {{!empty($torneo)&&12==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 12</option>
                    <option value="13" {{!empty($torneo)&&13==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 13</option>
                    <option value="14" {{!empty($torneo)&&14==$torneo->tipo_torneo?'"selected"':''}}>Plantilla 14</option>
                </select>

            </div>
            <div class="form-group">
                <label>Género</label>
                <select class="form-control" name="genero">
                    <option value="M" {{!empty($torneo)&&"M"==$torneo->genero?'"selected"':''}} >Varonil</option>
                    <option value="F" {{!empty($torneo)&&"F"==$torneo->genero?'"selected"':''}}>Femenil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success pull-right"> {{!empty($torneo)?'Guardar Edición':'Crear'}}</button>
        </form>
    </div>


@endsection