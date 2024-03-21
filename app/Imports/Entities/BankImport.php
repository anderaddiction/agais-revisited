<?php

namespace App\Imports\Entities;

use App\Models\Entities\Bank;
use Maatwebsite\Excel\Concerns\ToModel;

class BankImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Bank([
            //
        ]);
    }
}
