<?php

namespace App\Http\Controllers\Auth;

use App\Acme\Modules\Authentication\Repositories\Social\FacebookAuthenticationRepository;
use App\Acme\Modules\Authentication\Repositories\Social\TwitterAuthenticationRepositoryInterface;
use App\Acme\Modules\Authentication\Repositories\AuthenticationRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use Facebook\Facebook;
use Illuminate\Http\Request;

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

        $this->facebook = new Facebook([
            'app_id' => '789305654421319',
            'app_secret' => 'd8718ba34a0179da088fb3628f2bbaf1',
            'default_graph_version' => 'v2.2',
            'persistent_data_handler'=>'session'
        ]);
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
     * Facebook logout baby
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
                $this->facebookAuthenticationRepository->register();
                return 2;
            default;
                return 4;
        }
    }
}
