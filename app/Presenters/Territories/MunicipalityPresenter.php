<?php

namespace App\Presenters\Territories;

use App\Models\Territories\Municipality;

class MunicipalityPresenter
{
    protected $municipality;

    public function __construct(Municipality $municipality)
    {
        return $this->municipality = $municipality;
    }

    public function code()
    {
        return $this->municipality->code;
    }

    public function name()
    {
        return $this->municipality->name;
    }

    public function flag()
    {
        return $this->municipality->state->country->flag;
    }

    public function continent()
    {
        return $this->municipality->state->country->continent->name;
    }

    public function state()
    {
        return $this->municipality->state->name;
    }

    public function slug()
    {
        return $this->municipality->slug;
    }


    public function note()
    {
        return $this->municipality->note;
    }

    public function created_at()
    {
        return $this->municipality->created_at->diffForHumans();
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
                    <a class="dropdown-item btn-show-crud" href="#" data-route="' . route('municipality.show', $this->municipality) . '" data-url="' . route('municipality.getdata', $this->municipality) . '"
                    data-urlModule="municipalities">Ver</a>
                    <a class="dropdown-item" href="' . route('municipality.edit', $this->municipality) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('municipality.edit', $this->municipality) . '">Editar</a>
                </div>
            </div>';
    }
}
