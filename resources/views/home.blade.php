@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
<style>/* Estilos para el fondo */
    body {
      background-color: #f8d7da; /* Rosado pastel */
    }
    
    /* Estilos para el contenedor principal */
    .container {
      margin-top: 50px; /* Espacio en la parte superior */
    }
    
    /* Estilos para la tarjeta */
    .card {
      background-color: #fff; /* Blanco */
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
      color: #555; /* Color de texto oscuro */
    }
    
    /* Estilos para el mensaje de éxito */
    .alert-success {
      background-color: #ffe8f2; /* Rosado claro */
      border-color: #ffb6d4; /* Rosado más oscuro */
      color: #721c4b; /* Rosado más oscuro */
    }
    
    /* Estilos para el contenido dentro de la tarjeta */
    .card-body p {
      margin-bottom: 20px;
    }
    
    /* Estilos para el enlace dentro de la tarjeta */
    .card-body a {
      color: #e64980; /* Rosado oscuro */
      text-decoration: underline;
    }
    
    .card-body a:hover {
      color: #d2326b; /* Rosado más oscuro al pasar el mouse */
    }
    </style>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <style></style>
</div>
@endsection
