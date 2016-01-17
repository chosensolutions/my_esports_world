<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'App\Acme\Modules\Authentication\Repositories\AuthenticationRepositoryInterface',
            'App\Acme\Modules\Authentication\Repositories\AuthenticationRepository'
        );

        $this->app->bind(
            'App\Acme\Modules\Profile\ProfileRepositoryInterface',
            'App\Acme\Modules\Profile\ProfileRepository'
        );

        $this->app->bind(
            'App\Acme\Modules\Authentication\Repositories\Social\FacebookAuthenticationRepositoryInterface',
            'App\Acme\Modules\Authentication\Repositories\Social\FacebookAuthenticationRepository'
        );

        $this->app->bind(
            'App\Acme\Modules\Authentication\Repositories\Social\TwitterAuthenticationRepositoryInterface',
            'App\Acme\Modules\Authentication\Repositories\Social\TwitterAuthenticationRepository'
        );
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
}
