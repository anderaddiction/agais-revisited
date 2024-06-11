<?php

namespace App\Imports\Permission;


use App\Models\Permissions\Permission;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PermissionImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $permission =  Permission::create([
            'code'         => uniqueCode(),
            'name'         => $row['name'],
            'level'        => $row['level'],
            'status'       => 1,
            'slug'         => generateUrl($row['name']),
            'note'         => $row['note'] ? $row['note'] : 'N/A',
        ]);

        $permission->roles()->attach(explode('.', $row['role_id']), ['permission_id' => $permission->id]);

        return $permission;
    }

    public function rules(): array
    {
        return [
            'file'        => 'mimes:xlsx,csv',
            'name'        => 'required|unique:permissions,name',
            'role_id'     => 'required',
            'note'        => 'nullable',
        ];
    }
}
