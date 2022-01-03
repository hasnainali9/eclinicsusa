<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Navbar;
use View;

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
        View::composer('*', function($view)
        {
            $navbars = Navbar::where('submenu',0)->orderBy('order')->get();
            $view->with('navbars', $navbars);
        });
    }
}
