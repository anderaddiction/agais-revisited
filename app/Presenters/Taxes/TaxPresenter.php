<?php

namespace App\Presenters\Taxes;


use App\Models\Tax\Tax;

class TaxPresenter
{
    protected $tax;

    public function __construct(Tax $tax)
    {
        return $this->tax = $tax;
    }

    public function code()
    {
        return $this->tax->code;
    }

    public function name()
    {
        return $this->tax->name;
    }

    public function acronym()
    {
        return $this->tax->acronym;
    }

    public function percent()
    {
        return $this->tax->percent . '%';
    }

    public function flag()
    {
        return $this->tax->country->flag;
    }

    public function status()
    {
        if ($this->tax->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->tax->note;
    }

    public function created_at()
    {
        return $this->tax->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('tax.show', $this->tax) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('tax.edit', $this->tax) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('tax.edit', $this->tax) . '">Editar</a>
                </div>
            </div>';
    }
}
