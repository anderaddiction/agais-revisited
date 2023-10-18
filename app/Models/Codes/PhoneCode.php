<?php

namespace App\Models\Codes;

use App\Models\Territories\Country;
use Illuminate\Database\Eloquent\Model;
use App\Presenters\Codes\PhoneCodePresenter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PhoneCode extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The countries that belong to the PhoneCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'assigned_phones', 'country_id', 'phone_code_id');
    }

    public function present()
    {
        return new PhoneCodePresenter($this);
    }
}
