<?php

namespace App\Imports\Services;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
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
            //
        ]);

        $service->categories()->attach(explode(',', $row['category_id']), [$service->id]);
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
