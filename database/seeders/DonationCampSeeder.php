<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DonationCamp;

class DonationCampSeeder extends Seeder
{
    public function run()
    {
        DonationCamp::create([
            'location' => 'Colombo',
            'hbid' => 5,
            // 'organizer' => 'Red Cross',
            's_date' => now()->addDays(7),
        ]);

        DonationCamp::create([
            'location' => 'Kandy',
            'hbid' => 6,
            // 'organizer' => 'NHS',
            's_date' => now()->addDays(10),
        ]);
    }
}

