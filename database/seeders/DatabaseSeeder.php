<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Entities\BankSeederTable;
use Illuminate\Database\Seeder;
use Database\Seeders\Territories\StateSeederTable;
use Database\Seeders\Territories\ParishSeederTable;
use Database\Seeders\Territories\CountrySeederTable;
use Database\Seeders\Territories\ContintentSeederTable;
use Database\Seeders\Territories\MunicipalitySeederTable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ContintentSeederTable::class);
        $this->call(CountrySeederTable::class);
        $this->call(StateSeederTable::class);
        $this->call(MunicipalitySeederTable::class);
        $this->call(ParishSeederTable::class);
        $this->call(BankSeederTable::class);
    }
}
