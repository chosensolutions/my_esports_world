<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;

abstract class Request extends FormRequest
{
    /**
     * Formats to the errors to return an array
     *
     * @param Validator $validator
     * @return mixed
     */
    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
