<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hospital\BloodType;
use App\Models\Inventory\BloodComponent;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(DonorSeeder::class);
        // User::factory(10)->create();

         // Add blood types
         $bloodTypes = [
            'A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-', 'Oh+', 'Oh-'
        ];

        foreach ($bloodTypes as $type) {
            BloodType::firstOrCreate(['name' => $type]);
        }

        $bloodComponents = [
            'Whole Blood',
            'Single Donor Platelet',
            'Single Donor Plasma',
            'Sagm Packed Red Blood Cells',
            'Random Donor Platelets',
            'Platelet Rich Plasma',
            'Platelet Concentrate',
            'Plasma',
            'Packed Red Blood Cells',
            'Leukoreduced RBC',
            'Irradiated RBC',
            'Fresh Frozen Plasma',
            'Cryoprecipitate',
            'Cryo Poor Plasma',
        ];
        
        foreach ($bloodComponents as $component) {
            BloodComponent::firstOrCreate(['component' => $component]);
        }
    }
}
