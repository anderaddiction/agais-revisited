<?php

namespace App\Models\Territories;

use App\Models\Users\Clients\Client;
use Illuminate\Database\Eloquent\Model;
use App\Models\Territories\Municipality;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Territories\ParishPresenter;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parish extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the municipality that owns the Parish
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class, 'municipality_id');
    }

    /**
     * Get all of the clients for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'parish_id', 'id');
    }

    public function present()
    {
        return new ParishPresenter($this);
    }
}
