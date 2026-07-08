<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            'England' => [
                ['name' => 'London', 'is_capital' => true],
                ['name' => 'Glasgow', 'is_capital' => false],
            ],
            'Germany' => [
                ['name' => 'Wernigerode', 'is_capital' => false],
                ['name' => 'Frankfurt', 'is_capital' => false],
            ],
            'Netherlands' => [
                ['name' => 'Amsterdam', 'is_capital' => true],
                ['name' => 'den Bosch', 'is_capital' => false],
                ['name' => 'Venlo', 'is_capital' => false],
                ['name' => 'Maastricht', 'is_capital' => false],
                ['name' => 'Eindhoven', 'is_capital' => false],
                ['name' => 'Utrecht', 'is_capital' => false],
                ['name' => 'Almere', 'is_capital' => false],
                ['name' => 'Zwolle', 'is_capital' => false],
                ['name' => 'Nijmegen', 'is_capital' => false],
                ['name' => 'Arnhem', 'is_capital' => false],
            ],
            'Spain' => [
                ['name' => 'Barcelona', 'is_capital' => false],
                ['name' => 'Calella', 'is_capital' => true],
            ],
            'Italy' => [
                ['name' => 'Rome', 'is_capital' => true],
                ['name' => 'Florence', 'is_capital' => false],
                ['name' => 'Venice', 'is_capital' => false],
                ['name' => 'Milan', 'is_capital' => false],
                ['name' => 'Bologna', 'is_capital' => false],
                ['name' => 'Genua', 'is_capital' => false],
            ],
            'Greece' => [
                ['name' => 'Athens', 'is_capital' => true],
                ['name' => 'Thessaloniki', 'is_capital' => false],
                ['name' => 'Korfu', 'is_capital' => false],
                ['name' => 'Rodos', 'is_capital' => false],
                ['name' => 'Kos', 'is_capital' => false],
            ],
            'Poland' => [
                ['name' => 'Warsaw', 'is_capital' => true],
                ['name' => 'Krakow', 'is_capital' => false],
                ['name' => 'Gdansk', 'is_capital' => false],
                ['name' => 'Wroclaw', 'is_capital' => false],
                ['name' => 'Lublin', 'is_capital' => false],
            ],
            'Czech Republic' => [
                ['name' => 'Prague', 'is_capital' => true],
            ],
            'Slovakia' => [
                ['name' => 'Bratislava', 'is_capital' => true],
            ],
            'Ukraine' => [
                ['name' => 'Kyiv', 'is_capital' => true],
                ['name' => 'Kharkiv', 'is_capital' => false],
                ['name' => 'Luhansk', 'is_capital' => false],
            ],
            'Russia' => [
                ['name' => 'Saint Petersburg', 'is_capital' => false],
            ],
        ];

        foreach ($cities as $countryName => $cityList) {
            $country = Country::where('name', $countryName)->firstOrFail();
            $country->cities()->createMany($cityList);
        }
    }
}
