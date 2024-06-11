<?php

namespace App\Imports\Entities;

use App\Models\Entities\Currency;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CurrencyImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $currency = Currency::create([
            'code'          => uniqueCode(),
            'name'          => $row['name'],
            'symbol'        => $row['symbol'],
            'iso'           => $row['iso'],
            'slug'          => generateUrl($row['name']),
            'status'        => 1,
            'note'          => $row['note'] ? $row['note'] : 'N/A',
        ]);

        $currency->countries()->attach(explode('.', $row['country_id']), ['currency_id' => $currency->id]);

        return $currency;
    }

    public function rules(): array
    {
        return [
            'name'          => 'required',
            'symbol'        => 'nullable',
            'iso'           => 'required',
            'country_id'    => 'required',
            'note'          => 'nullable'
        ];
    }
}
