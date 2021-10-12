@extends('layouts.app')
@section('title', 'Movies')
    
@section('content')
    <div class="row">
       <div class="col-lg-8 col-sm-12">
            <div class="row">
                @forelse ($movies as $movie)
        
                <div class="col-lg-4 col-sm-12 my-2">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">({{ $movie->year }})</h6>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($movie->storyline, 100, $end='...') }}</p>
                        <a href="{{ route('single-movie', ['movie' => $movie->id])}}" class="btn btn-primary">More Info</a>
                        </div>
                    </div>
                </div>
            
                @empty
                        <div class="col-12">
                            <p>There's no movies.</p>
                        </div>
                @endforelse
            </div>
       </div>
       <div class="col-lg-4 col-sm-12">
           <h1>Latest added</h1>
           @foreach ($latestMovies as $item)
                <a href="{{ route('single-movie', ['movie' => $item->id ]) }}" class="d-block">{{ $item->title }} ({{$item->year}})</a>
           @endforeach
       </div>
    </div>
@endsection