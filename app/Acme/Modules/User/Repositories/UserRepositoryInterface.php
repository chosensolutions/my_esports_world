<?php namespace Acme\Modules\User\Repositories;

interface UserRepositoryInterface {

    public function register($input);

    public function login($credentials);

    public function logout();

} 