<?php

namespace App\Models\Invoices;

use App\Presenters\Invoices\InvoicePresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function presenter()
    {
        return new InvoicePresenter($this);
    }
}
