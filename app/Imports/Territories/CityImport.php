<?php

namespace App\Imports\Territories;

use App\Models\Territories\City;
use Maatwebsite\Excel\Concerns\ToModel;

class CityImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new City([
            //
        ]);
    }
}
