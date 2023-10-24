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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('event.show', $this->event) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('event.edit', $this->event) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('event.destroy', $this->event) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('event.edit', $this->event) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
