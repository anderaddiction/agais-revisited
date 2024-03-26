<?php

namespace App\Imports\Territories;

use App\Models\Territories\City;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CityImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new City([
            'code'     => $row['code'],
            'name'     => $row['name'],
            'state_id' => $row['state_id'],
            'slug'     => generateUrl($row['slug']),
            'note'     => $row['note'],
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
    }

    /**
     * @return array
     */
    public function customValidationMessages()
    {
        return [
            '2.code' => 'Custom message for algo.',
        ];
    }
}
