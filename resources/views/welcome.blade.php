<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .jumbotron {
            background-color: #f8f9fa;
            padding: 3rem 2rem;
            border-radius: 10px;
        }
        .btn-custom {
            min-width: 150px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container text-center mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido a {{ config('app.name', 'Laravel') }}</h1>
            <p class="lead">Este es un sistema de gestión con autenticación de usuarios.</p>
            <hr class="my-4">
            <p>Regístrate o inicia sesión para acceder a las funcionalidades.</p>

            <div class="mt-4">
                @guest
                    <a class="btn btn-primary btn-lg btn-custom" href="{{ route('login') }}">Iniciar Sesión</a>
                    <a class="btn btn-success btn-lg btn-custom" href="{{ route('register') }}">Registrarse</a>
                @else
                    <a class="btn btn-info btn-lg btn-custom" href="{{ url('/dashboard') }}">Ir al Dashboard</a>
                @endguest
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Opcional, solo si usas componentes interactivos de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
