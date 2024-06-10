<?php

namespace App\Models\Users\Roles;

use App\Models\Permissions\Permission;
use App\Models\User;
use App\Models\Users\Clients\Client;
use App\Presenters\Users\RolePresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    /**
     * Get all of the users for the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }

    /**
     * Get all of the clients for the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'role_id', 'id');
    }

    /**
     * Get all of the permisssions for the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permisssions(): HasMany
    {
        return $this->hasMany(Permission::class, 'role_id', 'id');
    }

    public function present()
    {
        return new RolePresenter($this);
    }
}
