<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CORS {

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        header("Access-Control-Allow-Origin: *");

        // ALLOW OPTIONS METHOD
        $headers = [
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
        ];

        if($request->getMethod() == "OPTIONS") {
            // The client-side application can set only headers allowed in Access-Control-Allow-Headers
            return Response::make('OK', 200, $headers);
        }
        $request->header('Access-Control-Allow-Origin', 'http://mew.musbe.ca');
        $request->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

        return $response = $next($request);
        /*       $response->header->set('Access-Control-Allow-Origin', '*');
              $response->header->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

              return $response;*/

/*        return response($next($request))
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');*/
    }
}