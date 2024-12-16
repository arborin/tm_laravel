<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\CountryCapital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CountryCapital::create([
            'name' => 'Tbilisi',
            'country_id' => Country::where('name', '=', 'Georgia')->first()->id,
        ]);

        CountryCapital::create([
            'name' => 'Rome',
            'country_id' => Country::where('name', '=', 'Italy')->first()->id,
        ]);

        CountryCapital::create([
            'name' => 'Berlin',
            'country_id' => Country::where('name', '=', 'Germany')->first()->id,
        ]);
    }
}
