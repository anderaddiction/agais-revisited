<?php

namespace App\Presenters\Territories;

use App\Models\Territories\City;

class CityPresenter
{
    protected $city;

    public function __construct(City $city)
    {
        return $this->city = $city;
    }

    public function code()
    {
        return $this->city->code;
    }

    public function name()
    {
        return $this->city->name;
    }

    public function flag()
    {
        return $this->city->state->country->flag;
    }

    public function continent()
    {
        return $this->city->state->country->continent->name;
    }

    public function state()
    {
        return $this->city->state->name;
    }

    public function slug()
    {
        return $this->city->slug;
    }


    public function note()
    {
        return $this->city->note;
    }

    public function created_at()
    {
        return $this->city->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('city.show', $this->city) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('city.edit', $this->city) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('city.edit', $this->city) . '">Editar</a>
                </div>
            </div>';
    }
}
