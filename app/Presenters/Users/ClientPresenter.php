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
        return $this->client->roles->pluck('display_name')->implode(' ');
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
            return '<span class="badge bg-success font-size-12">Activo</span>';
        } else {
            return '<span class="badge bg-danger font-size-12">Inactivo</span>';
        }
    }

    public function document()
    {
        return $this->client->document->acronym . ' ' . $this->client->id_number;
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
        return '
            <div class="dropdown align-self-start">
                <a class="dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="' . route('client.show', $this->client) . '">Ver</a>
                    <a class="dropdown-item" href="' . route('client.edit', $this->client) . '">Editar</a>
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
                    <a class="dropdown-item" href="' . route('client.edit', $this->client) . '">Editar</a>
                </div>
            </div>';
    }
}
