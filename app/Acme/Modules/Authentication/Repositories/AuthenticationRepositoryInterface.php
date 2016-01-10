<?php

namespace App\Acme\Modules\Authentication\Repositories;

interface AuthenticationRepositoryInterface
{
    public function register();

    public function login();

    public function logout();
}