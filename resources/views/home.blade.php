<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Model Controller</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
    </head>
    <body>
        @foreach ($movies as $movie)
            <h2>{{$movie->title}}</h2>
            <h3>{{$movie->original_title}}</h3>
        @endforeach
    </body>
</html>
