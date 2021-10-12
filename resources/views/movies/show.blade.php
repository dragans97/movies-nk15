@extends('layouts.app')
@section('title')
    {{ $movie->title }}
@endsection
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>{{ $movie->title }} ({{ $movie->year }})</h1>
            <hr>
            <p>Genre: {{ $movie->genre }}</p>
            <p>Director: {{ $movie->director }}</p>
            <p>Storyline <br> {{ $movie->storyline }}</p>
        </div>
        <div class="col-12 mt-2">
            <h2>Comments</h2>
            @forelse ($movie->comments as $comment)
                <p>{{ $comment->content }}</p>
            @empty
                <p>There's no comments for this post.</p>
            @endforelse
        </div>
    </div>
@endsection