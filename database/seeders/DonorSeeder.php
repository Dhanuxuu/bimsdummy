<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class DonorSeeder extends Seeder
{
    public function run(): void
    {
        $faker      = Faker::create('en_US');
        $bloodTypes = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-', 'OH+', 'OH-'];
        $genders    = ['Male', 'Female', 'Other'];
        $diseases   = [
            'None', 'Hypertension', 'Diabetes', 'Asthma',
            'Thalassemia', 'Heart Disease', 'Allergies'
        ];
        $districts  = [
            'Colombo','Gampaha','Kalutara','Kandy','Galle','Matara',
            'Kurunegala','Anuradhapura','Ratnapura','Jaffna'
        ];

        for ($i = 1; $i <= 100; $i++) {
            // Birth date between 18 – 60 yrs ago
            
            $count = DB::table('donors')->count() + $i;
            $dob = $faker->dateTimeBetween('-60 years', '-18 years');
            $now = Carbon::instance($faker->dateTimeBetween('-2 years', 'now'));

            DB::table('donors')->insert([
                // 'id'          => $i,
                'first_name'  => $faker->firstName,
                'last_name'   => $faker->lastName,
                'nic'         => $this->generateNic($dob, $faker),
                'location'    => $faker->randomElement($districts),
                // 'donor_id'    => 'DN' . str_pad($i, 5, '0', STR_PAD_LEFT),
                'donor_id'    => 'DN' . str_pad($count, 5, '0', STR_PAD_LEFT),
                'contact_no'  => '0' . $faker->numberBetween(700000000, 799999999),
                'gender'      => $faker->randomElement($genders),
                'dob'         => $dob->format('Y-m-d'),
                'blood_type'  => $faker->randomElement($bloodTypes),
                'weight'      => $faker->numberBetween(50, 110), // kg
                'diseases'    => $faker->randomElement($diseases),
                'created_at'  => $now,
                'updated_at'  => $now,
            ]);
        }
    }

    /**
     * Quick‑and‑dirty Sri Lankan NIC generator (12‑digit format).
     * Format: YYYYMMDD#### where #### is a random serial.
     */
    private function generateNic(\DateTimeInterface $dob, $faker): string
    {
        $serial = str_pad($faker->numberBetween(0, 9999), 4, '0', STR_PAD_LEFT);
        return $dob->format('Ymd') . $serial;
    }
}
