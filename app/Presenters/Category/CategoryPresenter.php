<?php

namespace App\Presenters\Category;

use App\Models\Categories\Category;

class CategoryPresenter
{
    protected $category;

    public function __construct(Category $category)
    {
        return $this->category = $category;
    }

    public function code()
    {
        return $this->category->code;
    }

    public function name()
    {
        return $this->category->name;
    }

    public function status()
    {
        if ($this->category->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function slug()
    {
        return $this->category->slug;
    }

    public function note()
    {
        return $this->category->note;
    }

    public function created_at()
    {
        return $this->category->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('category.show', $this->category) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('category.edit', $this->category) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('category.edit', $this->category) . '">Editar</a>
                </div>
            </div>';
    }
}
