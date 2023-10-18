<?php

namespace App\Presenters\Users;

use App\Models\Users\Roles\Role;


class RolePresenter
{
    protected $role;

    public function __construct(Role $role)
    {
        return $this->role = $role;
    }

    public function code()
    {
        return $this->role->code;
    }

    public function name()
    {
        return $this->role->name;
    }

    public function diplayName()
    {
        return $this->role->display_name;
    }

    public function slug()
    {
        return $this->role->slug;
    }

    public function status()
    {
        if ($this->role->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->role->note;
    }

    public function created_at()
    {
        return $this->role->created_at->diffForHumans();
    }

    public function actionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('role.show', $this->role) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('role.edit', $this->role) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('role.destroy', $this->role) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('role.edit', $this->role) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
