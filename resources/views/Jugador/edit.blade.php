<form action="{{url('/Jugador/'.$jugador->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}

@include('Jugador.form');


 
</form>


