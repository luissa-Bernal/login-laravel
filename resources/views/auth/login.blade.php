@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
<style>/* Estilos para el fondo */
    body {
      background-color: #f8d7da; /* Rosado pastel */
    }
    
    /* Estilos para la tarjeta */
    .card {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    /* Estilos para el encabezado de la tarjeta */
    .card-header {
      background-color: #e64980; /* Rosado oscuro */
      color: #fff;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      padding: 20px;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
    }
    
    /* Estilos para el cuerpo de la tarjeta */
    .card-body {
      padding: 40px;
    }
    
    /* Estilos para los campos de entrada */
    .form-control {
      border: none;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
      background-color: #f9f9f9; /* Blanco */
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
    }
    
    .form-control:focus {
      outline: none;
      background-color: #e6e6e6; /* Rosado claro */
    }
    
    /* Estilos para el botón */
    .btn-primary {
      background-color: #e64980; /* Rosado oscuro */
      border: none;
      border-radius: 10px;
      padding: 15px;
      width: 100%;
      font-size: 18px;
      font-weight: bold;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .btn-primary:hover {
      background-color: #d2326b; /* Rosado más oscuro */
    }
    
    /* Estilos para el enlace de "Olvidé mi contraseña" */
    .forgot-password {
      text-align: center;
      margin-top: 20px;
      font-size: 16px;
      color: #e64980; /* Rosado oscuro */
    }
    
    .forgot-password a {
      color: #e64980; /* Rosado oscuro */
      text-decoration: none;
    }
    
    .forgot-password a:hover {
      text-decoration: underline;
    }
    </style>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
