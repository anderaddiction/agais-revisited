<?php

namespace App\Imports\Imports\Territories;

use App\Models\Territories\Country;
use Maatwebsite\Excel\Concerns\ToModel;

class CountriesImport implements ToModel
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
}
