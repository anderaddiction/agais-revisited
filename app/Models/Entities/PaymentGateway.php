<?php

namespace App\Models\Entities;

use App\Models\Territories\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Entities\PaymentGatewayPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PaymentGateway extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * The countries that belong to the PaymentGateway
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'assigned_payment_gateways', 'payment_gateway_id', 'country_id');
    }

    function present()
    {
        return new PaymentGatewayPresenter($this);
    }
}
