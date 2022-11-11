<?php

use App\Models\Character;
use App\Models\Dice;
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

Route::get('/', function() {
    return (auth()->user())
        ? redirect()->route('dashboard')
        : view('welcome')
    ;
})->name('welcome');

Route::get('/clear', function() {
    session()->invalidate();

    return redirect()->route('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function() {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::group(['as' => 'characters.', 'prefix' => 'characters'], function() {
        Route::view('/', 'characters')->name('listing');
        Route::get('/{id}', function($id) {
            $character = Character::find($id);

            abort_unless($character->user_id === auth()->id(), 401);

            return view('character-sheet', [
                'character' => $character,
            ]);
        })->name('sheet');
    });

    Route::view('/dice', 'dice')->name('dice');
});
