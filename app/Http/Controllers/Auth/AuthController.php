<?php

namespace App\Http\Controllers\Auth;

use App\Acme\Modules\Authentication\Repositories\Social\FacebookAuthenticationRepository;
use App\Acme\Modules\Authentication\Repositories\Social\TwitterAuthenticationRepositoryInterface;
use App\Acme\Modules\Authentication\Repositories\AuthenticationRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * AuthController constructor.
     *
     * @param AuthenticationRepository $authenticationRepository
     * @param FacebookAuthenticationRepository $facebookAuthenticationRepository
     * @param TwitterAuthenticationRepositoryInterface $twitterAuthenticationRepository
     */
    public function __construct
    (
        AuthenticationRepository $authenticationRepository,
        FacebookAuthenticationRepository $facebookAuthenticationRepository,
        TwitterAuthenticationRepositoryInterface $twitterAuthenticationRepository

    )
    {
        $this->middleware('guest', [
            'except' => 'logout'
        ]);

        $this->authenticationRepository = $authenticationRepository;
        $this->facebookAuthenticationRepository = $facebookAuthenticationRepository;
        $this->twitterAuthenticationRepository = $twitterAuthenticationRepository;
    }

    /**
     * @param RegisterUserRequest $request
     *
     * @return int|static
     */
    protected function register(RegisterUserRequest $request)
    {
        $input = $request->only([
            'email',
            'password',
            'type'
        ]);

        switch($input['type'])
        {
            case 'normal';
                $user = $this->authenticationRepository->register($input);

                return $this->response(
                    $data = $user,
                    $message = 'Users information.',
                    $code = 201
                );

            case 'facebook';
                $this->facebookAuthenticationRepository->register();
                break;

            case 'twitter';
                $this->twitterAuthenticationRepository->register();
                return 3;

            default;
                return 4;
        }
    }

    /**
     * @param Request $request
     * @return int|mixed
     */
    protected function login(Request $request)
    {
        $input = $request->only([
            'email',
            'password',
            'type'
        ]);

        switch($input['type'])
        {
            case 'normal';
                $login_attempt = $this->authenticationRepository->login($input);
                return $this->response(
                    $data = ['login_attempt' => $login_attempt],
                    $message = 'Users Login attempt.',
                    $code = 201
                );
            case 'facebook';
                $this->facebookAuthenticationRepository->register();
                return 2;
            default;
                return 4;
        }
    }

    /**
     * @return int
     */
    protected function logout()
    {
        $authType = 'normal';

        switch($authType)
        {
            case 'normal';
                $this->authenticationRepository->logout();
                return 1;
            case 'facebook';
                $this->facebookAuthenticationRepository->logout();
                return 2;
        }
    }

    public function getAuthUser()
    {
        return Auth::user();
    }

}
