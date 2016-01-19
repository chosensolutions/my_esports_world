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
     * Inserts the the email and password into the database,
     * and logs the user in right after
     *
     * @param array $input
     * @return static
     */
    public function register(array $input)
    {
        switch($input['auth_type'])
        {
            case 'normal':
                $user = $this->user->create([
                    'email' => $input['email'],
                    'password' => $input['password'],
                    'facebook_id' => null,
                    'twitter_id' => null,
                ]);
                Auth::loginUsingId($user->id);
                return $user;
            case 'facebook':
                //return redirect()->away('https://www.facebook.com/');
                return Socialite::driver('facebook')->redirect();
        }
    }

    /**
     * @param $input
     * @return boolean
     */
    public function login(array $input)
    {
        switch($input['auth_type'])
        {
            case 'normal':
                return Auth::attempt([
                    'email' => $input['email'],
                    'password' => $input['password']
                ], true);
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