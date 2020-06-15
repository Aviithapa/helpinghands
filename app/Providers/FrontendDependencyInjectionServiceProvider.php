<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 5/29/2018
 * Time: 7:58 PM
 */
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FrontendDependencyInjectionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Slider dependency
         */
        $this->app->bind(
            \App\Modules\Frontend\Website\Slider\Repositories\SliderRepository::class,
            \App\Modules\Frontend\Website\Slider\Repositories\EloquentSliderRepository::class
        );

    }
}