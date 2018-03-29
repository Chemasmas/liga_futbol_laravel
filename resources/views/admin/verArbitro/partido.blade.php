@extends('layout.admin')

@section('titulo','Partido')

@section('rol',"")

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-condensed">
                <thead>
                    <form action="{{action('ArbitroController@finalizar')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$partido->id}}" name="idP">
                        <tr>
                            <label for="notas">Notas</label>
                        </tr>
                        <tr>
                            <textarea name="notas" id="" cols="30" rows="5" class="form-control" placeholder="Aqui van las notas del partido">{{$partido->notas}}</textarea>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right">Equipo 1</th>
                            <th style="text-align: center">
                                <button type="submit" class="btn btn-default">Finalizar</button>
                            </th>
                            <th colspan="2"> Equipo2</th>
                        </tr>
                    </form>
                </thead>
                <tr>
                    <td class="text-right"><img src="{{asset($partido->equipol->institucione->escudo)}}" alt="" class="img-responsive" style="max-height: 100px;width: 160px;"></td>
                    <td class="text-right">
                        <h1>
                            {{$partido->marcadorLocal}}
                        </h1>
                    </td>
                    <td></td>
                    <td>
                        <h1>
                            {{$partido->marcadorVisitante}}
                        </h1>
                    </td>
                    <td><img src="{{asset($partido->equipov->institucione->escudo)}}" alt="" class="img-responsive" style="height: 100px;width: 160px;"></td>
                </tr>
            </table>
            <div class="col-sm-6">
                <table class="table table-condensed">
                    <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($jugadoresL as $jugador)
                        <tr>
                            <td>{{$jugador->numero}}</td>
                            <td>{{$jugador->nombre}}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="ddm{{$jugador->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Acciones
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                        <li style="text-align: center;">
                                            <form action="{{action('ArbitroController@gol')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{$jugador->id}}" name="idJ">
                                                <input type="hidden" value="{{$partido->equipol->id}}" name="idE">
                                                <input type="hidden" value="{{$partido->id}}" name="idP">
                                                <input type="hidden" value="{{$partido->Torneo_id}}" name="idT">
                                                <input type="hidden" value="1" name="goles">
                                                <button type="submit" class="btn btn-link"><i class="fa fa-futbol-o" aria-hidden="true"></i></button>
                                            </form>
                                        </li>
                                        <li style="text-align: center;">
                                            <form action="{{action('ArbitroController@amarilla')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{$jugador->id}}" name="idJ">
                                                <input type="hidden" value="{{$partido->equipol->id}}" name="idE">
                                                <input type="hidden" value="{{$partido->id}}" name="idP">
                                                <input type="hidden" value="{{$partido->Torneo_id}}" name="idT">
                                                <input type="hidden" value="1" name="amarillas">
                                                <button type="submit" class="btn btn-link">
                                                    <i class="fa fa-square-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <li style="text-align: center;">
                                            <form action="{{action('ArbitroController@roja')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{$jugador->id}}" name="idJ">
                                                <input type="hidden" value="{{$partido->equipol->id}}" name="idE">
                                                <input type="hidden" value="{{$partido->id}}" name="idP">
                                                <input type="hidden" value="{{$partido->Torneo_id}}" name="idT">
                                                <input type="hidden" value="1" name="rojas">
                                                <button type="submit" class="btn btn-link">
                                                    <i class="fa fa-square" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 text-right">
                <table class="table table-condensed">
                    <thead>
                    <th>Acciones</th>
                    <th>Nombre</th>
                    <th>#</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($jugadoresV as $jugador)
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="ddm{{$jugador->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Acciones
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                        <li style="text-align: center;">
                                            <form action="{{action('ArbitroController@gol')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{$jugador->id}}" name="idJ">
                                                <input type="hidden" value="{{$partido->equipov->id}}" name="idE">
                                                <input type="hidden" value="{{$partido->id}}" name="idP">
                                                <input type="hidden" value="{{$partido->Torneo_id}}" name="idT">
                                                <input type="hidden" value="1" name="goles">
                                                <button type="submit" class="btn btn-link"><i class="fa fa-futbol-o" aria-hidden="true"></i></button>
                                            </form>
                                        </li>
                                        <li style="text-align: center;">
                                            <form action="{{action('ArbitroController@amarilla')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{$jugador->id}}" name="idJ">
                                                <input type="hidden" value="{{$partido->equipov->id}}" name="idE">
                                                <input type="hidden" value="{{$partido->id}}" name="idP">
                                                <input type="hidden" value="{{$partido->Torneo_id}}" name="idT">
                                                <input type="hidden" value="1" name="amarillas">
                                                <button type="submit" class="btn btn-link">
                                                    <i class="fa fa-square-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <li style="text-align: center;">
                                            <form action="{{action('ArbitroController@roja')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{$jugador->id}}" name="idJ">
                                                <input type="hidden" value="{{$partido->equipov->id}}" name="idE">
                                                <input type="hidden" value="{{$partido->id}}" name="idP">
                                                <input type="hidden" value="{{$partido->Torneo_id}}" name="idT">
                                                <input type="hidden" value="1" name="rojas">
                                                <button type="submit" class="btn btn-link">
                                                    <i class="fa fa-square" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>{{$jugador->nombre}}</td>
                            <td>{{$jugador->numero}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

