<?php

use Acme\Modules\User\Commands\Register\RegisterUserCommand;

class UsersController extends \BaseController {

    public function register()
    {
        var_dump('preparing for the user instruction');
        $this->execute(RegisterUserCommand::class, Input::all(), [
            'Acme\Modules\User\Commands\Register\RegisterUserSanitizer'
        ]);

        //return $user;
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
