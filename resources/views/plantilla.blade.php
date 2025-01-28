<html>

<head>
    <title>@yield('titulo')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    @include('partials.nav')
    <div class="container">
        @yield('contenido')
    </div>
    @include('partials.footer')
</body>

</html>