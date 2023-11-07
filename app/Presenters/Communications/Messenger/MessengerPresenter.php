<?php

namespace App\Presenters\Communications\Messenger;

use App\Models\Communications\Messenger\Messenger;


class MessengerPresenter
{
    protected $messenger;

    public function __construct(Messenger $messenger)
    {
        return $this->messenger = $messenger;
    }

    public function code()
    {
        return $this->messenger->code;
    }

    public function name()
    {
        return $this->messenger->name;
    }

    public function acronym()
    {
        return $this->messenger->acronym;
    }

    public function flag()
    {
        return $this->messenger->countries->pluck('flag')->implode(' ');
    }

    public function slug()
    {
        return $this->messenger->slug;
    }

    public function status()
    {
        if ($this->messenger->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->messenger->note;
    }

    public function created_at()
    {
        return $this->messenger->created_at->diffForHumans();
    }

    public function actionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('messenger.show', $this->messenger) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('messenger.edit', $this->messenger) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('messenger.destroy', $this->messenger) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('messenger.edit', $this->messenger) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
