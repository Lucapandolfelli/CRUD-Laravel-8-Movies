<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ListMoviesController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ListDirectorsController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\ListActorsController;

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
    return view('website.home');
})->name('home');

Route::get('/luca', function () {
    $users = User::all();
    dd($users);
});

Route::get('/movies', [App\Http\Controllers\ListMoviesController::class, 'index'])->name('movies');
Route::get('/movie/{id}', [ListMoviesController::class, 'show'])->name('movie');
Route::get('/genre/{genre}', [ListMoviesController::class, 'genre'])->name('genre');

Route::get('/directors', [App\Http\Controllers\ListDirectorsController::class, 'index'])->name('directors');
Route::get('/director/{id}', [ListDirectorsController::class, 'show'])->name('director');

Route::get('/actors', [App\Http\Controllers\ListActorsController::class, 'index'])->name('actors');
Route::get('/actor/{id}', [ListActorsController::class, 'show'])->name('actor');

Route::get('/about', function () {
    return view('website.about');
})->name('about');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/dashboard/movies', MovieController::class);
    Route::resource('/dashboard/directors', DirectorController::class);
    Route::resource('/dashboard/genres', GenreController::class);
    Route::resource('/dashboard/actors', ActorController::class);
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});


