<table>
    <tr>
        <td>Categoria</td>
        <td>Local</td>
        <td>M</td>
        <td>VS</td>
        <td>M</td>
        <td>Visitante</td>
        <td>Dia</td>
        <td>Fecha</td>
        <td>Hora</td>
        <td>Campo</td>
        <td>Jornada</td>
        <td>Observaciones</td>
        <td>Error</td>
    </tr>

    [{"id":139,
    "Torneo_id":7,
    "Local":293,
    "Visitante":298,
    "marcadorLocal":0,"marcadorVisitante":0,"hora":null,"notas":null,"campo":null,"jornada":1,"fijado":null,"fecha":null,"status":null,"verifica":null,"equipol":{"id":293,"idIst":13,"nombre":"ESN INTERLOMAS 3\u00ba FSO","nombreCoach":"","nombreCoachAsistente":"","genero":"F","activo":1},"equipov":{"id":298,"idIst":6,"nombre":"CEFOR SANTOS BLANCO FSO","nombreCoach":"","nombreCoachAsistente":"","genero":"F","activo":1}},{"id":140,"Torneo_id":7,"Local":294,"Visitante":297,"marcadorLocal":0,"marcadorVisitante":0,"hora":null,"notas":null,"campo":null,"jornada":1,"fijado":null,"fecha":null,"status":null,"verifica":null,"equipol":{"id":294,"idIst":6,"nombre":"CEFOR SANTOS VERDE FSO","nombreCoach":"","nombreCoachAsistente":"","genero":"F","activo":1},"equipov":{"id":297,"idIst":36,"nombre":"FUT ACADEMY FSO","nombreCoach":"","nombreCoachAsistente":"","genero":"F","activo":1}},{"id":141,"Torneo_id":7,"Local":295,"Visitante":296,"marcadorLocal":0,"marcadorVisitante":0,"hora":null,"notas":null,"campo":null,"jornada":1,"fijado":null,"fecha":null,"status":null,"verifica":null,"equipol":{"id":295,"idIst":32,"nombre":"VISTA HERMOSA FSO","nombreCoach":"","nombreCoachAsistente":"","genero":"F","activo":1},"equipov":{"id":296,"idIst":34,"nombre":"LEONES NEGROS FSO","nombreCoach":"","nombreCoachAsistente":"","genero":"F","activo":1}}]

    @foreach($partidos as $i => $jornada)
        <tr>
            <td colspan="13"> Jornada {{$i}}</td>
        </tr>
        @foreach($jornada as $partido)
        <tr>
            <td>Categoria</td>
            <td>{{$partido->equipol->nombre}}</td>
            <td>{{$partido->marcadorLocal}}</td>
            <td>VS</td>
            <td>{{$partido->marcadorVisitante}}</td>
            <td>{{$partido->equipov->nombre}}</td>
            <td>{{\Carbon\Carbon::parse($partido->fecha)->format('l')}}</td>
            <td>{{$partido->fecha}}</td>
            <td>{{$partido->hora}}</td>
            <td>Campo</td>
            <td>Jornada</td>
            <td>Observaciones</td>
            <td>Error</td>
        </tr>
        @endforeach
    @endforeach
</table>
