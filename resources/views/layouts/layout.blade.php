<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    @include('layouts.header')


    @yield('content')

    <!--script necesarios-->
    {{-- <script src="{{ asset('js/header.js') }}"></script> --}}
    @include('layouts.footer')
</body>

</html>
