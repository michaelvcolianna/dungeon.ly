<?php

use App\Models\Character;
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

Route::get('/debug', function() {
    dd(config('dnd'));
});

Route::get('/', function() {
    return (auth()->user())
        ? redirect()->route('dashboard')
        : view('welcome')
        ;
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/characters/{character}', function(Character $character) {
        return view('character', ['character' => $character]);
    })->name('character.view');
});
