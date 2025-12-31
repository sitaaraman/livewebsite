<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Livewebsite') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- BASIC CSS (IMPORTANT) -->
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            padding: 40px;
        }

        input {
            display: block;
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #000;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
