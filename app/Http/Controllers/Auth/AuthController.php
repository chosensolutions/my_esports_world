<?php

namespace App\Http\Controllers\Auth;

use App\Acme\Modules\Authentication\Repositories\AuthenticationRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @var AuthenticationRepository
     */
    private $authenticationRepository;

    /**
     * AuthController constructor.
     * @param $authenticationRepository
     */
    public function __construct(AuthenticationRepository $authenticationRepository)
    {
        $this->authenticationRepository = $authenticationRepository;
    }

    /**
     * Request {
     *  'email',
     *  'password',
     *  'auth_type'
     * }
     * @param RegisterUserRequest $request
     *
     * @return int|static
     */
    protected function register(RegisterUserRequest $request)
    {
        $input = $request->only([
            'email',
            'password',
            'auth_type'
        ]);

        return $this->response(
            $data = $this->authenticationRepository->register($input),
            $message = 'User Registration success.',
            $code = 201
        );
    }

    /**
     * Request {
     *  'email',
     *  'password',
     *  'auth_type'
     * }
     * @param Request $request
     * @return int|mixed
     */
    protected function login(Request $request)
    {
        $input = $request->only([
            'auth_type',
            'email',
            'password'
        ]);

        $this->authenticationRepository->login($input);

        return $this->response(
            $data = [
                'login_attempt' => Auth::check()
            ],
            $message = 'Users Login attempt.',
            $code = 200
        );

    }

    /**
     * Logs out -> terminates every single possible sessions there are, fb, twitter, etc...
     */
    protected function logout()
    {
        $this->authenticationRepository->logout();
        return $this->response(
            $data = [
                'logged_in' => Auth::check()
            ],
            $message = 'Users has successfully logged out.',
            $code = 200
        );
    }

    /**
     * Returns information about the currently auth user
     *
     * @return mixed
     */
    public function getAuthUser()
    {
        $user = Auth::user()->toArray();
        $user['profile_pic'] = Auth::user()->profile->image_url;
        return $this->response(
            $data = $user,
            $message = 'Currently Authenticated User Information.',
            $code = 200
        );
    }
}
