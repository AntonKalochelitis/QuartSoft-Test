<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * @property string email
 * @property string password
 */
class LoginRequest extends FormRequest
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
            'email' => 'required|string|email:rfc,dns',
            'password' => [
                'required',
                'string',
                'min:8',
                'max:255',
                function ($attribute, $password, $fail) {
                    if (!Auth::attempt([
                        'email' => $this->input('email'),
                        'password' => $password
                    ])) {
                        $fail(__('auth.failed'));
                    }
                }
            ],
        ];
    }
}
