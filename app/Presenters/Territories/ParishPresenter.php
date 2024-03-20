<?php

namespace App\Presenters\Territories;

use App\Models\Territories\Parish;

class ParishPresenter
{
    protected $parish;

    public function __construct(Parish $parish)
    {
        return $this->parish = $parish;
    }

    public function code()
    {
        return $this->parish->code;
    }

    public function name()
    {
        return $this->parish->name;
    }

    public function flag()
    {
        return $this->parish->municipality->state->country->flag;
    }

    public function state()
    {
        return $this->parish->municipality->state->name;
    }

    public function municipality()
    {
        return $this->parish->municipality->name;
    }

    public function continent()
    {
        return $this->parish->municipality->state->country->continent->name;
    }

    public function slug()
    {
        return $this->parish->slug;
    }


    public function note()
    {
        return $this->parish->note;
    }

    public function created_at()
    {
        return $this->parish->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('parish.show', $this->parish) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('parish.edit', $this->parish) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('parish.edit', $this->parish) . '">Editar</a>
                </div>
            </div>';
    }
}
