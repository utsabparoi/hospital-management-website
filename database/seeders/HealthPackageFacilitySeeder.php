<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\backend\HealthPackageFacility;

class HealthPackageFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $health_facilities = array(
            array('id' => '1','name' => 'Free Consultation', 'status' => 1),
            array('id' => '2','name' => 'Fast & Accurate Report', 'status' => 1),
            array('id' => '3','name' => 'Better Health Care', 'status' => 1),
            array('id' => '4','name' => 'Complimentary Breakfast', 'status' => 1),
            array('id' => '5','name' => 'Dedicated Customer Service', 'status' => 1),
            array('id' => '6','name' => 'Consultation with Physicion', 'status' => 1),
            array('id' => '7','name' => 'On Time Sample Collection', 'status' => 1),
            array('id' => '8','name' => 'Diet Consultancy', 'status' => 1),
            array('id' => '9','name' => 'On Time Sample Collection', 'status' => 1),
            array('id' => '10','name' => 'Fast & Accurate Report', 'status' => 1),
            array('id' => '11','name' => 'Online report view', 'status' => 1),
            array('id' => '12','name' => 'Skilled Phlebotomist', 'status' => 1),
            array('id' => '13','name' => 'Covid-19 negetive sample callector', 'status' => 1),

        );

        foreach ($health_facilities as $key => $item) {
            HealthPackageFacility::firstOrCreate(
                [ 'id'                => $item['id'] ],
                [
                    'name'           => $item['name'],
                    'status'          => $item['status'],
                ]
            );
        }
    }
}
