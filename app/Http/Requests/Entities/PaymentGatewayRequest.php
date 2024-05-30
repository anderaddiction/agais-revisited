<?php

namespace App\Http\Requests\Entities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PaymentGatewayRequest extends FormRequest
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
                Rule::unique('payment_gateways')->ignore($this->route('payment_gateway'))
            ],
            'country_id' => 'required',
            'platform'   => 'required',
            'status'     => 'required',
            'note'       => 'nullable'
        ];
    }
}
