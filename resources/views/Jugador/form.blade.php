<label for="Nombre"> Nombre Completo</label>
  <input type="text" name="nombre_jugador" value="{{ isset($jugador->nombre_jugador)?$jugador->nombre_jugador:'' }}" id="nombre_jugador">
  <br>
  <label for="Edad"> Edad</label>
  <input type="text" name="edad" value="{{isset($jugador->edad)?$jugador->edad:''}}" id="edad">
  <br>
  <label for="NumeroJugador"> Número de Jugador</label>
  <input type="text" name="numero" value="{{isset($jugador->numero)?$jugador->numero:''}}" id="numero">
  <br>
  <label for="Ciudad">Ciudad</label>
  <input type="text" name="ciudad" value="{{isset($jugador->ciudad)?$jugador->ciudad:''}}"  id="ciudad">
  <br>
  <label for="Nickname">Apodo del Jugador</label>
  <input type="text" name="nickname" value="{{isset($jugador->nickname)?$jugador->nickname:''}}" id="nickname">
  <br>
  <label for="Estatura">Estatura</label>
  <input type="text" name="estatura" value="{{isset($jugador->estatura)?$jugador->estatura:''}}" id="estatura">
  <br>
  
  <label for="Equipo">Equipo</label>
     <select id="equipo" name="equipo">
          <option >hola2</option>
      </select>
  <br>
  <label for="Posicion">Posición del Jugador</label>
      <select name="id_posicion" >
            @foreach ($posiciones as $posicion)
            <option value="{{isset($posicion->id)?$posicion->id :'selected'}}">{{$posicion['nombre_posicion']}}</option>
            @endforeach
      </select>
  <br>
@if(isset($jugador->foto))
  <label for="Foto">Foto del Jugador</label>
  <img src="{{asset('storage').'/'.$jugador->foto}}" width="100" alt="">
@endif
  <input type="file" value="" name="foto" id="foto">
  <br>

  <input type="submit"  value="enviar">
<br>
<a href="{{ url('Jugador/') }}">Regresar</a>

