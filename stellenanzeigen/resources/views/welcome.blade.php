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
    <style>
    </style>
</head>
<body class="antialiased">
    <h1>STELLENANZEIGEN</h1>
    <button><a href="{{ url('/login') }}">LOGIN</a></button>
    <button><a href="{{ url('/signup') }}">SIGNUP</a></button>

    <h3><a href="{{ url('/jobs') }}">All Jobs</a></h3>
    <h3><a href="{{ url('/companies') }}">All Companies</a></h3>
</body>
</html>
