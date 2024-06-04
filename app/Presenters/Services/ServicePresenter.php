<?php

namespace App\Presenters\Entities;

use App\Models\Entities\PaymentGateway;
use App\Models\Services\Service;

class ServicePresenter
{
    protected $service;

    public function __construct(Service $service)
    {
        return $this->service = $service;
    }

    public function code()
    {
        return $this->service->code;
    }


    public function name()
    {
        return $this->service->name;
    }

    public function categories()
    {
        return $this->service->categories->pluck('name')->implode(', ');
    }

    public function slug()
    {
        return $this->service->slug;
    }

    public function status()
    {
        if ($this->service->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->service->note;
    }

    public function created_at()
    {
        return $this->service->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('service.show', $this->service) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('service.edit', $this->service) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('service.edit', $this->service) . '">Editar</a>
                </div>
            </div>';
    }
}
