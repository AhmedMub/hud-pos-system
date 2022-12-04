<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HUD | @yield('title','Dashboard')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('custom/override-css.css')}}">

    @livewireStyles
</head>

<body class="font-sans antialiased bg-light">

    <!-- Page Content -->
    <main class="container my-5">
        @yield('content')
    </main>
    <!-- Scripts -->
    <script src="{{ asset('custom/override-js.js') }}" defer></script>
    @livewireScripts
</body>

</html>
