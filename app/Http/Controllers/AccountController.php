<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    protected function verifySummoner(Request $request)
    {
        $summoner_verified = false;
        $input = $request->all();

        $summoner_name = $input['summoner_name'];
        $api_key = "3a0230a5-4e25-480d-bab5-e8154d3107f9";
        $client = new \GuzzleHttp\Client();
        $request = $client->get("https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/$summoner_name?api_key=$api_key");
        $contents = $request->getBody()->getContents();
        $summoner = json_decode($contents, true)[$summoner_name];

        $summoner_id = $summoner['id'];
        $request = $client->get("https://na.api.pvp.net/api/lol/na/v1.4/summoner/$summoner_id/runes?api_key=$api_key");
        $contents = $request->getBody()->getContents();
        $summoner_rune_pages = json_decode($contents, true)[$summoner_id]['pages'];

        sleep(30);

        foreach($summoner_rune_pages as $rune_page)
        {
            if($rune_page['name'] == $input['verification_token'])
            {
                $summoner_verified = true;
            }
        }
        //$request = $client->get("https://na.api.pvp.net/api/lol/na/v1.3/stats/by-summoner/$summoner_id/ranked?api_key=$api_key");
        //$contents = $request->getBody()->getContents();
        $summoner_stats_ranked = json_decode($contents, true);

        //$request = $client->get("https://na.api.pvp.net/api/lol/na/v1.3/stats/by-summoner/$summoner_id/summary?api_key=$api_key");
        //$contents = $request->getBody()->getContents();
        $summoner_stats_summary = json_decode($contents, true);

        //$request = $client->get("https://na.api.pvp.net/api/lol/na/v2.5/league/by-summoner/$summoner_id/entry?api_key=$api_key");
        //$contents = $request->getBody()->getContents();
        $summoner_league_entry = json_decode($contents, true)[$summoner_id];

        $data = [
            'summoner_info' => $summoner,
            'run_pages' => $summoner_rune_pages,
            //'summoner_league_entry' => $summoner_league_entry
        ];

        return $this->response(
            $data = [ 'verification' => $summoner_verified],
            $message = 'summoner verification',
            $code = 200
        );
    }
}
