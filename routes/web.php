<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', [ MoviesController::class, 'index' ])->name('movies');
Route::get('/movies/create', [ MoviesController::class, 'create' ])->name('create-movie');
Route::post('movies/create', [ MoviesController::class , 'store'])->name('store-movie');
Route::get('/movies/{movie}', [ MoviesController::class, 'show' ])->name('single-movie');
Route::post('movies/{movie}/comments', [ CommentsController::class, 'store' ])->name('create-comment');
Route::get('/genres/{genre}', [ GenresController::class, 'show' ])->name('genres');
