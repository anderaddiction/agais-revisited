<?php

namespace App\Models\Communications\Messenger;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Messenger extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    function getRouteKey()
    {
        return 'url';
    }
}
