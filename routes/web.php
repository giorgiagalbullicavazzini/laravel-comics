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

// Homepage
Route::get('/', function () {
    return view('home');
}) -> name('home');

// Comics
Route::get('/comics', function () {

    $comics = [
        'comics' => config('comics')
    ];

    return view('comics', $comics);
}) -> name('comics');
