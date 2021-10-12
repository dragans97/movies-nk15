@extends('layouts.app')
@section('title')
    {{ $movie->title }}
@endsection
    
@section('content')
    <h1>{{ $movie->title }} ({{ $movie->year }})</h1>
    <hr>
    <p>Genre: {{ $movie->genre }}</p>
    <p>Director: {{ $movie->director }}</p>
    <p>Storyline <br> {{ $movie->storyline }}</p>
@endsection