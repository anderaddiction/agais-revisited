<?php

namespace App\Imports\Territories;

use App\Models\Territories\State;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StateImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new State([
            'code'       => $row[0],
            'name'       => $row[1],
            'country_id' => $row[2],
            'iso'        => $row[3],
            'slug'       => $row[6],
            'note'       => $row[7],
        ]);
    }

    public function rules(): array
    {
        return [
            'file'  => 'required|mimes:xlsx,csv',
            'name'  => 'unique:countries,name',
            'iso'   => 'unique:countries,iso2',
            'slug'  => 'unique:countries,slug',
            'note'  => 'nullable',
        ];
    }
}
