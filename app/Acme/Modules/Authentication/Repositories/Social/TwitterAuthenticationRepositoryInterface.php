<?php

namespace App\Acme\Modules\Authentication\Repositories\Social;

interface TwitterAuthenticationRepositoryInterface
{
    public function register();

    public function login();

    public function logout();
}