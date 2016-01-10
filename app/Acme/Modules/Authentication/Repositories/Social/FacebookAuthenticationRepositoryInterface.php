<?php

namespace App\Acme\Modules\Authentication\Repositories\Social;

interface FacebookAuthenticationInterface
{
    public function register();

    public function login();

    public function logout();
}