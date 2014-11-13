<?php namespace Acme\Modules\User\Validation;

use Acme\Utilities\Validation\Validation;

class RegisterUserValidation extends Validation {

    public function getRules()
    {
        $rules = [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ];

        return $rules;
    }

} 