<?php

namespace App\Imports\Services;


use App\Models\Services\Service;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ServiceImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $service =  Service::create([
            'code'         => uniqueCode(),
            'name'         => $row['name'],
            'status'       => 1,
            'slug'         => generateUrl($row['name']),
            'note'         => $row['note'] ? $row['note'] : 'N/A',
        ]);

        $service->categories()->attach(explode(',', $row['category_id']), ['service_id' => $service->id]);

        return $service;
    }

    public function rules(): array
    {
        return [
            'file'        => 'mimes:xlsx,csv',
            'name'        => 'required|unique:payment_gateways,name',
            'category_id' => 'required',
            'note'        => 'nullable',
        ];
    }
}
