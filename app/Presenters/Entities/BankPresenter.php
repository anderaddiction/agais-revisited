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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('bank.show', $this->bank) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('bank.edit', $this->bank) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('bank.destroy', $this->bank) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('bank.edit', $this->bank) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
