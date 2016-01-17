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
        //header("Access-Control-Allow-Credentials: *");
        //header("Access-Control-Request-Method: DELETE");
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With, X-Auth-Token');

        header('Access-Control-Allow-Credentials: true');
        header('Allow-Access-Control-Credentials: true');

        // ALLOW OPTIONS METHOD
        $headers = [
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
        ];
/*        if($request->getMethod() == "OPTIONS") {
            // The client-side application can set only headers allowed in Access-Control-Allow-Headers
            return Response::make('OK', 200, $headers);
        }*/

        $response = $next($request);
/*        foreach($headers as $key => $value)
            $response->header($key, $value);*/

        return $response;
    }
}