<?php

namespace App\Imports\Territories;


use App\Models\Territories\Country;
use Maatwebsite\Excel\Concerns\ToModel;

class CountryImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Country([
            'code'         => $row[0],
            'name'         => $row[1],
            'continent_id' => $row[2],
            'iso2'         => $row[3],
            'iso3'         => $row[4],
            'flag'         => $row[5],
            'slug'         => $row[6],
            'note'         => $row[7],
        ]);
    }

    public function rules(): array
    {
        return [
            'file'  => 'required|mimes:xlsx,csv',
            'name'  => 'unique:countries,name',
            'iso2'  => 'unique:countries,iso2',
            'iso3'  => 'unique:countries,iso3',
            'slug'  => 'unique:countries,slug',
            'note'  => 'nullable',
        ];
    }
}
