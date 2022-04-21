<a href="{{ url('Jugador/create') }}"> Registrar nuevo Jugador</a>

@if(Session::has('mensaje'))
{{Session::get('mensaje')}} 
@endif

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th>Numero DEl Jugador</th>
            <th>Ciudad</th>
            <th>Apodo</th>
            <th>Estatura</th>
            <th>Equipo</th>
            <th>Posicion</th>
            
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($Jugador as $jugadores)
        <tr>
            <td>{{ $jugadores->id}}</td>
            <td>
                <img src="{{asset('storage').'/'.$jugadores->foto}}" width="100" alt="">
                
            </td>
            <td>{{ $jugadores->nombre_jugador}}</td>
            <td>{{ $jugadores->edad}}</td>
            <td>{{ $jugadores->numero}}</td>
            <td>{{ $jugadores->ciudad}}</td>
            <td>{{ $jugadores->nickname}}</td>
            <td>{{ $jugadores->estatura}}</td>
            <td>{{ $jugadores->equipo}}</td>
            <td>{{ $jugadores->id_posicion}}</td>
            <td>
                
            <a href="{{url('/Jugador/'.$jugadores->id.'/edit') }}">
                Editar 
            </a>
             
            
            <form action="{{url('/Jugador/'.$jugadores->id) }}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

            </form>
        
        </td>
        </tr>
        @endforeach
    </tbody>
</table>