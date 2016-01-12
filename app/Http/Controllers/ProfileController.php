<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Facebook\Facebook;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->facebook = new Facebook([
            'app_id' => '789305654421319',
            'app_secret' => 'd8718ba34a0179da088fb3628f2bbaf1',
            'default_graph_version' => 'v2.2',
            'persistent_data_handler'=>'session'
        ]);
    }

    protected function index()
    {
        $helper = $this->facebook->getRedirectLoginHelper('http://localhost/github/my_esports_world/public/#/');
        $url = $helper->getLoginUrl('http://localhost/github/my_esports_world/public/#/login');

        return Redirect::to($url);
    }
}
