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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('municipality.show', $this->municipality) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('municipality.edit', $this->municipality) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('municipality.destroy', $this->municipality) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('municipality.edit', $this->municipality) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
