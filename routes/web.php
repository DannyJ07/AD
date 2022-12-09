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
Route::get('/calendario', function () {
    return view('navbar/calendar');
});
Route::get('/contactos', function () {
    return view('navbar/contact');
});
Route::get('/juegos', function () {
    return view('navbar/games');
});
Route::get('/noticias', function () {
    return view('navbar/notices');
});
Route::get('/posiciones', function () {
    return view('navbar/position');
});
Route::get('/normativas', function () {
    return view('navbar/normativa');
});
Route::get('/patrocinadores', function () {
    return view('navbar/patrocinadores');
});


Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dash',function () {
    return view('dash.index');

})->name('dash');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('participants', App\Http\Controllers\ParticipantController::class);
Route::resource('games', App\Http\Controllers\GameController::class);
Route::resource('teams', App\Http\Controllers\TeamController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('modes', App\Http\Controllers\ModeController::class);
Route::resource('inscriptionsgrs', App\Http\Controllers\InscriptionsgrController::class);
Route::resource('inscriptionsins', App\Http\Controllers\InscriptionsinController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
