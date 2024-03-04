<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'bail|required|exists:users,email',
            'password' => 'bail|required'

        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'email.exists' => 'Email does not exist.',
            'password.required' => 'Password is required.',
        ];
    }
}
