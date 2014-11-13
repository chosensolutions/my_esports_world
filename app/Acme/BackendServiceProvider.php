<?php namespace Acme;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

    /**
     * Registers and Binds all the relevant interfaces in the IOC container;
     * making sure all Repositories and any modules and/or utilities will
     * automatically be resolved via the IOC container
     */
    public function register()
    {
        $this->app->bind(
            'Acme\Utilities\Authentication\AuthenticationInterface',
            'Acme\Utilities\Authentication\EloquentAuthenticationRepository'
        );

        $this->app->bind(
            'Acme\Utilities\User\UserRepositoryInterface',
            'Acme\Utilities\User\EloquentUserRepository'
        );

        $this->app->bind(
            'Acme\Modules\Message\MessageInterface',
            'Acme\Modules\Message\EloquentMessageRepository'
        );

        $this->app->bind(
            'Acme\Modules\Company\CompanyInterface',
            'Acme\Modules\Company\EloquentCompanyRepository'
        );

        $this->app->bind(
            'Acme\Modules\Manager\ManagerInterface',
            'Acme\Modules\Manager\EloquentManagerRepository'
        );

        $this->app->bind(
            'Acme\Modules\Tenant\TenantInterface',
            'Acme\Modules\Tenant\EloquentTenantRepository'
        );

        $this->app->bind(
            'Acme\Modules\Property\PropertyInterface',
            'Acme\Modules\Property\EloquentPropertyRepository'
        );

        $this->app->bind(
            'Acme\Modules\Payment\PaymentMethodInterface',
            'Acme\Modules\Payment\EloquentPaymentMethodRepository'
        );

        $this->app->bind(
            'Acme\Modules\Payment\PaymentTransactionInterface',
            'Acme\Modules\Payment\EloquentPaymentTransactionRepository'
        );
    }
}