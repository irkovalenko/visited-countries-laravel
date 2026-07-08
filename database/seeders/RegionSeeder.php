<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $regions = [
            'Eastern Europe',
            'Western Europe',
            'Central Europe',
            'Southern Europe',
        ];

        foreach ($regions as $region) {
            DB::table('regions')->insert([
                'name' => $region,
            ]);
        }
    }
}
