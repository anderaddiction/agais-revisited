<?php

namespace App\Imports\Codes;

use App\Models\Codes\PhoneCode;
use Maatwebsite\Excel\Concerns\ToModel;

class PhoneCodeImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PhoneCode([
            //
        ]);
    }
}
