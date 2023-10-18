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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('state.show', $this->state) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('state.edit', $this->state) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('state.destroy', $this->state) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('state.edit', $this->state) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
