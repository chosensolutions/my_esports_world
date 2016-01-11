<?php

namespace App\Http\Controllers\Auth;

use App\Acme\Modules\Authentication\Repositories\Social\FacebookAuthenticationRepository;
use App\Acme\Modules\Authentication\Repositories\Social\TwitterAuthenticationRepositoryInterface;
use App\Acme\Modules\Authentication\Repositories\AuthenticationRepository;
use App\Http\Controllers\Controller;
use App\User;
use Facebook\Facebook;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    /**
     * AuthController constructor.
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
     * Returns a url string
     */
    protected function register()
    {
        $authType = 'normal';
        switch($authType)
        {
            case 'normal';
                $this->authenticationRepository->register([]);
                return 1;
            case 'facebook';
                $this->facebookAuthenticationRepository->register();
                return 2;
            case 'twitter';
                echo 'Good choice';
                break;
            default;
                echo 'Please make a new selection...';
                break;
        }
    }

    /**
     * Facebook login baby
     */
    protected function login()
    {

    }

    /**
     * Facebook logout baby
     */
    protected function logout()
    {
        return 'logout';
    }

    /**
     * Profile picture of the logged in user
     */
    protected function test()
    {
        $response = $this->facebook->get('/me', $_SESSION['fb_access_token']);
        var_dump('http://graph.facebook.com/' . $response->getGraphUser()->getId() . '/picture'); // photo
        echo '<pre>';
        print_r($response->getGraphUser()->all());
        echo '</pre>';
    }

}
