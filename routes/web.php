<?php

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

//Route
Route::middleware('auth')->group(function() {
    Route::get('/rooms', \App\Http\Livewire\Room\Index::class);
    Route::get('/rooms/{room:slug}' , \App\Http\Livewire\Room\SingleRoom::class)->name('single.room');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';