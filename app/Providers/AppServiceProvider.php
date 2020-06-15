<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        app('view')->composer('admin.*', function ($view) {
            $this->assignAdminUser($view);
        });
        app('view')->composer('recruiter.*', function ($view) {
            $this->assignAdminUser($view);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function assignAdminUser($view)
    {
        if(Auth::check()) {
            $authUser = Auth::user();
            $view->with(compact('authUser'));
        }

    }
}
