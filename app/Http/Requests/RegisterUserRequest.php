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
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',
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
