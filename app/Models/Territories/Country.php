<?php

namespace App\Models\Territories;

use App\Models\Tax\Tax;
use App\Models\Entities\Bank;
use App\Models\Codes\PhoneCode;
use App\Models\Entities\Currency;
use App\Models\Entities\Urbanism;
use App\Models\Documents\Document;
use App\Models\Entities\PaymentGateway;
use App\Models\Users\Clients\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Territories\CountryPresenter;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    /**
     * Get the continent that owns the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function continent(): BelongsTo
    {
        return $this->belongsTo(Continent::class, 'continent_id');
    }

    /**
     * Get all of the sates for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sates(): HasMany
    {
        return $this->hasMany(State::class, 'country_id', 'id');
    }

    /**
     * Get all of the banks for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function banks(): HasMany
    {
        return $this->hasMany(Bank::class, 'bank_id', 'id');
    }

    /**
     * Get all of the phoneCodes for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phoneCodes(): HasMany
    {
        return $this->hasMany(PhoneCode::class, 'phone_code_id', 'id');
    }

    /**
     * Get all of the documents for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documents(): HasMany
    {
        return $this->hasMany(Document::class, 'document_id', 'id');
    }

    /**
     * Get all of the currencies for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function currencies(): HasMany
    {
        return $this->hasMany(Currency::class, 'currency_id', 'id');
    }

    /**
     * Get all of the clients for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'country_id', 'id');
    }

    /**
     * Get all of the urbanism for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function urbanism(): HasMany
    {
        return $this->hasMany(Urbanism::class, 'country_id', 'id');
    }
    /**
     * Get the Tax associated with the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tax(): HasOne
    {
        return $this->hasOne(Tax::class, 'country_id', 'id');
    }

    /**
     * Get all of the paymentGateways for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentGateways(): HasMany
    {
        return $this->hasMany(PaymentGateway::class, 'country_id', 'id');
    }

    public function present()
    {
        return new CountryPresenter($this);
    }
}
