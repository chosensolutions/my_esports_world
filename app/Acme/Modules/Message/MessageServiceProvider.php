<?php namespace Acme;

use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider {

    /**
     * Registers and Binds all the relevant interfaces in the IOC container;
     * making sure all Repositories and any modules and/or utilities will
     * automatically be resolved via the IOC container
     */
    public function register()
    {
        /*
        $this->app->bind(
            'Acme\Modules\User\Repositories\UserRepositoryInterface',
            'Acme\Modules\User\Repositories\EloquentUserRepository'
        );
        */
    }
}