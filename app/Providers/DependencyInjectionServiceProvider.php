<?php

namespace App\Providers;

use App\Models\Website\Post;
use App\Modules\Backend\Website\Event\Repositories\EloquentEventRepository;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use App\Modules\Backend\Website\Post\Repositories\EloquentPostRepository;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Backend\Website\RequestQuote\Repositories\EloquentGetTouchRepository;
use App\Modules\Backend\Website\RequestQuote\Repositories\GetTouchRepository;
use Illuminate\Support\ServiceProvider;

class DependencyInjectionServiceProvider extends ServiceProvider
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
         * User dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Authentication\User\Repositories\UserRepository::class,
            \App\Modules\Backend\Authentication\User\Repositories\EloquentUserRepository::class
        );

        /**
         * Permission dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Authentication\Permission\Repositories\PermissionRepository::class,
            \App\Modules\Backend\Authentication\Permission\Repositories\EloquentPermissionRepository::class
        );

        /**
         * Role dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Authentication\Role\Repositories\RoleRepository::class,
            \App\Modules\Backend\Authentication\Role\Repositories\EloquentRoleRepository::class
        );

        /**
         * Site Setting dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Settings\SiteSetting\Repositories\SiteSettingRepository::class,
            \App\Modules\Backend\Settings\SiteSetting\Repositories\EloquentSiteSettingRepository::class
        );

        /**
         * Slider dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Website\Slider\Repositories\SliderRepository::class,
            \App\Modules\Backend\Website\Slider\Repositories\EloquentSliderRepository::class
        );
        /**
        CMS
         * Banner dependency
         */
        $this->app->bind(
            PostRepository::class,
            EloquentPostRepository::class
        );
        /**CMS
         * Banner dependency
         */
        $this->app->bind(
            PostRepository::class,
            EloquentPostRepository::class
        );

        /**
        *Request
         */
        $this->app->bind(
            \App\Modules\Backend\Website\GetTouch\Repositories\GetTouchRepository::class,
            \App\Modules\Backend\Website\GetTouch\Repositories\EloquentGetTouchRepository::class
        );

        $this->app->bind(
            EventRepository::class,
            EloquentEventRepository::class
        );

    }
}
