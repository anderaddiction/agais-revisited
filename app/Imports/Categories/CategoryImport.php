<?php

namespace App\Imports\Categories;

use App\Models\Categories\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CategoryImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Category([
            'code'         => uniqueCode(),
            'name'         => $row['name'],
            'status'       => $row['status'],
            'slug'         => generateUrl($row['name']),
            'note'         => $row['note']
        ]);
    }

    public function rules(): array
    {
        return [
            'file'  => 'mimes:xlsx,csv',
            'name'  => 'required|unique:countries,name',
            'note'  => 'nullable',
        ];
    }
}
