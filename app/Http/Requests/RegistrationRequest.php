<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'bail|required|regex:/^[A-ZŠĐŽĆČ][a-zšđžćč]{2,15}(\s[A-ZŠĐŽĆČ][a-zšđžćč]{2,15})?$/',
            'last_name' => 'bail|required|regex:/^[A-ZŠĐŽĆČ][a-zšđžćč]{2,15}(\s[A-ZŠĐŽĆČ][a-zšđžćč]{2,15})?$/',
            'username' => 'bail|required|unique:users,username|regex:/^[a-z0-9_]{1,25}$/',
            'email' => 'bail|required|unique:users,email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/',
            'password' => 'bail|required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\s\S])[A-Za-z\d\s\S]{8,20}$/',
            'profile_img' => 'file|mimes:jpg,jpeg,png'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'First name is required.',
            'first_name.regex' => 'The first name is not in the correct format.',
            'last_name.required' => 'The last name is not in the correct format..',
            'last_name.regex' => 'Email is required.',
            'email.required' => 'Email is required.',
            'email.exists' => 'Email does not exist.',
            'email.regex' => 'Email is not in the correct format.',
            'password.required' => 'Password is required.',
            'password.regex' => "The password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character, it should be between 8 and 20 characters in length.",
            'profile_img.mimes' => 'The image must be in either jpg, jpeg, or png format.'
        ];
    }
}
