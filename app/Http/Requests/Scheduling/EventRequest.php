<?php

namespace App\Http\Requests\Scheduling;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name'        => [
                'required',
                Rule::unique('events')->ignore($this->route('event'))
            ],
            'event_start' => 'required',
            'event_end'   => 'required',
            'status'      => 'required',
            'note'        => 'required'
        ];
    }
}
