<?php namespace Acme\Modules\User;

use Acme\Utilities\Validation\Validation;

class RegistrationValidation extends Validation {

    public function getRules()
    {
        $rules = [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ];

        return $rules;
    }

} 