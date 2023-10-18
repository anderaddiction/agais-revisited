<?php

namespace App\Models\Entities;

use App\Models\Territories\Country;
use Illuminate\Database\Eloquent\Model;
use App\Presenters\Entities\BankPresenter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bank extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The countries that belong to the Bank
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'bank_country_table', 'bank_id', 'country_id');
    }

    public function present()
    {
        return new BankPresenter($this);
    }
}
