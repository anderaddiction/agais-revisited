<?php

namespace App\Imports\Entities;


use Illuminate\Support\Facades\DB;
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

        $payment_gateway = PaymentGateway::create(
            [
                'code'         => uniqueCode(),
                'name'         => $row['name'],
                'platform'     => $row['platform'] ? $row['platform'] : 'N/A',
                'status'       => 1,
                'slug'         => generateUrl($row['name']),
                'note'         => $row['note'] ? $row['note'] : 'N/A',
            ]
        );

        $payment_gateway->countries()->attach($row['country_id'] ? explode(',', $row['country_id']) : null, ['payment_gateway_id' => $payment_gateway->id]);

        return $payment_gateway;
    }

    public function rules(): array
    {
        return [
            'file'       => 'mimes:xlsx,csv',
            'name'       => 'required|unique:payment_gateways,name',
            'country_id' => 'nullable',
            'platform'   => 'nullable',
            'note'       => 'nullable',
        ];
    }
}
