<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    @forelse ($movies as $movie)
        <div>
            <h1>{{ $movie->title }}</h1>
            <p>{{ $movie->storyline }}</p>

            <a href="{{ route('single-movie', ['movie' => $movie->id])}}">More Info</a>
        </div>
    @empty
        <div>
            <p>There's no movies.</p>
        </div>
    @endforelse
</body>
</html>