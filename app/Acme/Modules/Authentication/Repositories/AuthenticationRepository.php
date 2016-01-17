<?php

namespace App\Acme\Modules\Authentication\Repositories;

use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationRepository
{
    /**
     * AuthenticationRepository constructor.
     *
     * @param User $user
     * @param Auth $auth
     */
    function __construct(User $user, Auth $auth)
    {
        $this->user = $user;
        $this->auth = $auth;
    }

    /**
     * Inserts the the email and password into the database
     *
     * @param $input
     * @return static
     */
    public function register($input)
    {
        dd($input);
        switch($input['auth_type'])
        {
            case 'normal';
                return $this->user->create([
                    'email' => $input['email'],
                    'password' => $input['password'],
                    'facebook_id' => null,
                    'twitter_id' => null,
                ]);

            case 'facebook';
                return Socialite::driver('facebook')->redirect();
        }
    }

    /**
     * @param $input
     * @return boolean
     */
    public function login($input)
    {
        switch($input['auth_type'])
        {
            case 'normal':
                return Auth::attempt([
                    'email' => $input['email'],
                    'password' => $input['password']
                ], true);
            case 'facebook':

        }

    }

    /**
     * @return mixed
     */
    public function logout()
    {
        return Auth::logout();
    }
}