@extends('layout.admin')

@section('titulo',!empty($t)?'Editar Torneo':'Crear Torneo')

@section('rol',"")

@section('content')
    <div class="offset-sm-3 col-sm-6">
        <form method="POST" action="{{!empty($t)?action('TorneoController@update',["id"=>$t->id]):action('TorneoController@store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nombre">Nombre del Torneo</label>
                <input type="text" name="nombre" class="form-control" placeholder=""  value="{{!empty($t)?$t->nombre:''}}" @if($t->generado) disabled @endif>
            </div>
            <!--TODO Esto podria tener una tabla-->
            <div class="form-group">
                <label for="tipo_torneo">Tipo</label>
                <select class="form-control" name="tipo_torneo" @if($t->generado) disabled @endif>
                    <option value="5" {{!empty($t)&&5==$t->tipo_torneo?'"selected"':''}}>Plantilla 5</option>
                    <option value="6" {{!empty($t)&&6==$t->tipo_torneo?'"selected"':''}}>Plantilla 6</option>
                    <option value="7" {{!empty($t)&&7==$t->tipo_torneo?'"selected"':''}}>Plantilla 7</option>
                    <option value="1" {{!empty($t)&&1==$t->tipo_torneo?'"selected"':''}}>Plantilla 7 2V</option>
                    <option value="8" {{!empty($t)&&8==$t->tipo_torneo?'"selected"':''}}>Plantilla 8</option>
                    <option value="9" {{!empty($t)&&9==$t->tipo_torneo?'"selected"':''}}>Plantilla 9</option>
                    <option value="10" {{!empty($t)&&10==$t->tipo_torneo?'"selected"':''}}>Plantilla 10</option>
                    <option value="11" {{!empty($t)&&11==$t->tipo_torneo?'"selected"':''}}>Plantilla 11</option>
                    <option value="12" {{!empty($t)&&12==$t->tipo_torneo?'"selected"':''}}>Plantilla 12</option>
                    <option value="13" {{!empty($t)&&13==$t->tipo_torneo?'"selected"':''}}>Plantilla 13</option>
                    <option value="14" {{!empty($t)&&14==$t->tipo_torneo?'"selected"':''}}>Plantilla 14</option>
                </select>

            </div>
            <div class="form-group">
                <label>Género</label>
                <select class="form-control" name="genero" @if($t->generado) disabled @endif>
                    <option value="M" {{!empty($t)&&"M"==$t->genero?'"selected"':''}} >Varonil</option>
                    <option value="F" {{!empty($t)&&"F"==$t->genero?'"selected"':''}}>Femenil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success pull-right" @if($t->generado) disabled @endif> {{!empty($t)?'Guardar Edición':'Crear'}}</button>
        </form>
    </div>


@endsection