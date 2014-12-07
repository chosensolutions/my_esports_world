<?php namespace Acme\Modules\User\Repositories;

interface UserRepositoryInterface {

    public function register(array $input);

    public function login(array $credentials);

    public function logout();

} 