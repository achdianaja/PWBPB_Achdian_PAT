<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:5'

        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'email salah',
            'password.required' => 'password salah',
            'password.min:5' => 'password minimal 8',
        ];               
    }
}
