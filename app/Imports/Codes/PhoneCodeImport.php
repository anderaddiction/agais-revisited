<?php

namespace App\Imports\Codes;

use App\Models\Codes\PhoneCode;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PhoneCodeImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PhoneCode([
            'code'         => uniqueCode(),
            'phone_code'   => $row['phone_code'],
            //'country_id'   => $row['country_id'],
            'status'       => $row['status'],
            'slug'         => generateUrl($row['phone_code']),
            'note'         => $row['note'],
        ]);
    }

    public function rules(): array
    {
        return [
            'file'        => 'mimes:xlsx,csv',
            'phone_code'  => 'required|unique:phone_codes,phone_code',
            'status'      => 'required',
            //'country_id'  => 'required',
            'note'        => 'nullable',
        ];
    }
}
