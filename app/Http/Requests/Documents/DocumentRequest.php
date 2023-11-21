<?php

namespace App\Http\Requests\Documents;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DocumentRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('documents')->ignore($this->route('document'))
            ],
            'acronym' => [
                'required',
                Rule::unique('documents')->ignore($this->route('document'))
            ],
            'country_id' => 'required',
            'status'     => 'required',
            'note'       => 'nullable'
        ];
    }
}
