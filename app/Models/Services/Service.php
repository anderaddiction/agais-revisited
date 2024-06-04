<?php

namespace App\Models\Services;

use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\Model;
use App\Presenters\Services\ServicePresenter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * The categories that belong to the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'assigned_service', 'service_id', 'category_id');
    }

    public function present()
    {
        return new ServicePresenter($this);
    }
}
