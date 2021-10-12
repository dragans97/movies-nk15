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
        <div class="col-12 mt-2">
            <form action="{{ route('create-comment', ['movie' => $movie->id]) }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="content">Add comment: </label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Write.."></textarea>
                    @error('content') 
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection