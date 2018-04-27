<?php
\Carbon\Carbon::setLocale('es_ES.UTF-8');
?>
<table>
    @foreach($partidos as $fecha => $dia)
        <tr>
            <td>{{ (new \Carbon\Carbon($fecha) )->toFormattedDateString() }}</td>
        </tr>
        @foreach($dia as $item )
        <tr>
            <td>{{$item->torneo->nombre}}</td>
            <td>{{$item->equipol->nombre}}</td>
            <td>{{$item->marcadorLocal}}</td>
            <td>VS</td>
            <td>{{$item->marcadorVisitante}}</td>
            <td>{{$item->equipov->nombre}}</td>
            <td>{{$item->fecha}}</td>
            <td>{{$item->hora}}</td>
            <td>{{$item->campo}}</td>
            
        </tr>
        @endforeach
    @endforeach
</table>
