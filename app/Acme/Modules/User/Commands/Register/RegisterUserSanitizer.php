<?php namespace Acme\Modules\User\Commands\Register;

use Laracasts\Commander\CommandBus;

class RegisterUserSanitizer implements CommandBus {

    /**
     * Execute a command
     *
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        var_dump('sanitize');
    }
}