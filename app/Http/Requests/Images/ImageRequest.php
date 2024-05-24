<?php

namespace App\Http\Requests\Images;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
                Rule::unique('images')->ignore($this->route('image'))
            ],
            'image'       => 'required|image|mimes:jpeg,jpg,png,webp',
            'width'       => 'nullable|numeric|min:0|max:3000',
            'height'      => 'nullable',
            'category_id' => 'required',
            'status'      => 'required',
            'note'        => 'nullable'
        ];
    }
}
