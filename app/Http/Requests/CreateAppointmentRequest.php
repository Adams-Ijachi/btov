<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAppointmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'breed' => ['required'],
            'details' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
