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
        return '
            <div class="dropdown align-self-start">
                <a class="dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item btn-show-crud" href="#" data-route="' . route('currency.show', $this->currency) . '" data-url="' . route('currency.getdata', $this->currency) . '"
                    data-urlModule="currencies">Ver</a>
                    <a class="dropdown-item" href="' . route('currency.edit', $this->currency) . '">Editar</a>
                </div>
            </div>
        ';
    }

    public function showActionButton()
    {
        return '<div class="dropdown align-self-start">
                <a class="dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="' . route('currency.edit', $this->currency) . '">Editar</a>
                </div>
            </div>';
    }
}
