<?php

namespace App\Http\Requests\Permissions;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'         => [
                'required',
                Rule::unique('permissions')->ignore($this->route('permission'))
            ],
            'level'       => 'required',
            'role_id'     => 'required',
            'status'      => 'required',
            'note'        => 'nullable'
        ];
    }
}
