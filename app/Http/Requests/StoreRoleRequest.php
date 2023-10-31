<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [
            'name' => [
                'required',
                'string',
                "regex:/^[A-Za-z\s'-]{1,50}$/",
                Rule::unique('roles')
            ],
            'permissions' => [
                'required',
                'array',
                Rule::exists('permissions', 'id')
            ],
        ];
    }
}
