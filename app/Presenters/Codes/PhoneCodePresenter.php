<?php

namespace App\Presenters\Codes;

use App\Models\Codes\PhoneCode;

class PhoneCodePresenter
{
    protected $phone;

    public function __construct(PhoneCode $phone)
    {
        return $this->phone = $phone;
    }

    public function code()
    {
        return $this->phone->code;
    }

    public function phoneCode()
    {
        return $this->phone->phone_code;
    }

    public function flag()
    {
        return $this->phone->countries->pluck('flag')->implode(' ');
    }

    public function slug()
    {
        return $this->phone->slug;
    }

    public function status()
    {
        if ($this->phone->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->phone->note;
    }

    public function created_at()
    {
        return $this->phone->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('phone.show', $this->phone) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('phone.edit', $this->phone) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('phone.edit', $this->phone) . '">Editar</a>
                </div>
            </div>';
    }
}
