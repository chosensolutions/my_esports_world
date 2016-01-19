<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;

class RegisterUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'email|unique:users,email',
            'password' => 'max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'An email is required.',
            //'email.email' => 'You must enter a valid email address bro'
            'email.unique' => 'The email is already taken.',
            'password.required'  => 'A password is required',
        ];
    }

    /**
     * Custom Response
     *
     * @param array $errors
     * @return JsonResponse
     */
    public function response(array $errors)
    {
        return new JsonResponse([
            'message' => 'Error registering the user.',
            'code' => 400,
            'data' => $errors
        ], 400);
    }
}
