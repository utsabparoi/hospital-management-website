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
            array('id' => '1','name' => 'Free Consultation', 'pkg_category' => 'Regular Health Screening', 'status' => 1),
            array('id' => '2','name' => 'Fast & Accurate Report', 'pkg_category' => 'Regular Health Screening', 'status' => 1),
            array('id' => '3','name' => 'Better Health Care', 'pkg_category' => 'Regular Health Screening', 'status' => 1),
            array('id' => '4','name' => 'Complimentary Breakfast', 'pkg_category' => 'Regular Health Screening', 'status' => 1),
            array('id' => '5','name' => 'Dedicated Customer Service', 'pkg_category' => 'Regular Health Screening', 'status' => 1),
            array('id' => '6','name' => 'Consultation with Physicion', 'pkg_category' => 'Regular Health Screening', 'status' => 1),
            array('id' => '7','name' => 'On Time Sample Collection', 'pkg_category' => 'Regular Health Screening', 'status' => 1),
            array('id' => '8','name' => 'Diet Consultancy', 'pkg_category' => 'Regular Health Screening', 'status' => 1),
            array('id' => '9','name' => 'On Time Sample Collection', 'pkg_category' => 'Home Health Screening', 'status' => 1),
            array('id' => '10','name' => 'Fast & Accurate Report', 'pkg_category' => 'Home Health Screening', 'status' => 1),
            array('id' => '11','name' => 'Online report view', 'pkg_category' => 'Home Health Screening', 'status' => 1),
            array('id' => '12','name' => 'Skilled Phlebotomist', 'pkg_category' => 'Home Health Screening', 'status' => 1),
            array('id' => '13','name' => 'Covid-19 negetive sample callector', 'pkg_category' => 'Home Health Screening', 'status' => 1),

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
