<?php

namespace App\Imports\Territories;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Territories\Municipality;

class MunicipalityImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Municipality([
            //
        ]);
    }
}
