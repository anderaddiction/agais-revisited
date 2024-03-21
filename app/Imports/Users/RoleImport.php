<?php

namespace App\Imports\Users;

use App\Models\Users\Roles\Role;
use Maatwebsite\Excel\Concerns\ToModel;

class RoleImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Role([
            //
        ]);
    }
}
