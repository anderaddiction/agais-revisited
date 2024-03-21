<?php

namespace App\Imports\Entities;

use App\Models\Entities\Currency;
use Maatwebsite\Excel\Concerns\ToModel;

class CurrencyImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Currency([
            //
        ]);
    }
}
