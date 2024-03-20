<?php

namespace App\Presenters\Territories;


use Carbon\Carbon;
use App\Models\Territories\Continent;

class ContinentPresenter
{
    protected $continent;

    public function __construct(Continent $continent)
    {
        return $this->continent = $continent;
    }

    public function name()
    {
        return $this->continent->name;
    }

    public function code()
    {
        return $this->continent->code;
    }

    public function slug()
    {
        return $this->continent->slug;
    }

    public function note()
    {
        return $this->continent->note;
    }

    public function created_at()
    {
        return $this->continent->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('continent.show', $this->continent) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('continent.edit', $this->continent) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('continent.edit', $this->continent) . '">Editar</a>
                </div>
            </div>';
    }
}
