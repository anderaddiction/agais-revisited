<?php

namespace App\Presenters\Permissions;

use App\Models\Permissions\Permission;

class PermissionPresenter
{
    protected $permission;

    public function __construct(Permission $permission)
    {
        return $this->permission = $permission;
    }

    public function code()
    {
        return $this->permission->code;
    }

    public function name()
    {
        return $this->permission->name;
    }

    public function level()
    {
        return $this->permission->level;
    }

    public function role()
    {
        return $this->permission->roles()->pluck('display_name')->implode(', ');
    }

    public function status()
    {
        if ($this->permission->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function slug()
    {
        return $this->permission->slug;
    }

    public function note()
    {
        return $this->permission->note;
    }

    public function created_at()
    {
        return $this->permission->created_at->diffForHumans();
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
                    <a class="dropdown-item btn-show-crud" href="#" data-route="' . route('permission.show', $this->permission) . '" data-url="' . route('permission.getdata', $this->permission) . '"
                    data-urlModule="categories">Ver</a>
                    <a class="dropdown-item" href="' . route('permission.edit', $this->permission) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('permission.edit', $this->permission) . '">Editar</a>
                </div>
            </div>';
    }
}
