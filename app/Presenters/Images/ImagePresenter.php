<?php

namespace App\Presenters\Images;

use App\Models\Images\Image;

class ImagePresenter
{
    protected $image;

    public function __construct(Image $image)
    {
        return $this->image = $image;
    }

    public function code()
    {
        return $this->image->code;
    }

    public function name()
    {
        return $this->image->name;
    }

    public function category()
    {
        return $this->image->categories->pluck('name')->implode(', ');
    }

    public function imagen()
    {
        return  '<img src="/storage/' . $this->image->image . '" class="avatar-sm rounded-circle" alt="' . $this->image->name . '">';
    }

    public function status()
    {
        if ($this->image->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function width()
    {

        return $this->image->width ? $this->image->width : '500';
    }

    public function height()
    {

        return $this->image->height ? $this->image->height : '500';
    }

    public function note()
    {
        return $this->image->note;
    }

    public function created_at()
    {
        return $this->image->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('image.edit', $this->image) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('image.edit', $this->image) . '">Editar</a>
                </div>
            </div>';
    }
}
