<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string nickname
 * @property string email
 * @property string password
 * @property string password_confirmation
 */
class RegisterRequest extends FormRequest
{
    /**
     * Prepare for validation
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'email' => trim(strtolower($this->input('email'))),
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
            'nickname' => 'required|string|min:3|max:255|unique:users,nickname',
            'email' => 'required|string|email:rfc,dns|unique:users,email',
            'password' => 'required|string|min:8|max:255|confirmed',
            'password_confirmation' => 'required|string|min:8|max:255',
        ];
    }
}
