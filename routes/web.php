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

    $navbar = [
        'navbar' => config('navbar')
    ];

    return view('home', $navbar);
}) -> name('home');

// Comics
Route::get('/comics', function () {

    $comics = [
        'comics' => config('comics')
    ];
    $navbar = [
        'navbar' => config('navbar')
    ];

    return view('comics', $comics, $navbar);
}) -> name('comics');
