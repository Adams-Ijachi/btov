<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
            'contact' => ['required'],
            'location' => ['required'],
            'specialization' => ['required'],
            'rating' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'experience' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
