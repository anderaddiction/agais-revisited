<?php

namespace App\Models\Territories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Territories\Municipality;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Territories\ParishPresenter;
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

    public function present()
    {
        return new ParishPresenter($this);
    }
}
