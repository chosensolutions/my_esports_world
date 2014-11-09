<?php

class UsersController extends BaseController {

    public function register()
    {
        $credentials = Input::only('email', 'password');

        if (User::create($credentials))
        {
            return Response::json(Auth::user());
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

    public function isLoggedIn()
    {
        return Auth::check();
    }

    public function getAuthUser()
    {
        if (Auth::check())
        {
            return Auth::user();
        }
    }

}
