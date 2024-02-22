<?php

namespace App\Http\Requests\Users\Clients;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name'              => 'required',
            'second_name'       => 'nullable',
            'last_name'         => 'required',
            'second_last_name'  => 'nullable',
            'document_id'       => 'required',
            'id_number'         => [
                'required',
                Rule::unique('clients')->ignore($this->route('client'))

            ],
            'phone_one'         => 'required',
            'phone_alt'         => 'nullable',
            'email'             =>
            [
                'required',
                Rule::unique('clients')->ignore($this->route('client'))

            ],
            'email_alt'         => 'nullable',
            'avatar'            => 'nullable',
            'country_id'        => 'required',
            'state_id'          => 'required',
            'municipality_id'   => 'required',
            'parish_id'         => 'required',
            'city_id'           => 'required',
            'address'           => 'required',
            'role_id'           => 'required',
            'category_id'       => 'required',
            'social_media'      => 'nullable',
            'note'              => 'nullable',
            'status'            => 'required',
            'password'          => 'required',
        ];
    }
}
