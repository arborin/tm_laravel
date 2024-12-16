<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\CountryCapital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'name' => 'Georgia',
        ]);

        Country::create([
            'name' => 'Italy',
        ]);

        Country::create([
            'name' => 'Germany',
        ]);
    }
}
