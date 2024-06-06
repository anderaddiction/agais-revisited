<?php

namespace App\Presenters\Documents;

use App\Models\Documents\Document;

class DocumentPresenter
{
    protected $document;

    public function __construct(Document $document)
    {
        return $this->document = $document;
    }

    public function code()
    {
        return $this->document->code;
    }

    public function name()
    {
        return $this->document->name;
    }

    public function acronym()
    {
        return $this->document->acronym;
    }

    public function flag()
    {
        return $this->document->countries->pluck('flag')->implode(' ');
    }

    public function slug()
    {
        return $this->document->slug;
    }

    public function status()
    {
        if ($this->document->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->document->note;
    }

    public function created_at()
    {
        return $this->document->created_at->diffForHumans();
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
                    <a class="dropdown-item btn-show-crud" href="#" data-route="' . route('document.show', $this->document) . '" data-url="' . route('document.getdata', $this->document) . '"
                    data-urlModule="documents">Ver</a>
                    <a class="dropdown-item" href="' . route('document.edit', $this->document) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('document.edit', $this->document) . '">Editar</a>
                </div>
            </div>';
    }
}
