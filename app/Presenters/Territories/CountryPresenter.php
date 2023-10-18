<?php

namespace App\Presenters\Territories;

use Illuminate\Support\Str;
use App\Models\Territories\country;

class countryPresenter
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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('country.show', $this->country) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('country.edit', $this->country) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('country.destroy', $this->country) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('country.edit', $this->country) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
