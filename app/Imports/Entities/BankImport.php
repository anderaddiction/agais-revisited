<?php

namespace App\Imports\Entities;

use App\Models\Entities\Bank;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class BankImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $bank =  Bank::create([
            'code'          => uniqueCode(),
            'name'          => $row['name'],
            'bank_type'     => $row['bank_type'],
            'capital_type'  => $row['capital_type'],
            'slug'          => generateUrl($row['name']),
            'status'        => 1,
            'note'          => $row['note'] ? $row['note'] : 'N/A',
        ]);

        $bank->countries()->attach(explode(',', $row['country_id']), ['bank_id' => $bank->id]);

        return $bank;
    }

    public function rules(): array
    {
        return [
            'name'          => 'required|unique:banks,name',
            'bank_type'     => 'nullable',
            'capital_type'  => 'nullable',
            'country_id'    => 'required',
            'note'          => 'nullable'
        ];
    }
}
