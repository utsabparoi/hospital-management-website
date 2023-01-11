<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\backend\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_facilities = array(
            array('id' => '1','title' => 'ATM',             'description' => 'How all this mistaken idea denoucing pleasure and praisings pain
                                                    was born complete account expound.The Dietitian plans the diet based on the therapeutic needs of
                                                    the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '2','title' => 'Bed Category',    'description' => 'The Dietitian plans the diet based on the therapeutic needs of
                                                    the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '3','title' => 'Cafeteria',       'description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '4','title' => 'Blood Bank',      'description' => 'The Dietitian plans the diet based on the therapeutic needs of
            the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '5','title' => 'Medical Records', 'description' => 'How all this mistaken idea denoucing pleasure and praisings pain
                                                    was born complete account expound.The Dietitian plans the diet based on the therapeutic needs of
                                                    the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '6','title' => 'Pharmacy',        'description' => 'How all this mistaken idea denoucing pleasure and praisings pain
            was born complete account expound.The Dietitian plans the diet based on the therapeutic needs of
            the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '7','title' => 'Prayer Room',     'description' => 'The Dietitian plans the diet based on the therapeutic needs of
                                                    the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '8','title' => 'Car Parking',     'description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '9','title' => '24Hrs Ambulance Service', 'description' => 'How all this mistaken idea denoucing pleasure and praisings pain
            was born complete account expound.' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '10','title' => 'Discharge Protocol',             'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '11','title' => 'Vaccination Center',             'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '12','title' => 'In-Patient Services',    'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '13','title' => 'Mortuary',       'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '14','title' => 'In-Patient Visiting Hour',      'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '15','title' => 'ROP Clinic', 'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '16','title' => 'Optical Shop',        'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '17','title' => 'Central Sterile Supply Department (CSSD)',     'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '18','title' => 'Day Care',     'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '19','title' => 'Food & Beverage (F&B)', 'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '20','title' => 'Gift Corner',     'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),
            array('id' => '21','title' => 'Laundry Service',     'description' => '' , 'icon' => '', 'image' =>'' ,     'status' => 1),

        );

        foreach ($all_facilities as $key => $item) {
            Facility::firstOrCreate(
                [ 'id'                => $item['id'] ],
                [
                    'title'           => $item['title'],
                    'description'     => $item['description'],
                    'icon'            => $item['icon'],
                    'image'           => $item['image'],
                    'status'          => $item['status'],
                ]
            );
        }
    }
}
