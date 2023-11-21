<?php

namespace App\Models\Entities;

use App\Models\Territories\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Entities\CurrencyPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Currency extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The countries that belong to the Currency
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'assigned_currencies', 'currency_id', 'country_id');
    }

    public function present()
    {
        return new CurrencyPresenter($this);
    }
}
