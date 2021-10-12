@extends('layouts.app')
@section('title', 'Add New Movie')
    
@section('content')
    <h1>Add New Movie</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aliquam earum vel soluta repellat laborum eaque quis in similique quibusdam ut enim nihil tempora, voluptas maxime quam blanditiis. Fuga, porro!</p>
    <hr>
    <form action="" class="my-3">
        <div class="form-group mb-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Title..">
            @error('title')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-2">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" placeholder="Genre..">
            @error('genre')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-2">
            <label for="director">Director</label>
            <input type="text" name="director" id="director" class="form-control" placeholder="Director..">
            @error('director')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-2">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" placeholder="Year...">
            @error('year')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-2">
            <label for="storyline">Storyline</label>
            <textarea name="storyline" id="storyline" cols="30" rows="10" class="form-control" placeholder="Describe movie.."></textarea>
            @error('storyline')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection