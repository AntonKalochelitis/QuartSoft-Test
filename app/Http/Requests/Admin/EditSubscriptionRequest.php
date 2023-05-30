<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property integer id
 * @property string name
 * @property float price
 * @property int count_available_publication
 * @property bool active
 */
class EditSubscriptionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'count_available_publication' => 'required|string',
            'active' => 'required|boolean',
        ];
    }
}
