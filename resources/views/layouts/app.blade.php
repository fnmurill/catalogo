<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <header>
                    <div class="container">
                        <div id="marca">
                            <h1><span class="resaltado">All-in-One Service</span> </h1>
                            <h2>Diseño, Desarrollo Web y Más!</h2>
                        </div>
                        <nav class="menu">
                            <ul>
                                <li><a href="/">Inicio</a></li>
                                <li><a href="/about_us">Nosotros</a></li>
                                <li><a href="/services">Servicios</a></li>
                                <li><a href="/contact">Contacto</a></li>
                                <li><a href="/register">Login</a></li>
                            </ul>
            
                        </nav>
                    </div>
                </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
