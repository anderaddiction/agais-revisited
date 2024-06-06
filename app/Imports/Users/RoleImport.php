<?php

namespace App\Imports\Users;

use App\Models\Users\Roles\Role;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class RoleImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Role([
            'code'         => uniqueCode(),
            'name'         => $row['name'],
            'display_name' => $row['display_name'],
            'status'       => 1,
            'slug'         => generateUrl($row['name']),
            'note'         => $row['note'] ? $row['note'] : 'N/A',
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:roles,name',
            'display_name' => 'required|unique:roles,display_name',
            'note' => 'nullable'
        ];
    }
}
