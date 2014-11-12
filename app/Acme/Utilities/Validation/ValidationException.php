<?php namespace Acme\Utilities\Validation;

use Validator;

class ValidationException extends \Exception {

    function __construct($validator)
    {
        $this->message = 'Custom Message: The validation has failed';
        $this->validator = $validator;
    }

    public function getErrors()
    {
        return $this->validator->messages();
    }
}