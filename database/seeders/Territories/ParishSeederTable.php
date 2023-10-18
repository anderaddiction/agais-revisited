<?php

namespace Database\Seeders\Territories;

use Illuminate\Database\Seeder;
use App\Models\Territories\Parish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParishSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parish::create([
            'name'      => $name = 'La Esmeralda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '1',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Huachamacare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '1',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Marawaka',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '1',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mavaka',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '1',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sierra Parima',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '1',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Atabapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '2',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ucata',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '2',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Yapacana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '2',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caname',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '2',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Fernando Girón Tovar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '3',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Luis Alberto Gómez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '3',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pahueña',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '3',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Platanillal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '3',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Samariapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '4',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sipapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '4',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Munduapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '4',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guayapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '4',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Isla Ratón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '4',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Alto Ventuari',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '5',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Medio Ventuari',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '5',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bajo Ventuari',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '5',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manapiare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '5',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Maroa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '6',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Victorino',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '6',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Comunidad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '6',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Casiquiare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '7',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cocuy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '7',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Carlos de Río Negro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '7',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Solano',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '7',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Anaco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '8',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Joaquín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '8',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Buena Vista',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '8',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cachipo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '9',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aragua de Barcelona',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '9',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Lechería',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '28',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Morro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '28',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Puerto Píritu',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '22',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Miguel',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '22',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '22',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Valle de Guanape',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '13',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Bárbara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '13',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Atapirire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '20',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boca del Pao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '20',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Pao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '20',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pariaguán',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '20',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Guanipa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '15',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guanta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '16',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chorrerón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '16',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mamo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '17',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Soledad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '17',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mapire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '21',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Piar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '21',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Clara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '21',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Diego de Cabrutica',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '21',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Uverito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '21',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Zuata',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '21',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Puerto La Cruz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '27',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pozuelos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '27',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Onoto',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '12',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Pablo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '12',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Mateo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '18',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Carito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '18',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Inés',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '18',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Clarines',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '11',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guanape',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '11',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sabana de Uchire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '11',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cantaura',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '14',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '14',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '14',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urica',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '14',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Píritu',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '23',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '23',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boca de Uchire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '24',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boca de Chávez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '24',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pueblo Nuevo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '25',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Ana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '25',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bergantín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '10',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caigua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '10',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Carmen.',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '10',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Pilar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '10',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Naricual.',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '10',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Cristóbal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '10',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Edmundo Barrios',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '26',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Miguel Otero Silva',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '26',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Chaparro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '19',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tomás Alfaro Calatrava',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '19',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Achaguas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '29',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Apurito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '29',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Yagual',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '29',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guachara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '29',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mucuritas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '29',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Queseras del medio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '29',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Biruaca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '30',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bruzual',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '32',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mantecal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '32',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Quintero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '32',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rincón Hondo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '32',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Vicente',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '32',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan de Payara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '31',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Codazzi',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '31',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cunaviche',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '31',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Fernando',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '35',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Recreo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '35',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Peñalver',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '35',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael de Atamaica',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '35',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guasdualito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '33',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aramendi',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '33',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Amparo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '33',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Camilo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '33',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urdaneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '33',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Elorza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '34',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Trinidad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '34',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '37',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Camatagua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '38',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carmen de Cura',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '38',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '36',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Francisco de Miranda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '36',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Moseñor Feliciano González',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '36',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pedro José Ovalles',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '39',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Joaquín Crespo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '39',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Casanova Godoy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '39',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Madre María de San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '39',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Andrés Eloy Blanco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '39',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Tacarigua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '39',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Delicias',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '39',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Choroní',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '39',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Cruz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '41',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Félix Ribas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '47',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Castor Nieves Ríos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '47',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Guacamayas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '47',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pao de Zárate',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '47',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Zuata',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '47',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Consejo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '46',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Palo Negro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '42',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Martín de Porres',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '42',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Limón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '40',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caña de Azúcar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '40',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ocumare de la Costa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '45',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Casimiro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '48',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Güiripa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '48',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ollas de Caramacate',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '48',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Valle Morín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '48',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Sebastían',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '49',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Turmero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '43',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arévalo Aponte',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '43',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chuao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '43',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Samán de Güere',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '43',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Alfredo Pacheco Miranda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '43',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santos Michelena',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '44',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tiara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '44',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cagua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '50',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bella Vista',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '50',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tovar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '4',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urdaneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '52',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Peñitas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '52',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco de Cara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '52',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Taguay',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '52',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Villa de Cura',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '53',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Magdaleno',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '53',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco de Asís',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '53',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Valles de Tucutunemo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '53',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Augusto Mijares',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '53',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sabaneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '54',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Antonio Rodríguez Domínguez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '54',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Cantón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '55',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Cruz de Guacas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '55',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Puerto Vivas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '55',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ticoporo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '56',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Nicolás Pulido',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '56',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Andrés Bello',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '56',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arismendi',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '57',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guadarrama',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '57',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Unión',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '57',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '57',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Barinas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Alfredo Arvelo Larriva',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Silvestre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Inés',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Lucía',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Torunos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Carmen',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rómulo Betancourt',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Corazón de Jesús',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ramón Ignacio Méndez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Alto Barinas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Palacio Fajardo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Antonio Rodríguez Domínguez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Domingo Ortiz de Páez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '58',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Barinitas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '59',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altamira de Cáceres',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '59',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Calderas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '59',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Barrancas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '60',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Socorro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '60',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mazparrito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '60',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Bárbara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '61',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pedro Briceño Méndez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '61',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ramón Ignacio Méndez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '61',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Ignacio del Pumar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '61',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Obispos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '62',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Guasimitos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '62',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Real',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '62',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Luz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '62',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ciudad Bolivia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '63',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Ignacio Briceño',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '63',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Félix Ribas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '63',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Páez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '63',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Dolores',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Palacio Fajardo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Simón Rodríguez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ciudad de Nutrias',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '65',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Regalo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '65',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Puerto Nutrias',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '65',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Catalina',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '65',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Simón Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '65',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cachamay',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chirica',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Dalla Costa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Once de Abril',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Simón Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Unare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Universidad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Vista al Sol',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pozo Verde',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Yocoima',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = '5 de Julio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '68',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cedeño',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '69',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altagracia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '69',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ascensión Farreras',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '69',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guaniamo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '69',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Urbana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '69',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pijiguaos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '69',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Callao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '71',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Gran Sabana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '72',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ikabarú',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '72',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Catedral',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Zea',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Orinoco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Antonio Páez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Marhuanta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agua Salada',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Vista Hermosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Sabanita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Panapana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '67',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Padre Pedro Chien',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '70',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Andrés Eloy Blanco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '73',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pedro Cova',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '73',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Upata',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '73',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Raúl Leoni',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Barceloneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Bárbara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '64',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Roscio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '74',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Salóm',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '74',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tumeremo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '75',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Dalla Costa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '75',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Isidro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '75',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '76',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aripao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '76',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guarataro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '76',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Majadas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '76',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Moitaco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '76',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Canoabo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '77',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Simón Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '77',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Güigüe',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '78',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Belén',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '78',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tacarigua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '78',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mariara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '79',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aguas Calientes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '79',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ciudad Alianza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '80',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guacara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '80',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Yagua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '80',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Morón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '81',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urama',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '81',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tocuyito Valencia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '82',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Independencia Campo Carabobo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '82',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Guayos Valencia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '83',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Miranda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '84',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Montalbán',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '85',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana Naguanagua Valencia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '86',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bartolomé Salóm',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '87',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Democracia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '87',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Fraternidad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '87',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Goaigoaza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '87',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan José Flores',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '87',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Unión',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '87',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Borburata',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '87',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Patanemo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '87',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Diego Valencia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '88',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Joaquín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '89',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana Candelaria',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana Catedral',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana El Socorro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana Miguel Peña',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana Rafael Urdaneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana San Blas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana Santa Rosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rural Negro Primero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '90',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cojedes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '91',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan de Mata Suárez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '91',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Pao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '95',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tinaquillo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '99',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Baúl',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '93',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '93',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Aguadita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '94',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Macapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '94',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Amparo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '96',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertad de Cojedes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '96',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rómulo Gallegos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '97',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Carlos de Austria',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '92',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Ángel Bravo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '92',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Manrique',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '92',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'General en Jefe José Laurencio Silva',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '98',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Curiapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '100',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Almirante Luis Brión',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '100',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Francisco Aniceto Lugo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '100',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Renaud',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '100',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Padre Barral',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '100',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santos de Abelgas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '100',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Imataca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '101',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Bautista Arismendi',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '101',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Piar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '101',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rómulo Gallegos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '101',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pedernales',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '102',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Luis Beltrán Prieto Figueroa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '102',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '103',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Vidal Marcano',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '103',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Leonardo Ruiz Pineda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '103',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mariscal Antonio José de Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '103',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Monseñor Argimiro García',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '103',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Virgen del Valle',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '103',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '103',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Millán',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '103',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = '23 de enero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altagracia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antímano',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caricuao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Catedral',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Coche',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Junquito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Paraíso',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Recreo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Valle',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Candelaria',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Pastora',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Vega',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Macarao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Agustín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Bernardino',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Pedro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rosalía',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Teresa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '104',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capadare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '105',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Pastora',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '105',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '105',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan de los Cayos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '105',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aracua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '106',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Peña',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '106',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Luis',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '106',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bariro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '107',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Borojó',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '107',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capatárida',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '107',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guajiro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '107',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Seque',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '107',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Valle de Eroa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '107',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Zazárida',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '107',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cacique Manaure (Yaracal)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '117',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Norte',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '108',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carirubana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '108',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Ana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '108',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urbana Punta Cardón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '108',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Vela de Coro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '109',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Acurigua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '109',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guaibacoa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '109',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Calderas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '109',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mataruca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '109',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Dabajuro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '110',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agua Clara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '111',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Avaria',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '111',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pedregal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '111',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Piedra Grande',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '111',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Purureche',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '111',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Adaure',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Adícora',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Baraived',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Buena Vista',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jadacaquiva',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Vínculo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Hato',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Moruy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pueblo Nuevo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '112',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agua Larga',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '113',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Churuguara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '113',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Paují',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '113',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Independencia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '113',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mapararí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '113',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agua Linda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '115',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Araurima',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '115',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jacura',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '115',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Taques',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '116',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Judibana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '116',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mene de Mauroa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '118',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Félix',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '118',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Casigua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '118',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guzmán Guillermo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '119',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mitare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '119',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Río Seco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '119',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sabaneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '119',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '119',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Gabriel',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '119',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Ana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '119',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boca del Tocuyo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '114',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chichiriviche',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '114',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tocuyo de la Costa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '114',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Palmasola',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '120',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cabure',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '121',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Colina',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '121',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Curimagua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '121',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de la Costa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '122',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Píritu',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '122',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capital San Francisco Mirimire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '123',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tucacas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '125',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boca de Aroa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '125',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '124',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pecaya',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '124',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tocópero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '126',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Charal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '127',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Vegas del Tuy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '127',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Cruz de Bucaral',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '127',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bruzual',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '128',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urumaco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '128',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Puerto Cumarebo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '129',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Ciénaga',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '129',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Soledad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '129',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pueblo Cumarebo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '129',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Zazárida',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '129',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Camaguán',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '130',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Puerto Miranda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '130',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Uverito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '130',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chaguaramas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '131',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Socorro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '122',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Calvario',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '133',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Rastro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '133',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guardatinajas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '133',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capital Urbana Calabozo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '133',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tucupido',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '134',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael de Laya',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '134',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altagracia de Orituco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '135',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael de Orituco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '135',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco Javier de Lezama',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '135',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Paso Real de Macaira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '135',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carlos Soublette',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '135',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco de Macaira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '135',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertad de Orituco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '135',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cantagallo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '136',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan de los Morros',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '136',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Parapara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '136',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Sombrero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '138',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '138',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Mercedes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '12',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cabruta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '12',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rita de Manapire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '12',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Valle de la Pascua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '139',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Espino',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '139',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Tiznados',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '140',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco de Tiznados',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '140',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Lorenzo de Tiznados',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '140',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ortiz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '140',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Unare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '144',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Zaraza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '144',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guayabal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '141',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cazorla',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '141',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Guaribe',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '142',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa María de Ipire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '143',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altamira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '143',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caraballeda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carayaca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carlos Soublette',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caruao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Catia La Mar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Junko',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Guaira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Macuto',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Maiquetía',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Naiguatá',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urimare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '145',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Quebrada Honda de Guache',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '146',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pio Tamayo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '146',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Yacambú',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '146',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Freitez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '147',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José María Blanco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '147',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Anzoátegui',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '150',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '150',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guárico',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '150',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Hilario Luna y Luna',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '150',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Humocaro Bajo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '150',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Humocaro Alto',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '150',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Candelaria',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '150',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Morán',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '150',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cabudare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '151',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Gregorio Bastidas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '151',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agua Viva',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '151',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Buría',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '152',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Gustavo Vega',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '152',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sarare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '152',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altagracia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antonio Díaz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Camacaro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Castañeda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cecilio Zubillaga',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chiquinquira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Blanco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Espinoza de los Monteros',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Heriberto Arrollo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Lara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Mercedes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Morillo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Montaña Verde',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Montes de Oca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Reyes de Vargas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Torres',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Trinidad Samuel',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '153',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Xaguas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '154',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Siquisique',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '154',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Miguel',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '154',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Moroturo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '154',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aguedo Felipe Alvarado',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Buena Vista',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Catedral',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Concepción',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Cují',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juárez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ana Soto (Antigua Juan de Villegas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tamaca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Unión',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '148',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'juan de Villega',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Bautista Rodríguez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cuara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Diego de Lozada',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Paraíso de San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Miguel',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tintorero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Bernardo Dorante',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Coronel Mariano Peraza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '149',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Presidente Betancourt',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '155',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Presidente Páez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '155',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Presidente Rómulo Gallegos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '155',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Gabriel Picón González',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '155',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Héctor Amable Mora',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '155',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Nucete Sardi',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '155',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pulido Méndez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '155',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Cruz de Mora',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '157',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mesa Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '157',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mesa de Las Palmas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '157',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Azulita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '156',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aricagua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '158',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '158',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Canaguá',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '159',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capurí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '159',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chacantá',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '159',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Molino',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '159',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guaimaral',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '159',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mucutuy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '159',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mucuchachí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '159',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Fernández Peña',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '15',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Matriz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '160',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Montalbán',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '160',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Acequias',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '160',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jají',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '160',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Mesa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '160',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José del Sur',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '160',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tucaní',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '161',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Florencio Ramírez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '161',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santo Domingo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '162',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Piedras',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '162',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guaraque',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '163',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mesa de Quintero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '163',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Río Negro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '163',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arapuey',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '164',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Palmira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '164',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Cristóbal de Torondoy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '165',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Torondoy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '165',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antonio Spinetti Dini',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arias',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caracciolo Parra Pérez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Domingo Peña',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Llano',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Gonzalo Picón Febres',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jacinto Plaza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Rodríguez Suárez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Lasso de la Vega',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mariano Picón Salas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Milla',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Osuna Rodríguez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sagrario',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Morro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Nevados',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '166',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Andrés Eloy Blanco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '167',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Venta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '167',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Piñango',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '167',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Timotes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '167',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Eloy Paredes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '168',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael de Alcázar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '168',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Elena de Arenales',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '168',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa María de Caparo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '169',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pueblo Llano',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '170',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cacute',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '171',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Toma',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '171',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mucuchíes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '171',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mucurubá',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '171',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '171',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Gerónimo Maldonado',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '172',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bailadores',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '172',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tabay',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '173',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chiguará',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '174',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Estánques',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '174',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Lagunillas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '174',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Trampa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '174',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pueblo Nuevo del Sur',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '174',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '174',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Amparo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '175',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Llano',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '175',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '175',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tovar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '175',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Independencia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '176',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'María de la Concepción Palacios Blanco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '176',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Nueva Bolivia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '176',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Apolonia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '176',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caño El Tigre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '177',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aragüita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '178',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arévalo González',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '178',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capaya',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '178',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caucagua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '178',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Panaquire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '178',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ribas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '178',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Café',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '178',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Marizapa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '178',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cumbo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '179',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Barlovento',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '179',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Cafetal ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '180',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Minas ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '180',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Nuestra Señora del Rosario ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '180',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Higuerote',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '182',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Curiepe',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '182',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tacarigua de Brión',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '182',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mamporal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '183',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carrizal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '184',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chacao ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '185',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Charallave',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '186',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Brisas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '186',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rosalía de Palermo de El Hatillo ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '187',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altagracia de la Montaña',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '188',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cecilio Acosta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '188',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Teques',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '188',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Jarillo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '188',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Pedro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '188',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tácata',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '188',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Paracotos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '188',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'el Cartanal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '190',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Teresa del Tuy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '190',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Democracia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '191',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ocumare del Tuy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '191',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Bárbara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '191',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio de los Altos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '192',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Río Chico',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '193',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Guapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '193',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tacarigua de la Laguna',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '193',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Paparo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '193',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Fernando del Guapo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '193',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Lucía del Tuy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '194',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cúpira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '189',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Machurucuto',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '189',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guarenas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '195',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio de Yare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '181',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco de Yare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '181',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cúa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '197',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Nueva Cúa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '197',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Leoncio Martínez ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '196',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caucagüita ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '196',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Filas de Mariche ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '196',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Dolorita ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '196',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Petare ( Área metropolitana de Caracas)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '196',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guatire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '198',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Araira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '198',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio de Maturín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '199',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco de Maturín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '199',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aguasay',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '200',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caripito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '201',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Guácharo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Guanota',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sabana de Piedra',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Agustín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Teresen',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caripe',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Areo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '203',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capital Cedeño',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '203',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Félix de Cantalicio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '203',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Viento Fresco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '203',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Tejero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '211',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Punta de Mata',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '211',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chaguaramas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '204',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Alhuacas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '204',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tabasca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '204',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Temblador',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '204',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Alto de los Godos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boquerón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Cocuizas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Cruz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Simón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Corozo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Furrial',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jusepín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Pica',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Vicente',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '205',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aparicio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aragua de Maturín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chaguaramal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Pinto',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guanaguana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Toscana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Taguaya',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '206',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cachipo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '207',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Quiriquire',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '207',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Bárbara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '208',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Morón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '208',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Barrancas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '209',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Barrancos de Fajardo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '209',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Uracoa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '210',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antolín del Campo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '212',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arismendi',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '214',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan Bautista',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '213',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Zabala',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '213',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'García',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '215',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Francisco Fajardo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '215',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '216',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guevara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '216',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Matasiete',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '216',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Ana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '216',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '216',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aguirre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '218',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Maneiro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '218',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Adrián',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '219',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Griego',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '219',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mariño',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '220',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco de Macanao',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '217',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boca de Río',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '217',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tubores',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '221',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Barales',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '221',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Vicente Fuentes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '222',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Villalba',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '222',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Araure',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '224',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Río Acarigua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '224',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agua Blanca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '223',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Píritu',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '225',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Uveral',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '225',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cordova',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '226',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guanare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '226',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de la Montaña',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '226',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan de Guanaguanare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '226',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Virgen de Coromoto',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '226',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guanarito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '227',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Trinidad de la Capilla',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '227',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Divina Pastora',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '227',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chabasquén',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '228',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Peña Blanca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '228',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aparición',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '229',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Estación',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '229',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ospino',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '229',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Acarigua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '230',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Payara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '230',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pimpinela',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '230',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ramón Peraza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '230',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Caño Delgadito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '231',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Papelón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '231',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antolín Tovar Anquino',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '232',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boconoíto',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '232',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Fé',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '233',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael de Onoto',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '233',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Thelmo Morles',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '233',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Florida',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '234',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Playón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '234',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Biscucuy ',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '235',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Biscucuy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '235',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Concepción',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '235',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Saguaz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '235',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael de Palo Alzado',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '235',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Uvencio Antonio Velásquez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '235',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Villa Rosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '236',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Villa Bruzual',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '236',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Canelones',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '236',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Cruz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '236',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Isidro Labrador la colonia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '236',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mariño',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '237',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rómulo Gallegos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '237',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Areocuar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '238',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tavera Acosta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '238',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Río Caribe',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '239',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antonio José de Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '239',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Morro de Puerto Santo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '239',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Puerto Santo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '239',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan de las Galdonas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '239',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Pilar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '240',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Rincón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '240',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'General Francisco Antonio Vázquez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '240',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guaraúnos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '240',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tunapuicito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '240',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Unión',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '240',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Catalina',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '241',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '241',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Teresa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '241',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '241',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Maracapana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '241',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Marigüitar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '242',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '243',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Paujil',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '243',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Yaguaraparo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '243',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Araya',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '244',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chacopata',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '244',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manicuare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '244',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tunapuy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '245',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Campo Elías',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '245',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Irapa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '246',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Campo Claro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '246',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Marabal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '246',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio de Irapa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '246',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Soro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '246',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio del Golfo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '247',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cumanacoa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '248',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arenas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '248',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Aricagua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '248',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cocollar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '248',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Fernando',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '248',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Lorenzo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '248',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cariaco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '249',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Catuaro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '249',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rendón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '249',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Cruz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '249',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa María',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '249',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altagracia Cumaná',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '250',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Inés Cumaná',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '250',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Valentín Valiente Cumaná',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '250',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ayacucho Cumaná',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '250',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '250',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Raúl Leoni',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '250',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Gran Mariscal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '250',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cristóbal Colón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '251',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bideau',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '251',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Punta de Piedras',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '251',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Güiria',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '251',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cordero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '252',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Virgen del Carmen',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '253',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rivas Berti',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '254',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan de Colón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '254',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Pedro del Río',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '254',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Isaías Medina Angarita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '255',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Vicente Gómez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '255',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Palotal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '255',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio del Táchira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '255',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Amenodoro Rangel Lamús',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '256',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Florida',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '256',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Táriba',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '256',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Ana del Táchira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '257',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Alberto Adriani',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '258',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael del Piñal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '258',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santo Domingo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '258',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '259',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boca de Grita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '260',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Antonio Páez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '260',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Fría',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '260',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Palmira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '261',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capacho Nuevo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '262',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Germán Roscio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '262',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Román Cárdenas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '262',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Emilio Constantino Guerrero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '263',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Grita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '263',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Monseñor Miguel Antonio Salas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '263',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Cobre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '264',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bramón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '265',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Petrólea',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '265',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Quinimarí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '265',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rubio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '265',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capacho Viejo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '266',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cipriano Castro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '266',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Felipe Rugeles',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '266',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Abejales',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '267',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Doradas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '267',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Emeterio Ochoa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '267',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Joaquín de Navay',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '267',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Lobatera',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '268',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Constitución',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '268',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Michelena',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '269',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Pablo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '270',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Palmita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '270',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ureña',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '271',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Nueva Arcadia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '271',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Delicias',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '272',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boconó',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '273',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Hernández',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '273',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Tendida',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '273',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Francisco Romero Lobo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '274',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Concordia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '274',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pedro María Morantes',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '274',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Juan Bautista',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '274',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Sebastián',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '274',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Judas Tadeo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '275',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Seboruco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '276',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Simón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '277',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Eleazar López Contreras',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '278',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Capital Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '278',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Pablo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '278',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Josecito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '279',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cárdenas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '280',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Pablo Peñaloza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '280',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Potosí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '280',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pregonero ',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '280',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Araguaney',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '281',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Jaguito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '281',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Esperanza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '281',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Isabel',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '281',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Boconó',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Carmen',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mosquey',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Myacucho',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Burbusay',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'General ribas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guaramacal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Vega de Guaramacal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Monseñor Jáuregui',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rafael Rangel',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Miguel',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '282',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sabana Grande',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '283',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cheregué',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '283',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Granados',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '283',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arnoldo Gabalón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '284',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bolivia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '284',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carrillo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '284',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cegarra',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '284',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chejendé',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '284',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Salvador Ulloa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '284',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '284',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carache',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '285',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Concepción',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '285',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cuicas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '285',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Panamericana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '285',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Cruz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '285',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Escuque',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '287',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Unión (El Alto Escuque)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '287',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '287',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sabana Libre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '287',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Socorro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '290',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Caprichos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '290',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antonio José de Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '290',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Campo Elías',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '288',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arnoldo Gabaldón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '288',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Apolonia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '289',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Progreso',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '289',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Ceiba',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '289',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tres de Febrero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '289',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Dividive',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '291',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agua Santa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '291',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agua Caliente',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '291',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Cenizo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '291',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Valerita el salt',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '291',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Monte Carmelo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '292',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Buena Vista',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '292',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa María del Horcón',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '292',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Motatán',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '293',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Baño',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '293',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jalisco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '293',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pampán',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '294',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Flor de Patria',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '294',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Paz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '294',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Ana',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '294',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pampanito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '295',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Concepción',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '295',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pampanito II',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '295',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Betijoque',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '336',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Gregorio Hernández',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '336',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Pueblita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '336',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Cedros',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '336',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carvajal',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '286',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Campo Alegre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '286',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antonio Nicolás Briceño',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '286',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Leonardo Suárez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '286',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sabana de Mendoza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '297',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Junín',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '297',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Valmore Rodríguez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '297',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Paraíso',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '297',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Andrés Linares',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '298',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chiquinquirá',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '298',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cristóbal Mendoza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '298',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cruz Carrillo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '298',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Matriz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '298',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Monseñor Carrillo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '298',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tres Esquinas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '298',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cabimbú',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '299',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jajó',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '299',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Mesa de Esnujaque',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '299',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santiago',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '299',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tuñame',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '299',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Quebrada',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '299',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juan Ignacio Montilla',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '300',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Beatriz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '300',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Puerta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '300',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mendoza del Valle de Momboy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '300',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mercedes Díaz',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '300',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Luis',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '300',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arístides Bastidas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '301',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '302',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chivacoa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '303',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Campo Elías',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '303',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cocorote',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '304',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Independencia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '305',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Antonio Páez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '306',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Trinidad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '307',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Monge',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '308',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Salóm',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '309',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Temerla',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '309',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Nirgua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '309',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Andrés',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '310',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Yaritagua',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '310',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Javier',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '311',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Albarico',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '311',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Felipe',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '311',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sucre',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '312',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urachiche',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '313',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Guayabo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '314',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Farriar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '314',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Isla de Toas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '315',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Monagas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '315',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Fernando',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '315',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Timoteo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '316',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'General Urdaneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '316',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertador',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '316',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Marcelino Briceño',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '316',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Nuevo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '316',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Guanipa Matos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '316',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ambrosio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carmen Herrera',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Rosa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Germán Ríos Linares',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Benito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rómulo Betancourt',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jorge Hernández',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Punta Gorda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Arístides Calvani',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '317',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Encontrados',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '318',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Udón Pérez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '318',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Moralito',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '319',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Carlos del Zulia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '319',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Cruz del Zulia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '319',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Bárbara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '319',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Urribarrí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '319',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Agustín Codazzi',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '320',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carlos Quevedo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '320',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Francisco Javier Pulgar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '320',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Simón Rodríguez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '320',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Concepción (capital)',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '322',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '322',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Mariano Parra León',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '322',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Ramón Yépez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '322',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Jesús María Semprún',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '323',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Barí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '323',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Concepción',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '324',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Andrés Bello',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '324',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chiquinquirá',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '324',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Carmelo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '324',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Potreritos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '324',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '325',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Alonso de Ojeda',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '325',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Venezuela',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '325',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Eleazar López Contreras',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '325',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Campo Lara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '325',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bartolomé de las Casas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '326',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Libertad',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '326',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Río Negro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '326',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José de Perijá',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '326',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Rafael',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '327',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Sierrita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '327',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Las Parcelas',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '327',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Luis De Vicente',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '327',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Monseñor Marcos Sergio Godoy',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '327',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ricaurte',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '327',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Tamare',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '327',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Antonio Borjas Romero',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bolívar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cacique Mara',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Carracciolo Parra Pérez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cecilio Acosta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Cristo de Aranza',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Coquivacoa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Chiquinquirá',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Francisco Eugenio Bustamante',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Idelfonzo Vásquez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Juana de Ávila',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Luis Hurtado Higuera',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Dagnino',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Olegario Villalobos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Raúl Leoni',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Lucía',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Isidro',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Venancio Pulgar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '328',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Altagracia',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '329',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Faría',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '329',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Ana María Campos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '329',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Antonio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '329',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San José',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '329',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sinamaica',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '321',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Alta Guajira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '321',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Elías Sánchez Rubio',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '321',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Guajira',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '321',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Donaldo García',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '330',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Rosario',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '330',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Sixto Zambrano',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '330',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'San Francisco',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '331',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Bajo',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '331',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Domitila Flores',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '331',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Francisco Ochoa',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '331',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Los Cortijos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '331',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Marcial Hernández',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '331',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Domingo Rus',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '331',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Santa Rita',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '332',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Mene',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '332',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Pedro Lucas Urribarrí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '332',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'José Cenobio Urribarrí',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '332',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rafael Maria Baralt',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '333',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Manuel Manrique',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '333',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rafael Urdaneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '333',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Bobures',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '334',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Gibraltar',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '334',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Heras',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '334',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Monseñor Arturo Álvarez',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '334',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rómulo Gallegos',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '334',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'El Batey',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '334',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Rafael Urdaneta',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '335',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'La Victoria',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '335',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);

        Parish::create([
            'name'      => $name = 'Raúl Cuenca',
            'code'      => $code = uniqueCode(),
            'municipality_id'  => $municipality_id = '335',
            'slug'      => generateUrl($name . ' ' . $code . ' ' . $municipality_id),
            'note'      => 'N/A',
        ]);
    }
}
