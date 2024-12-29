<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobListings = include database_path('seeders/data/job_listings.php');

        $test_user_id = User::where('email', '=', 'admin@admin.com')->value('id');

        $userIds = User::where('email', '!=', 'admin@admin.com')->pluck('id')->toArray();

        foreach ($jobListings as $index => &$listing) {
            if ($index < 2) {
                $listing['user_id'] = $test_user_id;
            } else {
                $listing['user_id'] = $userIds[array_rand($userIds)];
            }



            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }
        DB::table('job_listings')->insert($jobListings);
    }
}
