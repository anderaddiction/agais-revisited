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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('document.show', $this->document) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('document.edit', $this->document) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('document.destroy', $this->document) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('document.edit', $this->document) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
