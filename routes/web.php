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
// Route::get('/', function () {

//      $navbar = [
//          'navbar' => config('navbar')
//      ];

//      return view('home', $navbar, $navbar_comics);
//  }) -> name('home');

// Comics
Route::get('/comics', function () {

    $comics = [
        'comics' => config('comics')
    ];
    $navbar = [
        'navbar' => config('navbar')
    ];
    $navbar_comics = [
        'navbar-comics' => config('navbar-comics')
    ];
    $navbar_dc = [
        'navbar-dc' => config('navbar-dc')
    ];
    $navbar_shop = [
        'navbar-shop' => config('navbar-shop')
    ];
    $navbar_sites = [
        'navbar-sites' => config('navbar-sites')
    ];

    return view('comics', $comics, $navbar, $navbar_comics, $navbar_dc, $navbar_shop, $navbar_sites);
}) -> name('comics');
