<?php

use Acme\Modules\User\RegistrationValidation;

class UsersController extends \BaseController {

    protected $registrationValidation;

    function __construct(RegistrationValidation $registrationValidation)
    {
        $this->registrationValidation = $registrationValidation;
    }

    public function register()
    {
        $credentials = Input::only('email', 'password');

        $this->registrationValidation->validate($credentials);

        $user = User::create($credentials);

        return $user;
    }

    public function login()
    {
        $credentials = Input::only('email', 'password');

        if (Auth::attempt($credentials))
        {
            return Response::json(Auth::user());
        }
    }

    public function logout()
    {
        Auth::logout();
    }

    public function isLoggedIn()
    {
        return Auth::check();
    }

    public function getAuthUser()
    {
        if ($this->isLoggedIn())
        {
            return Auth::user();
        }
    }

}
