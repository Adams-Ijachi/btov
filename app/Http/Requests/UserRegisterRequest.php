<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'contact' => 'required|string',
            'password' => 'required|string',
            'password_confirmation' => 'required|string|same:password'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
