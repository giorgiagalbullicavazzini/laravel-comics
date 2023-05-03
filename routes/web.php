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

/*
|--------------------------------------------------------------------------
| Same data to all views
|--------------------------------------------------------------------------
|
| Data that are available on all different views are stored into
| app\Providers\AppServiceProvider.php into boot method.
|
*/

// Homepage
Route::get('/', function () {
    return view('home');
}) -> name('home');

// Characters
Route::get('/characters', function () {
    return view('characters');
}) -> name('characters');

// Collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
}) -> name('collectibles');

// Comics
Route::get('/comics', function () {

    $buy = config('buy');
    $comics = config('comics');

    return view('comics', compact('buy', 'comics'));
}) -> name('comics');

// Fans
Route::get('/fans', function () {
    return view('fans');
}) -> name('fans');

// Games
Route::get('/games', function () {
    return view('games');
}) -> name('games');

// Movies
Route::get('/movies', function () {
    return view('movies');
}) -> name('movies');

// News
Route::get('/news', function () {
    return view('news');
}) -> name('news');

// Shop
Route::get('/shop', function () {
    return view('shop');
}) -> name('shop');

// TV
Route::get('/tv', function () {
    return view('tv');
}) -> name('tv');

// Videos
Route::get('/videos', function () {
    return view('videos');
}) -> name('videos');