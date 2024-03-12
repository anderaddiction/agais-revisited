<?php

namespace App\Http\Requests\Entities;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UrbanismRequest extends FormRequest
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
            'phone_one'         => 'required|phone:VE,INTERNATIONAL',
            'phone_alt'         => 'nullable',
            'email'             =>
            [
                'required',
                Rule::unique('urbanisms')->ignore($this->route('urbanism'))

            ],
            'email_alt'         => 'nullable',
            'country_id'        => 'required',
            'state_id'          => 'required',
            'municipality_id'   => 'required',
            'parish_id'         => 'required',
            'city_id'           => 'required',
            'address'           => 'required',
            'category_id'       => 'required',
            'social_media'      => 'nullable',
            'note'              => 'nullable',
            'status'            => 'required',
            'type'              => 'required',
        ];
    }
}
