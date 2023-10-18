<?php

namespace Database\Seeders\Territories;

use Illuminate\Database\Seeder;
use App\Models\Territories\Continent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContintentSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'África',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'América',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Asia',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Europa',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Oceania',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Antartida',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Territorios Dependientes Asiaticos',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Estados con Reconocimiento Limitado Asiaticos',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Territorios Dependientes Américanos',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Territorios Dependientes Oceianicos',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Estados con Reconocimiento Limitado Europeos',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = 'Países Americanos Integrados en Estados No Americanos',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);

        Continent::create([
            'code'  =>  uniqueCode(),
            'name'  =>  $name = ' Regiones Administrativas Especiales de la República Popular de China',
            'slug'   =>  generateUrl($name),
            'note'  =>  'N/A',
        ]);
    }
}
