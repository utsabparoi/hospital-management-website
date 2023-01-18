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
            array('id' => '1','title' => '24Hrs Ambulance Service', 'description' => 'How all this mistaken idea denoucing pleasure and praisings pain
            was born complete account expound.' , 'icon' => '/frontend/lord-icon/ambulance.json', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '2','title' => 'Places of Worship',    'description' => 'There is a temple of Goddess Krishna mariamman in the hospital
            premises, a Namaz room & Prayer cell' , 'icon' => '/frontend/lord-icon/temple-mosque.json', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '3','title' => 'Special Nurse',       'description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s.' , 'icon' => '/frontend/lord-icon/special nurse.json', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '4','title' => 'Blood Bank',      'description' => 'The Dietitian plans the diet based on the therapeutic needs of
            the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '5','title' => 'Cafeteria', 'description' => 'How all this mistaken idea denoucing pleasure and praisings pain
                                                    was born complete account expound.The Dietitian plans the diet based on the therapeutic needs of
                                                    the patient, Local specialties, Continental.' , 'icon' => '/frontend/lord-icon/food.json', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '6','title' => 'Pharmacy',        'description' => 'How all this mistaken idea denoucing pleasure and praisings pain
            was born complete account expound.The Dietitian plans the diet based on the therapeutic needs of
            the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '7','title' => 'Prayer Room',     'description' => 'The Dietitian plans the diet based on the therapeutic needs of
                                                    the patient, Local specialties, Continental.' , 'icon' => '/frontend/lord-icon/prayer room.json', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '8','title' => 'Car Parking',     'description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s.' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '9','title' => 'ATM',             'description' => 'How all this mistaken idea denoucing pleasure and praisings pain
                                                    was born complete account expound.The Dietitian plans the diet based on the therapeutic needs of
                                                    the patient, Local specialties, Continental.' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '10','title' => 'Discharge Protocol',             'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '11','title' => 'Vaccination Center',             'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '12','title' => 'In-Patient Services',    'description' => '' , 'icon' => '/frontend/lord-icon/in-patient services.json', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '13','title' => 'Mortuary',       'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '14','title' => 'In-Patient Visiting Hour',      'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '15','title' => 'ROP Clinic', 'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '16','title' => 'Optical Shop',        'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '17','title' => 'Central Sterile Supply Department (CSSD)',     'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '18','title' => 'Day Care',     'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '19','title' => 'Food & Beverage (F&B)', 'description' => '' , 'icon' => '/frontend/lord-icon/food&bevarage.json', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '20','title' => 'Gift Corner',     'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),
            array('id' => '21','title' => 'Laundry Service',     'description' => '' , 'icon' => '', 'image' =>'/frontend/images/facility/large-3.jpg' ,     'status' => 1),

        );

        foreach ($all_facilities as $key => $item) {
            Facility::updateOrCreate(
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
