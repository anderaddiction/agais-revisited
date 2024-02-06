<?php

namespace App\Models\Territories;

use App\Models\Users\Clients\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Territories\StatePresenter;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the country that owns the State
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     * Get all of the municipalities for the State
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipalities(): HasMany
    {
        return $this->hasMany(Comment::class, 'state_id', 'id');
    }

    /**
     * Get all of the cities for the State
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'state_id', 'id');
    }

    /**
     * Get all of the clients for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(State::class, 'state_id', 'id');
    }

    public function present()
    {
        return new StatePresenter($this);
    }
}
