<?php

namespace App\Imports\Taxes;


use App\Models\Tax\Tax;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class TaxImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new Tax([
            'code'         => uniqueCode(),
            'name'         => $row['name'],
            'acronym'      => Str::upper($row['acronym']),
            'percent'      => $row['percent'],
            'country_id'   => $row['country_id'],
            'status'       => 1,
            'note'         => $row['note'] ? $row['note'] : 'N/A'
        ]);
    }

    public function rules(): array
    {
        return [
            'file'          => 'mimes:xlsx,csv',
            'name'          => 'required',
            'acronym'       => 'required',
            'percent'       => 'required|numeric|min:1',
            'country_id'    => 'required|unique:taxes,country_id',
            'note'          => 'nullable'
        ];
    }
}
