<?php

use Acme\Modules\User\Commands\Register\RegisterUserCommand;

class UsersController extends \BaseController {

    /**
     * Registering a user will do the following:
     * 1. validate the the input
     * 2. sanitize the information (trim, strlower, strval)
     * 3. store the user in the database (handle the actual command)
     * 4. send events
     *    - send a welcoming email
     *    - add user to mailing list
     *    - log the user in
     * 5. redirect OR response in json
     *
     * @return Response
     */
    public function register()
    {
        var_dump('preparing for the user instruction');

        $command = $this->execute(RegisterUserCommand::class, Input::all(), [
            'Acme\Modules\User\Commands\Register\RegisterUserSanitizer'
        ]);

        return $command;
    }

    /**
     *
     */
    public function login()
    {
        $credentials = Input::only('email', 'password');

        $this->registrationValidation->validate($credentials);

        $user = $this->userRepository->login($credentials);
    }

    /**
     *
     */
    public function logout()
    {
        return $this->userRepository->logout();
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
