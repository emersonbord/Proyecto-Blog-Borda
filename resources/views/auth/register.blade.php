@extends('layouts.app')

@section('content')
<div class="container" class="FondoRegister">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Registrarse</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-label-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name">Nombre de usuario</label>
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

              <div class="form-label-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <label for="email">Correo electrónico</label>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              
              <hr>

              <div class="form-label-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <label for="password">Contraseña</label>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              
              <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm">Confirmar contraseña</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrarse</button>
              <a class="d-block text-center mt-2 small letraR" style="font-size: 14px" href="/login">Iniciar sesión</a>
              <hr class="my-4">
              <a class="btn btn-lg btn-dark btn-block text-uppercase" href="/"> Volver a inicio</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
