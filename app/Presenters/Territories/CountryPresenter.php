<?php

namespace App\Presenters\Territories;

use Illuminate\Support\Str;
use App\Models\Territories\country;

class CountryPresenter
{
    protected $country;

    public function __construct(country $country)
    {
        return $this->country = $country;
    }

    public function code()
    {
        return $this->country->code;
    }

    public function name()
    {
        return $this->country->name;
    }

    public function iso2()
    {
        return upperCase($this->country->iso2);
    }

    public function iso3()
    {
        return upperCase($this->country->iso3);
    }

    public function flag()
    {
        return $this->country->flag;
    }

    public function continent()
    {
        return $this->country->continent->name;
    }

    public function slug()
    {
        return $this->country->slug;
    }


    public function note()
    {
        return $this->country->note;
    }

    public function created_at()
    {
        return $this->country->created_at->diffForHumans();
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
                    <a class="dropdown-item btn-show-crud" href="#" data-route="' . route('country.show', $this->country) . '" data-url="' . route('country.getdata', $this->country) . '"
                    data-urlModule="countries">Ver</a>
                    <a class="dropdown-item" href="' . route('country.edit', $this->country) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('country.edit', $this->country) . '">Editar</a>
                </div>
            </div>';
    }
}
