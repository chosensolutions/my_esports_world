<?php

namespace App\Acme\Modules\Authentication\Repositories;

use App\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationRepository
{
    function __construct(User $user, Auth $auth)
    {

        $this->user = $user;
        $this->auth = $auth;
    }

    public function register(array $input)
    {
        $this->user->create([
            'email' => 1,
            'password' => 1
        ]);
    }

    public function login()
    {
        $this->auth->attempt();
    }

    public function logout()
    {
        $this->auth->logout();
    }

}