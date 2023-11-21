<?php

namespace Database\Seeders\Entities;

use Illuminate\Support\Str;
use App\Models\Entities\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = '100% Banco',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ],
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Bancamiga',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'BanCaribe',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Activo',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Agrícola de Venezuela	',
                'capital_type'  => 1,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Bicentenario del Pueblo',
                'capital_type'  => 1,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Caroní',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco del Tesoro',
                'capital_type'  => 1,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Exterior',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Internacional de Desarrollo',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Mercantil',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Nacional de Crédito BNC',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Plaza',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Sofitasa',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banco Venezolano de Crédito',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Bancrecer',
                'capital_type'  => 0,
                'bank_type'     => 2,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banesco',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'BANFANB',
                'capital_type'  => 1,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Bangente',
                'capital_type'  => 0,
                'bank_type'     => 2,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Banplus',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'BBVA Provincial',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'BDV Banco de Venezuela',
                'capital_type'  => 1,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'BFC Banco Fondo Común',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Del Sur',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Instituto Municipal de Crédito Popular (IMCP)',
                'capital_type'  => 1,
                'bank_type'     => 3,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );

        Bank::create(
            [
                'code'          => uniqueCode(),
                'name'          => $name = 'Mi Banco',
                'capital_type'  => 0,
                'bank_type'     => 1,
                'slug'          => Str::slug($name),
                'status'        => 1,
                'note'          => 'N/A',
            ]
        );
    }
}
