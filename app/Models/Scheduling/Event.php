<?php

namespace App\Models\Scheduling;

use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\Model;
use App\Presenters\Scheduling\EventPresenter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    /**
     * The categories that belong to the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'assigned_categories', 'event_id', 'category_id');
    }

    public function present()
    {
        return new EventPresenter($this);
    }
}
