<?php

namespace App\Http\Controllers\Auth;

use App\Acme\Modules\Authentication\Repositories\Social\FacebookAuthenticationRepository;
use App\Acme\Modules\Authentication\Repositories\Social\TwitterAuthenticationRepositoryInterface;
use App\Acme\Modules\Authentication\Repositories\AuthenticationRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

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
        /*
        $this->middleware('guest', [
            'except' => 'logout'
        ]);
        */

        $this->authenticationRepository = $authenticationRepository;
        $this->facebookAuthenticationRepository = $facebookAuthenticationRepository;
        $this->twitterAuthenticationRepository = $twitterAuthenticationRepository;
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

        return $this->authenticationRepository->register($input);
        return $this->response(
            $data = $this->authenticationRepository->register($input),
            $message = 'User Registration success.',
            $code = 201
        );
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

        return $this->authenticationRepository->login($input);

        return $this->response(
            $data = [],
            $message = 'Users Login attempt.',
            $code = 200
        );

    }

    /**
     * Logs out / terminates every single possible sessions there are
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
        return $this->response(
            $data = Auth::user(),
            $message = 'Currently Authenticated User Information.',
            $code = 200
        );
    }

    public function redirectToProviderFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallbackFacebook()
    {
        $user = Socialite::driver('facebook')->user();
        Redirect::to('/');
    }

    public function redirectToProviderTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallbackTwitter()
    {
        $user = Socialite::driver('twitter')->user();

        dd($user);
    }

    public function redirectToProviderGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallbackGoogle()
    {
        $user = Socialite::driver('google')->user();

        dd($user);
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        dd($user);
    }
}
