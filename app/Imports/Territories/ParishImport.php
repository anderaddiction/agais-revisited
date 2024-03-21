<?php

namespace App\Imports\Territories;

use App\Models\Territories\Parish;
use Maatwebsite\Excel\Concerns\ToModel;

class ParishImport implements ToModel
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
}
