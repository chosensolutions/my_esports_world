<?php

use Acme\Modules\User\Commands\Register\RegisterUserCommand;
use Acme\Modules\User\Repositories\UserRepositoryInterface;

class UsersController extends \BaseController {

    /**
     * @var UserRepositoryInterface
     */
    protected $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     *
     */
    public function register()
    {
        var_dump('preparing for the user instruction');
        $this->execute(RegisterUserCommand::class, Input::all(), [
            'Acme\Modules\User\Commands\Register\RegisterUserSanitizer'
        ]);
    }

    /**
     *
     */
    public function login()
    {
        $credentials = Input::only('email', 'password');

        $this->userRepository->login($credentials);
    }

    /**
     *
     */
    public function logout()
    {
        $this->userRepository->logout();
    }

    /**
     * @return mixed
     */
    public function isLoggedIn()
    {
        return Auth::check();
    }

    /**
     * @return mixed
     */
    public function getAuthUser()
    {
        if ($this->isLoggedIn())
        {
            return Auth::user();
        }
    }

}
