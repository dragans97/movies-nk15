<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content'];
    
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
