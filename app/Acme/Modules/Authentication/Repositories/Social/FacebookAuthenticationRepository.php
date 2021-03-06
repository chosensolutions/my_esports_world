<?php

namespace App\Acme\Modules\Authentication\Repositories\Social;

use Illuminate\Support\Facades\Auth;
use Facebook\Facebook;
use Illuminate\Support\Facades\Redirect;

class FacebookAuthenticationRepository
{
    /**
     * FacebookAuthenticationRepository constructor.
     *
     * @param Auth $auth
     */
    function __construct(Auth $auth)
    {
        $this->auth = $auth;

        $this->facebook  = new Facebook([
            'app_id' => '789305654421319',
            'app_secret' => 'd8718ba34a0179da088fb3628f2bbaf1',
            'default_graph_version' => 'v2.2',
            'persistent_data_handler'=> 'session'
        ]);
    }

    /**
     * Logs the user in
     */
    public function register()
    {
        $helper = $this->facebook->getRedirectLoginHelper('http://localhost:8069/#/');
        $url = $helper->getLoginUrl('http://localhost:8069/#/');

        return Redirect::to($url);

        // add facebook_id to the User
        // get information from fb and insert them into users, profiles, accounts table
        // log the user in with Auth::loginUsingId();
    }

    public function login()
    {
        $fb = $this->facebook;

        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (! isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }

        // Logged in
        echo '<h3>Access Token</h3>';
        var_dump($accessToken->getValue());

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        echo '<h3>Metadata</h3>';
        var_dump($tokenMetadata);

        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('789305654421319');
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (! $accessToken->isLongLived()) {
            // Exchanges a short-lived access token for a long-lived one
            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                exit;
            }

            echo '<h3>Long-lived</h3>';
            var_dump($accessToken->getValue());
        }

        $_SESSION['fb_access_token'] = (string) $accessToken;
    }

    public function logout()
    {
        // unset the session / fb token
        // Auth::logout
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