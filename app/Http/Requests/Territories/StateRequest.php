<?php

namespace App\Http\Requests\Territories;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StateRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('states')->ignore($this->route('state'))
            ],
            'iso' => [
                'required',
                Rule::unique('states')->ignore($this->route('state'))
            ],
            'country_id' => 'required',
            'note' => 'nullable'
        ];
    }
}
