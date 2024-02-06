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
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('invoice.show', $this->invoice) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('invoice.edit', $this->invoice) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('invoice.destroy', $this->invoice) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('invoice.edit', $this->invoice) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
