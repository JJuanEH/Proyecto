<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!--Estilos-->
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
            <div class="justify-content-center align-items-center">
            </div>
            <div class="container h-50 rounded shadow">
                <div class="row align-items-stretch">

                    <div class="col-7 bg text-center my-2">
                        <img class="img-fluid" src="{!! asset('images/img4.jpg') !!}" width="650" alt="">
                    </div>

                    <div class="col-5">
                        <h2 class="fw-bold text-white text-center py-4">Iniciar Sesion</h2>
                        <div class="mb-2 text-md-center">
                        </div>

                        <div class="card bg-transparent text-white" style="width: 23rem;">
                            <div class=" card-body" style="width: 28rem;">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row-mb-4 ">
                                        <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Usuario') }}</label>

                                        <div class="col-md-10 ">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row-py-4">
                                        <label for="password" class="col-md-7 col-form-label text-md-start">{{ __('Contraseña') }}</label>

                                        <div class="col-md-10 rounded">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('Recordarme') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Recordarme') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-md-8 offset-md-2">
                                            <button type="submit" class="text-white rounded-pill btn-block" id="boton">
                                                {{ __('Ingresar') }}
                                            </button><br>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('¿Olvido su contraseña?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


</body>