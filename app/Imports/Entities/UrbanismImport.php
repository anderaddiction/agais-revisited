<?php

namespace App\Imports\Entities;

use App\Models\Entities\Urbanism;
use Maatwebsite\Excel\Concerns\ToModel;

class UrbanismImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Urbanism([
            //
        ]);
    }
}
