<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:80'],
            'last_name' => ['required', 'string', 'max:120'],
            'phone_number' => [
                'nullable',
                'string',
                'regex:/^(07|01)[0-9]{8}$/',
            ],
            'secondary_phone_number' => [
                'nullable',
                'string',
                'regex:/^(07|01)[0-9]{8}$/',
            ],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'phone_number.regex' => 'Phone number must start with 07 or 01 and contain exactly 10 digits.',
            'secondary_phone_number.regex' => 'Phone number must start with 07 or 01 and contain exactly 10 digits.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'Allowed image formats are jpg, jpeg, png, and webp.',
            'image.max' => 'The image must not exceed 2MB. Please upload a smaller image.',
        ];
    }
}
