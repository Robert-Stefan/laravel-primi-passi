<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>

    <body>
        <header>
            <h1>HomePage</h1>
        </header>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, quisquam inventore est temporibus similique incidunt ex maxime rerum alias sed tenetur nulla laborum expedita magni enim praesentium earum quam cupiditate.
        </p>
        <a href="{{ route('about') }}">About</a>
    </body>
</html>
