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
        return '
            <div class="dropdown align-self-start">
                <a class="dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="' . route('role.show', $this->role) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('role.edit', $this->role) . '">Editar</a>
                </div>
            </div>
        ';
    }

    public function showActionButton()
    {
        return '<div class="dropdown align-self-start">
                <a class="dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="' . route('role.edit', $this->role) . '">Editar</a>
                </div>
            </div>';
    }
}
