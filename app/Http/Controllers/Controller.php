<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Wrapper for return api calls
     *
     * @param array $data
     * @param int $status_code
     * @param array $headers
     * @return mixed
     */
    public function responseApi($data, $status_code = 200, $headers = [])
    {
        return Response::json($data, $status_code, $headers);
    }

    /**
     * Success response
     *
     * @param array $data
     * @param string $message
     * @param int $code
     *
     * @return mixed
     */
    public function response($data = [], $message = 'success!', $code = 200)
    {
        return $this->responseApi([
            'message' => $message,
            'code' => $code,
            'data' => $data
        ], $code);
    }
}
