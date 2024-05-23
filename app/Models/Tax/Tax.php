<?php

namespace App\Models\Tax;

use App\Models\Territories\Country;
use App\Presenters\Taxes\TaxPresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tax extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the country that owns the Tax
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function present()
    {
        return new TaxPresenter($this);
    }
}
