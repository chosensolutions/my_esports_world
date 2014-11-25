<?php

use Acme\Modules\User\Commands\Register\RegisterUserCommand;
use Acme\Modules\User\Repositories\UserRepositoryInterface;
use Acme\Modules\User\Validation\RegisterUserValidation;

class UsersController extends \BaseController {

    /**
     * @var UserRepositoryInterface
     */
    protected $userRepository;

    /**
     * @var RegisterUserValidation
     */
    protected $registrationValidation;

    /**
     * @param UserRepositoryInterface $userRepository
     * @param RegisterUserValidation $registrationValidation
     */
    function __construct(
        UserRepositoryInterface $userRepository,
        RegisterUserValidation $registrationValidation
    )
    {
        $this->userRepository = $userRepository;
        $this->registrationValidation = $registrationValidation;
    }

    /**
     * commander pattern baby
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

        $this->registrationValidation->validate($credentials);

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
