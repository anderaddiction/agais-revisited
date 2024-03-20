<?php

namespace App\Presenters\Entities;

use App\Models\Entities\Bank;

class BankPresenter
{
    protected $bank;

    public function __construct(Bank $bank)
    {
        return $this->bank = $bank;
    }

    public function code()
    {
        return $this->bank->code;
    }

    public function name()
    {
        return $this->bank->name;
    }

    public function flag()
    {
        return $this->bank->countries->pluck('flag')->implode(' ');
    }

    public function capitalType()
    {
        if ($this->bank->capital_type == 1) {
            return '' . __('Public') . '';
        } else {
            return '' . __('Private') . '';
        }
    }

    public function bankType()
    {
        if ($this->bank->bank_type == 1) {
            return '' . __('Universal') . '';
        } elseif ($this->bank->bank_type == 2) {
            return '' . __('Microfinance') . '';
        } elseif ($this->bank->bank_type == 3) {
            return '' . __('Municipal Credit Institute') . '';
        }
    }

    public function slug()
    {
        return $this->bank->slug;
    }

    public function status()
    {
        if ($this->bank->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->bank->note;
    }

    public function created_at()
    {
        return $this->bank->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('bank.show', $this->bank) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('bank.edit', $this->bank) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('bank.edit', $this->bank) . '">Editar</a>
                </div>
            </div>';
    }
}
