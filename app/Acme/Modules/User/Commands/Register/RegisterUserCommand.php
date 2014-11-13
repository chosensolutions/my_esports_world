<?php namespace Acme\Modules\User\Commands\Register;

class RegisterUserCommand {

    public $email;
    public $password;

    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

} 