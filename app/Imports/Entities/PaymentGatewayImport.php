<?php

namespace App\Imports\Entities;


use App\Models\Entities\PaymentGateway;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PaymentGatewayImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PaymentGateway([
            'code'         => uniqueCode(),
            'name'         => $row['name'],
            'country_id'   => $row['country_id'],
            'platfom'      => $row['platfom'],
            'status'       => 1,
            'slug'         => generateUrl($row['name']),
            'note'         => $row['note'],
        ]);
    }

    public function rules(): array
    {
        return [
            'file'       => 'mimes:xlsx,csv',
            'name'       => 'required|unique:countries,name',
            'country_id' => 'required',
            'platfom'    => 'required',
            'note'       => 'nullable',
        ];
    }
}
