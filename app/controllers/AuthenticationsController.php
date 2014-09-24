<?php

use Acme\Forms\RegistrationForm;


class AuthenticationsController extends \BaseController {

    protected $user;
    protected $registrationForm;

    function __construct(User $user, RegistrationForm $registrationForm)
    {
        $this->user = $user;
        $this->registrationForm = $registrationForm;
    }

    /**
     * Display a listing of authentications
     *
     * @return Response
     */
    public function getRegister()
    {
        return View::make('authentications.register');
    }

	/**
	 * Display a listing of authentications
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return View::make('authentications.login');
	}

    /**
     * Display a listing of authentications
     *
     * @return Response
     */
    public function postRegister()
    {
        $input = Input::only('username', 'email', 'password', 'password_confirmation');

        $this->registrationForm->validate($input);

        Sentry::createUser([
            'email'     => $input['email'],
            'password'  => $input['password'],
            'activated' => true,
        ]);

        return Redirect::home();
    }

    /**
     * Display a listing of authentications
     *
     * @return Response
     */
    public function postLogin()
    {
        return View::make('authentications.register');
    }

    /**
     * Display a listing of authentications
     *
     * @return Response
     */
    public function logout()
    {
        return null;
    }
}
