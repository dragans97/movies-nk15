<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$movie->title}}</title>
</head>
<body>
    <h1>{{ $movie->title }} ({{ $movie->year }})</h1>
    <hr>
    <p>Genre: {{ $movie->genre }}</p>
    <p>Director: {{ $movie->director }}</p>
    <p>Storyline <br> {{ $movie->storyline }}</p>
</body>
</html>