<?php

namespace App\Providers;

use App\Modules\Backend\Countries\Country\Repositories\CountryRepository;
use App\Modules\Backend\Countries\Country\Repositories\EloquentCountryRepository;
use App\Modules\Backend\StudentApplicant\Repositories\EloquentStudentApplicantRepository;
use App\Modules\Backend\StudentApplicant\Repositories\StudentApplicantRepository;
use App\Modules\Backend\Schools\SchoolDiscipline\Repositories\EloquentSchoolDisciplineRepository;
use App\Modules\Backend\Schools\SchoolDiscipline\Repositories\SchoolDisciplineRepository;
use App\Modules\Backend\Schools\SchoolImages\Repositories\EloquentSchoolImageRepository;
use App\Modules\Backend\Schools\SchoolImages\Repositories\SchoolImageRepository;
use App\Modules\Backend\StudentApplicantApplications\Repositories\EloquentStudentApplicantApplicationRepository;
use App\Modules\Backend\StudentApplicantApplications\Repositories\StudentApplicantApplicationRepository;
use App\Modules\Backend\StudentApplicantFile\Repositories\EloquentStudentApplicantFileRepository;
use App\Modules\Backend\StudentApplicantFile\Repositories\StudentApplicantFileRepository;
use App\Modules\Backend\StudentApplicationFile\Repositories\EloquentStudentApplicationFileRepository;
use App\Modules\Backend\StudentApplicationFile\Repositories\StudentApplicationFileRepository;
use App\Modules\Backend\StudentApplicationNote\Repositories\EloquentStudentApplicationNoteRepository;
use App\Modules\Backend\StudentApplicationNote\Repositories\StudentApplicationNoteRepository;
use App\Modules\Backend\Website\Post\Repositories\EloquentPostRepository;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;

use App\Modules\Backend\Schools\SchoolProgram\Repositories\EloquentSchoolProgramRepository;
use App\Modules\Backend\Schools\SchoolProgram\Repositories\SchoolProgramRepository;
use App\Modules\Backend\Schools\SchoolScholarship\Repositories\EloquentSchoolScholarshipRepository;
use App\Modules\Backend\Schools\SchoolScholarship\Repositories\SchoolScholarshipRepository;

//use App\Modules\Backend\Website\Post\Repositories\EloquentPostRepository;
//use App\Modules\Backend\Website\Post\Repositories\PostRepository;
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
        
    }
}
