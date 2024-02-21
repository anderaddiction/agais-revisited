<?php

namespace App\Presenters\Scheduling;

use App\Models\Scheduling\Event;

class EventPresenter
{
    protected $event;

    public function __construct(Event $event)
    {
        return $this->event = $event;
    }

    public function code()
    {
        return $this->event->code;
    }

    public function name()
    {
        return $this->event->name;
    }

    public function status()
    {
        if ($this->event->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function slug()
    {
        return $this->event->slug;
    }

    public function note()
    {
        return $this->event->note;
    }

    public function created_at()
    {
        return $this->event->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('event.show', $this->event) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('event.edit', $this->event) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('event.edit', $this->event) . '">Editar</a>
                </div>
            </div>';
    }
}
