<?php

namespace App\Imports\Territories;


use App\Models\Territories\Country;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CountryImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Country([
            'code'         => uniqueCode(),
            'name'         => $row['name'],
            'continent_id' => $row['continent_id'],
            'iso2'         => $row['iso2'],
            'iso3'         => $row['iso3'],
            'flag'         => flagGenerator($row[3], $row['name']),
            'slug'         => generateUrl($row['name']),
            'note'         => $row['note'],
        ]);
    }

    public function rules(): array
    {
        return [
            'file'  => 'mimes:xlsx,csv',
            'name'  => 'required|unique:countries,name',
            'iso2'  => 'required|unique:countries,iso2',
            'iso3'  => 'required|unique:countries,iso3',
            'note'  => 'nullable',
        ];
    }
}
