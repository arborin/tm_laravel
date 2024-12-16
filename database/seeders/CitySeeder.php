<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\CountryCity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CountryCity::create([
            'name' => 'Batumi',
            'country_id' => Country::where('name', '=', 'Georgia')->first()->id,
        ]);

        CountryCity::create([
            'name' => 'Kutaisi',
            'country_id' => Country::where('name', '=', 'Georgia')->first()->id,
        ]);

        CountryCity::create([
            'name' => 'Zugdidi',
            'country_id' => Country::where('name', '=', 'Georgia')->first()->id,
        ]);
    }
}
