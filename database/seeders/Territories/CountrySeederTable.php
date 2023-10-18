<?php

namespace Database\Seeders\Territories;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Territories\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'name' => $name = 'Afganistán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AF',
            'iso3' => 'AFG',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Åland',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AX',
            'iso3' => 'ALA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Albania',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AL',
            'iso3' => 'ALB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Alemania',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'DE',
            'iso3' => 'DEU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Andorra',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AD',
            'iso3' => 'AND',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Angola',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AO',
            'iso3' => 'AGO',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Anguila',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AI',
            'iso3' => 'AIA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Antártida',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AQ',
            'iso3' => 'ATA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Antigua y Barbuda',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AG',
            'iso3' => 'ATG',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Arabia Saudita',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SA',
            'iso3' => 'SAU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Argelia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'DZ',
            'iso3' => 'DZA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Argentina',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AR',
            'iso3' => 'ARG',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Armenia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AM',
            'iso3' => 'ARM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Aruba',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AW',
            'iso3' => 'ABW',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Australia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AU',
            'iso3' => 'AUS',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Austria',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AT',
            'iso3' => 'AUT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Azerbaiyán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AZ',
            'iso3' => 'AZE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Bahamas (las)',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BS',
            'iso3' => 'BHS',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Bangladés',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BD',
            'iso3' => 'BGD',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Barbados',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BB',
            'iso3' => 'BRB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Baréin',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BH',
            'iso3' => 'BHR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Bélgica',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BE',
            'iso3' => 'BEL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Belice',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BZ',
            'iso3' => 'BLZ',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Benín',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BJ',
            'iso3' => 'BEN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Bermudas',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BM',
            'iso3' => 'BMU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Bielorrusia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BY',
            'iso3' => 'BLR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Bolivia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BO',
            'iso3' => 'BOL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Bonaire, San Eustaquio y Saba',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BQ',
            'iso3' => 'BES',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Bosnia y Herzegovina',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BA',
            'iso3' => 'BIH',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Botsuana',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BW',
            'iso3' => 'BWA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Brasil',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BR',
            'iso3' => 'BRA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Brunéi',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BN',
            'iso3' => 'BRN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Bulgaria',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BG',
            'iso3' => 'BGR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Burkina Faso',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BF',
            'iso3' => 'BFA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Burundi',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BI',
            'iso3' => 'BDI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Bután',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BT',
            'iso3' => 'BTN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Cabo Verde',
            'code' => uniqueCode(),
            'iso2' => $iso2 = $iso2 = 'CV',
            'iso3' => 'CPV',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Camboya',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KH',
            'iso3' => 'KHM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Camerún',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CM',
            'iso3' => 'CMR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Canadá',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CA',
            'iso3' => 'CAN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Catar',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'QA',
            'iso3' => 'QAT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Chad',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TD',
            'iso3' => 'TCD',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Chile',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CL',
            'iso3' => 'CHL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'China',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CN',
            'iso3' => 'CHN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Chipre',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CY',
            'iso3' => 'CYP',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Colombia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CO',
            'iso3' => 'COL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Comoras',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KM',
            'iso3' => 'COM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Corea del Norte',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KP',
            'iso3' => 'PRK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Corea del Sur',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KR',
            'iso3' => 'KOR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Costa de Marfil',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CI',
            'iso3' => 'CIV',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Costa Rica',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CR',
            'iso3' => 'CRI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Croacia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'HR',
            'iso3' => 'HRV',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Cuba',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CU',
            'iso3' => 'CUB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Curaçao',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CW',
            'iso3' => 'CUW',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Dinamarca',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'DK',
            'iso3' => 'DNK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Dominica',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'DM',
            'iso3' => 'DMA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Ecuador',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'EC',
            'iso3' => 'ECU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Egipto',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'EG',
            'iso3' => 'EGY',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'El Salvador',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SV',
            'iso3' => 'SLV',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Emiratos Árabes Unidos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AE',
            'iso3' => 'ARE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Eritrea',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ER',
            'iso3' => 'ERI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Eslovaquia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SK',
            'iso3' => 'SVK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Eslovenia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SI',
            'iso3' => 'SVN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'España',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ES',
            'iso3' => 'ESP',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Estados Unidos de América',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'US',
            'iso3' => 'USA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Estonia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'EE',
            'iso3' => 'EST',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Etiopía',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ET',
            'iso3' => 'ETH',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Filipinas',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PH',
            'iso3' => 'PHL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Finlandia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'FI',
            'iso3' => 'FIN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Fiji',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'FJ',
            'iso3' => 'FJI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Francia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'FR',
            'iso3' => 'FRA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Gabón',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GA',
            'iso3' => 'GAB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Gambia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GM',
            'iso3' => 'GMB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Georgia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GE',
            'iso3' => 'GEO',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Ghana',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GH',
            'iso3' => 'GHA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Gibraltar',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GI',
            'iso3' => 'GIB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Granada',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GD',
            'iso3' => 'GRD',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Grecia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GR',
            'iso3' => 'GRC',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Groenlandia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GL',
            'iso3' => 'GRL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Guadeloupe',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GP',
            'iso3' => 'GLP',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Guam',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GU',
            'iso3' => 'GUM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Guatemala',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GT',
            'iso3' => 'GTM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Guayana Francesa',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GF',
            'iso3' => 'GUF',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 12,
        ]);

        Country::create([
            'name' => $name = 'Guernsey',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GG',
            'iso3' => 'GGY',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Guinea',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GN',
            'iso3' => 'GIN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Guinea Bissau',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GW',
            'iso3' => 'GNB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Guinea Ecuatorial',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GQ',
            'iso3' => 'GNQ',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Guyana',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GY',
            'iso3' => 'GUY',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Haití',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'HT',
            'iso3' => 'HTI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Honduras',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'HN',
            'iso3' => 'HND',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Hong Kong',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'HK',
            'iso3' => 'HKG',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 13,
        ]);

        Country::create([
            'name' => $name = 'Hungría',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'HU',
            'iso3' => 'HUN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'India',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IN',
            'iso3' => 'IND',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Indonesia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ID',
            'iso3' => 'IDN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Irak',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IQ',
            'iso3' => 'IRQ',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Irán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IR',
            'iso3' => 'IRN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Irlanda',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IE',
            'iso3' => 'IRL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Isla Bouvet',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BV',
            'iso3' => 'BVT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Isla de Man',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IM',
            'iso3' => 'IMN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Isla de Navidad',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CX',
            'iso3' => 'CXR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 7,
        ]);

        Country::create([
            'name' => $name = 'Islandia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IS',
            'iso3' => 'ISL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Islas Caimán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KY',
            'iso3' => 'CYM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Islas Cocos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CC',
            'iso3' => 'CCK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 7,
        ]);

        Country::create([
            'name' => $name = 'Islas Cook',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CK',
            'iso3' => 'COK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Islas Feroe',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'FO',
            'iso3' => 'FRO',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Islas Georgias del Sur y Sandwich del Sur',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GS',
            'iso3' => 'SGS',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Australia Islas Heard y McDonald',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'HM',
            'iso3' => 'HMD',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 7,
        ]);

        Country::create([
            'name' => $name = 'Islas Malvinas',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'FK',
            'iso3' => 'FLK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Islas Marianas del Norte',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MP',
            'iso3' => 'MNP',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Islas Marshall',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MH',
            'iso3' => 'MHL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Islas Pitcairn',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PN',
            'iso3' => 'PCN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Islas Salomón',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SB',
            'iso3' => 'SLB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Islas Turcas y Caicos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TC',
            'iso3' => 'TCA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Islas Ultramarinas Menores de los Estados Unidos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'UM',
            'iso3' => 'UMI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Islas Vírgenes Británicas',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'VG',
            'iso3' => 'VGB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Islas Vírgenes de los Estados Unidos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'VI',
            'iso3' => 'VIR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Israel',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IL',
            'iso3' => 'ISR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 7,
        ]);

        Country::create([
            'name' => $name = 'Italia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IT',
            'iso3' => 'ITA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Jamaica',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'JM',
            'iso3' => 'JAM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Japón',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'JP',
            'iso3' => 'JPN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Jersey',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'JE',
            'iso3' => 'JEY',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Jordania',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'JO',
            'iso3' => 'JOR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Kazajistán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KZ',
            'iso3' => 'KAZ',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Kenia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KE',
            'iso3' => 'KEN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Kirguistán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KG',
            'iso3' => 'KGZ',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Kiribati',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KI',
            'iso3' => 'KIR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Kuwait',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KW',
            'iso3' => 'KWT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Laos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LA',
            'iso3' => 'LAO',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Lesoto',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LS',
            'iso3' => 'LSO',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Letonia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LV',
            'iso3' => 'LVA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Líbano',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LB',
            'iso3' => 'LBN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Liberia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LR',
            'iso3' => 'LBR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Libia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LY',
            'iso3' => 'LBY',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Liechtenstein',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LI',
            'iso3' => 'LIE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Lituania',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LT',
            'iso3' => 'LTU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Luxemburgo',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LU',
            'iso3' => 'LUX',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Macao',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MO',
            'iso3' => 'MAC',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 13,
        ]);

        Country::create([
            'name' => $name = 'Macedonia del Norte',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MK',
            'iso3' => 'MKD',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Madagascar',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MG',
            'iso3' => 'MDG',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Malasia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MY',
            'iso3' => 'MYS',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Malawi',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MW',
            'iso3' => 'MWI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Maldivas',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MV',
            'iso3' => 'MDV',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Malí',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ML',
            'iso3' => 'MLI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Malta',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MT',
            'iso3' => 'MLT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Marruecos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MA',
            'iso3' => 'MAR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Martinique',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MQ',
            'iso3' => 'MTQ',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Mauricio',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MU',
            'iso3' => 'MUS',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Mauritania',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MR',
            'iso3' => 'MRT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Mayotte',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'YT',
            'iso3' => 'MYT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'México',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MX',
            'iso3' => 'MEX',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Estados Federados de Micronesia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'FM',
            'iso3' => 'FSM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Moldavia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MD',
            'iso3' => 'MDA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Mónaco',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MC',
            'iso3' => 'MCO',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Mongolia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MN',
            'iso3' => 'MNG',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Montenegro',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ME',
            'iso3' => 'MNE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Montserrat',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MS',
            'iso3' => 'MSR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Mozambique',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MZ',
            'iso3' => 'MOZ',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Myanmar',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MM',
            'iso3' => 'MMR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Namibia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NA',
            'iso3' => 'NAM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Nauru',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NR',
            'iso3' => 'NRU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Nepal',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NP',
            'iso3' => 'NPL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Nicaragua',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NI',
            'iso3' => 'NIC',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Níger',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NE',
            'iso3' => 'NER',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Nigeria',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NG',
            'iso3' => 'NGA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Niue',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NU',
            'iso3' => 'NIU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Isla Norfolk',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NF',
            'iso3' => 'NFK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Noruega',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NO',
            'iso3' => 'NOR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Nueva Caledonia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NC',
            'iso3' => 'NCL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Nueva Zelanda',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NZ',
            'iso3' => 'NZL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Omán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'OM',
            'iso3' => 'OMN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Países Bajos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'NL',
            'iso3' => 'NLD',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Pakistán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PK',
            'iso3' => 'PAK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Palaos',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PW',
            'iso3' => 'PLW',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Palestina',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PS',
            'iso3' => 'PSE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 8,
        ]);

        Country::create([
            'name' => $name = 'Panamá',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PA',
            'iso3' => 'PAN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Papua Nueva Guinea',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PG',
            'iso3' => 'PNG',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Paraguay',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PY',
            'iso3' => 'PRY',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Perú',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PE',
            'iso3' => 'PER',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Polinesia Francesa',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PF',
            'iso3' => 'PYF',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);


        Country::create([
            'name' => $name = 'Polonia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PL',
            'iso3' => 'POL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Portugal',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PT',
            'iso3' => 'PRT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Puerto Rico',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PR',
            'iso3' => 'PRI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'Reino Unido',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'GB',
            'iso3' => 'GBR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'República Árabe Saharaui Democrática',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'EH',
            'iso3' => 'ESH',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'República Centroafricana',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CF',
            'iso3' => 'CAF',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'República Checa',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CZ',
            'iso3' => 'CZE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'República del Congo',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CG',
            'iso3' => 'COG',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'República Democrática del Congo',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CD',
            'iso3' => 'COD',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'República Dominicana',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'DO',
            'iso3' => 'DOM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Reunión',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'RE',
            'iso3' => 'REU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Ruanda',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'RW',
            'iso3' => 'RWA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Rumania',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'RO',
            'iso3' => 'ROU',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Rusia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'RU',
            'iso3' => 'RUS',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Samoa',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'WS',
            'iso3' => 'WSM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Samoa Americana',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'AS',
            'iso3' => 'ASM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'San Bartolomé',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'BL',
            'iso3' => 'BLM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'San Cristobal y Nieves',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'KN',
            'iso3' => 'KNA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'San Marino',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SM',
            'iso3' => 'SMR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Saint Martín',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'MF',
            'iso3' => 'MAF',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'San Pedro y Miquelón',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'PM',
            'iso3' => 'SPM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 9,
        ]);

        Country::create([
            'name' => $name = 'San Vicente y las Granadinas',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'VC',
            'iso3' => 'VCT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Santa Elena, Ascensión y Tristán de Acuña',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SH',
            'iso3' => 'SHN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Santa Lucía',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LC',
            'iso3' => 'LCA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Santo Tomé y Príncipe',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ST',
            'iso3' => 'STP',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Senegal',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SN',
            'iso3' => 'SEN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Serbia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'RS',
            'iso3' => 'SRB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Seychelles',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SC',
            'iso3' => 'SYC',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Sierra leona',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SL',
            'iso3' => 'SLE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Singapur',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SG',
            'iso3' => 'SGP',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'San Martín',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SX',
            'iso3' => 'SXM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 12,
        ]);

        Country::create([
            'name' => $name = 'Siria',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SY',
            'iso3' => 'SYR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Somalia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SO',
            'iso3' => 'SOM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Sri Lanka',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'LK',
            'iso3' => 'LKA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Suazilandia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SZ',
            'iso3' => 'SWZ',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Sudáfrica',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ZA',
            'iso3' => 'ZAF',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Sudán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SD',
            'iso3' => 'SDN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Sudán del Sur',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SS',
            'iso3' => 'SSD',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Suecia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SE',
            'iso3' => 'SWE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Suiza',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'CH',
            'iso3' => 'CHE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Surinam',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SR',
            'iso3' => 'SUR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Svalbard y Jan Mayen',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'SJ',
            'iso3' => 'SJM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Tailandia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TH',
            'iso3' => 'THA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Taiwán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TW',
            'iso3' => 'TWN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 8,
        ]);

        Country::create([
            'name' => $name = 'Tanzania',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TZ',
            'iso3' => 'TZA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Tayikistán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TJ',
            'iso3' => 'TJK',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Territorio Británico del Océano Índico',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'IO',
            'iso3' => 'IOT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 8,
        ]);

        Country::create([
            'name' => $name = 'Tierras Australes y Antárticas Francesas',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TF',
            'iso3' => 'ATF',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Timor Oriental',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TL',
            'iso3' => 'TLS',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Togo',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TG',
            'iso3' => 'TGO',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Tokelau',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TK',
            'iso3' => 'TKL',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Tonga',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TO',
            'iso3' => 'TON',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Trinidad y Tobago',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TT',
            'iso3' => 'TTO',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Túnez',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TN',
            'iso3' => 'TUN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Turkmenistán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TM',
            'iso3' => 'TKM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Turquía',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TR',
            'iso3' => 'TUR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Tuvalu',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'TV',
            'iso3' => 'TUV',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Ucrania',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'UA',
            'iso3' => 'UKR',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Uganda',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'UG',
            'iso3' => 'UGA',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Uruguay',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'UY',
            'iso3' => 'URY',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Uzbekistán',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'UZ',
            'iso3' => 'UZB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Vanuatu',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'VU',
            'iso3' => 'VUT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 6,
        ]);

        Country::create([
            'name' => $name = 'Ciudad del Vaticano',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'VA',
            'iso3' => 'VAT',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 5,
        ]);

        Country::create([
            'name' => $name = 'Venezuela',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'VE',
            'iso3' => 'VEN',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 2,
        ]);

        Country::create([
            'name' => $name = 'Vietnam',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'VN',
            'iso3' => 'VNM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 3,
        ]);

        Country::create([
            'name' => $name = 'Wallis y Futuna',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'WF',
            'iso3' => 'WLF',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 10,
        ]);

        Country::create([
            'name' => $name = 'Yemen',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'YE',
            'iso3' => 'YEM',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Yibuti',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'DJ',
            'iso3' => 'DJI',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Zambia',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ZM',
            'iso3' => 'ZMB',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);

        Country::create([
            'name' => $name = 'Zimbabue',
            'code' => uniqueCode(),
            'iso2' => $iso2 = 'ZW',
            'iso3' => 'ZWE',
            'slug' => Str::slug($name),
            'flag' => flagGenerator($iso2, $name),
            'note' => 'N/A',
            'continent_id' => 1,
        ]);
    }
}
