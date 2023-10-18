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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('city.show', $this->city) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('city.edit', $this->city) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('city.destroy', $this->city) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('city.edit', $this->city) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
