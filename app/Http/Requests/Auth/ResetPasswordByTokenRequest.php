<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string token
 * @property string email
 * @property string password
 * @property string password_confirmation
 */
class ResetPasswordByTokenRequest extends FormRequest
{
    /**
     * Prepare for validation
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'email' => strtolower($this->input('email')),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'token' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:255|confirmed',
            'password_confirmation' => 'required|string|min:8|max:255',
        ];
    }
}
