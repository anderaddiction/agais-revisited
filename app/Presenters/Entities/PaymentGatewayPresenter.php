<?php

namespace App\Presenters\Entities;

use App\Models\Entities\PaymentGateway;


class PaymentGatewayPresenter
{
    protected $payment_gateway;

    public function __construct(PaymentGateway $payment_gateway)
    {
        return $this->payment_gateway = $payment_gateway;
    }

    public function code()
    {
        return $this->payment_gateway->code;
    }

    public function platform()
    {
        return $this->payment_gateway->platform;
    }

    public function name()
    {
        return $this->payment_gateway->name;
    }

    public function flag()
    {
        return $this->payment_gateway->countries->pluck('flag')->implode(' ');
    }

    public function slug()
    {
        return $this->payment_gateway->slug;
    }

    public function status()
    {
        if ($this->payment_gateway->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->payment_gateway->note;
    }

    public function created_at()
    {
        return $this->payment_gateway->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('payment_gateway.show', $this->payment_gateway) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('payment_gateway.edit', $this->payment_gateway) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('payment_gateway.edit', $this->payment_gateway) . '">Editar</a>
                </div>
            </div>';
    }
}
