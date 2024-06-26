<?php

namespace App\Http\Requests\Taxes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaxRequest extends FormRequest
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
            'name'       => 'required',
            'acronym'    => 'required',
            'country_id' => [
                'required',
                Rule::unique('taxes')->ignore($this->route('tax'))

            ],
            'percent'    => 'required|numeric|min:1',
            'status'     => 'required',
            'note'       => 'nullable'
        ];
    }
}
