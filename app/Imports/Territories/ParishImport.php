<?php

namespace App\Imports\Territories;

use App\Models\Territories\Parish;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ParishImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Parish([
            //
        ]);
    }

    public function rules(): array
    {
        return [
            'file'     => 'mimes:xlsx,csv',
            'code'     => 'unique:cities,code',
            'name'     => 'required',
            'state_id' => 'required',
            'slug'     => 'required',
            'note'     => 'nullable',
        ];
    }s
}
