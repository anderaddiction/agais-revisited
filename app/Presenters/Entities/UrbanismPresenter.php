<?php

namespace App\Presenters\Entities;

use App\Models\Entities\Urbanism;

class UrbanismPresenter
{
    protected $urbanism;

    public function __construct(Urbanism $urbanism)
    {
        return $this->urbanism = $urbanism;
    }

    public function code()
    {
        return $this->urbanism->code;
    }

    public function name()
    {
        return $this->urbanism->name;
    }

    public function phone()
    {
        return $this->urbanism->phone_one;
    }

    public function phoneAlt()
    {
        return $this->urbanism->phone_alt;
    }

    public function email()
    {
        return $this->urbanism->email;
    }

    public function emailAlt()
    {
        return $this->urbanism->email_alt;
    }

    public function flag()
    {
        return $this->urbanism->country->flag;
    }

    public function state()
    {
        return $this->urbanism->state->name;
    }

    public function municipality()
    {
        return $this->urbanism->municipality->name;
    }

    public function parish()
    {
        return $this->urbanism->parish->name;
    }

    public function city()
    {
        return $this->urbanism->city->name;
    }

    public function address()
    {
        return $this->urbanism->address;
    }

    public function type()
    {
        return $this->urbanism->type;
    }

    public function urbanismType()
    {
        if ($this->urbanism->urbanism_type == 1) {
            return '' . __('Universal') . '';
        } elseif ($this->urbanism->urbanism_type == 2) {
            return '' . __('Microfinance') . '';
        } elseif ($this->urbanism->urbanism_type == 3) {
            return '' . __('Municipal Credit Institute') . '';
        }
    }

    public function slug()
    {
        return $this->urbanism->slug;
    }

    public function status()
    {
        if ($this->urbanism->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->urbanism->note;
    }

    public function created_at()
    {
        return $this->urbanism->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('urbanism.show', $this->urbanism) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('urbanism.edit', $this->urbanism) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('urbanism.edit', $this->urbanism) . '">Editar</a>
                </div>
            </div>';
    }
}
