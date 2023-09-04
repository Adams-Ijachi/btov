<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DogRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'breed' => ['required'],
            'age' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
