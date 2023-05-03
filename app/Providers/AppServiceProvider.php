<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $navbar = config('navbar');
        $navbar_comics = config('navbar-comics');
        $navbar_dc = config('navbar-dc');
        $navbar_shop = config('navbar-shop');
        $navbar_sites = config('navbar-sites');
        $socials = config('socials');

        View::share(compact('navbar', 'navbar_comics', 'navbar_dc', 'navbar_shop', 'navbar_sites', 'socials'));
    }
}
