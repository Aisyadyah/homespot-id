<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="assets/app.css">
        <link href="https://www.homespot.id/static/css/main.85114abc.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        @include('template.additional-style')

        <!-- Scripts -->
        <script defer="defer" src="https://www.homespot.id/static/js/main.68a75f01.js"></script>
    </head>
    <body class="antialiased">
        @include('template.nav')
        <div class="container mx-auto">
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
