<?php

namespace App\Models\Entities;

use App\Models\Territories\City;
use App\Models\Territories\State;
use App\Models\Territories\Parish;
use App\Models\Categories\Category;
use App\Models\Territories\Country;
use App\Models\Users\Clients\Client;
use Illuminate\Database\Eloquent\Model;
use App\Models\Territories\Municipality;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Entities\UrbanismPresenter;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Urbanism extends Model
{
    use
        HasFactory,
        SoftDeletes;

    protected $guarded = [];

    /**
     * Get the country that owns the Urbanism
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     * Get the state that owns the Urbanism
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    /**
     * Get the municipality that owns the Urbanism
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class, 'municipality_id');
    }

    /**
     * Get the parish that owns the Urbanism
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parish(): BelongsTo
    {
        return $this->belongsTo(Parish::class, 'parish_id');
    }

    /**
     * Get the city that owns the Urbanism
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    /**
     * Get the category that owns the Urbanism
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get all of the clients for the Urbanism
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'urbanism_id', 'id');
    }

    public function present()
    {
        return new UrbanismPresenter($this);
    }
}
