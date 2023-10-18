<?php

namespace App\Presenters\Entities;

use App\Models\Entities\Currency;

class CurrencyPresenter
{
    protected $currency;

    public function __construct(Currency $currency)
    {
        return $this->currency = $currency;
    }

    public function code()
    {
        return $this->currency->code;
    }

    public function name()
    {
        return $this->currency->name;
    }

    public function symbol()
    {
        return $this->currency->symbol;
    }

    public function iso()
    {
        return $this->currency->iso;
    }

    public function flag()
    {
        return $this->currency->countries->pluck('flag')->implode(' ');
    }

    public function slug()
    {
        return $this->currency->slug;
    }

    public function status()
    {
        if ($this->currency->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->currency->note;
    }

    public function created_at()
    {
        return $this->currency->created_at->diffForHumans();
    }

    public function actionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('currency.show', $this->currency) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('currency.edit', $this->currency) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('currency.destroy', $this->currency) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('currency.edit', $this->currency) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
