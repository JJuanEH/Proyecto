@extends('base');

@section('content')

  <button 
  class="btn btn-primary m-5" 
  type="button" 
  data-bs-toggle="offcanvas"
  data-bs-target="#offcanvas"
  aria-controls="offcanvas"
  >Mostrar menu</button>

  {{-- offcanvas --}}
  <div class="offcanvas offcanvas-start" 
  tabindex="-1"
  id="offcanvas"
  aria-labelledby="offcanvasLabel">

  <div class="offcanvas-header">

 <h5 class="offcanvas-title">Hola</h5>

  </div>

  </div>

@endsection