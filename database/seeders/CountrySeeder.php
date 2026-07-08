<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $southernEurope = Region::where('name', 'Southern Europe')->firstOrFail();
        $westernEurope = Region::where('name', 'Western Europe')->firstOrFail();
        $centralEurope = Region::where('name', 'Central Europe')->firstOrFail();
        $easternEurope = Region::where('name', 'Eastern Europe')->firstOrFail();

        $southernEurope->countries()->createMany([
            ['name' => 'Italy', 'code' => 'it'],
            ['name' => 'Spain', 'code' => 'es'],
            ['name' => 'Greece', 'code' => 'gr'],
        ]);

        $westernEurope->countries()->createMany([
            ['name' => 'England', 'code' => 'uk'],
            ['name' => 'Germany', 'code' => 'de'],
            ['name' => 'Netherlands', 'code' => 'nl'],
        ]);

        $centralEurope->countries()->createMany([
            ['name' => 'Poland', 'code' => 'pl'],
            ['name' => 'Czech Republic', 'code' => 'cz'],
            ['name' => 'Slovakia', 'code' => 'sk'],
        ]);

        $easternEurope->countries()->createMany([
            ['name' => 'Ukraine', 'code' => 'ua'],
            ['name' => 'Russia', 'code' => 'ru'],
        ]);
    }
}
