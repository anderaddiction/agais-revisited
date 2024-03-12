<?php

namespace App\Models\Categories;

use App\Models\Entities\Urbanism;
use App\Models\Scheduling\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Category\CategoryPresenter;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    /**
     * Get all of the events for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'event_id', 'id');
    }

    /**
     * Get all of the urbanism for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function urbanism(): HasMany
    {
        return $this->hasMany(Urbanism::class, 'category_id', 'id');
    }

    public function present()
    {
        return new CategoryPresenter($this);
    }
}
