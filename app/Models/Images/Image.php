<?php

namespace App\Models\Images;

use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\Model;
use App\Presenters\Images\ImagePresenter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * The categories that belong to the Image
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'assigned_images', 'image_id', 'category_id');
    }

    public function present()
    {
        return new ImagePresenter($this);
    }
}
