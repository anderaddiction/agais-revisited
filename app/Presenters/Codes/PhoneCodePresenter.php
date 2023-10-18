<?php

namespace App\Presenters\Codes;

use App\Models\Codes\PhoneCode;

class PhoneCodePresenter
{
    protected $phone;

    public function __construct(PhoneCode $phone)
    {
        return $this->phone = $phone;
    }

    public function code()
    {
        return $this->phone->code;
    }

    public function phoneCode()
    {
        return $this->phone->phone_code;
    }

    public function flag()
    {
        return $this->phone->countries->pluck('flag')->implode(' ');
    }

    public function slug()
    {
        return $this->phone->slug;
    }

    public function status()
    {
        if ($this->phone->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function note()
    {
        return $this->phone->note;
    }

    public function created_at()
    {
        return $this->phone->created_at->diffForHumans();
    }

    public function actionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('phone.show', $this->phone) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('phone.edit', $this->phone) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('phone.destroy', $this->phone) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('phone.edit', $this->phone) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
