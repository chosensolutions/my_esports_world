<?php namespace Acme\Modules\User\Commands\Register;

use Acme\Modules\User\Validation\RegisterUserValidation;

class RegisterUserValidator {

    protected $registrationValidation;

    function __construct(RegisterUserValidation $registrationValidation)
    {
        $this->registrationValidation = $registrationValidation;
    }

    public function validate($command)
    {
        var_dump('validate');
        //$this->registrationValidation->validate($credentials);
    }

} 