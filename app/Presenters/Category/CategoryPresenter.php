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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('category.show', $this->category) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('category.edit', $this->category) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('category.destroy', $this->category) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('category.edit', $this->category) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
