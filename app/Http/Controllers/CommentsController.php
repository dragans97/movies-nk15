<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Movie;

class CommentsController extends Controller
{
    public function store(Movie $movie, CommentRequest $request){
        $data = $request->validated();
        $movie->comments()->create($data);
        session()->flash('success', 'You have successfully added comment.');
        
        return redirect()->back();
    }
}
