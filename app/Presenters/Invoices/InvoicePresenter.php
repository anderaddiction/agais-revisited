<?php

namespace App\Presenters\Invoices;

use App\Models\Invoices\Invoice;

class InvoicePresenter
{
    protected $invoice;

    public function __construct(Invoice $invoice)
    {
        return $this->invoice = $invoice;
    }

    public function code()
    {
        return $this->invoice->code;
    }

    public function name()
    {
        return $this->invoice->name;
    }

    public function status()
    {
        if ($this->invoice->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function slug()
    {
        return $this->invoice->slug;
    }

    public function note()
    {
        return $this->invoice->note;
    }

    public function created_at()
    {
        return $this->invoice->created_at->diffForHumans();
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
                    <a class="dropdown-item" href="' . route('invoice.show', $this->invoice) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('invoice.edit', $this->invoice) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('invoice.edit', $this->invoice) . '">Editar</a>
                </div>
            </div>';
    }
}
