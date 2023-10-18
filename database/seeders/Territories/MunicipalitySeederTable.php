<?php

namespace Database\Seeders\Territories;

use Illuminate\Database\Seeder;
use App\Models\Territories\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MunicipalitySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Municipality::create([
            'name'      => $name = 'Alto Orinoco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '1',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Atabapo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '1',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Atures',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '1',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Autana',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '1',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Manapiare',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '1',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Maroa',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '1',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Río Negro',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '1',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Anaco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Aragua',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bruzual',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cajigal',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Carvajal',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Freites',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guanipa',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guanta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Independencia',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertad',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sir Arthur McGregor',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Miranda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Monagas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Peñalver',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Píritu',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Juan de Capistrano',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Santa Ana',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Simón Rodríguez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sotillo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Turístico Diego Bautista Urbaneja',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '2',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Achaguas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '3',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Biruaca',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '3',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Pedro Camejo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '3',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Muñoz',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '3',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Páez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '3',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Rómulo Gallegos',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '3',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Fernando',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '3',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Alcántara',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);


        Municipality::create([
            'name'      => $name = 'Camatagua',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Girardot',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Iragorry',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Lamas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Mariño',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Michelena',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ocumare de la Costa de Oro',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Revenga',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ribas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Casimiro',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Sebastián',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Tovar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Urdaneta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Zamora',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '4',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Alberto Arvelo Torrealba',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Andrés Eloy Blanco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Antonio José de Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Arismendi',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Barinas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cruz Paredes',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ezequiel Zamora',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Obispos',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Pedraza',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Rojas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sosa',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '5',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Angostura',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Angostura del Orinoco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Caroní',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cedeño',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Chien',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'El Callao',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Gran Sabana',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Piar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Roscio',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sifontes',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '6',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bejuma',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Carlos Arvelo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Diego Ibarra',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guacara',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Juan José Mora',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Los Guayos',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Miranda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Montalbán',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Naguanagua',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Puerto Cabello',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Diego',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Joaquín',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Valencia',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '7',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Anzoátegui',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ezequiel Zamora',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Girardot',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Lima Blanco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Pao de San Juan Bautista',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ricaurte',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Rómulo Gallegos',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Tinaco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Tinaquillo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '8',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Antonio Díaz',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '9',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Casacoima',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '9',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Pedernales',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '9',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Tucupita',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '9',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertador ',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '10',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Acosta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Buchivacoa',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Carirubana',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Colina',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Dabajuro',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Democracia',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Falcón',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Federación',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Iturriza',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Jacura',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Los Taques',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Manaure',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Mauroa',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Miranda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Palmasola',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Petit',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Píritu',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Francisco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Silva',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Tocópero',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Unión',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Urumaco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Zamora',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '11',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Camaguán',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Chaguaramas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'El Socorro',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Francisco de Miranda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'José Félix Ribas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'José Tadeo Monagas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Juan Germán Roscio',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Juan José Rondón',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Julián Mellado',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Leonardo Infante',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ortiz',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Gerónimo de Guayabal',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San José de Guaribe',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Santa María de Ipire',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Zaraza',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '12',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Vargas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '13',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Andrés Eloy Blanco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Crespo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Iribarren',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Jiménez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Morán',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Palavecino',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Simón Planas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Torres',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Urdaneta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '14',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Alberto Adriani',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Andrés Bello',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Antonio Pinto Salinas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Aricagua',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Arzobispo Chacón',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Campo Elías',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Caracciolo Parra Olmedo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cardenal Quintero',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guaraque',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Julio Cesar Salas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Justo Briceño',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Miranda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Obispo Ramos de Lora',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Padre Noguera',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Pueblo Llano',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Rangel',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Rivas Dávila',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Santos Marquina',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Tovar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Tulio Febres Cordero',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Zea',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '15',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Acevedo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Andrés Bello',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Baruta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Brión',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Buroz',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Carrizal',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Chacao',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cristóbal Rojas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'El Hatillo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guaicaipuro',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Gual',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Independencia',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Lander',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Los Salias',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Páez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Paz Castillo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Plaza',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Urdaneta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Zamora',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '16',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Acosta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Aguasay',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Caripe',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cedeño',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Maturín',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Piar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Punceres',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Santa Bárbara',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sotillo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Uracoa',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Zamora',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '17',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Antolín del Campo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Antonio Díaz',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Arismendi',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'García',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Gómez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Macanao',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Maneiro',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Marcano',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Mariño',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Tubores',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Villalba',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '18',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Agua Blanca',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Araure',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Esteller',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guanare',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guanarito',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'José Vicente de Unda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ospino',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Páez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Papelón',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Genaro de Boconoíto',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Rafael de Onoto',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Santa Rosalía',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Turén',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '19',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Andrés Eloy Blanco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Andrés Mata',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Arismendi',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Benítez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bermúdez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cajigal',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cruz Salmerón Acosta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Mariño',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Mejía',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Montes',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ribero',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Valdez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '20',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Andrés Bello',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Antonio Rómulo Costa',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Ayacucho',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cárdenas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Córdoba',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Fernández',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Francisco de Miranda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'García de Hevia',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guásimos',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Independencia',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Jáuregui',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'José María Vargas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Junín',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertad',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Lobatera',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Michelena',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Panamericano',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Pedro María Ureña',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Rafael Urdaneta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Samuel Dario Maldonado',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Cristóbal',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Judas Tadeo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Seboruco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Simón Rodríguez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Torbes',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Uribante',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '21',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Andrés Bello',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Boconó',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Candelaria',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Carache',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Carvajal',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Escuque',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Juan Vicente Campo Elías',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'La Ceiba',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Márquez Cañizales',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Miranda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Monte Carmelo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Motatán',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Pampán',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Pampanito',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Rangel',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Trujillo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Urdaneta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Valera',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Arístides Bastidas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Bruzual',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cocorote',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Independencia',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'José Antonio Páez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'La Trinidad',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Manuel Monge',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Nirgua',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Peña',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Felipe',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Urachiche',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Veroes',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '23',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Almirante Padilla',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Baralt',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Cabimas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Catatumbo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Colón',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Francisco Javier Pulgar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Guajira',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Jesús Enrique Lossada',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Jesús María Semprún',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'La Cañada de Urdaneta',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Lagunillas',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Machiques',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Mara',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Maracaibo',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Miranda',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Rosario de Perijá',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'San Francisco',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Santa Rita',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Simón Bolívar',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Valmore Rodríguez',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '24',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);

        Municipality::create([
            'name'      => $name = 'Betijoque',
            'code'      => $code = uniqueCode(),
            'state_id'  => $state = '22',
            'slug'       => generateUrl($name . ' ' . $code . '' . $state),
            'note'      => 'N/A',
        ]);
    }
}
