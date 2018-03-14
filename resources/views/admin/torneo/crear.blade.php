@extends('layout.admin')

@section('titulo',!empty($torneo1)?'Editar Torneo':'Crear Torneo')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{!empty($torneo1)?action('TorneoController@update',["id"=>$torneo1->id]):action('TorneoController@store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Torneo</label>
                <input type="text" name="nombre" class="form-control" placeholder=""  value="{{!empty($torneo1)?$torneo1->nombre:''}}" @if($torneo1->generado) disabled @endif>
            </div>
            <!--TODO Esto podria tener una tabla-->
            <div class="form-group">
                <label for="tipo_torneo">Tipo</label>
                <select class="form-control" name="tipo_torneo" @if($torneo1->generado) disabled @endif>
                    <option value="5" {{!empty($torneo1)&&5==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 5</option>
                    <option value="6" {{!empty($torneo1)&&6==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 6</option>
                    <option value="7" {{!empty($torneo1)&&7==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 7</option>
                    <option value="1" {{!empty($torneo1)&&1==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 7 2V</option>
                    <option value="8" {{!empty($torneo1)&&8==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 8</option>
                    <option value="9" {{!empty($torneo1)&&9==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 9</option>
                    <option value="10" {{!empty($torneo1)&&10==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 10</option>
                    <option value="11" {{!empty($torneo1)&&11==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 11</option>
                    <option value="12" {{!empty($torneo1)&&12==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 12</option>
                    <option value="13" {{!empty($torneo1)&&13==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 13</option>
                    <option value="14" {{!empty($torneo1)&&14==$torneo1->tipo_torneo?'"selected"':''}}>Plantilla 14</option>
                </select>

            </div>
            <div class="form-group">
                <label>Género</label>
                <select class="form-control" name="genero" @if($torneo1->generado) disabled @endif>
                    <option value="M" {{!empty($torneo1)&&"M"==$torneo1->genero?'"selected"':''}} >Varonil</option>
                    <option value="F" {{!empty($torneo1)&&"F"==$torneo1->genero?'"selected"':''}}>Femenil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success pull-right" @if($torneo1->generado) disabled @endif> {{!empty($torneo1)?'Guardar Edición':'Crear'}}</button>
        </form>
    </div>


@endsection