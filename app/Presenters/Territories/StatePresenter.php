<?php

namespace App\Presenters\Territories;

use App\Models\Territories\State;

class StatePresenter
{
    protected $state;

    public function __construct(State $state)
    {
        return $this->state = $state;
    }

    public function code()
    {
        return $this->state->code;
    }

    public function name()
    {
        return $this->state->name;
    }

    public function iso()
    {
        return $this->state->iso;
    }

    public function flag()
    {
        return $this->state->country->flag;
    }

    public function continent()
    {
        return $this->state->country->continent->name;
    }

    public function slug()
    {
        return $this->state->slug;
    }


    public function note()
    {
        return $this->state->note;
    }

    public function created_at()
    {
        return $this->state->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('state.show', $this->state) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('state.edit', $this->state) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('state.edit', $this->state) . '">Editar</a>
                </div>
            </div>';
    }
}
