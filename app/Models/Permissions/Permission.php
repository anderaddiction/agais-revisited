<?php

namespace App\Models\Permissions;

use App\Models\Users\Roles\Role;
use App\Presenters\Permissions\PermissionPresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * The roles that belong to the Permission
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'assigned_permission', 'permission_id', 'role_id');
    }

    public function present()
    {
        return new PermissionPresenter($this);
    }
}
