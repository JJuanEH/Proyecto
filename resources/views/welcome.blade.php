<!DOCTYPE html>
<html lang="en">

<head>
  <title>Inicio</title>

  <!--Stilos-->
  <style>
    body {
      background: url('../public/images/img.jpg');
      background-size: 215vh;
    }

    #boton {
      background-color: #8686BF;
    }
  </style>
</head>

<body>

  @extends('layouts.app')
  @section('content')

  <div class="d-flex justify-content-center align-items-center">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
      <div class="d-flex justify-content-center align-items-center h-100">
      </div>
      <div class="container h-50 rounded shadow">
        <div class="row align-items-stretch">

          <div id="info">
            <div class="container-md p-5 ">
              <div class="row pt-5 ">
                <h3 class="text-left text-white fw-bold pb-5 pt- hl">Informacion</h3>
              </div>

              <div class="row">
                <div class="col-sm">
                  <h5 class="text text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur labore, cumque voluptatem distinctio est a possimus. Repellat ipsam aspernatur iure debitis maiores, amet iste itaque modi nulla laudantium labore in.</h5>

                </div>
                <div class="col-sm">
                  <img class="card w-100" src="{!! asset('images/im5.jpg') !!}">
                </div>
                <footer class="bg-dark text-white py-4">
   <div class="contaier">
     <nav class="row">
       <a href="#" class="col-3 ml-auto ">
         <img src="img/logo.png" alt="" class="nav-item aling-center" width="60">
       </a>
       <ul class="col-3 list-unstyled ml-auto">
         <li class="font-weight-bold text-uppercase">Nosotros</li>
         <li>
           <a href="#" class="text-reset  text-decoration-none">Jesús Palma & Romero, SA de CV, somos una empresa internacional de servicios que cuenta con profesionales altamente capacitados en México y Alemania en los campos de la Tecnología de la información y Comunicación y Telecomunicaciones</a>
         </li>
       </ul>
       <ul class="col-3 list-unstyled">
         <li class="font-weight-bold text-uppercase">Direcccion</li>
         <li>
           <a href="#" class="text text-decoration-none"><h6>Constitución de 1917 Mz 9 Lt 3, Col. Prof. Arturo López, CP 01620 Delegación Álvaro Obregón, CDMX</h6></a>
         </li>
       </ul>
       <ul class="col-2 list-unstyled">
         <li class="font-weight-bold text-uppercase">Contacto</li>
         <li class="d-flex justify-content-between">
           <a href="#" class="text">
           <img src="img/facebook.png" alt="" width="30">
           </a>
           <a href="#" class="text-reset">
             <img src="img/gmail.png" alt="" width="30">
           </a>
           <a href="#" class="text-reset">
             <img src="img/instagram.png" alt="" width="30">
           </a>
         </li>
       </ul>
     </nav>
   </div>

 </footer>
                @endsection
