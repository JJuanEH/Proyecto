<form method="post" action="{{url('/Jugador') }}" enctype="multipart/form-data">
@csrf  

@include('Jugador.form');

  

</form>