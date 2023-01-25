<?php

namespace Database\Seeders;

use App\Models\WebsiteInformationModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            WebsiteInformationSeeder::class,
            FacilitySeeder::class,
            SliderSeeder::class,
            NewsSeeder::class,
            DoctorInfoSeeder::class,
            DoctorDepartmentSeeder::class,
            HealthPackageFacilitySeeder::class,
            SocialLinkSeeder::class,
            HealthTestSeeder::class,
            AboutUsSeeder::class,
        ]);
        $this->call([
            UserSeeder::class,
        ]);
    }
}
