<?php

namespace App\Presenters\Users;

use App\Models\Users\Clients\Client;

class ClientPresenter
{
    protected $client;

    public function __construct(Client $client)
    {
        return $this->client = $client;
    }

    public function code()
    {
        return $this->client->code;
    }

    public function name()
    {
        return $this->client->name;
    }

    public function secondName()
    {
        return $this->client->second_name;
    }

    public function lastName()
    {
        return $this->client->last_name;
    }

    public function secondLastName()
    {
        return $this->client->second_last_namename;
    }

    public function fullName()
    {
        $full_name = $this->client->name . ' ' . $this->client->second_name . ' ' . $this->client->last_name . ' ' . $this->client->second_last_namename;
        return $full_name;
    }

    public function phone()
    {
        return $this->client->phone_one;
    }

    public function phoneAlt()
    {
        return $this->client->phone_alt;
    }

    public function email()
    {
        return $this->client->email;
    }

    public function emailAlt()
    {
        return $this->client->email_alt;
    }

    public function address()
    {
        return $this->client->address;
    }

    public function country()
    {
        return $this->client->country->name;
    }

    public function flag()
    {
        return $this->client->country->flag;
    }

    public function state()
    {
        return $this->client->state->name;
    }

    public function municipality()
    {
        return $this->client->municipality->name;
    }

    public function parish()
    {
        return $this->client->parish->name;
    }

    public function city()
    {
        return $this->client->city->name;
    }

    public function category()
    {
        return $this->client->category->name;
    }

    public function role()
    {
        return $this->client->roles->display_name;
    }

    public function socialMedia()
    {
        return $this->client->social_media;
    }

    public function avatar()
    {
        return $this->client->avatar;
    }

    public function slug()
    {
        return $this->client->slug;
    }

    public function status()
    {
        if ($this->client->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function document()
    {
        return $this->client->document->acronym;
    }

    public function note()
    {
        return $this->client->note;
    }

    public function created_at()
    {
        return $this->client->created_at->diffForHumans();
    }

    public function actionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('client.show', $this->client) . '" class="btn btn-primary">
                        <i class="mdi mdi-eye font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('client.edit', $this->client) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                    <a href="' . route('client.destroy', $this->client) . '" class="btn btn-danger btn-delete">
                        <i class="bx bx-trash font-size-16 align-middle"></i>
                    </a>
                </div>';
    }

    public function showActionButton()
    {
        return '<div class="d-flex flex-wrap gap-2 btn-group-sm" style="display: flex; justify-content: center;" >
                    <a href="' . route('client.edit', $this->client) . '" class="btn btn-success">
                        <i class="bx bx-edit font-size-16 align-middle"></i>
                    </a>
                </div>';
    }
}
