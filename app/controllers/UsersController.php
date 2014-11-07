<?php

class UsersController extends BaseController {

    public function getAuthUser()
    {
        return Auth::user();
    }

    public function register()
    {
        return 'register the user';
    }

    public function isLoggedIn()
    {
        if (Auth::check())
        {
            return 'user is logged in';
        }
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

}
