<?php

namespace App\Http\Requests\Territories;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CountryRequest extends FormRequest
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
            'name'          => [
                'required',
                Rule::unique('countries')->ignore($this->route('country'))
            ],
            'continent_id'  => 'required',
            'iso2'          => [
                'required',
                Rule::unique('countries')->ignore($this->route('country'))
            ],
            'iso3'          => [
                'required',
                Rule::unique('countries')->ignore($this->route('country'))
            ],
            'note'          => 'nullable',
            'import_file' => 'nullable|mimes:xlsx,csv'
        ];
    }
}
