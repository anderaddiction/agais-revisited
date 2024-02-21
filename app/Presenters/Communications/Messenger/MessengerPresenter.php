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
        return '
            <div class="dropdown align-self-start">
                <a class="dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="' . route('messenger.show', $this->messenger) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('messenger.edit', $this->messenger) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('messenger.edit', $this->messenger) . '">Editar</a>
                </div>
            </div>';
    }
}
