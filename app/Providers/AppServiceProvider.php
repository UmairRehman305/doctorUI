<?php

namespace App\Providers;
use App\Personal_info;
use Illuminate\Support\Facades\Auth;
use View;

use Illuminate\Support\ServiceProvider;
use App\Publication_info;

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
    }
}
