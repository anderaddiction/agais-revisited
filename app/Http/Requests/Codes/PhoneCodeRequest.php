<?php

namespace App\Http\Requests\Codes;

use Illuminate\Foundation\Http\FormRequest;

class PhoneCodeRequest extends FormRequest
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
            'phone_code' => 'required',
            'country_id' => 'required',
            'status'     => 'required',
            'note'       => 'nullable'
        ];
    }
}
