<?php namespace Acme\Modules\User\Repositories;

use User, Auth;

class EloquentUserRepository implements UserRepositoryInterface {

    /**
     * @var User
     */
    private $userModel;

    /**
     * @var Auth
     */
    private $authModel;

    /**
     * @param User $userModel
     * @param Auth $authModel
     */
    function __construct(
        User $userModel,
        Auth $authModel
    )
    {
        $this->userModel = $userModel;
        $this->authModel = $authModel;
    }

    /**
     * @param $input
     */
    public function register(array $input)
    {
        $this->userModel->create($input);
    }

    /**
     * @param $credentials
     * @return mixed
     */
    public function login(array $credentials)
    {
        return $this->authModel->attempt($credentials);
    }

    /**
     * @return mixed
     */
    public function logout()
    {
        return $this->authModel->logout();
    }

}