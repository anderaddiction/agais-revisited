<?php

namespace Database\Seeders\Territories;

use Illuminate\Database\Seeder;
use App\Models\Territories\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::create([
            'name'  => $name = 'Amazonas',
            'code'  => uniqueCode(),
            'iso'  => 'VE-Z',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Anzoátegui',
            'code'  => uniqueCode(),
            'iso'  => 'VE-B',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Apure',
            'code'  => uniqueCode(),
            'iso'  => 'VE-C',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Aragua',
            'code'  => uniqueCode(),
            'iso'  => 'VE-D',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Barinas',
            'code'  => uniqueCode(),
            'iso'  => 'VE-E',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Bolívar',
            'code'  => uniqueCode(),
            'iso'  => 'VE-F',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Carabobo',
            'code'  => uniqueCode(),
            'iso'  => 'VE-G',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Cojedes',
            'code'  => uniqueCode(),
            'iso'  => 'VE-H',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Delta Amacuro',
            'code'  => uniqueCode(),
            'iso'  => 'VE-Y',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Distrito Capital',
            'code'  => uniqueCode(),
            'iso'  => 'VE-A',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Falcón',
            'code'  => uniqueCode(),
            'iso'  => 'VE-I',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Guárico',
            'code'  => uniqueCode(),
            'iso'  => 'VE-J',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'La Guaira',
            'code'  => uniqueCode(),
            'iso'  => 'VE-X',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Lara',
            'code'  => uniqueCode(),
            'iso'  => 'VE-K',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Mérida',
            'code'  => uniqueCode(),
            'iso'  => 'VE-L',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Miranda',
            'code'  => uniqueCode(),
            'iso'  => 'VE-M',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Monagas',
            'code'  => uniqueCode(),
            'iso'  => 'VE-N',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Nueva Esparta',
            'code'  => uniqueCode(),
            'iso'  => 'VE-O',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Portuguesa',
            'code'  => uniqueCode(),
            'iso'  => 'VE-P',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Sucre',
            'code'  => uniqueCode(),
            'iso'  => 'VE-R',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Táchira',
            'code'  => uniqueCode(),
            'iso'  => 'VE-S',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Trujillo',
            'code'  => uniqueCode(),
            'iso'  => 'VE-T',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Yaracuy',
            'code'  => uniqueCode(),
            'iso'  => 'VE-U',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);

        State::create([
            'name'  => $name = 'Zulia ',
            'code'  => uniqueCode(),
            'iso'  => 'VE-V ',
            'country_id'  => '243',
            'slug'  => generateUrl($name),
            'note'  => 'N/A',
        ]);
    }
}
