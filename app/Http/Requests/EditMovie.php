<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMovie extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'bail|required',
            'year' => 'bail|required',
            'duration' => 'bail|required',
            'trailer' => 'bail|required',
            'our_take' => 'bail|required|max:600',
            'sinopis' => 'bail|required|max:600'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Movie name is required',
            'year.required' => 'year is required',
            'duration.required' => 'duration is required.',
            'trailer.required' => 'trailer is required.',
            'our_take.required' => 'Our take is required.',
            'our_take.max' => 'Maximum number of characters for our take is 600',
            'sinopis.max' => 'Maximum number of characters for synopsis is 600',
            'sinopis.required' => 'Synopsis is required.'
        ];
    }
}
