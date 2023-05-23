<?php

use App\Http\Livewire\MoviesEdit;
use App\Http\Livewire\MoviesIndex;
use App\Http\Livewire\MoviesCreate;
use Illuminate\Support\Facades\Route;
#use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/movies', MoviesIndex::class)->name('movies.index')->middleware('throttle:60,1');
    Route::get('/movies/create', MoviesCreate::class)->name('movies.create');
    Route::get('/movies/{id}/edit', MoviesEdit::class)->name('movies.edit');
    
    #Route::get('/movies/details/{id}', [MovieController::class, 'details'])->name('movies.details');
});
