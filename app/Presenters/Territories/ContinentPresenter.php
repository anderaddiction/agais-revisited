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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('continent.show', $this->continent) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('continent.edit', $this->continent) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('continent.destroy', $this->continent) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('continent.edit', $this->continent) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
