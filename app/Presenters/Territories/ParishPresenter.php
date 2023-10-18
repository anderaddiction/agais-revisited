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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('parish.show', $this->parish) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('parish.edit', $this->parish) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('parish.destroy', $this->parish) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('parish.edit', $this->parish) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
