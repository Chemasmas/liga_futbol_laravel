<table>
    <tr></tr>
    <tr>
        <td></td>
        <td style="background-color: #1e90ff">Equipos</td>
    </tr>
    @foreach($participantes as $participante)
        <tr>
            <td></td>
            <td>
                {{$participante->nombre}}
            </td>
        </tr>
    @endforeach
    <tr></tr>
    <tr></tr>
    @foreach($partidos as $j => $partido)
        <tr>
            <td></td>
            <td colspan="4" style="background-color: #1e90ff">
                Jornada {{$j}}
            </td>
        </tr>
        <tr></tr>
        @foreach($partido as $juego)
        <tr>
            <td></td>
            <td>{{$juego->equipol->nombre}}</td>
            <td style="background-color: #1e80ff">{{$juego->marcadorLocal}}</td>
            <td>{{$juego->equipov->nombre}}</td>
            <td style="background-color: #1e80ff">{{$juego->marcadorVisitante}}</td>
        </tr>
        @endforeach
        <tr></tr>
    @endforeach
</table>