<?php

namespace App\Acme\Modules\Authentication\Repositories\Social;

use Illuminate\Support\Facades\Auth;
use Facebook\Facebook;

class FacebookAuthenticationRepository
{
    function __construct()
    {
        $this->facebook  = new Facebook([
            'app_id' => '789305654421319',
            'app_secret' => 'd8718ba34a0179da088fb3628f2bbaf1',
            'default_graph_version' => 'v2.2',
            'persistent_data_handler'=>'session'
        ]);
    }

    public function register()
    {

    }

    public function login()
    {

    }

    public function logout()
    {

    }
}