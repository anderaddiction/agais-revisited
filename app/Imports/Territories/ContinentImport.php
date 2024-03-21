<?php

namespace App\Imports\Territories;


use App\Models\Territories\Continent;
use Maatwebsite\Excel\Concerns\ToModel;

class ContinentImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Continent([
            'code'         => $row[0],
            'name'         => $row[1],
            'slug'         => $row[6],
            'note'         => $row[7],
        ]);
    }

    public function rules(): array
    {
        return [
            'file'  => 'required|mimes:xlsx,csv',
            'name'  => 'unique:continents,name',
            'slug'  => 'unique:continents,slug',
            'note'  => 'nullable',
        ];
    }
}
